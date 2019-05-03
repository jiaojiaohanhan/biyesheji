<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_model extends CI_Model {
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
    public function get_by_identity($identity){
        return $this->db->get_where("manager",array("identity" => $identity))->row();
    }
    public function get_by_number($number){
        return $this->db->get_where("manager",array("number" => $number))->row();
    }
    public function all_money(){
        $query = $this->db->get("user_field2");
        return  $query->result();
    }
    public function the_user($user_id){
        return $this->db->get_where("user",array("id" => $user_id))->row();
    }
    public function the_field($field_id){
        return $this->db->get_where("field3",array("id" => $field_id))->row();
    }
    public function all_workers(){
        $query = $this->db->where("type=","2")->or_where("type=","3")->get("manager");
        return  $query->result();
    }
    public function worker_change($identity,$username,$type,$password,$number,$id){
        $data = array(
            "identity" => $identity,
            "name" => $username,
            "password" => $password,
            "type" => $type,
            "number" => $number
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
    public function worker_add($identity,$username,$type,$password,$number){
        $data = array(
            "identity" => $identity,
            "name" => $username,
            "password" => $password,
            "type" => $type,
            "number" => $number
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
        if($name=="manure"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->manure;
            if($num<10000){
                $this->db->where(array("id"=>1));
                $this->db->set("manure","manure+1",FALSE);
                $this->db->update("tools");
            }
        }else if($name=="hoe"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->hoe;
            if($num<10000) {
                $this->db->where(array("id" => 1));
                $this->db->set("hoe", "hoe+1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="shovel"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->shovel;
            if($num<10000) {
                $this->db->where(array("id" => 1));
                $this->db->set("shovel", "shovel+1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="bucket"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->bucket;
            if($num<10000) {
                $this->db->where(array("id" => 1));
                $this->db->set("bucket", "bucket+1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="basket"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->basket;
            if($num<10000) {
                $this->db->where(array("id" => 1));
                $this->db->set("basket", "basket+1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="gloves"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
            if($num<10000) {
                $this->db->where(array("id" => 1));
                $this->db->set("gloves", "gloves+1", FALSE);
                $this->db->update("tools");
            }
        }
    }
    public function tool_sub($name){
        if($name=="manure"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->manure;
            if($num>0){
                $this->db->where(array("id"=>1));
                $this->db->set("manure","manure-1",FALSE);
                $this->db->update("tools");
            }
        }else if($name=="hoe"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->hoe;
            if($num>0) {
                $this->db->where(array("id" => 1));
                $this->db->set("hoe", "hoe-1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="shovel"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->shovel;
            if($num>0) {
                $this->db->where(array("id" => 1));
                $this->db->set("shovel", "shovel-1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="bucket"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->bucket;
            if($num>0) {
                $this->db->where(array("id" => 1));
                $this->db->set("bucket", "bucket-1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="basket"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->basket;
            if($num>0) {
                $this->db->where(array("id" => 1));
                $this->db->set("basket", "basket-1", FALSE);
                $this->db->update("tools");
            }
        }else if($name=="gloves"){
            $num = $this->db->get_where("tools",array("id" => 1))->row()->gloves;
            if($num>0) {
                $this->db->where(array("id" => 1));
                $this->db->set("gloves", "gloves-1", FALSE);
                $this->db->update("tools");
            }
        }
    }
    public function tool_change($arr){
        $this->db->where(array("id"=>1));
        $this->db->set($arr[0],$arr[1],FALSE);
        $this->db->update("tools");
    }
}