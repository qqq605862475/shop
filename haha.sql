/*
Navicat MySQL Data Transfer

Source Server         : xixi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-27 18:45:33
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
  `content` text,
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `is_hot` varchar(255) DEFAULT NULL,
  `is_new` varchar(255) DEFAULT NULL,
  `recycle` varchar(255) DEFAULT NULL COMMENT '是否删除   商品的一个状态',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '海拔3300米小金青苹果 8个', '32', '52', '1', '52', '1', '1506323674', '1506405791', null, '小金家昇种植专业合作社', '四川阿坝州小金县的苹果合作社有很多，可是能够坚持不用化肥农药、除草剂，用牦牛、羊粪改良土壤，用草木灰替代化肥的方式种植苹果，仅此一家——小金家昇种植专业合作社。', '<p><span style=\"box-sizing: border-box;\">酸脆多汁，野生苹果的味道</span></p><p><img src=\"https://img.yimishiji.com/v1/img/66d406195d0b668350c6944111410c25.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/ff5f3e73e64c587def615b14731a6ad6.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">川藏高原独特的气候环境给予最自然的味道；<br style=\"box-sizing: border-box;\"/>生产过程不用农药、化肥和除草剂；<br style=\"box-sizing: border-box;\"/>若鲜食不惯，可做做色拉菜或凉拌菜配菜；</p><p><img src=\"https://img.yimishiji.com/v1/img/05b5f375af8aa35702519cd55c1d26d9.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/316ec15bca54ad3c0ffe9cfb590ceb38.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">16年无农药，当地藏民的原始苹果</span></p><p><img src=\"https://img.yimishiji.com/v1/img/d0782246087025e7252ac0c40693ecb0.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">坚持不用化肥农药、除草剂，在专业机构的指导下，果园实行精细化施肥，用牦牛、羊粪改良土壤，用草木灰替代化肥的方式种植苹果；<br style=\"box-sizing: border-box;\"/>得天独厚的自然环境，果园里的苹果不除草，甚至不浇水，只有野生严苛状态下生长的作物，才拥有最自然的味道。</p><p><img src=\"https://img.yimishiji.com/v1/img/317121c2c638ec066c235a9dab055dc7.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/bc8570b292e1c3e6eae87be3697aed68.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><br/></p>', '31', '1', '1', '1');
INSERT INTO `goods` VALUES ('2', '山中鲜有机鸡蛋', '27', '27', '1', '24', '1', '1506324019', '1506406435', null, '山中鲜', '有机土鸡蛋中的蛋黄较大，非常适合做煮鸡蛋和煎蛋，简单的烹调方法能将它优良的口感完全发挥出来。', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p><img src=\"https://img.yimishiji.com/v1/img/5bbe613173324990a8722aa717ab48a3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">山中鲜的有机鸡蛋的蛋香味非常浓郁，是因为在养殖的过程中，鸡的食物非常多样，这样就造成了其风味物质更为多样。在昆虫、野果稀少的季节，鸡每天吃的原粮是玉米、膨化大豆粉，均来自没有污染的土壤，而且生产过程不添加和使用化肥、农药。如此严苛的饲养，才有了好吃的山中鲜有机鸡蛋。</p><p><img src=\"https://img.yimishiji.com/v1/img/a81b9b2a95e6abf05931a6e72650fec7.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">鸡蛋的香味，也跟鸡的运动强度有关系，山中鲜的柴鸡放养在山坡上，运动量更大，口味自然就好。</p><p><img src=\"https://img.yimishiji.com/v1/img/7f524848f041973ca019275972974f60.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">土鸡蛋中的脂肪含量更高，所以蛋黄较大，非常适合做煮鸡蛋和煎蛋，简单的烹调方法能将它优良的口感完全发挥出来。</p><p><img src=\"https://img.yimishiji.com/v1/img/db3ef66e62ff9ae6251409cbd069deda.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">选择「本身吃得好」的鸡下的蛋</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">动物吃什么饲料，吃得好不好，影响着它的味道。美国厨师思想家曾说：「一个自称永续的鱼类供应商告诉我，他们用鸡粉来喂鱼，当我知道后，我觉得那条鱼吃起来像鸡。」</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">选择「无激抗」</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">激素能使动物吃得少、长得快，抗生素可以让封闭空间大密度生活的动物少生病，虽然人类摄食之后对健康一时没有重大影响，但慢性累积不排除会对身体有负面作用，这是我们坚持无激抗的原因。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">选择「走地散养」</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">动物生活在宽广的地方，精神压力低，心理快乐，自由运动，生理也健康，风味会更好。密度高的工业化养殖，动物容易互相传染疾病，业者通常会打抗生素防止疾病，打生长激素提升生长速率。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">鸡蛋的颜色和大小会影响它的营养价值吗？</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：蛋的颜色有差吗？<br style=\"box-sizing: border-box;\"/>A：褐色与白色的鸡蛋，无论风味或营养价值都没有任何不同，就像棕色皮肤的拉丁人会生出棕色皮肤的小孩，褐色羽毛的鸡也会生出褐色外壳的蛋。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：蛋的大小有差吗？<br style=\"box-sizing: border-box;\"/>A：通常年纪小的鸡，生的蛋也会比较小，蛋壳厚度较厚。鸡龄大的鸡产的蛋较大颗、蛋壳厚度较薄，这是因为母鸡的产道会随时间变宽。大小颗并不影响营养价值， 只是蛋壳厚的鸡蛋较方便保存和运送。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">好鸡蛋，怎么保存？</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：鸡蛋可以放多久？<br style=\"box-sizing: border-box;\"/>A：鸡蛋是高蛋白的食材，蛋壳中又含有气孔会与空气接触，可能造成细菌入侵。因此，一般建议在购买后两周左右吃完。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：鸡蛋怎么放？<br style=\"box-sizing: border-box;\"/>A：鸡蛋的钝端有气室，朝上摆放可以让鸡蛋呼吸新鲜空气，维持鸡蛋的新鲜度。若朝下摆放，气室无法进行呼吸，被闷住的鸡蛋很容易发臭坏掉。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：鸡蛋可以放在冰箱的侧门吗？<br style=\"box-sizing: border-box;\"/>A：尽量不要，因为冰箱门上的温度一般较高，而且开关冰箱门会使蛋白质松动变质。如果可以的话，将蛋盒直接放入冷藏室，能维持鸡蛋的品质。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">好鸡蛋，怎么处理？</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：鸡蛋要清洗吗？<br style=\"box-sizing: border-box;\"/>A：鸡蛋买回家后，不要马上清洗，潮湿的环境会让蛋壳表面的病菌渗入鸡蛋。用干布轻擦去除表面灰尘，烹煮前再用清水冲洗。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Q：鸡蛋可以生吃吗？<br style=\"box-sizing: border-box;\"/>A：建议不要。生鸡蛋中含有沙门氏杆菌，易造成食物中毒。生鸡蛋里的抗生物素蛋白，会阻碍食物生物素的吸收，导致食欲减退，因此不鼓励直接生吃鸡蛋。</p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p><img src=\"https://img.yimishiji.com/v1/img/6dafa75c98a5a9d7ceea52a82ecf2f8c.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">山中鲜土鸡的鸡舍以就地取材的黄土和草木建造，鸡舍与鸡舍之间距离很远，这给与了它们自在的活动空间。它们渴了饮山泉、溪水、甘露，饿了吃昆虫、杂草、野果，采用生物技术和中草药保健理念，自然放养在皖南山林、果林中。</p><p><img src=\"https://img.yimishiji.com/v1/img/80057778c99ccdab9f2f418556ca0625.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">鸡吃得安全，我们的健康才有保证。</p><p><br/></p>', '25', '0', '1', '1');
INSERT INTO `goods` VALUES ('3', '生态种植香水梨 6只', '49', '52', '1', '56', '1', '1506324123', '1506406866', null, '环翠庄园', '环翠庄园始建于2003年，起初作为内部供应基地，推行传统生产，后期提升为按照有机标准生产，并于2016年得到有机认证批复。主要种植品种为香水梨、核桃、菊花，并取得有机认证；其它少量小品种水果及小米等杂粮采取有机种植方法。', '<p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">安果梨为产地直发，每天下午4点前截单，第2天产地发货，第3天送到家中。生态种植的珍贵梨子，好物值得等待。</p><p><img src=\"https://img.yimishiji.com/v1/img/4ef586e75790f53014c56d3d9aadcf50.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">直接吃酸甜脆硬，全熟后甜软可口</span></p><p><img src=\"https://img.yimishiji.com/v1/img/f90cdce5700b59214b64f33f716ae726.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">入口微酸，接着是梨子的香甜气息，脆硬水分多<br style=\"box-sizing: border-box;\"/>可直接吃，也可常温放几天变软后再吃，风味不同<br style=\"box-sizing: border-box;\"/>酸甜口：脆硬微涩，酸甜诱人；<br style=\"box-sizing: border-box;\"/>脆甜口：常温养熟约7天，果皮转黄，脆甜多汁<br style=\"box-sizing: border-box;\"/>香甜口：常温养熟约10天，果皮浅黄，果肉微软，香甜多汁；<br style=\"box-sizing: border-box;\"/>酒香：常温养熟约15天，果皮金黄，果肉细软，浓香甘甜；更可以拔出果梗，吮吸肉汁，请7天内食用完；</p><p><img src=\"https://img.yimishiji.com/v1/img/3adca344bfb5e2a58f648cd54a0d6ed4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">辽西北的特色水果，稀少的珍贵品种</span></p><p><img src=\"https://img.yimishiji.com/v1/img/176e4bef3ac5887aa9a600ff933467ee.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/16afd92df18f6c3aeb63eec8ad78ee0e.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">当地特产，是珍贵稀少的梨子品种<br style=\"box-sizing: border-box;\"/>辽西北黑水镇，2950小时长光照<br style=\"box-sizing: border-box;\"/>多风少雨，昼夜温差大，空气清新洁净<br style=\"box-sizing: border-box;\"/>病虫害少，是安果梨最佳的种植地</p><p><img src=\"https://img.yimishiji.com/v1/img/0f47d30c8af7cf64ea2bb099d9b94e84.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">以有机方式管理的泽正田园</span></p><p><img src=\"https://img.yimishiji.com/v1/img/98ae95dc79bca349ae2d0611aaaa3346.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">种草、培育有益菌改良土壤；<br style=\"box-sizing: border-box;\"/>不施任何化学肥料，不打膨大剂；<br style=\"box-sizing: border-box;\"/>肥料来自黄豆、奶粉等发酵豆奶及牛粪沼液；<br style=\"box-sizing: border-box;\"/>人工翻压割草当肥料提升土壤肥力；<br style=\"box-sizing: border-box;\"/>被虫子咬过的梨子才是真正不打药的好果子。</p><p><img src=\"https://img.yimishiji.com/v1/img/c549c7a3e09a05f410d653e15078b796.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><br/></p>', '23', '1', '1', '1');
INSERT INTO `goods` VALUES ('4', '生态种植土豆', '15', '15', '1', '89', '1', '1506324215', '1506406833', null, '百欧欢', '多分布在东南亚，和潮汕地区，是潮州菜式的必需品之一。可做珍珠菜蛋花汤，或凉拌菜，与肉片炒食亦可。', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p><img src=\"https://img.yimishiji.com/v1/img/4e4013ad6e41ae1afe33e23d91524be3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">土豆虽然易做，又方法多，但如果知道一些烹饪料理时的诀窍的话，会让你事半功倍。</p><p><img src=\"https://img.yimishiji.com/v1/img/0a7f697c48f65295d88dd8c81eeb4b3f.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">诀窍一：新土豆炖煮，老土豆炒食。新鲜土豆口感细腻绵软，口感很面，所以适合做汤、炖煮；而老土豆水分减少，口感爽脆，适合炒食。</p><p><img src=\"https://img.yimishiji.com/v1/img/525810dc1d6760dc1621bb1259e1653b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">诀窍二：土豆削皮或切完，要马上泡在水里。土豆中含多酚氧化酶，在氧气的作用下会发生褐变，放水中可延缓其氧化时间。在浸泡时，也可在水中加少许醋，一来能让土豆口感脆爽，二来能减少土豆中营养的流失。</p><p><img src=\"https://img.yimishiji.com/v1/img/4271fcd64223295e419c1f3f09c2b10e.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">诀窍三：小火炖土豆容易熟。大土豆用小火炖煮，才能均匀地熟烂。若用急火、大火炖煮，很容易外层熟烂开裂而内部却是生的。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">诀窍四：土豆泥带皮蒸保存营养。带皮蒸的整土豆营养损失更少。去皮蒸会让水分更容易进入土豆中，这样蒸出来的土豆水分太多，口感不好。</p><p><img src=\"https://img.yimishiji.com/v1/img/b659e99b6f0bcf6619fb481d49a765bc.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">如果土豆发芽了就扔掉，那也太可惜了，所以我们可以选择性的食用。当土豆刚刚发芽、芽还生长得不大时，可以将芽和芽眼挖掉一块，其余部分还是可以吃的。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">因为这时的毒素（对人体有害的龙葵碱）还集中在芽眼及附近的部分，毒素还没有扩展。挖去芽和芽眼后，削去皮，用水浸泡半小时后再加工食用。这种土豆不宜炒丝或炒片吃，可以红烧、炖或者煮食。由于龙葵碱遇酸易分解，所以烹调时可加些醋。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">想要预防土豆长芽，应该把它贮存在低温、通风、没有阳光直射的地方。如果生芽过多、且土豆皮的表面已经变成黑绿色就不要再吃了。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">推荐料理：孜然土豆、土豆饼、土豆火腿早餐饼</p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">十多年来坚持对农药化肥Say No。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">十二年的时间，用敬畏之心慢慢改善农场的土质，从贫瘠、坎坷到目前至少三四十公分的基层，这是百欧欢做这个有机农场的初心，他们是真的下决心要改善土壤。生长在这里的蔬果，身体里吸收的大地养分，值得放心。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">百欧欢农场并不大，但以植物种类的数量密度来算，可能是除植物园外，植物品种密度最大的地方。对于很多农场来说，只会种植一些收益可观的作物，而收益低的作物只会浪费大量的劳力，没有效益，但百欧欢不这么想。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">「我们也通过不同的作物，来改善生态，因为作物的品相越多，对于生态来讲越好，每一种作物的生长，都是一条新的食物链的开始，一种作物就会带来一种昆虫，昆虫可能带来一种青蛙，青蛙可能带来一种鸟，如果我有三百多种的作物在这里，那么就可以拥有非常丰富的食物链和生态系。」</p><p><br/></p>', '24', '1', '1', '1');
INSERT INTO `goods` VALUES ('5', '禾然有机酱油', '36', '36', '1', '122', '1', '1506324475', '1506406511', null, '欣和', '禾然有机酱油没有任何添加剂、采用东北非转基因有机脱脂大豆和山东有机小麦、足期酿造，特别适合对食品要求严格的吃货。', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p><img src=\"https://img.yimishiji.com/v1/img/4a9a7123c7e74b37e8eb7934a3b16a83.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">禾然有机酱油，富浓郁的酱香和酯香，它的蛋白质、钙、镁、钾、维生素C含量高，是普通酱油的两倍。</p><p><img src=\"https://img.yimishiji.com/v1/img/72eba881d15b916b852cb295880756f4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">人类「酱」心独具的变化出各种美食佳肴，禾然的有机酱油用作蘸食、红烧、调馅、做汤或炒菜，都合适，煮一道经典的红烧肉或是酱油鸡翅，好好慰劳自己与家人的胃！</p><p><img src=\"https://img.yimishiji.com/v1/img/8f73220180ebc4c1536803ebfaa538a3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">禾然有机酱油没有任何添加剂，主要成分采东北非转基因有机脱脂大豆，它的蛋白质含量高达54%。而另外一项重要原料－山东有机小麦，生长期长，营养丰富。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">酿造过程中，充分大豆的营养物质，因此能生成20余种游离氨基酸以及生物活性物质。其中，氨基酸态氮含量每百毫升大于等于0.9g，超过国家标准，是现在有机酱油中氨基酸态氮含量第一名。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">种植此两种作物的土地，在两年内未曾使用农药与化肥，确保土壤无污染。好原料再搭配全程恒温足期的密闭式酿造……特别适合对食品要求严格的吃货。</p><p><br/></p>', '26', '1', '1', '1');
INSERT INTO `goods` VALUES ('6', '挪威北极鳕鱼块|带皮', '55', '65', '1', '21', '1', '1506324596', '1506406622', null, 'Ocean Gala', '纯正高等级的鳕鱼指鳕形目-鳕科-鳕属下的鳕鱼，分为大西洋鳕鱼，格陵兰鳕鱼和太平洋鳕鱼。本页所售为野生捕捞的大西洋鳕鱼，产地为靠近北极的挪威海...', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p><img src=\"https://img.yimishiji.com/v1/img/eca4b82cd99f3d93f81e85a8b4666e2f.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">纯正高等级的鳕鱼指鳕形目-鳕科-鳕属下的鳕鱼，分为大西洋鳕鱼，格陵兰鳕鱼和太平洋鳕鱼。本页所售为野生捕捞的大西洋鳕鱼，产地为靠近北极的挪威海域。</p><p><img src=\"https://img.yimishiji.com/v1/img/aa45e768f622c061b9d43dbd6749aff3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">本款为带皮鳕鱼块，肉质丰厚，肥嫩鲜滑，清口不油腻。很多人特别喜欢吃煎过的鱼皮，焦脆喷香。</p><p><img src=\"https://img.yimishiji.com/v1/img/6058415a674b630c191d8b54fe3bc701.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/d49fc0e3748a764a54ae562b57e89b99.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Ocean Gala秉承原生态、纯野生、真天然、富营养、全追溯、可持续6大特色。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Ocean Gala海鲜均捕捞自阿拉斯加、挪威、冰岛等世界各地拥有纯净天然水质，清澈冰冷的辽阔海域，这些海域有着地球上保存最完整的蓝色生态系统。来自这些深海寒冰水域的海鲜，肉质精细、味道鲜美、且富含人体所需的各种优质蛋白及Omega-3不饱和脂肪酸、虾青素等多种稀缺性营养成份，深受人们的喜爱。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">公司掌握经认证的MSC证书（Marine Stewardship Council认证，一项已被认可的针对海洋渔业以及加工水产品的良好管理的供应链认证项目）。一直坚持科学系统的捕捞管理体系，保证渔业发展和海鲜来源的持续性。从源头的捕捞到最后的货物出售，一一记录在案，以备随时查阅。通过全程追溯系统跟踪产品，保障质量安全。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">MSC，即Marine Stewardship Council（海洋管理理事会）的缩写，是一个独立的、全球性非盈利性国际组织。于1997年，在WWF（世界自然基金会）的协助下创立，其成立宗旨是保护日益减少的鱼类资源，保护地球海洋环境，寻求不可持续捕鱼作业问题的解决方法。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">这个认证对于喜欢吃海鲜的饕餮来说，最大的意义就在于让以后的饕餮也有鱼吃。虽然MSC认证不是产品质量等级认证，但是经过MSC认证过的海鲜，意味着是纯净（污染指数较低）海域中捕捞出的野生海鲜，有着可靠的品质和更高等级的安全保障——这可能是对海鲜爱好者最大的现实意义。</p><p><br/></p>', '27', '1', '1', '1');
INSERT INTO `goods` VALUES ('7', '珍匣苏维翁白干白葡萄酒', '188', '199', '1', '32', '1', '1506324700', '1506406671', null, '新玛利庄园', '有成熟醋栗、西番莲、新鲜青柠和异国草本的芳香。口感浓郁、强烈、饱满，以清爽的酸度结束。采用旋盖替代软木塞，开盖更加容易。', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">有成熟醋栗、西番莲、新鲜青柠和细微的草本植物芳香。口感浓郁、强烈、饱满，以清爽的酸度结束。</p><p><img src=\"https://img.yimishiji.com/v1/img/6f198f5d9cf13af6cd6abe6fa14bc338.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">这款珍匣苏维翁白干白葡萄酒来自新西兰马尔波罗/万宝龙（Marlborough）产区，新玛利庄园（Villa Maria）酒庄出品。这款酒在2006年被《酒评家杂志》评为89分：<br style=\"box-sizing: border-box;\"/>「辛辣活泼，绿苹果、青草、矿物及温柏味，余味有辛辣的醋栗味。」</p><p><img src=\"https://img.yimishiji.com/v1/img/67934a32d449a297703b28df6729aaaa.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">苏维翁白（Sauvignon Blanc），又名长相思，原产自法国波尔多，果味丰富，有着清新爽口的酸度，带有青草味道，犹如反叛的女孩，率真地展示自己，令人浮想联翩。长相思葡萄在Marlborough生长良好。由于气候凉爽，导致其香气清爽，有醋栗树叶子、荨麻、草、柚子皮、白色水果、矿石等气味。</p><p><img src=\"https://img.yimishiji.com/v1/img/389fd572320a0e4da15f3eda8aa9efc4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">推荐搭配：芒果，凯撒沙拉，原味坚果，白灼虾，烤火鸡肉，清淡的白肉。</p><p><img src=\"https://img.yimishiji.com/v1/img/3278e75ec7fc4ecde39260f4de2983f2.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">品赏提示：<br style=\"box-sizing: border-box;\"/>1. 喝白葡萄酒的酒杯，杯肚和杯口都偏小，这样容易聚集酒的香气，不至于让香气消散得太快。<br style=\"box-sizing: border-box;\"/>2. 喝前先冰镇。在低温下，白葡萄酒的酸甜度将更为平衡，同时能够防止香气快速流失。</p><p><img src=\"https://img.yimishiji.com/v1/img/8fa80acbc2326aa298f966e76ae9073d.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">这款酒采用旋盖替代软木塞，开盖更加容易。&quot;</p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">&quot;新西兰位于南半球，由南到北纬度相距约有6°，对照北半球相同的位置，大约等于巴黎到非洲北部，（涵盖欧洲最富盛名的几处产区：勃根地、隆河、波尔多、乡堤），新西兰全岛几乎绿草如茵，以畜牧业为主，近三十年间葡萄耕种逐渐发展成为重要农业之一。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">新西兰葡萄酒重要的产区有霍克斯湾(Hawkes)、奥克兰(Auckland)、吉斯伯恩(Gisborne)、万宝龙(Marlborough)四大产区。虽然新西兰出产的红葡萄酒品质不差，但白葡萄酒还是占了全国产量的90%，在南岛万宝龙区出产的苏维翁白葡萄酒(Sauvignon Blanc)更以香味丰富浓郁、雅致清新闻名世界。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">新西兰分为南岛与北岛两大岛屿，南岛寒冷，北岛较为炎热。新西兰最出色的白葡萄酒几乎都来自南岛，而万宝龙正处于南岛北部的延伸。万宝龙东北面朝海，其他三面由里奇蒙德山脉和凯库拉山脉环绕。而后冰川时期融化而形成的怀鲁河（Wairau River）和阿瓦提亚河（Awatere River）环绕的河谷，就是万宝龙葡萄种植最为密集的地区。这里夏季温暖，秋季漫长干燥，土壤以泥沙地为主，含有大量漂石，能够反射热量，拥有得天独厚优越的自然条件，加上成熟季中凉爽的夜晚能够保持葡萄中自然的酸度成分，造就了闻名世界的优质白葡萄酒。&quot;</p><p><br/></p>', '28', '1', '1', '1');
INSERT INTO `goods` VALUES ('8', '大当家墨鱼水饺', '68', '72', '1', '90', '1', '1506324809', '1506406711', null, '船歌', '入口鲜美异常，更有充沛汤汁，馅料足量，更吃得到鲜浓的墨鱼味道。精选野生墨鱼，不添加防腐剂，坚持手工包制，皮和馅的比例为1:2。冷冻保存。', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p><img src=\"https://img.yimishiji.com/v1/img/3240732fae095fca6de0bcd68cb697a4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">入口鲜美异常，更有充沛汤汁，馅料足量，更吃得到鲜浓的墨鱼味道。精选野生墨鱼，不添加防腐剂和味精，鱼水饺的鲜味自然天成，坚持手工包制，皮和馅的比例为1:2。冷冻保存。</p><p><img src=\"https://img.yimishiji.com/v1/img/71ff32716490730a57c7eb2eba9d6484.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/36769bbfcaad8afc35296fd395a42b7c.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">黑色的饺子皮由墨鱼汁与面粉加水混合而成，再无任何色素添加。精选3斤以内的野生墨鱼，鱼身纹络必须清晰又要有天然规则，从墨鱼到转墨鱼馅，只选用整只墨鱼40%的桶状鱼身作为主要馅料，鱼粒和鱼馅以3:7调和，剁鱼馅采用剁刀翻转的方式，发挥鱼肉更好的口感，再辅以少量的猪肉、韭菜等提鲜提味。</p><p><img src=\"https://img.yimishiji.com/v1/img/7f35323b72292242abe8e5e14549d32b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/ff506275c1f254eff241581482f265c8.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">如何煮鱼水饺？像一般的饺子一样煮就行了！<br style=\"box-sizing: border-box;\"/>1.	无需解冻，将水饺直接放入沸水中，沿锅边轻轻搅动防止粘锅；<br style=\"box-sizing: border-box;\"/>2.	带水饺全部浮起后，转小火，加3次冷水（约7-8分钟）即熟；<br style=\"box-sizing: border-box;\"/>3.	捞起盛入盘中，按个人口味搭配酱油、醋、蒜蓉等调料，即可食用。（不加也行，因为鱼水饺本身已足够鲜美）</p><p><img src=\"https://img.yimishiji.com/v1/img/253767750793df2ada3d8da0c01809e1.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">船歌的鱼水饺源于胶东半岛沿海一带的传统渔家美食，渔家的生活饮食习惯以海鲜为主，包饺子自然也离不开海鲜。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">「船歌」鱼水饺坚持手工制作与严格选材，它的成功面世，使「鱼水饺」这一传统美食，升华成为中华饺子大家庭中一款特色鲜明、具有浓郁渔家文化气息的海鲜品类代表性产品。鱼饺子的出现走进了人们的生活，跟上了时代的节奏，将饺子文化进一步传承，成为青岛的美食名片。</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">船歌鱼水饺采用新鲜的海鱼肉及其他海鲜为原料，以独特配方精心调制入馅，全部水饺均以手工包制而成，皮薄馅大、口感细腻爽滑，味道鲜美无比，具有浓郁的渔家特色，是胶东渔家饮食文化的代表性美食。</p><p><br/></p>', '29', '1', '1', '1');
INSERT INTO `goods` VALUES ('9', '海盐香草（Gelato）冰淇淋', '68', '68', '1', '68', '1', '1506324916', '1506406740', null, 'Vivi Dolce', '海盐与香草融合，混合碧根果碎屑，使咸与甜达到奇妙平衡。绵滑松软，是简单清爽的味道，家庭装更实惠哦！', '<p><span style=\"box-sizing: border-box;\">尝过这一味</span></p><p><img src=\"https://img.yimishiji.com/v1/img/afeb1287207722aaba04b92355ce3143.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/0856e0d95ffc5c5fe6b3618e6a51f46b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><img src=\"https://img.yimishiji.com/v1/img/2c135ed7c37b8a8d6b7b408b2bcb6dc7.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">海盐与香草融合，混合碧根果碎屑，使咸与甜达到奇妙平衡。绵滑松软，入口香醇，回味绵绵，家庭装更实惠哦！</p><p><img src=\"https://img.yimishiji.com/v1/img/49838c9ea8bd203260eced3bfe3f5868.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">海盐来自纯手作昆布盐，将天然海盐与昆布融化混合再一层层凝结，搭配上香草纯粹自然的香甜，是简单清爽的口味。</p><p><img src=\"https://img.yimishiji.com/v1/img/30db6ab7c83d3bfde2bc172f2d0f1c1b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; transition: all 0.2s ease; width: 650px;\"/></p><p><span style=\"box-sizing: border-box;\">食物的背后</span></p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">ViVi Dolce的创始人李沐颐说：「我们制作 Gelato 用的都是食材本身，自己组合的配方，没有任何添加，所以酱料商不喜欢我们。」</p><p style=\"box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; color: rgb(71, 81, 92); font-size: 16px; line-height: 28px;\">Vivi Dolce的产品原料均选用：获得有机认证的归原有机牛奶、乳脂含量6.5%的法国总统牌淡奶油、韩国进口的CJ希杰精幼砂糖、新鲜当季水果、意大利进口的手工冰淇淋的专业酱料品牌MEC3的多种酱料等多种顶级食材制作而成。拒绝防腐剂及一切人工合成香料、色素。</p><p><br/></p>', '30', '1', '1', '1');

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
