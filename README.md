CodeIgniter-News
================

Installation:
	Download this peoject.
	Copy to server. (Document root of server)
	Open with browser.

-----------------------
Create Database:  ignite
Create table using this query.

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

