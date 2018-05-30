<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\UserMenu;

/* @var $this yii\web\View */
/* @var $model backend\models\UserMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-menu-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?php 
		$list = [0=>'一级节点'];
		UserMenu::getListLevel($list);
	?>
	<?= $form->field($model,'pid')->dropDownList($list,['options'=>[$model->id=>['disabled'=>true]]],['prompt'=>'请选择上级节点']);?>
	
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'module')->textInput(['maxlength' => true]) ?>
	
	<?php  if ($model->isNewRecord){$model->status = 1;}?>
    <?= $form->field($model, 'status')->radioList(['0' => '否', '1' => '是'], ['itemOptions' => ['labelOptions' => ['class' => 'input-radio']]]);?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
	
    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
