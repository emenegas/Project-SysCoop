<?php
class MY_Controller extends CI_Controller{
  function __construct(){
    parent:: __construct();
    if (! $this->session->userdata('cpf')){
      redirect('/login');
    }
    $usuario = $this->session->userdata('cpf');
  //   if ($this->uri->segment(1) !== $usuario['contexto']){
		// die($this->load->view('aviso_permissao',NULL,TRUE));
    //  
  }
}