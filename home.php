<?php
session_start();
//Se não existir um valor no nome da sessão, encerra o processamento
if(!isset($_SESSION['nome'])){
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    OLÁ,<?php echo $_SESSION['nome'];?>
    <br>
    <a href="<?php session_destroy()?>">Sair</a>
</body>
</html>