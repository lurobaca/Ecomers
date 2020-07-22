

<?php
/*
 * GUI de Bourne Store CAtalogo VIrtual 
 */
$Lista = $this->model->ListarTPag();
$artXPag = 12;

$numPag = $this->model->filas;

$pag = $numPag / $artXPag;

$totPag = ceil($pag);
$cont = 0;
?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <br>
            <br>
            <div data-anijs="if: mouseover, do: rubberBand animated"><div id="square" class="rubberBand animated"><img src="img/logoTrans.png" width="35%" height="35%"></div></div>
            <p class="lead text-muted">Compra fácil, rápido y sin complicaciones</p>
            <div id="square" class="rubberBand animated">
                <p>
                    <a href="#Productos" class="btn btn-warning my-2">Iniciar a comprar</a>
                    <a href="#" class="btn btn-secondary my-2">Necesito ayuda</a>
                </p>
            </div>
        </div>
        <script>
            // Tip: avoid this ton of code using AniJS ;)

            var element = $('#square');

            // when mouseover execute the animation
            element.mouseover(function () {

            // the animation starts
            element.toggleClass('rubberBand animated');

            // do something when animation ends
            element.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (e) {

            // trick to execute the animation again
            $(e.target).removeClass('rubberBand animated');

            });

            });
        </script>
    </section>
    <div class="album py-5 bg-light" id="Productos">
        <div class="container">

            <p>
                <a class="btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Filtrar artículos
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Buscar por descripción</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa el artículo a buscar">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categoría</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Salsas</option>
                            <option>Granos</option>
                            <option>Enlatados</option>
                            <option>Limpieza</option>
                            <option>Abrillantador</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Familia</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>Vegetales</option>
                            <option>Aderezo</option>
                            <option>Café</option>
                            <option>Confiteria</option>
                            <option>Formulas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Marcas</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>Olimpo</option>
                            <option>Banquete</option>
                            <option>Nevax</option>
                            <option>Vigui</option>
                            <option>Vanish</option>
                        </select>
                    </div>

                </form>
            </div>


            <!--EJEMPLO CON COLUMNAS-->                    
            <!--*************************************EJEMPLO CON COLUMNAS******************************************************************************************************************************    -->               

            <div class="row">
                <?php
                if ($numPag > 0) {
                    $page = false;

                    //examino la pagina a mostrar y el inicio del registro a mostrar
                    if (isset($_GET["pag"])) {
                        $page = $_GET["pag"];
                    }

                    if (!$page) {
                        $start = 0;
                        $page = 1;
                    } else {
                        $start = ($page - 1) * $artXPag;
                    }

                    foreach ($this->model->ListarPag($start, $artXPag) as $r):
                        if ($r->Disponible > 0) {
                            $cont++;
                            $modal = 'modal' . $cont;
                            ?>
                            <div class="col-md-3">
                                <div class="card mb-3 shadow-sm">
                                    <!-- -->
                                    <?php
                                    $pict = $this->model->Obtener($r->ItemCode);

                                    if (empty($pict)) {
                                        $pic = 'nofound';
                                    } else {
                                        $pic = $pict->nameFot;
                                    }
                                    ?>
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/<?php echo $pic ?>.jpg">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $r->ItemName; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-outline-secondary" href="#" data-toggle="modal" data-target="#<?php echo $modal ?>">
                                                    Ver
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                            </div>
                                            <small class="text-muted">0</small>
                                        </div>
                                        <!-- Logout Modal-->
                                        <div class="modal fade" id="<?php echo $modal ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $r->ItemName ?></h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/<?php echo $pic ?>.jpg"><hr>
                                                        <p>Precio: ‎₡<?php echo $r->LISTA_A_DETALLE ?></p><p>Disponibilidad: <?php echo $r->Disponible ?></p><p><?php echo $r->CardCode ?></p></div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- -->
                                </div>
                            </div>
                            <?php
                        }
                    endforeach;
                    ?>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php
                        if ($totPag > 1) {
                            $inicio = $totPag - 2;
                            if ($page == 1) {
                                $pag = $page;
                                $fin = $page + 2;
                            } else {
                                if ($page != $inicio) {
                                    $pag = $page - 1;
                                    $fin = $page + 1;
                                }else{
                                    $pag = $page - 1;
                                    $fin = $totPag;
                                }
                            }
                            if ($page != 1) {
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="?c=bscvai&pag=<?php echo ($page - 1) ?>&ri=&rf=" tabindex="-1" aria-disabled="true"><span aria-hidden="true">&laquo;</span></a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><span aria-hidden="true">&laquo;</span></a>
                                </li>
                                <?php
                            }
                            if ($page > 3) {
                                echo '<li class="page-item"><a class="page-link" href="?c=bscvai&pag=1">1</a></li>';
                                echo '<li class="page-item"><a class="page-link" href="">...</a></li>';
                            } else {
                                if ($page != 1) {
                                    echo '<li class="page-item"><a class="page-link" href="?c=bscvai&pag=1">1</a></li>';
                                }
                            }
                            if ($pag >= $inicio) {
                                $pag = $inicio;
                                $fin = $totPag;
                            }
                            for ($i = $pag; $i <= $fin; $i++) {
                                if ($page == $i) {
                                    echo '<li class="page-item active"><a class="page-link" href="#">' . $page . '</a></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="?c=bscvai&pag=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                            if ($page < $inicio) {
                                echo '<li class="page-item"><a class="page-link" href="">...</a></li>';
                                echo '<li class="page-item"><a class="page-link" href="?c=bscvai&pag=' . $totPag . '">' . $totPag . '</a></li>';
                            }
                            if ($page != $totPag) {
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="?c=bscvai&pag=<?php echo ($page + 1) ?>"><span aria-hidden="true">&raquo;</span></a>
                                </li>
                                <?php
                            } else {
                                ?><li class="page-item disabled">
                                    <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</main>

