<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library('curl');
		$this->load->model('cooperativa_model');
		$this->load->model('funcionario_model');

	}

	//----------------------------------------------------------------------------------

	public function index()
	{
		$dados=[
			
			'cooperativas'=> $this->cooperativa_model->listar()

		];
		$this->load->view('funcionario', $dados);
		
	}

	//----------------------------------------------------------------------------------

	public function cadastrar(){

		if($this->form_validation->set_rules('cpf')){
			if($this->funcionario->valid_cpf('cpf')==TRUE){

			
		}
		$this->load->library(array('form_validation','email'));
		$this->form_validation->set_rules('nome','Nome','trim|required');
		

		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('telefone','Telefone','trim|required');
		$this->form_validation->set_rules('cep','CEP','trim|required');
		$this->form_validation->set_rules('uf','Uf','trim|required');
		$this->form_validation->set_rules('cidade','Cidade','trim|required');
		$this->form_validation->set_rules('endereco','Endereço','trim|required');
		$this->form_validation->set_rules('senha','Senha','trim|required');
		$this->form_validation->set_rules('cooperativa','Cooperativa','trim|required');

		
		if($this->form_validation->run()== FALSE):

			$dados['formerror'] = validation_errors();

		else:
			$dados['formerror'] = 'Validação OK';
			$this->funcionario_model->cadastrar();
		endif;
		$this->load->view('funcionario', $dados);

	}
	function valid_cpf($cpf)
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