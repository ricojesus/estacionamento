<?php
include_once ("../views/header.php");
include_once ("../models/marca.php");

if (isset($_GET["action"])){
    if ($_GET["action"] == "saida"){
        include_once ("../views/movimento_saida.php");
    }
} else {
    $lstMarca = (new Marca())->list();
    include_once ("../views/movimento_entrada.php"); 
}

include_once ("../views/footer.php");

?>


