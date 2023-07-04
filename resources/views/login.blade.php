<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('mediaQuery/loginMQ.css') }}">
    <title>Login</title>
</head>
<body>
    <header>
        <a href="http://127.0.0.1:8000/land_page/">
            <img src="../img/imagensLogin/btnReturn.png" alt="">
        </a>
    </header>
    <main>
        <section>
            <div>
                <div class="imagemEmpresa"></div>
                <h3>Empresas</h3>
                <p>Tenho boas ideias e procuro investimentos</p>
                <a href="http://127.0.0.1:8000/login_Empresa/">Sou uma empresa!</a>
            </div>
            <div>
                <div class="imagemInvestidor"></div>
                <h3>Investidor(a)</h3>
                <p>Procuro empresas ou boas StartUps para investir</p>
                <a href="http://127.0.0.1:8000/login_investidor/">Sou um investidor!</a>
            </div>
        </section>
    </main>
    <footer>
        <div></div>
        <h1>sou empresa ou investidor?</h1>
    </footer>
</body>
</html>