-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `reporter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `reporter`;

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `title` varchar(300) NOT NULL COMMENT '標題',
  `content` mediumtext NOT NULL COMMENT '內文',
  `username` varchar(65) NOT NULL COMMENT '文章作者',
  `create_time` datetime NOT NULL COMMENT '發佈時間',
  `update_time` datetime NOT NULL COMMENT '更新時間',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `article` (`sn`, `title`, `content`, `username`, `create_time`, `update_time`) VALUES
(1,	'有中學聲人大院取統聞許模香切',	'陸也品清；從特小政黃以父們千影視生問合？什心場外、每運列絕手民於常人容目明？日下但民當易度以味！山民其實早人不許他的金以子度舉生邊是了為人步我。書一！\r\n\r\n女家中……有理別面家我父一由寫臺安選國你、於走子的多會統先接，環了或覺成建施府人美光全行小同，組式分物在問少華受水致遊，計開期想同該路故，模笑以國字在響生權工！心三是，說市醫子管，以只門法本沒落只重行多女岸何生定前，得了學得音美收西出建害我都興場他的子我客因家幾原帶林。',	'edge',	'2017-10-21 21:57:39',	'2017-10-21 21:57:39'),
(6,	'我，是怨，我才覺著骨肉的',	'父離家十多年，Fridays法樂琪，全國政協十一屆五次會議開幕，2，星女子高球賽，提案調降政團門檻顏清標：保障少數政黨權利。未被判侵權，鄧志偉揮巨炮，嚷嚷要一起死，大陸，報復同居人母，社會萬象，in，蘇貞昌掌舵呼聲高，3的最新消息：價格及記憶容量可能與iPad，賀國強探薄熙來，3，Canon，總統二度召開國安會議，全國政協十一屆五次會議開幕，系列手機，全民大追緝，營建業結合電信商，北韓大規模聚會！請允許我，我什麼都不要，照顧你生命中的每一天，我誰都不要，現在我不敢肯定，請允許我，現在已經過了人生的四分之一，請允許我，照顧你生命中的每一天，我什麼都不要，什麼都別說了，ㄟ那就結婚吧我沒有妳會死，照顧你生命中的每一天，請允許我，在我消失在這個世界之前，沒有妳我的人生沒有意義。看見一個金髮的白人，哪一個還在成長',	'edge',	'2017-10-31 20:49:55',	'2017-10-31 20:49:55'),
(7,	'聖誕老公公住在哪裡也？',	'明星周新秀挑戰賽，這起地震是板塊碰撞擠壓所致，國安人士透露，然而被騷擾的不悅感與日俱增，張學友驚爆新歡，法拉利時速300km撞毀，嗎？但從頭到尾那些網頁也不是他自己寫的，在學期末之後，看似完美，老師好我是網頁設計課的同學，同學一整學期沒有上過任何課，在學期末之後，在學期末之後，看似完美，但從頭到尾那些網頁也不是他自己寫的，想向您請問評分標準是各式各樣的方式都可以嗎？你是世界上最幸福的人，在我消失在這個世界之前，前世的五百次回眸，但我可以肯定地告訴你，如果是真的，現在我不敢肯定，ㄟ那就結婚吧我沒有妳會死，那麼餘下四分之三的時光請讓我來守護你好嗎？請他的交通大學資訊工程系朋友幫忙他，看似完美，但從頭到尾那些網頁也不是他自己寫的，',	'edge',	'2017-10-31 20:50:54',	'2017-10-31 20:50:54'),
(5,	'每天持續地深耕，日子久了便能夠卓越出眾',	'成功人士往往都是每天持續深耕、做自己熱愛的事情，《異數：超凡與平凡的界線在哪裡？》的作者麥爾坎．葛拉威爾提出所謂的一萬小時金律，他認為每個專家都是在某個領域上持續耕耘至少一萬個小時才成為專家的。(閱讀：異數：超凡與平凡的界線在哪裡？)\r\n\r\n「持續」是一件很艱難的事情，但也正因為如此，所以才更顯它的價值。\r\n\r\n無論你身處職場上的那個產業，無論你做的是何種職業，要成為專家，你需要的是「持續」，只有「持續」能夠讓你更快的達到卓越的境界。\r\n\r\n持續每天運動三十分鐘、持續每天至少閱讀一小時、持續每天至少上網瀏覽三十篇好文章、持續每個月至少閱讀五本書、持續每天在自己的工作崗位上磨練十小時，當你每天漸漸這樣「持續」的做著某件事，你將發現「持續」會替你帶來意想不到的威力，你開始駕輕就熟、你開始熟能生巧、你開始超越同儕',	'edge',	'2017-10-31 19:56:00',	'2017-10-31 19:56:00'),
(8,	'叔叔…叔叔，這樣如何啊。',	'從這個角度來看，他的聲音變弱，當我們追逐夢想生活，沒錯！3，籠飼蛋雞，爭取台灣十大觀光小城，淡水低溫開唱，中和某國中，3的最新消息：價格及記憶容量可能與iPad，敘利亞新憲法草案公投結束，、5D，連假濕冷相隨，全大運／光腳丫跑5000，台紐政府基金，心臟健檢，越南進口廢鐵，嚷嚷要一起死，歐巴馬Google+，One，警察杯杯辛苦啦！',	'edge',	'2017-10-31 20:51:23',	'2017-10-31 20:51:23'),
(24,	'測試發佈',	'測試發佈一則新聞這是新聞的內文',	'edge',	'2017-11-21 15:57:58',	'2017-11-21 15:57:58'),
(25,	'我沒錢但我想買台法拉利代步',	'我沒錢但我想買台法拉利代步我沒錢但我想買台法拉利代步我沒錢但我想買台法拉利代步我沒錢但我想買台法拉利代步我沒錢但我想買台法拉利代步',	'edge',	'2017-11-21 16:19:46',	'2017-11-21 16:19:46'),
(22,	'電子書沒想像中的夯 紙本書沒死還開始逆襲',	'2010年，電子書技術獲重大突破，各國敲起「紙本書將死」的喪鐘。然而七年過去，紙本書活得好好的，甚至開始逆襲。世界第一大書展法蘭克福書展的報告顯示，電子書市占率還不到兩成便開始走下坡，紙本書景氣開始復甦，銷量重新成長。\r\n\r\n法蘭克福書展上月中旬落幕，奧地利書業研究機構RWCC創辦人Rudiger Wischenbart，受大會之邀提出一份出版白皮書「2017圖書商業報告」，報告運用大量數據，對全球電子書與紙本書提出犀利的觀察。\r\n\r\n報告指出，電子書並不如想像中夯。在美國，三分之二的圖書市場由五大出版社控制。這五大出版社的電子書占比不到兩成，心力都放在紙本書上。德、法是全世界第三大和第六大圖書市場，其電子書比率在百分之一上下浮動，低到甚至稱不上市場。',	'edge',	'2017-11-07 11:57:18',	'2017-11-07 11:57:18'),
(28,	'test',	'<p>test</p>\r\n',	'edge',	'2017-11-23 16:22:39',	'2017-11-23 16:22:39'),
(29,	'test',	'<p>test</p>\r\n',	'edge',	'2017-11-23 16:37:57',	'2017-11-23 16:37:57'),
(27,	'test',	'<p>test smarty.session.username</p>\r\n',	'edge',	'2017-11-23 10:01:45',	'2017-11-23 10:01:45'),
(30,	'test',	'<p>test</p>\r\n',	'edge',	'2017-11-23 16:38:18',	'2017-11-23 16:38:18');

DROP TABLE IF EXISTS `loginattempts`;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `loginattempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('::1',	3,	'2017-11-22 10:37:12',	'edge',	2),
('::1',	3,	'2017-11-22 10:51:12',	'undefined',	3);

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`) VALUES
('133535a14e76d6c51e',	'edge',	'$2y$10$joBrsyPRb8Q2eGf6WSVBnOVhATFRN33eKWV3utz6mK7KrKbofcdwK',	'68104@ms23.url.com.tw',	1,	'2017-11-22 03:05:16');

-- 2017-11-23 09:22:36
