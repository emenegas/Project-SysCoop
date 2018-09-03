<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itens extends CI_Controller {

	function __construct(){
		parent:: __construct();
		
		$this->load->helper('form');
		
		$this->load->model('projetopnae_model');
		$this->load->model('produto_model');
		$this->load->model('agricultor_model');

	}

	//----------------------------------------------------------------------------------

	public function index($idProjeto){
		/*echo $idProjeto;
		exit;*/
		$dados=[
			
			'produtos'=> $this->produtos_model->listar(),
			'agricultores' => $this->agricultor_model->listar()
		];
		$this->load->view('itens', $dados);
	}
	
	//----------------------------------------------------------------------------------

	public function adicionar($idProjeto){
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('produto',     'Cod Produto',           'trim|required|is_natural');
		$this->form_validation->set_rules('agricultor',     'Cod Agricultor',      'trim|required|is_natural');
		
		$this->form_validation->set_rules('quantidade',     'Quantidade',      'trim|required');
		$this->form_validation->set_rules('precoUnidade',     'Preço Unitário',      'trim|required');
		$this->form_validation->set_rules('totalProjeto',     'Total do Projeto',      'trim|required');
		
		$dados = ['formerror' => ''];	
		$dados['form'] = $this->form_validation();

		$this->load->view('projetopnae/itens', $dados);
	}

	//----------------------------------------------------------------------------------

	public function cadastrarEtapa2($idProjeto){


		if($this->form_validation->run()== FALSE){
			$dados['formerror'] .= validation_errors();
		}else{
			$produto = $this->produto_model->getById(set_value('produto'));
			if(!$produto){
				$dados['formerror'] .= '<p>Este produto não existe</p>';
			}
			$agricultor = $this->agricultor_model->getById(set_value('agricultor'));
			if(!$agricultor){
				$dados['formerror'] .= '<p>Este agricultor não existe</p>';
			}

			if(empty($dados['formerror']) ){
				$id = $this->itens_model->cadastrar($produto, $agricultor);
				if($id){
					redirect('projetopnae/'.$id.'/itens');
				}
				$dados['formerror'] .= '<p>Não foi possivel adicionar este item!</p>';
			}
		}

		$this->load->view('projetopnae/itens', $dados);
	}

	//----------------------------------------------------------------------------------

	public function remover(){
		echo __CLASS__, ': ', __FUNCTION__;

	}

	//----------------------------------------------------------------------------------

	public function produtos($projetopnae){
		
	}

	
	
}
