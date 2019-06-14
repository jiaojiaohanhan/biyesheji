<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function change_field(){
        $rows = $this->db->get_where("user_field1",array(
            "can_harvest" => 0,
            "harvest" => 1
        ))->result();
        $this->db->where(array(
            "can_harvest" => 0,
            "harvest" => 1
        ))->delete("user_field1");
        foreach($rows as $row){
            $field_id = $row->field_id;
            $this->db->limit(1)->update("user_field1",array(
                "type" => 0
            ),array(
                "field_id" => $field_id,
                "type" => 1
            ));
            $num = $this->db->where(array(
                "field_id" => $field_id,
            ))->count_all_results("user_field1");
            $sum = $this->db->get_where("user_field1",array(
                "field_id" => $field_id,
            ))->row()->sum;
            if($num<$sum){
                $this->db->update("field1",array(
                    "sur" => $sum-$num
                ),array(
                    "id" => $field_id,
                ));
            }
        }
    }
    public function get_plant(){
        return $this->db->get_where("user_field1",array(
            "type" => 0,
            "seeding" => 1
        ))->result();
    }
    public function set_plant_harvest($id){
        $this->db->update("user_field1",array(
            "can_harvest" => 1
        ),array(
            "id" => $id
        ));
    }
    public function user_active(){
        return $this->db->get("user_field2")->result();
    }
    public function set_user_time($id){
        $this->db->update("user_field1",array(
            "start_time" => null,
            "end_time" => null
        ),array(
            "id" => $id,
        ));
    }
    public function set_user_time2($id){
        $this->db->where(array(
            "id" => $id,
        ))->delete("user_field2");
    }
    public function get_plant2(){
        return $this->db->get_where("user_field1",array(
            "type" => 0,
            "seeding" => 1,
            "can_harvest" => 0
        ))->result();
    }
    public function  get_manager($type){
        return $this->db->get_where("manager",array(
            "type" => $type
        ))->row();
    }
    public function  get_user($id){
        return $this->db->get_where("user",array(
            "id" => $id
        ))->row();
    }
    public function manager_salary(){
        $query = $this->db->get("manager");
        $rows = $query->result();
        foreach($rows as $row){
            $salary = $row->salary;
            $sum = $row->sum;
            $id = $row->id;
            $this->db->update("manager",array(
                "sum" => $sum+$salary
            ),array(
                "id" => $id,
            ));
        }
    }
    public function manager_flow(){
        return $this->db->limit(1)->order_by('id DESC')->get("flow")->row();
    }
    public function manager_flow2($date){
        $this->db->insert("flow",array(
            "date" => $date
        ));
    }
}