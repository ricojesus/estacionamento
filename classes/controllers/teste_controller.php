<?php
include_once ("../views/header.php");
include_once ("../models/teste.php");


if (isset($_POST["btnGravar"])){
    $teste = new Teste();

    $teste->id = $_POST["txtId"];
    $teste->descricao = $_POST["txtDescricao"];

    $teste->save();
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "novo"){
        $id = 0;
        include_once ("../views/teste_editar.php");
    } elseif($_GET["action"] == "editar") {
        $id = $_GET["id"];
        include_once ("../views/teste_editar.php");
    }
} else {
    include_once ("../views/teste_listar.php"); 
}

include_once ("../views/footer.php");

?>


