<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: index.php");
} else {
    $nome = $_SESSION["nome"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(98, 98, 99);
            color: white;
        }

        .form {
            background-color: blue;
            padding: 10px;
        }
    </style>
</head>

<body>

    <ul class="nav justify-content-end bg-dark">
        <li class="nav-item">
            <a class="nav-link active" href="#">Ativo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <form action="logout.php" method="POST" class="nav-item">
            <input type="submit" value="Sair" class="btn btn-primary">
    </form>
    </ul>
    <?php
    echo "<h1 class='text-center'> Bem Vindo <u>$nome</u></h1>";
    ?>
</body>

</html>