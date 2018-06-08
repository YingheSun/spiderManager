<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Signup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_id')->textInput() ?>

    <?= $form->field($model, 'academy_id')->textInput() ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'real_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_start_time')->textInput() ?>

    <?= $form->field($model, 'education_end_time')->textInput() ?>

    <?= $form->field($model, 'university')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'university_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'university_style')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'question_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'question_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'card_front')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_back')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diploma_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postgraduate_diploma_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postgraduate_academic_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'report_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postgraduate_report_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resume_chinese')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_organization_chart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resume_english')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'english_essays')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'additional_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interview_batch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'status_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
