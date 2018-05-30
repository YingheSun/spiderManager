/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : signup

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-30 19:03:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yii_user
-- ----------------------------
DROP TABLE IF EXISTS `yii_user`;
CREATE TABLE `yii_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `nickname` varchar(50) DEFAULT NULL COMMENT '昵称',
  `sex` int(2) DEFAULT '3' COMMENT '性别',
  `realname` varchar(100) DEFAULT NULL COMMENT '真实姓名',
  `birthday` varchar(50) DEFAULT NULL COMMENT '生日',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `avatar` varchar(100) DEFAULT NULL COMMENT '头像',
  `auth_id` int(11) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL COMMENT '签名',
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

-- ----------------------------
-- Records of yii_user
-- ----------------------------
INSERT INTO `yii_user` VALUES ('1', 'admin', '$2y$13$jw7oHWwcuvRibu2SELbFu./0JJq0nCM/W7NrggycBHlGnbWxlzJ1y', '张万龙', '3', '张万龙', '', 'zhangwanlong@sundlands.com', null, '61704', '', '1', '6KGRmHQzUPOxvhXZ8Kw8WEWJVbw6zbah', '1527676598', '127.0.0.1', '10', '1524018959', '1527676598');
INSERT INTO `yii_user` VALUES ('2', 'cocoa', '$2y$13$XLQO2yErgO3DhbTyrAvyHewbK3upDHVCy0NvYrOAmiICIYOCbasVC', '测试', '1', '测试', '', '11@qq.com', null, null, '', '1', 'hWoenOBMjsppnAU3BuxVhOdgQQZPEraZ', '1527240793', '127.0.0.1', '10', '1527240781', '1527240793');

-- ----------------------------
-- Table structure for yii_user_group
-- ----------------------------
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

-- ----------------------------
-- Records of yii_user_group
-- ----------------------------
INSERT INTO `yii_user_group` VALUES ('1', '站点管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', '1524203340', '1527677190');

-- ----------------------------
-- Table structure for yii_user_menu
-- ----------------------------
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
) ENGINE=MyISAM AUTO_INCREMENT=4413 DEFAULT CHARSET=utf8 COMMENT='管理员权限表';

-- ----------------------------
-- Records of yii_user_menu
-- ----------------------------
INSERT INTO `yii_user_menu` VALUES ('5', '0', '后台用户', 'Menu/menu', '1', '2', 'user', 'user', '1514456372', '1514456372');
INSERT INTO `yii_user_menu` VALUES ('6', '5', '用户列表', 'user/index', '1', '0', '', '', '1493087938', '1493087938');
INSERT INTO `yii_user_menu` VALUES ('7', '6', '添加用户', 'user/create', '1', '0', '', '', '1493087952', '1493087952');
INSERT INTO `yii_user_menu` VALUES ('8', '6', '编辑用户', 'user/update', '1', '0', '', '', '1493087970', '1493087970');
INSERT INTO `yii_user_menu` VALUES ('9', '6', '删除用户', 'user/del', '1', '0', '', '', '1493087984', '1493087984');
INSERT INTO `yii_user_menu` VALUES ('11', '5', '用户分组', 'user-group/index', '1', '0', '', '', '1514257338', '1514257338');
INSERT INTO `yii_user_menu` VALUES ('12', '11', '添加分组', 'user-group/create', '1', '0', '', '', '1493088054', '1493088054');
INSERT INTO `yii_user_menu` VALUES ('13', '11', '编辑分组', 'user-group/update', '1', '0', '', '', '1513851415', '1513851415');
INSERT INTO `yii_user_menu` VALUES ('14', '11', '删除分组', 'user-group/del', '1', '0', '', '', '1493088080', '1493088080');
INSERT INTO `yii_user_menu` VALUES ('16', '5', '后台节点', 'user-menu/index', '1', '0', '', '', '1514257351', '1514257351');
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
