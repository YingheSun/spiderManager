<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkSettingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-work-setting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'work_name') ?>

    <?= $form->field($model, 'root_url') ?>

    <?= $form->field($model, 'exec_cmd') ?>

    <?= $form->field($model, 'spider_proj') ?>

    <?php // echo $form->field($model, 'spider_version') ?>

    <?php // echo $form->field($model, 'spider_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
