<?php
include_once ("../views/header.php");
include_once ("../models/marca.php");


if (isset($_GET["action"])){
    switch ($_GET["action"]){
        case "saida":
            include_once ("../views/movimento_saida.php");
        case "lista_ativos":
            include_once ("../views/movimento_lista_ativos.php");

    };
} else {
    include_once ("../models/movimento.php");


    if (isset($_POST["btnGravar"])){
        $movimento = new Movimento();
    $movimento->placa = $_POST["txtPlaca"];
    $movimento->entrada = $_POST["cboTipoVeiculo"];
    $movimento->saida = $_POST["saida"];
    $movimento->valor = $_POST["valor"];
    $movimento->save();
}
    $lstMarca = (new Marca())->list();
    include_once ("../views/movimento_entrada.php"); 
}

include_once ("../views/footer.php");

?>

