<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pagPrincipalStyle.css') }}">
    <script src="{{ asset('js/paginaPrincipal.js') }}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
    <title>Página Principal</title>
</head>
<body>
    <header>
        <div>
            <div class="container-logo">
                <a href="http://127.0.0.1:8000/pagina_principal/" class="logoStart"><img src="../img/imagensPaginaPrincipal/startLogo.png" alt="logo Start"></a>
            </div>
            <nav id="navegacao-top">
                <ul>
                    <li>
                        <a href="http://127.0.0.1:8000/pagina_principal/">
                            <span>Página principal</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/perfil_empresa/">
                            <span>Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showModal()">
                            <span>Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="container-pesquisa">
                <form action="#" method="post">
                    <input type="text" name="pesquisar" id="inputPesquisa" placeholder="Buscar" autocomplete="off">
                    <button type="submit" class="buttonConfirmPesquisa">
                        <i class="material-icons" style="font-size: 22px; width: 22px;">search</i>
                    </button>                   
                </form>
            </div>
        </div>
    </header>
    <div id="overlay"></div>    
    <div id="publish" onclick="showStart()">
        <i class="material-icons">add</i>
    </div>
    <main>
        <section class="container">
            <div class="sessao-diretorios">
                <div class="container-diretorios">
                    <div class="box-diretorios">
                        <a href="#" class="usuario hover-social-diretorio">
                            <div class="box-usuario">       
                                <div class="box-foto-usuario">
                                    <div class="foto-usuario social-imagem"></div>
                                </div>
                                <div class="informacoes-usuario flex-social">
                                    <span class="nome-usuario">Rolex S.A</span>
                                    <span class="classificacao-usuario">Empresa</span>
                                </div>
                            </div>
                        </a>
                        <div class="divisoria"></div>
                        <nav class="navegacao-bottom"> 
                            <a href="http://127.0.0.1:8000/pagina_principal/" class="perfil-nav hover-social-diretorio">
                                <div class="box-nav">
                                    <div class="svg-pp svg-social"></div>
                                    <div class="text-nav">
                                        <span>Página principal</span>
                                    </div>
                                </div>
                            </a>
                            <a href="http://127.0.0.1:8000/perfil_empresa/" class="perfil-nav hover-social-diretorio">
                                <div class="box-nav">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg-perfil">
                                        <g data-name="Capa 2" id="Capa_2">
                                            <path d="M411.81,415.37H100.19a6,6,0,0,1-6-6c0-89.22,72.59-161.81,161.81-161.81s161.81,72.59,161.81,161.81A6,6,0,0,1,411.81,415.37Zm-305.5-12H405.69c-3.16-79.83-69.1-143.81-149.69-143.81S109.47,323.54,106.31,403.37Z"/>
                                            <path d="M256,254a78.69,78.69,0,1,1,78.69-78.69A78.78,78.78,0,0,1,256,254Zm0-145.38a66.69,66.69,0,1,0,66.69,66.69A66.77,66.77,0,0,0,256,108.63Z"/>
                                        </g>
                                    </svg>
                                    <div class="text-nav">
                                        <span>Perfil</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="perfil-nav hover-social-diretorio" onclick="showModal()">
                                <div class="box-nav">
                                    <div class="svg-sair svg-social"></div>
                                    <div class="text-nav">
                                        <span>Sair</span>
                                    </div>
                                </div>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sessao-ideias">
                <div class="box-ai">
                    <h1 class="algumas-ideias">Algumas ideias</h1>
                </div>
                <div class="container-ideias" id="ideia0192">

                </div>
                <div class="divisoria-categoria"></div>
                <div class="sessao-conteudo-principal">
                    <div class="box-c">
                        <h2 class="text-categoria">Categorias</h2>
                    </div>
                    <div class="container-categorias">
                        <div class="box-categorias">
                            <a href="#" class="categorias">Programação</a>
                        </div>
                        <div class="box-categorias">
                            <a href="#" class="categorias">Tecnologia</a>
                        </div>
                        <div class="box-categorias">
                            <a href="#" class="categorias">IA</a>
                        </div>
                        <div class="box-categorias">
                            <a href="#" class="categorias">Economia</a>
                        </div>
                        <div class="box-categorias">
                            <a href="#" class="categorias">Moda</a>
                        </div>
                    </div>
                    <div class="conteudo-principal">
                        <div id="publicacoes">

                        </div>
                    </div>
                </div>
            </div>
            <div class="sessao-amigos">
                <div class="container-amigos">
                    <div class="box-amigos">
                        <a href="http://127.0.0.1:8000/perfil_usuario/" class="usuario hover-social-diretorio">
                            <div class="box-usuario">       
                                <div class="box-foto-usuario">
                                    <div class="foto-amigo social-imagem"></div>
                                </div>
                                <div class="informacoes-usuario flex-social">
                                    <span class="nome-usuario">Rebeca Howyn</span>
                                    <span class="classificacao-usuario">Investidor</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="sair-confirm" id="modal">
        <div>
            <div class="sair-titulo">
                <p>Confirmar Saída</p>
            </div>
            <div class="sair-text">
                <p>Você tem certeza que quer sair?</p>
            </div>
            <div class="sair-escolhas">
                <div class="sair-social">
                    <button class="cancelar-button" onclick="hideModal()">Cancelar</button>
                </div>
                <div class="sair-social">
                    <button class="confirm-button" onclick="hideModal()">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="showStart">
        <div class="cancelar-start">
            <button class="cancelar-start-button" onclick="hideStart()">
                <i class="material-icons">close</i>
            </button>
        </div>
        <div class="container-all-ideia">
            <div class="container-form-start">
                <form action="#" method="post" onsubmit="handleSubmit(event)">
                    <div class="social-display">
                        <label for="inputNomeStart">Nome</label>
                        <input type="text" name="inputNomeStart" id="inputNomeStart" placeholder="Insira o nome da startup" autocomplete="off" required>
                    </div>
                    <div class="social-display">
                        <label for="inputDescricaoStart">Descrição</label>
                        <textarea name="inputDescricaoStart" id="inputDescricaoStart" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="social-display">
                        <label for="inputCategoriaStart" aria-required="true">Categorias</label>
                        <select class="categoriaSelect" id="inputCategoriaStart">
                          <option value="tecnologia" label="Tecnologia"></option>
                          <option value="programação" label="Programação"></option>
                          <option value="automação" label="Automação"></option>
                          <option value="ia" label="I.A"></option>
                          <option value="design" label="Design"></option>
                        </select>
                    </div>
                    <div class="social-display">
                        <label for="imagemStartInput">Imagem</label>
                        <div class="container-imagem-banner-start">
                            <div class="inserirImagem">
                                <input type="file" id="imagemStartInput" accept="image/*">
                                <p>Insira sua imagem</p>
                            </div>
                            <div class="mostrarImagem" id="localImagem">
                                
                            </div>  
                        </div>        
                    </div>
                    <div class="social-display">
                        <label for="BannerStartInput">Banner</label>
                        <div class="container-imagem-banner-start">
                            <div class="inserirBanner">
                                <input type="file" id="BannerStartInput" accept="image/*">
                                <p>Insira seu banner</p>
                            </div> 
                            <div class="mostrarBanner" id="localBanner">
                                
                            </div>
                        </div>         
                    </div>
                    <div class="publicar-start">
                        <button type="submit" class="publicar-start-button" onclick="hideStart()">Publicar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="openStart">
        <div class="fechar-start">
            <button class="fechar-start-button" onclick="fecharStart()">
                <i class="material-icons">close</i>
            </button>
        </div>  
        <div class="background-open-start background-open-start-social"></div>
        <div class="profile-open-start profile-open-start-social"></div>
        <div class="content-infor-open-start">
            <div class="nome-open-start">
                <span></span>
            </div>
            <div class="sobre-open-start">
                <span></span>
            </div>
            <div class="categoria-open-start">
                <span></span>
            </div>
        </div>
    </div>
    <footer>
        <section class="footerEsquerda">
            <img src="../img/imagensPaginaPrincipal/startLogo.png" alt="Logo 'Start'">
            <p class="contato">Contato:</p>
            <p>start_projetos@startup.com.br</p>
        </section>
        <section class="footerDireita">
            <h3>Desenvolvedores</h3>
            <p>Moisés da Costa Dias</p>
            <p>Rogério Antônio Augusto</p>
            <p>Gustavo Borin Nascimento</p>
            <p>Christian Rafael Félix Nobre</p>
            <p>João Lucas dos Santos Mazarini</p>
            <p>Maurílio Silva Rocha</p>
            <p>Isabelle Sass Silva</p>
        </section>
    </footer>
</body>
</html>