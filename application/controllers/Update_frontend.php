<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Update_frontend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'html', 'form'));
    }

//ABOUT COMPANY
    function upload() {
        $id_about = $this->uri->segment(3);
        $config = array(
            'upload_path' => './assets/company/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $ket = $this->input->post('ket');
            $tgl = date('Y-m-d H:i:s');
            $about = $this->input->post('about');
            $gambar_lama = $this->input->post('gambar_lama');
            $sub_about1 = $this->input->post('sub_about1');
            $sub_about2 = $this->input->post('sub_about2');
            $sub_about3 = $this->input->post('sub_about3');
            $titlenya = $this->input->post('titlenya');
            unlink("./assets/company/$gambar_lama");

            $this->db->where('id_about', $id_about);
            $this->db->update('tb_front_about', array(
                'about' => $about,
                'sub_about1' => $sub_about1,
                'sub_about2' => $sub_about2,
                'sub_about3' => $sub_about3,
                'subject_about' => $titlenya,
                'img_about' => $file));
            redirect('admin/about/' . $id_about . '');
        }
    }

//LOGO
    function upload_logo() {
        $id_logo = $this->uri->segment(3);
        $config = array(
            'upload_path' => './assets/company/logo/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $ket = $this->input->post('ket');
            $tgl = date('Y-m-d H:i:s');
            $gambar_lama = $this->input->post('gambar_lama');
            unlink("./assets/company/logo/$gambar_lama");

            $this->db->where('id_logo', $id_logo);
            $this->db->update('tb_front_logo', array(
                'logo' => $file));
            redirect('admin/logo/' . $id_logo . '');
        }
    }

    //PROFILE ADMIN
    function update_profile() {
        $id_profile = $this->uri->segment(3);
        $config = array(
            'upload_path' => './assets/avatar/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $tgl = date('Y-m-d H:i:s');
            $gambar_lama = $this->input->post('gambar_lama');
            unlink("./assets/avatar/$gambar_lama");

            $this->db->where('id_admin', $id_profile);
            $this->db->update('tb_admin', array(
                'username' => $username,
                'password' => $password,
                'avatar' => $file));
            redirect('admin/logout/');
        }
    }

    //BLOG FRONTEND
    function insert_blog() {

        $config = array(
            'upload_path' => './assets/img_blog/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $pengirim = $this->input->post('pengirim');
            $deskripsi_blog = $this->input->post('deskripsi_blog');
            $tgl = date('Y-m-d');

            $this->db->insert('tb_front_blog', array(
                'judul' => $judul,
                'desc' => $deskripsi_blog,
                'id_kategori_blog' => $kategori,
                'gambar' => $file,
                'pengirim' => $pengirim,
                'status' => 1,
                'date' => $tgl));
            redirect('admin/blog');
        }
    }

    //BLOG FRONTEND
    function update_blog() {
        $id_blog = $this->uri->segment(3);
        $config = array(
            'upload_path' => './assets/img_blog/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $pengirim = $this->input->post('pengirim');
            $deskripsi_blog = $this->input->post('deskripsi_blog');
            $tgl = date('Y-m-d');
            $gambar_lama = $this->input->post('gambar_lama');

            unlink("./assets/img_blog/$gambar_lama");

            $this->db->where('id_blog', $id_blog);
            $this->db->update('tb_front_blog', array(
                'judul' => $judul,
                'desc' => $deskripsi_blog,
                'id_kategori_blog' => $kategori,
                'gambar' => $file,
                'pengirim' => $pengirim,
                'status' => 1,
                'date' => $tgl));
            redirect('admin/blog/');
        }
    }

//PORTOFOLIO FRONTEND
    function insert_portofolio() {

        $config = array(
            'upload_path' => './assets/img_portofolio/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $judul_portofolio = $this->input->post('judul_portofolio');
            $kategori_portofolio = $this->input->post('kategori_portofolio');
            $client_portofolio = $this->input->post('client_portofolio');
            $desc_portofolio = $this->input->post('desc_portofolio');
            $tgl = date('Y-m-d');

            $this->db->insert('tb_front_portofolio', array(
                'judul' => $judul_portofolio,
                'desc' => $desc_portofolio,
                'id_kategori_portofolio' => $kategori_portofolio,
                'img_portofolio' => $file,
                'client' => $client_portofolio));
            redirect('admin/portofolio');
        }
    }

    //UPDATE PORTOFOLIO FRONTEND
    function update_portofolio() {
        $id_portofolio = $this->uri->segment(3);
        $config = array(
            'upload_path' => './assets/img_portofolio/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $judul_portofolio = $this->input->post('judul_portofolio');
            $kategori_portofolio = $this->input->post('kategori_portofolio');
            $client_portofolio = $this->input->post('client_portofolio');
            $desc_portofolio = $this->input->post('desc_portofolio');
            $tgl = date('Y-m-d');
            $gambar_lama = $this->input->post('gambar_lama');

            unlink("./assets/img_portofolio/$gambar_lama");

            $this->db->where('id_portofolio', $id_portofolio);
            $this->db->update('tb_front_portofolio', array(
                'judul' => $judul_portofolio,
                'desc' => $desc_portofolio,
                'id_kategori_portofolio' => $kategori_portofolio,
                'img_portofolio' => $file,
                'client' => $client_portofolio));
            redirect('admin/portofolio/');
        }
    }

    //SLIDER FRONTEND

    function upload_slider() {
        $id_slider = $this->uri->segment(3);
        $config = array(
            'upload_path' => './assets/company/', //lokasi gambar akan di simpan
            'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
            'max_size' => '2000', //batas maksimal ukuran gambar
            'file_name' => url_title($this->input->post('userfile')) //nama gambar
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $file = $this->upload->file_name;
            $subject = $this->input->post('subject');
            $sub_subject = $this->input->post('sub_subject');
            $tgl = date('Y-m-d H:i:s');
            $gambar_lama = $this->input->post('gambar_lama');
            unlink("./assets/company/$gambar_lama");

            $this->db->where('id_slider', $id_slider);
            $this->db->update('tb_front_slider', array(
                'slider' => $file,
                'subject' => $subject,
                'sub_subject' => $sub_subject));
            redirect('admin/slider/' . $id_slider . '');
        }
    }

}

?>