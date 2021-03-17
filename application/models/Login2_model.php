<?php

class Login2_model extends CI_Model
{
    Private $_table = "cs";

    public $idcs;
    public $email;
    public $password;
    public $nama;

    public function rules()
    {
        return[
            ['field' => 'email',
             'label' => 'Email',
             'rules' => 'required'],
            
            ['field' => 'password',
             'label' => 'Password',
             'rules' => 'required'],

            ['field' => 'nama',
             'label' => 'Nama',
             'rules' => 'required'],
        ]; 
    }

    public function cek_login($cs,$where)
    {
        return $this->db->get_where($cs,$where);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idcs" => $id])->row();
    }

    // public function update($dana, $id)
    // {
    //     $this->db->where($this->id, $id);
    //     $this->db->update($this->table.cs);
    //     $this->email = $post["email"];
    //     $this->password = $post["password"];
    //     return $this->db->update($this->_table, $this, array('idcs' => $post['id']));
    // }

}