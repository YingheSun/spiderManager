<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'academy_id') ?>

    <?= $form->field($model, 'avatar') ?>

    <?= $form->field($model, 'real_name') ?>

    <?php // echo $form->field($model, 'card') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'marital') ?>

    <?php // echo $form->field($model, 'emergency_name') ?>

    <?php // echo $form->field($model, 'emergency_phone') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'education_start_time') ?>

    <?php // echo $form->field($model, 'education_end_time') ?>

    <?php // echo $form->field($model, 'university') ?>

    <?php // echo $form->field($model, 'university_category') ?>

    <?php // echo $form->field($model, 'university_style') ?>

    <?php // echo $form->field($model, 'academic_degree') ?>

    <?php // echo $form->field($model, 'question_1') ?>

    <?php // echo $form->field($model, 'answer_1') ?>

    <?php // echo $form->field($model, 'question_2') ?>

    <?php // echo $form->field($model, 'answer_2') ?>

    <?php // echo $form->field($model, 'question_3') ?>

    <?php // echo $form->field($model, 'answer_3') ?>

    <?php // echo $form->field($model, 'card_front') ?>

    <?php // echo $form->field($model, 'card_back') ?>

    <?php // echo $form->field($model, 'diploma_scan') ?>

    <?php // echo $form->field($model, 'academic_scan') ?>

    <?php // echo $form->field($model, 'postgraduate_diploma_scan') ?>

    <?php // echo $form->field($model, 'postgraduate_academic_scan') ?>

    <?php // echo $form->field($model, 'report_card') ?>

    <?php // echo $form->field($model, 'postgraduate_report_card') ?>

    <?php // echo $form->field($model, 'resume_chinese') ?>

    <?php // echo $form->field($model, 'company_organization_chart') ?>

    <?php // echo $form->field($model, 'resume_english') ?>

    <?php // echo $form->field($model, 'english_essays') ?>

    <?php // echo $form->field($model, 'additional_material') ?>

    <?php // echo $form->field($model, 'interview_batch') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'status_reason') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
