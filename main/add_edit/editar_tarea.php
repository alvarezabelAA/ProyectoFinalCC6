<?php

        $id_tarea = $_GET['id_tarea'];
        $contenido = $_GET['contenido'];


        include '../../data_base/conexion_db.php';
        $nombre = '';

        $query = "select * from usuarios order by nombre ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/add.css">
    <script src="https://kit.fontawesome.com/1bb1b9f305.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container_form">
        <h2>EDITAR TAREA</h2>
        <form action="modificar_tarea.php" method="POST">
            <p>Numero de tarea:</p>
            <input type="text" <?php echo "value=$id_tarea" ?> name="id_tarea" readonly>
            <input type="text" placeholder="Edite la tarea" name="contenido">
            <button>Editar Nota</button>
        </form>
        <a href="../principal.php"><button class="botoncito">Regresar</button></a>
    </div>
    
    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>