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

	public function editar($id){

		$data['dados_pessoa'] = $this->Agricultor_model->editar($id);

		$this->load->view('AgricultorEdita', $data);
	}


	public function alterar(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$validations = array(
			array(
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'telefone',
				'label' => 'Telefone',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'email',
				'label' => 'E-mail',
				'rules' => 'trim|required|valid_email|max_length[45]'
			),
			array(
				'field' => 'uf',
				'label' => 'Uf',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'cep',
				'label' => 'CEP',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'cidade',
				'label' => 'Cidade',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'endereco',
				'label' => 'Endereço',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'dapNumero',
				'label' => 'DAP Numero',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'dapValidade',
				'label' => 'DAP Validade',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'status',
				'label' => 'Status',
				'rules' => 'required|min_length[4]|max_length[45]'
			)
		);
		$this->form_validation->set_rules($validations);
		if ($this->form_validation->run() == FALSE) {
			$this->editar($this->input->post('id'));
		} else {
			$data['id'] = $this->input->post('id');
			$data['nome'] = $this->input->post('nome');
			$data['telefone'] = $this->input->post('telefone');
			$data['email'] = $this->input->post('email');
			$data['uf'] = $this->input->post('uf');
			$data['cep'] = $this->input->post('cep');
			$data['cidade'] = $this->input->post('cidade');
			$data['endereco'] = $this->input->post('endereco');
			$data['dapNumero'] = $this->input->post('dapNumero');
			$data['dapValidade'] = $this->input->post('dapValidade');
			$data['status'] = $this->input->post('status');

			
			if ($this->Agricultor_model->alterar($data)) {
				redirect('Agricultor');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
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

	public function removerLista(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	//----------------------------------------------------------------------------------
	
}
