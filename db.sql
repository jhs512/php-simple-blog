DROP DATABASE IF EXISTS `site1`;

CREATE DATABASE `site1`;

USE `site1`;

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `regDate` DATETIME NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `body` TEXT NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO article
SET regDate = NOW(),
title = '제목1',
`body` = '내용1';

INSERT INTO article
SET regDate = NOW(),
title = '제목2',
`body` = '내용2';

INSERT INTO article
SET regDate = NOW(),
title = '제목3',
`body` = '내용3';

# 회원 테이블 생성

CREATE TABLE `member` (
  `id` INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `regDate` DATETIME NOT NULL,
  `loginId` CHAR(100) UNIQUE NOT NULL,
  `loginPw` CHAR(100) NOT NULL,
  `name` CHAR(100) NOT NULL
);

INSERT INTO `member`
SET regDate = NOW(),
loginId = 'admin',
loginPw = '1234',
`name` = '관리자';