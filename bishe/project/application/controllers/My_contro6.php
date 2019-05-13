<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_contro6 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        $this->load->model("app_model");
    }
    public function app()
    {
        $row = $this->app_model->app_info();
        echo $row->AppId." ".$row->AppSercet;
    }
    public function check_phone(){
        $phone = $this->input->get("phone");
        if($phone!="") {
            $row = $this->app_model->get_by_phone($phone);
            print_r($row);
        }
    }
}
