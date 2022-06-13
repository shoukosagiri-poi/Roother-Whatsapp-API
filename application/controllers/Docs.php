<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Docs extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/auth_header');
        $this->load->view('docs/dashboard');
    }

    public function send_message()
    {
        $this->load->view('template/auth_header');
        $this->load->view('template/header-docs');
        $this->load->view('docs/send-message');
    }
}
