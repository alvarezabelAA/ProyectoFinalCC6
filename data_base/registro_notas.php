<?php 

    include "conexion_db.php";

    $id_receptor = $_POST['id_receptor'];
    $contenido = $_POST['contenido'];

    $query = "INSERT INTO comentario( id_receptor, contenido) 
                VALUES($id_receptor, '$contenido')";

     
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
                window.location = "../main/add_edit/nota_miembro.php";
            </script>';
    }

    mysqli_close($conexion);


?>

