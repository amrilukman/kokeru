<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_model extends CI_model
{
    private $_table = "pengerjaan";

    public $idpengerjaan;
    public $idcs;
    public $idruang;
    public $tglpengerjaan;
    public $status;
    public $dokumentasi_1;
    public $dokumentasi_2;
    public $dokumentasi_3;
    public $dokumentasi_4;
    public $dokumentasi_5;

    public function rules()
    {
        return[
            ['field' => 'idcs',
             'label' => 'Karyawan',
             'rules' => 'required'],

            ['field' => 'idruang',
             'label' => 'Ruang',
             'rules' => 'required'],

            ['field' => 'tglpengerjaan',
             'label' => 'Tanggal',
             'rules' => 'required'],

            ['filed' => 'status',
             'label' => 'Status',
             'rules' => 'required'],

            ['field' => 'dokumentasi_1',
             'label' => 'Dokumentasi 1'],

            ['field' => 'dokumentasi_2',
             'label' => 'Dokumentasi 2'],

            ['field' => 'dokumentasi_3',
             'label' => 'Dokumentasi 3'],

            ['field' => 'dokumentasi_4',
             'label' => 'Dokumentasi 4'],

            ['field' => 'dokumentasi_5',
             'label' => 'Dokumentasi 5'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idpengerjaan" => $id])->row();
    }

    public function get_by_role()
    {

// $this->db->select('t1.name, t2.something, t3.another')
//      ->from('table1 as t1')
//      ->where('t1.id', $id)
//      ->join('table2 as t2', 't1.id = t2.id', 'LEFT')
//      ->join('table3 as t3', 't1.id = t3.id', 'LEFT')
//      ->get();
        $this->db->select('*');
        $this->db->from('pengerjaan');
        $this->db->join('ruangan', 'ruangan.idruang = pengerjaan.idruang');
        $this->db->join('cs', 'cs.idcs = pengerjaa  n.idcs');
        $query = $this->db->get();
        return $query->result();
    }
}