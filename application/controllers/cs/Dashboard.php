<?php

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengerjaan2_model");
        $this->load->library('form_validation');
        $this->load->model("login2_model");
        // if($this->login_model->isNotLogin()) redirect(site_url('admin/login'));
        if($this->session->userdata('status') != "login"){
			redirect(site_url('cs/login'));
        }
    }

    public function index()
    {
        //load view admin/dashboard.php
        $data["pengerjaan"] = $this->pengerjaan2_model -> get_by_role();
        $this->load->view("cs/dashboard", $data);
    }


}