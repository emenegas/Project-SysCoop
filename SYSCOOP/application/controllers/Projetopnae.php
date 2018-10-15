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

	public function info($id){
		$dados=[
			'idProjeto' => $id,
			'projeto'=> $this->Projetopnae_model->getById($id),
			'itens' => $this->Itens_model->getByProjeto($id)
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

	public function remover($id){
		$this->Itens_model->removerProjeto($id);
		$this->Projetopnae_model->remover($id);
		redirect('projetopnae');
	}	

	//----------------------------------------------------------------------------------

	// public function editar($id){
	// 	$data = [];
	// 	$projeto = $this->Projetopnae_model->getById($id);
	// 	if(!$projeto){
	// 		show_404();
	// 	}
	// 	$data['projeto'] = $projeto;
	// 	$this->load->view('ProjetoPnaeInfo', $data);
	// }
	public function alterar($id){
		$data = [];
		$projeto = $this->Projetopnae_model->getById($id);
		if(!$projeto){
			show_404();
		}
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$validations = array(
			array(
				'field' => 'Status',
				'label' => 'status',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'Data Encerramento',
				'label' => 'dataEncerramento',
				'rules' => 'required|min_length[4]|max_length[45]'
			)
			
		);
		$this->form_validation->set_rules($validations);
		if ($this->form_validation->run() == FALSE) {
			$data['projeto'] = $projeto;
			$data['formerror'] = validation_errors();
			
			$this->load->view('ProjetoPnaeInfo', $data);
		} else {

			$data['status'] = $this->input->post('status');

			
			if ($this->Projetopnae_model->alterar($id,$data)) {
				redirect('projetopnae');
			} else {
				log_message('error', 'Erro na alteração...');
			}
		}
	}
	//----------------------------------------------------------------------------------

	public function cadastrar(){
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('nomeEdital', 		'Nome Edital',         'trim|required');
		$this->form_validation->set_rules('arquivoEdital', 		'Arquivo Edital',         'trim|required');
		$this->form_validation->set_rules('cooperativa',    	 'Cooperativa',           'trim|required|is_natural');
		$this->form_validation->set_rules('entidadeExecutora',     'Entidade Executora',      'trim|required|is_natural');
		$this->form_validation->set_rules('dataEncerramento',     'Data Encerramento',      'trim|required');
		
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
