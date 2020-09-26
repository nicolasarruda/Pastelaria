<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pastéis Relapsos</title>
    <link rel="stylesheet" href="_css/estilo2.css"/>
    <script language="JavaScript" src="_javascript/funcoes.js"></script>
</head>
<body>
    <header id="cabecalho">

    <img id="icone1" src="_imagens/joes.jpg"/>
    <img id="icone2" src="_imagens/relapsos.jpg"/>
    <nav id="menu">
        <ul>
            <li><a href="index.php"> Home </a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="cardapio.php">Cardapio</a></li>
        </ul>
    </nav>
</header>
<br>
<center><h1>Dados da Compra</h1><br>
<?php $link = "pasteis.xml";
    $xml = simplexml_load_file($link) -> pasteis;

foreach($xml -> sabores as $aula){

if($_POST[utf8_decode($aula -> codigo)]!=0){
     $num1 = $_POST[utf8_decode($aula -> codigo)];
     echo "<center>".$num1 . "x Pastel (éis) do sabor: <strong>" .utf8_decode($aula -> nome) . "</strong></center><br/>";
   }
}
     if(isset($_POST['final'])){
   $num2 = $_POST['final'];
   echo "Preço da compra: R$ ".$num2;
   }
?>

</center>
</body>
    
</html>