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
        window.onload = function(){
            var index = <?php echo $index;?>;
            $.get("http://localhost/bishe/project/My_contro4/the_field_info1",{
                field_id:index
            }, function(res) {
                var arr = res.split(" ");
                var cont = `<tr>
                                <th>用户编号</th>
                                <th>种植作物</th>
                                <th>是否播种</th>
                                <th>灌溉次数</th>
                                <th>施肥次数</th>
                                <th>除草次数</th>
                                <th>可否收获</th>
                                <th>是否已收获</th>
                                <th>地块活动</th>
                            </tr>`;
                for(var i=0;i<arr.length-1;i+=9){
                    cont+=`<tr>`;
                    cont+=(`<td>${arr[i]}</td>`);
                    cont+=(`<td>${arr[i+1]}</td>`);
                    if(arr[i+2]==0){
                        arr[i+2] = "未播种"
                    }else {
                        arr[i+2] = "已播种"
                    }
                    cont+=(`<td>${arr[i+2]}</td>`);
                    cont+=(`<td>${arr[i+3]}</td>`);
                    cont+=(`<td>${arr[i+4]}</td>`);
                    cont+=(`<td>${arr[i+5]}</td>`);
                    if(arr[i+6]==0){
                        arr[i+6] = "不可收获"
                    }else {
                        arr[i+6] = "可收获"
                    }
                    cont+=(`<td>${arr[i+6]}</td>`);
                    if(arr[i+7]==0){
                        arr[i+7] = "未收获"
                    }else {
                        arr[i+7] = "已收获"
                    }
                    cont+=(`<td>${arr[i+7]}</td>`);
                    cont+=(`<td><button id="${arr[i+8]}" style="background-color:#a0d034;color:#fff">地块活动选择</button></td>`);
                    cont+=`</tr>`;
                }
                $("#field-info").html(cont);
                $("#field-info th").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
                $("#field-info td").css({"border":"1px solid #a0d034","width":"6rem","height":"2rem"});
            },"text").then(
                 function(){
                    $("#field-info button").each(function(){
                        $(this).on("click",function(){
                            var id = $(this).attr("id");
                            var arr;
                            $.get("http://localhost/bishe/project/My_contro4/the_field_info2",{
                                id:id
                            }, function(res) {
                                arr = res.split(" ");
                                $("#field-info,#back").hide();
                                $("#field").css("height","300px");
                                $("#field").append(
                                    `<div style="margin: 0 auto;text-align: center">
                                        <img id="field_img_1" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/work.png">
                                        <img id="field_img_2" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/bucket.jpg">
                                        <img id="field_img_3" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/manure.jpg">
                                        <img id="field_img_4" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/hoe.jpg">
                                        <img id="field_img_5" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/harvest.png">
                                        <img id="field_img_6" style="display:inline-block;width: 8rem;height: 8rem;border-radius: 50%;cursor: pointer" src="images/gloves.jpg">
                               </div>
                               <div style="margin: 20px auto;text-align:center">
                                   <input id="field_btn_1" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="播种">
                                   <input id="field_btn_2" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="灌溉">
                                   <input id="field_btn_3" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="施肥">
                                   <input id="field_btn_4" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="除草">
                                   <input id="field_btn_5" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="收获">
                                   <input id="field_btn_6" type="button" style="display:inline-block;width: 8rem;height: 3rem;background-color: #a0d034;color: #fff" value="返回">
                               </div>`
                                );
                            },"text").then(
                                function(){
                                    $("#field_img_1,#field_btn_1").on("click",function(){
                                        $.get("http://localhost/bishe/project/My_contro4/field_action1",{
                                            id:id
                                        },function(res){
                                            if(parseInt(res)==1){
                                                alert("作物已经播种");
                                                $("#field_btn_1").attr("disabled","disabled").css({"background-color":"#999"});
                                                $("#field_img_1").unbind("click");
                                                $("#field_btn_2,#field_btn_3,#field_btn_4").removeAttr("disabled").css({"background-color":"#a0d034"});
                                                $("#field_img_2").on("click",function(){
                                                    $.get("http://localhost/bishe/project/My_contro4/field_action2",{
                                                        id:id
                                                    },function(res){
                                                        if(parseInt(res)==1){
                                                            alert("作物已经灌溉");
                                                        }
                                                    })
                                                });
                                                $("#field_img_3").on("click",function(){
                                                    $.get("http://localhost/bishe/project/My_contro4/field_action3",{
                                                        id:id
                                                    },function(res){
                                                        if(parseInt(res)==1){
                                                            alert("作物已经施肥");
                                                        }
                                                    })
                                                });
                                                $("#field_img_4").on("click",function(){
                                                    $.get("http://localhost/bishe/project/My_contro4/field_action4",{
                                                        id:id
                                                    },function(res){
                                                        if(parseInt(res)==1){
                                                            alert("作物已经除草");
                                                        }
                                                    })
                                                });
                                            }
                                        },"text")
                                    });
                                    $("#field_img_2,#field_btn_2").on("click",function(){
                                        $.get("http://localhost/bishe/project/My_contro4/field_action2",{
                                            id:id
                                        },function(res){
                                            if(parseInt(res)==1){
                                                alert("作物已经灌溉");
                                            }
                                        })
                                    });
                                    $("#field_img_3,#field_btn_3").on("click",function(){
                                        $.get("http://localhost/bishe/project/My_contro4/field_action3",{
                                            id:id
                                        },function(res){
                                            if(parseInt(res)==1){
                                                alert("作物已经施肥");
                                            }
                                        })
                                    });
                                    $("#field_img_4,#field_btn_4").on("click",function(){
                                        $.get("http://localhost/bishe/project/My_contro4/field_action4",{
                                            id:id
                                        },function(res){
                                            if(parseInt(res)==1){
                                                alert("作物已经除草");
                                            }
                                        })
                                    });
                                    $("#field_img_5,#field_btn_5").on("click",function(){
                                        $.get("http://localhost/bishe/project/My_contro4/field_action4",{
                                            id:id
                                        },function(res){
                                            if(parseInt(res)==1){
                                                alert("作物已经收获");
                                                $("#field_btn_1,#field_btn_2,#field_btn_3,#field_btn_4,#field_btn_5").attr("disabled","disabled").css({"background-color":"#999"});
                                                $("#field_btn_1,#field_img_2,#field_img_3,#field_img_4,#field_img_5").unbind("click")
                                            }
                                        })
                                    });
                                    $("#field_img_6,#field_btn_6").on("click",function(){
                                        window.location.reload();
                                    });
                                    if(arr[2]==0){
                                        alert("作物尚未播种");
                                        $("#field_btn_2,#field_btn_3,#field_btn_4,#field_btn_5").attr("disabled","disabled").css({"background-color":"#999"});
                                        $("#field_img_2,#field_img_3,#field_img_4,#field_img_5").unbind("click")
                                    }else if(arr[2]==1&&arr[6]==0&&arr[7]==0){
                                        alert("现在作物未成熟，不能收获");
                                        $("#field_btn_1,#field_btn_5").attr("disabled","disabled").css({"background-color":"#999"});
                                        $("#field_img_1,#field_img_5").unbind("click")
                                    }else if(arr[2]==1&&arr[6]==1&&arr[7]==0){
                                        alert("作物可以收获了");
                                    }else if(arr[2]==1&&arr[6]==0&&arr[7]==1) {
                                        alert("作物已经收获了");
                                        $("#field_btn_1,#field_btn_5").attr("disabled", "disabled").css({"background-color": "#999"});
                                        $("#field_img_1,#field_img_5").unbind("click")
                                    }
                                }
                            )
                        })
                    })
                }
            )
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
        <h3 class="agileits_w3layouts_head"><span>地块</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 查 看 地 块 信 息</p>
        <div class="w3ls_news_grids user_field" >
            <section>
                <div class="modal-body">
                    <div id="field" style="position: relative;width:72rem;background-color: #fff">
                        <table id="field-info" style="margin: 0 auto">

                        </table>
                        <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
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
    $("#back").on("click",function(){
        window.location = "My_contro3/login2";
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