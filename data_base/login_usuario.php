<?php
    session_start();
    include 'conexion_db.php';


    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'
                            and contrasena = '$contrasena'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario']=$usuario;
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