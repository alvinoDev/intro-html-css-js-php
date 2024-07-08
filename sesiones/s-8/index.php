<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>BLOG - G1</title>

    <!-- Inicia Boostrap 4 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Termina Boostrap 4 -->

    <link rel="stylesheet" href="estilos2.css">

    <style>
        #cols2>div,
        #cols>div {
            border: 1px solid orange;
        }

        .blog {
            background-color: #E1E1E1;
            color: #272a3a;
            margin-bottom: 10px;
            padding: 1.5em;
            border-radius: 8px;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">TIENDITA WEB</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="?p=home">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=servicios">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=productos">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=blog">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=contact">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php 
    
        if(!isset($_GET['p'])){
            $pagina = 'home';
        } else {
            $pagina = $_GET['p'];
        }

        include('templates/' . $pagina . '.php');
    
    ?>

    <footer class="text-muted mt-4">
        <div class="container">
            <p class="float-right">
                <a href="#" class="btn btn-light">Ir Arriba</a>
            </p>
            <p>TIENDITA WEB © Todos los derechos reservados.</p>
        </div>
    </footer>


</body>

</html>