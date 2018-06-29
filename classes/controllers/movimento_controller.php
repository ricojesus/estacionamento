<?php
include_once ("../views/header.php");
include_once ("../models/marca.php");
include_once ("../models/movimento.php");


if (isset($_GET["action"])){
    $lista = (new Movimento())->list();
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
        $movimento->id = $_POST["txtId"];
        $movimento->placa = $_POST["txtPlaca"];
        $movimento->entrada = date('Y-m-d H:i');
        $movimento->save();
}
    $lstMarca = (new Marca())->list();
    include_once ("../views/movimento_entrada.php"); 
}

include_once ("../views/footer.php");

?>

