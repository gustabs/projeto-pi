function validar(){
    if(document.dados.lNome.value == ""){
        alert('Preencha o campo Nome.')
        return false;
    }
    if(document.dados.lSenha.value == "") {
        alert('Preencha o campo Senha.')
        return false;
    }
    if(document.dados.lSenha.value.length <=8){
        alert('O campo Senha deve conter mais que 8 caracteres!')
        return false;
    }
    if(document.dados.lEmail.value == "") {
        alert('Preencha o campo Email.')
        return false;
    }
    if(document.dados.lEmail.value.indexOf('@')== -1){
        alert('Preencha o campo Email corretamente contendo "@".')
        return false;
    }
    if(document.dados.lEmail.value.indexOf('.')== -1) {
        alert('Preencha o campo Email corretamente contendo ".".')
        return false;
    }else{
        alert('Cadastro criado com sucesso.')
        return true;
    }
}
