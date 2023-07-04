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
    <style>
    @media screen and (max-width: 600px) {
        main > section {
            max-width: 425px;
        }
    }
    </style>
    <title>Pagina de Login</title>
</head>
<body>
    <header>
        <a href="http://127.0.0.1:8000/land_page/">
            <img src="../img/imagensLoginEmpresaInvestidor/btnReturn.png" alt="bota de retorno">
        </a>
    </header>

    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <main>
        <section>
            <form method="POST" action="processa.php">
                <h2>Login</h2>
                <div>
                    <div class="socialInput">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" id="inputEmail"required placeholder="Insira seu email" onclick="removePlaceholderEmail()">
                    </div>
                    <div class="socialInput">
                        <label for="inputSenha">Senha</label>
                        <input type="password" name="password" id="inputSenha" required placeholder="Insira sua senha" onclick="removePlaceholderSenha()">
                    </div>
                    <div class="esSenha ">
                        <a href="#">Esqueceu a senha?</a>
                    </div>
                    <div class="btnEntrar">
                        <a href="http://127.0.0.1:8000/pagina_principal/" type="submit" value="Cadastrar" class="entrar">Entrar</a>
                    </div>
                    <div class="diretorioRegistro">
                        <p>Não possui uma conta?<a href="http://127.0.0.1:8000/login/"> crie uma</a></p>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script>
        var inputEmail = document.getElementById('inputEmail');
        var inputSenha = document.getElementById('inputSenha');
    
        inputEmail.addEventListener('click', function() {
            removePlaceholderEmail();
            applyBlueBorder(inputEmail);
        });
    
        inputSenha.addEventListener('click', function() {
            removePlaceholderSenha();
            applyBlueBorder(inputSenha);
        });
    
        document.addEventListener('click', function(event) {
            var targetElement = event.target;
    
            if (targetElement !== inputEmail) {
                inputEmail.placeholder = 'Insira seu email';
                removeBlueBorder(inputEmail);
            }
    
            if (targetElement !== inputSenha) {
                inputSenha.placeholder = 'Insira sua senha';
                removeBlueBorder(inputSenha);
            }
        });
    
        function removePlaceholderEmail() {
            inputEmail.placeholder = '';
        }
    
        function removePlaceholderSenha() {
            inputSenha.placeholder = '';
        }
    
        function applyBlueBorder(input) {
            input.style.borderBottom = '2px solid blue';
        }
    
        function removeBlueBorder(input) {
            input.style.borderBottom = '';
        }
    </script>  
</body>
</html>