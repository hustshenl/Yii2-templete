-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-06-01 23:39:15
-- 服务器版本： 5.5.37-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sinmh`
--

-- --------------------------------------------------------

--
-- 表的结构 `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `source` varchar(255) NOT NULL COMMENT '来源ID',
  `source_id` varchar(255) NOT NULL COMMENT '来源名',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='授权登陆表' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `pid` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='漫画分类' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `conf_key` varchar(100) NOT NULL,
  `conf_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统配置项';

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL COMMENT '1章节报错,2',
  `title` varchar(255) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `comic_id` int(10) unsigned NOT NULL,
  `chapter_id` int(10) unsigned NOT NULL,
  `image` varchar(255) NOT NULL,
  `ip` int(10) unsigned NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `flink`
--

CREATE TABLE IF NOT EXISTS `flink` (
`id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `group` tinyint(3) unsigned NOT NULL,
  `sort` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mail_queue`
--

CREATE TABLE IF NOT EXISTS `mail_queue` (
`id` int(10) unsigned NOT NULL,
  `mail_to` varchar(255) NOT NULL,
  `encoding` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `err_num` tinyint(4) NOT NULL,
  `add_time` int(11) NOT NULL,
  `lock_expiry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='邮件队列' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `name` varchar(128) NOT NULL,
  `title` varchar(256) NOT NULL COMMENT '导航标题',
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `data` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`id` int(11) NOT NULL COMMENT '记录ID',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态1未读，0已读，-1已删除',
  `type` int(11) NOT NULL COMMENT '警告类型',
  `user_id` int(11) NOT NULL COMMENT '接受警告用户ID',
  `role` int(11) NOT NULL COMMENT '角色',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` varchar(1024) NOT NULL COMMENT '内容',
  `task_id` int(11) NOT NULL COMMENT '任务ID',
  `link` int(11) NOT NULL COMMENT '链接',
  `created_ad` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='通知信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) NOT NULL COMMENT 'auth_key',
  `password_hash` char(64) NOT NULL COMMENT '密码',
  `password_reset_token` varchar(128) NOT NULL COMMENT '密码重置token',
  `access_token` varchar(128) NOT NULL COMMENT 'access_token',
  `email` varchar(255) NOT NULL COMMENT '用户Email',
  `phone` varchar(50) NOT NULL COMMENT '用户手机',
  `nickname` varchar(255) NOT NULL COMMENT '昵称',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户状态1正常0屏蔽',
  `scores` int(11) NOT NULL COMMENT '用户积分',
  `grade` int(11) NOT NULL COMMENT '用户等级',
  `sex` tinyint(4) NOT NULL COMMENT '1男2女0保密',
  `city` varchar(50) NOT NULL COMMENT '城市',
  `province` varchar(50) NOT NULL COMMENT '省份',
  `country` varchar(50) NOT NULL COMMENT '国家',
  `language` varchar(50) NOT NULL COMMENT '语言',
  `headimgurl` varchar(255) NOT NULL COMMENT '头像地址',
  `subscribe_time` int(11) NOT NULL COMMENT '订阅时间',
  `register_ip` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册IP',
  `login_ip` int(11) unsigned NOT NULL COMMENT '登陆IP',
  `login_time` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  `create_by` varchar(64) NOT NULL COMMENT '创建者',
  `update_by` varchar(64) NOT NULL COMMENT '更新者',
  `remark` varchar(2048) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=9 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`conf_key`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flink`
--
ALTER TABLE `flink`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_queue`
--
ALTER TABLE `mail_queue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`), ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `flink`
--
ALTER TABLE `flink`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mail_queue`
--
ALTER TABLE `mail_queue`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID';
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- 限制导出的表
--

--
-- 限制表 `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- 限制表 `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `menu`
--
ALTER TABLE `menu`
ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
