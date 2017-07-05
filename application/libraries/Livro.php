<?php

class Livro {
	private $db;
	
	function __construct() {
		$ci = & get_instance();
		$this->db = $ci->db;
	}
	
	// delete
	function delete($id) {
		$this->db->delete('livro', array('id' => $id));
	}
	
	function insere($data) {
		$this->db->insert('livro', $data);
	}
	
	function read($id) {
		$this->db->where(array('id' => $id));
		return $this->db->get('livro')->row();
	}
}