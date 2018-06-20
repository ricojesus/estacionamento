<?php
include_once ("../views/header.php");
include_once ("../models/usuario.php");

//Somente entrará nesse if quando retornando da tela de edição
if (isset($_POST["btnGravar"])){
    $usuario = new usuario();

    $usuario->id = $_POST["txtId"];
    $usuario->nome = $_POST["txtNome"];
    $usuario->login = $_POST["txtLogin"];
    $usuario->senha = $_POST["txtSenha"];
    $passwordEncriptada = md5($usuario->senha); //encript a senha com sistema md5 antes de salvar no banco de dados
    $usuario->senha = $passwordEncriptada; // pega de volta para a classe de usuario a senha ja encriptada
    // verifica se os dados estao corretos antes de salvar no banco de dados o cadastro do usuarior

  ?>
  <script>
function valida(){

var vsenha = $_POST["txtSenha"];

var i;
var j;

if (vsenha == ""){
    alert('Nome do Jogador 1 deve ser preenchido');
    return false;
}

}

if (vsenha.length != 8){
    alert('A Senha do Jogador 1 deve conter 8 digitos');
    return false;
}

}

if (!valida_senha(vsenha)){
    alert('A Senha do Jogador 1 contém digitos repeditos');
    form1.senha.focus();
    return false;			
    

}

function valida_senha(vsenha){
for (i = 0; i < 3; i++){
    for (j = i+1; j < 4; j++){
        if (vsenha.substring(i, i+1) == vsenha.substring(j, j+1)){
            return false;				
        }
    }
}

return true;		
}

}

</script>

  <<?php 
    $usuario->save();
}

//Roteia para a tela correta
if (isset($_GET["action"])){

    $usuario = new usuario();

    if (isset($_GET["id"])){
        $usuario = new usuario($_GET["id"]);
    }

    if ($_GET["action"] == "novo"){
        include_once ("../views/usuario_editar.php");
    } elseif($_GET["action"] == "editar") {
        include_once ("../views/usuario_listar.php");
    }
} else {
    //$lista[] = ""; // Remover depois de criar a classe usuario
    $lista = (new usuario())->list();
    include_once ("../views/usuario_listar.php"); 
}


// Inclui o Rodape na tela
include_once ("../views/footer.php");

?>


