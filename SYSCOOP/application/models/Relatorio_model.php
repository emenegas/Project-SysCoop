<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_model extends CI_Model {
	
	//----------------------------------------------------------------------------------

	public function  (){

		return $this->db->get('cooperativas')->result();
	}

	
}
