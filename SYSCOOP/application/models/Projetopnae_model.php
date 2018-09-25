<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetopnae_model extends CI_Model {

	
	public function cadastrar($cooperativa , $entidade)
	{
		
		$data['nomeEdital']              = $this->input->post('nomeEdital');
		$data['arquivoEdital']           = $this->input->post('arquivoEdital');

		$data['cooperativa']             = $cooperativa->id;
		$data['coopNomeFantasia']        = $cooperativa->nomeFantasia;
		$data['coopPresidente']          = $cooperativa->presidente;
		$data['coopResponsavel']         = $cooperativa->responsavel;
		$data['coopEmail']               = $cooperativa->email;
		$data['coopCnpj']                = $cooperativa->cnpj;
		$data['coopTelefone']            = $cooperativa->telefone;
		/*$data['coopCooperativa'] 		 = $cooperativa->cooperativa;*/
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
		
		try{
			$this->db->insert('projetos',$data);
			return $this->db->insert_id();
		}catch(Exception $e){
			return false;
		}
	}

	//----------------------------------------------------------------------------------
	
	public function getById($idProjeto){
		$projeto = $this->db
			->where('id', $idProjeto)
			->get('projetos')
			->result();

		return reset($projeto);
	}
}
