<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->data['title'] = 'ABEJ-RIJWI | LOGIN';
        $this->load->view('portfolio_admin/login', $this->data);
    }

    public function auth_user() {

        $this->form_validation->set_rules('email', 'User Name / Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('portfolio_admin/login');
        } else {

            $this->load->library('user_agent');
            $this->load->model('Auth_model');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $result = $this->Auth_model->ProcessAuthentication($email, $password);
            date_default_timezone_set("Asia/Kolkata");
            $last_login = date('Y-m-d h:i:s a');
            $browser = $this->agent->browser();
            $browser_version = $this->agent->version();
            $os = $this->agent->platform();
            $ip_address = $this->input->ip_address();
            $this->db->query("update tbl_user set status=1, last_login = '$last_login', browser = '$browser', browser_version = '$browser_version', os = '$os', ip_address = '$ip_address' where email = '$email' or username = '$email'");

            if ($result == TRUE) {
                $session = array(
                    'uid' => $result->id,
                    'first_name' => $result->first_name,
                    'last_name' => $result->last_name,
                    'name' => $result->first_name . ' ' . $result->last_name,
                    'email' => $result->email,
                    'dob' => $result->dob,
                    'mobile' => $result->mobile,
                    'picture' => $result->image,
                    'employee_designation_id' => $result->employee_designation_id,
                    'status' => $result->status,
                    'last_login' => $result->last_login
                );
                $this->session->set_userdata('logged_in', $session);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('msg', 'Invalid Email ID or password!');
                redirect('login');
            }
        }
    }

    public function logout() {
        $this->db->query("update tbl_user set status=0 where id='" . $_SESSION['logged_in']['uid'] . "'");
        $session = array(
            'id' => '',
            'email' => ''
        );
        $this->session->unset_userdata('logged_in', $session);
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Successfully Logout');
        redirect('login');
    }

}
