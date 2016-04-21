<?php

Class admin_model extends CI_Model {

    function __constuct() {
        parent::__constuct();  // Call the Model constructor 
        loader::database();    // Connect to current database setting.
    }

    function cek_data($username, $password) {
        $this->db->where('password', $password);
        $this->db->where('username', $username);
        return $this->db->get('tb_admin');
    }

    function tampil_user() {
        $this->db->select('*');
        $this->db->from('tb_admin');
        return $this->db->get();
    }

    function all_id() {
        $this->db->select('*');
        $this->db->from('tb_front_logo');
        $this->db->from('tb_front_about');
        $this->db->from('tb_front_slider');
        $this->db->from('tb_front_footer');
        $this->db->from('tb_admin');

        return $this->db->get();
    }

    //tangkap IDBLOG
    function id_blog() {
        $this->db->select('*');
        $this->db->from('tb_front_blog');
        return $this->db->get();
    }

    function id_portofolio() {
        $this->db->select('*');
        $this->db->from('tb_front_portofolio');
        return $this->db->get();
    }

    function data_about($id_about) {
        $this->db->select('*');
        $this->db->from('tb_front_about');
        $this->db->where('id_about', $id_about);
        return $this->db->get();
    }

    function data_logo($id_logo) {
        $this->db->select('*');
        $this->db->from('tb_front_logo');
        $this->db->where('id_logo', $id_logo);
        return $this->db->get();
    }

    function data_slider($id_slider) {
        $this->db->select('*');
        $this->db->from('tb_front_slider');
        $this->db->where('id_slider', $id_slider);
        return $this->db->get();
    }

    function data_footer($id_footer) {
        $this->db->select('*');
        $this->db->from('tb_front_footer');
        $this->db->where('id_footer', $id_footer);
        return $this->db->get();
    }

//KATEGORI
    function kategori_blog() {
        $this->db->select('*');
        $this->db->from('tb_kategori_blog');
        $this->db->order_by("kategori");
        return $this->db->get();
    }

//KATEGORI PORTOFOLIO
    function kategori_portofolio() {
        $this->db->select('*');
        $this->db->from('tb_kategori_portofolio');
        $this->db->order_by("kategori_portofolio");
        return $this->db->get();
    }

    function data_profile($id_profile) {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->where('id_admin', $id_profile);
        return $this->db->get(); //untuk tampil biasa
    }

    //PORTOFOLIO
    function data_portofolio() {
        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');
        $data = $this->db->get('tb_front_portofolio');
        return $data->result(); //result untuk while
    }

    function data_portofolio_id($id_portofolio) {
        $this->db->select('*');
        $this->db->from('tb_front_portofolio');
        $this->db->where('id_portofolio', $id_portofolio);
        return $this->db->get();
    }

    //BLOG

    function data_blog() {
        $this->db->join('tb_kategori_blog', 'tb_front_blog.id_kategori_blog = tb_kategori_blog.id_kategori_blog');
        $data = $this->db->get('tb_front_blog');
        return $data->result();
    }

    function data_blog_id($id_blog) {
        $this->db->select('*');
        $this->db->from('tb_front_blog');
        $this->db->where('id_blog', $id_blog);
        return $this->db->get();
    }

}
?>
 
