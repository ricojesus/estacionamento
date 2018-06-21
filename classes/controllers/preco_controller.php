<?php

include_once ("../views/header.php");
include_once ("../models/preco.php");

//somente entrará nesse IF quando voltar da pagina de edição.
//porém não entendo se é necessario manter primeiramente esta ordem. 
if (isset($_POST["btnGravar"])){
    $preco = new Preco();

    $preco->id = $_POST["txtId"];
    $preco->tempo = $_POST["txtTempo"];
    $preco->valor = $_POST["txtValor"];

    $preco->save();
}

//Roteia para a tela correta
if (isset($_GET["action"])){

    $preco = new Preco();

    if (isset($_GET["id"])){
        $preco = new Preco($_GET["id"]);
    }

    if ($_GET["action"] == "novo"){
        include_once ("../views/teste_editar.php");
    } elseif($_GET["action"] == "editar") {
        include_once ("../views/teste_editar.php");
    }
} else {
    $lista = (new Preco())->list();
    include_once ("../views/teste_listar.php"); 
}



// Inclui o Rodape na Tela 
include_once ("../views/footer.php");