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
		$username = $this->input->get("username");
		$row = $this->test_model->get_by_name($username);
		print_r((Array)$row);
	}
}
