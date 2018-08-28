<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiteWorkLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Work Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-work-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Site Work Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'work_name',
            'time_formatter',
            'spider_worker',
            'time',
            //'job_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
