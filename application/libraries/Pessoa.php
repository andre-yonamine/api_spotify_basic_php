<?php

class Pessoa {
	private $cpf;
	private $nome;
	
	function __construct($nome = '') {
		$this->nome = $nome;
	}
	
	public function getNome() {
		if(strlen($this->nome) == 0)
			return 'Usuario';
		return $this->nome;
	}
	
	public function setCpf($cpf) {
		if(strlen($cpf) != 14)
			$this->cpf = -1;
		else $this->cpf = $cpf;
	}
	
	public function getCpf() {
		return $this->cpf;
	}
	
	private $genero;
	public function setSexo($genero) {
		$this->genero = $genero;
	}
	
	public function getSexo(){
		return $this->genero;
	}
	
	private $ano;
	function anoNascimento($ano) {
		$this->ano = $ano;
	}
	
	function idade() {
		$ano_atual = date('Y');
		return $ano_atual - $this->ano;
	}
}














