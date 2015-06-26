<?php

App::uses('AppModel', 'Model');

class Search extends AppModel {
 	public $name = 'Search';
    public function get()
    {
        $this->query("SELECT * FROM table;");
    }
}
