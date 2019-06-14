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
    public function field_info1($index){
        $query = $this->db->get_where("field_keys",array(
            "id" => $index
        ));
        return $query->row();
    }
    public function field_info2($index){
        return $this->db->where(array(
            "field_id" => $index,
            "type" => 1
        ))->count_all_results("user_field1");
    }
    public function user_field($user_id,$field_id,$plant_names,$the_sur,$money){
        foreach($plant_names as $plant_name){
            $query = $this->db->insert("user_field1",array(
                "user_id" => $user_id,
                "field_id" => $field_id,
                "plant_name" => $plant_name,
            ));
        }
        $query2 = $this->db->update("field1",array(
            "sur" => $the_sur
        ),array(
            "id" => $field_id
        ));
        $query3 = $this->db->insert("user_pay",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "money" => $money
        ));
    }
    public function user_field2($user_id,$field_id,$plant_names,$money){
        foreach($plant_names as $plant_name){
            $query = $this->db->insert("user_field1",array(
                "user_id" => $user_id,
                "field_id" => $field_id,
                "plant_name" => $plant_name,
                "type" => 1
            ));
        }
        $query2 = $this->db->insert("user_pay",array(
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
        $this->db->insert("user_field2",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "tools" => $tools,
            "start_time" => $datetime2,
            "end_time" => $datetime
        ));
        $arr = explode(",",$tools);
        foreach($arr as $the_arr){
            if($the_arr=="烧烤架"){
                $this->db->where(array("name"=>"barbecue"));
                $this->db->set("number","number-1",FALSE);
                $this->db->update("tools");
            }else if($the_arr=="木炭(5kg)"){
                $this->db->where(array("name"=>"charcoal"));
                $this->db->set("number","number-1",FALSE);
                $this->db->update("tools");
            }
        }
        $this->db->insert("user_pay",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "money" => $money
        ));
    }
    public function my_field_info($user_id,$pages){
        $query = $this->db->limit(10,$pages)->get_where("user_field1",array(
            "user_id" => $user_id
        ));
        return $query->result();
    }
    public function my_field_info1($user_id){
        return $this->db->where(array(
            "user_id" => $user_id
        ))->count_all_results('user_field1');
    }
    public function my_field_info2($id){
        $query = $this->db->get_where("user_field1",array(
            "id" => $id
        ));
        return $query->row();
    }
    public function the_field_info1($field_id){
        $query = $this->db->get_where("user_field1",array(
            "field_id" => $field_id
        ));
        return $query->result();
    }
    public function the_field_info2($id){
        $query = $this->db->get_where("user_field1",array(
            "id" => $id
        ));
        return $query->row();
    }
    public function the_field_info3($field_id){
        $query = $this->db->get_where("user_field2",array(
            "field_id" => $field_id
        ));
        return $query->result();
    }
    public function field_activity($id){
        $this->db->select("*");
        $this->db->like("id",$id);
        $sum = $this->db->count_all_results("user_field1");
        return $sum;
    }
    public function field_action1($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("seeding","seeding+1",FALSE);
        $this->db->update("user_field1");
        $this->db->update("user_field1",array(
            "seed_time" => date("Y-m-d")
        ),array(
            "id" => $id
        ));
        $name = $this->db->get_where("user_field1",array(
            "id" => $id
        ))->row()->plant_name;
        $days = $this->db->get_where("plant",array(
            "name" => $name
        ))->row()->days;
        $this->db->update("user_field1",array(
            "harvest_time" => date("Y-m-d",strtotime("+".$days."day"))
        ),array(
            "id" => $id
        ));
        $this->db->where(array("name"=>$name));
        $this->db->set("number","number-1",FALSE);
        $this->db->update("plant");
        return $this->db->affected_rows();
    }
    public function field_action2($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("watering","watering+1",FALSE);
        $this->db->update("user_field1");
        return $this->db->affected_rows();
    }
    public function field_action3($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("manure","manure+1",FALSE);
        $this->db->update("user_field1");
        return $this->db->affected_rows();
    }
    public function field_action4($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("weeding","weeding+1",FALSE);
        $this->db->update("user_field1");
        return $this->db->affected_rows();
    }
    public function field_action5($id){
        $this->db->where(array("id"=>$id));
        $this->db->set("harvest","harvest+1",FALSE);
        $this->db->set("can_harvest","can_harvest-1",FALSE);
        $this->db->update("user_field1");
        $row = $this->db->get_where("user_field1",array("id"=>$id))->row();
        $name = $row->plant_name;
        $user_id = $row->user_id;
        $field_id = $row->field_id;
        $this->db->insert("user_harvest",array(
            "user_id" => $user_id,
            "field_id" => $field_id,
            "name" => $name
        ));
        return $this->db->affected_rows();
    }
    public function check_tools(){
        $query = $this->db->get("tools");
        return  $query->result();
    }
    public function field_tools1($arr,$tools,$id){
        foreach($arr as $the_arr) {
            $this->db->where(array("name" => $the_arr));
            $this->db->set("number", "number-1", FALSE);
            $this->db->update("tools");
            if ($the_arr == "manure") {
                $this->db->where(array("id" => $id));
                $this->db->set("manure", "manure+1", FALSE);
                $this->db->update("user_field1");
            } else if ($the_arr == "hoe") {
                $this->db->where(array("id" => $id));
                $this->db->set("weeding", "weeding+1", FALSE);
                $this->db->update("user_field1");
            } else if ($the_arr == "bucket") {
                $this->db->where(array("id" => $id));
                $this->db->set("watering", "watering+1", FALSE);
                $this->db->update("user_field1");
            }
        }
        $arr2 = explode(",",$tools);
        $tools2 = array();
        foreach($arr2 as $the_arr2){
            if($the_arr2=="manure"){
                array_push($tools2,"有机肥(5kg)");
            }else if($the_arr2=="hoe"){
                array_push($tools2,"锄头");
            }else if($the_arr2=="shovel"){
                array_push($tools2,"铲子");
            }else if($the_arr2=="bucket"){
                array_push($tools2,"水桶");
            }
        }
        $tools3 = implode(",", $tools2);
        $this->db->update("user_field1",array(
            "tools" => $tools3,
        ),array(
            "id" => $id
        ));
        $this->db->where(array("id"=>$id));
        $this->db->set("activity","activity-1",FALSE);
        $this->db->update("user_field1");
//        return $this->db->affected_rows();
    }
    public function field_tools2($arr,$tools,$id){
        foreach($arr as $the_arr) {
            $this->db->where(array("name" => $the_arr));
            $this->db->set("number", "number-1", FALSE);
            $this->db->update("tools");
        }
        $arr2 = explode(",",$tools);
        $tools2 = array();
        foreach($arr2 as $the_arr2){
            if($the_arr2=="basket"){
                array_push($tools2,"篮子");
            }else if($the_arr2=="gloves"){
                array_push($tools2,"手套");
            }
        }
        $tools3 = implode(",", $tools2);
        $this->db->update("user_field1",array(
            "tools" => $tools3,
        ),array(
            "id" => $id
        ));
        $this->db->where(array("id"=>$id));
        $this->db->set("harvest","harvest+1",FALSE);
        $this->db->set("can_harvest","can_harvest-1",FALSE);
        $this->db->update("user_field1");
//        return $this->db->affected_rows();
    }
    public function field_datetime($id,$date,$time){
        $d = mktime($time[0],$time[1],$time[2],$date[1],$date[2],$date[0]);
        $d2 = mktime($time[0]+4,$time[1],$time[2],$date[1],$date[2],$date[0]);
        $this->db->update("user_field1",array(
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
            "end_time" => $datetime
        ));
        $sum = $this->db->count_all_results("user_field2");
        if($sum==0){
            return "";
        }else{
            return "该地块的该时间段已被选中，请选择其他的时间段";
        }
    }
    public function my_harvest($user_id){
        $query = $this->db->get_where("user_harvest",array(
            "user_id" => $user_id
        ));
        return $query->result();
    }
    public function my_harvest2($user_id,$address){
        $this->db->update("user",array(
            "address" => $address,
        ),array(
            "id" => $user_id
        ));
        $query = $this->db->get_where("user",array(
            "id" => $user_id
        ))->row();
        $phone1 = $query->phone;
        $name = $query->username;
        $query2 = $this->db->get_where("manager",array(
            "type" => 1
        ))->row();
        $phone2 = $query2->phone;
        return $phone1." ".$name." ".$phone2;
    }
    public function my_activity($user_id){
        $query = $this->db->get_where("user_field1",array(
            "user_id" => $user_id
        ));
        $query2 = $this->db->get_where("user_field2",array(
            "user_id" => $user_id
        ));
        $rows1 = $query->result();
        $rows2 = $query2->result();
        return array_merge($rows1,$rows2);
    }
}