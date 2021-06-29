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

    public function tambah()
    {
        $data = array(
            'NIP'  => $this->input->post('nip'),
            'Nama'  => $this->input->post('name'),
            'Alamat' => $this->input->post('alamat'),
            'TanggalLahir'  => $this->input->post('tgllahir'),
            'NomorHP' => $this->input->post('nohp')
        );
        $this->m_dosen->tambah($data);
        redirect('dashboard');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $this->m_dosen->edit($id);
        redirect('dashboard');
    }

    public function hapus($id)
    {
        $this->m_dosen->hapus($id);
        redirect('dashboard');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("Login"));
    }
}
