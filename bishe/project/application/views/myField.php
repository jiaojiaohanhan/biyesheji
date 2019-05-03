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
            var storage=window.localStorage;
            if(storage.length==0){
                alert("您还没有登录，请先登录");
                window.location = "My_contro/login";
            }
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
            var user_id = localStorage.key(0);
            $.get("http://localhost/bishe/project/My_contro2/my_field_info",{
                user_id:user_id
            }, function(res) {
                var arr = res.split(" ");
                var cont = `<tr>
                                <th>地块号</th>
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
                    if(arr[i]>3){
                        arr[i]-=3
                    }
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
                        $.get("http://localhost/bishe/project/My_contro2/my_field_info2",{
                            id:id
                        }, function(res) {
                            arr = res.split("");
                            $("#field-info").hide();
                            $("#field").css("height","500px");
                            $("#field").append(
                                `<div style="margin: 0 auto;text-align: center">
                                   <img id="field_img_1" style="display:inline-block;width: 20rem;height: 20rem;border-radius: 50%;cursor: pointer" src="images/work.png">
                                   <img id="field_img_2" style="display:inline-block;width: 20rem;height: 20rem;border-radius: 50%;cursor: pointer" src="images/harvest.png">
                               </div>
                               <div style="margin: 20px auto;text-align:center">
                                   <input id="field_btn_1" type="button" style="display:inline-block;width: 20rem;height: 3rem;background-color: #a0d034;color: #fff" value="照料地块">
                                   <input id="field_btn_2" type="button" style="display:inline-block;width: 20rem;height: 3rem;background-color: #a0d034;color: #fff" value="收获作物">
                                   <input id="back" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                               </div>`
                            );
                            $("#back").on("click",function(){
                                window.location.reload();
                            })
                        },"text").then(
                            function(){
                                $("#field_img_1,#field_btn_1").on("click",function(){
                                    $.get("http://localhost/bishe/project/My_contro2/field_activity",{
                                        id:id
                                    },function(res){
                                        if(parseInt(res)==1){
                                            $("#field div").hide();
                                            $("#field").append(`
                                                 <div style="margin: 0 35%;text-align: center">
                                                      <div style="text-align: left">
                                                          <label for="manure"><img style="width: 10rem;height: 10rem" src="images/manure.jpg"></label>
                                                          <label for="hoe"><img style="width: 10rem;height: 10rem" src="images/hoe.jpg"></label>
                                                          <br>
                                                          <label for="manure">有机肥(5kg)</label>
                                                          <input type="checkbox" id="manure" value="manure" style="margin-right: 3.5rem"/>
                                                          <label for="hoe">锄头</label>
                                                          <input type="checkbox" id="hoe" value="hoe" />
                                                      </div>
                                                      <div style="text-align: left">
                                                          <label for="shovel"><img style="width: 10rem;height: 10rem" src="images/shovel.jpg"></label>
                                                          <label for="bucket"><img style="width: 10rem;height: 10rem" src="images/bucket.jpg"></label>
                                                          <br>
                                                          <label for="shovel">铲子</label>
                                                          <input type="checkbox" id="shovel" value="shovel" style="margin-right: 7rem"/>
                                                          <label for="bucket">水桶</label>
                                                          <input type="checkbox" id="bucket" value="bucket" />
                                                      </div>
                                                      <input id="btn-yes1" type="button" style="display:inline-block;width: 10rem;height: 3rem;background-color: #a0d034;color: #fff;margin-top: 3rem" value="确定">
                                                      <input id="btn-back1" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                                                 <div>
                                            `);
                                            $("#btn-back1").on("click",function(){
                                                window.location.reload();
                                            });
                                            $.get("http://localhost/bishe/project/My_contro2/check_tools1",{

                                            },function(res){
                                                if(res!=""){
                                                    var arr = res.split(" ");
                                                    var msg = ``;
                                                    for(var i=0;i<arr.length;i++){
                                                        msg+= `
                                                    ${arr[i]}`;
                                                        $("input[type='checkbox']").eq(i).attr("disabled","disabled");
                                                    }
                                                    alert(msg);
                                                }
                                            },"text");
                                            $("#btn-yes1").on("click",function(){
                                                var arr = [];
                                                $("input[type='checkbox']:checked").each(function (index, item) {
                                                    arr.push($(this).val());
                                                });
                                                $.get("http://localhost/bishe/project/My_contro2/field_tools1",{
                                                    arr:arr,
                                                    id:id
                                                },function(res){
                                                    alert("您已经选好了工具，祝您活动愉快");
                                                    window.location = "My_contro2/my_field";
                                                },"text")
                                            })
                                        }
                                    })
                                });
                                $("#field_img_2,#field_btn_2").on("click",function(){
                                    $.get("http://localhost/bishe/project/My_contro2/field_activity",{
                                        id:id
                                    },function(res){
                                        if(parseInt(res)==1){
                                            $("#field div").hide();
                                            $("#field").append(`
                                                 <div style="margin: 0 35%;text-align: center">
                                                      <div style="text-align: left">
                                                          <label for="basket"><img style="width: 10rem;height: 10rem" src="images/basket.jpg"></label>
                                                          <label for="gloves"><img style="width: 10rem;height: 10rem" src="images/gloves.jpg"></label>
                                                          <br>
                                                          <label for="basket">篮子</label>
                                                          <input type="checkbox" id="basket" value="basket" style="margin-right: 7rem"/>
                                                          <label for="gloves">手套</label>
                                                          <input type="checkbox" id="gloves" value="gloves" />
                                                      </div>
                                                      <input id="btn-yes2" type="button" style="display:inline-block;width: 10rem;height: 3rem;background-color: #a0d034;color: #fff;margin-top: 3rem" value="确定">
                                                      <input id="btn-back2" type="button" style="margin-left:100%;width:5rem;background-color:#a0d034;color:#fff" value="返回">
                                                 <div>
                                            `);
                                            $("#btn-back2").on("click",function(){
                                                window.location.reload();
                                            });
                                            $.get("http://localhost/bishe/project/My_contro2/check_tools2",{

                                            },function(res){
                                                if(res!=""){
                                                    var arr = res.split(" ");
                                                    var msg = ``;
                                                    for(var i=0;i<arr.length;i++){
                                                        msg+= `
                                                    ${arr[i]}`;
                                                        $("input[type='checkbox']").eq(i).attr("disabled","disabled");
                                                    }
                                                    alert(msg);
                                                }
                                            },"text");
                                            $("#btn-yes2").on("click",function(){
                                                var arr = [];
                                                $("input[type='checkbox']:checked").each(function (index, item) {
                                                    arr.push($(this).val());
                                                });
                                                $.get("http://localhost/bishe/project/My_contro2/field_tools2",{
                                                    arr:arr,
                                                    id:id
                                                },function(res){
                                                    alert("您已经选好了工具，祝您活动愉快");
                                                    window.location = "My_contro2/my_field";
                                                },"text")
                                            })
                                        }
                                    })
                                });
                                if(arr[0]==0&&arr[1]==0){
                                    if(arr[2]!=0){
                                        alert("现在作物未成熟，不能收获");
                                        $("#field_btn_2").attr("disabled","disabled").css({"background-color":"#999"});
                                        $("#field_img_2").unbind("click")
                                    }else {
                                        alert("现在作物未成熟，不能收获");
                                        alert("您的照料地块活动次数已用完");
                                        $("#field_btn_1,#field_btn_2").attr("disabled","disabled").css({"background-color":"#999"});
                                        $("#field_img_1,#field_img_2").unbind("click")
                                    }
                                }else if(arr[0]==1&&arr[1]==0){
                                    if(arr[2]!=0){
                                        alert("作物可以收获了");
                                    }else {
                                        alert("作物可以收获了");
                                        alert("您的照料地块活动次数已用完");
                                        $("#field_btn_1").attr("disabled", "disabled").css({"background-color":"#999"});
                                        $("#field_img_1").unbind("click")
                                    }
                                }else if(arr[0]==0&&arr[1]==1) {
                                    if (arr[2] != 0) {
                                        alert("作物已经收获了");
                                        $("#field_btn_2").attr("disabled", "disabled").css({"background-color": "#999"});
                                        $("#field_img_2").unbind("click")
                                    } else {
                                        alert("作物已经收获了");
                                        alert("您的照料地块活动次数已用完");
                                        $("#field_btn_1,#field_btn_2").attr("disabled", "disabled").css({"background-color": "#999"});
                                        $("#field_img_1,#field_img_2").unbind("click")
                                    }
                                }else {
                                    if (arr[2] != 0) {

                                    } else {
                                        alert("您的照料地块活动次数已用完");
                                        $("#field_btn_1").attr("disabled", "disabled").css({"background-color": "#999"});
                                        $("#field_img_1").unbind("click")
                                    }
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
                <li><i class="fa fa-plus-square-o" aria-hidden="true"></i>MyField</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>MyField</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head"><span>我的地块</span></h3>
        <div class="w3_agile_image">
            <img src="images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">请 查 看 您 的 地 块 信 息</p>
        <div class="w3ls_news_grids user_field" >
            <section>
                <div class="modal-body">
                    <div id="field" style="position: relative;width:72rem;background-color: #fff">
                        <table id="field-info" style="margin: 0 auto">

                        </table>
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