<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Relatorio extends MY_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Relatorio_model');
	}

	//----------------------------------------------------------------------------------

	public function index(){
		$dados=[
			
			'cooperativas'=> $this->Relatorio_model->listarCooperativa(),
			'produtos'=> $this->Relatorio_model->listarProduto(),
			'entidadesExecutoras'=> $this->Relatorio_model->listarEntidade(),
			'agricultores'=> $this->Relatorio_model->listarAgricultor()

			
		];
		$this->load->view('Relatorio', $dados);
	}

}