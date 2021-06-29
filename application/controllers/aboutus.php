<?php
class aboutus extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('login')) {
            $this->load->view("aboutus");
        } else {
            $this->load->view('login');
        }
    }
}
