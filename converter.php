<?php

    if(isset($_POST['submit'])){

        $temp = $_POST['temp'];
        $unids = $_POST['unids'];

        if($unids == "Celsius"){
            $resultado = ($temp * 9) / 5 +32;
            $resultadoFormatado = number_format($resultado, 2, '.', '');
        } else {
            $resultado = ($temp - 32) * 5 /9; 
            $resultadoFormatado = number_format($resultado, 2, '.', '');
        }

        echo " A conversão da temperatura informada para ".$unids ." é de ". $resultadoFormatado;

    }    

?>
