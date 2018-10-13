<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entidade_model extends CI_Model {

	//----------------------------------------------------------------------------------
	public function cadastrar()
	{
		$data = [];
		$data['nomeFantasia'] = $this->input->post('nomeFantasia');
		$data['email'] = $this->input->post('email');
		$data['cnpj'] = $this->input->post('cnpj');
		$data['telefone'] = $this->input->post('telefone');
		$data['representante'] = $this->input->post('representante');
		$data['cpfRepresentante'] = $this->input->post('cpfRepresentante');
		$data['cep'] = $this->input->post('cep');
		$data['uf'] = $this->input->post('uf');
		$data['cidade'] = $this->input->post('cidade');
		$data['endereco'] = $this->input->post('endereco');


		return $this->db->insert('entidadesexecutoras',$data);
	}

	//----------------------------------------------------------------------------------
	public function listar(){
		$status = $this->input->get('status') == 'inativo'? 'inativo': 'ativo';
		return $this->db
		->where('status',$status)
		->get('entidadesexecutoras')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function getById($id){
		$entidade = $this->db
		->where('id', $id)
		->get('entidadesexecutoras')
		->result();

		return reset($entidade);
	}
	//-----------------ALTERAR-----------------------------------------------------------------

	public function alterar($id,$data) {
		
		$this->db->where('id', $id);
		$this->db->set($data);
		return $this->db->update('entidadesexecutoras');
	}


}
