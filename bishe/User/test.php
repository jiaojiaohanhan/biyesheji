<?php

//echo phpinfo();

//ignore_user_abort(); // 后台运行
//set_time_limit(0); // 取消脚本运行时间的超时上限
//do{
//    sleep(3); // 休眠
//}while(true);

    ignore_user_abort(true);
    set_time_limit(0);
    function write_txt(){
        if(!file_exists("test.txt")){
            $fp = fopen("test.txt","wb");
            fclose($fp);
        }
        $str = file_get_contents("test.txt");
        $str .= "\r\n".date("H:i:s");
        $fp = fopen("test.txt","wb");
        fwrite($fp,$str);
        fclose($fp);
    }
    function do_cron(){
        usleep(20000000);
        write_txt();
    }
    while(1){
        do_cron();
    }
?>