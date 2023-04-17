<?php
require("../../AccesoDatos/prices/pricesDataAcces.php");
class PricesBussines
{
    private $_priceId;
    private $_typeService;
    private $_price;
    function __construct()
    {
    }

    function init($typeService, $price)
    {
        $this->_typeService = $typeService;
        $this->_price = $price;
    }
  
    function getTypeService()
    {
        return $this->_typeService;
    }
    function getPrices()
    {
        return $this->_price;
    }
    function obtainPrices()
    {
        $prices = new PricesDataAcces();

        $dataPrices = $prices->obtainPrices();

        $priceList = array();


        foreach ($dataPrices as $price) {
            $resultado = new PricesBussines();
            $resultado->Init($price['typeService'], $price['price']);

            array_push($priceList, $resultado);
        }

        return $priceList;
    }
}
