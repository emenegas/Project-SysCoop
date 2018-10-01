<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetopnae extends CI_Controller {

	function __construct(){
		
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Projetopnae_model');
		$this->load->model('Cooperativa_model');
		$this->load->model('Entidade_model');
		$this->load->model('Itens_model');


	}

	//--------------------Listagem Total-----------------------------------------------

	public function index(){
		$dados=[
			'projetos'=> $this->Projetopnae_model->listar()
		];
		$this->load->view('ProjetosLista', $dados);
	}

	//----------------------------------------------------------------------------------

	public function info($idProjeto){
		$dados=[
			'idProjeto' => $idProjeto,
			'projetos'=> $this->Projetopnae_model->getById($idProjeto),
			'itens_do_projeto' => $this->Itens_model->getByProjeto($idProjeto)
		];
		$this->load->view('ProjetoPnaeInfo', $dados);
	}

	//----------------------------------------------------------------------------------


	public function novo(){
		$dados=[
			
			'cooperativas'=> $this->Cooperativa_model->listar(),
			'entidadesExecutoras' => $this->Entidade_model->listar()
		];
		$this->load->view('Projetopnae', $dados);
	}
	
	//----------------------------------------------------------------------------------

	public function remover($idProjeto){

		$this->projetopnae_model->remover($this->itens_do_projeto->remover($idProjeto));
		$this->load->view('ProjetosLista');
	}	
	
	//----------------------------------------------------------------------------------

	public function cadastrar(){
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('nomeEdital', 		'Nome Edital',         'trim');
		$this->form_validation->set_rules('arquivoEdital', 		'Arquivo Edital',         'trim');
		$this->form_validation->set_rules('cooperativa',    	 'Cooperativa',           'trim|required|is_natural');
		$this->form_validation->set_rules('entidadeExecutora',     'Entidade Executora',      'trim|required|is_natural');
		
		$dados = ['formerror' => ''];		
		if($this->form_validation->run()== FALSE){
			$dados['formerror'] .= validation_errors();
		}else{
			$cooperativa = $this->Cooperativa_model->getById(set_value('cooperativa'));
			if(!$cooperativa){
				$dados['formerror'] .= '<p>Esta cooperativa não existe</p>';
			}
			$entidadeExecutora = $this->Entidade_model->getById(set_value('entidadeExecutora'));
			if(!$entidadeExecutora){
				$dados['formerror'] .= '<p>Esta entidadeExecutora não existe</p>';
			}

			if(empty($dados['formerror']) ){
				$id = $this->Projetopnae_model->cadastrar($cooperativa, $entidadeExecutora);
				if($id){
					redirect('projetopnae/'.$id.'/itens');	
				}
				$dados['formerror'] .= '<p>Não foi possivel cadastrar este projeto!</p>';
			}
		}

		$this->load->view('Projetopnae', $dados);
	}

	//----------------------------------------------------------------------------------


	
	
	
}
