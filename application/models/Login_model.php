<?php

class login_model extends CI_Model{

public function home($email, $password)
{
    $this->db->where("email", $email);
    $this->db->where("password", sha1(md5($password)));
    $user = $this->db->get("users")->row_array();
    return $user;
}





}
?>