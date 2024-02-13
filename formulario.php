<?php
if (isset($_POST["submit"])) {
    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['telefone']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    if ($senha != $conf_senha) {
        return;
    } else if (strlen($senha) < 6) {
        return;
    } else if (strlen($telefone) < 10) {
        return;
    } else {
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios(nome,email,telefone,senha) VALUES ('$nome','$email', '$telefone', '$senhaCriptografada' )";
        $result = mysqli_query($conexao, $query);

        if ($result) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/formulario.css">
</head>

<body>
    <div class="container">
        <form action="formulario.php" method="POST" class="form-contains" onsubmit="">
            <h1>Cadastro</h1>
            <input name="nome" type="text" placeholder="Nome Completo" required>
            <input name="email" type="text" placeholder="Email" required>
            <input name="telefone" type="text" placeholder="Telefone" required class="telefone">
            <input name="senha" type="password" placeholder="Senha" class="senha">
            <input name="conf_senha" type="password" placeholder="Confirmar Senha" class="conf-senha">
            <input type="submit" name="submit" class="submit">
            <div class='msg-erro'></div>
            <a class="link-login" href="index.php">Fazer login</a>
        </form>

    </div>
    <script src="assets/script_js/script.js"></script>
</body>

</html>