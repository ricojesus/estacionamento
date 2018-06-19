<?php
include_once ("../views/header.php");
include_once ("../models/teste.php");

if (isset($_GET["action"])){
    if ($_GET["action"] == "saida"){
        include_once ("../views/movimento_saida.php");
    }
} else {
    include_once ("../views/movimento_entrada.php"); 
}

include_once ("../views/footer.php");

?>


