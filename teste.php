<?php
$CPF=2;
$telefone='1212';

function inserir_telefone($CPF,$telefone){
    $IDP=null;
     $conexao=mysqli_connect("localhost","root","","bancocurriculos_ibdd");
         $comando= "select IDP from dados where CPF='$CPF'";
         $resulta=mysqli_query($conexao,$comando);
         $dados=mysqli_fetch_assoc($resulta);
        $IDP=$dados['IDP'];

            $comando="INSERT INTO telefone (IDP,telefone) VALUES ('$IDP','$telefone')";
            $resulta=mysqli_query($conexao,$comando);
        }
     
     
     
    
/*function get_IDP($CPF){
   
$conexao=mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $comando= "select IDP from dados where CPF='$CPF'";
    $resulta=mysqli_query($conexao,$comando);
    $dados=mysqli_fetch_assoc($resulta);
    echo "DDD: $dados[IDP] .<br>";
echo $IDPreturn;
}*/

get_IDP($CPF,$telefone);
?>