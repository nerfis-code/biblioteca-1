<?php include "Views/Templates/header.php"; ?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Panel de Administración</h1>
    </div>
</div>
<div class="row g-4 pb-3">

    <div class="col-md-6 col-lg-3">
        <a href="<?php echo base_url; ?>Usuarios" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="icon fa fa-users fa-3x"></i>
            <div class="ms-3">
                    <p class="mb-2">Usuarios</p>
                    <h6 class="mb-0"><?php echo $data['usuarios']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="<?php echo base_url; ?>Libros" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-book fa-3x" aria-hidden="true"></i>
            <div class="ms-3">
                    <p class="mb-2">Libros</p>
                    <h6 class="mb-0"><?php echo $data['libros']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-lg-3">
        <a href="<?php echo base_url; ?>Autor" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
        <i class="bi bi-emoji-laughing-fill fa-2x"></i>
            <div class="ms-3">
                    <p class="mb-2">Autor</p>
                    <h6 class="mb-0"><?php echo $data['autor']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="<?php echo base_url; ?>Editorial" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
        <i class="bi bi-house fa-2x"></i>
            <div class="ms-3">
                    <p class="mb-2">Editorial</p>
                    <h6 class="mb-0"><?php echo $data['editorial']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-lg-3">
        <a href="<?php echo base_url; ?>Estudiantes" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="icon fa fa-users fa-3x"></i>
            <div class="ms-3">
                    <p class="mb-2">Lectores</p>
                    <h6 class="mb-0"><?php echo $data['estudiantes']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-lg-3">
        <a href="<?php echo base_url; ?>Prestamos" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
        <i class="bi bi-calendar-check-fill fa-2x"></i>
            <div class="ms-3">
                    <p class="mb-2">Prestamos</p>
                    <h6 class="mb-0"><?php echo $data['prestamos']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="<?php echo base_url; ?>Materia" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="icon fa fa-list-alt fa-3x"></i>
            <div class="ms-3">
                    <p class="mb-2">Generos</p>
                    <h6 class="mb-0"><?php echo $data['materias']['total'] ?></h6>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="<?php echo base_url; ?>Configuracion" class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="icon fa fa-cogs fa-3x"></i>
            <div class="ms-3">
                    <p class="mb-2">Configuracion</p>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Libros Disponibles</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <canvas class="embed-responsive-item" id="reportePrestamo"></canvas>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>