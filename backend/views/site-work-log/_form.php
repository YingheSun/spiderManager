<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-work-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'work_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_formatter')->textInput() ?>

    <?= $form->field($model, 'spider_worker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
