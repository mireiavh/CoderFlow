<?php
use App\Controllers\Person_controller;
require "../../vendor/autoload.php";

$contr = new Person_controller;
$results = $contr -> index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Coders</title>
</head>
<body>
    <h2>Lista de Coders</h2>
        <ul>
            <?php foreach($results as $result): ?>
                <li>
                    <span><?= $result["nombre"]?></span>
                    <span><?= $result["apellidos"]?></span>
                    <span><?= $result["localidad"]?></span>
                    <span><?= $result["estado"]?></span>
                    <button type=submit>Ver Coder</button>
                </li>
            <?php endforeach;?>
        </ul>
            

</body>
</html>