/*
Navicat MySQL Data Transfer

Source Server         : xixi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-20 19:55:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `addr_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL COMMENT '区域  福建/厦门/湖里',
  `adderss` varchar(255) DEFAULT NULL COMMENT '。。。路。。号',
  `create_time` datetime DEFAULT NULL,
  `def_addr` varchar(255) DEFAULT NULL COMMENT '是否默认地址',
  PRIMARY KEY (`addr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `goods_num` int(11) DEFAULT NULL,
  `selected` int(11) DEFAULT NULL COMMENT '是否选中 0,1',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `level` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '电器', '0', '1', '0');
INSERT INTO `cate` VALUES ('2', '电脑', '1', '1,2', '1');
INSERT INTO `cate` VALUES ('3', '手机QAQ', '1', '1,3', '1');
INSERT INTO `cate` VALUES ('4', '水果', '0', '4', '0');
INSERT INTO `cate` VALUES ('5', '西瓜', '4', '4,5', '1');
INSERT INTO `cate` VALUES ('6', '香蕉', '4', '4,6', '1');
INSERT INTO `cate` VALUES ('7', '服装', '0', '7', '0');
INSERT INTO `cate` VALUES ('8', '男装', '7', '7,8', '1');
INSERT INTO `cate` VALUES ('9', '女装', '7', '7,9', '1');
INSERT INTO `cate` VALUES ('10', '男上装', '8', '7,8,10', '2');
INSERT INTO `cate` VALUES ('12', '家具 ', '0', '12', '0');
INSERT INTO `cate` VALUES ('16', 'iphone', '3', '1,3,16', '2');
INSERT INTO `cate` VALUES ('17', '安卓', '3', '1,3,17', '2');
INSERT INTO `cate` VALUES ('18', '椅子', '12', '12,18', '1');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(255) DEFAULT NULL,
  `sell_price` decimal(10,0) DEFAULT NULL COMMENT '销售价',
  `market_price` decimal(10,0) DEFAULT NULL COMMENT '市场价',
  `maketable` int(11) DEFAULT NULL COMMENT '上下架',
  `store` int(11) DEFAULT NULL COMMENT '库存',
  `freez` int(11) DEFAULT NULL COMMENT '冻结库存',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `last_modify` int(11) DEFAULT NULL COMMENT '最近更新时间',
  `last_modify_id` int(11) DEFAULT NULL COMMENT '最后一个更新人',
  `keywords` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `is_hot` varchar(255) DEFAULT NULL,
  `is_new` varchar(255) DEFAULT NULL,
  `recycle` varchar(255) DEFAULT NULL COMMENT '是否删除   商品的一个状态',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL COMMENT '原图片路径',
  `image_b_url` varchar(255) DEFAULT NULL COMMENT '大图',
  `image_m_url` varchar(255) DEFAULT NULL COMMENT '中图',
  `image_s_url` varchar(255) DEFAULT NULL COMMENT '小图',
  `is_face` varchar(255) DEFAULT NULL COMMENT '是否封面',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------

-- ----------------------------
-- Table structure for item
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `goods_num` int(11) DEFAULT NULL,
  `goods_price` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item
-- ----------------------------

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) DEFAULT NULL,
  `content` int(11) DEFAULT NULL COMMENT '生成订单/取消订单',
  `status` int(11) DEFAULT NULL COMMENT '成功/失败',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for manager
-- ----------------------------
DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `manager_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `lock` int(11) DEFAULT NULL COMMENT '是否冻结',
  `ip` varchar(255) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manager
-- ----------------------------

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `member_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reg_time` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `login_count` int(11) DEFAULT NULL COMMENT '登录次数',
  `login_time` int(11) DEFAULT NULL COMMENT '登录时间',
  `pic` varchar(255) DEFAULT NULL COMMENT '头像',
  `lock` varchar(255) DEFAULT NULL COMMENT '是否冻结  0,1,2',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` bigint(20) unsigned NOT NULL COMMENT '订单号',
  `total_amount` varchar(255) DEFAULT NULL COMMENT '订单总价',
  `member_id` int(11) DEFAULT NULL COMMENT '下单人的id',
  `status` varchar(255) DEFAULT NULL COMMENT '订单状态   noraml--正常  dead -- 已取消  finish 已完成',
  `pay_status` varchar(255) DEFAULT NULL COMMENT '支付状态  0-未支付  1-已支付',
  `pay_method` varchar(255) DEFAULT NULL COMMENT '支付方式  -1 --货到付款  online -- 在线支付  weixin -- 微信支付  alipay--支付宝',
  `create_time` datetime DEFAULT NULL,
  `last_modify` varchar(255) DEFAULT NULL,
  `ship_name` varchar(255) DEFAULT NULL,
  `ship_mobile` varchar(255) DEFAULT NULL,
  `ship_area` varchar(255) DEFAULT NULL,
  `ship_addr` varchar(255) DEFAULT NULL,
  `memo` varchar(255) DEFAULT NULL COMMENT '订单附言',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
