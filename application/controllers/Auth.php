<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $data = array();

        if ($this->input->method() === 'post') {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->cari_by_email($email);

            if ($user && $user['password'] && password_verify($password, $user['password'])) {
                $this->session->set_userdata(array(
                    'id_user' => $user['id_user'],
                    'nama'    => $user['nama'],
                    'logged_in' => true,
                ));
                redirect('/');
                return;
            }

            $data['error'] = 'Email atau kata sandi salah.';
        }

        $data['halaman_aktif'] = '';
        $this->load->view('layout/header', $data);
        $this->load->view('auth/login', $data);
        $this->load->view('layout/footer');
    }

    public function register()
    {
        $data = array();

        if ($this->input->method() === 'post') {
            $email = $this->input->post('email');

            if ($this->User_model->cari_by_email($email)) {
                $data['error'] = 'Email sudah terdaftar. Silakan masuk.';
            } else {
                $this->User_model->daftar(array(
                    'nama'     => $this->input->post('nama'),
                    'email'    => $email,
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                ));
                $this->session->set_flashdata('registered', true);
                redirect('/auth/login');
                return;
            }
        }

        $data['halaman_aktif'] = '';
        $this->load->view('layout/header', $data);
        $this->load->view('auth/register', $data);
        $this->load->view('layout/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}