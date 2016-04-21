<?php

Class web_model extends CI_Model {

    function __constuct() {
        parent::__constuct();  // Call the Model constructor 
        loader::database();    // Connect to current database setting.
    }

    function data_about() {
        $this->db->select('*');
        $this->db->from('tb_front_about');
        return $this->db->get();
    }

    function data_logo() {
        $this->db->select('*');
        $this->db->from('tb_front_logo');
        return $this->db->get();
    }

    function data_footer() {
        $this->db->select('*');
        $this->db->from('tb_front_footer');
        return $this->db->get();
    }

//PORTOFOLIO


    function data_portofolio() {
        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');
        $data = $this->db->get('tb_front_portofolio');
        return $data->result();
    }

    function data_portofolio_home() {

        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');
        $this->db->limit('10');
        $data = $this->db->get('tb_front_portofolio');
        return $data->result();
    }

    function data_portofolio_kategori() {

        $this->db->select('*');
        $this->db->from('tb_kategori_portofolio');
        $this->db->order_by("kategori_portofolio");
        return $this->db->get();
    }

    function data_portofolio_detail($id_portofolio) {
        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');
        $this->db->where('id_portofolio', $id_portofolio);
        $data = $this->db->get('tb_front_portofolio');
        return $data->result();
    }

//BLOG
    function data_blog($sampai, $dari) {
        $this->db->join('tb_kategori_blog', 'tb_front_blog.id_kategori_blog = tb_kategori_blog.id_kategori_blog');
        $this->db->order_by("date");
        $data = $this->db->get('tb_front_blog', $sampai, $dari);
        return $data->result();
    }

    function data_blog_detail($id_blog) {
        $this->db->join('tb_kategori_blog', 'tb_front_blog.id_kategori_blog = tb_kategori_blog.id_kategori_blog');
        $this->db->where('id_blog', $id_blog);
        $data = $this->db->get('tb_front_blog');
        return $data->result();
    }

    function data_blog_kategori_list($sampai, $dari, $id_kat) {
        $this->db->where('id_kategori_blog', $id_kat);
        $data = $this->db->get('tb_front_blog', $sampai, $dari);
        return $data->result();
    }

    function blog_jumlah() {
        return $this->db->get('tb_front_blog')->num_rows();
    }

    function blog_jumlah_kategori($id_kat) {
        $this->db->where('id_kategori_blog', $id_kat);
        return $this->db->get('tb_front_blog')->num_rows();
    }

    function data_blog_home() {
        $this->db->select('*');
        $this->db->from('tb_front_blog');
        $this->db->order_by('date');
        $this->db->limit('3');
        return $this->db->get();
    }

    function data_blog_kategori() {
        $this->db->select('*');
        $this->db->from('tb_kategori_blog');
        $this->db->order_by("kategori");
        return $this->db->get();
    }

//BLOG--END
//    PAKET -- START

    function data_paket_home($idpaket) {
        $this->db->select('*');
        $this->db->from('m_paket_detail');
        $this->db->join('m_paket_header', 'm_paket_header.id_paket = m_paket_detail.id_paket');
        $this->db->join('m_barang', 'm_barang.id_barang = m_paket_detail.id_barang');
        $this->db->where('m_paket_detail.id_paket = ', $idpaket);

        return $this->db->get();
    }

    function data_paket_header_home($isHome) {
        $this->db->select('*');
        $this->db->from('m_paket_header');
        if ($isHome == TRUE) {
            $this->db->limit('3');
        }

        return $this->db->get();
    }

//    PAKET -- END
}

?>
