<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');

class My_contro2 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->model("field_model");
        $this->load->model("plant_model");
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //地块
    public function choose_field(){
        $this->load->view("field");
    }
    //某一地块
    public function the_field(){
        $index = $this->input->get("index");
        $this->load->view("theField",array(
            "index" => $index
        ));
    }
    //我的地块
    public function my_field(){
        $this->load->view("myField");
    }
    public function my_field_info(){
        $user_id = $this->input->get("user_id");
        $pages = $this->input->get("pages");
        $rows = $this->field_model->my_field_info($user_id,$pages);
        foreach($rows as $row){
            echo $row->field_id." ";
            echo $row->plant_name." ";
            echo $row->seeding." ";
            echo $row->watering." ";
            echo $row->manure." ";
            echo $row->weeding." ";
            echo $row->can_harvest." ";
            echo $row->harvest." ";
            echo $row->id." ";
        }
    }
    public function my_field_info1(){
        $user_id = $this->input->get("user_id");
        $row = $this->field_model->my_field_info1($user_id);
        if($row%10==0){
            print_r($row/10);
        }else{
            print_r($row/10+1);
        }
    }
    public function my_field_info2(){
        $id = $this->input->get("id");
        $row = $this->field_model->my_field_info2($id);
        echo $row->can_harvest;
        echo $row->harvest;
        echo $row->activity;
    }
    //操作地块
    public function field_activity(){
        $id = $this->input->get("id");
        $row = $this->field_model->field_activity($id);
        echo $row;
    }
    public function check_tools1(){
        $row = $this->field_model->check_tools();
        if($row->manure==0){
            echo "有机肥数量不足，请稍后再选"." ";
        }
        if($row->hoe==0){
            echo "锄头数量不足，请稍后再选"." ";
        }
        if($row->shovel==0){
            echo "铲子数量不足，请稍后再选"." ";
        }
        if($row->bucket==0){
            echo "水桶数量不足，请稍后再选";
        }
    }
    public function check_tools2(){
        $row = $this->field_model->check_tools();
        if($row->basket==0){
            echo "篮子数量不足，请稍后再选"." ";
        }
        if($row->gloves==0){
            echo "手套数量不足，请稍后再选";
        }
    }
    public function field_tools1(){
        $arr = $this->input->get("arr");
        $tools = $this->input->get("tools");
        $id = $this->input->get("id");
        $this->field_model->field_tools1($arr,$tools,$id);
    }
    public function field_tools2(){
        $arr = $this->input->get("arr");
        $tools = $this->input->get("tools");
        $id = $this->input->get("id");
        $this->field_model->field_tools2($arr,$tools,$id);
    }
    public function field_datetime(){
        $id = $this->input->get("id");
        $date = $this->input->get("arr1");
        $time = $this->input->get("arr2");
        $this->field_model->field_datetime($id,$date,$time);
    }
    public function field_datetime2(){
        $field_id = $this->input->get("index");
        $date = $this->input->get("arr1");
        $time = $this->input->get("arr2");
        $row = $this->field_model->field_datetime2($field_id,$date,$time);
        print_r($row);
    }
    //查询地块信息
    public function field_info(){
        $index = $this->input->get("index");
        $row = $this->field_model->field_info($index);
        echo $row->sur." ";
        echo $row->sum;
    }
    public function field_info2(){
        $index = $this->input->get("index");
        $row = $this->field_model->field_info2($index);
        echo $row;
    }
    //查询地块价格
    public function field_price(){
        $index = $this->input->get("index");
        $row = $this->field_model->field_info($index);
        $json = json_encode(array("field_price"=>$row->field_price,"worker_price"=>$row->worker_price));
        echo $json;
    }
    //查询作物价格
    public function plant_price(){
        $plant_names = $this->input->get("plant_names");
        $rows = $this->plant_model->plant_info($plant_names);
        foreach($rows as $row){
            echo $row->seed_price." ";
            echo $row->work_price." ";
        }
    }
    //订购地块
    public function pay_field(){
        $user_id = $this->input->get("user_id");
        $field_id = $this->input->get("field_id");
        $plant_names = $this->input->get("plant_names");
        $the_sur = $this->input->get("the_sur");
        $money = $this->input->get("money");
        $rows = $this->field_model->user_field($user_id,$field_id,$plant_names,$the_sur,$money);
    }
    public function pay_field2(){
        $user_id = $this->input->get("user_id");
        $field_id = $this->input->get("field_id");
        $plant_names = $this->input->get("plant_names");
        $money = $this->input->get("money");
        $rows = $this->field_model->user_field2($user_id,$field_id,$plant_names,$money);
    }
    public function pay_field3(){
        $user_id = $this->input->get("user_id");
        $field_id = $this->input->get("field_id");
        $row = $this->field_model->user_field3($user_id,$field_id);
        print_r($row);
    }
    public function pay_field4(){
        $user_id = $this->input->get("user_id");
        $field_id = $this->input->get("field_id");
        $tools = $this->input->get("tools");
        $money = $this->input->get("money");
        $date = $this->input->get("arr1");
        $time = $this->input->get("arr2");
        $this->field_model->user_field4($user_id,$field_id,$tools,$money,$date,$time);
    }
    //我的收获
    public function my_harvest(){
        $user_id = $this->input->get("user_id");
        $rows = $this->field_model->my_harvest($user_id);
        foreach($rows as $row){
            $field_id = $row->field_id;
            echo $this->field_model->field_info($field_id)->name." ";
            echo $row->name." ";
        }
    }
    public function my_harvest2(){
        $user_id = $this->input->post("user_id");
        $address = $this->input->post("address");
        $row = $this->field_model->my_harvest2($user_id,$address);
        $arr = explode(" ",$row);
        if($address!=""){
            echo "申请成功";
            $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
            $client->send($arr[2], "手机号为".$arr[0]."的用户".$arr[1]."要求配送，"."地址为".$address);
        }else{
            echo "申请失败";
        }
    }
}