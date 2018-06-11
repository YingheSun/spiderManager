<?php
use yii\helpers\Url;
$this->title = '首页 - ' . Yii::$app->params['web_title']['value'];
$this->metaTags[]="<meta name='keywords' content='".Yii::$app->params['web_keywords']['value']."'/>";
$this->metaTags[]="<meta name='description' content='".Yii::$app->params['web_description']['value']."'/>";
?>

<div class="container">
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
