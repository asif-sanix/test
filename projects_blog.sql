-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2019 at 06:01 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0gOSwOfKjrHw943jJ2MFa8awU481DSaME0pCDn1f.png',
  `allowed_ip` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `mobile`, `gender`, `password`, `address`, `avatar`, `allowed_ip`, `ip`, `remember_token`, `status_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', NULL, NULL, '$2y$10$4mVmW1qo592aVa4WE4oNNuMgqw5UfGabSschhHnneTPyiD9SndL1u', NULL, 'admin-asset/files/user/ctzvYQ7vuoJajCNXyYmFynNbhHmTGg78KiR91Rfd.png', 1, NULL, '0Pl0o6UMZa9bnpuT4aHbNXUYj19AODpWjEbRONqnM8wauCkZ3ljvx0uUhtWF', 1, '2017-12-21 06:21:55', '2019-01-31 10:08:32', NULL),
(2, 3, 'Asif', 'asif@admin.com', '7777777', NULL, '$2y$10$K2fbAfVsJPFE4rn/7uOEmeZCtkeo3BeINuNB0KI9ufw6EysqocTFC', 'mmmm', 'admin-asset/files/user/ctzvYQ7vuoJajCNXyYmFynNbhHmTGg78KiR91Rfd.png', 1, NULL, NULL, 1, '2018-12-25 11:54:07', '2018-12-29 12:29:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `created_at`, `updated_at`) VALUES
(30, 'BR', 'Brazil', 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'IO', 'British Indian Ocean Territory', 246, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'BN', 'Brunei', 673, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'BG', 'Bulgaria', 359, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'BF', 'Burkina Faso', 226, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'BI', 'Burundi', 257, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'KH', 'Cambodia', 855, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'CV', 'Cape Verde', 238, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'KY', 'Cayman Islands', 1345, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'CF', 'Central African Republic', 236, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'TD', 'Chad', 235, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'CL', 'Chile', 56, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'CN', 'China', 86, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'CX', 'Christmas Island', 61, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'CC', 'Cocos (Keeling) Islands', 672, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'CO', 'Colombia', 57, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'KM', 'Comoros', 269, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'CG', 'Republic Of The Congo', 242, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'CD', 'Democratic Republic Of The Congo', 242, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'CK', 'Cook Islands', 682, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'CR', 'Costa Rica', 506, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'HR', 'Croatia (Hrvatska)', 385, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'CU', 'Cuba', 53, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'CY', 'Cyprus', 357, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'CZ', 'Czech Republic', 420, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'DK', 'Denmark', 45, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'DJ', 'Djibouti', 253, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'DM', 'Dominica', 1767, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'DO', 'Dominican Republic', 1809, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'TP', 'East Timor', 670, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'EC', 'Ecuador', 593, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'EG', 'Egypt', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'SV', 'El Salvador', 503, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'GQ', 'Equatorial Guinea', 240, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'ER', 'Eritrea', 291, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'EE', 'Estonia', 372, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'ET', 'Ethiopia', 251, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'XA', 'External Territories of Australia', 61, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'FK', 'Falkland Islands', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'FO', 'Faroe Islands', 298, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'FJ', 'Fiji Islands', 679, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'FI', 'Finland', 358, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'FR', 'France', 33, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'GF', 'French Guiana', 594, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'PF', 'French Polynesia', 689, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'TF', 'French Southern Territories', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'GA', 'Gabon', 241, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'GM', 'Gambia The', 220, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'GE', 'Georgia', 995, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'DE', 'Germany', 49, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'GH', 'Ghana', 233, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'GI', 'Gibraltar', 350, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'GR', 'Greece', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'GL', 'Greenland', 299, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'GD', 'Grenada', 1473, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'GP', 'Guadeloupe', 590, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'GU', 'Guam', 1671, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'GT', 'Guatemala', 502, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'XU', 'Guernsey and Alderney', 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'GN', 'Guinea', 224, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'GW', 'Guinea-Bissau', 245, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'GY', 'Guyana', 592, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'HT', 'Haiti', 509, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'HM', 'Heard and McDonald Islands', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'HN', 'Honduras', 504, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'HK', 'Hong Kong S.A.R.', 852, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'HU', 'Hungary', 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'IS', 'Iceland', 354, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'IN', 'India', 91, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'ID', 'Indonesia', 62, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'IR', 'Iran', 98, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'IQ', 'Iraq', 964, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'IE', 'Ireland', 353, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'IL', 'Israel', 972, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'IT', 'Italy', 39, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'JM', 'Jamaica', 1876, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'JP', 'Japan', 81, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'XJ', 'Jersey', 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'JO', 'Jordan', 962, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'KZ', 'Kazakhstan', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'KE', 'Kenya', 254, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'KI', 'Kiribati', 686, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'KP', 'Korea North', 850, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'KR', 'Korea South', 82, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'KW', 'Kuwait', 965, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'KG', 'Kyrgyzstan', 996, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'LA', 'Laos', 856, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'LV', 'Latvia', 371, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'LB', 'Lebanon', 961, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'LS', 'Lesotho', 266, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'LR', 'Liberia', 231, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'LY', 'Libya', 218, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'LI', 'Liechtenstein', 423, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'LT', 'Lithuania', 370, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'LU', 'Luxembourg', 352, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'MO', 'Macau S.A.R.', 853, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'MK', 'Macedonia', 389, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'MG', 'Madagascar', 261, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'MW', 'Malawi', 265, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'MY', 'Malaysia', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'MV', 'Maldives', 960, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'ML', 'Mali', 223, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'MT', 'Malta', 356, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'XM', 'Man (Isle of)', 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'MH', 'Marshall Islands', 692, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'MQ', 'Martinique', 596, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'MR', 'Mauritania', 222, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'MU', 'Mauritius', 230, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'YT', 'Mayotte', 269, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'MX', 'Mexico', 52, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'FM', 'Micronesia', 691, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'MD', 'Moldova', 373, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'MC', 'Monaco', 377, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'MN', 'Mongolia', 976, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'MS', 'Montserrat', 1664, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'MA', 'Morocco', 212, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'MZ', 'Mozambique', 258, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'MM', 'Myanmar', 95, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'NA', 'Namibia', 264, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'NR', 'Nauru', 674, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'NP', 'Nepal', 977, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'AN', 'Netherlands Antilles', 599, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'NL', 'Netherlands The', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'NC', 'New Caledonia', 687, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'NZ', 'New Zealand', 64, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'NI', 'Nicaragua', 505, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'NE', 'Niger', 227, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'NG', 'Nigeria', 234, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'NU', 'Niue', 683, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'NF', 'Norfolk Island', 672, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'MP', 'Northern Mariana Islands', 1670, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'NO', 'Norway', 47, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'OM', 'Oman', 968, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'PK', 'Pakistan', 92, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'PW', 'Palau', 680, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'PS', 'Palestinian Territory Occupied', 970, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'PA', 'Panama', 507, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'PG', 'Papua new Guinea', 675, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'PY', 'Paraguay', 595, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'PE', 'Peru', 51, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'PH', 'Philippines', 63, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'PN', 'Pitcairn Island', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'PL', 'Poland', 48, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'PT', 'Portugal', 351, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'PR', 'Puerto Rico', 1787, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'QA', 'Qatar', 974, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'RE', 'Reunion', 262, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'RO', 'Romania', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'RU', 'Russia', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'RW', 'Rwanda', 250, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'SH', 'Saint Helena', 290, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'KN', 'Saint Kitts And Nevis', 1869, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'LC', 'Saint Lucia', 1758, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'PM', 'Saint Pierre and Miquelon', 508, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'WS', 'Samoa', 684, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'SM', 'San Marino', 378, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'ST', 'Sao Tome and Principe', 239, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'SA', 'Saudi Arabia', 966, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'SN', 'Senegal', 221, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'RS', 'Serbia', 381, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'SC', 'Seychelles', 248, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'SL', 'Sierra Leone', 232, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'SG', 'Singapore', 65, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'SK', 'Slovakia', 421, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'SI', 'Slovenia', 386, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'XG', 'Smaller Territories of the UK', 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'SB', 'Solomon Islands', 677, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'SO', 'Somalia', 252, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'ZA', 'South Africa', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'GS', 'South Georgia', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'SS', 'South Sudan', 211, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'ES', 'Spain', 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'LK', 'Sri Lanka', 94, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'SD', 'Sudan', 249, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'SR', 'Suriname', 597, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'SZ', 'Swaziland', 268, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'SE', 'Sweden', 46, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'CH', 'Switzerland', 41, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'SY', 'Syria', 963, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'TW', 'Taiwan', 886, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'TJ', 'Tajikistan', 992, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'TZ', 'Tanzania', 255, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'TH', 'Thailand', 66, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 'TG', 'Togo', 228, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 'TK', 'Tokelau', 690, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 'TO', 'Tonga', 676, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 'TT', 'Trinidad And Tobago', 1868, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 'TN', 'Tunisia', 216, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'TR', 'Turkey', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'TM', 'Turkmenistan', 7370, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'TC', 'Turks And Caicos Islands', 1649, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'TV', 'Tuvalu', 688, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'UG', 'Uganda', 256, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'UA', 'Ukraine', 380, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'AE', 'United Arab Emirates', 971, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'GB', 'United Kingdom', 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'US', 'United States', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 'UM', 'United States Minor Outlying Islands', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 'UY', 'Uruguay', 598, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'UZ', 'Uzbekistan', 998, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 'VU', 'Vanuatu', 678, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 'VA', 'Vatican City State (Holy See)', 39, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 'VE', 'Venezuela', 58, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 'VN', 'Vietnam', 84, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 'VG', 'Virgin Islands (British)', 1284, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 'VI', 'Virgin Islands (US)', 1340, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 'WF', 'Wallis And Futuna Islands', 681, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 'EH', 'Western Sahara', 212, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 'YE', 'Yemen', 967, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 'YU', 'Yugoslavia', 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 'ZM', 'Zambia', 260, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 'ZW', 'Zimbabwe', 263, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 'te', 'test', 11, '2018-12-11 15:24:24', '2018-12-11 15:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `table_name`, `url`, `controller`, `target`, `icon`, `parent_id`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Roles', 'roles', NULL, 'RoleController', '_self', 'icon-users', NULL, 1, 1, '2018-12-25 06:09:24', '2018-12-25 06:22:19'),
(2, 'Menus', 'menus', NULL, 'MenuController', '_self', 'icon-speedometer', NULL, 2, 1, '2018-12-25 06:10:06', '2018-12-25 06:22:19'),
(4, 'Countries', 'countries', NULL, 'CountriesController', '_self', 'icon-plus', NULL, 0, 1, '2018-12-25 07:03:33', '2018-12-25 07:04:52'),
(5, 'Admins', 'admins', NULL, 'AdminController', '_self', 'icon-user', NULL, 0, 1, '2018-12-25 10:01:56', '2018-12-25 10:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'browse_roles', 'roles', 1, '2018-12-25 06:09:24', '2018-12-25 06:09:24'),
(2, 'read_roles', 'roles', 1, '2018-12-25 06:09:24', '2018-12-25 06:09:24'),
(3, 'add_roles', 'roles', 1, '2018-12-25 06:09:24', '2018-12-25 06:09:24'),
(4, 'edit_roles', 'roles', 1, '2018-12-25 06:09:24', '2018-12-25 06:09:24'),
(5, 'delete_roles', 'roles', 1, '2018-12-25 06:09:24', '2018-12-25 06:09:24'),
(6, 'browse_menus', 'menus', 2, '2018-12-25 06:10:06', '2018-12-25 06:10:06'),
(7, 'read_menus', 'menus', 2, '2018-12-25 06:10:06', '2018-12-25 06:10:06'),
(8, 'add_menus', 'menus', 2, '2018-12-25 06:10:06', '2018-12-25 06:10:06'),
(9, 'edit_menus', 'menus', 2, '2018-12-25 06:10:06', '2018-12-25 06:10:06'),
(10, 'delete_menus', 'menus', 2, '2018-12-25 06:10:06', '2018-12-25 06:10:06'),
(15, 'browse_countries', 'countries', 4, '2018-12-25 07:03:33', '2018-12-25 07:03:33'),
(16, 'read_countries', 'countries', 4, '2018-12-25 07:03:33', '2018-12-25 07:03:33'),
(17, 'add_countries', 'countries', 4, '2018-12-25 07:03:33', '2018-12-25 07:03:33'),
(20, 'browse_admins', 'admins', 5, '2018-12-25 10:01:56', '2018-12-25 10:01:56'),
(21, 'read_admins', 'admins', 5, '2018-12-25 10:01:56', '2018-12-25 10:01:56'),
(22, 'add_admins', 'admins', 5, '2018-12-25 10:01:56', '2018-12-25 10:01:56'),
(30, 'edit_admins', 'admins', 5, '2018-12-28 11:59:28', '2018-12-28 11:59:28'),
(31, 'delete_admins', 'admins', 5, '2018-12-28 11:59:28', '2018-12-28 11:59:28'),
(32, 'edit_countries', 'countries', 4, '2019-01-31 10:09:24', '2019-01-31 10:09:24'),
(33, 'delete_countries', 'countries', 4, '2019-01-31 10:09:24', '2019-01-31 10:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `permission_roles`
--

DROP TABLE IF EXISTS `permission_roles`;
CREATE TABLE IF NOT EXISTS `permission_roles` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_roles`
--

INSERT INTO `permission_roles` (`permission_id`, `role_id`) VALUES
(1, 11),
(2, 11),
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
(15, 1),
(16, 1),
(17, 1),
(32, 1),
(33, 1),
(20, 1),
(21, 1),
(22, 1),
(30, 1),
(31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'super-admin', 'Super Admin', NULL, '2019-01-31 10:09:42', NULL),
(2, 'manager', NULL, '2018-12-25 11:14:49', '2018-12-25 11:14:49', NULL),
(3, 'Employee', NULL, '2018-12-25 11:17:09', '2018-12-25 11:17:09', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
