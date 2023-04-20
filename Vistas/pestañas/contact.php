<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quienes somos</title>
  <link rel="stylesheet" href="estilos/estiloContact.css">
  <link rel="stylesheet" href="../estructura/estilosEstructura.css">
  <script src="../Vistas/test.js"></script>
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
    include("../estructura/navBar.php");
    ?>
    <div class="cuerpo">
      <?php
      include("../estructura/columnIzq.html");
      ?>
      <!--Cuerpo con informacion importante-->
      <div class="centro">
        <div class="contacto">
          <h2>¡Como localizarnos!</h2>
          <h3>Contacto</h3>
          <p><i class="bi bi-telephone"></i> Telefono: <strong>693582471</strong>
            </p>
             <p><i class="bi bi-envelope-paper-heart"></i> Correo electronico: 
          <a class="rrss" href="https://mail.google.com/mail/?view=cm&source=mailto&cc=[hipicaalfaro@gmail.com]" target="_blank">hipicaalfaro@gmail.com</a></p>
       
          <p><i class="bi bi-instagram"></i> Intagram: <a class="rrss" href="https://www.instagram.com/hipicaalfaro/" target="_blank"> @hipicaalfaro</a>
          </p>
          <h3>Ubicación</h3>
          <p> <i class="bi bi-geo-alt"></i><a href="https://goo.gl/maps/eyezBzkXnHMDUqRe8" class="rrss" target="_blank"> Calle de la diversión, Nº1, CP, 07184, Calviá, Illes Balears</a>
            </p>
          <h3>HORARIO</h3>

          <h4>Para informacion más concreta ¡no dudes en enviarnos tus dudas!</h4>
          <form action="/action_page.php">
            <div class="mb-3 mt-3">
              <label for="">&nbsp Nombre (obligatorio)</label> <br>
              <input type="text" name=""  placeholder="Hípica Alfaro"><br>
              <label for=""> &nbspEmail (obligatorio)</label> <br>
              <input type="email" name=""  placeholder="hipicaalfaro@gmail.com"><br>
              <label for=""> &nbspComentario: </label>
              <textarea class="form-control areaComent" rows="5" id="comment" name="text" placeholder="Hola! Soy Mari y mi consulta es..."></textarea>
            </div>
            <button type="submit" class="btnEnviar">Enviar</button>
          </form>
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