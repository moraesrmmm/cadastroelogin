function exibirErro() {
    const urlParams = new URLSearchParams(window.location.search);
    const erro = urlParams.get('erro');

    if (erro === 'senha-incorreta') {
        alert('Senha incorreta. Tente novamente.');
    } else if (erro === 'email-nao-encontrado') {
        alert('Usuário não encontrado com o e-mail fornecido.');
    }
}