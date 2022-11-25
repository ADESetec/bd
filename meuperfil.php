<?php
function ImprimirDados($CPF){
    $sql = "SELECT * from dados Where CPF='$CPF'" ;
    $conexao= mysqli_connect("localhost","root","","bancocurriculos_ibdd");
    $result = mysqli_query($conexao, $sql);
    $dados=mysqli_fetch_assoc($result);
 
                    }
                    ?>