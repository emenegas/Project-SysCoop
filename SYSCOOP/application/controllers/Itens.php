<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itens extends CI_Controller {

	function __construct(){
		parent:: __construct();
		
		$this->load->helper('form');
		$this->load->model('itens_model');
		$this->load->model('projetopnae_model');
		$this->load->model('produto_model');
		$this->load->model('agricultor_model');

	}

	//----------------------------------------------------------------------------------

	public function index($idProjeto){
		$projeto = $this->projetopnae_model->getById($idProjeto);

		if(!$projeto)
			show_404();

		$dados=[
			'itens_do_projeto' => $this->itens_model->listar(),
			'itens' => $this->itens_model->getByProjeto($idProjeto),
			'produtos'=> $this->produto_model->listar(),
			'agricultores' => $this->agricultor_model->listar(),
			'idProjeto' => $idProjeto
		];
		$this->load->view('Itens', $dados);

	}
	
	//----------------------------------------------------------------------------------

	public function adicionar($idProjeto){
		$projeto = $this->projetopnae_model->getById($idProjeto);

		if(!$projeto)
			show_404();

		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('produto',     'Cod Produto',           'trim|required|is_natural');
		$this->form_validation->set_rules('agricultor',     'Cod Agricultor',      'trim|required|is_natural');
		$this->form_validation->set_rules('quantidade',     'Quantidade',      'trim|required');
		$this->form_validation->set_rules('precoUnidade',     'Preço Unitário',      'trim|required');
		$this->form_validation->set_rules('totalProjeto',     'Total do Projeto',      'trim');
		
		if($this->form_validation->run()== FALSE){
			$dados['formerror'] = validation_errors();
			
		}else{
			$this->itens_model->Cadastrar($idProjeto);
			redirect('/projetopnae/'.$idProjeto. '/itens');
			
		}
		
	}

	//----------------------------------------------------------------------------------

	

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	//----------------------------------------------------------------------------------

	public function produtos($projetopnae){
		
	}

	
	
}
