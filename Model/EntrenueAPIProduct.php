<?php
class EntrenueAPIProduct extends AppModel {
    public $useDbConfig = 'entrenueProductSource';


    public function readAll(){


    }


    public function insert(){

        $this->loadModel('EntrenueProducts');

        $data = $this->find('all',  array('conditions' => array('pagination' => 3)));

        $result = $this->EntrenueProducts->save($data);

        debug($result);

        


    }
}