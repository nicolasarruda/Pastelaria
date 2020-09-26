function calc_Preco(){
    var preco1 = 8.00;
    var preco2 = 12.00;
    var preco3 = 8.00;
    var preco4 = 10.00;
    var preco5 = 8.00;
    var preco6 = 16.00;
    var quantia1 = document.quack.carne.value;
    var final1 = quantia1*preco1;
    document.quack.carne1.value = final1.toFixed(2);
    var quantia2 = document.quack.camarao.value;
    var final2 = quantia2*preco2;
    document.quack.camarao1.value = final2.toFixed(2);
    var quantia3 = document.quack.frango.value;
    var final3 = quantia3*preco3;
    document.quack.frango1.value = final3.toFixed(2);
    var quantia4 = document.quack.queijo.value;
    var final4 = quantia4*preco4;
    document.quack.queijo1.value = final4.toFixed(2);
    var quantia5 = document.quack.cala.value;
    var final5 = quantia5*preco5;
    document.quack.cala1.value = final5.toFixed(2);
    var quantia6 = document.quack.inf.value;
    var final6 = quantia6*preco6;
    document.quack.inf1.value = final6.toFixed(2);
    var finalz = final1+final2+final3+final4+final5+final6;
    document.quack.final.value = finalz.toFixed(2);
}
