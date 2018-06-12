<?php
use yii\helpers\Url;
$this->title = '首页 - ' . Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>

<div class="container" style="background:#fff;">
    <div class="index-banner">
        <img src="static/images/banner.png" alt="" />
    </div>
    <div class="tabber">
        <ul class="tab">
            <li><a href="javaScript:;" data-id='mba'><span class="tab-icon mba-icon tab-icon1 mba-active-img"></span> <span class="tab-text active">尚德环球MBA理念</span></a></li>
            <li><a href="javaScript:;" data-id='five'><span class="tab-icon five-icon tab-icon1"></span> <span class="tab-text">MBA五大优势</span></a></li>
            <li><a href="javaScript:;" data-id='cooperation'><span class="tab-icon cooperation-icon tab-icon1"></span> <span class="tab-text">合作学校</span></a></li>
            <li><a href="javaScript:;" data-id='culb'><span class="tab-icon culb-icon tab-icon1"></span> <span class="tab-text">环球俱乐部</span></a></li>
            <li><a href="javaScript:;" data-id='social'><span class="tab-icon social-icon tab-icon1"></span> <span class="tab-text">国际交流</span></a></li>
        </ul>
    </div>
    <div id="mba">
        <!-- <p class="mba-title">尚德环球MBA理念</p>
        <p class="line"></p>
        <p>尚德环球MBA，这是您的MBA，您的学习方式。</p>
        <p>尚德环球MBA为有经验的企业管理人士提供灵活便捷的研究生教育。</p>
        <p>我们的目的是通过互联网，为您提供国际优质的教育资源，使您具备成为杰出领导者的技能和信心，具有国际视野。我</p>
        <p>们实践方法重于理论，帮助您带领团队达到顶尖水平。尚德环球MBA，值得您的信赖！</p> -->
    </div>
    <div id="five">
        <p class="title">报考MBA的五大优势</p>
        <p class="why">WHY</p>
        <div class="line">
            <span></span>
            <i class="square"></i>
            <span></span>
        </div>
        <div class="five-introduce">
            <div class="introduce">
                <div class="five-img">
                    <img src="static/images/advantage1.png" alt="" />
                    <p class="advantage-text">统招硕士学历+学位</p>
                </div>
                <p class="five-text">拥有名校光环</p>
            </div>
            <div class="introduce">
                <div class="five-img">
                    <img src="static/images/advantage2.png" alt="" />
                    <p class="advantage-text">转型管理层+扩宽专业</p>
                </div>
                <p class="five-text">学习行业前沿课程</p>
            </div>
            <div class="introduce">
                <div class="five-img">
                    <img src="static/images/advantage3.png" alt="" />
                    <p class="advantage-text">实现高新+高职</p>
                </div>
                <p class="five-text">突破职场瓶颈</p>
            </div>
            <div class="introduce">
                <div class="five-img">
                    <img src="static/images/advantage4.png" alt="" />
                    <p class="advantage-text">文化碰撞与交流</p>
                </div>
                <p class="five-text">获得国际视野</p>
            </div>
            <div class="introduce">
                <div class="five-img">
                    <img src="static/images/advantage5.png" alt="" />
                    <p class="advantage-text">实现创业+资源共享</p>
                </div>
                <p class="five-text">拥有优质人脉</p>
            </div>
        </div>
    </div>




    <div id="cooperation">
        <p class="title">院校合作</p>
        <p class="why">UNIVERSITIES</p>
        <div class="line">
            <span></span>
            <i class="square"></i>
            <span></span>
        </div>
        <div class="on-line">
            <div class="translation"></div>
        </div>
        <div class="switch">
            <div data-school="aim" class="switch-tab active">
                <p>AIM</p>
                <p>Australian Institute of Management</p>
            </div>
            <div data-school="aeu" class="switch-tab">
                <p>AEU</p>
                <p>Asia E University</p>
            </div>
            <div data-school="nus" class="switch-tab">
                <p>NUS</p>
                <p>National University of Singapore</p>
            </div>
        </div>

        <div class="switch-container show-switch">
            <div class="switch-content">
                <div class="content-video">
                    <video width="100%" height="100%" src="http://1254383113.vod2.myqcloud.com/78f333bevodgzp1254383113/7ced66797447398155148089980/9PxFibJY1WcA.mp4" controls="controls">
                        您的浏览器不支持 video 标签。
                    </video>
                </div>
                <div class="content-text">
                    <p class="content-title"><span>关于AIM</span> <span>—— ABOUT AIM</span></p>
                    <p class="paragraph" style="margin-bottom: 30px;"> Australian Institute of Management (AIM)是澳大利亚优秀的管理学院，在企业解决方案、短期课程、职业教育和研究生高等教育方面都拥有行业 领先的优势。</p>
                    <p class="paragraph"> AIM成立于1941年，是澳大利亚经理和领导者在职业生涯的每一个阶段都值得信赖的职业伙伴。 AIM每年对超过80个培训项目的2万多名专业人员提供培训，对澳大利亚14个职业提供职业资格培训，除此之外AIM还拥有多年管理咨询经验， 曾为500多家公司制定个性化的培训方案，包括政府、卫生、金融服务、采矿、制造、建筑等诸多行业领域。</p>
                </div>
            </div>
            <div class="company">
                <div class="institutions">
                    <div class="label">
                        <span>认证机构</span>
                        <span class="suffix">/ Certification body</span>
                    </div>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="certification">
                <img src="static/images/certification.png" alt="" />
            </div>
            <div class="project-introduction">
                <div class="project">
                    AIM MBA项目介绍
                </div>
                <div class="project-unline"></div>
                <div>
                    AIM商学院提供了12门MBA专业课程，旨在培养雄心勃勃的领导者和杰出的管理者。
                </div>
                <div class="last-text">
                    它将使你具备处理复杂商业环境中可能面临的挑战的理论、框架和技能——转换并获得一种资格，为你提供在职业生涯中需要的广泛的商业知识。
                </div>
                <div class="project">
                    AIM MBA学习方式
                </div>
                <div class="project-unline"></div>
                <div>
                    本项目为在职MBA，线上授课，3学期，共18月，即可申请硕士学位证，课程可全部在国内完成，可参加澳洲毕业典礼。
                </div>
            </div>
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
                    <li><img src="static/images/course1.png" alt="" /> <p class="course-title">Leading, Managing and Developing people</p> <p class="coures-content">本课能帮助学员客观的分析和反思自己的领导能力并学习到有效的管理策略。更好的激励与培养人才力，提高整个组织的生产力。</p></li>
                    <li><img src="static/images/course2.png" alt="" /> <p class="course-title">Managing Operational Improvement</p> <p class="coures-content">本课着眼于全球业务的组织管理，如何将质量保证与整体系统管理相结合，鼓励学员以系统性的视角考虑经营改进的方法。</p></li>
                    <li><img src="static/images/course3.png" alt="" /> <p class="course-title">Managing Financial Resources</p> <p class="coures-content">本课为财会管理基础内容，涉及到财会和金融的术语、原则、框架和理论模型，可以帮助学员更好的组织公司经营活动，建立可持续发展的企业。</p></li>
                    <li><img src="static/images/course4.png" alt="" /> <p class="course-title">Marketing For Managers</p> <p class="coures-content">本课介绍市场营销的理论和原则，有助于企业实现组 织目标，满足客户需求，建立有效的业务系统。</p></li>
                    <li><img src="static/images/course5.png" alt="" /> <p class="course-title">Managing，Developing &amp; Implementing Strategy</p> <p class="coures-content">本课从战略和实施两个方面，为学员提高批判性思维能力及自信，能从战略上分析挑战，根据需要做出明智的商业决策。</p></li>
                    <li><img src="static/images/course6.png" alt="" /> <p class="course-title">Economics For Managers</p> <p class="coures-content">本课介绍了微观和宏观经济学的基本原理，帮助学员领受经济学分析及决策中所需的经济学概念框架。</p></li>
                </ul>
            </div>
        </div>


        <div class="switch-container">
            <div class="switch-content">
                <div class="content-video">
                    <video width="100%" height="100%" src="http://1254383113.vod2.myqcloud.com/78f333bevodgzp1254383113/7cebb8547447398155148086744/V15UBC6UU9gA.mp4" controls="controls" poster="">
                        此视频不支持浏览器
                    </video>
                </div>
                <div class="content-text">
                    <p class="content-title"><span>关于AEU</span> <span>—— ABOUT AEU</span></p>
                    <p class="paragraph" style="margin-bottom: 30px;"> Asia E University（Asia E University）简称AEU成立于2002年，是由ACD（Asia Cooperation Dialogue亚洲合作对话）发起组建的一所跨国合作大学，其建立旨在推动亚洲高等在线教育的发展，为全亚洲培养应用型跨境人才。 </p>
                    <p class="paragraph"> AEU致力于向亚洲各国提供高水平的学位教育和职业培训，以满足亚洲日益增长的人力需求，并为各国学员提供的常态化跨境学习，交换，实习，就业服务。 </p>
                </div>
            </div>
            <div class="company">
                <div class="institutions">
                    <div class="label">
                        <span>认证机构</span>
                        <span class="suffix">/ Certification body</span>
                    </div>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="certification">
                <img src="static/images/certification2.png" alt="" />
            </div>
            <div class="project-introduction">
                <div class="project">
                    AEU MBA项目介绍
                </div>
                <div class="project-unline"></div>
                <div>
                    提供11门专业课程，专设服务亚洲经济的实战案例分析，为亚洲企业家和经纪人提供管理知识和
                </div>
                <div class="last-text">
                    解决问题的方法和职业发展所需要的工商业管理知识，培养跨境高端管理人才，帮助亚洲企业家适应日益激烈的全球化竞争。
                </div>
                <div class="project">
                    AEU MBA学习方式
                </div>
                <div class="project-unline"></div>
                <div>
                    本项目为在职MBA，线上授课，5学期，共15月，即可申请硕士学位证，课程可全部在国内完成，可参加马来西亚总部的毕业典礼。
                </div>
            </div>
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
                    <li><img src="static/images/aeu-course1.png" alt="" /> <p class="course-title">Marketing Management</p> <p class="coures-content">本课程加强学生分析和管理市场战略和政策的理解，包括市场策略，市场管理步骤，市场和客户行为分析，电子营销等。</p></li>
                    <li><img src="static/images/aeu-course2.png" alt="" /> <p class="course-title">Entrepreneurship and Innovation</p> <p class="coures-content">学习企业创新的价值和技能，如何实现商业计划和战略。</p></li>
                    <li><img src="static/images/aeu-course3.png" alt="" /> <p class="course-title">Managing people in organisation</p> <p class="coures-content">从企业家角度，理解商业组织运营和管理。</p></li>
                    <li><img src="static/images/aeu-course4.png" alt="" /> <p class="course-title">International business</p> <p class="coures-content">了解全球宏观环境对全球公司的影响，包括竞争，运 作和变化。</p></li>
                    <li><img src="static/images/aeu-course5.png" alt="" /> <p class="course-title">Accounting and finance for manager</p> <p class="coures-content">包括财会管理和公司金融，帮助学员从财务和金融的作用和原则的角度做管理决策。</p></li>
                    <li><img src="static/images/aeu-course6.png" alt="" /> <p class="course-title">Strategic management - asian business</p> <p class="coures-content">理解公司变化的步骤，组织文化和的变化的影响，以及系统变化过程中需要用到的工具和方式。</p></li>
                </ul>
            </div>
        </div>
        <div class="switch-container">
            <div class="switch-content">
                <div class="content-video">
                    <img src="static/images/video.png" alt="" />
                </div>
                <div class="content-text">
                    <p class="content-title"><span>关于NUS</span> <span>—— ABOUT NUS</span></p>
                    <p class="paragraph" style="margin-bottom: 30px;"> 新加坡国立大学（National University of Singapore），简称国大（NUS），是新加坡首屈一指的世界级顶尖大学，为AACSB和EQUIS认证成员，亚洲大学联盟、亚太国际教育协会、国际研究型大学联盟、Universitas 21大学联盟、环太平洋大学协会成员，在工程、生命科学及生物医学、社会科学及自然科学等领域的研究享有世界盛名。 </p>
                </div>
            </div>
            <div class="company">
                <div class="institutions">
                    <div class="label">
                        <span>认证机构</span>
                        <span class="suffix">/ 机构认证</span>
                    </div>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="certification">
                <img src="static/images/certification3.png" alt="" />
            </div>
            <div class="project-introduction">
                <div class="project">
                    NUS EMBA项目介绍
                </div>
                <div class="project-unline"></div>
                <div>
                    学院拥有一流的具备国际学术影响力的师资队伍，他们凭借自身严谨而深厚的学科素养
                </div>
                <div class="last-text">
                    启迪EMBA学员深入思考，帮助EMBA学员找到提高组织运营效率、 解决面临问题的策略和方法
                </div>
                <div class="project">
                    UNS EMBA学习方式
                </div>
                <div class="project-unline"></div>
                <div>
                    本项目为EMBA，海外上课，设有23个学科，共两学年，即可申请硕士学位证，课程需在新加披完成，可参加新加坡毕业典礼
                </div>
            </div>
            <div class="company">
                <div class="institutions">
                    <div class="label">
                        <span>课程方式</span>
                        <span class="suffix">/ Course introduction</span>
                    </div>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="course">
                <ul class="course-list">
                    <li class="list-xl"><img src="static/images/nus-course1.png" alt="" /> <p class="course-title">高层对话</p> <p class="coures-content">充分利用班级资源，深入典型企业调研，为企 业提供“诊断”，学员与企业的中高层管理者直接 对话，分析和讨论，促使学员将实践经验与理论学术相融合，强经营管理的通盘思考意识，提 升系统分析管理问题的能力。</p></li>
                    <li class="list-xl"><img src="static/images/nus-course2.png" alt="" /> <p class="course-title">人生拓展</p> <p class="coures-content">“戈壁一堂课”（选修）中，EMBA学员将戈壁赛事当成“管理项目”来做，有团队有自我，有传 承有分工，将“玄奘之路”的“理想-行动-坚持”贯穿于企业管理和人生拓展。这一班级传统活动， 助力学员健康生活、积极进取，建立深厚感情，从而 成为“头脑、身体、心灵”全面健康、有社 会责任 心的企业家。</p></li>
                    <li class="list-xl"><img src="static/images/nus-course3.png" alt="" /> <p class="course-title">游学全球</p> <p class="coures-content">采用海外游学方式，由教授带领，在有鲜明文化历史、产业特色的国家和区域，开展浸濡式全 方位学习。让学员开拓眼界，向世界一流企业学习，同时深入了解在地人文历史和风土人情。</p></li>
                    <li class="list-xl"><img src="static/images/nus-course4.png" alt="" /> <p class="course-title">终身学习</p> <p class="coures-content">作为新加坡国立大学EMBA校友，将享有校友终生学习的福利，可在“终身学习计划”下申请EM BA课程旁听。共同经历体验式学习，在全球移动游学，参访典型与新兴产业，研习世界著名企 业成功经验，掌握商机脉动，为企业更高发展运筹帷幄，领航和掌舵。</p></li>
                </ul>
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
                        <div class="teacherX" style="transform: translateX(0px);"></div>
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




    <div id="culb">
        <p class="title">环球俱乐部</p>
        <p class="why">UNIVERSAL CLUB</p>
        <div class="line">
            <span></span>
            <i class="square"></i>
            <span></span>
        </div>
        <div class="culb-content">
            <ul class="culb-list">
                <li>
                    <div class="mask">
                        <div class="mack">
                            <div class="mack-text">
                                “精英思辨”俱乐部组织学员每四周举行一次，我们会甄选当下最热门的商业话题进行探讨，在活动中学员将分为两组针对该商业话题进行对抗辩论，最大化的激发学员商业思维，在激烈的思维碰撞中迸发学习的热情。
                            </div>
                        </div>
                    </div> <img src="static/images/culb1.png" alt="" />
                    <div class="culb-text">
                        <p class="culb-title">“精英思辨”俱乐部</p>
                        <p>最大化激发学员商业思维，在思维碰撞中迸发学习热情</p>
                    </div></li>
                <li>
                    <div class="mask">
                        <div class="mack">
                            <div class="mack-text">
                                “我和大咖面对面”俱乐部每学期中会根据演讲者日程安排不定期举办“我和大咖面对面”讲座。在讲座当中我们将邀请国内外各行各业的知名人士作为主讲人，让学员有机会接触到最顶尖的商业头脑、最先进的商业思维。在讲座结束后学员还有机会直接与主讲人进行提问及交流，让学员有机会和商业大咖真正实现面对面。
                            </div>
                        </div>
                    </div> <img src="static/images/culb2.png" alt="" />
                    <div class="culb-text">
                        <p class="culb-title">“我和大咖面对面”俱乐部</p>
                        <p>邀请国内外各行各业的知名人士,真正实现和商业大咖面对面</p>
                    </div></li>
                <li>
                    <div class="mask">
                        <div class="mack">
                            <div class="mack-text">
                                在环球MBA项目中扩展学员人脉资源是学员联谊俱乐部的一个重要目标。在每个学期的期末我们会组织俱乐部中的全体成员参与联谊活动，在轻松的联谊活动中增进学员之间的友谊并扩大学员的人脉资源。
                            </div>
                        </div>
                    </div> <img src="static/images/culb3.png" alt="" />
                    <div class="culb-text">
                        <p class="culb-title">学员联谊俱乐部</p>
                        <p>轻松的联谊活动中增进学员之间的友谊并扩大学员的人脉资源</p>
                    </div></li>
                <li>
                    <div class="mask">
                        <div class="mack">
                            <div class="mack-text">
                                在职业规划俱乐部中，我们还为每位学员提供职业生涯规划和指导服务，俱乐部将每天发布行业要闻、求职速递等信息。在项目全部课程结束后还会针对每一位学员提供简历修改、面试技能强化、面试礼仪指导等全方位的求职指导与服务。
                            </div>
                        </div>
                    </div> <img src="static/images/culb4.png" alt="" />
                    <div class="culb-text">
                        <p class="culb-title">事业规划俱乐部</p>
                        <p>针对每位学员提供职业生涯规划和指导服务</p>
                    </div></li>
            </ul>
        </div>
    </div>
    <div id="social">
        <p class="title">国际交流</p>
        <p class="why">INTERNATIONAL EXCHANGE</p>
        <div class="line" style="margin-bottom: 87px;">
            <span></span>
            <i class="square"></i>
            <span></span>
        </div>
        <div class="social-content">
            <ul class="social-list">
                <li><img src="static/images/social1.png" alt="" /></li>
                <li>
                    <div class="divider">
                        <p class="dian"></p>
                        <p class="line"></p>
                    </div></li>
                <li>
                    <div class="social-text">
                        <p class="social-title">纽约学术交流项目</p>
                        <p class="text-content">尚德环球MBA为学员专门设置了“纽约学术交流项目”。在这里，将汇聚一群有梦想、有潜力、有才华的年轻人，在逐梦的道路上与你一起并肩前行。通过常青藤大学的课程、比赛，你将领略世界级教授的风采、了解最前沿的管理理论、深入讨论鲜活的商业案例。在学习和交流的过程中，你将和来自不同背景的名校精英们共同进步，在探索中碰撞出灵感的火花。在为期10天的交流中，将举行团队破冰、常青藤课程、投资银行商务演说、团队合作商业比赛、慈善拍卖会、创业比赛等丰富多彩的活动。</p>
                    </div></li>
            </ul>
            <ul class="social-list">
                <li>
                    <div class="social-text">
                        <p class="social-title" style="text-align: right;">香港学术交流项目</p>
                        <p class="text-content">尚德环球MBA香港学术交流项目包括四个部分：香港大学课堂学习+五百强企业实践研习+企业商业策划书比赛（在香港企业举办）+商业案例比赛（在香港大学举办） 。在为期6天的交流中，将举行大学课堂、团队合作商业比赛、商业案例比赛等活动。</p>
                    </div></li>
                <li>
                    <div class="divider">
                        <p class="dian"></p>
                        <p class="line"></p>
                    </div></li>
                <li><img src="static/images/social2.png" alt="" /></li>
            </ul>
            <ul class="social-list">
                <li><img src="static/images/social3.png" alt="" /></li>
                <li>
                    <div class="divider">
                        <p class="dian"></p>
                        <p class="line"></p>
                    </div></li>
                <li>
                    <div class="social-text">
                        <p class="social-title">赴澳参与毕业典礼</p>
                        <p class="text-content">学生俱乐部在项目课程结束后将组织所有符合毕业条件的学员赴澳参加毕业典礼，学员将穿着学士服登上庄重的礼堂，在悠扬的管风琴的伴奏下，从校长手中接过学位证书。这将成为每位学员难忘的回忆。</p>
                    </div></li>
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

	$('.tab li a').click(function() {
		var id = $(this).attr('data-id');
		$(this).children('.tab-text').addClass('active');
		$(this).children('.tab-icon').addClass('tab-icon1 '+id+'-active-img');
		$(this).parent().siblings().children().children('.tab-text').removeClass('active');
		$(this).parent().siblings().children().children('.tab-icon').removeClass('tab-icon1');
		document.getElementById(id).scrollIntoView();
	});
	
	
	let translationX = document.getElementsByClassName('translation')[0],translationNum = 0;
      $('.switch-tab').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        var school = $(this).attr('data-school');
        if (school == 'aim') {
          translationNum = 0
          translationX.style.transform = `translateX(${translationNum}px)`;
          $('.switch-container').eq(0).addClass('show-switch').siblings().removeClass('show-switch');
        }
        if ((school == 'aeu' && translationNum < 400) || translationNum > 400) {
          translationNum = 400;
          translationX.style.transform = `translateX(${translationNum}px)`;
          $('.switch-container').eq(1).addClass('show-switch').siblings().removeClass('show-switch');
        }
        if (school == 'nus' && translationNum < 800) {
          translationNum = 800;
          translationX.style.transform = `translateX(${translationNum}px)`;
          $('.switch-container').eq(2).addClass('show-switch').siblings().removeClass('show-switch');
        }  
      })
	
	
	
});
    <?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['index'],\yii\web\View::POS_END);?>