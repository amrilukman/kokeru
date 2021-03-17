<?php

defined('BASEPATH') OR exit('No direct sript access allowed');

class Pengerjaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengerjaan_model");
        $this->load->library('form_validation');
    }

}