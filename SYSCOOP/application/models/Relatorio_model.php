<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_model extends CI_Model {
	
	//----------------------------------------------------------------------------------

	public function listarCooperativa(){

		return $this->db->get('cooperativas')->result();
	}

	//----------------------------------------------------------------------------------

	public function listarProduto(){

		return $this->db->get('produtos')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function listarProjeto(){

		return $this->db->get('projetos')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function listarEntidade(){

		return $this->db->get('entidadesExecutoras')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function listarDap(){

		return $this->db->get('daps')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function listarAgricultor(){

		return $this->db->get('agricultores')->result();
	}
}
