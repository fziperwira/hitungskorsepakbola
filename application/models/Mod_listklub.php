<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_listklub extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAllNamaKlub()
    {
        $query = $this->db->query("SELECT * FROM daftar_klub_bola ORDER BY id_klub ASC");
        return $query->result();
    }

    public function get_by_id($id)
    {
        $this->db->from('daftar_klub_bola');
        $this->db->where('id_klub', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert('daftar_klub_bola', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('daftar_klub_bola', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id_klub', $id);
        $this->db->delete('daftar_klub_bola');
    }
}