<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function app_info(){
        $query = $this->db->get_where("app",array(
            "id" => 1
        ));
        return $query->row();
    }
    public function get_by_phone($phone){
        return $this->db->get_where("user",array("phone" => $phone))->row();
    }
}