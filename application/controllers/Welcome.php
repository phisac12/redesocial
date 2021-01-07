<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cadastrar_model');
	}

	public function index()
	{
		$this->load->view('inicio/login');
	}
	public function login(){
		$dados['titulo'] = "Login";
		$this->load->view('inicio/login', $dados);
	}
	public function cadastro(){
		$dados['titulo'] = "Cadastro";
		$this->load->view('inicio/cadastro', $dados);

	}

	public function cadastrar(){
		
		$dados = $this->input->post();
		if(empty($dados['email'])){
			$this->session->set_flashdata("danger", "Email precisa ser preenchido");
			redirect("cadastro");
			die;
		}
		$verificarEmail = $this->Cadastrar_model->verificar($dados['email']);
		if($verificarEmail){
			$this->session->set_flashdata("danger", "Este email já pertence á outro usuário");
			redirect("cadastro");
			die;
		}
		if(empty($dados['password'])){
			$this->session->set_flashdata("danger", "Senha precisa ser preenchida");
			redirect("cadastro");
			die;
		}
		$dados['password'] = sha1(md5($dados['password']));
		$this->Cadastrar_model->insert_entry($dados);
		header('Location: login');
	}

}
