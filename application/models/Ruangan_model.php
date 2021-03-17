<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_model extends CI_Model
{
    private $_table = "ruangan";

    public $idruang;
    public $noruang;
    public $lantai;
    public $gedung;

    public function rules()
    {
        return[
            ['field' => 'noruang',
            'label' => 'No Ruang',
            'rules' => 'required'],

            ['field' => 'lantai',
            'label' => 'Lantai',
            'rules' => 'required'],

            ['field' => 'gedung',
            'label' => 'Gedung',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idruang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->noruang = $post["noruang"];
        $this->lantai = $post["lantai"];
        $this->gedung = $post["gedung"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->noruang = $post["noruang"];
        $this->lantai = $post["lantai"];
        $this->gedung = $post["gedung"];
        return $this->db->update($this->_table, $this, array('idruang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idruang" => $id));
    }
}