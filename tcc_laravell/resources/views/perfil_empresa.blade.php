<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/perfilEmpresaStyle.css') }}">
    <script class="icons" src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <title>perfil_empresa</title>
</head>

<body>
    <header>
        <a href="#"><img id="logo" src="img/pfe/Group 6.svg" alt="Logo 'Start'"></a>

        <div>
            <div class="search">

                <form action="#">
                    <input type="text" placeholder=" Search..." name="search">
                    <button>
                        <span class="iconify" data-icon="ic:baseline-search" style="color: gray;" data-width="5vw"
                            data-height="3vh"></span>
                    </button>
                </form>
                <a><span class="iconify" id="headerIcon" data-icon="akar-icons:person" style="color: white;"
                        data-width="24" data-height="24"></span></a>
            </div>
        </div>

    </header>
    <content>
        <div class="cont1">
            <div>
                <div id="capa"></div>
                <div class="perfilLine1">
                    <div id="ftPerfil"></div>
                    <div style="text-align: start; margin-left: -12vw;">
                        <h1 id="titleEmpresa">ROLEX S.A. - INTERNACIONAL</h1>
                        <p id="categoriaEmpresa">#empresa</p>
                    </div>
                    <div style="text-align: center; margin: 1vh 5vw 0 0;">
                        <span class="iconify" data-icon="mdi:like-outline" style="color: #070330;" data-width="20"
                            data-height="20"></span>
                        <p style="font-weight: bold;">100k</p>
                    </div>
                </div>
                <div class="perfilLine2">
                    <p id="infoEmpresa">Fundação: 1905 (118 anos), Londres, Reino Unido</p>
                    <p id="sede">Sede: Genebra, Suíça</p>
                    <p id="estilo">Moda masculina</p>
                </div>
                <div>
                    <div>
                        <p id="categoriaLine1">TRABALHA NAS ÁREAS DE</p>
                    </div>
                    <div>
                        <div id="divisoria"></div>
                        <div class="categorias">
                            <p>Moda masculina</p>
                            <p>Relógios de luxo</p>
                            <p>Relógios</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="divisoria2"></div>
        <div class="descricaoContainer2">
            <p id="descricaoTitle">DESCRIÇÃO</p>
            <p id="descricaoDescricao">Lorem ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel
                condimentum nunc egestas vulputate. Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat
                etiam velit vel id.</p>
        </div>
        <div>
            <div class="container3">
                <div class="container3cont">
                    <div id="img1">
                        <div id="imgPerfilCont3"></div>
                    </div>
                    <p id="titleCont3">SOMOS UMA EMPRESA MODERNA</p>
                    <div id="linha1"></div>
                    <p id="descricaoCont3">Lorem ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel
                        condimentum nunc
                        egestas vulputate.
                        Quam mauris feugiat mattis in. </p>
                    <div class="cont3ButtonAlign">
                        <div class="cont3Botao">
                            <button id="botaoMais"><span class="iconify" data-icon="ic:round-more-horiz"
                                    style="color: #969696;" data-width="26" data-height="26"></span></button>
                        </div>
                    </div>
                </div>

                <div class="container3cont">
                    <div id="img2">
                        <div id="imgPerfilCont3"></div>
                    </div>
                    <p id="titleCont3">ESPECIALISADOS EM PRODUTOS EXCLUSIVOS</p>
                    <div id="linha1"></div>
                    <p id="descricaoCont3">Lorem ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel
                        condimentum nunc
                        egestas vulputate.
                        Quam mauris feugiat mattis in. </p>
                    <div class="cont3ButtonAlign">
                        <div class="cont3Botao">
                            <button id="botaoMais"><span class="iconify" data-icon="ic:round-more-horiz"
                                    style="color: #969696;" data-width="26" data-height="26"></span></button>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div id="divisoria3"></div>
                <p id="nossos_produtos">NOSSOS PRODUTOS</p>
            </div>
            <div>
                <div class="container4">
                    <div class="container3cont">
                        <div id="imgProduto1">
                            <div id="imgPerfilCont3"></div>
                        </div>
                        <div>
                            <div class="cont4CategoriasAlinhamento">
                                <div id="linhaCont4"></div>
                                <div class="categoriasCont4">
                                    <p>Moda masculina</p>
                                    <p>Relógios de luxo</p>
                                    <p>Relógios</p>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <div class="container4cont2">
                            <div id="categoriaEmpresa" style="margin-top: 3vh;">
                                <p>#empresa</p>
                            </div>
                            <div style="margin-bottom: 1vh;">
                                <div class="container4TitleButton">
                                    <p id="titleCont4">OYSTER - DAY AND NIGHT</p>
                                    <div class="cont4ButtonAlign">
                                        <div class="cont4Botao">
                                            <button id="botaoMais"><span class="iconify" data-icon="ic:round-more-horiz"
                                                    style="color: #969696;" data-width="26"
                                                    data-height="26"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <p id="Cont4Preco">R$ 89.000.00</p>
                            </div>
                            <div class="fabriMateriais">
                                <div id="linha1Cont4"></div>
                                <p id="fabricacaoCont4">Fabricado: 1905 (118 anos), Londres, Reino Unido </p>
                                <p id="materiaisCont4">Materiais: Ouro 24K, 25 Diamantes, Vidro de Safira, Aneis de
                                    ceramica...</p>
                                <p id="estilo">Moda masculina</p>
                            </div>
                        </div>
                    </div>
                    <div class="descricaoCont4">
                        <h1>OYSTER - DAY AND NIGHT </h1>
                        <p>Lorem ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel condimentum
                            nunc egestas vulputate.</p>
                        <p> Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat etiam velit vel id.Lorem
                            ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel condimentum nunc
                            egestas vulputate. </p>
                        <p> Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat etiam velit vel id.</p>
                    </div>
                </div>

                <div class="container4">
                    <div class="descricaoCont4">
                        <h1>OYSTER - DAY AND NIGHT </h1>
                        <p>Lorem ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel condimentum
                            nunc egestas vulputate.</p>
                        <p> Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat etiam velit vel id.Lorem
                            ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel condimentum nunc
                            egestas vulputate. </p>
                        <p> Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat etiam velit vel id.</p>
                    </div>
                    <div class="container3cont">
                        <div id="imgProduto2">
                            <div id="imgPerfilCont3"></div>
                        </div>
                        <div>
                            <div class="cont4CategoriasAlinhamento">
                                <div id="linhaCont4"></div>
                                <div class="categoriasCont4">
                                    <p>Moda masculina</p>
                                    <p>Relógios de luxo</p>
                                    <p>Relógios</p>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <div class="container4cont2">
                            <div id="categoriaEmpresa" style="margin-top: 3vh;">
                                <p>#empresa</p>
                            </div>
                            <div style="margin-bottom: 1vh;">
                                <div class="container4TitleButton">
                                    <p id="titleCont4">OYSTER - DAY AND NIGHT</p>
                                    <div class="cont4ButtonAlign">
                                        <div class="cont4Botao">
                                            <button id="botaoMais"><span class="iconify" data-icon="ic:round-more-horiz"
                                                    style="color: #969696;" data-width="26"
                                                    data-height="26"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <p id="Cont4Preco">R$ 89.000.00</p>
                            </div>
                            <div class="fabriMateriais">
                                <div id="linha1Cont4"></div>
                                <p id="fabricacaoCont4">Fabricado: 1905 (118 anos), Londres, Reino Unido </p>
                                <p id="materiaisCont4">Materiais: Ouro 24K, 25 Diamantes, Vidro de Safira, Aneis de
                                    ceramica...</p>
                                <p id="estilo">Moda masculina</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container4">
                    <div class="container3cont">
                        <div id="imgProduto3">
                            <div id="imgPerfilCont3"></div>
                        </div>
                        <div>
                            <div class="cont4CategoriasAlinhamento">
                                <div id="linhaCont4"></div>
                                <div class="categoriasCont4">
                                    <p>Moda masculina</p>
                                    <p>Relógios de luxo</p>
                                    <p>Relógios</p>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <div class="container4cont2">
                            <div id="categoriaEmpresa" style="margin-top: 3vh;">
                                <p>#empresa</p>
                            </div>
                            <div style="margin-bottom: 1vh;">
                                <div class="container4TitleButton">
                                    <p id="titleCont4">OYSTER - DAY AND NIGHT</p>
                                    <div class="cont4ButtonAlign">
                                        <div class="cont4Botao">
                                            <button id="botaoMais"><span class="iconify" data-icon="ic:round-more-horiz"
                                                    style="color: #969696;" data-width="26"
                                                    data-height="26"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <p id="Cont4Preco">R$ 89.000.00</p>
                            </div>
                            <div class="fabriMateriais">
                                <div id="linha1Cont4"></div>
                                <p id="fabricacaoCont4">Fabricado: 1905 (118 anos), Londres, Reino Unido </p>
                                <p id="materiaisCont4">Materiais: Ouro 24K, 25 Diamantes, Vidro de Safira, Aneis de
                                    ceramica...</p>
                                <p id="estilo">Moda masculina</p>
                            </div>
                        </div>
                    </div>
                    <div class="descricaoCont4">
                        <h1>OYSTER - DAY AND NIGHT </h1>
                        <p>Lorem ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel condimentum
                            nunc egestas vulputate.</p>
                        <p> Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat etiam velit vel id.Lorem
                            ipsum dolor sit amet consectetur. Ac malesuada habitant diam proin. Vel condimentum nunc
                            egestas vulputate. </p>
                        <p> Quam mauris feugiat mattis in. Duis mauris ultrices tortor volutpat etiam velit vel id.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="container5Cont1">
                    <div id="reparos"></div>
                    <div>
                        <div id="title1Cont5">
                            <h2>NOSSA HISTÓRIA</h2>
                        </div>
                        <div>
                            <p id="descricaoCont5">Lorem ipsum dolor sit amet consectetur. Massa vivamus quisque in mi
                                aliquet maecenas. Risus risus urna amet massa orci volutpat. Sed sapien massa commodo mi
                                vel neque a. Blandit vitae sit massa elit convallis at diam lectus venenatis.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container5Cont1">
                        <div>
                            <div id="title2Cont5">
                                <h2>RELÓGIOS EXCLUSIVOS FEITOS ARTESANALMENTE </h2>
                            </div>
                            <div>
                                <p id="descricao2Cont5">Lorem ipsum dolor sit amet consectetur. Massa vivamus quisque in
                                    mi aliquet maecenas. Risus risus urna amet massa orci volutpat. Sed sapien massa
                                    commodo mi vel neque a. Blandit vitae sit massa elit convallis at diam lectus
                                    venenatis.</p>
                            </div>
                        </div>
                        <div id="reparos2"></div>
                    </div>
                </div>
            </div>
            <div class="cont6">
                <h1>REDES SOCIAIS</h1>
                <div id="linha6"></div>
                <div class="redesSociaisIcones">
                    <a href="http://" target="_blank" rel="noopener noreferrer"> <span class="iconify"
                            data-icon="ic:baseline-facebook" style="color: #1877f2;" data-width="50"
                            data-height="50"></span></a>
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <span class="iconify" data-icon="uil:linkedin" style="color: #0a66c2;" data-width="50"
                            data-height="50"></span></a>
                    <a href="http://" target="_blank" rel="noopener noreferrer"><span class="iconify"
                            data-icon="ic:baseline-whatsapp" style="color: #4ecb71;" data-width="50"
                            data-height="50"></span></a><a href="http://" target="_blank"
                        rel="noopener noreferrer"><span class="iconify" data-icon="skill-icons:instagram"
                            data-width="45" data-height="45"></span></a>
                </div>
            </div>
        </div>
    </content>

</body>

</html>