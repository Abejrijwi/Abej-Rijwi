<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Authcontroller.php');

class Account extends CI_controller {

    function __construct() {
        parent::__construct();
    }

    public function forget_password() {
        $this->data['title'] = 'FORGET PASSWORD | ACCOUNT';
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/accounts/forget_password');
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function forget_password_process() {

        $to = $this->input->post('email');  // User email pass here
        $subject = 'Welcome To CodingMantra';

        $from = 'abejrijwi@yahoo.com';              // Pass here your mail id

        $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://codingmantra.co.in/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
        $emailContent .= '<tr><td style="height:20px"></td></tr>';


        $emailContent .= $this->input->post('message');  //   Post message available here


        $emailContent .= '<tr><td style="height:20px"></td></tr>';
        $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://codingmantra.co.in/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.codingmantra.co.in</a></p></td></tr></table></body></html>";



//        $config['protocol'] = 'smtp';
//        $config['smtp_host'] = 'ssl://smtp.yahoo.com';
//        $config['smtp_host'] = 'ssl://smtp.gmail.com';
//        $config['smtp_port'] = '465';
//        $config['smtp_timeout'] = '7';
//
//        $config['smtp_user'] = 'abejrijwi@yahoo.com';    //Important
//        $config['smtp_pass'] = 'password@007';  //Important
//
//        $config['charset'] = 'utf-8';
//        $config['newline'] = "\r\n";
//        $config['mailtype'] = 'html'; // or html
//        $config['validation'] = TRUE; // bool whether to validate email or not 

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_timeout' => '7',
            'smtp_user' => 'abejrijwivmu@gmail.com',
            'smtp_pass' => 'abejrijwi007',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'mailtype' => 'html',
            'validation' => TRUE
        );



        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($emailContent);
        $this->email->send();
        echo $this->email->print_debugger();
        $this->session->set_flashdata('message', "Mail has been sent successfully");
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect('Account/forget_password');
    }

    public function manage_account() {
        echo "jnfvj";
    }

}
