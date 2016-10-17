<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\config\models\Config */

$this->title = 'Create Config';
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick-theme.css"/>
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
<div class="config-create">


    <?php if($_GET['type']=='carouselImg') {?>
<!--        如果轮播图,那么久展示真的轮播!       -->
        <section class="variable slider">
            <?php
            $carsouleImgs = configAll('carouselImg');
            foreach($carsouleImgs as $img){
                echo '<div><img src="'.show_img($img->show_url).'"></div>';
            }
            ?>
        </section>

    <?php }?>

    <h1><?= Html::encode('增加轮播图') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

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