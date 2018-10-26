<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperativa extends MY_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Cooperativa_model');
		$this->load->model('Funcionario_model');
	}

	//----------------------------------------------------------------------------------

	public function novo(){
		$dados=[
			'funcionarios'=>$this->Funcionario_model->listar(),
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
		$data = [];
		$cooperativa = $this->Cooperativa_model->getById($id);
		if(!$cooperativa){
			show_404();
		}
		$data['cooperativa'] = $cooperativa;
		$this->load->view('CooperativaEdita', $data);
	}
	public function alterar($id){
		$data = [];
		$cooperativa = $this->Cooperativa_model->getById($id);
		if(!$cooperativa){
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
				'field' => 'endereco',
				'label' => 'Endereço',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'responsavel',
				'label' => 'Responsável Legal',
				'rules' => 'required|min_length[1]|max_length[45]'
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
				'rules' => 'required|min_length[1]|max_length[45]'
			),
			array(
				'field' => 'uf',
				'label' => 'Uf',
				'rules' => 'required|min_length[1]|max_length[45]'
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
			$data['cooperativa'] = $cooperativa;
			$data['formerror'] = validation_errors();
			$this->load->view('CooperativaEdita', $data);
		} else {
			
			$data['nomeFantasia'] = $this->input->post('nomeFantasia');
			$data['endereco'] = $this->input->post('endereco');
			$data['responsavel'] = $this->input->post('responsavel');
			$data['email'] = $this->input->post('email');
			$data['telefone'] = $this->input->post('telefone');
			$data['cooperativa'] = $this->input->post('cooperativa');
			$data['uf'] = $this->input->post('uf');
			$data['dapNumero'] = $this->input->post('dapNumero');
			$data['dapValidade'] = $this->input->post('dapValidade');
			// $data['dapLimite'] = $this->input->post('dapLimite');
			$data['status'] = $this->input->post('status');

			if ($this->Cooperativa_model->alterar($id,$data)) {
				redirect('cooperativa');
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
		$this->form_validation->set_rules('responsavel',  'Responsável Legal',   'trim|required');
		$this->form_validation->set_rules('email',        'Email',         'trim|required|valid_email');
		$this->form_validation->set_rules('cnpj',         'CNPJ',          'trim|required');
		$this->form_validation->set_rules('telefone',     'Telefone',      'trim|required');
		$this->form_validation->set_rules('cooperativa',  'Cooperativa',   'trim');
		$this->form_validation->set_rules('uf',  'UF',  'trim');
		$this->form_validation->set_rules('dapNumero','Numero da DAP','trim');
		$this->form_validation->set_rules('dapValidade','Validade da DAP','trim');

		if($this->form_validation->run()== FALSE){
			$dados['formerror'] = validation_errors();
			$this->load->view('Cooperativa', $dados);
		}else{
			$dados['formerror'] = 'Validação OK';
			$this->Cooperativa_model->cadastrar();
			redirect('cooperativa');
		}	
	}
}
