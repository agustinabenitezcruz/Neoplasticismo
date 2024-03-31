<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Neoplasticismo</title>
</head>
<body class="d-flex flex-column h-100">
    <header>
        <div class="Header">
            <a href="index.php" class="col"><div class="container-fluid"><img src="img/logoNeoplasticismo.png" alt="logo Neoplasticismo"></div></a>
        
            <a href="historia.html" class="col blueBlock">
                <div class="container-fluid"><p>Historia</p></div>
            </a>
        
            <a href="neoplasticismo.html" class="col block">
                <div class="container-fluid"><p class="text-center">Sobre el Neoplasticismo</p></div>
            </a>

            <a href="artistas.html" class="col redBlock">
                <div class="container-fluid"><p>Artistas</p></div>
            </a>
            
            <a href="obras.html" class="col block">
                <div class="container-fluid"><p>Obras</p></div>
            </a>
        
            <a href="iniciarSesion.php" class="col yellowBlock">
                <div class="container-fluid"><p class="text-center">Iniciar Sesión</p></div>
            </a>
    
        </div>
    </header>
    <br>
    <h2 class="m-4 ms-5">Registrarse</h2>
    <main>
        <br>
        <div class="row g-0 mt-4 ms-3 P-5"  id="form-iniciar-sesion">
            <form method="POST" action="registro.php">
                <div class="col-md-12 P-5 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre y Appellido</label>
                    <input name="nombre" type="text" class="form-control red" id="NombreyApellido" aria-describedby="emailHelp" maxlength="60" required>
                  </div>
                  <div class="col-md-12 P-5 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Usuario</label>
                    <div class="input-group">
                    <input name="usuario" type="text" class="form-control blue" id="usuario" maxlength="70" required>
                  </div>
                <div class="col-md-12 P-5 mb-3">
                  <label for="exampleInputEmail1" class="form-label mt-3">Correo</label>
                  <input name="email" type="email" class="form-control yellow" id="Correo" aria-describedby="emailHelp" maxlength="70" required>
                  <div id="emailHelp" class="form-text">No compartiremos esta información con nadie.</div>
                </div>
                <div class="col-md-12 P-5 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="contrasena" maxlength="16" required>
                </div>
                <div class="P-5 mb-3 botones" style="text-align: center;">
                    <input type="submit" class="boton-IS btn border border-dark mt-5"></input>
                </div>
              </form>
            </div>
        </div>
    </main>

    <footer class="wh-100">
        <div class="footer"><p class="text-center">Diseñada por Agustina Benitez Cruz</p></div>  
    </footer>

</body>


</html>