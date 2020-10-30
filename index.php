<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entre ou cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">
    
</head>

<body>
    <main>
        <section class="painel-login">
            <div class="card">
                <h1>Entre ou cadastre-se</h1>
                <form action="login_usuario.php" method="POST">
                    <input type="email" placeholder="E-mail" name="email"required>
                    <input type="password" placeholder="Senha" name="senha" required>
                    <button type="submit">Entrar</button>
                </form>
                <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui</a>
            </div>


        </section>
        <section class="painel-imagem">
            <img src="./images/login.svg" alt="">
        </section>
    </main>
</body>

</html>