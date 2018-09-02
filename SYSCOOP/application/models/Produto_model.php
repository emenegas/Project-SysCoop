<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model {

	
	public function cadastrar()
	{
		$data['nome'] = $this->input->post('nome');
		$data['unidadeMedida'] = $this->input->post('unidadeMedida');
		$data['tipo'] = $this->input->post('tipo');
		$data['epoca'] = $this->input->post('epoca');

		return $this->db->insert('produtos',$data);

	}

	//----------------------------------------------------------------------------------
	
	public function listar(){

		return $this->db->get('produtos')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function getById($id){
		$produto = $this->db
			->where('id', $id)
			->get('produtos')
			->result();

		return reset($produto);
	}
}
