<?php 



include '../../data_base/conexion_db.php';
    $contenido=$_POST['contenido'];
    $id_tarea=$_POST['id_tarea'];

    $query = "UPDATE tareas SET contenido='$contenido' WHERE id_tarea=$id_tarea";

    $execute = mysqli_query($conexion, $query);

    if($execute){
        echo '
            <script>
                alert("La tarea se modifico correctamente")
                window.location = "../principal.php";
            </script>';

    }else{
        echo '
            <script>
                alert("Vuelva a intentarlo... No se modifico la tarea")
                window.location = "../principal.php";
            </script>';
    }

    mysqli_close($conexion);




?>