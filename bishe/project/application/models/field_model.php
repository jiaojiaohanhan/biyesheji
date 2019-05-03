<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Field_model extends CI_Model {
    public function field_info($index){
        $query = $this->db->get_where("field1",array(
            "id" => $index
        ));
        return $query->row();
    }
    public function user_field($user_id,$field_id,$plant_names,$the_sur,$money){
        foreach($plant_names as $plant_name){
            $query = $this->db->insert("user_field",array(
                "user_id" => $user_id,
                "field_id" => $field_id,
                "plant_name" => $plant_name
            ));
        }
        $query2 = $this->db->update("field1",array(
            "sur" => $the_sur
        ),array(
            "id" => $field_id
        ));
        $query3 = $this->db->insert("user_field2",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "money" => $money
        ));
    }
    public function my_field_info($user_id){
        $query = $this->db->get_where("user_field",array(
            "user_id" => $user_id
        ));
        return $query->result();
    }
    public function my_field_info2($id){
        $query = $this->db->get_where("user_field",array(
            "id" => $id
        ));
        return $query->row();
    }
    public function the_field_info($field_id){
        $query = $this->db->get_where("user_field",array(
            "field_id" => $field_id
        ));
        return $query->result();
    }
    public function the_field_info2($id){
        $query = $this->db->get_where("user_field",array(
            "id" => $id
        ));
        return $query->row();
    }
    public function field_activity($id){
        $this->db->select("*");
        $this->db->like("id",$id);
        $sum = $this->db->count_all_results("user_field");
        return $sum;
    }
    public function field_action1($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("seeding","seeding+1",FALSE);
        $this->db->update("user_field");
        return $this->db->affected_rows();
    }
    public function field_action2($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("watering","watering+1",FALSE);
        $this->db->update("user_field");
        return $this->db->affected_rows();
    }
    public function field_action3($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("manure","manure+1",FALSE);
        $this->db->update("user_field");
        return $this->db->affected_rows();
    }
    public function field_action4($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("weeding","weeding+1",FALSE);
        $this->db->update("user_field");
        return $this->db->affected_rows();
    }
    public function field_action5($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("harvest","harvest+1",FALSE);
        $this->db->set("can_harvest","can_harvest-1",FALSE);
        $this->db->update("user_field");
        return $this->db->affected_rows();
    }
    public function check_tools(){
        $query = $this->db->get_where("tools",array(
            "id" => 1
        ));
        return  $query->row();
    }
    public function field_tools1($arr,$id){
        foreach($arr as $the_arr) {
            if ($the_arr == "manure") {
                $this->db->where(array("id" => 1));
                $this->db->set("manure", "manure-1", FALSE);
                $this->db->update("tools");
                $this->db->where(array("id" => $id));
                $this->db->set("manure", "manure+1", FALSE);
                $this->db->update("user_field");
            } else if ($the_arr == "hoe") {
                $this->db->where(array("id" => 1));
                $this->db->set("hoe", "hoe-1", FALSE);
                $this->db->update("tools");
                $this->db->where(array("id" => $id));
                $this->db->set("weeding", "weeding+1", FALSE);
                $this->db->update("user_field");
            } else if ($the_arr == "shovel") {
                $this->db->where(array("id" => 1));
                $this->db->set("shovel", "shovel-1", FALSE);
                $this->db->update("tools");
            } else if ($the_arr == "bucket") {
                $this->db->where(array("id" => 1));
                $this->db->set("bucket", "bucket-1", FALSE);
                $this->db->update("tools");
                $this->db->where(array("id" => $id));
                $this->db->set("watering", "watering+1", FALSE);
                $this->db->update("user_field");
            }
        }
        $this->db->where(array("id"=>$id));
        $this->db->set("activity","activity-1",FALSE);
        $this->db->update("user_field");
//        return $this->db->affected_rows();
    }
    public function field_tools2($arr,$id){
        foreach($arr as $the_arr) {
            if ($the_arr == "basket") {
                $this->db->where(array("id" => 1));
                $this->db->set("basket", "basket-1", FALSE);
                $this->db->update("tools");
            } else if ($the_arr == "gloves") {
                $this->db->where(array("id" => 1));
                $this->db->set("gloves", "gloves-1", FALSE);
                $this->db->update("tools");
            }
        }
        $this->db->where(array("id"=>$id));
        $this->db->set("harvest","harvest+1",FALSE);
        $this->db->set("can_harvest","can_harvest-1",FALSE);
        $this->db->update("user_field");
//        return $this->db->affected_rows();
    }
}