<?php


include_once 'model/bscvaiModel.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BscvaiController
 *
 * @author Administrator
 */
class BscvaiController {
    private $model;
    
    public function __CONSTRUCT() {
        $this->model = new bscvai();
    }
    
    public function Index() {
        require_once 'view/header.php';
        require_once 'view/nav.php';
        require_once 'view/bscvai/bscvai.php';
        require_once 'view/footer.php';
    }
}
