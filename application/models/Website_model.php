<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website_model extends CI_Model {

    public function manage_home_model($designation) {

        $query = $this->db->query("select tbl_user_type.employee_designation from tbl_user_type where tbl_user_type.id = $designation")->first_row();
        return $query;
    }

    public function manage_about_model($designation, $id_user) {

        $query = $this->db->query("select tbl_user_type.employee_designation, tbl_about_me.* from tbl_user_type, tbl_about_me where tbl_user_type.id = $designation and tbl_about_me.user_id = $id_user")->first_row();
        return $query;
    }

}
