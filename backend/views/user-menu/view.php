<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\UserMenu;

/* @var $this yii\web\View */
/* @var $model backend\models\UserMenu */

$this->title = '查看节点：'.$model->name;
$this->params['breadcrumbs'][] = ['label' => '节点管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-menu-view">
	<div class="box" style="padding:15px;">
		<div class="box-head" style="padding:10px;overflow:hidden;clear:both;zoom:1;">
			<?= Html::a('删除', ['delete', 'id' => $model->id], [
				'class' => 'btn bg-maroon btn-flat pull-right',
				'data' => [
					'confirm' => '确定要删除吗?',
					'method' => 'post',
				],
			]) ?>
			<?= Html::a('编辑', ['update', 'id' => $model->id], ['class' => 'btn bg-navy btn-flat pull-right']) ?>
		</div>
		<div class="box-body">
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					'id',
					[
						'attribute'=>'pid',
						'value'=>function($data){
							$parent=UserMenu::findOne(['id'=>$data->pid]);
							return $parent['name'] ? $parent['name'] : '一级节点';
						}
					],
					'name',
					'module',
					[
						'attribute'=>'status',
						'value'=>function($data){
							return $data->status == 1 ? '启用' : '禁用';
						},
					],
					'sort',
					'icon',
					'count',
					[
						'attribute'=>'created_at',
						'format'=>['date', 'php:Y-m-d H:i:s']
					],
					[
						'attribute'=>'updated_at',
						'format'=>['date', 'php:Y-m-d H:i:s']
					],
				],
			]) ?>
		</div>
	</div>
</div>
