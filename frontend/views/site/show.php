<?php
use yii\helpers\Url;
$this->title = '首页 - ' . Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>
<div class="container">
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
            Australian Institute of Management (AIM)是澳大利亚优秀的管理学院，在企业解决方案、短期课程、职业教育和研究生高等教育方面都拥有行业领先的优势。 AIM成立于1941年，是澳大利亚经理和领导者在职业生涯的每一个阶段都值得信赖的职业伙伴。 AIM每年对超过80个培训项目的2万多名专业人员提供培训，对澳大利亚14个职业提供职业资格培训，除此之外AIM还拥有多年管理咨询经验， 曾为500多家公司制定个性化的培训方案，包括政府、卫生、金融服务、采矿、制造、建筑等诸多行业领域。
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
    <div class="teacher">
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
                    <img src="static/images/teacher2.png" alt="" />
                </div>
                <div class="detail-left">
                    <div class="teacher-name">
                        许焕琛
                    </div>
                    <div class="teacher-experience">
                        澳洲留学大百科创始人
                    </div>
                    <div class="teacher-paper">
                        澳大利亚纽卡斯尔大学(全球前1%) 工商管理硕士，北京邮电大学管理学学士。澳洲留学大百科（澳洲第一家留学生服务原创平台）创始人，澳大利亚著名金融公司ECNtrade培训师，澳大利亚CMAA工商管理学会成员，管理理论扎实，知识面丰富，风格幽默活泼，拥有强有力的演讲设计能力，丰富的客户培训及授课经验，深受中澳两国学员欢迎。
                    </div>
                </div>
            </div>
            <div class="teacher-detail">
                <div class="detail-right">
                    <img src="static/images/teacher1.png" alt="" />
                </div>
                <div class="detail-left">
                    <div class="teacher-name">
                        刘令涛
                    </div>
                    <div class="teacher-experience">
                        11年教育行业经验
                    </div>
                    <div class="teacher-paper">
                        毕业于电子科技大学，获得管理学、法学等多个学位。11年教育行业经验，先后担任3家知名上市公司管理者，教育上市公司北京校区校长兼教学总监，中国科学技术大学EMBA北京中心副主任，广东工业大学职业规划顾问，亚洲教育设施设计与技术-2015秋季高峰论坛及展览（2015 ASIA EDUCATIONAL FACILITY DESIGN AND TECHNOLOGY AUTUMN SUMMIT &amp; SHOWCASE）主题发言嘉宾。知名情商口才训练专家，MBA面试辅导专家，10年MBA考试辅导经验。全国首创“考生院校匹配系统”，全国首创“4:3:2:1备考方略”，主编《2019年入学MBA面试实操手册》，主讲“MBA面试策略及实操”系列课程。
                    </div>
                    <div class="teacher-paper">
                        全球500强企业特聘培训讲师，授课及调研足迹踏遍全国26个省、自治区、直辖市，超过500场现场培训经验。培训客户涵盖中国移动、中国联通、中国电信、江西省发改委、江西省新余市政府、江西省宜春市政府、辽宁省盘锦市政府、广州外国语学校等提供一系列精品课程。培训课程通心路、谋思路、练套路，受到普遍欢迎。
                    </div>
                </div>
            </div>
            <div class="teacher-detail">
                <div class="detail-right">
                    <img src="static/images/teacher4.png" alt="" />
                </div>
                <div class="detail-left">
                    <div class="teacher-name">
                        徐鲲
                    </div>
                    <div class="teacher-experience">
                        曾任中信益佰国际商学院副总
                    </div>
                    <div class="teacher-paper">
                        中国人民大学工商管理硕士，主讲中文面试。曾任中信益佰国际商学院副总经理，目前就职于世界500强公司，负责运营管理工作。主要承担《MBA模拟面试》《人际关系培训》《领导力提升》《运营质量体系管理》《运营推广和品牌营销》《运营战略规划与制定》《运营数据的分析与驱动》《新环境下的运营品牌战略与消费心理》等课程教学任务。主要从事运营推广与战略规划等方面的教学与科研工作；先后发表研究论文数篇；多次获得运营管理方面的个人荣誉。
                    </div>
                </div>
            </div>
            <div class="teacher-detail">
                <div class="detail-right">
                    <img src="static/images/stsl.png" alt="" />
                </div>
                <div class="detail-left">
                    <div class="teacher-name">
                        司徒莎莉
                    </div>
                    <div class="teacher-experience">
                        中国人民大学工商管理硕士
                    </div>
                    <div class="teacher-paper">
                        中共党员，中国人民大学工商管理硕士、中南财经政法大学经济学学士，MBM（人大校友企业家导师）项目大使。具有扎实的理工科、管理学和会计学背景。主讲企业创新（Entrepreneurship and Innovation）。5年特大型央企基层工作、管理经验，10余年北京企业集团高管经历。曾任北京国研斯坦福俱乐部管理有限公司办公室主任，京政济昆教育科技有限公司项目总监。在高端培训领域有着丰富的教学管理和活动策划的经验，曾多次负责企业家俱乐部、地方各级政府的培训课程设计，组织教学管理、企业家夫人沙龙以及子女夏令营等活动，并参与策划组织中央电视台“中国现代文化名人世纪寻根”的系列节目，与政府智库、研究机构和产业界保持着有效沟通。
                    </div>
                </div>
            </div>
            <div class="switch-teacher">
                <div class="now active" data-teacher="teacher1">
                    <div class="teacherX"></div>
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm2.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div class="name">
                                许焕琛
                            </div>
                            <div>
                                澳洲留学大百科创始人
                            </div>
                        </div>
                    </div>
                </div>
                <div class="now" data-teacher="teacher2">
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div class="name">
                                刘令涛
                            </div>
                            <div>
                                11年教育行业经验
                            </div>
                        </div>
                    </div>
                </div>
                <div class="now" data-teacher="teacher3">
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm4.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div class="name">
                                徐鲲
                            </div>
                            <div>
                                曾任中信益佰国际商学院副总
                            </div>
                        </div>
                    </div>
                </div>
                <div class="now" data-teacher="teacher4">
                    <div class="teacher-card">
                        <div class="portrait">
                            <img src="static/images/teacher-sm3.png" alt="" />
                        </div>
                        <div class="now-left">
                            <div class="name">
                                司徒莎莉
                            </div>
                            <div>
                                中国人民大学工商管理硕士
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
        <div class="switch-container">
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
        <!---->
        <!---->
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