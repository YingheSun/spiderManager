<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\UserGroup;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '查看用户：'.$model->username;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
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
					'username',
					'nickname',
					'email:email',
					[
						'attribute'=>'group_id',
						'value'=>function($data){
							if($data->id == 1){
								return '超级管理员';
							}else{
								$group = UserGroup::findOne($data->group_id);
								return $group->name;
							}
						}
					],
					[
						'attribute'=>'last_time',
						'format'=>['date', 'php:Y-m-d H:i:s']
					],
					'last_ip',
					[
						'attribute'=>'status',
						'value'=>function($data){
							return $data->status == 10 ? '启用' : '禁用';
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
