-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2023 at 05:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zealforex`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Health', 'category-banner-1.jpg', 'Health', '', ''),
(2, 'Politics', 'category-banner-2.jpg', 'Politics', '', ''),
(3, 'Social Life', 'category-banner-3.jpg', 'Social Life', '', ''),
(4, 'Business', 'category-banner-4.jpg', 'Business', '', ''),
(0, 'Religion & Faith', 'category-banner-.jpg', 'Religion & Faith', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `url`, `photo`) VALUES
(1, 'Microtik', '', 'client-1.jpg'),
(2, 'Alhua', '', 'client-2.png'),
(3, 'Cisco', '', 'client-3.png'),
(4, 'Cambium Networks', '', 'client-4.jpg'),
(5, 'TP link', '', 'client-5.jpg'),
(6, 'Ubiquiti', '', 'client-6.png'),
(7, 'D-link', '', 'client-7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `code_body`, `code_main`) VALUES
(1, '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430\";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `country_name_abriviated` varchar(4) NOT NULL,
  `country_dial_code` varchar(5) NOT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `currency_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`country_id`, `country_name`, `country_name_abriviated`, `country_dial_code`, `currency`, `currency_name`) VALUES
(250, 'Afghanistan', 'AF', '93', 'AFN', 'Afghani'),
(251, 'Albania', 'AL', '355', 'ALL', 'Lek'),
(252, 'Algeria', 'DZ', '213', 'DZD', 'Algerian Dinar'),
(253, 'American Samoa', 'AS', '1-684', 'USD', 'US Dollar'),
(254, 'Andorra', 'AD', '376', 'EUR', 'Euro'),
(255, 'Angola', 'AO', '244', 'AOA', 'Kwanza'),
(256, 'Anguilla', 'AI', '1-264', 'XCD', 'East Caribbean Dollar'),
(258, 'Antigua and Barbuda', 'AG', '1-268', 'XCD', 'East Caribbean Dollar'),
(259, 'Argentina', 'AR', '54', 'ARS', 'Argentine Peso'),
(260, 'Armenia', 'AM', '374', 'AMD', 'Armenian Dram'),
(261, 'Aruba', 'AW', '297', 'AWG', 'Aruban Florin'),
(262, 'Australia', 'AU', '61', 'AUD', 'Australian Dollar'),
(263, 'Austria', 'AT', '43', 'EUR', 'Euro'),
(264, 'Azerbaijan', 'AZ', '994', 'AZN', 'Azerbaijanian Manat'),
(265, 'Bahamas', 'BS', '1-242', 'BSD', 'Bahamian Dollar'),
(266, 'Bahrain', 'BH', '973', 'BHD', 'Bahraini Dinar'),
(267, 'Bangladesh', 'BD', '880', 'BDT', 'Taka'),
(268, 'Barbados', 'BB', '1-246', 'BBD', 'Barbados Dollar'),
(269, 'Belarus', 'BY', '375', 'BYR', 'Belarussian Ruble'),
(270, 'Belgium', 'BE', '32', 'EUR', 'Euro'),
(271, 'Belize', 'BZ', '501', 'BZD', 'Belize Dollar'),
(272, 'Benin', 'BJ', '229', 'XOF', 'CFA Franc BCEAO'),
(273, 'Bermuda', 'BM', '1-441', 'BMD', 'Bermudian Dollar'),
(274, 'Bhutan', 'BT', '975', 'INR', 'Indian Rupee'),
(275, 'Bolivia, Plurinational State of', 'BO', '591', 'BOB', 'Boliviano'),
(276, 'Bonaire, Sint Eustatius and Saba', 'BQ', '599', 'USD', 'US Dollar'),
(277, 'Bosnia and Herzegovina', 'BA', '387', 'BAM', 'Convertible Mark'),
(278, 'Botswana', 'BW', '267', 'BWP', 'Pula'),
(279, 'Bouvet Island', 'BV', '47', 'NOK', 'Norwegian Krone'),
(280, 'Brazil', 'BR', '55', 'BRL', 'Brazilian Real'),
(281, 'British Indian Ocean Territory', 'IO', '246', 'USD', 'US Dollar'),
(282, 'Brunei Darussalam', 'BN', '673', 'BND', 'Brunei Dollar'),
(283, 'Bulgaria', 'BG', '359', 'BGN', 'Bulgarian Lev'),
(284, 'Burkina Faso', 'BF', '226', 'XOF', 'CFA Franc BCEAO'),
(285, 'Burundi', 'BI', '257', 'BIF', 'Burundi Franc'),
(286, 'Cambodia', 'KH', '855', 'KHR', 'Riel'),
(287, 'Cameroon', 'CM', '237', 'XAF', 'CFA Franc BEAC'),
(288, 'Canada', 'CA', '1', 'CAD', 'Canadian Dollar'),
(289, 'Cape Verde', 'CV', '238', 'CVE', 'Cabo Verde Escudo'),
(290, 'Cayman Islands', 'KY', '1-345', 'KYD', 'Cayman Islands Dollar'),
(291, 'Central African Republic', 'CF', '236', 'XAF', 'CFA Franc BEAC'),
(292, 'Chad', 'TD', '235', 'XAF', 'CFA Franc BEAC'),
(293, 'Chile', 'CL', '56', 'CLP', 'Chilean Peso'),
(294, 'China', 'CN', '86', 'CNY', 'Yuan Renminbi'),
(295, 'Christmas Island', 'CX', '61', 'AUD', 'Australian Dollar'),
(296, 'Cocos (Keeling) Islands', 'CC', '61', 'AUD', 'Australian Dollar'),
(297, 'Colombia', 'CO', '57', 'COP', 'Colombian Peso'),
(298, 'Comoros', 'KM', '269', 'KMF', 'Comoro Franc'),
(299, 'Congo', 'CG', '242', 'XAF', 'CFA Franc BEAC'),
(301, 'Cook Islands', 'CK', '682', 'NZD', 'New Zealand Dollar'),
(302, 'Costa Rica', 'CR', '506', 'CRC', 'Costa Rican Colon'),
(303, 'Croatia', 'HR', '385', 'HRK', 'Croatian Kuna'),
(304, 'Cuba', 'CU', '53', 'CUP', 'Cuban Peso'),
(305, 'Curaçao', 'CW', '599', 'ANG', 'Netherlands Antillean Guilder'),
(306, 'Cyprus', 'CY', '357', 'EUR', 'Euro'),
(307, 'Czech Republic', 'CZ', '420', 'CZK', 'Czech Koruna'),
(308, 'Côte d\'Ivoire', 'CI', '225', 'XOF', 'CFA Franc BCEAO'),
(309, 'Denmark', 'DK', '45', 'DKK', 'Danish Krone'),
(310, 'Djibouti', 'DJ', '253', 'DJF', 'Djibouti Franc'),
(311, 'Dominica', 'DM', '1-767', 'XCD', 'East Caribbean Dollar'),
(312, 'Dominican Republic', 'DO', '1-809', 'DOP', 'Dominican Peso'),
(313, 'Ecuador', 'EC', '593', 'USD', 'US Dollar'),
(314, 'Egypt', 'EG', '20', 'EGP', 'Egyptian Pound'),
(315, 'El Salvador', 'SV', '503', 'USD', 'US Dollar'),
(316, 'Equatorial Guinea', 'GQ', '240', 'XAF', 'CFA Franc BEAC'),
(317, 'Eritrea', 'ER', '291', 'ERN', 'Nakfa'),
(318, 'Estonia', 'EE', '372', 'EUR', 'Euro'),
(319, 'Ethiopia', 'ET', '251', 'ETB', 'Ethiopian Birr'),
(320, 'Falkland Islands (Malvinas)', 'FK', '500', 'FKP', 'Falkland Islands Pound'),
(321, 'Faroe Islands', 'FO', '298', 'DKK', 'Danish Krone'),
(322, 'Fiji', 'FJ', '679', 'FJD', 'Fiji Dollar'),
(323, 'Finland', 'FI', '358', 'EUR', 'Euro'),
(324, 'France', 'FR', '33', 'EUR', 'Euro'),
(325, 'French Guiana', 'GF', '594', 'EUR', 'Euro'),
(326, 'French Polynesia', 'PF', '689', 'XPF', 'CFP Franc'),
(327, 'French Southern Territories', 'TF', '262', 'EUR', 'Euro'),
(328, 'Gabon', 'GA', '241', 'XAF', 'CFA Franc BEAC'),
(329, 'Gambia', 'GM', '220', 'GMD', 'Dalasi'),
(330, 'Georgia', 'GE', '995', 'GEL', 'Lari'),
(331, 'Germany', 'DE', '49', 'EUR', 'Euro'),
(332, 'Ghana', 'GH', '233', 'GHS', 'Ghana Cedi'),
(333, 'Gibraltar', 'GI', '350', 'GIP', 'Gibraltar Pound'),
(334, 'Greece', 'GR', '30', 'EUR', 'Euro'),
(335, 'Greenland', 'GL', '299', 'DKK', 'Danish Krone'),
(336, 'Grenada', 'GD', '1-473', 'XCD', 'East Caribbean Dollar'),
(337, 'Guadeloupe', 'GP', '590', 'EUR', 'Euro'),
(338, 'Guam', 'GU', '1-671', 'USD', 'US Dollar'),
(339, 'Guatemala', 'GT', '502', 'GTQ', 'Quetzal'),
(340, 'Guernsey', 'GG', '44', 'GBP', 'Pound Sterling'),
(341, 'Guinea', 'GN', '224', 'GNF', 'Guinea Franc'),
(342, 'Guinea-Bissau', 'GW', '245', 'XOF', 'CFA Franc BCEAO'),
(343, 'Guyana', 'GY', '592', 'GYD', 'Guyana Dollar'),
(344, 'Haiti', 'HT', '509', 'USD', 'US Dollar'),
(345, 'Heard Island and McDonald Islands', 'HM', '672', 'AUD', 'Australian Dollar'),
(346, 'Holy See (Vatican City State)', 'VA', '39-06', 'EUR', 'Euro'),
(347, 'Honduras', 'HN', '504', 'HNL', 'Lempira'),
(348, 'Hong Kong', 'HK', '852', 'HKD', 'Hong Kong Dollar'),
(349, 'Hungary', 'HU', '36', 'HUF', 'Forint'),
(350, 'Iceland', 'IS', '354', 'ISK', 'Iceland Krona'),
(351, 'India', 'IN', '91', 'INR', 'Indian Rupee'),
(352, 'Indonesia', 'ID', '62', 'IDR', 'Rupiah'),
(353, 'Iran, Islamic Republic of', 'IR', '98', 'IRR', 'Iranian Rial'),
(354, 'Iraq', 'IQ', '964', 'IQD', 'Iraqi Dinar'),
(355, 'Ireland', 'IE', '353', 'EUR', 'Euro'),
(356, 'Isle of Man', 'IM', '44', 'GBP', 'Pound Sterling'),
(357, 'Israel', 'IL', '972', 'ILS', 'New Israeli Sheqel'),
(358, 'Italy', 'IT', '39', 'EUR', 'Euro'),
(359, 'Jamaica', 'JM', '1-876', 'JMD', 'Jamaican Dollar'),
(360, 'Japan', 'JP', '81', 'JPY', 'Yen'),
(361, 'Jersey', 'JE', '44', 'GBP', 'Pound Sterling'),
(362, 'Jordan', 'JO', '962', 'JOD', 'Jordanian Dinar'),
(363, 'Kazakhstan', 'KZ', '7', 'KZT', 'Tenge'),
(364, 'Kenya', 'KE', '254', 'KES', 'Kenyan Shilling'),
(365, 'Kiribati', 'KI', '686', 'AUD', 'Australian Dollar'),
(366, 'Korea, Democratic People\'s Republic of', 'KP', '850', 'KPW', 'North Korean Won'),
(367, 'Korea, Republic of', 'KR', '82', 'KRW', 'Won'),
(368, 'Kuwait', 'KW', '965', 'KWD', 'Kuwaiti Dinar'),
(369, 'Kyrgyzstan', 'KG', '996', 'KGS', 'Som'),
(370, 'Lao People\'s Democratic Republic', 'LA', '856', 'LAK', 'Kip'),
(371, 'Latvia', 'LV', '371', 'EUR', 'Euro'),
(372, 'Lebanon', 'LB', '961', 'LBP', 'Lebanese Pound'),
(373, 'Lesotho', 'LS', '266', 'ZAR', 'Rand'),
(374, 'Liberia', 'LR', '231', 'LRD', 'Liberian Dollar'),
(375, 'Libya', 'LY', '218', 'LYD', 'Libyan Dinar'),
(376, 'Liechtenstein', 'LI', '423', 'CHF', 'Swiss Franc'),
(377, 'Lithuania', 'LT', '370', 'EUR', 'Euro'),
(378, 'Luxembourg', 'LU', '352', 'EUR', 'Euro'),
(379, 'Macao', 'MO', '853', 'MOP', 'Pataca'),
(380, 'Macedonia, the Former Yugoslav Republic of', 'MK', '389', 'MKD', 'Denar'),
(381, 'Madagascar', 'MG', '261', 'MGA', 'Malagasy Ariary'),
(382, 'Malawi', 'MW', '265', 'MWK', 'Kwacha'),
(383, 'Malaysia', 'MY', '60', 'MYR', 'Malaysian Ringgit'),
(384, 'Maldives', 'MV', '960', 'MVR', 'Rufiyaa'),
(385, 'Mali', 'ML', '223', 'XOF', 'CFA Franc BCEAO'),
(386, 'Malta', 'MT', '356', 'EUR', 'Euro'),
(387, 'Marshall Islands', 'MH', '692', 'USD', 'US Dollar'),
(388, 'Martinique', 'MQ', '596', 'EUR', 'Euro'),
(389, 'Mauritania', 'MR', '222', 'MRO', 'Ouguiya'),
(390, 'Mauritius', 'MU', '230', 'MUR', 'Mauritius Rupee'),
(391, 'Mayotte', 'YT', '262', 'EUR', 'Euro'),
(392, 'Mexico', 'MX', '52', 'MXN', 'Mexican Peso'),
(393, 'Micronesia, Federated States of', 'FM', '691', 'USD', 'US Dollar'),
(394, 'Moldova, Republic of', 'MD', '373', 'MDL', 'Moldovan Leu'),
(395, 'Monaco', 'MC', '377', 'EUR', 'Euro'),
(396, 'Mongolia', 'MN', '976', 'MNT', 'Tugrik'),
(397, 'Montenegro', 'ME', '382', 'EUR', 'Euro'),
(398, 'Montserrat', 'MS', '1-664', 'XCD', 'East Caribbean Dollar'),
(399, 'Morocco', 'MA', '212', 'MAD', 'Moroccan Dirham'),
(400, 'Mozambique', 'MZ', '258', 'MZN', 'Mozambique Metical'),
(401, 'Myanmar', 'MM', '95', 'MMK', 'Kyat'),
(402, 'Namibia', 'NA', '264', 'ZAR', 'Rand'),
(403, 'Nauru', 'NR', '674', 'AUD', 'Australian Dollar'),
(404, 'Nepal', 'NP', '977', 'NPR', 'Nepalese Rupee'),
(405, 'Netherlands', 'NL', '31', 'EUR', 'Euro'),
(406, 'New Caledonia', 'NC', '687', 'XPF', 'CFP Franc'),
(407, 'New Zealand', 'NZ', '64', 'NZD', 'New Zealand Dollar'),
(408, 'Nicaragua', 'NI', '505', 'NIO', 'Cordoba Oro'),
(409, 'Niger', 'NE', '227', 'XOF', 'CFA Franc BCEAO'),
(410, 'Nigeria', 'NG', '234', 'NGN', 'Naira'),
(411, 'Niue', 'NU', '683', 'NZD', 'New Zealand Dollar'),
(412, 'Norfolk Island', 'NF', '672', 'AUD', 'Australian Dollar'),
(413, 'Northern Mariana Islands', 'MP', '1-670', 'USD', 'US Dollar'),
(414, 'Norway', 'NO', '47', 'NOK', 'Norwegian Krone'),
(415, 'Oman', 'OM', '968', 'OMR', 'Rial Omani'),
(416, 'Pakistan', 'PK', '92', 'PKR', 'Pakistan Rupee'),
(417, 'Palau', 'PW', '680', 'USD', 'US Dollar'),
(419, 'Panama', 'PA', '507', 'USD', 'US Dollar'),
(420, 'Papua New Guinea', 'PG', '675', 'PGK', 'Kina'),
(421, 'Paraguay', 'PY', '595', 'PYG', 'Guarani'),
(422, 'Peru', 'PE', '51', 'PEN', 'Nuevo Sol'),
(423, 'Philippines', 'PH', '63', 'PHP', 'Philippine Peso'),
(424, 'Pitcairn', 'PN', '870', 'NZD', 'New Zealand Dollar'),
(425, 'Poland', 'PL', '48', 'PLN', 'Zloty'),
(426, 'Portugal', 'PT', '351', 'EUR', 'Euro'),
(427, 'Puerto Rico', 'PR', '1', 'USD', 'US Dollar'),
(428, 'Qatar', 'QA', '974', 'QAR', 'Qatari Rial'),
(429, 'Romania', 'RO', '40', 'RON', 'New Romanian Leu'),
(430, 'Russian Federation', 'RU', '7', 'RUB', 'Russian Ruble'),
(431, 'Rwanda', 'RW', '250', 'RWF', 'Rwanda Franc'),
(432, 'Réunion', 'RE', '262', 'EUR', 'Euro'),
(433, 'Saint Barthélemy', 'BL', '590', 'EUR', 'Euro'),
(434, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '290', 'SHP', 'Saint Helena Pound'),
(435, 'Saint Kitts and Nevis', 'KN', '1-869', 'XCD', 'East Caribbean Dollar'),
(436, 'Saint Lucia', 'LC', '1-758', 'XCD', 'East Caribbean Dollar'),
(437, 'Saint Martin (French part)', 'MF', '590', 'EUR', 'Euro'),
(438, 'Saint Pierre and Miquelon', 'PM', '508', 'EUR', 'Euro'),
(439, 'Saint Vincent and the Grenadines', 'VC', '1-784', 'XCD', 'East Caribbean Dollar'),
(440, 'Samoa', 'WS', '685', 'WST', 'Tala'),
(441, 'San Marino', 'SM', '378', 'EUR', 'Euro'),
(442, 'Sao Tome and Principe', 'ST', '239', 'STD', 'Dobra'),
(443, 'Saudi Arabia', 'SA', '966', 'SAR', 'Saudi Riyal'),
(444, 'Senegal', 'SN', '221', 'XOF', 'CFA Franc BCEAO'),
(445, 'Serbia', 'RS', '381', 'RSD', 'Serbian Dinar'),
(446, 'Seychelles', 'SC', '248', 'SCR', 'Seychelles Rupee'),
(447, 'Sierra Leone', 'SL', '232', 'SLL', 'Leone'),
(448, 'Singapore', 'SG', '65', 'SGD', 'Singapore Dollar'),
(449, 'Sint Maarten (Dutch part)', 'SX', '1-721', 'ANG', 'Netherlands Antillean Guilder'),
(450, 'Slovakia', 'SK', '421', 'EUR', 'Euro'),
(451, 'Slovenia', 'SI', '386', 'EUR', 'Euro'),
(452, 'Solomon Islands', 'SB', '677', 'SBD', 'Solomon Islands Dollar'),
(453, 'Somalia', 'SO', '252', 'SOS', 'Somali Shilling'),
(454, 'South Africa', 'ZA', '27', 'ZAR', 'Rand'),
(456, 'South Sudan', 'SS', '211', 'SSP', 'South Sudanese Pound'),
(457, 'Spain', 'ES', '34', 'EUR', 'Euro'),
(458, 'Sri Lanka', 'LK', '94', 'LKR', 'Sri Lanka Rupee'),
(459, 'Sudan', 'SD', '249', 'SDG', 'Sudanese Pound'),
(460, 'Suriname', 'SR', '597', 'SRD', 'Surinam Dollar'),
(461, 'Svalbard and Jan Mayen', 'SJ', '47', 'NOK', 'Norwegian Krone'),
(462, 'Swaziland', 'SZ', '268', 'SZL', 'Lilangeni'),
(463, 'Sweden', 'SE', '46', 'SEK', 'Swedish Krona'),
(464, 'Switzerland', 'CH', '41', 'CHF', 'Swiss Franc'),
(465, 'Syrian Arab Republic', 'SY', '963', 'SYP', 'Syrian Pound'),
(466, 'Taiwan, Province of China', 'TW', '886', 'TWD', 'New Taiwan Dollar'),
(467, 'Tajikistan', 'TJ', '992', 'TJS', 'Somoni'),
(468, 'Tanzania, United Republic of', 'TZ', '255', 'TZS', 'Tanzanian Shilling'),
(469, 'Thailand', 'TH', '66', 'THB', 'Baht'),
(470, 'Timor-Leste', 'TL', '670', 'USD', 'US Dollar'),
(471, 'Togo', 'TG', '228', 'XOF', 'CFA Franc BCEAO'),
(472, 'Tokelau', 'TK', '690', 'NZD', 'New Zealand Dollar'),
(473, 'Tonga', 'TO', '676', 'TOP', 'Pa’anga'),
(474, 'Trinidad and Tobago', 'TT', '1-868', 'TTD', 'Trinidad and Tobago Dollar'),
(475, 'Tunisia', 'TN', '216', 'TND', 'Tunisian Dinar'),
(476, 'Turkey', 'TR', '90', 'TRY', 'Turkish Lira'),
(477, 'Turkmenistan', 'TM', '993', 'TMT', 'Turkmenistan New Manat'),
(478, 'Turks and Caicos Islands', 'TC', '1-649', 'USD', 'US Dollar'),
(479, 'Tuvalu', 'TV', '688', 'AUD', 'Australian Dollar'),
(480, 'Uganda', 'UG', '256', 'UGX', 'Uganda Shilling'),
(481, 'Ukraine', 'UA', '380', 'UAH', 'Hryvnia'),
(482, 'United Arab Emirates', 'AE', '971', 'AED', 'UAE Dirham'),
(483, 'United Kingdom', 'GB', '44', 'GBP', 'Pound Sterling'),
(484, 'United States', 'US', '1', 'USD', 'US Dollar'),
(485, 'United States Minor Outlying Islands', 'UM', '1', 'USD', 'US Dollar'),
(486, 'Uruguay', 'UY', '598', 'UYU', 'Peso Uruguayo'),
(487, 'Uzbekistan', 'UZ', '998', 'UZS', 'Uzbekistan Sum'),
(488, 'Vanuatu', 'VU', '678', 'VUV', 'Vatu'),
(489, 'Venezuela, Bolivarian Republic of', 'VE', '58', 'VEF', 'Bolivar'),
(490, 'Viet Nam', 'VN', '84', 'VND', 'Dong'),
(491, 'Virgin Islands, British', 'VG', '1-284', 'USD', 'US Dollar'),
(492, 'Virgin Islands, U.S.', 'VI', '1-340', 'USD', 'US Dollar'),
(493, 'Wallis and Futuna', 'WF', '681', 'XPF', 'CFP Franc'),
(494, 'Western Sahara', 'EH', '212', 'MAD', 'Moroccan Dirham'),
(495, 'Yemen', 'YE', '967', 'YER', 'Yemeni Rial'),
(496, 'Zambia', 'ZM', '260', 'ZMW', 'Zambian Kwacha'),
(497, 'Zimbabwe', 'ZW', '263', 'ZWL', 'Zimbabwe Dollar'),
(498, 'Åland Islands', 'AX', '358', 'EUR', 'Euro');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currencies`
--

CREATE TABLE `tbl_currencies` (
  `currency_id` int(11) NOT NULL,
  `currency_icon` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `country_id` int(11) NOT NULL,
  `is_forex` int(11) NOT NULL,
  `we_buy` double NOT NULL,
  `we_sell` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_currencies`
--

INSERT INTO `tbl_currencies` (`currency_id`, `currency_icon`, `date_added`, `country_id`, `is_forex`, `we_buy`, `we_sell`) VALUES
(22, 'us', '2023-06-06 11:45:02', 484, 0, 3715.67, 3757.66),
(24, 'gb', '2023-06-06 11:48:29', 483, 0, 4616.48, 4669.41),
(27, 'ke', '2023-06-06 12:08:19', 364, 0, 26.5834, 27.2286),
(28, 'eu', '2023-06-06 12:10:00', 498, 0, 3975.38, 4020.88),
(29, 'za', '2023-06-06 12:11:26', 454, 0, 193.043, 195.395),
(30, 'in', '2023-06-06 12:13:39', 351, 0, 45.0036, 45.5161),
(31, 'ca', '2023-06-06 12:16:40', 288, 0, 2769.05, 2800.76),
(32, 'au', '2023-06-06 12:17:02', 262, 0, 2473.03, 2501.53),
(33, 'ch', '2023-06-06 12:18:20', 464, 0, 4096.45, 4143.63),
(34, 'tz', '2023-06-06 12:19:18', 468, 0, 1.56305, 1.59117),
(35, 'rw', '2023-06-06 12:21:24', 431, 0, 3.24149, 3.36022),
(36, 'ae', '2023-06-06 12:22:59', 482, 0, 1011.45, 1023.26),
(37, 'ug', '2023-06-17 17:21:19', 480, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currencies_slider`
--

CREATE TABLE `tbl_currencies_slider` (
  `currency_slider_id` int(11) NOT NULL,
  `currency_slider_rate_amount` int(11) NOT NULL,
  `currency_slider_date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `currency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_content_short` text NOT NULL,
  `event_start_date` varchar(10) NOT NULL,
  `event_end_date` varchar(10) NOT NULL,
  `event_location` text NOT NULL,
  `event_map` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_content`, `event_content_short`, `event_start_date`, `event_end_date`, `event_location`, `event_map`, `photo`, `banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Lorem ipsum dolor sit amet vel cu habemus', '<p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.<br></p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2019-02-22', '2029-07-12', 'Street #233, New York, USA', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'event-1.jpg', 'event-banner-1.jpg', 'Lorem ipsum dolor sit amet vel cu habemus', '', ''),
(2, 'Ei qui possim abhor reant ei eam iudico disput', '<p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.</p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2029-02-06', '2029-07-12', 'Street #233, New York, USA', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'event-2.jpg', 'event-banner-2.jpg', 'Ei qui possim abhor reant ei eam iudico disput', '', ''),
(3, 'Est ei unum illum mucius, nemore alterum', '<p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.</p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2019-02-01', '2019-02-07', 'Street #233, New York, USA', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'event-3.jpg', 'event-banner-3.jpg', 'Est ei unum illum mucius, nemore alterum', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_content` text NOT NULL,
  `show_on_home` varchar(3) NOT NULL,
  `collapse` varchar(10) NOT NULL,
  `faq_active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`, `show_on_home`, `collapse`, `faq_active`) VALUES
(6, 'What Currency pares do you Support?', '<p>We offer a wide range of currency pairs, including major, minor, and exotic pairs.</p>', 'Yes', 'show', 'false'),
(7, 'Is my personal information secure?', '<p>Absolutely. We employ robust encryption and security measures to safeguard your personal and financial data.</p>', 'Yes', '', ''),
(8, 'Are there any hidden fees?', '<p>We believe in transparency. All fees are clearly outlined in our fee schedule, and there are no hidden charges.</p>', 'Yes', '', ''),
(9, 'Do i need to make an appointment for currency exchange at your storefront?', '<p>No appointment is necessary. Our friendly and efficient staff is ready \r\nto assist you during regular business hours, ensuring quick and \r\nconvenient currency exchange services.</p>', 'Yes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_page_content`
--

CREATE TABLE `tbl_faq_page_content` (
  `faq_content_id` int(11) NOT NULL,
  `faq_page_title` varchar(100) NOT NULL,
  `faq_main_header` varchar(255) NOT NULL,
  `faq_main_image` varchar(100) NOT NULL,
  `faq_main_image_shape` varchar(100) NOT NULL,
  `faq_header_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_faq_page_content`
--

INSERT INTO `tbl_faq_page_content` (`faq_content_id`, `faq_page_title`, `faq_main_header`, `faq_main_image`, `faq_main_image_shape`, `faq_header_image`) VALUES
(1, 'FAQ', 'Frequently Asked Questions', 'faq-img-1.png', 'faq-shape-1.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feature`
--

CREATE TABLE `tbl_feature` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_feature`
--

INSERT INTO `tbl_feature` (`id`, `name`, `content`, `icon`) VALUES
(1, 'Friendly Rates', 'We keep you in control and provide you with the best rates so you can equally enjoy and benefit from your transactions. We promise to be your safe haven even during the most volatile market times.', 'fa fa-globe'),
(2, 'Instant  Value Relialization', 'We clearly understand that whenever transactions happen, have to happen first and preferably instantly and that\'s why we make sure you don\'t have to wait long before your transaction get\'s completed', 'fa fa-exchange'),
(4, 'Secure & Safe', 'As the need for online transacting increases, we understand that you need to feel and be secure while dealing online. Our team of experts makes sure you are well protected and safe.', 'fa fa-shield');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flags`
--

CREATE TABLE `tbl_flags` (
  `flag_id` int(11) NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `flag_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_flags`
--

INSERT INTO `tbl_flags` (`flag_id`, `country_id`, `flag_icon`) VALUES
(1, 250, 'AF'),
(2, 251, 'AL'),
(3, 252, 'DZ'),
(4, 253, 'AS'),
(5, 254, 'AD'),
(6, 255, 'AO'),
(7, 256, 'AI'),
(8, 258, 'AG'),
(9, 259, 'AR'),
(10, 260, 'AM'),
(11, 261, 'AW'),
(12, 262, 'AU'),
(13, 263, 'AT'),
(14, 264, 'AZ'),
(15, 265, 'BS'),
(16, 266, 'BH'),
(17, 267, 'BD'),
(18, 268, 'BB'),
(19, 269, 'BY'),
(20, 270, 'BE'),
(21, 271, 'BZ'),
(22, 272, 'BJ'),
(23, 273, 'BM'),
(24, 274, 'BT'),
(25, 275, 'BO'),
(26, 276, 'BQ'),
(27, 277, 'BA'),
(28, 278, 'BW'),
(29, 279, 'BV'),
(30, 280, 'BR'),
(31, 281, 'IO'),
(32, 282, 'BN'),
(33, 283, 'BG'),
(34, 284, 'BF'),
(35, 285, 'BI'),
(36, 286, 'KH'),
(37, 287, 'CM'),
(38, 288, 'CA'),
(39, 289, 'CV'),
(40, 290, 'KY'),
(41, 291, 'CF'),
(42, 292, 'TD'),
(43, 293, 'CL'),
(44, 294, 'CN'),
(45, 295, 'CX'),
(46, 296, 'CC'),
(47, 297, 'CO'),
(48, 298, 'KM'),
(49, 299, 'CG'),
(50, 301, 'CK'),
(51, 302, 'CR'),
(52, 303, 'HR'),
(53, 304, 'CU'),
(54, 305, 'CW'),
(55, 306, 'CY'),
(56, 307, 'CZ'),
(57, 308, 'CI'),
(58, 309, 'DK'),
(59, 310, 'DJ'),
(60, 311, 'DM'),
(61, 312, 'DO'),
(62, 313, 'EC'),
(63, 314, 'EG'),
(64, 315, 'SV'),
(65, 316, 'GQ'),
(66, 317, 'ER'),
(67, 318, 'EE'),
(68, 319, 'ET'),
(69, 320, 'FK'),
(70, 321, 'FO'),
(71, 322, 'FJ'),
(72, 323, 'FI'),
(73, 324, 'FR'),
(74, 325, 'GF'),
(75, 326, 'PF'),
(76, 327, 'TF'),
(77, 328, 'GA'),
(78, 329, 'GM'),
(79, 330, 'GE'),
(80, 331, 'DE'),
(81, 332, 'GH'),
(82, 333, 'GI'),
(83, 334, 'GR'),
(84, 335, 'GL'),
(85, 336, 'GD'),
(86, 337, 'GP'),
(87, 338, 'GU'),
(88, 339, 'GT'),
(89, 340, 'GG'),
(90, 341, 'GN'),
(91, 342, 'GW'),
(92, 343, 'GY'),
(93, 344, 'HT'),
(94, 345, 'HM'),
(95, 346, 'VA'),
(96, 347, 'HN'),
(97, 348, 'HK'),
(98, 349, 'HU'),
(99, 350, 'IS'),
(100, 351, 'IN'),
(101, 352, 'ID'),
(102, 353, 'IR'),
(103, 354, 'IQ'),
(104, 355, 'IE'),
(105, 356, 'IM'),
(106, 357, 'IL'),
(107, 358, 'IT'),
(108, 359, 'JM'),
(109, 360, 'JP'),
(110, 361, 'JE'),
(111, 362, 'JO'),
(112, 363, 'KZ'),
(113, 364, 'KE'),
(114, 365, 'KI'),
(115, 366, 'KP'),
(116, 367, 'KR'),
(117, 368, 'KW'),
(118, 369, 'KG'),
(119, 370, 'LA'),
(120, 371, 'LV'),
(121, 372, 'LB'),
(122, 373, 'LS'),
(123, 374, 'LR'),
(124, 375, 'LY'),
(125, 376, 'LI'),
(126, 377, 'LT'),
(127, 378, 'LU'),
(128, 379, 'MO'),
(129, 380, 'MK'),
(130, 381, 'MG'),
(131, 382, 'MW'),
(132, 383, 'MY'),
(133, 384, 'MV'),
(134, 385, 'ML'),
(135, 386, 'MT'),
(136, 387, 'MH'),
(137, 388, 'MQ'),
(138, 389, 'MR'),
(139, 390, 'MU'),
(140, 391, 'YT'),
(141, 392, 'MX'),
(142, 393, 'FM'),
(143, 394, 'MD'),
(144, 395, 'MC'),
(145, 396, 'MN'),
(146, 397, 'ME'),
(147, 398, 'MS'),
(148, 399, 'MA'),
(149, 400, 'MZ'),
(150, 401, 'MM'),
(151, 402, 'NA'),
(152, 403, 'NR'),
(153, 404, 'NP'),
(154, 405, 'NL'),
(155, 406, 'NC'),
(156, 407, 'NZ'),
(157, 408, 'NI'),
(158, 409, 'NE'),
(159, 410, 'NG'),
(160, 411, 'NU'),
(161, 412, 'NF'),
(162, 413, 'MP'),
(163, 414, 'NO'),
(164, 415, 'OM'),
(165, 416, 'PK'),
(166, 417, 'PW'),
(167, 419, 'PA'),
(168, 420, 'PG'),
(169, 421, 'PY'),
(170, 422, 'PE'),
(171, 423, 'PH'),
(172, 424, 'PN'),
(173, 425, 'PL'),
(174, 426, 'PT'),
(175, 427, 'PR'),
(176, 428, 'QA'),
(177, 429, 'RO'),
(178, 430, 'RU'),
(179, 431, 'RW'),
(180, 432, 'RE'),
(181, 433, 'BL'),
(182, 434, 'SH'),
(183, 435, 'KN'),
(184, 436, 'LC'),
(185, 437, 'MF'),
(186, 438, 'PM'),
(187, 439, 'VC'),
(188, 440, 'WS'),
(189, 441, 'SM'),
(190, 442, 'ST'),
(191, 443, 'SA'),
(192, 444, 'SN'),
(193, 445, 'RS'),
(194, 446, 'SC'),
(195, 447, 'SL'),
(196, 448, 'SG'),
(197, 449, 'SX'),
(198, 450, 'SK'),
(199, 451, 'SI'),
(200, 452, 'SB'),
(201, 453, 'SO'),
(202, 454, 'ZA'),
(203, 456, 'SS'),
(204, 457, 'ES'),
(205, 458, 'LK'),
(206, 459, 'SD'),
(207, 460, 'SR'),
(208, 461, 'SJ'),
(209, 462, 'SZ'),
(210, 463, 'SE'),
(211, 464, 'CH'),
(212, 465, 'SY'),
(213, 466, 'TW'),
(214, 467, 'TJ'),
(215, 468, 'TZ'),
(216, 469, 'TH'),
(217, 470, 'TL'),
(218, 471, 'TG'),
(219, 472, 'TK'),
(220, 473, 'TO'),
(221, 474, 'TT'),
(222, 475, 'TN'),
(223, 476, 'TR'),
(224, 477, 'TM'),
(225, 478, 'TC'),
(226, 479, 'TV'),
(227, 480, 'UG'),
(228, 481, 'UA'),
(229, 482, 'AE'),
(230, 483, 'GB'),
(231, 484, 'US'),
(232, 485, 'UM'),
(233, 486, 'UY'),
(234, 487, 'UZ'),
(235, 488, 'VU'),
(236, 489, 'VE'),
(237, 490, 'VN'),
(238, 491, 'VG'),
(239, 492, 'VI'),
(240, 493, 'WF'),
(241, 494, 'EH'),
(242, 495, 'YE'),
(243, 496, 'ZM'),
(244, 497, 'ZW'),
(245, 498, 'AX');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_about_section`
--

CREATE TABLE `tbl_home_about_section` (
  `id` int(11) NOT NULL,
  `about_us_top_header` varchar(100) NOT NULL,
  `about_us_second_header` varchar(255) NOT NULL,
  `about_us_description` text NOT NULL,
  `about_us_image` varchar(100) NOT NULL,
  `about_us_rates_header` varchar(100) NOT NULL,
  `about_us_rates_description` text NOT NULL,
  `about_us_attention_header` varchar(100) NOT NULL,
  `about_us_attention_description` text NOT NULL,
  `about_us_button_text` varchar(100) NOT NULL,
  `about_us_button_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_about_section`
--

INSERT INTO `tbl_home_about_section` (`id`, `about_us_top_header`, `about_us_second_header`, `about_us_description`, `about_us_image`, `about_us_rates_header`, `about_us_rates_description`, `about_us_attention_header`, `about_us_attention_description`, `about_us_button_text`, `about_us_button_link`) VALUES
(1, 'ABOUT US', 'We are committed to excellent service delivery', 'With wealth of expertise under our belt, we give you nothing but the best in financial service offering in Currency Exchange, Money Transfers and remittances and Agent Banking.', 'services.webp', 'Unbeatable Rates', 'Our exchange rates are very considerate and highly negotiable for bigger transactions.', 'Excellent Attention', 'We value your time above everything else, choose us and we shall serve you happily and super fast.', 'Contact Us', 'localhost/zeal-site/contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_advert`
--

CREATE TABLE `tbl_home_advert` (
  `advert_id` int(11) NOT NULL,
  `ad_header` text NOT NULL,
  `ad_header_append` text NOT NULL,
  `ad_background_image` varchar(100) NOT NULL,
  `ad_button_text` varchar(100) NOT NULL,
  `ad_button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_home_advert`
--

INSERT INTO `tbl_home_advert` (`advert_id`, `ad_header`, `ad_header_append`, `ad_background_image`, `ad_button_text`, `ad_button_url`) VALUES
(1, '   Send money to your loved ones in India with   ', '   a better rate & low transfer fees   ', '202311281701178866zealimg.jpg', '   CONTINUE TO HOME PAGE    ', '   #   ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_currency_section_headers`
--

CREATE TABLE `tbl_home_currency_section_headers` (
  `id` int(11) NOT NULL,
  `top_header` text NOT NULL,
  `second_header` text NOT NULL,
  `third_header` text NOT NULL,
  `contact_us_button_text` varchar(100) NOT NULL,
  `contact_us_button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_currency_section_headers`
--

INSERT INTO `tbl_home_currency_section_headers` (`id`, `top_header`, `second_header`, `third_header`, `contact_us_button_text`, `contact_us_button_url`) VALUES
(1, 'Currency Exchange, Money Transfers, Banking', 'Your trusted Money Transfer, Forex and Banking partner since 2009', 'Money Transfer, Forex and Banking partner since 2009', 'Contact Us', 'localhost/zeal-site/contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_more_benefits_content`
--

CREATE TABLE `tbl_home_more_benefits_content` (
  `id` int(11) NOT NULL,
  `benefits_content_header` varchar(100) NOT NULL,
  `benefits_content_description` text NOT NULL,
  `benefits_content_icon` varchar(100) NOT NULL,
  `benefits_content_duration` int(11) NOT NULL,
  `benefits_content_delay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_more_benefits_content`
--

INSERT INTO `tbl_home_more_benefits_content` (`id`, `benefits_content_header`, `benefits_content_description`, `benefits_content_icon`, `benefits_content_duration`, `benefits_content_delay`) VALUES
(1, 'Lowest Fees', 'Our transaction fees are very affordable so you money is truly yours.', 'flaticon-money-1', 1000, 500),
(2, 'Instant Processing', 'We prioritise each and every customer apy maximum attention fast transaction processing.', 'flaticon-automation', 1000, 600),
(3, 'Bank Level Security', 'Your data is secure with us, we don\'t share or expose it with/to anyone.', 'flaticon-shield', 1000, 700);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_more_benefits_headers`
--

CREATE TABLE `tbl_home_more_benefits_headers` (
  `id` int(11) NOT NULL,
  `benefits_main_header` varchar(100) NOT NULL,
  `benefits_second_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_more_benefits_headers`
--

INSERT INTO `tbl_home_more_benefits_headers` (`id`, `benefits_main_header`, `benefits_second_header`) VALUES
(1, 'MORE BENEFITS', 'As your partner, allow us to do more for you.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_our_review_content`
--

CREATE TABLE `tbl_home_our_review_content` (
  `id` int(11) NOT NULL,
  `our_review_client_name` varchar(100) NOT NULL,
  `our_review_client_roll` varchar(100) NOT NULL,
  `our_review_client_image` varchar(100) NOT NULL,
  `our_review_icon` varchar(100) NOT NULL,
  `our_review_client_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_our_review_content`
--

INSERT INTO `tbl_home_our_review_content` (`id`, `our_review_client_name`, `our_review_client_roll`, `our_review_client_image`, `our_review_icon`, `our_review_client_comment`) VALUES
(1, 'Willian Evans', 'Manager at Ken Park', 'client.jpg', 'flaticon-quotation-mark', 'I am really grateful of what Zeal Forex did for me...'),
(2, 'Mugisha Robert', 'Director', 'client.jpg', 'flaticon-quotation-mark', 'I appreciate the sense of urgency and exception treatment I was given.'),
(3, 'Gerlard Lubega', 'Accountant', 'client.jpg', 'flaticon-quotation-mark', 'I appreciate the sense of urgency and exception treatment I was given.'),
(4, 'Kevin Lugumbya', 'Technical Analyst', 'client.jpg', 'flaticon-quotation-mark', 'I appreciate the sense of urgency and exception treatment I was given.'),
(5, 'Dorian Nambi', 'Lecturer', 'client.jpg', 'flaticon-quotation-mark', 'I appreciate the sense of urgency and exception treatment I was given.'),
(6, 'Joseph Kazibwe', 'H.R Consultant', 'client.jpg', 'flaticon-quotation-mark', 'I appreciate the sense of urgency and exception treatment I was given.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_our_review_headers`
--

CREATE TABLE `tbl_home_our_review_headers` (
  `id` int(11) NOT NULL,
  `our_review_main_header` varchar(100) NOT NULL,
  `our_review_second_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_our_review_headers`
--

INSERT INTO `tbl_home_our_review_headers` (`id`, `our_review_main_header`, `our_review_second_header`) VALUES
(1, 'OUR REVIEWS', 'More Than 20,000+ Happy Customers Trust Our Services');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_partners`
--

CREATE TABLE `tbl_home_partners` (
  `id` int(11) NOT NULL,
  `partner_title` varchar(100) NOT NULL,
  `partner_logo` varchar(100) NOT NULL,
  `partner_description` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_partners`
--

INSERT INTO `tbl_home_partners` (`id`, `partner_title`, `partner_logo`, `partner_description`, `date_posted`) VALUES
(1, 'MoneyGram', 'partner-1.png', '', '2023-06-08 09:20:52'),
(2, 'Western Union', 'partner-2.png', '', '2023-06-08 09:20:52'),
(3, 'Express Money', 'partner-3.png', '', '2023-06-08 09:20:52'),
(4, 'Equity', 'partner-4.png', '', '2023-06-08 09:20:52'),
(5, 'WorldRemit', 'partner-5.png', '', '2023-06-08 09:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_we_are_flexible_content`
--

CREATE TABLE `tbl_home_we_are_flexible_content` (
  `id` int(11) NOT NULL,
  `content_header` varchar(100) NOT NULL,
  `content_description` text NOT NULL,
  `content_icon` varchar(100) NOT NULL,
  `content_button_text` varchar(100) NOT NULL,
  `content_button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_we_are_flexible_content`
--

INSERT INTO `tbl_home_we_are_flexible_content` (`id`, `content_header`, `content_description`, `content_icon`, `content_button_text`, `content_button_url`) VALUES
(1, 'Currency Exchange Options', 'We allow both over the counter and bank-wire currency exchange deals, we are caring and ready to serve you.', 'flaticon-hand ff', 'Read More', 'send-money.html'),
(2, 'Currency Coverage', 'We cover a variety of currecies on the market and extra more.Our rates are very attractive and flexible too! ', 'flaticon-pie-chart', 'Read More', ''),
(3, 'Rate Alerts', 'Subscribe to instantly receive our rate offers. We also make rate exceptions for bigger deals.', 'flaticon-notification', 'Read More', 'alerts.html'),
(4, 'One Stop for needs', 'Bank, exchange and transfer money, all in one place. Don\'t risk moving with cash when we can serve you all at once!', 'flaticon-verified', 'Read More', ''),
(5, 'Sending and Receiving', 'We are here for you in every way...', 'flaticon-verified', 'More Details', 'google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_we_are_flexible_headers`
--

CREATE TABLE `tbl_home_we_are_flexible_headers` (
  `id` int(11) NOT NULL,
  `home_we_are_flexible_top_header` varchar(100) NOT NULL,
  `home_we_are_flexible_second_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_we_are_flexible_headers`
--

INSERT INTO `tbl_home_we_are_flexible_headers` (`id`, `home_we_are_flexible_top_header`, `home_we_are_flexible_second_header`) VALUES
(1, 'WE ARE FLEXIBLE', 'Come to us and shall serve you your financial needs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_why_choose_us_images_and_shapes`
--

CREATE TABLE `tbl_home_why_choose_us_images_and_shapes` (
  `id` int(11) NOT NULL,
  `choose_image_1` varchar(100) NOT NULL,
  `choose_image_2` varchar(100) NOT NULL,
  `choose_image_3` varchar(100) NOT NULL,
  `shape_1` varchar(100) NOT NULL,
  `shape_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_why_choose_us_images_and_shapes`
--

INSERT INTO `tbl_home_why_choose_us_images_and_shapes` (`id`, `choose_image_1`, `choose_image_2`, `choose_image_3`, `shape_1`, `shape_2`) VALUES
(1, 'hero-img-6.jpg', 'wh-img-5.jpg', 'wh-img-6.jpg', 'shape-3.png', 'shape-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_why_choose_us_services`
--

CREATE TABLE `tbl_home_why_choose_us_services` (
  `id` int(11) NOT NULL,
  `service_header` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `service_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_why_choose_us_services`
--

INSERT INTO `tbl_home_why_choose_us_services` (`id`, `service_header`, `service_description`, `service_icon`) VALUES
(1, 'Customer assistance', 'We offer excellent customer service.', 'flaticon-tick'),
(2, 'Multi-bank coverage', 'We are an agency banking partner and we have multiple bank options.', 'flaticon-tick'),
(3, 'Competitive Currency Rates', 'Doing business with us is much cherished and appreciated that\'s why we don\'t hike our rates.', 'flaticon-tick');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_why_choose_us_top_content`
--

CREATE TABLE `tbl_home_why_choose_us_top_content` (
  `id` int(11) NOT NULL,
  `main_header` varchar(100) NOT NULL,
  `second_header` text NOT NULL,
  `main_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_why_choose_us_top_content`
--

INSERT INTO `tbl_home_why_choose_us_top_content` (`id`, `main_header`, `second_header`, `main_description`) VALUES
(1, 'WHY CHOOSE US', 'We offer affordable services with variety options', 'Whether you are exchanging money, remitting it or banking it, we give our customers priority treatment regardless of the type and nature of their transactions.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `value`) VALUES
(1, 'HOME', 'Home'),
(2, 'ABOUT', 'About Us'),
(3, 'TEAM', 'Team'),
(4, 'PAGE', 'Pages'),
(5, 'EVENT', 'Events'),
(6, 'PHOTO_GALLERY', 'Photo Gallery'),
(7, 'TESTIMONIAL', 'Testimonials'),
(8, 'FAQ', 'FAQ'),
(9, 'PRICING_TABLE', 'Pricing'),
(10, 'SERVICE', 'Services'),
(11, 'PORTFOLIO', 'Portfolio'),
(12, 'NEWS', 'News'),
(13, 'CONTACT', 'Contact Us'),
(14, 'SEARCH_FOR', 'Search for...'),
(15, 'READ_MORE', 'Read More'),
(16, 'SUBMIT', 'Submit'),
(17, 'FIRST_NAME', 'First Name'),
(18, 'LAST_NAME', 'Last Name'),
(19, 'PHONE_NUMBER', 'Phone Number'),
(20, 'EMAIL_ADDRESS', 'Email Address'),
(21, 'ADDRESS', 'Address'),
(22, 'MESSAGE', 'Message'),
(23, 'START_DATE', 'Start Date'),
(24, 'END_DATE', 'End Date'),
(25, 'EVENT_START_DATE', 'Event Start Date'),
(26, 'EVENT_END_DATE', 'Event End Date'),
(27, 'EVENT_LOCATION_MAP', 'Event Location Map'),
(28, 'SHARE_THIS_EVENT', 'Share This Event'),
(29, 'SHARE_THIS_NEWS', 'Share This News'),
(30, 'COMMENT', 'Comment'),
(31, 'NAME', 'Name'),
(32, 'ALL', 'All'),
(33, 'PROJECT_OVERVIEW', 'Project Overview'),
(34, 'CATEGORY', 'Category'),
(35, 'CLIENT_NAME', 'Client Name'),
(36, 'CLIENT_COMPANY_NAME', 'Client Company Name'),
(37, 'PROJECT_START_DATE', 'Project Start Date'),
(38, 'PROJECT_END_DATE', 'Project End Date'),
(39, 'CLIENT_COMMENT', 'Client Comment'),
(40, 'NEWS_DATE', 'News Date'),
(41, 'RECENT_PORTFOLIO', 'Recent Portfolio'),
(42, 'RECENT_PORTFOLIO_SUBTITLE', 'See all our works that we do for our clients'),
(43, 'CONTACT_FORM', 'Contact Us'),
(44, 'SEND_MESSAGE', 'Submit'),
(45, 'SUBJECT', 'Subject'),
(46, 'NO_RESULT_FOUND', 'No Result is Found');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_content_short` text NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `comment` varchar(3) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_content`, `news_content_short`, `news_date`, `photo`, `banner`, `category_id`, `comment`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'How Can Exchange Rate Movement Effect Your Business & Financial Condition', '<p>In the dynamic landscape of global commerce, exchange rate movements \r\nplay a pivotal role in shaping the financial condition of businesses. \r\nWhether you\'re a small local enterprise or a multinational corporation, understanding \r\nhow these fluctuations can influence your bottom line is essential for strategic decision-making.</p><h3>The Ripple Effect on Costs and Prices:</h3>\r\n<p>\r\nFluctuations in exchange rates can directly impact the cost of goods and\r\n services. For businesses involved in international trade, sudden \r\ncurrency depreciations can lead to increased import costs, affecting \r\nprofit margins. Conversely, a strengthening local currency can make \r\nimported goods more affordable, potentially boosting sales. It\'s crucial\r\n for businesses to stay vigilant, monitor currency trends, and adjust \r\npricing strategies accordingly.\r\n</p>\r\n\r\n<h3>Mitigating Currency Risks:</h3>\r\n<p>\r\nTo navigate the unpredictable waters of exchange rate movements, \r\nbusinesses can employ various risk management tools. Forward contracts, \r\ncurrency options, and other hedging instruments can help mitigate the \r\nimpact of adverse currency movements. Developing a comprehensive risk \r\nmanagement strategy aligned with the business\'s goals and risk tolerance\r\n is crucial for maintaining financial stability.</p><p></p><p></p>', 'For businesses engaged in exporting or importing, exchange rate movements introduce an added layer of complexity\"', '2023-11-22', 'news-5.jpg', 'news-banner-5.jpg', 1, 'On', 'How Can Exchange Rate Movement Effect Your Business & Financial Condition', 'forex,money markets', 'For businesses engaged in exporting or importing, exchange rate movements introduce an added layer of complexity\"');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_about`
--

CREATE TABLE `tbl_page_about` (
  `id` int(11) NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `mt_about` varchar(255) NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL,
  `page_top_header` varchar(250) NOT NULL,
  `page_top_description` text NOT NULL,
  `page_services_header` varchar(250) NOT NULL,
  `page_services_description` text NOT NULL,
  `page_service_1_header` varchar(100) NOT NULL,
  `page_service_1_description` text NOT NULL,
  `page_service_2_header` varchar(100) NOT NULL,
  `page_service_2_description` text NOT NULL,
  `page_button_text` varchar(100) NOT NULL,
  `page_button_url` text NOT NULL,
  `what_we_offer_main` varchar(100) NOT NULL,
  `what_we_offer_heading` varchar(250) NOT NULL,
  `what_we_offer_description` text NOT NULL,
  `offered_service_1_title` varchar(100) NOT NULL,
  `offered_service_1_description` text NOT NULL,
  `offered_service_2_title` varchar(100) NOT NULL,
  `offered_service_2_description` text NOT NULL,
  `offered_service_3_title` varchar(100) NOT NULL,
  `offered_service_3_description` text NOT NULL,
  `main_image_1` varchar(100) NOT NULL,
  `main_image_2` varchar(100) NOT NULL,
  `main_image_3` varchar(100) NOT NULL,
  `main_image_4` varchar(100) NOT NULL,
  `main_image_animated` varchar(100) NOT NULL,
  `main_image_animated_bg` varchar(100) NOT NULL,
  `sub_image_1` varchar(100) NOT NULL,
  `sub_image_2` varchar(100) NOT NULL,
  `sub_image_animated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_about`
--

INSERT INTO `tbl_page_about` (`id`, `about_heading`, `about_content`, `mt_about`, `mk_about`, `md_about`, `page_top_header`, `page_top_description`, `page_services_header`, `page_services_description`, `page_service_1_header`, `page_service_1_description`, `page_service_2_header`, `page_service_2_description`, `page_button_text`, `page_button_url`, `what_we_offer_main`, `what_we_offer_heading`, `what_we_offer_description`, `offered_service_1_title`, `offered_service_1_description`, `offered_service_2_title`, `offered_service_2_description`, `offered_service_3_title`, `offered_service_3_description`, `main_image_1`, `main_image_2`, `main_image_3`, `main_image_4`, `main_image_animated`, `main_image_animated_bg`, `sub_image_1`, `sub_image_2`, `sub_image_animated`) VALUES
(1, 'About Us', '<div align=\"justify\"><p style=\"margin-bottom: 11.5px;  font-family: &quot;Gotham Rounded Book&quot;, sans-serif; font-size: 14px; text-align: left;\">Zeal Forex offers the best currency exchange services at the most competitive rates in Uganda.</p><p style=\"margin-bottom: 11.5px; font-family: &quot;Gotham Rounded Book&quot;, sans-serif; font-size: 14px; text-align: left;\">With the global economy being dynamic, currency values tend to fluctuate on a daily and even hourly basis. Whether you are an avid traveller exploring the world or a businessman traversing time zones making business deals or a student going abroad for education, trust us with all your foreign currency needs.</p><br><b>Mission</b></div><div align=\"justify\"><b><br></b></div><div align=\"justify\">Financial growth and Finance made easy one step at a time<br><br><b>Vision</b></div><div align=\"justify\"><b><br></b></div><div align=\"justify\"><div align=\"justify\" style=\"\">Developing the financial market by connecting the global village through easy and faster money services</div><div align=\"justify\" style=\"\">and trade.</div><div align=\"justify\" style=\"\"><br></div></div><div align=\"justify\"><b>Purpose</b></div><div align=\"justify\"><b><br></b></div><ul><li>Make remittance easy both to and from</li><li>Provide easier ways for businesses to market their products</li><li>Make local transfers affordable, easier and faster</li><li>Bring bill payments to the tip of your fingers with just one click.</li><li>Values of the company</li><li>Customers are our number one priority</li><li>We aim at providing high quality services to our customers hence always improving</li><li>Trust between our company and the customers is highly valued.</li><li>We will always keep our word.</li></ul><div align=\"justify\"><br></div><div align=\"justify\"><b>Goal of the service</b></div><div align=\"justify\">To reduce the use of paper money and boost Financial Services provision</div><div align=\"justify\"><b><br></b><br></div>', 'About Zeal Forex Services', 'Zeal forex', 'We are developing the financial market by connecting the global village through easy and faster money services\r\nand trade.\r\n', 'With strategic partnerships, we serve better.', '', 'Exchange, Bank and Remitt with us', 'We have been your trusted Money Transfer, Forex and Banking partner since 2009, doing it with exceptional levels of expertise.', 'Service Variety', 'Explore a spectrum, tailored just for you, In the forex exchange game, we\'re the true blue. Varieties galore, satisfaction at the core.', 'Exceptional Support', 'Experience worry-free service brilliance with our Support Assurance—24/7 reliability, expert assistance, and a commitment to evolving with your needs.', 'READ MORE', '#', 'WHAT WE OFFER', 'We Provide Currency Exchange and Money Transfer Services World Wide', 'From inception, we have continuously assisted our customers to exchange, tranfer and bank their money seemlessly.We still keep the same promise for today and the days to come.', ' Competitive Currency Rates', 'In the forex arena, we redefine reliability, offering rates that exceed industry norms. Your financial advantage is our commitment, ensuring a streamlined exchange experience where excellence is not just promised but delivered.', 'International Transfers', 'Rest assured, we deliver the pinnacle of service in International Transfers, ensuring your transactions are swift, secure, and unparalleled.', ' Multi-bank Agency', 'We are a trusted agent for several banks, guaranteeing a seamless and secure financial experience. Your confidence in our expertise is the cornerstone of our commitment to excellence.', 'about-img-1.jpg', 'about-img-2.jpg', 'about-img-3.jpg', 'about-img-4.jpg', 'shape-1.png', 'about-shape-4.png', 'wh-img-3.jpg', '', 'shape-6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_contact`
--

CREATE TABLE `tbl_page_contact` (
  `id` int(11) NOT NULL,
  `contact_heading` varchar(255) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_map` text NOT NULL,
  `mt_contact` varchar(255) NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL,
  `contact_page_title` varchar(100) NOT NULL,
  `address_title` varchar(100) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `address_3` text NOT NULL,
  `emails_title` varchar(100) NOT NULL,
  `email_1` text NOT NULL,
  `email_2` text NOT NULL,
  `email_3` text NOT NULL,
  `email_4` text NOT NULL,
  `email_5` text NOT NULL,
  `phones_title` varchar(100) NOT NULL,
  `phone_1` varchar(30) NOT NULL,
  `phone_2` varchar(30) NOT NULL,
  `phone_3` varchar(30) NOT NULL,
  `phone_4` varchar(30) NOT NULL,
  `phone_5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_contact`
--

INSERT INTO `tbl_page_contact` (`id`, `contact_heading`, `contact_address`, `contact_email`, `contact_phone`, `contact_map`, `mt_contact`, `mk_contact`, `md_contact`, `contact_page_title`, `address_title`, `address_1`, `address_2`, `address_3`, `emails_title`, `email_1`, `email_2`, `email_3`, `email_4`, `email_5`, `phones_title`, `phone_1`, `phone_2`, `phone_3`, `phone_4`, `phone_5`) VALUES
(1, 'Let us serve you', 'US Address: 467\r\nAcree Lane,\r\nColumbus, OH 43228.', 'info@flyfee.com\r\nsupport@flyfee.com\r\n', 'Office : \n+256-786-77-8075 (Uganda)\n+1-304-283-6268 (USA)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.7590720128974!2d32.582677!3d0.312248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc7e0237c2c7%3A0xced9084d49a23229!2sRussel%20Ln%2C%20Kampala%2C%20Uganda!5e0!3m2!1sen!2sus!4v1677837957369!5m2!1sen!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Contact -Let us know what you need', '', 'US Address: 467\r\nAcree Lane,\r\nColumbus, OH 43228.', 'Contact Us', 'Our Location', 'Plot 1 Namaganda Plaza. P.O.Box 11562 kampala-Russel Rd ', '', '', 'Email Us', 'zealforex@gmail.com', 'info@zealforex.net', '', '', '', 'Phones', '+256 755 544555', '+256 414 666898', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_event`
--

CREATE TABLE `tbl_page_event` (
  `id` int(11) NOT NULL,
  `event_heading` varchar(255) NOT NULL,
  `mt_event` varchar(255) NOT NULL,
  `mk_event` text NOT NULL,
  `md_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_event`
--

INSERT INTO `tbl_page_event` (`id`, `event_heading`, `mt_event`, `mk_event`, `md_event`) VALUES
(1, 'EVENTS', 'Events - What you won\'t afford to miss', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_faq`
--

CREATE TABLE `tbl_page_faq` (
  `id` int(11) NOT NULL,
  `faq_heading` varchar(255) NOT NULL,
  `mt_faq` varchar(255) NOT NULL,
  `mk_faq` text NOT NULL,
  `md_faq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_faq`
--

INSERT INTO `tbl_page_faq` (`id`, `faq_heading`, `mt_faq`, `mk_faq`, `md_faq`) VALUES
(1, 'FAQ', 'FAQ -What you should know', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_home`
--

CREATE TABLE `tbl_page_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `home_welcome_title` varchar(255) NOT NULL,
  `home_welcome_subtitle` varchar(255) NOT NULL,
  `home_welcome_text` text NOT NULL,
  `home_welcome_video` text NOT NULL,
  `home_welcome_pbar1_text` varchar(255) NOT NULL,
  `home_welcome_pbar1_value` varchar(10) NOT NULL,
  `home_welcome_pbar2_text` varchar(255) NOT NULL,
  `home_welcome_pbar2_value` varchar(10) NOT NULL,
  `home_welcome_pbar3_text` varchar(255) NOT NULL,
  `home_welcome_pbar3_value` varchar(10) NOT NULL,
  `home_welcome_pbar4_text` varchar(255) NOT NULL,
  `home_welcome_pbar4_value` varchar(10) NOT NULL,
  `home_welcome_pbar5_text` varchar(255) NOT NULL,
  `home_welcome_pbar5_value` varchar(10) NOT NULL,
  `home_welcome_status` varchar(5) NOT NULL,
  `home_welcome_video_bg` varchar(255) NOT NULL,
  `home_why_choose_title` varchar(255) NOT NULL,
  `home_why_choose_subtitle` varchar(255) NOT NULL,
  `home_why_choose_status` varchar(5) NOT NULL,
  `home_feature_title` varchar(255) NOT NULL,
  `home_feature_subtitle` varchar(255) NOT NULL,
  `home_feature_status` varchar(5) NOT NULL,
  `home_service_title` varchar(255) NOT NULL,
  `home_service_subtitle` varchar(255) NOT NULL,
  `home_service_status` varchar(5) NOT NULL,
  `counter_1_title` varchar(255) NOT NULL,
  `counter_1_value` varchar(10) NOT NULL,
  `counter_1_icon` varchar(50) NOT NULL,
  `counter_2_title` varchar(255) NOT NULL,
  `counter_2_value` varchar(10) NOT NULL,
  `counter_2_icon` varchar(50) NOT NULL,
  `counter_3_title` varchar(255) NOT NULL,
  `counter_3_value` varchar(10) NOT NULL,
  `counter_3_icon` varchar(50) NOT NULL,
  `counter_4_title` varchar(255) NOT NULL,
  `counter_4_value` varchar(10) NOT NULL,
  `counter_4_icon` varchar(50) NOT NULL,
  `counter_photo` varchar(255) NOT NULL,
  `counter_status` varchar(10) NOT NULL,
  `home_portfolio_title` varchar(255) NOT NULL,
  `home_portfolio_subtitle` varchar(255) NOT NULL,
  `home_portfolio_status` varchar(5) NOT NULL,
  `home_booking_form_title` varchar(255) NOT NULL,
  `home_booking_faq_title` varchar(255) NOT NULL,
  `home_booking_status` varchar(5) NOT NULL,
  `home_booking_photo` varchar(255) NOT NULL,
  `home_team_title` varchar(255) NOT NULL,
  `home_team_subtitle` varchar(255) NOT NULL,
  `home_team_status` varchar(5) NOT NULL,
  `home_ptable_title` varchar(255) NOT NULL,
  `home_ptable_subtitle` varchar(255) NOT NULL,
  `home_ptable_status` varchar(5) NOT NULL,
  `home_testimonial_title` varchar(255) NOT NULL,
  `home_testimonial_subtitle` varchar(255) NOT NULL,
  `home_testimonial_photo` varchar(255) NOT NULL,
  `home_testimonial_status` varchar(5) NOT NULL,
  `home_blog_title` varchar(255) NOT NULL,
  `home_blog_subtitle` varchar(255) NOT NULL,
  `home_blog_item` varchar(5) NOT NULL,
  `home_blog_status` varchar(5) NOT NULL,
  `home_cta_text` text NOT NULL,
  `home_cta_button_text` varchar(255) NOT NULL,
  `home_cta_button_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_page_home`
--

INSERT INTO `tbl_page_home` (`id`, `title`, `meta_keyword`, `meta_description`, `home_welcome_title`, `home_welcome_subtitle`, `home_welcome_text`, `home_welcome_video`, `home_welcome_pbar1_text`, `home_welcome_pbar1_value`, `home_welcome_pbar2_text`, `home_welcome_pbar2_value`, `home_welcome_pbar3_text`, `home_welcome_pbar3_value`, `home_welcome_pbar4_text`, `home_welcome_pbar4_value`, `home_welcome_pbar5_text`, `home_welcome_pbar5_value`, `home_welcome_status`, `home_welcome_video_bg`, `home_why_choose_title`, `home_why_choose_subtitle`, `home_why_choose_status`, `home_feature_title`, `home_feature_subtitle`, `home_feature_status`, `home_service_title`, `home_service_subtitle`, `home_service_status`, `counter_1_title`, `counter_1_value`, `counter_1_icon`, `counter_2_title`, `counter_2_value`, `counter_2_icon`, `counter_3_title`, `counter_3_value`, `counter_3_icon`, `counter_4_title`, `counter_4_value`, `counter_4_icon`, `counter_photo`, `counter_status`, `home_portfolio_title`, `home_portfolio_subtitle`, `home_portfolio_status`, `home_booking_form_title`, `home_booking_faq_title`, `home_booking_status`, `home_booking_photo`, `home_team_title`, `home_team_subtitle`, `home_team_status`, `home_ptable_title`, `home_ptable_subtitle`, `home_ptable_status`, `home_testimonial_title`, `home_testimonial_subtitle`, `home_testimonial_photo`, `home_testimonial_status`, `home_blog_title`, `home_blog_subtitle`, `home_blog_item`, `home_blog_status`, `home_cta_text`, `home_cta_button_text`, `home_cta_button_url`) VALUES
(1, '', '', '', 'More than just forex', 'YOUR MONEY MATTERS!', '<p align=\"justify\">Zeal Forex is a&nbsp; financial service company that provides fast and easy currency exchanges, money transfers, bill payments and agency banking services.</p><p align=\"justify\">We are committed to providing the highest quality payments solutions and any other additional services you may need to transfer money and engage in payments painlessly.</p><p align=\"justify\">We specialize in building inclusive payment solution enabling everyone to gain access to quality financial services at the comfort of their reach.</p><p align=\"justify\"><br></p><p align=\"justify\"><b>We send Money to&nbsp; the following countries:</b></p><p align=\"justify\">USA,CANADA, CHINA, UK, FRANCE, TURKEY, SWEDEN, GERMAN, UAE, SAUDI ARABIA, OMAN, QATAR, KUWAIT.</p><p align=\"justify\"><b>We accept currency exchange for the following currencies:</b><br></p><p align=\"justify\">KENYA SHILLING, US DOLAR, CANADIAN DOLLAR, EURO, INDIAN RUPEE, SOUTH AFRIAN RAND, JAPANESE YEN, POUND STERLING,TANZANIAN SHILLING</p>', '', '', '', '', '', '', '', '', '', '', '', 'Hide', 'home_welcome_video_bg.jpeg', 'WHY CHOOSE US', 'We have some special crieteria that will help you', 'Hide', 'Home & Business Tech Solutions', 'We offer some awesome technology at amazing prices', 'Show', 'OUR SERVICES', 'We are always here to serve you some awesome services', 'Show', 'Projects', '150', 'fa fa-user', 'Reviews', '300', 'fa fa-bar-chart', 'Clients', '250', 'fa fa-users', 'Awards', '120', 'fa fa-trophy', 'counter.jpg', 'Hide', 'WORK PORTFOLIO', 'See what we do for our valuable clients', 'Hide', 'Inquiries Form', 'FREEQUENTLY ASKED QUESTIONS', 'Show', 'home_booking_photo.jpg', 'OUR TEAM', 'All our skilled team members are listed below', 'Hide', 'PACKAGES', 'Our affordable packages are listed below', 'Show', 'OUR CLIENTS', 'See what our valuable clients tell about us', 'home_testimonial_photo.jpg', 'Hide', 'LATEST NEWS', 'All our latest news are listed below', '10', 'Hide', 'Do you want to get our quality service for your business?', 'Contact Us', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_news`
--

CREATE TABLE `tbl_page_news` (
  `id` int(11) NOT NULL,
  `news_heading` varchar(255) NOT NULL,
  `mt_news` varchar(255) NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_news`
--

INSERT INTO `tbl_page_news` (`id`, `news_heading`, `mt_news`, `mk_news`, `md_news`) VALUES
(1, 'NEWS', 'News -Latest in the tech space', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_photo_gallery`
--

CREATE TABLE `tbl_page_photo_gallery` (
  `id` int(11) NOT NULL,
  `photo_gallery_heading` varchar(255) NOT NULL,
  `mt_photo_gallery` varchar(255) NOT NULL,
  `mk_photo_gallery` text NOT NULL,
  `md_photo_gallery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_photo_gallery`
--

INSERT INTO `tbl_page_photo_gallery` (`id`, `photo_gallery_heading`, `mt_photo_gallery`, `mk_photo_gallery`, `md_photo_gallery`) VALUES
(1, 'PHOTO GALLERY', 'Photo Gallery - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_portfolio`
--

CREATE TABLE `tbl_page_portfolio` (
  `id` int(11) NOT NULL,
  `portfolio_heading` varchar(255) NOT NULL,
  `mt_portfolio` varchar(255) NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_portfolio`
--

INSERT INTO `tbl_page_portfolio` (`id`, `portfolio_heading`, `mt_portfolio`, `mk_portfolio`, `md_portfolio`) VALUES
(1, 'PORTFOLIO', 'Portfolio ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_pricing`
--

CREATE TABLE `tbl_page_pricing` (
  `id` int(11) NOT NULL,
  `pricing_heading` varchar(255) NOT NULL,
  `mt_pricing` varchar(255) NOT NULL,
  `mk_pricing` text NOT NULL,
  `md_pricing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_pricing`
--

INSERT INTO `tbl_page_pricing` (`id`, `pricing_heading`, `mt_pricing`, `mk_pricing`, `md_pricing`) VALUES
(1, 'PRICING', 'Pricing - Cheeternet Internet  & More', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_privacy`
--

CREATE TABLE `tbl_page_privacy` (
  `id` int(11) NOT NULL,
  `privacy_heading` varchar(255) NOT NULL,
  `privacy_content` text NOT NULL,
  `mt_privacy` varchar(255) NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_privacy`
--

INSERT INTO `tbl_page_privacy` (`id`, `privacy_heading`, `privacy_content`, `mt_privacy`, `mk_privacy`, `md_privacy`) VALUES
(1, 'PRIVACY POLICY', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Privacy Policy - Your\'re safe with us', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_search`
--

CREATE TABLE `tbl_page_search` (
  `id` int(11) NOT NULL,
  `search_heading` varchar(255) NOT NULL,
  `mt_search` varchar(255) NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_search`
--

INSERT INTO `tbl_page_search` (`id`, `search_heading`, `mt_search`, `mk_search`, `md_search`) VALUES
(1, 'SEARCH BY:', 'Search - What are you looking for?', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_service`
--

CREATE TABLE `tbl_page_service` (
  `id` int(11) NOT NULL,
  `service_heading` varchar(255) NOT NULL,
  `mt_service` varchar(255) NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_service`
--

INSERT INTO `tbl_page_service` (`id`, `service_heading`, `mt_service`, `mk_service`, `md_service`) VALUES
(1, 'Our Services', 'Our Services - Don\'t missout on hot deals', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_team`
--

CREATE TABLE `tbl_page_team` (
  `id` int(11) NOT NULL,
  `team_heading` varchar(255) NOT NULL,
  `mt_team` varchar(255) NOT NULL,
  `mk_team` text NOT NULL,
  `md_team` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_page_team`
--

INSERT INTO `tbl_page_team` (`id`, `team_heading`, `mt_team`, `mk_team`, `md_team`) VALUES
(1, 'Our Team', 'Team - The brilliant team gearing the tech', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_term`
--

CREATE TABLE `tbl_page_term` (
  `id` int(11) NOT NULL,
  `term_heading` varchar(255) NOT NULL,
  `term_content` text NOT NULL,
  `mt_term` varchar(255) NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_testimonial`
--

CREATE TABLE `tbl_page_testimonial` (
  `id` int(11) NOT NULL,
  `testimonial_heading` varchar(255) NOT NULL,
  `mt_testimonial` varchar(255) NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_page_testimonial`
--

INSERT INTO `tbl_page_testimonial` (`id`, `testimonial_heading`, `mt_testimonial`, `mk_testimonial`, `md_testimonial`) VALUES
(1, 'TESTIMONIAL', 'Testimonial - What our clients say', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_name`) VALUES
(2, 'photo-2.jpg'),
(3, 'photo-3.jpg'),
(4, 'photo-4.jpg'),
(5, 'photo-5.jpg'),
(6, 'photo-6.jpg'),
(7, 'photo-7.jpg'),
(8, 'photo-8.jpg'),
(9, 'photo-9.jpg'),
(10, 'photo-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `client_comment` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Corporate Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '01-07-2018', '04-07-2018', 'http://www.abc.com', '$3000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-1.jpg', 'Corporate Work 1', '', ''),
(2, 'Business Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Richard R. Caldwell', 'Grey Fade', '29-08-2018', '07-09-2018', 'http://www.abc.com', '$2000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-2.jpg', 'Business Work 1', '', ''),
(3, 'Engineering Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Nicholas Y. Coleman', 'Baltimore Markets', '08-04-2018', '22-06-2018', 'http://www.abc.com', '$3400', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-3.jpg', 'Engineering Work 1', '', ''),
(4, 'Business Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'John A. Flesher', 'Magna Solution', '10-04-2018', '25-05-2018', 'http://www.abc.com', '$2300', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-4.jpg', 'Business Work 2', '', ''),
(5, 'Corporate Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Brandon J. Erwin', 'Custom Sound', '15-06-2018', '05-07-2018', 'http://www.abc.com', '$5000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-5.jpg', 'Corporate Work 2', '', ''),
(6, 'Engineering Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'George L. Perryman', 'The Own Hardware', '05-02-2018', '20-04-2018', 'http://www.abc.com', '$1900', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-6.jpg', 'Engineering Work 2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_category`
--

CREATE TABLE `tbl_portfolio_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_portfolio_category`
--

INSERT INTO `tbl_portfolio_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Corporate', 'Active'),
(2, 'Business', 'Active'),
(3, 'Engineering', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_photo`
--

CREATE TABLE `tbl_portfolio_photo` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_portfolio_photo`
--

INSERT INTO `tbl_portfolio_photo` (`id`, `portfolio_id`, `photo`) VALUES
(17, 7, '17.jpg'),
(18, 7, '18.jpg'),
(24, 1, '24.jpg'),
(26, 1, '26.jpg'),
(27, 2, '27.jpg'),
(28, 2, '28.jpg'),
(29, 3, '29.jpg'),
(30, 4, '30.jpg'),
(31, 4, '31.jpg'),
(32, 5, '32.jpg'),
(33, 5, '33.jpg'),
(34, 6, '34.jpg'),
(35, 6, '35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_table`
--

CREATE TABLE `tbl_pricing_table` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pricing_table`
--

INSERT INTO `tbl_pricing_table` (`id`, `icon`, `title`, `price`, `subtitle`, `text`, `button_text`, `button_url`) VALUES
(1, 'fa fa-home', 'HOME PACKAGES', 'UGX 120,000', 'Per month', '<ul><li><b>04MBPS UGX 120,000/=</b></li><li><b>06MBPS UGX 180,000/=</b></li><li><b>10MBPS UGX 250,000/=</b></li><li>24/7  friendly support </li><li>Full time availability</li></ul>', 'Order', 'contact'),
(2, 'fa fa-globe', 'BUSINESS PACKAGES', 'UGX 200,000', 'Per month', '<ul><li><span style=\"font-weight: 700;\">02MBPS UGX 200,000/=</span></li><li><span style=\"font-weight: 700;\">05MBPS UGX 350,000/=</span></li><li><span style=\"font-weight: 700;\">10MBPS UGX 550,000/=</span></li><li>24/7  friendly support </li><li>Full time availability</li></ul>', 'Order', 'contact'),
(3, 'fa fa-diamond', 'FIRST TIME INSTALLATION', 'UGX 150,000', '1 month free subscription', '<ul><li><b>HOME   UGX 300,000/=</b></li><li><b>BUSINESS  UGX 300,000/=</b></li><li><b>APARTMENTS   UGX 150,000/=</b></li><li>24/7  friendly support <br></li><li>Terms and Conditions Apply</li></ul>', 'Order', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `service_cat` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `name`, `description`, `short_description`, `photo`, `service_cat`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'International Money Transfers', '<p align=\"justify\"><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'We are committed to helping you move your around the with ease. We  support and  always will support your transactions with utmost attention and care', 'service-1.jpg', 1, 'International Money Transfers', '', ''),
(2, 'Moneygram', '<div align=\"justify\"><h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; text-align: left; color: rgb(0, 0, 0);\">MoneyGram</h2><p style=\"margin-bottom: 15px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>', 'We accept MoneyGram sending and withdrawals/receiving at all our branches. In collaboration with MoneyGram, we offer  reliably quick and fraud free money transfer services.', 'service-2.jpg', 1, 'Remittances', '', ''),
(3, 'Currency Exchange', '<h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Currency Exchange</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.</p>', 'We offer the best currency exchange services in Uganda with uniquely competitive rates. We are devoted to being your life-long forex partner.', 'service-3.jpg', 1, 'Currency Exchange', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `footer_col1_title` varchar(255) NOT NULL,
  `footer_col2_title` varchar(255) NOT NULL,
  `footer_col3_title` varchar(255) NOT NULL,
  `footer_col4_title` varchar(255) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_email` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_recent_news_item` varchar(5) NOT NULL,
  `footer_recent_portfolio_item` varchar(5) NOT NULL,
  `newsletter_text` text NOT NULL,
  `cta_text` text NOT NULL,
  `cta_button_text` varchar(255) NOT NULL,
  `cta_button_url` varchar(255) NOT NULL,
  `cta_background` varchar(255) NOT NULL,
  `top_bar_email` varchar(255) NOT NULL,
  `top_bar_phone` varchar(255) NOT NULL,
  `send_email_from` varchar(255) NOT NULL,
  `receive_email_to` varchar(255) NOT NULL,
  `banner_about` varchar(255) NOT NULL,
  `banner_faq` varchar(255) NOT NULL,
  `banner_service` varchar(255) NOT NULL,
  `banner_testimonial` varchar(255) NOT NULL,
  `banner_news` varchar(255) NOT NULL,
  `banner_event` varchar(255) NOT NULL,
  `banner_contact` varchar(255) NOT NULL,
  `banner_search` varchar(255) NOT NULL,
  `banner_terms` varchar(255) NOT NULL,
  `banner_privacy` varchar(255) NOT NULL,
  `banner_team` varchar(255) NOT NULL,
  `banner_portfolio` varchar(255) NOT NULL,
  `banner_verify_subscriber` varchar(255) NOT NULL,
  `banner_pricing` varchar(255) NOT NULL,
  `banner_photo_gallery` varchar(255) NOT NULL,
  `front_end_color` varchar(20) NOT NULL,
  `sidebar_total_recent_post` varchar(5) NOT NULL,
  `sidebar_total_upcoming_event` varchar(5) NOT NULL,
  `sidebar_total_past_event` varchar(5) NOT NULL,
  `sidebar_news_heading_category` varchar(255) NOT NULL,
  `sidebar_news_heading_recent_post` varchar(255) NOT NULL,
  `sidebar_event_heading_upcoming` varchar(255) NOT NULL,
  `sidebar_event_heading_past` varchar(255) NOT NULL,
  `sidebar_service_heading_service` varchar(255) NOT NULL,
  `sidebar_service_heading_quick_contact` varchar(255) NOT NULL,
  `sidebar_portfolio_heading_project_detail` varchar(255) NOT NULL,
  `sidebar_portfolio_heading_quick_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_col1_title`, `footer_col2_title`, `footer_col3_title`, `footer_col4_title`, `footer_copyright`, `footer_address`, `footer_email`, `footer_phone`, `footer_recent_news_item`, `footer_recent_portfolio_item`, `newsletter_text`, `cta_text`, `cta_button_text`, `cta_button_url`, `cta_background`, `top_bar_email`, `top_bar_phone`, `send_email_from`, `receive_email_to`, `banner_about`, `banner_faq`, `banner_service`, `banner_testimonial`, `banner_news`, `banner_event`, `banner_contact`, `banner_search`, `banner_terms`, `banner_privacy`, `banner_team`, `banner_portfolio`, `banner_verify_subscriber`, `banner_pricing`, `banner_photo_gallery`, `front_end_color`, `sidebar_total_recent_post`, `sidebar_total_upcoming_event`, `sidebar_total_past_event`, `sidebar_news_heading_category`, `sidebar_news_heading_recent_post`, `sidebar_event_heading_upcoming`, `sidebar_event_heading_past`, `sidebar_service_heading_service`, `sidebar_service_heading_quick_contact`, `sidebar_portfolio_heading_project_detail`, `sidebar_portfolio_heading_quick_contact`) VALUES
(1, 'logo.PNG', 'favicon.PNG', 'NEWSLETTER', 'RECENT POST', 'PROJECT', 'ADDRESS', 'Copyright © 2022, Zeal Forex Bureau . All Rights Reserved.', 'Russell Road,\r\nNamada Plaza\r\n', 'info@flyfee.com', '+256-786-00-000 \r\n+256-786-00-000 ', '0', '0', 'Enter your email address below to subscribe to our  Newsletter', 'Want stable & reliable payment channel ?', 'Contact Us', 'contact', 'cta_background.jpg', 'info@zealpesa.ug', '+25678 00000', 'flyfeeservices@gmail.com', 'flyfeeservices@gmail.com', 'banner_about.PNG', 'banner_faq.PNG', 'banner_service.PNG', 'banner_testimonial.jpg', 'banner_news.jpg', 'banner_event.jpg', 'banner_contact.PNG', 'banner_search.jpg', 'banner_terms.jpg', 'banner_privacy.jpg', 'banner_team.jpg', 'banner_portfolio.jpg', 'banner_verify_subscriber.jpg', 'banner_pricing.jpg', 'banner_photo_gallery.jpg', '141057', '3', '5', '5', 'Categories', 'Recent Posts', 'Upcoming Events', 'Past Events', 'OUR SERVICES', 'QUICK CONTACT', 'PROJECT DETAILS', 'QUICK CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `ry` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL,
  `position` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`ry`, `id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `position`) VALUES
(2, 3, 'slider-31668021461.PNG', 'Variety of Currencies', '', '', '', '', '', 'Left'),
(3, 0, 'slider-01668021424.PNG', '', '', '', '', '', '', 'Left');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', 'http://www.facebook.com/', 'fa fa-facebook'),
(2, 'Twitter', 'http://www.twitter.com', 'fa fa-twitter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `flickr` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `photo`, `comment`) VALUES
(2, 'Robert Krol', 'CEO, ABC Company', 'testimonial-2.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(3, 'Sal Harvey', 'Director, DEF Company', 'testimonial-3.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(4, 'Terry Spain', 'Founder, XYZ Company', 'testimonial-4.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(5, 'John Hilton', 'CEO, AAA Company', 'testimonial-5.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(6, 'Arthur Cox', 'Chairman, RR Company', 'testimonial-6.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(7, 'David Moore', 'HR Manager, DSF Company', 'testimonial-7.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `photo`, `token`, `role`, `status`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user-.jpg', '', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_choose`
--

CREATE TABLE `tbl_why_choose` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_why_choose`
--

INSERT INTO `tbl_why_choose` (`id`, `name`, `content`, `icon`, `photo`) VALUES
(1, 'QUICK RESPONSE', 'Iisque persius ne sit, simul zril vix eu. Qui ne iusto epicuri suscipiantur, sit ne probo adhuc. Liber verterem interpretaris nam et, ea pro solum expetendis.', 'fa fa-clock-o', 'why-choose-1.jpg'),
(7, '100% SATISFACTION', 'Duo luptatum delicata evertitur ad. Usu te quaerendum definitiones, ne mundi volutpat duo, in dissentias temporibus pri. Duo ferri dicant definitionem te.', 'fa fa-thumbs-up', 'why-choose-7.jpg'),
(8, 'CREATIVE SERVICE', 'Amet dolor oratio ex has, stet repudiare definiebas vim ne. Id probo facilisis usu, pri aliquam omnesque cu. Vide assentior id qui, quando possim eos.', 'fa fa-globe', 'why-choose-8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `countries_name_iso_iso3_dial_unique` (`country_name`,`country_name_abriviated`,`country_dial_code`);

--
-- Indexes for table `tbl_currencies`
--
ALTER TABLE `tbl_currencies`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_faq_page_content`
--
ALTER TABLE `tbl_faq_page_content`
  ADD PRIMARY KEY (`faq_content_id`);

--
-- Indexes for table `tbl_flags`
--
ALTER TABLE `tbl_flags`
  ADD PRIMARY KEY (`flag_id`);

--
-- Indexes for table `tbl_home_about_section`
--
ALTER TABLE `tbl_home_about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_advert`
--
ALTER TABLE `tbl_home_advert`
  ADD PRIMARY KEY (`advert_id`);

--
-- Indexes for table `tbl_home_currency_section_headers`
--
ALTER TABLE `tbl_home_currency_section_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_more_benefits_content`
--
ALTER TABLE `tbl_home_more_benefits_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_more_benefits_headers`
--
ALTER TABLE `tbl_home_more_benefits_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_our_review_content`
--
ALTER TABLE `tbl_home_our_review_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_our_review_headers`
--
ALTER TABLE `tbl_home_our_review_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_partners`
--
ALTER TABLE `tbl_home_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_we_are_flexible_content`
--
ALTER TABLE `tbl_home_we_are_flexible_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_we_are_flexible_headers`
--
ALTER TABLE `tbl_home_we_are_flexible_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_why_choose_us_images_and_shapes`
--
ALTER TABLE `tbl_home_why_choose_us_images_and_shapes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_why_choose_us_services`
--
ALTER TABLE `tbl_home_why_choose_us_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_why_choose_us_top_content`
--
ALTER TABLE `tbl_home_why_choose_us_top_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_page_about`
--
ALTER TABLE `tbl_page_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_contact`
--
ALTER TABLE `tbl_page_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`ry`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;

--
-- AUTO_INCREMENT for table `tbl_currencies`
--
ALTER TABLE `tbl_currencies`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_faq_page_content`
--
ALTER TABLE `tbl_faq_page_content`
  MODIFY `faq_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_flags`
--
ALTER TABLE `tbl_flags`
  MODIFY `flag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `tbl_home_about_section`
--
ALTER TABLE `tbl_home_about_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_advert`
--
ALTER TABLE `tbl_home_advert`
  MODIFY `advert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_currency_section_headers`
--
ALTER TABLE `tbl_home_currency_section_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_more_benefits_content`
--
ALTER TABLE `tbl_home_more_benefits_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_home_more_benefits_headers`
--
ALTER TABLE `tbl_home_more_benefits_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_our_review_content`
--
ALTER TABLE `tbl_home_our_review_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_home_our_review_headers`
--
ALTER TABLE `tbl_home_our_review_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_partners`
--
ALTER TABLE `tbl_home_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_home_we_are_flexible_content`
--
ALTER TABLE `tbl_home_we_are_flexible_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_home_we_are_flexible_headers`
--
ALTER TABLE `tbl_home_we_are_flexible_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_why_choose_us_images_and_shapes`
--
ALTER TABLE `tbl_home_why_choose_us_images_and_shapes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home_why_choose_us_services`
--
ALTER TABLE `tbl_home_why_choose_us_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_home_why_choose_us_top_content`
--
ALTER TABLE `tbl_home_why_choose_us_top_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_page_about`
--
ALTER TABLE `tbl_page_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `ry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
