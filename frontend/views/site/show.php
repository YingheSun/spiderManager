<?php
use yii\helpers\Url;
$this->title = '首页 - ' . Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>
<div class="container" style="background:#fff;">
    <div class="school-header box">
        <div class="school-title">
            南方大学
        </div>
        <div class="school-title-en">
            National Univercity of Sinapore
        </div>
        <?php if(Yii::$app->session->has('member')){?>
            <a href="<?=Url::toRoute(['member/signup'],$this->context::$domain)?>">立即申请</a>
        <?php }else{ ?>
            <a class="login-pop" href="javascript:void(0);">立即申请</a>
        <?php } ?>
    </div>
    <div class="top-pic box">
        <img src="static/images/school-top-banner.jpg" alt="">
    </div>
    <div class="school-introduction box">
        <div class="school-introduction-title">
            学校介绍
            <span class="en">/ School Introduction</span>
        </div>
        <div class="school-introduction-content">
            <p><span class="school-table1">学校全称：</span><span class="school-table2">南方大学</span></p>
            <p><span class="school-table1">英文名：</span><span class="school-table2">South University </span></p>
            <p><span class="school-table1">学校官网：</span><span class="school-table2">https://www.southuniversity.edu/ </span></p>
            <p><span class="school-table1">所属国家：</span><span class="school-table2">美国 </span></p>
            <p><span class="school-table1">学校排名：</span><span class="school-table2">US News 2018排名 全美南部大学第114名，有截图</span></p>
            <p><span class="school-table1">学校介绍：</span><span class="school-table2">中国教育部认证，涉外监管信息网可查，有截图</span><br/><span style="padding-left: 55px;"> 美国Southern Association of Colleges and Schools Commission on Colleges认证，官网可查，有截图</span></p>
            <p><span class="school-table1">学校全称：</span><span class="school-table2">南方大学建校于1899年，百年美国南部名校。为学生提供博士、硕士、本科、专科课程。<br/> 该校从乔治亚州萨凡纳的主校区扩展到全美其他11个校区，并于2004年开始提供在线课程。百分之五十二的南方大学生完全在线学习。 </span></p>
        </div>
    </div>
    <div class="school-auth box">
        <div class="school-auth-title">
            认证机构
            <span class="en">/ Certification Body</span>
        </div>
        <div class="school-auth-content">
            <img src="static/images/certification.png" alt="">
        </div>
    </div>




    <div class="index-teacher">
        <div class="teacher-introduced">
            <div class="company">
                <div class="institutions">
                    <div class="label">
                        <span style="color: rgb(255, 255, 255);">老师介绍</span>
                        <span class="suffix" style="color: rgb(255, 255, 255);">/ Course introduction</span>
                    </div>
                    <div class="underline" style="background: rgb(255, 255, 255);"></div>
                </div>
            </div>
            <div class="teacher-detail show-teacher">
                <div class="detail-right">
                    <img src="static/images/teacher1.png" alt="" />
                </div>
                <div class="detail-left">
                    <div class="teacher-experience">
                        Paula Stechschulte
                    </div>
                    <div class="teacher-paper">
                        Paula博士在医疗护理和高等教育领域有着30多年的经验。她在密歇根大学和德克萨斯大学等具有挑战性的医疗管理专业环境中拥有卓越的领导力和丰富的管理经验。近年来，Paula博士的工作转向了高等教育，并继续担任院长、副院长和健康护理项目主席等职务。目前她是南方大学在线学院的副院长。
                    </div>
                    <div class="teacher-paper">
                        她在东密歇根大学取得了护理学学士学位，并成为一名注册护士，之后在中密歇根大学获得了经济学硕士学位，最后在卡佩拉大学取得了组织与管理学博士学位。Paula博士希望自己可以活到老学到老，这也正是教育带给人们的坚定的学习信仰。
                    </div>
                </div>
            </div>
            <div class="teacher-detail">
                <div class="detail-right">
                    <img src="static/images/teacher2.png" alt="" />
                </div>
                <div class="detail-left">
                    <!-- <div class="teacher-name">
                    许焕琛
                    </div>  -->
                    <div class="teacher-experience">
                        Karin Bogue
                    </div>
                    <div class="teacher-paper">
                        Karin博士是南方大学商学院的一名助理教授。她还提供有关进口贸易合规的咨询服务。Karin在孟菲斯大学取得了会计学士学位、工商管理硕士学位以及法学博士学位。她还取得了国际商务博士学位，并在田纳西州获得了律师执照。卡琳从1998年开始担任兼职教员，从事商法和伦理学的教学工作，并为几所私立和公立大学教授国际合规课程。教学内容包括商法、国际法、全球管理和通用商务课程。<br/>
                        Karin不仅是一名有执照的律师，还是一个拥有30多年国际贸易和合规经验的海关经纪人，并且已经取得了执照。她的丰富经验来源于与美国海关和边境保护局、一家律师事务所以及几家大型跨国公司的雇佣关系。她创建并组织了进口合规部门，跨职能的国际合规团队，制定了进口合规培训计划，并担任各种跨国公司的贸易合规顾问。她还编订了一些贸易条款、培训手册、教科书和国际贸易合规的在线课程
                    </div>
                </div>
            </div>
            <div class="teacher-detail">
                <div class="detail-right">
                    <img src="static/images/teacher3.png" alt="" />
                </div>
                <div class="detail-left">
                    <div class="teacher-experience">
                        Ruth Essler
                    </div>
                    <div class="teacher-paper">
                        2002年，Essler博士在萨凡纳校区从兼职教员做起，开始了她的教学生涯。任教至今已经超过15年。多年以来她亲眼见证了南方大学的转变，并对学校的未来充满期待，她说这是她最大的荣幸。作为工商管理博士项目主管，Essler博士现在负责课程教学，并且是学位论文的负责人和学生论文委员会成员。她还负责工商管理硕士项目和人力资源管理硕士项目。2016年，Essler博士完成了在阿尔格西大学的工商管理博士学位，毕业论文名为《网络兼职教师的情商与教师的自我效能感》。
                    </div>
                </div>
            </div>
            <div class="teacher-detail">
                <div class="detail-right">
                    <img src="static/images/teacher4.png" alt="" />
                </div>
                <div class="detail-left">
                    <!-- <div class="teacher-name">
                    许焕琛
                    </div>  -->
                    <div class="teacher-experience">
                        Tom Javarinis
                    </div>
                    <div class="teacher-paper">
                        Tom博士是南方大学的一名助理教授。他在硕士阶段选择了攻读MBA，并且涉及战略管理、会计、健康护理多个方向，博士专业是组织发展和人力资源。 <br/>他取得了精益六西格玛黑带证书、供应链管理师证书以及职业经理人资格认证<br/> Tom博士在零售和食品服务分销、仓储、物流、供应链等工作岗位上拥有丰富的经验。
                    </div>
                </div>
            </div>
            <div class="switch-teacher">
                <div class="now active" data-teacher="teacher1">
                    <div class="teacherX"></div>
                    <div class="name">
                        Paula Stechschulte
                    </div>
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div>
                                在医疗护理和高等教育领域有着30多年的经验
                            </div>
                        </div>
                    </div>
                </div>
                <div class="now" data-teacher="teacher2">
                    <div class="name">
                        Karin Bogue
                    </div>
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm2.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div>
                                Karin博士是南方大学商学院的一名助理教授，也是一名有执照的律师
                            </div>
                        </div>
                    </div>
                </div>
                <div class="now" data-teacher="teacher3">
                    <div class="name">
                        Ruth Essler
                    </div>
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm3.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div>
                                2002年，Essler博士在萨凡纳校区从兼职教员做起，开始了她的教学生涯。任教至今已经超过15年
                            </div>
                        </div>
                    </div>
                </div>
                <div class="now" data-teacher="teacher4">
                    <div class="name">
                        Tom Javarinis
                    </div>
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm4.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div>
                                Tom博士是南方大学的一名助理教授。博士专业是组织发展和人力资源。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="apply-process">
        <div class="box">
            <div class="apply-process-content">
                <img src="static/images/apply-process.png" alt="">
            </div>
        </div>
    </div>
	
	
    <div id="cooperation">
        <div class="company">
          <div class="institutions">
            <div class="label">
              <span>课程方式</span>
              <span class="suffix">/ Course introduction</span>
            </div>
            <div class="underline"></div>
            <div class="more-btn">
              查看更多
            </div>
          </div>
        </div>
        <div class="course">
          <ul class="course-list">
            <li><img src="static/images/course1.png" alt="" />
              <p class="course-title">Leading, Managing and Developing people</p>
              <p class="coures-content">本课能帮助学员客观的分析和反思自己的领导能力并学习到有效的管理策略。更好的激励与培养人才力，提高整个组织的生产力。</p>
            </li>
            <li><img src="static/images/course2.png" alt="" />
              <p class="course-title">Managing Operational Improvement</p>
              <p class="coures-content">本课着眼于全球业务的组织管理，如何将质量保证与整体系统管理相结合，鼓励学员以系统性的视角考虑经营改进的方法。</p>
            </li>
            <li><img src="static/images/course3.png" alt="" />
              <p class="course-title">Managing Financial Resources</p>
              <p class="coures-content">本课为财会管理基础内容，涉及到财会和金融的术语、原则、框架和理论模型，可以帮助学员更好的组织公司经营活动，建立可持续发展的企业。</p>
            </li>
            <li><img src="static/images/course4.png" alt="" />
              <p class="course-title">Marketing For Managers</p>
              <p class="coures-content">本课介绍市场营销的理论和原则，有助于企业实现组 织目标，满足客户需求，建立有效的业务系统。</p>
            </li>
            <li><img src="static/images/course5.png" alt="" />
              <p class="course-title">Managing，Developing &amp; Implementing Strategy</p>
              <p class="coures-content">本课从战略和实施两个方面，为学员提高批判性思维能力及自信，能从战略上分析挑战，根据需要做出明智的商业决策。</p>
            </li>
            <li><img src="static/images/course6.png" alt="" />
              <p class="course-title">Economics For Managers</p>
              <p class="coures-content">本课介绍了微观和宏观经济学的基本原理，帮助学员领受经济学分析及决策中所需的经济学概念框架。</p>
            </li>
          </ul>
        </div>
    </div>

	

	
	
	
	
	
    <div class="contact">
        <ul>
            <li>
                <div class="contact-bg"></div>
                <div data-icon="online" class="contact-text">
                    <span>在线咨询</span>
                </div>
            </li>
            <li>
                <div class="contact-bg"></div>
                <div data-icon="phone" class="contact-text phone">
                    <div>
                        <span>联系电话</span>
                    </div>
                    <p>010-5555555</p>
                </div>
            </li>
            <li>
                <div class="contact-bg"></div>
                <div data-icon="scanning" class="contact-text scanning">
                    <span>扫描咨询</span>
                </div>
            </li>
        </ul>
    </div>
</div>


<script>
    <?php $this->beginBlock('index') ?>
$(document).ready(function(){
    let teacherX = 0;
    let x = document.getElementsByClassName('teacherX')[0];
    $('.index-teacher .now').click(function() {
        var teacher = $(this).attr('data-teacher');
        $(this).addClass('active').siblings().removeClass('active');
        if (teacher == 'teacher1') {
            teacherX = 0;
            x.style.transform = `translateX(${teacherX}px)`;
            $('.teacher-detail').eq(0).addClass('show-teacher').siblings().removeClass('show-teacher');
        }
        if ((teacher == 'teacher2' && teacherX < 303) || teacherX > 303) {
            teacherX = 303;
            x.style.transform = `translateX(${teacherX}px)`;
            $('.teacher-detail').eq(1).addClass('show-teacher').siblings().removeClass('show-teacher');
        }
        if ((teacher == 'teacher3' && teacherX < 606) || teacherX > 606) {
            teacherX = 606;
            x.style.transform = `translateX(${teacherX}px)`;
            $('.teacher-detail').eq(2).addClass('show-teacher').siblings().removeClass('show-teacher');
        }
        if (teacher == 'teacher4' && teacherX < 909) {
            teacherX = 909;
            x.style.transform = `translateX(${teacherX}px)`;
            $('.teacher-detail').eq(3).addClass('show-teacher').siblings().removeClass('show-teacher');
        }
    });
});
    <?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['index'],\yii\web\View::POS_END);?>