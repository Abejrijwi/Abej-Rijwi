<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Authcontroller.php');

class Users extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Add_user_model');
    }

    public function add_user() {
        $this->data['title'] = 'ADD | USERS';
        $this->data['designation'] = $this->db->get('tbl_user_type')->result();
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/users/add_users', $this->data);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function add_user_process() {
        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('dob', 'date of birth', 'required');
        $this->form_validation->set_rules('mobile', 'mobile number', 'required|regex_match[/^[0-9]{10}$/]');
        if (empty($_FILES['picture']['name'])) {
            $this->form_validation->set_rules('picture', 'picture', 'required');
        }
        $this->form_validation->set_rules('employee_designation_id', 'Employee Designation', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->add_user();
        } else {

            if ($_FILES['picture']['name'] != "") {
                $config['upload_path'] = "./public/admin/user_picture/";
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('picture')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('err_message', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $picture['image'] = $upload_data['file_name'];
                }
            }

            $add_user_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'dob' => $this->input->post('dob'),
                'mobile' => $this->input->post('mobile'),
                'image' => $picture['image'],
                'employee_designation_id' => $this->input->post('employee_designation_id'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zipcode' => $this->input->post('zipcode'),
                'gender' => $this->input->post('gender')
            );

            $result = $this->Add_user_model->add_user_model_process($add_user_data);

            if ($result == TRUE) {
                $this->session->set_flashdata('message', 'User Adding Successfully');
                redirect("Users/add_user");
            } else {
                $this->session->set_flashdata('err_message', 'Something is Wrong');
            }
        }
    }

    public function manage_users() {
        $this->data['title'] = 'MANAGE | USERS';
        $result['manageuserlist'] = $this->Add_user_model->manage_users_model();
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/users/manage_user', $result);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function user_view($id) {
        $this->data['title'] = 'VIEW | USERS';
        $result['user_view'] = $this->Add_user_model->user_view_model($id);
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/users/view_users', $result);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function user_edit($id) {
        $this->data['title'] = 'EDIT | USERS';
        $result['designation'] = $this->db->get('tbl_user_type')->result();
        $result['user_edit'] = $this->Add_user_model->user_edit_process($id);
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/users/edit_users', $result);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function edit_user_process() {
        $id = $this->input->post('id');
        $user_img = $this->db->query("select image from tbl_user where id = $id")->first_row();
        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|alpha');
        $this->form_validation->set_rules('dob', 'date of birth', 'required');
        $this->form_validation->set_rules('mobile', 'mobile number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->data['title'] = 'EDIT | USERS';
            $this->data['designation'] = $this->db->get('tbl_user_type')->result();
            $this->data['user_edit'] = $this->db->query("select * from tbl_user where id = $id")->first_row();
            $this->load->view('portfolio_admin/supporter/header', $this->data);
            $this->load->view('portfolio_admin/supporter/users/edit_users', $this->data);
            $this->load->view('portfolio_admin/supporter/footer');
        } else {

            if ($_FILES['picture']['name'] == "") {
                $picture = $user_img->image;
            } else {
                $config['upload_path'] = "./public/admin/user_picture/";
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('picture')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('err_message', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $picture = $upload_data['file_name'];
                }
                @unlink(FCPATH . './public/admin/user_picture/' . $user_img->image);
            }

            $update_user_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'dob' => $this->input->post('dob'),
                'mobile' => $this->input->post('mobile'),
                'image' => $picture,
                'employee_designation_id' => $this->input->post('employee_designation_id'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zipcode' => $this->input->post('zipcode'),
                'gender' => $this->input->post('gender')
            );

            $result = $this->Add_user_model->edit_user_model_process($update_user_data, $id);

            if ($result == TRUE) {
                $this->session->set_flashdata('message', 'User Update Successfully');
                redirect("Users/user_edit/" . $id);
            } else {
                $this->session->set_flashdata('err_message', 'Something is Wrong');
            }
        }
    }

    public function user_delete($id) {
        $result = $this->Add_user_model->delete_user_model_process($id);
        if ($result == TRUE) {
            $this->session->set_flashdata('err_message', 'User Delete Successfully');
            redirect("Users/manage_users/" . $id);
        } else {
            $this->session->set_flashdata('err_message', 'Something is Wrong');
        }
    }

}
