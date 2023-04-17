<?php
ini_set("display_errors", "On");
ini_set("html_errors", 0);
class PricesDataAcces{
    function __construct()
	{
	}
    function obtainPrices(){
        $conexion = mysqli_connect('localhost', 'root', '1234');
		if (mysqli_connect_errno()) {
			echo "Error al conectar a MySQL: " . mysqli_connect_error();
		}
		mysqli_select_db($conexion, 'horseClubDB');
		$consulta = mysqli_prepare($conexion, "SELECT * FROM PRICES;");
		$consulta->execute();
		$result = $consulta->get_result();

		$prices =  array();

		while ($myrow = $result->fetch_assoc()) {
			array_push($prices, $myrow);
		}
		return $prices;
    }
}
