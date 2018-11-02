<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends MY_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->library('curl');
		$this->load->model('Cooperativa_model');
		$this->load->model('Funcionario_model');
	}

//----------------------------------------------------------------------------------

	public function backup(){
	// Carrega a classe DB utility 
		$this->load->dbutil();

	// Executa o backup do banco de dados armazenado-o em uma variável
		$backup = $this->dbutil->backup();

	// carrega o helper File e cria um arquivo com o conteúdo do backup
		$this->load->helper('file');
		write_file('/path/backup.gz', $backup);

	// Carrega o helper Download e força o download do arquivo que foi criado com 'write_file'
		$this->load->helper('download');
		force_download('backup.gz', $backup);

	}
//----------------------------------------------------------------------------------
	

	public function ajuda(){
		$dados=[

		];
		$this->load->view('Ajuda', $dados);
	}
	//----------------------------------------------------------------------------------


	public function index(){
		$dados=[
			'funcionarios'=> $this->Funcionario_model->listar()
		];
		$this->load->view('FuncionarioLista', $dados);
	}

	//----------------------------------------------------------------------------------

	public function novo(){

		$dados=[
			'cooperativas'=> $this->Cooperativa_model->listar()
		];
		$this->load->view('Funcionario', $dados);
		
	}

	//----------------------------------------------------------------------------------

	public function editar($id){
		$data = [];
		$funcionario = $this->Funcionario_model->getById($id);
		$cooperativas = $this->Cooperativa_model->listar();

		if(!$funcionario){
			show_404();
		}
		$data['funcionario'] = $funcionario;
		$data['cooperativas'] = $cooperativas;
		$this->load->view('FuncionarioEdita', $data);
	}
	public function alterar($id){
		
		$funcionario = $this->Funcionario_model->getById($id);
		if(!$funcionario){
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
				'field' => 'cep',
				'label' => 'Cep',
				'rules' => 'trim|required|max_length[45]'
			),
			array(
				'field' => 'uf',
				'label' => 'Uf',
				'rules' => 'required|min_length[2]|max_length[45]'
			),
			array(
				'field' => 'cidade',
				'label' => 'Cidade',
				'rules' => 'required|min_length[2]|max_length[45]'
			),
			array(
				'field' => 'endereco',
				'label' => 'Endereço',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => ''
			),
			array(
				'field' => 'cooperativa',
				'label' => 'Cooperativa',
				'rules' => 'required|min_length[1]|max_length[45]'
			),
			array(
				'field' => 'status',
				'label' => 'Status',
				'rules' => 'required|min_length[4]|max_length[45]'
			)
		);
		$this->form_validation->set_rules($validations);
		if ($this->form_validation->run() == FALSE) {
			$data['funcionario'] = $funcionario;
			$data['formerror'] = validation_errors();
			$this->load->view('FuncionarioEdita', $data);
		} else {

			$data['nome'] = $this->input->post('nome');
			$data['email'] = $this->input->post('email');
			$data['telefone'] = $this->input->post('telefone');
			$data['cep'] = $this->input->post('cep');
			$data['uf'] = $this->input->post('uf');
			$data['cidade'] = $this->input->post('cidade');
			$data['endereco'] = $this->input->post('endereco');
			$data['senha'] = $this->input->post('senha');
			$data['cooperativa'] = $this->input->post('cooperativa');
			$data['status'] = $this->input->post('status');

			if ($this->Funcionario_model->alterar($id,$data)) {
				redirect('funcionario');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
	}

	//----------------------------------------------------------------------------------

	public function cadastrar(){

		$this->load->library(array('form_validation','email'));
		$this->form_validation->set_rules('nome','Nome',				'trim|required');
		$this->form_validation->set_rules('cpf', 'CPF' , 				'trim|required');
		$this->form_validation->set_rules('email','Email',				'trim|required|valid_email');
		$this->form_validation->set_rules('telefone','Telefone',		'trim|required');
		$this->form_validation->set_rules('senha','Senha',				'trim|required');
		$this->form_validation->set_rules('cooperativa','Cooperativa',	'trim');
		$this->form_validation->set_rules('endereco','Endereço',		'trim|required');
		$this->form_validation->set_rules('cep','CEP',					'trim|required');
		$this->form_validation->set_rules('uf','Uf',					'trim|required');
		$this->form_validation->set_rules('cidade','Cidade',			'trim|required');


		if($this->form_validation->run()== FALSE):
			$dados['cooperativa'] = $this->Cooperativa_model->listar();
			$dados['formerror'] = validation_errors();
			$this->load->view('Funcionario', $dados);
		else:
			$dados['formerror'] = 'Validação OK';
			$this->Funcionario_model->cadastrar();
			redirect('funcionario');
		endif;
		

	}

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