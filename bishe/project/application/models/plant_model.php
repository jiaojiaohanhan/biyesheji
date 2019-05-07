<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function plant_info($plant_names){
        $query = $this->db->where_in("name",$plant_names)->get("plant");
        return $query->result();
    }
}