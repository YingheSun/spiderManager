<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-work-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'work_name') ?>

    <?= $form->field($model, 'time_formatter') ?>

    <?= $form->field($model, 'spider_worker') ?>

    <?= $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'job_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
