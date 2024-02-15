<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>VUELOS RUBIO</title>
        <link rel="shortcut icon" href="./assets/images/logo.jpg" type="image/x-icon">
        <!-- Link to Bootstrap CSS library hosted on a CDN with integrity and crossorigin attributes -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css"/>
        <!-- link para favicons -->
        <script src="https://kit.fontawesome.com/3ed6284a33.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid container">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active nav__link" aria-current="page" href="index.php?controller=Vuelo&action=mostrarVuelos">Todos los vuelos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active nav__link" aria-current="page" href="index.php?controller=Pasaje&action=mostrarPasajes">Todos los Pasajes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active nav__link" aria-current="page" href="index.php?controller=Pasaje&action=mostrarMenuInsert">Insertar Pasaje</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <?php
            // Incluye el archivo frontcontroller.php
            include 'frontcontroller.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
