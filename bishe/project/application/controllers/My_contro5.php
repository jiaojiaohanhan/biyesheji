<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_contro5 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
//        ignore_user_abort(true);
//        set_time_limit(0);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        $this->load->model("time_model");
    }
//    public function write_txt()
//    {
//        $this->load->model("test_model");
//        $this->test_model->test();
//    }
//    public function do_cron()
//    {
//        sleep(3);//以秒计数
//        self::write_txt();
//    }
//    public function write()
//    {
//        while (1)
//        {
//            self::do_cron();
//        }
//    }
    public function change_field(){
        $this->time_model->change_field();
    }
    public function do_change_field(){
        self::change_field();
        sleep(43200);//以秒计数
        self::change_field();
    }
    public function action1()
    {
        while (1)
        {
            self::do_change_field();
        }
    }
    public function harvest_plant(){
        $rows = $this->time_model->get_plant();
        foreach($rows as $row){
            if($row->harvest_time < date("Y-m-d")){
                echo $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."已经成熟";
                $this->time_model->set_plant_harvest($row->id);
            }
        }
    }
    public function do_harvest_plant(){
        self::harvest_plant();
        sleep(86400);//以秒计数
        self::harvest_plant();
    }
    public function action2()
    {
        while (1)
        {
            self::do_harvest_plant();
        }
    }
    public function user_active(){
        $rows = $this->time_model->get_plant();
        foreach($rows as $row){
            if($row->end_time < date("Y-m-d H:i:s")){
                echo $row->field_id."号地块的".$row->user_id."号用户的本次活动时间已经用完";
                $this->time_model->set_user_time($row->id);
            }
        }
    }
    public function do_user_active(){
        self::user_active();
        sleep(600);//以秒计数
        self::user_active();
    }
    public function action3()
    {
        while (1)
        {
            self::do_user_active();
        }
    }
    public function manager_active(){
        $rows = $this->time_model->get_plant2();
        foreach($rows as $row){
            echo $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."需要施肥";
            echo $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."需要灌溉";
        }
    }
    public function manager_active2(){
        $rows = $this->time_model->get_plant2();
        foreach($rows as $row){
            echo $row->field_id."号地块的".$row->user_id."号用户的".$row->plant_name."需要除草";
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
    public function action4()
    {
        while (1)
        {
            self::do_manager_active();
            self::do_manager_active2();
        }
    }
}
?>