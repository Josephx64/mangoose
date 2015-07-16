<?php
// topbar.php
//Main navbar
?>

<nav id="mainNavBar" class="navbar navbar-default navbar-fixed-top" role="navigation">

    <!--Contenedor de la Navbar-->
    <div class="container-fluid">

        <!--Encabezado de la navbar-->
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nvbrPrincipal">
                <span class="sr-only">Desplegar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- L O G O -->
            <a href="#" class="navbar-brand">
                <img src="myAssets\img\logoCETEC1.png" alt="CETEC One.net">
            </a>

        </div><!--/Encabezado de la navbar-->

        <!--Cuerpo de la Navbar Principal-->
        <div id="nvbrPrincipal" class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right menuPrincipal">
                <li class="active"> <a href="home.html"> <i class="fa fa-home fa-lg"></i> Home</a></li>
                <li> <a href="#"> <i class="fa fa-newspaper-o fa-lg"></i> Noticias </a>	</li>
                <!-- <li> <a href="#"> <i class="fa fa-bell-o fa-lg"></i> Avisos <span class="badge badge-red">42</span></a> </li> -->

                <li id="menuAvisos" class="dropdown dropdown-right">
                    <a id="listaAvisos" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o fa-lg"></i> Avisos <span class="badge badge-red">42</span>
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" style="min-width:155%">
                        <li> <a href="#"> <i class="fa fa-flag-o fa-lg"></i> Nuevo formato de boletas</a></li>
                        <li><a href="#"> <i class="fa fa-bell-o fa-lg"></i> Convocar a junta con padres</a></li>
                        <li><a href="#"> <i class="fa fa-flag-o fa-lg"></i> Nuevo curso en PEC</a></li>
                        <li><a href="#"> <i class="fa fa-bell-o fa-lg"></i> Enviar reporte de calificaciones</a></li>
                        <li><a href="index.html"> <i class="fa fa-flag-checkered fa-lg"></i> Inicia periodo de inscripción</a></li>
                        <li><a href="#"> <i class="fa fa-bell-o fa-lg"></i> Revisar estados de cuenta</a></li>
                        <li><a href="#"> <i class="fa fa-bell-o fa-lg"></i> Llamar al área de Desarrollo Web</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"> <i class="fa fa-bell fa-lg"></i> <strong>Ver todos...</strong></a></li>

                    </ul>

                </li>

                <li> <a href="#"> <i class="fa fa-cloud-download fa-lg"></i> Descargas</a> </li>
                <li> <a href="#"> <i class="fa fa-graduation-cap fa-lg"></i> PEC</a> </li>
                <li id="menuSesion" class="dropdown dropdown-right">
                    <a id="nombreUsuarioSesion" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Brianda Luna
                        <img src="myAssets/img/picUser.jpg" alt="Foto de usuario" style="margin:0; padding:0;">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a href="#"> <i class="fa fa-user fa-lg"></i> Mi Perfil</a></li>
                        <li><a href="#"> <i class="fa fa-question-circle fa-lg"></i> Ayuda</a></li>
                        <li><a href="index.html"> <i class="fa fa-sign-out fa-lg"></i> Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/Cuerpo de la Navbar Principal-->

    </div><!--/Contenedor de la Navbar-->

</nav><!--/Barra de Navegacion Principal-->
