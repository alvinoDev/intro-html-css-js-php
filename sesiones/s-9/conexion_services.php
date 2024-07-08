<?php

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

$entradas = array();

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $entradas[] = $row;
    }
}else {
    echo "0 resultados";
}

//Imprimir ewl arreglo de usuario
print_r($entradas);

//Cerrar la conexion
$conn->close();