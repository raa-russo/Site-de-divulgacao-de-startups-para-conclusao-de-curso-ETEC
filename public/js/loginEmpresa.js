document.addEventListener('DOMContentLoaded', function() {
    var inputEmail = document.getElementById('inputEmail');
    var inputSenha = document.getElementById('inputSenha');
    var inputTel = document.getElementById('inputTel');
    var inputCNPJ = document.getElementById('inputCNPJ');
    var inputOcup = document.getElementById('inputOcup');
    var inputEnd = document.getElementById('inputEnd');

    inputEmail.addEventListener('click', function() {
        removePlaceholderEmail();
        applyBlueBorder(inputEmail);
    });

    inputSenha.addEventListener('click', function() {
        removePlaceholderSenha();
        applyBlueBorder(inputSenha);
    });

    inputTel.addEventListener('click', function() {
        removePlaceholderTel();
        applyBlueBorder(inputTel);
    });

    inputCNPJ.addEventListener('click', function() {
        removePlaceholderCNPJ();
        applyBlueBorder(inputCNPJ);
    })

    inputOcup.addEventListener('click', function() {
        removePlaceholderOcup();
        applyBlueBorder(inputOcup);
    });

    inputEnd.addEventListener('click', function() {
        removePlaceholderEnd();
        applyBlueBorder(inputEnd);
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

        if (targetElement !== inputTel) {
            inputTel.placeholder = 'Insira seu telefone';
            removeBlueBorder(inputTel);
        }
        
        if (targetElement !== inputCNPJ) {
            inputCNPJ.placeholder = 'Insira seu CNPJ';
            removeBlueBorder(inputCNPJ)
        }

        if (targetElement !== inputOcup) {
            inputOcup.placeholder = 'Insira sua ocupação';
            removeBlueBorder(inputOcup);
        }

        if (targetElement !== inputEnd) {
            inputEnd.placeholder = 'Insira seu endereço';
            removeBlueBorder(inputEnd);
        }
    });

    function removePlaceholderEmail() {
        inputEmail.placeholder = '';
    }

    function removePlaceholderSenha() {
        inputSenha.placeholder = '';
    }

    function removePlaceholderTel() {
        inputTel.placeholder = '';
    }

    function removePlaceholderCNPJ() {
        inputCNPJ.placeholder = '';
    }

    function removePlaceholderOcup() {
        inputOcup.placeholder = '';
    }

    function removePlaceholderEnd() {
        inputEnd.placeholder = '';
    }

    function applyBlueBorder(input) {
        input.style.borderBottom = '2px solid blue';
    }

    function removeBlueBorder(input) {
        input.style.borderBottom = '';
    }
});
