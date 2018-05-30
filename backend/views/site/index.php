<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '后台首页';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-group-index">
	<div class="box" style="padding:15px;">
		<div class="box-header">
			<h3 class="box-title">系统信息</h3>
		</div>
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody>
				<?php foreach($info as $k=>$v):?>
				<?php if($k%2 == 1):?>
				<tr>
					<th width="350"><?=$v['name']?></th>
					<th><?=$v['value']?></th>
                </tr>
				<?php else:?>
				<tr>
					<td width="350"><?=$v['name']?></td>
					<td><?=$v['value']?></td>
                </tr>
				<?php endif;?>
				<?php endforeach;?>
				</tbody>
			</table>
        </div>
            

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
</div>