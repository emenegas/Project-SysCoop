<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_model extends CI_Model {
	
	//----------------------------------------------------------------------------------
	
	public function getByProduto($id){
		try{
			$agricultor = $this->db
			->select('agricultores.id , agricultores.nome')
			->join('agricultores', 'agricultores.id = agricultores_has_produtos.agricultor')
			->where('produto', $id)
			->get('agricultores_has_produtos')
			->result();

			return ($agricultor);

		}catch(Exception $e){
			return false;
		}
	}	

	//----------------------------------------------------------------------------------
	
	public function getByCoopAgri($id){
		try{
			$agricultor = $this->db
			->select('agricultores.id , agricultores.nome')
			->join('agricultores', 'agricultores.id = agricultores_has_cooperativas.agricultor')
			->where('cooperativa', $id)
			->get('agricultores_has_cooperativas')
			->result();
			
			return ($agricultor);

		}catch(Exception $e){
			return false;
		}
	}

	//----------------------------------------------------------------------------------
	
	public function getByCoopFunc($id){

	}
}
