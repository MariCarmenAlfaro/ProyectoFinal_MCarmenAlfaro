<?php
  require("../AccesoDatos/usersAccess.php");
  function test_alta_usuario()
  {
    $u = new UsersAccess();

    return $u->insertar("Marta","Dueño", "2006-02-25", "Marta@gmail.com","1234");
  }
  var_dump(test_alta_usuario());
?>