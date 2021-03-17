<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login2_model");
        $this->load->library('form_validation');
         
    }

    public function index()
    {
        // if($this->input->post()){
        //     if($this->user_model->doLogin()) redirect(site_url('admin/dashboard'));
        // }
        if($this->session->userdata('email')){
			redirect(site_url('cs/dashboard'));
        }else{
            $this->load->view("cs/login.php");
        }
    }

    public function aksi_login()
    {

        $cs = $this->login2_model;
        $validation = $this->form_validation;
        $validation->set_rules($cs->rules());

        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password)
            );

        // if($validation->run())
        // {
        //     $this->session->set_flashdata('danger', 'Password atau Email salah!');
        // }

        $user = $this->db->get($this->$cs);
        //$nama = $this->session->userdata('nama');
        $cek = $this->login2_model->cek_login("cs",$where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'id'       => $user->idcs,
                'nama'     => $user->nama,
                'email'    => $email,
                'password' => md5($password),
                'status'   => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(site_url("cs/dashboard"));
        }else{
            $this->session->set_flashdata('danger', 'Password atau Email salah!');
            $this->load->view("cs/login");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('cs/login'));
    }

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/profile');

    //     $cs = $this->login_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($pengelola->rules());

    //     if ($validation->run()){
    //         $pengelola->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["pengelola"] = $pengelola->getById($id);
    //     if (!$data["pengelola"]) show_404();

    //     $this->load->view("admin/profile", $data);
    // }

    // public function profile()
    // {
    //     $data["pengelola"] = $this->login_model -> get_by_id();
    //     $this->load->view("admin/profile", $data);
    // }

    // public function updateProfile()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     $id = $this->session->userdata('idpengelola');
    //     $data = array(
    //         'nama' => $this->input->post('nama'),
    //         'email' => $this->input->post('email'),
    //         'password' => $this->input->post('password'),
    //     );
    //     if ($this->form_validation->run() == true){
    //         $result = $this->login_model->update($data, $id);
    //         if($result > 0){
    //             $this->updateProfile();
    //             $this->session->set_flashdata('msg', show_succ_msg('Data Profil Berhasil diubah'));
    //             redirect('login/profile');
    //         }else{
    //             $this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
    //             redirect('login/profile');
    //         }
    //     }else{
    //         $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
    //         redirect('login/editProfile');
    //     }
    // }
    
    // public function updatePassword()
    // {
    //     $this->form_validation->set_rules('passLama', 'Password Lama', 'required');
    //     $this->form_validation->set_ruels('passBaru', 'Password Baru', 'required');
    //     $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'required');

    //     $id = $this->session->userdata('idpengelola');
    //     if($this->form_validation->run() == true){
    //         if(password_verfy($this->input->post('passLama'), $this->session->userdata('password'))) {
    //             if($this->input->post('passBaru') != $this->input->post('passKonf')){
    //                 $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
    //                 redirect('login/profile');
    //             }else{
    //                 $data = ['password' => get_hash($this->input->post('passBaru'))];
    //                 $result = $this->login_model->update($data, $id);
    //                 if($result = 0){
    //                     $this->updateProfile();
    //                     $this->session->set_flashdata('msg', show_err_msg('Password Berhasil diubah'));
    //                     redirect('login/profile');
    //                 }else{
    //                     $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
    //                     redirect('login/profile');
    //                 }
    //             }
    //         }else{
    //             $this->session->set_flashdata('msg', show_error_msg('Password Salah'));
    //             redirect('login/profile');
    //         }
    //     }else{
    //         $this->session->set_flashdata('msg', show_err_msg(validation_error()));
    //         redirect('login/profile');
    //     }
    // }
}