<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_user_model extends CI_Model {

    public function add_user_model_process($add_user_data) {
        $query = $this->db->insert('tbl_user', $add_user_data);
        return $query;
    }

    public function manage_users_model() {
        $query = $this->db->query("select * FROM tbl_user ORDER BY id DESC")->result();
        return $query;
    }

    public function user_view_model($id) {
        $query = $this->db->query("select tbl_user_type.employee_designation,tbl_user.* from tbl_user_type,tbl_user WHERE tbl_user_type.id = tbl_user.employee_designation_id and tbl_user.id = $id")->first_row();
        return $query;
    }

    public function user_edit_process($id) {
        $query = $this->db->query("select * from tbl_user where id = $id")->first_row();
        return $query;
    }

    public function edit_user_model_process($update_user_data, $id) {
        $this->db->where('id', $id);
        $query = $this->db->update('tbl_user', $update_user_data);
        return $query;
    }

    public function delete_user_model_process($id) {
        $user_img = $this->db->query("select image from tbl_user where id = $id")->first_row();
        @unlink(FCPATH . './public/admin/user_picture/' . $user_img->image);
        $query = $this->db->query("delete FROM tbl_user where id=$id");
        return $query;
    }

}
