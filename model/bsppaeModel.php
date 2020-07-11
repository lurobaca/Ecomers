<?php

/*
 * Clase de Bourne Store PAgo de PEdido
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bsppae
 *
 * @author Administrator
 */
class bsppae {
    private $pdo;
    
    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
