<!DOCTYPE html>
<html lang="en">
<head>
    <title>regist</title>
    <base href="<?php echo site_url();?>">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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
            <div class="agileits_w3layouts_menu">
                <div class="shy-menu">
                    <a class="shy-menu-hamburger">
                        <span class="layer top"></span>
                        <span class="layer mid"></span>
                        <span class="layer btm"></span>
                    </a>
                    <div class="shy-menu-panel">
                        <nav class="menu menu--horatio link-effect-8" id="link-effect-8">
                            <ul class="w3layouts_menu__list">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="regist.html">Regist</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="clearfix"> </div>
                </div>
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
                <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i>regist</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>Regist</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head">请 您<span> 在 此</span> 注 册</h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 填 写 有 关 您 的 信 息</p>
        <div class="w3ls_news_grids user_form">
            <div class="col-md-8 w3_agile_mail_left">
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                    <form action="http://localhost/bishe/project/My_contro/regist" method="post">
							<span>
								<i>姓名</i>
								<input type="text" name="Name" placeholder=" " required="">
							</span>
                        <span>
								<i>微信号</i>
								<input type="text" name="Wechat" placeholder=" " required="">
                                <span id="alert5" style="font-size: 12px;float: right;color: #a4dd25">您的微信号</span>
							</span>
                        <span>
								<i>手机号</i>
								<input type="text" name="Phone" placeholder=" " required="">
                                <span id="alert1" style="font-size: 12px;float: right;color: #a4dd25">11位的手机号码</span>
							</span>
                        <span>
								<i>验证码</i>
								<input type="text" name="Verify" placeholder=" " required="">
                                <span style="font-size: 12px;float: right;"><button id="getNum" style="background-color: #a4dd25;color: #fff">获取验证码</button></span>
                                <span id="alert4" style="font-size: 12px;float: right;color: #a4dd25"></span>
							</span>
                        <span>
								<i>密码</i>
								<input type="password" name="Password" placeholder=" " required="">
                                <span id="alert2" style="font-size: 12px;float: right;color: #a4dd25">最小6位，最大16位</span>
							</span>
                        <span>
								<i>确认密码</i>
								<input type="password" name="Re_password" placeholder=" " required="">
                                <span id="alert3" style="font-size: 12px;float: left;color: #a4dd25"></span>
							</span>
                        <div class="w3_submit">
                            <input type="submit" disabled="disabled" value="现 在 注 册">
                        </div>
                    </form>
                </div>
            </div>
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
<!-- validate -->
<script>
    var $flag1 = false,$flag2 = false,$flag3 = false,$flag4 = false,$flag5 = false;
    $("[name='Phone']").on('input propertychange',function () {
        var $phone = $(this).val();
        if(!(/^1[34578]\d{9}$/.test($phone))){
            $("#alert1").text("手机号码有误，请重填").css("color","red");
        }else {
            $("#alert1").text("11位的手机号码").css("color","#a4dd25");
        }
        if($phone.length==11){
            $.get("http://localhost/bishe/project/My_contro/check_phone",{
                number:$phone
            }, function(res) {
                if (res =="success"){
                    $("#alert1").text("手机号可使用").css("color","#a4dd25");
                    $flag1 = true;
                }else{
                    $("#alert1").text("手机号已注册或为空").css("color","red");
                    $flag1 = false;
                }
            },"text")
        }
        if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
            $(".w3_submit [type='submit']").removeAttr("disabled")
        }else {
            $(".w3_submit [type='submit']").attr("disabled","disabled")
        }
    });
    $("[name='Wechat']").on('input propertychange',function () {
        var $wechat = $(this).val();
        $.get("http://localhost/bishe/project/My_contro/check_wechat",{
            wechat:$wechat
        }, function(res) {
            if (res =="success"){
                $("#alert5").text("微信号可使用").css("color","#a4dd25");
                $flag5 = true;
            }else{
                $("#alert5").text("微信号已注册或为空").css("color","red");
                $flag5 = false;
            }
        },"text")
        if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
            $(".w3_submit [type='submit']").removeAttr("disabled")
        }else {
            $(".w3_submit [type='submit']").attr("disabled","disabled")
        }
    });
    $("[name='Password']").on('input propertychange',function () {
        var $pass = $(this).val();
        if(!(/^[\w_-]{6,16}$/.test($pass))){
            $("#alert2").text("密码有误，请重填").css("color","red");
            $flag2 = false;
        }else {
            $("#alert2").text("最小6位，最大16位").css("color","#a4dd25");
            $flag2 = true;
        }
        var $repass = $("[name='Re_password']").val();
        if($pass!=$repass){
            $("#alert3").text("两次输入的密码不一致").css("color","red");
            $flag3 = false;
        }else {
            $("#alert3").text("");
            $flag3 = true;
        }
        if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
            $(".w3_submit [type='submit']").removeAttr("disabled")
        }else {
            $(".w3_submit [type='submit']").attr("disabled","disabled")
        }
    });
    $("[name='Re_password']").on('input propertychange',function () {
        var $pass = $("[name='Password']").val();
        var $repass = $(this).val();
        if($pass!=$repass){
            $("#alert3").text("两次输入的密码不一致").css("color","red");
            $flag3 = false;
        }else {
            $("#alert3").text("");
            $flag3 = true;
        }
        if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true&&$flag5==true){
            $(".w3_submit [type='submit']").removeAttr("disabled")
        }else {
            $(".w3_submit [type='submit']").attr("disabled","disabled")
        }
    });

    $(function(){
        // 1、点击获取验证码，请求接口，发给用户验证码
        $('#getNum').on('click',function(){
            // 2、获取用户的手机号
            var phoneNum = $("[name='Phone']").val();
            // 2.7 要符合手机号的标准才能向用户的手机号发送验证码
            var regex = new RegExp($("[name='Phone']").attr('regex'));
            if(!regex.test($("[name='Phone']").val())){
                alert("请输入正确手机号");
            }else{
                // 2.4 进行截取字符，最终拿到发给用户的验证码
                var tpl_value = decodeURIComponent(tpl_val);;
                var chenkNum = tpl_value.slice(7);
                console.log(chenkNum); // 这个就是发给用户的验证码
                // 2.4.1 调用发送短信验证码的接口
                check(phoneNum,chenkNum);
                count($(this));
            }

        });

        // 2.1 根据接口文档，封装函数
        function check(mobile,chenkNum){
            console.log(mobile,chenkNum);
            $.get("http://localhost/bishe/project/My_contro/SMS",{
                message:chenkNum,
                number:mobile
            }, function(res) {
                // 2.5 用户输入验证码，点击注册
                // 点击注册
                $("[name='Verify']").on('input propertychange', function () {
                    // 2.5.1 如果验证码发送成功，对验证码进行成功匹配，否则提示用户错误信息
                    if (res.code == 0) {
                        // 2.5.2 如果发送的验证码和用户输入的验证码一致，就显示成功，否则提示用户验证不正确
                        if (chenkNum === $("[name='Verify']").val()) {
                            $("#alert4").text("您输入的验证码正确").css("color","#a4dd25");
                            $flag4 = true;
                        } else {
                            $("#alert4").text("您输入的验证码有误").css("color", "red");
                            $flag4 = false;
                        }
                    } else {
                        // 否则提示用户错误信息
                        alert(res.data);
                    }
                    if ($flag1 == true && $flag2 == true && $flag3 == true && $flag4 == true&&$flag5 == true) {
                        $(".w3_submit [type='submit']").removeAttr("disabled")
                    } else {
                        $(".w3_submit [type='submit']").attr("disabled", "disabled")
                    }
                });
            },"json")
        }

        // 2.2 封装生成随机的6位数的函数
        function mathRan(){
            var num = '';
            for(var i = 0; i < 6; i++){
                num += Math.floor(Math.random() * 10);
            }
            return num;
        }
        var mathNum = mathRan();

        // 2.3 根据接口文档，对验证码进行转换urlencode形式
        var tpl_val = encodeURIComponent('#code#='+ mathNum);

        // 2.6 封装倒计时函数
        var countNum = 60;
        function count(elm){
            if(countNum == 0){
                elm.attr('disabled',false);
                elm.text('获取验证码');
                countNum = 60;
                return;
            }else{
                elm.attr('disabled',true);
                elm.text('重新发送('+ countNum + 's)');
                countNum--;
            }
            setTimeout(function(){
                count(elm)
            },1000)
        }
    }); // 入口函数
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
<!--for bootstrap working -->
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