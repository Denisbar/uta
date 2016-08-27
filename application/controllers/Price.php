<?php
include 'C:\www\casio\application\controllers\PriceAdmin.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Price
 *
 * @author Denis
 */
class Price extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('price_model');
        $this->load->helper('url');
    }

    public function viewRows()
    {
        $data['row'] = $this->price_model->getData();
        $this->load->view('price_list', $data);
    }

    public function insert_form()
    {
        $this->load->view('price/insert_prices');
    }

    public function insert_prices_into_db()
    {
        $this->load->model('price_model');
        $inserted_data = $this->price_model->insert_price();
//        $this->viewRows();
        $a = new PriceAdmin();
        $a->viewRows();
    }

    public function delete_row($id)
    {
        $this->load->model('price_model');
        $this->price_model->delete_row($id);
        $a = new PriceAdmin();
        $a->viewRows();
    }



}
