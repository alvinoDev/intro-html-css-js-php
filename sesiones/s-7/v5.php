
<?php

$entradas = array();

$entradas[] = array (
    'id'=> 1,
    'titulo'=> 'EL TITULO 1 DE MI BLOG',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$entradas[] = array (
    'id'=> 1,
    'titulo'=> 'EL TITULO 2 DE MI BLOG',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$entradas[] = array (
    'id'=> 1,
    'titulo'=> 'EL TITULO 3 DE MI BLOG',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$servicios = array();

$servicios[] = array (
    'id'=> 1,
    'titulo'=> 'SERVICIO 1',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$servicios[] = array (
    'id'=> 1,
    'titulo'=> 'SERVICIO 2',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$servicios[] = array (
    'id'=> 1,
    'titulo'=> 'SERVICIO 3',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$productos = array();

$productos[] = array (
    'id'=> 1,
    'titulo'=> 'PRODUCTO 1',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$productos[] = array (
    'id'=> 1,
    'titulo'=> 'PRODUCTO 2',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);

$productos[] = array (
    'id'=> 1,
    'titulo'=> 'PRODUCTO 3',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'imagen.jpg'

);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>v3 - semánticas</title>

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

    <header id="header">
        <div class="container">
            <h1 class="text-center mb-4 mt-4">Tiendita web</h1>
        </div>
    </header>

    <section class="container mb-2" id="blog-container">

        <header>
            <h1>Blog</h1>
        </header>
        <div class="row">

            <?php foreach($entradas as $item){ ?>
                <article class="col-md-12 blog">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="?p=blogpost&id=<?=$item['id']; ?>"><img src="<?=$item['imagen']; ?>" class="img-fluid" alt="<?=$item['titulo']; ?>" /></a>
                        </div>
                        <div class="col-md-9">
                            <h2><a href="?p=blogpost&id=<?=$item['id']; ?>"><?=$item['titulo']; ?></a></h2>
                            <p> <?=$item['descripcion']; ?> </p>
                            <a href="?p=blogpost&id=<?=$item['id']; ?>" class="btn btn-info float-right">Leer más</a>

                        </div>
                    </div>

                </article>
            <?php } ?>

        </div>

    </section>

    <section class="container mb-2" id="blog-container">

        <header>
            <h1>Servicios</h1>
        </header>
        <div class="row">

            <?php foreach($servicios as $item){ ?>
                <article class="col-md-12 blog">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="?p=blogpost&id=<?=$item['id']; ?>"><img src="<?=$item['imagen']; ?>" class="img-fluid" alt="<?=$item['titulo']; ?>" /></a>
                        </div>
                        <div class="col-md-9">
                            <h2><a href="?p=blogpost&id=<?=$item['id']; ?>"><?=$item['titulo']; ?></a></h2>
                            <p> <?=$item['descripcion']; ?> </p>
                            <a href="?p=blogpost&id=<?=$item['id']; ?>" class="btn btn-info float-right">Leer más</a>

                        </div>
                    </div>

                </article>
            <?php } ?>

        </div>

    </section>


    <section class="container mb-2" id="blog-container">

        <header>
            <h1>Productos</h1>
        </header>
        <div class="row">

            <?php foreach($productos as $item){ ?>
                <article class="col-md-12 blog">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="?p=blogpost&id=<?=$item['id']; ?>"><img src="<?=$item['imagen']; ?>" class="img-fluid" alt="<?=$item['titulo']; ?>" /></a>
                        </div>
                        <div class="col-md-9">
                            <h2><a href="?p=blogpost&id=<?=$item['id']; ?>"><?=$item['titulo']; ?></a></h2>
                            <p> <?=$item['descripcion']; ?> </p>
                            <a href="?p=blogpost&id=<?=$item['id']; ?>" class="btn btn-info float-right">Leer más</a>

                        </div>
                    </div>

                </article>
            <?php } ?>

        </div>

    </section>

    <footer id="footer">
        <div class="container">
            <p>Derechos reservados</p>
        </div>
    </footer>


</body>

</html>