<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\config\models\ConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Configs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Config', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('增加轮播图', ['create?type=carouselImg'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            [
                'label'=>'展示文本',
                'value'=>
                    function($model){
                        return  $model->show_text;
                    },
                'headerOptions' => ['style' => 'color:lightcoral;text-align:center;'],
            ],
            [
                'label'=>'展示图片',
                'format'=>'raw',
                'value'=>
                    function($model){
                        return  '<img width=150px src="'.show_img($model->show_url).'">';
                    },
                'headerOptions' => ['style' => 'color:lightcoral;text-align:center;'],
            ],
//            [
//                'attribute' => 'created_at',
//                'label'=>'创建时间',
//                'value'=>
//                    function($model){
//                        return  date('Y-m-d H:i:s',$model->created_at);
//                    },
//                'headerOptions' => ['width' => '170'],
//            ],
//            [
//                'attribute' => 'updated_at',
//                'label'=>'更新时间',
//                'value'=>
//                    function($model){
//                        return  date('Y-m-d H:i:s',$model->updated_at);
//                    },
//                'headerOptions' => ['width' => '170'],
//            ],
            [
                'label'=>'说明',
                'value'=>
                    function($model){
                        return  $model->describe;
                    },
                'headerOptions' => ['style' => 'color:lightcoral;text-align:center;'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'操作',
                'headerOptions' => ['style' => 'color:lightcoral;text-align:center;width:90px'],
                'template' =>'<div align="center">{view} {update} {delete} </div>',
                'buttons'=>[
                    'delete'=>function ($url, $model, $key) {
                        if($model->type == 'companyName'){
                            return '';
                        }
                        $options = array_merge([
                            'title' => '删除',
                            'aria-label' => '删除',
                            'data-confirm' => '你是否要删除?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
                    }
                ]

            ],
        ],
    ]); ?>
</div>
