
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('uf').value=("");

}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);

    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    
     
    }
}
    
function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g , '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            
            
const fieldMessage = document.querySelector("#cep")
            fieldMessage.classList.add("valid");
        
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};




function textarea1(campo) {
    var opt1 = document.getElementById('textarea1');
    if (campo.checked) {
        // mostra...
        opt1.style.display = "block";
    } else {
        // esconde...
        opt1.style.display = "none";
    }
}

function textarea2(campo) {
    var opt2 = document.getElementById('textarea2');
    if (campo.checked) {
        // mostra...
        opt2.style.display = "block";
    } else {
        // esconde...
        opt2.style.display = "none";
    }
}


function visualopt(campo) {
    var opt = document.getElementById('visual-opt');
    if (campo.checked) {
        // mostra...
        opt.style.display = "block";
    } else {
        // esconde...
        opt.style.display = "none";
    }
}

function auditivaopt(campo) {
    var opt = document.getElementById('auditiva-opt');
    if (campo.checked) {
        // mostra...
        opt.style.display = "block";
    } else {
        // esconde...
        opt.style.display = "none";
    }
}


/*
function option(valor) {
  
    var opt2 = document.getElementById('visual-opc');
    if (valor.checked) {
        // esconde...
        opt2.style.display = "none";

    } else {
        // mostra...
        opt2.style.display = "block";
        
    }
    }*/


