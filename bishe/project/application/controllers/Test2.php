<?php

class Test2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function index2()
    {
        $this->load->view('test');
    }

    public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']     = 0;
        $config['max_width']        = 0;
        $config['max_height']       = 0;

        $this->load->library('upload', $config);
//        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
    public function do_upload2()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']     = 0;
        $config['max_width']        = 0;
        $config['max_height']       = 0;

        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
//        $this->upload->initialize($config);

//        if ( ! $this->upload->do_upload('userfile'))
//        {
//            $error = array('error' => $this->upload->display_errors());
//
//            $this->load->view('test', $error);
//        }
//        else
//        {
//            $data = array('upload_data' => $this->upload->data());
//
//            $this->load->view('test2', $data);
//        }
    }
}