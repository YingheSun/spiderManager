<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SiteRootUrlManage */

$this->title = 'Create Site Root Url Manage';
$this->params['breadcrumbs'][] = ['label' => 'Site Root Url Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-root-url-manage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
