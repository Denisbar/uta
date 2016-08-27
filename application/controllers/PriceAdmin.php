<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 17.08.2016
 * Time: 14:30
 */
class PriceAdmin extends CI_Controller
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
        $this->load->view('admin/price_list_delete', $data);
    }

    public function insert_form()
    {
        $this->load->view('price/insert_prices');
    }

    public function insert_prices_into_db()
    {
        $this->load->model('price_model');
        $this->price_model->insert_price();
        hearder("Location:".$this->viewRows());

    }

    public function delete_row($id)
    {
        $this->load->model('price_model');
        $this->price_model->delete_row($id);
    }
}