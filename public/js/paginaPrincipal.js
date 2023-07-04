function showModal() {
    var overlay = document.getElementById('overlay');
    var modal = document.getElementById('modal');
  
    overlay.style.display = 'block';
    modal.style.display = 'block';
  
    modal.classList.remove('active');
  
    setTimeout(function() {
      modal.classList.add('active');
    }, 10);
  
    document.body.style.overflow = 'hidden';
  }
  
  function hideModal() {
    var overlay = document.getElementById('overlay')
    var modal = document.getElementById('modal')
  
    overlay.style.display = 'none'
    modal.style.display = 'none'
  
    document.body.style.overflow = 'auto'
  }
  
  function showStart() {
    var overlay = document.getElementById('overlay');
    var showStart = document.getElementById('showStart');
  
    overlay.style.display = 'block';
    showStart.style.display = 'block';
  
    showStart.classList.remove('active');
  
    setTimeout(function() {
      showStart.classList.add('active');
    }, 10);
  
    document.body.style.overflow = 'hidden';
  }
  
  function hideStart() {
    var overlay = document.getElementById('overlay')
    var showStart = document.getElementById('showStart')
  
    overlay.style.display = 'none'
    showStart.style.display = 'none'
  
    document.body.style.overflow = 'auto'
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    var imagemStartInput = document.getElementById('imagemStartInput');
    var localImagem = document.getElementById('localImagem');
  
    imagemStartInput.addEventListener('change', function(event) {
      var file = event.target.files[0];
  
      if (file) {
        var reader = new FileReader();
  
        reader.onload = function() {
          var imagemUrl = reader.result;
  
          localImagem.style.backgroundImage = "url('" + imagemUrl + "')";
        };
  
        reader.readAsDataURL(file);
      }
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    var BannerStartInput = document.getElementById('BannerStartInput');
    var localImagem = document.getElementById('localBanner');
  
    BannerStartInput.addEventListener('change', function(event) {
      var file = event.target.files[0];
  
      if (file) {
        var reader = new FileReader();
  
        reader.onload = function() {
          var imagemUrl = reader.result;
  
          localImagem.style.backgroundImage = "url('" + imagemUrl + "')";
        };
  
        reader.readAsDataURL(file);
      }
    });
  });
  
  function abrirStartInf(elemento, imagem, banner) {
    var nome = elemento.querySelector('.social-nome-empresa').textContent;
    var descricao = elemento.querySelector('.social-out').textContent;
    var categoria = elemento.querySelector('.categorias-out').textContent;
  
    var nomeOpenStart = document.querySelector('.nome-open-start span');
    var sobreOpenStart = document.querySelector('.sobre-open-start span');
    var categoriaOpenStart = document.querySelector('.categoria-open-start span');
    var backgroundOpenStart = document.querySelector('.background-open-start');
    var profileOpenStart = document.querySelector('.profile-open-start');
  
    nomeOpenStart.textContent = nome;
    sobreOpenStart.textContent = descricao;
    categoriaOpenStart.textContent = categoria;
    backgroundOpenStart.style.backgroundImage = banner ? 'url(' + banner + ')' : '';
    profileOpenStart.style.backgroundImage = imagem ? 'url(' + imagem + ')' : '';
  
    showStartInf();
  }
  
  function handleSubmit(event) {
    event.preventDefault();
  
    var nome = document.getElementById('inputNomeStart').value;
    var descricao = document.getElementById('inputDescricaoStart').value;
    var categoria = document.getElementById('inputCategoriaStart').value;
  
    var imagemInput = document.getElementById('imagemStartInput');
    var imagem = null;
    if (imagemInput.files && imagemInput.files[0]) {
      imagem = URL.createObjectURL(imagemInput.files[0]);
    }
  
    var bannerInput = document.getElementById('BannerStartInput');
    var banner = null;
    if (bannerInput.files && bannerInput.files[0]) {
      banner = URL.createObjectURL(bannerInput.files[0]);
    }
  
    var novoElementoA = document.createElement('div');
    novoElementoA.className = 'social-conteudo-exx';
    novoElementoA.setAttribute('onclick', 'abrirStartInf(this, "' + imagem + '", "' + banner + '")');
  
    var novoElementoIdeia = document.createElement('a');
    novoElementoIdeia.href = 'http://127.0.0.1:8000/perfil_empresa/';
    novoElementoIdeia.className = 'social-ideia';
  
    var boxBackgroundIdeia = document.createElement('div');
    boxBackgroundIdeia.className = 'box-background-ideia';
  
    var backgroundIdeia = document.createElement('div');
    backgroundIdeia.className = 'background-ideia1 social-imagem';
  
    if (imagem) {
      backgroundIdeia.style.backgroundImage = 'url(' + imagem + ')';
    }
  
    boxBackgroundIdeia.appendChild(backgroundIdeia);
    novoElementoIdeia.appendChild(boxBackgroundIdeia);
  
    var informacoesIdeias = document.createElement('div');
    informacoesIdeias.className = 'informacoes-ideias';
  
    var tituloIdeia = document.createElement('span');
    tituloIdeia.className = 'titulo-ideia';
    tituloIdeia.textContent = nome;
    informacoesIdeias.appendChild(tituloIdeia);
  
    var divDescricaoIdeia = document.createElement('div');
    var descricaoIdeia = document.createElement('p');
    descricaoIdeia.className = 'descricao-ideia';
    descricaoIdeia.textContent = descricao;
    divDescricaoIdeia.appendChild(descricaoIdeia);
    informacoesIdeias.appendChild(divDescricaoIdeia);
  
    novoElementoIdeia.appendChild(informacoesIdeias);
  
    var publicacoesContainer = document.getElementById('ideia0192');
    publicacoesContainer.appendChild(novoElementoIdeia);
  
  
    var containerImagem = document.createElement('div');
    containerImagem.className = 'social-container-imagem-cexx';
  
    var boxImagem = document.createElement('div');
    boxImagem.className = 'social-box-imagem-cexx';
  
    var imagemDiv = document.createElement('div');
    imagemDiv.className = 'imagem-cex3 social-imagem';
  
    if (imagem) {
      imagemDiv.style.backgroundImage = 'url(' + imagem + ')';
    }
  
    boxImagem.appendChild(imagemDiv);
    containerImagem.appendChild(boxImagem);
  
    var boxInformacoes = document.createElement('div');
    boxInformacoes.className = 'social-box-informacoes-xx';
  
    var nomeEmpresa = document.createElement('div');
    nomeEmpresa.className = 'social-nome-pontuacao';
  
    var spanNome = document.createElement('span');
    spanNome.className = 'social-nome-empresa';
    spanNome.textContent = nome;
  
    nomeEmpresa.appendChild(spanNome);
    boxInformacoes.appendChild(nomeEmpresa);
  
    var informacaoSocial = document.createElement('div');
    informacaoSocial.className = 'informacao-social';
  
    var spanDescricao = document.createElement('span');
    spanDescricao.className = 'social-out';
    spanDescricao.textContent = descricao;
  
    informacaoSocial.appendChild(spanDescricao);
    boxInformacoes.appendChild(informacaoSocial);
  
    var divCategoria = document.createElement('div');
  
    var spanCategoria = document.createElement('span');
    spanCategoria.className = 'social-out categorias-out';
    spanCategoria.textContent = categoria;
  
    divCategoria.appendChild(spanCategoria);
    boxInformacoes.appendChild(divCategoria);
  
    novoElementoA.appendChild(containerImagem);
    novoElementoA.appendChild(boxInformacoes);
  
    var openStartDiv = document.createElement('div');
    openStartDiv.className = 'open-start-i';
    openStartDiv.setAttribute('onclick', 'showStartInf()');
  
    novoElementoA.appendChild(openStartDiv);
  
    var publicacoesContainer = document.getElementById('publicacoes');
    publicacoesContainer.appendChild(novoElementoA);
  
    document.getElementById('inputNomeStart').value = '';
    document.getElementById('inputDescricaoStart').value = '';
    document.getElementById('inputCategoriaStart').value = '';
    document.getElementById('imagemStartInput').value = '';
  }
   
  function showStartInf() {
  
    var overlay = document.getElementById('overlay');
    var openStart = document.getElementById('openStart');
  
    overlay.style.display = 'block';
    openStart.style.display = 'block';
  
    openStart.classList.remove('active');
  
    setTimeout(function() {
      openStart.classList.add('active');
    }, 10);
  
    document.body.style.overflow = 'hidden';
  }
  
  function fecharStart() {
    var overlay = document.getElementById('overlay');
    var openStart = document.getElementById('openStart');
  
    overlay.style.display = 'none';
    openStart.style.display = 'none';
  
    document.body.style.overflow = 'auto';
  }