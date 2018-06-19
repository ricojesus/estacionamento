<?php
include_once ("../views/header.php");
include_once ("../models/teste.php");

//Somente entrará nesse if quando retornando da tela de edição
if (isset($_POST["btnGravar"])){
    $teste = new Teste();

    $teste->id = $_POST["txtId"];
    $teste->descricao = $_POST["txtDescricao"];

    $teste->save();
}

//Roteia para a tela correta
if (isset($_GET["action"])){

    $teste = new Teste();

    if (isset($_GET["id"])){
        $teste = new Teste($_GET["id"]);
    }

    if ($_GET["action"] == "novo"){
        include_once ("../views/teste_editar.php");
    } elseif($_GET["action"] == "editar") {
        include_once ("../views/teste_editar.php");
    }
} else {
    $lista = (new Teste())->list();
    include_once ("../views/teste_listar.php"); 
}


// Inclui o Rodape na tela
include_once ("../views/footer.php");

?>


