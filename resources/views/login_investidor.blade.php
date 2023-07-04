<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/loginInvestidorStyle.css') }}"> 
    <link rel="stylesheet" href="{{ asset('mediaQuery/loginInvestidorMQ.css') }}">
    <script src="{{ asset('js/loginInvestidor.js') }}"></script>
    <title>Registro investidor</title>
</head>
<body>
    <header>
        <a href="http://127.0.0.1:8000/login/">
            <img src="../img/imagensLoginInvestidor/btnReturn.png" alt="botao para retornar">
        </a>
    </header>
    <main>
        <section class="sectionEsquerda">
            <div>
                <div class="logoStart"></div>
                <p>Um investidor é alguém que fornece capital financeiro a uma empresa ou projeto visando obter retorno através do crescimento do investimento.</p>
            </div>
        </section>
        <section class="sectionDireita">
            <div class="containerRegistro">
                <div class="bannerInvestidor"></div>
                <div class="profileInvestidor"></div>
                <h3>Registro</h3>
                <div class="containerForm">
                    <form action="{{url('login_investidor')}}" method="post">  
                    @csrf 
                        <div>
                            <label for="inputEmail">Email</label>
                            <input type="email" required name="email" id="inputEmail" placeholder="Insira seu email" onclick="removePlaceholderEmail()">
                        </div>

                        <div>
                            <label for="inputSenha">Senha</label>
                            <input type="password" required name="senha" id="inputSenha" placeholder="Insira sua senha" onclick="removePlaceholderSenha()">
                        </div>

                        <div>
                            <label for="inputTel">Telefone</label>
                            <input type="tel" required name="telefone" id="inputTel" placeholder="Insira seu telefone" onclick="removePlaceholderTel()">
                        </div>

                        <div>
                            <label for="inputCPF">CPF</label>
                            <input type="number" required name="cpf" id="inputCPF" placeholder="Insira seu CPF" onclick="removePlaceholderCPF()">
                        </div>

                        <div>
                            <label for="inputRG">RG</label>
                            <input type="number" required name="rg" id="inputRG" placeholder="Insira seu RG" onclick="removePlaceholderRG()">
                        </div>

                        <div>
                            <label for="inputOcup">Ocupação</label>
                            <input type="number" required name="ocupacao" id="inputOcup" placeholder="Insira sua ocupação" onclick="removePlaceholderOcup()">
                        </div>

                        <div>
                            <label for="inputEnd">Endereço</label>
                            <input type="text" required name="endereco" id="inputEnd" placeholder="Insira seu endereço" onclick="removePlaceholderEnd()">
                        </div>

                        <div class="btnCriarConta">
                            <button type="submit">Criar conta</button>
                        </div>

                        <div class="possuoConta">
                            <p>Já possui uma conta? Faça <a href="http://127.0.0.1:8000/login_Empresa_Investidor/"> LOGIN<a></button>
                        </div>
                    </form>
                </div>
            </div>
       </section>
    </main>
</body>
</html>