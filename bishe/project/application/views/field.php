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
        window.onload = function() {
            var storage=window.localStorage;
            if(storage.length==0){
                alert("您还没有登录，请先登录");
                window.location = "My_contro/login";
            }
            $.ajax({
                type: "POST",
                url: "http://localhost/bishe/project/My_contro/check_login",
                data: {id: storage.key(0)},
                dataType: "text",
                beforeSend: function (request) {
                    request.setRequestHeader("Authorization", storage.getItem(storage.key(0)));
                },
                success: function (data) {
                    if (data == "success") {

                    } else {
                        storage.clear();
                        alert("您的登录状态异常，请重新登录");
                        window.location = "My_contro/login"
                    }
                },
                error: function (data) {

                }
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
<!--            <div class="agileits_w3layouts_menu">-->
<!--                <div class="shy-menu">-->
<!--                    <a class="shy-menu-hamburger">-->
<!--                        <span class="layer top"></span>-->
<!--                        <span class="layer mid"></span>-->
<!--                        <span class="layer btm"></span>-->
<!--                    </a>-->
<!--                    <div class="shy-menu-panel">-->
<!--                        <nav class="menu menu--horatio link-effect-8" id="link-effect-8">-->
<!--                            <ul class="w3layouts_menu__list">-->
<!--                                <li><a href="index.html">Home</a></li>-->
<!--                                <li><a href="regist.html">Regist</a></li>-->
<!--                                <li class="active"><a href="login.html">Login</a></li>-->
<!--                                <li><a href="about.html">About Us</a></li>-->
<!--                                <li><a href="services.html">Services</a></li>-->
<!--                                <li><a href="gallery.html">Gallery</a></li>-->
<!--                                <li><a href="contact.html">Contact Us</a></li>-->
<!--                            </ul>-->
<!--                        </nav>-->
<!--                    </div>-->
<!--                    <div class="clearfix"> </div>-->
<!--                </div>-->
<!--            </div>-->
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
                <li><i class="fa fa-plus-square-o" aria-hidden="true"></i>Field</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>Field</h2>
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
                        <div id="field">
                            <div style="position: relative;left:80%;top:0;height:800px;line-height:800px;width: 20%;background-color: #2e6da4;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=1">种植区一</a></div>
                            <div style="position: absolute;left:25%;top:0;height:250px;line-height:250px;width: 55%;background-color: #6adcfa;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=2">种植区二</a></div>
                            <div style="position: absolute;left:0;top:0;height:400px;line-height:400px;width:25%;background-color: #ea4c89;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=3">种植区三</a></div>
                            <div style="position: absolute;left:25%;top:250px;height:150px;line-height:150px;width: 55%;background-color: #5a0099;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=4">公共区域</a></div>
                            <div style="position: absolute;left:0;top:400px;height:200px;line-height:200px;width: 45%;background-color: #2b542c;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=5">游戏区</a></div>
                            <div style="position: absolute;left:45%;top:400px;height:200px;line-height:200px;width: 35%;background-color: #c7254e;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=6">烧烤区</a></div>
                            <div style="position: absolute;left:0;top:600px;height:200px;line-height:200px;width: 30%;background-color: #d58512;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=7">种植区四</a></div>
                            <div style="position: absolute;left:30%;top:600px;height:200px;line-height:200px;width: 50%;background-color: #a4dd25;opacity:0.5;cursor: pointer;text-align: center;color: #fff;font-weight: bold;font-size: 24px"><a style="text-decoration:none;color:#fff;display:block;width:100%;height:100%" href="My_contro2/the_field?index=8">种植区五</a></div>
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
    $("#field div").on("mouseover",function(){
        $(this).css({"border":"4px #a0d034 solid"});
    }).on("mouseout",function(){
        $(this).css({"border":""});
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