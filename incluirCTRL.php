<?php
session_start();
include_once('funcoes.php');
$nome = $_POST["nome"];
$email = $_POST["email"];
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
$observacoes = $_POST["desc"];
$descacessorio = $_POST["text-desc-1"];
$desrecespecial = $_POST["text-desc-2"];
$senha = $_POST["senha"];



$IDD = null;

if (isset($_POST['def']))

    $IDD = $_POST['def'];



//chamar funções de insert ----------------------------------------------------------------------------------------------------------------

   /* incluir_dados($CPF,$nome,$datan,$genero,$email,$ecivil,$senha);
    /**/get_IDP($CPF);
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
    $mysqli->query("CALL get_ID('$CPF', @ID)");
    $result = $mysqli->query("SELECT @ID as IDP");
    $linha = $result->fetch_assoc();
    return $linha;
    echo "$linha[ID]";
    //$IPD = $linha[0];
    incluir_deficiencia($IDP,$IDD,$IDA,$observacoes);
    //incluir_endereco($IDP,$CEP,$rua,$numero_complemento, $bairro, $cidade_filtro, $estado_filtro);
    incluir_telefone($IDP,$DDD,$telefone); 
    $comando="INSERT INTO endereco (IDP,CEP,endereco,numero_complemento, bairro, cidade, estado) VALUES ('5555','$CEP','$endereco','$numero_complemento', '$bairro', '$cidade', '$estado')";
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $resulta=mysqli_query($conexao,$comando);
?>