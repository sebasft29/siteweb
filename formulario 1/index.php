<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<form method="post" autocomplete="off">
    <h2>BIENVENIDO</h2>

        <div class="input-group">

            <div class="input-container" >
                <input type="text" name="name" placeholder="nombre">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-container" >
                <input type="password" name="password" placeholder="contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="input-container" >
                <input type="email" name="correo" placeholder="correo">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-container" >
                <input type="tel" name="phone" placeholder="telefono">
                <i class="fa-solid fa-phone"></i>
            </div>
            <a href="#">terminos y condiciones</a>
            <input type="submit"name="send" class="btn" value="enviar" >
        </div>
</form>
    <?php
        include("send.php");
    ?>

</body>
</html>