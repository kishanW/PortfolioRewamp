DROP TABLE IF EXISTS `guestbook`;
	CREATE TABLE  `guestbook` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`name` varchar(200) DEFAULT NULL,
	`location` varchar(200) DEFAULT NULL,
	`comment` varchar(5000) DEFAULT NULL,
	UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
