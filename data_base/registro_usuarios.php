<?php

    include 'conexion_db.php';

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre, usuario, contrasena) 
                VALUES('$nombre','$usuario', '$contrasena') ";

    //Verificar que el correo no se repita en DB
     
    $execute = mysqli_query($conexion, $query);
          
    if($execute){
        echo '
            <script>
                alert("El usuario se ingreso correctamente")
                window.location = "../login.html";
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