<?php
include_once 'ORMObject.php';

class Usuario extends ORMObject {
	private $id;
	private $nome;
	private $snome;
	private $email;
	
	function __construct($nome, $snome) {
		parent::__construct('usuario');
		$this->nome = $nome;
		$this->snome = $snome;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getSobrenome(){
		return $this->snome;
	}
	
	public function setSobrenome($snome){
		$this->snome = $snome;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	protected function getData(){
		$data['id']    = $this->id; 
		$data['nome']  = $this->nome;
		$data['snome'] = $this->snome;
		$data['email'] = $this->email;
		return $data;
	}
	
	public static function loadFromDatabase($id, $table = null) {
		$obj = parent::loadFromDatabase($id, 'usuario');
		$user = new Usuario($obj->nome, $obj->snome);
		$user->setEmail($obj->email);
		$user->setId($id);
		return $user;
	}
}