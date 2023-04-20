<?php
class UsersAccess
{
    function __construct()
    {
    }
    function insertar($userName, $userType, $registrationDate, $emailAddress, $psswdUser)
    {
        $conexion = mysqli_connect('localhost', 'root', '1234');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'horseClubDB');
        $consulta = mysqli_prepare($conexion, "insert into userProfile(userName,userType,registrationDate, emailAddress,psswdUser)values (?,?,?,?,?);");
        $hash = password_hash($psswdUser, PASSWORD_DEFAULT);
        $consulta->bind_param("sssss", $userName, $userType, $registrationDate, $emailAddress, $hash);
     
        $res = $consulta->execute();
        if (mysqli_affected_rows($conexion) > 0) {
            return true;
        } else {
            return false;
        }
        return $res;
    }

    function verifyUser($usuario, $clave)
    {
        $conexion = mysqli_connect('localhost', 'root', '1234');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'horseClubDB');
        $consulta = mysqli_prepare($conexion, "select userType, emailAddress, psswdUser from userProfile where emailAddress = ?;");
        $sanitized_usuario = mysqli_real_escape_string($conexion, $usuario);
        $consulta->bind_param("s", $sanitized_usuario);
        $consulta->execute();
        $res = $consulta->get_result();


        if ($res->num_rows == 0) {
            return 'NOT_FOUND';
        }

        if ($res->num_rows > 1) {
            return 'NOT_FOUND';
        }

        $myrow = $res->fetch_assoc();
        $x = $myrow['psswdUser'];
        if (password_verify($clave, $x)) {
            return $myrow['userType'];
        } else {
            return 'NOT_FOUND';
        }
    }
}
