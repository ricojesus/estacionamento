<?php
include_once ("../views/header.php");
include_once ("../models/marca.php");
include_once ("../models/movimento.php");


if (isset($_POST["btnGravar"])){

    var_dump($_POST);

    $movimento = new Movimento();
    $movimento->id = $_POST["txtId"];
    $movimento->placa = $_POST["txtPlaca"];
    $movimento->entrada = date('Y-m-d H:i');
    $movimento->marca = $_POST["cboTipoVeiculo"];
    $movimento->modelo = $_POST["txtModelo"];
    //$movimento->save();

    //echo "<script>window.open('../views/ticket_entrada.php', '_blank');</script>";
}

if (isset($_GET["action"])){
    // Mais uma chamada que não seria para nada, só sobrecarregando o banco de dados
    //$lista = (new Movimento())->list();
    
    switch ($_GET["action"]){
        
        case "saida":
            if (isset($_GET["id"])){
                $movimento = new Movimento($_GET["id"]);
            } else {
                $movimento = new Movimento();
            }

            include_once ("../views/movimento_saida.php");
            break;
        case "lista_ativos":
            $lista = (new Movimento())->listActives();        
            include_once ("../views/movimento_lista_ativos.php");
            break;

    } //; - Ponto e virgula desnecessario
} else {
    $movimento = new Movimento();
    $lstMarca = (new Marca())->list();
    include_once ("../views/movimento_entrada.php"); 
}
    // Adriano -- Não entendi esse include aqui se já foi incluso no começo do programa
    //esta include serve pa chama a classe movimento senao gera um erro
    //include_once ("../models/movimento.php");
    
    // Adriano -- Para que serve esse list?
    //esta list ja estava aqui
    //$lstMarca = (new Marca())->list();


include_once ("../views/footer.php");

?>

