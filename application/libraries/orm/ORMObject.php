<?php

abstract class ORMObject {
	protected $db; 
	private $table;
	
	function __construct($table) {
		$this->table = $table;
		$ci = & get_instance();
		$this->db = $ci->db;
	}

	public function saveToDatabase(){
		$data = $this->getData();
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	public static function loadFromDatabase($id, $table = null){
		$ci = get_instance();
		$ci->db->where('id', $id);
		return $ci->db->get($table)->row();
	}
	
	public function update(){
		$data = $this->getData();
		$this->db->where('id', $data['id']);
		return $this->db->update($this->table, $data);
	}
	
	public function delete(){
		$data = $this->getData();
		$this->db->where('id', $data['id']);
		return $this->db->delete($this->table);
	}
	
	protected abstract function getData();
}