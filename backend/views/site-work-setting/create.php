<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SiteWorkSetting */

$this->title = 'Create Site Work Setting';
$this->params['breadcrumbs'][] = ['label' => 'Site Work Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-work-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
