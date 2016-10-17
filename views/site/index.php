<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style type="text/css">
    html, body {
        margin: 0;
        padding: 0;
    }
    body .bk {
        width: 100%;
        height: 490px;
        position: absolute;
        top: 0px;
        background-image: url(http://static.mukewang.com/static/img/index/bk.jpg);
        background-size: cover;
    }

    * {
        box-sizing: border-box;
    }

    .slider {
        width: 100%;
        margin: 0 auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
        height: 500px;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
</style>

<link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=4,index_v2-less.css?v=1.0,poplogin-less.css"/>
<link rel="stylesheet" type="text/css" href="http://www.imooc.com/static/moco/v1.0/dist/css/moco.min.css"/>

<section class="variable slider">
    <?php
        foreach($carsouleImgs as $img){
            echo '<div><img src="'.$img->show_url.'"></div>';
        }
    ?>
</section>
<div class="outwrap-content" style="background-color: white">

    <div class="contentwrap allshadow php pt28">
        <div class="classify">
            <p class="title">PHP<br>工程师</p>
            <a data-track="syphp-1-1" style="text-decoration: none;" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP路径推荐位'])" href="http://www.imooc.com/course/programdetail/pid/34" class="career-path" target="_blank"> 职业路径 <i class="icon-right2 path-triangle"></i></a>
            <div class="raise-weapon">
                <a data-track="syphp-1-2" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP路径推荐位'])" target="_blank" href="/course/programdetail/pid/11" class="item">PHP开发工程师闯关记--初识PHP</a>
                <a data-track="syphp-1-3" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP路径推荐位'])" target="_blank" href="/course/programdetail/pid/53" class="item"> PHP微信公众平台开发攻略</a>
                <a data-track="syphp-1-4" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP路径推荐位'])" target="_blank" href="/course/programdetail/pid/55" class="item"> 带你玩转Yii框架</a>
            </div>
        </div>

        <a data-track="syphp-2-1" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP人工推荐位'])" target="_blank" href="http://www.imooc.com/course/programdetail/pid/11" data-ast="phptuijian_1_535">
            <div class="longer" style="background-image: url(http://img.mukewang.com/57fb6fa40001af1504680364.jpg)">
                <p class="title">PHP开发工程师闯关记--初识PHP</p>
                <div class="line"></div>
                <div class="subtitle">掌握基础知识、功能模块、面向对象等技能</div>
            </div>
        </a>
        <div class="heigher">
            <div class="moco-course-wrap">
                <a data-track="syphp-3-1" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/69" data-ast="webtuijian_1_69">
                    <div class="moco-course-box">
                        <img src="http://img.mukewang.com/57075ab500016f5a06000338-228-128.jpg" height="124" width="100%">
                        <div class="moco-course-intro">
                            <h3> <i>中</i> MVC架构模式分析与设计</h3>
                            <p> 由浅入深带您实现人生第一个MVC框架</p>
                        </div>
                        <div class="moco-course-bottom"><span class="l"> 52003 人在学</span></div>
                    </div>
                </a>
                <div class="list">
                    <a data-track="syphp-3-4" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/491"><p class="w180andH30">与《Yii框架》不得不说的故事—扩展篇</p></a>
                    <a data-track="syphp-3-5" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/619"><p class="w180andH30">PHP微信公众平台开发高级篇—网页授权接口</p></a>
                    <a data-track="syphp-3-6" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/623"><p class="w180andH30">PHP第三方登录—微博登录</p></a>
                    <a data-track="syphp-3-7" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/627"><p class="w180andH30">ThinkPHP搞定企业网站—新闻管理</p></a>
                    <a data-track="syphp-3-8" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/699"><p class="w180andH30">轻松学会Laravel-表单篇</p></a>
                </div>
            </div>
        </div>
        <div class="moco-course-wrap">
            <a data-track="syphp-3-2" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/155" data-ast="phptuijian_1_699">
                <div class="moco-course-box">
                    <img src="http://img.mukewang.com/570763450001534706000338-228-128.jpg" height="124" width="100%">
                    <div class="moco-course-intro">
                        <h3> <i>中</i> 揭秘PHP模糊查询技术</h3>
                        <p>PHP模糊查询分析与实现！ </p>
                    </div>
                    <div class="moco-course-bottom"><span class="l"> 16184 人在学</span></div>
                </div>
            </a>
        </div>
        <div class="moco-course-wrap">
            <a data-track="syphp-3-3" onclick="_hmt.push(['_trackEvent', '首页', 'click', '五屏PHP自动推荐位'])" target="_blank" href="/learn/467" data-ast="phptuijian_1_699">
                <div class="moco-course-box">
                    <img src="http://img.mukewang.com/55bec3dd0001f71606000338-228-128.jpg" height="124" width="100%">
                    <div class="moco-course-intro">

                        <h3><i>高</i>与《Yii框架》不得不说的故事—安全篇</h3>
                        <p>Yii对4种流行攻击方式的防范和处理 </p>
                    </div>
                    <div class="moco-course-bottom"><span class="l"> 11725 人在学</span></div>
                </div>
            </a>
        </div>
        <div class="cb">  </div>
    </div>

</div>

<?php
$this->registerJsFile("/node_modules/slick-carousel/slick/slick.min.js", ["depends" => [\yii\web\JqueryAsset::className()]]);
$this->registerJs(<<<JS
$(document).on('ready', function() {
        $(".variable").slick({
              dots: true,
              infinite: true,
              speed: 500,
              fade: true,
              cssEase: 'linear',
              autoplay:'true'
        });
    });
JS
    ,\yii\web\View::POS_END
)
?>
