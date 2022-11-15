<?php 

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: main/principal.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/1bb1b9f305.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="data_base/login_usuario.php" method="POST">
            <div class="grupo_input">
                <i class="fa-solid fa-user"></i>
                <input class="login_input" type="text" placeholder="Usuario" name="usuario">
            </div>
            <div class="grupo_input">
                <i class="fa-solid fa-lock"></i>
                <input class="login_input" type="password" placeholder="Password" name="contrasena">
            </div>
            <button class="boton_login">Ingresar</button>
            <p>Eres integrante?<a href="registro.html"> Registrate</a></p>
        </form>
    </div> 
</body>
</html>