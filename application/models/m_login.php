<?php

class M_login extends CI_Model
{
    function login()
    {
        $username = $this->input->post("username");
        $pass = $this->input->post("password");
        $this->db->where("username", $username);
        $this->db->where("password", $pass);
        return $this->db->get("tbl_login");
    }
}
