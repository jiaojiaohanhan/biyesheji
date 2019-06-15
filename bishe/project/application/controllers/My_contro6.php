<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_contro6 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        $this->load->model("app_model");
        $this->load->model("user_model");
    }
    //小程序信息
    public function app()
    {
        $row = $this->app_model->app_info();
        echo $row->AppId." ".$row->AppSercet;
    }
    //小程序注册
    public function regist()
    {
        $username = $this->input->post("name");
        $password = $this->input->post("password");
        $password = md5(md5($password));
        $wechat = $this->input->post("wechat");
        $phone= $this->input->post("phone");
        $row = $this->user_model->user_save($username,$wechat,$phone,$password,null);
        if($row==1){
            echo "success";
        }else{
            echo "fail";
        }
    }
    //小程序登录
    public function check_phone(){
        $phone = $this->input->get("phone");
        $avatarUrl = $this->input->get("avatarUrl");
        $openid = $this->input->get("openid");
        if($phone!="") {
            $row = $this->app_model->get_by_phone($phone,$avatarUrl,$openid);
            print_r($row);
        }
    }
    //用户的作物
    public function user_field(){
        $openid = $this->input->get("openid");
        $rows = $this->app_model->get_by_openId($openid);
        foreach($rows as $row){
            $field_name = $this->app_model->field_name($row->field_id)->field_name;
            echo $field_name." ";
            echo $row->plant_name." ";
        }
    }
    //支付
    public function pay_field(){
        $user_id = $this->input->get("openId");
        $field_id = $this->input->get("field_id");
        $plant_names = $this->input->get("plant_names");
        $the_sur = $this->input->get("the_sur");
        $money = $this->input->get("money");
        echo $user_id,$field_id,$plant_names,$the_sur,$money;
//        $rows = $this->field_model->user_field($user_id,$field_id,$plant_names,$the_sur,$money);
    }
}
