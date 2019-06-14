<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function all_plants(){
        $query = $this->db->get("plant");
        return $query->result();
    }
    public function plant_info($plant_name){
        $query = $this->db->get_where("plant",array(
            "name" => $plant_name
        ));
        return $query->row();
    }
}