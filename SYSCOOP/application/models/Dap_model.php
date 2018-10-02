<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dap_model extends CI_Model {

	
	public function cadastrar()
	{
		$data = [];
		$data['numero'] = $this->input->post('numero');
		$data['dataExpiracao'] = $this->input->post('dataExpiracao');

		
	
		if($this->input->post('tipoDoc') == 'cpf')
		{
			$data['agricultor'] = $this->input->post('docCPF');
			
		}
		else{
			$data['cooperativa'] = $this->input->post('docCNPJ');
			
		}

				
		return $this->db->insert('daps',$data);

	}

	//----------------------------------------------------------------------------------
	
	public function listar(){

		return $this->db->get('daps')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function getByAgricultor($idAgricultor)
	{
		$agricultor = $this->db
		->where('agricultor', $idAgricultor)
		->get('daps')
		->result();

		return ($agricultor);
	}
	
	//----------------------------------------------------------------------------------
	
	public function getByCooperativa($idCooperativa)
	{
		$cooperativa = $this->db
		->where('cooperativa', $idCooperativa)
		->get('daps')
		->result();

		return ($cooperativa);
	}
	

}
