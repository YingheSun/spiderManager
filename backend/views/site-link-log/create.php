<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SiteLinkLog */

$this->title = 'Create Site Link Log';
$this->params['breadcrumbs'][] = ['label' => 'Site Link Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-link-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
