<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agricultor extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Agricultor_model');
		$this->load->model('produto_model');
		$this->load->model('cooperativa_model');
		$this->load->library('curl');

	}

	//----------------------------------------------------------------------------------

	public function index()
	{
		$dados=[
			
			'produtos'=> $this->produto_model->listar(),
			'cooperativas'=> $this->cooperativa_model->listar()
			
		];
		$this->load->view('agricultor', $dados);
		
	}

	//----------------------------------------------------------------------------------

	public function cadastrar(){
		/*print_r($this->input->post());
		exit;*/

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
		$this->form_validation->set_rules('produtos','Produtos','trim|');

		if($this->form_validation->run()== FALSE):

			$dados['formerror'] = validation_errors();

		else:
			$dados['formerror'] = 'Validação OK';
			
			$this->Agricultor_model->cadastrar();
		endif;
		
		$dados['produtos'] = $this->produto_model->listar();
		$this->load->view('agricultor', $dados);

	}

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	//----------------------------------------------------------------------------------

	/*public function consulta(){
		$cep = this->input->post->post('cep');
		echo $this->curl->consulta($cep);
	}*/
	
}
