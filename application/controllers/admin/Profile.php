<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("profile_model");
        $this->load->library('form_validation');
        $this->load->model("login_model");
        // if($this->login_model->isNotLogin()) redirect(site_url('admin/login'));
        if($this->session->userdata('status') != "login"){
			redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data["pengelola"] = $this->profile_model -> getAll();
        $this->load->view("admin/profile", $data);
    }

    // public function add()
    // {
    //     $pengelola = $this->profile_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($pengelola->rules());

    //     if($validation->run()) {
    //         $pengelola->save();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $this->load->view("admin/profile");
    // }

    public function edit($id = 1)
    {
        if (!isset($id)) redirect('admin/profile');

        $pengelola = $this->profile_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengelola->rules());

        if ($validation->run()){
            $pengelola->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pengelola"] = $pengelola->getById($id);
        if (!$data["pengelola"]) show_404();

        $this->load->view("admin/profile", $data);
    }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();

    //     if($this->profile_model->delete($id)) {
    //         redirect(site_url('admin/profile'));
    //     }
    // }
}