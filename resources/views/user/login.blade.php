<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap">
</head>
<body>

    <div class="background">
        
    </div>

    <section id="conteudo-view" class="login">

        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimentos</h3>

        <form method="post" action="{{ route('user.login') }}">

            <p>Acesse o sistema</p>

            <label>
                <input type="text" class="input" name="username" id="username" placeholder="Usuário">
            </label>

            <label>
                <input type="password" placeholder="Senha" name="password" id="password">
            </label>

            <input id="botao-entrar" type="submit" name="entrar" value="Entrar">

        </form>
        
    </section>
    
</body>
</html>