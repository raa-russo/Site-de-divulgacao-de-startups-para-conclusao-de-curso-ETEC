<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/resultadoPesquisaStyle.css') }}">
    <script class="icons" src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <title>Resultado da Pesquisa</title>
</head>

<body>
    <header>
        <a href="#"><img id="logo" src="/img/rp/Group 6.svg" alt="Logo 'Start'"></a>

        <div>
            <div class="search">

                <form action="#">
                    <input type="text" placeholder=" Search..." name="search">
                    <button>
                        <span class="iconify" data-icon="ic:baseline-search" style="color: gray;" data-width="5vw"
                            data-height="3vh"></span>
                    </button>
                </form>
                <a href="#"><span class="iconify" id="headerIcon" data-icon="akar-icons:person"
                        style="color: white;" data-width="24" data-height="24"></span></a>
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
                        <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis
                            solares gastando pouco</p>
                        <button type="button" class="buttonCont1">Saber Mais</button>
                    </div>
                </div>
                <div id="banner2Cont1" class="banners1">
                    <div id="ftBanner2" class="imgBanner"></div>
                    <div>
                        <p id="cont1Temas">Solar Wave</p>
                        <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis
                            solares gastando pouco</p>
                        <button type="button" class="buttonCont1">Saber Mais</button>
                    </div>
                </div>
                <div id="banner3Cont1" class="banners1">
                    <div id="ftBanner3" class="imgBanner"></div>
                    <div>
                        <p id="cont1Temas">Solar Wave</p>
                        <p id="descricaoCont1">alunos de uma escola conseguiram dobrar a eficacia energetica de paineis
                            solares gastando pouco</p>
                        <button type="button" class="buttonCont1">Saber Mais</button>
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
                        <p id="nomeCont1">Beatrice Azevedo - SP</p>
                        <p>23 anos</p>
                    </div>
                </div>
                <div class="fundoFriends">
                    <div>
                        <div id="imgPerfil1" class="ftPerfilCont1"></div>
                        <p id="categoriaCont1">#Empresa</p>
                    </div>
                    <div id="descricaoDirCont1">
                        <p id="nomeCont1">ROLEX S.A</p>
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
                            style="color: #969696; margin-top: -0.5vh;" data-width="32"
                            data-height="32"></span></button>
                </div>
            </div>
        </div>
        </div>
        <div style="text-align:center; margin: 3vh auto;">
            <p>CATEGORIAS...</p>
        </div>

        @foreach ($resultado_pesquisa as $resultado)
            <a href="{{ route('resultado.show', ['resultado' => ucfirst($resultado['nome'])]) }}"
                class="destination-link">

                <div class="cardsCont3">
                    <div class="esqCardCont3">
                        <img src="{{ asset('img/rp/' . strtolower($resultado['imagemPerfil']) . '.jpg') }}"
                            alt="{{ $resultado['imagemPerfil'] }}" class="imgCards">
                        <p id="categoriaCard1" class="categoriasCards">#empresa</p>
                    </div>
                    <div class="midCardCont3">
                        <p class="titleCard">{{ $resultado['nome'] }}</p>
                        <p class="descricaoCards">Fundação: {{ $resultado['dataFundacao'] }}</p>
                        <p class="descricaoCards">Sede: {{ $resultado['sede'] }}</p>
                        <p class="descricaoCards">{{ $resultado['areaAtuacao'] }}</p>
                        <div>
                            <div class="categoriasCardCont3">
                                @foreach ($resultado['categorias'] as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="display: flex; font-weight: bold; font-size: 14px; margin: 3vh 3vw 0 0;">
                            <p>{{ $resultado['avaliacao'] }}</p>
                            <div style="display: flex;">
                                @if (is_int($resultado['avaliacao']))
                                    @for ($i = 1; $i <= $resultado['avaliacao']; $i++)
                                        <div class="rating"></div>
                                    @endfor
                                @else
                                    @for ($i = 1; $i <= $resultado['avaliacao']; $i++)
                                        <div class="rating"></div>
                                    @endfor
                                    <div class="half_rating"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach



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
