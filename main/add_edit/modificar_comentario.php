<?php 



include '../../data_base/conexion_db.php';
    $contenido=$_POST['contenido'];
    $id_nota=$_POST['id_nota'];

    $query = "UPDATE comentario SET contenido='$contenido' WHERE id_nota=$id_nota";

    $execute = mysqli_query($conexion, $query);

    if($execute){
        echo '
            <script>
                alert("El comentario se modifico correctamente")
                window.location = "../principal.php";
            </script>';

    }else{
        echo '
            <script>
                alert("Vuelva a intentarlo... No se modifico el comentario")
                window.location = "../principal.php";
            </script>';
    }

    mysqli_close($conexion);




?>