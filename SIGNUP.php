<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/styleLogin.css">
--><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>IBDD | Cadastro</title>



</head>
<script type="text/javascript" src="js/scriptInput.js">

</script>
<script type="text/javascript" src="js/scriptForm.js"></script>
<style>
/* Make circles that indicate the steps of the form: */
.step {
  height: 1.7cm;
  width: 1.7cm;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
  font-family: PoppinsRegular;
  font-size:2em;
  padding: 8px 0px 0px 0px;
  background-color: #F8F8F8;
  color:#0E8B82;
  margin-left:-3cm;

  
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
 
</style>
<body>
  <!--
  <div id="green">
    <img src="logoIBDD.png" alt="logo" id="logo">
<span id="title">Banco de Currículos</span>
<div style="text-align:center;margin-top:40px;">
    <div id="first"><span class="step" >1</span></div><span id="subtitle">Contato</span>
    <div><span class="step" style="margin-bottom:1cm;">2</span></div><span  id="subtitle">Pessoal</span>
    <div><span class="step" style="margin-bottom:0.5cm;">3</span></div><span  id="subtitle">Localização</span><br>
    <div><span class="step" style="margin-bottom:0.5cm;">4</span></div><span  id="subtitle">Deficiências</span><br>
    <div><span class="step">5</span></div><span  id="subtitle">Senha</span>
  </div>
</div>

   One "tab" for each step in the form: -->
   <div id="form">
<form id="regForm" method="post" action="insertCTRLmb.php">
  <h1>Register:</h1>
  <div class="tab">
  <p> <p> Fase 1: Dados de Contato</p>

<label for="nome" id="labelLogin"> Nome Completo </label> <br>
<input type="text" name="nome" id="input-nome" oninput="this.className = ''"  required> <br>


<label for="emailLogin" id="labelLogin"> Email </label> <br>
<input type="email" name="email" id="input-emailLogin"oninput="this.className = ''"  required> <br>
<div id="teladc">
<label for="tel" id="labelLogin"> Telefone </label> <br>
<input type="text" name="tel[]" id="input-tel" oninput="this.className = ''" required><br>
<button type="button" onclick="adicionarCampo()"> + </button>
</div>
</div>

  <div class="tab"><p> Fase 2: Dados Pessoais</p>

                    <label for="CPF" id="labelLogin"> Seu CPF </label> <br>
                    <input type="text" name="CPF" id="input-CPF" oninput="this.className = ''" required> <br>

                    <label for="data" id="labelLogin"> Data de Nascimento </label> <br>
                    <input type="date" name="data" id="input-data" oninput="this.className = ''" required> <br>

                    <label for="genero" id="labelLogin"> Gênero </label>
                    <br>
                    <select oninput="this.className = ''"  name="genero" id="genero">
                        <option>Selecione...</option>
                        <option value="1" >Feminino</option>

                        <option value="2" >Masculino</option>

                        <option value="3">Outro</option>
                    </select>
                    <br>

                    <label for="ecivil" id="labelLogin"> Estado civil </label>
                    <br>
                    <select oninput="this.className = ''"  name="ecivil" id="input-ecivil">
                        <option>Selecione...</option>

                        <option value="1">Solteiro(a)</option>

                        <option value="2">Comprometido(a)</option>

                        <option value="3">Casado(a)</option>

                        <option value="4">Divorciado(a)</option>

                        <option value="5">Viúvo(a)</option>

                        <option value="6">Outro</option>

                    </select>
                    <br>

  </div>
  <div class="tab">   <p> Fase 3: Localização </p>
                    <label>Cep:
                        <input name="CEP" type="text" id="cep" value="" size="10" maxlength="9"
                            onblur="pesquisacep(this.value)" oninput="this.className = ''" /></label><br />
                    <label>Rua:
                        <input name="rua" type="text" id="rua" size="60" oninput="this.className = ''" /></label><br />
                        <label>Número/Complemento:
                        <input name="numero_complemento" type="text" id="label-numero" size="60" oninput="this.className = ''" /></label><br />
                    <label>Bairro:
                        <input name="bairro" type="text" id="bairro" size="40" oninput="this.className = ''" /></label><br />
                    <label>Cidade:
                        <input name="cidade" type="text" id="cidade" size="40" oninput="this.className = ''" /></label><br />
                    <label>Estado:
                        <input name="estado" type="text" id="uf" size="2" oninput="this.className = ''" /></label><br />

  </div>
  <div class="tab">
                    <p> Fase 4: Suas Deficiências </p>
                    <br>

                    <input type="checkbox"  id="fisica" name="def[]" value="1">
                    <label for="php">Física</label>
                    <br>
                    <input type="checkbox" onclick="visualopt(this)" id="visual" name="def[]" value="2">
                    <label for="visual">Visual</label>
                    <br>
                    <input type="checkbox" id="auditiva" name="def[]" value="3" onclick="auditivaopt(this)">
                    <label for="auditiva">Auditiva</label>
                    <br>
                    <input type="checkbox" id="mental" name="def[]" value="4">
                    <label for="mental">Mental</label>
                    <br>
                    <input type="checkbox" id="intelectual" name="def[]" value="5">
                    <label for="intelectual">Intelectual</label>
                    <br>
                    <br>
                    <label for="desc"> Por Favor, descreva sua deficiência </label><br>
                    <textarea name="desc" style="" oninput="this.className = ''"  id="desc" value="" size="1000" maxlength="1000"></textarea>
                    <br>





                    <label for="checkbox" id="switch"> Necessito de aparelho ou acessório</label>
                    <label class="switch">
                        <input name="add[]" type="checkbox"oninput="this.className = ''"  onclick="textarea1(this)" value="1">
                        <span class="slider round"></span>
                    </label>

                    <div id="textarea1" style="display: none;">
                        <br>
                        <label for="desc[]"> Qual aparelho/acessório você precisa? </label><br>
                        <textarea name="text-desc-1"style=""oninput="this.className = ''"  id="desc" value="" size="1000" maxlength="1000"></textarea>
                        <br>
                    </div>
                    <br>

                    <label for="checkbox" id="switch"> Necessito de recursos especiais</label>
                    <label class="switch">
                        <input name="add[]" type="checkbox" onclick="textarea2(this)" value="2">
                        <span class="slider round"></span>
                    </label>



                    <div id="textarea2" style="display: none;">
                        <br>
                        <label for="desc[]" style="display=none;"> Qual recurso especial você precisa? </label><br>
                        <textarea name="text-desc-2" style=""  id="desc" value="" size="1000" maxlength="1000"></textarea>
                        <br>
                    </div>
                    <br>


                    <label for="checkbox" id="switch"> Utilizo transporte coletivo</label>
                    <label class="switch">
                        <input name="add[]" type="checkbox" value="3">
                        <span class="slider round"></span>
                    </label>

                    <br>


                    <label for="checkbox" id="switch"> Possuo veículo próprio adaptado</label>
                    <label class="switch">
                        <input name="add[]" type="checkbox" value="4">
                        <span class="slider round"></span>
                    </label>


                    <br>

                    <label for="checkbox" id="switch"> Necessito de acompanhante/assistência</label>
                    <label name="add[]" class="switch" value="5">
                        <input type="checkbox">
                    </label>


                    <div id="visual-opt" style="display: none;">

                        <label for="checkbox" id="switch"> Realizo leitura em braile</label>
                        <label name="add[]" class="switch" value="6">
                            <input name="add" type="checkbox">
                        </label>
                        <br>
                    </div>

                    <div id="auditiva-opt" style="display: none;">

                        <label for="checkbox" id="switch">Sou fluente em LIBRAS</label>
                        <label class="switch">
                            <input  name="add[]" type="checkbox" value="7">
                        </label>
                        <br>

                        <label for="checkbox" id="switch">Interpreto leitura labial</label>
                        <label class="switch">
                            <input name="add[]" type="checkbox" value="8">
                        </label>
                        <br>
                    </div>
                    

  </div>
  <div class="tab">
 <p> <p> Senha</p>

<label for="nome" id="labelLogin"> Crie uma senha </label> <br>
<input type="text" name="senha" id="input-senha" oninput="this.className = ''"  required> <br>


<label for="emailLogin" id="labelLogin"> Confirme sua senha </label> <br>
<input type="text" name="senhaconfirm" id="input-senha"oninput="this.className = ''"  required> <br>

  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
    <input type="submit" value="submit">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  
   <span class="step" ></span>
    <span class="step" ></span>
    <span class="step" ></span>
   <span class="step" ></span>
    <span class="step"></span>
  </div>
</form>

<script>
    
var currentTab = 0; // Setar a tabela atual (0)
showTab(currentTab); // Chama a função que mostra a tabela atual

function showTab(n) {
  // Mostra a tabela inicial do formulario
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // Setar os botões de voltar/próximo
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //chamar a função que modifica as bolinhas
  fixStepIndicator(n)
}

function nextPrev(n) {
  // Função que descobre qual tabela mostrar
  var x = document.getElementsByClassName("tab");
  // Cancelar caso haja algo inválido
  if (n == 1 && !validateForm()) return false;
  // Esconder a tabela 
  x[currentTab].style.display = "none";
  // adicionar ou tirar 1
  currentTab = currentTab + n;
  // Se chegar no fim
  if (currentTab >= x.length) {
    // mandar o formulario
    document.getElementById("regForm").submit();
    return false;
  }
  // Se não, aparece a próxima tabela
  showTab(currentTab);
}

function validateForm() {
  // Função que valida o input do formulario
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // Loop pra checar todos os inputs
  for (i = 0; i < y.length; i++) {
    // Se estiver vazio
        if (y[i].value == "") {
      // Escrever invalido:
      y[i].className += " invalido";
      // e setar o status pra falso
            valid = false;
    }
  }
  // Se estiver preenchido, seta o status como true e segue pro próximo
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // retorna o status válido
}

function fixStepIndicator(n) {
  // Tira a atividade dos outros passos
    var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //ativa apenas o necessário
  x[n].className += " active";
}


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



</script>

</body>
</html>
