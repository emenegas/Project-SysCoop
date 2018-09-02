<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_model extends CI_Model {
	
	//----------------------------------------------------------------------------------

	public function listar(){

		return $this->db->get('cooperativas')->result();
	}

	//----------------------------------------------------------------------------------

	public function listarProdutos(){

		return $this->db->get('produtos')->result();
	}

	//----------------------------------------------------------------------------------
	
}
