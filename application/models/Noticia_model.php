<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model { 

	public function __construct() {
	    parent::__construct();
	    $this->load->helper('form');
	    $this->load->helper('url');
	}

	public function getNoticias($valor) {
		$query = $this->db->query("SELECT * FROM noticias WHERE titulo LIKE '%".$valor."%'");
		return $query->result_array();
	}

	public function getById($id) {
		$query = $this->db->query("SELECT * FROM noticias WHERE id = ".$id);
		return $query->result_array();
	}
	
}