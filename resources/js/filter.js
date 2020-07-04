

window.mascaraNome = function(e){
    const valor = e.target.value;
    e.target.value = valor.replace(/[^a-zA-Z ]/g, '');    
}

window.mascararCpf = function(e){    
    event.target.minLength = 14;
    event.target.maxLength = 15;
    let cpf = e.target.value;    
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    e.target.value = cpf;
}
window.soNumero = function(e){
    const valor = e.target.value;
    e.target.value = valor.replace(/\D/g,"");    
}
window.soQuebrado = function(e){
    const valor = e.target.value;
    e.target.value = valor.replace(/[^\d.]|\.(?=.*\.)/g,"");    
}