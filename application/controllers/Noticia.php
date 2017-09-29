<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->helper('url');
	}
	
	public function index()
	{
		$this->template->load('temp', 'home');
	}

	public function search($valor=null) {
		if ($valor == null) {
			$data['msg'] = "Sem resultados";
			$this->load->view('busca', $data);
		} else {
			$this->load->model('noticia_model');
			$noticias = $this->noticia_model->getNoticias($valor);
			$data['noticias'] = $noticias;
			$this->load->view('busca', $data);
		}
	}

	public function show($id=null) {
		$this->load->model('noticia_model');
		$noticia = $this->noticia_model->getById($id);
		if ($noticia == null || empty($noticia) || $id = null) {
			$data['msg'] = "Sem resultados";
			$this->load->view('content', $data);
		} else {
			$data['noticia'] = $noticia[0];
			$this->load->view('content', $data);
		}
	}

}
