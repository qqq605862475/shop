/*
Navicat MySQL Data Transfer

Source Server         : luoxun
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-27 18:00:14
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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '安全水果', '0', '1', '0');
INSERT INTO `cate` VALUES ('4', '肉禽蛋品', '0', '4', '0');
INSERT INTO `cate` VALUES ('7', '粮油酱醋', '0', '7', '0');
INSERT INTO `cate` VALUES ('12', '四时菜蔬', '0', '12', '0');
INSERT INTO `cate` VALUES ('19', '水中鲜物', '0', '19', '0');
INSERT INTO `cate` VALUES ('20', '零食酒饮', '0', '20', '0');
INSERT INTO `cate` VALUES ('21', '面点小食', '0', '21', '0');
INSERT INTO `cate` VALUES ('22', '乳制品类', '0', '22', '0');
INSERT INTO `cate` VALUES ('23', '梨', '1', '1,23', '1');
INSERT INTO `cate` VALUES ('24', '土豆', '12', '12,24', '1');
INSERT INTO `cate` VALUES ('25', '鸡蛋', '4', '4,25', '1');
INSERT INTO `cate` VALUES ('26', '酱油', '7', '7,26', '1');
INSERT INTO `cate` VALUES ('27', '鱼', '19', '19,27', '1');
INSERT INTO `cate` VALUES ('28', '葡萄酒', '20', '20,28', '1');
INSERT INTO `cate` VALUES ('29', '饺子', '21', '21,29', '1');
INSERT INTO `cate` VALUES ('30', '冰淇淋', '22', '22,30', '1');
INSERT INTO `cate` VALUES ('31', '苹果', '1', '1,31', '1');
INSERT INTO `cate` VALUES ('32', '热带水果', '1', '1,32', '1');
INSERT INTO `cate` VALUES ('33', '苹果和梨', '1', '1,33', '1');
INSERT INTO `cate` VALUES ('34', '奇异果', '1', '1,34', '1');
INSERT INTO `cate` VALUES ('35', '柑橘柚类', '1', '1,35', '1');
INSERT INTO `cate` VALUES ('36', '葡萄和浆果类', '1', '1,36', '1');
INSERT INTO `cate` VALUES ('37', '瓜类', '1', '1,37', '1');
INSERT INTO `cate` VALUES ('38', '核果类', '1', '1,38', '1');
INSERT INTO `cate` VALUES ('39', '桃李杏类', '1', '1,39', '1');
INSERT INTO `cate` VALUES ('40', '禽类', '4', '4,40', '1');
INSERT INTO `cate` VALUES ('41', '猪肉类', '4', '4,41', '1');
INSERT INTO `cate` VALUES ('42', '羊肉类', '4', '4,42', '1');
INSERT INTO `cate` VALUES ('43', '肉制品', '4', '4,43', '1');
INSERT INTO `cate` VALUES ('44', '腌腊制品', '4', '4,44', '1');
INSERT INTO `cate` VALUES ('45', '南北干货', '7', '7,45', '1');
INSERT INTO `cate` VALUES ('46', '酱油和醋', '0', '46', '0');
INSERT INTO `cate` VALUES ('47', '欣和酱醋', '7', '7,47', '1');
INSERT INTO `cate` VALUES ('48', '食用油', '7', '7,48', '1');
INSERT INTO `cate` VALUES ('49', '调味品', '7', '7,49', '1');
INSERT INTO `cate` VALUES ('50', '蜂蜜 果酱', '7', '7,50', '1');
INSERT INTO `cate` VALUES ('51', '意面酱', '0', '51', '0');
INSERT INTO `cate` VALUES ('52', '番茄', '12', '12,52', '1');
INSERT INTO `cate` VALUES ('53', '根茎类', '12', '12,53', '1');
INSERT INTO `cate` VALUES ('54', '豆制品', '12', '12,54', '1');
INSERT INTO `cate` VALUES ('55', '茄果瓜花类', '0', '55', '0');
INSERT INTO `cate` VALUES ('56', '葱姜蒜和香料', '12', '12,56', '1');
INSERT INTO `cate` VALUES ('57', '冷藏冷冻菜蔬', '12', '12,57', '1');
INSERT INTO `cate` VALUES ('58', '蔬菜花卉盆栽', '12', '12,58', '1');

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
  `brand` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '海拔3300米小金青苹果 8个', '32', '52', '1', '52', '1', '1506323674', '1506323903', null, '小金家昇种植专业合作社', '四川阿坝州小金县的苹果合作社有很多，可是能够坚持不用化肥农药、除草剂，用牦牛、羊粪改良土壤，用草木灰替代化肥的方式种植苹果，仅此一家——小金家昇种植专业合作社。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><a href=\"https://www.yimishiji.com/public/files/detection_report/f1140fe6062cf2d7839b50f656deaf51.pdf\" target=\"_blank\" style=\"box-sizing: border-box; background-color: rgba(211, 204, 179, 0.6); co', '31', '1', '1', '1', '玫瑰庄园');
INSERT INTO `goods` VALUES ('2', '山中鲜有机鸡蛋', '27', '27', '1', '24', '1', '1506324019', '1506324019', null, '山中鲜', '有机土鸡蛋中的蛋黄较大，非常适合做煮鸡蛋和煎蛋，简单的烹调方法能将它优良的口感完全发挥出来。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><a href=\"https://www.yimishiji.com/public/files/detection_report/598c61e41b07b56b7c36a3d084120f55.pdf\" target=\"_blank\" style=\"box-sizing: border-box; background-color: rgba(211, 204, 179, 0.6); co', '25', '0', '1', '1', '争荣农场');
INSERT INTO `goods` VALUES ('3', '生态种植香水梨 6只', '49', '52', '1', '56', '1', '1506324123', '1506324123', null, '环翠庄园', '环翠庄园始建于2003年，起初作为内部供应基地，推行传统生产，后期提升为按照有机标准生产，并于2016年得到有机认证批复。主要种植品种为香水梨、核桃、菊花，并取得有机认证；其它少量小品种水果及小米等杂粮采取有机种植方法。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><span style=\"box-sizing: border-box;\">做个选择</span></p><p><a target=\"_blank\" href=\"https://www.yimishiji.com/tag-187.html\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(20', '23', '1', '1', '1', '百欧欢');
INSERT INTO `goods` VALUES ('4', '生态种植土豆', '15', '15', '1', '89', '1', '1506324215', '1506324215', null, '百欧欢', '多分布在东南亚，和潮汕地区，是潮州菜式的必需品之一。可做珍珠菜蛋花汤，或凉拌菜，与肉片炒食亦可。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><a href=\"https://www.yimishiji.com/public/files/detection_report/e4338aea5a43db8339c7c060a8aaa05f.pdf\" target=\"_blank\" style=\"box-sizing: border-box; background-color: rgba(211, 204, 179, 0.6); co', '24', '1', '1', '1', '九洲丰园');
INSERT INTO `goods` VALUES ('5', '禾然有机酱油', '36', '36', '1', '122', '1', '1506324475', '1506324475', null, '欣和', '禾然有机酱油没有任何添加剂、采用东北非转基因有机脱脂大豆和山东有机小麦、足期酿造，特别适合对食品要求严格的吃货。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><a href=\"https://www.yimishiji.com/public/files/detection_report/9355cd50de2e08e3de824f79ff0896bf.pdf\" target=\"_blank\" style=\"box-sizing: border-box; background-color: rgba(211, 204, 179, 0.6); co', '26', '1', '1', '1', '岑谷生态农场');
INSERT INTO `goods` VALUES ('6', '挪威北极鳕鱼块|带皮', '55', '65', '1', '21', '1', '1506324596', '1506324596', null, 'Ocean Gala', '纯正高等级的鳕鱼指鳕形目-鳕科-鳕属下的鳕鱼，分为大西洋鳕鱼，格陵兰鳕鱼和太平洋鳕鱼。本页所售为野生捕捞的大西洋鳕鱼，产地为靠近北极的挪威海...', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><span style=\"box-sizing: border-box;\">做个选择</span></p><p><a target=\"_blank\" href=\"https://www.yimishiji.com/tag-14.html\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(20,', '27', '1', '1', '1', '百欧欢');
INSERT INTO `goods` VALUES ('7', '珍匣苏维翁白干白葡萄酒', '188', '199', '1', '32', '1', '1506324700', '1506324700', null, '新玛利庄园', '有成熟醋栗、西番莲、新鲜青柠和异国草本的芳香。口感浓郁、强烈、饱满，以清爽的酸度结束。采用旋盖替代软木塞，开盖更加容易。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><span style=\"box-sizing: border-box;\">做个选择</span></p><p><a target=\"_blank\" href=\"https://www.yimishiji.com/tag-175.html\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(20', '28', '1', '1', '1', '半亩园');
INSERT INTO `goods` VALUES ('8', '大当家墨鱼水饺', '68', '72', '1', '90', '1', '1506324809', '1506324809', null, '船歌', '入口鲜美异常，更有充沛汤汁，馅料足量，更吃得到鲜浓的墨鱼味道。精选野生墨鱼，不添加防腐剂，坚持手工包制，皮和馅的比例为1:2。冷冻保存。', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><span style=\"box-sizing: border-box;\">做个选择</span></p><p><a target=\"_blank\" href=\"https://www.yimishiji.com/tag-175.html\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(20', '29', '1', '1', '1', '白朵菌菇');
INSERT INTO `goods` VALUES ('9', '海盐香草（Gelato）冰淇淋', '68', '68', '1', '68', '1', '1506324916', '1506324916', null, 'Vivi Dolce', '海盐与香草融合，混合碧根果碎屑，使咸与甜达到奇妙平衡。绵滑松软，是简单清爽的味道，家庭装更实惠哦！', '<p><span style=\"box-sizing: border-box;\">检验报告</span></p><p><span style=\"box-sizing: border-box;\">做个选择</span></p><p><a target=\"_blank\" href=\"https://www.yimishiji.com/tag-175.html\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(20', '30', '1', '1', '1', '九洲丰园');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('1', '1', '/uploads/20170925/94d64760a637e86957c4dcc35e5c82ce.jpg', '/uploads/20170925/650_94d64760a637e86957c4dcc35e5c82ce.jpg', '/uploads/20170925/250_94d64760a637e86957c4dcc35e5c82ce.jpg', '/uploads/20170925/100_94d64760a637e86957c4dcc35e5c82ce.jpg', '1');
INSERT INTO `image` VALUES ('2', '2', '/uploads/20170925/666ba4eeead3179aa4bd28b810269183.jpg', '/uploads/20170925/650_666ba4eeead3179aa4bd28b810269183.jpg', '/uploads/20170925/250_666ba4eeead3179aa4bd28b810269183.jpg', '/uploads/20170925/100_666ba4eeead3179aa4bd28b810269183.jpg', '1');
INSERT INTO `image` VALUES ('3', '3', '/uploads/20170925/da480412682f6df111ff32f4c0e958e9.jpg', '/uploads/20170925/650_da480412682f6df111ff32f4c0e958e9.jpg', '/uploads/20170925/250_da480412682f6df111ff32f4c0e958e9.jpg', '/uploads/20170925/100_da480412682f6df111ff32f4c0e958e9.jpg', '1');
INSERT INTO `image` VALUES ('4', '4', '/uploads/20170925/992724eeee04454507213e5864f26b22.jpg', '/uploads/20170925/650_992724eeee04454507213e5864f26b22.jpg', '/uploads/20170925/250_992724eeee04454507213e5864f26b22.jpg', '/uploads/20170925/100_992724eeee04454507213e5864f26b22.jpg', '1');
INSERT INTO `image` VALUES ('5', '5', '/uploads/20170925/fcf0cd93c65e7f8b7c7a735895da3f5c.jpg', '/uploads/20170925/650_fcf0cd93c65e7f8b7c7a735895da3f5c.jpg', '/uploads/20170925/250_fcf0cd93c65e7f8b7c7a735895da3f5c.jpg', '/uploads/20170925/100_fcf0cd93c65e7f8b7c7a735895da3f5c.jpg', '1');
INSERT INTO `image` VALUES ('6', '6', '/uploads/20170925/33d9c530cfef3e0259780eaf1b56d976.jpg', '/uploads/20170925/650_33d9c530cfef3e0259780eaf1b56d976.jpg', '/uploads/20170925/250_33d9c530cfef3e0259780eaf1b56d976.jpg', '/uploads/20170925/100_33d9c530cfef3e0259780eaf1b56d976.jpg', '1');
INSERT INTO `image` VALUES ('7', '7', '/uploads/20170925/7af46c7dfc50348525cff390397360f4.jpg', '/uploads/20170925/650_7af46c7dfc50348525cff390397360f4.jpg', '/uploads/20170925/250_7af46c7dfc50348525cff390397360f4.jpg', '/uploads/20170925/100_7af46c7dfc50348525cff390397360f4.jpg', '1');
INSERT INTO `image` VALUES ('8', '8', '/uploads/20170925/18e0aaeb1bafd53c13d4b8985e269b8e.jpg', '/uploads/20170925/650_18e0aaeb1bafd53c13d4b8985e269b8e.jpg', '/uploads/20170925/250_18e0aaeb1bafd53c13d4b8985e269b8e.jpg', '/uploads/20170925/100_18e0aaeb1bafd53c13d4b8985e269b8e.jpg', '1');
INSERT INTO `image` VALUES ('9', '9', '/uploads/20170925/600b88533b26385a4257d9b561aa1136.jpg', '/uploads/20170925/650_600b88533b26385a4257d9b561aa1136.jpg', '/uploads/20170925/250_600b88533b26385a4257d9b561aa1136.jpg', '/uploads/20170925/100_600b88533b26385a4257d9b561aa1136.jpg', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', 'admin', '123456', null, null, null, null, null, null, null, null);
INSERT INTO `member` VALUES ('2', '小明', '81dc9bdb52d04dc20036dbd8313ed055', '小明', '12345@qq.com', '1506407284', '127.0.0.1', null, null, '/uploads/20170926/4196b880773bcebc1f08ff430683a6b3.jpg', '1');

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

-- ----------------------------
-- Table structure for select
-- ----------------------------
DROP TABLE IF EXISTS `select`;
CREATE TABLE `select` (
  `selet_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `sustainable` varchar(255) NOT NULL,
  `farmer` varchar(255) NOT NULL,
  `natural` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `visit` varchar(255) NOT NULL,
  `ancient` varchar(255) NOT NULL,
  `negative` varchar(255) NOT NULL,
  `agriculture` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `gluten` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `gmo` varchar(255) NOT NULL,
  `produce` varchar(255) NOT NULL,
  PRIMARY KEY (`selet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of select
-- ----------------------------
INSERT INTO `select` VALUES ('1', '15', '可持续发展', '小农栽种', '天然无毒', '本地食材', '一米亲访', '古法手作', '无负面添加', '自然农法', '优质产地', '无麸质', '纯天然原料', '非转基因', '有机生产');
INSERT INTO `select` VALUES ('2', '9', '可持续发展', '', '天然无毒', '', '', '', '', '', '优质产地', '', '', '', '有机生产');
INSERT INTO `select` VALUES ('3', '7', '', '小农栽种', '', '本地食材', '一米亲访', '古法手作', '无负面添加', '自然农法', '', '无麸质', '纯天然原料', '非转基因', '');
INSERT INTO `select` VALUES ('4', '3', '可持续发展', '', '', '', '一米亲访', '', '无负面添加', '自然农法', '', '', '纯天然原料', '', '有机生产');
INSERT INTO `select` VALUES ('5', '10', '', '', '天然无毒', '本地食材', '', '古法手作', '无负面添加', '', '优质产地', '', '纯天然原料', '', '');
INSERT INTO `select` VALUES ('6', '11', '', '', '', '', '', '', '', '自然农法', '', '', '', '非转基因', '有机生产');
INSERT INTO `select` VALUES ('7', '12', '', '小农栽种', '天然无毒', '本地食材', '一米亲访', '', '', '', '', '无麸质', '纯天然原料', '', '');
INSERT INTO `select` VALUES ('8', '8', '可持续发展', '', '', '', '', '古法手作', '无负面添加', '', '优质产地', '', '', '非转基因', '有机生产');
INSERT INTO `select` VALUES ('9', '6', '', '小农栽种', '天然无毒', '', '一米亲访', '', '', '自然农法', '', '无麸质', '', '非转基因', '');
