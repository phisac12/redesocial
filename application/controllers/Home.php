<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set('America/Sao_Paulo');
		parent::__construct();
		$this->load->model('Publicacoes_model');
		
    }

    public function homepage(){
		$dados['titulo'] = "Homepage";
		$dados['publicacoes'] = $this->Publicacoes_model->read();
		$this->load->view('restrito/homepage', $dados);
	}
	
	public function publicar(){
			$dados = $this->input->post();
			if(empty($_POST['postagem']) AND ($_FILES['envFoto']['size'] == 0)) {
				$this->session->set_flashdata("danger", "Você precisar preencher algo");
				header('Location: homepage');
				die;
			}else{

				$dados['fotos'] = $this->salvar();
				$dados['id_usuario'] = $this->session->userdata['logged_user']['id'];
				$dados['data'] = date("Y-m-d H:i:s", time());
				$dados['postagem'] = json_encode($dados['postagem']);
				$this->Publicacoes_model->insert_entry($dados);
				header('Location: homepage');
			}

	}

	public function salvar(){
		if (!isset($_FILES['envFoto'])){
			return null;
		}
		$path = $_FILES['envFoto']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$curriculo 		= $_FILES['envFoto'];
		$configuracao['upload_path']	 = './photos/';
		$configuracao['file_name']		 = time().'.' .$ext;
		$configuracao['allowed_types'] 	 = 'png|jpeg|jpg|gif';
		$configuracao['max_size'] 		 = '2000';
		$configuracao['max-width']		 = '1024';
		$configuracao['max_weight']		 = '768';
		$this->load->library('upload');
		$this->upload->initialize($configuracao);
			if($this->upload->do_upload('envFoto')){
				return $configuracao['file_name'];
			}else{
				return null;
			}
	}
}
