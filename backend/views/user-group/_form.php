<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\UserMenu;

/* @var $this yii\web\View */
/* @var $model backend\models\UserGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	
	<?php  if ($model->isNewRecord){$model->status = 1;}?>
    <?= $form->field($model, 'status')->radioList(['1' => '启用', '0' => '禁用']);?>
	
	<div class="form-group field-usergroup-rules">
		<label class="control-label" for="usergroup-rules">权限列表</label>
		<div id="usergroup-rules" aria-required="true" aria-invalid="false">
			<?php UserMenu::checkboxList(0,explode(',',$model->rules));?>
			<script>
			function check(id){
				if($(".id"+id).is(':checked')){
					$(".pid"+id).prop('checked',true);
					$(".id"+$(".id"+id).attr('data-pid')).prop('checked',true);
				}else{
					$(".pid"+id).prop('checked',false);
					if($(".pid"+$(".id"+id).attr('data-pid')+":checked").length == 0){
						$(".id"+$(".id"+id).attr('data-pid')).prop('checked',false);
					}
				}
				$(".pid"+id).each(function(){
					childCheck($(this).attr('data-id'));
				});
				if($(".id"+id).attr('data-pid') != 'undefined'){
					parentCheck($(".id"+id).attr('data-pid'));
				}
			}
			
			function childCheck(id){
				if($(".id"+id).is(':checked')){
					$(".pid"+id).prop('checked',true);
				}else{
					$(".pid"+id).prop('checked',false);
				}
				$(".pid"+id).each(function(){
					childCheck($(this).attr('data-id'));
				});
			}
			
			function parentCheck(id){
				if($(".id"+id).is(':checked')){
					$(".id"+$(".id"+id).attr('data-pid')).prop('checked',true);
				}else{
					if($(".pid"+$(".id"+id).attr('data-pid')+":checked").length == 0){
						$(".id"+$(".id"+id).attr('data-pid')).prop('checked',false);
					}
				}
				if($(".id"+id).attr('data-pid') != undefined){
					parentCheck($(".id"+id).attr('data-pid'));
				}
			}
			</script>
		</div>
		<div class="help-block"></div>
	</div>
	
    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>