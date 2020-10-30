<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entre ou cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <main>
        <div class="card">
            <h1>Cadastre-se</h1>
            <form action="cadastro_usuario.php" method="POST">
                <input type="text" name="nome" placeholder="Digite o seu nome" required>
                <input type="email" name ="email" placeholder="Digite o seu e-mail" required>
                <input type="password" name="senha" placeholder="Digite a sua senha" required>
                <input type="password" name="conf_senha" placeholder="Confirme a sua senha" required>
                <button type="submit">Cadastre-se</button>
                <a href="./index.php">Já possui cadastro? Realize o login</a>
            </form>
        </div>
    </main>
</body>

</html>