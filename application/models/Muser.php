<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
    public function fetch_rute()
    {
        // $this->db->order_by('rute_awal');
        $query = $this->db->get('rute_pesawat');
        return $query;
    }
    public function fetch_rutep()
    {
        // $this->db->order_by('rute_akhir');
        $query = $this->db->get('rute_pesawat');
        return $query;
    }
    public function cari_rute(array $rute)
    {
        $this->db->select('rute_pesawat.*, pesawat.id_pesawat AS id_pesawat, pesawat.nama');
        $this->db->join('pesawat', 'rute_pesawat.id_pesawat = pesawat.id_pesawat');
        $this->db->from('rute_pesawat');
        $this->db->like('rute_awal', $rute["rute_awal"]);
        $this->db->like('rute_akhir', $rute["rute_akhir"]);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_rutep()
    {

        $query = $this->db->get();
        return $query->result();
    }
    public function input_pen($data, $pins)
    {
        $this->db->insert('penumpang', $data, $pins);
    }
    public function get_penumpang()
    {
        $this->db->from('penumpang');
        $query = $this->db->get();
        return $query->result_array();
    }
}
