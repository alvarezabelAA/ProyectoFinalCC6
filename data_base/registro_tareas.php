<?php

    include 'conexion_db.php';

    $tipo_tarea = $_POST['tipo_tarea'];
    $id_receptor = $_POST['id_receptor'];
    $contenido = $_POST['contenido'];

    $query = "INSERT INTO tareas(tipo_tarea, id_receptor, contenido) 
                VALUES('$tipo_tarea','$id_receptor', '$contenido') ";

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