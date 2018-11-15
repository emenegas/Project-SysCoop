<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends My_Controller {

  public function __construct() {
    parent:: __construct();
    $this->load->helper('Form');
    $this->load->library('curl');
  }

  public function index() {
    $data['action'] = site_url('Contato/enviaEmail');
    $this->load->view('Contato', $data);
  }

  public function enviaEmail() {
    $this->load->library('email');

    $email = $this->input->post('email', TRUE);
    $nome = $this->input->post('nome', TRUE);
    $telefone = $this->input->post('telefone', TRUE);
    $mensagem = $this->input->post('mensagem', TRUE);
    $assunto = $this->input->post('assunto', TRUE);

    $this->email->from($email, $nome);
    $this->email->to('ezequiel.menegas.vip2@gmail.com');

    $this->email->subject($assunto);
    $this->email->message('<html><head></head><body>
      Nome:       ' . $nome . ' <br />
      E-mail:     ' . $email . ' <br />
      Telefone:   ' . $telefone . ' <br />
      Assunto:    ' . $assunto . ' <br />
      Mensagem:   ' . $mensagem . ' <br />
      </body></html>');

    $em = $this->email->send();
    if ($em) {
      $data['email_enviado'] = 'E-mail enviado com sucesso. Aguarde contato.';
    } else {
      $data['email_enviado'] = 'Erro ao enviar o email. Favor enviar um e-mail para nucleofae@gmail.com';
    }
    $data['action'] = site_url('Contato/enviaEmail');
    $this->load->view('Contato',$data);
  }
}