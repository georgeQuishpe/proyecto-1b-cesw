<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="assets/css/estilos.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/cd7314d904.js" crossorigin="anonymous"></script>
        <script src="assets/js/funciones.js"></script>

        <title>Proyecto-1B-CESW</title>
    </head>
    <body>
        <header class="p-3 bg-gradiente">
            <div class="d-flex">
                <i class="fa-solid fa-hand-holding-dollar titulo"></i></a>
                <h1 class="mx-2 align-items-center text-decoration-none titulo">CapitalTrack</h1></a>
            </div>

            <div class="d-flex justify-content-around">

                <a href="https://github.com/georgeQuishpe/proyecto-1b-cesw">
                    <i class="align-items-center text-decoration-none icono m-0 fa-brands fa-github-alt"></i>
                </a>
            </div>
        </header>

        <div class="card card-80-percent m-5">
            <div class="card-body">
                <div class="d-flex justify-content-center p-0">
                    <ul class="nav nav-pills">
                        <li class="nav-item texto-secundario <?php echo $pagina == 'listarAcciones' ? 'active': '' ; ?>"><a href="?pagina=listarAcciones" class="nav-link">Mis acciones</a></li>
                        <li class="nav-item"><a href="?pagina=registrarAccion" class="nav-link">Registrar acción</a></li>
                    </ul>
                </div>