<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_Me_model extends CI_Model {

    public function add_about_me_model_process($add_about_me_data) {
        $query = $this->db->insert('tbl_about_me', $add_about_me_data);
        return $query;
    }

    public function manage_about_me_model() {
        $query = $this->db->query("select tbl_user_type.employee_designation,tbl_about_me.* from tbl_user_type,tbl_about_me WHERE tbl_user_type.id = tbl_about_me.employee_designation_id ORDER BY id DESC")->result();
        return $query;
    }

    public function about_me_view_model($id) {
        $query = $this->db->query("select tbl_user_type.employee_designation,tbl_about_me.* from tbl_user_type,tbl_about_me WHERE tbl_user_type.id = tbl_about_me.employee_designation_id and tbl_about_me.id = $id")->first_row();
        return $query;
    }

    public function about_me_edit_process($id) {
        $query = $this->db->query("select * from tbl_about_me where id = $id")->first_row();
        return $query;
    }

    public function edit_about_me_model_process($update_about_me_data, $id) {
        $this->db->where('id', $id);
        $query = $this->db->update('tbl_about_me', $update_about_me_data);
        return $query;
    }

    public function delete_about_me_model_process($id) {
        $user_img = $this->db->query("select image, signature from tbl_about_me where id = $id")->first_row();
        @unlink(FCPATH . './public/admin/about_me_picture/' . $user_img->image);
        @unlink(FCPATH . './public/admin/about_me_picture/' . $user_img->signature);
        $query = $this->db->query("delete FROM tbl_about_me where id=$id");
        return $query;
    }

}
