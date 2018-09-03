<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Produto_model');
		
	}

	//----------------------------------------------------------------------------------

	public function index(){
		/*$dados=[
			'categorias'=>$this->Categoria_model->listar()
		];*/
$dados=['formerror'=>FALSE];
		$this->load->view('Produto',$dados);
	}
	
	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation','email'));
		
		$this->form_validation->set_rules('nome', 			   'Nome', 				'trim|required');
		$this->form_validation->set_rules('unidadeMedida',     'Unidade Medida',     'trim|required');
		
		$this->form_validation->set_rules('tipo',         'Tipo',          'trim|required');
		$this->form_validation->set_rules('epoca',         'Epoca',          'trim|required');

		if($this->form_validation->run()== FALSE){
			$dados['formerror'] = validation_errors();
		}else{
			$dados['formerror'] = 'Validação OK';
			$this->Produto_model->cadastrar();
		}

		$this->load->view('produto', $dados);
	}

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	
	
}