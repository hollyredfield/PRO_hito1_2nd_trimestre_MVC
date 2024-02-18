<?php
// Requerir una vez el archivo "encabezado.php" ubicado en la carpeta "vistas\plantillas"

require_once "vistas\plantillas/encabezado.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solocrossfit</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">solocrossfit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="crear_usuario.php">Añadir Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buscar.php">Buscar Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vistas/usuarios/eliminar.php">Eliminar Usuarios</a>
                </li>
                <li>
                    <a class="nav-link" href="vistas/usuarios/modificar.php">Actualizar Usuarios </a>
                </li>
                <li>
                    <a class="nav-link" href="vistas/usuarios/mostrar_usuarios.php">Mostrar Usuarios</a>
                </li>
                <li>
                    <a class="nav-link" href="/solocrossfit/vistas/eventos/anadir.php">Añadir Evento</a>
                </li>
                <li>
                    <a class="nav-link" href="/solocrossfit/vistas/eventos/buscar.php">Buscar Usuario Evento</a>
                </li>
                <li>
                    <a class="nav-link" href="/solocrossfit/vistas/eventos/eliminar.php">Eliminar Usuario Evento</a>
                </li>
                <li>
                    <a class="nav-link" href="/solocrossfit/vistas/eventos/modificar.php">Actualizar Usuario Evento</a>
                </li>
                <li>
                    <a class="nav-link" href="/solocrossfit/vistas/eventos/mostrar.php">Mostrar Eventos</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php require_once "vistas\plantillas/footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>