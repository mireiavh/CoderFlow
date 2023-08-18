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
    <a href = "/coderflow/public/coders"><button>Volver</button></a>
    <br><br>

    <form action="/coderflow/public/coders/form" method="POST">
       <input type="hidden" name="method" value="post"> <!--anade key "method" con valor "post" para el router-->
        
        <?php if ($coder && !$edit):?>
            <button type="submit">Modificar</button>
            <button type="submit">Eliminar</button>
        <?php else: ?>
            <button type="submit">Guardar</button>
        <?php endif; ?>
        <br><br>
        <section>
            <label for="age">Edad</label>
            <input <?=$edit? '' : 'disabled'?> type="text" name="edad" value=<?= $coder? $coder['edad']:""?>><br><br>

            <label for="name">Nombre</label>
            <input <?=$edit? '' : 'disabled'?> type="text" name="nombre" value=""><br><br>

            <label for="last_name">Apellidos</label>
            <input <?=$edit? '' : 'disabled'?> type="text" name="apellidos" value=""><br><br>

            <label>Género</label>
            <select name="genero">
                <option value="0"></option>
                <option value="1">Mujer</option>
                <option value="2">Hombre</option>
                <option value="3">Otros</option>
            </select><br><br>

            <label>Discapacidad</label>
            <select name="certificado_discapacidad">
                <option value="0"></option>
                <option value="1">Sí</option>
                <option value="2">No</option>
                <option value="3">Pendiente</option>
            </select><br><br>

            <label for="documents">Documentos</label>
            <input type="text" name="documents" value=""><br><br>

        </section>

        <section>

        <label for="dni_nie">DNI/NIE</label>
        <input type="text" name="DNI" value=""><br><br>

        <label for="email">eMail</label>
        <input type="text" name="email" value="" ><br><br>

        <label for="city">Localidad</label>
        <input type="text" name="localidad" value=""><br><br>

        <label for="region">Provincia</label>
        <input type="text" name="provincia" value=""><br><br>

        <label for="number_phone">Teléfono</label>
        <input type="text" name="telefono" value=""><br><br>

        <label for="status">Estado</label>
        <input type="text" name="estado" value=""><br><br>        
       
        </section>
    </form>
</body>
</html>