<?php

    include 'conexion_db.php';

    $id_grupo = $_GET['id_grupo'];
    $id_usuario = $_GET['id_usuario'];

    $query = "DELETE FROM usuarios_de_grupo WHERE (id_usuario = $id_usuario) and (id_grupo = $id_grupo)";

     
    $execute = mysqli_query($conexion, $query);
          
    if($execute){
        echo '
            <script>
                alert("Se desasigno correctamente del grupo")
                window.location = "../main/grupos.php";
            </script>';

    }else{
        echo '
            <script>
                alert("Error no se ejecuto el DELETE correctamente")
            </script>';
    }

    mysqli_close($conexion);
    
?>