<?php

define("PATH", "estacionamento/");


include_once ("classes/views/header.php");

if (isset($_GET["page"])) {
    include_once ("classes/controllers/" . $_GET["page"]);
} else {
    include_once ("classes/views/main.php");
}

include_once ("classes/views/footer.php");

?>