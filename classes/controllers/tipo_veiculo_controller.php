<?php
include_once ("../views/header.php");
include_once ("../models/teste.php");

//Somente entrará nesse if quando retornando da tela de edição
if (isset($_POST["btnGravar"])){
    $tipoVeiculo = new TipoVeiculo();

    $tipoVeiculo->id = $_POST["txtId"];
    $tipoVeiculo->descricao = $_POST["txtDescricao"];

    $tipoVeiculo->save();
}

//Roteia para a tela correta
if (isset($_GET["action"])){

    $tipoVeiculo = new TipoVeiculo();

    if (isset($_GET["id"])){
        $tipoVeiculo = new TipoVeiculo($_GET["id"]);
    }

    if ($_GET["action"] == "novo"){
        include_once ("../views/teste_editar.php");
    } elseif($_GET["action"] == "editar") {
        include_once ("../views/teste_editar.php");
    }
} else {
    $lista = (new TipoVeiculo())->list();
    include_once ("../views/teste_listar.php"); 
}


// Inclui o Rodape na tela
include_once ("../views/footer.php");

?>


