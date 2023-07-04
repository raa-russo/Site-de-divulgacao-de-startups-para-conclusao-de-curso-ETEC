<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/perfilUsuarioStyle.css') }}">
    <script class="icons" src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <title>perfil_usuario</title>
</head>

<body>
    <header>
        <a href="#"><img id="logo" src="/img/pu/Group 6.svg" alt="Logo 'Start'"></a>
        <div class="rightHeader">
            <div>
                <a href="#"><span class="iconify" id="headerIcon" data-icon="akar-icons:person"
                        style="color: white;" data-width="30" data-height="30"></span></a>
            </div>
            <input type="button" value="Entrar">
        </div>
    </header>
    <content>
        <div class="cont1Main">
            <div class="cont1">
                <div id="capa"></div>
                <div class="perfilLine1">
                    <div id="ftPerfil"></div>
                </div>
                <div class="perfilLine2">
                    <p id="categoriaUser">#empresa</p>
                    <div class="userNameLoc">
                        <h1 id="titleUser">Rebeca Howyn </h1>
                        <p id="locUser"> - SP</p>
                    </div>
                    <p id="infoUser">27 anos</p>
                    <p id="ocupacao">Programadora</p>
                </div>
                <div>
                    <div>
                        <p id="categoriaLine1">START NAS ÁREAS DE SISTEMAS</p>
                    </div>
                    <div>
                        <div id="divisoria"></div>
                        <div class="categorias">
                            <p>Tecnologia</p>
                            <p>Automação</p>
                            <p>Design</p>
                            <p>Programação</p>
                            <p>Inteligência Artificial</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="botoesCont1">
                    <a href="#"><button type="button" id="buttonSobreMim">Sobre mim</button></a>
                    <button id="reticencias1"><span class="iconify" data-icon="ic:round-more-horiz"
                            style="color: #969696; margin-top: -0.5vh;" data-width="32"
                            data-height="32"></span></button>
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
                            style="color: #969696; margin-top: -0.5vh;" data-width="32"
                            data-height="32"></span></button>
                </div>
            </div>
        </div>
        <div>
            <div id="divisoria1"></div>
            <p id="historicoTitle">HISTÓRICO DE INVESTIMENTO</p>
        </div>
        <div class="cont2">
            <div class="fundoCont2">
                <div id="capaInvestimento"></div>
                <div>
                    <div id="ftPerfilInvest"></div>
                    <div class="perfilLine2Cont2">
                        <p id="categoriaUserCont2">#empresa</p>
                        <h1 id="titleUserCont2">Rebeca Howyn </h1>
                        <p id="sedeCont2"> Sede: Genebra, Suiça</p>
                        <p id="infoUserCont2">Moda masculina</p>
                    </div>
                </div>
            </div>
            <div class="fundoCont2">
                <div id="capaInvestimento"></div>
                <div>
                    <div id="ftPerfilInvest"></div>
                    <div class="perfilLine2Cont2">
                        <p id="categoriaUserCont2">#empresa</p>
                        <h1 id="titleUserCont2">Rebeca Howyn </h1>
                        <p id="sedeCont2"> Sede: Genebra, Suiça</p>
                        <p id="infoUserCont2">Moda masculina</p>
                    </div>
                </div>
            </div>
            <div class="fundoCont2">
                <div id="capaInvestimento"></div>
                <div>
                    <div id="ftPerfilInvest"></div>
                    <div class="perfilLine2Cont2">
                        <p id="categoriaUserCont2">#empresa</p>
                        <h1 id="titleUserCont2">Rebeca Howyn </h1>
                        <p id="sedeCont2"> Sede: Genebra, Suiça</p>
                        <p id="infoUserCont2">Moda masculina</p>
                    </div>
                </div>
            </div>
            <div class="fundoCont2">
                <div id="capaInvestimento"></div>
                <div>
                    <div id="ftPerfilInvest"></div>
                    <div class="perfilLine2Cont2">
                        <p id="categoriaUserCont2">#empresa</p>
                        <h1 id="titleUserCont2">Rebeca Howyn </h1>
                        <p id="sedeCont2"> Sede: Genebra, Suiça</p>
                        <p id="infoUserCont2">Moda masculina</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="maisHistoricoInvertimentos">
            <a href="http://"><button id="reticencias2"><span class="iconify" data-icon="ic:round-more-horiz"
                    style="color: #969696; margin-top: -0.5vh;" data-width="32" data-height="32"></span></button></a>
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
    </content>
</body>

</html>
