<?php
include_once 'Card.php';

class LabelCard extends Card{

	protected $header;
	protected $footer;

	function __construct($text, $title) {
		parent::__construct($text, $title);
	}
	
	public function setHeader($header){
		$this->header = $header;	
	}

	public function setFooter($footer){
		$this->footer = $footer;
	}
	
	protected function getHeader() {
		return '<div class="card-header default-color-dark white-text">
			        '.$this->header.'
			    </div>';
	}
	
	protected function getFooter(){
		return '<div class="card-footer text-muted default-color-dark white-text">
			        <p>'.$this->footer.'</p>
			    </div>';
	}
}