
<?php

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

?>

<section class="container mb-2" id="blog-container">

    <header>
        <h1>Servicios</h1>
    </header>
    <div class="row">

        <?php foreach($servicios as $item){ ?>
            <article class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="?p=blogpost&id=<?=$item['id']; ?>"><img src="<?=$item['imagen']; ?>" class="bd-placeholder-img card-img-top" alt="<?=$item['titulo']; ?>" /></a>

                    <div class="card-body">
                        <h2><a href="?p=blogpost&id=<?=$item['id']; ?>"><?=$item['titulo']; ?></a></h2>
                        <p class="card-text">
                        <?=$item['descripcion']; ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="?p=blogpost&id=<?=$item['id']; ?>" class="btn btn-info float-right">Leer más</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </article>
        <?php } ?>

    </div>

</section>