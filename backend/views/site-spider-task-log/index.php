<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiteSpiderTaskLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Spider Task Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-spider-task-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Site Spider Task Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'task_id',
            'reg_time:datetime',
            'status',
            'run_time:datetime',
            //'run_time_formatter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
