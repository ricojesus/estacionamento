<?php
include_once ("../models/usuario.php");

var_dump($_POST);

if (isset($_POST["btnLogin"])){
    
}

// se não encontrar a sessão redireciona para a pagina de login
if (!isset($_SESSION["usuario_id"])){
    echo '<meta http-equiv="refresh" content="0;url=../views/login.php" />';
    exit;
}


?>