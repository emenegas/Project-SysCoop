<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Relatorio extends MY_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Relatorio_model');
		$this->load->model('Agricultor_model');
		$this->load->model('Produto_model');
		$this->load->model('Cooperativa_model');
	}


	//--------------------------Por Produto----------------------------------

	public function indexPorProd(){
		$dados=[
			
			'produtos' => $this->Produto_model->listar()

		];
		$this->load->view('RelatorioPorProd', $dados);
	}

	public function PorProduto($id)
	{
		$agricultores = $this->Relatorio_model->getByProduto($id);
		header('Content-type: text/json');
		echo json_encode($agricultores);

	}

	//--------------------------Agricultor por Cooperativa----------------------------------

	public function indexPorCooperativa(){
		$dados=[
			
			'cooperativas' => $this->Cooperativa_model->listar()

		];

		$this->load->view('RelatorioPorCooperativa', $dados);
	}

	public function PorCooperativa($id)
	{

		$agricultores = $this->Relatorio_model->getByCoopAgri($id);
		header('Content-type: text/json');
		echo json_encode($agricultores);

	}

	//----------------------------------------------------------------------------------

	public function indexPorDap(){
		$dados=[


		];
		$this->load->view('RelatorioPorDap', $dados);
	}

	public function PorDap()
	{
		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('valor1','Valor Inicial',		'trim|required|is_numeric');
		$this->form_validation->set_rules('valor2','Valor Final',	'trim|required|is_numeric');

		if($this->form_validation->run()== FALSE){

			$dados['formerror'] = validation_errors();

			exit($this->load->view('RelatorioPorDap', $dados, TRUE));

		}else{

			$valor1 = $this->input->post('valor1');
			$valor2 = $this->input->post('valor2');

			$agricultores = $this->Relatorio_model->getByDap($valor1, $valor2);
			header('Content-type: text/json');
			echo json_encode($agricultores);
		}
	}

	//--------------------------funcionários por Cooperativa----------------------------------

	public function indexFuncPorCoop(){
		$dados=[
			
			'cooperativas' => $this->Cooperativa_model->listar()

		];

		$this->load->view('RelatorioFuncPorCoop', $dados);
	}

	public function FuncPorCoop($id)
	{

		$funcionario = $this->Relatorio_model->getByFuncCoop($id);
		header('Content-type: text/json');
		echo json_encode($funcionario);

	}
}