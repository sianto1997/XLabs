<?php
App::uses('Component', 'Controller');
App::uses('AppController', 'Controller');
App::import('Vendor', 'PHPExcel/PHPExcel');

/**
 * @property Department Department
 * @property Chapter Chapter
 * @property Code Code
 */
class ImportComponent extends Component
{
//    public $uses = array('Status', 'Regulation', 'Code', 'Department', 'Chapter', 'CustomsDuty', 'Country');

    public function initialize(Controller $controller) {
        $this->Controller = $controller;

        $this->Status = ClassRegistry::init('Status');
        $this->Regulation = ClassRegistry::init('Regulation');
        $this->Code = ClassRegistry::init('Code');
        $this->Department = ClassRegistry::init('Department');
        $this->Chapter = ClassRegistry::init('Chapter');
        $this->CustomsDuty = ClassRegistry::init('CustomsDuty');
        $this->Country = ClassRegistry::init('Country');

        parent::initialize($controller);
    }

    private function _loadXML($url)
    {
        return simplexml_load_file($url);
    }

    public function importCustomsDuties($category = null, $id = null)
    {
        $this->Controller->autoRender = false;

        switch ($category) {
            case 'departments':
                $xml = $this->_loadXML('http://gebruikstarief.douane.nl');
                $result = array();
                $this->_saveDepartmentChapter($result, $xml->AFDELING, 0, array(), null);
                echo json_encode($result);
                break;
            case 'chapters':
                $xml = $this->_loadXML('http://gebruikstarief.douane.nl/h' . (($id < 10) ? '0' : '') . $id . '/posten');
                $chapter = $this->Chapter->get($id);
                $result = $this->_importChapters($xml, $chapter);
                echo json_encode($result);
                break;
            default:
                $this->Controller->autoRender = true;
        }
    }

    private function _importChapters(&$xml, $chapter)
    {
        $this->autoRender = false;

        $added = $skipped = 0;
        $parentIds = array();
        $previousLevel = -1;

        foreach ($xml->GOEDERENCODE as $goederencode) {
            $code = (string)$goederencode['GOEDERENCODE'];
            $level = intval($goederencode['AANTAL_STREEPJES']);
            $description = (string)$goederencode['BESCHRIJVING'];

            if ($level === 0) {
                $parentIds = array(); // "stack" leeg maken
            } elseif ($level > $previousLevel) {

            } else {
                $depth = $previousLevel - $level;
                $target = count($parentIds) - $depth;

                while (count($parentIds) > $target - 1 && !empty($parentIds)) {
                    array_pop($parentIds);
                }
            }

            $parentId = (!empty($parentIds)) ? $parentIds[count($parentIds) - 1] : null;
            $cd = $this->Code->find('first', array('conditions' => array('Code.code' => $code, 'Code.parent_id' => $parentId), 'recursive' => -1));
            $data = array(
                'id' => (!empty($cd)) ? $cd['Code']['id'] : null,
                'chapter_id' => $chapter['Chapter']['id'],
                'parent_id' => $parentId,
                'code' => $code,
                'description' => $description
            );

            $this->Code->create();
            if ($this->Code->save($data)) {
                array_push($parentIds, $this->Code->id);

                if (!empty($cd)) {
                    $skipped++;
                } else {
                    $added++;
                }
            }

            $previousLevel = $level;
        }

        return array('chapter' => $chapter['Chapter']['code'], 'added' => $added, 'updated' => $skipped);
    }

    /**
     * Recursively parse through XML, extract and save Department and Chapter data.
     *
     * @author Marcel de Vries
     *
     * @param array $out List of chapter ID's
     * @param SimpleXMLElement $root
     * @param int $index
     * @param array $data
     * @param int $parentId
     *
     * @return array
     */
    private function _saveDepartmentChapter(&$out, &$root, $index = 0, $data = array(), $parentId = null)
    {
        $code = intval($root[$index]['NUMMER']);
        $desc = (string)$root[$index]['BESCHRIJVING'];
        $tmp = array();

        if (count($root[$index]) === 0) {
            // AFDELING->HOOFDSTUKKEN->HOOFDSTUK
            $chapter = $this->Chapter->find('first', array('conditions' => array('Chapter.code' => $code), 'recursive' => -1));
            $tmp['code'] = $code;
            $tmp['description'] = $desc;
            $tmp['parent_id'] = $parentId;
            $tmp['id'] = (!empty($chapter)) ? $chapter['Chapter']['id'] : null;

            $this->Chapter->create();
            $this->Chapter->save($tmp);
            $out[] = $this->Chapter->id;

            $tmp['id'] = $this->Chapter->id;
        } else {
            $newRoot = $root[$index]->children();

            if (!empty($code) && !empty($desc)) {
                // AFDELING
                $department = $this->Department->find('first', array('conditions' => array('Department.code' => $code), 'recursive' => -1));
                $tmp['code'] = $code;
                $tmp['description'] = $desc;
                $tmp['id'] = (!empty($department)) ? $department['Department']['id'] : null;

                $this->Department->create();
                $this->Department->save($tmp);

                $tmp['id'] = $this->Department->id;
                $tmp[] = $this->_saveDepartmentChapter($out, $newRoot, 0, array(), $this->Department->id);
            } else {
                // AFDELING->HOOFDSTUKKEN
                $tmp = $this->_saveDepartmentChapter($out, $newRoot, 0, array(), $parentId);
            }
        }

        $data[] = $tmp;

        if ($index < $root->count() - 1) {
            return $this->_saveDepartmentChapter($out, $root, ++$index, $data, $parentId);
        } else {
            return $data;
        }
    }

    //SLW 15-06: Checks if there is ex in the string
    private function _exCheck($value)
    {
        if (strpos($value, 'ex') !== false || strpos($value, 'Ex') !== false) {
            return true;
        }
        return false;
    }

    //SLW 15-06: checks if there are only numbers in the string
    private function _validNumberCheck($value)
    {
        if (is_numeric($value)) {
            return true;
        }
        return false;
    }


    //SLW 15-06: Add all variables to the GNTable array
    // SLW 16-06: Now also checks countries, because of similarities.
    private function _tableCheck($array, $number)
    {
        $Table = $array;
        $tmpTable = array();
        //SLW 15-06: filters out the unique values and prints them
        if (count($Table) !== 0) {
            //SLW 15-06: Checking mechanism for all GN values
            foreach ($Table as $key => $value) {
                //SLW 16-06: Fix for two codes with an "en ", ","of" & "tot"
                $value = preg_replace("/(en|of|tot|-|,)/", "tmpsplit", $value);
                //SLW 15-06: filters out [spaces ]" ", ".", ")", "," to prevent accurrate numbers to be flagged inaccurate
                $value = preg_replace("/[ .)]/", "", $value);
                //SLW 15-06: removes ea (en andere)
                if ($number == true) {
                    $value = preg_replace("/(e.a.|ea|ea.|GN)/", "", $value);
                }
                if (strpos($value, 'tmpsplit') !== false) {
                    //SLW 16-06: Split values. Less expensive method
                    $tmpArray = explode('tmpsplit', $value);

                    foreach ($tmpArray as $key2 => $value2) {
                        //SLW 16-06: Fixes incomplete numbers
                        if ($number && strlen($value2) == 2) {
                            $lastKey = 1;

                            if ($key2 > 0 && strlen($tmpArray[$key2 - $lastKey]) < 2) {
                                pr($key2);
                                $lastKey = 2;
                            }
                            $value2 = substr($tmpArray[$key2 - $lastKey], 0, strlen($tmpArray[$key2 - $lastKey]) - strlen($value2)) . $value2;
                        }

                        //SLW 16-06: check+add to GNTable
                        if ($number && !$this->_exCheck($value2) && $this->_validNumberCheck($value2) && strlen($value2) !== 0 || !$number) {
                            if ($number) {
                                $value2 = str_pad($value2, 10, "0", STR_PAD_RIGHT);

                            }

                            array_push($tmpTable, $value2);
                        }

                    }
                } else {
                    if ($number && !$this->_exCheck($value) && $this->_validNumberCheck($value) && strlen($value) !== 0 || !$number) {
                        if ($number) {
                            $value = str_pad($value, 10, "0", STR_PAD_RIGHT);
                        }
                        array_push($tmpTable, $value);
                    }
                }


                //TODO: create fix for "34060011, ex 34060019en ex 34060090 (Taric-codes 3406001190, 3406001990en 3406009090)"
            }


            //SLW 15-06: Remove the doubles
            $tmpTable = array_unique($tmpTable);
        }
        return $tmpTable;
    }

    //SLW 17-06: Classificatie + risico-sheet
    private function _importCR(&$excelFile)
    {
        //Excel Columns

        $GNTable = array();

        $worksheet = $excelFile->getSheetByName('classificatie - risico');
        $worksheetTitle = $worksheet->getTitle();
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = 'O';
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
       // echo '<br>' . $worksheetTitle . '<table border="1"><tr>';
        for ($row = 2; $row <= $highestRow; ++$row) {
           // echo '<tr>';

            //ZUJA 17-06: moet foreach worden
            for ($col = 3; $col < $highestColumnIndex; ++$col) {
                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                $val = $cell->getValue();
                $isDate = PHPExcel_Shared_Date::isDateTime($cell);


                //ZUJA 17-06: in eigen functie
                if ($col == CR::$IN_DATUM || $col == CR::$EIND_DATUM) {
                    $val = date('d-m-Y', PHPExcel_Shared_Date::ExcelToPHP($val));
                } //ZUJA 17-06: in eigen functie
                else if ($col == CR::$GS_POST_1 || $col == CR::$GS_POST_2 || $col == CR::$GN_CODE_1 || $col == CR::$GN_CODE_2 || $col == CR::$CODE_BESL || $col == CR::$ACTUELE_CODE) {
                    if ($val != NULL) {
                        array_push($GNTable, $val);
                    }
                    $val = NULL;
                }

                if ($val) {
                  //  echo '<td>' . $val . '</td>';
                }

            }

           // $GNTable = $this->_tableCheck($GNTable, true);
           // echo '<td>' . print_r($GNTable, true) . '</td>';
            //  $this->_saveComment($GNTable, $worksheet->getCellByColumnAndRow(CR::$UITGEBR_OMSCHR, $row)->getValue());
            $GNTable = array();

          //  echo '</tr>';
        }
      //  echo '</table>';
    }

    //SLW 17-06: ADH-sheet
    private function _importADH(&$excelFile)
    {

        $worksheet = $excelFile->getSheetByName('ADH');
        $worksheetTitle = $worksheet->getTitle();
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = 'O';
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        //echo '<br>'. $worksheetTitle .'<table border="1"><tr>';
        ini_set('max_execution_time', '500');
        //SLW 15-06: initializer of the GN- (codes)
        $GNTable = array();
        $CountryTable = array();
        $dateVerdict;
        $dateIN;
        $dateOUT;
        $description;
        $status;
        $regulationCode;
        $regulationURL;

        $statusTime = 0;
        $commentTime = 0;
        $linkTime = 0;

        $dataSource = $this->CustomsDuty->getDataSource();
        $dataSource2 = $this->Code->getDataSource();
        $dataSource->begin();
        $dataSource2->begin();

        $timepre = microtime(true);
        for ($row = 2; $row <= $highestRow; ++$row) {

            $dateIN = date('d-m-Y', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(ADH::$IN_DATUM, $row)->getValue()));
            $dateOUT = date('d-m-Y', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(ADH::$EIND_DATUM, $row)->getValue()));

            array_push($GNTable, $worksheet->getCellByColumnAndRow(ADH::$GS_POST_1, $row)->getValue());
            array_push($GNTable, $worksheet->getCellByColumnAndRow(ADH::$GS_POST_2, $row)->getValue());
            array_push($GNTable, $worksheet->getCellByColumnAndRow(ADH::$GN_CODE_1, $row)->getValue());
            array_push($GNTable, $worksheet->getCellByColumnAndRow(ADH::$GN_CODE_2, $row)->getValue());

            array_push($CountryTable, $worksheet->getCellByColumnAndRow(ADH::$LAND_OORSPR, $row)->getValue());
            $CountryTable = $this->_tableCheck($CountryTable, false);

            array_push($GNTable, $worksheet->getCellByColumnAndRow(ADH::$UITGEBR_GCODE, $row)->getValue());
            $GNTable = $this->_tableCheck($GNTable, true);

            if ($worksheet->getCellByColumnAndRow(ADH::$BRON, $row)->hasHyperlink()) {
                $regulationURL = $worksheet->getCellByColumnAndRow(ADH::$BRON, $row)->getHyperlink()->getUrl();
            }

            if (PHPExcel_Shared_Date::isDateTime($worksheet->getCellByColumnAndRow(ADH::$DATUM_INBRENG, $row))) {
                $dateVerdict = trim($worksheet->getCellByColumnAndRow(ADH::$DATUM_INBRENG, $row)->getValue());
            }

            if ($dateVerdict !== NUll && $dateVerdict !== '') {
                $dateVerdict = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(ADH::$DATUM_INBRENG, $row)->getValue()));
            }


            $dateIN = $worksheet->getCellByColumnAndRow(ADH::$IN_DATUM, $row)->getValue();
            if ($dateIN !== NULL) {
                $dateIN = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($dateIN));
            }

            $dateOUT = $worksheet->getCellByColumnAndRow(ADH::$EIND_DATUM, $row)->getValue();
            if ($dateOUT !== NULL) {
                $dateOUT = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($dateOUT));
            }

            $status = $worksheet->getCellByColumnAndRow(ADH::$STATUS, $row)->getValue();

            $time_pre = microtime(true);
            $this->_saveStatuses($status);
            $time_post = microtime(true);
            $statusTime += $time_post - $time_pre;
            // }

            $regulationCode = $worksheet->getCellByColumnAndRow(ADH::$VERORD_CODE, $row)->getValue();

            $this->_importRegulations($regulationURL, $regulationCode, $dateVerdict, $dateIN, $dateOUT, $status);

            $time_pre = microtime(true);
            $this->_saveComment($GNTable, $worksheet->getCellByColumnAndRow(ADH::$UITGEBR_OMSCHR, $row)->getValue());
            $time_post = microtime(true);
            $commentTime += $time_post - $time_pre;
            $time_pre = microtime(true);
            $this->_createLink($GNTable, $CountryTable, $regulationCode);
            $time_post = microtime(true);
            $linkTime += $time_post - $time_pre;
            $GNTable = array();
        }

        $timepro = microtime(true);
        echo "<br>time before commit: " . ($timepro - $timepre) . "<br>";


        $dataSource->commit();
        $dataSource2->commit();

        echo "status time: " . $statusTime . "<br>comment time: " . $commentTime . "<br>link time: " . $linkTime;

        $this->Controller->autoRender = false;

    }

    private function _createLink($codeArray, $countrieArray, $regulationCode)
    {

        $codes = $this->Code->find('all', array('conditions' => array('Code.code' => $codeArray), 'recursive' => -1));
        $regulation = $this->Regulation->find('first', array('conditions' => array('Regulation.code' => $regulationCode), 'recursive' => -1));
        $countries = $this->Country->find('all', array('conditions' => array('Country.name' => $countrieArray), 'recursive' => -1));
        //  pr($countrieArray);
        //  pr($countries);
        if (count($regulation) > 0) {
            $regulationId = $regulation['Regulation']['id'];
            foreach ($codes as $key => $value) {
                $codeId = $value['Code']['id'];
                foreach ($countries as $_key => $country) {
                    if (count($country) !== NUll) {
                        $countryId = $country['Country']['id'];


                        $customDuty = array('CustomsDuty' => array(
                            'code_id' => $codeId,
                            'country_id' => $countryId,
                            'regulation_id' => $regulationId
                        ));


                        $this->CustomsDuty->create();

                        if (count($this->CustomsDuty->find('first', array('conditions' => array('CustomsDuty.code_id' => $codeId, 'CustomsDuty.country_id' => $countryId, 'CustomsDuty.regulation_id' => $regulationId), 'recursive' => -1))) <= 0) {
                            $this->CustomsDuty->save($customDuty);
                        }
                    }

                }

                echo '-';

                ob_flush();
                flush();
            }
        }
    }

    private function _saveComment($codeArray, $comment)
    {

        $codes = $this->Code->find('all', array('conditions' => array('Code.code' => $codeArray), 'recursive' => -1));
        foreach ($codes as $key => $value) {
            $value ['Code']['comment'] = utf8_decode($comment);
            $this->Code->create();
            $this->Code->Save($value);
            echo '-';

            ob_flush();
            flush();
        }
    }

    private function _saveStatuses($value)
    {
        if ($value != NULL) {
            $value = trim(ucwords(utf8_decode($value)));
            $status = array('Status' => array('name' => $value));
            if (count($this->Status->find('first', array('conditions' => array('Status.name' => $value)))) === 0) {
                $this->Status->create();
                $this->Status->save($status);
                echo '-';

                ob_flush();
                flush();
            }
        }
    }

    private function _importRegulations($url, $code, $date_verdict, $date_start, $date_end, $status)
    {

        $regulations = array();
        $status = $this->Status->find('first', array('conditions' => array('Status.name' => $status)));

        if ($status == NULL || $code == NULL) {
        } else {

            $status_id = $status["Status"]["id"];

            $regulation = array('Regulation' => array(
                'url' => $url,
                'code' => $code,
                'date_verdict' => $date_verdict,
                'date_start' => $date_start,
                'date_end' => $date_end,
                'status_id' => $status_id
            ));

            $this->Regulation->create();
            if (!$this->Regulation->hasAny(array('Regulation.code' => $regulation['Regulation']['code']))) {
                $this->Regulation->save($regulation);
            }
        }
        echo '-';

        ob_flush();
        flush();
    }

    public function excelImport()
    {

        $this->autoRender = false;

        $excelFile = PHPExcel_IOFactory::load("files/risicodatabase.xlsx");

        //SLW 17-06:Importing ADH
        $this->_importADH($excelFile);

        //SLW 17-06:Importing classificatie + risico
        $this->_importCR($excelFile);

    }
}

class ADH
{
    public static $VOLG_NR = 0;
    public static $DATUM_INBRENG = 1;
    public static $DATUM_UITSCHR = 2;
    public static $IN_DATUM = 3;
    public static $EIND_DATUM = 4;
    public static $GS_POST_1 = 5;
    public static $GS_POST_2 = 6;
    public static $GN_CODE_1 = 7;
    public static $GN_CODE_2 = 8;
    public static $LAND_OORSPR = 9;
    public static $UITGEBR_GCODE = 10;
    public static $UITGEBR_OMSCHR = 11;
    public static $STATUS = 12;
    public static $VERORD_CODE = 13;
    public static $BRON = 14;
}

class CR
{
    public static $VOLG_NR = 0;
    public static $IN_DATUM = 1;
    public static $EIND_DATUM = 2;
    public static $HOOFDSTUK1 = 3;
    public static $HOOFDSTUK2 = 4;
    public static $GS_POST_1 = 5;
    public static $GS_POST_2 = 6;
    public static $GN_CODE_1 = 7;
    public static $GN_CODE_2 = 8;
    public static $OMSCHR_GS_POST_1 = 9;
    public static $OMSCHR_GS_POST_2 = 10;
    public static $OMSCHR_GN_CODE_1 = 11;
    public static $OMSCHR_GN_CODE_2 = 12;
    public static $GOEDERENCODE_OMSCHR_BRON = 13;
    public static $SLEUTELWOORDEN = 14;
    public static $CODE_BESL = 15;
    public static $ACTUELE_CODE = 16;
    public static $SAMENV_BRON = 17;
    public static $DATUM_VERDICT = 18;
    public static $VERORD_CODE = 19;
    public static $BRON = 20;
}
