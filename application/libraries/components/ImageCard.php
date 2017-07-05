<?php
include_once 'Card.php';

class ImageCard extends Card {
	
	function __construct($text, $title) {
		parent::__construct($text, $title);
	}
	
	protected function getHeader() {
		return '<img class="img-fluid" src="https://mdbootstrap.com/
				img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" 
				alt="Card image cap">';
	}
}