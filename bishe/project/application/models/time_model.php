<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function change_field(){
        $rows = $this->db->get_where("user_field",array(
            "can_harvest" => 0,
            "harvest" => 1
        ))->result();
        $this->db->where(array(
            "can_harvest" => 0,
            "harvest" => 1
        ))->delete("user_field");
        foreach($rows as $row){
            $field_id = $row->field_id;
            $this->db->limit(1)->update("user_field",array(
                "type" => 0
            ),array(
                "field_id" => $field_id,
                "type" => 1
            ));
        }
    }
    public function get_plant(){
        return $this->db->get_where("user_field",array(
            "type" => 0,
            "seeding" => 1
        ))->result();
    }
    public function set_plant_harvest($id){
        $this->db->update("user_field",array(
            "can_harvest" => 1
        ),array(
            "id" => $id
        ));
    }
    public function user_active(){
        return $this->db->get_where("user_field",array(
            "start_time!=" => null,
            "end_time!=" => null
        ))->result();
    }
    public function set_user_time($id){
        $this->db->update("user_field",array(
            "start_time" => null,
            "end_time" => null
        ),array(
            "id" => $id,
        ));
    }
    public function get_plant2(){
        return $this->db->get_where("user_field",array(
            "type" => 0,
            "seeding" => 1,
            "can_harvest" => 0
        ))->result();
    }
}