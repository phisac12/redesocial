<?php

class Cadastrar_model extends CI_Model {

public function get_last_ten_entries()
{
        $query = $this->db->get('entries', 10);
        return $query->result();
}

public function insert_entry($dados)
{
        $this->db->insert('users', $dados);
}

// Função de select para verificar
public function verificar($email)
{
    $this->db->where("email", $email);
    $user = $this->db->get("users")->row_array();
    return $user;
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