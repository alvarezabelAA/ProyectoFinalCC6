<?php 
include '../../data_base/conexion_db.php';

$id_tarea=$_GET["id_tarea"];

$query = "DELETE FROM tareas WHERE id_tarea=$id_tarea";

$execute = mysqli_query($conexion, $query);

if($execute){
    echo '
        <script>
            alert("La tarea se elimino correctamente")
            window.location = "../principal.php";
        </script>';

}else{
    echo '
        <script>
            alert("Vuelva a intentarlo... No se elimino la tarea")
            window.location = "../principal.php";
        </script>';
}

mysqli_close($conexion);

?>
