<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperativa_model extends CI_Model {

	
	public function cadastrar()
	{
		$data = [];
		$data['nomeFantasia'] = $this->input->post('nomeFantasia');
		$data['presidente'] = $this->input->post('presidente');
		$data['responsavel'] = $this->input->post('responsavel');
		$data['email'] = $this->input->post('email');
		$data['cnpj'] = $this->input->post('cnpj');
		$data['telefone'] = $this->input->post('telefone');
		$data['cooperativa'] = $this->input->post('cooperativa') ? $this->input->post('cooperativa') : NULL;
		$data['banco'] = $this->input->post('banco');
		$data['agencia'] = $this->input->post('agencia');
		$data['numeroContaCorrente'] = $this->input->post('numeroContaCorrente');
		$data['cep'] = $this->input->post('cep');
		$data['uf'] = $this->input->post('uf');
		$data['cidade'] = $this->input->post('cidade');
		$data['endereco'] = $this->input->post('endereco');
		$data['dapNumero'] = $this->input->post('dapNumero');
		$data['dapValidade'] = $this->input->post('dapValidade');
		
		return $this->db->insert('cooperativas',$data);

	}

	//----------------------------------------------------------------------------------
	
	public function listar(){

		return $this->db->get('cooperativas')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function getById($id){
		$cooperativa = $this->db
			->where('id', $id)
			->get('cooperativas')
			->result();

		return reset($cooperativa);
	}

}
