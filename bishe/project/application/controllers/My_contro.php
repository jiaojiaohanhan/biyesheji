<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');

class My_contro extends CI_Controller {
    //主页
    public function index(){
        $this->load->view("index",array(
            "token" => "",
            "id" => "",
            "username" => ""
        ));
    }
    //退出
    public function index2(){
        $this->load->view("index2");
    }
    //注册页面
    public function register(){
        $this->load->view("regist");
    }
    //登录页面
    public function login(){
        $this->load->view("login");
    }
    //注册
    public function regist()
    {
        $this->load->model("user_model");
        $username = $this->input->post("Name");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $wechat = $this->input->post("Wechat");
        $phone= $this->input->post("Phone");
        $row = $this->user_model->user_save($username,$wechat,$phone,$password);
        redirect("My_contro/login");
    }
    //手机登录
    public function login_phone()
    {
        $this->load->model("user_model");
        $phone = $this->input->post("Phone");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        //生成token
        $time = time();
        $header = array(
            'typ' => 'JWT',
            "alg" => 'HS256'
        );
        $array = array(
            'iss' => 'auth', // 权限验证作者
            'iat' => $time, // 时间戳
            'sub' => 'demo', // 案例
            'exp' => '1438955445',//过期时间
            'user_name' => $phone,
            'password'=> $password
        ) // 用户名
        ;
        $str = base64_encode(json_encode($header)) . '.' . base64_encode(json_encode($array)); // 数组转成字符
        $str = urlencode($str); // 通过url转码
        $str = hash("sha256",($str.'secret'));
        $token = $str;
        $row = $this->user_model->user_phone($phone,$password,$token);
        if($row){
            $id = $this->user_model->get_by_phone($phone)->id;
            $username = $this->user_model->get_by_phone($phone)->username;
            $this->load->view("index",array(
                "token" => $token,
                "id" => $id,
                "username" => $username
            ));
        }else{
            echo "用户不存在或密码不正确";
        }
    }
    //微信登录
    public function login_wechat()
    {
        $this->load->model("user_model");
        $wechat = $this->input->post("Wechat");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        //生成token
        $time = time();
        $header = array(
            'typ' => 'JWT',
            "alg" => 'HS256'
        );
        $array = array(
            'iss' => 'auth', // 权限验证作者
            'iat' => $time, // 时间戳
            'sub' => 'demo', // 案例
            'exp' => '1438955445',//过期时间
            'user_name' => $wechat,
            'password'=> $password
        ) // 用户名
        ;
        $str = base64_encode(json_encode($header)) . '.' . base64_encode(json_encode($array)); // 数组转成字符
        $str = urlencode($str); // 通过url转码
        $str = hash("sha256",($str.'secret'));
        $token = $str;
        $row = $this->user_model->user_wechat($wechat,$password,$token);
        if($row){
            $id = $this->user_model->get_by_wechat($wechat)->id;
            $username = $this->user_model->get_by_wechat($wechat)->username;
            $this->load->view("index",array(
                "token" => $token,
                "id" => $id,
                "username" => $username
            ));
        }else{
            echo "用户不存在或密码不正确";
        }
    }
    //登录校验
    public function check_login(){
        $this->load->model("user_model");
        $id = $this->input->post("id");
        $token = $_SERVER["HTTP_AUTHORIZATION"];
        $row = $this->user_model->get_by_id($id);
        if($row->token==$token){
            echo "success";
        }else{
            echo "fail";
        };
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //验证码短信
    public function SMS()
    {
        $phone = $this->input->get("number");
        $message = $this->input->get("message");
        $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
        $result = $client->send($phone, "您的验证码为".$message."，有效时间为5分钟");
        $json = json_decode($result);
        echo $json;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //注册手机校验
    public function check_phone(){
        $this->load->model("user_model");
        $phone = $this->input->get("number");
        if($phone!="") {
            $result = $this->user_model->get_by_phone($phone);
            if ($result) {
                echo "fail";
            } else {
                echo "success";
            }
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //注册微信校验
    public function check_wechat(){
        $this->load->model("user_model");
        $wechat = $this->input->get("wechat");
        if($wechat!="") {
            $result = $this->user_model->get_by_wechat($wechat);
            if ($result) {
                echo "fail";
            } else {
                echo "success";
            }
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //管理人员界面
    public function manager_login(){
        $this->load->view("managerLogin");
    }
    //关于我们
    public function about(){
        $this->load->view("about");
    }
    //我们的服务
    public function services(){
        $this->load->view("services");
    }
    //陈列室
    public function gallery(){
        $this->load->view("gallery");
    }
    //联系我们
    public function contact_us(){
        $this->load->view("contact");
    }
}
