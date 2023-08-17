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

    <form action="" method="POST">
        
        <!--botón-->
        <input type="submit" value="Volver">
        <input type="submit" value="Guardar">

        <br><br>

        <section>
        <label for="id_coder">ID coder</label>
        <input type="text" name="id_coder" value="" required>

        <label for="age">Edad</label>
        <input type="text" name="age" value="" required><br><br>

        <label for="name">Nombre</label>
        <input type="text" name="name" value="" required><br><br>

        <label for="last_name">Apellidos</label>
        <input type="text" name="last_name" value="" required><br><br>

        <label>Género</label>
        <select name="gender" required>
            <option value="0"></option>
            <option value="1">Mujer</option>
            <option value="2">Hombre</option>
            <option value="3">Otros</option>
        </select><br><br>

        <label>Discapacidad</label>
        <select name="disability" required>
            <option value="0"></option>
            <option value="1">Sí</option>
            <option value="2">No</option>
            <option value="3">Pendiente</option>
        </select><br><br>

        <label for="documents">Documentos</label>
        <input type="text" name="documents" value="" required><br><br>

        </section>

        <section>

        <label for="dni_nief">DNI/NIEF</label>
        <input type="text" name="dni_nief" value="" required><br><br>

        <label for="email">eMail</label>
        <input type="text" name="email" value="" required><br><br>

        <label for="city">Localidad</label>
        <input type="text" name="city" value="" required><br><br>

        <label for="region">Region</label>
        <input type="text" name="region" value="" required><br><br>

        <label for="number_phone">Teléfono</label>
        <input type="text" name="number_phone" value="" required><br><br>

        <label for="status">Estado</label>
        <input type="text" name="status" value="" required><br><br>        
       
        </section>

    </form>
</body>
</html>