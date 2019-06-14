<!DOCTYPE html>
<html lang="en">
<head>
    <title>manager login</title>
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
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function(){
            var $msg = "<?php echo $msg;?>";
            if($msg!=""){
                alert($msg);
            }
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
                <li><i class="fa fa-users" aria-hidden="true"></i>Manager</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>Manager</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head"><span>管理人员界面</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 选 择 您 的 进 入 方 式</p>
        <div class="w3ls_news_grids user_field" >
            <section>
                <div class="modal-body">
                    <div id="field" style="position: relative;width:72rem;background-color: #fff;cursor: pointer;">
                        <div class="banner-bottom" id="banner">
                            <div class="col-md-4 agileits_banner_bottom_left">
                                <div class="agileinfo_banner_bottom_pos">
                                    <div class="w3_agileits_banner_bottom_pos_grid">
                                        <div class="col-xs-4 wthree_banner_bottom_grid_left">
                                            <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                                                <i class="fa fa-pagelines" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 wthree_banner_bottom_grid_right">
                                            <h4>普通地块管理</h4>
                                            <p>进 入 普 通 地 块 管 理 页 面</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 agileits_banner_bottom_left1">
                                <div class="agileinfo_banner_bottom_pos">
                                    <div class="w3_agileits_banner_bottom_pos_grid">
                                        <div class="col-xs-4 wthree_banner_bottom_grid_left">
                                            <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                                                <i class="fa fa-certificate" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 wthree_banner_bottom_grid_right">
                                            <h4>业务综合管理</h4>
                                            <p>进 入 小 菜 园 业 务 综 合 管 理 页 面</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 agileits_banner_bottom_left2">
                                <div class="agileinfo_banner_bottom_pos">
                                    <div class="w3_agileits_banner_bottom_pos_grid">
                                        <div class="col-xs-4 wthree_banner_bottom_grid_left">
                                            <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                                                <i class="fa fa-yelp" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 wthree_banner_bottom_grid_right">
                                            <h4>租赁区域管理</h4>
                                            <p>进 入 租 赁 区 域 管 理 页 面</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
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
    $(".col-md-4").eq(0).on("click",function(){
        $("#field").html("");
        $(".agile_para").text("请 登 录")
        $("#field").append(`
            <div style="width: 60%;margin: 0 auto">
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                        <form action="http://localhost/bishe/project/My_contro3/login1" method="post">
                            <span>
                                    <i>工号</i>
                                    <input type="text" name="Number" placeholder=" " required="">
                                </span>
                            <span>
                                    <i>密码</i>
                                    <input type="password" name="Password" placeholder=" " required="">
                                </span>
                            <div class="w3_submit">
                                <input type="submit" value="现 在 登 录">
                            </div>
                        </form>
                </div>
            </div>
        `)
    });
    $(".col-md-4").eq(1).on("click",function(){
        $("#field").html("");
        $(".agileits_w3layouts_head").html("<span>注册</span>/<span>登录</span>");
        $(".agile_para").text("请 选 择");
        $("#field").append(`
            <div style="width: 60%;margin: 0 auto">
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                        <form action="http://localhost/bishe/project/My_contro3/regist" method="post">
                            <span>
                                    <i>身份证号</i>
                                    <input type="text" name="ID1" placeholder=" " required="">
                                    <span id="alert1" style="font-size: 12px;float: right;color: #a4dd25">您的身份证号码</span>
                            </span>
                            <span>
                                    <i>姓名</i>
                                    <input type="text" name="Name" placeholder=" " required="">
                            </span>
                            <span>
                                    <i>管理员验证码</i>
                                    <input type="password" name="Key" placeholder=" " required="">
                                    <span id="alert2" style="font-size: 12px;float: right;color: #a4dd25">您获得的管理员验证码</span>
                            </span>
                            <span>
                                    <i>密码</i>
                                    <input type="password" name="Password1" placeholder=" " required="">
                                    <span id="alert3" style="font-size: 12px;float: right;color: #a4dd25">最小6位，最大16位</span>
                            </span>
                            <span>
                                    <i>确认密码</i>
                                    <input type="password" name="Re_password1" placeholder=" " required="">
                                    <span id="alert4" style="font-size: 12px;float: left;color: #a4dd25"></span>
                            </span>
                            <div class="w3_submit">
                                <input name="submit1" type="submit" value="注 册" disabled="disabled">
                            </div>
                        </form>
                        <form action="http://localhost/bishe/project/My_contro3/main_login" method="post">
                            <span>
                                    <i>身份证号</i>
                                    <input type="text" name="ID2" placeholder=" " required="">
                            </span>
                            <span>
                                    <i>密码</i>
                                    <input type="password" name="Password2" placeholder=" " required="">
                            </span>
                            <div class="w3_submit">
                                <input name="submit2" type="submit" value="现 在 登 录">
                            </div>
                        </form>
                </div>
            </div>
        `);
        $(".agileits_w3layouts_head span").eq(1).addClass("active");
        $(".agileits_mail_grid_right1 form").eq(0).hide();
        $(".agileits_w3layouts_head span").on("click",function () {
            $(this).addClass("active").siblings().removeClass("active");
            var $idx = $(this).index();
            $(".agileits_mail_grid_right1 form").eq($idx).show().siblings().hide();
        });
        var $flag1 = false,$flag2 = false,$flag3 = false,$flag4 = false;
        var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"};
        $("[name='ID1']").on('input propertychange',function () {
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
                $("#alert1").text("您的身份证号码").css("color","#a4dd25");
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
        $("[name='Key']").on('input propertychange',function () {
            var $key = $(this).val();
            if($key!="ymyg_1234"){
                $("#alert2").text("验证码有误，请重填").css("color","red");
                $flag2 = false;
            }else {
                $("#alert2").text("验证码正确").css("color","#a4dd25");
                $flag2 = true;
            }
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                $("[name='submit1']").removeAttr("disabled")
            }else {
                $("[name='submit1']").attr("disabled","disabled")
            }
        });
        $("[name='Password1']").on('input propertychange',function () {
            var $pass = $(this).val();
            if(!(/^[\w_-]{6,16}$/.test($pass))){
                $("#alert3").text("密码有误，请重填").css("color","red");
                $flag3 = false;
            }else {
                $("#alert3").text("最小6位，最大16位").css("color","#a4dd25");
                $flag3 = true;
            }
            var $repass = $("[name='Re_password1']").val();
            if($pass!=$repass){
                $("#alert4").text("两次输入的密码不一致").css("color","red");
                $flag4 = false;
            }else {
                $("#alert4").text("");
                $flag4 = true;
            }
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                $("[name='submit1']").removeAttr("disabled")
            }else {
                $("[name='submit1']").attr("disabled","disabled")
            }
        });
        $("[name='Re_password1']").on('input propertychange',function () {
            var $pass = $("[name='Password1']").val();
            var $repass = $(this).val();
            if($pass!=$repass){
                $("#alert4").text("两次输入的密码不一致").css("color","red");
                $flag4 = false;
            }else {
                $("#alert4").text("");
                $flag4 = true;
            }
            if($flag1==true&&$flag2==true&&$flag3==true&&$flag4==true){
                $("[name='submit1']").removeAttr("disabled")
            }else {
                $("[name='submit1']").attr("disabled","disabled")
            }
        });
    });
    $(".col-md-4").eq(2).on("click",function(){
        $("#field").html("");
        $(".agile_para").text("请 登 录");
        $("#field").append(`
            <div style="width: 60%;margin: 0 auto">
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                        <form action="http://localhost/bishe/project/My_contro3/login3" method="post">
                            <span>
                                    <i>工号</i>
                                    <input type="text" name="Number" placeholder=" " required="">
                                </span>
                            <span>
                                    <i>密码</i>
                                    <input type="password" name="Password" placeholder=" " required="">
                                </span>
                            <div class="w3_submit">
                                <input type="submit" value="现 在 登 录">
                            </div>
                        </form>
                </div>
            </div>
        `)
    });
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