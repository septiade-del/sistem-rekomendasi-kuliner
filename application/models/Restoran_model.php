<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cari_dengan_filter($keyword = '', $kategori = '')
    {
        $this->db->select('id_restoran, restoran_id_csv, nama, kategori_utama, rating, jumlah_review, alamat');
        $this->db->from('restoran');

        if ($keyword !== '') {
            $this->db->like('nama', $keyword);
        }
        if ($kategori !== '') {
            $this->db->where('kategori_utama', $kategori);
        }
        $this->db->order_by('rating', 'DESC');

        return $this->db->get()->result_array();
    }

    public function daftar_kategori()
    {
        $this->db->distinct();
        $this->db->select('kategori_utama');
        $this->db->from('restoran');
        $this->db->where('kategori_utama IS NOT NULL');
        $this->db->order_by('kategori_utama', 'ASC');
        return $this->db->get()->result_array();
    }

    public function cari_by_restoran_id_csv($id)
    {
        $this->db->where('restoran_id_csv', $id);
        $query = $this->db->get('restoran');
        return $query->row_array();
    }
}