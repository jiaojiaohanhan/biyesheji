<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {
    public function get_by_name($name){
        $query = $this->db->get_where("user",array(
            "username" => $name,
        ));
        return $query->row();
    }
}