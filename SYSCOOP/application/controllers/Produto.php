<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Produto_model');
		
	}

	//----------------------------------------------------------------------------------

	public function novo(){
		
		$this->load->view('Produto');
	}

	//----------------------------------------------------------------------------------

	public function index(){
		$dados=[
			'produtos'=> $this->Produto_model->listar()
		];
		$this->load->view('ProdutosLista', $dados);
	}
	//----------------------------------------------------------------------------------

	public function editar($id){
		$data = [];
		$produto = $this->Produto_model->getById($id);
		if(!$produto){
			show_404();
		}
		$data['produto'] = $produto;
		$this->load->view('ProdutosLista', $data);
	}
	public function alterar($id){
		$data = [];
		$produto = $this->Produto_model->getById($id);
		if(!$produto){
			show_404();
		}
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$validations = array(
			array(
				'field' => 'nomeFantasia',
				'label' => 'Nome Fantasia',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'telefone',
				'label' => 'Telefone',
				'rules' => 'required|min_length[4]|max_length[45]'
			),

			array(
				'field' => 'representante',
				'label' => 'Representante',
				'rules' => 'trim|required|max_length[45]'
			)
		);
		$this->form_validation->set_rules($validations);
		if ($this->form_validation->run() == FALSE) {
			$data['produto'] = $produto;
			$data['formerror'] = validation_errors();
			$this->load->view('ProdutoEdita', $data);
		} else {
			
			$data['nomeFantasia'] = $this->input->post('nomeFantasia');
			$data['cnpj'] = $this->input->post('cep');
			$data['telefone'] = $this->input->post('telefone');
			$data['representante'] = $this->input->post('representante');
			

			if ($this->Produto_model->alterar($data)) {
				redirect('produto');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
	}


	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation'));
		
		$this->form_validation->set_rules('nome', 			   'Nome', 				'trim|required');
		$this->form_validation->set_rules('unidadeMedida',     'Unidade Medida',     'trim|required');
		$this->form_validation->set_rules('tipo',       	  'Tipo',          'trim|required');
		$this->form_validation->set_rules('epoca',    	     'Epoca',          'trim|required');
	

	if($this->form_validation->run()== FALSE){
		$dados['formerror'] = validation_errors();
		$this->load->view('Produto', $dados);
	}else{
		$dados['formerror'] = 'Validação OK';
		$this->Produto_model->cadastrar();
		redirect('produto');
	}

	
}

	//----------------------------------------------------------------------------------



}
