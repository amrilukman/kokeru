<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    private $_table = "pengelola";

    public $idpengelola;
    public $nama;
    public $email;
    public $password;

    public function rules()
    {
        return[
            ['field' => 'idpengelola',
             'label' => 'ID',
             'rules' => 'required'],

            ['field' => 'nama',
             'label' => 'Nama',
             'rules' => 'required'],

            ['field' => 'email',
             'label' => 'Email',
             'rules' => 'required'],

             ['field' => 'password',
             'label' => 'Password',
             'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idpengelola" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idpengelola = $post["idpengelola"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idpengelola = $post["idpengelola"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('idpengelola' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idpengelola" => $id));
    }
}