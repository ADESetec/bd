<?php
   
if(isset($_POST['def'])
$def_selected = $_POST["def"];
  
def($def_selected);
function def($def_selected){


   $dados = count($def_selected);
   $banco = mysqli_connect("localhost","root","","teste");

   

$sql = sprintf( 'INSERT INTO teste(IDD) VALUES (%s)', implode( '), (' , $def_selected ) );
$conn->query( $sql );

for($i=0; $i<$dados;$i++){
       $IDD = $def_selected[$i];

   $sql = "INSERT INTO dados(CPF) VALUES ('$IDD')";

   $banco->query($sql);

}

) {

    $conn=mysqli_connect("localhost","root","","bancocurriculos_ibdd");



}














/*session_start();
<?php
   
if(isset($_POST['def'])
$def_selected = $_POST["def"];
  
def($def_selected);
function def($def_selected){


   $dados = count($def_selected);
   $banco = mysqli_connect("localhost","root","","teste");

   
$valores = range( 1 , 10 );
$sql = sprintf( 'INSERT INTO teste(IDD) VALUES (%s)', implode( '), (' , $valores ) );
$conn->query( $sql );

for($i=0; $i<$dados;$i++){
       $IDD = $def_selected[$i];

   $sql = "INSERT INTO dados(CPF) VALUES ('$IDD')";

   $banco->query($sql);

}

) { // Valor que deve vir via post
  

    $conn=mysqli_connect("localhost","root","","bancocurriculos_ibdd");



}


}
$CPF = $_POST["CPF"];
echo $CPF;
    $senha='1';
    function excluir($CPF,$senha){
        $mysqli = new mysqli("localhost:3306","root","","loginteste");
        $mysqli->query("CALL VERIFICAR_SENHA_EXCLUIR('$CPF','$senha',@pMensagem, @ID)");
        $result = $mysqli->query("SELECT @pMensagem as msg, @ID as ID");
        $linha = $result->fetch_assoc();
        return $linha;
        echo $linha['msg'];
        }
            
            excluir($CPF,$senha);

                $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
                $mysqli->query( "CALL `get_ID`('$CPF', @p1)");
                $result = $mysqli->query("SELECT @p1 as 'pIDP'");
                return $p1;
                $dados=mysqli_fetch_assoc($result);
                echo "$dados[pIDP]";

CALL `get_ID`(@p0, @p1); SELECT @p1 AS `pIDP`;
function ImprimirRenda($renda){
    $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
$mysqli->query("CALL get_ID('$CPF', @pIDP)");
                
$result = $mysqli->query("SELECT @pIDP as IDP");
                $dados=mysqli_fetch_assoc($result);
                echo "$dados[IDP]";
            }

           
            function excluir($CPF,$senha){
                $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
                $mysqli->query("CALL VERIFICAR_SENHA_EXCLUIR('$CPF','$senha',--pMensagem, --ID)");
                $result = $mysqli->query("SELECT --pMensagem as msg, --ID as ID");
                $linha = $result->fetch_assoc();
                return $linha;
                }
                $mysqli = new mysqli("localhost:3306","root","","bancocurriculos_ibdd");
$mysqli->query("CALL get_ID('$CPF', @pIDP)");
$result = $mysqli->query("SELECT @pIDP as IDP");
$linha = $result->fetch_assoc();
return $linha;*/
?>