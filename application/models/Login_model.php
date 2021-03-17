<?php

class Login_model extends CI_Model
{
    Private $_table = "pengelola";

    public $idpengelola;
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


    public function cek_login($pengelola,$where)
    {
        return $this->db->get_where($pengelola,$where);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idpengelola" => $id])->row();
    }

    // public function update($dana, $id)
    // {
    //     $this->db->where($this->id, $id);
    //     $this->db->update($this->table.pengelola);
    //     $this->email = $post["email"];
    //     $this->password = $post["password"];
    //     return $this->db->update($this->_table, $this, array('idpengelola' => $post['id']));
    // }

}