<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'PHPExcel/PHPExcel');

/**
 * @property Department Department
 * @property Chapter Chapter
 * @property Code Code
 */
class ImportController extends AppController
{
    /* Make the new component available at $this->Import,
    as well as the standard $this->Session */
    public $components = array('Import', 'Session');

    public function searchTest()
    {
        $codes = $this->Code->find('all', array('conditions' => array('Code.code' => '0102000000')));

        foreach ($codes as $code) {
            $depth = $code['Parent'][0]['depth']; // Determine depth of $code

            // Loop through parents in $code (includes current $code)
            foreach ($code['Parent'] as $child) {
                $parentCode = $this->Code->get($child['parent_id']);

                for ($i = $depth; $i > $child['depth']; $i--) {
                    echo '-';
                }

                echo $parentCode['Code']['code'] . ' ' . $parentCode['Code']['description'] . ' (' . $parentCode['Code']['id'] . ' | parent)<br>';
            }

            // Loop through children in $code (includes current $code)
            foreach ($code['Child'] as $parent) {
                $childCode = $this->Code->get($parent['child_id']);

                if ($childCode['Code'] === $code['Code']) {
                    continue; // Skip current $code
                }

                for ($i = 0; $i < $depth + $parent['depth']; $i++) {
                    echo '-';
                }

                echo $childCode['Code']['code'] . ' ' . $childCode['Code']['description'] . ' (' . $childCode['Code']['id'] . ' | child)<br>';
            }
        }

        $this->autoRender = false;
    }

    private function _generateSearchQuery(&$string)
    {
        $return = '';
        $parts = explode(' ', $string);

        for ($i = 0; $i < count($parts); $i++) {
            $lEnd = ($i < count($parts) - 1) ? '+' : '';
            $return .= "((LENGTH(`Code`.`description`) - LENGTH(REPLACE(LOWER(`Code`.`description`), '{$parts[$i]}', ''))) / LENGTH('{$parts[$i]}')){$lEnd}";
        }

        return $return;
    }

    public function searchTest3($query)
    {
        $sql = "
SELECT * FROM
  (
    SELECT
      `Code`.`id`,
      `Code`.`parent_id`,
      `Code`.`chapter_id`,
      `Code`.`code`,
      `Code`.`description`,
      `Code`.`comment`,
      `Code`.`created`,
      `Code`.`modified`,
      (
        {$this->_generateSearchQuery($query)}
      ) AS test
    FROM
      `customsknowledge`.`codes` AS `Code`
    WHERE
      ({$this->_generateSearchQuery($query)}) > 0
  ) AS Result
ORDER BY Result.test DESC
        ";

        pr($sql);

        $result = $this->Code->query($sql);
        pr($result);
        $this->autoRender = false;
    }

    public function checkX($array)
    {

    }

    //SLW 21-06: Function to test inputstrings for permutation purposes
    public function stringTester($query)
    {
        $string = "";

        $parts = explode(' ', $query);

        foreach ($parts as $key => $part) {
            //      pr( $part);
        }


        /*   $numbers = array(1, 2, 3, 4);
           foreach ($numbers as $key => $number) {
               foreach ($numbers1 as $key => $number1) {
                   if ($number1 != $number) {
                       foreach ($numbers as $key => $number2) {
                           if ($number2 != $number1) {
                               foreach ($numbers as $key => $number3) {
                                   if ($number3 != $number2) {
                                       pr( $number. "kj" .$number1. "kj" .$number2. "kj" .$number3. "kj" );
                                   }
                               }
                           }
                       }
                   }
               }
           }
   */
        $numbers = array(1, 2, 3, 4);
        $endnumber = array();

        $numbers1 = array();

        $numbers2 = array();
        $numbers3 = array();
        //$numbers1 = array();

        foreach ($numbers as $key => $number) {
            $numbers1 = $numbers;
            unset($numbers1[$key]);
            //pr($numbers1);
            foreach ($numbers1 as $key => $number1) {
                $numbers2 = $numbers1;
                unset($numbers2[$key]);
                foreach ($numbers2 as $key => $number2) {
                    $numbers3 = $numbers2;
                    unset($numbers1[$key]);
                    foreach ($numbers3 as $key => $number3) {
                        array_push($endnumber, $number . $number1 . $number2 . $number3);
                    }
                }
            }


        }


        // pr(count($endnumber));

        $tArr = array();
        $fArr = array();
        //pr($tArr);
        for ($i = 0; $i < count($parts); $i++) {
            /*  $currentVal = $parts[$i];




              foreach ($variable as $key => $value) {
                  if ($i !== $j){

                  }

              }*/

            array_push($tArr, $i);

            for ($j = 0; $j < count($parts); $j++) {
                if (!in_array($j, $tArr)) {
                    //array_push($tArr, $j);
                    for ($k = 0; $k < count($parts); $k++) {
                        if (!in_array($k, $tArr)) {
                            //  array_push($tArr, $k);
                            for ($l = 0; $l < count($parts); $l++) {
                                if (!in_array($l, $tArr)) {
                                    //   array_push($tArr, $l);
                                    //pr($tArr);
                                    array_push($fArr, $parts[$i] . " " . $parts[$j] . " " . $parts[$k] . " " . $parts[$l]);

                                }
                            }
                        }
                    }
                }

            }
            $tArr = array();
        }

        // pr($fArr);


        $tArr = array();
        $fArr = array();
        //pr($tArr);
        for ($i = 0; $i < count($parts); $i++) {
            /*  $currentVal = $parts[$i];




              foreach ($variable as $key => $value) {
                  if ($i !== $j){

                  }

              }*/

            array_push($tArr, $i);

            for ($j = 0; $j < count($parts); $j++) {
                if ($j !== $i) {
                    //array_push($tArr, $j);
                    for ($k = 0; $k < count($parts); $k++) {
                        if ($k !== $i && $k !== $j) {
                            //  array_push($tArr, $k);
                            for ($l = 0; $l < count($parts); $l++) {
                                if ($l !== $i && $l !== $j && $l !== $k) {
                                    //   array_push($tArr, $l);
                                    //pr($tArr);
                                    array_push($fArr, $parts[$i] . " " . $parts[$j] . " " . $parts[$k] . " " . $parts[$l]);

                                }
                            }
                        }
                    }
                }

            }
            $tArr = array();
        }

        pr($fArr);


        //SLW 21-06: another test

        $tArr = array();
        $numbers = array(1, 2, 3, 4);
        $exeptions = array(1);
        $formulaResult = count($numbers);
        $tmpNumbers = array();
        $tmpInput = "";


        //SLW 21-06: permutation formula in the for
        // Original formula = n! == n0 * n1 * n2 etc.
        for ($i = count($numbers) - 1; $i > 0; $i--) {
            $formulaResult *= $i;

        }

        for ($i = 0; $i < $formulaResult; $i++) {
            for ($k = 0; $k < count($numbers); $k++) {
                for ($j = 0; $j < count($numbers); $j++) {
                    //          pr($j . "|" . $k);
                    $tmpInput .= $numbers[$k + ($j % 1)];
                }
                array_push($tArr, $tmpInput);
                $tmpInput = "";
            }


            $tmpNumbers = array();

            //if (!in_array($tmpNumber, $exeptions)) {
            //array_push($tArr, $tmpNumber);
            //  }
        }
        //   pr($tArr);


        /* for ($j = count($parts); $j > 0; $j--) {
             $and = '(';
             for ($k = 0; $k < $j; $k++) {
                 $and .= $parts[$k] . (($k < $j - 1) ? ' ' : '|');
             }
             $and .= ')';

             $stuff[] = $and;
         }

         pr( $stuff);*/
    }

    //SLW 21-06: New SQL search method
    public function searchTest2($query)
    {
        $parts = explode(' ', $query);

        $sql = <<<EOD
SELECT
    `Code`.`id`, `Code`.`parent_id`, `Code`.`chapter_id`, `Code`.`code`, `Code`.`description`, `Code`.`comment`, `Code`.`created`, `Code`.`modified`
FROM
    `customsknowledge`.`codes` AS `Code`
WHERE

EOD;

        /*
        1. Find the largest index k such that a[k] < a[k + 1]. If no such index exists, the permutation is the last permutation.
        2. Find the largest index l greater than k such that a[k] < a[l].
        3. Swap the value of a[k] with that of a[l].
        4. Reverse the sequence from a[k + 1] up to and including the final element a[n].
        */

        /*  foreach ($parts as $key => $part) {
              $and = '(';
              for ($k = 0; $k < $key; $k++) {
                  $and .= "(`Code`.`description` LIKE 1'%$part%')" . (($k < $key - 1) ? ' AND ' : ' ');
              }
              $and .= ')';

              $stuff[] = $and;
          }*/


        //SLW 21-06: querying the words
        for ($j = count($parts); $j > 0; $j--) {
            $and = '(';
            for ($k = 0; $k < $j; $k++) {
                $and .= "(`Code`.`description` LIKE '%$parts[$k]%')" . (($k < $j - 1) ? ' AND ' : ' ');
            }
            $and .= ')';

            $stuff[] = $and;
        }

        $tmp = '';
        $tmp2 = 'ORDER BY CASE ' . "\n";

        for ($i = 0; $i < count($stuff); $i++) {
            $tmp .= '   ' . $stuff[$i] . (($i < count($stuff) - 1) ? ' OR ' : '') . "\n";
            $tmp2 .= '    WHEN ' . $stuff[$i] . ' THEN ' . $i . " \n";
        }

        $tmp2 .= 'END';
        $sql .= $tmp . $tmp2;
        pr($sql);

        $test = $this->Code->query($sql);
        pr(count($test));
        pr($test);
        exit();
    }

    public function searchTest2145($query) {
        $sql = "
SELECT * FROM
  (
    SELECT
      `Code`.`id`,
      `Code`.`parent_id`,
      `Code`.`chapter_id`,
      `Code`.`code`,
      `Code`.`description`,
      `Code`.`comment`,
      `Code`.`created`,
      `Code`.`modified`,
      `CodeClosure`.`depth`,
      (
        {$this->_generateSearchQuery($query)}
      ) AS test
    FROM
      `customsknowledge`.`codes` `Code`
    INNER JOIN `customsknowledge`.`code_closures` AS `CodeClosure` ON (`CodeClosure`.`child_id`=`Code`.`id`)
    WHERE
      ({$this->_generateSearchQuery($query)}) > 0
  ) AS Result
ORDER BY Result.test DESC, Result.depth DESC
        ";

        //pr($sql);

        $result = $this->Code->query($sql);
        $this->set('result', $result);
        $this->render('/elements/results');
        pr($result);
        $this->autoRender = false;
    }

    public function importCustomsDuties($category = null, $id = null) {
        $this->Import->importCustomsDuties($category, $id);
    }

    public function excel(){
        $this->Import->excelImport();
    }



}




