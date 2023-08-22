<?php

//include_once('../../database/Database_connection.php');
//include_once('../Controllers/Personas_controller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/coder_form.css" rel="stylesheet">
    <link href="../../public/css/navbar.css" rel="stylesheet">
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
                    <img src="../../src/assets/logo.png" alt="logo">
                </div>

                <div class="photo_container">
                    <img src="../../src/assets/user_photo.png" alt="coder_photo" class="img_coder">
                </div>

                <div class="btn_container">
                    <div>
                        <input type="submit" value="Volver" class="btn_1">
                    </div>
                    
                    <div>
                        <input type="submit" value="Modificar" class="btn_2">
                    </div>
                </div>

            </article>

            <form action="" method="POST">
                
                <section class="input_container">
                    <label for="id_coder" class="name_label">ID coder</label>
                    <input type="text" name="id_coder" value="" class="input_form" required>

                    <label class="name_label">Edad</label>
                    <select name="gender" class="short_form" required>
                        <option value="0"></option>
                        <option value="1">18-29</option>
                        <option value="2">30-45</option>
                        <option value="3">46-65</option>
                        <option value="4">+65</option>
                    </select><br><br>

                    <label for="name" class="name_label">Nombre</label>
                    <input type="text" name="name" value="" class="input_form" required><br><br>

                    <label for="last_name" class="name_label">Apellidos</label>
                    <input type="text" name="last_name" value="" class="input_form" required><br><br>

                    <section class="group_container">
                        <label class="name_label">Género</label>
                        <select name="gender" class="short_form" required>
                            <option value="0"></option>
                            <option value="1">Mujer</option>
                            <option value="2">Hombre</option>
                            <option value="3">Otro</option>
                            <option value="4">SIN (Sin especificar)</option>
                        </select><br><br>

                        <label class="name_label">Discapacidad</label>
                        <select name="disability" class="short_form" required>
                            <option value="0"></option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                            <option value="3">P (Pendiente de revisión)</option>
                        </select><br><br>
                    </section>

                    <label for="documents" class="name_label">Documentos</label>
                    <input type="text" name="documents" value="" class="input_form" required><br><br>

                </section>

                <section class="input_container_2">

                    <label for="dni_nief" class="name_label">DNI/NIEF</label>
                    <input type="text" name="dni_nief" value="" class="input_form" required><br><br>

                    <label for="email" class="name_label">eMail</label>
                    <input type="text" name="email" value="" class="input_form" required><br><br>

                    <label for="city" class="name_label">Localidad</label>
                    <input type="text" name="city" value="" class="input_form" required><br><br>

                    <label for="region" class="name_label">Region</label>
                    <input type="text" name="region" value="" class="input_form" required><br><br>

                    <label for="number_phone" class="name_label">Teléfono</label>
                    <input type="text" name="number_phone" value="" class="input_form" required><br><br>

                    <label for="status" class="name_label">Estado</label>
                    <input type="text" name="status" value="" class="input_form" required><br><br>        
                
                </section>

            </form>

        </section>

    </section>

</body>


</html>