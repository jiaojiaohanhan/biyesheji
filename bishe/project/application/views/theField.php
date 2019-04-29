<!DOCTYPE html>
<html lang="en">
<head>
    <title>field</title>
    <base href="<?php echo site_url();?>">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        var index,sur,forword,next = 0,num,price = 0,vals = [],the_sur;
        addEventListener("load", function() {
            //禁用前进后退
            history.pushState(null, null, document.URL);
            window.addEventListener('popstate', function () {
                history.pushState(null, null, document.URL);
            });

            setTimeout(hideURLbar, 0);
            index = document.getElementById("index").innerHTML;
        }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script>
        window.onload = function(){
            $("#field").show().siblings().hide();
            if(index==1){
                $("#field div").eq(index-1).css({"float":"left","left":"0","top":"0","display":"inline-block"}).show().siblings().hide();
            }else {
                $("#field div").eq(index-1).css({"position":"relative","left":"0","top":"0","display":"inline-block"}).show().siblings().hide();
            }
            $.get("http://localhost/bishe/project/My_contro2/field_info",{
                index:index
            }, function(res) {
                sur = res.sur;
                num = sur;
                var the_sur = "，剩余<span style='color:#a0d034'>"+sur+"</span>列";
                if(index==1){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长800米，宽240米，共有四列"+the_sur+"</div>");
                }else if(index==2){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长660米，宽250米，共有五列"+the_sur+"</div>");
                }else if(index==3){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长400米，宽300米，共有三列"+the_sur+"</div>");
                }else if(index==4){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长600米，宽150米，为公共区域，消费者可以自主开展规划活动</div>");
                }else if(index==5){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长540米，宽200米，为游戏区，为少年儿童提供了充足的游戏娱乐设施</div>");
                }else if(index==6){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长420米，宽200米，为烧烤区，消费者可以开展自主烧烤活动</div>");
                }else if(index==7){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长360米，宽200米，共有四列"+the_sur+"</div>");
                }else if(index==8){
                    $("#field").append("<div style='position: relative;font-size:2em'>该地块长600米，宽200米，共有四列"+the_sur+"</div>");
                }
                if(sur==0){
                    $("section input").eq(1).attr("disabled","disabled").css("background-color","#999");
                    $("#field").append("<div style='position: relative;font-size:1.5em;color:#CC0000'>请选择其它地块</div>")
                }
            },"json");
            $("section input").eq(0).on("click",function(){
                window.location = "My_contro2/choose_field";
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
                <p id="index" style="display: none"><?php echo $index;?></p>
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
                <li><i class="fa fa-plus-square-o" aria-hidden="true"></i>TheField</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>TheField</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head"><span>地块选订</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 选 择 您 想 要 的 地 块</p>
        <div class="w3ls_news_grids user_field" >
                <section>
                    <div class="modal-body">
                        <div id="field" style="position: relative;width:72rem;height:800px;background-color: #fff">
                            <div style="position: relative;left:80%;top:0;height:800px;line-height:800px;width: 20%;background-color: #2e6da4;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区一</div>
                            <div style="position: absolute;left:25%;top:0;height:250px;line-height:250px;width: 55%;background-color: #6adcfa;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区二</div>
                            <div style="position: absolute;left:0;top:0;height:400px;line-height:400px;width:25%;background-color: #ea4c89;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区三</div>
                            <div style="position: absolute;left:25%;top:250px;height:150px;line-height:150px;width: 55%;background-color: #5a0099;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">公共区域</div>
                            <div style="position: absolute;left:0;top:400px;height:200px;line-height:200px;width: 45%;background-color: #2b542c;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">游戏区</div>
                            <div style="position: absolute;left:45%;top:400px;height:200px;line-height:200px;width: 35%;background-color: #c7254e;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">烧烤区</div>
                            <div style="position: absolute;left:0;top:600px;height:200px;line-height:200px;width: 30%;background-color: #d58512;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区四</div>
                            <div style="position: absolute;left:30%;top:600px;height:200px;line-height:200px;width: 50%;background-color: #a4dd25;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区五</div>
                        </div>
                        <div id="field2" style="position: relative;width:72rem;height:800px;background-color: #fff">
                            <div style="position: relative;left:80%;top:0;height:800px;line-height:800px;width: 20%;background-color: #2e6da4;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区一</div>
                            <div style="position: absolute;left:25%;top:0;height:250px;line-height:250px;width: 55%;background-color: #6adcfa;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区二</div>
                            <div style="position: absolute;left:0;top:0;height:400px;line-height:400px;width:25%;background-color: #ea4c89;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区三</div>
                            <div style="position: absolute;left:25%;top:250px;height:150px;line-height:150px;width: 55%;background-color: #5a0099;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">公共区域</div>
                            <div style="position: absolute;left:0;top:400px;height:200px;line-height:200px;width: 45%;background-color: #2b542c;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">游戏区</div>
                            <div style="position: absolute;left:45%;top:400px;height:200px;line-height:200px;width: 35%;background-color: #c7254e;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">烧烤区</div>
                            <div style="position: absolute;left:0;top:600px;height:200px;line-height:200px;width: 30%;background-color: #d58512;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区四</div>
                            <div style="position: absolute;left:30%;top:600px;height:200px;line-height:200px;width: 50%;background-color: #a4dd25;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px">种植区五</div>
                        </div>
                    </div>
                    <input style="position: relative;left: 0;width:10rem;height:3rem;background-color:#a0d034;color:#fff" type="button" value="返回">
                    <input style="position: relative;left: 70%;width:10rem;height:3rem;background-color:#a0d034;color:#fff" type="button" value="下一页">
                </section>
        </div>
    </div>
</div>

<!-- //contact -->
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
    $("#field div").on("mouseover",function(){
        $(this).css({"border":"4px #a0d034 solid"});
    }).on("mouseout",function(){
        $(this).css({"border":""});
    })
</script>
<script>
    $("section input").eq(1).on("click",function() {
        next++;
        if(next==1){
            $(this).css("display","none");
            var that = $(this);
            $("#field2").show().siblings().hide();
            if (index == 1) {
                $("#field2 div").eq(index - 1).css({
                    "float": "left",
                    "left": "0",
                    "top": "0",
                    "display": "inline-block"
                }).show().siblings().hide();
            } else {
                $("#field2 div").eq(index - 1).css({
                    "position": "relative",
                    "left": "0",
                    "top": "0",
                    "display": "inline-block"
                }).show().siblings().hide();
            }
            $("#field2").append(`<div>请选择您想订购的列数
                            <button style="position: relative;left: 0;width:2rem;height:2rem;background-color:#a0d034;color:#fff">-</button>
                            <span>${sur}</span>
                            <button style="position: relative;left: 0;width:2rem;height:2rem;background-color:#a0d034;color:#fff">+</button></div>
                            请选择您想种植的作物，一列可种一种作物
                            <div id="choose_plant"><button style="position: relative;left: 0;width:4rem;height:2rem;background-color:#a0d034;color:#fff">确定</button></div>
            `);
            for (var i = 0; i < sur; i++) {
                $("#choose_plant").prepend(`
                         <div>
                         第${i + 1}列:
                            <br>
                                <input type="radio" name="plant${i + 1}" value="草莓" checked>草莓
                                <input type="radio" name="plant${i + 1}" value="橘子">橘子
                                <input type="radio" name="plant${i + 1}" value="石榴">石榴
                                <input type="radio" name="plant${i + 1}" value="柠檬">柠檬
                            <br>
                                <input type="radio" name="plant${i + 1}" value="苹果">苹果
                                <input type="radio" name="plant${i + 1}" value="白菜">白菜
                                <input type="radio" name="plant${i + 1}" value="菠菜">菠菜
                                <input type="radio" name="plant${i + 1}" value="猕猴桃">猕猴桃
                            <br>
                                <input type="radio" name="plant${i + 1}" value="黄瓜">黄瓜
                                <input type="radio" name="plant${i + 1}" value="番茄">番茄
                                <input type="radio" name="plant${i + 1}" value="茄子">茄子
                                <input type="radio" name="plant${i + 1}" value="豌豆">豌豆
                         </div>
                    `)
            }
            $("#field2 button").eq(0).on("click", function () {
                num = parseInt($("#field2 span").text());
                if (num == 0) {
                    $("#field2 span").text(0);
                    $("#choose_plant div").remove();
                } else {
                    num--;
                    $(this).removeAttr("disabled");
                    $("#field2 span").text(num);
                    $("#choose_plant div").remove();
                    for (var i = 0; i < num; i++) {
                        $("#choose_plant").prepend(`
                         <div>
                         第${i + 1}列:
                            <br>
                                <input type="radio" name="plant${i + 1}" value="草莓" checked>草莓
                                <input type="radio" name="plant${i + 1}" value="橘子">橘子
                                <input type="radio" name="plant${i + 1}" value="石榴">石榴
                                <input type="radio" name="plant${i + 1}" value="柠檬">柠檬
                            <br>
                                <input type="radio" name="plant${i + 1}" value="苹果">苹果
                                <input type="radio" name="plant${i + 1}" value="白菜">白菜
                                <input type="radio" name="plant${i + 1}" value="菠菜">菠菜
                                <input type="radio" name="plant${i + 1}" value="猕猴桃">猕猴桃
                            <br>
                                <input type="radio" name="plant${i + 1}" value="黄瓜">黄瓜
                                <input type="radio" name="plant${i + 1}" value="番茄">番茄
                                <input type="radio" name="plant${i + 1}" value="茄子">茄子
                                <input type="radio" name="plant${i + 1}" value="豌豆">豌豆
                         </div>
                    `)
                    }
                }
            });
            $("#field2 button").eq(1).on("click", function () {
                num = parseInt($("#field2 span").text());
                if (num == sur) {
                    $("#field2 span").text(sur);
                    $("#choose_plant div").remove();
                    for (var i = 0; i < num; i++) {
                        $("#choose_plant").prepend(`
                         <div>
                         第${i + 1}列:
                            <br>
                                <input type="radio" name="plant${i + 1}" value="草莓" checked>草莓
                                <input type="radio" name="plant${i + 1}" value="橘子">橘子
                                <input type="radio" name="plant${i + 1}" value="石榴">石榴
                                <input type="radio" name="plant${i + 1}" value="柠檬">柠檬
                            <br>
                                <input type="radio" name="plant${i + 1}" value="苹果">苹果
                                <input type="radio" name="plant${i + 1}" value="白菜">白菜
                                <input type="radio" name="plant${i + 1}" value="菠菜">菠菜
                                <input type="radio" name="plant${i + 1}" value="猕猴桃">猕猴桃
                            <br>
                                <input type="radio" name="plant${i + 1}" value="黄瓜">黄瓜
                                <input type="radio" name="plant${i + 1}" value="番茄">番茄
                                <input type="radio" name="plant${i + 1}" value="茄子">茄子
                                <input type="radio" name="plant${i + 1}" value="豌豆">豌豆
                         </div>
                    `)
                    }
                } else {
                    num++;
                    $(this).removeAttr("disabled");
                    $("#field2 span").text(num);
                    $("#choose_plant div").remove();
                    for (var i = 0; i < num; i++) {
                        $("#choose_plant").prepend(`
                         <div>
                         第${i + 1}列:
                            <br>
                                <input type="radio" name="plant${i + 1}" value="草莓" checked>草莓
                                <input type="radio" name="plant${i + 1}" value="橘子">橘子
                                <input type="radio" name="plant${i + 1}" value="石榴">石榴
                                <input type="radio" name="plant${i + 1}" value="柠檬">柠檬
                            <br>
                                <input type="radio" name="plant${i + 1}" value="苹果">苹果
                                <input type="radio" name="plant${i + 1}" value="白菜">白菜
                                <input type="radio" name="plant${i + 1}" value="菠菜">菠菜
                                <input type="radio" name="plant${i + 1}" value="猕猴桃">猕猴桃
                            <br>
                                <input type="radio" name="plant${i + 1}" value="黄瓜">黄瓜
                                <input type="radio" name="plant${i + 1}" value="番茄">番茄
                                <input type="radio" name="plant${i + 1}" value="茄子">茄子
                                <input type="radio" name="plant${i + 1}" value="豌豆">豌豆
                         </div>
                    `)
                    }
                }
            });
            $("#field2 button").eq(2).on("click", function () {
                var price1 = 0,price2 = 0;
                $("div[name=choose1]").remove();
                $("div[name=choose2]").remove();
                $("div[name=choose3]").remove();
                $("div[name=choose4]").remove();
                that.css("display","inline");
                for(var i=0;i<num;i++){
                    vals.push($(`input[name=plant${i+1}]:checked`).val());
                }
                $("#field2").append(`
                <div name="choose1">您选择的是${vals}</div>
                `);
                ajax1 = $.get("http://localhost/bishe/project/My_contro2/field_price",{
                    index:index
                }, function(res) {
                    var field_price = res.field_price;
                    var worker_price = res.worker_price;
                    price1 = (parseFloat(field_price)+parseFloat(worker_price))*num;
                    $("#field2").append(`
                        <div name="choose2">您需要付款的租地金额是${price1}元</div>
                    `);
                },"json");
                ajax2 = $.get("http://localhost/bishe/project/My_contro2/plant_price",{
                    plant_names:vals
                }, function(res) {
                    var arr = res.split(" ");
                    for(var i=0;i<arr.length-1;i++){
                        price2+=parseFloat(arr[i])
                    }
                    $("#field2").append(`
                        <div name="choose3">您需要付款的作物金额是${price2}元</div>
                    `);
                },"text");
                $.when(ajax1).done(function(){
                    price += price1
                }).then($.when(ajax2).done(function(){
                    price += price2;
                    $("#field2").append(`
                    <div name="choose4">您需要付款的金额是${price}元</div>
                `)
                }));
            });
        }else if(next==2){
            $(this).css("display","none");
            $("#field2").show().siblings().hide();
            $("#field2").html("");
            $("#field2").append(`
                  <div><img style="display: inline-block;width: 50%;height: 35rem;float: left" src="images/alibaba.jpg"></div>
                  <div><img style="display: inline-block;width: 50%;height: 35rem;float: left" src="images/wechat.png"></div>
                  <div style="text-align: center;font-size: 35px;">您需要付款的金额是<span style="color: #a0d034">${price}</span>元</div>
                  <input id="pay" style="position: relative;left: 30rem;top:12rem;width:10rem;height:3rem;background-color:#a0d034;color:#fff" type="button" value="确定">
            `);
            $("#pay").on("click",function(){
                var user_id = localStorage.key(0);
                $.get("http://localhost/bishe/project/My_contro2/pay_field",{
                    user_id:user_id,
                    field_id:index,
                    plant_names:vals,
                    the_sur:(sur-vals.length)
                }, function(res) {},"text");
                alert("支付成功");
                window.location = "My_contro/index";
            })
        }
    })
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