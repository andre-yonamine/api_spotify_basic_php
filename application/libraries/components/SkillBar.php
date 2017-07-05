<?php

class SkillBar {
	private $label;
	private $value;
	private $color = 0;
	private $height = 40;
	private $colorList = array(
		'#ff0066', '#99ff99', '#ff6666', '#0066cc', '#33cc33', 
		'#ff9933', '#ffff99', '#ff33cc', '#993300', '#0066ff'
	);
	
	function __construct($label, $value) {
		$this->label = $label;
		$this->value = $value;
	}
	
	/**
	 * Define a cor da barra percentual.
	 * @param int [0..9] $color
	 */
	public function setColor($color){
		$this->color = $this->colorList[$color];
	}

	/**
	 * Container da barra (fundo cinza)
	 * @param html $bar
	 * @return string: código html da skillbar
	 */
	private function container($bar){
		return '<p style="margin-bottom:0">'.$this->label.'</p><div style="width:100%; background-color:#ddd">'.$bar.'</div>';
	}
	
	/**
	 * Barra percentual
	 * @return string: código html da barra
	 */
	private function skill() {
		return '<div style="text-align:right; padding-right: 20px;
				line-height:'.$this->height.'px; color:white; 
				width:'.$this->value.'%; background-color:'.$this->color.'">'.
				$this->value.'%</div>';
	}
	
	/**
	 * Retorna o código html da skillbar
	 * @return string: html
	 */
	public function getHTML(){
		$bar = $this->skill();
		$html = $this->container($bar);
		return $html;
	}
	
}