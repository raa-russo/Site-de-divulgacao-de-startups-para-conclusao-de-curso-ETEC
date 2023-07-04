<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pagPrincipalStyle.css') }}">  
    <script class="icons" src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <title>Pagina Principal</title>
</head>

<body>
    <header>
        <a href="#"><img id="logo" src="/img/pp/Group 6.svg" alt="Logo 'Start'"></a>

        <div>
            <div class="search">

                <form action="#">
                    <input type="text" placeholder=" Search..." name="search">
                    <button>
                        <span class="iconify" data-icon="ic:baseline-search" style="color: gray;" data-width="5vw"
                            data-height="3vh"></span>
                    </button>
                </form>
                <a href="#"><span class="iconify" id="headerIcon" data-icon="akar-icons:person" style="color: white;"
                        data-width="24" data-height="24"></span></a>
            </div>
        </div>
    </header>
    <content>
        <h1 id="cont1Topico">MELHORES IDEIAS</h1>
        <div class="cont1">
            <div class="bannerCont1">
                <div id="banner1Cont1" class="banners1">
                    <div id="ftBanner1" class="imgBanner"></div>
                    <div>
                        <p id="cont1Temas">Solar Wave</p>
                        <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis solares gastando pouco</p>
                        <a href="#"><button type="button" class="buttonCont1">Saber Mais</button></a>
                    </div>
                </div>
                <div id="banner2Cont1" class="banners1">
                    <div id="ftBanner2" class="imgBanner"></div>
                    <div>
                        <p id="cont1Temas">Solar Wave</p>
                        <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis solares gastando pouco</p>
                        <a href="#"><button type="button" class="buttonCont1">Saber Mais</button></a>
                    </div>
                </div>
                <div id="banner3Cont1" class="banners1" >
                    <div id="ftBanner3" class="imgBanner"></div>
                    <div>
                        <p id="cont1Temas">Solar Wave</p>
                        <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis solares gastando pouco</p>
                        <a href="#"><button type="button" class="buttonCont1">Saber Mais</button></a>
                    </div>
                </div>
            </div>
            <div class="friends">
                <div class="fundoFriends">
                    <div>
                        <div id="imgPerfil1" class="ftPerfilCont1"></div>
                        <p id="categoriaCont1">#investidor(a)</p>
                    </div>
                    <div id="descricaoDirCont1">
                    <p id="nomeCont1"><a href="http://127.0.0.1:8000/perfil_usuario"> Beatrice Azevedo - SP</a></p>
                        <p>23 anos</p>
                    </div>
                </div>
                <div class="fundoFriends">
                    <div>
                        <div id="imgPerfil1" class="ftPerfilCont1"></div>
                        <p id="categoriaCont1">#Empresa</p>
                    </div>
                    <div id="descricaoDirCont1">
                        <p id="nomeCont1"><a href="http://127.0.0.1:8000/perfil_empresa"> Rolex </a></p>
                        <p>Relogios de luxo</p>
                    </div>
                </div>
                <div class="fundoFriends">
                    <div>
                        <div id="imgPerfil1" class="ftPerfilCont1"></div>
                        <p id="categoriaCont1">#investidor(a)</p>
                    </div>
                    <div id="descricaoDirCont1">
                        <p id="nomeCont1">Beatrice Azevedo - SP</p>
                        <p>23 anos</p>
                    </div>
                </div>
                <div class="botoesDirCont1">
                    <a href="#"><button type="button" id="buttonAmigos">Amigos</button></a>
                    <button id="reticencias"><span class="iconify" data-icon="ic:round-more-horiz"
                        style="color: #969696; margin-top: -0.5vh;" data-width="32" data-height="32"></span></button>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div class="categoriasPrincipais">
                    <a href="#"><p class="categoriasPrincipaisbuttons">Tecnologia</p></a>
                    <a href="#"><p class="categoriasPrincipaisbuttons">Automação</p></a>
                    <a href="#"><p class="categoriasPrincipaisbuttons">Design</p></a>
                    <a href="#"><p class="categoriasPrincipaisbuttons">Programação</p></a>
                    <a href="#"><p class="categoriasPrincipaisbuttons">Inteligência Artificial</p></a>
                    <a href="#"><p class="categoriasPrincipaisbuttons">...</p></a>
                </div>
            </div>
            <div id="divisoriaCont2"></div>
            <p class="titleCont3">CATEGORIAS</p>
        </div>
        <div>
            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>5,0</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>4,5</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="half_rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>5,0</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>4,5</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="half_rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cont1">
                <div class="bannerCont3">
                    <div id="banner1Cont1" class="banners1">
                        <div id="ftBanner1" class="imgBanner"></div>
                        <div>
                            <p id="cont1Temas">Solar Wave</p>
                            <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis solares gastando pouco</p>
                            <button type="button" class="buttonCont1">Saber Mais</button>
                        </div>
                    </div>
                    <div id="banner2Cont1" class="banners1">
                        <div id="ftBanner2" class="imgBanner"></div>
                        <div>
                            <p id="cont1Temas">Solar Wave</p>
                            <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis solares gastando pouco</p>
                            <button type="button" class="buttonCont1">Saber Mais</button>
                        </div>
                    </div>
                    <div id="banner3Cont1" class="banners1" >
                        <div id="ftBanner3" class="imgBanner"></div>
                        <div>
                            <p id="cont1Temas">Solar Wave</p>
                            <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis solares gastando pouco</p>
                            <button type="button" class="buttonCont1">Saber Mais</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>4,5</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="half_rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>4,5</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="half_rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>4,5</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="half_rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardsCont3">
                <div class="esqCardCont3">
                    <div id="imgCard1" class="imgCards"></div>
                    <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                </div>
                <div class="midCardCont3">
                    <p class="titleCard">Apple</p>
                    <p class="descricaoCards">Fundação: 1 de abril de 1976, Los Altos, Califórnia, EUA</p>
                    <p class="descricaoCards">Sede: Cupertino, Califórnia, EUA</p>
                    <p class="descricaoCards">Tecnologia</p>
                    <div>
                        <div class="categoriasCardCont3">
                            <p>Tecnologia</p>
                            <p>Aplicativos</p>
                            <p>Produtos eletrônicos</p>
                            <p>Software</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                        <p>4,5</p>
                        <div style="display: flex;">
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="rating"></div>
                            <div class="half_rating"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttonCarregarMais">
                <button id="buttonCarregarMais">
                    <P>CARREGAR MAIS</P>
                </button>
            </div>
        </div>
       
    </content>
    <footer></footer>

</body>

</html>