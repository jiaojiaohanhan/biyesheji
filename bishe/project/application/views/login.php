<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <base href="<?php echo site_url();?>">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
            $(".agileits_w3layouts_head span").eq(0).addClass("active").siblings().removeClass("active");
            $(".agileits_mail_grid_right1 form").eq(0).show().siblings().hide();
        }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function(){
            var $msg = "<?php echo $msg;?>";
            if($msg!=""){
                alert($msg);
            }
            $.get("http://localhost/bishe/project/My_contro/login_times",{

            }, function(res) {

            },"text");
        })
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
                                <li><a href="regist.html">Regist</a></li>
                                <li class="active"><a href="login.html">Login</a></li>
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
                <li><i class="fa fa-user" aria-hidden="true"></i>Login</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>Login</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head"><span>手机登录</span>/<span>微信登录</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 填 写 您 的 有 关 信 息</p>
        <div class="w3ls_news_grids user_form" >
            <div class="col-md-8 w3_agile_mail_left">
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                    <form action="http://localhost/bishe/project/My_contro/login_phone" method="post">
                        <span>
								<i>手机号</i>
								<input type="text" name="Phone" placeholder=" " required="" autocomplete="off">
							</span>
                        <span>
								<i>密码</i>
								<input type="password" name="Password" placeholder=" " required="" autocomplete="off">
							</span>
                        <div class="w3_submit">
                            <input type="submit" value="现 在 登 录">
                            <input type="button" value="忘记/修改密码">
                        </div>
                    </form>
                    <form action="http://localhost/bishe/project/My_contro/login_wechat" method="post">
                        <span>
                                    <i>微信号</i>
                                    <input type="text" name="Wechat" placeholder=" " required="" autocomplete="off">
                                </span>
                        <span>
                                    <i>密码</i>
                                    <input type="password" name="Password" placeholder=" " required="">
                                </span>
                        <div class="w3_submit">
                            <input type="submit" value="现 在 登 录">
                            <input type="button" value="忘记/修改密码">
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
<!-- menu -->
<script>
    $(".agileits_w3layouts_head span").on("click",function () {
        $(this).addClass("active").siblings().removeClass("active");
        var $idx = $(this).index();
        $(".agileits_mail_grid_right1 form").eq($idx).show().siblings().hide();
    })
</script>
<script>
    $("input[type='button']").on("click",function(){
        $("form").hide();
        $(".agileits_mail_grid_right1").append(`
            <form action="http://localhost/bishe/project/My_contro/change_password" method="post">
                        <span>
                                    <i>手机号</i>
                                    <input type="text" name="Phone" placeholder=" " required="">
                                    <span id="alert1" style="font-size: 12px;float: right;color: #a4dd25">您的的手机号码</span>
                                </span>
                        <span>
                        <span>
                                    <i>微信号</i>
                                    <input type="text" name="Wechat" placeholder=" " required="">
                                    <span id="alert2" style="font-size: 12px;float: right;color: #a4dd25">您的微信号码</span>
                                </span>
                        <span>
                                    <i>密码</i>
                                    <input type="password" name="Password" placeholder=" " required="">
                                    <span id="alert3" style="font-size: 12px;float: right;color: #a4dd25">您的新密码</span>
                                </span>
                        <span>
                                    <i>确认密码</i>
                                    <input type="password" name="Re_password" placeholder=" " required="">
                                    <span id="alert4" style="font-size: 12px;float: right;color: #a4dd25">确认您的新密码</span>
                                </span>
                        <br>
                        <div class="w3_submit">
                            <input type="submit" value="确 认" disabled>
                        </div>
            </form>
        `);
        var $flag1 = false,$flag2 = false,$flag3 = false,$flag4 = false,$pass="";
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
                        $("#alert1").text("手机号未注册或为空").css("color","red");
                        $flag1 = false;
                    }else{
                        $("#alert1").text("您的的手机号码").css("color","#a4dd25");
                        $flag1 = true;
                    }
                },"text")
            }
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
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
                    $("#alert2").text("微信号未注册或为空").css("color","red");
                    $flag2 = false;
                }else{
                    $("#alert2").text("您的微信号码").css("color","#a4dd25");
                    $flag2 = true;
                }
            },"text");
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                $(".w3_submit [type='submit']").removeAttr("disabled")
            }else {
                $(".w3_submit [type='submit']").attr("disabled","disabled")
            }
        });
        $("[name='Password']").on('input propertychange',function () {
            $pass = $(this).val();
            if(!(/^[\w_-]{6,16}$/.test($pass))){
                $("#alert3").text("最小6位，最大16位").css("color","red");
                $flag3 = false;
            }else {
                $("#alert3").text("").css("color","#a4dd25");
                $flag3 = true;
            }
            var $repass = $("[name='Re_password']").val();
            if($pass!=$repass){
                $("#alert4").text("两次输入的密码不一致").css("color","red");
                $flag4 = false;
            }else {
                $("#alert4").text("");
                $flag4 = true;
            }
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                $(".w3_submit [type='submit']").removeAttr("disabled")
            }else {
                $(".w3_submit [type='submit']").attr("disabled","disabled")
            }
        });
        $("[name='Re_password']").on('input propertychange',function () {
            var $repass = $(this).val();
            if($pass!=$repass){
                $("#alert4").text("两次输入的密码不一致").css("color","red");
                $flag4 = false;
            }else {
                $("#alert4").text("");
                $flag4 = true;
            }
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                $(".w3_submit [type='submit']").removeAttr("disabled")
            }else {
                $(".w3_submit [type='submit']").attr("disabled","disabled")
            }
        });
    })
</script>
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