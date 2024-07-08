
<?php

$entradas = array();

$entradas[] = array (
    'id'=> 1,
    'titulo'=> 'EL TITULO 1 DE MI BLOG',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'https://images.pexels.com/photos/808941/pexels-photo-808941.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

);

$entradas[] = array (
    'id'=> 1,
    'titulo'=> 'EL TITULO 2 DE MI BLOG',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'https://images.pexels.com/photos/3851073/pexels-photo-3851073.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

);

$entradas[] = array (
    'id'=> 1,
    'titulo'=> 'EL TITULO 3 DE MI BLOG',
    'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
    'imagen'=> 'https://images.pexels.com/photos/827517/pexels-photo-827517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

);
?>

<section class="container mb-2" id="blog-container">

    <header>
        <h1>Blog</h1>
    </header>
    <div class="row">

        <?php foreach($entradas as $item){ ?>
            <article class="col-md-12">
                
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="?p=blogpost&id=<?=$item['id']; ?>">
                            <img src="<?=$item['imagen']; ?>" class="img-fluid" alt="<?=$item['titulo']; ?>" />
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2>
                                <a href="?p=blogpost&id=<?=$item['id']; ?>"><?=$item['titulo']; ?></a>
                            </h2>
                            <p class="card-text">
                                <?=$item['descripcion']; ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="?p=blogpost&id=<?=$item['id']; ?>" class="btn btn-info float-right">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </article>
        <?php } ?>

    </div>

</section>