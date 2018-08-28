<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiteWorkSettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Work Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-work-setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Site Work Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'work_name',
            'root_url:url',
            'exec_cmd',
            'spider_proj',
            //'spider_version',
            //'spider_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
