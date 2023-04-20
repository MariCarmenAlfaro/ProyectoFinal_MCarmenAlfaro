<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes somos</title>
    <script src="../Vistas/test.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="estilos/estiloQuienSomos.css">
  <link rel="stylesheet" href="../estructura/estilosEstructura.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <div class="contenedor">

        <?php
         include("../estructura/navBar.php");
      
        ?>
        <div class="cuerpo">
        <?php
      include("../estructura/columnIzq.html");
      ?>
            <!--Cuerpo con informacion importante-->
            <div class="centro">
                <img src="../imgs/fondoCaballos.jpg" alt="" class="cora">
               
                <div class="historia">
                    <h2>Historia de nuestra empresa</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex, sed! Aliquam voluptate animi molestiae numquam natus officiis, labore vel corrupti iusto, nobis odio illum excepturi! Voluptates minima reiciendis ab enim blanditiis quo iste quae atque modi architecto praesentium quisquam tempore, similique nobis ipsa corporis aliquam dolore quasi tempora eligendi voluptate!</p>  
                    <br>
                    <h2>Que nos gustaria que pasase</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus labore, alias autem cum facilis iure itaque nulla consequatur, animi architecto dolorum ex ducimus qui aliquam fugit impedit eveniet quibusdam porro ipsum! Inventore quis reprehenderit voluptas. Perferendis, sequi non. Iure?</p>
                   <br>
                    <h2>Que esperamos de tí</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas iste deleniti maiores aperiam, fugiat quaerat nostrum dolor mollitia nobis animi minus placeat ipsum sunt beatae ad excepturi. Sequi neque unde repellat dolores architecto magni odit, numquam perspiciatis id a ipsum!</p>
                </div>
            </div>

            <?php
            include("../estructura/columnDere.html");
            ?>
        </div>
        <?php
        include("../estructura/piePagina.html");
        ?>
    </div>
</body>

</html>