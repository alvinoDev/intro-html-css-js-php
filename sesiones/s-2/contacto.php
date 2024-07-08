<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Página de contacto</h1>


    <?php 
        $pais = '';
        $n_habitantes = '';
        $capital = '';

        if(!empty($_POST)){
            var_dump($_POST);
            $pais = $_POST['pais'];
            $n_habitantes = $_POST['habitantes'] * 2;
            $capital = $_POST['capital'];
        }
    ?>

    <br>

    Pais: <?= $pais ?>
    Capital: <?= $capital ?>
    Habitantes: <?= $n_habitantes ?>

    <form action="" method="POST">

        <div>
            <label for="pais">País</label>
            <input type="text" name="pais" id="pais">
        </div>
        <div>
            <label for="capital">capital</label>
            <input type="text" name="capital" id="capital">
        </div>
        <div>
            <label for="habitantes">habitantes</label>
            <input type="number" name="habitantes" id="habitantes">
        </div>

        <button type="submit">Guardar</button>

    </form>
</body>
</html>