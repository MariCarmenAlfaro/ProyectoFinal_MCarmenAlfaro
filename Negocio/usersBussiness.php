<?php
require("../../AccesoDatos/usersAccess.php");
class UsersBussiness{
	function __construct()
    {
    }
    function verifyUser($usuario, $clave)
    {
        $usuariosDAL = new UsersAccess();
        $res = $usuariosDAL->verifyUser($usuario,$clave);
        
        return $res;
        
    }
}
