<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Bourne Store</title>
        <link rel="shortcut icon" href="img/logoP.ico">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="dist/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }



            /*base code*/
            .animated {
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }
            .animated.infinite {
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;
            }
            .animated.hinge {
                -webkit-animation-duration: 2s;
                animation-duration: 2s;
            }
            /*the animation definition*/
            @-webkit-keyframes rubberBand {
                0% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
                30% {
                    -webkit-transform: scale3d(1.25, .75, 1);
                    transform: scale3d(1.25, .75, 1)
                }
                40% {
                    -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1)
                }
                50% {
                    -webkit-transform: scale3d(1.15, .85, 1);
                    transform: scale3d(1.15, .85, 1)
                }
                65% {
                    -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1)
                }
                75% {
                    -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1)
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
            }
            @keyframes rubberBand {
                0% {
                    -webkit-transform: scale3d(1, 1, 1);
                    -ms-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
                30% {
                    -webkit-transform: scale3d(1.25, .75, 1);
                    -ms-transform: scale3d(1.25, .75, 1);
                    transform: scale3d(1.25, .75, 1)
                }
                40% {
                    -webkit-transform: scale3d(0.75, 1.25, 1);
                    -ms-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1)
                }
                50% {
                    -webkit-transform: scale3d(1.15, .85, 1);
                    -ms-transform: scale3d(1.15, .85, 1);
                    transform: scale3d(1.15, .85, 1)
                }
                65% {
                    -webkit-transform: scale3d(.95, 1.05, 1);
                    -ms-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1)
                }
                75% {
                    -webkit-transform: scale3d(1.05, .95, 1);
                    -ms-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1)
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    -ms-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
            }
            .rubberBand {
                -webkit-animation-name: rubberBand;
                animation-name: rubberBand
            }

            .head{
                background-image: url("img/fondoB.png");
                background-size: 100%;
            }

            .bg-menu{
                background-color: #274152;
                color: #2F595F;
            }
            .text-clear{
                color: #2F595F;
            }

        </style>
        <!-- Custom styles for this template -->
        <link href="album.css" rel="stylesheet">
    </head>
    <body id="top">
        <div class="fixed-top">
            <header>
                <div class="collapse bg-menu" id="navbarHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-warning">Acerca de</h4>
                                <p class="text-white">Bienvenido a la tienda virtual de Bourne y CIA, donde puedes crear sus pedidos de una manera fácil y rápida en la comodidad de su hogar</p>
                            </div>  
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-warning">Ver</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-white">Mi Pedido</a></li>
                                    <li><a href="pago.php" class="text-white">Terminar mi Pedido</a></li>
                                    <li><a href="#" class="text-white">Contactos</a></li>
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
                                <span class="navbar-toggler-icon"></span>
                            </button> 
                        </div>
                    </div>
                </div>
            </header>
        </div>
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
                    <!--EJEMPLO CON COLUMNAS-->                    
                    <!--*************************************EJEMPLO CON COLUMNAS******************************************************************************************************************************    -->               

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Confort Mediano x10 (FILEminimizer).jpg">
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
                                                    <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Confort Mediano x10 (FILEminimizer).jpg"><hr>
                                                    <p>Precio: ‎₡5000</p><p>Disponibilidad: 12 unidades</p><p>Alguna descripción del producto para ver en que funciona</p></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Pants Mediano x10 (FILEminimizer).jpg">
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
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Pants Mediano x20 (FILEminimizer).jpg">
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
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Predoblado Pl x10 (FILEminimizer).jpg">
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
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Predoblado Pl x10 (FILEminimizer).jpg">
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
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Pants discreto black x10 (FILEminimizer).jpg">
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
                                <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="img/MPhoto/Tena Pants discreto x10 (FILEminimizer).jpg">
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
                                <img class="bd-placeholder-img card-img-top" width="300" height="100%" src="img/MPhoto/Tena Predoblado Pl x10 (FILEminimizer).jpg">
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
                </div>
            </div>
        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#top">Volver hacía arriba</a>
                </p>
                <p>Bourne y CIA 2020</p>
                <p>Costa Rica, Guanacaste, Cañas, Sandillal</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script>
                    $(document).ready(function () {
                        // Add smooth scrolling to all links
                        $("a").on('click', function (event) {

                            // Make sure this.hash has a value before overriding default behavior
                            if (this.hash !== "") {
                                // Prevent default anchor click behavior
                                event.preventDefault();

                                // Store hash
                                var hash = this.hash;

                                // Using jQuery's animate() method to add smooth page scroll
                                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                                $('html, body').animate({
                                    scrollTop: $(hash).offset().top
                                }, 800, function () {

                                    // Add hash (#) to URL when done scrolling (default click behavior)
                                    window.location.hash = hash;
                                });
                            } // End if
                        });
                    });
        </script>
    </body>
</html>