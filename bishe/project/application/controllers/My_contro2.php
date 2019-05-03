<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_contro2 extends CI_Controller{
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
        $this->load->model("field_model");
        $user_id = $this->input->get("user_id");
        $rows = $this->field_model->my_field_info($user_id);
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
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function my_field_info2(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->my_field_info2($id);
        echo $row->can_harvest;
        echo $row->harvest;
        echo $row->activity;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //操作地块
    public function field_activity(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_activity($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function check_tools1(){
        $this->load->model("field_model");
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
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function check_tools2(){
        $this->load->model("field_model");
        $row = $this->field_model->check_tools();
        if($row->basket==0){
            echo "篮子数量不足，请稍后再选"." ";
        }
        if($row->gloves==0){
            echo "手套数量不足，请稍后再选";
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_tools1(){
        $this->load->model("field_model");
        $arr = $this->input->get("arr");
        $id = $this->input->get("id");
        $this->field_model->field_tools1($arr,$id);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_tools2(){
        $this->load->model("field_model");
        $arr = $this->input->get("arr");
        $id = $this->input->get("id");
        $this->field_model->field_tools2($arr,$id);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //查询地块信息
    public function field_info(){
        $this->load->model("field_model");
        $index = $this->input->get("index");
        $row = $this->field_model->field_info($index);
        $json = json_encode(array("sur"=>$row->sur));
        echo $json;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //查询地块价格
    public function field_price(){
        $this->load->model("field_model");
        $index = $this->input->get("index");
        $row = $this->field_model->field_info($index);
        $json = json_encode(array("field_price"=>$row->field_price,"worker_price"=>$row->worker_price));
        echo $json;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //查询作物价格
    public function plant_price(){
        $this->load->model("plant_model");
        $plant_names = $this->input->get("plant_names");
        $rows = $this->plant_model->plant_info($plant_names);
        foreach($rows as $row){
            echo $row->seed_price." ";
            echo $row->work_price." ";
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //订购地块
    public function pay_field(){
        $this->load->model("field_model");
        $user_id = $this->input->get("user_id");
        $field_id = $this->input->get("field_id");
        $plant_names = $this->input->get("plant_names");
        $the_sur = $this->input->get("the_sur");
        $money = $this->input->get("money");
        $rows = $this->field_model->user_field($user_id,$field_id,$plant_names,$the_sur,$money);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
}