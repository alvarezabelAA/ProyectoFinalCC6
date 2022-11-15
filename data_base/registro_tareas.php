<?php

    include 'conexion_db.php';

    $tipo_tarea = $_POST['tipo_tarea'];
    $id_receptor = $_POST['id_receptor'];
    $contenido = $_POST['contenido'];

    $query = "INSERT INTO tareas(tipo_tarea, id_receptor, contenido) 
                VALUES('$tipo_tarea',$id_receptor, '$contenido') ";

     
    $execute = mysqli_query($conexion, $query);
          
    if($execute){
        echo '
            <script>
                alert("La tarea se ingreso correctamente")
                window.location = "../main/principal.php";
            </script>';

    }else{
        echo '
            <script>
                alert("Vuelva a intentarlo... No se registro la tarea")
                
            </script>';
    }

    mysqli_close($conexion);
    
?>