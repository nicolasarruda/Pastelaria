function calc_Preco(){
    var preco1 = 8;
    var preco2 = 12;
    var preco3 = 8;
    var preco4 = 10;
    var preco5 = 8;
    var preco6 = 16;
    var quantia1 = document.quack.carne.value;
    document.quack.carne1.value = quantia1*preco1;
    var quantia2 = document.quack.camarao.value;
    document.quack.camarao1.value = quantia2*preco2;
    var quantia3 = document.quack.frango.value;
    document.quack.frango1.value = quantia3*preco3;
    var quantia4 = document.quack.queijo.value;
    document.quack.queijo1.value = quantia4*preco4;
    var quantia5 = document.quack.cala.value;
    document.quack.cala1.value = quantia5*preco5;
    var quantia6 = document.quack.inf.value;
    document.quack.inf1.value = quantia6*preco6;
    var final = quantia1*preco1 + quantia2*preco2 + quantia3*preco3 + quantia4*preco4 + quantia5*preco5 + quantia6*preco6;
    document.precofinal.final.value = final;

}