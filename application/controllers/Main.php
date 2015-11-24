<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('home');

		$all_products = $this->customer->all_products();
		$this->load->view('partials/home-partial', array('products' => $all_products));
	}

	public function get_all_products()
	{
		$this->load->view('home');

		$all_products = $this->customer->all_products();
		$this->load->view('partials/all-products-partial', array('products' => $all_products));
	}

	public function get_books()
	{
		$this->load->view('home');

		$books = $this->customer->get_books();
		$this->load->view('partials/book-products-partial', array('books' => $books));
	}

	public function get_decor()
	{
		$this->load->view('home');

		$decor = $this->customer->get_decor();
		$this->load->view('partials/decor-products-partial', array('decor' => $decor));
	}

	public function new_products()
	{
		$this->load->view('home');

		$new = $this->customer->get_new();
		$this->load->view('partials/new-products-partial', array('new' => $new));
	}

	public function get_product($id)
	{
		$this->load->view('home');

		$product = $this->customer->get_product($id);
		$this->load->view('partials/product-partial', array('product' => $product));

	}

	public function add_cart()
	{

		$data = array(
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'name' => $this->input->post('name')
			);

		$cart = $this->cart->insert($data);
		// var_dump($this->cart->contents());
	
		if(isset($cart)){

			$id = $this->input->post('id');	
			$this->session->set_flashdata('message', 'Added to cart!');
			redirect("/Main/get_product/" . $id);
		}
		else
		{
			$id = $this->input->post('id');	
			$this->session->set_flashdata('message', 'uh oh!');
			redirect("/Main/get_product/" . $id);
		}
	}


	public function view_cart()
	{
		$this->load->view('home');
		$this->load->view('partials/view_cart-partial');

	}

	public function update_product()
	{
		$data = array(
			'rowid' => $this->input->post('rowid'),
			'qty' => $this->input->post('qty')
			);
		$this->cart->update($data);
		$this->session->set_flashdata('message', 'Cart Updated!');
		redirect("/Main/view_cart");
	}

	//after the first item in the cart, the subsequent items get removed when "edit qty" is clicked

	public function remove_product()
	{
		$item = array(
			'rowid' => $this->input->post('rowid'),
			'qty' => 0
			);
		$this->cart->update($item);
		$this->session->set_flashdata('message', 'Item removed!');
		redirect("/Main/view_cart");
	}

	public function checkout()
	{
		$this->load->view('home');
		$this->load->view('partials/checkout-partial');

	}	

	public function add_order()
	{

		$this->form_validation->set_rules("billing_first", "Billing First Name", "required|alpha");
        $this->form_validation->set_rules("billing_last", "Billing Last Name", "required|alpha");
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("billing_address", "Billing Address", "required");
        $this->form_validation->set_rules("billing_city", "Billing City", "required");
        $this->form_validation->set_rules("billing_state", "Billing State", "required|alpha");
        $this->form_validation->set_rules("billing_zip", "Billing Zip", "required");
        $this->form_validation->set_rules("shipping_first", "Shipping First Name", "required|alpha");
        $this->form_validation->set_rules("shipping_last", "Shipping Last Name", "required|alpha");
        $this->form_validation->set_rules("shipping_address", "Shipping Address", "required");
        $this->form_validation->set_rules("shipping_city", "Shipping City", "required");
        $this->form_validation->set_rules("shipping_state", "Shipping State", "required");
        $this->form_validation->set_rules("shipping_zip", "Shipping Zip", "required");
        $this->form_validation->set_rules("cardholder_name", "Cardholder Name", "required");
        $this->form_validation->set_rules("cc_number", "Credit Card Number", "required|numeric");
        $this->form_validation->set_rules("exp", "Credit Card Exp", "required|numeric");
        $this->form_validation->set_rules("cvc", "Security Code", "required|numeric");        

        if($this->form_validation->run() === FALSE)
        {

            $this->session->set_flashdata('message', validation_errors());
            redirect("/Main/checkout");
        }
        else

			$new_order = $this->customer->new_order($this->input->post());

			if($new_order == true)
			{
				redirect("/Main/confirm");
			}
			else
			{
				$this->session->set_flashdata('message', 'Uh-oh. Please try again.');
				redirect("/Main/view_cart");
			}

	}


	public function confirm()
	{
		$this->cart->destroy();
		$this->load->view('home');
		$this->load->view('partials/confirm-partial');

	}	
}
