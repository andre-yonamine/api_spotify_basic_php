<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SpotifyModel extends CI_Model{
    
    	function __construct() {
		parent::__construct();
	}
	
 /* 
 * 
 * esse metodo pega os dados do formulario
 * 
 */

	function getContactForm() {
		$data['label'] = array('Search');
                $data['message'] = array('title' => 'Procure o seu artista', 'intro'=>'digite o nome do artista no campo abaixo');
		return $data;
	}

 /* 
 * 
 * pega o token para acessar os dados do spotify
 * 
 */
        public function getToken(){
            $client_id = '53d380227e254bd5bff1da25febb6c00'; 
            $client_secret = 'ddcb6e12e85442d08734dc37297d7e65'; 
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,            'https://accounts.spotify.com/api/token' );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt($ch, CURLOPT_POST,           1 );
            curl_setopt($ch, CURLOPT_POSTFIELDS,     'grant_type=client_credentials' ); 
            curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 

            $result1=curl_exec($ch);
            $strg = json_decode($result1,true);// vai decodificar para um array

            $token = $strg['access_token'];// atribui a variavel token, com o token gerado atraves do client_id e client_secret
            return $token;
        }
 /* 
 * 
 * pega os dados do artista, album e musica
 * 
 */
        public function getArtista(){
            $token2 = $this->getToken();
            $artista = $this->procura();
            $type = $this->checkbox();
            // com o token em maos, podemos procurar pelo artista 
            $linkartista = 'https://open.spotify.com/artist/';
            $link_album = 'https://open.spotify.com/album/';
            $link_track = 'https://open.spotify.com/track/';

            
            $ch2 = curl_init();
            curl_setopt($ch2, CURLOPT_URL,            'https://api.spotify.com/v1/search?q='.$artista.'&type='.$type);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt($ch2, CURLOPT_VERBOSE,true);
            curl_setopt($ch2, CURLOPT_HTTPHEADER,     array('Authorization: Bearer '. $token2)); 
            $result2=curl_exec($ch2);
            $valor = json_decode($result2);
            
            if ($type == "artist"){
               foreach ($valor->artists->items as $key) {
                echo "<a target='_blank' href=".$linkartista.$key->id.">".$key->name."</a><br>";
            }
            }elseif($type == "album"){
               foreach ($valor->albums->items as $key) {
                echo "<a target='_blank' href=".$link_album.$key->id.">".$key->name."</a><br>";
            }            
            }else{
               foreach ($valor->tracks->items as $key) {
                echo "<a target='_blank' href=".$link_track.$key->id.">".$key->name."</a><br>";
            }
           }
        }
        
         /* 
 * 
 * metodo que retona a palavra procurada pelo usuario em forma de string
 * 
 */
        public function procura() {
		$dados['artista']  = $this->input->post('input_artista');
                $str = implode(" ", $dados);
                $str2 = explode(" ", $str);
                $str3 = implode("%20",$str2);
                return $str3;               
   }
   
    /* 
 * 
 * metodo que retorna o checkbox.
 * 
 */
    public function checkbox(){
        $check['type']  = $this->input->post('input_type');
        $check_str = implode("", $check);
        return $check_str;
    }
    
}