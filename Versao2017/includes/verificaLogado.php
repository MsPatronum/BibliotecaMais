<?php 

if(!isset($_SESSION['cpf_usuario'])){

header("location:".url."/login.php?msg=Faça o login para acessar o sistema!");
}

?>