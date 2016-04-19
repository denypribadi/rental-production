<?php
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->cek_session();
        
     
 

	}
		function cek_session(){
		if($this->session->userdata('username') == NULL )
		{
			redirect('login');
		}		
	}
	

	//INDEX ADMIN_AREA
	function index(){
		$this->load->view('admin/bg_header');
		$data['id'] = $this->Admin_model->all_id();
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_index',$data);
		$this->load->view('admin/bg_footer');
	}


//ABOUT COMPANY
	function about(){
		$this->load->view('admin/bg_header');
		$id_about=$this->uri->segment(3);
		$data['id'] = $this->Admin_model->all_id();
		$data['data_about'] = $this->Admin_model->data_about($id_about);
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_about',$data);
		$this->load->view('admin/bg_footer');
	}

	//LOGO
	function logo(){
		$this->load->view('admin/bg_header');
		$id_logo=$this->uri->segment(3);
		$data['id'] = $this->Admin_model->all_id();
		$data['data_logo'] = $this->Admin_model->data_logo($id_logo);
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_logo',$data);
		$this->load->view('admin/bg_footer');

	}
	//SLIDER FRONT END
	function slider(){
		$this->load->view('admin/bg_header');
		$id_slider=$this->uri->segment(3);
		$data['id'] = $this->Admin_model->all_id();
		$data['data_slider'] = $this->Admin_model->data_slider($id_slider);
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_slider',$data);
		$this->load->view('admin/bg_footer');

	}

	//PROFILE
	function profile(){
	    $this->load->view('admin/bg_header');
		$id_profile=$this->uri->segment(3);
		$data['id'] = $this->Admin_model->all_id();
		$data['data_profile'] = $this->Admin_model->data_profile($id_profile);
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_profile',$data);
		$this->load->view('admin/bg_footer');

	}
	
//PORTOFOLIO
	function portofolio(){
		$this->load->view('admin/bg_header');
		$data['id'] = $this->Admin_model->all_id();
		$data['kategori_portofolio']=$this->Admin_model->kategori_portofolio();
		$data['data_portofolio'] = $this->Admin_model->data_portofolio();
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_portofolio',$data);
		$this->load->view('admin/bg_footer');
	}

	//BLOGG Edit 
	function portofolio_edit(){
		$id_portofolio=$this->uri->segment(3);
	    $this->load->view('admin/bg_header');
	    $data['id'] = $this->Admin_model->all_id();
		$data['id_portofolio'] = $this->Admin_model->id_portofolio();
		$data['kategori_portofolio']=$this->Admin_model->kategori_portofolio();//tangkap id 
		$data['data_portofolio_id'] = $this->Admin_model->data_portofolio_id($id_portofolio);//where porto
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_portofolio_edit',$data);
		$this->load->view('admin/bg_footer');

	}


	//BLOGG 
	function blog(){
	    $this->load->view('admin/bg_header');
		$data['id'] = $this->Admin_model->all_id();
		$data['kategori_blog']=$this->Admin_model->kategori_blog();
		$data['data_blog'] = $this->Admin_model->data_blog();
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_blog',$data);
		$this->load->view('admin/bg_footer');

	}
	
	//BLOGG Edit 
	function blog_edit(){
		$id_blog=$this->uri->segment(3);
	    $this->load->view('admin/bg_header');
	    $data['id'] = $this->Admin_model->all_id();
		$data['id_blog'] = $this->Admin_model->id_blog();//tangkap id di form
		$data['kategori_blog']=$this->Admin_model->kategori_blog();
		$data['data_blog_id'] = $this->Admin_model->data_blog_id($id_blog);//where id_blog
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_blog_edit',$data);
		$this->load->view('admin/bg_footer');

	}

	//DELETE BLOG
	function blog_delete(){
		$id_blog=$this->uri->segment(3);
		$this->db->where('id_blog',$id_blog);
			 $query=$this->db->get('tb_front_blog');
			 $row = $query->row();
			 unlink("./assets/img_blog/$row->gambar");
			 $this->db->delete('tb_front_blog', array('id_blog' => $id_blog));
	    redirect('admin/blog');

	}

	//DELETE PORTOFOLIO
	function portofolio_delete(){
		$id_portofolio=$this->uri->segment(3);
		$this->db->where('id_portofolio',$id_portofolio);
			 $query=$this->db->get('tb_front_portofolio');
			 $row = $query->row();
			 unlink("./assets/img_portofolio/$row->img_portofolio");
			 $this->db->delete('tb_front_portofolio', array('id_portofolio' => $id_portofolio));
	    redirect('admin/portofolio');

	}

	//FOOTER FOOTER FRONT END
	function footer(){
		$this->load->view('admin/bg_header');
		$id_footer=$this->uri->segment(3);
		$data['id'] = $this->Admin_model->all_id();
		$data['data_footer'] = $this->Admin_model->data_footer($id_footer);
		$this->load->view('admin/bg_sidebar',$data);
		$this->load->view('admin/bg_admin_footer',$data);
		$this->load->view('admin/bg_footer');

	}
//UPDATE FOOTER
	function update_footer(){
	$id_footer=$this->uri->segment(3);
    $alamat = $this->input->post('alamat');
    $notelp= $this->input->post('notelp');
    $email= $this->input->post('email');
    $subject_footer= $this->input->post('subject_footer');   
    $this->db->where('id_footer',$id_footer);
    $this->db->update('tb_front_footer',array(
    'alamat' => $alamat,
    'telp'=>$notelp,
    'email'=>$email,
    'subject'=>$subject_footer ));
    redirect('admin/footer/'.$id_footer.'');
	}


	//LOGOUT
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>