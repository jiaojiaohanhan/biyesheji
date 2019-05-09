<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');
require_once('unit/Smtp.class.php');

class My_contro extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->model("user_model");
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
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
        $this->load->view("login",array(
            "msg" => ""
        ));
    }
    //注册
    public function regist()
    {
        $username = $this->input->post("Name");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $wechat = $this->input->post("Wechat");
        $phone= $this->input->post("Phone");
        $file_name= $this->input->post("Filename");
        $img_name = $username."_".$phone.".".$file_name;
        $config["upload_path"] = "./uploads/";
        $config["allowed_types"] = "gif|jpg|jpeg|png|svg";
        $config["max_size"] = 0;
        $config["max_width"] = 0;
        $config["max_height"] = 0;
        $config["file_name"] = $img_name;
        $this->load->library("upload", $config);
        $this->upload->do_upload("Userfile");
        $row = $this->user_model->user_save($username,$wechat,$phone,$password,$img_name);
        redirect("My_contro/login");
    }
    //手机登录
    public function login_phone()
    {
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
            $this->load->view("login",array(
                "msg" => "用户不存在或密码不正确"
            ));
        }
    }
    //微信登录
    public function login_wechat()
    {
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
            $this->load->view("login",array(
                "msg" => "用户不存在或密码不正确"
            ));
        }
    }
    //登录校验
    public function check_login(){
        $id = $this->input->post("id");
        $token = $_SERVER["HTTP_AUTHORIZATION"];
        $row = $this->user_model->get_by_id($id);
        if($row->token==$token){
            echo "success";
        }else{
            echo "fail";
        };
    }
    //用户信息
    public function user_info(){
        $id = $this->input->get("id");
        $row = $this->user_model->get_by_id($id);
        echo $row->username." ";
        echo $row->image;
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
    }
    //注册手机校验
    public function check_phone(){
        $phone = $this->input->get("number");
        if($phone!="") {
            $result = $this->user_model->get_by_phone($phone);
            if ($result) {
                echo "fail";
            } else {
                echo "success";
            }
        }
    }
    //注册微信校验
    public function check_wechat(){
        $wechat = $this->input->get("wechat");
        if($wechat!="") {
            $result = $this->user_model->get_by_wechat($wechat);
            if ($result) {
                echo "fail";
            } else {
                echo "success";
            }
        }
    }
    //用户修改密码
    public function change_password(){
        $phone = $this->input->post("Phone");
        $wechat = $this->input->post("Wechat");
        $password = $this->input->post("Re_password");
        $password = md5(md5($password));
        $row = $this->user_model->change_password($phone,$wechat,$password);
        if($row==1){
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
            echo "<div style='width:300px; margin:36px auto;'>";
            echo "修改成功!";
            echo "<a href='login'>点此返回</a>";
            echo "</div>";
            echo "</html>";
        }else{
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
            echo "<div style='width:300px; margin:36px auto;'>";
            echo "修改出现问题，请重新修改!";
            echo "<a href='login'>点此返回</a>";
            echo "</div>";
            echo "</html>";
        }
    }
    //管理人员界面
    public function manager_login(){
        $this->load->view("managerLogin",array(
            "msg" => ""
        ));
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
    //发送邮件
    public function send_email(){
        $name = $this->input->post("Name");
        $email = $this->input->post("Email");//发送给谁
        $subject = $this->input->post("Subject");//邮件主题
        $message = $this->input->post("Message");//邮件内容
        //******************** 配置信息 ********************************
        $smtpserver = "smtp.163.com";//SMTP服务器
        $smtpserverport =25;//SMTP服务器端口
        $smtpusermail = "15774603281@163.com";//SMTP服务器的用户邮箱
        $smtpuser = "15774603281@163.com";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
        $smtppass = "123456jh";//SMTP服务器的授权码
        $mailtype = "TXT";//邮件格式（HTML/TXT）,TXT为文本邮件
        //************************ 配置信息 ****************************
        $smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
        $smtp->debug = false;//是否显示发送的调试信息
        $state = $smtp->sendmail($email, $smtpusermail, $subject, $name.$message, $mailtype);
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
        echo "<div style='width:300px; margin:36px auto;'>";
        if($state==""){
            echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
            echo "<a href='index'>点此返回</a>";
            echo "</div>";
            echo "</html>";
            exit();
        }
        echo "邮件发送成功！！";
        echo "<a href='index'>点此返回</a>";
        echo "</div>";
        echo "</html>";
    }
    public function send_email2(){
        $name = $this->input->post("yourName");
        $email = $this->input->post("yourEmail");//发送给谁
        $this->user_model->user_email($name,$email);
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
        echo "<div style='width:300px; margin:36px auto;'>";
        echo "<div style='width:300px; margin:36px auto;'>";
        echo "订阅简讯成功！！";
        echo "<a href='index'>点此返回</a>";
        echo "</div>";
        echo "</html>";
    }
}
