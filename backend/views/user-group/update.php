<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserGroup */

$this->title = '编辑分组';
$this->params['breadcrumbs'][] = ['label' => '用户分组', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="user-group-update">
	<div class="box" style="padding:15px;">
		<div class="box-body">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
		</div>
	</div>
</div>