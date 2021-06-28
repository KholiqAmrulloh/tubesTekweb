<?php
class Dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        } else {
            $this->load->model('m_dosen');
            $this->load->library('form_validation');
        }
    }

    public function addDosen()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashboard');
        } else {
            $this->m_dosen->addDosen();
            redirect('dashboard');
        }
    }

    public function hapusDosen($id)
    {
        $this->m_dosen->deleteDosen($id);
        redirect('dashboard');
    }
}
