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
    $lstMarca = (new Marca())->list();
    include_once ("../views/movimento_entrada.php"); 
}

include_once ("../views/footer.php");

?>