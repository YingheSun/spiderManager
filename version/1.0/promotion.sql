CREATE TABLE `yii_academy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `status` int(2) DEFAULT '1' COMMENT '状态',
  `created_at` int(11) DEFAULT NULL COMMENT '添加时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO `yii_academy` VALUES ('1', '南方大学', '1', '1528186542', '1528186542');


DROP TABLE IF EXISTS `yii_log`;
CREATE TABLE `yii_log` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '管理员ID',
  `content` varchar(255) NOT NULL COMMENT '日志内容',
  `created_at` int(11) DEFAULT NULL COMMENT '添加时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='日志表';


DROP TABLE IF EXISTS `yii_member`;
CREATE TABLE `yii_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `avatar` varchar(100) DEFAULT NULL COMMENT '用户照片',
  `real_name` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `phone` varchar(20) NOT NULL COMMENT '手机号',
  `created_at` int(11) DEFAULT NULL COMMENT '注册时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

DROP TABLE IF EXISTS `yii_signup`;
CREATE TABLE `yii_signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `academy_id` int(11) NOT NULL COMMENT '报名院校',
  `avatar` varchar(100) DEFAULT NULL COMMENT '用户照片',
  `real_name` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `card` varchar(18) DEFAULT NULL COMMENT '身份证号',
  `phone` varchar(20) DEFAULT NULL COMMENT '手机号',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱',
  `homeplace` varchar(100) DEFAULT NULL COMMENT '出生地',
  `sex` varchar(20) DEFAULT NULL COMMENT '性别',
  `birthday` varchar(20) DEFAULT NULL COMMENT '生日',
  `marital` varchar(20) DEFAULT NULL COMMENT '婚姻状况',
  `emergency_name` varchar(20) DEFAULT NULL COMMENT '紧急联系人',
  `emergency_phone` varchar(20) DEFAULT NULL COMMENT '紧急联系人手机号',
  `education` varchar(20) DEFAULT NULL COMMENT '最高学历',
  `education_start_time` date DEFAULT NULL COMMENT '入学时间',
  `education_end_time` date DEFAULT NULL COMMENT '毕业时间',
  `university` varchar(50) DEFAULT NULL COMMENT '毕业院校',
  `university_category` varchar(20) DEFAULT NULL COMMENT '院校分类',
  `university_style` varchar(20) DEFAULT NULL COMMENT '学习方式',
  `education2` varchar(20) DEFAULT NULL COMMENT '最高学历2',
  `academy2` varchar(50) DEFAULT NULL COMMENT '本专院校',
  `university_style2` varchar(20) DEFAULT NULL COMMENT '学习方式',
  `university_degree2` varchar(20) DEFAULT NULL COMMENT '学位',
  `university_category2` varchar(20) DEFAULT NULL COMMENT '院校分类',
  `degree2` varchar(20) DEFAULT NULL COMMENT '本专科学位',
  `category2` varchar(20) DEFAULT NULL COMMENT '分类',
  `education_number2` varchar(50) DEFAULT NULL COMMENT '学历证书编号',
  `education_major2` varchar(50) DEFAULT NULL COMMENT '专业',
  `major_category2` varchar(50) DEFAULT NULL COMMENT '专业类别',
  `professional_ranking2` varchar(50) DEFAULT NULL COMMENT '专业排名',
  `educations_number2` varchar(50) DEFAULT NULL COMMENT '学位证书编号',
  `education_start_time2` date DEFAULT NULL COMMENT '入学时间',
  `education_end_time2` date DEFAULT NULL COMMENT '毕业时间',
  `education_content2` text COMMENT '备注',
  `education3` varchar(20) DEFAULT NULL COMMENT '其他学历',
  `academy3` varchar(20) DEFAULT NULL COMMENT '毕业院校',
  `university_style3` varchar(50) DEFAULT NULL COMMENT '学习方式',
  `university_degree3` varchar(20) DEFAULT NULL COMMENT '学位',
  `university_category3` varchar(20) DEFAULT NULL COMMENT '毕业院校分类',
  `education_number3` varchar(50) DEFAULT NULL COMMENT '学历证书编号',
  `education_major3` varchar(50) DEFAULT NULL COMMENT '专业',
  `major_category3` varchar(20) DEFAULT NULL COMMENT '专业类别',
  `professional_ranking3` varchar(50) DEFAULT NULL COMMENT '专业排名',
  `educations_number3` varchar(50) DEFAULT NULL COMMENT '学历证书编号',
  `education_start_time3` date DEFAULT NULL COMMENT '入学时间',
  `education_end_time3` date DEFAULT NULL COMMENT '截止时间',
  `education_content3` text COMMENT '备注',
  `fulltime_work_life` int(2) DEFAULT NULL COMMENT '全职工作年限',
  `management_work_life` int(2) DEFAULT NULL COMMENT '管理岗位工作年限',
  `chinese_company_name` varchar(50) DEFAULT NULL COMMENT '公司中文名称',
  `english_company_name` varchar(50) DEFAULT NULL COMMENT '公司英文名称',
  `turnover_year` varchar(50) DEFAULT NULL COMMENT '公司年营业额',
  `company_size` varchar(20) DEFAULT NULL COMMENT '公司规模',
  `main_business` varchar(20) DEFAULT NULL COMMENT '主营业务',
  `Industry_category` varchar(50) DEFAULT NULL COMMENT '行业类别',
  `company_nature` varchar(50) DEFAULT NULL COMMENT '公司性质',
  `post_type` varchar(50) DEFAULT NULL COMMENT '岗位类型',
  `work_department` varchar(50) DEFAULT NULL COMMENT '工作部门',
  `work_position` varchar(50) DEFAULT NULL COMMENT '工作职位',
  `work_function1` varchar(50) DEFAULT NULL COMMENT '工作职能',
  `work_function2` varchar(50) DEFAULT NULL COMMENT '工作职能',
  `scale_responsible` varchar(50) DEFAULT NULL COMMENT '负责预算规模（万元）',
  `work_starttime` date DEFAULT NULL COMMENT '工作开始时间',
  `annual_income` varchar(20) DEFAULT NULL COMMENT '目前年收入',
  `annual_income_start` varchar(20) DEFAULT NULL COMMENT '起始年收入',
  `management_number` varchar(20) DEFAULT NULL COMMENT '负责人数',
  `position_situation` text COMMENT '负责岗位情况',
  `superior_name` varchar(100) DEFAULT NULL COMMENT '上级名称',
  `superior_post` varchar(100) DEFAULT NULL COMMENT '上级职位',
  `superior_phone` varchar(20) DEFAULT NULL COMMENT '上级电话',
  `agree_contact_suoerior` varchar(20) DEFAULT NULL COMMENT '是否同意与上级电话联系',
  `other_work_experience` text COMMENT '其他工作经历',
  `question_1` varchar(255) DEFAULT NULL COMMENT '自述短文1',
  `answer_1` text COMMENT '自述短文答案1',
  `question_2` varchar(255) DEFAULT NULL COMMENT '自述短文2',
  `answer_2` text COMMENT '自述短文答案2',
  `question_3` varchar(255) DEFAULT NULL COMMENT '自述短文3',
  `answer_3` text COMMENT '自述短文答案3',
  `card_front` varchar(100) DEFAULT NULL COMMENT '身份证正面',
  `card_back` varchar(100) DEFAULT NULL COMMENT '身份证反面',
  `diploma_scan` varchar(100) DEFAULT NULL COMMENT '毕业证扫描件',
  `postgraduate_diploma_scan` varchar(100) DEFAULT NULL COMMENT '研究生毕业证扫描件',
  `report_card` varchar(100) DEFAULT NULL COMMENT '本科阶段成绩单',
  `postgraduate_report_card` varchar(100) DEFAULT NULL COMMENT '研究生阶段成绩单',
  `resume_chinese` varchar(100) DEFAULT NULL COMMENT '中文简历',
  `company_organization_chart` varchar(100) DEFAULT NULL COMMENT '单位组织结构图',
  `resume_english` varchar(100) DEFAULT NULL COMMENT '英文简历',
  `english_essays` varchar(100) DEFAULT NULL COMMENT '英文申请短文',
  `additional_material` varchar(100) DEFAULT NULL COMMENT '附加材料',
  `interview_batch` varchar(100) DEFAULT NULL COMMENT '面试批次',
  `signup_step` int(11) DEFAULT NULL COMMENT '提交材料步骤',
  `signup_at` int(11) DEFAULT NULL COMMENT '提交时间',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态：0：未提交，1：审核第一步，2审核第二步，3：审核第三步，4：审核第四步，5：审核第五步，6：审核第六步，7：审核通过，8：发放offer，9：缴费完成',
  `status_reason` text COMMENT '未通过原因',
  `created_at` int(11) DEFAULT NULL COMMENT '申请时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='报名表';

DROP TABLE IF EXISTS `yii_user`;
CREATE TABLE `yii_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `nickname` varchar(50) DEFAULT NULL COMMENT '昵称',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `auth_id` int(11) DEFAULT NULL,
  `group_id` int(10) NOT NULL COMMENT '会员组',
  `auth_key` varchar(50) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL COMMENT '最后登陆时间',
  `last_ip` varchar(20) DEFAULT NULL COMMENT '最后登陆IP',
  `status` int(10) DEFAULT '1',
  `created_at` int(11) DEFAULT NULL COMMENT '添加时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING HASH,
  KEY `group_id` (`group_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';


INSERT INTO `yii_user` VALUES ('1', 'admin', '$2y$13$jw7oHWwcuvRibu2SELbFu./0JJq0nCM/W7NrggycBHlGnbWxlzJ1y', '张万龙', 'zhangwanlong@sundlands.com', '61704', '1', '6KGRmHQzUPOxvhXZ8Kw8WEWJVbw6zbah', '1528094483', '127.0.0.1', '10', '1524018959', '1528094483');
INSERT INTO `yii_user` VALUES ('2', 'cocoa', '$2y$13$XLQO2yErgO3DhbTyrAvyHewbK3upDHVCy0NvYrOAmiICIYOCbasVC', '测试', '11@qq.com', null, '1', 'hWoenOBMjsppnAU3BuxVhOdgQQZPEraZ', '1528082942', '127.0.0.1', '10', '1527240781', '1528082942');

DROP TABLE IF EXISTS `yii_user_group`;
CREATE TABLE `yii_user_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` char(100) NOT NULL DEFAULT '' COMMENT '名称',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态',
  `rules` text COMMENT '权限列表',
  `created_at` int(11) DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员分组';

INSERT INTO `yii_user_group` VALUES ('1', '站点管理员', '1', '1,2', '1524203340', '1527677190');

DROP TABLE IF EXISTS `yii_user_menu`;
CREATE TABLE `yii_user_menu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `pid` int(10) DEFAULT '0' COMMENT '上级菜单',
  `name` char(20) NOT NULL DEFAULT '' COMMENT '名称',
  `module` varchar(50) NOT NULL COMMENT '权限标识',
  `status` int(2) DEFAULT '1' COMMENT '状态',
  `sort` int(11) DEFAULT '0' COMMENT '排列顺序',
  `icon` varchar(20) DEFAULT NULL COMMENT '图标',
  `count` char(100) DEFAULT '' COMMENT '验证规则',
  `created_at` int(11) DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='管理员权限表';

INSERT INTO `yii_user_menu` VALUES ('5', '0', '后台用户', 'Menu/menu', '1', '2', 'user', 'user', '1514456372', '1514456372');
INSERT INTO `yii_user_menu` VALUES ('6', '5', '用户列表', 'user/index', '1', '1', '', '', '1493087938', '1493087938');
INSERT INTO `yii_user_menu` VALUES ('7', '6', '添加用户', 'user/create', '1', '0', '', '', '1493087952', '1493087952');
INSERT INTO `yii_user_menu` VALUES ('8', '6', '编辑用户', 'user/update', '1', '0', '', '', '1493087970', '1493087970');
INSERT INTO `yii_user_menu` VALUES ('9', '6', '删除用户', 'user/del', '1', '0', '', '', '1493087984', '1493087984');
INSERT INTO `yii_user_menu` VALUES ('11', '5', '用户分组', 'user-group/index', '1', '2', '', '', '1514257338', '1514257338');
INSERT INTO `yii_user_menu` VALUES ('12', '11', '添加分组', 'user-group/create', '1', '0', '', '', '1493088054', '1493088054');
INSERT INTO `yii_user_menu` VALUES ('13', '11', '编辑分组', 'user-group/update', '1', '0', '', '', '1513851415', '1513851415');
INSERT INTO `yii_user_menu` VALUES ('14', '11', '删除分组', 'user-group/del', '1', '0', '', '', '1493088080', '1493088080');
INSERT INTO `yii_user_menu` VALUES ('16', '5', '后台节点', 'user-menu/index', '1', '3', '', '', '1514257351', '1514257351');
INSERT INTO `yii_user_menu` VALUES ('17', '16', '添加节点', 'user-menu/create', '1', '0', '', '', '1493088136', '1493088136');
INSERT INTO `yii_user_menu` VALUES ('18', '16', '编辑节点', 'user-menu/update', '1', '0', '', '', '1493088149', '1493088149');
INSERT INTO `yii_user_menu` VALUES ('19', '16', '删除节点', 'user-menu/del', '1', '0', '', '', '1493088160', '1493088160');
INSERT INTO `yii_user_menu` VALUES ('1', '0', '管理中心', 'Menu/menu', '1', '1', 'home', '', '1514456392', '1514456392');
INSERT INTO `yii_user_menu` VALUES ('2', '1', '后台首页', 'site/index', '1', '0', '', '', '1514186626', '1514186626');
INSERT INTO `yii_user_menu` VALUES ('4', '3', '基础设置', 'system/index', '1', '0', '', '', '1524450992', '1524450992');
INSERT INTO `yii_user_menu` VALUES ('10', '6', '查看用户', 'user/view', '1', '0', '', '', '1525689883', '1525689883');
INSERT INTO `yii_user_menu` VALUES ('15', '11', '查看分组', 'user-group/view', '1', '0', '', '', '1525689925', '1525689943');
INSERT INTO `yii_user_menu` VALUES ('20', '16', '查看节点', 'user-menu/view', '1', '0', '', '', '1525689975', '1525689975');
INSERT INTO `yii_user_menu` VALUES ('3', '0', '网站设置', 'Menu/menu', '1', '3', 'gears', '', '1525689975', '1525689975');
INSERT INTO `yii_user_menu` VALUES ('21', '0', '报名管理', 'Menu/menu', '1', '2', 'list', '', '1528776026', '1528776724');
INSERT INTO `yii_user_menu` VALUES ('22', '21', '用户管理', 'member/index', '1', null, '', '', '1528776052', '1528776052');
INSERT INTO `yii_user_menu` VALUES ('23', '21', '报名列表', 'signup-manage/index', '1', '1', '', '', '1528776076', '1528776972');
