<?php
    if(isset($_REQUEST['code'])){
        session_start();
        if($_REQUEST['code']==$_SESSION['code']){
            echo "<span color='red'>输入正确</span>";
        }else{
            echo "<span color='red'>输入错误</span>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta chartset="UTF-8" />
        <style type="text/css" rel="stylesheet">
            a{
                text-decoration:none;
                font-size:30px;
                color:blue;
            }
            a:hover{
                text-decoration:underline;
            }
        </style>
    </head>
    <body>
       <form action="form.php" method="get">
               验证码: &nbsp;<img id="img" src="index.php?" onclick="changeCode()"/>
                <a href="javascript:void(0)" onclick="changeCode()">看不清?</a>&nbsp;<br />
               请输入验证码:&nbsp;<input name="code" /><br />
               <input type="submit" value="提交" />
        </form>
    </body>
    <script type="text/javascript">
            function changeCode(){
                var img=document.getElementById('img');
                //img.src='index.php?r='+Math.random();
                img.setAttribute('src','index.php?r='+Math.random());
            }
    </script>
</html>