<!--DESAFIO =>>> FAZER A TRATATIVA DE EMAILS IGUAIS NO BANCO DE DADOS-->
<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$imagem=$_POST['imagem'];
$senha=$_POST['senha'];
$conf_senha=$_POST['conf_senha'];


//Validação cadastro
if(strlen($nome)>3 && strlen($email) > 3 & strlen($senha)>3 && $senha === $conf_senha) {
    $senha_crypto = md5($senha);
    //Criação da conexão    
    $conn = mysqli_connect("localhost","root","","sistema");
    $sql = "INSERT INTO usuarios (nome_usuario,imagem,email_usuario,senha_usuario) VALUES ('$nome','$imagem','$email','$senha_crypto')";
    $conn->query($sql);
    echo '
    <script>
        alert("Usuário cadastrado com sucesso");
        window.location.href = "index.php"
    </script>
    ';

} else if ($senha != $conf_senha){
    echo '
    <script>
        alert("As senhas devem ser iguais, tente outra vez");
        window.location.href = "cadastro.php"
    </script>
    ';
} else if (strlen($email) <=3){
    echo '
    <script>
        alert("Digite um e-mail válido");
        window.location.href = "cadastro.php"
    </script>
    ';
} else if (strlen($senha)<=3){
    echo '
    <script>
        alert("Digite uma senha válida");
        window.location.href = "cadastro.php"
    </script>
    ';
} else if (strlen($nome)<=3) {
    echo '
    <script>
        alert("O nome deve ter mais de 3 caracteres");
        window.location.href = "cadastro.php"
    </script>
    ';
}