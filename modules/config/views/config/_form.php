<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\config\models\Config */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="config-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'show_text')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'show_url')->hiddenInput(['maxlength' => true,'id'=>'show_url'])->label('上传图片') ?>
    <img id="img_photos" width="200px" src="<?=show_img($model->show_url)?>" alt="上传图片">
    <?php
        if(isset($_GET['type'])&& !empty($_GET['type']))
        echo $form->field($model, 'type')->hiddenInput(['value' => $_GET['type']])->label(false);
    ?>
    <?= $form->field($model, 'describe')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js=<<<EOF
    $(document).ready(function(){
    var url="/config/config/upload";
    new AjaxUpload($('#img_photos'), {
action: url,
name : 'thumb',
onComplete: function (file, response) {
$('#show_url').val(response);
alert('上传成功');
$('#img_photos').attr('src','/'+response);
}
});
});
EOF;
$this->registerJs($js); ?>
<?php $this->registerJsFile('/js/ajaxupload.js');
