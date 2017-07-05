<?php

class Card {

	protected $text;
	protected $title;
	protected $btnLabel;
	
	function __construct($text, $title) {
		$this->title = $title;
		$this->text = $text;
	}
	
	public function setBtnLabel($btnLabel){
		$this->btnLabel = $btnLabel;
	}

	protected function getButton(){
		$html = '<a class="btn btn-default">'.$this->btnLabel.'</a>';
		return $this->btnLabel == null ? '' : $html;
	}

	protected function getTitle(){
		$html = '<h4 class="card-title">'.$this->title.'</h4>';
		return $this->title == null ? '' : $html;
	}
	
	protected function getText(){
		$html = '<p class="card-text">'.$this->text.'</p>';
		return $this->text == null ? '' : $html;
	}
		
	public function html() {
		$html = '<div class="card text-center mt-4">';
		$html .= $this->getHeader();
		$html .= $this->getBlock();
		$html .= $this->getFooter();
		return $html .= '</div>';
	}

	protected function getBlock() {
		return '<div class="card-block">
			   '.$this->getTitle().'
			   '.$this->getText().'
			   '.$this->getButton().'
			    </div>';
	}
	
	protected function getHeader() {}
	protected function getFooter() {}
}