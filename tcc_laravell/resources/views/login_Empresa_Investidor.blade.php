<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/loginEmpresaInvestStyle.css') }}">
    <title>Pagina de Login</title>
</head>
<body>
   
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <main>
        <div class="container">
            <form method="POST" action="processa.php">
                <h2>Login</h2>
                <div class="caixa-form">
                    <div class="input-form">
                        <p>Email:</p>
                        <input type="email" name="email" required class="input-email">
                    </div>
                    <div class="input-form">
                        <p>Senha:</p>
                        <input type="password" required class="input-senha">
                    </div>
                    <div class="div-botao">
                        <a href="http://127.0.0.1:8000/pagina_principal/" type="submit" value="Cadastrar" class="entrar">Entrar</a>
                    </div>
                    <div class="div-voltar">
                        <a href="">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>