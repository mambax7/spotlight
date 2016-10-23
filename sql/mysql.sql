CREATE TABLE spotlight (
  sid        INT(5) UNSIGNED NOT NULL DEFAULT '0',
  item       INT(5) UNSIGNED NOT NULL DEFAULT '1',
  auto       INT(5) UNSIGNED NOT NULL DEFAULT '0',
  module     VARCHAR(25)     NOT NULL DEFAULT 'news',
  image      VARCHAR(50)     NOT NULL DEFAULT 'spotlight.png',
  auto_image INT(5) UNSIGNED NOT NULL DEFAULT '0',
  imagealign VARCHAR(6)      NOT NULL DEFAULT 'left'
)
  ENGINE = MyISAM;

INSERT INTO spotlight VALUES (2, 1, 0, 'wfsection', 'spotlight.png', 0, 'left');
INSERT INTO spotlight VALUES (1, 1, 0, 'news', 'spotlight.png', 0, 'left');

CREATE TABLE `spotlight_mini` (
  `mini_id`    SMALLINT(2) UNSIGNED  NOT NULL AUTO_INCREMENT,
  `topicid`    MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT '0',
  `mini_img`   VARCHAR(50)           NOT NULL DEFAULT '',
  `mini_text`  TEXT                  NULL,
  `mini_align` TINYINT(1)            NOT NULL DEFAULT '0',
  `mini_show`  TINYINT(1)            NOT NULL DEFAULT '0',
  PRIMARY KEY (`mini_id`)
)
  ENGINE = MyISAM;

CREATE TABLE `spotlight_xml` (
  `xml_id`    MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `xml_url`   VARCHAR(255)          NOT NULL DEFAULT '',
  `xml_title` VARCHAR(255)          NOT NULL DEFAULT '',
  `xml_text`  TEXT                  NULL,
  `xml_order` SMALLINT(2)           NOT NULL DEFAULT '0',
  PRIMARY KEY (`xml_id`)
)
  ENGINE = MyISAM;
