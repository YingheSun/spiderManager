<?php
use yii\helpers\Url;

$this->title = '在线申请 - '.Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>

<form action="" method="">
    <input type="text" name="real_name" id="real_name" />
    <input type="text" name="phone" id="phone" />
    <select name="education" id="education">
        <option value="">请选择学历</option>
        <option value="中专">中专</option>
        <option value="大专">大专</option>
        <option value="本科">本科</option>
        <option value="硕士">硕士</option>
        <option value="博士">博士</option>
        <option value="院士">院士</option>
    </select>
    <select name="work_life" id="work_life">
        <option value="">请选择工作年限</option>
        <option value="1年以下">1年以下</option>
        <option value="1-3年">1-3年</option>
        <option value="3-5年">3-5年</option>
        <option value="5-10年">5-10年</option>
        <option value="10年以上">10年以上</option>
    </select>
    <input type="text" name="industry" id="industry" />
    <a href="javascript:void(0);" id="submit">咨询</a>
</form>
<script>
<?php $this->beginBlock('message') ?>
$("#submit").click(function(){
    let realname = $.trim($("#real_name").val());
    let realname_reg= /(?:[\u4E00-\u9FFF]{1,8}·\u4E00-\u9FFF]{1,8})|(?:[\u4E00-\u9FFF]{2,5})/;
    if(realname === '' || !realname_reg.test(realname)){
        layer.msg('请输入正确的姓名',{icon:2});
        return ;
    }
    let phone = $.trim($("#phone").val());
    let phone_reg=/^[1][3,4,5,7,8][0-9]{9}$/;
    if(phone === '' || !phone_reg.test(phone)){
        layer.msg('请输入正确的手机号',{icon:2});
        return ;
    }
    let education = $.trim($("#education").val());
    if(education === ''){
        layer.msg('请选择学历',{icon:2});
        return ;
    }
    let work_life = $.trim($("#work_life").val());
    if(work_life === ''){
        layer.msg('请选择工作年限',{icon:2});
        return ;
    }
    let industry = $.trim($("#industry").val());
    if(industry === ''){
        layer.msg('请输入行业',{icon:2});
        return ;
    }
    $.post("<?=Url::toRoute(['site/index'],$this->context::$domain)?>",{realname:realname,phone:phone,education:education,work_life:work_life,industry:industry,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){



    });
});
<?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['message'],\yii\web\View::POS_LOAD);?>



