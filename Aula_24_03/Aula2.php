<?php 

    $n1 = 0;
    if(isset($_GET["n1"])){
        $n1 = $_GET["n1"];
    }

    $n2 = 0;

    if(isset($_GET["n2"])){
        $n2 = $_GET["n2"];
    }
    
    $soma =  $n1 + $n2;

    echo "<br>Soma = " . $n1. " + " . $n2 . " = $soma";


?>