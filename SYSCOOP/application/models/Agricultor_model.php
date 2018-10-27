<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agricultor_model extends CI_Model {

	
	public function cadastrar()
	{	

		$data = [];
		$data['nome'] = $this->input->post('nome');
		$data['cpf'] = $this->input->post('cpf');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');
		$data['uf'] = $this->input->post('uf');
		$data['cep'] = $this->input->post('cep');
		$data['cidade'] = $this->input->post('cidade');
		$data['endereco'] = $this->input->post('endereco');
		$data['dapNumero'] = $this->input->post('dapNumero');
		$data['dapValidade'] = $this->input->post('dapValidade');
		
		try{
			$this->db->insert('agricultores',$data);
			
		}catch(Exception $e){
			return false;
		}

		$agricultorId = $this->db->insert_id();
		
		try{
			foreach ($this->input->post('produtos') as $produtoId) {

				$data = [];
				$data['produto'] = $produtoId;
				$data['agricultor'] = $agricultorId;
				$this->db->insert('agricultores_has_produtos', $data);
			}			
		}catch(Exception $e){
			return false;
		}
		try{
			
			if($this->input->post('cooperativa')) {

				$data = [];
				$data['cooperativa'] = $this->input->post('cooperativa');
				$data['agricultor'] = $agricultorId;
				$this->db->insert('agricultores_has_cooperativas', $data);
			}			
		}catch(Exception $e){
			return false;
		}
		
	}

	//----------------------------------------------------------------------------------
	public function listar(){
		$status = $this->input->get('status') == 'inativo'? 'inativo': 'ativo';
		return $this->db
		->where('status',$status)
		->get('agricultores')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function getById($id){
		$agricultor = $this->db
		->where('id', $id)
		->get('agricultores')
		->result();

		return reset($agricultor);
	}
	
	//----------------------------------------------------------------------------------
	
	public function getByProduto($id){
		$agricultor = $this->db
		->select('agricultores.id , agricultores.nome')
		->join('agricultores', 'agricultores.id = agricultores_has_produtos.agricultor')
		->where('produto', $id)
		->get('agricultores_has_produtos')
		->result();

		return ($agricultor);

	}
	//-----------------ALTERAR-----------------------------------------------------------------

	public function alterar($id,$data) {

		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('agricultores_has_produtos', $data->produto);
		return $this->db->update('agricultores');

		// $this->db
		// ->select('agricultores.id , agricultores.nome')
		// ->join('agricultores', 'agricultores.id = agricultores_has_produtos.agricultor')
		// ->where('produto', $id)
		// ->update('agricultores_has_produtos')
		// ->result();
	}
}
