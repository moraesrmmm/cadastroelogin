<!-- <?php

session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexao->query($sql);

    if ($result && $result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $usuario['nome']; 
            header("Location: app.php");
            exit();
        } else {
            session_unset();
            header("Location: tela-de-login.php?erro=senha-incorreta");
            exit();
        }
    } else {
        session_unset();
        header("Location: tela-de-login.php?erro=email-nao-encontrado");
        exit();
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/login.css">
</head>

<body>
    <div class="container">
        <form class="login" action="index.php" method="POST">
            <h1>Login</h1>
            <input type="text" placeholder="email" name="email">
            <input type="password" placeholder="senha" name="senha">
            <input class="input-submit" name="submit" type="submit"></input>
            <a class="link-login" href="formulario.php">Cadastre-se aqui</a>
        </form>
    </div>
    <script src="assets/script_js/script-login.js"></script>
</body>

</html>