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
        $this->form_validation->set_rules("prod_status", "Product Status", "required");
        $this->form_validation->set_rules("img", "Image Link", "required");
        if($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('message', validation_errors());
        }
        else
        {
         $query = "INSERT INTO products (name, description, price, created_at, updated_at, category, img, sku, prod_status) VALUES (?,?,?, NOW(),NOW(),?,?,?,?)";
         $values = array($product['name'], $product['description'], $product['price'], $product['category'], $product['img'], $product['sku'], $product['prod_status']); 
         return $this->db->query($query, $values);

        }
    }

    function edit_product($id)
    {
        $product = $this->input->post();
  
        if($product['name'])
        {
            $query = "UPDATE products SET name=? WHERE id=?";
            $values = array($product['name'], $product['id']);
            $this->db->query($query, $values);
        }
        if($product['description'])
        {
            $query2 = "UPDATE products SET description=? WHERE id=?";
            $values2 = array($product['description'], $product['id']);
            $this->db->query($query2, $values2);
        }
        if($product['price'])
        {

            $query3 = "UPDATE products SET price=? WHERE id=?";
            $values3 = array($product['price'], $product['id']);
            $this->db->query($query3, $values3);
        }
        if($product['category'])
        {
            $query4 = "UPDATE products SET category=? WHERE id=?";
            $values4 = array($product['category'], $product['id']);
            $this->db->query($query4, $values4); 
        }       
        if($product['prod_status'])
        {
            $query5 = "UPDATE products SET prod_status=? WHERE id=?";
            $values5 = array($product['prod_status'], $product['id']);
            $this->db->query($query5, $values5); 
        }  
        if($product['img'])
        {
            $query6 = "UPDATE products SET img=? WHERE id=?";
            $values6 = array($product['img'], $product['id']);
            $this->db->query($query6, $values6);
        } 
        else
        {
            $this->session->set_flashdata('message', "Uh-Oh. Something went wrong");
        } 
    }

    function all_orders()
    {
        $query = "SELECT DISTINCT orders_has_products.order_id, orders.created_at, customers.billing_first, customers.billing_last, orders.status 
            FROM products 
            JOIN orders_has_products 
            ON products.id = orders_has_products.product_id 
            JOIN orders 
            ON orders_has_products.order_id = orders.id 
            JOIN customers 
            ON orders.customer_id = customers.id";

        return $this->db->query($query)->result_array();  

    }

    function get_order($id)
    {
        $query = "SELECT orders_has_products.order_id, orders_has_products.product_id, orders_has_products.qty, products.name, products.price, products.img, customers.billing_first, customers.billing_last, customers.billing_address, customers.billing_city, customers.billing_state, customers.billing_zip, customers.shipping_first, customers.shipping_last, customers.shipping_address, customers.shipping_city, customers.shipping_state, customers.shipping_zip, customers.email, customers.cardholder_name, customers.cc_number, customers.exp, customers.cvc, orders.status 
            FROM products 
            JOIN orders_has_products 
            ON products.id = orders_has_products.product_id 
            JOIN orders 
            ON orders_has_products.order_id = orders.id 
            JOIN customers 
            ON orders.customer_id = customers.id WHERE orders_has_products.order_id = ?";
        $values = array($id);
        
        return $this->db->query($query, $values)->result_array();   

    }

    function edit_status($id)
    {
        $order = $this->input->post();
        $query = "UPDATE orders SET status=? WHERE id=?";
        $values = array($order['status'], $id);
        $this->db->query($query, $values);
    }


}