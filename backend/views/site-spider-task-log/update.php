<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteSpiderTaskLog */

$this->title = 'Update Site Spider Task Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Spider Task Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-spider-task-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
