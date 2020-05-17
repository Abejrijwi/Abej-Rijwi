<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Authcontroller.php');

class About_Me extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('About_Me_model');
    }

    public function add_abouts_me() {
        $this->data['title'] = 'ADD | ABOUT ME';
        $this->data['designation'] = $this->db->get('tbl_user_type')->result();
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/about_me/add_about_me', $this->data);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function add_about_me_process() {
        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last name', 'required');
        $this->form_validation->set_rules('father_name', 'father name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('dob', 'date of birth', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');
        $this->form_validation->set_rules('employee_designation_id', 'Employee Designation', 'required');
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'image', 'required');
        }
        if (empty($_FILES['signature']['name'])) {
            $this->form_validation->set_rules('signature', 'signature', 'required');
        }
        $this->form_validation->set_rules('description_about_your_self', 'Description About Your Self', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->add_abouts_me();
        } else {

            if ($_FILES['image']['name'] != "") {
                $config['upload_path'] = "./public/admin/about_me_picture/";
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('err_message', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $images['img'] = $upload_data['file_name'];
                }
            }
            if ($_FILES['signature']['name'] != "") {
                $config['upload_path'] = "./public/admin/about_me_picture/";
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('signature')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('err_message', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $signature['pic'] = $upload_data['file_name'];
                }
            }

            $add_about_me_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'father_name' => $this->input->post('father_name'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'dob' => $this->input->post('dob'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zipcode' => $this->input->post('zipcode'),
                'employee_designation_id' => $this->input->post('employee_designation_id'),
                'gender' => $this->input->post('gender'),
                'image' => $images['img'],
                'signature' => $signature['pic'],
                'description_about_your_self' => $this->input->post('description_about_your_self'),
            );
            $result = $this->About_Me_model->add_about_me_model_process($add_about_me_data);

            if ($result == TRUE) {
                $this->session->set_flashdata('message', 'About Me Adding Successfully');
                redirect("About_Me/add_abouts_me");
            } else {
                $this->session->set_flashdata('err_message', 'Something is Wrong');
            }
        }
    }

    public function manage_abouts_me() {
        $this->data['title'] = 'MANAGE | ABOUT ME';
        $result['manageaboutmelist'] = $this->About_Me_model->manage_about_me_model();
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/about_me/manage_about_me', $result);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function about_me_view($id) {
        $this->data['title'] = 'VIEW | USERS';
        $result['about_me_view'] = $this->About_Me_model->about_me_view_model($id);
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/about_me/view_about_me', $result);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function about_me_edit($id) {
        $this->data['title'] = 'EDIT | ABOUT ME';
        $result['designation'] = $this->db->get('tbl_user_type')->result();
        $result['about_me_edit'] = $this->About_Me_model->about_me_edit_process($id);
        $this->load->view('portfolio_admin/supporter/header', $this->data);
        $this->load->view('portfolio_admin/supporter/about_me/edit_about_me', $result);
        $this->load->view('portfolio_admin/supporter/footer');
    }

    public function edit_about_me_process() {
        $id = $this->input->post('id');
        $user_img = $this->db->query("select image, signature from tbl_about_me where id = $id")->first_row();
        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last name', 'required');
        $this->form_validation->set_rules('father_name', 'father name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('dob', 'date of birth', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');
        $this->form_validation->set_rules('employee_designation_id', 'Employee Designation', 'required');
        $this->form_validation->set_rules('description_about_your_self', 'Description About Your Self', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->data['title'] = 'EDIT | ABOUT ME';
            $result['designation'] = $this->db->get('tbl_user_type')->result();
            $result['about_me_edit'] = $this->About_Me_model->about_me_edit_process($id);
            $this->load->view('portfolio_admin/supporter/header', $this->data);
            $this->load->view('portfolio_admin/supporter/about_me/edit_about_me', $result);
            $this->load->view('portfolio_admin/supporter/footer');
        } else {

            if ($_FILES['image']['name'] == "") {
                $picture = $user_img->image;
            } else {
                $config['upload_path'] = "./public/admin/about_me_picture/";
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('err_message', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $picture = $upload_data['file_name'];
                }
                @unlink(FCPATH . './public/admin/about_me_picture/' . $user_img->image);
            }

            if ($_FILES['signature']['name'] == "") {
                $signature = $user_img->signature;
            } else {
                $config['upload_path'] = "./public/admin/about_me_picture/";
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('signature')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('err_message', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $signature = $upload_data['file_name'];
                }
                @unlink(FCPATH . './public/admin/about_me_picture/' . $user_img->signature);
            }

            $update_about_me_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'father_name' => $this->input->post('father_name'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'dob' => $this->input->post('dob'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zipcode' => $this->input->post('zipcode'),
                'employee_designation_id' => $this->input->post('employee_designation_id'),
                'gender' => $this->input->post('gender'),
                'image' => $picture,
                'signature' => $signature,
                'description_about_your_self' => $this->input->post('description_about_your_self'),
            );
            $result = $this->About_Me_model->edit_about_me_model_process($update_about_me_data, $id);

            if ($result == TRUE) {
                $this->session->set_flashdata('message', 'About Me Update Successfully');
                redirect("About_Me/about_me_edit/" . $id);
            } else {
                $this->session->set_flashdata('err_message', 'Something is Wrong');
            }
        }
    }

    public function about_me_delete($id) {
        $result = $this->About_Me_model->delete_about_me_model_process($id);
        if ($result == TRUE) {
            $this->session->set_flashdata('err_message', 'User Delete Successfully');
            redirect("About_Me/manage_abouts_me/" . $id);
        } else {
            $this->session->set_flashdata('err_message', 'Something is Wrong');
        }
    }

}
