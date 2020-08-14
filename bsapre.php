<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'model/database.php';
include_once 'model/bspbeoModel.php';
include_once 'model/bscvaiModel.php';
$model = new bspbeo();
$modelC = new bscvai();
$alm = new bspbeo();

if(isset($_REQUEST['q'])){
    $alm->pbIdUs=$_COOKIE['logBS'];
    $alm->pbCodArti=$_REQUEST['q'];
    $alm->pbCantidad=1;
    $model->Registrar($alm);
    
    $cant=0;
    $Total=0;
    foreach ($model->Listar() as $value):
        $cant=$value->pbCantidad+$cant;
        $Total=$Total+1;
    endforeach;
}
        
echo '<span id="txtHint">';
echo '<div class="fixed-top">';
echo '<header>';
            echo '<div class="collapse bg-menu" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-warning">Acerca de</h4>
                            <p class="text-white">Bienvenido a la tienda virtual de Bourne y CIA, donde puedes crear sus pedidos de una manera fácil y rápida en la comodidad de su hogar</p>
                        </div>  
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-warning">Ver</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white" data-toggle="modal" data-target="#pedido">Mi Pedido <span class="badge badge-danger">'.$cant.'</span></a></li>';
                                echo '<li><a href="?c=bsppae" class="text-white">Terminar mi Pedido</a></li>'; 
                                echo '<li><a href="#" class="text-white">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-menu shadow-sm">
                <div class="container d-flex justify-content-between">
                    <div id="square" class="rubberBand animated">
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                            <strong>Bourne</strong>
                        </a>
                    </div>
                    <div id="square" class="rubberBand animated">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-cart-arrow-down fa-1x "></span> <span class="badge badge-danger">'.$cant.'</span>
                        </button> 
                    </div>
                </div>
            </div>
        </header>
        </div>
        <!-- Modal-->
        <div class="modal fade" id="pedido" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mi Pedido</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">';
                        $ronda = 0;
                        foreach ($model->Listar() as $r):
                            $ronda = $ronda + 1;
                            $pict = $modelC->Obtener($r->pbCodArti);
                            $artInfo = $modelC->ObtenerArt($r->pbCodArti);
                            
                            $totPrecio=$r->pbCantidad*$artInfo->LISTA_A_DETALLE;
                            if (empty($pict)) {
                                $pic = 'nofound';
                            } else {
                                $pic = $pict->nameFot;
                            }
                            echo '
                            <div class="media">
                                <img src="img/MPhoto/'.$pic.'.jpg" class="align-self-center mr-3" alt="..." width="20%" height="20%">
                                    <div class="media-body">
                                        <b class="mt-0">'.$artInfo->ItemName.'</b>
                                        <div class="input-group">
                                            <input type="submit" class="form-control btn-danger" aria-label="Dollar amount (with dot and two decimal places)" value="Quitar">
                                            <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" value="'.$r->pbCantidad.'">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">₡</span>
                                                    <span class="input-group-text">'.$totPrecio.'</span>
                                                </div>
                                        </div>
                                    </div>
                            </div>';
                            if ($ronda == $Total) {
                                echo '<br>';
                            } else {
                                echo '<hr>';
                            }
                        endforeach;
                        echo '
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
</span>';

?>


