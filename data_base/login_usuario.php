<?php
    session_start();
    include 'conexion_db.php';


    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usuario='$usuario'
                            and contrasena = '$contrasena'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario']=$usuario;
        while ($line = mysqli_fetch_array($validar_login, MYSQLI_ASSOC)) {
            $_SESSION["id_usuario2"]=$line["id_usuario"];
         }
     
        header("location: ../main/principal.php");
    } else {
        echo '
                <script>
                    alert("Este no esta registrado");
                    window.location = "../login.html";
                </script>
            ';
    }

?>