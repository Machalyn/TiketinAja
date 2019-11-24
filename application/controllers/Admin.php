<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m'); //ngeload model nya, bisa juga buat setting database

    }
    public function index()
    {
        $data['ucer']  = $this->Admin_m->fetch_user(); //<-- Function for combobox input 
        $data['user'] = $this->Admin_m->get_user();
        $this->load->view('admin/dashboard', $data);
    }
    public function hapus_user($id)
    {
        $proses = $this->Admin_m->hapus_us($id);
        redirect('Admin/index');
    }
    public function edit_user()
    {
        $data = array(
            'id_petugas' => $this->input->post('id_petugas'),
            'nama_petugas' => $this->input->post('nama_petugas'),
            'username' => $this->input->post('username'),
            'id_level' => $this->input->post('id_level'),

        );

        $this->db->where('id_petugas', $_POST['id_petugas']);
        $this->db->update('petugas', $data);
        redirect('Admin/index');
    }

    // C O N T R O L L E R FUNCTION FOR PESAWAT
    public function Pesawat()
    {
        $data['pesawat'] = $this->Admin_m->get_pesawat();
        $this->load->view('admin/pesawat', $data);
    }
    public function input_p()
    {
        $id_pesawat = htmlspecialchars($this->input->post('id_pesawat', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $jumlah_kursi = htmlspecialchars($this->input->post('jumlah_kursi', true));

        $data = array(
            'id_pesawat' => $id_pesawat,
            'nama' => $nama,
            'jumlah_kursi' => $jumlah_kursi
        );
        $this->Admin_m->input_pes($data, 'pesawat');
        redirect('admin/pesawat');
    }
    public function hapus_p($id)
    {
        $proses = $this->Admin_m->hapus_pes($id);
        redirect('admin/pesawat');
    }
    public function edit_p()
    {

        $data = array(
            'id_pesawat' => $this->input->post('id_pesawat'),
            'nama' => $this->input->post('nama'),
            'jumlah_kursi' => $this->input->post('jumlah_kursi'),

        );

        $this->db->where('id_pesawat', $_POST['id_pesawat']);
        $this->db->update('pesawat', $data);
        redirect('admin/pesawat');
    }
    // E N D OF  Pesawat
    // C O N T R O L L E R RUTE P E S A W A T
    public function Rute_pesawat()
    {
        $data['pecawat']  = $this->Admin_m->fetch_pesawat(); //<-- Function for combobox input 
        $data['rutep'] = $this->Admin_m->get_rutep();
        $this->load->view('admin/Rute_pesawat', $data);
    }
    public function input_rp()
    {
        $data = array(
            'id_rute' => $this->input->post('id_rute'),
            'rute_awal' => $this->input->post('rute_awal'),
            'rute_akhir' => $this->input->post('rute_akhir'),
            'harga' => $this->input->post('harga'),
            'id_pesawat' => $this->input->post('id_pesawat'),
            'jam_berangkat' => $this->input->post('jam_berangkat'),
            'jam_tiba' => $this->input->post('jam_tiba'),

        );

        $this->db->where('id_rute', $_POST['id_rute']);
        $proses = $this->Admin_m->input_rutep($data);
        redirect('admin/Rute_pesawat');
    }
    public function hapus_rp($id)
    {
        $proses = $this->Admin_m->hapus_rup($id);
        redirect('admin/Rute_pesawat');
    }
    public function edit_rutep()
    {
        $data = array(
            'id_rute' => $this->input->post('id_rute'),
            'rute_awal' => $this->input->post('rute_awal'),
            'rute_akhir' => $this->input->post('rute_akhir'),
            'harga' => $this->input->post('harga'),
            'id_pesawat' => $this->input->post('id_pesawat'),
            'jam_berangkat' => $this->input->post('jam_berangkat'),
            'jam_tiba' => $this->input->post('jam_tiba'),


        );

        $this->db->where('id_rute', $_POST['id_rute']);
        $this->db->update('rute_pesawat', $data);
        redirect('admin/Rute_pesawat');
    }
    // E N D OF RUTE Pesawat
    // C O N T R O L L E R FUNCTION FOR KERETA
    public function Kereta()
    {
        $data['kereta'] = $this->Admin_m->get_kereta();
        $this->load->view('admin/Kereta', $data);
    }
    public function input_ker()
    {
        $data = array(
            'id_kereta' => $this->input->post('id_kereta'),
            'nama_k' => $this->input->post('nama_k'),
            'kursi' => $this->input->post('kursi'),

        );

        $this->db->where('id_kereta', $_POST['id_kereta']);
        $proses = $this->Admin_m->input_ker($data);
        redirect('admin/kereta');
    }
    public function hapus_k($id)
    {
        $proses = $this->Admin_m->hapus_k($id);
        redirect('admin/Kereta');
    }
    public function edit_k()
    {
        $data = array(
            'id_kereta' => $this->input->post('id_kereta'),
            'nama_k' => $this->input->post('nama_k'),
            'kursi' => $this->input->post('kursi'),


        );

        $this->db->where('id_kereta', $_POST['id_kereta']);
        $this->db->update('kereta', $data);
        redirect('admin/Kereta');
    }
    // E N D OF Kereta
    // C O N T R O L L E R FUNCTION FOR RUTE KERETA
    public function Rute_kereta()
    {
        $data['keyeta']  = $this->Admin_m->fetch_kereta(); //<-- Function for combobox input 
        $data['rutek'] = $this->Admin_m->get_rutek();
        $this->load->view('admin/Rute_kereta', $data);
    }
    public function input_rk()

    {
        $data = array(
            'id_rutek' => $this->input->post('id_rutek'),
            'first_route' => $this->input->post('first_route'),
            'last_route' => $this->input->post('last_route'),
            'price' => $this->input->post('price'),
            'id_kereta' => $this->input->post('id_kereta'),
        );

        $this->db->where('id_rutek', $_POST['id_rutek']);
        $proses = $this->Admin_m->input_rutek($data);
        redirect('admin/Rute_kereta');
    }
    public function hapus_rk($id)
    {
        $proses = $this->Admin_m->hapus_rk($id);
        redirect('admin/Rute_kereta');
    }
    public function edit_rutek()
    {
        $data = array(
            'id_rutek' => $this->input->post('id_rutek'),
            'first_route' => $this->input->post('first_route'),
            'last_route' => $this->input->post('last_route'),
            'price' => $this->input->post('price'),
            'id_kereta' => $this->input->post('id_kereta'),


        );

        $this->db->where('id_rutek', $_POST['id_rutek']);
        $this->db->update('rute_kereta', $data);
        redirect('admin/Rute_kereta');
    }
    // E N D OF RUTE KERETA
    // C O N T R O L L E R FUNCTION FOR PELANGGAN
    public function Penumpang()
    {
        $data['penumpang'] = $this->Admin_m->get_penumpang();
        $this->load->view('admin/Penumpang', $data);
    }
}
