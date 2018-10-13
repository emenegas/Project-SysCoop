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
		$dados = [
			'entidades' => $this->Entidade_model->listar()
		];
		$this->load->view('EntidadesLista', $dados);
	}

	//----------------------------------------------------------------------------------

	public function novo(){
		$this->load->view('Entidade');
	}
	
	//----------------------------------------------------------------------------------

	public function editar($id){
		
		$data = [];
		$entidade = $this->Entidade_model->getById($id);
		if(!$entidade){
			show_404();
		}
		$data['entidade'] = $entidade;
		$this->load->view('EntidadeEdita', $data);
	}
	public function alterar($id){
		
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
			$data['entidade'] = $entidade;
			$data['formerror'] = validation_errors();
			$this->load->view('EntidadeEdita', $data);
		} else {
			
			$data['nomeFantasia'] = $this->input->post('nomeFantasia');
			$data['telefone'] = $this->input->post('telefone');
			$data['representante'] = $this->input->post('representante');
			$data['cpfRepresentante'] = $this->input->post('cpfRepresentante');
			$data['cep'] = $this->input->post('cep');
			$data['uf'] = $this->input->post('uf');
			$data['cidade'] = $this->input->post('cidade');
			$data['endereco'] = $this->input->post('endereco');
			$data['status'] = $this->input->post('status');

			if ($this->Entidade_model->alterar($id,$data)) {
				redirect('entidade');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
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
			$this->load->view('Entidade', $dados);
		}else{
			$dados['formerror'] = 'Validação OK';
			$this->Entidade_model->cadastrar();
			redirect('entidade');
		}

		
	}

	//----------------------------------------------------------------------------------



	
	
}
