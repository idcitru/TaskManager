# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: 127.0.0.1 (MySQL 5.5.5-10.1.19-MariaDB)
# Схема: tasks
# Время создания: 2017-06-15 10:33:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы bez_reg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bez_reg`;

CREATE TABLE `bez_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `active_hex` varchar(32) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы departments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `id_department` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_department` varchar(25) DEFAULT NULL,
  `head_of_department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_department`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы performers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `performers`;

CREATE TABLE `performers` (
  `id_performer` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `surname` varchar(11) DEFAULT NULL,
  `name` varchar(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_performer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы priorities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `priorities`;

CREATE TABLE `priorities` (
  `id_priority` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_priority` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id_project` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_project` varchar(25) DEFAULT NULL,
  `number_project` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id_status` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_status` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id_task` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_task` varchar(100) DEFAULT NULL,
  `description_task` varchar(100) DEFAULT NULL,
  `performer_id` int(11) DEFAULT NULL,
  `manager_task_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `working_hours` int(11) DEFAULT NULL,
  `priority_id` int(11) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `date_of_completion` date DEFAULT NULL,
  `date_of_dedline` date DEFAULT NULL,
  `date_of_complete` date DEFAULT NULL,
  PRIMARY KEY (`id_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
