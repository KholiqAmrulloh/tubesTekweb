<?php
class Login extends CI_Controller
{
    function index()
    {
        $this->load->view("login");
    }

    function proseslogin()
    {
        $this->load->model("m_login");
        if ($this->m_login->login()->num_rows() > 0) {
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username")
            );
            $this->session->set_userdata($session_data);
            redirect(site_url('dashboard'));
        } else {
            $this->session->set_flashdata("error", "Username atau Password Salah !");
            redirect(site_url("login"));
        }
    }
}
