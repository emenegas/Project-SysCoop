<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperativa_model extends CI_Model {

	
	public function cadastrar()
	{	
		$data = [];
		$data['nomeFantasia'] = $this->input->post('nomeFantasia');
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
		$status = $this->input->get('status') == 'inativo'? 'inativo': 'ativo';
		return $this->db
		->where('status',$status)
		->get('cooperativas')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function getById($id){
		$cooperativa = $this->db
		->where('id', $id)
		->get('cooperativas')
		->result();

		return reset($cooperativa);
	}
	//-----------------ALTERAR-----------------------------------------------------------------

	public function alterar($id,$data) {
		
		$this->db->where('id', $id);
		$this->db->set($data);
		return $this->db->update('cooperativas');
	}
}
