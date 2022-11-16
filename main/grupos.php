<?php
    session_start();
    $id = $_SESSION['id_usuario2'];

    include "../data_base/conexion_db.php";
    $query = "SELECT id_grupo FROM usuarios_de_grupo WHERE id_usuario='$id'";
    $execute = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../css/grupos.css">
    <script src="https://kit.fontawesome.com/1bb1b9f305.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo"> 
                <?php
                    $query3 = "SELECT nombre FROM usuarios WHERE id_usuario='$id'";
                    $execute3 = mysqli_query($conexion, $query3);
                    while ($line3 = mysqli_fetch_array($execute3, MYSQLI_ASSOC)) {
                        $nombre=$line3["nombre"];
                ?>
                <?php } ?>
                <h2>Bienvenido <?php echo"$nombre!"; ?></h2>
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <h2>Soy,<span>Abel</span></h2>
                    <ul>
                        <li><a href="principal.php" id="selected">Principal</a></li>
                        <li><a href="grupos.html">Grupos</a></li>
                        <li><a href="../data_base/cerrar_sesion.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div> 
    </header>
    <main>
        <article>
                <div class="titulo">
                    <div class="titulito">
                        <h2><i class="fa-solid fa-user-group"></i> Mis Grupos</h2>
                    </div>
                    <div class="contenido">
                        
                    <?php
                     while ($line = mysqli_fetch_array($execute, MYSQLI_ASSOC)) {
                        $id_grupo=$line["id_grupo"];
                        
                        $query2 = "SELECT * FROM grupo WHERE id_grupo=$id_grupo";
                        $execute2 = mysqli_query($conexion, $query2);

                        while ($line2 = mysqli_fetch_array($execute2, MYSQLI_ASSOC)) {
                        $id_grupo=$line2['id_grupo'];
                        $nombre_grupo=$line2['nombre_grupo'];
                    ?>
                        <div class="cajita_grupos">
                            <div class="cajita2">
                                <div class="titulo_cajita">ID del Grupo: <?php echo"$id_grupo"; ?></div>
                                    <div class="contenido_cajita">
                                        <h5 class="card-title">Nombre del Grupo: <?php echo"$nombre_grupo"; ?></h5>
                                        
                                    </div>
                                    <a href="../data_base/get_grupos.php?id_usuario=<?php echo"$id"?>&id_grupo=<?php echo"$id_grupo"?>"><button type="button" class="btn btn-warning">Eliminar</button></a>  
                            </div>
                        </div>
                       
                        <?php } ?>
                        <?php } ?>
                        <a href="../main/grupos.php"><button>Actualizar</button></a>
                        <a href="../main/crearGrupo.php"><button> <span>+ </span> Crear Grupo</button></a>
                    </div>
                </div>
        </article>
       
    </main>
</body>
</html>