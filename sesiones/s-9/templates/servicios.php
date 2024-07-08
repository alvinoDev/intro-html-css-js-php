
<?php

// $servicios = array();

// $servicios[] = array (
//     'id'=> 1,
//     'titulo'=> 'SERVICIO 1',
//     'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
//     'imagen'=> 'imagen.jpg'

// );

// $servicios[] = array (
//     'id'=> 1,
//     'titulo'=> 'SERVICIO 2',
//     'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
//     'imagen'=> 'imagen.jpg'

// );

// $servicios[] = array (
//     'id'=> 1,
//     'titulo'=> 'SERVICIO 3',
//     'descripcion' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus quisquam illo molestiae eaque repellat ipsum, pariatur dicta possimus porro consequuntur iure veritatis cumque consequatur. Quas ipsa in harum consequuntur a!',
//     'imagen'=> 'imagen.jpg'

// );

$server_name = "localhost:3307";
$user_name = "root";
$password = "queSITO8";
$dbname = "prueba_intro_html5";


//crear conexion
$conn = new mysqli($server_name, $user_name, $password, $dbname);

//verfiicar conexion
if($conn->connect_error) {
    die("Conexion Fallida: ". $conn->connect_error);
}

//Crear la consulta
$sql = "SELECT id, name, short_description, full_description, image
        FROM services";
$result = $conn->query($sql);

$servicios = array();

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $servicios[] = $row;
    }
}else {
    echo "0 resultados";
}


?>

<section class="container mb-2" id="blog-container">

    <header>
        <h1>Servicios</h1>
    </header>
    <div class="row">

        <?php foreach($servicios as $item){ ?>
            <article class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="?p=blogpost&id=<?=$item['id']; ?>"><img src="assets/uploads/<?=$item['image']; ?>" class="bd-placeholder-img card-img-top" alt="<?=$item['name']; ?>" /></a>

                    <div class="card-body">
                        <h2><a href="?p=blogpost&id=<?=$item['id']; ?>"><?=$item['name']; ?></a></h2>
                        <p class="card-text">
                        <?=$item['short_description']; ?>
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