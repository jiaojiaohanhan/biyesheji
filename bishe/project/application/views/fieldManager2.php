<!DOCTYPE html>
<html lang="en">
<head>
    <title>Work</title>
    <base href="<?php echo site_url();?>">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="https://code.highcharts.com.cn/highcharts/highcharts.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts/modules/exporting.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts/modules/series-label.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts/modules/oldie.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script>
        window.onload = function(){
            var mes = "<?php echo $message;?>";
            if(mes!=""){
                alert(mes);
            }
            $("#field").append(
                `<div style="margin: 0 auto;text-align: center">
                              <img id="field_img_1" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/money.png">
                              <img id="field_img_2" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/worker.jpg">
                              <img id="field_img_3" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/key.jpg">
                              <img id="field_img_4" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/hoe.jpg">
                              <img id="field_img_5" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/seed.jpg">
                              <img id="field_img_6" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/harvest.png">
                              <img id="field_img_7" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/flow.jpg">
                              <img id="field_img_8" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/gloves.jpg">
                </div>
                <div style="margin: 20px auto;text-align:center">
                              <input id="field_btn_1" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="收支结余管理">
                              <input id="field_btn_2" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="工作人员管理">
                              <input id="field_btn_3" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="地块钥匙管理">
                              <input id="field_btn_4" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="农资工具管理">
                              <input id="field_btn_5" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="作物种子管理">
                              <input id="field_btn_6" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="收获作物管理">
                              <input id="field_btn_7" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="流量统计">
                              <input id="field_btn_8" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="返回">
                </div>`
            );
            $("#field_img_1,#field_btn_1").on("click",function(){
                $("#field").html("").css("height","auto");
                $("#field").append(`
                    <div style="margin: 0 auto;text-align: center">
                             <img id="field_img_1" style="display:inline-block;width: 10rem;height: 10rem;border-radius: 50%;cursor: pointer" src="images/pay.jpg">
                             <img id="field_img_2" style="display:inline-block;width: 10rem;height: 10rem;border-radius: 50%;cursor: pointer" src="images/income.jpg">
                             <img id="field_img_3" style="display:inline-block;width: 10rem;height: 10rem;border-radius: 50%;cursor: pointer" src="images/money.png">
                    </div>
                    <div style="margin: 20px auto;text-align:center">
                             <input id="field_btn_1" type="button" style="display:inline-block;width: 10rem;height: 3rem;background-color: #a0d034;color: #fff" value="查看支出">
                             <input id="field_btn_2" type="button" style="display:inline-block;width: 10rem;height: 3rem;background-color: #a0d034;color: #fff" value="查看收入">
                             <input id="field_btn_3" type="button" style="display:inline-block;width: 10rem;height: 3rem;background-color: #a0d034;color: #fff" value="总览">
                             <input id="the_back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                    </div>`
                );
                $("#the_back").on("click",function(){
                    window.location.reload();
                });
                $("#field_img_1,#field_btn_1").on("click",function() {
                    $("#field").html("").css("height", "auto");
                    $.get("http://localhost/bishe/project/My_contro4/pay",{

                    },function(res){
                        var arr = res.split(" ");
                        var cont = `<tr>
                                <th>农资工具费用</th>
                                <th>种子费用支出</th>
                                <th>工人工资支出</th>
                            </tr>`;
                        cont+=`<tr>`;
                        for(var i=0;i<arr.length;i++){
                            cont+=(`<td>${arr[i]}</td>`);
                        }
                        cont+=`</tr>`;
                        $("#field").append(`
                            <table id="field-info" style="margin: 0 auto"></table>
                            <input id="sum" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="合计">
                            <br>
                            <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                        `);
                        $("#field-info").html(cont);
                        $("#field-info th").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                        $("#field-info td").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                        $("#sum").on("click",function(){
                            var sum = parseInt(arr[0])+parseInt(arr[1])+parseInt(arr[2]);
                            alert("合计支出为"+sum);
                        });
                        $("#back").on("click",function(){
                            window.location.reload();
                        })
                    },"text");
                });
                $("#field_img_2,#field_btn_2").on("click",function(){
                    $("#field").html("").css("height","auto");
                    $.get("http://localhost/bishe/project/My_contro4/income",{

                    },function(res){
                        var arr = res.split(" ");
                        var cont = `<tr>
                                <th>地块名称</th>
                                <th>用户姓名</th>
                                <th>用户手机</th>
                                <th>用户微信</th>
                                <th>消费</th>
                            </tr>`;
                        for(var i=0;i<arr.length-1;i+=5){
                            cont+=`<tr>`;
                            cont+=(`<td>${arr[i]}</td>`);
                            cont+=(`<td>${arr[i+1]}</td>`);
                            cont+=(`<td>${arr[i+2]}</td>`);
                            cont+=(`<td>${arr[i+3]}</td>`);
                            cont+=(`<td>${arr[i+4]}</td>`);
                            cont+=`</tr>`;
                        }
                        $("#field").append(`
                        <table id="field-info" style="margin: 0 auto"></table>
                        <input id="sum" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="合计">
                        <br>
                        <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                    `);
                        $("#field-info").html(cont);
                        $("#field-info th").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                        $("#field-info td").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                        $("#sum").on("click",function(){
                            var sum = 0;
                            for(var i=0;i<arr.length-1;i+=5){
                                sum+=parseInt(arr[i+4])
                            }
                            alert("合计收入为"+sum);
                        });
                        $("#back").on("click",function(){
                            window.location.reload();
                        })
                    },"text");
                });
                $("#field_img_3,#field_btn_3").on("click",function() {
                    $("#field").html("").css("height", "auto");
                    $.get("http://localhost/bishe/project/My_contro4/money",{

                    },function(res){
                        var arr = res.split(" ");
                        var cont = `<tr>
                                <th>总支出</th>
                                <th>总收入</th>
                                <th>总利润</th>
                            </tr>`;
                        cont+=`<tr>`;
                        for(var i=0;i<arr.length;i++){
                            cont+=(`<td>${arr[i]}</td>`);
                        }
                        cont+=`</tr>`;
                        $("#field").append(`
                            <table id="field-info" style="margin: 0 auto"></table>
                            <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                        `);
                        $("#field-info").html(cont);
                        $("#field-info th").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                        $("#field-info td").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                        $("#back").on("click",function(){
                            window.location.reload();
                        })
                    },"text");
                });
            });
            $("#field_img_2,#field_btn_2").on("click",function(){
                $("#field").html("").css("height","auto");
                $.get("http://localhost/bishe/project/My_contro4/workers",{

                },function(res){
                    var arr = res.split(" ");
                    var cont = `<tr>
                                <th>工作人员姓名</th>
                                <th>工作人员类型</th>
                                <th>工作人员身份证号码</th>
                                <th>工作人员手机号码</th>
                                <th>工作人员工号</th>
                                <th>工作人员登录密码(加密后)</th>
                                <th>工作人员薪水</th>
                                <th>修改</th>
                                <th>删除</th>
                            </tr>`;
                    for(var i=0;i<arr.length-1;i+=8){
                        cont+=`<tr>`;
                        cont+=(`<td>${arr[i]}</td>`);
                        cont+=(`<td>${arr[i+1]}</td>`);
                        cont+=(`<td>${arr[i+2]}</td>`);
                        cont+=(`<td>${arr[i+3]}</td>`);
                        cont+=(`<td>${arr[i+4]}</td>`);
                        cont+=(`<td>${arr[i+5]}</td>`);
                        cont+=(`<td>${arr[i+6]}</td>`);
                        cont+=(`<td><button id="${arr[i+7]}" style="background-color:#a0d034;color:#fff">修改</button></td>`);
                        cont+=(`<td><button value="${arr[i+7]}" style="background-color:#f00;color:#fff">删除</button></td>`);
                        cont+=`</tr>`;
                    }
                    $("#field").append(`
                        <table id="field-info" style="margin: 0 auto"></table>
                        <input id="add" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="添加">
                        <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                    `);
                    $("#field-info").html(cont);
                    $("#field-info th").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info td").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info button").each(function(){
                        $(this).on("click",function(){
                            if($(this).attr("id")!=undefined){
                                var $theId = $(this).attr("id");
                                $("#field").html("");
                                $("#field").append(`
                                <div style="width: 60%;margin: 0 auto">
                                    <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                                        <div id="form">
                                            <span>
                                                    <i>员工身份证号</i>
                                                    <input type="text" name="ID" placeholder=" " required="">
                                                    <span id="alert1" style="font-size: 12px;float: right;color: #a4dd25">员工的身份证号码</span>
                                            </span>
                                            <span>
                                                    <i>员工姓名</i>
                                                    <input type="text" name="Name" placeholder=" " required="">
                                            </span>
                                            <span>
                                                    <i>员工类型</i>
                                                    <input type="radio" name="Type" placeholder=" " required="" value="2" checked>普通地块管理人员
                                                    <input type="radio" name="Type" placeholder=" " required="" value="3">特殊地块管理人员
                                                    <span id="alert2" style="font-size: 12px;float: right;color: #a4dd25">员工的类型</span>
                                            </span>
                                            <span>
                                                    <i>员工登录密码</i>
                                                    <input type="password" name="Password" placeholder=" " required="">
                                                    <span id="alert3" style="font-size: 12px;float: right;color: #a4dd25">最小6位，最大16位</span>
                                            </span>
                                            <span>
                                                    <i>员工手机号</i>
                                                    <input type="text" name="Phone" placeholder=" " required="">
                                                    <span id="alert5" style="font-size: 12px;float: right;color: #a4dd25"></span>
                                            </span>
                                            <span>
                                                    <i>员工工号</i>
                                                    <input type="text" name="Number" placeholder=" " required="">
                                                    <span id="alert4" style="font-size: 12px;float: right;color: #a4dd25">最小6位，最大16位</span>
                                            </span>
                                            <span>
                                                    <i>员工薪水</i>
                                                    <input type="text" name="Salary" placeholder=" " required="">
                                            </span>
                                            <span style="display: none">
                                                    <input type="text" name="theId" placeholder=" " required="">
                                            </span>
                                            <br>
                                            <div class="w3_submit">
                                                <input name="submit1" type="button" value="提 交" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <input id="the_back" type="button" style="margin-left:100%;width:6rem;background-color:#a0d034;color:#fff" value="返回">
                                </div>
                                `);
                                $("[name='theId']").val($theId);
                                var $flag1 = false,$flag2 = false,$flag3 = false,$flag4 = false;
                                var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"};
                                $("[name='ID']").on('input propertychange',function () {
                                    var $id = $(this).val();
                                    var $id2 = $id.replace(/x$/i,"a");
                                    var $birthday = $id2.substr(6,4)+"-"+Number($id2.substr(10,2))+"-"+Number($id2.substr(12,2));
                                    var d = new Date($birthday.replace(/-/g,"/")) ;
                                    var iSum=0 ;
                                    for(var i = 17;i>=0;i --) iSum += (Math.pow(2,i) % 11) * parseInt($id2.charAt(17 - i),11) ;
                                    if(!/^\d{17}(\d|x)$/i.test($id)){
                                        $("#alert1").text("你输入的身份证长度或格式错误").css("color","red");
                                    }else if(aCity[parseInt($id2.substr(0,2))]==null){
                                        $("#alert1").text("你的身份证地区非法").css("color","red");
                                    }else if($birthday!=(d.getFullYear()+"-"+ (d.getMonth()+1) + "-" + d.getDate())){
                                        $("#alert1").text("身份证上的出生日期非法").css("color","red");
                                    }else if(iSum%11!=1){
                                        $("#alert1").text("你输入的身份证号非法").css("color","red");
                                    }else {
                                        $("#alert1").text("员工的身份证号码").css("color","#a4dd25");
                                    }
                                    if($id.length==18){
                                        $flag1 = true;
                                    }
                                    if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                        $("[name='submit1']").removeAttr("disabled")
                                    }else {
                                        $("[name='submit1']").attr("disabled","disabled")
                                    }
                                });
                                $("[name='Password']").on('input propertychange',function () {
                                    var $pass = $(this).val();
                                    if(!(/^[\w_-]{6,16}$/.test($pass))){
                                        $("#alert3").text("密码有误，请重填").css("color","red");
                                        $flag2 = false;
                                    }else {
                                        $("#alert3").text("最小6位，最大16位").css("color","#a4dd25");
                                        $flag2 = true;
                                    }
                                    if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                        $("[name='submit1']").removeAttr("disabled")
                                    }else {
                                        $("[name='submit1']").attr("disabled","disabled")
                                    }
                                });
                                $("[name='Phone']").on('input propertychange',function () {
                                    var $phone = $(this).val();
                                    if(!(/^1[34578]\d{9}$/.test($phone))){
                                        $("#alert5").text("手机号码有误，请重填").css("color","red");
                                        $flag4 = false;
                                    }else {
                                        $("#alert5").text("11位的手机号码").css("color","#a4dd25");
                                        $flag4 = true;
                                    }
                                    if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                        $("[name='submit1']").removeAttr("disabled")
                                    }else {
                                        $("[name='submit1']").attr("disabled","disabled")
                                    }
                                });
                                $("[name='Number']").on('input propertychange',function () {
                                    var $num = $(this).val();
                                    if(!(/^[\w_-]{6,16}$/.test($num))){
                                        $("#alert4").text("工号有误，请重填").css("color","red");
                                        $flag3 = false;
                                    }else {
                                        $("#alert4").text("最小6位，最大16位").css("color","#a4dd25");
                                        $flag3 = true;
                                    }
                                    if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                        $("[name='submit1']").removeAttr("disabled")
                                    }else {
                                        $("[name='submit1']").attr("disabled","disabled")
                                    }
                                });
                                $("[name='submit1']").on("click",function(){
                                    $.post("http://localhost/bishe/project/My_contro4/worker_change",{
                                        ID:$("[name='ID']").val(),
                                        Name:$("[name='Name']").val(),
                                        Type:$("[name='Type']").val(),
                                        Password:$("[name='Password']").val(),
                                        Phone:$("[name='Phone']").val(),
                                        Number:$("[name='Number']").val(),
                                        Salary:$("[name='Salary']").val(),
                                        theId:$("[name='theId']").val()
                                    },function(res){
                                        alert(res);
                                        window.location.reload();
                                    },"text")
                                });
                                $("#the_back").on("click",function(){
                                    window.location.reload()
                                })
                            }else{
                                var $theId = $(this).attr("value");
                                $.get("http://localhost/bishe/project/My_contro4/worker_delete",{
                                    id:$theId
                                },function(res){
                                    alert(res);
                                    window.location.reload();
                                },"text")
                            }
                        });
                    });
                    $("#add").on("click",function(){
                        $("#field").html("");
                        $("#field").append(`
                                <div style="width: 60%;margin: 0 auto">
                                    <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                                        <div id="form">
                                            <span>
                                                    <i>员工身份证号</i>
                                                    <input type="text" name="ID" placeholder=" " required="">
                                                    <span id="alert1" style="font-size: 12px;float: right;color: #a4dd25">员工的身份证号码</span>
                                            </span>
                                            <span>
                                                    <i>员工姓名</i>
                                                    <input type="text" name="Name" placeholder=" " required="">
                                            </span>
                                            <span>
                                                    <i>员工类型</i>
                                                    <input type="radio" name="Type" placeholder=" " required="" value="2" checked>普通地块管理人员
                                                    <input type="radio" name="Type" placeholder=" " required="" value="3">特殊地块管理人员
                                                    <span id="alert2" style="font-size: 12px;float: right;color: #a4dd25">员工的类型</span>
                                            </span>
                                            <span>
                                                    <i>员工登录密码</i>
                                                    <input type="password" name="Password" placeholder=" " required="">
                                                    <span id="alert3" style="font-size: 12px;float: right;color: #a4dd25">最小6位，最大16位</span>
                                            </span>
                                            <span>
                                                    <i>员工手机号</i>
                                                    <input type="text" name="Phone" placeholder=" " required="">
                                                    <span id="alert5" style="font-size: 12px;float: right;color: #a4dd25"></span>
                                            </span>
                                            <span>
                                                    <i>员工工号</i>
                                                    <input type="text" name="Number" placeholder=" " required="">
                                                    <span id="alert4" style="font-size: 12px;float: right;color: #a4dd25">最小6位，最大16位</span>
                                            </span>
                                            <span>
                                                    <i>员工薪水</i>
                                                    <input type="text" name="Salary" placeholder=" " required="">
                                            </span>
                                            <br>
                                            <div class="w3_submit">
                                                <input name="submit1" type="button" value="提 交" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <input id="the_back" type="button" style="margin-left:100%;width:6rem;background-color:#a0d034;color:#fff" value="返回">
                                </div>
                        `);
                        var $flag1 = false,$flag2 = false,$flag3 = false,$flag4 = false;
                        var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"};
                        $("[name='ID']").on('input propertychange',function () {
                            var $id = $(this).val();
                            var $id2 = $id.replace(/x$/i,"a");
                            var $birthday = $id2.substr(6,4)+"-"+Number($id2.substr(10,2))+"-"+Number($id2.substr(12,2));
                            var d = new Date($birthday.replace(/-/g,"/")) ;
                            var iSum=0 ;
                            for(var i = 17;i>=0;i --) iSum += (Math.pow(2,i) % 11) * parseInt($id2.charAt(17 - i),11) ;
                            if(!/^\d{17}(\d|x)$/i.test($id)){
                                $("#alert1").text("你输入的身份证长度或格式错误").css("color","red");
                            }else if(aCity[parseInt($id2.substr(0,2))]==null){
                                $("#alert1").text("你的身份证地区非法").css("color","red");
                            }else if($birthday!=(d.getFullYear()+"-"+ (d.getMonth()+1) + "-" + d.getDate())){
                                $("#alert1").text("身份证上的出生日期非法").css("color","red");
                            }else if(iSum%11!=1){
                                $("#alert1").text("你输入的身份证号非法").css("color","red");
                            }else {
                                $("#alert1").text("员工的身份证号码").css("color","#a4dd25");
                            }
                            if($id.length==18){
                                $.get("http://localhost/bishe/project/My_contro3/check_id",{
                                    identity:$id
                                }, function(res) {
                                    if (res =="success"){
                                        $("#alert1").text("身份证号可使用").css("color","#a4dd25");
                                        $flag1 = true;
                                    }else{
                                        $("#alert1").text("身份证号已注册或为空").css("color","red");
                                        $flag1 = false;
                                    }
                                },"text")
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='Password']").on('input propertychange',function () {
                            var $pass = $(this).val();
                            if(!(/^[\w_-]{6,16}$/.test($pass))){
                                $("#alert3").text("密码有误，请重填").css("color","red");
                                $flag2 = false;
                            }else {
                                $("#alert3").text("最小6位，最大16位").css("color","#a4dd25");
                                $flag2 = true;
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='Phone']").on('input propertychange',function () {
                            var $phone = $(this).val();
                            if(!(/^1[34578]\d{9}$/.test($phone))){
                                $("#alert5").text("手机号码有误，请重填").css("color","red");
                                $flag4 = false;
                            }else {
                                $("#alert5").text("11位的手机号码").css("color","#a4dd25");
                                $flag4 = true;
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='Number']").on('input propertychange',function () {
                            var $num = $(this).val();
                            if(!(/^[\w_-]{6,16}$/.test($num))){
                                $("#alert4").text("工号有误，请重填").css("color","red");
                                $flag3 = false;
                            }else {
                                $.get("http://localhost/bishe/project/My_contro3/check_number",{
                                    number:$num
                                }, function(res) {
                                    if (res =="success"){
                                        $("#alert4").text("工号可使用").css("color","#a4dd25");
                                        $flag3 = true;
                                    }else{
                                        $("#alert4").text("工号已注册或为空").css("color","red");
                                        $flag3 = false;
                                    }
                                },"text").then(function(){
                                    if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                                        $("[name='submit1']").removeAttr("disabled")
                                    }else {
                                        $("[name='submit1']").attr("disabled","disabled")
                                    }
                                })
                            }
                        });
                        $("[name='submit1']").on("click",function(){
                            $.post("http://localhost/bishe/project/My_contro4/worker_add",{
                                ID:$("[name='ID']").val(),
                                Name:$("[name='Name']").val(),
                                Type:$("[name='Type']").val(),
                                Password:$("[name='Password']").val(),
                                Phone:$("[name='Phone']").val(),
                                Number:$("[name='Number']").val(),
                                Salary:$("[name='Salary']").val()
                            },function(res){
                                alert(res);
                                window.location.reload();
                            },"text")
                        });
                        $("#the_back").on("click",function(){
                            window.location.reload()
                        })
                    });
                    $("#back").on("click",function(){
                        window.location.reload();
                    })
                },"text")
            });
            $("#field_img_3,#field_btn_3").on("click",function(){
                $("#field").html("").css("height","auto");
                $.get("http://localhost/bishe/project/My_contro4/keys",{

                },function(res){
                    var arr = res.split(" ");
                    var cont = `<tr>
                                <th>地块名称</th>
                                <th>地块钥匙数量</th>
                                <th>操作</th>
                            </tr>`;
                    for(var i=0;i<arr.length-1;i+=3){
                        cont+=`<tr>`;
                        cont+=(`<td>${arr[i]}</td>`);
                        cont+=(`<td><input value=${arr[i+1]} readonly="readonly"></td>`);
                        cont+=(`
                        <td>
                             <button id=${arr[i+2]} style="background-color:#a0d034;color:#fff">减一</button>
                             <button value=${arr[i+2]} style="background-color:#a0d034;color:#fff">加一</button>
                        </td>`);
                        cont+=`</tr>`;
                    }
                    $("#field").append(`
                        <table id="field-info" style="margin: 0 auto"></table>
                        <input id="back" type="button" style="margin-left:99%;width:6rem;background-color:#a0d034;color:#fff" value="返回">
                    `);
                    $("#field-info").html(cont);
                    $("#field-info th").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info td").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info button").each(function() {
                        $(this).on("click", function () {
                            if ($(this).attr("id") == undefined) {
                                var id = parseInt($(this).attr("value"));
                                $.get("http://localhost/bishe/project/My_contro4/key_add", {
                                    id: id
                                }, function (res) {
                                    switch (id) {
                                        case 1:
                                            var data1 = $("#field-info td input").eq(0).val();
                                            if (data1 < 5) {
                                                $("#field-info td input").eq(0).removeAttr("readonly").val(++data1);
                                            }
                                            $("#field-info td input").eq(0).attr("readonly", "readonly");
                                            break;
                                        case 2:
                                            var data2 = $("#field-info td input").eq(1).val();
                                            if (data2 < 6) {
                                                $("#field-info td input").eq(1).removeAttr("readonly").val(++data2);
                                            }
                                            $("#field-info td input").eq(1).attr("readonly", "readonly");
                                            break;
                                        case 3:
                                            var data3 = $("#field-info td input").eq(2).val();
                                            if (data3 < 4) {
                                                $("#field-info td input").eq(2).removeAttr("readonly").val(++data3);
                                            }
                                            $("#field-info td input").eq(2).attr("readonly", "readonly");
                                            break;
                                        case 4:
                                            var data4 = $("#field-info td input").eq(3).val();
                                            if (data4 < 10) {
                                                $("#field-info td input").eq(3).removeAttr("readonly").val(++data4);
                                            }
                                            $("#field-info td input").eq(3).attr("readonly", "readonly");
                                            break;
                                        case 5:
                                            var data5 = $("#field-info td input").eq(4).val();
                                            if (data5 < 10) {
                                                $("#field-info td input").eq(4).removeAttr("readonly").val(++data5);
                                            }
                                            $("#field-info td input").eq(4).attr("readonly", "readonly");
                                            break;
                                        case 6:
                                            var data6 = $("#field-info td input").eq(5).val();
                                            if (data6 < 10) {
                                                $("#field-info td input").eq(5).removeAttr("readonly").val(++data6);
                                            }
                                            $("#field-info td input").eq(5).attr("readonly", "readonly");
                                            break;
                                        case 7:
                                            var data7 = $("#field-info td input").eq(6).val();
                                            if (data7 < 5) {
                                                $("#field-info td input").eq(6).removeAttr("readonly").val(++data7);
                                            }
                                            $("#field-info td input").eq(6).attr("readonly", "readonly");
                                            break;
                                        default:
                                            var data8 = $("#field-info td input").eq(7).val();
                                            if (data8 < 5) {
                                                $("#field-info td input").eq(7).removeAttr("readonly").val(++data8);
                                            }
                                            $("#field-info td input").eq(7).attr("readonly", "readonly");
                                    }
                                }, "text")
                            } else {
                                var id = parseInt($(this).attr("id"));
                                $.get("http://localhost/bishe/project/My_contro4/key_sub", {
                                    id: id
                                }, function (res) {
                                    switch (id) {
                                        case 1:
                                            var data1 = $("#field-info td input").eq(0).val();
                                            if (data1 > 0) {
                                                $("#field-info td input").eq(0).removeAttr("readonly").val(--data1);
                                            }
                                            $("#field-info td input").eq(0).attr("readonly", "readonly");
                                            break;
                                        case 2:
                                            var data2 = $("#field-info td input").eq(1).val();
                                            if (data2 > 0) {
                                                $("#field-info td input").eq(1).removeAttr("readonly").val(--data2);
                                            }
                                            $("#field-info td input").eq(1).attr("readonly", "readonly");
                                            break;
                                        case 3:
                                            var data3 = $("#field-info td input").eq(2).val();
                                            if (data3 > 0) {
                                                $("#field-info td input").eq(2).removeAttr("readonly").val(--data3);
                                            }
                                            $("#field-info td input").eq(2).attr("readonly", "readonly");
                                            break;
                                        case 4:
                                            var data4 = $("#field-info td input").eq(3).val();
                                            if (data4 > 0) {
                                                $("#field-info td input").eq(3).removeAttr("readonly").val(--data4);
                                            }
                                            $("#field-info td input").eq(3).attr("readonly", "readonly");
                                            break;
                                        case 5:
                                            var data5 = $("#field-info td input").eq(4).val();
                                            if (data5 > 0) {
                                                $("#field-info td input").eq(4).removeAttr("readonly").val(--data5);
                                            }
                                            $("#field-info td input").eq(4).attr("readonly", "readonly");
                                            break;
                                        case 6:
                                            var data6 = $("#field-info td input").eq(5).val();
                                            if (data6 > 0) {
                                                $("#field-info td input").eq(5).removeAttr("readonly").val(--data6);
                                            }
                                            $("#field-info td input").eq(5).attr("readonly", "readonly");
                                            break;
                                        case 7:
                                            var data7 = $("#field-info td input").eq(6).val();
                                            if (data7 > 0) {
                                                $("#field-info td input").eq(6).removeAttr("readonly").val(--data7);
                                            }
                                            $("#field-info td input").eq(6).attr("readonly", "readonly");
                                            break;
                                        default:
                                            var data8 = $("#field-info td input").eq(7).val();
                                            if (data8 > 0) {
                                                $("#field-info td input").eq(7).removeAttr("readonly").val(--data8);
                                            }
                                            $("#field-info td input").eq(7).attr("readonly", "readonly");
                                    }
                                }, "text")
                            }
                        })
                    });
                    $("#back").on("click",function(){
                        window.location.reload();
                    })
                },"text")
            });
            $("#field_img_4,#field_btn_4").on("click",function(){
                $("#field").html("").css("height","auto");
                $.get("http://localhost/bishe/project/My_contro4/tools",{

                },function(res){
                    var arr = res.split(" ");
                    var cont = `<tr>
                                <th>有机肥数量</th>
                                <th>锄头数量</th>
                                <th>铲子数量</th>
                                <th>水桶数量</th>
                                <th>篮子数量</th>
                                <th>手套数量</th>
                                <th>烧烤架数量</th>
                                <th>木炭数量</th>
                            </tr>`;
                    cont+=`<tr>`;
                    for(var i=0;i<arr.length-1;i++){
                        cont+=(`<td>可直接在下面输入新值<input size="18" value="${arr[i]}"></td>`);
                    }
                    cont+=`</tr>`;
                    cont+=`<tr>`;
                    cont+=(`
                        <td>
                             <button id="manure" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="manure" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="hoe" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="hoe" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="shovel" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="shovel" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="bucket" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="bucket" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="basket" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="basket" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="gloves" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="gloves" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="barbecue" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="barbecue" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                        <td>
                             <button id="charcoal" style="background-color:#a0d034;color:#fff">减一</button>
                             <button value="charcoal" style="background-color:#a0d034;color:#fff">加一</button>
                        </td>
                    `);
                    cont+=`</tr>`;
                    $("#field").css("left","-6.5rem").append(`
                        <table id="field-info" style="margin: 0 auto 10px"></table>
                        <input id="yes" type="button" style="margin-left:105%;margin-bottom:5px;width:6rem;background-color:#a0d034;color:#fff" value="确定">
                        <input id="back" type="button" style="margin-left:105%;width:6rem;background-color:#a0d034;color:#fff" value="返回">
                    `);
                    $("#field-info").html(cont);
                    $("#field-info th").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                    $("#field-info td").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                    $("#field-info button").css("width","5rem").each(function(){
                        $(this).on("click",function(){
                            if($(this).attr("id")==undefined){
                                var name = $(this).attr("value");
                                $.get("http://localhost/bishe/project/My_contro4/tool_add",{
                                    name:name
                                },function(res) {
                                    switch(name)
                                    {
                                        case "manure":
                                            var manure = $("#field-info td input").eq(0).val();
                                            if(manure!=10000) {
                                                $("#field-info td input").eq(0).val(++manure);
                                            }
                                            break;
                                        case "hoe":
                                            var hoe = $("#field-info td input").eq(1).val();
                                            if(hoe!=10000) {
                                                $("#field-info td input").eq(1).val(++hoe);
                                            }
                                            break;
                                        case "shovel":
                                            var shovel = $("#field-info td input").eq(2).val();
                                            if(shovel!=10000) {
                                                $("#field-info td input").eq(2).val(++shovel);
                                            }
                                            break;
                                        case "bucket":
                                            var bucket = $("#field-info td input").eq(3).val();
                                            if(bucket!=10000) {
                                                $("#field-info td input").eq(3).val(++bucket);
                                            }
                                            break;
                                        case "basket":
                                            var basket = $("#field-info td input").eq(4).val();
                                            if(basket!=10000) {
                                                $("#field-info td input").eq(4).val(++basket);
                                            }
                                            break;
                                        case "gloves":
                                            var gloves = $("#field-info td input").eq(5).val();
                                            if(gloves!=10000) {
                                                $("#field-info td input").eq(5).val(++gloves);
                                            }
                                            break;
                                        case "barbecue":
                                            var barbecue = $("#field-info td input").eq(6).val();
                                            if(barbecue!=10000) {
                                                $("#field-info td input").eq(6).val(++barbecue);
                                            }
                                            break;
                                        default:
                                            var charcoal = $("#field-info td input").eq(7).val();
                                            if(charcoal!=10000) {
                                                $("#field-info td input").eq(7).val(++charcoal);
                                            }
                                    }
                                },"text")
                            }else {
                                var name = $(this).attr("id");
                                $.get("http://localhost/bishe/project/My_contro4/tool_sub",{
                                    name:name
                                },function(res) {
                                    switch(name)
                                    {
                                        case "manure":
                                            var manure = $("#field-info td input").eq(0).val();
                                            if(manure!=0){
                                                $("#field-info td input").eq(0).val(--manure);
                                            }
                                            break;
                                        case "hoe":
                                            var hoe = $("#field-info td input").eq(1).val();
                                            if(hoe!=0) {
                                                $("#field-info td input").eq(1).val(--hoe);
                                            }
                                            break;
                                        case "shovel":
                                            var shovel = $("#field-info td input").eq(2).val();
                                            if(shovel!=0) {
                                                $("#field-info td input").eq(2).val(--shovel);
                                            }
                                            break;
                                        case "bucket":
                                            var bucket = $("#field-info td input").eq(3).val();
                                            if(bucket!=0) {
                                                $("#field-info td input").eq(3).val(--bucket);
                                            }
                                            break;
                                        case "basket":
                                            var basket = $("#field-info td input").eq(4).val();
                                            if(basket!=0) {
                                                $("#field-info td input").eq(4).val(--basket);
                                            }
                                            break;
                                        case "gloves":
                                            var gloves = $("#field-info td input").eq(5).val();
                                            if(gloves!=0) {
                                                $("#field-info td input").eq(5).val(--gloves);
                                            }
                                            break;
                                        case "barbecue":
                                            var barbecue = $("#field-info td input").eq(6).val();
                                            if(barbecue!=0) {
                                                $("#field-info td input").eq(6).val(--barbecue);
                                            }
                                            break;
                                        default:
                                            var charcoal = $("#field-info td input").eq(7).val();
                                            if(charcoal!=0) {
                                                $("#field-info td input").eq(7).val(--charcoal);
                                            }
                                    }
                                },"text")
                            }
                        })
                    });
                    $("#yes").on("click",function(){
                        var arr= [];
                        for(var i=0;i<8;i++){
                            var arr2 = [];
                            switch(i)
                            {
                                case 0:
                                    arr2[0] = "manure";
                                    arr2[1] = $("#field-info td input").eq(0).val();
                                    break;
                                case 1:
                                    arr2[0] = "hoe";
                                    arr2[1] = $("#field-info td input").eq(1).val();
                                    break;
                                case 2:
                                    arr2[0] = "shovel";
                                    arr2[1] = $("#field-info td input").eq(2).val();
                                    break;
                                case 3:
                                    arr2[0] = "bucket";
                                    arr2[1] = $("#field-info td input").eq(3).val();
                                    break;
                                case 4:
                                    arr2[0] = "basket";
                                    arr2[1] = $("#field-info td input").eq(4).val();
                                    break;
                                case 5:
                                    arr2[0] = "gloves";
                                    arr2[1] = $("#field-info td input").eq(5).val();
                                    break;
                                case 6:
                                    arr2[0] = "barbecue";
                                    arr2[1] = $("#field-info td input").eq(6).val();
                                    break;
                                default:
                                    arr2[0] = "charcoal";
                                    arr2[1] = $("#field-info td input").eq(7).val();
                            }
                            if(arr2[1]<0){
                                arr2[1]=0
                            }else if(arr2[1]>10000){
                                arr2[1]=10000
                            }
                            arr.push(arr2);
                        }
                        $.post("http://localhost/bishe/project/My_contro4/tool_change",{
                            arr:arr
                        },function(res){
                            alert("修改成功");
                            $.get("http://localhost/bishe/project/My_contro4/tools",{

                            },function(res){
                                var arr2 = res.split(" ");
                                for(var i=0;i<8;i++){
                                    $("#field-info td input").eq(i).val(arr2[i])
                                }
                            },"text")
                        },"text")
                    });
                    $("#back").on("click",function(){
                        window.location.reload();
                    })
                },"text")
            });
            $("#field_img_5,#field_btn_5").on("click",function(){
                $("#field").html("").css("height","auto");
                $.get("http://localhost/bishe/project/My_contro4/plants",{

                },function(res){
                    var arr = res.split(" ");
                    var cont = `<tr>
                                <th>作物名称</th>
                                <th>种子数量</th>
                                <th>有关操作</th>
                            </tr>`;
                    for(var i=0;i<arr.length-1;i+=3){
                        cont+=`<tr>`;
                        cont+=(`<td>${arr[i]}</td>`);
                        cont+=(`<td>可直接输入新值<input name=${arr[i+2]} size="15" value="${arr[i+1]}"></td>`);
                        cont+=(`<td>
                             <button id=${arr[i+2]} style="background-color:#a0d034;color:#fff">减一</button>
                             <button value=${arr[i+2]} style="background-color:#a0d034;color:#fff">加一</button>
                        </td>`);
                        cont+=`</tr>`;
                    }
                    $("#field").append(`
                        <table id="field-info" style="margin: 0 auto 10px"></table>
                        <input id="add" type="button" style="margin-left:99%;margin-bottom:5px;width:6rem;background-color:#a0d034;color:#fff" value="添加">
                        <input id="yes" type="button" style="margin-left:99%;margin-bottom:5px;width:6rem;background-color:#a0d034;color:#fff" value="确定">
                        <input id="back" type="button" style="margin-left:99%;width:6rem;background-color:#a0d034;color:#fff" value="返回">
                    `);
                    $("#field-info").html(cont);
                    $("#field-info th").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info td").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info button").css("width","3rem").each(function(){
                        $(this).on("click",function(){
                            if($(this).attr("id")==undefined){
                                var name = $(this).attr("value");
                                $.get("http://localhost/bishe/project/My_contro4/plant_add",{
                                    name:name
                                },function(res) {
                                    var value = $(`input[name=${res}]`).val();
                                    if(value!=100){
                                        $(`input[name=${res}]`).val(++value);
                                    }
                                },"text")
                            }else {
                                var name = $(this).attr("id");
                                $.get("http://localhost/bishe/project/My_contro4/plant_sub",{
                                    name:name
                                },function(res) {
                                    var value = $(`input[name=${res}]`).val();
                                    if(value!=0){
                                        $(`input[name=${res}]`).val(--value);
                                    }
                                },"text")
                            }
                        })
                    });
                    $("#add").on("click",function(){
                        $("#field").html("");
                        $("#field").append(`
                                <div style="width: 60%;margin: 0 auto">
                                    <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                                        <div id="form">
                                            <span>
                                                    <i>作物名称</i>
                                                    <input type="text" name="Name" placeholder=" " required="">
                                                    <span id="alert1" style="font-size: 12px;float: right;color: #a4dd25">作物的名称</span>
                                            </span>
                                            <span>
                                                    <i>作物价格</i>
                                                    <input type="text" name="Price" placeholder=" " required="">
                                                    <span id="alert2" style="font-size: 12px;float: right;color: #a4dd25">作物种子价格</span>
                                            </span>
                                            <span>
                                                    <i>人工价格</i>
                                                    <input type="text" name="Price2" placeholder=" " required="">
                                                    <span id="alert3" style="font-size: 12px;float: right;color: #a4dd25">作物人工价格</span>
                                            </span>
                                            <span>
                                                    <i>英文名称</i>
                                                    <input type="text" name="English" placeholder=" " required="">
                                                    <span id="alert4" style="font-size: 12px;float: right;color: #a4dd25">作物英文名称</span>
                                            </span>
                                            <span>
                                                    <i>作物生长周期</i>
                                                    <input type="text" name="Days" placeholder=" " required="">
                                                    <span id="alert5" style="font-size: 12px;float: right;color: #a4dd25">作物生长周期</span>
                                            </span>
                                            <br>
                                            <div class="w3_submit">
                                                <input name="submit1" type="button" value="提 交" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <input id="the_back" type="button" style="margin-left:100%;width:6rem;background-color:#a0d034;color:#fff" value="返回">
                                </div>
                        `);
                        var $flag1 = false,$flag2 = false,$flag3 = false,$flag4 = false,$flag5 = false;
                        $("[name='Name']").on('input propertychange',function () {
                            var $name = $(this).val();
                            $.get("http://localhost/bishe/project/My_contro4/check_plant",{
                                name:$name
                            },function(res){
                                if(res=="success"){
                                    $("#alert2").text("");
                                    $flag1 = true;
                                }else {
                                    $("#alert2").text("请输入数字").css("color","red");
                                    $flag1 = false;
                                }
                            },"text");
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='Price']").on('input propertychange',function () {
                            var $pri = $(this).val();
                            if(!(/^[+]{0,1}(\d+)$/.test($pri))){
                                $("#alert2").text("请输入数字").css("color","red");
                                $flag2 = false;
                            }else {
                                $("#alert2").text("");
                                $flag2 = true;
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='Price2']").on('input propertychange',function () {
                            var $pri2 = $(this).val();
                            if(!(/^[+]{0,1}(\d+)$/.test($pri2))){
                                    $("#alert3").text("请输入数字").css("color","red");
                                    $flag3 = false;
                            }else {
                                    $("#alert3").text("");
                                    $flag3 = true;
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
                                    $("[name='submit1']").removeAttr("disabled")
                            }else {
                                    $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='English']").on('input propertychange',function () {
                            var $eng = $(this).val();
                            if(!(/^[A-Za-z]+$/.test($eng))){
                                $("#alert4").text("英文名称有误，请重填").css("color","red");
                                $flag4 = false;
                            }else {
                                $("#alert4").text("");
                                $flag4 = true;
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='Days']").on('input propertychange',function () {
                            var $day = $(this).val();
                            if(!(/^[+]{0,1}(\d+)$/.test($day))){
                                $("#alert5").text("请输入数字").css("color","red");
                                $flag5 = false;
                            }else {
                                $("#alert5").text("");
                                $flag5 = true;
                            }
                            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
                                $("[name='submit1']").removeAttr("disabled")
                            }else {
                                $("[name='submit1']").attr("disabled","disabled")
                            }
                        });
                        $("[name='submit1']").on("click",function(){
                            $.post("http://localhost/bishe/project/My_contro4/new_plant",{
                                name:$("[name='Name']").val(),
                                seed_price:parseInt($("[name='Price']").val()),
                                work_price:parseInt($("[name='Price2']").val()),
                                english:$("[name='English']").val(),
                                days:parseInt($("[name='Days']").val())
                            },function(res){
                                alert(res);
                                window.location.reload();
                            },"text")
                        });
                        $("#the_back").on("click",function(){
                            window.location.reload()
                        })
                    });
                    $("#yes").on("click",function(){
                        var arr= [];
                        for(var i=0;i<$("#field-info td input").length;i++){
                            var arr2 = [];
                            arr2[0] = $("#field-info td input").eq(i).attr("name");
                            arr2[1] = $("#field-info td input").eq(i).val();
                            if(arr2[1]<0){
                                arr2[1]=0
                            }else if(arr2[1]>100){
                                arr2[1]=100
                            }
                            arr.push(arr2);
                        }
                        $.post("http://localhost/bishe/project/My_contro4/plant_change",{
                            arr:arr
                        },function(res){
                            alert("修改成功");
                            $.get("http://localhost/bishe/project/My_contro4/plants",{

                            },function(res){
                                var arr2 = res.split(" ");
                                for(var i=0;i<arr2.length-1;i+=3){
                                    $("#field-info td input").eq(i).val(arr2[i+1])
                                }
                            },"text")
                        },"text")
                    });
                    $("#back").on("click",function(){
                        window.location.reload();
                    })
                },"text")
            });
            $("#field_img_6,#field_btn_6").on("click",function(){
                $("#field").html("").css("height","auto");
                $.get("http://localhost/bishe/project/My_contro4/harvest",{

                },function(res){
                    var arr = res.split(" ");
                    var cont = `<tr>
                                <th>地块名称</th>
                                <th>用户姓名</th>
                                <th>作物名称</th>
                                <th>用户地址</th>
                                <th>有关操作</th>
                            </tr>`;
                    for(var i=0;i<arr.length-1;i+=5){
                        cont+=`<tr>`;
                        cont+=(`<td>${arr[i]}</td>`);
                        cont+=(`<td>${arr[i+1]}</td>`);
                        cont+=(`<td>${arr[i+2]}</td>`);
                        cont+=(`<td>${arr[i+3]}</td>`);
                        cont+=(`<td><button id="${arr[i+4]}" style="background-color:#a0d034;color:#fff">已发送</button></td>`);
                        cont+=`</tr>`;
                    }
                    $("#field").append(`
                        <table id="field-info" style="margin: 0 auto"></table>
                        <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                    `);
                    $("#field-info").html(cont);
                    $("#field-info th").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info td").css({"border":"1px solid #a0d034","width":"7rem","height":"2rem"});
                    $("#field-info button").each(function(){
                        $(this).on("click",function(){
                            var $theId = $(this).attr("id");
                            $.get("http://localhost/bishe/project/My_contro4/harvest_delete",{
                                id:$theId
                            },function(res){
                                alert(res);
                                window.location.reload();
                            },"text")
                        })
                    });
                    $("#back").on("click",function(){
                        window.location.reload();
                    })
                },"text")
            });
            $("#field_img_7,#field_btn_7").on("click",function(){
                $("#field").html("").css("height","auto");
                $("#field").append(`
                <div id="container" style="max-width:800px;height:400px;margin: 0 auto"></div>
                <input id="the_back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                `);
                $.get("http://localhost/bishe/project/My_contro4/flow",{

                },function(res){
                    var arr = res.split(",");
                    for(var i=7;i<arr.length-1;i++){
                        arr[i] = parseInt(arr[i])
                    }
                    var chart = Highcharts.chart('container', {
                        title: {
                            text: '最近7天小菜园线上系统访问情况'
                        },
                        yAxis: {
                            title: {
                                text: '访问次数'
                            }
                        },
                        xAxis: {
                            labels: {
                                align: 'right'
                            },
                            categories: [arr[0],arr[1],arr[2],arr[3],arr[4],arr[5],arr[6]]
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'middle'
                        },
                        plotOptions: {
                            series: {
                                label: {
                                    connectorAllowed: false
                                }
                            }
                        },
                        series: [{
                            name: '主页访问量',
                            data: [arr[7],arr[8],arr[9],arr[10],arr[11],arr[12],arr[13]]
                        }, {
                            name: '登录页访问量',
                            data: [arr[14],arr[15],arr[16],arr[17],arr[18],arr[19],arr[20]]
                        }, {
                            name: '注册页访问量',
                            data: [arr[21],arr[22],arr[23],arr[24],arr[25],arr[26],arr[27]]
                        }],
                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 500
                                },
                                chartOptions: {
                                    legend: {
                                        layout: 'horizontal',
                                        align: 'center',
                                        verticalAlign: 'bottom'
                                    }
                                }
                            }]
                        }
                    });
                },"text");
                $("#the_back").on("click",function(){
                    window.location.reload();
                });
            });
            $("#field_img_8,#field_btn_8").on("click",function(){
                window.location = "My_contro/manager_login";
            });
    }
    </script>
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="http://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
<div class="banner1">
    <div class="container">
        <div class="w3_agileits_banner_main_grid">
            <div class="w3_agile_logo">
                <h1><a href="index.html"><span>G</span>erminate<i>Grow healthy products</i></a></h1>
            </div>
            <div class="agile_social_icons_banner">
                <ul class="agileits_social_list">
                    <li><a href="My_contro/index" class="w3_agile_user"><i class="fa fa-home" aria-hidden="true"></i> 返回主页</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- banner -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="w3layouts_breadcrumbs_left">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
                <li><i class="fa fa-asl-interpreting" aria-hidden="true"></i>Work</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>Work</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head"><span>业务综合管理</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 选 择 您 想 操 作 的 业 务</p>
        <div class="w3ls_news_grids user_field" >
            <section>
                <div class="modal-body">
                    <div id="field" style="position: relative;width:72rem;height:300px;background-color: #fff">

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- //contact -->
<script type="text/javascript">

</script>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3agile_footer_grids">
            <div class="col-md-3 agileinfo_footer_grid">
                <div class="agileits_w3layouts_footer_logo">
                    <h2><a href="index.html"><span>G</span>erminate<i>Grow healthy products</i></a></h2>
                </div>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Contact Info</h3>
                <h4>Call Us <span>+1234 567 891</span></h4>
                <p>My Company, 875 Jewel Road <span>8907 Ukraine.</span></p>
                <ul class="agileits_social_list">
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
                <h3>Navigation</h3>
                <ul class="w3layouts_footer_nav">
                    <li><a href="index.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
                    <li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Web Icons</a></li>
                    <li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Typography</a></li>
                    <li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 agileinfo_footer_grid">
                <h3>Blog Posts</h3>
                <div class="agileinfo_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileinfo_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileinfo_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileinfo_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="w3_agileits_footer_copy">
        <div class="container">

        </div>
    </div>
</div>
<!-- //footer -->
<script>

</script>
<!-- menu -->
<script>
    $(function() {

        initDropDowns($("div.shy-menu"));

    });

    function initDropDowns(allMenus) {

        allMenus.children(".shy-menu-hamburger").on("click", function() {

            var thisTrigger = jQuery(this),
                thisMenu = thisTrigger.parent(),
                thisPanel = thisTrigger.next();

            if (thisMenu.hasClass("is-open")) {

                thisMenu.removeClass("is-open");

            } else {

                allMenus.removeClass("is-open");
                thisMenu.addClass("is-open");
                thisPanel.on("click", function(e) {
                    e.stopPropagation();
                });
            }

            return false;
        });
    }
</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>