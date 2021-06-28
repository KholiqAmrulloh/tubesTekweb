<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_dosen", "", TRUE);
    }
    public function index()
    {
        if ($this->session->userdata('login')) {
            $data['Dosen'] = $this->m_dosen->getAllDosen();
            $this->load->view("dashboard", $data);
        } else {
            $this->load->view('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("Login"));
    }
}
