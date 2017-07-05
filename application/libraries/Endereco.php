<?php

// classes devem ser definidas em arquivos 
// PHP de mesmo nome da classe; a inicial deve ser maiúscula
class Endereco {
	
	// definição de atributos de objeto
	private $cep;
	private $cidade;
	private $numero;
	private $logradouro;
	
	
	// construtor em PHP DEVE usar o nome __construct
	function __construct($cidade, $logradouro, $numero) {
		
		// atribuição de valor para o objeto
		$this->cidade = $cidade;
		$this->numero = $numero;
		$this->logradouro = $logradouro;
	}
	
	/**
	 * Retorna o nome da cidade
	 * @return string
	 */
	public function getCidade(){
		return $this->cidade;
	}
	
	/**
	 * Retorna o numero em um endereço. Retorna zero
	 * para representar a situação 'Sem Número' S/N
	 * @return integer
	 */
	public function getNumero() {
		return $this->numero;
	}
	
	/**
	 * Retorna o logradouro do endereço
	 * @return string
	 */
	public function getLogradouro() {
		return $this->logradouro;
	}
	
	/**
	 * Define o cep do endereço
	 * @param string $cep
	 */
	public function setCep($cep) {
		$this->cep = $cep;
	}
	
	/**
	 * Retorna o cep do endereço
	 * @return string
	 */
	public function getCep() {
		return $this->cep;
	}
	
}