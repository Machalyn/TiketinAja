<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); //⟵⟵⟵ untuk memanggil validasi untuk register dan login
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Petugas';
            $this->load->view('templet/auth_header', $data);
            $this->load->view('login');
            $this->load->view('templet/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $petugas = $this->db->get_where('petugas', ['username' => $username])->row_array();

        if ($petugas) {
            //Jika user aktif
            if (password_verify($password, $petugas['password'])) {
                $data = [
                    'username' => $petugas['username'],
                    'id_level' => $petugas['id_level']
                ];
                $this->session->set_userdata($petugas);
                redirect('Kasir/index');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Salah</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Username Tidak Terdaftar</div>');
            redirect('Auth');
        }
    }

    public function register()
    { //untuk ngeset rules setiap field ↓↓↓↓↓
        $this->form_validation->set_rules('nama', 'nama', 'required|trim'); //requieredtrim untuk mencegah adanya spasi
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[petugas.username]', [
            'is_unique' => 'username sudah terpakai coba lagi yang lain'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Petugas';
            $this->load->view('templet/auth_header', $data);
            $this->load->view('register');
            $this->load->view('templet/auth_footer');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_level' => 2 //anggap defaultnya itu kasir

            ];
            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Register Berhasil! silahkan login</div>');
            redirect('Auth');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda SUdah Logout</div>');
        redirect('Auth');
    }
}
