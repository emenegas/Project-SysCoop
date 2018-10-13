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
		$data['precoUnidade'] 		= str_replace(',','.',$this->input->post('precoUnidade'));
		$data['totalItem']			= $data['precoUnidade'] * $data['quantidade'];  
		$data['data'] 				= date('Y-m-d H:i:s');
		try{
			$this->db->insert('itens_do_projeto',$data);
			return $this->db->insert_id();
		}catch(Exception $e){
			return false;
		}
	}

	//----------------------------------------------------------------------------------
	

	public function getByProjeto($idProjeto)
	{
		$itens = $this->db
		->where('projeto', $idProjeto)
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
}
