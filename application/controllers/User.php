<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Muser'); //ngeload model nya, bisa juga buat setting database
        $this->load->library('form_validation'); //⟵⟵⟵ untuk memanggil validasi untuk register dan login

    }
    public function index()
    {
        $this->load->view('templet/auth_header_user');
        $this->load->view('templet/auth_footer');
        $this->load->view('login_user');
    }
    public function register()
    {
        $this->load->view('templet/auth_header_user');
        $this->load->view('templet/auth_footer');
        $this->load->view('register_user');
    }
    public function laman_utama()
    {
        $data['rute_awal']  = $this->Muser->fetch_rute()->result(); //<-- Function for combobox input 
        $data['rutep'] = $this->Muser->fetch_rutep()->result();
        $this->load->view('user/dashboard', $data);
    }
    public function search()
    {
        $this->load->library('form_validation'); //⟵⟵⟵ untuk memanggil validasi untuk register dan login
        $this->form_validation->set_rules('rute_awal', 'rute_awal', 'required');
        $this->form_validation->set_rules('rute_akhir', 'rute_akhir', 'required|callback_notmatch[rute_awal]');


        $rute_awal = $this->input->get('rute_awal');
        $rute_akhir = $this->input->get('rute_akhir');
        $rute = [
            'rute_awal' => $rute_awal,
            'rute_akhir' => $rute_akhir,
        ];
        $data['rutew'] = $this->Muser->cari_rute($rute);


        $this->load->view('user/2nd_page', $data);
    }

    public function Pilih()
    {
        $this->load->view('user/mesen_pesawat');
    }
    // INPUT DATA PENUMPANG
    public function input_pen()
    {
        $data = array(
            'id_penumpang' => $this->input->post('id_penumpang'),
            'nama_penumpang' => $this->input->post('nama_penumpang'),
            'telpon' => $this->input->post('telpon'),
            'title' => $this->input->post('title'),

        );

        $this->db->where('id_penumpang', $_POST['id_penumpang']);
        $proses = $this->Muser->input_pen($data);
        redirect('user/Uwu');
    }
    public function Uwu()
    {
        $data['coba'] = $this->Muser->get_penumpang();
        $this->load->view('user/3rd_page', $data);
    }
}
