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
</header>
<br>

<center><h1>Dados da Compra</h1><br><br>

<form name="cadastro">
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $mes = date("m");
    switch ($mes){
        case '01':
            $mes = 'janeiro';
        break;
        case '02':
            $mes = 'fevereiro';
        break;
        case '03':
            $mes = 'março';
        break;
        case '04':
            $mes = 'abril';
        break;
        case '05':
            $mes = 'maio';
        break;
        case '06':
            $mes = 'junho';
        break;
        case '07':
            $mes = 'julho';
        break;
        case '08':
            $mes = 'agosto';
        break;
        case '09':
            $mes = 'setembro';
        break;
        case '10':
            $mes = 'outubro';
        break;       
        case '11':
            $mes = 'novembro';
        break;
        case '12':
            $mes = 'dezembro';
        break;    
    }
    echo "Jundiaí," . date(" d") . " de " . $mes . " de " . date(" Y");
    
    ?>

    <br><br>
    
   <p>Nome do cliente:<input type="text" name="nome" value=""></p> 
   <br><br>
   <p>Pastéis selecionados:</p><br> 
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
<br>
<br>
   <p>Forma de pagamento:</p><br>
   <input type="radio" name="Opcoes" checked value = "Cartao"> Cartão de débito / crédito 
   <br><br>
   <div id = "radio1">
<?php     
   if(isset($_POST['final'])){
    $num2 = $_POST['final'];
    echo "Preço da compra: R$ ".$num2;
   }
?>
    </div>
  <input type="radio" name="Opcoes" value="Boleto">Boleto
  <br><br>
  <div id = "radio2">
<?php
    if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        echo "Preço da compra: R$ ".$num2;
    }
?>
   </div>
  <input type="radio" name="Opcoes" value="Dinheiro">Dinheiro
  <br><br>
   <div id="radio3">
       <br>
<?php
    if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        echo "Preço da compra: R$ ".$num2."<br>";
       }
       echo "Digite o valor que deseja pagar:"; 
       echo '<input type="number" readonly name="troco" min="0" max="1000" value="0"><br><br>';
       echo "Seu troco:";
?>
</div>
<br><br>
<h3>Validade do pedido:</h3><br><br>

<?php
date_default_timezone_set('America/Sao_Paulo');
$mes = date("m");
switch ($mes){
    case '01':
        $mes = 'janeiro';
    break;
    case '02':
        $mes = 'fevereiro';
    break;
    case '03':
        $mes = 'março';
    break;
    case '04':
        $mes = 'abril';
    break;
    case '05':
        $mes = 'maio';
    break;
    case '06':
        $mes = 'junho';
    break;
    case '07':
        $mes = 'julho';
    break;
    case '08':
        $mes = 'agosto';
    break;
    case '09':
        $mes = 'setembro';
    break;
    case '10':
        $mes = 'outubro';
    break;       
    case '11':
        $mes = 'novembro';
    break;
    case '12':
        $mes = 'dezembro';
    break;    
}
echo "Horário do pedido: " . date(" d") . " de " . $mes . " de " . date(" Y ") . date("H:i:s") . "<br><br>";
$horario = "23:59:59";
echo "Válido até: " . date(" d") . " de " . $mes . " de " . date(" Y ") . date($horario);



?>
 

</form>


</center>
</body>
    
</html>