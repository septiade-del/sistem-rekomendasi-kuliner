<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Restoran_model');
        $this->load->model('Similarity_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $keyword = $this->input->get('keyword') ? $this->input->get('keyword') : '';
        $kategori = $this->input->get('kategori') ? $this->input->get('kategori') : '';

        $data['restoran_list'] = $this->Restoran_model->cari_dengan_filter($keyword, $kategori);
        $data['kategori_list'] = $this->Restoran_model->daftar_kategori();
        $data['keyword'] = $keyword;
        $data['filter_kategori'] = $kategori;
        $data['halaman_aktif'] = 'beranda';

        $this->load->view('layout/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail($id)
    {
        $resto = $this->Restoran_model->cari_by_restoran_id_csv($id);
        if (!$resto) {
            redirect('/');
            return;
        }

        $metode = $this->input->get('metode') ? $this->input->get('metode') : 'cosine';
        $rekomendasi = $this->Similarity_model->top_mirip($id, $metode, 5);

        $data['resto'] = $resto;
        $data['rekomendasi'] = $rekomendasi;
        $data['metode'] = $metode;
        $data['halaman_aktif'] = '';

        $this->load->view('layout/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('layout/footer');
    }
}