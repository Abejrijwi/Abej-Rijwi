<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function ProcessAuthentication($email, $password) {
        $this->db->where("email = '$email' or username = '$email'");
        $this->db->where("password", $password);
        $query = $this->db->get("tbl_user");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                return $row;
            }
        }
        return FALSE;
    }

}
