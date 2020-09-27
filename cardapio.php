<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pastéis Relapsos</title>
    <link rel="stylesheet" href="_css/estilo2.css"/>
    <link rel="stylesheet" href="_css/estilo3.css"/>
    <script language="JavaScript" src="_javascript/funcoes.js"></script>
</head>
<body>
    <header id="cabecalho">

    <img id="icone1" src="_imagens/joes.jpg"/>
    <img id="icone2" src="_imagens/relapsos.jpg"/>
    <nav id="menu">
        <ul>
            <li><a href="index.php"> Home </a></li>
            <li><a href="index.php"> Sobre nós </a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="cardapio.php">Cardapio</a></li>
        </ul>
    </nav>
</header>
<table id = "listapastel" style = "text-align: center;">
    <form name = "quack" method="POST" action="compra1.php">
    <?php $link = "pasteis.xml";
    $xml = simplexml_load_file($link) -> pasteis;
    foreach($xml -> sabores as $aula){
echo "<tr>";
echo "<th>";
echo "<font color = 'gray' size = '6pt'>". utf8_decode($aula -> nome)."</font><br/>";
echo "<img src=' ".$aula -> imagem." '></img><br/>";
echo "</th>";
echo "<th>";
echo "Ingredientes <br/> ".utf8_decode($aula -> ingredientes)."<br />";
echo "</th>";
echo "<th>";
echo "Código do produto <br/>";
echo utf8_decode($aula -> codigo3)."<br />";
echo "R$:".utf8_decode($aula -> preco)."<br />";
echo "</th>";
echo "<th>";
echo "Quantia <br/>";
echo '<input type="number" name="'.$aula -> codigo.'" min="0" max="20" value ="0" onClick="calc_Preco();"/><br/>';
echo "Preço Final Unitário <br/>";
echo '<input type="number" name="'.$aula -> codigo2.'" min="0" max="20" value ="0" readonly/>';
echo "</tr>";
}
    ?>

</table>
<br>
<br>

<center><h1>Dados do Cliente:</h1><br><br>

<form name="cadastro" method="POST" action="sucesso.php">
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
   
   <h3>Forma de pagamento:</h3><br><br>
   
   <ul style="margin-left: 35%;" class="payment-methods">
  <li class="payment-method cartao">
    <input name="payment_methods" value="cartao" type="radio" id="cartao">
    <label for="cartao" style="background-image:url('_imagens/cartao.jpg');"></label>
  </li>

  <li class="payment-method boleto">
    <input name="payment_methods" value="boleto" type="radio" id="boleto">
    <label for="boleto" style="background-image:url(_imagens/boleto.jpg);"></label>
  </li>

  <li class="payment-method dinheiro">
    <input name="payment_methods" value="dinheiro" type="radio" id="dinheiro">
    <label for="dinheiro" style="background-image:url(_imagens/dinheiro.jpg);"></label>
  </li>
</ul>

<br><br><br><br><br>
<h4>*Pagamento com dinheiro tem 5% de desconto</h4>

<br>
<h3>Deseja receber nossa newsletter com promoções?</h3>
<input type="checkbox" name="opcao" value="sim">Sim <br>
<input type="checkbox" name="opcao" value="nao">Não <br>

<br><br>

<center>Preço Final:<br>

<input type="number" name="final" min="0"  value ="0" readonly/>
<input type="submit" name="submeter" value = "Finalizar"/>
<br><br>
<input type="reset" name="resetar" value="Limpar">

<br><br>

</form>
</center>
</body>
    
</html>