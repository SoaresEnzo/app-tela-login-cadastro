<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(strlen($email)>3 && strlen($senha) >3) {

    $senha_crypto= md5($senha);

    $conn = mysqli_connect("localhost","root","","sistema");
//Veirificacao se tem email igual no banco de dados




//Fim da verificacao

    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha_crypto'";

    $result = $conn->query($sql);
//Aplica os valores retornados do banco à sessão, para guardar para outras páginas.
    $usuarios = mysqli_fetch_all($result);
    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['email'] = $usuarios[0][2];
    $_SESSION['senha'] = $usuarios[0][3];

    header('Location: home.php');
} else {
    echo '
    <script>
    alert("E-mail ou senha inválidos");
    location.href = index.php;
    </script>
    ';
}