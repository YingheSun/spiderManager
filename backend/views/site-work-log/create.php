<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkLog */

$this->title = 'Create Site Work Log';
$this->params['breadcrumbs'][] = ['label' => 'Site Work Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-work-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
