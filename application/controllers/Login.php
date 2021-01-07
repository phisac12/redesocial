<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cadastrar_model');
	}

	public function index()
	{   
        
		$this->load->view('inicio/homepage');
	}

    //essa função abaixo pega os dados digitados na pagina de login, 
    //atribui a variável $user e faz uma condição para saber se o usuário está logado
    public function home(){

        $this->load->model("login_model");
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->login_model->home($email, $password);

        if($user) {
            $this->session->set_userdata("logged_user", $user);
            $this->session->set_flashdata("success", "Logado com sucesso!");
            redirect("homepage");

        }else{
            $this->session->set_flashdata("danger", "Email ou senha incorretos ..");
            redirect("login");
        }
    }
    
    //Essa função abaixo deleta a sessão ativa
    public function logout(){

        $this->session->unset_userdata('logged_user');
        redirect("login");
    }
}

