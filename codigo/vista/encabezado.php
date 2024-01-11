<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/cd7314d904.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Proyecto-1B-CESW</title>
    </head>
    <body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item <?php echo $pagina == 'misAcciones' ? 'active': '' ; ?>"><a href="?pagina=misAcciones" class="nav-link">Mis acciones</a></li>
                <li class="nav-item"><a href="?pagina=registrarAccion" class="nav-link">Registrar acción</a></li>
            </ul>
        </header>