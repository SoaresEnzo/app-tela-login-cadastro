<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(strlen($email)>3 && strlen($senha) >3) {

    $senha_crypto= md5($senha);

    $conn = mysqli_connect("localhost","root","","sistema");
    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha_crypto'";

    $result = $conn->query($sql);
//Aplica os valores retornados do banco à sessão, para guardar para outras páginas.
    $usuarios = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuarios['nome_usuario'];
    $_SESSION['imagem'] = $usuarios['imagem'];
    $_SESSION['email'] = $usuarios['email_usuario'];
    $_SESSION['id'] = $usuarios['id_usuario'];
    header('Location: home.php');
} else {
    echo "
    <script>
        alert('E-mail ou senha inválidos!')
        location.href = 'index.php'
    </script>
";
}