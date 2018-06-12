<?php
use yii\helpers\Url;
$this->title = '个人中心 - ' . Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>
<div class="container">
    <div class="main">
        <!--个人信息-->
        <?php if(Yii::$app->session->has('member') && $member){?>
            <div class="Personal-Info apply">
                <div>
                    <div class="left">
                        <h2>个人信息</h2>
                        <p>Personal Information</p>
                    </div>
                    <a href="<?=Url::toRoute(['member/logout'],$this->context::$domain)?>" class="right exit">
                        退出登录
                    </a>
                    <div style="clear:both;"></div>
                </div>
                <div class="Person-con user-not">
                    <div class="change">
                        <a href="<?=Url::toRoute(['member/info'],$this->context::$domain)?>">
                            <img src="static/images/change.png" alt=""/>
                        </a>
                        <!--<span>修改</span>-->
                    </div>
                    <img src="<?=$member->avatar?$member->avatar:'static/images/modify.png';?>" class="left user"/>
                    <div class="xinxi left">
                        <div class="name">
                            <span>姓名:&nbsp;&nbsp;</span>
                            <span><?=$member->real_name?></span>
                        </div>
                        <div class="name tel">
                            <span>手机号:&nbsp;&nbsp;</span>
                            <span><?=$member->phone?></span>
                        </div>
                        <div class="name tel">
                            <span>邮箱:&nbsp;&nbsp;</span>
                            <span><?=$member->email?></span>
                        </div>
                    </div>
                    <a href="<?=Url::toRoute(['member/email'],$this->context::$domain)?>" target="_blank"><img src="static/images/email.png" alt="" class="right email"/></a>
                    <div class="vertical right"></div>

                    <?php if($member->real_name=='' || $member->email==''){?>
                        <div class="float" onclick="$(this).css('display','none')">
                            <div class="float-message name">
                                <span>姓名：</span>
                                <span class="no">未设置</span>
                            </div>
                            <div class="float-message email">
                                <span>邮箱：</span>
                                <span class="no">未设置</span>
                            </div>
                            <div class="float-change">
                                <img src="static/images/change.png" alt=""/>
                            </div>
                            <img src="static/images/name-line.png" alt="" class="name-line"/>
                            <img src="static/images/email-line.png" alt="" class="email-line"/>
                            <p>请在编辑个人信息页面中 填写常用邮箱</p>
                        </div>
                    <?php }?>
                </div>
            </div>
        <?php }else{ ?>
            <div class="Personal-Info">
                <h2>个人信息</h2>
                <p>Personal-Information</p>
                <div class="no-login">
        <span class="remind">
          Whoops！您还未登录
        </span>
                    <span class="login login-pop">
          立即登录
        </span>
                </div>
            </div>
        <?php } ?>

        <?php if(Yii::$app->session->has('member')){?>
            <?php if($signup){ ?>
                <div class="Personal-Info apply apply-process" style="background:none;padding:0;">
                    <div>
                        <div class="left">
                            <h2>我的申请</h2>
                            <p>My Application</p>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="Person-con apply-con">
                        <h3>南方大学</h3>
                        <h6>National University of Singapore</h6>
                        <div class="process-con">
                            <?php if($signup->status > 0){?>
                                <div class="seccess-green left">
                                    <div class="process-con-div seccess-con">1</div>
                                    <p class="process-p">提交材料</p>
                                </div>
                                <div class="process-icon left seccess-icon"></div>
                            <?php }else{ ?>
                                <div class="seccess-red left">
                                    <div class="process-con-div error-con">1</div>
                                    <p class="process-p">提交材料</p>
                                </div>
                                <div class="process-icon left error-icon"></div>
                            <?php }?>


                            <?php if($signup->status <= 0 ){?>
                                <div class="wait-gray left">
                                    <div class="process-con-div wait-con">2</div>
                                    <p class="process-p">材料审核</p>
                                </div>
                                <div class="process-icon left not-icon"></div>
                            <?php }else if($signup->status > 0 && $signup->status < 7){?>
                                <div class="error-red left">
                                    <div class="process-con-div error-con now">2</div>
                                    <p class="process-p">材料审核</p>
                                </div>
                                <div class="process-icon left error-icon"></div>
                            <?php }else if($signup->status >= 7){ ?>
                                <div class="seccess-green left">
                                    <div class="process-con-div seccess-con">2</div>
                                    <p class="process-p">材料审核</p>
                                </div>
                                <div class="process-icon left seccess-icon"></div>
                            <?php }?>

                            <?php if($signup->status < 7){ ?>
                                <div class="wait-gray left">
                                    <div class="process-con-div wait-con">3</div>
                                    <p class="process-p">发放offer</p>
                                </div>
                                <div class="process-icon left not-icon"></div>
                            <?php }else if($signup->status >= 7 && $signup->status < 8){ ?>
                                <div class="error-red left">
                                    <div class="process-con-div error-con">3</div>
                                    <p class="process-p">发放offer</p>
                                </div>
                                <div class="process-icon left error-icon"></div>
                            <?php }else if($signup->status >= 8){ ?>
                                <div class="seccess-green left">
                                    <div class="process-con-div seccess-con">3</div>
                                    <p class="process-p">发放offer</p>
                                </div>
                                <div class="process-icon left seccess-icon"></div>
                            <?php }?>



                            <?php if($signup->status < 8){ ?>
                                <div class="wait-gray left">
                                    <div class="process-con-div wait-con">4</div>
                                    <p class="process-p">缴费</p>
                                </div>
                            <?php }else if($signup->status >= 8 && $signup->status < 9){ ?>
                                <div class="error-red left">
                                    <div class="process-con-div error-con">4</div>
                                    <p class="process-p">缴费</p>
                                </div>
                            <?php }else if($signup->status >= 9){ ?>
                                <div class="seccess-green left">
                                    <div class="process-con-div seccess-con">4</div>
                                    <p class="process-p">缴费</p>
                                </div>
                            <?php }?>

                        </div>

                        <div class="result">

                            <?php if($signup->status == 0){?>
                                <div class="process-result process-result-message">
                                    <a href="<?=Url::toRoute(['member/signup','step'=>1],$this->context::$domain)?>">
                                        <?php if(strpos($signup->signup_step,'1') !== false){?>
                                            <div class="result-con left">
                                                <img src="static/images/process-success.png" alt=""/>
                                                <p>个人信息</p>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="result-con left">
                                                <img src="static/images/process-error.png" alt=""/>
                                                <p>个人信息</p>
                                            </div>
                                        <?php } ?>
                                    </a>


                                    <a href="<?=Url::toRoute(['member/signup','step'=>2],$this->context::$domain)?>">
                                        <?php if(strpos($signup->signup_step,'2') !== false){?>
                                            <div class="result-con left">
                                                <img src="static/images/process-success.png" alt=""/>
                                                <p>教育背景</p>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="result-con left">
                                                <img src="static/images/process-error.png" alt=""/>
                                                <p>教育背景</p>
                                            </div>
                                        <?php } ?>
                                    </a>

                                    <a href="<?=Url::toRoute(['member/signup','step'=>3],$this->context::$domain)?>">
                                        <?php if(strpos($signup->signup_step,'3') !== false){?>
                                            <div class="result-con left">
                                                <img src="static/images/process-success.png" alt=""/>
                                                <p>工作经历</p>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="result-con left">
                                                <img src="static/images/process-error.png" alt=""/>
                                                <p>工作经历</p>
                                            </div>
                                        <?php } ?>
                                    </a>

                                    <a href="<?=Url::toRoute(['member/signup','step'=>4],$this->context::$domain)?>">
                                        <?php if(strpos($signup->signup_step,'4') !== false){?>
                                            <div class="result-con left">
                                                <img src="static/images/process-success.png" alt=""/>
                                                <p>文件上传</p>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="result-con left">
                                                <img src="static/images/process-error.png" alt=""/>
                                                <p>文件上传</p>
                                            </div>
                                        <?php } ?>
                                    </a>

                                    <a href="<?=Url::toRoute(['member/signup','step'=>5],$this->context::$domain)?>">
                                        <?php if(strpos($signup->signup_step,'5') !== false){?>
                                            <div class="result-con left">
                                                <img src="static/images/process-success.png" alt=""/>
                                                <p>自述短文</p>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="result-con left">
                                                <img src="static/images/process-error.png" alt=""/>
                                                <p>自述短文</p>
                                            </div>
                                        <?php } ?>
                                    </a>

                                    <a href="<?=Url::toRoute(['member/signup','step'=>6],$this->context::$domain)?>">
                                        <?php if(strpos($signup->signup_step,'6') !== false){?>
                                            <div class="result-con left">
                                                <img src="static/images/process-success.png" alt=""/>
                                                <p>确认提交</p>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="result-con left">
                                                <img src="static/images/process-error.png" alt=""/>
                                                <p>确认提交</p>
                                            </div>
                                        <?php } ?>
                                    </a>

                                </div>
                            <?php } ?>
                            <?php if($signup->status > 0 && $signup->status < 7){?>
                                <?php if($signup->status_reason != ''){?>
                                    <div class="process-result process-result-data">
                                        <h1>很抱歉,您的材料未能通过审核！</h1>
                                        <div class="result-data-con">
                                            <p class="left">具体原因如下：&nbsp; </p>
                                            <p class="left">
                                                <?=$signup->status_reason?>
                                            </p>
                                            <div style="clear:both;"></div>
                                        </div>
                                        <a href="<?=Url::toRoute(['member/signup','step'=>$signup->status],$this->context::$domain)?>" class="result-data-btn">
                                            重新提交
                                        </a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="process-result process-result-data">
                                        <h1>您的申请正在审核！</h1>
                                        <p>请耐心等待</p>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <?php if($signup->status >= 7 && $signup->status < 8){?>
                                <div class="process-result process-result-offer">
                                    <h1>您的申请已经通过审核！</h1>
                                    <p>稍后会将offer发至您的邮箱，请耐心等候</p>
                                </div>
                            <?php } ?>

                            <?php if($signup->status >= 8 && $signup->status < 9){?>
                                <div class="process-result process-result-offer">
                                    <h1>请联系线下人员缴纳学费</h1>
                                </div>
                            <?php } ?>


                            <?php if($signup->status >= 9){?>
                                <div class="process-result process-result-fee">
                                    <p>您已缴费成功！</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php }else{ ?>
				<div class="Personal-Info apply ">
					<h2>我的申请</h2>
					<p>My Application</p>
					<div class="no-login">
				<span class="remind">
				  还没有申请
				</span>
					<a class="login" href="<?=Url::toRoute(['member/signup'],$this->context::$domain)?>">立即申请</a>
				</div>
				</div>
            <?php } ?>
        <?php }else{ ?>
        <!--我的申请-->
        <div class="Personal-Info apply ">
            <h2>我的申请</h2>
            <p>My Application</p>
            <div class="no-login">
        <span class="remind">
          请登录后查看
        </span>
                <span class="login login-pop">
          立即登录
        </span>
            </div>
        </div>
    </div>
    <?php } ?>
</div>