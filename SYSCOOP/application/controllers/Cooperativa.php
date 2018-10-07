<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperativa extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Cooperativa_model');
	}

	//----------------------------------------------------------------------------------

	public function novo(){
		$dados=[
			'cooperativas'=>$this->Cooperativa_model->listar()
		];
		$this->load->view('Cooperativa',$dados);
	}
	
	//----------------------------------------------------------------------------------

	public function index(){

		$dados=[
			
			'cooperativas' => $this->Cooperativa_model->listar()
		];
		$this->load->view('CooperativasLista', $dados);
	}

//----------------------------------------------------------------------------------

	public function editar($id){
		
		$data['dados_cooperativa'] = $this->Cooperativa_model->editar($id);

		$this->load->view('CooperativaEdita', $data);
	}
	public function alterar(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$validations = array(
			array(
				'field' => 'nomeFantasia',
				'label' => 'Nome Fantasia',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'endereco',
				'label' => 'Endereço',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'presidente',
				'label' => 'Presidente',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'responsavel',
				'label' => 'Responsável',
				'rules' => 'required|min_length[4]|max_length[45]'
			),

			array(
				'field' => 'email',
				'label' => 'E-mail',
				'rules' => 'trim|required|valid_email|max_length[45]'
			),
			array(
				'field' => 'telefone',
				'label' => 'Telefone',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'cooperativa',
				'label' => 'Cooperativa',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'uf',
				'label' => 'Uf',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'dapValidade',
				'label' => 'DAP Validade',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'dapNumero',
				'label' => 'DAP Numero',
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
			$data['nomeFantasia'] = $this->input->post('nome');
			$data['endereco'] = $this->input->post('cpf');
			$data['presidente'] = $this->input->post('telefone');
			$data['responsavel'] = $this->input->post('email');
			$data['email'] = $this->input->post('uf');
			// $data['cnpj'] = $this->input->post('cep');
			$data['telefone'] = $this->input->post('cidade');
			$data['cooperativa'] = $this->input->post('endereco');
			$data['uf'] = $this->input->post('dapNumero');
			$data['dapNumero'] = $this->input->post('dapValidade');
			$data['dapValidade'] = $this->input->post('dapValidade');
			$data['status'] = $this->input->post('status');

			if ($this->Cooperativa_model->alterar($data)) {
				redirect('Cooperativa');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
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
		$this->form_validation->set_rules('uf',  'UF',  'trim');
		$this->form_validation->set_rules('dapNumero','Numero da DAP','trim');
		$this->form_validation->set_rules('dapValidade','Validade da DAP','trim');

		if($this->form_validation->run()== FALSE){
			$dados['formerror'] = validation_errors();
		}else{
			$dados['formerror'] = 'Validação OK';
			$this->Cooperativa_model->cadastrar();
		}

		$this->load->view('Cooperativa', $dados);
	}

	//----------------------------------------------------------------------------------

	
	
}
