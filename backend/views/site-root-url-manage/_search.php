<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteRootUrlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-root-url-manage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'site_name') ?>

    <?= $form->field($model, 'root_url') ?>

    <?= $form->field($model, 'loop_pre_secends') ?>

    <?= $form->field($model, 'start_url') ?>

    <?php // echo $form->field($model, 'project') ?>

    <?php // echo $form->field($model, 'version') ?>

    <?php // echo $form->field($model, 'craw_request') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
