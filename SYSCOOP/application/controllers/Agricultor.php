<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agricultor extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Agricultor_model');
		$this->load->model('Produto_model');
		$this->load->model('Cooperativa_model');
		$this->load->library('Curl');

	}

	//----------------------------------------------------------------------------------

	public function novo()
	{
		$dados=[
			
			'produtos'=> $this->Produto_model->listar(),
			'cooperativas'=> $this->Cooperativa_model->listar()
			
		];
		$this->load->view('Agricultor', $dados);
		
	}


	//----------------------------------------------------------------------------------

	public function index(){
		$dados=[
			'agricultores'=> $this->Agricultor_model->listar()
		];
		$this->load->view('AgricultoresLista', $dados);
	}
	
	//----------------------------------------------------------------------------------

	public function alterar(){

	}

	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation','email'));
		$this->form_validation->set_rules('nome','Nome','trim|required');
		$this->form_validation->set_rules('cpf','CPF','trim|required');
		$this->form_validation->set_rules('telefone','Telefone','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('uf','Uf','trim|required');
		$this->form_validation->set_rules('cep','CEP','trim|required');
		$this->form_validation->set_rules('cidade','Cidade','trim|required');
		$this->form_validation->set_rules('endereco','Endereço','trim|required');
		$this->form_validation->set_rules('cooperativa','cooperativa','trim');
		$this->form_validation->set_rules('produtos','Produtos','trim');
		$this->form_validation->set_rules('dapNumero','Numero da DAP','trim');
		$this->form_validation->set_rules('dapValidade','Validade da DAP','trim');

		if($this->form_validation->run()== FALSE):

			$dados['formerror'] = validation_errors();

		else:
			$dados['formerror'] = 'Validação OK';
			
			$this->Agricultor_model->cadastrar();
		endif;
		
		$dados['produtos'] = $this->Produto_model->listar();
		$this->load->view('Agricultor', $dados);

	}

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	//----------------------------------------------------------------------------------
	
}
