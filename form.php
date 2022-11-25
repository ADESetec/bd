<?php

$data = isset($_POST) ? $_POST : [];
/*
foreach($data['id'] as $key => $value){

        $id = $value;
        $nota = $data['nota'][$key];
        $con=mysqli_connect("localhost","root","","teste");
        $sql="INSERT INTO dados (CPF) VALUES ('$nota')";    
        $result = mysqli_query($con, $sql);

}

echo "Registro salvo com sucesso"; 
foreach($data['id'] as $key => $value){
$valores =  $data['nota'][$key];
$con=mysqli_connect("localhost","root","","teste");
$sql = sprintf( 'INSERT INTO dados (CPF) VALUES (%s)', implode( '), (' , $valores ) );
$result = mysqli_query($con, $sql);
echo "Registro salvo com sucesso"; 
}*/



$usuarios = array();
$usuarios[] = array('nome' => 'Thiago', 'email' => 'contato@thiagobelem.net');
$usuarios[] = array('nome' => 'Fulano da Silva', 'email' => 'fulano@email.com');
$usuarios[] = array('nome' => 'Ciclano', 'email' => 'ciclano@uol.com.br');

// Início da consulta

$con=mysqli_connect("localhost","root","","teste");
$sql = "INSERT INTO dados (CPF) VALUES";

// Para cada elemento de $usuários, faça:
foreach ($usuarios as $usuario) {
  $nome = $usuario['nome'];
  $email = $usuario['email'];

  // Monta a parte consulta de cada usuário
  $sql .= " (NULL, '{$nome}', '{$email}'),";
}

// Tira o último caractere (vírgula extra)
$sql = substr($sql, 0, -1);

// Executa a consulta
mysql_query($sql, $con);

// Pega o número de registros inseridos
$cadastrados = mysql_affected_rows();

echo 'Usuários cadastrados: ' . $cadastrados;
?>