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
            <form action="/data_base/get_grupos.php" method="POST">
                <div class="titulo">
                    <div class="titulito">
                        <h2><i class="fa-solid fa-user-group"></i> Mis Grupos</h2>
                    </div>
                    <div class="contenido">
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus impedit incidunt aperiam molestiae iste, excepturi eligendi provident aspernatur, quos eum nemo id tempora explicabo minus? Similique iusto doloremque culpa.</span><span>Fugiat neque, laboriosam veniam possimus ab odio! Explicabo expedita modi vero nulla enim necessitatibus aut perspiciatis. Officiis reprehenderit est commodi omnis in, vitae labore, nemo eligendi blanditiis recusandae laudantium provident!</span></p>
                        <button>Actualizar</button>
                    </div>
                </div>
                <input type="hidden" name="get_grupos" value="">
            </form>
        </article>
        <article>
            <div class="titulo">
                <div class="titulito">
                    <h2><i class="fa-solid fa-people-group"></i> Grupos Creados</h2>
                </div>
                <div class="contenido">
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus impedit incidunt aperiam molestiae iste, excepturi eligendi provident aspernatur, quos eum nemo id tempora explicabo minus? Similique iusto doloremque culpa.</span><span>Fugiat neque, laboriosam veniam possimus ab odio! Explicabo expedita modi vero nulla enim necessitatibus aut perspiciatis. Officiis reprehenderit est commodi omnis in, vitae labore, nemo eligendi blanditiis recusandae laudantium provident!</span></p>
                    <button> <span>+ </span> Crear Grupo</button>
                </div>
            </div>
        </article>
    </main>
</body>
</html>