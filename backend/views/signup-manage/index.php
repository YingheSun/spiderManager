<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '审核情况';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-index">

    <h1> <?php echo( $number_count) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'member_id',
            'academy_id',
//            'avatar',
            'real_name',
            //'card',
            'phone',
            //'email:email',
            //'province',
            //'city',
            //'area',
            //'sex',
            //'birthday',
            //'marital',
            //'emergency_name',
            //'emergency_phone',
            //'education',
            //'education_start_time',
            //'education_end_time',
            'university',
            //'university_category',
            //'university_style',
            //'academic_degree',
            //'question_1',
            //'answer_1:ntext',
            //'question_2',
            //'answer_2:ntext',
            //'question_3',
            //'answer_3:ntext',
            //'card_front',
            //'card_back',
            //'diploma_scan',
            //'academic_scan',
            //'postgraduate_diploma_scan',
            //'postgraduate_academic_scan',
            //'report_card',
            //'postgraduate_report_card',
            //'resume_chinese',
            //'company_organization_chart',
            //'resume_english',
            //'english_essays',
            //'additional_material',
            //'interview_batch',
//            'status',
            [
            'attribute'=>'status',
            'value'=>function($data){
                if($data->status == 1){
                    return '待审核';
                }
                if($data->status == 7){
                    return '审核通过';
                }
                if($data->status == 8){
                    return '邮件已发送，未缴费确认';
                }
                if($data->status == 9){
                    return '缴费确认完成';
                }
                if($data->status > 1 && $data->status < 7){
                    return '审核未通过';
                }
            },
            'filter'=>[1=>'待审核',7=>'审核通过',8=>'邮件已发送，未缴费确认',9=>'缴费确认完成',2=>'审核未通过-个人信息',3=>'审核未通过-教育背景',4=>'审核未通过-工作背景',5=>'审核未通过-文件上传',6=>'审核未通过-当前无内容']
            ],
            //'status_reason:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn','template' => '{view}'],
        ],
    ]); ?>
</div>
