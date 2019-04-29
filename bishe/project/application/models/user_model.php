<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function user_save($name,$wechat,$phone,$password){
        $query = $this->db->insert("user",array(
            "username" => $name,
            "password" => $password,
            "wechat" => $wechat,
            "phone" => $phone,
        ));
//        return $query->row();
    }
    public function user_phone($phone,$password,$token){
        $query = $this->db->get_where("user",array(
            "phone" => $phone,
            "password" => $password
        ));
        if($query->row()){
            $data = array(
                "token" => $token
            );
            $this->db->update("user",$data,array(
                "phone" => $phone,
                "password" => $password
            ));
        }
        $this->db->where('phone',$phone);
        $this->db->select('token');
        $query2= $this->db->get('user');
        return $query2->row();
    }
    public function user_wechat($wechat,$password,$token){
        $query = $this->db->get_where("user",array(
            "wechat" => $wechat,
            "password" => $password
        ));
        if($query->row()){
            $data = array(
                "token" => $token
            );
            $this->db->update("user",$data,array(
                "wechat" => $wechat,
                "password" => $password
            ));
        }
        $this->db->where('wechat',$wechat);
        $this->db->select('token');
        $query2= $this->db->get('user');
        return $query2->row();
    }
    public function get_by_phone($phone){
        return $this->db->get_where("user",array("phone" => $phone))->row();
    }
    public function get_by_wechat($wechat){
        return $this->db->get_where("user",array("wechat" => $wechat))->row();
    }
    public function get_by_id($id){
        return $this->db->get_where("user",array("id" => $id))->row();
    }
}