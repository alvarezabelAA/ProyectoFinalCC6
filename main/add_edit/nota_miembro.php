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
        <h2>Dejar una Nota</h2>
        <form action="../../data_base/registro_notas.php" method="POST">
            <?php
                include '../../data_base/conexion_db.php';
                $nombre = '';

                $query = "select * from usuarios order by nombre ";

            ?>
            <select name = "id_receptor">
                <?php
                    $execute = mysqli_query($conexion, $query);
                    while ($line = mysqli_fetch_array($execute, MYSQLI_ASSOC)) {
                        $nombre=$line["nombre"];
                        $id_usuario=$line["id_usuario"];
                        echo "<option value=$id_usuario>$nombre</option>\n";
                     }
                ?>
            </select>
            <input type="text" placeholder="Contenido a realizar" name="contenido">
            <button>Agregar Nota</button>
        </form>
        <a href="../principal.php"><button class="botoncito">Regresar</button></a>
    </div>
    
    <?php
        mysqli_close($conexion);
        ?>
</body>
</html>