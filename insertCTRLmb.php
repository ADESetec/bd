<?php

session_start();
include_once('funcoes.php');
$nome = $_POST["nome"];
$email = $_POST["email"];
//$DDD = $_POST["DDD"];
$telefone = null;

if (isset($_POST['tel']))

    $telefone = $_POST['tel'];

$CPF = $_POST["CPF"];
$datan = $_POST["data"];
$genero = $_POST["genero"];
$ecivil = $_POST["ecivil"];
$CEP = $_POST["CEP"];
$rua = $_POST["rua"];
$numero_complemento = $_POST["numero_complemento"];
$bairro = $_POST["bairro"];
$cidade_filtro = $_POST["cidade"];
$estado_filtro = $_POST["estado"];

$IDD = null;

if (isset($_POST['def']))

    $IDD = $_POST['def'];

    $IDA = null;

    if (isset($_POST['add']))
    
        $IDA = $_POST['add'];
$observacao = $_POST["desc"];
$descacessorio = $_POST["text-desc-1"];
$desrecespecial = $_POST["text-desc-2"];
$senha = $_POST["senha"];



$IDD = null;

if (isset($_POST['def']))

    $IDD = $_POST['def'];

    $cidade=1;
    $estado=2;


//chamar funções de insert ----------------------------------------------------------------------------------------------------------------

    incluir_dados($CPF,$nome,$datan,$genero,$email,$ecivil,$senha);
  
    incluir_deficiencia($CPF,$IDD,$IDA,$observacao);
   incluir_endereco($CPF,$CEP,$rua,$numero_complemento, $bairro, $cidade, $estado);
    incluir_telefone($CPF,$telefone); 
?>