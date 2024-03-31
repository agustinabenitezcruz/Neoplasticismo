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
    <title>Buscador</title>
</head>
<body>
    <section>
    
        <?php
            include ('conexion.php');
            $buscar = $_POST['buscar'];            
            $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '$buscar' OR apellido LIKE '$buscar' OR nacionalidad LIKE '$buscar'");
            
        ?>
        <article>
            <p>Resultados:</p>
            
            <?php
                while($resultados=mysqli_fetch_array($consulta)) {
            ?>
            <p>
                <?php
                    echo $resultados['nombre']." ";
                    echo $resultados['apellido']." ";
                    echo $resultados['nacionalidad']." ";
                    echo $resultados['nacimiento']."-";
                    echo $resultados['fallecimiento']." ";
                    echo $resultados['descripcion'];
                    
                ?>   
            </p>
            <img class="img-fluid" src="img/<?php echo $resultados['imagen'];?>.png ">
            <hr/>
            <?php
                }

                mysqli_free_result($consulta);
                mysqli_close($conexion);

            ?>
        </article>
   
    </section>
    
</body>
</html>