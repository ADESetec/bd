<?php






/*----------INSERT---------------*/


/*
function incluirdados($CPF,$nome,$data_nascimento,$genero,$email,$ecivil,$senha){
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
    $mysqli->query("CALL INCLUIR_LOGIN($nome,$data_nascimento,$genero,$email,$ecivil,$senha,--pMensagem, --ID)");
    $result = $mysqli->query("SELECT --pMensagem as msg, --ID as ID");
    $linha = $result->fetch_assoc();
    return $linha;
}

*/

//VERIFICAR CHAVE ESTRANGEIRA IDP

function incluir_dados($CPF,$nome,$data_nascimento,$genero,$email,$ecivil,$senha){
    $comando="INSERT INTO dados (CPF,nome,data_nascimento,genero,email,estado_civil,senha) VALUES ('$CPF','$nome','$data_nascimento','$genero','$email','$ecivil','$senha')";
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $resulta=mysqli_query($conexao,$comando);
}



function incluir_deficiencia($CPF,$def_selected,$add_selected,$observacoes){
    $IDP=null;
    $conexao=mysqli_connect("localhost","root","","bancocurriculos_ibdd");
        $comando= "select IDP from dados where CPF='$CPF'";
        $resulta=mysqli_query($conexao,$comando);
        $dados=mysqli_fetch_assoc($resulta);
       $IDP=$dados['IDP'];

         

   $dados = count($def_selected);
   $dados2 = count($add_selected);
   $banco = mysqli_connect("localhost","root","","bancocurriculos_ibdd");

   for($i=0; $i<$dados;$i++){
    $IDD = $def_selected[$i];
   } 
    for($i=0; $i<$dados2;$i++){

         $IDA = $add_selected[$i];

   $sql = "INSERT INTO deficiencia_usuario(IDP,IDD,IDA,observacoes) VALUES ('$IDP','$IDD','$IDA','$observacoes')";

   $banco->query($sql);


    }

    
}


function incluir_endereco($CPF,$CEP,$endereco,$numero_complemento, $bairro, $cidade, $estado){
    $IDP=null;
    $conexao=mysqli_connect("localhost","root","","bancocurriculos_ibdd");
        $comando= "select IDP from dados where CPF='$CPF'";
        $resulta=mysqli_query($conexao,$comando);
        $dados=mysqli_fetch_assoc($resulta);
       $IDP=$dados['IDP'];

    $comando="INSERT INTO endereco (IDP,CEP,endereco,numero_complemento, bairro, cidade, estado) VALUES ('$IDP','$CEP','$endereco','$numero_complemento', '$bairro', '$cidade', '$estado')";
    $resulta_end=mysqli_query($conexao,$comando);
}

function incluir_telefone($CPF,$telefone){
    $IDP=null;
    $conexao=mysqli_connect("localhost","root","","bancocurriculos_ibdd");
        $comando= "select IDP from dados where CPF='$CPF'";
        $resulta=mysqli_query($conexao,$comando);
        $dados=mysqli_fetch_assoc($resulta);
       $IDP=$dados['IDP'];
     

       $dados = count($telefone);
      
       $banco = mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    
       for($i=0; $i<$dados;$i++){
             $tel = $telefone[$i];
    
       $sql = "INSERT INTO telefone (IDP,telefone) VALUES ('$IDP','$tel')";
       $banco->query($sql);
    
}
}



/*------------SELECT-----------------z---*/

function ImprimirDados($CPF){
    $sql = "SELECT * from dados Where CPF='$CPF'" ;
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $result = mysqli_query($conexao, $sql);
    $dados=mysqli_fetch_assoc($result);
 
                    }


function ImprimirTel($CPF){
    $sql = "SELECT * from telefone Where CPF='$CPF'" ;
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $result = mysqli_query($conexao, $sql);
    $dados=mysqli_fetch_assoc($result);
    echo "DDD: $dados[DDD] .<br>";
    echo "Telefone: $dados[telefone]<br>";
    }

    function Variavel($CPF){
        $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
        $mysqli->query("CALL RENDA('$CPF',--pRenda)");
        $result = $mysqli->query("SELECT --pRenda as renda");
        $linha = $result->fetch_assoc();
        return $linha;
         }

function ImprimirRenda($renda){
    $sql = "SELECT renda from renda Where IDR='$renda'" ;
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $result = mysqli_query($conexao, $sql);
    $dados=mysqli_fetch_assoc($result);
    echo "Renda: $dados[renda] .<br></p>";
}

/*------------------DELETE-------------*/

function excluir($CPF,$senha){
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
    $mysqli->query("CALL VERIFICAR_SENHA_EXCLUIR('$CPF','$senha',--pMensagem, --ID)");
    $result = $mysqli->query("SELECT --pMensagem as msg, --ID as ID");
    $linha = $result->fetch_assoc();
    return $linha;
    }







/*----------------UPDATE-----------------*/

function verificaAlterar($CPF2,$senha2){
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
    $mysqli->query("CALL VERIFICAR_SENHA_ALTERAR('$CPF2','$senha2',--pMensagem, --ID)");
    $result = $mysqli->query("SELECT --pMensagem as msg, --ID as ID");
    $linha = $result->fetch_assoc();
    return $linha;
    }
    
function verificarCPF($CPF){
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
    $mysqli->query("CALL VERIFICAR_CPF_ALTERAR('$CPF',--pMensagem, --ID)");
    $result = $mysqli->query("SELECT --pMensagem as msg, --ID as ID");
    $linha = $result->fetch_assoc();
    return $linha;
}
 
function alterarDados($CPF2,$CPF,$nome,$email,$datan,$CEP,$renda,$senha2){
    $comando="UPDATE dados SET CPF='$CPF',nome='$nome',email='$email',datan='$datan',CEP='$CEP',renda='$renda',senha='$senha2' where CPF='$CPF2'";
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $resulta=mysqli_query($conexao,$comando);
    echo $CPF2;
    }

function alterarTelefone($CPF2,$CPF,$DDD,$telefone){
    $comando="UPDATE telefone SET CPF='$CPF', DDD='$DDD', telefone='$telefone' WHERE CPF='$CPF'";
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $resulta=mysqli_query($conexao,$comando);
    echo $telefone;
    }


/*-----------LOGIN-----------*/

function verificaLogin($CPF,$senha){
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
    $mysqli->query("CALL VERIFICAR_SENHA_LOGIN('$CPF','$senha',--pMensagem, --ID)");
    $result = $mysqli->query("SELECT --pMensagem as pmsg, --ID as ID");
    $linha = $result->fetch_assoc();
    return $linha;
    }


?>
