<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteRootUrlManage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Root Url Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-root-url-manage-view">

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
            'site_name',
            'root_url:url',
            'loop_pre_secends',
            'start_url:url',
            'project',
            'version',
            'craw_request',
            'status',
        ],
    ]) ?>

</div>
