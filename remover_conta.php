<?php
session_start();
$id=$_GET['id'];
if($id==$_SESSION['id']){
    $conn = mysqli_connect("localhost","root","","sistema");
    $sql = "DELETE FROM usuarios WHERE id_usuario='$id'";
    $result = $conn->query($sql);
    if($result == true){
        echo '<script>
        alert("Conta excluída com sucesso");
        location.href = "index.php"
        </script>';
        session_destroy();
    } else {
        echo '<script>
        alert("Deu algum erro, tente novamente mais tarde");
        location.href = "home.php"
        </script>';
    }
} else {
    echo '<script>
        alert("Não foi possível excluir a conta");
        location.href = "home.php"
        </script>';
}