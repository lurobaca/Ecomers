

<?php
/*
 * GUI de Bourne Store CAtalogo VIrtual 
 */
$Lista = $this->model->Listar();
$artXPag = 12;

$numPag = $this->model->filas;

$pag = $numPag / $artXPag;

$totPag = ceil($pag);

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
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <!-- -->
                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/074018003.jpg">
                        <div class="card-body">
                            <p class="card-text">HERB UNGUENTO EL INDIO 260gr 1X12 [403122]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary" href="#" data-toggle="modal" data-target="#logoutModal">
                                        Ver
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                </div>
                                <small class="text-muted">0</small>
                            </div>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">HERB UNGUENTO EL INDIO 260gr 1X12 [403122]</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/074018003.jpg"><hr>
                                            <p>Precio: ‎₡5000</p><p>Disponibilidad: 12 unidades</p><p>Alguna descripción del producto para ver en que funciona</p></div>
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
                <!-- -->
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">FARMA VIRO-GRIPAL AM/DIA DISP 24s 1X1 [203825]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">ACETAMINOFEN GENFAR 500mg 100un [100019]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">ABRILL SUPERF ARCOTEN 230ml 1X12  [801005]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-danger">1</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">BRIDGE VAINILLA 10paq 300gr 1X24 [005836]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">BRIDGE AVELLANA 10paq 300gr 1X24 [005881]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">BRIDGE 100% SUGAR FREE VAIN 6paq 154.8gr 1X24</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">BRINKY MAX CHOCOLATE 12paq 408gr 1X24 [275165]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="300" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">CRAKENAS MULTICEREAL MIEL 6paq 192GR 1X12 [046758]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="300" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">CRAKENAS MULTICEREAL MIEL 6paq 192GR 1X12 [046758]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="300" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">CRAKENAS MULTICEREAL MIEL 6paq 192GR 1X12 [046758]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3 shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="300" height="100%" src="img/MPhoto/nofound.jpg">
                                        <div class="card-body">
                                            <p class="card-text">CRAKENAS MULTICEREAL MIEL 6paq 192GR 1X12 [046758]</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                                </div>
                                                <small class="text-muted">0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>

                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                    <li class="page-item "><a class="page-link" href="#">3</a></li>
                    <li class="page-item "><a class="page-link" href="#">4</a></li>
                    <li class="page-item "><a class="page-link" href="#">5</a></li>
                    

                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>

