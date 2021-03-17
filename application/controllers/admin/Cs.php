<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("cs_model");
        $this->load->library('form_validation');
        $this->load->model("login_model");
        // if($this->login_model->isNotLogin()) redirect(site_url('admin/login'));
        if($this->session->userdata('status') != "login"){
			redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data["cs"] = $this->cs_model -> getAll();
        $this->load->view("admin/cs/list", $data);
    }

    public function tambah()
    {
        $cs = $this->cs_model;
        $validation = $this->form_validation;
        $validation->set_rules($cs->rules());

        if($validation->run()) {
            $cs->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/cs/new_form");
    }

    public function edit($id = null)
    {
        //echo site_url('admin/cs/edit/'.$cs->idcs)
        if (!isset($id)) redirect('admin/cs');

        $cs = $this->cs_model;
        $validation = $this->form_validation;
        $validation->set_rules($cs->rules());

        if ($validation->run()){
            $cs->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["cs"] = $cs->getById($id);
        if (!$data["cs"]) show_404();

        $this->load->view("admin/cs/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->cs_model->delete($id)) {
            redirect(site_url('admin/cs'));
        }
    }
}