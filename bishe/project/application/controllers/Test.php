<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function index_get(){
        $servername = "127.0.0.1:3306";
        $name = $_GET['name'];//$_GET['']内是小程序发送的参数
        $password = $_GET['password'];
        $database = $_GET['database'];
        $username = $_GET['username'];

// 创建连接
        $conn = new mysqli($servername,$name,$password,$database);

// 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }

        $sql = "select * from user where username = '$username'";

        if ($conn->query($sql) == TRUE) {
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
//    $row = mysqli_fetch_assoc($result);
            print_r($row);
        } else {
            echo "Error creating database: ". $conn->error;
        }

        $conn->close();
    }
}