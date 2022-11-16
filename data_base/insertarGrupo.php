<?php

    include 'conexion_db.php';

    $nombre_grupo = $_POST['nombre_grupo'];
    $id_usuario = $_POST['id_receptor'];
    $id_creador = $_POST['id_creador'];

    $query1 = "INSERT INTO grupo(nombre_grupo) VALUES('$nombre_grupo')";
    
    
    $execute = mysqli_query($conexion, $query1);
    
    
    if($execute){
        echo '
        <script>
        alert("Se inserto correctamente el nuevo grupo en tabla grupos")
        </script>';
        
       
        $query2 = "SELECT id_grupo FROM grupo WHERE nombre_grupo='$nombre_grupo'";
        $execute2 = mysqli_query($conexion, $query2);
        while ($line2 = mysqli_fetch_array($execute2, MYSQLI_ASSOC)) {
            $id_grupo=$line2["id_grupo"];

            $query3 = "INSERT INTO usuarios_de_grupo(id_usuario, id_grupo) VALUES($id_usuario,$id_grupo)";
            $execute3 = mysqli_query($conexion, $query3);

            $query4 = "INSERT INTO usuarios_de_grupo(id_usuario, id_grupo) VALUES($id_creador,$id_grupo)";
            $execute4 = mysqli_query($conexion, $query4);
            if($execute3){
                echo '
                <script>
                    alert("Se inserto correctamente en todas las tablas")
                    window.location = "../main/grupos.php";
                </script>';
            }
            if($execute4){
                echo '
                <script>
                    alert("Se inserto correctamente en todas las tablas")
                    window.location = "../main/grupos.php";
                </script>';
            }
         }

    }else{
        echo '
            <script>
                alert("Error no se ejecuto el insert en tablas")
            </script>';
    }

    mysqli_close($conexion);
    
?>