<?php
    var_dump($_POST);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>práctica 3</title>
</head>

<body>

    <form action="" method="POST">
        <div>
            <label for="nombre"></label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div>
            <label for="apellidos"></label>
            <input type="text" name="apellidos" id="apellidos">
        </div>

        <div>
            <label for="pais"></label>
            <select type="text" name="pais_id" id="pais_id">
                <option value="">Seleciona un pais</option>
                <option value="51">Peru</option>
                <option value="57">Colombia</option>
                <option value="52">Mexico</option>
            </select>
        </div>

        <div>
            <label for="edad"></label>
            <input type="number" name="edad" id="edad">
        </div>

        <div>
            <input type="checkbox" name="intereses[]" value="Viajes">
            <input type="checkbox" name="intereses[]" value="Compras">
            <input type="checkbox" name="intereses[]" value="Emprendimiento">
        </div>

        <div>
            <input type="radio" name="M">
            <input type="radio" name="F">
            <input type="radio" name="0">
        </div>

        <div>
            <label for="comentarios"></label>
            <textarea name="comentarios" id="comentarios"></textarea>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

</body>

</html>