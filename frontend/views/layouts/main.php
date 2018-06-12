<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="header">
    <div class="logo">
        <div>
            <img src="static/images/logo.png" alt="尚德在线申请系统" />
            <p>尚德在线申请系统</p>
        </div>

    </div>
    <div class="nav">
        <ul class="navbar">
            <li <?php if(Yii::$app->controller->getRoute() == 'site/index'){?>class="active"<?php }?>><a href="<?=Url::toRoute(['site/index'],$this->context::$domain)?>" class="router-link-exact-active router-link-active">首页</a></li>
            <li <?php if(Yii::$app->controller->getRoute() == 'site/show'){?>class="active"<?php }?>><a href="<?=Url::toRoute(['site/show'],$this->context::$domain)?>">院校介绍</a></li>
            <?php if(Yii::$app->session->has('member')){?>
                <li <?php if(Yii::$app->controller->getRoute() == 'member/signup'){?>class="active"<?php }?>><a href="<?=Url::toRoute(['member/signup'],$this->context::$domain)?>">在线申请</a></li>
                <li <?php if(Yii::$app->controller->getRoute() == 'member/index' || Yii::$app->controller->getRoute() == 'member/info'){?>class="active"<?php }?>><a href="<?=Url::toRoute(['member/index'],$this->context::$domain)?>">个人中心</a></li>
            <?php }else{ ?>
                <li><a href="javascript:void(0);" class="login-pop">在线申请</a></li>
                <li class="login-btn <?php if(Yii::$app->controller->getRoute() == 'member/index'){?>active<?php }?>"><a href="<?=Url::toRoute(['member/index'],$this->context::$domain)?>">登录/注册</a></li>
            <?php } ?>
        </ul>
    </div>
</div>


<div class="login-mask">
    <div class="login-content">
        <div class="login-text">
            <p class="login-title">尚德机构MBA申请系统</p>
            <p>尚德机构，专注于学历教育，职业教育的互联网教育公司。培训课程和服务范围广阔，提供全国精品直播、录播课程等，业务涵盖上班族学历 MBA 会计师 教师证 人力等职业资格认证以及相关就业服务。</p>
        </div>
        <div class="login-box">
            <p>一键登录</p>
            <div class="login-input login-phone">
                <span>+86</span>
                <input class="vphone" name="phone" id="login_phone" value="" type="text" placeholder="请输入您的手机号">
            </div>
            <div class="login-verification">
                <input type="text" name="captcha" id="login_captcha" placeholder="请输入右侧验证码">
                <img src="<?=Url::toRoute(['api/captcha'],$this->context::$domain)?>" onclick="this.src='<?= Url::toRoute(['api/captcha'],$this->context::$domain)?>&t='+new Date().getTime()">
            </div>
            <div class="login-input login-message">
                <input class="vcode" name="code" id="login_code" type="text" placeholder="请输入短信验证码">
                <a href="javascript:void(0);" class="btn-vcode" id="getvali">获取验证码</a>
            </div>
            <a href="javascript:void(0);" id="submit" class="login-box-btn btn-submit">立即登录</a>
            <!--<div class="login-tip"><span class="no-account">没有账号</span><span>立即注册</span></div>-->
        </div>
    </div>
</div>

<script>
    <?php $this->beginBlock('login') ?>
    function snedSMS(){
        let mtime=getcookie("mtime")?parseInt(getcookie("mtime")):0;
        let timer=setInterval(function(){
            timestamp = parseInt(new Date().getTime()/1000);
            if(mtime+60 > timestamp){
                $("#getvali").html("重新发送("+(mtime+60-timestamp)+")");
            }else{
                clearInterval(timer);
                setcookie("mtime",0);
                $("#getvali").html("获取验证码");
            }
        },1000);
    }
    $(document).ready(function(){
        snedSMS();
        $('.login-pop').click(function(e) {
            e.preventDefault()
            $('.login-mask').css('display', 'block');
            $('body').css('overflow', 'hidden')
        })
        $('.login-mask').click(function(e) {
            if($(e.target).closest(".login-box").length == 0 && $(e.target).closest("font").length !== 1) {
                $('.login-mask').css('display', 'none');
                $('body').css('overflow', 'inherit')
            }
        })
        $("#login_phone").focus(function(){
            if($(this).val() == '请输入正确的手机号'){
                $(".login-phone").removeClass('error-phone');
                $(this).val('').css('color','#000');
                $("#submit").removeClass('btn-activate');
            }
        });
        $("#login_phone").keyup(function(){
            if($(this).val() != '' && $(this).val() != '请输入正确的手机号'){
                $("#submit").addClass('btn-activate');
            }else{
                $("#submit").removeClass('btn-activate');
            }
        });

        $("#login_captcha").focus(function(){
            if($(this).val() == '请输入正确的验证码'){
                $(".login-verification").removeClass('error-verification');
                $(this).val('').css('color','#000');
            }
        });
        $("#login_code").focus(function(){
            if($(this).val() == '请输入正确的验证码'){
                $(".login-message").removeClass('error-message');
                $(this).val('').css('color','#000');
            }
        });
        $("#getvali").click(function(){
            let timestamp = new Date().getTime()/1000;
            let mtime=getcookie("mtime")?parseInt(getcookie("mtime")):0;
            if(mtime+60 <= timestamp){
                let phone = $.trim($("#login_phone").val());
                let captcha = $.trim($("#login_captcha").val());
                if(!PhoneValid(phone)){
                    $(".login-phone").addClass('error-phone');
                    $("#login_phone").val('请输入正确的手机号').css('color','red');
                }else if(captcha === ''){
                    $(".login-verification").addClass('error-verification');
                    $("#login_captcha").val('请输入正确的验证码').css('color','red');
                }else{
                    $.post("<?=Url::toRoute(['api/sendsms'],$this->context::$domain)?>",{phone:phone,captcha:captcha,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                        if(data.code === 1001){
                            timestamp = new Date().getTime()/1000;
                            setcookie("mtime",timestamp);
                            snedSMS();
                        }else{
                            layer.msg(data.msg,{icon:2});
                        }
                    },'json');
                }
            }
        });
        $("#submit").click(function(){
            let phone = $.trim($("#login_phone").val());
            let code = $.trim($("#login_code").val());
            if(!PhoneValid(phone)){
                $(".login-phone").addClass('error-phone');
                $("#login_phone").val('请输入正确的手机号').css('color','red');
            }else if(!code){
                $(".login-message").addClass('error-message');
                $("#login_code").val('请输入正确的验证码').css('color','red');
            }else{
                $.post("<?=Url::toRoute(['site/login'],$this->context::$domain)?>",{phone:phone,code:code,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                    if(data.code === 1001){
                        <?php if(Yii::$app->request->hostInfo.Yii::$app->request->getUrl() == Url::toRoute(['member/index'],$this->context::$domain)){?>
                        window.top.location.reload();
                        <?php }else{?>
                        window.top.location.href="<?=Url::toRoute(['member/signup'],$this->context::$domain)?>";
                        <?php }?>
                    }else{
                        layer.msg(data.msg,{icon:2});
                    }
                },'json')
            }
        });
    });
    <?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['login'],\yii\web\View::POS_END);?>

<?= $content ?>
<div id="footer">
    <div class="footer-choose">
        <ul>
            <li>关于我们</li>
            <li>|</li>
            <li>法律声明</li>
            <li>|</li>
            <li>尚德媒体</li>
            <li>|</li>
            <li>招商加盟</li>
            <li>|</li>
            <li>尚德新闻</li>
            <li>|</li>
            <li>加入我们</li>
        </ul>
    </div>
    <div style="margin-bottom: 6px;">
        Copyright &copy;2003-2017 北京尚德在线教育科技有限公司,All Rights Reserved
    </div>
    <div>
        经营许可证编号：京ICP证140312号 ｜ 京ICP备14002947号－3 ｜ 京公网安备11010502027412 ｜ 京网文 【2015】 0675-305号
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
