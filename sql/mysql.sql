# phpMyAdmin SQL Dump
# version 2.5.5-pl1
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Mar 23, 2004 at 05:18 PM
# Server version: 3.23.56
# PHP Version: 4.3.4
# 
# Database : `xoops2`
# 

# --------------------------------------------------------

#
# Table structure for table `spotlight`
#

CREATE TABLE spotlight (
  sid int(5) unsigned NOT NULL default '0',
  item int(5) unsigned NOT NULL default '1',
  auto int(5) unsigned NOT NULL default '0',
  module varchar(25) NOT NULL default 'news',
  image varchar(50) NOT NULL default 'spotlight.png',
  auto_image int(5) unsigned NOT NULL default '0',
  imagealign varchar(6) NOT NULL default 'left'
) TYPE=MyISAM;

#
# Dumping data for table `spotlight`
#

INSERT INTO spotlight VALUES (2, 1, 0, 'wfsection', 'spotlight.png', 0, 'left');
INSERT INTO spotlight VALUES (1, 1, 0, 'news', 'spotlight.png', 0, 'left');

