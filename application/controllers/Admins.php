<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {


	public function index()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-login-partial');

	}
	public function admin_login()	
	{

		$login = $this->admin->login_admin($this->input->post());
		if(isset($login))
		{
			$this->session->set_userdata('logged_in', TRUE);
			redirect("/Admins/dashboard");

		}
		else{
			$this->session->set_flashdata('message', 'Uh-oh. Please try again.');
			redirect("/Admins/admin_login");

		}

	}
	public function dashboard()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-dashboard-partial');
	}
	public function all_orders()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-all-orders-partial');
	}
	public function view_one_order()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-order-partial');
	}	


	public function all_products()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-all-products-partial');
	}	
	public function view_one_product()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-product-partial');
	}	
	public function go_add_product()
	{
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-add_product-partial');

	}
	public function add_product()	
	{
		$add = $this->admin->add_product($this->input->post());
		if(isset($add))
		{
			$this->session->set_flashdata('message', 'Product successfully added!');
			redirect("/Admins/go_add_product");

		}
		else{
			$this->session->set_flashdata('message', 'Uh-oh. Please try again.');
			redirect("/Admins/go_add_product");
		}
	}	
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->sess_destroy();
		redirect("/");
	}	
}
