<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
	<div class="box" style="padding:15px;">
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
					'phone',
					'avatar',
					'real_name',
					'email:email',
					[
						'attribute'=>'created_at',
						'format'=>['date', 'php:Y-m-d H:i:s'],
						'filter'=>false
					]
				],
				'emptyText'=>'当前没有信息',
				'emptyTextOptions'=>['style'=>'color:red;font-weight:bold;text-align:left;'],
				'layout'=>"{items}\n{pager}"
			]); ?>
		</div>
	</div>
</div>