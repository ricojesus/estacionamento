<?php 

class Teste{

	// propriedades
	private $id;
	private $descricao;

<<<<<<< HEAD
	// Getters e /Setters para acesso as propriedades da classe
=======

	// Getters e Setters para acesso as propriedades da classe
>>>>>>> 6b7bc7a1617a8f8b61972e52f3a2251c2a1d694f
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	//Construtor, instanciado todas as vezes que a classe é criada
	public function __construct(){
		$this->setId(0);
		$this->setDescricao(null);
	}

	// Retornar todos os registros cadastrados, serve para carregar a tela de consulta
	public function listAll(){
		return $this->get();
	}

	// retorna somente 1 registro, caso não encontre pelo ID retornar um registro em branco
	public function getbyId($id){
		$result = $this->get("id = ". $id);

		if (count($result) > 0){
			return $result[0];
		}else{
			return new Teste();
		}		
	}

	//Grava os dados enviados pelo controlador
	public function save(){

	}

	// Exclui logicamente o registro
	public function delete(){
		$sql = new Sql();

		$sql->query("UPDATE teste SET status=2 WHERE id = " . $this->id);
	}

	// metodo interno serve para montar todas as consultas de acesso aos dados de teste
	private function get($criteria = null){
		$sql = new Sql();

		$query = "SELECT id, descricao FROM teste WHERE status=1"; //Garante trazer sempre somente os ativos

		if (!is_null($criteria)){
			$query .= " and " . $criteria;
		}

		$query .= " ORDER BY descricao";

		return $sql->select($query);
	}	
}

 ?>