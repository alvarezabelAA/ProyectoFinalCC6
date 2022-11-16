<?php
    session_start();
    $id = $_SESSION['id_usuario2'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/add.css">
    <script src="https://kit.fontawesome.com/1bb1b9f305.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container_form">
        <h2>Crear Grupo</h2>
        <form action="../data_base/insertarGrupo.php" method="POST">
            <input type="text" placeholder="nombre del grupo" name="nombre_grupo">
            <?php
                include '../data_base/conexion_db.php';
                $nombre = '';

                $query = "SELECT * from usuarios ORDER BY nombre ";

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
            <input type="hidden" value=<?php echo"$id"; ?> name="id_creador">
            <button>Crear Grupo</button>
        </form>
        <a href="../main/grupos.php"><button class="botoncito">Regresar</button></a>
    </div>

    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>