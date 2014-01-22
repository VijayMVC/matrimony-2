-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2014 at 11:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_actions`
--

CREATE TABLE IF NOT EXISTS `be_acl_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_groups`
--

CREATE TABLE IF NOT EXISTS `be_acl_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `be_acl_groups`
--

INSERT INTO `be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 4, 'Member', NULL),
(2, 2, 3, 'Administrator', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_permissions`
--

CREATE TABLE IF NOT EXISTS `be_acl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL DEFAULT '0',
  `aco_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aro_id` (`aro_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `be_acl_permissions`
--

INSERT INTO `be_acl_permissions` (`id`, `aro_id`, `aco_id`, `allow`) VALUES
(1, 2, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_permission_actions`
--

CREATE TABLE IF NOT EXISTS `be_acl_permission_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `access_id` int(10) unsigned NOT NULL DEFAULT '0',
  `axo_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_id` (`access_id`),
  KEY `axo_id` (`axo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_resources`
--

CREATE TABLE IF NOT EXISTS `be_acl_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `be_acl_resources`
--

INSERT INTO `be_acl_resources` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 22, 'Site', NULL),
(2, 2, 21, 'Control Panel', NULL),
(3, 3, 20, 'System', NULL),
(4, 14, 15, 'Members', NULL),
(5, 4, 13, 'Access Control', NULL),
(6, 16, 17, 'Settings', NULL),
(7, 18, 19, 'Utilities', NULL),
(8, 11, 12, 'Permissions', NULL),
(9, 9, 10, 'Groups', NULL),
(10, 7, 8, 'Resources', NULL),
(11, 5, 6, 'Actions', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `be_backups`
--

CREATE TABLE IF NOT EXISTS `be_backups` (
  `backup_id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `backup_date` datetime NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `be_groups`
--

CREATE TABLE IF NOT EXISTS `be_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `be_groups`
--

INSERT INTO `be_groups` (`id`, `locked`, `disabled`) VALUES
(1, 1, 0),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `be_preferences`
--

CREATE TABLE IF NOT EXISTS `be_preferences` (
  `name` varchar(254) NOT NULL,
  `value` text NOT NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `be_preferences`
--

INSERT INTO `be_preferences` (`name`, `value`) VALUES
('default_user_group', '1'),
('smtp_host', ''),
('keep_error_logs_for', '30'),
('email_protocol', 'sendmail'),
('use_registration_captcha', '0'),
('page_debug', '0'),
('automated_from_name', 'Momo Engine'),
('allow_user_registration', '1'),
('use_login_captcha', '0'),
('site_name', 'Momo Engine Rapid Web Application Development Engine'),
('automated_from_email', 'noreply@momoengine.com'),
('account_activation_time', '7'),
('allow_user_profiles', '0'),
('activation_method', 'email'),
('autologin_period', '30'),
('min_password_length', '8'),
('smtp_user', ''),
('smtp_pass', ''),
('email_mailpath', '/usr/sbin/sendmail'),
('smtp_port', '25'),
('smtp_timeout', '5'),
('email_wordwrap', '1'),
('email_wrapchars', '76'),
('email_mailtype', 'html'),
('email_charset', 'utf-8'),
('bcc_batch_mode', '0'),
('bcc_batch_size', '200'),
('login_field', 'both'),
('meta_keywords', 'Momo Engine Fastest Web Application Development Engine'),
('meta_description', 'Momo Engine Fastest Web Application Development Engine'),
('offline_message', ''),
('theme', 'default'),
('site_status', '1'),
('date_format', 'Y-m-d'),
('date_time_format', 'Y-m-d H:i:s'),
('backup_path', 'backups'),
('google_analytics_tracking_code', ''),
('activate_google_analytics', '0');

-- --------------------------------------------------------

--
-- Table structure for table `be_resources`
--

CREATE TABLE IF NOT EXISTS `be_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `be_resources`
--

INSERT INTO `be_resources` (`id`, `locked`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `be_shortcuts`
--

CREATE TABLE IF NOT EXISTS `be_shortcuts` (
  `shortcut_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `new_window` tinyint(4) NOT NULL,
  `display_order` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`shortcut_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `be_users`
--

CREATE TABLE IF NOT EXISTS `be_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(254) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group` int(10) unsigned DEFAULT NULL,
  `activation_key` varchar(32) DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `password` (`password`),
  KEY `group` (`group`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `be_users`
--

INSERT INTO `be_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', '88acc00de4c16d6f5b4907e5fd46477d558ea2d4', 'saaqzan.shakya123@gmail.com', 1, 2, NULL, '2014-01-06 05:32:23', '2013-12-25 11:59:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `be_user_profiles`
--

CREATE TABLE IF NOT EXISTS `be_user_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `be_user_profiles`
--

INSERT INTO `be_user_profiles` (`user_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `user_data` text NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
  `email_template_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`email_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE IF NOT EXISTS `layouts` (
  `layout_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`layout_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `slug_id` int(11) NOT NULL,
  `slug_name` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE IF NOT EXISTS `slugs` (
  `slug_id` int(11) NOT NULL AUTO_INCREMENT,
  `slug_name` varchar(250) NOT NULL,
  `route` varchar(255) NOT NULL,
  PRIMARY KEY (`slug_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `code` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=240 ;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`country_id`, `country_name`, `code`, `status`) VALUES
(1, 'Afghanistan', 'AF', 1),
(2, 'Albania', 'AL', 1),
(3, 'Algeria', 'DZ', 1),
(4, 'American Samoa', 'AS', 1),
(5, 'Andorra', 'AD', 1),
(6, 'Angola', 'AO', 1),
(7, 'Anguilla', 'AI', 1),
(8, 'Antarctica', 'AQ', 1),
(9, 'Antigua and Barbuda', 'AG', 1),
(10, 'Argentina', 'AR', 1),
(11, 'Armenia', 'AM', 1),
(12, 'Aruba', 'AW', 1),
(13, 'Australia', 'AU', 1),
(14, 'Austria', 'AT', 1),
(15, 'Azerbaijan', 'AZ', 1),
(16, 'Bahamas', 'BS', 1),
(17, 'Bahrain', 'BH', 1),
(18, 'Bangladesh', 'BD', 1),
(19, 'Barbados', 'BB', 1),
(20, 'Belarus', 'BY', 1),
(21, 'Belgium', 'BE', 1),
(22, 'Belize', 'BZ', 1),
(23, 'Benin', 'BJ', 1),
(24, 'Bermuda', 'BM', 1),
(25, 'Bhutan', 'BT', 1),
(26, 'Bolivia', 'BO', 1),
(27, 'Bosnia and Herzegowina', 'BA', 1),
(28, 'Botswana', 'BW', 1),
(29, 'Bouvet Island', 'BV', 1),
(30, 'Brazil', 'BR', 1),
(31, 'British Indian Ocean Territory', 'IO', 1),
(32, 'Brunei Darussalam', 'BN', 1),
(33, 'Bulgaria', 'BG', 1),
(34, 'Burkina Faso', 'BF', 1),
(35, 'Burundi', 'BI', 1),
(36, 'Cambodia', 'KH', 1),
(37, 'Cameroon', 'CM', 1),
(38, 'Canada', 'CA', 1),
(39, 'Cape Verde', 'CV', 1),
(40, 'Cayman Islands', 'KY', 1),
(41, 'Central African Republic', 'CF', 1),
(42, 'Chad', 'TD', 1),
(43, 'Chile', 'CL', 1),
(44, 'China', 'CN', 1),
(45, 'Christmas Island', 'CX', 1),
(46, 'Cocos (Keeling) Islands', 'CC', 1),
(47, 'Colombia', 'CO', 1),
(48, 'Comoros', 'KM', 1),
(49, 'Congo', 'CG', 1),
(50, 'Cook Islands', 'CK', 1),
(51, 'Costa Rica', 'CR', 1),
(52, 'Cote D''Ivoire', 'CI', 1),
(53, 'Croatia', 'HR', 1),
(54, 'Cuba', 'CU', 1),
(55, 'Cyprus', 'CY', 1),
(56, 'Czech Republic', 'CZ', 1),
(57, 'Denmark', 'DK', 1),
(58, 'Djibouti', 'DJ', 1),
(59, 'Dominica', 'DM', 1),
(60, 'Dominican Republic', 'DO', 1),
(61, 'East Timor', 'TP', 1),
(62, 'Ecuador', 'EC', 1),
(63, 'Egypt', 'EG', 1),
(64, 'El Salvador', 'SV', 1),
(65, 'Equatorial Guinea', 'GQ', 1),
(66, 'Eritrea', 'ER', 1),
(67, 'Estonia', 'EE', 1),
(68, 'Ethiopia', 'ET', 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 1),
(70, 'Faroe Islands', 'FO', 1),
(71, 'Fiji', 'FJ', 1),
(72, 'Finland', 'FI', 1),
(73, 'France', 'FR', 1),
(74, 'France, Metropolitan', 'FX', 1),
(75, 'French Guiana', 'GF', 1),
(76, 'French Polynesia', 'PF', 1),
(77, 'French Southern Territories', 'TF', 1),
(78, 'Gabon', 'GA', 1),
(79, 'Gambia', 'GM', 1),
(80, 'Georgia', 'GE', 1),
(81, 'Germany', 'DE', 1),
(82, 'Ghana', 'GH', 1),
(83, 'Gibraltar', 'GI', 1),
(84, 'Greece', 'GR', 1),
(85, 'Greenland', 'GL', 1),
(86, 'Grenada', 'GD', 1),
(87, 'Guadeloupe', 'GP', 1),
(88, 'Guam', 'GU', 1),
(89, 'Guatemala', 'GT', 1),
(90, 'Guinea', 'GN', 1),
(91, 'Guinea-bissau', 'GW', 1),
(92, 'Guyana', 'GY', 1),
(93, 'Haiti', 'HT', 1),
(94, 'Heard and Mc Donald Islands', 'HM', 1),
(95, 'Honduras', 'HN', 1),
(96, 'Hong Kong', 'HK', 1),
(97, 'Hungary', 'HU', 1),
(98, 'Iceland', 'IS', 1),
(99, 'India', 'IN', 1),
(100, 'Indonesia', 'ID', 1),
(101, 'Iran (Islamic Republic of)', 'IR', 1),
(102, 'Iraq', 'IQ', 1),
(103, 'Ireland', 'IE', 1),
(104, 'Israel', 'IL', 1),
(105, 'Italy', 'IT', 1),
(106, 'Jamaica', 'JM', 1),
(107, 'Japan', 'JP', 1),
(108, 'Jordan', 'JO', 1),
(109, 'Kazakhstan', 'KZ', 1),
(110, 'Kenya', 'KE', 1),
(111, 'Kiribati', 'KI', 1),
(112, 'North Korea', 'KP', 1),
(113, 'Korea, Republic of', 'KR', 1),
(114, 'Kuwait', 'KW', 1),
(115, 'Kyrgyzstan', 'KG', 1),
(116, 'Lao People''s Democratic Republic', 'LA', 1),
(117, 'Latvia', 'LV', 1),
(118, 'Lebanon', 'LB', 1),
(119, 'Lesotho', 'LS', 1),
(120, 'Liberia', 'LR', 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 1),
(122, 'Liechtenstein', 'LI', 1),
(123, 'Lithuania', 'LT', 1),
(124, 'Luxembourg', 'LU', 1),
(125, 'Macau', 'MO', 1),
(126, 'Macedonia', 'MK', 1),
(127, 'Madagascar', 'MG', 1),
(128, 'Malawi', 'MW', 1),
(129, 'Malaysia', 'MY', 1),
(130, 'Maldives', 'MV', 1),
(131, 'Mali', 'ML', 1),
(132, 'Malta', 'MT', 1),
(133, 'Marshall Islands', 'MH', 1),
(134, 'Martinique', 'MQ', 1),
(135, 'Mauritania', 'MR', 1),
(136, 'Mauritius', 'MU', 1),
(137, 'Mayotte', 'YT', 1),
(138, 'Mexico', 'MX', 1),
(139, 'Micronesia, Federated States of', 'FM', 1),
(140, 'Moldova, Republic of', 'MD', 1),
(141, 'Monaco', 'MC', 1),
(142, 'Mongolia', 'MN', 1),
(143, 'Montserrat', 'MS', 1),
(144, 'Morocco', 'MA', 1),
(145, 'Mozambique', 'MZ', 1),
(146, 'Myanmar', 'MM', 1),
(147, 'Namibia', 'NA', 1),
(148, 'Nauru', 'NR', 1),
(149, 'Nepal', 'NP', 1),
(150, 'Netherlands', 'NL', 1),
(151, 'Netherlands Antilles', 'AN', 1),
(152, 'New Caledonia', 'NC', 1),
(153, 'New Zealand', 'NZ', 1),
(154, 'Nicaragua', 'NI', 1),
(155, 'Niger', 'NE', 1),
(156, 'Nigeria', 'NG', 1),
(157, 'Niue', 'NU', 1),
(158, 'Norfolk Island', 'NF', 1),
(159, 'Northern Mariana Islands', 'MP', 1),
(160, 'Norway', 'NO', 1),
(161, 'Oman', 'OM', 1),
(162, 'Pakistan', 'PK', 1),
(163, 'Palau', 'PW', 1),
(164, 'Panama', 'PA', 1),
(165, 'Papua New Guinea', 'PG', 1),
(166, 'Paraguay', 'PY', 1),
(167, 'Peru', 'PE', 1),
(168, 'Philippines', 'PH', 1),
(169, 'Pitcairn', 'PN', 1),
(170, 'Poland', 'PL', 1),
(171, 'Portugal', 'PT', 1),
(172, 'Puerto Rico', 'PR', 1),
(173, 'Qatar', 'QA', 1),
(174, 'Reunion', 'RE', 1),
(175, 'Romania', 'RO', 1),
(176, 'Russian Federation', 'RU', 1),
(177, 'Rwanda', 'RW', 1),
(178, 'Saint Kitts and Nevis', 'KN', 1),
(179, 'Saint Lucia', 'LC', 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 1),
(181, 'Samoa', 'WS', 1),
(182, 'San Marino', 'SM', 1),
(183, 'Sao Tome and Principe', 'ST', 1),
(184, 'Saudi Arabia', 'SA', 1),
(185, 'Senegal', 'SN', 1),
(186, 'Seychelles', 'SC', 1),
(187, 'Sierra Leone', 'SL', 1),
(188, 'Singapore', 'SG', 1),
(189, 'Slovak Republic', 'SK', 1),
(190, 'Slovenia', 'SI', 1),
(191, 'Solomon Islands', 'SB', 1),
(192, 'Somalia', 'SO', 1),
(193, 'South Africa', 'ZA', 1),
(194, 'South Georgia &amp; South Sandwich Islands', 'GS', 1),
(195, 'Spain', 'ES', 1),
(196, 'Sri Lanka', 'LK', 1),
(197, 'St. Helena', 'SH', 1),
(198, 'St. Pierre and Miquelon', 'PM', 1),
(199, 'Sudan', 'SD', 1),
(200, 'Suriname', 'SR', 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 1),
(202, 'Swaziland', 'SZ', 1),
(203, 'Sweden', 'SE', 1),
(204, 'Switzerland', 'CH', 1),
(205, 'Syrian Arab Republic', 'SY', 1),
(206, 'Taiwan', 'TW', 1),
(207, 'Tajikistan', 'TJ', 1),
(208, 'Tanzania, United Republic of', 'TZ', 1),
(209, 'Thailand', 'TH', 1),
(210, 'Togo', 'TG', 1),
(211, 'Tokelau', 'TK', 1),
(212, 'Tonga', 'TO', 1),
(213, 'Trinidad and Tobago', 'TT', 1),
(214, 'Tunisia', 'TN', 1),
(215, 'Turkey', 'TR', 1),
(216, 'Turkmenistan', 'TM', 1),
(217, 'Turks and Caicos Islands', 'TC', 1),
(218, 'Tuvalu', 'TV', 1),
(219, 'Uganda', 'UG', 1),
(220, 'Ukraine', 'UA', 1),
(221, 'United Arab Emirates', 'AE', 1),
(222, 'United Kingdom', 'GB', 1),
(223, 'United States', 'US', 1),
(224, 'United States Minor Outlying Islands', 'UM', 1),
(225, 'Uruguay', 'UY', 1),
(226, 'Uzbekistan', 'UZ', 1),
(227, 'Vanuatu', 'VU', 1),
(228, 'Vatican City State (Holy See)', 'VA', 1),
(229, 'Venezuela', 'VE', 1),
(230, 'Viet Nam', 'VN', 1),
(231, 'Virgin Islands (British)', 'VG', 1),
(232, 'Virgin Islands (U.S.)', 'VI', 1),
(233, 'Wallis and Futuna Islands', 'WF', 1),
(234, 'Western Sahara', 'EH', 1),
(235, 'Yemen', 'YE', 1),
(236, 'Yugoslavia', 'YU', 1),
(237, 'Democratic Republic of Congo', 'CD', 1),
(238, 'Zambia', 'ZM', 1),
(239, 'Zimbabwe', 'ZW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE IF NOT EXISTS `tbl_members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `profile_of` int(11) NOT NULL,
  `religion` int(11) NOT NULL,
  `mother_lang` int(11) NOT NULL,
  `caste` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `martial_status` int(11) NOT NULL,
  `caste_allowed` int(11) NOT NULL,
  `sub_caste` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `citizenship` int(11) NOT NULL,
  `height_feet` int(11) NOT NULL,
  `height_cms` int(11) NOT NULL,
  `weight_lbs` int(11) NOT NULL,
  `weight_kgs` int(11) NOT NULL,
  `body_type` int(11) NOT NULL,
  `complexion` int(11) NOT NULL,
  `physical_status` int(11) NOT NULL,
  `qualification` int(11) NOT NULL,
  `occupation` int(11) NOT NULL,
  `emp_field` int(11) NOT NULL,
  `income_type` int(11) NOT NULL,
  `inc_currency` int(11) NOT NULL,
  `income` varchar(20) NOT NULL,
  `food` int(11) NOT NULL,
  `smoke` int(11) NOT NULL,
  `drink` int(11) NOT NULL,
  `family_stat` int(11) NOT NULL,
  `family_value` int(11) NOT NULL,
  `family_type` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo_validation` tinyint(4) NOT NULL,
  `member_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`member_id`, `username`, `gender`, `dob`, `profile_of`, `religion`, `mother_lang`, `caste`, `country`, `contact`, `mobile`, `email`, `martial_status`, `caste_allowed`, `sub_caste`, `state`, `city`, `citizenship`, `height_feet`, `height_cms`, `weight_lbs`, `weight_kgs`, `body_type`, `complexion`, `physical_status`, `qualification`, `occupation`, `emp_field`, `income_type`, `inc_currency`, `income`, `food`, `smoke`, `drink`, `family_stat`, `family_value`, `family_type`, `description`, `photo`, `photo_validation`, `member_status`) VALUES
(50, 'sasasasa', 2, '2013-12-29', 5, 2, 3, 0, 18, '9999999', '9999999', 'saaqzan.shakya23@gmail.com', 1, 0, '1', '1', 'aaa', 5, 1111111, 0, 0, 222222, 1, 1, 1, 1, 1, 1, 1, 1, '22222', 1, 1, 1, 1, 1, 1, 'ssss sss dddd aaaa', '1502703_750559204973470_1804865372_o_(1).jpg', 0, 1),
(51, 'ssssssss', 1, '2013-12-30', 4, 2, 3, 0, 2, '999999999999', '11111111111111', 'sads@gmail.com', 1, 1, 'sssssss', 'aaaaaaaaaaaa', 'ssssssssss', 0, 4, 0, 0, 41, 2, 1, 1, 5, 48, 1, 0, 15, '22222', 1, 1, 1, 1, 1, 1, 'ddddddddddd', '1488187_760076577355359_480300218_n.jpg', 0, 1),
(52, 'Raju', 1, '2014-01-02', 7, 3, 4, 0, 16, '88888888', '777777777777', 'saaqzan.shakya9898@gmail.com', 1, 1, 'ssss', 'aaaaa', 'sssssssss', 16, 4, 0, 0, 43, 2, 1, 1, 5, 48, 2, 1, 16, '', 1, 2, 1, 2, 1, 2, 'fffffffffff ggggggggggggggg', '', 0, 0),
(53, 'jjjj', 1, '2014-01-08', 5, 2, 3, 0, 18, '888888888888', '99999999999', 'saaqzan.shakya9898@gmail.com', 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', 0, 0),
(54, 'jjjj', 1, '2014-01-08', 5, 2, 3, 0, 18, '888888888888', '99999999999', 'saaqzan.shakya9898@gmail.com', 1, 0, 'sasa', 'ssss', 'aaaa', 162, 4, 0, 0, 40, 2, 1, 1, 5, 48, 1, 1, 2, '', 2, 1, 1, 1, 1, 1, 'sasasdsd', 'carter2n-2-web.jpg', 0, 0),
(55, 'aaa', 2, '2014-01-06', 6, 0, 3, 0, 17, '999999999', '88888888', 'saaqzan.shakya233333@gmail.com', 1, 1, 'aaa', 'sss', 'aaaaa', 16, 4, 0, 0, 43, 2, 1, 1, 49, 48, 2, 0, 2, '4444', 1, 1, 2, 1, 1, 1, 'aaaa', 'Jellyfish.jpg', 0, 0),
(56, 'sasasa', 1, '2014-01-06', 7, 2, 3, 0, 17, '33333', '1111', 'saaqzan.shakya9898@gmail.com', 1, 1, 'ssss', 'aaaa', 'aaaa', 16, 4, 0, 0, 43, 2, 1, 2, 49, 50, 1, 1, 7, '', 2, 1, 2, 1, 1, 2, 'asdasdasdsasdsad', 'Hydrangeas_-_Copy.jpg', 0, 0),
(57, 'aaa', 1, '2014-01-06', 4, 10, 53, 0, 6, '4444', '4444', 'saaqzan.shakya23@gmail.com', 2, 1, 'aaaa', 'saaaaa', 'hhhhh', 4, 4, 0, 0, 42, 3, 4, 2, 6, 47, 4, 1, 1, '', 1, 1, 2, 1, 1, 1, 'jjhkqjhkwjhekj', 'Penguins.jpg', 0, 0),
(58, 'Sam', 1, '2014-01-08', 1, 1, 1, 0, 0, '987654345', '98767899876', 'sads@gmail.com', 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `be_acl_permissions`
--
ALTER TABLE `be_acl_permissions`
  ADD CONSTRAINT `be_acl_permissions_ibfk_1` FOREIGN KEY (`aro_id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_acl_permissions_ibfk_2` FOREIGN KEY (`aco_id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_acl_permission_actions`
--
ALTER TABLE `be_acl_permission_actions`
  ADD CONSTRAINT `be_acl_permission_actions_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `be_acl_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_acl_permission_actions_ibfk_2` FOREIGN KEY (`axo_id`) REFERENCES `be_acl_actions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_groups`
--
ALTER TABLE `be_groups`
  ADD CONSTRAINT `be_groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_resources`
--
ALTER TABLE `be_resources`
  ADD CONSTRAINT `be_resources_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_users`
--
ALTER TABLE `be_users`
  ADD CONSTRAINT `be_users_ibfk_1` FOREIGN KEY (`group`) REFERENCES `be_acl_groups` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `be_user_profiles`
--
ALTER TABLE `be_user_profiles`
  ADD CONSTRAINT `be_user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `be_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
