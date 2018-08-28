<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SiteSpiderTaskLog */

$this->title = 'Create Site Spider Task Log';
$this->params['breadcrumbs'][] = ['label' => 'Site Spider Task Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-spider-task-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
