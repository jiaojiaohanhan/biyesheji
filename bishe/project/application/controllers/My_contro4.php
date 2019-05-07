<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('unit/ZhenziSmsClient.php');

class My_contro4 extends CI_Controller {
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
        $this->load->model("field_model");
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
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function the_field_info2(){
        $this->load->model("field_model");
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
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function the_field_info3(){
        $this->load->model("field_model");
        $field_id = $this->input->get("field_id");
        $rows = $this->field_model->the_field_info3($field_id);
        foreach($rows as $row){
            echo $row->user_id."_";
            echo $row->tools."_";
            echo $row->datetime2."_";
            echo $row->datetime."_";
//            echo $row->id." ";
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //地块活动
    public function field_action1(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_action1($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_action2(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_action2($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_action3(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_action3($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_action4(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_action4($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function field_action5(){
        $this->load->model("field_model");
        $id = $this->input->get("id");
        $row = $this->field_model->field_action5($id);
        echo $row;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //收支结余管理
    public function money(){
        $this->load->model("manager_model");
        $rows = $this->manager_model->all_money();
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
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //工作人员管理
    public function workers(){
        $this->load->model("manager_model");
        $rows = $this->manager_model->all_workers();
        foreach($rows as $row){
            echo $row->name." ";
            echo $row->type." ";
            echo $row->identity." ";
            echo $row->number." ";
            echo $row->id." ";
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function worker_change(){
        $this->load->model("manager_model");
        $identity = $this->input->post("ID");
        $username = $this->input->post("Name");
        $type = $this->input->post("Type");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $number = $this->input->post("Number");
        $id = $this->input->post("theId");
        $row = $this->manager_model->worker_change($identity,$username,$type,$password,$number,$id);
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
        $this->load->model("manager_model");
        $id = $this->input->get("id");
        $row = $this->manager_model->worker_delete($id);
        if($row==1){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function worker_add(){
        $this->load->model("manager_model");
        $identity = $this->input->post("ID");
        $username = $this->input->post("Name");
        $type = $this->input->post("Type");
        $password = $this->input->post("Password");
        $password = md5(md5($password));
        $number = $this->input->post("Number");
        $row = $this->manager_model->worker_add($identity,$username,$type,$password,$number);
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
        $this->load->model("manager_model");
        $rows = $this->manager_model->all_keys();
        foreach($rows as $row){
            echo $row->name." ";
            echo $row->keys." ";
            echo $row->id." ";
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function key_add(){
        $this->load->model("manager_model");
        $id = $this->input->get("id");
        $row = $this->manager_model->key_add($id);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function key_sub(){
        $this->load->model("manager_model");
        $id = $this->input->get("id");
        $row = $this->manager_model->key_sub($id);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    //农资工具管理
    public function tools(){
        $this->load->model("manager_model");
        $row = $this->manager_model->all_tools();
        echo $row->manure." ";
        echo $row->hoe." ";
        echo $row->shovel." ";
        echo $row->bucket." ";
        echo $row->basket." ";
        echo $row->gloves." ";
        echo $row->barbecue." ";
        echo $row->charcoal;
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function tool_add(){
        $this->load->model("manager_model");
        $name = $this->input->get("name");
        $row = $this->manager_model->tool_add($name);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function tool_sub(){
        $this->load->model("manager_model");
        $name = $this->input->get("name");
        $row = $this->manager_model->tool_sub($name);
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function tool_change(){
        $this->load->model("manager_model");
        $arr = $this->input->post("arr");
        foreach($arr as $arr2){
            $this->manager_model->tool_change($arr2);
        }
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
}
