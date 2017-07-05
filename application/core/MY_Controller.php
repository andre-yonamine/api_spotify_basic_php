<?php

class MY_Controller extends CI_Controller {

	function show($content) {
		$data['style'] = $this->get_style();
		$html  = $this->load->view('common/header', $data, true);
		$html .= $this->load->view('common/navbar', null, true);
		$html .= $content;
		$html .= $this->load->view('mdbcomponent/basicfooter', null, true);
		
		$data['script'] = $this->get_script();
		$html .= $this->load->view('common/footer', $data, true);
		echo $html;
	}
	
	private $script_list = array();
	protected function add_script($script) {
		$this->script_list[] = $script;
	}
	
	private function get_script() {
		$html = '';		
		foreach ($this->script_list as $script){
			$html .= '<script src="'.base_url('assets/js/'.$script).'.js"></script>';
		}
		return $html;
	}
	
	private $style_list = array();
	protected function add_style($style) {
		$this->style_list[] = $style;
	}
	
	private function get_style() {
		$html = '';
		foreach ($this->style_list as $style){
			$html .= '<link href="'.base_url('assets/css/'.$style).'.css" rel="stylesheet">';
		}
		return $html;
	}
	
}






