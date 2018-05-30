<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\UserMenu;

/* @var $this yii\web\View */
/* @var $model backend\models\UserGroup */

$this->title = '查看分组：'.$model->name;
$this->params['breadcrumbs'][] = ['label' => '用户分组', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-group-view">
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
					'name',
					[
						'attribute'=>'status',
						'value'=>function($data){
							return $data->status == 1 ? '启用' : '禁用';
						}
					],
					[
						'attribute'=>'rules',
						'contentOptions' => ['style' => 'max-width:700px;'],
						'value'=>function($data){
							$rules=UserMenu::getList(explode(',',$data->rules));
							$rules = array_column($rules,'name');
							return implode(',',$rules);
						}
					],
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
