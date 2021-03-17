<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("profile2_model");
        $this->load->library('form_validation');
        $this->load->model("login2_model");
        // if($this->login_model->isNotLogin()) redirect(site_url('admin/login'));
        if($this->session->userdata('status') != "login"){
			redirect(site_url('cs/login'));
        }
    }

    public function index()
    {
        $data["cs"] = $this->profile2_model -> getAll();
        $this->load->view("cs/profile", $data);
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
        if (!isset($id)) redirect('cs/profile');

        $cs = $this->profile2_model;
        $validation = $this->form_validation;
        $validation->set_rules($cs->rules());

        if ($validation->run()){
            $cs->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["cs"] = $cs->getById($id);
        if (!$data["cs"]) show_404();

        $this->load->view("cs/profile", $data);
    }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();

    //     if($this->profile_model->delete($id)) {
    //         redirect(site_url('admin/profile'));
    //     }
    // }
}