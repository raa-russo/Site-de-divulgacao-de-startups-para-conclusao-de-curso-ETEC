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
                        <p id="categoriaLine1">TRABALHA NAS ÁREAS DE RELÓGIOS</p>
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
            <p id="descricaoDescricao">A Rolex é uma icônica marca de relógios de luxo, conhecida por sua precisão, elegância e status. Seus relógios são fabricados com materiais de alta qualidade e possuem design sofisticado, representando o padrão de excelência no universo relojoeiro.</p>
        </div>
        <div>
            <div class="container3">
                <div class="container3cont">
                    <div id="img1">
                        <div id="imgPerfilCont3"></div>
                    </div>
                    <p id="titleCont3">SOMOS UMA EMPRESA MODERNA</p>
                    <div id="linha1"></div>
                    <p id="descricaoCont3">A Rolex é uma empresa moderna que combina tradição relojoeira com inovação tecnológica, criando relógios de luxo atemporais com designs elegantes e funcionalidades avançadas, mantendo-se relevante no mercado contemporâneo.</p>
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
                    <p id="descricaoCont3">A Rolex é sinônimo de exclusividade, produzindo relógios de alta qualidade e limitando sua disponibilidade para criar um senso de raridade e valor, tornando seus produtos desejados e cobiçados por colecionadores e entusiastas ao redor do mundo. </p>
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
                        <p>Day and Night da Rolex é uma obra-prima que combina estilo e praticidade. Seu design elegante, com caixa Oyster resistente à água, torna-o adequado para qualquer ocasião.

Além disso, possui uma funcionalidade única de exibição do horário em 24 horas, permitindo que o usuário acompanhe facilmente o tempo tanto durante o dia quanto durante a noite.

Com movimento preciso e materiais de alta qualidade, o Oyster - Day and Night é um exemplo do compromisso da Rolex em oferecer relógios de luxo que unem tradição e inovação.</p>
                    </div>
                </div>

                <div class="container4">
                    <div class="descricaoCont4">
                        <h1>BLACK GOLD - DAY AND NIGHT </h1>
                        <p>O relógio Black Gold - Day and Night da Rolex é uma peça de destaque que combina elegância e estilo arrojado.

Com sua caixa em ouro negro e detalhes em ouro amarelo, transmite uma aura de luxo sofisticado.

Além disso, sua funcionalidade de exibição do horário em 24 horas e marcadores luminosos permite uma fácil leitura tanto de dia quanto de noite.

O Black Gold - Day and Night representa o equilíbrio perfeito entre design impressionante e funcionalidade de alta precisão, tornando-o uma escolha excepcional para os apreciadores de relógios de luxo.</p>
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
                                    <p id="titleCont4">BLACK GOLD - DAY AND NIGHT</p>
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
                                    <p id="titleCont4">AQUA - NIGHT</p>
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
                        <h1>AQUA - NIGHT </h1>
                        <p>O relógio Aqua - Night da Rolex é uma verdadeira obra-prima projetada para os amantes da água e da aventura.

Seu design robusto e resistente à água permite que seja usado em mergulhos profundos, enquanto os marcadores luminescentes garantem uma leitura clara do horário mesmo nas profundezas noturnas.

Com sua pulseira durável e caixa de alta qualidade, o Aqua - Night combina estilo e funcionalidade de forma impecável, tornando-se um companheiro confiável para os exploradores aquáticos.

Seu elegante visual e desempenho excepcional o colocam como um símbolo de excelência e luxo no universo dos relógios.</p>
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
                            <p id="descricaoCont5">Fundada em 1905, a Rolex é uma líder mundial na fabricação de relógios de luxo, conhecida por suas inovações e reputação de excelência. Sua história é marcada por marcos importantes, como relógios à prova d'água e automáticos com rotor perpétuo.</p>
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
                                <p id="descricao2Cont5">Relógios exclusivos feitos artesanalmente são verdadeiras obras de arte, com detalhes meticulosamente trabalhados à mão, materiais de alta qualidade e acabamentos requintados, proporcionando uma experiência única e distinta aos apreciadores de relógios.</p>
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