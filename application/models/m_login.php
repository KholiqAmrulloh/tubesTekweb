<?php

class m_login extends CI_Model
{
    function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("tbl_login");
    }
}
