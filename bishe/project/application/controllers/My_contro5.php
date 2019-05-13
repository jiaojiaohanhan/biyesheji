<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');

class My_contro5 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        ignore_user_abort(true);
        set_time_limit(0);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        $this->load->model("time_model");
        ini_set("date.timezone","Asia/Shanghai");
    }
    public function plant_seeding(){
        $type = "2";
        $manager = $this->time_model->get_manager($type);
        $phone = $manager->phone;
        $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
        if(date("m")<=3&&date("m")>=1){
            $client->send($phone, "本月是春季，适合草莓、橘子、石榴、柠檬、猕猴桃、苹果、菠菜、黄瓜、番茄、茄子等的播种或接种");
        }else if(date("m")<=6&&date("m")>=4){
            $client->send($phone, "本月是夏季，适合黄瓜、豌豆等的播种或接种");
        }else if(date("m")<=9&&date("m")>=7){
            $client->send($phone, "本月是秋季，适合番茄、黄瓜、菠菜、白菜等的播种或接种");
        }
    }
    public function do_plant_seeding(){
        self::plant_seeding();
        sleep(1296000);//以秒计数
        self::plant_seeding();
    }
    public function action1()
    {
        while (1)
        {
            self::do_plant_seeding();
        }
    }
    public function change_field(){
        $this->time_model->change_field();
    }
    public function do_change_field(){
        self::change_field();
        sleep(43200);//以秒计数
        self::change_field();
    }
    public function action2()
    {
        while (1)
        {
            self::do_change_field();
        }
    }
    public function harvest_plant(){
        $rows = $this->time_model->get_plant();
        $type = "2";
        $manager = $this->time_model->get_manager($type);
        $phone = $manager->phone;
        foreach($rows as $row){
            $phone2 = $this->time_model->get_user($row->user_id)->phone;
            if($row->harvest_time < date("Y-m-d")){
                $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
                $client->send($phone, $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."已经成熟");
                $client->send($phone2, $row->field_id."号地块的您的".$row->plant_name."已经成熟");
                $this->time_model->set_plant_harvest($row->id);
            }
        }
    }
    public function do_harvest_plant(){
        self::harvest_plant();
        sleep(86400);//以秒计数
        self::harvest_plant();
    }
    public function action3()
    {
        while (1)
        {
            self::do_harvest_plant();
        }
    }
    public function user_active(){
        $rows = $this->time_model->get_plant();
        $type = "2";
        $manager = $this->time_model->get_manager($type);
        $phone = $manager->phone;
        foreach($rows as $row){
            $phone2 = $this->time_model->get_user($row->user_id)->phone;
            if($row->end_time < date("Y-m-d H:i:s")){
                $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
                $client->send($phone, $row->field_id."号地块的".$row->user_id."号用户的本次活动时间已经用完");
                $client->send($phone2,"您的本次活动时间已经用完");
                $this->time_model->set_user_time($row->id);
            }
        }
    }
    public function user_active2(){
        $rows = $this->time_model->user_active();
        $type = "3";
        $manager = $this->time_model->get_manager($type);
        $phone = $manager->phone;
        foreach($rows as $row){
            $phone2 = $this->time_model->get_user($row->user_id)->phone;
            if($row->datetime < date("Y-m-d H:i:s")){
                $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
                $client->send($phone, $row->field_id."号地块的".$row->user_id."号用户的本次活动时间已经用完");
                $client->send($phone2,"您的本次活动时间已经用完");
                $this->time_model->set_user_time2($row->id);
            }
        }
    }
    public function do_user_active(){
        self::user_active();
        sleep(600);//以秒计数
        self::user_active();
    }
    public function do_user_active2(){
        self::user_active2();
        sleep(600);//以秒计数
        self::user_active2();
    }
    public function action4()
    {
        while (1)
        {
            self::do_user_active();
            self::do_user_active2();
        }
    }
    public function manager_active(){
        $rows = $this->time_model->get_plant2();
        $type = "2";
        $manager = $this->time_model->get_manager($type);
        $phone = $manager->phone;
        foreach($rows as $row){
            $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
            $client->send($phone, $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."需要施肥和灌溉");
        }
    }
    public function manager_active2(){
        $rows = $this->time_model->get_plant2();
        $type = "2";
        $manager = $this->time_model->get_manager($type);
        $phone = $manager->phone;
        foreach($rows as $row){
            $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
            $client->send($phone, $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."需要除草");
        }
    }
    public function do_manager_active(){
        sleep(1728000);//以秒计数
        self::manager_active();
    }
    public function do_manager_active2(){
        sleep(864000);//以秒计数
        self::manager_active2();
    }
    public function action5()
    {
        while (1)
        {
            self::do_manager_active();
            self::do_manager_active2();
        }
    }
    public function manager_active3(){
        $this->time_model->manager_salary();
    }
    public function do_manager_active3(){
        sleep(2592000);//以秒计数
        self::manager_active3();
    }
    public function action6()
    {
        while (1)
        {
            self::do_manager_active3();
        }
    }
    public function flow_date(){
        $row = $this->time_model->manager_flow();
        if($row->date < date("Y-m-d")){
            $this->time_model->manager_flow2(date("Y-m-d"));
        }
    }
    public function do_flow_date(){
        sleep(600);//以秒计数
        self::flow_date();
    }
    public function action7()
    {
        while (1)
        {
            self::do_flow_date();
        }
    }
}
?>