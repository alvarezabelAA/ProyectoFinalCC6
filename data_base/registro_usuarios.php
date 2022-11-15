<?php

    include 'conexion_db.php';

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre, usuario, contrasena) 
                VALUES('$nombre','$usuario', '$contrasena') ";

    //Verificar que el correo no se repita en DB
    $verificacion = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificacion)>0){
        echo '
            <script>
                alert("Este Usuario ya esta en la base de datos, try again");
                window.location = "../registro.html";
            </script>
        ';
        exit();
    }


    $execute = mysqli_query($conexion, $query);
          
    if($execute){
        echo '
            <script>
                alert("El usuario se ingreso correctamente")
                window.location = "../login.php";
            </script>';
    }else{
        echo '
            <script>
                alert("Vuelva a intentarlo... No se registro")
                window.location = "../registro.html";
            </script>';
    }

    mysqli_close($conexion);
    
?>