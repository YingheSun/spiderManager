<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Signup */

$this->title = '请输入你审核不通过的原因(必填): ';
$this->params['breadcrumbs'][] = ['label' => 'Signups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update1';
?>
<div class="signup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form1', [
        'model' => $model,
    ]) ?>

</div>
