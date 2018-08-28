<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-work-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'work_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'root_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exec_cmd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spider_proj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spider_version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spider_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
