
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/brigadas2/vista/inicio" class="navbar-brand">SICAT</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                <!--pagina principal-->
                <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Inicio <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                <li><a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/brigadas2/vista/inicio"><i class="fa fa-search"></i>&nbsp;&nbsp;Buscar Escuela</a></li>
                </ul>
                </li>
                <!--fin pagina principal-->
                <!--reportes-->
                <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Reportes AM <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                <li><a href="almacen.php"><i class="fa fa-plus"></i>&nbsp;&nbsp;Crear Reporte</a></li>
                <li><a href="almacen.php"><i class="fa fa-list"></i>&nbsp;&nbsp;Lista  Reportes</a></li>
                </ul>
                </li>
                <!-- fin reportes-->

                <!--conectividad-->
                <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Conectividad<span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                <li><a href="almacen.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Reportes Visita</a></li>
                <li><a href="almacen.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Reportes Falla</a></li>
                </ul>
                </li>
                <!-- fin conectividad-->

                <!--conectividad-->
                <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Garantía<span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                <li><a href="almacen.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Garantia1</a></li>
                <li><a href="almacen.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Garantia2</a></li>
                </ul>
                </li>
                <!-- fin conectividad-->

                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                       <b> Bienvenido:</b>&nbsp;&nbsp;<?php echo $usuario; ?>
                       <input type="text" hidden name="name" id="name" value="<?php echo $usuario; ?>">
                    </li>
                    <li>
                        <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/brigadas2/vista/cerrarsesion.php">
                            <i class="fa fa-sign-out"></i> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        </div>
