<?php

/* Clase de Bourne Store CAtalogo VIrtual BSCVAI, aquí se edita la conexión con la base de datos y todos los procesos para la manipulación de los datos
 * 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bscvai
 *
 * @author Administrator
 */
class bscvai {

    private $pdo;
    
    public $ItemCode;
    public $codbarras;
    public $ItemName;
    public $existencia;
    public $lotes;
    public $Unidad;
    public $precio;
    public $PrchseItem;
    public $SellItem;
    public $InvntItem;
    public $AvgPrice;
    public $Price;
    public $frozenFor;
    public $SalUnitMsr;
    public $VATLiable;
    public $lote;
    public $U_Grupo;
    public $SalPackUn;
    public $FAMILIA;
    public $CATEGORIA;
    public $MARCA;
    public $CardCode;
    public $Disponible;
    public $U_Gramaje;
    public $DETALLE_1;
    public $LISTA_A_DETALLE;
    public $LISTA_A_SUPERMERCADO;
    public $LISTA_A_MAYORISTA;
    public $LISTA_A_2_MAYORISTA;
    public $PANALERA;
    public $SUPERMERCADOS;
    public $MAYORISTAS;
    public $HUELLAS_DORADAS;
    public $ALSER;
    public $COSTO;
    public $PRECIO_SUGERIDO;
    public $PuntosWeb;
    public $Ranking;
    
    public $filas;

    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM articulos");
            $stm->execute();
            
            $this->filas=$stm->rowCount();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
