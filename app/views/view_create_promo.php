<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/proyectos/CoderFlow/public/css/create_coder.css" rel="stylesheet">
    <link href="/proyectos/CoderFlow/public/css/folder_panel.css" rel="stylesheet">
    <title>CoderFlow_</title>
</head>

<header>
    <nav>
        <div class="nav_container">
        <div class="nav_tab nav_tab_1"></div>
        <div class="nav_tab nav_tab_2"></div>
        <div class="nav_tab nav_tab_3">Información de Promociones</div>
            </div> 
        </div>
    </nav>

</header>

<body>

    <section class="body_container">

        <section>
            <article>
                <div class="logo_container">
                    <img src="/proyectos/CoderFlow/src/assets/logo.png" alt="logo">
                </div>

                <div class="photo_container">
                    <img src="/proyectos/CoderFlow/src/assets/user_photo.png" alt="coder_photo" class="img_coder">
                </div>

                <div class="btn_container">
                    <div>
                        <a href = "/proyectos/coderflow/public/promos"><button class="btn_1">Volver</button></a>
                    </div>
                    
                    <div>
                        <?php if ($promo && !$edit):?>    
                        <a href="/proyectos/coderflow/public/promos/edit/<?=$promo['identificador']?>" >           
                            <button class="btn_2">Modificar</button>
                        </a>
                        
                        <a href="/proyectos/coderflow/public/promos/delete/<?=$promo['identificador']?>" >
                            <button class="btn_2">Eliminar</button>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

            </article>

            <form action="/proyectos/coderflow/public/promos<?= $promo? '/update/'.$promo['identificador']:'/create' ?>" method="POST">
                
                <section class="input_container">
                    
                    <label for="name_promo" class="name_label">Nombre de la Promoción</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="nombre_promo" class="input_form" value=<?= $promo? $promo['nombre_promo']:""?>><br><br>

                    <label for="stack" class="name_label">Stack</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="stack" class="input_form" value=<?= $promo? $promo['stack']:""?>><br><br>

                    <label for="start_date" class="name_label">Fecha de Inicio</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="fecha_inicio" class="input_form" value=<?= $promo? $promo['fecha_inicio']:""?>><br><br>

                </section>

                <section class="input_container_2">

                    <label for="end_date" class="name_label">Fecha de Finalización</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="fecha_fin" class="input_form" value=<?= $promo? $promo['fecha_fin']:""?>><br><br>

                    <label for="trainer" class="name_label">Formador@</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="formador" class="input_form" value=<?= $promo? $promo['formador']:""?>><br><br>

                    <label for="shaper" class="name_label">Coformador@</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="coformador" class="input_form" value=<?= $promo? $promo['coformador']:""?>><br><br>

                    <label for="pr" class="name_label">RP</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="rp" class="input_form" value=<?= $promo? $promo['rp']:""?>><br><br>
                
                </section>

                <?php if($promo && $edit):?>
                    <button type="submit" class="btn_2">Guardar cambios</button>
                <?php elseif($edit): ?>
                    <button type="submit" class="btn_2">Guardar</button>
                <?php endif; ?>
            </form>

        </section>

    </section>

</body>


</html>