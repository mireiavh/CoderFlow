<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Promociones</title>
</head>
<body>
    <a href="/proyectos/coderflow/public/promos/create"><button>Crear promoción</button></a>
    <a href="/proyectos/coderflow/public/coders"><button>Ver todos coders</button></a>
    <h2>Lista de Promociones</h2>
        <ul>
            <?php foreach($results as $result): ?>
                <li>
                    <span><?= $result["nombre_promo"]?></span>
                    <span><?= $result["stack"]?></span>
                    <span><?= $result["fecha_inicio"]?></span>
                    <span><?= $result["fecha_fin"]?></span>
                    <span><?= $result["formador"]?></span>
                    <span><?= $result["coformador"]?></span>
                    <span><?= $result["rp"]?></span>
                    <a href="/proyectos/coderflow/public/promos/show/<?=$result["identificador"]?>"><button>Ver Promoción</button></a>
                    <a href="/proyectos/coderflow/public/promos/filter/<?=$result["identificador"]?>"><button>Ver Coders</button></a>

                </li>
            <?php endforeach;?>
        </ul>
            

</body>
</html>