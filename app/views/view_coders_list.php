<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/proyectos/CoderFlow/public/css/coders_list.css" rel="stylesheet">
    <title>Lista de Coders</title>
</head>
<body>
    <a href="/proyectos/coderflow/public/coders/create"><button>Crear coder</button></a>
    <a href="/proyectos/coderflow/public/promos"><button>Ver bootcams</button></a>

    <h2>Lista de Coders<?= $promo? ' ' .$promo['nombre_promo'] : '' ?></h2>
        <ul class="ul">
            <?php foreach($results as $result): ?>
                
                <li class ="li">
                    <span><?= $result["nombre"]?></span>
                    <span><?= $result["apellidos"]?></span>
                    <span><?= $result["localidad"]?></span>
                    <span><?= $result["estado"]?></span>
                    <a href="/proyectos/coderflow/public/coders/show/<?=$result["identificador"]?>"><button>Ver Coder</button></a>
                    
                </li>
            <?php endforeach;?>
        </ul>
            

</body>
</html>