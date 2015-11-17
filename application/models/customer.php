<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class customer extends CI_Model {

    function all_products()
    {
        $query = "SELECT * from products";
        return $this->db->query($query)->result_array();
    }

    public function get_books()
	{
        $query = "SELECT * from products WHERE category='books'";
        return $this->db->query($query)->result_array();
	}

	public function get_decor()
	{
        $query = "SELECT * from products WHERE category='decor'";
        return $this->db->query($query)->result_array();
	}

	public function get_new()
	{
        $query = "SELECT * from products ORDER BY created_at DESC";
        return $this->db->query($query)->result_array();
	}

    public function get_product($id)
    {
        $query = "SELECT * from products WHERE id = ?";
        $values = array($id);
        return $this->db->query($query, $values)->row_array();
    }

    public function new_order($customer)
    {
    

        $this->form_validation->set_rules("billing_first", "Billing First Name", "required|alpha");
        $this->form_validation->set_rules("billing_last", "Billing Last Name", "required|alpha");
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("billing_address", "Billing Address", "required");
        $this->form_validation->set_rules("billing_city", "Billing City", "required|alpha");
        $this->form_validation->set_rules("billing_state", "Billing State", "required|alpha");
        $this->form_validation->set_rules("billing_zip", "Billing Zip", "required");
        $this->form_validation->set_rules("shipping_first", "Shipping First Name", "required|alpha");
        $this->form_validation->set_rules("shipping_last", "Shipping Last Name", "required|alpha");
        $this->form_validation->set_rules("shipping_address", "Shipping Address", "required");
        $this->form_validation->set_rules("shipping_city", "Shipping City", "required|alpha");
        $this->form_validation->set_rules("shipping_state", "Shipping State", "required");
        $this->form_validation->set_rules("shipping_zip", "Shipping Zip", "required");
        $this->form_validation->set_rules("cc_number", "Credit Card Number", "required|numeric");
        $this->form_validation->set_rules("exp", "Credit Card Exp", "required|numeric");
        $this->form_validation->set_rules("cvc", "Security Code", "required|numeric");        

        if($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('message', validation_errors());
        }
        else
        {

            $query = "INSERT INTO customers (billing_first, billing_last, billing_address, billing_city, billing_state, billing_zip, shipping_first, shipping_last, shipping_address, shipping_city, shipping_state, shipping_zip, email, cc_number, exp, cvc) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $values = array($customer['billing_first'], $customer['billing_last'], $customer['billing_address'], $customer['billing_city'], $customer['billing_state'], $customer ['billing_zip'], $customer['shipping_first'], $customer['shipping_last'], $customer['shipping_address'], $customer['shipping_city'], $customer['shipping_state'], $customer['shipping_zip'], $customer['email'], $customer['cc_number'], $customer['exp'], $customer['cvc']); 
            $this->db->query($query, $values);


        $cust_id = $this->db->insert_id();
        $cust_id;  

        $query2 = "INSERT INTO orders (created_at, customer_id) VALUES(NOW(),?)";
        $values2 = array($cust_id);
        $this->db->query($query2, $values2);

        $order_id = $this->db->insert_id(); 

        $products = $this->cart->contents();
    

        foreach($products as $product){
            $query3 = "INSERT INTO orders_has_products (order_id, product_id, qty) VALUES (?,?,?)";
            $values3 = array($order_id, $product['id'], $product['qty']);
            $this->db->query($query3, $values3);

        }
       
        return true;

        }

    }

} 