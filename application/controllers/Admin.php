<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 17.08.2016
 * Time: 13:44
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('price_model');
        $this->load->helper('url');
    }

    public function signup()
    {
        $this->load->view('admin/signup_form');
    }

    public function create_member()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'Name', 'trim|reqired');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|reqired');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|reqired|valid_email');

        $this->form_validation->set_rules('username', 'Username', 'trim|reqired|min_lenght[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|reqired|min_lenght[4]');
        $this->form_validation->set_rules('password2', 'Password Conformation', 'trim|reqired|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $this->signup();
        } else {
            $this->load->model('membership_model');
            if ($query = $this->membership_model->create_member()) {

                $this->signup_successful();  //Успешная регистрация
            } else {
                $this->load->view('admin/signup_form');
            }
        }
    }

    public function insert_text_area()
    {
        $this->load->model('price_model');
        $this->price_model->insert_area();
    }
}