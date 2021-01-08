<!--pIpc^2T5-->
<?php
session_start();
//Se não existir um valor no nome da sessão, encerra o processamento
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <title>Perfil</title>
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
                        <a class="dropdown-item" href="#">Meu perfil</a>
                        <a class="dropdown-item" href="logout.php">Sair</a>
                    </div>
                </div>
            </div>

        </nav>
    </header>

    <!--Conteúdo-->
    <main class="container">
        <section class="row pt-5">

            <div class="col-lg-4">
                <img src="<?php echo $_SESSION['imagem']; ?>" style="height:300px;width:300px" class="rounded-circle" alt="<?php echo $_SESSION['nome']; ?>">
            </div>
            <div class="col-lg-8">

                <h1>
                    <?php echo $_SESSION['nome']; ?>
                </h1>
                <p>
                    <?php echo $_SESSION['email']; ?>
                </p>
            </div>

        </section>

        <section class="mt-5 border p-5">
            <div class="alert alert-danger" role="alert">
                Cuidado! A exclusão da conta é permanente e irreversível! 
            </div>

            <button class="btn btn-danger" onclick="confirmar()">Remover a conta</button>
        </section>

    </main>

    <script>
        function confirmar(){
           let confirmacao = confirm("Você realmente deseja excluir a conta?");
            if(confirmacao){
                location.href = "remover_conta.php?id="+<?php echo $_SESSION['id'];?>;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>