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
                    <h2><i class="fa-solid fa-pen-to-square"></i> Tareas</h2>
                </div>
                <div class="container_cuadrito">
                    <div class="contenido">
                            <?php 
                            include "../data_base/conexion_db.php";

                            $query = "select * from tareas order by id_receptor";
                            $execute = mysqli_query($conexion, $query);

                            $id_receptor = 0;
                            $tipo_tarea ="";
                            $contenido ="";

                            foreach($execute as $row) { ?>
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem; ">
                                <div class="card-header">Quien la hace?: <?php echo $row['id_receptor']; ?></div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['tipo_tarea']; ?></h5>
                                    <p class="card-text"><?php echo $row['contenido']; ?></p>
                                </div>
                                </div>
                            <?php } ?>
                        </div>
                        <a href="add_edit/tarea.php"><button><span>+ </span> Agregar Tarea</button></a> 
                </div>
            </div>
        </article>
        <article>
            <div class="titulo">
                <div class="titulito">
                    <h2><i class="fa-regular fa-note-sticky"></i> Notas</h2>
                </div>
                <div class="contenido">
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id at, aperiam odit, dolorem distinctio atque aut dolorum rerum in quidem dignissimos debitis cum saepe laboriosam autem eius totam fugit harum?</span><span>Placeat illo perspiciatis excepturi incidunt reprehenderit impedit quaerat non sit distinctio laboriosam harum nulla corporis dolore officiis maxime veritatis praesentium, possimus quis modi aut necessitatibus quisquam. Natus praesentium qui consectetur.</span></p>
                    <a href="add_edit/nota_miembro.php"><button> <span>+ </span> Agregar Nota a Miembro</button></a>
                </div>
            </div>
        </article>
    </main>
</body>
</html>