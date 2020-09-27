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

<center><h1>Dados do Pedido:</h1><br><br>
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
    echo "<p>Nome do cliente:";
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        echo $nome . "</p>";
    } else {
        $nome = "Não foi digitado nenhum nome";
        echo $nome . "</p><br><br>";
    }
    echo "<h3>Pastéis selecionados:</h3><br><br>";
    $link = "pasteis.xml";
    $xml = simplexml_load_file($link) -> pasteis;

foreach($xml -> sabores as $aula){

    if($_POST[utf8_decode($aula -> codigo)]){
         $num1 = $_POST[utf8_decode($aula -> codigo)];
        if($num1 != 0){
             $num3 = ($aula -> preco);
             echo "<center>".$num1 . "x Pastel (éis) do sabor: <strong>" .utf8_decode($aula -> nome) . "</strong> Preço unitário: " . utf8_decode($num3) . "</center><br>";
        }
    }   
}
echo "<h3>Forma de pagamento</h3>";
if(isset($_POST['payment_methods'])){
    $payment = $_POST['payment_methods'];
    if($payment == "dinheiro"){
        echo "<h5>DINHEIRO<h5>";
   
    if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        $num2 = $num2 * 0.95;
        $num2 = number_format($num2,2,",","");
        echo "Preço da compra com desconto: R$ ".$num2."<br><br>";
        }
    } else if($payment == "boleto") {
        echo "<h5>BOLETO<h5>";
        if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        $num2 = number_format($num2,2,",","");
        echo "Preço da compra sem desconto: R$ ".$num2."<br><br>";
    }
   } else {
       echo "<h5>CARTÃO<h5>";
       if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        $num2 = number_format($num2,2,",","");
        echo "Preço da compra sem desconto: R$ ".$num2."<br><br>";
   }
   } 
}
    echo "<h3>Newsletter:</h3><br><br>";
    if(isset($_POST['opcao'])){
        $opcao = $_POST['opcao'];
        if($opcao == "sim"){
            echo "O cliente deseja receber nossa newsletter";
        } else if ($opcao == "nao") {
            echo "O cliente não deseja receber nossa newsletter";
        } else if ($opcao == "sim" && $opcao == "nao") {
            echo "Operação inválida";
        }
    }

    echo "<h3>Validade do pedido:</h3><br>";

    echo "Horário do pedido: " . date(" d") . " de " . $mes . " de " . date(" Y ") . date("H:i:s") . "<br><br>";
    $horario = "23:59:59";
    echo "Válido até: " . date(" d") . " de " . $mes . " de " . date(" Y ") . date($horario);



    // Montando o arquivo.txt

    $horariodopedido = "Horário do pedido: " . date(" d") . " de " . $mes . " de " . date(" Y ") . date("H:i:s");
    $horario = "23:59:59";
    $horariovalidade = "Válido até: " . date(" d") . " de " . $mes . " de " . date(" Y ") . date($horario);

    if(isset($_POST['nome']) == null){
        $nome = "Não foi digitado nenhum nome";
    } else {
        $nome = "Nome do cliente: " .  $_POST['nome'];
    }

    $pastelselecionado = "Pastel selecionado(s):";

    $link = "pasteis.xml";
    $xml = simplexml_load_file($link) -> pasteis;
    $linha = "Dados do pedido:";
    $fp = fopen("arquivo.txt", "w");
    fwrite($fp,$horariodopedido.PHP_EOL);
    fwrite($fp,$horariovalidade.PHP_EOL);
    fwrite($fp,$nome.PHP_EOL);
    fwrite($fp,$pastelselecionado.PHP_EOL);
    foreach($xml -> sabores as $aula){

    if($_POST[utf8_decode($aula -> codigo)]){
        $num1 = $_POST[utf8_decode($aula -> codigo)];
        if ($num1 !=0){
            $num3 = ($aula -> preco);
        $pastel = $num1 . "x Pastel (éis) do sabor:" .utf8_decode($aula -> nome);
            fwrite($fp,$pastel.PHP_EOL);
        $pastelpreco = "Preço unitário: R$" . utf8_decode($num3);
            fwrite($fp,$pastelpreco.PHP_EOL);
        }
      }
   }

   if(isset($_POST['payment_methods'])){
    $payment = $_POST['payment_methods'];
    if($payment == "dinheiro"){
        $pagamento = "Forma de pagamento: DINHEIRO";
   
    if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        $descontinho = $num2*0.05;
        $descontinho = number_format($descontinho, 2, ',', '');
        $valordesconto = "Valor do desconto: R$ ".$descontinho;
        $num2 = $num2*0.95  ;
        $precototal =  "Preço da compra com desconto: R$ ".number_format($num2,2,",","");
        fwrite($fp,$valordesconto.PHP_EOL); 
        }
    } else if($payment == "boleto") {
        $pagamento = "Forma de pagamento: BOLETO";
        if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        $precoquack = number_format($num2,2,",","");
        $precototal = "Preço da compra sem desconto: R$ ".$precoquack;
    }
   } else {
       $pagamento = "Forma de pagamento: CARTÃO";
       if(isset($_POST['final'])){
        $num2 = $_POST['final'];
        $precoquack = number_format($num2,2,",","");
        $precototal =  "Preço da compra sem desconto: R$ ".$precoquack;
   }
   } 
}
    fwrite($fp,$pagamento.PHP_EOL);
    fwrite($fp,$precototal.PHP_EOL);

    if(isset($_POST['opcao'])){
        $opcao = $_POST['opcao'];
        if($opcao == "sim"){
            $op = "O cliente deseja receber nossa newsletter";
            fwrite($fp,$op);
        } else if ($opcao == "nao") {
            $op = "O cliente não deseja receber nossa newsletter";
            fwrite($fp,$op);
        } else if ($opcao == "sim" && $opcao == "nao"){
            $op = "Operação inválida";
            fwrite($fp,$op);
        }
    }

    
    fclose($fp);

   
    ?>

<br><br><br>

</center>
</body>
    
</html>