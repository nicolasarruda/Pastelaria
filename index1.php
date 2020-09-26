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
<table id = "listapastel" style = "text-align: center;">
    <form name = "quack">
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
</form>
</table>
<center>Preço Final:<br>
    <form name = "precofinal">
<input type="number" name="final" min="0"  value ="0" readonly/>
<input type="submit" name="submeter" value = "Finalizar"/>
</form>
</center>
</body>
    
</html>