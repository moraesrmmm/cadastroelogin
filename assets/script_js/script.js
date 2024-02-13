const senha = document.querySelector('.senha');
const confSenha = document.querySelector('.conf-senha');
const msgErro = document.querySelector('.msg-erro');
const telefone = document.querySelector('.telefone');

telefone.addEventListener("input", function () {
    if (this.value.length > 11) {
        this.value = this.value.slice(0, 11);
    }
    if (this.value.length < 10) {
        msgErro.textContent = 'Telefone Inválido';
    } else {
        msgErro.textContent = '';
    }
});

function tamanhoSenha() {
    if (senha.value.length < 6) {
        msgErro.textContent = 'A senha deve conter pelo menos 6 caracteres.';
    } else {
        msgErro.textContent = '';
    }
}

function senhaIguais(){
    if (senha.value !== confSenha.value) {
        msgErro.textContent = 'As senhas não coincidem.';
    } else {
        msgErro.textContent = '';
    }
}

senha.addEventListener('input', tamanhoSenha);
confSenha.addEventListener('input', senhaIguais);