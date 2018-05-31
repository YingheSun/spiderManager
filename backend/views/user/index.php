<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\UserGroup;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
	<div class="box" style="padding:15px;">
		<div class="box-head" style="padding:10px;overflow:hidden;clear:both;zoom:1;">
			<?= Html::a('添加用户', ['create'], ['class' => 'btn bg-primary btn-flat pull-right']) ?>
		</div>
		<div class="box-body">
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				'filterModel' => $searchModel,
				'columns' => [
					//['class' => 'yii\grid\SerialColumn'],

					[
						'attribute'=>'id',
						'contentOptions' => ['width' => 80,'style' => 'text-align:center;']
					],
					'username',
					'nickname',
					[
						'attribute'=>'group_id',
						'value'=>function($data){
							if($data->id == 1){
								return '超级管理员';
							}else{
								$group = UserGroup::findOne($data->group_id);
								return $group->name;
							}
						},
						'filter'=>UserGroup::dropDownList()
					],
					[
						'attribute' => 'last_time',
						'format'=>['date', 'php:Y-m-d H:i:s']
					],
					'last_ip',
					
					[
						'class' => 'yii\grid\ActionColumn',
						'contentOptions' => ['width' => 160,'style' => 'text-align:center;'],
						'header' => '操作',
						'template' => '{update} {delete} {view}',
						'buttons' => [
							'update' => function ($url, $model, $key) {
								return  Html::a('编辑', $url, ['title' => '编辑', 'class' => 'btn bg-navy btn-flat btn-xs'] ); 
							},
							'delete' => function ($url, $model, $key) {
								return  Html::a('删除', $url, ['title' => '删除', 'data' => [
									'confirm' => '确定要删除吗?',
									'method' => 'post',
								], 'class' => 'btn bg-purple btn-flat btn-xs'] ); 
							},
							'view'=>function ($url, $model, $key) {
								return  Html::a('查看', $url, ['title' => '查看', 'class' => 'btn bg-olive btn-flat btn-xs'] );
							}
						],
					
					],
				],
				'emptyText'=>'当前没有信息',
				'emptyTextOptions'=>['style'=>'color:red;font-weight:bold;text-align:left;'],
				'layout'=>"{items}\n{pager}"
			]); ?>
		</div>
	</div>
</div>
