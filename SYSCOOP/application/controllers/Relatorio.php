<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Relatorio extends MY_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Relatorio_model');
	}

	//----------------------------------------------------------------------------------

	public function index(){
		$dados=[
		
		];
		$this->load->view('Relatorio', $dados);
	}

}