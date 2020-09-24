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
    var totAPagar = parseFloat(document.getElementById('cTotalCarne').value) + parseFloat(document.getElementById('cTotalCamarao').value) + parseFloat(document.getElementById('cTotalFrango').value) + parseFloat(document.getElementById('cTotalQueijo').value);
    document.getElementById('cTotalAPagar').value = totAPagar;
}