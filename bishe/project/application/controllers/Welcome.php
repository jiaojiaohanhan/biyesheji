<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test()
	{
		$this->load->model("test_model");
//		$this->test_model->test();
		$username = $this->input->get("username");
		$row = $this->test_model->get_by_name($username);
		echo $row->time;
	}
}
