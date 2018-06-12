<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Signup */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Signups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'member_id',
            'academy_id',
            'avatar',
            'real_name',
            'card',
            'phone',
            'email:email',
            'homeplace',
            'sex',
            'birthday',
            'marital',
            'emergency_name',
            'emergency_phone',
            'education',
            'education_start_time',
            'education_end_time',
            'university',
            'university_category',
            'university_style',
            'academic_degree',
            'fulltime_work_life:datetime',
            'management_work_life',
            'chinese_company_name',
            'english_company_name',
            'turnover_year',
            'company_size',
            'main_business',
            'Industry_category',
            'company_nature',
            'post_type',
            'work_department',
            'work_position',
            'work_function1',
            'work_function2',
            'scale_responsible',
            'work_starttime',
            'annual_income',
            'annual_income_start',
            'management_number',
            'position_situation:ntext',
            'superior_name',
            'superior_post',
            'superior_phone',
            'agree_contact_suoerior',
            'other_work_experience:ntext',
            'question_1',
            'answer_1:ntext',
            'question_2',
            'answer_2:ntext',
            'question_3',
            'answer_3:ntext',
            'card_front',
            'card_back',
            'diploma_scan',
            'postgraduate_diploma_scan',
            'report_card',
            'postgraduate_report_card',
            'resume_chinese',
            'company_organization_chart',
            'resume_english',
            'english_essays',
            'additional_material',
            'interview_batch',
            'signup_step',
            'signup_at',
            'status',
            'status_reason:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
