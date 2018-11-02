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

		$cooperativa = $this->Cooperativa_model->getById($id);
		$cooperativas = $this->Cooperativa_model->listar();
		$funcionarios = $this->Funcionario_model->listar();
		if(!$cooperativa){
			show_404();
		}
		$data = [];
		$data['funcionarios'] = $funcionarios;
		$data['cooperativa'] = $cooperativa;
		$data['cooperativas'] = $cooperativas;
		$this->load->view('CooperativaEdita', $data);
	}
	public function alterar($id){
		$data = [];
		$cooperativa = $this->Cooperativa_model->getById($id);
		$cooperativas = $this->Cooperativa_model->listar();
		$funcionarios = $this->Funcionario_model->listar();

		if(!$cooperativa){
			show_404();
		}
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$validations = array(
			array(
				'field' => 'nomeFantasia',
				'label' => 'Nome Fantasia',
				'rules' => 'required|min_length[4]|max_length[200]'
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
				'rules' => 'min_length[1]|max_length[45]'
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
				'field' => 'uf',
				'label' => 'Uf',
				'rules' => 'required|min_length[1]|max_length[45]'
			),
			array(
				'field' => 'endereco',
				'label' => 'Endereço',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'cep',
				'label' => 'cep',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'cidade',
				'label' => 'Cidade',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'banco',
				'label' => 'banco',
				'rules' => 'required|min_length[1]|max_length[45]'
			),
			array(
				'field' => 'agencia',
				'label' => 'agencia',
				'rules' => 'required|min_length[1]|max_length[45]'
			),
			array(
				'field' => 'numeroContaCorrente',
				'label' => 'numeroContaCorrente',
				'rules' => 'required|min_length[1]|max_length[45]'
			),
			array(
				'field' => 'caracteristicasCoop',
				'label' => 'caracteristicasCoop',
				'rules' => 'min_length[1]|max_length[40000]'
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
			$data['cooperativas'] = $cooperativas;
			$data['funcionarios'] = $funcionarios;
			$data['formerror'] = validation_errors();
			$this->load->view('CooperativaEdita', $data);
		} else {
			
			$data['nomeFantasia'] = $this->input->post('nomeFantasia');
			$data['responsavel'] = $this->input->post('responsavel');
			$data['email'] = $this->input->post('email');
			$data['telefone'] = $this->input->post('telefone');
			$data['cooperativa'] = $this->input->post('cooperativa');
			$data['dapNumero'] = $this->input->post('dapNumero');
			$data['dapValidade'] = $this->input->post('dapValidade');
			$data['endereco'] = $this->input->post('endereco');
			$data['uf'] = $this->input->post('uf');
			$data['cidade'] = $this->input->post('cidade');
			$data['cep'] = $this->input->post('cep');
			$data['banco'] = $this->input->post('banco');
			$data['agencia'] = $this->input->post('agencia');
			$data['caracteristicasCoop'] = $this->input->post('caracteristicasCoop');
			$data['numeroContaCorrente'] = $this->input->post('numeroContaCorrente');
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
		
		$this->form_validation->set_rules('cnpj',         'CNPJ',         		 'trim|required');
		$this->form_validation->set_rules('nomeFantasia', 'Nome Fantasia', 		'trim|required');
		$this->form_validation->set_rules('responsavel',  'Responsável Legal',   'trim|required');
		$this->form_validation->set_rules('email',        'Email',        		 'trim|required|valid_email');
		$this->form_validation->set_rules('telefone',     'Telefone',      		'trim|required');
		$this->form_validation->set_rules('cooperativa',  'Cooperativa',   		'trim');
		$this->form_validation->set_rules('dapNumero',	  'Numero da DAP',  	'trim|required');
		$this->form_validation->set_rules('dapValidade',  'Validade da DAP',	'trim|required');
		$this->form_validation->set_rules('banco',  		  'banco',   				'trim');
		$this->form_validation->set_rules('agencia',  		  'agencia',   				'trim');
		$this->form_validation->set_rules('numeroContaCorrente',   'numeroContaCorrente',		'trim');
		$this->form_validation->set_rules('endereco',     'Endereço',      		'trim|required');
		$this->form_validation->set_rules('uf',  		  'UF',   				'trim|required');
		$this->form_validation->set_rules('cidade',  		  'cidade',   		'trim|required');
		$this->form_validation->set_rules('caracteristicasCoop',  		  'caracteristicasCoop',   		'trim');
		$this->form_validation->set_rules('cep',  		  'cep',   				'trim|required');


		if($this->form_validation->run()== FALSE){
			$dados['formerror'] = validation_errors();
			$dados['cooperativas'] = $this->Cooperativa_model->listar();
			$this->load->view('Cooperativa', $dados);
		}else{
			$dados['formerror'] = 'Validação OK';
			$this->Cooperativa_model->cadastrar();
			redirect('cooperativa');
		}	
	}

	//----------------------------------------------------------------------------------

	function callback_cnpj_existe($cnpj){

		$this->db->select('cnpj');
		$this->db->where('cnpj', $cnpj);
		$retorno = $this->db->get('cooperativas')->num_rows();

		if($retorno > 0 ){
			return FALSE;
		}
	}

	//----------------------------------------------------------------------------------

	 function valid_cnpj($cnpj)
    {
        if (strlen($str) <> 18) return FALSE;
        $soma1 = ($str[0] * 5) +
                ($str[1] * 4) +
                ($str[3] * 3) +
                ($str[4] * 2) +
                ($str[5] * 9) +
                ($str[7] * 8) +
                ($str[8] * 7) +
                ($str[9] * 6) +
                ($str[11] * 5) +
                ($str[12] * 4) +
                ($str[13] * 3) +
                ($str[14] * 2);
        $resto = $soma1 % 11;
        $digito1 = $resto < 2 ? 0 : 11 - $resto;
        $soma2 = ($str[0] * 6) +
                ($str[1] * 5) +
                ($str[3] * 4) +
                ($str[4] * 3) +
                ($str[5] * 2) +
                ($str[7] * 9) +
                ($str[8] * 8) +
                ($str[9] * 7) +
                ($str[11] * 6) +
                ($str[12] * 5) +
                ($str[13] * 4) +
                ($str[14] * 3) +
                ($str[16] * 2);
        $resto = $soma2 % 11;
        $digito2 = $resto < 2 ? 0 : 11 - $resto;
        return (($str[16] == $digito1) && ($str[17] == $digito2));
    }
 
}
