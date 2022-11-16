<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Tienes que iniciar Sesion)";
                window.location="login.html";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<?php 
                            include "../data_base/conexion_db.php";

                            $query = "select * from tareas order by id_receptor";
                            $query2 = "select * from comentario order by id_receptor";
                            $execute = mysqli_query($conexion, $query);
                            $execute3 = mysqli_query($conexion, $query);
                            $execute2 = mysqli_query($conexion, $query2);

                            $id_receptor = 0;
                            $tipo_tarea ="";
                            $contenido ="";

                            $contenido = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://kit.fontawesome.com/1bb1b9f305.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo"> 
                <h2>Bienvenido</h2>
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <h2>Soy,<span>Abel</span></h2>
                    <ul>
                        <li><a href="principal.php" id="selected">Principal</a></li>
                        <li><a href="grupos.php">Grupos</a></li>
                        <li><a href="../data_base/cerrar_sesion.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div> 
    </header>
    <main>
    <div class="container__skills" id="skills">
        <a href="add_edit/tarea.php"><button class="boton_add"><span>+ </span> Agregar Tarea</button></a> 
            <div class="titulito">
                    <h1><i class="fa-solid fa-pen-to-square"></i> Tareas</h1>
                </div>
            <div class="container__box">
                <?php foreach($execute as $row) { ?>
                <div class="box">
                    <div class="card text-white bg-dark mb-3" style="max-width: 20rem; ">
                        <div class="card-header">ID del Usuario: <?php echo $row['id_receptor']; ?></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['tipo_tarea']; ?></h5>
                                <p class="card-text"><?php echo $row['contenido']; ?></p>
                                <a href=add_edit/eliminar_tarea.php?id_tarea=<?php echo$row['id_tarea']?>><button type='button' class='btn btn-danger'>Eliminar</button></a>

                                <a href="add_edit/editar_tarea.php?id_tarea=<?php echo$row['id_tarea']?>&contenido=<?php echo$row['contenido']?>">                             
                                <button type="button" class="btn btn-warning">Edit</button></a>
                            </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="container__skills" id="skills">
        <a href="add_edit/nota_miembro.php"><button class="boton_add"> <span>+ </span> Agregar Nota a Miembro</button></a> 
            <div class="titulito">
                <h1><i class="fa-regular fa-note-sticky"></i> Notas</h1>
                </div>
            <div class="container__box">
                <?php foreach($execute2 as $row) { ?>
                <div class="box">
                    <div class="card text-white bg-dark mb-3" style="max-width: 20rem; ">
                        <div class="card-header">Nota de : <?php echo $row['id_receptor']; ?></div>
                            <div class="card-body">
                                <h5 class="card-title">Comentario:</h5>
                                <p class="card-text"><?php echo $row['contenido']; ?></p>
                                <a href=add_edit/eliminar_nota.php?id_nota=<?php echo$row['id_nota']?>><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                <a href="add_edit/editar_comentario.php?id_nota=<?php echo$row['id_nota']?>&contenido=<?php echo$row['contenido']?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>