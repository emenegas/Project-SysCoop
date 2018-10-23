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
		$data = [];
		$agricultor = $this->Agricultor_model->getById($id);
		if(!$agricultor){
			show_404();
		}
		$data['agricultor'] = $agricultor;
		$this->load->view('AgricultorEdita', $data);
	}


	public function alterar($id){
		$data = [];
		$agricultor = $this->Agricultor_model->getById($id);
		if(!$agricultor){
			show_404();
		}
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
				'rules' => 'required|min_length[2]|max_length[45]'
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
				'rules' => 'min_length[4]|max_length[45]'
			),
			array(
				'field' => 'dapValidade',
				'label' => 'DAP Validade',
				'rules' => 'min_length[4]|max_length[45]'
			),
			array(
				'field' => 'status',
				'label' => 'Status',
				'rules' => 'required|min_length[4]|max_length[45]'
			)
		);
		$this->form_validation->set_rules($validations);
		if ($this->form_validation->run() == FALSE) {
			$data['agricultor'] = $agricultor;
			$data['formerror'] = validation_errors();
			$this->load->view('AgricultorEdita', $data);
		} else {
			
			$data['nome'] = $this->input->post('nome');
			$data['telefone'] = $this->input->post('telefone');
			$data['email'] = $this->input->post('email');
			$data['uf'] = $this->input->post('uf');
			$data['cep'] = $this->input->post('cep');
			$data['cidade'] = $this->input->post('cidade');
			$data['endereco'] = $this->input->post('endereco');
			$data['dapNumero'] = $this->input->post('dapNumero');
			$data['dapValidade'] = $this->input->post('dapValidade');
			// $data['dapLimite'] = $this->input->post('dapLimite');
			$data['status'] = $this->input->post('status');

			
			if ($this->Agricultor_model->alterar($id,$data)) {
				redirect('agricultor');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
	}

	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation','email'));
		$this->form_validation->set_rules('nome','Nome','trim|required');
		$this->form_validation->set_rules('cpf','CPF','trim|required|callback_valid_cpf');
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
			$dados['produtos'] = $this->Produto_model->listar();
			$this->load->view('Agricultor', $dados);

		else:
			$dados['formerror'] = 'Validação OK';
			
			$this->Agricultor_model->cadastrar();
			redirect('agricultor');
		endif;

	}

	//----------------------------------------------------------------------------------
	
	function callback_valid_cpf($cpf)
	{
		$CI =& get_instance();

		$CI->form_validation->set_message('valid_cpf', 'O %s informado não é válido.');
		$cpf = preg_replace('/[^0-9]/','',$cpf);
		if(strlen($cpf) != 11 || preg_match('/^([0-9])\1+$/', $cpf))
		{
			return false;
		}
        // 9 primeiros digitos do cpf
		$digit = substr($cpf, 0, 9);
        // calculo dos 2 digitos verificadores
		for($j=10; $j <= 11; $j++)
		{
			$sum = 0;
			for($i=0; $i< $j-1; $i++)
			{
				$sum += ($j-$i) * ((int) $digit[$i]);
			}
			$summod11 = $sum % 11;
			$digit[$j-1] = $summod11 < 2 ? 0 : 11 - $summod11;
		}

		return $digit[9] == ((int)$cpf[9]) && $digit[10] == ((int)$cpf[10]);
	}
	
}
