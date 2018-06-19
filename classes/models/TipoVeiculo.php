<?php 

include_once ("../dal/Sql.php");

class TipoVeiculo{

	// propriedades
	public $tipoVeiculoId;
	public $descricao;
	

	//Construtor, instanciado todas as vezes que a classe é criada
	public function __construct($tipoVeiculoId = 0){
		if ($tipoVeiculoId == 0) {
			$this->tipoVeiculoId = 0;
			$this->descricao = "";
			
		} else {
			$result = $this->get("tipo_veiculo_id = ". $tipoVeiculoId);
			if (count($result) > 0){
				$this->tipoVeiculoId = $result[0]["tipoVeiculoId"];
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
			$sql->query("INSERT INTO tipo_veiculo (descricao) values (:DESCRICAO)", array(
				':DESCRICAO' => $this->descricao
			));
		} else {
			$sql->query("UPDATE tipo_veiculo SET descricao=:DESCRICAO WHERE tipo_veiculo_id = :ID", array(
				':ID' => $this->tipoVeiculoId,
				':DESCRICAO' => $this->descricao
			));
		}		
	}

	// Exclui logicamente o registro
	public function delete(){
		$sql = new Sql();

		$sql->query("UPDATE tipo_veiculo SET status=2 WHERE tipo_veiculo_id = " . $this->tipoVeiculoId);
	}

	// metodo interno serve para montar todas as consultas de acesso aos dados de teste
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT tipo_veiculo_id as id, descricao FROM tipo_veiculo WHERE status=1"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY descricao";

		return $sql->select($query);
	}	
}

 ?>