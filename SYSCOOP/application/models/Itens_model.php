<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itens_model extends CI_Model {

	
	public function cadastrar($idProjeto)
	{
		
		$this->load->model('Produto_model');
		$this->load->model('Agricultor_model');
		$this->load->model('Projetopnae_model');

		
		$produto = $this->Produto_model->getById($this->input->post('produto'));
		$agricultor = $this->Agricultor_model->getById($this->input->post('agricultor'));
		$projeto = $this->Projetopnae_model->getById($idProjeto);


		$data = [];
		$data['projeto']             = $idProjeto;
		$data['produto']             = $produto->id;
		$data['nomeProduto']        = $produto->nome;
		$data['unidadeMedida']      = $produto->unidadeMedida;
		$data['agricultor']      	 = $agricultor? $agricultor->id : NULL;
		$data['nomeAgricultor']     = $agricultor? $agricultor->nome : NULL;
		$data['cpf']				=$agricultor? $agricultor->cpf : NULL;
		$data['dapAgricultor']       = $agricultor? $agricultor->dapNumero : NULL;
		$data['quantidade'] 		= $this->input->post('quantidade');
		$data['cronogramaEntregaProd'] 		= $this->input->post('cronogramaEntregaProd');
		$data['descricaoProd'] 		= $this->input->post('descricaoProd');
		$data['precoUnidade'] 		= str_replace(',','.',$this->input->post('precoUnidade'));
		$data['totalItem']			= $data['precoUnidade'] * $data['quantidade'];  
		$data['data'] 				= date('Y-m-d H:i:s');
		$total['totalProjeto1']	= $projeto->totalProjeto;
		$total2['totalProjeto'] = $total['totalProjeto1'] + $data['totalItem'];  
		
		try{
			$this->db->insert('itens_do_projeto',$data);
			$this->db
			->where('id', $idProjeto)
			->update('projetos', $total2);

			return $this->db->insert_id();
			
			
		}catch(Exception $e){
			return false;
		}
	}

	//----------------------------------------------------------------------------------

	public function getByProjeto($id)
	{
		$itens = $this->db
		->where('projeto', $id)
		->get('itens_do_projeto')
		->result();

		return ($itens);
	}

	//----------------------------------------------------------------------------------
	
	public function listar(){

		return $this->db->get('itens_do_projeto')->result();
	}

	//----------------------------------------------------------------------------------

	public function remover($idProjeto){
		$this->db
		->where('projeto', $idProjeto)
		->where('id', $this->input->post('itemDoProjeto'))
		->delete('itens_do_projeto');

	}
	//----------------------------------------------------------------------------------

	public function removerProjeto($id){
		$this->db
		->where('projeto', $id)
		->delete('itens_do_projeto');

	}

	//----------------------------------------------------------------------------------

	public function alterar($idProjeto){
		$this->db
		->where('projeto', $idProjeto)
		->where('id', $this->input->post('itemDoProjeto'))
		->update('itens_do_projeto');

	}

	//----------------------------------------------------------------------------------

	public function alterarLimite($id,$totalItem){
		
		$this->load->model('Agricultor_model');

		$dados = $this->Agricultor_model->getById($id);

			
			$limiteAtualizado = $dados->dapLimite + $totalItem;

			$this->db
			->where('id', $id)
			->set('dapLimite', $limiteAtualizado)
			->update('agricultores');
		
	}

	//----------------------------------------------------------------------------------

	public function getByAgricultor($id){
		$dados =  $this->db
		->where('projeto', $id)
		->get('itens_do_projeto')
		->result_array();		
		return ($dados);
	}

//----------------------------------------------------------------------------------

	public function getAgricultorNulo($id){
		$dadosNull =  $this->db
		->where('projeto', $id)
		->where('agricultor',NULL)

		->get('itens_do_projeto')
		->result_array();
		
		return ($dadosNull);
	}

	//----------------------------------------------------------------------------------


//----------------------------------------------------------------------------------
}
