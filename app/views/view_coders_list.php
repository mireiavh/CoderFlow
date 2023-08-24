<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/proyectos/CoderFlow/public/css/create_coder.css" rel="stylesheet">
    <link href="/proyectos/CoderFlow/public/css/folder_panel_1.css" rel="stylesheet">
    <link href="/proyectos/CoderFlow/public/css/coders_list.css" rel="stylesheet">
    <title>Lista de Coders</title>
</head>
</head>

<header>
    <nav>
        <div class="nav_container">
        <div class="nav_tab nav_tab_1"></div>
        <div class="nav_tab nav_tab_2"></div>
        <div class="nav_tab nav_tab_3">Información de Coder</div>
            </div> 
        </div>
    </nav>

</header>
<body>
    <section class="body_container">
        <section class="input_container">
            <a href="/proyectos/coderflow/public/coders/create"><button class="btn_cr_1">Crear coder</button></a>
            <a href="/proyectos/coderflow/public/promos"><button class="btn_cr_2">Ver bootcamps</button></a>

            <h2 class="h2">Lista de Coders<?= $promo? ' ' .$promo['nombre_promo'] : '' ?></h2>
                
            <div class="list">
                <ul class="ul">
                    <?php foreach($results as $result): ?>
                        
                    <div class ="li_container">
                        <li class ="li">
                            <span class="name"><?= $result["nombre"]?></span>
                            <span class="surname"><?= $result["apellidos"]?></span>
                            <span class="city"><?= $result["localidad"]?></span>
                            <span class="status"><?= $result["estado"]?></span>
                            <span class="btn_list"><a href="/proyectos/coderflow/public/coders/show/<?=$result["identificador"]?>">
                            <button class="btn_cr_1">Ver Coder</button></a></span>
                            
                        </li>
                    </div>
                    <?php endforeach;?>
                </ul>
            </div>
        </section>
    </section>
            

</body>
</html>