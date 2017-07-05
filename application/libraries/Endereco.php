<?php

// classes devem ser definidas em arquivos 
// PHP de mesmo nome da classe; a inicial deve ser mai�scula
class Endereco {
	
	// defini��o de atributos de objeto
	private $cep;
	private $cidade;
	private $numero;
	private $logradouro;
	
	
	// construtor em PHP DEVE usar o nome __construct
	function __construct($cidade, $logradouro, $numero) {
		
		// atribui��o de valor para o objeto
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
	 * Retorna o numero em um endere�o. Retorna zero
	 * para representar a situa��o 'Sem N�mero' S/N
	 * @return integer
	 */
	public function getNumero() {
		return $this->numero;
	}
	
	/**
	 * Retorna o logradouro do endere�o
	 * @return string
	 */
	public function getLogradouro() {
		return $this->logradouro;
	}
	
	/**
	 * Define o cep do endere�o
	 * @param string $cep
	 */
	public function setCep($cep) {
		$this->cep = $cep;
	}
	
	/**
	 * Retorna o cep do endere�o
	 * @return string
	 */
	public function getCep() {
		return $this->cep;
	}
	
}