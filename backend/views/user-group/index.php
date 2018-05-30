<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户分组';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-group-index">
	<div class="box" style="padding:15px;">
		<div class="box-head" style="padding:10px;overflow:hidden;clear:both;zoom:1;">
			<?= Html::a('添加分组', ['create'], ['class' => 'btn bg-primary btn-flat pull-right']) ?>
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
					'name',
					[
						'attribute'=>'status',
						'value'=>function($data){
							return $data->status == 1 ? '启用' : '禁用';
						},
						'filter'=>[
							1=>'启用',
							0=>'禁用',
						]
					],
					[
						'attribute'=>'created_at',
						'format'=>['date', 'php:Y-m-d H:i:s'],
						'filter'=>false
					],
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
