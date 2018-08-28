<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteSpiderTaskLog */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Spider Task Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-spider-task-log-view">

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
            'task_id',
            'reg_time:datetime',
            'status',
            'run_time:datetime',
            'run_time_formatter',
        ],
    ]) ?>

</div>
