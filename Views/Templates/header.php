<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panel Administrativo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ICON CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Main CSS-->
	<link href="<?php echo base_url; ?>Assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/datatables.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="<?php echo base_url; ?>Assets/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/main.css" rel="stylesheet" />
	<link href="<?php echo base_url; ?>Assets/css/estilos.css" rel="stylesheet" />
	<link href="<?php echo base_url; ?>Assets/css/style.css" rel="stylesheet" />
    
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/font-awesome.min.css">
</head>

<body class="container-fluid position-relative d-flex p-0">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo"  href="<?php echo base_url; ?>Configuracion/admin">BiblioSmart</a>
        <!-- Sidebar toggle button-->
         
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!--Notification Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">Libros no entregados.</li>
                    <div class="app-notification__content">
                        <li id="nombre_estudiante">
                            
                        </li>
                    </div>
                    <li class="app-notification__footer"><a href="<?php echo base_url; ?>Configuracion/libros" target="_blank">Generar Reporte.</a></li>
                </ul>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="#" id="modalPass"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url; ?>Usuarios/salir"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="<?php echo base_url; ?>Configuracion/admin" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">BiblioSmart</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url; ?>Assets/img/logo.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['nombre'] ?></h6>
                        <span><?php echo $_SESSION['usuario']; ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo base_url; ?>Configuracion/admin" class="nav-item nav-link active"><i class="bi bi-archive"></i>Tabla</a>
                    <div class="treeview">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="treeview"> <i class="fa fa-laptop me-2"></i>Libros<i class="treeview-indicator fa fa-angle-right"></i></a>
                        <div class="treeview-menu">
                            <a href="<?php echo base_url; ?>Autor" class="dropdown-item">Autor</a>
                            <a href="<?php echo base_url; ?>Editorial" class="dropdown-item">Editorial</a>
                            <a href="<?php echo base_url; ?>Libros" class="dropdown-item">Libros</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url; ?>Prestamos" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Prestamos</a>
                    <a href="<?php echo base_url; ?>Estudiantes" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Lectores</a>
                    <a href="<?php echo base_url; ?>Materia" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Generos</a>
                    <div class="treeview">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="treeview"> <i class="app-menu__icon fa fa-wrench"></i>Administración<i class="treeview-indicator fa fa-angle-right"></i></a>
                        <div class="treeview-menu">
                            <a class="dropdown-item" href="<?php echo base_url; ?>Usuarios"><i class="icon fa fa-user-o"></i> Usuarios</a>
                            <a class="dropdown-item" href="<?php echo base_url; ?>Configuracion"><i class="icon fa fa-cogs"></i> Configuración</a>
                        </div>
                    </div>
                    <div class="treeview">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="treeview"> <i class="far fa-file-alt me-2"></i>Reportes<i class="treeview-indicator fa fa-angle-right"></i></a>
                        <div class="treeview-menu">
                            <a href="<?php echo base_url; ?>Prestamos/pdf" class="dropdown-item">Libros Prestados</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    <main class="content">