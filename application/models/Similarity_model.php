<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Similarity_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function top_mirip($id_restoran, $metode = 'cosine', $limit = 5)
    {
        $kolom_map = array(
            'cosine'    => 'skor_cosine',
            'euclidean' => 'skor_euclidean',
            'jaccard'   => 'skor_jaccard',
        );
        $kolom_skor = isset($kolom_map[$metode]) ? $kolom_map[$metode] : 'skor_cosine';

        $sql = "
            SELECT r.restoran_id_csv, r.nama, r.kategori_utama, r.rating, r.jumlah_review, r.alamat, s.$kolom_skor AS skor
            FROM similarity_score s
            JOIN restoran r ON r.restoran_id_csv = s.id_restoran_2
            WHERE s.id_restoran_1 = ?
            ORDER BY s.$kolom_skor DESC
            LIMIT ?
        ";
        $query = $this->db->query($sql, array($id_restoran, $limit));
        return $query->result_array();
    }
}