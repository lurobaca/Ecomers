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
                                    <?php if (isset($_REQUEST['c'])){
                                        if($_REQUEST['c']=="bsppae"){?>
                                    <li><a href="?c=bscvai" class="text-white">Continuar con mi Pedido</a></li>
                                        <?php }else{?>
                                    <li><a href="?c=bsppae" class="text-white">Terminar mi Pedido</a></li>
                                        <?php }}?>
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
