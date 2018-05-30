<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\UserGroup;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
	<?php $model->password='';?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->radioList(['1' => '男', '2' => '女', '3' => '保密'], ['itemOptions' => ['labelOptions' => ['class' => 'input-radio']]]);?>

    <?= $form->field($model, 'realname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model,'group_id')->dropDownList(UserGroup::dropDownList(),['prompt'=>'请选择分组']);?>
	
	<?php  if ($model->isNewRecord){$model->status = 10;}?>
    <?= $form->field($model, 'status')->radioList(['10' => '启用', '0' => '禁用']);?>
	
    <?= $form->field($model, 'body')->textArea(['rows' => '6']) ?>
	
    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
