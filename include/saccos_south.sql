-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2021 at 01:00 PM
-- Server version: 8.0.25-0ubuntu0.20.10.1
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saccos_south`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_setup`
--

CREATE TABLE `aboutus_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `aboutus_setup`
--

INSERT INTO `aboutus_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(1, 'Rural-Urban SACCO LTD is a legally registered Savings and Credit Cooperative Society established in April 2013 under the under the Cooperative Act 2011 of South Sudan to provide financial services to its members in the Republic of South Sudan.  ', 'About Us', 'About Us', 'Rural-Urban SACCO LTD is a legally registered Savings and Credit Cooperative Society established in April 2013 under the under the Cooperative Act 2011 of South Sudan to provide financial services to its members in the Republic of South Sudan.  Rural-Urban SACCO was established to address the problems faced by poor people in rural and urban areas in accessing manageable credit facilities as well as to encourage savings habit among the people in rural and urban areas of South Sudan. It obtained its legal status on 4th/04/2013 when it was issued a certificate of registration bearing registration Number 92/2013. To date Rural-Urban SACCO has three branches located in Kajo-Keji, Juba and Yei respectively with its head office located in Juba in Munuki, Suk Libya near Munuki Police station. Rural-Urban SACCO first branch office was opened in Kajo-Keji County, CES located at Wudu trading Commercial Centre. However, due to the 2016 July crisis, it was shifted to Juba which became its new head office', '#', '5 April, 2013');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int NOT NULL,
  `username` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_access` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `user_id`, `user_pass`, `user_access`) VALUES
(1, 'Monu Boss', 'monu@admin.com', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `approach_setup`
--

CREATE TABLE `approach_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `approach_setup`
--

INSERT INTO `approach_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, 'DAMER demonstrated approach is founded on the relationship between capacity building of our staff, and faithfulness to rigorous quality assurance procedures. ', 'Our Approach', 'Our Approach', 'DAMER demonstrated approach is founded on the relationship between capacity building of our staff, and faithfulness to rigorous quality assurance procedures. On a full-time basis, our staff do not operate on a project basis but rather learn and grow from each experience in the field, as our researchers are trained to implement a variety of on-site, real time quality checks and employ second near real time checks utilizing our remote data analysis capabilities.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_created_time` datetime NOT NULL,
  `id_categorie` int NOT NULL,
  `id_author` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int NOT NULL,
  `author_fullname` varchar(100) NOT NULL,
  `author_desc` varchar(255) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.',
  `author_email` varchar(100) NOT NULL,
  `author_twitter` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_github` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_link` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `banking`
--

CREATE TABLE `banking` (
  `id` int NOT NULL,
  `requiredescription` longtext,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  `shortheading` varchar(800) DEFAULT NULL,
  `subdescribe` text,
  `heading` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `banking`
--

INSERT INTO `banking` (`id`, `requiredescription`, `projectpic`, `projectlink`, `shortheading`, `subdescribe`, `heading`) VALUES
(47, 'It runs for a minimum period of six (6) months and maximum period of twelve (12) months. The account remains un accessed (no deposit and with drawls until maturity period, minimum deposit is SSP100,000. Interest on fixed deposit account for six (6) months period is 5.5% per Annum and for twelve (12) months’ period is 8% per annu', '', '', 'Fixed deposit account.', '<p>It runs for a minimum period of six (6) months and maximum period of twelve (12) months. The account remains un accessed (no deposit and with drawls until maturity period, minimum deposit is SSP100,000. Interest on fixed deposit account for six (6) months period is 5.5% per Annum and for twelve (12) months’ period is 8% per annum</p>\r\n\r\n<p><br />\r\n </p>\r\n', 'Fixed deposit account.'),
(48, '', '', '', 'Money transfer', '<p>Rural-Urban SACCO is an official bank agent for Cooperative Bank of South Sudan and Equity Bank</p>\r\n', 'Agency banking.');

-- --------------------------------------------------------

--
-- Table structure for table `basic_setup`
--

CREATE TABLE `basic_setup` (
  `id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `keyword` text NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `basic_setup`
--

INSERT INTO `basic_setup` (`id`, `title`, `description`, `keyword`, `icon`) VALUES
(1, 'Sacco', 'Loans/credit facilities ,Money transfer services to all our branches ,Agency banking ,Agricultural loan,Development loan,College loan, ', 'Saccot,Cooperative savings', 'IMG-20210428-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boardmemb`
--

CREATE TABLE `boardmemb` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `boardmemb`
--

INSERT INTO `boardmemb` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(13, 'Name: Mansuk Moses Timon Title: Chairman  Mansuk Moses Timon holds a Bachelor of Commerce (Finance) from Kampala International University (Uganda) and a Diploma in Education Secondary (majoring in Business Studies) from Kyambogo University (Uganda). ', '', ''),
(14, 'Ondoga Geofrey Powu Title: Vice chairman and Chairman Education Committee   Ondoga Geofrey Powu holds a Bachelor of Arts in Education from Uganda Martyrs University (Uganda) and a Diploma in Education Secondary from Kyambogo University (Uganda). ', '', ''),
(15, 'Title: Chairman Credit Committee - Yei Sambala Moses   Sambala holds a Diploma in Education Secondary from Kyambogo University (Uganda). Sambala works with Strommme Foundatin as Education Officer in Yei.', '', ''),
(17, 'Jame Alex Lobayiti Secretary Credit Committee  Jame Alex Lobayiti holds a Bachelor of Arts in Education from Ndejje University (Uganda) and a Diploma in Education Secondary from Kyambogo University (Uganda).', '', ''),
(18, 'Anthony Lokonga Nyoma Title: Member Credit Committee – Juba', '', ''),
(19, 'Photo  Maratha Siama Edward  Title: Member Credit Committee ', '', ''),
(20, 'Tongu Amos Jackson  Title: Member Education Committee ', '', ''),
(21, 'Anyik Chaplain Mogga  Title: Chairman Investment Committee ', '', ''),
(22, 'Tombek Chaplain  Title: Member Investment Committee  Tombek was elected as a member of Investment Committee of Rural-Urban SACCO in 2013 and in 2018 ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(13, 'Juba branch  Located in Munuki Suk Libya on the way to Munuki police station Tel:0922468629/0925789680/0921300516/Email.mansuktimon@gmail.com ,            joyinnocent40@gmail.com ondogageofrey@gmail.com', '', ''),
(14, 'Yei branch  Located along Maridi road, next to Nyardene swamp before Yei day secondary school road.                Tel 0921700760/0924837560               Email.mansuktimon@gmail.com , joyinnocent40@gmail.com               ondogageofrey@gmail.com', '', ''),
(15, 'Kajo-keji current branch location  Located in Mere town on Juba high way Tel 0929354521 Email contact: Email.mansuktimon@gmail.com , joyinnocent40@gmail.com ondogageofrey@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_color` varchar(10) NOT NULL DEFAULT '333333'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int NOT NULL,
  `comment_username` varchar(100) NOT NULL,
  `comment_avatar` varchar(255) NOT NULL DEFAULT 'def_face.jpg',
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '2020-02-14 10:28:00',
  `comment_likes` int NOT NULL DEFAULT '0',
  `id_article` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(16, 'Shubham Seth', 'ristar@gmail.com', 'Partnership', 'i want to work with you , please contact me on my personal mobile no\r\nat <strong>7838403916</strong>'),
(17, 'Sukriti Seth', 'sukriti46737@gmail.com', 'Complaint', 'i used your service but i dont like it you are worst servoces provider ever i am gonna sue you on fedral court and you have to pay a very big ammount to me becayuse of you i loss 20000 million dollars and you provide the worst service u have ever.'),
(18, 'Mandela', 'mandelashaban593@gmail.com', 'POOL', 'POOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOLPOOL'),
(19, 'Kalid', 'kalidshaban@gmail.com', 'LOan', 'I need loan'),
(20, 'Kalid', 'kalidshaban@gmail.com', 'LOan', 'I need loan');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_setup`
--

CREATE TABLE `contacts_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `contacts_setup`
--

INSERT INTO `contacts_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, 'Juba \r\nLocated in Munuki Suk Libya on the way to Munuki police station\r\nTel 0922468629/0925789680/0921300516/\r\n\r\n   ', 'Main office location', 'Main office location', 'Juba \r\nLocated in Munuki Suk Libya on the way to Munuki police station\r\nTel 0922468629/0925789680/0921300516/\r\n\r\n   ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `corevalues_setup`
--

CREATE TABLE `corevalues_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `corevalues_setup`
--

INSERT INTO `corevalues_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, '    • Honesty \r\n    • Integrity \r\n    • Transparency \r\n    • Cooperation\r\n    • Equality and equity \r\n    • Concern for the community in General\r\n', 'Core values ', 'Core values ', '    • Honesty \r\n    • Integrity \r\n    • Transparency \r\n    • Cooperation\r\n    • Equality and equity \r\n    • Concern for the community in General\r\n', 'https://www.Sacco.com', '14 July, 2013');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int NOT NULL,
  `requiredescription` longtext,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  `shortheading` varchar(800) DEFAULT NULL,
  `subdescribe` text,
  `heading` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `requiredescription`, `projectpic`, `projectlink`, `shortheading`, `subdescribe`, `heading`) VALUES
(47, 'It runs for a minimum period of six (6) months and maximum period of twelve (12) months. The account remains un accessed (no deposit and with drawls until maturity period, minimum deposit is SSP100,000. Interest on fixed deposit account for six (6) months period is 5.5% per Annum and for twelve (12) months’ period is 8% per annu', '', '', 'Fixed deposit account.', '<p>It runs for a minimum period of six (6) months and maximum period of twelve (12) months. The account remains un accessed (no deposit and with drawls until maturity period, minimum deposit is SSP100,000. Interest on fixed deposit account for six (6) months period is 5.5% per Annum and for twelve (12) months’ period is 8% per annum</p>\r\n\r\n<p><br />\r\n </p>\r\n', 'Fixed deposit account.'),
(48, '', '', '', 'Commercial loan', '<p>This loan is offered to individuals or small medium Enterprises(SMEs) to expand their existing business. Maximum repayment period is six (6) months. Interest rate is 3.5% per month</p>\r\n', 'Commercial loan'),
(49, '', '', '', 'Development loan', '<p>This loan is given for construction of buildings. Maximum repayment period is one year (12 months). Interest rate is at 20% per annum. It is calculated on a straight line basis</p>\r\n', 'Development loan'),
(50, '', '', '', 'Asset loan', '<p>This loan is for acquiring assets like land, motor vehicle or motorcycle which are intended for personal use. Maximum repayment period is one year (12 months). Interest rate is charged at 20% per annum on straight line basis</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 'Asset loan'),
(51, '', '', '', 'Agriculture loan', '<p>This loan is given to an individual or group of farmers who have already an existing farming activities. Maximum repayment period is nine (9) months for cereals while for vegetables it is six (6) months. Interest rate is charged at 3.5% on straight line method. Agriculture loan receive a grace period of six months for cereals and for vegetables the grace period is three months. During the grace period only the borrower will pay the interest rate while the principle will be paid upon expiry of the grace period in three months&rsquo; installment</p>\r\n', 'Agriculture loan'),
(52, '', '', '', 'Salon loan', '<p>This loan is given to individuals or groups who are engaged in salon business. Maximum repayment period is six months. Interest rate is 3.5% per month</p>\r\n', 'Salon loan'),
(53, '', '', '', 'Special loan.', '<p>This is given to companies that have won contract but have no ability to finance them. Maximum repayment period is three months. For loans to be repaid within a period of one month is charged 10% and for loans exceeding one month is charged 15%. Any default on this attract a 5% per month</p>\r\n', 'Special loan.'),
(54, '', '', '', 'School fees loan', '<p>This loan is given to individuals who have children learning in primary or secondary schools. Maximum repayment period is nine (9) months. Interest rate is charged at 2% per month</p>\r\n', 'School fees loan'),
(55, '', '', '', 'College or university loan.', '<p>This loan is offered to individuals who are pursuing a collage of university course. Maximum repayment period is one year (12) months. Interest rate is 20% per annum.</p>\r\n', 'College or university loan.'),
(56, '', '', '', 'Bodaboda loan.', '<p>This loan is given to youth who are engaged in bodaboda riding business. The maximum repayment period is one year (12) months. Interest rate is charged at 20% per annum.</p>\r\n', 'Bodaboda loan.'),
(57, '', '', '', 'Salary loan.', '<p>This is charged 3.5% per month on straight line</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 'Salary loan.');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int NOT NULL,
  `requiredescription` longtext,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  `shortheading` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `requiredescription`, `projectpic`, `projectlink`, `shortheading`) VALUES
(47, '<ol>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/NEW MEMBERSHIP APPLICATION FORM.pdf\">ddssMembership Application Form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/CORP2.pdf\" target=\"_blank\">Groups & Corporate Application Forms</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/DCA.pdf\" target=\"_blank\">Deduction Change Advice form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/rtgs.pdf\" target=\"_blank\">EFT/RTGS Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/PaypointForm.pdf\" target=\"_blank\">Pension Paypoint Card</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/USSDUpdate.pdf\" target=\"_blank\">M-Pawa USSD Security Update Guide</a></li>\r\n</ol>\r\n', '', '', 'Most Used Forms'),
(48, '<ol>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/BYLAWS.pdf\" target=\"_blank\">Stima Sacco By-Laws</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Disclaimer.pdf\" target=\"_blank\">Email Disclaimer Policy</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/MU.pdf\" target=\"_blank\">Sacco Sectorial Lending Framework\\</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Data Privacy Policy.pdf\" target=\"_blank\">Data Privacy Policy</a></li>\r\n</ol>\r\n', '', '', 'Sacco Policy Documents'),
(49, '<ol>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/NOKNC.pdf\" target=\"_blank\">Next Of Kin Nomination Card</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/GSF.pdf\" target=\"_blank\">Guarantor Substitution form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/mpawaAF.pdf\" target=\"_blank\">M-Pawa Mobile Banking Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/wp-content/uploads/2021/07/Stima-Sacco-STANDING-ORDER-STO-FORM.pdf\" target=\"_blank\">Standing Order Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/CMD.pdf\" target=\"_blank\">Change of Member Details form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/ACCOUNT REACTIVATION FORM (3).docx\" target=\"_blank\">Account Status Activation form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/SALARY.pdf\">Salary Pay point Change form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/NEWSACCOLINK.pdf\">Saccolink ATM Application nForm</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/signcard.pdf\" target=\"_blank\">Specimen Signature Card</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/divcap.pdf\" target=\"_blank\">Dividends Capitalization Card</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/sppfd.pdf\" target=\"_blank\">Pension Pay point Card</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Travel Notice &amp; Internet Banking.pdf\" target=\"_blank\">Travel Notice/Internet Banking Activation Form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Abridged Financials.pdf\" target=\"_blank\">Financial Report 2020</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/USSDUpdate.pdf\" target=\"_blank\">USSD Password Update</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/STIMA SACCO TRANSFER OF SHARES FORM v1.pdf\" target=\"_blank\">Transfer of Shares Form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Weke Tuweke Cash back Campaign FAQs.pdf\" target=\"_blank\">Weke Tuweke Cash back Campaign FAQs</a></li>\r\n	<li>\r\n	<p><a href=\"https://www.stima-sacco.com/downloads/MCIIform.pdf\" target=\"_blank\">Member Contact Indemnity and Information Form</a></p>\r\n	</li>\r\n</ol>\r\n', '', '', 'Other Documents'),
(50, '<ol>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/MSINGI BORA FORM.pdf\">Msingi Bora Application Form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/junior.pdf\" target=\"_blank\">Junior Account Application Form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/FDAPF.pdf\" target=\"_blank\">Fixed Deposit Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/MUSTARD.pdf\">Mustard Account Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/TWIGA.pdf\" target=\"_blank\">Twiga Account Application form</a></li>\r\n</ol>\r\n', '', '', 'Savings Accounts Forms'),
(51, '<ol>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/LOAN APPLICATION FORM.pdf\" target=\"_blank\">Normal Loan Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/saladvapp.pdf\" target=\"_blank\">Salary Advance Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/MakeoverLoan.pdf\" target=\"_blank\">Make over Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/divdisc.pdf\" target=\"_blank\">Dividends Discounting Application form</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/additional guarantor form.docx\" target=\"_blank\">Additional Guarantor form.</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/mortgage.pdf\" target=\"_blank\">Mortgage Loan Form</a></li>\r\n</ol>\r\n', '', '', 'Loan Application Forms');

-- --------------------------------------------------------

--
-- Table structure for table `governance_setup`
--

CREATE TABLE `governance_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `governance_setup`
--

INSERT INTO `governance_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, 'Rural Urban SACCO is a Legal Entity Owned by Members who are Shareholders and Clients at the same time. The members Constitute the supreme Governing body exercising their powers through the Annual General Meeting (AGM)', 'Governance', 'Governance', '    Rural Urban SACCO is a Legal Entity Owned by Members who are Shareholders and Clients at the same time. The members Constitute the supreme Governing body exercising their powers through the Annual General Meeting (AGM) \r\nRural Urban SACCO is Managed by a Management committee consisting of Nine Members (Chairman, Vice Chairman, Secretary, Treasurer and other five Members) Elected by the members during the Annual General Meeting. It also has Supervisory committee who are elected by the members and are responsible for internal control of the SACCO operations.\r\nRural- Urban SACCO has also a team of management staff recruited by the SCCO board to manage the day to day operations of the SACCO. Rural-Urban SACCO staff management team is headed by a General Manager who oversees the operations of all Rural-Urban SACCO branches. Each branch is headed by a Branch Manager ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `indrecogn_setup`
--

CREATE TABLE `indrecogn_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `indrecogn_setup`
--

INSERT INTO `indrecogn_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, 'Certification\r\nRural-Urban savings and credit cooperative society ltd is a legal entity, registered and certified by the cooperative act 2011. Under registration number 92/2013. It has all legal documents such as operation license, clearance from CID, tin number.\r\nAwards \r\nIn the year 2015, due to the performance of the Rural-Urban Sacco, the cooperative of south awarded Rural-Urban Sacco with contract to pay girls in Central Equatoria in the counties of Kajo-keji, Morobo, Yei, and Lainya. In the following year, 2016, Rural-Urban Sacco ltd was given the whole of greater Equatoria to the girls attending school.\r\nMedia new recognition\r\nAs a result of our outstanding performance and progress, good management as recognized by South Sudan microfinance initiative, Rural-Urban Sacco ltd was selected to represent South Sudan in the African union of SACCOS in Nairobi Kenya in the year 2015, 2016 and 2017 respectively.\r\n\r\nTestimonies \r\nSince its inception in 2013, several members, companies who took loans from Rural-urban SACCO ltd were able to testify to having change positively or grow as results of our service. \r\nPartnership \r\nRural-Urban savings and credit cooperative society ltd has been in partnership with the cooperative bank of South Sudan. Rural-Urban Sacco ltd implemented cash in transit services on behalf of the cooperative of South Sudan since 2015. We are also an official agent bank of cooperative bank, serving their customers. Rural-urban Sacco ltd was also a member of Kajo-keji cooperative union. We were also in partnership with South Sudan microfinance initiative and had been submitting monthly reports to the then microfinance.\r\n', 'INDUSTRY RECOGNITION', 'INDUSTRY RECOGNITION	', 'Certification\r\nRural-Urban savings and credit cooperative society ltd is a legal entity, registered and certified by the cooperative act 2011. Under registration number 92/2013. It has all legal documents such as operation license, clearance from CID, tin number.\r\nAwards \r\nIn the year 2015, due to the performance of the Rural-Urban Sacco, the cooperative of south awarded Rural-Urban Sacco with contract to pay girls in Central Equatoria in the counties of Kajo-keji, Morobo, Yei, and Lainya. In the following year, 2016, Rural-Urban Sacco ltd was given the whole of greater Equatoria to the girls attending school.\r\nMedia new recognition\r\nAs a result of our outstanding performance and progress, good management as recognized by South Sudan microfinance initiative, Rural-Urban Sacco ltd was selected to represent South Sudan in the African union of SACCOS in Nairobi Kenya in the year 2015, 2016 and 2017 respectively.\r\n\r\nTestimonies \r\nSince its inception in 2013, several members, companies who took loans from Rural-urban SACCO ltd were able to testify to having change positively or grow as results of our service. \r\nPartnership \r\nRural-Urban savings and credit cooperative society ltd has been in partnership with the cooperative bank of South Sudan. Rural-Urban Sacco ltd implemented cash in transit services on behalf of the cooperative of South Sudan since 2015. We are also an official agent bank of cooperative bank, serving their customers. Rural-urban Sacco ltd was also a member of Kajo-keji cooperative union. We were also in partnership with South Sudan microfinance initiative and had been submitting monthly reports to the then microfinance.\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(13, 'Binya Geofrey Wani Title: General Manager ', '', ''),
(14, 'Cilimo Celina Title: Accountant – Juba branch ', '', ''),
(15, 'Kasara Lilian  Cashier  Juba', '', ''),
(17, 'Mawa Emmanuel Cashier  Juba ', '', ''),
(18, 'Gonda Emmanuel  Loan Officer ', '', ''),
(19, 'Rabi Santo Loan officer ', '', ''),
(20, 'Joy Innocent  Title: Branch Manager – Yei ', '', ''),
(21, 'Sida Jane  Title: Accountant – Yei branch  Sida holds a diploma in', '', ''),
(22, 'Ropani Gladys Title: Senior Cashier ', '', ''),
(23, 'Asu Emmanuel  Loan Officer ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int NOT NULL,
  `requiredescription` longtext,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  `shortheading` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `mission_setup`
--

CREATE TABLE `mission_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `mission_setup`
--

INSERT INTO `mission_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, '‘‘To promote savings and extend affordable credit to its members and to create a self-reliant, economically empowered and poverty free society.’’', ' Our Mission ', 'Our  Mission ', '‘‘To promote savings and extend affordable credit to its members and to create a self-reliant, economically empowered and poverty free society.’’', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `objectives_setup`
--

CREATE TABLE `objectives_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `objectives_setup`
--

INSERT INTO `objectives_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, '    • Offer savings and credit facilities to its members as well as other financial products as may be required by the members from time to time.\r\n    • Encourage and develop saving habit among its members to develop wide capital base for accessing external sources of funds at fair and reasonable interest rates as a result of enhanced bargaining power.\r\n    • Provide members with affordable credit facilities for the purpose of acquiring assets, paying school fees, funds for agriculture and business investment to enhanced development.\r\n    • To facilitate members to set up development or investment projects through continuous education and training program on the proper use of credit.\r\n    • Provide a fair return to members’ deposit.\r\n    • Maintain an efficient and transparent financial management system which is backed up by fully integrated information and communication.', 'Objectives/Goals ', 'Objectives/Goals ', '    • Offer savings and credit facilities to its members as well as other financial products as may be required by the members from time to time.\r\n    • Encourage and develop saving habit among its members to develop wide capital base for accessing external sources of funds at fair and reasonable interest rates as a result of enhanced bargaining power.\r\n    • Provide members with affordable credit facilities for the purpose of acquiring assets, paying school fees, funds for agriculture and business investment to enhanced development.\r\n    • To facilitate members to set up development or investment projects through continuous education and training program on the proper use of credit.\r\n    • Provide a fair return to members’ deposit.\r\n    • Maintain an efficient and transparent financial management system which is backed up by fully integrated information and communication.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(13, 'Located in Munuki Suk Libya on the way to Munuki police station Tel:0922468629/0925789680/0921300516/Email.mansuktimon@gmail.com ,            joyinnocent40@gmail.com ondogageofrey@gmail.com', '', ''),
(22, ' Mrs. Joy innocent Justo  Branch manager Yei. Tel 0921700760/0924837560 Email. joyinnocent40@gmail.com', '', ''),
(23, ' Mr. Kapere Charles Konyo  Branch manager Kajo-keji county Tel 0923660621', '', ''),
(24, 'Lubang Simaya Daga Title: Secretary Audit and Supervisory Committee and Acting Hon. Secretary of the society   Lubang Simaya Daga holds a Uganda Diploma in Business Studies from Makerere Business School(Uganda). He is currently serving as an accounta', '', ''),
(25, 'Modi Emmanuel Abusai Title: Chairman Audit and Supervisory Committee   Modi Emmanuel Abusai holds a Bachelor of Business Administration (BBA) from NKumba University (Uganda) and a Uganda Diploma in Business Studies from Makerere Business School(Ugand', '', ''),
(26, 'Edina Tumalu Title: Member Audit and Supervisory Committee Edina Tumalu was elected into the audit and supervisory committee in 2018. She represents Rural-urban SACCO branch ', '', ''),
(27, 'Anyik Chaplain Mogga  Title: Chairman Investment Committee   Anyik is one of the steering committee members in the establishment of Rural- Urban SACCO and was elected as the founding Chairman of Investment Committee of Rural-Urban SACCO in 2013 and i', '', ''),
(28, 'Tombek Chaplain  Title: Member Investment Committee   Tombek was elected as a member of Investment Committee of Rural-Urban SACCO in 2013 and in 2018 he was given another mandate to continue in his position as Secretary of the Audit and supervisory C', '', ''),
(29, 'Binya Geofrey Wani Title: General Manager   Binya holds a Uganda Diploma in Business Studies from Makerere Business School(Uganda). He was recruited as an Accountant for rural-urban SACCO in 2013 and in the same year he was promoted to the position o', '', ''),
(30, 'Binya Geofrey Wani Title: General Manager   Binya holds a Uganda Diploma in Business Studies from Makerere Business School(Uganda). He was recruited as an Accountant for rural-urban SACCO in 2013 and in the same year he was promoted to the position o', '', ''),
(31, ' Cilimo Celina Title: Accountant – Juba branch   Cilimo holds a Diploma in Business Studies in Accounting from Uganda collage of Commerce in Pakwach (Uganda) and a Bachelor of Business Administration majoring in Finance and Accounting from Kampala Un', '', ''),
(32, 'Kasara Lilian  Cashier  Juba Kasara holds a diploma in Banking and Finance from Institute of Accountants and Commerce(IAC) (Uganda). She was recruited as a cashier for Juba branch in 2021 ', '', ''),
(33, 'Mawa Emmanuel Cashier  Juba  Mawa holds South Sudan Certificate of Education. He was recruited as a cashier for Juba branch in 2019. Mawa is currently pursuing a diploma in finance and accounting at African Management and Development Institute in Jub', '', ''),
(34, 'Gonda Emmanuel  Loan Officer  Gonda holds a Post Graduate Diploma in Accounting and Finance from University of Juba and a bachelor in Social Economic from Omdurman Ahilia University (Khartoum- Sudan) he was recruited as a Loan officer   for Juba bran', '', ''),
(35, 'Rabi Santo Loan officer  Rabi holds South Sudan Certificate of Education. He was recruited as a cashier for Juba branch in 2019.', '', ''),
(36, 'Joy Innocent  Title: Branch Manager – Yei   Joy holds a diploma in Accounting and Finance from African Population Institute (Kampala). She was recruited as a Loan officer in 2018 and in 2019 due to outstanding performance, she was promoted to the pos', '', ''),
(37, 'Sida Jane  Title: Accountant – Yei branch  Sida holds a diploma in accounting and finance from Makerere Institute of Social Development (Uganda). She was recuirted as a cashier for Yei branch in 2019 and in 2021 she was promoted to the position of an', '', ''),
(38, 'Ropani Gladys Title: Senior Cashier   Ropani holds a diploma in accounting and finance from Makerere Institute of Social Development (Uganda). She was recruited as a cashier for Yei branch in 2019 and in 2021 she was promoted to the position of a Sen', '', ''),
(39, 'Moses Likambo Moses holds South Sudan Certificate of Education. He was recruited as a cashier for Yei branch in 2019.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_setup`
--

CREATE TABLE `personal_setup` (
  `id` int NOT NULL,
  `profilepic` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `skype` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `homewallpaper` varchar(200) NOT NULL,
  `professions` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `personal_setup`
--

INSERT INTO `personal_setup` (`id`, `profilepic`, `name`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`, `github`, `homewallpaper`, `professions`, `location`, `mobile`, `emailid`) VALUES
(1, 'consultAbout.jpg', 'Alex Smith', '', 'https://www.facebook.com/oyeitsmg', 'https://www.instagram.com/oyeitsmg', '@oyeitsmg', 'https://in.linkedin.com/in/whomonugiri', 'https://github.com/whomonugiri/', 'consultAbout.jpg', 'Loans/credit facilities ,Money transfer services to all our branches ,Agency banking ,Agricultural loan,Development loan,College loan, ', 'C-537 Mahavir Enclave Part 3, Street No 45 New Delhi 110059', '+917548935467', 'alex@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(8, 'maks', 'consultAbout.jpg', '#'),
(9, 'Eduction Loan', 'educationLoan.jpg', '#'),
(10, 'Development Loan', 'DevelopmentLoan.jpg', '#'),
(11, 'Building', 'consultAbout.jpg', ''),
(12, 'Staff', 'IMG-20210428-WA0004.jpg', ''),
(13, 'Core values', 'corevalues.png', ''),
(14, '2 - Savings like personal and group, fixed deposits', 'SavingsAccount.jpg', ''),
(15, 'mande', 'educationLoan.jpg', 'https://www.edoc.com/');

-- --------------------------------------------------------

--
-- Table structure for table `product_services`
--

CREATE TABLE `product_services` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `product_services`
--

INSERT INTO `product_services` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(13, '1 - Loans facilities. We offer commercial loan, school fees and college loan, agriculture loan, development loan, Bodaboda loan and asset acquisition loan', 'loans.jpeg', ''),
(14, '2 - Savings. On savings we offer personal saving account, group saving accounts and fixed deposits accounts ', 'SavingsAccount.jpg', ''),
(15, '3 - Money transfer services to all our branches ', 'moneytransfer.jpg', ''),
(16, '4 -Agency banking with cooperative bank of South Sudan and Equity bank', 'AgentBanking.jpg', ''),
(17, '5 - Agricultural loan', 'agricLoan.jpg', ''),
(18, '  6 - Development loan for house constractionor for acquiring assets', 'DevelopmentLoan.jpg', ''),
(19, '7 - College loan', 'educationLoan.jpg', ''),
(21, 'Legal services', 'legalStatus.jpeg', ''),
(22, 'Youth Loan', 'SavingsAccount.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int NOT NULL,
  `category` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `ogname` varchar(250) NOT NULL,
  `workdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `category`, `title`, `year`, `ogname`, `workdesc`) VALUES
(7, 'e', 'Class 12th', '2016 - 2018', 'Navjeewan Academy Senior Secondary School, CBSE', 'it was fun'),
(8, 'e', 'Pursuing Bachelor of Computer Application', '2018-2021', 'Indira Gandhi National Open University, New Delhi', ''),
(9, 'pe', 'Data Operator', '2020 - Present', 'Akhand Jyoti Services Pvt. Ltd.', '');

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `id` int NOT NULL,
  `requiredescription` longtext,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  `shortheading` varchar(800) DEFAULT NULL,
  `subdescribe` text,
  `heading` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`id`, `requiredescription`, `projectpic`, `projectlink`, `shortheading`, `subdescribe`, `heading`) VALUES
(47, 'It runs for a minimum period of six (6) months and maximum period of twelve (12) months. The account remains un accessed (no deposit and with drawls until maturity period, minimum deposit is SSP100,000. Interest on fixed deposit account for six (6) months period is 5.5% per Annum and for twelve (12) months’ period is 8% per annu', '', '', 'Fixed deposit account.', '<p>It runs for a minimum period of six (6) months and maximum period of twelve (12) months. The account remains un accessed (no deposit and with drawls until maturity period, minimum deposit is SSP100,000. Interest on fixed deposit account for six (6) months period is 5.5% per Annum and for twelve (12) months’ period is 8% per annum</p>\r\n\r\n<p><br />\r\n </p>\r\n', 'Fixed deposit account.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `skill` varchar(250) NOT NULL,
  `score` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `score`) VALUES
(12, 'Minimum shares(04) worth $25', '100'),
(13, 'Minimum monthly savings $8', '90'),
(14, 'Membership fee $3', '75');

-- --------------------------------------------------------

--
-- Table structure for table `supercomm`
--

CREATE TABLE `supercomm` (
  `id` int NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `supercomm`
--

INSERT INTO `supercomm` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(13, 'Modi Emmanuel Abusai Title: Chairman Audit and Supervisory Committee ', '', ''),
(14, 'Lubang Simaya Daga Title: Secretary Audit and Supervisory Committee and Acting Hon. Secretary of the society ', '', ''),
(15, 'Edina Tumalu Title: Member Audit and Supervisory Committee', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tech_setup`
--

CREATE TABLE `tech_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tech_setup`
--

INSERT INTO `tech_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, 'Our Technology\r\nDAMER is able to achieve this real-time flow of information and communication through our innovative digital data collection technologies, our experiences in using smartphones and tablets allow us to ensure data quality in some of the most difficult areas for research in the country.', 'Our Technology', 'Our Technology', 'DAMER is able to achieve this real-time flow of information and communication through our innovative digital data collection technologies, our experiences in using smartphones and tablets allow us to ensure data quality in some of the most difficult areas for research in the country.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int NOT NULL,
  `requiredescription` longtext,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  `shortheading` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `requiredescription`, `projectpic`, `projectlink`, `shortheading`) VALUES
(47, '<ol>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/QMS.pdf\" target=\"_blank\">Tender document for supply installation testing and commissioning of Queue Management System (QMS)</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/02 TENDER DOCUMENT FOR SUPPLY DELIVERY AND INSTALLATION OF NETAPP EQUIPMENT.pdf\">Tender document for supply delivery and installation of NETAPP equipment</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/03 TENDER DOCUMENT FOR SUPPLY IMPLEMENTATION INTEGRATION AND POST IMPLEMENTATION SUPPORT FOR ENDPOINT DETECTION AND RESPONSE SOLUTION.pdf\">Tender document for supply implementation integration and post implementation support for endpoint detection and response solution.pdf</a></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Addendum 1-TENDER FOR SUPPLY, IMPLEMENTATION, INTEGRATION AND POST IMPLEMENTATION SUPPORT OF ENDPOINT DETECTION RESPONSE.pdf\" target=\"_blank\">Addendum 1 &ndash; Tender for Supply, Implementation, Integration and Post Implementation Support of Endpoint Detection Response.</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/Addendum 2 - Supply delivery installation configuration commissioning and support of API Manager.pdf\" target=\"_blank\">Addendum 2 &ndash; Supply delivery installation configuration commissioning and support of API Manager</a></li>\r\n</ul>\r\n\r\n<p>4. <a href=\"https://www.stima-sacco.com/downloads/06 TENDER DOCUMENT FOR PROVISION OF BANKERS BLANKET, ELECTRONIC OR COMPUTER AND PEOFESSIONAL INDEMNITY POLICY.pdf\" target=\"_blank\">Tender document for provision of bankers blanket, electronic or computer and peofessional indemnity policy</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/ADDENDUM 1-TENDER FOR PROVISION OF BANKERS BLANKET ELECTRONIC COMPUTER CRIME &amp; PROFESSIONAL INDEMNITY POLICY.pdf\" target=\"_blank\">Addendum 1-Tender for Provision of Bankers Blanket Electronic Computer Crime &amp; Professional Indemnity Policy</a></li>\r\n</ul>\r\n\r\n<p>5. <a href=\"https://www.stima-sacco.com/downloads/05 TENDER DOCUMENT FOR PROVISION OF GROUP CREDIT ASSURANCE SERVICES.pdf\" target=\"_blank\">Tender document for provision of group credit assurance&nbsp; services</a></p>\r\n\r\n<p>6. <a href=\"https://www.stima-sacco.com/wp-content/uploads/2021/06/TENDER-DOCUMENT-FOR-REQUEST-FOR-PROPOSAL-RFP-FOR-WEBSITE-REDESIGN-AND-MAINTENANCE-SERVICES-1.pdf\">Tender document for website design and maintenance services</a></p>\r\n\r\n<p><a href=\"https://www.stima-sacco.com/downloads/TENDER DOCUMENFOR SUPPLY DELIVERY INSTALLATION CONFIGURATION COMMISSIONING AND SUPPORT OF API MANAGER.pdf\" target=\"_blank\">7. Tender document for supply, delivery, installation, configuration, commissioning and support of API Manager</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/ADDENDUM 1-SUPPLY, DELIVERY, INSTALLATION, CONFIGURATION, COMMISSIONING AND SUPPORT OF API MANAGER.pdf\" target=\"_blank\">Addendum 1-supply, delivery, installation, configuration, commissioning and support of API manager.</a></li>\r\n</ul>\r\n\r\n<p>8. <a href=\"https://www.stima-sacco.com/downloads/TENDER DOCUMENT FOR SUPPLY INSTALLATION CONFIGURATION AND COMMISSIONING OF DATA CENTER HARDWARE- final.pdf\" target=\"_blank\">Tender document for supply, installation, configuration and commissioning of Data Center Hardware</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/ADDENDUM 1-SUPPLY, INSTALLATION, CONFIGURATION AND COMMISSIONING OF DATA CENTRE HARDWARE.pdf\" target=\"_blank\">Addendum 1-supply, installation, configuration and commissioning of Data Center hardware</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/ADDENDUM 2- TENDER FOR SUPPLY INSTALLATION CONFIGURATION AND COMMISSIONING OF DATA CENTRE HARDWARE.pdf\" target=\"_blank\">Addendum 2- Tender For Supply Installation Configuration And Commissioning Of Data Center Hardware</a></li>\r\n	<li><a href=\"https://www.stima-sacco.com/downloads/ADDENDUM 3- SUPPLY, DELIVERY, INSTALLATION, CONFIGURATION, COMMISSIONING AND SUPPORT OF API MANAGER..pdf\" target=\"_blank\">Addendum 3- Supply, Delivery, Installation, Configuration, Commissioning and Support Of API Manager.</a></li>\r\n</ul>\r\n\r\n<p>9.&nbsp;&nbsp;<a href=\"https://www.stima-sacco.com/downloads/TENDER DOCUMENT FOR SUPPLY INSTALLATION AND CONFIGURATION OF ELECTRONIC DOCUMENT MANAGEMENT SYSTEM.pdf\" target=\"_blank\">Tender document for supply installation and configuration of electronic document management system</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/wp-content/uploads/2021/09/ADDENDUM-1-TENDER-FOR-SUPPLY-INSTALLATION-AND-CONFIGURATION-OF-ELECTRONIC-DOCUMENT-MANAGEMENT-SYSTEM.pdf\">Addendum 1-Tender for Supply, Installation, And Configuration of Electronic Document Management System</a></li>\r\n</ul>\r\n\r\n<p>10.&nbsp; <a href=\"https://www.stima-sacco.com/downloads/TENDER DOCUMENT FOR PROVISION OF COLOCATION SITE TO HOST DATA CENTER.pdf\" target=\"_blank\">Tender document for provision of colocation site to host data center</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/wp-content/uploads/2021/09/ADDENNDUM-1-TENDER-FOR-PROVISION-OF-COLOCATION-SITE-TO-HOST-DATA-CENTER.pdf\">Addendum 1-</a><a href=\"https://www.stima-sacco.com/downloads/TENDER DOCUMENT FOR PROVISION OF COLOCATION SITE TO HOST DATA CENTER.pdf\" target=\"_blank\">Tender provision of colocation site to host data center</a></li>\r\n</ul>\r\n\r\n<p>11.&nbsp; <a href=\"https://www.stima-sacco.com/downloads/TENDER DOCUMENT FOR PROVISION OF SECURITY GUARDING SERVICES.pdf\" target=\"_blank\">Tender document for provision of security guarding services</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.stima-sacco.com/wp-content/uploads/2021/09/ADDENDUM-1-TENDER-FOR-PROVISION-OF-SECURITY-GUARDING-SERVICES.pdf\">Addendum 1- Tender for Provision of Security Guarding Services</a></li>\r\n</ul>\r\n', '', '', 'List of tenders (click to view/download)');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int NOT NULL,
  `userq` varchar(250) NOT NULL,
  `userv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `userq`, `userv`) VALUES
(1, 'Birthday', '14 July,1999'),
(2, 'Age', '21'),
(3, 'Website', 'www.monugiri.com'),
(4, 'Degree', 'Bachelors Degree'),
(5, 'Mobile', '+917838403916'),
(6, 'Email', 'whomonugiri@gmail.com'),
(7, 'City', 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `vision_setup`
--

CREATE TABLE `vision_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `vision_setup`
--

INSERT INTO `vision_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, '‘‘To become the leading SACCO in the Republic of South Sudan by providing a diversity of quality products and services.’’ \r\n	', 'Vision ', 'Vision ', '‘‘To become the leading SACCO in the Republic of South Sudan by providing a diversity of quality products and services.’’ \r\n	', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wedo_setup`
--

CREATE TABLE `wedo_setup` (
  `id` int NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `wedo_setup`
--

INSERT INTO `wedo_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(0, 'DAMER is devoted to render quality services to the communities we work. Our mission is to invest in people, and provide high-quality data in some of the most challenging locations in the country.', 'What We Do', 'What We Do', 'DAMER is devoted to render quality services to the communities we work. Our mission is to invest in people, and provide high-quality data in some of the most challenging locations in the country. Our research informs programming for government agencies, NGOs, UN agencies and private sector alike-all designed and conducted within the country.', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_setup`
--
ALTER TABLE `aboutus_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `article_category` (`id_categorie`),
  ADD KEY `article_author` (`id_author`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `banking`
--
ALTER TABLE `banking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_setup`
--
ALTER TABLE `basic_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardmemb`
--
ALTER TABLE `boardmemb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_article` (`id_article`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_setup`
--
ALTER TABLE `personal_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_services`
--
ALTER TABLE `product_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supercomm`
--
ALTER TABLE `supercomm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_setup`
--
ALTER TABLE `aboutus_setup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banking`
--
ALTER TABLE `banking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `basic_setup`
--
ALTER TABLE `basic_setup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boardmemb`
--
ALTER TABLE `boardmemb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_setup`
--
ALTER TABLE `personal_setup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_services`
--
ALTER TABLE `product_services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `savings`
--
ALTER TABLE `savings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `supercomm`
--
ALTER TABLE `supercomm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_author` FOREIGN KEY (`id_author`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_category` FOREIGN KEY (`id_categorie`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
