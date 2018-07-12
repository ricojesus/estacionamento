<?php
include_once ("../models/usuario.php");

if (!isset($_SESSION["usuario_id"] )){
    if (isset($_POST["btnLogin"])){
       
        $result = (new Usuario)->login($_POST["username"], $_POST["password"]);
        
        if (count($result) == 0) {
            $error = 'Login ou Senha Inválidos !!';
            include_once ("../views/login.php");
        } else {
            $_SESSION["usuario_id"] = $result[0]["id"];
            $_SESSION["login"] = $result[0]["login"];
            include_once ("../../index.php");
        }
    }

    // se não encontrar a sessão redireciona para a pagina de login
    if (!isset($_SESSION["usuario_id"])){
        echo '<meta http-equiv="refresh" content="0;url=../views/login.php" />';
        exit;
    }
}


?>