<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hípica Alfaro</title>
  <script src="../Vistas/test.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="estilos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>

<body>
  <div class="contenedor">

    <?php
    include("navBar.html");
    include("columnIzq.html");
    ?>
    <div class="cuerpo">
      <!--Cuerpo con informacion importante-->
      <div class="centro">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card">
                <img src="../imgs/20180303_162430.jpg" class="d-block w-100 " alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bienestar animal</h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <img src="../imgs/IMG-20220130-WA0009.jpg" class="d-block w-100 fotoCarrousel" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Eventos</h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <img src="../imgs/A 1866.jpg" class="d-block w-100 fotoCarrousel" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Clases</h5>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <?php
      include("columnDere.html");
      ?>
    </div>
    <?php
    include("piePagina.html");
    ?>
  </div>

</body>

</html>