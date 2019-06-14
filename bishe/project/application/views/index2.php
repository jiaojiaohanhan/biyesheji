<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <base href="<?php echo site_url();?>">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
            localStorage.clear();
//            var token = document.getElementById("user_token").innerHTML;
//            var id = document.getElementById("user_id").innerHTML;
//            var name = document.getElementById("user_name").innerHTML;
//            var storage=window.localStorage;
//            if(token!=""){
//                storage.setItem(id,token);
//            }
//            if(storage.key(0)){
//               var list = document.getElementsByClassName("agileits_social_list");
//               list[0].style.display = "none";
//               list[1].style.display = "block";
//            }
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $.get("http://localhost/bishe/project/My_contro/index_times",{

            }, function(res) {
                if(res=="1"){
                    $.get("http://localhost/bishe/project/My_contro5/action1",{}, function(res) {},"text");
                    $.get("http://localhost/bishe/project/My_contro5/action2",{}, function(res) {},"text");
                    $.get("http://localhost/bishe/project/My_contro5/action3",{}, function(res) {},"text");
                    $.get("http://localhost/bishe/project/My_contro5/action4",{}, function(res) {},"text");
                    $.get("http://localhost/bishe/project/My_contro5/action5",{}, function(res) {},"text");
                    $.get("http://localhost/bishe/project/My_contro5/action6",{}, function(res) {},"text");
                    $.get("http://localhost/bishe/project/My_contro5/action7",{}, function(res) {},"text");
                }
            },"text");
        })
    </script>
    <!-- //js -->
    <link href="css/mislider.css" rel="stylesheet" type="text/css" />
    <link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="http://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="w3_agileits_banner_main_grid">
            <div class="w3_agile_logo">
                <h1><a href="index.html"><span>S</span>unshine<i>Grow healthy products</i></a></h1>
<!--                <p id="user_token" style="display: none">--><?php //echo $token;?><!--</p>-->
<!--                <p id="user_id" style="display: none">--><?php //echo $id;?><!--</p>-->
<!--                <p id="user_name" style="display: none">--><?php //echo $username;?><!--</p>-->
            </div>
            <div class="agile_social_icons_banner">
                <ul class="agileits_social_list">
                    <li><a href="My_contro/login" class="w3_agile_user"><i class="fa fa-user" aria-hidden="true"></i> 登录</a></li>
                    <li><a href="My_contro/register" class="pencil-square-o"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 注册</a></li>
                    <li><a href="My_contro/manager_login" class="the-fa-users"><i class="fa fa-users" aria-hidden="true"></i> 管理人员界面</a></li>
                </ul>
<!--                <ul class="agileits_social_list" style="display: none">-->
<!--                    <li><a id="exit" href="My_contro/index" target="_blank" class="w3_agile_user"><i class="fa fa-home" aria-hidden="true"></i> 退出</a></li>-->
<!--                </ul>-->
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
                                <li class="active"><a href="My_contro/index">Home</a></li>
                                <li><a href="My_contro/register">Regist</a></li>
                                <li><a href="My_contro/login">Login</a></li>
                                <li><a href="My_contro/about">About Us</a></li>
                                <li><a href="My_contro/services">Services</a></li>
                                <li><a href="My_contro/gallery">Gallery</a></li>
                                <li><a href="My_contro/contact_us">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3_banner_info">
            <div class="w3_banner_info_grid">
                <h3 class="test">I'm Planting A Tree To Teach Me To Gather Strength From My Deepest Roots</h3>
                <p>Looking back at the end of the flower, a touch of fragrant red.</p>
                <ul>
                    <li><a href="#" class="w3l_contact" data-toggle="modal" data-target="#myModal">地块预览</a></li>
                    <li><a href="My_contro2/choose_field" class="w3l_contact">地块选订</a></li>
                    <li><a href="My_contro2/my_field" class="w3l_contact">我的地块</a></li>
                    <li><a href="My_contro/contact_us" class="w3l_contact">联系我们</a></li>
                    <!--<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">地块选订</a></li>-->
                </ul>
            </div>
        </div>
        <div class="thim-click-to-bottom">
            <a href="#banner" class="scroll">
                <i class="fa  fa-chevron-down"></i>
            </a>
        </div>
    </div>
</div>
<!-- banner -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--Germinate-->
                地块预览
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div id="field">
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
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->
<!-- banner-bottom -->
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
                    <h4>Free Consultation</h4>
                    <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
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
                    <h4>Certified Products</h4>
                    <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
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
                    <h4>Free Helpline</h4>
                    <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div><div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>
<!-- //banner-bottom -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head">欢迎来到我们的<span>种植园</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">我们拥有多种类型的水果、蔬菜作物供您随心选择</p>
    </div>
    <div class="mis-stage w3_agileits_welcome_grids">
        <!-- The element to select and apply miSlider to - the class is optional -->
        <ol class="mis-slider">
            <li class="mis-slide">
                <figure>
                    <img src="images/Strawberry.png" alt=" " class="img-responsive" />
                    <figcaption>草莓</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Orange.png" alt=" " class="img-responsive" />
                    <figcaption>橘子</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Lemon.png" alt=" " class="img-responsive" />
                    <figcaption>柠檬</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Cabbage.png" alt=" " class="img-responsive" />
                    <figcaption>白菜</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Spinach.png" alt=" " class="img-responsive" />
                    <figcaption>菠菜</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Cucumber.png" alt=" " class="img-responsive" />
                    <figcaption>黄瓜</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Tomato.png" alt=" " class="img-responsive" />
                    <figcaption>番茄</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Eggplants.png" alt=" " class="img-responsive" />
                    <figcaption>茄子</figcaption>
                </figure>
            </li>
            <li class="mis-slide">
                <figure>
                    <img src="images/Peas.png" alt=" " class="img-responsive" />
                    <figcaption>豌豆</figcaption>
                </figure>
            </li>
        </ol>
    </div>
</div>
<!-- //welcome -->
<!-- welcome-bottom -->
<div id="welcome_bottom" class="welcome-bottom">
    <div class="col-md-6 wthree_welcome_bottom_left">
        <h3>we work hard and make our country <span>greenery</span></h3>
        <p>Nullam pretium euismod orci ac porta. Interdum et malesuada fames ac ante
            ipsum primis in faucibus. Donec at scelerisque dolor, vel placerat mi.</p>
        <div class="col-md-6 wthree_welcome_bottom_left_grid">
            <div class="w3l_social_icon_gridl">
                <img src="images/8.png" alt=" " class="img-responsive" />
            </div>
            <div class="w3l_social_icon_gridr">
                <h4 class="counter">23,536</h4>
            </div>
            <div class="clearfix"> </div>
            <div class="w3l_social_icon_grid_pos">
                <label>-</label>
            </div>
        </div>
        <div class="col-md-6 wthree_welcome_bottom_left_grid">
            <div class="w3l_social_icon_gridl">
                <img src="images/9.png" alt=" " class="img-responsive" />
            </div>
            <div class="w3l_social_icon_gridr">
                <h4 class="counter">53,234</h4>
            </div>
            <div class="clearfix"> </div>
            <div class="w3l_social_icon_grid_pos">
                <label>-</label>
            </div>
        </div>
        <div class="col-md-6 wthree_welcome_bottom_left_grid">
            <div class="w3l_social_icon_gridl">
                <img src="images/10.png" alt=" " class="img-responsive" />
            </div>
            <div class="w3l_social_icon_gridr">
                <h4 class="counter">43,568</h4>
            </div>
            <div class="clearfix"> </div>
            <div class="w3l_social_icon_grid_pos">
                <label>-</label>
            </div>
        </div>
        <div class="col-md-6 wthree_welcome_bottom_left_grid">
            <div class="w3l_social_icon_gridl">
                <img src="images/11.png" alt=" " class="img-responsive" />
            </div>
            <div class="w3l_social_icon_gridr">
                <h4 class="counter">12,432</h4>
            </div>
            <div class="clearfix"> </div>
            <div class="w3l_social_icon_grid_pos">
                <label>-</label>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-6 wthree_welcome_bottom_right">
        <div class="agileinfo_grid">
            <figure class="agileits_effect_moses">
                <img src="images/4.jpg" alt=" " class="img-responsive" />
                <figcaption>
                    <h4>Plantation <span>For Future Growth</span></h4>
                    <p>Nullam in luctus lectus. Mauris lobortis dui mauris, non vestibulum
                        magna blandit at scelerisque tellus ipsum nec ipsum.</p>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //welcome-bottom -->
<!-- news -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head">Latest <span>News</span> from plantation</h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive">
        </div>
        <p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
        <div class="w3ls_news_grids">
            <div class="col-md-4 w3ls_news_grid">
                <div class="w3layouts_news_grid">
                    <img src="images/3.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text"><h3>plantation</h3></div>
                    </div>
                </div>
                <div class="agileits_w3layouts_news_grid">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>25 March 2017</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                    </ul>
                    <h4><a href="#" data-toggle="modal" data-target="#myModal">Design & Planting</a></h4>
                    <p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et
                        magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col-md-4 w3ls_news_grid">
                <div class="w3layouts_news_grid">
                    <img src="images/6.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text"><h3>plantation</h3></div>
                    </div>
                </div>
                <div class="agileits_w3layouts_news_grid">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>28 March 2017</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                    </ul>
                    <h4><a href="#" data-toggle="modal" data-target="#myModal">Quality & Reliability</a></h4>
                    <p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et
                        magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col-md-4 w3ls_news_grid">
                <div class="w3layouts_news_grid">
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text"><h3>plantation</h3></div>
                    </div>
                </div>
                <div class="agileits_w3layouts_news_grid">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>30 March 2017</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                    </ul>
                    <h4><a href="#" data-toggle="modal" data-target="#myModal">Satisfied Customers</a></h4>
                    <p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et
                        magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //news -->
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <h3 class="agileits_w3layouts_head agileinfo_head"><span>Subscribe</span> to our newsletter</h3>
        <div class="w3_agile_image">
            <img src="images/12.png" alt=" " class="img-responsive">
        </div>
        <p class="agile_para agileits_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
        <div class="w3ls_news_grids w3ls_newsletter_grids">
            <form action="http://localhost/bishe/project/My_contro/send_email2" method="post">
                <input name="yourName" placeholder="Your Name" type="text" required="">
                <input name="yourEmail" placeholder="Your Email" type="email" required="">
                <input type="submit" value="Subscribe" disabled>
            </form>
        </div>
    </div>
</div>
<!-- //newsletter -->
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
        $(this).css({"border":"4px #fff solid"});
    }).on("mouseout",function(){
        $(this).css({"border":""});
    })
</script>
<script>
    var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    $("input[name='yourEmail']").on("blur",function(){
        if(!reg.test($(this).val()))
        {
            alert("邮箱格式不对");
        }else {
            $("input[type='submit']").removeAttr("disabled")
        }
    })
</script>
<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- mislider -->
<script src="js/mislider.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function ($) {
        var slider = $('.mis-stage').miSlider({
            //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
            stageHeight: 380,
            //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
            slidesOnStage: false,
            //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
            slidePosition: 'center',
            //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
            slideStart: 'mid',
            //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
            slideScaling: 150,
            //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
            offsetV: -5,
            //  Center slide contents vertically - Boolean. Default: false
            centerV: true,
            //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
            navButtonsOpacity: 1,
        });
    });
</script>
<!-- //mislider -->
<!-- text-effect -->
<script type="text/javascript" src="js/jquery.transit.js"></script>
<script type="text/javascript" src="js/jquery.textFx.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.test').textFx({
            type: 'fadeIn',
            iChar: 100,
            iAnim: 1000
        });
    });
</script>
<!-- //text-effect -->
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