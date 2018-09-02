<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Relatorio extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Relatorio_model');
	}

	//----------------------------------------------------------------------------------

	public function index(){
		$dados=[
			
			'relatorio'=> $this->Relatorio_model->listar(),
			
		];
		$this->load->view('relatorio', $dados);
	}
	public function listarProdutos(){
		$dados=[
			
			'produto'=> $this->Relatorio_model->listarProdutos(),
			
		];
		$this->load->view('relatorio', $dados);
	}
}