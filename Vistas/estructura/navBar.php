<!--Barra de navegacion-->

<head>
  <link rel="stylesheet" href="../estructura/estilosEstructura.css">
</head>
<div class="barraNavegacion">

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/pestañas/initialVisor.php"><img src="../imgs/logotipoHipica.jpg" alt="" width="75" height="81"> Hípica Alfaro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <div class="enmedio">
          <ul class="navbar-nav me-auto">

            <li class="nav-item">
              <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/pestañas/quienesSomos.php">¿Quiénes
                somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/pestañas/services.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/pestañas/contact.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/pestañas/menuBar.php">Menú
                Bar</a>
            </li>

            <div class="personal">
              <?php
              require("../../Negocio/usersBussiness.php");

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST["emailAddress"];
                echo $nombre;
                $usuarioBL = new UsersBussiness();
                $perfil =  $usuarioBL->verifyUser($_POST['emailAddress'], $_POST['psswdUser']);

                if ($perfil === "Alumno") {

                  $_SESSION['emailAddress'] = $_POST['emailAddress'];
                  echo '
                <li class="nav-item">
               <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/paginasLogg/perfilUser.php">Perfil</a>
                </li>
            ';
                  echo '<a  href="../login/logout.php"><button type="button" class="btn btn-primary login" data-bs-toggle="modal" data-bs-target="#exampleModal"> Cerrar sesión 
            </button></a>';
                } elseif ($perfil == "Dueño") {
                  echo '   <li class="nav-item">
                <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/paginasLogg/perfilUser.php">Perfil</a>
                 </li><li class="nav-item ">
            <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/paginasLogg/camaras.php">Cámaras
                 </a>
                </li>';
                  echo '<a  href="../login/logout.php"><button type="button" class="btn btn-primary login" data-bs-toggle="modal" data-bs-target="#exampleModal"> Cerrar sesión 
                </button></a>';
                } elseif ($perfil == "Admin") {
                  echo '  <li class="nav-item">
          <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/paginasLogg/perfilUser.php">Perfil</a>
           </li>
           <li class="nav-item ">
           <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/paginasLogg/camaras.php">Cámaras
                </a>
               </li>
               <li class="nav-item ">
            <a class="nav-link" href="http://localhost/ProyectoFinal_MCarmenAlfaro/Vistas/paginasLogg/perfilAdmin.php">Administrador
            </a>
          </li>
         ';
                  echo '<a  href="../login/logout.php"><button type="button" class="btn btn-primary login" data-bs-toggle="modal" data-bs-target="#exampleModal"> Cerrar sesión 
          </button></a>';
                }
              }
              if ($_SERVER["REQUEST_METHOD"] != "POST") {
                include("../login/loginViews.php");
              }
              ?>
            </div>


          </ul>
        </div>
      </div>


    </div>



  </nav>
</div>