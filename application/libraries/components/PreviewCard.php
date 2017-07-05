<?php
include_once 'Card.php';

class PreviewCard extends Card{
	private $header;
	
	function __construct($text, $title, $header) {
		parent::__construct($text, $title);
		$this->header = $header;
	}
	
	protected function getHeader() {
		return '<div class="card-header default-color-dark white-text">
			        '.$this->header.'
			    </div>';
	}
	
	
}