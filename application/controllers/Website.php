<?php

class Website extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->model('Website_model');
        $this->load->library('session');
    }

    public function home() {

        $sessname = $_SESSION['logged_in']['name'];
        $designation = $_SESSION['logged_in']['employee_designation_id'];
//        echo "<pre>"; print_r($designation); exit();
        $this->data['query'] = $this->Website_model->manage_home_model($designation);
        $this->data['title'] = $sessname . " | " . "Home";
        $this->load->view('portfolio_admin/supporter/website/header', $this->data);
        $this->load->view('portfolio_admin/supporter/website/home');
        $this->load->view('portfolio_admin/supporter/website/footer');
    }

    public function about() {
        $sessname = $_SESSION['logged_in']['name'];
        $designation = $_SESSION['logged_in']['employee_designation_id'];
        $id_user = $_SESSION['logged_in']['uid'];
        $this->data['query'] = $this->Website_model->manage_about_model($designation, $id_user);
        $this->data['title'] = $sessname . " | " . "About";
        $this->load->view('portfolio_admin/supporter/website/header', $this->data);
        $this->load->view('portfolio_admin/supporter/website/about');
        $this->load->view('portfolio_admin/supporter/website/footer');
    }

    public function resume() {
        $sessname = $_SESSION['logged_in']['name'];
        $this->data['title'] = $sessname . " | " . "Resume";
        $this->load->view('portfolio_admin/supporter/website/header', $this->data);
        $this->load->view('portfolio_admin/supporter/website/resume');
        $this->load->view('portfolio_admin/supporter/website/footer');
    }

    public function portfolio() {
        $sessname = $_SESSION['logged_in']['name'];
        $this->data['title'] = $sessname . " | " . "Portfolio";
        $this->load->view('portfolio_admin/supporter/website/header', $this->data);
        $this->load->view('portfolio_admin/supporter/website/portfolio');
        $this->load->view('portfolio_admin/supporter/website/footer');
    }

    public function blog() {
        $sessname = $_SESSION['logged_in']['name'];
        $this->data['title'] = $sessname . " | " . "Blog";
        $this->load->view('portfolio_admin/supporter/website/header', $this->data);
        $this->load->view('portfolio_admin/supporter/website/blog');
        $this->load->view('portfolio_admin/supporter/website/footer');
    }

    public function contact() {
        $sessname = $_SESSION['logged_in']['name'];
        $this->data['title'] = $sessname . " | " . "Contact";
        $this->load->view('portfolio_admin/supporter/website/header', $this->data);
        $this->load->view('portfolio_admin/supporter/website/contact');
        $this->load->view('portfolio_admin/supporter/website/footer');
    }

}
