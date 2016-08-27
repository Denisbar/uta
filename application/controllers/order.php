<?php
class Order extends CI_Controller {
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('order_for_servise');
    }
}