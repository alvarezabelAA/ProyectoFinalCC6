<?php 
include '../../data_base/conexion_db.php';

$id_nota=$_GET["id_nota"];

$query = "DELETE FROM comentario WHERE id_nota=$id_nota";

$execute = mysqli_query($conexion, $query);

if($execute){
    echo '
        <script>
            alert("La nota se elimino correctamente")
            window.location = "../principal.php";
        </script>';

}else{
    echo '
        <script>
            alert("Vuelva a intentarlo... No se elimino la nota")
            window.location = "../principal.php";
        </script>';
}

mysqli_close($conexion);

?>