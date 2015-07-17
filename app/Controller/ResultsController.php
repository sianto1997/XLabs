<?php

App::uses('AppController', 'Controller');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ResultsController extends AppController {
	public $uses = array('Code');

	function beforeFilter() {
    	parent::beforeFilter();
        $this->layout = 'sellpanel';
  	}

    private function _generateSearchQuery(&$string) {
        $return = '';
        $parts = explode(' ', $string);

        for ($i = 0; $i < count($parts); $i++) {
            $lEnd = ($i < count($parts) - 1) ? '+' : '';
            $return .= "((LENGTH(`Code`.`description`) - LENGTH(REPLACE(LOWER(`Code`.`description`), '{$parts[$i]}', ''))) / LENGTH('{$parts[$i]}')){$lEnd}";
        }

        return $return;
    }

  public function index($query = null) {
  		
      //echo $this->request->data['searchinput'];
      $query = $this->params['url']['searchinput'];

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
      `xlabs`.`codes` AS `Code`
    WHERE
      ({$this->_generateSearchQuery($query)}) > 0
  ) AS Result
ORDER BY Result.test DESC
        ";

        //pr($sql);

        $result = $this->Code->query($sql);
        $this->set('query', $query);
        $this->set('result', $result);
        $this->render('/elements/results');
       // pr($result);
        //$this->autoRender = false;
  }

public function page($id = null) {

  //Get result
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
        `Code`.`id` = {$id}
      ) AS test
    FROM
    (
      `xlabs`.`codes` AS `Code`
      )
    WHERE
    (
      `Code`.`id` = {$id}
      )
  ) AS Result
ORDER BY Result.test DESC
        ";

        //pr($sql);

        $result = $this->Code->query($sql);

        //Find all parents (hierargy)

        //Chapters

        $result[0]['Result']['chapter_id'];
        $chapter_sql = "
SELECT * FROM
  (
    SELECT
      `Chapter`.`department_id`,
      `Chapter`.`code`,
      `Chapter`.`description`,
      `Chapter`.`created`,
      `Chapter`.`modified`,

      (
        `Chapter`.`id` = {$result[0]['Result']['chapter_id']}
      ) AS test
    FROM
    (
      `xlabs`.`chapters` AS `Chapter`
      )
    WHERE
    (
      `Chapter`.`id` = {$result[0]['Result']['chapter_id']}
      )
  ) AS Result
ORDER BY Result.test DESC
        ";
       // $result[0]['Result']['chapter_id'] = $this->Code->query($sql);
        $fRH = $result[0]['Result'];
        $finalResult = array(
          'code' => $fRH['code'],
          'description' => $fRH['description'],
          'comment' => $fRH['comment'],
          'created' => $fRH['created'],
          'modified' => $fRH['modified'],
          );

        $this->set('record', $finalResult);
        $this->set('chapters', $this->Code->query($chapter_sql));


        $regulations_sql = "
        SELECT * FROM
  (
    SELECT

      `Regulation`.`url`,
      `Regulation`.`code`,
      `Regulation`.`date_verdict`,
      `Regulation`.`date_start`,
      `Regulation`.`date_end`,
      `Regulation`.`status_id`,

      (
        `CD`.`code_id` = {$result[0]['Result']['id']}
        `Regulation`.`id` = {$result[0]['Result']['chapter_id']}
      ) AS test
    FROM
    (

      `xlabs`.`customs_duties` AS `CD`
      `xlabs`.`regulations` AS `Regulation`
      )
    WHERE
    (
        `CD`.`code_id` = {$result[0]['Result']['id']}
      `Regulation`.`id` = {$result[0]['Result']['chapter_id']}
      )
  ) AS Result
ORDER BY Result.test DESC
        ";


      //  $this->set('regulations', $this->Code->query($regulations_sql));

        $this->render('/elements/result');
  }

}
