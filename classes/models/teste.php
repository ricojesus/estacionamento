<?php 

include_once ("../dal/Sql.php");

class Teste{

	// propriedades
	public $id;
	public $descricao;

	//Construtor, instanciado todas as vezes que a classe é criada
	public function __construct($id = 0){
		if ($id == 0) {
			$this->id = 0;
			$this->descricao = "";
		} else {
			$result = $this->get("teste_id = ". $id);
			if (count($result) > 0){
				$this->id = $result[0]["id"];
				$this->descricao = $result[0]["descricao"];
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
			$sql->query("INSERT INTO teste (descricao) values (:DESCRICAO)", array(
				':DESCRICAO' => $this->descricao
			));
		} else {
			$sql->query("UPDATE teste SET descricao=:DESCRICAO WHERE teste_id = :ID", array(
				':ID' => $this->id,
				':DESCRICAO' => $this->descricao
			));
		}		
	}

	// Exclui logicamente o registro
	public function delete(){
		$sql = new Sql();

		$sql->query("UPDATE teste SET status=2 WHERE teste_id = " . $this->id);
	}

	// metodo interno serve para montar todas as consultas de acesso aos dados de teste
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT teste_id as id, descricao FROM teste WHERE status=1"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY descricao";

		return $sql->select($query);
	}	
}

 ?>