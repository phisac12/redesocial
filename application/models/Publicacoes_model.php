<?php

class Publicacoes_model extends CI_Model {

public $tabela = "publicacoes";

public function read()
	{
		$this->db->select('publicacoes.postagem, publicacoes.data, users.n_fantasia, publicacoes.fotos');
		$this->db->join('users', 'users.id = publicacoes.id_usuario');
		$this->db->order_by('data desc');
		return $this->db->get($this->tabela)->result();
    }

public function insert_entry($dados)
{
        $this->db->insert('publicacoes', $dados);
}

public function update_entry()
{
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
}

}

?>
