<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function index_times(){
        $this->db->where(array("date" => date("Y-m-d")));
        $this->db->set("theIndex", "theIndex+1", FALSE);
        $this->db->update("flow");
        $this->db->where(array("id" => 1));
        $this->db->set("times", "times+1", FALSE);
        $this->db->update("index");
        $query = $this->db->get_where("index",array(
            "id" => 1
        ));
        return $query->row();
    }
    public function regist_times(){
        $this->db->where(array("date" => date("Y-m-d")));
        $this->db->set("regist", "regist+1", FALSE);
        $this->db->update("flow");
    }
    public function login_times(){
        $this->db->where(array("date" => date("Y-m-d")));
        $this->db->set("login", "login+1", FALSE);
        $this->db->update("flow");
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
        $pay1 = 0;
        $rows1 = $this->db->get("tools")->result();
        foreach($rows1 as $row1){
            $pay1 += $row1->cost;
        }
        $pay2 = 0;
        $rows2 = $this->db->get("plant")->result();
        foreach($rows2 as $row2){
            $pay2 += $row2->cost;
        }
        $rows3 = $this->db->get("manager")->result();
        $pay3 = 0;
        foreach($rows3 as $row3){
            $pay3 += $row3->sum;
        }
        return $pay1." ".$pay2." ".$pay3;
    }
    public function all_income(){
        $query = $this->db->get("user_pay");
        return  $query->result();
    }
    public function all_money(){
        $pay1 = 0;
        $rows1 = $this->db->get("tools")->result();
        foreach($rows1 as $row1){
            $pay1 += $row1->cost;
        }
        $pay2 = 0;
        $rows2 = $this->db->get("plant")->result();
        foreach($rows2 as $row2){
            $pay2 += ($row2->seed_price)/5*($row2->number);
        }
        $pay3 = 0;
        $rows3 = $this->db->get("manager")->result();
        foreach($rows3 as $row3){
            $pay3 += $row3->sum;
        }
        $pay = $pay1+$pay2+$pay3;
        $rows4 = $this->db->get("user_pay")->result();
        $income = 0;
        foreach($rows4 as $row4){
            $income += $row4->money;
        }
        $profit = $income-$pay;
        return $pay." ".$income." ".$profit;
    }
    public function the_user($user_id){
        return $this->db->get_where("user",array("id" => $user_id))->row();
    }
    public function the_field($field_id){
        return $this->db->get_where("field_keys",array("id" => $field_id))->row();
    }
    public function all_workers(){
//        $query = $this->db->where("type=","2")->or_where("type=","3")->get("manager");
        $query = $this->db->get("manager");
        return  $query->result();
    }
    public function worker_change($identity,$username,$type,$password,$phone,$number,$salary,$id){
        $data = array(
            "identity" => $identity,
            "name" => $username,
            "password" => $password,
            "type" => $type,
            "phone" => $phone,
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
    public function worker_add($identity,$username,$type,$password,$phone,$number,$salary){
        $data = array(
            "identity" => $identity,
            "name" => $username,
            "password" => $password,
            "type" => $type,
            "phone" => $phone,
            "number" => $number,
            "salary" => $salary
        );
        $this->db->insert("manager",$data);
        return $this->db->affected_rows();
    }
    public function all_keys(){
        $query = $this->db->get("field_keys");
        return  $query->result();
    }
    public function key_add($id){
        $keys = $this->db->get_where("field_keys",array("id" => $id))->row()->keys;
        $keys2 = $this->db->get_where("field_keys",array("id" => $id))->row()->allKeys;
        if($keys<$keys2){
            $this->db->update("field_keys",array(
                "keys" => $keys+1
            ),array(
                "id" => $id,
            ));
        }
    }
    public function key_sub($id){
        $keys = $this->db->get_where("field_keys",array("id" => $id))->row()->keys;
        if($keys>0){
            $this->db->update("field_keys",array(
                "keys" => $keys-1
            ),array(
                "id" => $id,
            ));
        }
    }
    public function all_tools(){
        $query = $this->db->get("tools");
        return  $query->result();
    }
    public function tool_add($name){
        $num = $this->db->get_where("tools",array("name" => $name))->row()->number;
        $price = $this->db->get_where("tools",array("name" => $name))->row()->price;
        if($num<10000){
            $this->db->where(array("name"=>$name));
            $this->db->set("number","number+1",FALSE);
            $this->db->update("tools");
            $this->db->where(array("name"=>$name));
            $this->db->set("cost","cost+$price",FALSE);
            $this->db->update("tools");
        }
    }
    public function tool_sub($name){
        $num = $this->db->get_where("tools",array("name" => $name))->row()->number;
        $price = $this->db->get_where("tools",array("name" => $name))->row()->price;
        if($num>0){
            $this->db->where(array("name"=>$name));
            $this->db->set("number","number-1",FALSE);
            $this->db->update("tools");
        }
    }
    public function tool_change($arr){
        $name = $arr[0];
        $num1 = $this->db->get_where("tools",array("name" => $name))->row()->number;
        $cost1 = $this->db->get_where("tools",array("name" => $name))->row()->cost;
        $price = $this->db->get_where("tools",array("name" => $name))->row()->price;
        $num2 = $arr[1];
        if($num1<$num2){
            if($name=="manure"||$name=="charcoal"){
                $cost2 = ($num2-$num1)*$price+$cost1;
            }else{
                $cost2 = ($num2-100)*$price+$cost1;
            }
            $this->db->where(array("name" => $name));
            $this->db->set("cost",$cost2,FALSE);
            $this->db->update("tools");
        }
        $this->db->where(array("name" => $name));
        $this->db->set("number",$num2,FALSE);
        $this->db->update("tools");
    }
    public function all_plants(){
        $query = $this->db->get("plant");;
        return  $query->result();
    }
    public function plant_add($name){
        $row = $this->db->get_where("plant",array("english"=>$name))->row();
        $num = $row->number;
        if($num<100) {
            $cost = $row->cost;
            $cost += ($row->seed_price)/5;
            $this->db->where(array("english" => $name));
            $this->db->set("number", "number+1", FALSE);
            $this->db->set("cost",$cost,FALSE);
            $this->db->update("plant");
        }
    }
    public function plant_sub($name){
        $num = $this->db->get_where("plant",array("english"=>$name))->row()->number;
        if($num>0){
            $this->db->where(array("english"=>$name));
            $this->db->set("number","number-1",FALSE);
            $this->db->update("plant");
        }
    }
    public function plant_change($arr){
        $name = $arr[0];
        $row = $this->db->get_where("plant",array("english" => $name))->row();
        $num1 = $row->number;
        $num2 = $arr[1];
        $cost = $row->cost;
        if($num1<$num2){
            $cost += ($row->seed_price)/5*($num2-$num1);
        }
        $this->db->where(array("english"=>$name));
        $this->db->set("number",$num2,FALSE);
        $this->db->set("cost",$cost,FALSE);
        $this->db->update("plant");
    }
    public function check_plant($name){
        return $this->db->get_where("plant",array("name"=>$name))->row();
    }
    public function new_plant($name,$seed_price,$work_price,$english,$days){
        $data = array(
            "name" => $name,
            "seed_price" => $seed_price,
            "work_price" => $work_price,
            "number" => 10,
            "english" => $english,
            "cost" => $seed_price/5*10,
            "days" => $days
        );
        $this->db->insert("plant",$data);
        return $this->db->affected_rows();
    }
    public function all_harvest(){
        return $this->db->get("user_harvest")->result();
    }
    public function the_field2($field_id){
        return $this->db->get_where("field1",array("id" => $field_id))->row();
    }
    public function the_harvest($id){
        return $this->db->get_where("user_harvest",array("id" => $id))->row();
    }
    public function harvest_delete($id){
        $this->db->where("id", $id);
        $this->db->delete("user_harvest");
        return $this->db->affected_rows();
    }
    public function all_flow1(){
        return $this->db->limit(7)->order_by('id DESC')->select("date")->get("flow")->result();
    }
    public function all_flow2(){
        return $this->db->limit(7)->order_by('id DESC')->select("theIndex")->get("flow")->result();
    }
    public function all_flow3(){
        return $this->db->limit(7)->order_by('id DESC')->select("login")->get("flow")->result();
    }
    public function all_flow4(){
        return $this->db->limit(7)->order_by('id DESC')->select("regist")->get("flow")->result();
    }
}