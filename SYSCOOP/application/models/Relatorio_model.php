<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_model extends CI_Model {
	
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

	//----------------------------------------------------------------------------------
	
	public function getByCoopAgri($id){

		$agricultor = $this->db
		->select('agricultores.id , agricultores.nome')
		->join('agricultores', 'agricultores.id = agricultores_has_cooperativas.agricultor')
		->where('cooperativa', $id)
		->get('agricultores_has_cooperativas')
		->result();
		
		return ($agricultor);
	}

	//----------------------------------------------------------------------------------
	
	public function getByCoopFunc($id){

	}
}
