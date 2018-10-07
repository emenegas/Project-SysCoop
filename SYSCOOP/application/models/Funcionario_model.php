<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_model extends CI_Model {

	
	public function cadastrar()
	{
		$data = [];
		$data['nome'] = $this->input->post('nome');
		$data['cpf'] = $this->input->post('cpf');
		$data['email'] = $this->input->post('email');
		$data['telefone'] = $this->input->post('telefone');
		$data['cep'] = $this->input->post('cep');
		$data['uf'] = $this->input->post('uf');
		$data['cidade'] = $this->input->post('cidade');
		$data['endereco'] = $this->input->post('endereco');
		$data['senha'] = $this->input->post('senha');
		$data['cooperativa'] = $this->input->post('cooperativa');

		return $this->db->insert('funcionarios',$data);

	}

	//----------------------------------------------------------------------------------
	
	public function listar(){

		return $this->db->get('funcionarios')->result();
	}

	public function getById($id){
		$funcionario = $this->db
		->where('id', $id)
		->get('funcionarios')
		->result();

		return reset($funcionario);
	}
	
	//-----------------ALTERAR-----------------------------------------------------------------

	public function editar($id) {
		$this->db->where('id', $id);
		return $this->db->get('funcionarios')->result();
	}
	public function alterar($data) {
		$this->db->where('id', $data['id']);
		$this->db->set($data);
		return $this->db->update('funcionarios');
	}

	//--------------------------Ativar/Inativar-----------------------------------

	public function alterarLista($id) {
		$this->db
		->where('id', $id);
		
		return $this->db->update('funcionarios');
	}

	//----------------------------------------------------------------------------------
}
