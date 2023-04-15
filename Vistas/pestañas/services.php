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
  <link rel="stylesheet" href="estilos/estiloServicios.css">
  <link rel="stylesheet" href="../estructura/estilosEstructura.css">
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
        <div class="servicios">
          <h2>¡Cosas que hacer con nosotros!</h2>
          <p>Aquí podrás encontrar todos los servios que podemos ofrecer!</p>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <h3>Clases de equitación</h3>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="foto">
                    <img src="../imgs/clases.jpg" class="card-img-top" alt="...">

                  </div>
                  <span>HORARIOS de clase</span>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h3>Excursiones</h3>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="foto">
                    <img src="../imgs/excMontaña.jpg" class="card-img-top" alt="...">
                    <img src="../imgs/excPlaya.jpg" class="card-img-top" alt="...">
                  </div>
                  <h4>Excursion Playa</h4>
                  <p>Información</p>
                  <h4> Excursion montaña</h4>
                  <p>Información</p>
                  <!--Formulario para poder reservar-->
                  <h4>¡Haz tu petición de reserva desde aquí!</h4>
                  <p>Puedes reservar una excursión con nosotros rellenando éste formulario. Recibirá de vuelta un correo de confirmación si todo es correcto.</p>
                  <button class="btn btn-primary btnReservar" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    ¡Pulsa para reservar!
                  </button>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <form class="row g-3 fromReserva">
                        <div class="col-md-6">
                          <label for="inputName4" class="form-label">Nombre (Requerido)*</label>
                          <input type="password" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email (Requerido)*</label>
                          <input type="email" class="form-control" id="inputEmail4" required>
                        </div>

                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Número de personas</label>
                          <select class="form-select" aria-label="Default select example" required>
                            <option selected>Seleccione uno</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Fecha de la excursión</label>
                          <input type="date" class="form-control" id="inputDate2">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">Tipo </label>
                          <select class="form-select" aria-label="Default select example" required>
                            <option selected>Seleccione uno...</option>
                            <option value="1">Excursión por la playa</option>
                            <option value="2">Excursión por la montaña</option>

                          </select>
                        </div>

                        <div class="col-12 botonReserva">
                          <button type="submit" class="btn btn-primary btnReservar" >Reservar</button>
                        </div>
                      </form>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h3>Pupilaje de cuadras</h3>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="foto">
                    <img src="../imgs/cuadras.png" class="card-img-top" alt="...">

                  </div>
                  <p>Informacion de tipos cuadras</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <h3>Celebración cumpleaños</h3>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="foto">
                    <img src="../imgs/niños.jpg" class="card-img-top" alt="...">
                    <img src="../imgs/muffinsCumple.jpg" class="card-img-top" alt="">
                  </div>
                  Informacion como celebrar el cumpleaños.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <h3>Fiestas temáticas</h3>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="foto">
                    <img src="../imgs/navidad.jpg" class="card-img-top" alt="...">

                  </div>
                  Informacion de nuestras celebraciones
                </div>
              </div>
            </div>

          </div>
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