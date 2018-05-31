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

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model,'group_id')->dropDownList(UserGroup::dropDownList(),['prompt'=>'请选择分组']);?>
	
	<?php  if ($model->isNewRecord){$model->status = 10;} $item = [];if($model->id == 1){$item = ['disabled' => 'true'];}?>
    <?= $form->field($model, 'status')->radioList(['10' => '启用', '0' => '禁用'], ['itemOptions' =>  $item]);?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
