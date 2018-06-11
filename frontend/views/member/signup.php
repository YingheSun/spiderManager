<?php
use yii\helpers\Url;
if( $step ==1 ) {
    $this->title = '个人资料 - ' . Yii::$app->params['web_title']['value'];
}else if( $step ==2 ) {
    $this->title = '教育背景 - ' . Yii::$app->params['web_title']['value'];
}else if( $step ==3 ) {
    $this->title = '工作背景 - ' . Yii::$app->params['web_title']['value'];
}else if( $step ==4 ) {
    $this->title = '文件上传 - ' . Yii::$app->params['web_title']['value'];
}else if( $step ==5 ) {
    $this->title = '自述短文 - ' . Yii::$app->params['web_title']['value'];
}else if( $step ==6 ) {
    $this->title = '确认提交 - ' . Yii::$app->params['web_title']['value'];
}
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";

?>

<div class="container">
    <div class="condition-banner"></div>
    <div class="condition-content-box">
        <div class="condition-title">
            申请流程
            <span>Application process</span>
        </div>
        <div class="condition-content">
            <div class="condition-left">
                <div class="condition-left-list1">
                    <a href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>1],$this->context::$domain)?>">
                        <div class="condition-left-branch<?php if(Yii::$app->request->get('step') == '1' || Yii::$app->request->get('step') == ''){echo ' condition-left-branch-active';}?>">
                            <img src="./static/images/condition-personal1.png" alt="" class="condition-list-icon1">
                            <div>个人信息</div>
                            <?php if(Yii::$app->request->get('step') == 1 || Yii::$app->request->get('step') == ''){?>
                                <img src="./static/images/condition-write.png" alt="" class="condition-list-icon2">
                            <?php }else if(strpos($signup->signup_step,'1') === false){?>
                                <img src="./static/images/condition-close.png" alt="" class="condition-list-icon2">
                            <?php }else{?>
                                <img src="./static/images/condition-write.png" alt="" class="condition-list-icon2">
                            <?php }?>
                        </div>
                    </a>
                    <a href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>2],$this->context::$domain)?>">
                        <div class="condition-left-branch<?php if(Yii::$app->request->get('step') == '2'){echo ' condition-left-branch-active';}?>">
                            <img src="./static/images/condition-education.png" alt="" class="condition-list-icon1">
                            <div>教育背景</div>
                            <img src="./static/images/condition-close.png" alt="" class="condition-list-icon2">
                        </div>
                    </a>
                    <a href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>3],$this->context::$domain)?>">
                        <div class="condition-left-branch<?php if(Yii::$app->request->get('step') == '3'){echo ' condition-left-branch-active';}?>">
                            <img src="./static/images/condition-work.png" alt="" class="condition-list-icon1">
                            <div>工作经历</div>
                            <img src="./static/images/condition-close.png" alt="" class="condition-list-icon2">
                        </div>
                    </a>
                    <a href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>4],$this->context::$domain)?>">
                        <div class="condition-left-branch<?php if(Yii::$app->request->get('step') == '4'){echo ' condition-left-branch-active';}?>">
                            <img src="./static/images/condition-file.png" alt="" class="condition-list-icon1">
                            <div>文件上传</div>
                            <img src="./static/images/condition-close.png" alt="" class="condition-list-icon2">
                        </div>
                    </a>
                    <a href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>5],$this->context::$domain)?>">
                        <div class="condition-left-branch<?php if(Yii::$app->request->get('step') == '5'){echo ' condition-left-branch-active';}?>">
                            <img src="./static/images/condition-oneself.png" alt="" class="condition-list-icon1">
                            <div>自述短文</div>
                            <img src="./static/images/condition-close.png" alt="" class="condition-list-icon2">
                        </div>
                    </a>
                    <a href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>6],$this->context::$domain)?>">
                        <div class="condition-left-branch<?php if(Yii::$app->request->get('step') == '6'){echo ' condition-left-branch-active';}?>">
                            <img src="./static/images/condition-confirm.png" alt="" class="condition-list-icon1">
                            <div>确认提交</div>
                            <img src="./static/images/condition-close.png" alt="" class="condition-list-icon2">
                        </div>
                    </a>
                </div>
                <div class="condition-left-list2">
                    <div class="condition-left-branch2">
                        <img src="./static/images/condition-link.png" alt="" class="condition-list-icon1">
                        <div style="margin:0 44px 0 10px;">常用链接</div>
                    </div>
                    <a href="#" class="condition-left-branch2 condition-left-branch2-special">
                        <div style="margin:0 9px 0 0;text-decoration:underline;">南方大学官网</div>
                        <img src="./static/images/condition-arrow.png" alt="" class="condition-list-icon2" style="width:15px;">
                    </a>
                    <div class="condition-left-branch2">
                        <img src="./static/images/condition-compass.png" alt="" class="condition-list-icon1">
                        <div style="margin:0 44px 0 10px;">申请指导</div>
                    </div>
                </div>
            </div>
            <div class="condition-right">
                <div class="condition-right-triangle"></div>
                <input type="hidden" name="academy" id="academy" value="<?=$academy?>">
                <?php if( $step ==1 ){?>
                    <!-- 个人信息 -->
                    <div class="condition-person">
                        <div class="condition-person-photo">
                            <span>个人照片：</span>
                            <img class="application-file-img" src="<?=$signup->avatar?>"/>
                            <input type="hidden" name="avatar" id="avatar" value="<?=$signup->avatar?>"/>
                            <?php if($write_step <= $step){?>
                                <div style="margin:6px 0 46px 327px;">
                                    <a href="javascript:void(0);" class="condition-person-file-box" onclick = "upload('avatar',this,1001,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">选择文件</a>
                                    <div class="condition-note-icon">
                                        <img src="./static/images/condition-prompt.png" alt="">
                                        <!-- <div class="condition-note-triangle"></div>
                                        <div class="condition-note-content">
                                          提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                        </div> -->
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <div class="condition-person-branch1">
                            <span class="condition-person-explain">姓名：</span>
                            <?php if($write_step <= $step){?>
                                <input type="text" name="real_name" id="real_name" value="<?=$signup->real_name?>" placeholder="请输入您的真实姓名" class="condition-person-name">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->real_name?></span>
                            <?php }?>
                            <span class="condition-person-explain" style="margin-left:80px;">身份证号：</span>
                            <?php if($write_step <= $step){?>
                                <input type="text" name="card" id="card" value="<?=$signup->card?>" placeholder="请输入您的身份证号" class="condition-person-card">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->card?></span>
                            <?php }?>
                        </div>
                        <div class="condition-person-branch2">
                            <span class="condition-person-explain">性别：</span>
                            <?php if($write_step <= $step){?>
                                <?php $signup->sex = $signup->sex?$signup->sex:'男';?>
                                <input type="hidden" name="sex" id="sex" value="<?=$signup->sex?>">
                                <div class="condition-person-sex <?php if($signup->sex =='男'){?>condition-person-sex-sepcial<?php }?>" style="margin-right:14px;">男</div>
                                <div class="condition-person-sex <?php if($signup->sex =='女'){?>condition-person-sex-sepcial<?php }?>">女</div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->sex?></span>
                            <?php }?>

                            <span class="condition-person-explain" style="margin-left:<?php if($write_step <= $step){?>132<?php }else{?>108<?php }?>px;">邮箱：</span>

                            <?php if($write_step <= $step){?>
                                <input type="email" name="email" id="email" value="<?=$signup->email?>" placeholder="请输入您的邮箱" class="condition-person-email">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->email?></span>
                            <?php }?>
                        </div>
                        <div class="condition-person-branch3">
                            <span class="condition-person-explain">手机号：</span>
                            <?php if($write_step <= $step){?>
                                <input type="tel" name="phone" id="phone" value="<?=$signup->phone?>" placeholder="请输入您的手机号" class="condition-person-phone">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->phone?></span>
                            <?php }?>
                            <span class="condition-person-explain" style="margin-left:80px;">婚姻状况：</span>
                            <?php if($write_step <= $step){?>
                                <?php $signup->marital = $signup->marital?$signup->marital:'未婚';?>
                                <input type="hidden" name="marital" id="marital" value="<?=$signup->marital?>">
                                <div class="condition-person-marry <?php if($signup->marital =='未婚'){?>condition-person-sex-sepcial<?php }?>" style="margin-right:14px;">未婚</div>
                                <div class="condition-person-marry <?php if($signup->marital =='已婚'){?>condition-person-sex-sepcial<?php }?>">已婚</div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->marital?></span>
                            <?php }?>

                        </div>
                        <div class="condition-person-branch4">
                            <span class="condition-person-explain">出生日期：</span>
                            <?php if($write_step <= $step){?>
                                <input type="text" name="birthday" class="condition-person-date" id="birthday" readonly="readonly" value="<?=$signup->birthday?>" onfocus="WdatePicker({el:this,dateFmt:'yyyy-MM-dd'})"/>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->birthday?></span>
                            <?php }?>
                        </div>
                        <div class="condition-person-branch5">
                            <span class="condition-person-explain">出生地：</span>
                            <?php if($write_step <= $step){?>
                                <input type="text" name="homeplace" id="homeplace" value="<?=$signup->homeplace?>" placeholder="请输入您的出生地（具体到县/市）" class="condition-person-place">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->homeplace?></span>
                            <?php }?>
                        </div>
                        <div class="condition-person-branch6">
                            <span class="condition-person-explain">紧急联系人：</span>
                            <?php if($write_step <= $step){?>
                                <input type="text" name="emergency_name" id="emergency_name" value="<?=$signup->emergency_name?>" placeholder="请输紧急联系人姓名" class="condition-person-emergency-name">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->emergency_name?></span>
                            <?php }?>
                        </div>
                        <div class="condition-person-branch7">
                            <span class="condition-person-explain">紧急联系人手机：</span>
                            <?php if($write_step <= $step){?>
                                <input type="tel" name="emergency_phone" id="emergency_phone" value="<?=$signup->emergency_phone?>" placeholder="请输紧急联系人姓名" class="condition-person-emergency-phone">
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            <?php }else{?>
                                <span class="show-text"><?=$signup->emergency_phone?></span>
                            <?php }?>
                        </div>
                        <?php if($write_step <= $step){?>
                            <div class="condition-person-branch8">
                                <div class="condition-person-btn1" id="save">保存</div>
                                <div class="condition-person-btn2" id="next">保存并下一步</div>
                            </div>


                            <script>
                                <?php $this->beginBlock('signup') ?>
                                $(document).ready(function(){
                                    $(".condition-person-marry").click(function(){
                                        $(".condition-person-marry").removeClass("condition-person-sex-sepcial");
                                        $(this).addClass("condition-person-sex-sepcial");
                                        $("#marital").val($(this).text());
                                    });
                                    $(".condition-person-sex").click(function(){
                                        $(".condition-person-sex").removeClass("condition-person-sex-sepcial");
                                        $(this).addClass("condition-person-sex-sepcial");
                                        $("#sex").val($(this).text());
                                    });
                                    $("#save").click(function(){
                                        saveData()
                                    });

                                    $("#next").click(function(){
                                        saveData(true)
                                    });
                                });
                                function saveData(next=false){
                                    let data = {};
                                    data.academy_id = $("#academy").val();
                                    data.avatar = $.trim($("#avatar").val());
                                    if(data.avatar === ''){
                                        layer.msg('请上传照片',{icon:2});
                                        return false;
                                    }
                                    data.real_name = $.trim($("#real_name").val());
                                    if(data.real_name === '' || !NameValid(data.real_name)){
                                        layer.msg('请输入正确的姓名',{icon:2});
                                        return false;
                                    }
                                    data.card = $.trim($("#card").val());
                                    let card_tip = IdentityCodeValid(data.card);
                                    if(card_tip !== ''){
                                        layer.msg(card_tip,{icon:2});
                                        return false;
                                    }
                                    data.phone = $.trim($("#phone").val());
                                    if(data.phone === '' || !PhoneValid(data.phone)){
                                        layer.msg('请输入正确的手机号',{icon:2});
                                        return false;
                                    }
                                    data.email = $.trim($("#email").val());
                                    if(data.email === '' || !EmailValid(data.email)){
                                        layer.msg('请输入正确的邮箱',{icon:2});
                                        return false;
                                    }
                                    data.homeplace = $.trim($("#homeplace").val());
                                    if(data.homeplace === ''){
                                        layer.msg('请输入出生地',{icon:2});
                                        return false;
                                    }
                                    data.sex = $.trim($("#sex").val());
                                    data.birthday = $.trim($("#birthday").val());
                                    if(data.birthday === ''){
                                        layer.msg('请选择出生日期',{icon:2});
                                        return false;
                                    }
                                    data.marital = $.trim($("#marital").val());
                                    data.emergency_name = $.trim($("#emergency_name").val());
                                    if(data.emergency_name === '' || !NameValid(data.emergency_name)){
                                        layer.msg('请输入正确的紧急联系人',{icon:2});
                                        return false;
                                    }
                                    data.emergency_phone = $.trim($("#emergency_phone").val());
                                    if(data.emergency_phone === '' || !PhoneValid(data.emergency_phone)){
                                        layer.msg('请输入正确的紧急联系人手机号',{icon:2});
                                        return false;
                                    }
                                    data.step = 1;
                                    //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
                                    $.post("<?=Url::toRoute(['member/signup'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                                        //layer.close(index);
                                        if(data.code===1001){
                                            layer.msg(data.msg,{icon:1,time:1000},function(){
                                                if(next){
                                                    window.location.href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>2],$this->context::$domain)?>";
                                                }
                                            });
                                        }else{
                                            layer.msg(data.msg,{icon:2});
                                        }
                                    },'json');
                                }
                                <?php $this->endBlock(); ?>
                            </script>
                            <?php $this->registerJs($this->blocks['signup'],\yii\web\View::POS_END);?>
                        <?php }?>
                    </div>


                <?php }else if($step == 2){?>
                    <div class="condition-person">
                        <div class="condition-title">教育背景</div>
                        <div class="education-box">
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>最高学历:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="education"><?php if($signup->education != ''){echo $signup->education;}else{echo '请选择最高学历';}?></div>
                                            <ul class="down-box">
                                                <li class="option">大专</li>
                                                <li class="option">本科</li>
                                                <li class="option">硕士研究生</li>
                                                <li class="option">博士研究生</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div>-->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>最高学历开始时间:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input id="d5221" name="education_start_time" value="<?=$signup->education_start_time?>" class="input-body" type="text" onfocus="var d5222=$dp.$('d5222');WdatePicker({dateFmt:'yyyy-MM-dd'/*,onpicked:function(){d5222.click();}*/,maxDate:'#F{ $dp.$D(\'d5222\')}' })"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_start_time?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>最高学历截止时间:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input id="d5222" name="education_end_time" value="<?=$signup->education_end_time?>" class="input-body" type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'#F{ $dp.$D(\'d5221\') }'})"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_end_time?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>最高学历毕业院校:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="university" id="university" class="input-body" value="<?=$signup->university?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->university?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="checkbox-title">
                                    <span>*</span>最高学历毕业院校分类:&nbsp;
                                </div>
                                <?php if($write_step <= $step){?>
                                    <div class="radio-box">
                                        <label><input type="radio" name="university_category" value="双一流" <?php if($signup->university_category=='双一流'){echo 'checked="true"';}?>>双一流</label>
                                        <label><input type="radio" name="university_category" value="985" <?php if($signup->university_category=='985'){echo 'checked="true"';}?>>985</label>
                                        <label><input type="radio" name="university_category" value="211" <?php if($signup->university_category=='211'){echo 'checked="true"';}?>>211</label>
                                        <label><input type="radio" name="university_category" value="一本" <?php if($signup->university_category=='一本'){echo 'checked="true"';}?>>一本</label>
                                        <label><input type="radio" name="university_category" value="二本" <?php if($signup->university_category=='二本'){echo 'checked="true"';}?>>二本</label>
                                        <label><input type="radio" name="university_category" value="三本" <?php if($signup->university_category=='三本'){echo 'checked="true"';}?>>三本</label>
                                        <label><input type="radio" name="university_category" value="大专" <?php if($signup->university_category=='大专'){echo 'checked="true"';}?>>大专</label>
                                        <label><input type="radio" name="university_category" value="海外院校" <?php if($signup->university_category=='海外院校'){echo 'checked="true"';}?>>海外院校</label>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <?=$signup->university_category?>
                                <?php }?>
                            </div>
                            <div class="input-content" style="margin-bottom: 100px;">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>最高学历院校学习方式:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="university_style"><?php if($signup->university_style!=''){echo $signup->university_style;}else{echo '请选择';}?></div>
                                            <ul class="down-box">
                                                <li class="option">脱产（全日制）</li>
                                                <li class="option">在职</li>
                                                <li class="option">网校</li>
                                                <li class="option">函授</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->university_style?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>最高学历:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="education2"><?php if($signup->education2 != ''){echo $signup->education2;}else{echo '请选择最高学历';}?></div>
                                            <ul class="down-box">
                                                <li class="option">博士</li>
                                                <li class="option">硕士</li>
                                                <li class="option">学士</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education2?>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title">
                                        <span class="required">*</span>
                                        本/专科院校:&nbsp;
                                    </p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="academy2" id="academy2" class="input-body" value="<?=$signup->academy2?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->academy2?>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学习方式:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="university_style2"><?php if($signup->university_style2!=''){echo $signup->university_style2;}else{echo '请选择';}?></div>
                                            <ul class="down-box">
                                                <li class="option">脱产（全日制）</li>
                                                <li class="option">在职</li>
                                                <li class="option">网校</li>
                                                <li class="option">函授</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->university_style2?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学历:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="university_degree2"><?php if($signup->university_degree2!=''){echo $signup->university_degree2;}else{echo '请选择学位';}?></div>
                                            <ul class="down-box">
                                                <li class="option">大专</li>
                                                <li class="option">本科</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->university_degree2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="checkbox-title">
                                    <span>*</span>
                                    本/专科毕业院校分类:&nbsp;
                                </div>
                                <?php if($write_step <= $step){?>
                                    <div class="radio-box">
                                        <label><input type="radio" name="university_category2" value="双一流" <?php if($signup->university_category2=='双一流'){echo 'checked="true"';}?>>双一流</label>
                                        <label><input type="radio" name="university_category2" value="985" <?php if($signup->university_category2=='985'){echo 'checked="true"';}?>>985</label>
                                        <label><input type="radio" name="university_category2" value="211" <?php if($signup->university_category2=='211'){echo 'checked="true"';}?>>211</label>
                                        <label><input type="radio" name="university_category2" value="一本" <?php if($signup->university_category2=='一本'){echo 'checked="true"';}?>>一本</label>
                                        <label><input type="radio" name="university_category2" value="二本" <?php if($signup->university_category2=='二本'){echo 'checked="true"';}?>>二本</label>
                                        <label><input type="radio" name="university_category2" value="三本" <?php if($signup->university_category2=='三本'){echo 'checked="true"';}?>>三本</label>
                                        <label><input type="radio" name="university_category2" value="大专" <?php if($signup->university_category2=='大专'){echo 'checked="true"';}?>>大专</label>
                                        <label><input type="radio" name="university_category2" value="海外院校" <?php if($signup->university_category2=='海外院校'){echo 'checked="true"';}?>>海外院校</label>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <?=$signup->university_category2?>
                                <?php }?>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>本/专科学位:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="degree2"><?php if($signup->degree2!=''){echo $signup->degree2;}else{echo '请选择本/专科学位';}?></div>
                                            <ul class="down-box">
                                                <li class="option">学士</li>
                                                <li class="option">无</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->degree2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>分类:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="category2"><?php if($signup->category2!=''){echo $signup->category2;}else{echo '请选择分类';}?></div>
                                            <ul class="down-box">
                                                <li class="option">普通本科</li>
                                                <li class="option">自考本科</li>
                                                <li class="option">成教本科</li>
                                                <li class="option">专升本</li>
                                                <li class="option">专科</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->category2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title">
                                        <span class="required">*</span>学历证书编号:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="education_number2" id="education_number2" class="input-body" value="<?=$signup->education_number2?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_number2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>专业:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="education_major2" id="education_major2" class="input-body" value="<?=$signup->education_major2?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_major2?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>专业类别:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="major_category2"><?php if($signup->major_category2!=''){echo $signup->major_category2;}else{echo '请选择专业类别';}?></div>
                                            <ul class="down-box">
                                                <li class="option">哲学</li>
                                                <li class="option">经济学</li>
                                                <li class="option">法学</li>
                                                <li class="option">教育学</li>
                                                <li class="option">文学</li>
                                                <li class="option">历史学</li>
                                                <li class="option">理学</li>
                                                <li class="option">工学</li>
                                                <li class="option">农学</li>
                                                <li class="option">医学</li>
                                                <li class="option">军事学</li>
                                                <li class="option">管理学</li>
                                                <li class="option">艺术学</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->major_category2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>专业内排名/本专业人数:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="professional_ranking2" id="professional_ranking2" class="input-body" value="<?=$signup->professional_ranking2?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->professional_ranking2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学位证书编号:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="educations_number2" id="educations_number2" class="input-body" value="<?=$signup->educations_number2?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->educations_number2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title">
                                        <span class="required">*</span>
                                        入学时间:&nbsp;
                                    </p>
                                    <?php if($write_step <= $step){?>
                                        <input id="d6221" name="education_start_time2" value="<?=$signup->education_start_time2?>" class="input-body" type="text" onfocus="var d6222=$dp.$('d6222');WdatePicker({dateFmt:'yyyy-MM-dd'/*,onpicked:function(){d6222.click();}*/,maxDate:'#F{ $dp.$D(\'d6222\')}' })"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_start_time2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title">
                                        <span class="required">*</span>
                                        毕业时间:&nbsp;
                                    </p>
                                    <?php if($write_step <= $step){?>
                                        <input id="d6222" name="education_end_time2" value="<?=$signup->education_end_time2?>" class="input-body" type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'#F{ $dp.$D(\'d6221\') }'})"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_end_time2?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 100px;">
                                    <p class="input-title"><span class="required">*</span>备注:&nbsp;</p>
                                    <div class="div-content">
                                        <?php if($write_step <= $step){?>
                                            <div contenteditable="true" id="education_content2"><?=$signup->education_content2?></div>
                                        <?php }else{?>
                                            <?=$signup->education_content2?>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>其他学历:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="education3"><?php if($signup->education3 != ''){echo $signup->education3;}else{echo '请选择其他学历';}?></div>
                                            <ul class="down-box">
                                                <li class="option">博士</li>
                                                <li class="option">硕士</li>
                                                <li class="option">普通本科</li>
                                                <li class="option">自考本科</li>
                                                <li class="option">成教本科</li>
                                                <li class="option">专升本</li>
                                                <li class="option">全日制大专</li>
                                                <li class="option">非全日制大专</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>毕业院校:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="academy3" id="academy3" class="input-body" value="<?=$signup->academy3?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->academy3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学习方式:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="university_style3"><?php if($signup->university_style3!=''){echo $signup->university_style3;}else{echo '请选择学习方式';}?></div>
                                            <ul class="down-box">
                                                <li class="option">脱产（全日制）</li>
                                                <li class="option">在职</li>
                                                <li class="option">网校</li>
                                                <li class="option">函授</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->university_style3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学历:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="university_degree3"><?php if($signup->university_degree3!=''){echo $signup->university_degree3;}else{echo '请选择学位';}?></div>
                                            <ul class="down-box">
                                                <li class="option">大专</li>
                                                <li class="option">本科</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->university_degree3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="checkbox-title"><span>*</span>最高学历毕业院校分类:&nbsp;</div>
                                <?php if($write_step <= $step){?>
                                    <div class="radio-box">
                                        <label><input type="radio" name="university_category3" value="双一流" <?php if($signup->university_category3=='双一流'){echo 'checked="true"';}?>>双一流</label>
                                        <label><input type="radio" name="university_category3" value="985" <?php if($signup->university_category3=='985'){echo 'checked="true"';}?>>985</label>
                                        <label><input type="radio" name="university_category3" value="211" <?php if($signup->university_category3=='211'){echo 'checked="true"';}?>>211</label>
                                        <label><input type="radio" name="university_category3" value="一本" <?php if($signup->university_category3=='一本'){echo 'checked="true"';}?>>一本</label>
                                        <label><input type="radio" name="university_category3" value="二本" <?php if($signup->university_category3=='二本'){echo 'checked="true"';}?>>二本</label>
                                        <label><input type="radio" name="university_category3" value="三本" <?php if($signup->university_category3=='三本'){echo 'checked="true"';}?>>三本</label>
                                        <label><input type="radio" name="university_category3" value="大专" <?php if($signup->university_category3=='大专'){echo 'checked="true"';}?>>大专</label>
                                        <label><input type="radio" name="university_category3" value="海外院校" <?php if($signup->university_category3=='海外院校'){echo 'checked="true"';}?>>海外院校</label>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <?=$signup->university_category3?>
                                <?php }?>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学历证书编号:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="education_number3" id="education_number3" class="input-body" value="<?=$signup->education_number3?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_number3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>专业:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="education_major3" id="education_major3" class="input-body" value="<?=$signup->education_major3?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_major3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>专业类别:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="major_category3"><?php if($signup->major_category3!=''){echo $signup->major_category3;}else{echo '请选择专业类别';}?></div>
                                            <ul class="down-box">
                                                <li class="option">哲学</li>
                                                <li class="option">经济学</li>
                                                <li class="option">法学</li>
                                                <li class="option">教育学</li>
                                                <li class="option">文学</li>
                                                <li class="option">历史学</li>
                                                <li class="option">理学</li>
                                                <li class="option">工学</li>
                                                <li class="option">农学</li>
                                                <li class="option">医学</li>
                                                <li class="option">军事学</li>
                                                <li class="option">管理学</li>
                                                <li class="option">艺术学</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->major_category3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>专业内排名/本专业人数:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="professional_ranking3" id="professional_ranking3" class="input-body" value="<?=$signup->professional_ranking3?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->professional_ranking3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>学历证书编号:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="educations_number3" id="educations_number3" class="input-body" value="<?=$signup->educations_number3?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->educations_number3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>入学时间:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input id="d7221" name="education_start_time3" value="<?=$signup->education_start_time3?>" class="input-body" type="text" onfocus="var d7222=$dp.$('d7222');WdatePicker({dateFmt:'yyyy-MM-dd'/*,onpicked:function(){d7222.click();}*/,maxDate:'#F{ $dp.$D(\'d7222\')}' })"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_start_time3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>毕业时间:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input id="d7222" name="education_end_time3" value="<?=$signup->education_end_time3?>" class="input-body" type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'#F{ $dp.$D(\'d7221\') }'})"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->education_end_time3?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 100px;">
                                    <p class="input-title"><span class="required">*</span>备注:&nbsp;</p>
                                    <div class="div-content">
                                        <?php if($write_step <= $step){?>
                                            <div contenteditable="true" id="education_content3"><?=$signup->education_content3?></div>
                                        <?php }else{?>
                                            <?=$signup->education_content3?>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <?php if($write_step <= $step){?>
                                <div class="condition-person-branch8">
                                    <div class="condition-person-btn1" id="save">保存</div>
                                    <div class="condition-person-btn2" id="next">保存并下一步</div>
                                </div>


                                <script>
                                    <?php $this->beginBlock('signup') ?>
                                    $(document).ready(function(){
                                        $("#save").click(function(){
                                            saveData()
                                        });

                                        $("#next").click(function(){
                                            saveData(true)
                                        });
                                    });

                                    function saveData(next=false){
                                        let data = {};
                                        data.academy_id = $("#academy").val();
                                        data.education = $.trim($('#education').text());
                                        if(data.education === ''){
                                            $('#education').focus();
                                            return false;
                                        }
                                        data.education_start_time = $.trim($('#d5221').val());
                                        if(data.education_start_time === ''){
                                            $('#d5221').focus();
                                            return false;
                                        }
                                        data.education_end_time = $.trim($('#d5222').val());
                                        if(data.education_end_time === ''){
                                            $('#d5222').focus();
                                            return false;
                                        }
                                        data.university = $.trim($('#university').val());
                                        if(data.university === ''){
                                            $('#university').focus();
                                            return false;
                                        }
                                        data.university_category = $.trim($(":radio[name^='university_category']:checked").val());
                                        if(data.university_category === ''){
                                            $(":radio[name^='university_category']").focus();
                                            return false;
                                        }
                                        data.university_style = $.trim($('#university_style').text());
                                        if(data.university_style === ''){
                                            $('#university_style').focus();
                                            return false;
                                        }
                                        data.education2 = $.trim($('#education2').text());
                                        if(data.education2 === ''){
                                            $('#education2').focus();
                                            return false;
                                        }
                                        data.academy2 = $.trim($('#academy2').val());
                                        if(data.academy2 === ''){
                                            $('#academy2').focus();
                                            return false;
                                        }
                                        data.university_style2 = $.trim($('#university_style2').text());
                                        if(data.university_style2 === ''){
                                            $('#university_style2').focus();
                                            return false;
                                        }
                                        data.university_degree2 = $.trim($('#university_degree2').text());
                                        if(data.university_degree2 === ''){
                                            $('#university_degree2').focus();
                                            return false;
                                        }
                                        data.university_category2 = $.trim($(":radio[name^='university_category2']:checked").val());
                                        if(data.university_category2 === ''){
                                            $(":radio[name^='university_category2']").focus();
                                            return false;
                                        }

                                        data.degree2 = $.trim($('#degree2').text());
                                        if(data.degree2 === ''){
                                            $('#degree2').focus();
                                            return false;
                                        }

                                        data.category2 = $.trim($("#category2").text());
                                        if(data.category2 === ''){
                                            $("#category2").focus();
                                            return false;
                                        }

                                        data.education_number2 = $.trim($('#education_number2').val());
                                        if(data.education_number2 === ''){
                                            $('#education_number2').focus();
                                            return false;
                                        }

                                        data.education_major2 = $.trim($('#education_major2').val());
                                        if(data.education_major2 === ''){
                                            $('#education_major2').focus();
                                            return false;
                                        }
                                        data.major_category2 = $.trim($('#major_category2').text());
                                        if(data.major_category2 === ''){
                                            $('#major_category2').focus();
                                            return false;
                                        }
                                        data.professional_ranking2 = $.trim($('#professional_ranking2').val());
                                        if(data.professional_ranking2 === ''){
                                            $('#professional_ranking2').focus();
                                            return false;
                                        }
                                        data.educations_number2 = $.trim($('#educations_number2').val());
                                        if(data.educations_number2 === ''){
                                            $('#educations_number2').focus();
                                            return false;
                                        }
                                        data.education_start_time2 = $.trim($('#d6221').val());
                                        if(data.education_start_time2 === ''){
                                            $('#d6221').focus();
                                            return false;
                                        }
                                        data.education_end_time2 = $.trim($('#d6222').val());
                                        if(data.education_end_time2 === ''){
                                            $('#d6222').focus();
                                            return false;
                                        }
                                        data.education_content2 = $.trim($('#education_content2').text());
                                        if(data.education_content2 === ''){
                                            $('#education_content2').focus();
                                            return false;
                                        }
                                        data.education3 = $.trim($('#education3').text());
                                        if(data.education3 === ''){
                                            $('#education3').focus();
                                            return false;
                                        }
                                        console.log(data);
                                        data.academy3 = $.trim($('#academy3').val());
                                        if(data.academy3 === ''){
                                            $('#academy3').focus();
                                            return false;
                                        }
                                        data.university_style3 = $.trim($('#university_style3').text());
                                        if(data.university_style3 === ''){
                                            $('#university_style3').focus();
                                            return false;
                                        }
                                        data.university_degree3 = $.trim($('#university_degree3').text());
                                        if(data.university_degree3 === ''){
                                            $('#university_degree3').focus();
                                            return false;
                                        }
                                        data.university_category3 = $.trim($(":radio[name^='university_category3']:checked").val());
                                        if(data.university_category3 === ''){
                                            $(":radio[name^='university_category3']").focus();
                                            return false;
                                        }
                                        data.education_number3 = $.trim($('#education_number3').val());
                                        if(data.education_number3 === ''){
                                            $('#education_number3').focus();
                                            return false;
                                        }
                                        data.education_major3 = $.trim($('#education_major3').val());
                                        if(data.education_major3 === ''){
                                            $('#education_major3').focus();
                                            return false;
                                        }
                                        data.major_category3 = $.trim($('#major_category3').text());
                                        if(data.major_category3 === ''){
                                            $('#major_category3').focus();
                                            return false;
                                        }
                                        data.professional_ranking3 = $.trim($('#professional_ranking3').val());
                                        if(data.professional_ranking3 === ''){
                                            $('#professional_ranking3').focus();
                                            return false;
                                        }
                                        data.educations_number3 = $.trim($('#educations_number3').val());
                                        if(data.educations_number3 === ''){
                                            $('#educations_number3').focus();
                                            return false;
                                        }
                                        data.education_start_time3 = $.trim($('#d7221').val());
                                        if(data.education_start_time3 === ''){
                                            $('#d7221').focus();
                                            return false;
                                        }
                                        data.education_end_time3 = $.trim($('#d7222').val());
                                        if(data.education_end_time3 === ''){
                                            $('#d7222').focus();
                                            return false;
                                        }
                                        data.education_content3 = $.trim($('#education_content3').text());
                                        if(data.education_content3 === ''){
                                            $('#education_content3').focus();
                                            return false;
                                        }

                                        data.step = 2;
                                        //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
                                        $.post("<?=Url::toRoute(['member/signup'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                                            //layer.close(index);
                                            if(data.code===1001){
                                                layer.msg(data.msg,{icon:1,time:1000},function(){
                                                    if(next){
                                                        window.location.href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>3],$this->context::$domain)?>";
                                                    }
                                                });
                                            }else{
                                                layer.msg(data.msg,{icon:2});
                                            }
                                        },'json');
                                    }

                                    <?php $this->endBlock(); ?>
                                </script>
                                <?php $this->registerJs($this->blocks['signup'],\yii\web\View::POS_END);?>
                            <?php }?>

                        </div>
                    </div>

                <?php }else if($step == 3){?>
                    <div class="condition-person">
                        <div class="condition-title">工作经历</div>
                        <div class="education-box">
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>全职工作经验（年）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="fulltime_work_life" id="fulltime_work_life" class="input-body" value="<?=$signup->fulltime_work_life?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->fulltime_work_life?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px">
                                    <p class="input-title"><span class="required">*</span>管理岗位工作经验（年）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="management_work_life" id="management_work_life" class="input-body" value="<?=$signup->management_work_life?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->management_work_life?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>单位/公司中文全称:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="chinese_company_name" id="chinese_company_name" class="input-body" value="<?=$signup->chinese_company_name?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->chinese_company_name?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px;">
                                    <p class="input-title"><span class="required">*</span>单位/公司英文全称:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="english_company_name" id="english_company_name" class="input-body" value="<?=$signup->english_company_name?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->english_company_name?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>公司年营业额:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="turnover_year"><?php if($signup->turnover_year != ''){echo $signup->turnover_year;}else{echo '请选择';}?></div>
                                            <ul class="down-box">
                                                <li class="option">高中</li>
                                                <li class="option">qqq</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->turnover_year?>
                                    <?php }?>


                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px;">
                                    <p class="input-title"><span class="required">*</span>单位/公司规模（人）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="company_size" id="company_size" class="input-body" value="<?=$signup->company_size?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->company_size?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>主营业务:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="main_business" id="main_business" class="input-body" value="<?=$signup->main_business?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->main_business?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>行业类别:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="Industry_category"><?php if($signup->Industry_category != ''){echo $signup->Industry_category;}else{echo '请选择行业类别';}?></div>
                                            <ul class="down-box">
                                                <li class="option">金融服务</li>
                                                <li class="option">咨询</li>
                                                <li class="option">能源/化工</li>
                                                <li class="option">科技/新媒体/电信</li>
                                                <li class="option">房地产开发及装饰</li>
                                                <li class="option">服务行业（物流、信息、教育、培训、外包、交通运输等）</li>
                                                <li class="option">非营利组织/政府机构/事业单位</li>
                                                <li class="option">制造业</li>
                                                <li class="option">批发/零售/贸易</li>
                                                <li class="option">医药/保健/医药科技</li>
                                                <li class="option">媒体/娱乐/广告公关</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->Industry_category?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px;">
                                    <p class="input-title"><span class="required">*</span>公司性质:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="company_nature"><?php if($signup->company_nature != ''){echo $signup->company_nature;}else{echo '请选择公司性质';}?></div>
                                            <ul class="down-box">
                                                <li class="option">外资/合创企业</li>
                                                <li class="option">自主创业</li>
                                                <li class="option">国有企业</li>
                                                <li class="option">民营企业</li>
                                                <li class="option">政府机构</li>
                                                <li class="option">事业单位</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->company_nature?>
                                    <?php }?>


                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>岗位类型:&nbsp;</p>

                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="post_type"><?php if($signup->post_type != ''){echo $signup->post_type;}else{echo '请选择岗位类型';}?></div>
                                            <ul class="down-box">
                                                <li class="option">高层管理（总经理/副总经理及以上）</li>
                                                <li class="option">高级管理（总助/执行主任/执行总监级）</li>
                                                <li class="option">中级管理（总监/部门经理级）</li>
                                                <li class="option">初级管理（主管级/一般经理级）</li>
                                                <li class="option">高级专业人士</li>
                                                <li class="option">初级专业人士</li>
                                                <li class="option">管理培训生</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->post_type?>
                                    <?php }?>


                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>工作部门:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="work_department" id="work_department" class="input-body" value="<?=$signup->work_department?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->work_department?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px;">
                                    <p class="input-title"><span class="required">*</span>工作职位:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="work_position" id="work_position" class="input-body" value="<?=$signup->work_position?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->work_position?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>岗位职能:&nbsp;</p>

                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="work_function1"><?php if($signup->work_function1 != ''){echo $signup->work_function1;}else{echo '请选择岗位职能';}?></div>
                                            <ul class="down-box">
                                                <li class="option">金融/财务</li>
                                                <li class="option">咨询/业务/战略发展</li>
                                                <li class="option">综合管理</li>
                                                <li class="option">政府公务员</li>
                                                <li class="option">销售/客户管理</li>
                                                <li class="option">项目管理</li>
                                                <li class="option">市场营销/产品管理</li>
                                                <li class="option">供应链管理</li>
                                                <li class="option">人事/行政</li>
                                                <li class="option">技术研发</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->work_function1?>
                                    <?php }?>


                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>岗位职能:&nbsp;</p>

                                    <?php if($write_step <= $step){?>
                                        <div class="input-body section">
                                            <div class="section-content" id="work_function2"><?php if($signup->work_function2 != ''){echo $signup->work_function2;}else{echo '请选择岗位职能';}?></div>
                                            <ul class="down-box">
                                                <li class="option">金融/财务</li>
                                                <li class="option">咨询/业务/战略发展</li>
                                                <li class="option">综合管理</li>
                                                <li class="option">政府公务员</li>
                                                <li class="option">销售/客户管理</li>
                                                <li class="option">项目管理</li>
                                                <li class="option">市场营销/产品管理</li>
                                                <li class="option">供应链管理</li>
                                                <li class="option">人事/行政</li>
                                                <li class="option">技术研发</li>
                                                <li class="option">其他</li>
                                            </ul>
                                        </div>
                                        <div class="condition-note-icon section">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->work_function2?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px;">
                                    <p class="input-title"><span class="required">*</span>负责预算规模（万元）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="scale_responsible" id="scale_responsible" class="input-body" value="<?=$signup->scale_responsible?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->scale_responsible?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>本单位工作开始时间:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="work_starttime" id="work_starttime" class="input-body" value="<?=$signup->work_starttime?>" onclick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd'})"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->work_starttime?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>目前年收入（万元）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="annual_income" id="annual_income" class="input-body" value="<?=$signup->annual_income?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->annual_income?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 54px;">
                                    <p class="input-title"><span class="required">*</span>起始年收入（万元）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="annual_income_start" id="annual_income_start" class="input-body" value="<?=$signup->annual_income_start?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->annual_income_start?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 40px;">
                                    <p class="input-title"><span class="required">*</span>负责管理下属员工人数（人）:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="management_number" id="management_number" class="input-body" value="<?=$signup->management_number?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->management_number?>
                                    <?php }?>


                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <div class="input-title" style="text-align: left;width: 489px;">
                                        <span class="required" style="vertical-align: top;">*</span>
                                        <div style="display: inline-block;width: 440px;">
                                            本单位内岗位情况(包括曾经做过的各岗位名称、职位、工作职责、工作业绩、汇报关系、下属人数等信息)
                                        </div>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    </div>
                                    <?php if($write_step <= $step){?>
                                        <div contenteditable="true" id="position_situation" style="width: 489px;padding:8px;height: 181px;border:1px solid rgba(216,216,216,1);background: #fff;"><?=$signup->position_situation?></div>
                                    <?php }else{?>
                                        ：<div><?=$signup->position_situation?></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>上级姓名:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="superior_name" id="superior_name" class="input-body" value="<?=$signup->superior_name?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->superior_name?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>职位:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="superior_post" id="superior_post" class="input-body" value="<?=$signup->superior_post?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->superior_post?>
                                    <?php }?>


                                </div>
                            </div>
                            <div class="input-content">
                                <div class="input-box">
                                    <p class="input-title"><span class="required">*</span>联系电话:&nbsp;</p>
                                    <?php if($write_step <= $step){?>
                                        <input type="text" name="superior_phone" id="superior_phone" class="input-body" value="<?=$signup->superior_phone?>"/>
                                        <div class="condition-note-icon">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    <?php }else{?>
                                        <?=$signup->superior_phone?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="checkbox" style="margin-bottom: 53px;">
                                <div class="checkbox-title" style="top:0;"><span>*</span>是否同意直接和你的上级联系:&nbsp;</div>
                                <?php if($write_step <= $step){?>
                                    <?php $signup->agree_contact_suoerior = $signup->agree_contact_suoerior?$signup->agree_contact_suoerior:'是';?>
                                    <div class="radio-box" style="width: 390px;">
                                        <input type="radio" name="agree_contact_suoerior"  value="是" <?php if($signup->agree_contact_suoerior=='是'){echo 'checked="true"';}?>/> 是
                                        <input type="radio" name="agree_contact_suoerior"  value="否" <?php if($signup->agree_contact_suoerior=='否'){echo 'checked="true"';}?>/> 否
                                    </div>
                                <?php }else{?>
                                    <?=$signup->agree_contact_suoerior?>
                                <?php }?>

                            </div>
                            <div class="input-content">
                                <div class="input-box" style="margin-bottom: 75px;">
                                    <div class="input-title" style="text-align: left;width: 489px;">
                                        <span class="required" style="vertical-align: top;">*</span>
                                        <div style="display: inline-block;width: 440px;">
                                            其他工作经历(从最近的开始填写，包括单位、工作时间、职位、汇报关系、下属员工人数、工作职责业绩、收入和离职原因等信息)
                                        </div>
                                        <div class="condition-note-icon" style="top:-30px;">
                                            <img src="./static/images/condition-prompt.png" alt="">
                                            <!-- <div class="condition-note-triangle"></div>
                                            <div class="condition-note-content">
                                              提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                            </div> -->
                                        </div>
                                    </div>
                                    <?php if($write_step <= $step){?>
                                        <div contenteditable="true" id="other_work_experience" style="width: 489px;padding:8px;height: 181px;border:1px solid rgba(216,216,216,1);background: #fff;"><?=$signup->other_work_experience?></div>
                                    <?php }else{?>
                                        ：<div><?=$signup->other_work_experience?></div>
                                    <?php }?>

                                </div>
                            </div>

                            <?php if($write_step <= $step){?>
                                <div class="condition-person-branch8">
                                    <div class="condition-person-btn1" id="save">保存</div>
                                    <div class="condition-person-btn2" id="next">保存并下一步</div>
                                </div>


                                <script>
                                    <?php $this->beginBlock('signup') ?>
                                    $(document).ready(function(){
                                        $("#save").click(function(){
                                            saveData()
                                        });

                                        $("#next").click(function(){
                                            saveData(true)
                                        });
                                    });
                                    function saveData(next=false){
                                        let data = {};
                                        data.academy_id = $("#academy").val();
                                        data.fulltime_work_life = $.trim($('#fulltime_work_life').val());
                                        if(data.fulltime_work_life === ''){
                                            $('#fulltime_work_life').focus();
                                            return false;
                                        }
                                        data.management_work_life = $.trim($('#management_work_life').val());
                                        if(data.management_work_life === ''){
                                            $('#management_work_life').focus();
                                            return false;
                                        }
                                        data.chinese_company_name = $.trim($('#chinese_company_name').val());
                                        if(data.chinese_company_name === ''){
                                            $('#chinese_company_name').focus();
                                            return false;
                                        }
                                        data.english_company_name = $.trim($('#english_company_name').val());
                                        if(data.english_company_name === ''){
                                            $('#english_company_name').focus();
                                            return false;
                                        }
                                        data.turnover_year = $.trim($('#turnover_year').text());
                                        if(data.turnover_year === ''){
                                            $('#turnover_year').focus();
                                            return false;
                                        }
                                        data.company_size = $.trim($('#company_size').val());
                                        if(data.company_size === ''){
                                            $('#company_size').focus();
                                            return false;
                                        }
                                        data.main_business = $.trim($('#main_business').val());
                                        if(data.main_business === ''){
                                            $('#main_business').focus();
                                            return false;
                                        }
                                        data.Industry_category = $.trim($('#Industry_category').text());
                                        if(data.Industry_category === ''){
                                            $('#Industry_category').focus();
                                            return false;
                                        }
                                        data.company_nature = $.trim($('#company_nature').text());
                                        if(data.company_nature === ''){
                                            $('#company_nature').focus();
                                            return false;
                                        }
                                        data.post_type = $.trim($('#post_type').text());
                                        if(data.post_type === ''){
                                            $('#post_type').focus();
                                            return false;
                                        }
                                        data.work_department = $.trim($('#work_department').val());
                                        if(data.work_department === ''){
                                            $('#work_department').focus();
                                            return false;
                                        }
                                        data.work_position = $.trim($('#work_position').val());
                                        if(data.work_position === ''){
                                            $('#work_position').focus();
                                            return false;
                                        }
                                        data.work_function1 = $.trim($('#work_function1').text());
                                        if(data.work_function1 === ''){
                                            $('#work_function1').focus();
                                            return false;
                                        }
                                        data.work_function2 = $.trim($('#work_function2').text());
                                        if(data.work_function2 === ''){
                                            $('#work_function2').focus();
                                            return false;
                                        }
                                        data.scale_responsible = $.trim($('#scale_responsible').val());
                                        if(data.scale_responsible === ''){
                                            $('#scale_responsible').focus();
                                            return false;
                                        }
                                        data.work_starttime = $.trim($('#work_starttime').val());
                                        if(data.work_starttime === ''){
                                            $('#work_starttime').focus();
                                            return false;
                                        }
                                        data.annual_income = $.trim($('#annual_income').val());
                                        if(data.annual_income === ''){
                                            $('#annual_income').focus();
                                            return false;
                                        }
                                        data.annual_income_start = $.trim($('#annual_income_start').val());
                                        if(data.annual_income_start === ''){
                                            $('#annual_income_start').focus();
                                            return false;
                                        }
                                        data.management_number = $.trim($('#management_number').val());
                                        if(data.management_number === ''){
                                            $('#management_number').focus();
                                            return false;
                                        }
                                        data.position_situation = $.trim($('#position_situation').text());
                                        if(data.position_situation === ''){
                                            $('#position_situation').focus();
                                            return false;
                                        }
                                        data.superior_name = $.trim($('#superior_name').val());
                                        if(data.superior_name === ''){
                                            $('#superior_name').focus();
                                            return false;
                                        }
                                        data.superior_post = $.trim($('#superior_post').val());
                                        if(data.superior_post === ''){
                                            $('#superior_post').focus();
                                            return false;
                                        }
                                        data.superior_phone = $.trim($('#superior_phone').val());
                                        if(data.superior_phone === ''){
                                            $('#superior_phone').focus();
                                            return false;
                                        }
                                        data.agree_contact_suoerior = $.trim($(":radio[name^='agree_contact_suoerior']:checked").val());
                                        data.other_work_experience = $.trim($('#other_work_experience').text());
                                        if(data.other_work_experience === ''){
                                            $('#other_work_experience').focus();
                                            return false;
                                        }

                                        data.step = 3;
                                        //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
                                        $.post("<?=Url::toRoute(['member/signup'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                                            //layer.close(index);
                                            if(data.code===1001){
                                                layer.msg(data.msg,{icon:1,time:1000},function(){
                                                    if(next){
                                                        window.location.href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>4],$this->context::$domain)?>";
                                                    }
                                                });
                                            }else{
                                                layer.msg(data.msg,{icon:2});
                                            }
                                        },'json');
                                    }
                                    <?php $this->endBlock(); ?>
                                </script>
                                <?php $this->registerJs($this->blocks['signup'],\yii\web\View::POS_END);?>
                            <?php }?>
                        </div>
                    </div>
                <?php }else if($step == 4){?>
                    <div class="condition-person ">
                        <div class="page-title">上传附件</div>
                        <div class="page-content">

                            <div class="item-upload">
                                <div class="item-upload-title"><span class="icon-must">*</span> 身份证（正面）</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('card_front','身份证（正面）')">
                                        <img src="<?php if($signup->card_front != ''){echo $signup->card_front;}else{echo 'static/images/icon-id-front.png';}?>" alt="身份证（正面）" id="img_card_front">
                                    </a>
                                    <input type="hidden" name="card_front" id="card_front" value="<?=$signup->card_front?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('card_front',this,4001,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="身份证（正面）">?</div>
                                        <div class="question-popup">
                                            请上传身份证（正面）
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="item-upload">
                                <div class="item-upload-title">
                                    <span class="icon-must">*</span> 身份证（反面）</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('card_back','身份证（反面）')">
                                        <img src="<?php if($signup->card_back != ''){echo $signup->card_back;}else{echo 'static/images/icon-id-back.png';}?>" alt="身份证（正面）" id="img_card_back">
                                    </a>
                                    <input type="hidden" name="card_back" id="card_back" value="<?=$signup->card_back?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('card_back',this,4002,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="身份证（反面）">?</div>
                                        <div class="question-popup">
                                            请上传身份证（反面）
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="item-upload">
                                <div class="item-upload-title">
                                    <span class="icon-must">*</span> 本科毕业证扫描件</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('diploma_scan','本科毕业证扫描件')">
                                        <img src="<?php if($signup->diploma_scan != ''){echo $signup->diploma_scan;}else{echo 'static/images/icon-file.png';}?>" alt="本科毕业证扫描件" id="img_diploma_scan">
                                    </a>
                                    <input type="hidden" name="diploma_scan" id="diploma_scan" value="<?=$signup->diploma_scan?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <span>点击上传</span>
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('diploma_scan',this,4003,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="本科毕业证扫描件">?</div>
                                        <div class="question-popup">
                                            请上传本科毕业证扫描件
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="item-upload">
                                <div class="item-upload-title">研究生毕业证扫描件</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('postgraduate_diploma_scan','研究生毕业证扫描件')">
                                        <img src="<?php if($signup->postgraduate_diploma_scan != ''){echo $signup->postgraduate_diploma_scan;}else{echo 'static/images/icon-file.png';}?>" alt="本科毕业证扫描件" id="img_postgraduate_diploma_scan">
                                    </a>
                                    <input type="hidden" name="postgraduate_diploma_scan" id="postgraduate_diploma_scan" value="<?=$signup->postgraduate_diploma_scan?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('postgraduate_diploma_scan',this,4005,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="研究生毕业证扫描件">?</div>
                                        <div class="question-popup">
                                            请上传研究生毕业证扫描件
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="item-upload">
                                <div class="item-upload-title">
                                    <span class="icon-must">*</span>本科阶段成绩单<br>（需学校教务处盖章）
                                </div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('report_card','本科阶段成绩单')">
                                        <img src="<?php if($signup->report_card != ''){echo $signup->report_card;}else{echo 'static/images/icon-stamp.png';}?>" alt="本科毕业证扫描件" id="img_report_card">
                                    </a>
                                    <input type="hidden" name="report_card" id="report_card" value="<?=$signup->report_card?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('report_card',this,4007,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="本科阶段成绩单">?</div>
                                        <div class="question-popup">
                                            请上传本科阶段成绩单
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="item-upload">
                                <div class="item-upload-title">
                                    <span class="icon-must">*</span> 研究生毕业证扫描件<br>（需学校教务处盖章）
                                </div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('postgraduate_report_card','研究生阶段成绩单')">
                                        <img src="<?php if($signup->postgraduate_report_card != ''){echo $signup->postgraduate_report_card;}else{echo 'static/images/icon-stamp.png';}?>" alt="研究生毕业证扫描件" id="img_postgraduate_report_card">
                                    </a>
                                    <input type="hidden" name="postgraduate_report_card" id="postgraduate_report_card" value="<?=$signup->postgraduate_report_card?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('postgraduate_report_card',this,4008,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="研究生毕业证扫描件">?</div>
                                        <div class="question-popup">
                                            请上传研究生毕业证扫描件
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="item-upload">
                                <div class="item-upload-title"><span class="icon-must">*</span>个人简历（中文）</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "alowload('resume_chinese','个人简历（中文）')">
                                        <img src="<?php echo 'static/images/icon-resume.png';?>" alt="个人简历（中文）">
                                    </a>
                                    <input type="hidden" name="resume_chinese" id="resume_chinese" value="<?=$signup->resume_chinese?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('resume_chinese',this,4009,'<?=Url::toRoute(['api/upload','type'=>'file'],$this->context::$domain)?>','file')">点击上传</a>
                                        <div class="icon-question-mark" title="个人简历（中文）">?</div>
                                        <div class="question-popup">
                                            请上传个人简历（中文）
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="item-upload">
                                <div class="item-upload-title">
                                    个人简历（英文）
                                </div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "alowload('resume_english','个人简历（英文）')">
                                        <img src="<?php echo 'static/images/icon-resume.png';?>" alt="个人简历（英文）">
                                    </a>
                                    <input type="hidden" name="resume_english" id="resume_english" value="<?=$signup->resume_english?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('resume_english',this,4011,'<?=Url::toRoute(['api/upload','type'=>'file'],$this->context::$domain)?>','file')">点击上传</a>
                                        <div class="icon-question-mark" title="个人简历（英文）">?</div>
                                        <div class="question-popup">
                                            请上传个人简历（英文）
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="item-upload">
                                <div class="item-upload-title"><span class="icon-must">*</span>所在单位组织结构图</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "preview('company_organization_chart','所在单位组织结构图')">
                                        <img src="<?php if($signup->company_organization_chart != ''){echo $signup->company_organization_chart;}else{echo 'static/images/icon-structure.png';}?>" alt="所在单位组织结构图" id="img_company_organization_chart">
                                    </a>
                                    <input type="hidden" name="company_organization_chart" id="company_organization_chart" value="<?=$signup->company_organization_chart?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('company_organization_chart',this,4010,'<?=Url::toRoute(['api/upload'],$this->context::$domain)?>')">点击上传</a>
                                        <div class="icon-question-mark" title="所在单位组织结构图">?</div>
                                        <div class="question-popup">
                                            请上传所在单位组织结构图
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="item-upload">
                                <div class="item-upload-title">
                                    英文申请短文
                                </div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "alowload('english_essays','英文申请短文')">
                                        <img src="<?php echo 'static/images/icon-structure.png';?>" alt="英文申请短文">
                                    </a>
                                    <input type="hidden" name="english_essays" id="english_essays" value="<?=$signup->english_essays?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('english_essays',this,4012,'<?=Url::toRoute(['api/upload','type'=>'file'],$this->context::$domain)?>','file')">点击上传</a>
                                        <div class="icon-question-mark" title="英文申请短文">?</div>
                                        <div class="question-popup">
                                            请上传英文申请短文
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="item-upload" style="margin-right:300px;">
                                <div class="item-upload-title">个人附加材料</div>
                                <div class="item-upload-img">
                                    <a href="javascript:void(0);" onclick = "alowload('additional_material','个人附加材料')">
                                        <img src="<?php echo 'static/images/icon-appendix.png';?>" alt="个人附加材料">
                                    </a>
                                    <input type="hidden" name="additional_material" id="additional_material" value="<?=$signup->additional_material?>"/>
                                </div>
                                <div class="item-upload-btn">
                                    <?php if($write_step <= $step){?>
                                        <a href="javascript:void(0);" onclick = "upload('additional_material',this,4013,'<?=Url::toRoute(['api/upload','type'=>'file'],$this->context::$domain)?>','file')">点击上传</a>
                                        <div class="icon-question-mark" title="个人附加材料">?</div>
                                        <div class="question-popup">
                                            请上传个人附加材料
                                            <s class="triangle">
                                                <s class="triangle inner-triangle"></s>
                                            </s>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="clear"></div>


                            <?php if($write_step <= $step){?>
                                <div class="condition-person-branch8">
                                    <div class="condition-person-btn1" id="save">保存</div>
                                    <div class="condition-person-btn2" id="next">保存并下一步</div>
                                </div>


                                <script>
                                    <?php $this->beginBlock('signup') ?>
                                    $(document).ready(function(){
                                        $("#save").click(function(){
                                            saveData()
                                        });

                                        $("#next").click(function(){
                                            saveData(true)
                                        });

                                    });
                                    function saveData(next=false) {
                                        let data = {};
                                        data.academy_id = $("#academy").val();
                                        data.card_front = $("#card_front").val();
                                        if(!data.card_front){
                                            layer.msg('请上传身份证（正面）',{icon:2});
                                            return false;
                                        }
                                        data.card_back = $("#card_back").val();
                                        if(!data.card_back){
                                            layer.msg('请上传身份证（反面）',{icon:2});
                                            return false;
                                        }
                                        data.diploma_scan = $("#diploma_scan").val();
                                        if(!data.diploma_scan){
                                            layer.msg('请上传本科毕业证扫描件',{icon:2});
                                            return false;
                                        }
                                        data.postgraduate_diploma_scan = $("#postgraduate_diploma_scan").val();
                                        if(!data.postgraduate_diploma_scan){
                                            layer.msg('请上传研究生毕业证扫描件',{icon:2});
                                            return false;
                                        }
                                        data.report_card = $("#report_card").val();
                                        if(!data.report_card){
                                            layer.msg('请上传本科阶段成绩单',{icon:2});
                                            return false;
                                        }
                                        data.postgraduate_report_card = $("#postgraduate_report_card").val();
                                        if(!data.postgraduate_report_card){
                                            layer.msg('请上传研究生阶段成绩单',{icon:2});
                                            return false;
                                        }
                                        data.resume_chinese = $("#resume_chinese").val();
                                        if(!data.resume_chinese){
                                            layer.msg('请上传个人简历（中文）',{icon:2});
                                            return false;
                                        }
                                        data.company_organization_chart = $("#company_organization_chart").val();
                                        if(!data.company_organization_chart){
                                            layer.msg('请上传所在单位组织结构图',{icon:2});
                                            return false;
                                        }
                                        data.resume_english = $("#resume_english").val();
                                        if(!data.resume_english){
                                            layer.msg('请上传个人简历（英文）',{icon:2});
                                            return false;
                                        }
                                        data.english_essays = $("#english_essays").val();
                                        if(!data.english_essays){
                                            layer.msg('请上传英文申请短文',{icon:2});
                                            return false;
                                        }
                                        data.additional_material = $("#additional_material").val();
                                        if(!data.additional_material){
                                            layer.msg('请上传个人附加材料',{icon:2});
                                            return false;
                                        }
                                        data.step = 4;
                                        //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
                                        $.post("<?=Url::toRoute(['member/signup'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                                            //layer.close(index);
                                            if(data.code===1001){
                                                layer.msg(data.msg,{icon:1,time:1000},function(){
                                                    if(next){
                                                        window.location.href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>5],$this->context::$domain)?>";
                                                    }
                                                });
                                            }else{
                                                layer.msg(data.msg,{icon:2});
                                            }
                                        },'json');
                                    }
                                    <?php $this->endBlock(); ?>
                                </script>
                                <?php $this->registerJs($this->blocks['signup'],\yii\web\View::POS_END);?>
                            <?php }?>
                        </div>
                    </div>

                <?php }else if($step == 5){?>

                    <style>
                        .condition-right-triangle {
                            top: 182px;
                        }
                        .condition-introduce{
                            width:700px;
                            font-size:18px;
                            margin:0 auto;
                        }
                        .condition-introduce-textarea{
                            width:100%;
                            height:498px;
                            margin:12px auto 49px;
                            font-size:18px;
                            word-break:break-all;
                            resize:none;
                            padding:15px;
                        }
                    </style>



                    <div class="condition-person">
                        <div class="condition-title">自述短文</div>
                        <div class="condition-introduce">
                            <div class="condition-introduce-title">
                                <label for="answer_1" id="question_1"><?=$signup->question_1?></label>
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            </div>
                            <?php if($write_step <= $step){?>
                                <textarea name="answer_1" id="answer_1" class="condition-introduce-textarea"><?=$signup->answer_1?></textarea>
                            <?php }else{?>
                                <div style="border:1px solid #ccc;padding:15px;margin:15px 0;"><?=$signup->answer_1?></div>
                            <?php }?>
                            <div class="condition-introduce-title">
                                <label for="answer_2" id="question_2"><?=$signup->question_2?></label>
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            </div>
                            <?php if($write_step <= $step){?>
                                <textarea name="answer_2" id="answer_2" class="condition-introduce-textarea"><?=$signup->answer_2?></textarea>
                            <?php }else{?>
                                <div style="border:1px solid #ccc;padding:15px;margin:15px 0;"><?=$signup->answer_2?></div>
                            <?php }?>
                            <div class="condition-introduce-title">
                                <label for="answer_3" id="question_3"><?=$signup->question_3?></label>
                                <div class="condition-note-icon">
                                    <img src="./static/images/condition-prompt.png" alt="">
                                    <!-- <div class="condition-note-triangle"></div>
                                    <div class="condition-note-content">
                                      提示信息提示信息提 示信息提示信息提示信息提示信息提示信息
                                    </div> -->
                                </div>
                            </div>
                            <?php if($write_step <= $step){?>
                                <textarea name="answer_3" id="answer_3" class="condition-introduce-textarea"><?=$signup->answer_3?></textarea>
                            <?php }else{?>
                                <div style="border:1px solid #ccc;padding:15px;margin:15px 0;"><?=$signup->answer_3?></div>
                            <?php }?>
                        </div>
                        <?php if($write_step <= $step){?>
                            <div class="condition-person-branch8">
                                <div class="condition-person-btn1" id="save">保存</div>
                                <div class="condition-person-btn2" id="next">保存并下一步</div>
                            </div>


                            <script>
                                <?php $this->beginBlock('signup') ?>
                                $(document).ready(function(){
                                    $("#save").click(function(){
                                        saveData()
                                    });

                                    $("#next").click(function(){
                                        saveData(true)
                                    });
                                })

                                function saveData(next=false){
                                    let data = {};
                                    data.academy_id = $("#academy").val();
                                    data.question_1 = $("#question_1").text();
                                    data.answer_1 = $.trim($('#answer_1').val());
                                    if(data.answer_1 === ''){
                                        layer.msg('请回答问题1',{icon:2});
                                        return false;
                                    }
                                    data.question_2 = $("#question_2").text();
                                    data.answer_2 = $.trim($('#answer_2').val());
                                    if(data.answer_2 === ''){
                                        layer.msg('请回答问题2',{icon:2});
                                        return false;
                                    }
                                    data.question_3 = $("#question_3").text();
                                    data.answer_3 = $.trim($('#answer_3').val());
                                    if(data.answer_3 === ''){
                                        layer.msg('请回答问题3',{icon:2});
                                        return false;
                                    }
                                    data.step = 5;
                                    //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
                                    $.post("<?=Url::toRoute(['member/signup'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                                        //layer.close(index);
                                        if(data.code===1001){
                                            layer.msg(data.msg,{icon:1,time:1000},function(){
                                                if(next){
                                                    window.location.href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy'),'step'=>6],$this->context::$domain)?>";
                                                }
                                            });
                                        }else{
                                            layer.msg(data.msg,{icon:2});
                                        }
                                    },'json');
                                }
                                <?php $this->endBlock(); ?>
                            </script>
                            <?php $this->registerJs($this->blocks['signup'],\yii\web\View::POS_END);?>
                        <?php }?>
                    </div>
                <?php }else if($step == 6){?>

                    <style>
                        .condition-right-triangle {
                            top: 224px;
                        }
                        .condition-submit-content{
                            width:710px;
                            color:#424E5C;
                            word-wrap: break-word;
                            text-align: justify;
                            margin:60px auto 30px;
                            background:#fff;
                            border:1px solid #999;
                        }
                        .condition-submit-content-text1{
                            font-size:28px;
                            font-weight:bold;
                        }
                        .condition-submit-content-text2{
                            font-size:24px;
                            padding:6px 0 40px;
                        }
                        .condition-submit-check{
                            font-size:20px;
                            color:#424E5C;
                            margin:0 0 67px 335px;
                        }
                        .condition-submit-check span{
                            color:#D0021B;
                        }
                        .condition-submit-checkbox{
                            width:16px;
                            height:16px;
                            -webkit-appearance: checkbox;
                        }
                    </style>


                    <div class="condition-person">
                        <div class="condition-title" style="font-size:36px;">确认提交</div>
                        <div class="condition-submit-content">
                            <p class="condition-submit-content-text1">
                                正常提交申请前请注意
                            </p>
                            <p class="condition-submit-content-text2">
                                1、 本人明白此申请表及所附文件将作为申请北京大学汇丰商学院MBA背景评估和面试的参考依据，一旦被录取，有关资料将作为学生档案留存。<br/>
                                2、 所有书面申请材料概不退还。<br/>
                                3、 在您提交材料后请您留存一份电子版文档，以备再次申请或者遇到特殊情况时使用。
                            </p>
                            <p class="condition-submit-content-text1">
                                申请材料真实性声明
                            </p>
                            <p class="condition-submit-content-text2">
                                我自愿申请北京大学汇丰商学院工商管理硕士（MBA）。我了解所有提交的材料（包括本份申请材料、网上信息和所有相关证明材料）需经过北京大学的审查。我确认所提交的材料内容真实、准确、完整，面试申请书内填写的信息与通过在线申请系统提交的信息一致。我知晓所提供的材料中如果有任何不实都可能导致本次及今后申请的失败，也知晓材料不实的情况会被通报给其他与北大合作的MBA考生诚信问题合作院校。
                            </p>
                            <p class="condition-submit-content-text1">
                                违纪处罚
                            </p>
                            <p class="condition-submit-content-text2">
                                在考生报考过程中，北大汇丰MBA项目会持续进行考生诚信调查，如发现考生在报考过程中有任何不诚信的行为，将直接取消其申请资格，或取消已取得的成绩和资格，并将结果通报诚信合作院校联盟。<br/>
                                如发现考生有申报虚假材料、考试作弊以及其他违反考试纪律的行为，我校将通知其所在单位，并按教育部《国家教育考试违规处理办法》进行严肃处理。
                            </p>
                            <p class="condition-submit-content-text1">
                                声明
                            </p>
                            <p class="condition-submit-content-text2" style="padding-bottom:0;">
                                北京大学汇丰商学院MBA招生工作由北京大学汇丰商学院MBA项目办公室独立完成，在招生过程的所有环节，从未与任何机构合作，也从未委托任何机构举办相关培训。特此提醒申请人，对于其他任何单位或个人在商业活动中提供的涉及北京大学汇丰商学院MBA招生的任何宣传信息，请不要轻信，以免上当受骗。
                            </p>
                        </div>
                        <?php if($write_step <= $step){?>
                            <div class="condition-submit-check">
                                <span>*</span>
                                <input type="checkbox" value="1" name="consent" id="consent" class="condition-submit-checkbox">
                                <label for="consent">我已经阅读并认可<span>（*真实性声明）</span></label>
                            </div>
                            <div class="condition-person-branch8">
                                <div class="condition-person-btn1" id="next">确认提交</div>
                            </div>
                            <script>
                                <?php $this->beginBlock('signup') ?>
                                $(document).ready(function(){
                                    $("#next").click(function(){
                                        saveData()
                                    });
                                })

                                function saveData(){
                                    let data = {};
                                    data.academy_id = $("#academy").val();
                                    data.consent = $("#consent:checked").val();
                                    if(data.consent === '1'){
                                        data.interview_batch = '默认';
                                        data.step = 6;
                                        layer.confirm('确定要提交吗，提交后不可修改？', {title:'提示',
                                            btn: ['提交','取消']
                                        }, function(){
                                            //let index = layer.msg('正在保存，请稍候',{icon: 16,time:false});
                                            $.post("<?=Url::toRoute(['member/signup'],$this->context::$domain)?>",{data:data,'_csrf-frontend':'<?= Yii::$app->request->csrfToken ?>'},function(data,st){
                                                //layer.close(index);
                                                if(data.code===1001){
                                                    layer.msg(data.msg,{icon:1,time:1000},function(){
                                                        window.location.href="<?=Url::toRoute(['member/signup','academy'=>Yii::$app->request->get('academy')],$this->context::$domain)?>";
                                                    });
                                                }else{
                                                    layer.msg(data.msg,{icon:2});
                                                }
                                            },'json');
                                        }, function(){});
                                    }else{
                                        layer.msg('请先阅读并认可真实性声明',{icon:2});
                                        return false;
                                    }
                                }
                                <?php $this->endBlock(); ?>
                            </script>
                            <?php $this->registerJs($this->blocks['signup'],\yii\web\View::POS_END);?>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>