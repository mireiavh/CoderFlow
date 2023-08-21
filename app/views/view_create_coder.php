<?php

//include_once('../../database/Database_connection.php');
//include_once('../Controllers/Personas_controller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoderFlow_</title>
</head>
<header>
<nav>
    <div></div>
    <div>Home</div>
    <div>Nosotros</div>
    <div>Información de Coder</div>
    
</nav>
<br><br>
</header>
<body>

    <div>
        <img src="" alt="logo">
    </div>

    <div>
        <img src="" alt="foto de usuario">
    </div>

    <br><br>

     <!--botón-->
    <a href = "/proyectos/coderflow/public/coders"><button>Volver</button></a>
    <br><br>

    
        
        <?php if ($coder && !$edit):?>
            
            
            <form action="/proyectos/coderflow/public/coders/<?=$coder['identificador']?>" method="post">
                <input type="hidden" name="method" value="edit">
           
                <button type="submit">Modificar</button>
           </form>
            
            <form action="/proyectos/coderflow/public/coders/<?=$coder['identificador']?>" method="post">
                    <input type="hidden" name="method" value="delete">
                    <button type="submit">Eliminar</button>
            </form>
        <?php endif; ?>

        <form action="/proyectos/coderflow/public/coders<?= $coder? '/'.$coder['identificador']:'' ?>" method="POST">
            <input type="hidden" name="method" value="post"> 

         
        <?php if($coder && $edit):?>
            <button type="submit">Guardar cambios</button>
        <?php elseif($edit): ?>
             <?= $coder? '/'.$coder['identificador']:'' ?>
            <button type="submit">Guardar</button>
        <?php endif; ?>


        <br><br>
        <section>
            <label for="age">Edad</label>
            <input <?=$edit? '' : 'disabled'?> type="text" name="edad" value=<?= $coder? $coder['edad']:""?>><br><br>

            <label for="name">Nombre</label>
            <input <?=$edit? '' : 'disabled'?> type="text" name="nombre" value=<?= $coder? $coder['nombre']:""?>><br><br>

            <label for="last_name">Apellidos</label>
            <input <?=$edit? '' : 'disabled'?> type="text" name="apellidos" value=<?= $coder? $coder['apellidos']:""?>><br><br>

            <label>Género</label>
            <select <?=$edit? '' : 'disabled'?> name="genero">
                <option <?= $coder && $coder['genero']== 0? 'selected':''?>value="0"></option>
                <option <?= $coder && $coder['genero']== 1? 'selected':''?>value="1">Mujer</option>
                <option <?= $coder && $coder['genero']== 2? 'selected':''?>value="2">Hombre</option>
                <option <?= $coder && $coder['genero']== 3? 'selected':''?>value="3">Otros</option>
            </select><br><br>

            <label>Discapacidad</label>
            <select <?=$edit? '' : 'disabled'?> name="certificado_discapacidad">
                <option <?= $coder && $coder['certificado_discapacidad']== 0? 'selected':''?> value="0"></option>
                <option <?= $coder && $coder['certificado_discapacidad']== 1? 'selected':''?> value="1">Sí</option>
                <option <?= $coder && $coder['certificado_discapacidad']== 2? 'selected':''?> value="2">No</option>
                <option <?= $coder && $coder['certificado_discapacidad']== 3? 'selected':''?> value="3">Pendiente</option>
            </select><br><br>

            <label for="documents">Documentos</label>
            <input type="text" name="documents" value=""><br><br>

        </section>

        <section>

        <label for="dni_nie">DNI/NIE</label>
        <input <?=$edit? '' : 'disabled'?> type="text" name="DNI" value=""><br><br>

        <label for="email">eMail</label>
        <input <?=$edit? '' : 'disabled'?> type="text" name="email" value=<?= $coder? $coder['email']:""?> ><br><br>

        <label for="city">Localidad</label>
        <input <?=$edit? '' : 'disabled'?> type="text" name="localidad" value=<?= $coder? $coder['localidad']:""?>><br><br>

        <label for="region">Provincia</label>
        <input <?=$edit? '' : 'disabled'?> type="text" name="provincia" value=<?= $coder? $coder['provincia']:""?>><br><br>

        <label for="number_phone">Teléfono</label>
        <input <?=$edit? '' : 'disabled'?> type="text" name="telefono" value=<?= $coder? $coder['telefono']:""?>><br><br>

        <label for="status">Estado</label>
        <input <?=$edit? '' : 'disabled'?> type="text" name="estado" value=<?= $coder? $coder['estado']:""?>><br><br>        
       
        </section>
    </form>
</body>
</html>