<?php
include_once 'model/function.php';


        $obj = new functionth();
        $rs = $obj->dateCalculator();

        $jsonCode = $rs;
        $jsonDecode = json_decode($jsonCode, true);
         
        $rs2 = $obj->checkYear();

        $rs3 = $obj->dataUser();
        $json = $rs3;
        $jsonUser = json_decode($json, true);
?>