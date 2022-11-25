
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
function adicionarCampo() {
  
    var controleCampo = 1;
        controleCampo++;
        //console.log(controleCampo);
    
        document.getElementById('teladc').insertAdjacentHTML('beforeend', '<div class="form-group" id="campo' + controleCampo + '"><label for="tel" id="labelLogin"> Telefone Secundário (Opcional) </label> <br> <input type="text" name="tel[]" id="input-tel" oninput="this.className = """ required> <button type="button" id="' + controleCampo + '" onclick="removerCampo(' + controleCampo + ')"> - </button></div>');
}

function removerCampo(idCampo){
    //console.log("Campo remover: " + idCampo);
    document.getElementById('campo' + idCampo).remove();
}