<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
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
		$orders = $this->admin->all_orders();
		$products = $this->customer->all_products();

		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-dashboard-partial', array('products' => $products, 'orders' => $orders));

	}
	public function all_orders()
	{
		$orders = $this->admin->all_orders();

		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-all-orders-partial', array('orders' => $orders));
	}
	public function view_one_order($id)
	{
		$get_order = $this->admin->get_order($id);

		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-order-partial', array('order' => $get_order));
	}	

	public function edit_status($id)
	{
		$status = $this->admin->edit_status($id);	
		$orders = $this->admin->all_orders();

		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-all-orders-partial', array('orders' => $orders));
	}
	public function edit_status_one($id)
	{
		$status = $this->admin->edit_status($id);	
		$get_order = $this->admin->get_order($id);

		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-order-partial', array('order' => $get_order));
	}

	public function all_products()
	{
		$products = $this->customer->all_products();
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-all-products-partial', array('products' => $products));
	}	
	public function view_one_product($id)
	{
		$product = $this->customer->get_product($id);
		$this->load->view('admin-home');
		$this->load->view('admin-partials/admin-product-partial', array('product' => $product));
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

	public function edit_product($id)
	{
		$edit = $this->admin->edit_product($this->input->post());
	
		$product = $this->customer->get_product($id);

		$this->session->set_flashdata('message', 'Product successfully edited!', $product);
		redirect("/Admins/view_one_product/" . $id);


	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->sess_destroy();
		redirect("/");
	}	
}
