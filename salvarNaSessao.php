<?php
session_start();

if(isset($_POST['valor1'])){
   $_SESSION['valor1'] = $_POST['valor1'];
}
?>