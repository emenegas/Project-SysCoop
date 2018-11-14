<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetopnae extends MY_Controller {

	function __construct(){
		
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('Projetopnae_model');
		$this->load->model('Cooperativa_model');
		$this->load->model('Entidade_model');
		$this->load->model('Itens_model');
		$this->load->model('Funcionario_model');

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
		$data = [];
		$projeto = $this->Projetopnae_model->getById($id);
		$itens = $this->Itens_model->getByProjeto($id);

		if(!$projeto && !$itens){
			show_404();
		}
		
		$data['projeto'] = $projeto;
		$data['itens'] = $itens;
		$data['idProjeto'] = $id;

		$this->load->view('ProjetoPnaeInfo', $data);
		
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

		$projeto = $this->Projetopnae_model->getById($id);
		if($projeto->status == 'ativo'){

			$this->Itens_model->removerProjeto($id);
			$this->Projetopnae_model->remover($id);
			redirect('projetopnae');
		}else{
			$data['formerror'] = 'Esse projeto não pode ser excluido depois de concluido';
			$data['projetos'] = $this->Projetopnae_model->listar();
			$this->load->view('ProjetosLista', $data);
		}

	}	

	//----------------------------------------------------------------------------------

	public function alterar($idProjeto){

		$data = [];
		$dados = [];
		$projeto = $this->Projetopnae_model->getById($idProjeto);
		$itens = $this->Itens_model->getByProjeto($idProjeto);
		
		if(!$projeto){
			show_404();
		}

		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('status', 		'Status',         'trim|required');
		$this->form_validation->set_rules('homologacaoCodigo', 		'Código Homologação',         'trim');
		$this->form_validation->set_rules('dataEncerramento',    	 'Data de Encerramento',           'trim|required');

		
		$data = ['formerror' => ''];
		if($this->form_validation->run()== FALSE){
			$data['formerror'] .= validation_errors();
			$data['projeto'] = $projeto;
			$data['itens'] = $itens;
			$this->load->view('ProjetoPnaeInfo', $data);

		}elseif(($this->input->post('status') == 'inativo')&&($this->input->post('homologacaoCodigo'))) {

			$dados['status'] = $this->input->post('status');
			$dados['homologacaoCodigo'] = $this->input->post('homologacaoCodigo');

			$NULO = $this->Itens_model->getAgricultorNulo($id);
	
			if(empty($NULO){

				$itensPorAgricultor = $this->Itens_model->getByAgricultorPorProjeto($idProjeto);

				foreach ($itensPorAgricultor as $item) {

					$this->Itens_model->alterarLimite($item['agricultor'],$item['totalItem']);
				}

				$this->Projetopnae_model->alterar($idProjeto,$dados);
			}else{

				$dados['formerror'] = 'A Homologação e o Status concluido são necessários!';
			}
		}elseif($this->input->post('status') == 'ativo'){
			
			$dados['status'] = $this->input->post('status');
			$dados['homologacaoCodigo'] = '';

			$itensPorAgricultor = $this->Itens_model->getByAgricultorPorProjeto($idProjeto);
			foreach ($itensPorAgricultor as $item) {
				// print_r($item);
				// exit;
				$this->Itens_model->reporLimite($item['agricultor'],$item['totalItem'], $idProjeto);
				
			}
			$this->Projetopnae_model->alterar($idProjeto,$dados);
		}
		else {
			$data['formerror'] = 'Não pode ser alterado';
			$data['projeto'] = $projeto;
			$data['itens'] = $itens;
			$this->load->view('ProjetoPnaeInfo', $data);

		}

		redirect('projetopnae');

	}


	//----------------------------------------------------------------------------------

	public function cadastrar(){
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('nomeEdital', 		'Nome Edital',         'trim|required');
		$this->form_validation->set_rules('arquivoEdital', 		'Arquivo Edital',         'trim|required');
		$this->form_validation->set_rules('cooperativa',    	 'Cooperativa',           'trim|required|is_natural');
		$this->form_validation->set_rules('caracteristicasCoop',  		  'caracteristicasCoop',   		'trim');
		$this->form_validation->set_rules('entidadeExecutora',     'Entidade Executora',      'trim|required|is_natural');
		$this->form_validation->set_rules('dataEncerramento',     'Data Encerramento',      'trim|required');

		$dados = ['formerror' => ''];		
		if($this->form_validation->run()== FALSE){
			$dados['formerror'] .= validation_errors();
			$dados['cooperativas'] = $this->Cooperativa_model->listar();
			$dados['entidadesExecutoras'] = $this->Entidade_model->listar();
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


}
