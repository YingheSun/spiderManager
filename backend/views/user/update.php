<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '编辑用户';
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑用户';
?>
<div class="user-update">
	<div class="box" style="padding:15px;">
		<div class="box-body">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
		</div>
	</div>
</div>
