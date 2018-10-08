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
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
        $this->load->model('Associacao_model');
        $query = $this->Associacao_model->validate();

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Login_view');
        } else {
 
            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                     
                    'cpf' => $this->input->post('cpf'),
                    'logged' => true
                );
                $this->session->set_userdata($data);

                redirect('login/Area_restrita');
            } else {
                redirect($this->index());
            }
        }
    }
}