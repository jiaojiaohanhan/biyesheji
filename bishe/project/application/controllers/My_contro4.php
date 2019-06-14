<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');

class My_contro4 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("form", "url"));
        $this->load->model("manager_model");
        $this->load->model("field_model");
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //某一地块
    public function the_field(){
        $index = $this->input->get("index");
        $this->load->view("theFieldManager",array(
            "index" => $index
        ));
    }
    public function the_field2(){
        $index = $this->input->get("index");
        $this->load->view("theFieldManager2",array(
            "index" => $index
        ));
    }
    public function the_field_info1(){
        $field_id = $this->input->get("field_id");
        $rows = $this->field_model->the_field_info1($field_id);
        foreach($rows as $row){
            echo $row->user_id."_";
            echo $row->plant_name."_";
            echo $row->type."_";
            echo $row->seeding."_";
            echo $row->watering."_";
            echo $row->manure."_";
            echo $row->weeding."_";
            echo $row->can_harvest."_";
            echo $row->harvest."_";
            echo $row->tools."_";
            echo $row->start_time."_";
            echo $row->end_time."_";
            echo $row->id."_";
        }
    }
    public function the_field_info2(){
        $id = $this->input->get("id");
        $row = $this->field_model->the_field_info2($id);
        echo $row->user_id." ";
        echo $row->plant_name." ";
        echo $row->seeding." ";
        echo $row->watering." ";
        echo $row->manure." ";
        echo $row->weeding." ";
        echo $row->can_harvest." ";
        echo $row->harvest." ";
        echo $row->id;
    }
    public function the_field_info3(){
        $field_id = $this->input->get("field_id");
        $rows = $this->field_model->the_field_info3($field_id);
        foreach($rows as $row){
            echo $row->user_id."_";
            echo $row->tools."_";
            echo $row->start_time."_";
            echo $row->end_time."_";
//            echo $row->id." ";
        }
    }
    //地块活动
    public function field_action1(){
        $id = $this->input->get("id");
        $row = $this->field_model->field_action1($id);
        echo $row;
    }
    public function field_action2(){
        $id = $this->input->get("id");
        $row = $this->field_model->field_action2($id);
        echo $row;
    }
    public function field_action3(){
        $id = $this->input->get("id");
        $row = $this->field_model->field_action3($id);
        echo $row;
    }
    public function field_action4(){
        $id = $this->input->get("id");
        $row = $this->field_model->field_action4($id);
        print_r($row);
    }
    public function field_action5(){
        $id = $this->input->get("id");
        $row = $this->field_model->field_action5($id);
        echo $row;
    }
    //收支结余管理
    public function pay(){
        $row = $this->manager_model->all_pay();
        echo $row;
    }
    public function income(){
        $rows = $this->manager_model->all_income();
        foreach($rows as $row){
            $field_id = $row->field_id;
            $row2 = $this->manager_model->the_field($field_id);
            echo $row2->field_name." ";
            $user_id = $row->user_id;
            $row3 = $this->manager_model->the_user($user_id);
            echo $row3->username." ";
            echo $row3->phone." ";
            echo $row3->wechat." ";
            echo $row->money." ";
        }
    }
    public function money(){
        $row = $this->manager_model->all_money();
        echo $row;
    }
    //工作人员管理
    public function workers(){
        $rows = $this->manager_model->all_workers();
        foreach($rows as $row){
            echo $row->name." ";
            echo $row->type." ";
            echo $row->identity." ";
            echo $row->phone." ";
            echo $row->number." ";
            echo $row->password." ";
            echo $row->salary." ";
            echo $row->id." ";
        }
    }
    public function worker_change(){
        $identity = $this->input->post("ID");
        $username = $this->input->post("Name");
        $type = $this->input->post("Type");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $phone = $this->input->post("Phone");
        $number = $this->input->post("Number");
        $salary = $this->input->post("Salary");
        $id = $this->input->post("theId");
        $row = $this->manager_model->worker_change($identity,$username,$type,$password,$phone,$number,$salary,$id);
        if($row==1){
            echo "修改成功";
        }else{
            echo "fail";
        }
    }
    public function worker_delete(){
        $id = $this->input->get("id");
        $row = $this->manager_model->worker_delete($id);
        if($row==1){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
    public function worker_add(){
        $identity = $this->input->post("ID");
        $username = $this->input->post("Name");
        $type = $this->input->post("Type");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $phone = $this->input->post("Phone");
        $number = $this->input->post("Number");
        $salary = $this->input->post("Salary");
        $row = $this->manager_model->worker_add($identity,$username,$type,$password,$phone,$number,$salary);
        if($row==1){
            echo "添加成功";
        }else{
            echo "fail";
        }
    }
    //地块钥匙管理
    public function keys(){
        $rows = $this->manager_model->all_keys();
        foreach($rows as $row){
            echo $row->field_name." ";
            echo $row->keys." ";
            echo $row->id." ";
        }
    }
    public function key_add(){
        $id = $this->input->get("id");
        $row = $this->manager_model->key_add($id);
    }
    public function key_sub(){
        $id = $this->input->get("id");
        $row = $this->manager_model->key_sub($id);
    }
    //农资工具管理
    public function tools(){
        $rows = $this->manager_model->all_tools();
        foreach($rows as $row){
            echo $row->number." ";
        }
    }
    public function tool_add(){
        $name = $this->input->get("name");
        $row = $this->manager_model->tool_add($name);
    }
    public function tool_sub(){
        $name = $this->input->get("name");
        $row = $this->manager_model->tool_sub($name);
    }
    public function tool_change(){
        $arr = $this->input->post("arr");
        foreach($arr as $arr2){
            $this->manager_model->tool_change($arr2);
        }
    }
    //种子管理
    public function plants(){
        $rows = $this->manager_model->all_plants();
        foreach($rows as $row){
            echo $row->name." ";
            echo $row->number." ";
            echo $row->english." ";
        }
    }
    public function plant_add(){
        $name = $this->input->get("name");
        $this->manager_model->plant_add($name);
        echo $name;
    }
    public function plant_sub(){
        $name = $this->input->get("name");
        $this->manager_model->plant_sub($name);
        echo $name;
    }
    public function plant_change(){
        $arr = $this->input->post("arr");
        foreach($arr as $arr2){
            $this->manager_model->plant_change($arr2);
        }
    }
    public function check_plant(){
        $name = $this->input->get("name");
        $row = $this->manager_model->check_plant($name);
        if($row){
            echo "fail";
        }else{
            echo "success";
        }
    }
    public function new_plant(){
        $name = $this->input->post("name");
        $seed_price = $this->input->post("seed_price");
        $work_price = $this->input->post("work_price");
        $english = $this->input->post("english");
        $days = $this->input->post("days");
        $row = $this->manager_model->new_plant($name,$seed_price,$work_price,$english,$days);
        if($row==1){
            echo "添加成功";
        }else{
            echo "fail";
        }
    }
    //已收获作物管理
    public function harvest(){
        $rows = $this->manager_model->all_harvest();
        foreach($rows as $row){
            $user_name = $this->manager_model->the_user($row->user_id)->username;
            $address = $this->manager_model->the_user($row->user_id)->address;
            $field_name = $this->manager_model->the_field2($row->field_id)->name;
            echo $field_name." ".$user_name." ".$row->name." ".$address." ".$row->id." ";
        }
    }
    public function harvest_delete(){
        $id = $this->input->get("id");
        $row2 = $this->manager_model->the_harvest($id);
        $row = $this->manager_model->harvest_delete($id);
        if($row==1){
            $user_id = $row2->user_id;
            $phone = $this->manager_model->the_user($user_id)->phone;
            $plant = $row2->name;
            $client = new  ZhenziSmsClient("https://sms_developer.zhenzikj.com", "101138", "879f1746-d7c1-4819-8c3c-ef538a6eb58d");
            $client->send($phone,"您的".$plant."已经发送");
            echo "发送成功";
        }else{
            echo "发送失败";
        }
    }
    //流量统计
    public function flow(){
        $rows1 = $this->manager_model->all_flow1();
        foreach($rows1 as $row){
            echo $row->date.",";
        }
        $rows2 = $this->manager_model->all_flow2();
        foreach($rows2 as $row){
            echo $row->theIndex.",";
        }
        $rows3 = $this->manager_model->all_flow3();
        foreach($rows3 as $row){
            echo $row->login.",";
        }
        $rows4 = $this->manager_model->all_flow4();
        foreach($rows4 as $row){
            echo $row->regist.",";
        }
    }
}
