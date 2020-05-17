<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Authcontroller.php');

class Dashboard extends Authcontroller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('user_agent');
        $this->load->library('session');
    }

    public function index() {
        $sessname = $_SESSION['logged_in']['employee_designation_id'];
        $this->data['query'] = $this->db->query("select tbl_user_type.employee_designation from tbl_user_type where tbl_user_type.id = $sessname")->first_row();
        $this->data['title'] = 'DASHBOARD';
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/dashboards/dashboard');
        $this->load->view('portfolio_admin/supporter/footer');
    }

}
