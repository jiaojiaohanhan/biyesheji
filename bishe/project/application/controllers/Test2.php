<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test2 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        ignore_user_abort(true);
        set_time_limit(0);
    }
    public function write_txt()
    {
        $this->load->model("test_model");
        $this->test_model->test();
    }
    public function do_cron()
    {
        sleep(3);//以秒计数
        self::write_txt();
    }
    public function write()
    {
        while (1)
        {
            self::do_cron();
        }
    }
}
?>