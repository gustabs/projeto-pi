function validar(){
    if (document.formu.nome.value == "" || document.formu.nome.value. length <3){
        alert('Preencha o campo NOME')
        return false;
    }
    if(document.formu.email.value == "" || document.formu.email.value.indexOf('@')== -1) {
        alert('Preencha o campo E-mail correspondente')
        return false;
    }

}