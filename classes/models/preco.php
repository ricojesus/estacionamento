<?php

include_once ("../dal/Sql.php");

class Preco {

	//propriedades 
	public $id; 
	public $tempo;
	public $valor; 

	//construtor
	public function __construct($id = 0){
		if ($id == 0) {
			$this->id = 0;
			$this->tempo = "";
			$this->valor = "";
		} else {
			$result = $this->get("preco_id = ". $id);
			if (count($result) > 0){
				$this->id = $result[0]["id"];
				$this->tempo = $result[0]["tempo"];
				$this->valor = $result[0]["valor"];
			}
		}
	}

	// Retornar todos os registros cadastrados, serve para carregar a tela de consulta
	public function list(){
		return $this->get();
	}


	// metodo interno serve para montar todas as consultas de acesso aos dados de teste
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT preco_id as id, minutos FROM preco WHERE status=1"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY minutos";

		return $sql->select($query);
	}	

}