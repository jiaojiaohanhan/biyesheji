<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Field_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function field_info($index){
        $query = $this->db->get_where("field1",array(
            "id" => $index
        ));
        return $query->row();
    }
    public function field_info2($index){
        return $this->db->where(array(
            "field_id" => $index,
            "type" => 1
        ))->count_all_results("user_field");
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
    public function user_field2($user_id,$field_id,$plant_names,$money){
        foreach($plant_names as $plant_name){
            $query = $this->db->insert("user_field",array(
                "user_id" => $user_id,
                "field_id" => $field_id,
                "plant_name" => $plant_name,
                "type" => 1
            ));
        }
        $query2 = $this->db->insert("user_field2",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "money" => $money
        ));
    }
    public function user_field3($user_id,$field_id){
        $query = $this->db->get_where("field2",array(
            "id" => $field_id,
        ));
        $price = $query->row()->price;
        $money = $price*3;
        return $money;
    }
    public function user_field4($user_id,$field_id,$tools,$money,$date,$time){
        $d = mktime($time[0],$time[1],$time[2],$date[1],$date[2],$date[0]);
        $d2 = mktime($time[0]-3,$time[1],$time[2],$date[1],$date[2],$date[0]);
        $datetime = date("Y-m-d H:i:s",$d);
        $datetime2 = date("Y-m-d H:i:s",$d2);
        $this->db->insert("user_field1",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "tools" => $tools,
            "datetime2" => $datetime2,
            "datetime" => $datetime
        ));
        $this->db->insert("user_field2",array(
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
    public function the_field_info1($field_id){
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
    public function the_field_info3($field_id){
        $query = $this->db->get_where("user_field1",array(
            "field_id" => $field_id
        ));
        return $query->result();
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
        $this->db->update("user_field",array(
            "seed_time" => date("Y-m-d")
        ),array(
            "id" => $id
        ));
        $name = $this->db->get_where("user_field",array(
            "id" => $id
        ))->row()->plant_name;
        switch ($name) {
            case "草莓":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+105 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "橘子":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+240 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "石榴":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+180 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "柠檬":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+240 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "猕猴桃":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+210 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "苹果":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+240 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "白菜":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+60 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "菠菜":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+40 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "黄瓜":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+90 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "番茄":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+120 day"))
                ),array(
                    "id" => $id
                ));
                break;
            case "茄子":
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+60 day"))
                ),array(
                    "id" => $id
                ));
                break;
            default:
                $this->db->update("user_field",array(
                    "harvest_time" => date("Y-m-d",strtotime("+90 day"))
                ),array(
                    "id" => $id
                ));
        }
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
    public function field_tools1($arr,$tools,$id){
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
        $this->db->update("user_field",array(
            "tools" => $tools,
        ),array(
            "id" => $id
        ));
        $this->db->where(array("id"=>$id));
        $this->db->set("activity","activity-1",FALSE);
        $this->db->update("user_field");
//        return $this->db->affected_rows();
    }
    public function field_tools2($arr,$tools,$id){
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
        $this->db->update("user_field",array(
            "tools" => $tools,
        ),array(
            "id" => $id
        ));
        $this->db->where(array("id"=>$id));
        $this->db->set("harvest","harvest+1",FALSE);
        $this->db->set("can_harvest","can_harvest-1",FALSE);
        $this->db->update("user_field");
//        return $this->db->affected_rows();
    }
    public function field_datetime($id,$date,$time){
        $d = mktime($time[0],$time[1],$time[2],$date[1],$date[2],$date[0]);
        $d2 = mktime($time[0]+4,$time[1],$time[2],$date[1],$date[2],$date[0]);
        $this->db->update("user_field",array(
            "start_time" => date("Y-m-d H:i:s",$d),
            "end_time" => date("Y-m-d H:i:s",$d2)
        ),array(
            "id" => $id
        ));
    }
    public function field_datetime2($field_id,$date,$time){
        $d = mktime($time[0],$time[1],$time[2],$date[1],$date[2],$date[0]);
        $datetime = date("Y-m-d H:i:s",$d);
        $this->db->select("*");
        $this->db->like(array(
            "field_id" => $field_id,
            "datetime" => $datetime
        ));
        $sum = $this->db->count_all_results("user_field1");
        if($sum==0){
            return "";
        }else{
            return "该地块的该时间段已被选中，请选择其他的时间段";
        }
    }
}