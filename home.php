<!--
    1ª Monitoria PHP 17/11:
    Link: https://zoom.us/rec/play/yY3NAE4UWKjUAEJMkjntqfme4ie3py_d-yTZbPrYO_zRpwbmelH2bXfuFqUI1abw1qGd5WMp1b80o78C.wgB4beN9ujIO07rI
    Senha: D6?cTzLx
-->
<?php
session_start();
//Se não existir um valor no nome da sessão, encerra o processamento
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
} else{
    $conn = mysqli_connect('localhost','root','','sistema');
    $postagens = $conn->query("SELECT * FROM postagens JOIN usuarios WHERE fk_usuario = id_usuario ORDER BY id_postagens DESC");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <title>Document</title>
</head>


<body>
    <!--Cabeçalho-->
    <header class="container-fluid border shadow">
        <nav class="row container m-auto">
            <div class="col-10 d-flex align-items-center">
                <img src="<?php echo $_SESSION['imagem']; ?>" class="rounded-circle" alt="<?php echo $_SESSION['nome']; ?>">
               <h5 class="ml-3 mb-0"> <?php echo $_SESSION['nome']; ?></h5>
            </div>


            <div class="col-2 d-flex align-items-center justify-content-end">
                <div class="dropdown">
                    <button class="btn dropdown-toggle text-white rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="perfil.php">Meu perfil</a>
                        <a class="dropdown-item" href="logout.php">Sair</a>
                    </div>
                </div>
            </div>

        </nav>
    </header>

    <!--Conteúdo-->
    <main class="container">
        <form class="form-row mt-5" action="cadastro_postagens.php" method="POST">
            <input type="text" class="col-9 form-control" name="post" placeholder="No que você está pensando, <?php echo $_SESSION['nome']; ?>?">
            <button type ="submit" class="col-3 btn text-white">Publicar</button>
        </form>

        <?php
        if($postagens->num_rows>0){
        foreach($postagens as $postagem){
            
        ?>

        <div class="card mt-5">
            <div class="card-header">
            <img src="<?php echo $postagem['imagem']; ?>" class="rounded-circle" alt="<?php echo $postagem['nome_usuario']; ?>">
            </div>
            <div class="card-body">
            <?php echo $postagem['conteudo']?>
            </div>
        </div>
        <?php
        }} else {
            echo "Ainda não tem nenhum post :(";
        }
        ?>

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>