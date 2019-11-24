<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function get_user()
    {

        $this->db->from('petugas');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function hapus_us($id_petugas)
    {
        $this->db->where('id_petugas', $id_petugas);
        $query = $this->db->delete('petugas');
    }
    public function fetch_user() // <-- FOR COMBOBOX INPUT
    {
        $this->db->order_by('nama_level');
        $query = $this->db->get('level');

        return $query->result_array();
    }

    // MODEL P E S A W A T

    public function get_pesawat()
    {

        $this->db->from('pesawat');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function input_pes($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function hapus_pes($id_pesawat)
    {
        $this->db->where('id_pesawat', $id_pesawat);
        $query = $this->db->delete('pesawat');
    }
    public function simpan_p($data)
    {
        $this->db->insert('pesawat', $data);
    }
    //END MODEL PESWAT
    // MODEL RUTE  P E S A W A T
    public function get_rutep()
    {

        $this->db->select('rute_pesawat.*, pesawat.id_pesawat AS id_pesawat, pesawat.nama');
        $this->db->join('pesawat', 'rute_pesawat.id_pesawat = pesawat.id_pesawat');
        $this->db->from('rute_pesawat');
        $query = $this->db->get();
        return $query->result();
    }
    public function fetch_pesawat() // <-- FOR COMBOBOX INPUT
    {
        $this->db->order_by('nama');
        $query = $this->db->get('pesawat');

        return $query->result_array();
    }
    public function input_rutep($data)
    {
        $this->db->insert('rute_pesawat', $data);
    }
    public function hapus_rup($id_rute)
    {
        $this->db->where('id_rute', $id_rute);
        $query = $this->db->delete('rute_pesawat');
    }
    //END MODEL R U T E PESWAT
    // MODEL KERETA
    public function get_kereta()
    {

        $this->db->from('kereta');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function input_ker($data)
    {
        $this->db->insert('kereta', $data);
    }
    public function hapus_k($id_kereta)
    {
        $this->db->where('id_kereta', $id_kereta);
        $query = $this->db->delete('kereta');
    }
    //END MODEL KERETA
    // MODEL  R U T E kereta
    public function get_rutek()
    {
        $this->db->select('rute_kereta.*, kereta.id_kereta AS id_kereta, kereta.nama_k');
        $this->db->join('kereta', 'rute_kereta.id_kereta = kereta.id_kereta');
        $this->db->from('rute_kereta');
        $query = $this->db->get();
        return $query->result();
    }
    public function fetch_kereta() // <-- FOR COMBOBOX INPUT
    {
        $this->db->order_by('nama_k');
        $query = $this->db->get('kereta');

        return $query->result_array();
    }
    public function input_rutek($data)
    {
        $this->db->insert('rute_kereta', $data);
    }
    public function hapus_rk($id_rutek)
    {
        $this->db->where('id_rutek', $id_rutek);
        $query = $this->db->delete('rute_kereta');
    }
    //END MODEL R U T E PESWAT
    // MODEL  PENUMPANG
    public function get_penumpang()
    {

        $this->db->from('penumpang');
        $query = $this->db->get();
        return $query->result_array();
    }
}
