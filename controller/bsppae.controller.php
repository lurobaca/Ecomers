<?php
include_once 'model/bsppaeModel.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BsppaeController
 * Acá se realiza todas las acciones que correpondan a PAgo de PEdidos
 * 
 * 
 * @author Administrator
 */
class BsppaeController {
    private $model;
    
    public function __CONSTRUCT() {
        $this->model = new bsppae();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/nav.php';
        require_once 'view/bsppae/bsppae.php';
        require_once 'view/footer.php';
    }

}
