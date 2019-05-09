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
            echo $row->user_id." ";
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
            echo $row->datetime2."_";
            echo $row->datetime."_";
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
        echo $row;
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
            echo $row2->name." ";
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
        $number = $this->input->post("Number");
        $salary = $this->input->post("Salary");
        $id = $this->input->post("theId");
        $row = $this->manager_model->worker_change($identity,$username,$type,$password,$number,$salary,$id);
        if($row==1){
            $message = "修改成功";
            $this->load->view("fieldManager2",array(
                "message" => $message
            ));
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
        $number = $this->input->post("Number");
        $salary = $this->input->post("Salary");
        $row = $this->manager_model->worker_add($identity,$username,$type,$password,$number,$salary);
        if($row==1){
            $message = "添加成功";
            $this->load->view("fieldManager2",array(
                "message" => $message
            ));
        }else{
            echo "fail";
        }
    }
    //地块钥匙管理
    public function keys(){
        $rows = $this->manager_model->all_keys();
        foreach($rows as $row){
            echo $row->name." ";
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
        $row = $this->manager_model->all_tools();
        echo $row->manure." ";
        echo $row->hoe." ";
        echo $row->shovel." ";
        echo $row->bucket." ";
        echo $row->basket." ";
        echo $row->gloves." ";
        echo $row->barbecue." ";
        echo $row->charcoal;
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
}
