<?php 

include_once ("../dal/Sql.php");

class Marca{

	// propriedades
	public $id;
	public $nome;

	//Construtor, instanciado todas as vezes que a classe é criada
	public function __construct($id = 0){
		if ($id == 0) {
			$this->id = 0;
			$this->nome = "";
		} else {
			$result = $this->get("marca_id = ". $id);
			if (count($result) > 0){
				$this->id = $result[0]["id"];
				$this->nome = $result[0]["nome"];
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
			$sql->query("INSERT INTO marca (nome) values (:NOME)", array(
				':NOME' => $this->nome
			));
		} else {
			$sql->query("UPDATE marca SET nome=:NOME WHERE marca_id = :ID", array(
				':ID' => $this->id,
				':NOME' => $this->nome
			));
		}		
	}

	// Exclui logicamente o registro
	public function delete(){
		$sql = new Sql();

		$sql->query("UPDATE marca SET status=2 WHERE marca_id = " . $this->id);
	}

	// metodo interno serve para montar todas as consultas de acesso aos dados de marca
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT marca_id as id, nome FROM marca WHERE status=1"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY nome";

		return $sql->select($query);
	}	
}

 ?>