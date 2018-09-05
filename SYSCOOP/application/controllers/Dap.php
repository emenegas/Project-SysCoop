<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dap extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Dap_model');
		$this->load->model('Agricultor_model');
		$this->load->model('Cooperativa_model');

	}

	//----------------------------------------------------------------------------------

	public function index()
	{
		$dados=[
			'agricultores'=>$this->Agricultor_model->listar(),
			'cooperativas'=>$this->Cooperativa_model->listar()
		];
		$this->load->view('Dap',$dados);
				
	}

	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('numero','Numero','trim|required');
		$this->form_validation->set_rules('dataExpiracao','Data de Expiração','trim|required');
		$this->form_validation->set_rules('tipoDoc','','trim|required');
		$this->form_validation->set_rules('docCPF','docCPF','trim');
		$this->form_validation->set_rules('docCNPJ','docCNPJ','trim');

	
		if($this->form_validation->run()== FALSE):

			$dados['formerror'] = validation_errors();

		else:
			$dados['formerror'] = 'Validação OK';
			$this->Dap_model->cadastrar();
		endif;
			$this->load->view('Dap', $dados);

	}

	//----------------------------------------------------------------------------------

	
}
