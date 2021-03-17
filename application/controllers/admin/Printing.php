<?php

defined('BASEPATH') OR exit('No direct sript access allowed');

class Printing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengerjaan_model");
        $this->load->library('form_validation');
        $this->load->model("print_model");
        if($this->session->userdata('status') != "login"){
			redirect(site_url('admin/login'));
        }
    }
    
    public function index()
    {
        $data["pengerjaan"] = $this->pengerjaan_model -> get_by_role();
        $this->load->view("admin/print/list", $data);
    }

    public function edit($id = null)
    {
        //echo site_url('admin/cs/edit/'.$cs->idcs)
        if (!isset($id)) redirect('admin/pengerjaan');

        $pengerjaan = $this->print_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengerjaan->rules());

        if ($validation->run()){
            $pengerjaan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pengerjaan"] = $pengerjaan->getById($id);
        if (!$data["pengerjaan"]) show_404();

        $this->load->view("admin/cs/print", $data);
    }

    public function pdf(){
        $this->load->library('dompdf_gen');

        $data["pengerjaan"] = $this->pengerjaan_model -> get_by_role();

        $this->load->view('admin/print/laporan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_kebersihan.pdf", array('Attachment' =>0));
    }

    public function excel(){
        $data['title'] = 'Laporan Excel';
        $data["pengerjaan"] = $this->pengerjaan_model -> get_by_role();
        $this->load->view("admin/print/excel", $data);
    }

    public function mpdf(){
        $mpdf = new \Mpdf\Mpdf();
        $datapengerjaan = $this->pengerjaan_model -> get_by_role();
        $data = $this->load->view('admin/print/laporan_pdf',['pengerjaan' => $datapengerjaan] ,   TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }
}