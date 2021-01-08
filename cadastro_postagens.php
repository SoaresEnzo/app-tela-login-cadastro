<?php
session_start();
$postagem = $_POST['post'];
$id = $_SESSION['id'];

if (strlen($postagem) > 0) {
    $conn = mysqli_connect('localhost','root','','sistema');
    $result = $conn->query("INSERT INTO postagens(conteudo, fk_usuario) VALUES ('$postagem',$id)");
    if($result==true){
        echo '<script>
        alert("Postagem cadastrada com sucesso");
        location.href = "home.php"
        </script>';
    } else {
        echo '<script>
        alert("Deu algum erro, tente novamente mais tarde");
        location.href = "home.php"
        </script>';
    }
} else {
    echo '<script>
    alert("Digite algo para postar!");
    location.href = "home.php"
    </script>';
}
