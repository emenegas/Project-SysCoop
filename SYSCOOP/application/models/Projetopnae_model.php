<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetopnae_model extends CI_Model {

	
	public function cadastrar($cooperativa , $entidade)
	{
		
		$this->load->model('Cooperativa_model');
		$this->load->model('itens_model');
		$this->load->model('Funcionario_model');

		$funcionario = $this->Funcionario_model->getById($cooperativa->responsavel);
		
		
		$data = [];
		$data['nomeEdital']              = $this->input->post('nomeEdital');
		$data['arquivoEdital']           = $this->input->post('arquivoEdital');
		$data['cooperativa']             = $cooperativa->id;
		$data['coopNomeFantasia']        = $cooperativa->nomeFantasia;
		$data['coopRepresentante']          = $cooperativa->responsavel;
		$data['coopNomeRepresentante']         = $funcionario->nome;
		$data['coopCpfRepresentante']         = $funcionario->cpf;
		$data['coopTelefoneRepresentante']         = $funcionario->telefone;
		$data['coopEnderecoRepresentante']         = $funcionario->endereco;
		$data['coopCidadeRepresentante']         = $funcionario->cidade;
		$data['coopUfRepresentante']         = $funcionario->uf;
		$data['coopEmail']               = $cooperativa->email;
		$data['coopCnpj']                = $cooperativa->cnpj;
		$data['coopTelefone']            = $cooperativa->telefone;
		$data['coopDapJuridica'] 		 = $cooperativa->dapNumero;
		$data['coopBanco']               = $cooperativa->banco;
		$data['coopAgencia']             = $cooperativa->agencia;
		$data['coopNumeroContaCorrente'] = $cooperativa->numeroContaCorrente;
		$data['coopCep']                 = $cooperativa->cep;
		$data['coopUf']                  = $cooperativa->uf;
		$data['coopCidade']              = $cooperativa->cidade;
		$data['coopEndereco']            = $cooperativa->endereco;

		$data['entidadeExecutora']       = $entidade->id;
		$data['entNomeFantasia']         = $entidade->nomeFantasia;
		$data['entEmail']                = $entidade->email;
		$data['entCnpj']                 = $entidade->cnpj;
		$data['entTelefone']             = $entidade->telefone;
		$data['entRepresentante']        = $entidade->representante;
		$data['entCpfRepresentante']     = $entidade->cpfRepresentante;
		$data['entCep']                  = $entidade->cep;
		$data['entUf']                   = $entidade->uf;
		$data['entCidade']               = $entidade->cidade;
		$data['entEndereco']             = $entidade->endereco;
		
		$data['data'] = date('Y-m-d H:i:s');
		$data['dataEncerramento'] = $this->input->post('dataEncerramento');

		try{
			$this->db->insert('projetos',$data);
			return $this->db->insert_id();
		}catch(Exception $e){
			return false;
		}
	}

	//----------------------------------------------------------------------------------
	
	public function getById($id){
		$projeto = $this->db
		->where('id', $id)
		->get('projetos')
		->result();

		return reset($projeto);
	}

	//----------------------------------------------------------------------------------
	
	public function listar(){
		// $projeto = $this->db
		// ->get('projetos')
		// ->result();

		// return ($projeto);

		$status = $this->input->get('status') == 'inativo'? 'inativo': 'ativo';
		return $this->db
		->where('status',$status)
		->get('projetos')->result();
	}

	//----------------------------------------------------------------------------------
	
	public function remover($id){
		$this->db
		->where('id', $id)
		->delete('projetos');

	}

	//-----------------ALTERAR-----------------------------------------------------------------

	public function alterar($id,$data) {
		
		$this->db->where('id', $id);
		$this->db->set($data);
		return $this->db->update('projetos');
	}
	//----------------------------------------------------------------------------------
	
	
}
