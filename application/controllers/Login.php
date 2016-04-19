<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('security', 'url'));
    }

    function index() {
        $this->load->view('admin/bg_login');
    }

    function cek_login() {
        $username = $this->input->post('username');
        $password = ($this->input->post('password'));
        $ex['i'] = $this->Admin_model->cek_data($username, $password);
        $r = $ex['i']->row();
        // PERIKSA ADMIN //
        if ($r == 1) {
            $data['username'] = $this->Admin_model->tampil_user();
            $adm = array(
                'username' => $r->username,
                'password' => $r->password,
                'avatar' => $r->avatar,
                'id' => $r->id);
            $this->session->set_userdata($adm);
            $data['username'] = $session_data['username'];

            redirect('admin');
        } else {
            $this->index();
            echo "<div class='alert'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Perhatian!</strong> Username dan Password kamu salah..</div>";
        }
    }

}