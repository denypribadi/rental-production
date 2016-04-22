<?php

class Frontend extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    //INDEX FRONTEND
    function index() {
        $data['data_about'] = $this->Web_model->data_about();
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_paket_home_header'] = $this->Web_model->data_paket_header_home(TRUE);
        $data['data_footer'] = $this->Web_model->data_footer();
        $data['data_portofolio_home'] = $this->Web_model->data_portofolio_home();
        $data['active_menu'] = 'home';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_home_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    //PORTOFOLIO
    function portofolio() {
        $data['data_portofolio_kategori'] = $this->Web_model->data_portofolio_kategori();
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();
        $data['data_portofolio'] = $this->Web_model->data_portofolio();
        $data['active_menu'] = 'portofolio';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_portofolio_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function portofolio_detail() {
        $id_portofolio = $this->uri->segment('3');
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();
        $data['data_portofolio_detail'] = $this->Web_model->data_portofolio_detail($id_portofolio);
        $data['active_menu'] = 'portofolio';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_portofoliodetail_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    //BLOG

    function blog() {
        $data['data_blog_kategori'] = $this->Web_model->data_blog_kategori();
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();

        $jumlah = $this->Web_model->blog_jumlah();

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['base_url'] = base_url() . 'frontend/blog';
        $config['total_rows'] = $jumlah;
        $config['per_page'] = 2;  // gambar per page
        $dari = $this->uri->segment('3');
        $this->pagination->initialize($config);
        $data['data_blog'] = $this->Web_model->data_blog($config['per_page'], $dari);
        $data['active_menu'] = 'produk';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_blog_index', $data);
        $this->load->view('frontend/bg_frontend_blog_sidebar', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function blog_kategori() {
        $id_kat = $this->uri->segment('3');
        $data['data_blog_kategori'] = $this->Web_model->data_blog_kategori();
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();
        $jumlah = $this->Web_model->blog_jumlah_kategori($id_kat);

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['uri_segment'] = 4;
        $config['base_url'] = base_url() . 'frontend/blog_kategori/' . $id_kat . '';
        $config['total_rows'] = $jumlah;
        $config['per_page'] = 2;   // gambar per page
        $dari = $this->uri->segment('4');
        $this->pagination->initialize($config);
        $data['data_blog_kategori_list'] = $this->Web_model->data_blog_kategori_list($config['per_page'], $dari, $id_kat);
        $data['active_menu'] = 'produk';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_blog_kategori', $data);
        $this->load->view('frontend/bg_frontend_blog_sidebar', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function blog_detail() {
        $id_blog = $this->uri->segment('3');
        $data['data_blog_kategori'] = $this->Web_model->data_blog_kategori();
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();
        $data['data_blog_detail'] = $this->Web_model->data_blog_detail($id_blog);
        $data['active_menu'] = 'produk';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_blogdetail_index', $data);
        $this->load->view('frontend/bg_frontend_blog_sidebar', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function paket() {
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();
        $data['data_paket_home_header'] = $this->Web_model->data_paket_header_home(FALSE);
        $data['active_menu'] = 'paket';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_paket_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function orderPage() {
        $data['data_logo'] = $this->Web_model->data_logo();
        $data['data_footer'] = $this->Web_model->data_footer();
        $data['data_paket_home_header'] = $this->Web_model->data_paket_header_home(FALSE);
        $data['active_menu'] = 'order';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_order_page', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function insertOrder() {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $hp = $this->input->post('nohp');
        $email = $this->input->post('email');
        $acara = $this->input->post('acara');
        $paket = $this->input->post('paket');
        if ($paket == '--Pilih Paket--') {
            $paket = null;
        }
        $custom_item = $this->input->post('produk');
        $date = date('Y-m-d H:i:s');

        $this->db->insert('t_order', array(
            'nama' => $nama,
            'alamat' => $alamat,
            'kota' => $kota,
            'nohp' => $hp,
            'email' => $email,
            'acara' => $acara,
            'paket_header' => $paket,
            'custom_item' => $custom_item,
            'date' => $date));
        $this->sendMail($nama, $alamat, $kota, $hp, $email, $acara, $paket, $custom_item, $date);
    }

    function sendMail($nama, $alamat, $kota, $hp, $email, $acara, $paket, $custom_item, $date) {
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.googlemail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "ramdanahmad197@gmail.com";
        $config['smtp_pass'] = "qwerty0123";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $pesan = '<tr><td witdh="20">Nama</td><td width="10">:</td><td width="570">' . $nama . '</td></tr>';
        $pesan .= '<tr><td>Alamat</td><td>:</td><td>' . $alamat . '</td></tr>';
        $pesan .= '<tr><td>Kota</td><td>:</td><td>' . $kota . '</td></tr>';
        $pesan .= '<tr><td>No HP</td><td>:</td><td>' . $hp . '</td></tr>';
        $pesan .= '<tr><td>Email</td><td>:</td><td>' . $email . '</td></tr>';
        $pesan .= '<tr><td>Untuk Acara</td><td>:</td><td>' . $acara . '</td></tr>';
        $pesan .= '<tr><td>Paket</td><td>:</td><td>' . $paket . '</td></tr>';
        $pesan .= '<tr><td>Custom Item</td><td>:</td><td>' . $custom_item . '</td></tr>';
        $pesan .= '<tr><td>Date</td><td>:</td><td>' . date("d M Y", strtotime($date)) . '</td></tr>';

        $ci->email->initialize($config);

        $ci->email->from('ramdanahmad197@gmail.com', 'Rental Multimedia');
        $list = array('denypribadi678@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('Order Service');
        $ci->email->message($pesan);
        if ($this->email->send()) {
            echo 'Email sent.';
            sleep(3);
            redirect(base_url());
        } else {
            show_error($this->email->print_debugger());
        }
    }

}

?>