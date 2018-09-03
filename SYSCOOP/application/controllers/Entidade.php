<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entidade extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Entidade_model');
	}

	//----------------------------------------------------------------------------------

	public function index(){
		$this->load->view('Entidade');
	}
	
	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation','email'));
		
		$this->form_validation->set_rules('nomeFantasia', 'Nome Fantasia', 'trim|required');
		$this->form_validation->set_rules('email',        'Email',         'trim|required|valid_email');
		$this->form_validation->set_rules('cnpj',         'CNPJ',          'trim|required');
		$this->form_validation->set_rules('telefone',     'Telefone',      'trim|required');
		$this->form_validation->set_rules('representante','representante', 'trim|required');
		$this->form_validation->set_rules('cpfRepresentante',          'CPF Representante',           'trim|required');
		$this->form_validation->set_rules('cep',          'cep',           'trim|required');
		$this->form_validation->set_rules('uf',           'UF',            'trim|required');
		$this->form_validation->set_rules('cidade',          'cidade',           'trim|required');
		$this->form_validation->set_rules('endereco',     'Endereço',      'trim|required');
		
		if($this->form_validation->run()== FALSE){
			$dados['formerror'] = validation_errors();
		}else{
			$dados['formerror'] = 'Validação OK';
			$this->Entidade_model->cadastrar();
		}

		$this->load->view('Entidade', $dados);
	}

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	
	
}
