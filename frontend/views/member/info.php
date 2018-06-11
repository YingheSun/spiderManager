<?php
use yii\helpers\Url;
$this->title = '编辑资料 - ' . Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>


<div class="container">
    <div class="main">
        <!--修改信息-->
        <div class="Personal-Info modify">
            <h2>修改信息</h2>
            <p>Modify Information</p>
            <div class="login-con">
                <input type="hidden" name="avatar" id="avatar" value="<?=$info->avatar?>"/>
                <img src="<?=($info->avatar !=''?$info->avatar:'static/images/modify.png')?>" id="img_avatar" class="application-file-img">
                <a href="javascript:void(0);" class="file" onclick = "upload('avatar',this,1001,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')"></a>
                <div class="file-mind">
                    只能上传(jpg,png)格式
                </div>
                <div class="xinxi">
                    <label for="">手机号:</label>
                    <input type="text" name="phone" id="phone" value="<?=$info->phone?>"/>
                </div>
                <div class="line"></div>
                <div class="xinxi">
                    <label for="">姓名:</label>
                    <input type="text" name="real_name" id="real_name" value="<?=$info->real_name?>"/>
                </div>
                <div class="line"></div>
                <div class="xinxi">
                    <label for="">邮箱:</label>
                    <input type="text" name="email" id="email" value="<?=$info->email?>"/>
                </div>
                <div class="line"></div>
                <a href="javascript:void(0);" id="info">
                    <img src="static/images/modify3.png" alt="" class="confirm"/>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    <?php $this->beginBlock('info') ?>
    $(document).ready(function(){
        $("#info").click(function(){
            let data = {};
            data.avatar = $.trim($("#avatar").val());
            if(data.avatar === ''){
                layer.msg('请上传照片',{icon:2});
                return false;
            }
            data.phone = $.trim($("#phone").val());
            if(data.phone === '' || !PhoneValid(data.phone)){
                layer.msg('请输入正确的手机号',{icon:2});
                return false;
            }
            data.real_name = $.trim($("#real_name").val());
            if(data.real_name === '' || !NameValid(data.real_name)){
                layer.msg('请输入正确的姓名',{icon:2});
                return false;
            }
            data.email = $.trim($("#email").val());
            if(data.email === '' || !EmailValid(data.email)){
                layer.msg('请输入正确的邮箱',{icon:2});
                return false;
            }
            //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
            $.post("<?=Url::toRoute(['member/info'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                //layer.close(index);
                if(data.code===1001){
                    layer.msg(data.msg,{icon:1,time:1000});
                }else{
                    layer.msg(data.msg,{icon:2});
                }
            },'json');
        });
    });
    <?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['info'],\yii\web\View::POS_END);?>