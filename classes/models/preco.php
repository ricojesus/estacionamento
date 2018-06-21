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


}