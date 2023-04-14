<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quienes somos</title>
  <script src="../Vistas/test.js"></script>
  <link rel="stylesheet" href="estilos/estiloBar.css">
  <link rel="stylesheet" href="../estructura/estilosEstructura.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>

<body>
  <div class="contenedor">

    <?php
      include("../estructura/navBar.html");

    ?>
    <div class="cuerpo">
      <?php
      include("../estructura/columnIzq.html");
      ?>
      <!--Cuerpo con informacion importante-->
      <div class="centro">
        <div class="encabezadoBar">
          <div class="tituloBar">
            <h2>El Bocado Bar</h2>
            <h5>Menú diario</h5>
          </div>
          <div class="preciosBar">Todos los menús incluyen bebida y postre <br>
            Precio:<strong> 12€ </strong>
          </div>
        </div>
        <div class="bar">

          <div class="card" style="width: 18rem;">
            <div class="card-body">

              <h5 class="card-title">Lunes</h5>
              <hr>

              <span class="card-text">Primer plato: </span><br>
              <strong>-Ensalada césar</strong><br>
              <span class="card-text">Segundo plato: </span><br>
              <strong>-Pollo con patatas y salsa a la pimienta</strong>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Martes</h5>
              <hr>

              <span class="card-text">Primer plato: </span><br>
              <strong>-Ensalada césar</strong><br>
              <span class="card-text">Segundo plato: </span><br>
              <strong>-Pollo con patatas y salsa a la pimienta</strong>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Miércoles</h5>
              <hr>

              <span class="card-text">Primer plato: </span><br>
              <strong>-Ensalada césar</strong><br>
              <span class="card-text">Segundo plato: </span><br>
              <strong>-Pollo con patatas y salsa a la pimienta</strong>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Jueves</h5>
              <hr>

              <span class="card-text">Primer plato: </span><br>
              <strong>-Ensalada césar</strong><br>
              <span class="card-text">Segundo plato: </span><br>
              <strong>-Pollo con patatas y salsa a la pimienta</strong>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Viernes</h5>
              <hr>

              <span class="card-text">Primer plato: </span><br>
              <strong>-Ensalada césar</strong><br>
              <span class="card-text">Segundo plato: </span><br>
              <strong>-Pollo con patatas y salsa a la pimienta</strong>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sábado</h5>
              <hr>

              <span class="card-text">Primer plato: </span><br>
              <strong>-Ensalada césar</strong><br>
              <span class="card-text">Segundo plato: </span><br>
              <strong>-Pollo con patatas y salsa a la pimienta</strong>
            </div>
          </div>
          <p></p>
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