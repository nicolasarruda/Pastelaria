var totCarne, totCamarao, totFrango, totQueijo, totAPagar;

function calc_Carne(){
    var totCarne = parseFloat(document.getElementById('cQtdeCarne').value) * parseFloat(document.getElementById('cPrecoCarne').value);
    document.getElementById('cTotalCarne').value = totCarne;
}

function calc_Camarao(){
    var totCamarao = parseFloat(document.getElementById('cQtdeCamarao').value) * parseFloat(document.getElementById('cPrecoCamarao').value);
    document.getElementById('cTotalCamarao').value = totCamarao;
}

function calc_Frango(){
    var totFrango = parseFloat(document.getElementById('cQtdeFrango').value) * parseFloat(document.getElementById('cPrecoFrango').value);
    document.getElementById('cTotalFrango').value = totFrango;
}

function calc_Queijo(){
    var totQueijo = parseFloat(document.getElementById('cQtdeQueijo').value) * parseFloat(document.getElementById('cPrecoQueijo').value);
    document.getElementById('cTotalQueijo').value = totQueijo;
}

function calc_APagar(){
     var total = document.getElementById('cTotalQueijo').value + document.getElementById('cTotalFrango').value + document.getElementById('cTotalCamarao').value + document.getElementById('cTotalCarne').value;
     document.getElementById('cTotalAPagar').value = total;
     
}