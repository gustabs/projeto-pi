    function formv() {
        if (document.dados.lNome.value == "") {
            alert('Preencha o campo Nome.')
            return false;
        }

        if (document.dados.lSenha.value == "") {
            alert('Preencha o campo Senha.')
            return false;
        }
        if (document.dados.lSenha.value.length <= 8) {
            alert('O campo Senha deve conter mais que 8 caracteres!')
            return false;
            //este script é para caso o campo email nao tenha sido preemchido
        }
        if (document.dados.lEmail.value == "") {
            alert('Preencha o campo Email.')
            return false;
            //este script é para caso o campo email nao tenha sido preenchido
        }
        if (document.dados.lEmail.value.indexOf('@') == -1) {
            alert('Preencha o campo Email corretamente contendo "@".')
            return false;
            //este script é para caso nao tenha "@" no campo email
        }
        if (document.dados.lEmail.value.indexOf('.') == -1) {
            alert('Preencha o campo Email corretamente contendo ".".')
            return false;
            //este script é para caso nao tenha "." no campo email
        } else {
            alert('Cadastro criado com sucesso.')
            return true;
            //se for feito tudo de forma correta vai para o else
        }
    }