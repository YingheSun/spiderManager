<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserMenu */

$this->title = '添加节点';
$this->params['breadcrumbs'][] = ['label' => '后台节点', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-menu-create">
	<div class="box" style="padding:15px;">
		<div class="box-body">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
		</div>
	</div>
</div>
