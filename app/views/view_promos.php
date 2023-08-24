<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/proyectos/CoderFlow/public/css/create_coder.css" rel="stylesheet">
    <link href="/proyectos/CoderFlow/public/css/folder_panel_1.css" rel="stylesheet">
    <link href="/proyectos/CoderFlow/public/css/coders_list.css" rel="stylesheet">
    <title>Lista de Promociones</title>
</head>
<header>
    <nav>
        <div class="nav_container">
        <div class="nav_tab nav_tab_1"></div>
        <div class="nav_tab nav_tab_2"></div>
        <div class="nav_tab nav_tab_3">Información de Promo</div>
            </div> 
        </div>
    </nav>

</header>
<body>
    <section class="body_container">
        <a href="/proyectos/coderflow/public/promos/create"><button class="btn_cr_1">Crear</button></a>
        <a href="/proyectos/coderflow/public/coders"><button class="btn_cr_2">Lista Coders</button></a>
        <h2 class="h2">Lista de Promociones</h2>
        <div class="list">
            <ul class="ul">
                <?php foreach($results as $result): ?>
                    <div class ="li_container">
                        <li class ="li">
                            <span class="surname"><?= $result["nombre_promo"]?></span>
                            <span class="city"><?= $result["stack"]?></span>
                            <span class="name"><?= $result["fecha_inicio"]?></span>
                            <span class="name"><?= $result["fecha_fin"]?></span>
                            <span class="name"><?= $result["formador"]?></span>
                            <span class="name"><?= $result["coformador"]?></span>
                            <span class="name"><?= $result["rp"]?></span>
                            <a href="/proyectos/coderflow/public/promos/show/<?=$result["identificador"]?>"><button class="btn_cr_1">Ver</button></a>
                            <a href="/proyectos/coderflow/public/promos/filter/<?=$result["identificador"]?>"><button class="btn_cr_2">Ver Coders</button></a>
                        </li>
                    </div>
                <?php endforeach;?>
            </ul>
    </section>   
            

</body>
</html>