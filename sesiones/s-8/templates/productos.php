
<?php

$productos = array();

$productos[] = array (
    'id'=> 1,
    'titulo'=> 'PRODUCTO 1',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'imagen'=> 'https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

);

$productos[] = array (
    'id'=> 1,
    'titulo'=> 'PRODUCTO 2',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'imagen'=> 'https://images.pexels.com/photos/2297961/pexels-photo-2297961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

);

$productos[] = array (
    'id'=> 1,
    'titulo'=> 'PRODUCTO 3',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'imagen'=> 'https://images.pexels.com/photos/4226806/pexels-photo-4226806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

);
?>


<section class="container mb-2" id="blog-container">

    <header>
        <h1>Productos</h1>
    </header>
    <div class="row">

        <?php foreach($productos as $item){ ?>
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