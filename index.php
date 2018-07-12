<?php

define("PATH", "estacionamento/");
date_default_timezone_set('America/Sao_Paulo');
session_start();

//include_once ("classes/controllers/login_controller.php");
include_once ("classes/views/header.php");

if (isset($_GET["page"])) {
    include_once ("classes/controllers/" . $_GET["page"]);
} else {
    include_once ("classes/views/main.php");
}

include_once ("classes/views/footer.php");

?>