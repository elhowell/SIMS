-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2017 at 11:33 PM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_igni512`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(1, 'admin', 'YWRtaW4=', 'logysysweb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ci_session`
--

CREATE TABLE `admin_ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_ci_session`
--

INSERT INTO `admin_ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('d1e1c6a7b715e29619262613d23759fc03bf64a2', '216.145.181.227', 1492640597, 0x746570456e44364b4c72445a556b725f776e74636b584f744933556553695271614973626a646d4d396156346b476e744541526a46662d505632624b6f484f523366446363336e3271336755626a6a7535496e656a512e2e),
('0aa617e93956e1a64e3f167708f35aed6506eab2', '64.233.173.29', 1492852709, 0x7962747764597a7963325f415447525a5f4f3968696d4e4477797733525f5741787578364c497441726c4f37766a61755266716b50497850726f363356373868743556716f3139795057494f49747a533367394e55672e2e),
('77862bba9e571a593bcb4f3845e4af7bd100ef1c', '71.136.175.35', 1493060163, 0x376c5a324465346e596a38735269494a657a4b5f44353971626f484651705742716c4343594649675a524847716d746f4e4e4f62496b5a393144685f4e375a5139494e58636d4933757467784274617a62367275674867434374374f5a324f43326155624d517970626c554c5167512d766c5439644e5a653133586671305a623066666978575456445076675949366b675870653152326c52385a5a353150756552496a41495041717465654a32635671715554426e6d7766474476524d6743),
('018369a46bb9431aa018ec8602eb0aa716013736', '173.252.90.234', 1493059954, 0x426c6237546c59384537676871385532673569434764695f5456346c356b534b4b59616e75775f744e7833394b393663336c4753375264596861444e6b63424c7342344f6639764363525056415a754a486d54484c412e2e),
('322c065702f63ca34b4aac5f8122ecc82c61abc9', '173.252.90.237', 1493059954, 0x617069326872567a2d6354314c764c365565477150584475785a543252624f536a576c5948556b48557a665a54324f566f42564464496b6a55665f39395a64423945777968795074435f6a54557746635738466766672e2e),
('89afc20e2474d7de39352db45a17b8f5f6421e51', '173.252.90.237', 1493059954, 0x617069326872567a2d6354314c764c365565477150584475785a543252624f536a576c5948556b48557a665a54324f566f42564464496b6a55665f39395a64423945777968795074435f6a54557746635738466766672e2e),
('b5b65fdde1eaea7d67a21609036c756d7ef7def4', '71.136.175.35', 1493060648, 0x756334624d54526c4d545a33423351714e436e486a50576478684c6d56397a6d4441662d5457564b77376a41496c414a6d59497575596c34694933504c6e4859513330365958366b2d714a562d6f6a373047724f4f4b427a445a4230796276556478364e74634d47527064344f4355505f576a6368466c685f45716831527573397742516d4f30366e4348744334446d61703468364c6a52555f6e3355497a6337706e446e6943575a5f4e7059387630734b437967413271554730707430654d),
('92261bc93e18251f82fd25c767933209e90bfa6f', '71.136.175.35', 1493061110, 0x5a4e474e3964712d466157764957594c37614f3953374f5f6d705f6c4b74354c654c55344c613178767a785a3973507932554e616d784d4669505255704e6148594a6d46764f435a5472676c3570534b596b533075512e2e),
('f826e5b645c69e74f6c743bba28cb28efdcdce2b', '71.136.175.35', 1493062391, 0x444d524674396b564469325455624468454c6777755a2d746631453135463875454343434f44363033496c32737044574c466d584a474e77616f577231532d37786a694d72396d476f64526668325864446d6c5845363858617276703977482d6872426e5a6d4f63534c656a42384d72534f5f635a77345f616d494c4e5161697645324f716f5870344e634135374268356642384933716a7556315779417a59355662534733724843337a6c37566e475061615278594b37686e65714b387043),
('44924b7f7b93766b73b3e1ceec2dafb292428ba4', '216.145.177.250', 1493064115, 0x4a624d495f414d69374d55576a2d48767575393450766f6c62706c4a4a4277505a5250512d3452733245735f53644d493843592d73366e514678552d674549337468444b557937466c304641786f516553696551303868365050695f502d77436c56726d763638316a31344d6a4c4c3479455f4366325f76687042545a44572d363355756b387859777a386f4d7250536779317646764d3450367a674d6868524b595432334e56532d5a51756655453959555957575145333437575351583177),
('af97d9bcb2b192c6a186f30dd4cb6f879def00b7', '216.145.188.201', 1493064706, 0x2d4b62684d454366726c6942514d536349757a714251582d6c76494d746e3578417744706430444c6442384d737834664b73314f4434614a467964487533435a30644e7848466c667631664e6967505a4f665076564330647071636c5946467a6135744a6d6643353938754c4452496149636a704451504a3550636d674a7733715a654f5f3245736a505f566c68694c706c59654638737936676465582d3554695f6f6451644d793549493956694d5662335a5170436772647949486b4b6d57),
('45a57538327048de5ff291f6d088e8e0e5563fee', '216.145.188.201', 1493064907, 0x54614a3230416e504452766e464b354d6f6a3054354952686c42526956415a6c707256682d48596843442d2d755571377a55722d3042426c53503453716a4642486e306d456738624f2d4d746258575665793932666e61535971736d7556424c6b5a4b4f6f4e5a68446c705446675f6331725f44566473586f324a414d4676745259797063656265487144334c35303378795a54494164704c5f384c69476a597276706d514c39744d4e4d333066684a5266414a6e526f5238707347645f7263),
('ba4c19fc991a1b7a77272bfc68617b16ecbbd1c8', '216.145.177.250', 1493065449, 0x713956316f446a776f53443635646b4443726655347279374a7a574d556a51504c4f787067335f41505f636c41524e664455342d4a704a424341725559384f4f314d4f43502d3454434c6975716e5675506e5a584e4b4f6b5668442d4f5477624a2d683855616e62694b327230327462366450456d757732484e32454435625a555738536c675f6f6f506730797137747a6472586656735041434f4877413932334f71643459516d58676161356e6938515a3233484c74596f70674948725f5a),
('50890b7f40bd73536b01c044ffe8a89427374a36', '216.145.177.250', 1493067330, 0x39365879545f2d6131334356663770373442617474524e636c4e4c4f645833305074725f68324253705f5a5f774870707435766c32374d696f43552d4d48616b636e514a6d4532796671777a4f7736776153683249364f4d316c475a5969344e7366484d4965334e497476586e4b663233522d6d524e306c4b78633230726637554a7a515656647072774e394f56794e6663706d6731574d4f6341337a472d7a376e49594b72485f714e317466762d764f3752706b5f566446466c4650676159),
('ccea075d7a99921767145768330f02f7ef503d5b', '52.8.59.90', 1493105785, 0x41464f6a7335594e7365365f414c55364238486f6767756c53336a526a4473435172574e4a5278767a6a58535046617774525454564c5a50706f6c75662d3477663242514d6a34505f504c534c565069585a334545412e2e),
('099d99e2a929ce78b66f6ff96690a166730d925d', '52.8.59.90', 1493105786, 0x776b4e4b633372636f4379514737647576434239475848685f64456d7173656d4c4d756a33714c7732464f45476d4a54584a4a436d36634c4d466345493138645142677071484850386c62596b344134733949794b512e2e),
('a972082585bdc1cdd4cfaaedfe9f9de4e026623f', '109.182.170.193', 1493105860, 0x41365a4e6d75715a424b625275467853543175584b4e2d6a6336474b664e6b727147535f49326d666f2d7a3565434c704269315544446b343462324948543853354f364439577472302d43725f4859666250643951564f7477506c746b703232695f6c4f345a5550714c534b6c6836385a374f674865662d7073465970486975656a713967526e4e70784b704d464f6f304e6e4c42753479664847526c6d5a694768536b7136694c7430454d493631594a35314e3433524f66345758784a4c43),
('dd2a3739f53d3531674fb95be25bdd666e9c932b', '208.80.194.120', 1493112285, 0x594c30626a54304f555237694769694d3848416c535561705f693649353877354c59634465485852554271794c30385345634150627a454263715358666b57365665326942787875596b70555a4c55394b2d684270672e2e),
('1c18df45564fc090ca99f7550296d0cedae02b4d', '208.80.194.32', 1493112301, 0x685a6e7a4e5f4f773351484174455653494d644e7941516e5a4b61787a704756797261627941517946564d6538632d6f6a357766474c584657336d31675a7633647870506d644b734264796d5250674f74784f3157412e2e),
('f3f09eb0ed93cda4ad457d077ecdaeeba6d816be', '208.80.194.124', 1493112309, 0x754d32696b6f494a4c30376b70674f54426d573359384759513044697633326372516d37506c526b42714d3163304c435f753858334f4d4b33784b39456256767a6945793149716b306e6f7273796938424374365a512e2e),
('f7c00f37879575aa4cae0e542072b4ffa8a0d663', '109.182.170.193', 1493115372, 0x2d624f664f546c307370317a69726276365947567449446a44346a4b58317048555958514f6975516d48536a4e77656573685630774e754c304c6b46434966337a75397645767a474e663746464673696355424b78772e2e);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `exam_score_1` varchar(255) NOT NULL,
  `exam_score_2` varchar(255) NOT NULL,
  `exam_score_3` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','Pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `title`, `username`, `f_name`, `surname`, `city`, `country`, `date_of_birth`, `email`, `student_id`, `courses`, `exam_score_1`, `exam_score_2`, `exam_score_3`, `gpa`, `password`, `status`) VALUES
(4, 'Mr.', '', 'pen', 'guin', 'Igloo', 'Antarctica', '04/30/2017', 'help@northpole.com', 'help@northpole.com', 'C#', '90', '70', '80', '3.6', 'cGVuZ3Vpbg==', 'Active'),
(5, 'Mr.', '', 'Evan', 'Howell', 'Houston', 'United States', '05/02/2017', 'evanhowell@consultant.com', '900323177', 'Software Engineering', '39', '90', '100', '2.0', 'c29tZXRoaW5n', 'Active'),
(6, 'Mr.', '', 'Usha', 'Kawamini', 'Houston', 'United States', '04/01/2017', 'usha@uhd.edu', '900323178', 'Software Engineering', '99', '97', '94', '3.7', 'c29tZXRoaW5n', 'Active'),
(7, 'Mr.', '', 'Dr.', 'Chang', 'Houston', 'Ukraine', '04/01/2017', 'chang@uhd.edu', '900323177', 'Software Engineering', '99', '98', '99', '3.9', 'c29tZXRoaW5n', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_ci_session`
--
ALTER TABLE `admin_ci_session`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
