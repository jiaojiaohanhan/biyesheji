<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function manager_save($identity,$name,$password){
        $query = $this->db->insert("manager",array(
            "name" => $name,
            "password" => $password,
            "identity" => $identity,
            "type" => 1
        ));
        $this->db->select("*");
        $this->db->like("type",1);
        $sum = $this->db->count_all_results("manager");
        $num = 100000+$sum;
        $query2 = $this->db->update("manager",array(
            "number" => $num
        ),array(
            "identity" => $identity
        ));
        return $this->db->affected_rows();
    }
    public function manager_login($identity,$password){
        $query = $this->db->get_where("manager",array(
            "identity" => $identity,
            "password" => $password
        ));
        return $query->row();
    }
    public function manager_login2($number,$password){
        $query = $this->db->get_where("manager",array(
            "number" => $number,
            "password" => $password,
            "type" => "2"
        ));
        return $query->row();
    }
    public function manager_login3($number,$password){
        $query = $this->db->get_where("manager",array(
            "number" => $number,
            "password" => $password,
            "type" => "3"
        ));
        return $query->row();
    }
    public function get_by_identity($identity){
        return $this->db->get_where("manager",array("identity" => $identity))->row();
    }
    public function get_by_number($number){
        return $this->db->get_where("manager",array("number" => $number))->row();
    }
    public function all_pay(){
        $pay1 = $this->db->get_where("tools",array("id" => 1))->row()->cost;
        $rows = $this->db->get("manager")->result();
        $pay2 = 0;
        foreach($rows as $row){
            $pay2+=$row->sum;
        }
        return $pay1." ".$pay2;
    }
    public function all_income(){
        $query = $this->db->get("user_field2");
        return  $query->result();
    }
    public function all_money(){
        $pay1 = $this->db->get_where("tools",array("id" => 1))->row()->cost;
        $rows1 = $this->db->get("manager")->result();
        $pay2 = 0;
        foreach($rows1 as $row){
            $pay2+=$row->sum;
        }
        $pay = $pay1+$pay2;
        $rows2 = $this->db->get("user_field2")->result();
        $income = 0;
        foreach($rows2 as $row){
            $income+=$row->money;
        }
        $profit = $income-$pay;
        return $pay." ".$income." ".$profit;
    }
    public function the_user($user_id){
        return $this->db->get_where("user",array("id" => $user_id))->row();
    }
    public function the_field($field_id){
        return $this->db->get_where("field3",array("id" => $field_id))->row();
    }
    public function all_workers(){
//        $query = $this->db->where("type=","2")->or_where("type=","3")->get("manager");
        $query = $this->db->get("manager");
        return  $query->result();
    }
    public function worker_change($identity,$username,$type,$password,$number,$salary,$id){
        $data = array(
            "identity" => $identity,
            "name" => $username,
            "password" => $password,
            "type" => $type,
            "number" => $number,
            "salary" => $salary
        );
        $this->db->update("manager",$data,array(
            "id" => $id,
        ));
        return $this->db->affected_rows();
    }
    public function worker_delete($id){
        $this->db->where("id", $id);
        $this->db->delete("manager");
        return $this->db->affected_rows();
    }
    public function worker_add($identity,$username,$type,$password,$number,$salary){
        $data = array(
            "identity" => $identity,
            "name" => $username,
            "password" => $password,
            "type" => $type,
            "number" => $number,
            "salary" => $salary
        );
        $this->db->insert("manager",$data);
        return $this->db->affected_rows();
    }
    public function all_keys(){
        $query = $this->db->get("field3");
        return  $query->result();
    }
    public function key_add($id){
        $keys = $this->db->get_where("field3",array("id" => $id))->row()->keys;
        $keys2 = $this->db->get_where("field3",array("id" => $id))->row()->allKeys;
        if($keys<$keys2){
            $this->db->update("field3",array(
                "keys" => $keys+1
            ),array(
                "id" => $id,
            ));
        }
    }
    public function key_sub($id){
        $keys = $this->db->get_where("field3",array("id" => $id))->row()->keys;
        if($keys>0){
            $this->db->update("field3",array(
                "keys" => $keys-1
            ),array(
                "id" => $id,
            ));
        }
    }
    public function all_tools(){
        $query = $this->db->get_where("tools",array(
            "id" => 1
        ));;
        return  $query->row();
    }
    public function tool_add($name){
        switch ($name) {
            case "manure":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->manure;
                if($num<10000){
                    $this->db->where(array("id"=>1));
                    $this->db->set("manure","manure+1",FALSE);
                    $this->db->update("tools");
                    $this->db->where(array("id"=>1));
                    $this->db->set("cost","cost+100",FALSE);
                    $this->db->update("tools");
                }
                break;
            case "hoe":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->hoe;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("hoe", "hoe+1", FALSE);
                    $this->db->update("tools");
                    if($num>99){
                        $this->db->where(array("id"=>1));
                        $this->db->set("cost","cost+30",FALSE);
                        $this->db->update("tools");
                    }
                }
                break;
            case "shovel":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->shovel;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("shovel", "shovel+1", FALSE);
                    $this->db->update("tools");
                    if($num>99){
                        $this->db->where(array("id"=>1));
                        $this->db->set("cost","cost+30",FALSE);
                        $this->db->update("tools");
                    }
                }
                break;
            case "bucket":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->bucket;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("bucket", "bucket+1", FALSE);
                    $this->db->update("tools");
                    if($num>99){
                        $this->db->where(array("id"=>1));
                        $this->db->set("cost","cost+20",FALSE);
                        $this->db->update("tools");
                    }
                }
                break;
            case "basket":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->basket;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("basket", "basket+1", FALSE);
                    $this->db->update("tools");
                    if($num>99){
                        $this->db->where(array("id"=>1));
                        $this->db->set("cost","cost+40",FALSE);
                        $this->db->update("tools");
                    }
                }
                break;
            case "gloves":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("gloves", "gloves+1", FALSE);
                    $this->db->update("tools");
                    if($num>99){
                        $this->db->where(array("id"=>1));
                        $this->db->set("cost","cost+20",FALSE);
                        $this->db->update("tools");
                    }
                }
                break;
            case "barbecue":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("barbecue", "barbecue+1", FALSE);
                    $this->db->update("tools");
                    if($num>99){
                        $this->db->where(array("id"=>1));
                        $this->db->set("cost","cost+100",FALSE);
                        $this->db->update("tools");
                    }
                }
                break;
            default:
                $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
                if($num<10000) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("charcoal", "charcoal+1", FALSE);
                    $this->db->update("tools");
                    $this->db->where(array("id"=>1));
                    $this->db->set("cost","cost+50",FALSE);
                    $this->db->update("tools");
                }
        }
    }
    public function tool_sub($name){
        switch ($name) {
            case "manure":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->manure;
                if($num>0){
                    $this->db->where(array("id"=>1));
                    $this->db->set("manure","manure-1",FALSE);
                    $this->db->update("tools");
                }
                break;
            case "hoe":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->hoe;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("hoe", "hoe-1", FALSE);
                    $this->db->update("tools");
                }
                break;
            case "shovel":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->shovel;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("shovel", "shovel-1", FALSE);
                    $this->db->update("tools");
                }
                break;
            case "bucket":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->bucket;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("bucket", "bucket-1", FALSE);
                    $this->db->update("tools");
                }
                break;
            case "basket":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->basket;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("basket", "basket-1", FALSE);
                    $this->db->update("tools");
                }
                break;
            case "gloves":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("gloves", "gloves-1", FALSE);
                    $this->db->update("tools");
                }
                break;
            case "barbecue":
                $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("barbecue", "barbecue-1", FALSE);
                    $this->db->update("tools");
                }
                break;
            default:
                $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
                if($num>0) {
                    $this->db->where(array("id" => 1));
                    $this->db->set("charcoal", "charcoal-1", FALSE);
                    $this->db->update("tools");
                }
        }
    }
    public function tool_change($arr){
        $name = $arr[0];
        $num1 = $this->db->get_where("tools",array("id" => 1))->row()->$name;
        $cost1 = $this->db->get_where("tools",array("id" => 1))->row()->cost;
        $price = $this->db->get_where("tools_price",array("name" => $name))->row()->price;
        $num2 = $arr[1];
        if($num1<$num2){
            if($name=="manure"||$name=="charcoal"){
                $cost2 = ($num2-$num1)*$price+$cost1;
            }else{
                $cost2 = ($num2-100)*$price+$cost1;
            }
            $this->db->where(array("id"=>1));
            $this->db->set("cost",$cost2,FALSE);
            $this->db->update("tools");
        }
        $this->db->where(array("id"=>1));
        $this->db->set($name,$num2,FALSE);
        $this->db->update("tools");
    }
}