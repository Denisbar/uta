<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function main_page()
    {
        parent::Controller();

        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login_form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('download');
        $this->load->helper('email');
    }

    public function main()
    {
        $this->load->view('welcome_message');
    }

    public function price_list()
    {
        $this->load->view('price_list');
    }

    public function order_for_servise()
    {
        $this->load->view('order_for_servise');
    }

    public function instructions()
    {
        $this->load->view('instructions');
    }

    public function servise_team()
    {
        $this->load->view('servise_team');
    }

    public function contacts()
    {
        $this->load->view('contacts');
    }

    public function footer()
    {
        $this->load->view('footer');
    }

    public function resume()
    {
        $this->load->view('resume');   // This is page with my resume
    }

    public function signup_successful()
    {

        $this->load->view('signup_successful');
    }

    public function sendmail()
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'madest.madest1987@gmail.com', //my mail
            'smtp_pass' => '8169x5it',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('madest.madest1987@gmail.com', 'Huan Pablo');
        $this->email->to('bar_deniska@mail.ru');
        $this->email->subject('Заявка на ремонт');

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $city = $this->input->post('city');
        $phone = $this->input->post('phone');
        $message1 = $this->input->post('message1');
        $you_want_some = $this->input->post('you_want_some');

        $mailcontent = 'Имя клиента: ' . $name . "<br>" . 'email: ' . $email . "<br>" . 'Город: ' . $city . "<br>" . 'Контактный телефон: ' . $phone . "<br>" . 'Описание поломки: ' . $message1 . "<br>" . 'Пожелание клиента: ' . $you_want_some . "<br>";
        $this->email->message($mailcontent);

        //$this->email->message($this->input->post('email'));
        //$this->email->message($this->input->post('city'));
        //$this->email->message($this->input->post('phone'));
        //$this->email->message($this->input->post('message1'));
        //$this->email->message($this->input->post('you_want_some'));

        if ($this->email->send()) {
            echo $this->load->view('contacts');
            //echo $this->load->view('contacts'); // после отправки выводит на страницу контакты, сделать отдельный вид
        }
        //$result = $this->email->send();
        //echo $this->email->print_debugger();  выводит информацию об отправки сообщения
    }

    public function login()
    {

        $this->load->view('login_form');
    }

    public function validete_credentials()
    {

        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if ($query) {

            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            $this->load->view('welcome_message');
        } else {
            $this->login();
        }
    }

    public function signup()
    {
        $this->load->view('signup_form');
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
                $this->load->view('signup_form');
            }
        }
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */