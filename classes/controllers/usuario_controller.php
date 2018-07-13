<?php
include_once ("../views/header.php");
include_once ("../models/usuario.php");

//Somente entrará nesse if quando retornando da tela de edição
if (isset($_POST["btnGravar"])){
    $usuario = new Usuario();

    $usuario->id = $_POST["txtId"];
    $usuario->nome = $_POST["txtNome"];
    $usuario->login = $_POST["txtLogin"];
    $usuario->senha = md5($_POST["txtSenha"]);
    //$passwordEncriptada = md5($usuario->senha); //encript a senha com sistema md5 antes de salvar no banco de dados
    //$usuario->senha = md5($usuario->senha); // pega de volta para a classe de usuario a senha ja encriptada
    // verifica se os dados estao corretos antes de salvar no banco de dados o cadastro do usuarior

    $usuario->save();
}

if (isset($_POST["btnAlterarSenha"])){
    $usuario = new Usuario();

    $usuario->id = $_POST["txtId"];
    $usuario->nome = $_POST["txtNome"];
    $usuario->login = $_POST["txtLogin"];
    $usuario->senha = md5($_POST["txtSenha"]);
    $usuario->save();

}

//Roteia para a tela correta
if (isset($_GET["action"])){

    $usuario = new Usuario();

    if (isset($_GET["id"])){
        $usuario = new Usuario($_GET["id"]);
    }

    if ($_GET["action"] == "novo"){
        include_once ("../views/usuario_editar.php");
    } elseif($_GET["action"] == "editar") {
        include_once ("../views/usuario_editar.php");
    } elseif($_GET["action"] == "trocasenha") {
        include_once ("../views/usuario_troca_senha.php");
    }
} else {
    //$lista[] = ""; // Remover depois de criar a classe usuario
    $lista = (new Usuario())->list();
    include_once ("../views/usuario_listar.php"); 
}


// Inclui o Rodape na tela
include_once ("../views/footer.php");

?>