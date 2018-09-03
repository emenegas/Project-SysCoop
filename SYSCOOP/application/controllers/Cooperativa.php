<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperativa extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Cooperativa_model');
	}

	//----------------------------------------------------------------------------------

	public function index(){
		$dados=[
			'cooperativas'=>$this->Cooperativa_model->listar()
		];
		$this->load->view('Cooperativa',$dados);
	}
	
	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation','email'));
		
		$this->form_validation->set_rules('nomeFantasia', 'Nome Fantasia', 'trim|required');
		$this->form_validation->set_rules('endereco',     'Endereço',      'trim|required');
		$this->form_validation->set_rules('presidente',   'Presidente',    'trim|required');
		$this->form_validation->set_rules('responsavel',  'Responsável',   'trim|required');
		$this->form_validation->set_rules('email',        'Email',         'trim|required|valid_email');
		$this->form_validation->set_rules('cnpj',         'CNPJ',          'trim|required');
		$this->form_validation->set_rules('telefone',     'Telefone',      'trim|required');
		$this->form_validation->set_rules('cooperativa',  'Cooperativa',   'trim');
		$this->form_validation->set_rules('dapJuridica',  'Dap Juridica',  'trim');
		$this->form_validation->set_rules('uf',  'UF',  'trim');

			if($this->form_validation->run()== FALSE){
				$dados['formerror'] = validation_errors();
			}else{
				$dados['formerror'] = 'Validação OK';
				$this->Cooperativa_model->cadastrar();
		}

		$this->load->view('Cooperativa', $dados);
	}

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	
	
}
