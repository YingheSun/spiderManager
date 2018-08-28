<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiteRootUrlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Root Url Manages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-root-url-manage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Site Root Url Manage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'site_name',
            'root_url:url',
            'loop_pre_secends',
            'start_url:url',
            //'project',
            //'version',
            //'craw_request',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
