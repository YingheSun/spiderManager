<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteRootUrlManage */

$this->title = 'Update Site Root Url Manage: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Root Url Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-root-url-manage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
