<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/proyectos/CoderFlow/public/css/coder_form.css" rel="stylesheet">
    <link href="/proyectos/CoderFlow/public/css/folders_panel.css" rel="stylesheet">
    <title>CoderFlow_</title>
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
                        <a href = "/proyectos/coderflow/public/coders"><button class="btn_1">Volver</button></a>
                    </div>
                    
                    <div>
                        <?php if ($coder && !$edit):?>    
                        <a href="/proyectos/coderflow/public/coders/edit/<?=$coder['identificador']?>" >           
                            <button class="btn_2">Modificar</button>
                        </a>
                        
                        <a href="/proyectos/coderflow/public/coders/delete/<?=$coder['identificador']?>" >
                            <button class="btn_2">Eliminar</button>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

            </article>

            <form action="/proyectos/coderflow/public/coders<?= $coder? '/update/'.$coder['identificador']:'/create' ?>" method="POST">
                
                <section class="input_container">
                    
                    <label class="name_label">Edad</label>
                    <select <?=$edit? '' : 'disabled'?> name="edad" class="short_form">
                        <option value="0"></option>
                        <option value="1">18-29</option>
                        <option value="2">30-45</option>
                        <option value="3">46-65</option>
                        <option value="4">+65</option>
                    </select>
                    <br><br>
                    <label for="name" class="name_label">Nombre</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="nombre" class="input_form" value=<?= $coder? $coder['nombre']:""?>><br><br>

                    <label for="last_name" class="name_label">Apellidos</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="apellidos" class="input_form" value=<?= $coder? $coder['apellidos']:""?>><br><br>

                    <section class="group_container">
                        <label class="name_label">Género</label>
                        <select <?=$edit? '' : 'disabled'?> name="genero" class="short_form">
                            <option <?= $coder && $coder['genero']== 0? 'selected':''?>value="0"></option>
                            <option <?= $coder && $coder['genero']== 1? 'selected':''?>value="1">Mujer</option>
                            <option <?= $coder && $coder['genero']== 2? 'selected':''?>value="2">Hombre</option>
                            <option <?= $coder && $coder['genero']== 3? 'selected':''?>value="3">Otros</option>
                            <option <?= $coder && $coder['genero']== 4? 'selected':''?>value="4">Sin Especificar</option>
                        </select>
                        <br><br>

                        <label class="name_label">Discapacidad</label>
                        <select <?=$edit? '' : 'disabled'?> name="certificado_discapacidad" class="short_form">
                            <option <?= $coder && $coder['certificado_discapacidad']== 0? 'selected':''?> value="0"></option>
                            <option <?= $coder && $coder['certificado_discapacidad']== 1? 'selected':''?> value="1">Sí</option>
                            <option <?= $coder && $coder['certificado_discapacidad']== 2? 'selected':''?> value="2">No</option>
                            <option <?= $coder && $coder['certificado_discapacidad']== 3? 'selected':''?> value="3">Pendiente</option>
                        </select><br><br>
                    </section>

                    <label for="documents" class="name_label">Documentos</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="documentos" class="input_form" value=""><br><br>

                </section>

                <section class="input_container_2">

                    <label for="dni_nief" class="name_label">DNI/NIE</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="DNI" class="input_form" value=<?= $coder? $coder['DNI']:""?>><br><br>

                    <label for="email" class="name_label">eMail</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="email" class="input_form" value=<?= $coder? $coder['email']:""?>><br><br>

                    <label for="city" class="name_label">Localidad</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="localidad" class="input_form" value=<?= $coder? $coder['localidad']:""?>><br><br>

                    <label for="region" class="name_label">Comunidad autónoma</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="comunidad_autonoma" class="input_form" value=<?= $coder? $coder['comunidad_autonoma']:""?>><br><br>

                    <label for="number_phone" class="name_label">Teléfono</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="telefono" class="input_form" value=<?= $coder? $coder['telefono']:""?>><br><br>

                    <label for="status" class="name_label">Estado</label>
                    <input <?=$edit? '' : 'disabled'?> type="text" name="estado" class="input_form" value=<?= $coder? $coder['estado']:""?>><br><br>        
                
                </section>

                <?php if($coder && $edit):?>
                    <button type="submit" class="btn_2">Guardar cambios</button>
                <?php elseif($edit): ?>
                    <button type="submit" class="btn_2">Guardar</button>
                <?php endif; ?>
            </form>

        </section>

    </section>

</body>


</html>