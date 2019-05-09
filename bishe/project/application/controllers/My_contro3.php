<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');

class My_contro3 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->model("manager_model");
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //总管理人员注册
    public function regist()
    {
        $identity = $this->input->post("ID1");
        $username = $this->input->post("Name");
        $password = $this->input->post("Password1");
        $password = md5(md5($password));
        $row = $this->manager_model->manager_save($identity,$username,$password);
        if($row){
            redirect("My_contro/manager_login");
        }
    }
    //注册校验
    public function check_id(){
        $identity = $this->input->get("identity");
        if($identity!="") {
            $row = $this->manager_model->get_by_identity($identity);
            if ($row) {
                echo "fail";
            } else {
                echo "success";
            }
        }
    }
    public function check_number(){
        $number = $this->input->get("number");
        if($number!="") {
            $row = $this->manager_model->get_by_number($number);
            if ($row) {
                echo "fail";
            } else {
                echo "success";
            }
        }
    }
    //总管理人员登录
    public function main_login()
    {
        $identity = $this->input->post("ID2");
        $password = $this->input->post("Password2");
        $password = md5(md5($password));
        $row = $this->manager_model->manager_login($identity,$password);
        if($row){
            $this->load->view("fieldManager2",array(
                "message" => ""
            ));
        }else{
            $this->load->view("managerLogin",array(
                "msg" => "用户不存在或密码不正确"
            ));
        }
    }
    //普通地块管理人员登录
    public function login1()
    {
        $number = $this->input->post("Number");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $row = $this->manager_model->manager_login2($number,$password);
        if($row){
            $this->load->view("fieldManager1");
        }else{
            $this->load->view("managerLogin",array(
                "msg" => "用户不存在或密码不正确"
            ));
        }
    }
    public function login2()
    {
        $this->load->view("fieldManager1");
    }
    //特殊地块管理人员登录
    public function login3()
    {
        $number = $this->input->post("Number");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $row = $this->manager_model->manager_login3($number,$password);
        if($row){
            $this->load->view("fieldManager3");
        }else{
            $this->load->view("managerLogin",array(
                "msg" => "用户不存在或密码不正确"
            ));
        }
    }
    public function login4()
    {
        $this->load->view("fieldManager3");
    }
}
