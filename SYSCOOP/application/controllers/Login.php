<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Login_view');
        } else {

            $this->load->model('Funcionario_model');
            $usuario = $this->Funcionario_model->login($this->form_validation->set_value('cpf'), $this->form_validation->set_value('senha'));
            if(!$usuario){
                redirect('login');
            }

            $data = array(
                'cpf' => $this->input->post('cpf'),
            );
            $this->session->set_userdata($data);

            redirect('pagina');
        }
    }
}