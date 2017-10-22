<?php
require "../inc/cn_about_core.php";
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>圣鸿移民</title>
        <meta name="keywords" content="圣鸿移民" />
        <meta name="description" content="圣鸿移民" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=device-width,user-scalable=no" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta id="meta">
        <link rel="stylesheet" href="/inc/css/plug.css" />
        <link rel="stylesheet" id="link">
        <link rel="stylesheet" media="screen and (max-width: 900px)" href="/inc/css/wi1000.css">
        <link rel="stylesheet" href="/inc/css/swiper-3.4.2.min.css">
        <link rel="stylesheet" type="text/css" href="/inc/js/wowslider-index/engine1/style.css" />
        <link rel="stylesheet" href="/inc/css/Font-Awesome/css/font-awesome.min.css">
        <script src="/inc/js/swiper-3.4.2.min.js"></script>
        <script src="/inc/js/jquery-2.2.0.min.js"></script>
    </head>

    <body>
    <div class="all">
        <?php require "../header.php";?>

        <div class="mainbanner">
            <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1" style="overflow: hidden">
                <div class="ws_images">
                    <ul>
                      <?php foreach($pagebanner as $value){?>
                        <li><img src="/upload/layout/<?php echo $value['pic'];?>" /></li>
                      <?php }?>
                    </ul>
                </div>
                  <div class="ws_bullets">
                      <div>
                        <?php foreach($pagebanner as $k=>$value){?>
                          <a href="#"><span><?php echo $k+1;?></span></a>
                        <?php }?>
                    </div>
                  </div>

                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="/inc/js/wowslider-index/engine1/wowslider.js"></script>
            <script type="text/javascript" src="/inc/js/wowslider-index/engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section -->
        </div>

        <div class="navibox">
            <div class="navi"><i class="fa fa-home" aria-hidden="true"></i> <a href="/">首页</a> > 圣鸿活动 > 了解我们</div>
        </div>

        <div class="innerpage">
            <div class="content">

                <div class="title" id="about"><?php echo $pageinfo['intro'];?></div>
                <div class="info">
                       <?php echo $pageinfo['content'];?>
                </div>


            </div>
            <div class="right">
                   <div class="menulist"><a href="javascript:;" onclick='$("html,body").animate( {scrollTop:$("#about").offset().top},"slow",function() {return false;});' class="act">了解我们</a></div>
                   <div class="menulist"><a href="javascript:;" onclick='$("html,body").animate( {scrollTop:$("#map").offset().top},"slow",function() {return false;});' >联系我们</a></div>
                   <div class="menulist"><a href="#">移民评估定制</a></div>
                   <div class="menulist"><a href="#" class="actother">热门移民项目</a></div>


                <?php foreach($hotcase as $value){?>
                    <div class="caselist">
                        <div class="title"><?php echo $value['title']?></div>
                        <div class="intro">
                            <?php echo $value['intro']?>... </div>
                        <div class="more"> <a href="/case/case-<?php echo $value['id_prodinfo'];?>.html">更多 <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                    </div>
                <? }?>





            </div>
            <div style="clear:both"></div>
        </div>

        <div class="map" id="map" style="margin:0 auto;padding:0;height:440px;overflow: hidden">
            <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d853.0616754983286!2d121.4623673291872!3d31.213893845806727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b27aa0b578b361%3A0x2e0e77731209cd5a!2z55Ge6YeR5aSn5Y6m!5e0!3m2!1szh-CN!2scn!4v1491473353399" width="100%" height="450" frameborder="0" style="border:0;margin:0;padding:0" allowfullscreen></iframe>

        </div>


        <div class="innerpage">
            <div class="content">

                <div class="title"><?php echo $pageinfo2['title'];?></div>

                <div class="info">

                    <?php echo $pageinfo2['content'];?>


                </div>


            </div>
            <div class="right">
                <div class="menulist"><a href="javascript:;" onclick='$("html,body").animate( {scrollTop:$("#about").offset().top},"slow",function() {return false;});'>了解我们</a></div>
                <div class="menulist"><a href="javascript:;" onclick='$("html,body").animate( {scrollTop:$("#map").offset().top},"slow",function() {return false;});'  class="act">联系我们</a></div>

            </div>

            <div style="clear:both"></div>
        </div>

        <?php require "../footer.php";?>
    </div>
    </body>
    <script src="/inc/js/custom.js"></script>


</html>