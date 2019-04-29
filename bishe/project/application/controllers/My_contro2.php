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
    public function field_activity1(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_activity1($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_activity2(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_activity2($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_tools(){
        $this->load->model("field_model");
        $arr = $this->input->get("arr");
        $id = $this->input->get("id");
        foreach($arr as $the_arr){
            $this->field_model->field_tools($the_arr,$id);
        }
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
        $rows = $this->field_model->user_field($user_id,$field_id,$plant_names,$the_sur);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
}