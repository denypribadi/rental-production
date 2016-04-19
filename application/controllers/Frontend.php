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
        $data['data_about'] = $this->web_model->data_about();
        $data['data_logo'] = $this->web_model->data_logo();
        $data['data_blog_home'] = $this->web_model->data_blog_home();
        $data['data_footer'] = $this->web_model->data_footer();
        $data['data_portofolio_home'] = $this->web_model->data_portofolio_home();
        $data['active_menu'] = 'home';
        $this->load->view('frontend/bg_frontend_home_header', $data);
        $this->load->view('frontend/bg_frontend_home_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    //PORTOFOLIO
    function portofolio() {
        $data['data_portofolio_kategori'] = $this->web_model->data_portofolio_kategori();
        $data['data_logo'] = $this->web_model->data_logo();
        $data['data_footer'] = $this->web_model->data_footer();
        $data['data_portofolio'] = $this->web_model->data_portofolio();
        $this->load->view('frontend/bg_frontend_portofolio_header', $data);
        $this->load->view('frontend/bg_frontend_portofolio_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function portofolio_detail() {
        $id_portofolio = $this->uri->segment('3');
        $data['data_logo'] = $this->web_model->data_logo();
        $data['data_footer'] = $this->web_model->data_footer();
        $data['data_portofolio_detail'] = $this->web_model->data_portofolio_detail($id_portofolio);
        $this->load->view('frontend/bg_frontend_portofolio_header', $data);
        $this->load->view('frontend/bg_frontend_portofoliodetail_index', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    //BLOG

    function blog() {
        $data['data_blog_kategori'] = $this->web_model->data_blog_kategori();
        $data['data_logo'] = $this->web_model->data_logo();
        $data['data_footer'] = $this->web_model->data_footer();

        $jumlah = $this->web_model->blog_jumlah();

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
        $config['per_page'] = 2;   //limit nya brpp disini gans
        $dari = $this->uri->segment('3');
        $this->pagination->initialize($config);
        $data['data_blog'] = $this->web_model->data_blog($config['per_page'], $dari);
        $this->load->view('frontend/bg_frontend_blog_header', $data);
        $this->load->view('frontend/bg_frontend_blog_index', $data);
        $this->load->view('frontend/bg_frontend_blog_sidebar', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function blog_kategori() {
        $id_kat = $this->uri->segment('3');
        $data['data_blog_kategori'] = $this->web_model->data_blog_kategori();
        $data['data_logo'] = $this->web_model->data_logo();
        $data['data_footer'] = $this->web_model->data_footer();
        $jumlah = $this->web_model->blog_jumlah_kategori($id_kat);

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
        $config['per_page'] = 2;   //limit nya brpp disini gans
        $dari = $this->uri->segment('4');
        $this->pagination->initialize($config);
        $data['data_blog_kategori_list'] = $this->web_model->data_blog_kategori_list($config['per_page'], $dari, $id_kat);
        $this->load->view('frontend/bg_frontend_blog_header', $data);
        $this->load->view('frontend/bg_frontend_blog_kategori', $data);
        $this->load->view('frontend/bg_frontend_blog_sidebar', $data);

        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

    function blog_detail() {
        $id_blog = $this->uri->segment('3');
        $data['data_blog_kategori'] = $this->web_model->data_blog_kategori();
        $data['data_logo'] = $this->web_model->data_logo();
        $data['data_footer'] = $this->web_model->data_footer();
        $data['data_blog_detail'] = $this->web_model->data_blog_detail($id_blog);
        $this->load->view('frontend/bg_frontend_blog_header', $data);
        $this->load->view('frontend/bg_frontend_blogdetail_index', $data);
        $this->load->view('frontend/bg_frontend_blog_sidebar', $data);
        $this->load->view('frontend/bg_frontend_home_footer', $data);
    }

}

?>