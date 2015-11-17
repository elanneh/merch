<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model {

    function login_admin($post)
    {
        $this->form_validation->set_rules("admin_email", "Admin Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        if($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('message', validation_errors());
            redirect("/Admin/admin_login");
        }
        else
        {            
            $query = "SELECT * FROM admin WHERE admin_email = ? AND password = ?";  
            $values = array($post['admin_email'],$post['password']); 
            return $this->db->query($query, $values)->row_array();
        }
    }    
    function add_product($product)
    {  
        $this->form_validation->set_rules("sku", "Product SKU", "required");
        $this->form_validation->set_rules("name", "Product Name", "required");
        $this->form_validation->set_rules("description", "Description", "required"); 
        $this->form_validation->set_rules("price", "Price", "required");
        $this->form_validation->set_rules("category", "category", "required");
        $this->form_validation->set_rules("img", "Image Link", "required");
        if($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('message', validation_errors());
        }
        else
        {
         $query = "INSERT INTO products (name, description, price, created_at, updated_at, category, img, sku) VALUES (?,?,?, NOW(),NOW(),?,?,?)";
         $values = array($product['name'], $product['description'], $product['price'], $product['category'], $product['img'], $product['sku']); 
         return $this->db->query($query, $values);

        }
    }


    function get_order($order)
    {
        $query = "SELECT orders_has_products.id, orders_has_products.qty, products.name, products.price, customers.billing_first, customers.billing_last 
            FROM products 
            JOIN orders_has_products 
            ON products.id = orders_has_products.product_id 
            JOIN orders 
            ON orders_has_products.order_id = orders.id 
            JOIN customers 
            ON orders.customer_id = customers.id WHERE orders_has_products.order_id = ?";
        $values = array($order);
        
        return $this->db->query($query, $values);    

    }

}