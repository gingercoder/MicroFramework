SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `microframework`
--

-- --------------------------------------------------------

--
-- Table structure for table `framework_settings`
--

CREATE TABLE IF NOT EXISTS `framework_settings` (
  `settingName` varchar(30) DEFAULT NULL,
  `settingValue` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `framework_settings`
--

INSERT INTO `framework_settings` (`settingName`, `settingValue`) VALUES
('appTitle', 'MicroFramework'),
('appDescription', 'A lightweight PHP Framework for app dev'),
('footerInfo', 'MicroFramework system developed by Rick Trotter'),
('outputType', 'php'),
('passwordSeed', 'sdjnvWERSgnej934uskwa£Osdn£EHNSDiHg'),
('firewall', 'off'),
('emailSentFrom', 'microframework@null.com'),
('emailFooter', 'Automatically generated email from MicroFramework inteded for recipient only');

-- --------------------------------------------------------


--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `logged` datetime NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `userAction` text NOT NULL,
  PRIMARY KEY (`logid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='System Event Logging' AUTO_INCREMENT=18 ;



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `usertype` int(1) NOT NULL,
  `companyid` int(11) NOT NULL,
  `apikey` varchar(32) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `emailaddress` (`emailaddress`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Users table' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `surname`, `emailaddress`, `telephone`, `jobtitle`, `usertype`, `companyid`, `apikey`, `username`, `password`) VALUES
(1, 'Teset', 'User', 'me@my.com', '0123456789', 'Software Developer', 2, 1, '8ebd89a3e756a50641215b89e59a1753', 'test', '8ebd89a3e756a50641215b89e59a1753');

-- --------------------------------------------------------

