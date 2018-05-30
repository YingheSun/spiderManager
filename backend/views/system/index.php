<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = '基础设置';
$this->params['breadcrumbs'][] = ['label' => '网站设置', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="system-index">
	<div class="box" style="padding:15px;">
		<div class="box-body">
			<div class="system-index-form">
				<form action="<?=Url::toRoute(['system/index'])?>" method="post">
					<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" />
					<?php
					foreach($list as $k=>$v){
						if(is_array($v) && isset($v['type'])){
							if($v['type'] == 'text'){
					?>	
						<div class="form-group">
							<label class="control-label" for="<?=$k?>"><?=$v['name']?></label>
							<input type="text" id="<?=$k?>" class="form-control" name="<?=$k?>" value="<?=$v['value']?>">
						</div>
					<?php
							}else if($v['type'] == 'textarea'){
					?>	
						<div class="form-group">
							<label class="control-label" for="<?=$k?>"><?=$v['name']?></label>
							<textarea id="<?=$k?>" class="form-control" name="<?=$k?>" rows="6"><?=$v['value']?></textarea>
						</div>
					<?php			
							}else if($v['type'] == 'radio'){
					?>				
						<div class="form-group">
							<label class="control-label" for="<?=$k?>"><?=$v['name']?></label>
							<div id="<?=$k?>">
							<?php foreach($v['option'] as $key=>$val){?>
							<label class="input-radio">
								<input type="radio" name="<?=$k?>" value="<?=$key?>" 
								<?php if($v['value']==$key){?>checked="true"<?php } ?>> 
								<?=$val?>
							</label>
							<?php }?>
							</div>
						</div>
					<?php
							}
						}
					}
					?>
					<div class="form-group">
						<button type="submit" class="btn btn-success">保存</button>    
					</div>
				</form>
			</div>
		</div>
	</div>
</div>