<?php


class Spotify extends MY_Controller{
    // pega os dados do formulario e atribui para os metodos
    function index(){
        $this->load->model('spotifyModel', 'spotify');
        $data = $this->spotify->getContactForm();
	$html = $this->load->view('mdbcomponent/Spotifyform', $data, true);
	$this->show($html);
 
    }
    
    // pega os dados e mostra o artista
    function pega_dados(){
        $this->load->model('spotifyModel', 'model');
        $this->model->getArtista();
        $html = $this->load->view('basicView', NULL, true);
        $this->show($html);
    }
    

}