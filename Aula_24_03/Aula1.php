<?php      

    declare(strict_types=1);

    function criarTituloPadrao() {

        echo "<h1> Criando Titulo </h1>";
    }


    criarTituloPadrao();
    criarTituloPadrao();
    criarTituloPadrao();


    function criandoTituloH1($texto) {
        echo "<h1> $texto </h1>";
    }


    function tituloLegal($texto) {
        echo "<h2>##################</h2>";
        echo "<h2>##### $texto #####</h2>";
        echo "<h2>##################</h2>";
    }


    function calcularMedia ($nome, $nota1,  $nota2){
        $media = ($nota1 + $nota2) / 2;

        if ($media >= 6) {
            echo "<p>Aluno(a) $nome foi Aprovado com média $media.</p>";
        }else{
            echo "<p>Aluno(a) $nome foi Reprovado com média $media.</p>";
        }

    }


    function somar($a, $b){

        $soma = $a + $b;

        echo "<li>$a + $b = $soma</li>";
    }


    function somarNumeros(...$numeros) {
        $soma = 0;
        echo "<li>";
        foreach ($numeros as $numero) {
            echo "$soma + $numero = ";
            $soma += $numero;
            echo " $soma";
            echo "</li> <br>";
        }
        

    }


    function junior() {
        echo "<br> faz algo";

        function neto() {
            echo "<br> faz outra coisa";
        }
    }



    function soma($num){
        $num += 5;
        echo "<br> Num = $num";
        return $num;
    }


    function subtracao ($a = 0, $b = 0){
        $sub = $a - $b;
        echo "<li>$a - $b = $sub</li>";
    }


    function divicao (float $num1,float $num2) {
        $res = $num1 / $num2;
    }

    $var1 = 10;
    echo "<br> Var1 = $var1";

    $var1 = soma($var1);

    echo "<br> Var1 = $var1";


    


    criarTituloPadrao();
    criandoTituloH1("Testannnndo h111");
    tituloLegal("Loucuraaaa");
    calcularMedia("Edu", 5.1, 5.0);
    calcularMedia("jorge", 9.2, 4.3);


    echo "Lista de Somas: ";
    somar(10,5);
    somar(9,3);


    somarNumeros(20,30,50,60,7,2,1,9,2,3,4,2,2);


    subtracao(10);


    // $n1 = 0;
    // if(isset($_GET["n1"])){
    //     $n1 = $_GET["n1"];
    // }

    // $n2 = 0;

    // if(isset($_GET["n2"])){
    //     $n2 = $_GET["n2"];
    // }
    

    // /Aula_24_03/Aula2.php?n2=50&n1=32  << URL
    // n1 = ver se existe o get se existir n1 = $_GET["n1"] se não n1 = 0
    // $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    // $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;


    // Mesma coisa que o anterior mas muito mais simplificado
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;
    
    $soma =  $n1 + $n2;

    echo "<br>Soma = " . $n1. " + " . $n2 . " = $soma";


?>


