<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function get_by_name($name){
        $query = $this->db->get_where("test",array(
            "name" => $name,
        ));
        return $query->row();
    }
    public function test(){
        $query = $this->db->insert("test",array(
            "name" => "hahaha",
        ));
    }
}