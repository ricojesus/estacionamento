<?php
include_once ("../views/header.php");
include_once ("../models/marca.php");

// include para validar o login do usuário a cada acesso.
include_once ("../controllers/login_controller.php");

if (isset($_POST["btnGravar"])){
    $marca = new marca();

    $marca->id = $_POST["txtId"];
    $marca->nome = $_POST["txtNome"];

    $marca->save();
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "novo"){
        $id = 0;
        include_once ("../views/marca_editar.php");
    } elseif($_GET["action"] == "editar") {
        $id = $_GET["id"];
        include_once ("../views/marca_editar.php");
    }
} else {
    include_once ("../views/marca_listar.php"); 
}

include_once ("../views/footer.php");

?>


