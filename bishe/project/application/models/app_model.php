<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function app_info(){
        $query = $this->db->get_where("app",array(
            "id" => 1
        ));
        return $query->row();
    }
    public function get_by_phone($phone,$avatarUrl,$openid){
        $query = $this->db->get_where("user",array("phone" => $phone))->row();
        if($query!=""){
            $this->db->update("user",array(
                "image" => $avatarUrl,
                "openid" => $openid
            ),array(
                "phone" => $phone
            ));
        }
        return $query;
    }
    public function get_by_openId($openid){
        $user_id = $this->db->get_where("user",array("openid" => $openid))->row()->id;
        $query = $this->db->get_where("user_field1",array("user_id" => $user_id));
        return $query->result();
    }
    public function field_name($field_id){
        $query = $this->db->get_where("field_keys",array("id" => $field_id));
        return $query->row();
    }
}