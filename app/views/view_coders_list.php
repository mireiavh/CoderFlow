<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Coders</title>
</head>
<body>
    <a href="/proyectos/coderflow/public/coders/create"><button>Crear coder</button></a>
    <h2>Lista de Coders</h2>
        <ul>
            <?php foreach($results as $result): ?>
                <li>
                    <span><?= $result["nombre"]?></span>
                    <span><?= $result["apellidos"]?></span>
                    <span><?= $result["localidad"]?></span>
                    <span><?= $result["estado"]?></span>
                    <a href="/proyectos/coderflow/public/coders/<?=$result["identificador"]?>"><button>Ver Coder</button></a>
                    
                </li>
            <?php endforeach;?>
        </ul>
            

</body>
</html>