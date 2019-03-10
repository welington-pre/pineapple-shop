
$(document).ready(function() {
    $('#cnpj').mask('00.000.000/0000-00');
    $('#cpf').mask('000.000.000-00');
    $('#rg').mask('00.000.000-0');
    $('#tel').mask('(00) 0000-0000');
    $('#cel').mask('(00) 00000-0000');
    $('#cep').mask('00000-000');
});

function limpMask(strDados) {
    var unmask_value = $(strDados).cleanVal();
    
    return unmask_value;
}
