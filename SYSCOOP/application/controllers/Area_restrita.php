<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Area_restrita extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Associacao_model');
        $this->Associacao_model->logged();
    }
    
    public function index() {
        
        $this->load->view('Pagina');
        
    }
}