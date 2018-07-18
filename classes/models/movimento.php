<?php 

include_once ("../dal/Sql.php");

class Movimento{

	// propriedades
	public $id=0;
    public $placa;
	public $entrada;
	public $marca;
	public $modelo;
    public $saida;
    public $valor;
    public $status=1;

	//Construtor, instanciado todas as vezes que a classe é criada
	public function __construct($id = 0){
		if ($id != 0) {
			$result = $this->get("movimento_id = ". $id);
			if (count($result) > 0){
				$this->id = $result[0]["id"];
                $this->placa = $result[0]["placa"];
				$this->entrada = $result[0]["entrada"];
				$this->marca = $result[0]["marca_id"];
				$this->modelo = $result[0]["modelo"];
                $this->saida = $result[0]["saida"];
                $this->valor = $result[0]["valor"];
                $this->status = $result[0]["status"];
			}
		}
	}

	// Retornar todos os registros cadastrados, serve para carregar a tela de consulta
	public function list(){
		return $this->get();
	}

	// Retorna a lista de Carros ainda no patio
	public function listActives(){
		return $this->get("status = 1");
	}

	// Retorna a lista de Carros que já tiveram o movimento encerrado
	public function listClosed(){
		return $this->get("status = 2");
	}

	//Grava os dados enviados pelo controlador
	public function save(){
		$sql = new Sql();

		if ($this->id == 0){
			$sql->query("INSERT INTO movimento (placa, entrada, marca_id, modelo, saida, valor, status) values (:PLACA, :ENTRADA, :MARCA, :MODELO, :SAIDA, :VALOR, :STATUS)", array(
				':PLACA' => strtoupper($this->placa),
				':ENTRADA' => $this->entrada,
				':MARCA' => $this->marca,
				':MODELO' => $this->modelo,
				':SAIDA' => $this->saida,
				':VALOR' => $this->valor,
				':STATUS' => $this->status

			));
		} else {
			$sql->query("UPDATE movimento SET placa=:placa WHERE movimento_id = :ID", array(
				':ID' => $this->id,
				':placa' => $this->placa
			));
		}		
	}

	public function close(){
		$sql = new Sql();

		// Calcula o tempo de permanencia
		$result = $sql->select("SELECT round((time_to_sec(now() - entrada) / 60), 0) as tempo FROM movimento where movimento_id = $this->id");
		$tempo = $result[0]["tempo"];

		// Encontra o valor
		$result2 = $sql->select("SELECT valor FROM preco where minutos <= $tempo order by valor desc limit 1");
		$preco = $result2[0]["valor"];

		// Atualiza os dados
		$sql->query("UPDATE movimento SET saida=now(), valor=:PRECO, status=2  WHERE movimento_id = :ID", array(
			':ID' => $this->id,
			':PRECO' => $preco
		));
	}

	// Exclui logicamente o registro
	public function delete(){
		$sql = new Sql();

		$sql->query("UPDATE movimento SET status=3 WHERE movimento_id = " . $this->id);
	}

	// metodo interno serve para montar todas as consultas de acesso aos dados de movimento
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT movimento_id as id, placa, entrada, marca_id, modelo, saida, valor, status FROM movimento WHERE status != 3"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY placa";

		return $sql->select($query);
	}	
}

 ?>