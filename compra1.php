<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pastéis Relapsos</title>
    <link rel="stylesheet" href="_css/estilo3.css"/>
    <script language="JavaScript" src="_javascript/funcoes.js"></script>
</head>
<body>
    <header id="cabecalho">
    <img id="icone1" src="_imagens/joes.jpg"/>
    <img id="icone2" src="_imagens/relapsos.jpg"/>
</header>
<br>

<center><h1>Dados da Compra</h1><br><br>

<form name="cadastro" method="POST" action="">
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
   <h3>Pastéis selecionados:</h3><br><br> 
<?php $link = "pasteis.xml";
    $xml = simplexml_load_file($link) -> pasteis;

foreach($xml -> sabores as $aula){

if($_POST[utf8_decode($aula -> codigo)]!=0){
     $num1 = $_POST[utf8_decode($aula -> codigo)];
     $num3 = ($aula -> preco);
     echo "<center>".$num1 . "x Pastel (éis) do sabor: <strong>" .utf8_decode($aula -> nome) . "</strong> Preço unitário: " . utf8_decode($num3) . "</center><br>";
     
      }
   }
   
     if(isset($_POST['final'])){
   $num2 = $_POST['final'];
   echo "Preço da compra: R$ ".$num2;
   }
?>
<br>
<br>
<h3>Forma de pagamento:</h3><br><br>
   
   <ul style="margin-left: 35%;" class="payment-methods">
  <li class="payment-method cartao">
    <input name="payment_methods" type="radio" id="cartao">
    <label for="cartao" style="background-image:url('_imagens/cartao.jpg');"></label>
  </li>

  <li class="payment-method boleto">
    <input name="payment_methods" type="radio" id="boleto">
    <label for="boleto" style="background-image:url(_imagens/boleto.jpg);"></label>
  </li>

  <li class="payment-method dinheiro">
    <input name="payment_methods" type="radio" id="dinheiro">
    <label for="dinheiro" style="background-image:url(_imagens/dinheiro.jpg);"></label>
  </li>
</ul>
  
<br><br><br><br><br><br><br>


<h3>Deseja receber nossa newsletter com promoções?</h3>
<input type="checkbox" name="opcao1" value="sim">Sim <br>
<input type="checkbox" name="opcao2" value="nao">Não <br>

<h3>Validade do pedido:</h3><br>

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
<br><br><br>

<input type="submit" value="Gerar boleto" name="gerarboleto">

<br><br>

</form>


</center>
</body>
    
</html>