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

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <h1> <?php echo( $number_count) ?></h1>
<!--    <div class="box">-->
<!--        <div class="box-body">-->
<!--            <div class="row">-->
<!--                <form action="/signup/backend/web/index.php?r=signup-manage/index" method="GET">-->
<!--                    <div class="col-xs-2">-->
<!--                    <select name="state">-->
<!--                        <option value ="7">待审核</option>-->
<!--                        <option value ="8">审核通过</option>-->
<!--                        <option value="9">审核未通过</option>-->
<!--                    </select>-->
<!--                    </div>-->
<!--		<div class="col-xs-2">-->
<!--		  <button type="submit" class="btn bg-navy btn-flat">搜索</button>-->
<!--		</div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->


<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a('Create Signup', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

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
                if($data->status == 7){
                    return '待审核';
                }
                if($data->status == 8){
                    return '审核通过';
                }
                if($data->status == 9){
                    return '审核未通过';
                }
            },
            'filter'=>[7=>'待审核',8=>'审核通过',9=>'审核未通过']
            ],
            //'status_reason:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn','template' => '{view}'],
        ],
    ]); ?>
</div>
