<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
    
    <!-- <h2>Cadastro</h2>
    <form action="" method="get">

        Nome: <input type="text", name="nomePessoa">
        <button type="submit">Enviar</button>
    </form>

    <?php 
        // $nome = $_GET["nomePessoa"] ?? "sem nome";
        // echo "Ola $nome, Boas Vindas :)";
    ?> -->


<h2>Soma</h2>

    <form action="" method="get">
    numero 1: <input type="number" name="n1">
    numero 2: <input type="number" name="n2">
    <button type="submit">Enviar</button>


    </form>
    <?php 
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;
    $soma = $n1 + $n2;
    echo "Resultado = $soma";

    ?>  



</body>
</html>