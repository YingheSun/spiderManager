<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteRootUrlManage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-root-url-manage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'root_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loop_pre_secends')->textInput() ?>

    <?= $form->field($model, 'start_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'craw_request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'DISABLED' => 'DISABLED', 'ACTIVE' => 'ACTIVE', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
