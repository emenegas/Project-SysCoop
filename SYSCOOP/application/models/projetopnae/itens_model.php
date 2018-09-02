<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itens_model extends CI_Model {

	
	public function cadastrar($produto , $agricultor)
	{
		
		$data['nomeEdital']              = $this->input->post('nomeEdital');
		$data['arquivoEdital']           = $this->input->post('arquivoEdital');


		/*$data['projeto']             = $this->*/
		$data['produto']             = $produto->id;
		$data['nomeProduto']        = $produto->nome;
		$data['unidadeMedida']          = $produto->unidadeMedida;
		$data['tipo']       		  = $produto->tipo;
		$data['epoca']               = $produto->epoca;
		
		$data['agricultor']       = $agricultor->id;
		$data['nomeAgricultor']         = $agricultor->nome;
		$data['cpf']                = $agricultor->cpf;
		$data['agricultorDap']          = $agricultor->dap;
		
		$data['quantidade'] 		= $this->input->post('quantidade');
		$data['precoUnidade'] 		= $this->input->post('precoUnidade');
		/*$data['totalProjeto']		= */
		try{
			$this->db->insert('itens_do_projeto',$data);
			return $this->db->insert_id();
		}catch(Exception $e){
			return false;
		}
	}

	//----------------------------------------------------------------------------------
	
}
