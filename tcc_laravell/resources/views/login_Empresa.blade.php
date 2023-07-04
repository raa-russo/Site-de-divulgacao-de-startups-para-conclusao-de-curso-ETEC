<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/loginInvestidorStyle.css') }}"> 
    <title>logEmpresa</title>
</head>
<body>
    <main>
       <section class="section-esquerda">
        <a href="" class="container-seta">
            <img src="/img/le/simbolo-da-linha-de-seta-para-a-esquerda.png" alt="retornar" class="imagem-seta">
        </a>
        <div class="container-logo-start">
            <img src="/img/le/Group 6.svg" alt="logo start" class="imagem-start">
            <p>Lorem ipsum dolor it amet consectetur. Nec nunc marcenas proin justo elit. Et commodo ut eleifend ornare nam id.</p>
        </div>
        <div class="container-background">
            <img src="/img/le/Rectangle 100.png" alt="background" class="background-imagem">
        </div>
       </section>
       <section class="section-direita">
        <div class="container">
            <div class="banner-perfil">
                <img src="/img/le/Rectangle 98.png" alt="banner" class="banner">
            </div>
            <div class="icon-perfil">
                <img src="/img/le/Ellipse 36.png" alt="icon" class="icon">
            </div>
            <div class="caixa-nome">
                <p>Nome</p>
            </div>
            <div class="container-form">
                <form action="{{url('login_Empresa')}}" method="post">
                    @csrf
                    <div class="input-form">
                        <label>Email:</label>
                        <input type="email" required class="input-all email" name="email">
                    </div>

                    <div class="input-form">
                        <label>Senha:</label>
                        <input type="password" required class="input-all senha" name="senha">
                    </div>

                    <div class="input-form">
                        <label>Telefone:</label>
                        <input type="tel" required class="input-all tel" name="telefone">
                    </div>

                    <div class="input-form">
                        <label>CNPJ:</label>
                        <input type="number" required class="input-all cnpj" name="cnpj">
                    </div>

                    <div class="input-form">
                        <label>Área de atuação:</label>
                        <input type="number" required class="input-all cnpj" name="area_atuacao">
                    </div>

                    <div class="input-form">
                        <label>Endereço:</label>
                        <input type="text" required class="input-all ende" name="endereco">
                    </div>
                    <div class="redes-sociais">
                        <a href="https://www.facebook.com/" target="blank"><img src="/img/le/Facebook_f_logo_(2019).svg.png" alt="facebook logo"></a>
                        <a href="https://www.instagram.com/" target="blank"><img src="/img/le/pngtree-instagram-social-platform-icon-png-image_6315976.png" alt="instagram logo"></a>
                        <a href="https://web.whatsapp.com/" target="blank"><img src="/img/le/whatsapp-33.png" alt="whatsapp logo"></a>
                        <a href="https://www.linkedin.com/" target="blank"> <img src="/img/le/174857.png" alt="linkedin logo"></a>
                    </div>
                    <div class="redes-sociais-escrita">
                        <p>REDES SOCIAIS</p>
                    </div>
                    <div class="botao-container">
                        <!-- <a href="http://127.0.0.1:8000/pagina_principal/" type="submit" class="criar-conta-link">Criar conta</a> -->
                        <button type="submit" class="criar-conta-link">Criar conta</button>
                    </div>
                    <div class="div-entrar">
                        <a href="http://127.0.0.1:8000/login_Empresa_Investidor/">Entrar</a>
                    </div>
                </form>
            </div>
        </div>
       </section>
    </main>
</body>
</html>