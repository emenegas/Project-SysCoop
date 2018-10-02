<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cpf', 'cpf', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        // MODELO MEMBERSHIP
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Login');
            
        } else {

            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'cpf' => $this->input->post('cpf'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('login/area_restrita');
            } else {
                redirect($this->index());
            }
        }
    }
}