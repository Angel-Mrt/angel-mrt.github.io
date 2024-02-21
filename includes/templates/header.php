<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel Mrt | Portafolio</title>
    <link rel="icon" type="image/png" href="/portafolio/build/img/logo1.png">
    <link rel="stylesheet" href="/portafolio/build/css/app.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">



</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/portafolio/index.php">
                    <img src="/portafolio/build/img/logo1.png" alt="Logotipo ">
                </a>

                <div class="mobile-menu">
                    <img src="/portafolio/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">

                    <img src="/portafolio/build/img/bulbo.svg" class="dark-mode-boton" alt="Boton Modo Oscuro">
                    <nav class="navegacion">
                        <a href="#sobre_mi">Sobre Mi</a>
                        <a href="#tecnologias">Tecnologias</a>
                        <a href="#proyectos">Proyectos</a>
                        <a href="#contacto">Contacto</a>
                    </nav>
                </div>


            </div> <!--Barra-->
            <?php if ($inicio) { ?>
                <div class="heading">
                    <h1>Full Stack Developer</h1>
                </div>

            <?php } ?>
        </div><!---->
    </header>