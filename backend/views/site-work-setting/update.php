<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkSetting */

$this->title = 'Update Site Work Setting: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Work Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-work-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
