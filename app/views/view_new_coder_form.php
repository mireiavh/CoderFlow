<?php

//include_once('../../database/Database_connection.php');
//include_once('../Controllers/Personas_controller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/view_coder_form.css" rel="stylesheet">
    <title>CoderFlow_</title>
</head>

<header>
    <nav>
        <div class="nav_container_1">
        </div>
        <div class="nav_container_2">
        </div>
        <div class="nav_container_3">
        </div> 
    </nav>
</header>

<body>

    <section class="body_container">

        <section>
            <article>
                <div class="logo_container">
                    <img src="../../src/assets/logo.png" alt="logo">
                </div>

                <div class="photo_container">
                    <img src="../../src/assets/user_photo.png" alt="coder_photo" class="img_coder">
                </div>

                <!--botón-->
                <input type="submit" value="Volver" class="btn_1">
                <input type="submit" value="Modificar" class="btn_2">

            </article>

            <form action="" method="POST">
                
                <section>
                    <label for="id_coder">ID coder</label>
                    <input type="text" name="id_coder" value="" class="input_form" required>

                    <label for="age">Edad</label>
                    <input type="text" name="age" value="" class="input_form" required><br><br>

                    <label for="name">Nombre</label>
                    <input type="text" name="name" value="" class="input_form" required><br><br>

                    <label for="last_name">Apellidos</label>
                    <input type="text" name="last_name" value="" class="input_form" required><br><br>

                    <label>Género</label>
                    <select name="gender" class="input_form" required>
                        <option value="0"></option>
                        <option value="1">Mujer</option>
                        <option value="2">Hombre</option>
                        <option value="3">Otros</option>
                    </select><br><br>

                    <label>Discapacidad</label>
                    <select name="disability" class="input_form" required>
                        <option value="0"></option>
                        <option value="1">Sí</option>
                        <option value="2">No</option>
                        <option value="3">Pendiente</option>
                    </select><br><br>

                    <label for="documents">Documentos</label>
                    <input type="text" name="documents" value="" class="input_form" required><br><br>

                </section>

                <section>

                    <label for="dni_nief">DNI/NIEF</label>
                    <input type="text" name="dni_nief" value="" class="input_form" required><br><br>

                    <label for="email">eMail</label>
                    <input type="text" name="email" value="" class="input_form" required><br><br>

                    <label for="city">Localidad</label>
                    <input type="text" name="city" value="" class="input_form" required><br><br>

                    <label for="region">Region</label>
                    <input type="text" name="region" value="" class="input_form" required><br><br>

                    <label for="number_phone">Teléfono</label>
                    <input type="text" name="number_phone" value="" class="input_form" required><br><br>

                    <label for="status">Estado</label>
                    <input type="text" name="status" value="" class="input_form" required><br><br>        
                
                </section>

            </form>

        </section>

    </section>

</body>


</html>