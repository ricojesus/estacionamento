<?php 

include_once ("../dal/Sql.php");

class Usuario{

	// propriedades
	public $id = 0;
	public $nome;
	public $login;
	public $senha;
	public $status;

	//Construtor, instanciado todas as vezes que a classe é criada
	public function __construct($id = 0){
		if (!$id == 0) {
			$result = $this->get("usuario_id = ". $id);
			if (count($result) > 0){
				$this->id = $result[0]["id"];
				$this->nome = $result[0]["nome"];
				$this->login = $result[0]["login"];
				$this->senha = $result[0]["senha"];
				$this->status = $result[0]["status"];

			}
		}
	}

	// Retornar todos os registros cadastrados, serve para carregar a tela de consulta
	public function list(){
		return $this->get();
	}

	//Grava os dados enviados pelo controlador
	public function save(){
		$sql = new Sql();

		if ($this->id == 0){
			$sql->query("INSERT INTO usuario (nome, login, senha, status) values (:NOME, :LOGIN, :SENHA, :STATUS)", array(
				':NOME' => $this->nome,
				':LOGIN' => $this->login,
				':SENHA' => $this->senha,
				':STATUS' => 1
			));
		} else {
			$sql->query("UPDATE usuario SET nome=:NOME, login=:LOGIN, senha=:SENHA  WHERE usuario_id = :ID", array(
				':ID' => $this->id,
				':NOME' => $this->nome,
				':LOGIN' => $this->login,
				':SENHA' => $this->senha
			));
		}		
	}

	// Exclui logicamente o registro
	public function delete(){
		$sql = new Sql();

		$sql->query("UPDATE usuario SET status=2 WHERE usuario_id = " . $this->id);
	}

	// metodo interno serve para montar todas as consultas de acesso aos dados de usuario
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT usuario_id as id, nome, login, senha, status FROM usuario WHERE status=1"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY nome";

		return $sql->select($query);
	}	
}

 ?>