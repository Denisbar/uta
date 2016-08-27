<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Price_model
 *
 * @author Denis
 */
class Price_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getData()
    {
        $query = $this->db->get('price');
        return $query->result_array();
    }

    public function insert_price()
    {
        $equipment = $_POST['equipment'];
        $hours = $_POST['hours'];
        $price = $_POST['price'];
        $this->db->query("INSERT INTO price (equipment, quantity, price) VALUES('$equipment','$hours','$price')");
    }

    public function delete_row($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('price');
    }

    /*
     * Text field insert
     */
    public function insert_area()
    {
        $text = $_POST['text'];
        $this->db->query("INSERT INTO text (text) VALUES('$text')");
//        return $query;
    }
}
