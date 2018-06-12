<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Signup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signup-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'status_reason')->textarea(['rows' => 6])?>

    <div class="form-group">
        <?= Html::submitButton('保存原因', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
