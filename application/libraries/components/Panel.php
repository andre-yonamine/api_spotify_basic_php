<?php

class Panel {
	/**
	 * URL da p�gina referenciada pelo bot�o do painel
	 * @var string
	 */
	private $link;
	
	/**
	 * Conte�do central do painel
	 * @var string
	 */
	private $text;
	
	/**
	 * T�tulo exibido na �rea central do painel
	 * @var string
	 */
	private $title;
	
	/**
	 * Nome exibido na barra superior do painel
	 * @var string
	 */
	private $header;
	
	/**
	 * Nome exibido na barra inferior do painel
	 * @var string
	 */
	private $footer;
	
	/**
	 * R�tulo do bot�o do painel
	 * @var string
	 */
	private $btnLabel;
	
	/**
	 * Cont�m o c�digo HTML gerado pela classe Panel
	 * @var string
	 */
	private $html = '';
	
	
	function __construct($title, $text, $btnlabel, $link = "") {
		$this->text = $text;
		$this->link = $link;
		$this->title = $title;
		$this->btnLabel = $btnlabel;
	}
	
	public function setFooter($footer) {
		$this->footer = $footer;
	}
	
	public function setHeader($header) {
		$this->header = $header;
	}
	
	private function createHeader() {
		$this->html .= '<div class="card-header default-color-dark white-text mt-5">'.
		               $this->header.'</div>';
	}
	
	private function createBlock(){
		$this->html .= '<div class="card-block">
					        <h4 class="card-title">'.$this->title.'</h4>
					        <p class="card-text">'.$this->text.'.</p>
					        <a class="btn btn-default">'.$this->btnLabel.'</a>
					    </div>';
	}
	
	private function createFooter() {
		$this->html .= '<div class="card-footer text-muted '.
		               'default-color-dark white-text">'.$this->footer.'</div>';
	}
	
	public function getHTML(){
		$this->createHeader();
		$this->createBlock();
		$this->createFooter();
		return $this->html;
	}
}