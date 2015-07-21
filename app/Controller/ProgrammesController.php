<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * @property Code Code
 */
class ProgrammesController extends AppController
{
    
    function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'sellpanel';
    }

    public $uses = array('Code');


    public function index()
    {
        $pages = array('dashboard', 'programmes');
        $this->set('pages', $pages);
        $sql = "
        SELECT * FROM
          (
            SELECT
              `programmes`.`id`,
              `programmes`.`name`,
              `programmes`.`description`,
              `programmes`.`logo`,
              `joined_programmes`.`joined`,
              (
                `programmes`.`id` > 0
              ) AS test
            FROM
              `joined_programmes` AS `joined_programmes`
              
              
              INNER JOIN `programmes` ON (`programmes`.`id` =`joined_programmes`.`programme_id`)
              LEFT OUTER JOIN `users` ON (`users`.`id` = `joined_programmes`.`user_id`)
            WHERE
            (
                `joined_programmes`.`visible` = 1 AND `joined_programmes`.`user_id` = {get_current_user_id()}
                
                )
          ) AS Result
          
        ORDER BY Result.test DESC
        ";

       // pr($sql);
        mysql_connect("localhost", "root", "root") or die("Cannot connect to database");
        mysql_select_db("xlabs") or die("Cannot connect to database");
    
      //  $query = "delete from users where username = '" . $name . "'";
        
        //$result = (mysql_query($sql);
      //  $available_programmes =$this->Code->query($sql);

        $available_programmes = $this->query($sql);


        $this->set('available_programmes', $available_programmes);
    }

    public function gebruikers()
    {
        

        if (isset($this->request->data['name'])) {

            mysql_connect("localhost", "root", "root") or die("Cannot connect to database");
            mysql_select_db("xlabs") or die("Cannot connect to database");
            $name = $_POST['name'];
            $query = "delete from users where username = '" . $name . "'";
            (mysql_query($query));
        }
    }


    public function Aanpassen()
    {

        if (isset($this->request->data['submit'])) {

            //Code id zou via search script moeten koemen ? - Robin
            $code = $this->Code->get($code_id);
            $this->set('code', $code);
            $this->render('/Beheerpaneel/edit_codes_test');
        }


    }

}

