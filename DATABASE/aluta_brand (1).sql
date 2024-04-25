-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 10:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aluta_brand`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `pharmacy_ID` varchar(100) NOT NULL,
  `activity` varchar(225) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `user` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `pharmacy_ID`, `activity`, `date`, `user`, `url`, `ip_address`, `branch_ID`) VALUES
(1, '', 'User example@example.com Signed in', '2021-07-06 18:45:23.383617', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/index', '::1', ''),
(2, '', 'User example@example.com Signed in', '2021-07-06 18:50:41.520795', 'example@example.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(3, '', 'Add new user with namemercy waithera and email mercy@gmail.com', '2021-07-06 18:56:34.388088', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/add_user', '::1', ''),
(4, '', 'Updated user Details forfrancis james kihiko  with Email exampl6666e@example.com', '2021-07-07 07:46:21.457408', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=029b6bbb066d221c5d2c5796c776f754', '::1', ''),
(5, '', 'Deleted user with user_ID 029b6bbb066d221c5d2c5796c776f754', '2021-07-07 07:49:47.716902', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/delete_user?guidID=029b6bbb066d221c5d2c5796c776f754', '::1', ''),
(6, '', 'Updated Privileges for Sales3', '2021-07-07 08:07:43.922475', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(7, '', 'Updated Privileges for Sales3', '2021-07-07 08:07:44.038037', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(8, '', 'Updated Privileges for Sales3', '2021-07-07 08:07:44.153372', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(9, '', 'Create a new role with name Secretary', '2021-07-07 08:10:04.180545', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/role', '::1', ''),
(10, '', 'Create company profile ', '2021-07-07 09:56:59.954642', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(11, '', 'Update company profile ', '2021-07-07 10:03:37.215913', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(12, '', 'Update company profile ', '2021-07-07 10:23:29.243356', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(13, '', 'Update company profile ', '2021-07-07 10:23:37.428424', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(14, '', 'Update company profile ', '2021-07-07 10:23:56.575412', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(15, '', 'Update company profile ', '2021-07-07 10:36:00.435282', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(16, '', 'Create company profile ', '2021-07-07 10:36:30.859446', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(17, '', 'Update company profile ', '2021-07-07 10:36:40.910430', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(18, '', 'Created new supplier with name francis james kihiko and email kihiko2014@gmail.com', '2021-07-07 11:43:04.668019', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/add_supplier', '::1', ''),
(19, '', 'Created new supplier with name James Mwangi Kamau and email kihiko2014@gmail.com', '2021-07-07 11:45:10.730927', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/add_supplier', '::1', ''),
(20, '', 'Created new supplier with name francis james kihiko and email kihiko2014@gmail.com', '2021-07-07 11:45:18.100978', 'example@example.com', 'http://localhost/fraka_pharmacy/pages/add_supplier', '::1', ''),
(21, '', 'User admin@gmail.com Signed in', '2021-07-07 12:38:56.586202', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(22, '', 'Created new supplier with name James Mwangi Kamau ffffff and email kihiko2014@gmail.com', '2021-07-07 13:11:49.540001', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_supplier?guidID', '::1', ''),
(23, '', 'Created new supplier with name francis james kihiko hhhhh and email kihiko2014@gmail.com', '2021-07-07 13:12:53.103091', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_supplier?guidID=6dee45b1878ebe1604ba292828c540db', '::1', ''),
(24, '', 'updated supplier with name James Mwangi Kamau jjjj and email kihiko2014@gmail.comjjjj', '2021-07-07 13:14:22.249685', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_supplier?guidID=cd62f0fb890290fd12b42d260475f166', '::1', ''),
(25, '', 'updated supplier with name James Mwangi Kamau mmmmm and email kihiko2014@gmail.com999', '2021-07-07 13:15:32.414420', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_supplier?guidID=cd62f0fb890290fd12b42d260475f166', '::1', ''),
(26, '', 'updated supplier with name James Mwangi Kamau  and email kihiko2014@gmail.com', '2021-07-07 13:15:54.026368', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_supplier?guidID=cd62f0fb890290fd12b42d260475f166', '::1', ''),
(27, '', 'Deleted supplier with supplier_ID cd62f0fb890290fd12b42d260475f166', '2021-07-07 13:19:51.205822', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_supplier?guidID=cd62f0fb890290fd12b42d260475f166', '::1', ''),
(28, '', 'Created new supplier with name James Mwangi Kamau and email kihiko2014@gmail.com', '2021-07-07 13:24:31.835850', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_supplier', '::1', ''),
(29, '', 'Created new customer with name francis james kihiko and email kihiko2014@gmail.com', '2021-07-07 13:32:17.169401', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_customer', '::1', ''),
(30, '', 'Created new customer with name francis james kihiko and email kihiko2014@gmail.com', '2021-07-07 13:32:24.837876', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_customer', '::1', ''),
(31, '', 'Created new customer with name francis james and email kihiko201dd4@gmail.com', '2021-07-07 13:33:10.074547', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_customer', '::1', ''),
(32, '', 'Updated customer with name francis james rrrrrr and email kihiko201dd4@gmail.com', '2021-07-07 14:29:28.925099', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_customer?guidID=3bd38888770e942ec34c5d33aba5d8d6', '::1', ''),
(33, '', 'Updated customer with name francis james rrrrrr fff555555 and email kihiko201dd4@gmail.com', '2021-07-07 14:30:05.624568', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_customer?guidID=3bd38888770e942ec34c5d33aba5d8d6', '::1', ''),
(34, '', 'Deleted customer with customer_ID 3bd38888770e942ec34c5d33aba5d8d6', '2021-07-07 14:40:41.027190', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_customer?guidID=3bd38888770e942ec34c5d33aba5d8d6', '::1', ''),
(35, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:07.764218', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(36, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:07.884248', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(37, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:07.933610', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(38, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:07.983521', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(39, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:16.209087', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(40, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:16.334581', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(41, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:41.510557', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(42, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:41.549126', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(43, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:41.684769', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(44, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:48.120054', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(45, '', 'Updated Privileges for Credit OfficerRole', '2021-07-07 17:29:48.198720', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(46, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:57:56.209978', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(47, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:57:56.389292', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(48, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:04.017372', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(49, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:04.145559', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(50, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:04.269213', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(51, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:13.971086', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(52, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:14.349710', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(53, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:15.322500', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(54, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:15.451829', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(55, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:22.690227', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(56, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:22.845620', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(57, '', 'Updated Privileges for SecretaryRole', '2021-07-07 18:58:22.993215', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(58, '', 'Updated Privileges for AdminRole', '2021-07-07 19:03:19.044842', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(59, '', 'Updated Privileges for AdminRole', '2021-07-07 19:03:19.144994', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(60, '', 'Updated Privileges for SecretaryRole', '2021-07-07 19:04:58.954653', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=0d155107b10d5120898b701cee4d0180', '::1', ''),
(61, '', 'Create a new category with name Injection', '2021-07-07 20:39:52.103255', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/category', '::1', ''),
(62, '', 'Create a new category with name Capsule', '2021-07-07 20:40:26.375211', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/category', '::1', ''),
(63, '', 'Create a new category with name Tablet', '2021-07-07 20:40:54.140327', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/category', '::1', ''),
(64, '', 'Deleted Category with Name 0', '2021-07-07 21:35:55.879995', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/deactivate_category?guidID=b997b91c868cbffb9a745b884cda9579', '::1', ''),
(65, '', 'Deleted Category with Name 0', '2021-07-07 21:36:06.269555', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/deactivate_category?guidID=b84148c54348ceb938a5e3f2f4700cc4', '::1', ''),
(66, '', 'Create a new category with name Capsule', '2021-07-07 21:36:15.137557', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/category', '::1', ''),
(67, '', 'Create a new category with name Cream', '2021-07-07 21:36:33.133308', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/category', '::1', ''),
(68, '', 'Deleted User with Name ', '2021-07-07 21:37:40.304172', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_user?guidID=', '::1', ''),
(69, '', 'Deleted User with Name ', '2021-07-07 21:37:49.864652', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_user?guidID=', '::1', ''),
(70, '', 'Deleted User with Name ', '2021-07-07 21:38:20.489954', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_user?guidID=', '::1', ''),
(71, '', 'Deleted User with Name ', '2021-07-07 21:38:30.743709', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_user?guidID=', '::1', ''),
(72, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:13:32.662784', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(73, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:14:10.064898', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(74, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:14:19.588010', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(75, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:18:22.802438', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(76, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:18:28.585030', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(77, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:26:00.897431', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(78, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:26:08.229879', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(79, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:26:17.480936', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(80, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:26:21.427765', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(81, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:56:51.410011', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(82, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:56:58.347554', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(83, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:57:13.775021', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(84, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:57:21.974767', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(85, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:57:29.795517', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(86, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:57:40.054979', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(87, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:57:57.252017', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(88, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 22:58:02.939065', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(89, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:01:53.326858', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(90, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:01:59.199096', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(91, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:02:02.983541', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(92, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:05:45.617529', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(93, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:05:57.889361', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(94, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:00.010732', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(95, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:01.789506', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(96, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:03.371687', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(97, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:04.732648', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(98, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:06.397514', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(99, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:08.218065', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(100, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:09.926066', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(101, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:06:11.899267', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(102, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:07:30.267472', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(103, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:07:32.448334', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(104, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:07:33.868796', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(105, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:07:35.224807', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(106, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:07:36.804776', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(107, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 23:07:38.156122', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(108, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2021-07-07 19:55:53.231278', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(109, '', 'Created new Medicine with name Panadle and short name pand', '2021-07-07 22:00:27.118668', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(110, '', 'Created new Medicine with name Panadle and short name pand', '2021-07-07 22:01:59.714740', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(111, '', 'Created new Medicine with name Panadle and short name pand', '2021-07-07 22:03:45.149444', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(112, '', 'Created new Medicine with name Maramoja and short name maramoja', '2021-07-07 22:05:00.520349', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(113, '', 'Created new Medicine with name Halaka and short name Halaka', '2021-07-07 22:07:15.941937', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(114, '', 'Created new Medicine with name Halaka33 and short name Halaka33', '2021-07-08 00:49:16.533724', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(115, '', 'Updated Medicine with name Maramoja444 and short name maramoja44', '2021-07-08 00:52:27.088566', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=e7ab55dd6442638242a8df24de9b4194', '::1', ''),
(116, '', 'Updated Medicine with name Maramoja444 and short name maramoja44', '2021-07-08 01:11:16.679821', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=e7ab55dd6442638242a8df24de9b4194', '::1', ''),
(117, '', 'Deleted Medicine with Name Halaka33', '2021-07-08 01:16:17.360031', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_medicine?guidID=44446cba53833d02ab43de56ceece5fe', '::1', ''),
(118, '', 'Deleted Medicine with Name Panadle', '2021-07-08 01:16:40.576549', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_medicine?guidID=63c74f17f34eda28cd477df825676f24', '::1', ''),
(119, '', 'Updated Medicine with name Halaka and short name Halaka', '2021-07-08 02:58:56.931550', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=ef82f9ed47304a6509ddaa1c60998b79', '::1', ''),
(120, '', 'Updated Medicine with name Panadle and short name pand', '2021-07-08 02:59:50.335787', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=4f10dae2f99490fc7d0ea8878493b783', '::1', ''),
(121, '', 'Updated Medicine with name Panadle and short name pand', '2021-07-08 03:01:00.215482', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=7621080d1ef2a559ba08a214e9db2779', '::1', ''),
(122, '', 'Updated Medicine with name Halaka and short name Halaka', '2021-07-08 03:08:06.839589', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=ef82f9ed47304a6509ddaa1c60998b79', '::1', ''),
(123, '', 'Updated Medicine with name Maramoja444 and short name maramoja44', '2021-07-09 00:24:27.653052', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=e7ab55dd6442638242a8df24de9b4194', '::1', ''),
(124, '', 'Created new customer with name francis james kihiko and email kihiko2014@gmail.com', '2021-07-13 14:17:39.853287', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_customer', '::1', ''),
(125, '', 'Created new customer with name James Mwangi Kamau and email kihiko2014@gmail.com', '2021-07-13 14:17:46.739956', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_customer', '::1', ''),
(126, '', 'Deleted sale with Invoice no 9202000', '2021-07-13 18:24:17.219090', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_sale?guidID=64aa03d15bd16b9a0954dc5550a6fe7e', '::1', ''),
(127, '', 'Updated Medicine with name Halaka and short name Halaka', '2021-07-15 08:52:20.753339', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=ef82f9ed47304a6509ddaa1c60998b79', '::1', ''),
(128, '', 'Updated Medicine with name Maramoja444 and short name maramoja44', '2021-07-15 08:52:44.962746', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=e7ab55dd6442638242a8df24de9b4194', '::1', ''),
(129, '', 'Deleted sale with Invoice no 3900299', '2021-07-15 09:14:45.750295', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_sale?guidID=de792920b78f1da8a27b7fc13288c462', '::1', ''),
(130, '', 'Deleted sale with Invoice no 3900299', '2021-07-15 09:14:45.774593', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_sale?guidID=de792920b78f1da8a27b7fc13288c462', '::1', ''),
(131, '', 'Updated Medicine with name Panadle and short name pand', '2021-07-15 09:46:41.662192', 'kihiko2014@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=7621080d1ef2a559ba08a214e9db2779', '::1', ''),
(132, '', 'User admin@gmail.com Signed in', '2021-07-15 11:01:04.364696', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(133, '', 'Update company profile ', '2021-07-15 15:11:51.266755', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/settings', '::1', ''),
(134, '', 'Made a sale with an invoice no 2329399', '2021-07-15 18:55:50.990754', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=9185ea8f46a0daae9f633a79d2d8d6f5&invoice_no=2', '::1', ''),
(135, '', 'Updated Privileges for SalesRole', '2021-07-16 15:16:27.834451', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(136, '', 'Updated Privileges for SalesRole', '2021-07-16 15:16:28.118052', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(137, '', 'Updated Privileges for SalesRole', '2021-07-16 15:16:28.201305', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(138, '', 'Updated Privileges for SalesRole', '2021-07-16 15:16:28.251247', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(139, '', 'Updated Privileges for Sales3Role', '2021-07-16 15:30:32.694666', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(140, '', 'Updated Privileges for Sales3Role', '2021-07-16 15:30:32.825567', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(141, '', 'Updated Privileges for Sales3Role', '2021-07-16 15:30:32.903975', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(142, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:16:23.990055', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(143, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:16:24.056364', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(144, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:17:42.551158', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(145, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:17:42.605292', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(146, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:18:50.017129', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(147, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:18:50.033604', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(148, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:19:28.196326', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(149, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:19:28.279266', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(150, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:20:23.544870', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(151, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:20:23.618032', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(152, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:27:10.795416', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(153, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:27:10.945276', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=ce3c5c876e2afdeedaaccbccd189fbec&invoi', '::1', ''),
(154, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:15:00.717858', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=82088092911674457ce2c7559a6c3a5f&invoi', '::1', ''),
(155, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:15:00.933260', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=82088092911674457ce2c7559a6c3a5f&invoi', '::1', ''),
(156, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:52:51.065183', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=82088092911674457ce2c7559a6c3a5f&invoi', '::1', ''),
(157, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:52:51.245167', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=82088092911674457ce2c7559a6c3a5f&invoi', '::1', ''),
(158, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:54:03.242192', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=82088092911674457ce2c7559a6c3a5f&invoi', '::1', ''),
(159, '', 'Made a purchase with an invoice no 7778', '2021-07-16 18:58:10.676983', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=82088092911674457ce2c7559a6c3a5f&invoi', '::1', ''),
(160, '', 'Made a purchase with an invoice no 7778', '2021-07-16 19:04:50.660495', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=2fe971a06a0591e8f0d4553d0767b368&invoi', '::1', ''),
(161, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.648092', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(162, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.703269', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(163, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.738968', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(164, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.802347', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(165, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.875955', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(166, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.907942', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(167, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:39.973363', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(168, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:26:40.015458', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=82088092911674457ce2c7559a6c3a5f', '::1', ''),
(169, '', 'Deleted Purchase with Invoice no 7778', '2021-07-17 08:28:58.349044', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_purchase?guidID=2fe971a06a0591e8f0d4553d0767b368', '::1', ''),
(170, '', 'Made a purchase with an invoice no 4444', '2021-07-17 11:08:36.147037', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=c7cb4344927c9075c47298d07ba9d822&invoi', '::1', ''),
(171, '', 'Made a purchase with an invoice no 33333', '2021-07-17 12:30:14.542614', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=5b4824297f7f5c2670ac040d7d507d48&invoi', '::1', ''),
(172, '', 'Made a purchase with an invoice no 777811', '2021-07-18 15:15:22.156841', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=d1cc5e7b513b54bb919f1db65741aa26&invoi', '::1', ''),
(173, '', 'Updated Medicine with name Maramoja444 and short name maramoja44', '2021-07-18 16:15:10.978306', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_medicine?guidID=e7ab55dd6442638242a8df24de9b4194', '::1', ''),
(174, '', 'Made a purchase with an invoice no 222222', '2021-07-18 16:15:58.794864', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invoi', '::1', ''),
(175, '', 'Made a purchase with an invoice no 222222', '2021-07-18 16:15:59.071992', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invoi', '::1', ''),
(176, '', 'Made a purchase with an invoice no 222222', '2021-07-18 17:04:33.360995', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(177, '', 'Made a purchase with an invoice no 222222', '2021-07-18 17:16:03.300036', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(178, '', 'Made a purchase with an invoice no 222222', '2021-07-18 17:16:03.488539', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(179, '', 'Made a purchase with an invoice no 222222', '2021-07-18 17:16:33.050983', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(180, '', 'Made a purchase with an invoice no 222222', '2021-07-18 17:16:33.236270', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(181, '', 'updated a purchase with an invoice no 222222', '2021-07-18 17:26:55.399412', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(182, '', 'updated a purchase with an invoice no 222222', '2021-07-18 17:26:55.599203', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(183, '', 'updated a purchase with an invoice no 222222', '2021-07-18 17:41:51.832436', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(184, '', 'updated a purchase with an invoice no 222222', '2021-07-18 17:41:52.061960', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=fadb84651e5c5e84733cf7eb235bb2f6&invo', '::1', ''),
(185, '', 'Made a purchase with an invoice no 55555', '2021-07-18 17:44:23.696307', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=7d2a15c173633efb00e23123ec00dc24&invoi', '::1', ''),
(186, '', 'Made a purchase with an invoice no 55555', '2021-07-18 17:44:23.848830', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=7d2a15c173633efb00e23123ec00dc24&invoi', '::1', ''),
(187, '', 'updated a purchase with an invoice no 55555', '2021-07-18 17:45:29.174250', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=7d2a15c173633efb00e23123ec00dc24&invo', '::1', ''),
(188, '', 'updated a purchase with an invoice no 55555', '2021-07-18 17:47:26.886162', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=7d2a15c173633efb00e23123ec00dc24&invo', '::1', ''),
(189, '', 'updated a purchase with an invoice no 55555', '2021-07-18 17:47:27.094067', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=7d2a15c173633efb00e23123ec00dc24&invo', '::1', ''),
(190, '', 'Made a purchase with an invoice no 44444', '2021-07-18 21:30:25.834846', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=e040e534cabcfd7f30a61a509b1cc69b&invoi', '::1', ''),
(191, '', 'Made a purchase with an invoice no 44444', '2021-07-18 21:30:26.041217', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=e040e534cabcfd7f30a61a509b1cc69b&invoi', '::1', ''),
(192, '', 'User admin@gmail.com Signed in', '2021-07-19 21:32:28.702521', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(193, '', 'Made a sale with an invoice no 0029000', '2021-07-21 14:28:00.443139', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=67896f8c99dbdb5a9ab373aa4bd03912&invoice_no=0', '::1', ''),
(194, '', 'Made a sale with an invoice no 0029000', '2021-07-21 14:28:00.605628', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=67896f8c99dbdb5a9ab373aa4bd03912&invoice_no=0', '::1', ''),
(195, '', 'Updated Privileges for SalesRole', '2021-07-21 15:09:34.401698', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(196, '', 'Updated Privileges for SalesRole', '2021-07-21 15:09:34.555538', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(197, '', 'Updated Privileges for SalesRole', '2021-07-21 15:09:34.644277', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(198, '', 'Updated Privileges for SalesRole', '2021-07-21 15:09:34.706559', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(199, '', 'Made a sale with an invoice no 9090090', '2021-07-21 15:14:19.875379', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=0461a96c1db0176d3266e4a75ce72bea&invoice_no=9', '::1', ''),
(200, '', 'Made a sale with an invoice no 9090090', '2021-07-21 15:14:20.033257', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=0461a96c1db0176d3266e4a75ce72bea&invoice_no=9', '::1', ''),
(201, '', 'Made a sale with an invoice no 9020990', '2021-07-21 15:45:53.577165', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=d8ae6a7503465306dff085f7b17595b2&invoice_no=9', '::1', ''),
(202, '', 'Made a sale with an invoice no 9020990', '2021-07-21 15:45:53.693212', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=d8ae6a7503465306dff085f7b17595b2&invoice_no=9', '::1', ''),
(203, '', 'Made a sale with an invoice no 2903009', '2021-07-21 15:56:40.731249', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=7158bb071fc9ec8409543bbce4d09a68&invoice_no=2', '::1', ''),
(204, '', 'Made a sale with an invoice no 9990909', '2021-07-21 15:58:38.882008', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=bd761a9508e454e5346c55fc7be976b7&invoice_no=9', '::1', ''),
(205, '', 'Made a sale with an invoice no 0209099', '2021-07-21 16:01:51.032317', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=67580f830cb4fc2ebeb7e50735d15d43&invoice_no=0', '::1', ''),
(206, '', 'Made a purchase with an invoice no 1957', '2021-07-21 16:04:56.018226', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=26ea2ac984e01f059840f6ad8bef3954&invoi', '::1', ''),
(207, '', 'Made a sale with an invoice no 9029909', '2021-07-21 16:05:41.001571', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=f7ff332777f6b38ae660adfc01104047&invoice_no=9', '::1', ''),
(208, '', 'Made a sale with an invoice no 0029200', '2021-07-21 16:09:55.242667', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=41c29be1e755e03e0016cf940de67969&invoice_no=0', '::1', ''),
(209, '', 'Made a purchase with an invoice no 0707', '2021-07-21 16:18:14.309911', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=e7e225cf42b628a58872d33ba49fe7b1&invoi', '::1', ''),
(210, '', 'Made a sale with an invoice no 9330992', '2021-07-21 16:18:56.308357', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=44d7080f794734ccc4871a9fbf90f2e1&invoice_no=9', '::1', ''),
(211, '', 'Made a purchase with an invoice no 2085', '2021-07-21 16:23:46.351553', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=a0d0d6f7b90e1b5dd5a56747d73f0d20&invoi', '::1', ''),
(212, '', 'Made a sale with an invoice no 9200099', '2021-07-21 16:24:43.875264', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=6806a5e5a4d17f9a069c5c299c7bbb0a&invoice_no=9', '::1', ''),
(213, '', 'Made a sale with an invoice no 9200099', '2021-07-21 16:27:24.993727', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=6806a5e5a4d17f9a069c5c299c7bbb0a&invoice_no=9', '::1', ''),
(214, '', 'Made a sale with an invoice no 9200099', '2021-07-21 16:34:14.345921', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=6806a5e5a4d17f9a069c5c299c7bbb0a&invoice_no=9', '::1', ''),
(215, '', 'Made a sale with an invoice no 9200099', '2021-07-21 16:36:17.790808', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=6806a5e5a4d17f9a069c5c299c7bbb0a&invoice_no=9', '::1', ''),
(216, '', 'Made a sale with an invoice no 9200099', '2021-07-21 16:37:43.438264', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=6806a5e5a4d17f9a069c5c299c7bbb0a&invoice_no=9', '::1', ''),
(217, '', 'Made a purchase with an invoice no 12345', '2021-07-21 16:38:35.709539', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=9c0e94b6276d19ee275da9eda094e278&invoi', '::1', ''),
(218, '', 'Made a sale with an invoice no 0092332', '2021-07-21 16:39:04.579060', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=04bcce1b288ff8fb0b170d4e0216ba68&invoice_no=0', '::1', ''),
(219, '', 'Updated Privileges for AdminRole', '2021-07-21 15:04:18.852100', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(220, '', 'Updated Privileges for AdminRole', '2021-07-21 15:04:19.000756', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(221, '', 'Updated Privileges for AdminRole', '2021-07-21 15:04:19.042382', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(222, '', 'Updated Privileges for AdminRole', '2021-07-21 15:04:19.084353', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(223, '', 'Made a purchase with an invoice no 0001', '2021-07-22 06:20:43.833321', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=4e27927eadbfc07705cab300fcdca5dd&invoi', '::1', ''),
(224, '', 'Made a sale with an invoice no 0900900', '2021-07-22 06:21:33.177925', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=23ba25c3d927f1503e1c2b925174197d&invoice_no=0', '::1', ''),
(225, '', 'Made a purchase with an invoice no 44444', '2021-07-22 13:39:26.479177', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=6f8743875f80f948cefc63f64eeb4521&invoi', '::1', ''),
(226, '', 'Added new expense with name Airtime and amount 50', '2021-07-22 15:55:24.329682', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_expenses', '::1', ''),
(227, '', 'Added new expense with name Transport and amount 1000', '2021-07-22 15:56:30.721689', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_expenses', '::1', ''),
(228, '', 'Deleted Expense with Name Airtime', '2021-07-22 16:10:12.350565', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/delete_expense?guidID=ace2affa3fde2d7d7fb794d3d05e80b4', '::1', ''),
(229, '', 'Updated expense with name Transport 4444 and amount 2000.00', '2021-07-22 18:24:25.102795', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_expense?guidID=64b748d0deb8237509f281af8c1b059e', '::1', ''),
(230, '', 'Updated expense with name Transport 4444 and amount 2000.00', '2021-07-22 18:24:58.636203', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_expense?guidID=64b748d0deb8237509f281af8c1b059e', '::1', ''),
(231, '', 'updated a purchase with an invoice no 44444', '2021-07-22 19:22:54.715086', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=6f8743875f80f948cefc63f64eeb4521&invo', '::1', ''),
(232, '', 'updated a purchase with an invoice no 44444', '2021-07-22 19:22:54.875693', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_purchase?purchaseID=6f8743875f80f948cefc63f64eeb4521&invo', '::1', ''),
(233, '', 'Made a purchase with an invoice no 111111', '2021-07-22 19:24:39.034550', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=c731084a3ae61ade48dacccf5355570d&invoi', '::1', ''),
(234, '', 'Updated expense with name Transport and amount 1000.00', '2021-07-22 19:38:16.594630', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/edit_expense?guidID=64b748d0deb8237509f281af8c1b059e', '::1', ''),
(235, '', 'Made a sale with an invoice no 0299290', '2021-07-23 01:56:22.467218', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=7a87e680078feeac2af80c3483c595a7&invoice_no=0', '::1', ''),
(236, '', 'Created new supplier with name  and email ', '2021-07-23 04:26:10.329560', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/change_password', '::1', ''),
(237, '', 'af421f7eeb302c46c8c35eda3adfc59d Updated password ', '2021-07-23 04:28:10.358272', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/change_password', '::1', '');
INSERT INTO `activity_logs` (`id`, `pharmacy_ID`, `activity`, `date`, `user`, `url`, `ip_address`, `branch_ID`) VALUES
(238, '', 'af421f7eeb302c46c8c35eda3adfc59d Updated password ', '2021-07-23 04:28:34.533739', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/change_password', '::1', ''),
(239, '', 'af421f7eeb302c46c8c35eda3adfc59d Updated password ', '2021-07-23 04:29:22.820027', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/change_password', '::1', ''),
(240, '', 'af421f7eeb302c46c8c35eda3adfc59d Updated password ', '2021-07-23 04:29:45.117084', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/change_password', '::1', ''),
(241, '', 'User admin@gmail.com Signed in', '2021-07-23 04:30:12.174147', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(242, '', 'User admin@gmail.com Signed in', '2021-07-23 06:00:26.877055', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(243, '', 'User admin@gmail.com Signed in', '2021-09-02 07:00:40.289077', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(244, '', 'User admin@gmail.com Signed in', '2021-09-03 10:02:36.586702', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(245, '', 'User admin@gmail.com Signed in', '2021-09-03 17:28:16.135460', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(246, '', 'User admin@gmail.com Signed in', '2021-09-04 08:03:35.867986', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(247, '', 'User admin@gmail.com Signed in', '2021-09-06 18:56:44.600971', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(248, '', 'User admin@gmail.com Signed in', '2021-09-24 19:33:46.605249', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(249, '', 'Created new Medicine with name Halaka and short name Halaka', '2021-09-24 19:37:05.480383', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_medicine', '::1', ''),
(250, '', 'User admin@gmail.com Signed in', '2021-10-09 05:46:36.471889', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(251, '', 'User admin@gmail.com Signed in', '2022-02-04 00:17:44.485721', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(252, '', 'User admin@gmail.com Signed in', '2022-02-04 00:35:32.893835', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(253, '', 'Made a sale with an invoice no 9022200', '2022-02-04 00:38:53.039590', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=6cfb835acbf86e56172436301366925f&invoice_no=9', '::1', ''),
(254, '', 'Made a sale with an invoice no 0090090', '2022-02-04 00:41:03.093928', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=16a6bea6b436a852b7b20c607ba5ffdc&invoice_no=0', '::1', ''),
(255, '', 'User admin@gmail.com Signed in', '2022-04-01 10:58:44.958396', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(256, '', 'User admin@gmail.com Signed in', '2022-04-01 11:31:55.234244', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/index.php', '::1', ''),
(257, '', 'Made a sale with an invoice no 0922092', '2022-04-01 11:34:39.358056', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=4b918ba16c66c75bfd019ca308af39de&invoice_no=0', '::1', ''),
(258, '', 'Made a sale with an invoice no 0922092', '2022-04-01 11:34:39.678848', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_sale?salesID=4b918ba16c66c75bfd019ca308af39de&invoice_no=0', '::1', ''),
(259, '', 'Updated Privileges for Credit OfficerRole', '2022-04-01 11:35:36.587178', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(260, '', 'Updated Privileges for Credit OfficerRole', '2022-04-01 11:35:36.693097', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(261, '', 'Updated Privileges for Credit OfficerRole', '2022-04-01 11:35:36.780288', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(262, '', 'Updated Privileges for Credit OfficerRole', '2022-04-01 11:35:36.830790', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(263, '', 'Updated Privileges for Credit OfficerRole', '2022-04-01 11:35:44.466405', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(264, '', 'Updated Privileges for Credit OfficerRole', '2022-04-01 11:35:44.543480', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=49e5dbdf374686b2284b81da6cb09967', '::1', ''),
(265, '', 'Updated Privileges for ClackRole', '2022-04-01 11:36:31.107071', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=e6c1cdfd457d37bfd9f5c5ab2610e82a', '::1', ''),
(266, '', 'Updated Privileges for ClackRole', '2022-04-01 11:36:31.174345', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=e6c1cdfd457d37bfd9f5c5ab2610e82a', '::1', ''),
(267, '', 'Updated Privileges for ClackRole', '2022-04-01 11:37:17.977205', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=e6c1cdfd457d37bfd9f5c5ab2610e82a', '::1', ''),
(268, '', 'Updated Privileges for ClackRole', '2022-04-01 11:37:18.099143', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=e6c1cdfd457d37bfd9f5c5ab2610e82a', '::1', ''),
(269, '', 'Updated Privileges for ClackRole', '2022-04-01 11:37:18.146506', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=e6c1cdfd457d37bfd9f5c5ab2610e82a', '::1', ''),
(270, '', 'Updated Privileges for ClackRole', '2022-04-01 11:37:18.225619', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/privilege?role=e6c1cdfd457d37bfd9f5c5ab2610e82a', '::1', ''),
(271, '', 'Made a purchase with an invoice no 556', '2022-04-01 12:25:45.075097', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=2478a9f7fb064dc8a07c31654d419ecb&invoi', '::1', ''),
(272, '', 'Made a purchase with an invoice no 556', '2022-04-01 12:25:45.224644', 'admin@gmail.com', 'http://localhost/fraka_pharmacy/pages/add_purchase?purchaseID=2478a9f7fb064dc8a07c31654d419ecb&invoi', '::1', ''),
(273, '', 'User admin@gmail.com Signed in', '2022-04-01 14:47:26.013629', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(274, '', 'User admin@gmail.com Signed in', '2022-04-01 15:20:58.690811', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(275, '', 'Created new product with name frakatech and short name fk', '2022-04-01 16:03:08.729367', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(276, '', 'Updated product with name frakatech and short name fk', '2022-04-01 16:03:43.134633', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=e20b914933b0d42279ddac0f93672fc4', '::1', ''),
(277, '', 'Updated product with name frakatech and short name fk', '2022-04-01 16:07:30.860537', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=e20b914933b0d42279ddac0f93672fc4', '::1', ''),
(278, '', 'Updated product with name frakatech and short name fk', '2022-04-01 16:22:26.055857', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=e20b914933b0d42279ddac0f93672fc4', '::1', ''),
(279, '', 'Made a purchase with an invoice no 7778', '2022-04-01 16:28:24.585491', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=5a8c98aecd93e3f7f76ea87fa76266c9&i', '::1', ''),
(280, '', 'Made a purchase with an invoice no 7778', '2022-04-01 16:28:24.745588', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=5a8c98aecd93e3f7f76ea87fa76266c9&i', '::1', ''),
(281, '', 'User admin@gmail.com Signed in', '2022-04-01 15:42:37.730733', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(282, '', 'User admin@gmail.com Signed in', '2022-04-01 15:13:22.369559', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(283, '', 'Deleted Category with Name Injection', '2022-04-01 15:23:10.025166', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/deactivate_category?guidID=97e20dd0c792d6b38b96ad5eec0add2', '::1', ''),
(284, '', 'Deleted Category with Name Cream', '2022-04-01 15:23:18.221504', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/deactivate_category?guidID=2ecf1ea2fcff78f5537537a68ba0608', '::1', ''),
(285, '', 'Deleted Category with Name Capsule', '2022-04-01 15:23:23.922652', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/deactivate_category?guidID=a2283fa91db66b695c8e2cdb7435910', '::1', ''),
(286, '', 'Create a new category with name TV', '2022-04-01 15:23:35.603293', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(287, '', 'Create a new category with name Phone', '2022-04-01 15:24:09.744152', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(288, '', 'Create a new category with name Computers', '2022-04-01 15:24:21.636727', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(289, '', 'Created new product with name HP and short name HP', '2022-04-01 15:26:17.463262', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(290, '', 'Made a purchase with an invoice no 0707', '2022-04-01 15:36:57.374729', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=8cd2538fedcc33a57401683b9cec5f12&i', '::1', ''),
(291, '', 'Made a sale with an invoice no 0299029', '2022-04-01 15:44:14.658052', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=78b6997dd169b360c6d2d1075d83ba1b&invoice_', '::1', ''),
(292, '', 'Created new product with name Phone and short name ph', '2022-04-01 17:28:57.965239', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(293, '', 'Added stock B/F B/F_0001', '2022-04-01 17:28:58.036564', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(294, '', 'Created new product with name Hoofer and short name hf', '2022-04-01 17:34:12.951052', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(295, '', 'Added stock B/F B/F_0001', '2022-04-01 17:34:13.013295', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(296, '', 'Created new product with name Pen and short name pen', '2022-04-01 17:36:10.403514', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(297, '', 'Added stock B/F B/F_0001', '2022-04-01 17:36:10.483539', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(298, '', 'Created new product with name Pen and short name pen', '2022-04-01 17:37:52.257756', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(299, '', 'Added stock B/F B/F_0001', '2022-04-01 17:37:52.288060', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(300, '', 'Made a sale with an invoice no 0030920', '2022-04-01 17:38:36.705478', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=7fd03b7d91c8fcd14005581fe07d68d2&invoice_', '::1', ''),
(301, '', 'User admin@gmail.com Signed in', '2022-04-07 16:08:13.082587', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(302, '', 'User admin@gmail.com Signed in', '2022-04-10 12:00:39.347706', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(303, '', 'Created new Service with name T-Shirt Printing', '2022-04-10 13:40:51.301896', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(304, '', 'User admin@gmail.com Signed in', '2022-04-10 12:05:54.123646', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(305, '', 'Updated Service with name T-Shirt Printing kk', '2022-04-10 12:41:58.838820', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service', '::1', ''),
(306, '', 'Updated Service with name T-Shirt Printing', '2022-04-10 12:44:27.342926', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service?guidID=10bb62b9a19ddd59e7e045376783ee8c', '::1', ''),
(307, '', 'Updated Service with name T-Shirt Printing', '2022-04-10 12:51:45.850771', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service?guidID=10bb62b9a19ddd59e7e045376783ee8c', '::1', ''),
(308, '', 'Updated Service with name T-Shirt Printing kk', '2022-04-10 12:56:37.748880', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service?guidID=10bb62b9a19ddd59e7e045376783ee8c', '::1', ''),
(309, '', 'Created new Service with name Printing', '2022-04-10 13:09:29.705710', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(310, '', 'Deleted Service with Name Printing', '2022-04-10 13:09:48.494856', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service?guidID=0efbbf2bcb49c516b2eaa5e535b35186', '::1', ''),
(311, '', 'Updated Service with name T-Shirt Printing', '2022-04-10 13:10:07.936063', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service?guidID=10bb62b9a19ddd59e7e045376783ee8c', '::1', ''),
(312, '', 'User admin@gmail.com Signed in', '2022-04-12 17:26:43.705183', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(313, '', 'User admin@gmail.com Signed in', '2022-04-12 19:56:10.094741', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(314, '', 'Created Service Sales with id0efbbf2bcb49c516b2eaa5e535b35186', '2022-04-12 20:28:27.507047', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(315, '', 'Created Service Sales with invoice_no9209320', '2022-04-12 21:35:16.087927', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(316, '', 'Created Service Sales with invoice_no2202209', '2022-04-12 21:36:37.681823', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(317, '', 'Created Service Sales details with invoice2202209', '2022-04-12 21:36:37.809123', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(318, '', 'Created Service Sales with invoice_no9999290', '2022-04-12 21:36:54.869415', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(319, '', 'Created Service Sales details with invoice9999290', '2022-04-12 21:36:54.957217', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(320, '', 'Created Service Sales with invoice_no9000290', '2022-04-12 21:38:49.274534', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(321, '', 'Created Service Sales details with invoice9000290', '2022-04-12 21:38:49.363089', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(322, '', 'User admin@gmail.com Signed in', '2022-04-12 20:09:49.636663', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(323, '', 'Created new Service with name Car branding', '2022-04-12 20:12:09.562063', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(324, '', 'Created new Service with name Cup magging', '2022-04-12 20:12:30.897284', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(325, '', 'Created new Service with name Cap printing', '2022-04-12 20:13:19.054225', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(326, '', 'Created Service Sales with invoice_no0090292', '2022-04-12 20:13:37.783490', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(327, '', 'Created Service Sales details with invoice0090292', '2022-04-12 20:13:37.893764', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale', '::1', ''),
(328, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2022-04-12 20:37:25.867369', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(329, '', 'User admin@gmail.com Signed in', '2022-04-12 20:37:39.944233', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(330, '', 'Made a sale with an invoice no 9900329', '2022-04-12 20:42:34.565206', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=fb7104687e67620f0b1bb6026a587faf&invoice_', '::1', ''),
(331, '', 'Made a sale with an invoice no 9900329', '2022-04-12 20:44:39.941800', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=fb7104687e67620f0b1bb6026a587faf&invoice_', '::1', ''),
(332, '', 'Create a new category with name Capsule', '2022-04-12 21:22:01.781268', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(333, '', 'User admin@gmail.com Signed in', '2022-04-14 10:40:17.010380', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(334, '', 'Create a new branch with name Bungoma', '2022-04-14 11:06:08.152956', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/branch', '::1', ''),
(335, '', 'Deleted branch with Name Bungoma', '2022-04-14 11:10:06.705606', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/deactivate_branch?guidID=853515f2901bfb298a3eb063f53a243a', '::1', ''),
(336, '', 'Create a new branch with name Bungoma', '2022-04-14 11:10:17.844775', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/branch', '::1', ''),
(337, '', 'Create a new branch with name Kibabii Uni', '2022-04-14 11:10:36.699767', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/branch', '::1', ''),
(338, '', 'User admin@gmail.com Signed in', '2022-04-14 12:09:12.806202', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(339, '', 'Add new user with name peter and email admin22222@gmail.com', '2022-04-14 12:14:40.560540', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_user', '::1', ''),
(340, '', 'User admin@gmail.com Signed in', '2022-04-14 12:54:56.005931', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(341, '', 'User admin@gmail.com Signed in', '2022-04-14 12:52:29.851470', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(342, '', 'User admin@gmail.com Signed in', '2022-04-14 12:51:44.764200', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(343, '', 'User admin@gmail.com Signed in', '2022-04-14 13:01:51.279936', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(344, '', 'User admin@gmail.com Signed in', '2022-04-15 19:58:33.228386', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(345, '', 'User admin@gmail.com Signed in', '2022-04-16 16:37:49.280896', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(346, '', 'User admin@gmail.com Signed in', '2022-04-17 13:45:02.800261', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(347, '', 'User admin@gmail.com Signed in', '2022-04-17 16:05:52.486478', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(348, '', 'Updated Privileges for SalesRole', '2022-04-17 16:07:23.556058', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(349, '', 'Updated Privileges for SalesRole', '2022-04-17 16:07:23.666570', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(350, '', 'Updated Privileges for SalesRole', '2022-04-17 16:07:23.744620', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(351, '', 'Updated Privileges for SalesRole', '2022-04-17 16:07:23.816249', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(352, '', 'Updated Privileges for Sales3Role', '2022-04-17 16:07:35.609824', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(353, '', 'Updated Privileges for Sales3Role', '2022-04-17 16:07:35.674375', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=130b4fdac9b18dd8556635d9bd5bdee1', '::1', ''),
(354, '', 'Made a purchase with an invoice no 3333', '2022-04-17 17:31:55.959243', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=e817163b882eab44c75c4664d3919c13&i', '::1', ''),
(355, '', 'Created new product with name tshirt and short name ts', '2022-04-17 18:05:20.617401', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(356, '', 'Added stock B/F B/F_0001', '2022-04-17 18:05:20.665634', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(357, '', 'User admin@gmail.com Signed in', '2022-04-17 18:25:38.311915', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(358, '', 'Create a new category with name white', '2022-04-17 19:16:56.694082', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(359, '', 'Create a new category with name black', '2022-04-17 19:17:09.459445', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(360, '', 'Created new product with name Reflector and short name ', '2022-04-17 19:19:29.923065', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(361, '', 'Added stock B/F B/F_0001', '2022-04-17 19:19:29.968262', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(362, '', 'Created new product with name Reflector and short name ', '2022-04-17 19:22:20.318205', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(363, '', 'Added stock B/F B/F_0001', '2022-04-17 19:22:20.392674', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(364, '', 'Created new product with name Cup', '2022-04-17 19:33:04.223829', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(365, '', 'Added stock B/F B/F_0001', '2022-04-17 19:33:04.270225', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(366, '', 'Created new product with name Vest', '2022-04-17 19:33:51.782461', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(367, '', 'Added stock B/F B/F_0001', '2022-04-17 19:33:51.803151', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(368, '', 'User admin@gmail.com Signed in', '2022-04-17 18:25:05.921432', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(369, '', 'User admin@gmail.com Signed in', '2022-04-19 17:34:03.217094', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(370, '', 'Updated product with name Vest', '2022-04-19 17:45:28.600944', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=4ce9c1828458da5749859039ee0dcaff', '::1', ''),
(371, '', 'Updated product with name Vest', '2022-04-19 17:46:29.819134', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=4ce9c1828458da5749859039ee0dcaff', '::1', ''),
(372, '', 'Updated product with name Vest', '2022-04-19 17:47:48.505440', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=4ce9c1828458da5749859039ee0dcaff', '::1', ''),
(373, '', 'Updated product with name Vest', '2022-04-19 17:49:16.900093', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=4ce9c1828458da5749859039ee0dcaff', '::1', ''),
(374, '', 'Updated product with name Vest', '2022-04-19 17:49:43.759024', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=4ce9c1828458da5749859039ee0dcaff', '::1', ''),
(375, '', 'Updated product with name Vest', '2022-04-19 17:58:10.166878', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=4ce9c1828458da5749859039ee0dcaff', '::1', ''),
(376, '', 'Made a purchase with an invoice no 1957', '2022-04-19 18:15:10.686348', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=b9914d9d1e98ca96897121406a4e5cf0&i', '::1', ''),
(377, '', 'Made a purchase with an invoice no 1957', '2022-04-19 18:15:10.902619', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=b9914d9d1e98ca96897121406a4e5cf0&i', '::1', ''),
(378, '', 'User admin@gmail.com Signed in', '2022-04-19 17:59:42.637433', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(379, '', 'Made a sale with an invoice no 0029992', '2022-04-19 18:08:16.458150', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=106f2028c7de26c7cd6549410f5f9a8d&invoice_', '::1', ''),
(380, '', 'Made a sale with an invoice no 9920299', '2022-04-19 18:10:22.908937', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=9b0886f5107dd642a277995750f81086&invoice_', '::1', ''),
(381, '', 'User admin@gmail.com Signed in', '2022-04-19 18:01:40.053473', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(382, '', 'Made a purchase with an invoice no 223333', '2022-04-19 19:34:32.336195', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=99545183f37a8fc7b1a1bc725f856cc8&i', '::1', ''),
(383, '', 'Made a purchase with an invoice no 223333', '2022-04-19 19:36:43.087781', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=99545183f37a8fc7b1a1bc725f856cc8&i', '::1', ''),
(384, '', 'Created new product with name Banner', '2022-04-19 19:46:22.593836', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(385, '', 'Added stock B/F B/F_0001', '2022-04-19 19:46:22.714082', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(386, '', 'Made a sale with an invoice no 9299209', '2022-04-19 19:48:03.155188', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=7279e17ed8560f9854015595d3cd24f4&invoice_', '::1', ''),
(387, '', 'Made a purchase with an invoice no 254', '2022-04-19 19:51:37.746386', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=d3ca809112f4ef95e796c09e8b612d8f&i', '::1', ''),
(388, '', 'Made a sale with an invoice no 9229903', '2022-04-19 20:04:40.199476', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=378a20971d573fab276d55921867bbf1&invoice_', '::1', ''),
(389, '', 'User admin@gmail.com Signed in', '2022-04-19 20:59:12.267223', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(390, '', 'Deleted product with Name Banner', '2022-04-19 21:31:59.426856', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_product?guidID=7991fe522368c5adaebdae5392fce9c2', '::1', ''),
(391, '', 'Created new product with name Banner', '2022-04-19 21:32:58.926819', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(392, '', 'Added stock B/F B/F_0001', '2022-04-19 21:32:58.953731', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(393, '', 'Made a purchase with an invoice no 070719', '2022-04-19 21:35:19.977017', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=c9e2f3897b31f823f10ce2af0fc7059a&i', '::1', ''),
(394, '', 'Made a sale with an invoice no 3990023', '2022-04-19 21:37:11.443177', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a413d281da4c7b66b4f0b5b054f75de7&invoice_', '::1', ''),
(395, '', 'Created new product with name Padlock', '2022-04-19 21:44:01.826647', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(396, '', 'Added stock B/F B/F_0001', '2022-04-19 21:44:01.876537', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(397, '', 'Made a sale with an invoice no 0292999', '2022-04-19 21:46:29.203396', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a8679a5dae606b5fe1bb3715442100e4&invoice_', '::1', ''),
(398, '', 'Made a sale with an invoice no 0923990', '2022-04-19 21:58:45.855826', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=0a88c2441991f406918d14eeaf9e8037&invoice_', '::1', ''),
(399, '', 'Made a sale with an invoice no 0923990', '2022-04-19 21:58:46.037236', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=0a88c2441991f406918d14eeaf9e8037&invoice_', '::1', ''),
(400, '', 'Made a sale with an invoice no 0923990', '2022-04-19 21:58:46.169452', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=0a88c2441991f406918d14eeaf9e8037&invoice_', '::1', ''),
(401, '', 'Made a sale with an invoice no 0000290', '2022-04-19 22:21:30.201823', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=12de8364e1bbfc0bffc5be4c83bdc931&invoice_', '::1', ''),
(402, '', 'Made a sale with an invoice no 0000290', '2022-04-19 22:21:30.441653', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=12de8364e1bbfc0bffc5be4c83bdc931&invoice_', '::1', ''),
(403, '', 'User admin@gmail.com Signed in', '2022-04-19 20:47:19.702233', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(404, '', 'User admin@gmail.com Signed in', '2022-04-19 20:45:05.036393', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(405, '', 'User admin@gmail.com Signed in', '2022-04-19 22:13:05.183084', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(406, '', 'User admin@gmail.com Signed in', '2022-04-19 22:23:55.046260', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(407, '', 'User admin@gmail.com Signed in', '2022-04-19 22:44:29.223048', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(408, '', 'User admin@gmail.com Signed in', '2022-04-19 22:47:14.241646', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(409, '', 'Updated Privileges for SalesRole', '2022-04-19 23:08:32.508965', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(410, '', 'Updated Privileges for SalesRole', '2022-04-19 23:08:32.627518', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(411, '', 'Updated Privileges for SalesRole', '2022-04-19 23:08:32.674386', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=c11cf682e3567921d82fa8c1d710c8a0', '::1', ''),
(412, '', 'User admin@gmail.com Signed in', '2022-04-19 22:51:54.151155', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(413, '', 'User admin@gmail.com Signed in', '2022-04-19 22:56:44.128812', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(414, '', 'User admin@gmail.com Signed in', '2022-04-19 22:59:15.544373', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(415, '', 'User admin@gmail.com Signed in', '2022-04-19 23:00:14.038125', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(416, '', 'User admin@gmail.com Signed in', '2022-04-19 23:01:03.296719', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(417, '', 'User admin@gmail.com Signed in', '2022-04-19 23:02:58.870004', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(418, '', 'User admin@gmail.com Signed in', '2022-04-19 23:04:35.314136', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(419, '', 'User admin@gmail.com Signed in', '2022-04-19 23:05:26.192049', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(420, '', 'User admin@gmail.com Signed in', '2022-04-19 23:06:25.503028', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(421, '', 'User admin@gmail.com Signed in', '2022-04-19 23:07:22.876715', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(422, '', 'Updated user Details for francis james kihiko  with Email admin@gmail.com', '2022-04-19 23:12:38.451544', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_user?guidID=af421f7eeb302c46c8c35eda3adfc59d', '::1', ''),
(423, '', 'User admin@gmail.com Signed in', '2022-04-19 23:13:19.081254', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(424, '', 'Updated Privileges for AdminRole', '2022-04-19 23:15:40.690693', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(425, '', 'Updated Privileges for AdminRole', '2022-04-19 23:15:40.830400', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(426, '', 'Updated Privileges for AdminRole', '2022-04-19 23:15:40.914646', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(427, '', 'Updated Privileges for AdminRole', '2022-04-19 23:15:40.974369', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(428, '', 'Updated Privileges for AdminRole', '2022-04-19 23:15:41.032480', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(429, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:12.640335', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(430, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:12.835533', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(431, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:12.980017', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(432, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.029944', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(433, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.096660', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(434, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.187212', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(435, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.264773', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(436, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.314909', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(437, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.398045', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(438, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.447992', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(439, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.497941', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(440, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.547839', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(441, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.597828', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(442, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.663221', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(443, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.747727', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(444, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.797664', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(445, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.878174', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(446, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.928128', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(447, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:13.978064', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(448, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:14.027999', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(449, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:14.077984', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(450, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:14.127870', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(451, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:14.205422', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(452, '', 'Updated Privileges for AdminRole', '2022-04-19 23:37:14.313962', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(453, '', 'User admin@gmail.com Signed in', '2022-04-28 13:25:47.993793', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(454, '', 'User admin@gmail.com Signed in', '2022-04-28 13:36:00.063674', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(455, '', 'User admin@gmail.com Signed in', '2022-04-28 13:23:37.953954', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(456, '', 'User admin@gmail.com Signed in', '2022-05-03 11:38:56.218551', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(457, '', 'User admin@gmail.com Signed in', '2022-05-03 11:55:44.784595', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(458, '', 'User admin@gmail.com Signed in', '2022-05-03 11:49:45.989776', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(459, '', 'User admin@gmail.com Signed in', '2022-05-04 17:09:02.447941', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(460, '', 'Made a sale with an invoice no 2030200', '2022-05-04 17:10:44.906414', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=5919b6ebdcfd7481c80b6a0d5c92ff03&invoice_', '::1', ''),
(461, '', 'User admin@gmail.com Signed in', '2022-05-04 17:20:28.670117', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(462, '', 'Made a sale with an invoice no 0009090', '2022-05-04 21:09:05.736798', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=efab1404d641ee3ac466ecc1cde308a4&invoice_', '::1', ''),
(463, '', 'Made a sale with an invoice no 0009090', '2022-05-04 21:09:05.989367', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=efab1404d641ee3ac466ecc1cde308a4&invoice_', '::1', ''),
(464, '', 'User admin@gmail.com Signed in', '2022-05-04 22:15:46.218265', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(465, '', 'Updated expense with name Transport and amount 2000.00', '2022-05-04 22:32:04.846252', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_expense?guidID=64b748d0deb8237509f281af8c1b059e', '::1', ''),
(466, '', 'User admin@gmail.com Signed in', '2022-05-04 22:25:27.566490', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(467, '', 'User admin@gmail.com Signed in', '2022-05-07 10:21:34.541176', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(468, '', 'User admin@gmail.com Signed in', '2022-05-07 10:34:29.256281', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(469, '', 'User admin@gmail.com Signed in', '2022-05-07 10:42:06.922083', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(470, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.098675', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(471, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.161177', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(472, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.227829', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(473, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.291780', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(474, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.336085', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(475, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.406451', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(476, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.464946', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(477, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.506524', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(478, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.573172', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(479, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.614781', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(480, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.656471', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(481, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.697979', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(482, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.739712', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(483, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.781402', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(484, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.823042', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(485, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.893801', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(486, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.957849', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(487, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:13.999609', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(488, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:14.057882', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(489, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:14.099403', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(490, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:14.141154', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(491, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:14.207959', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(492, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:14.264722', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(493, '', 'Updated Privileges for AdminRole', '2022-05-07 10:44:14.373919', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(494, '', 'Created new supplier with name Ribbon Tshirts and email info@rebbontshirt.com', '2022-05-07 10:54:04.661009', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_supplier', '::1', ''),
(495, '', 'Created new supplier with name Amadi Suppliers and email amadi@gmail.com', '2022-05-07 10:55:15.110950', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_supplier', '::1', ''),
(496, '', 'Created new supplier with name Juventa Wares and email info@juventa.co.ke', '2022-05-07 10:56:56.665912', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_supplier', '::1', ''),
(497, '', 'Create a new category with name Black', '2022-05-07 10:57:23.879736', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(498, '', 'Create a new category with name White', '2022-05-07 10:57:33.208476', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(499, '', 'Create a new category with name Red', '2022-05-07 10:57:43.598825', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(500, '', 'Created new product with name Tshirt', '2022-05-07 11:00:33.256689', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(501, '', 'Added stock B/F B/F_0001', '2022-05-07 11:00:33.277866', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(502, '', 'Created new product with name Cap', '2022-05-07 11:01:34.452291', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(503, '', 'Added stock B/F B/F_0001', '2022-05-07 11:01:34.521571', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(504, '', 'Created new product with name Cap', '2022-05-07 11:02:09.443038', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(505, '', 'Added stock B/F B/F_0001', '2022-05-07 11:02:09.468529', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(506, '', 'Deleted product with Name Cap', '2022-05-07 11:04:04.774878', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_product?guidID=a7aaa85138c3f0b0ac233457a4d93a02', '::1', ''),
(507, '', 'Updated product with name Cap', '2022-05-07 11:05:04.068309', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=15569bb9ce83c7e909a0805012ed2ea2', '::1', ''),
(508, '', 'Created new product with name Refrector', '2022-05-07 11:07:50.656255', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(509, '', 'Added stock B/F B/F_0001', '2022-05-07 11:07:50.678197', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(510, '', 'Created new product with name Cups', '2022-05-07 11:10:18.159211', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(511, '', 'Added stock B/F B/F_0001', '2022-05-07 11:10:18.205676', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', '');
INSERT INTO `activity_logs` (`id`, `pharmacy_ID`, `activity`, `date`, `user`, `url`, `ip_address`, `branch_ID`) VALUES
(512, '', 'Updated product with name Caps', '2022-05-07 11:11:35.955587', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=15569bb9ce83c7e909a0805012ed2ea2', '::1', ''),
(513, '', 'Updated product with name Mugs', '2022-05-07 11:11:55.456413', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_product?guidID=62e4dbd8a8ca1163c9d257e78a5550d2', '::1', ''),
(514, '', 'Created new product with name Wrist Bands', '2022-05-07 11:13:01.858810', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(515, '', 'Added stock B/F B/F_0001', '2022-05-07 11:13:01.905038', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(516, '', 'Created new product with name Water bottle', '2022-05-07 11:13:58.655569', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(517, '', 'Added stock B/F B/F_0001', '2022-05-07 11:13:58.708940', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(518, '', 'Created new product with name Pens', '2022-05-07 11:15:36.056003', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(519, '', 'Added stock B/F B/F_0001', '2022-05-07 11:15:36.101158', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(520, '', 'Made a sale with an invoice no 0920303', '2022-05-07 11:16:44.881094', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=c4151a77c5cb6775296c081f6805e553&invoice_', '::1', ''),
(521, '', 'Made a purchase with an invoice no 575868', '2022-05-07 11:27:38.884440', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=161a13402e5d6634dd13c5f1eeaad36c&i', '::1', ''),
(522, '', 'Deleted Purchase with Invoice no B/F_0001', '2022-05-07 11:29:50.553827', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_purchase?guidID=f3fae10804e2599fdc63ad7a04eb6b2c', '::1', ''),
(523, '', 'Deleted Purchase with Invoice no B/F_0001', '2022-05-07 11:29:56.053768', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_purchase?guidID=e1e3e54c6585128d06e3a7e44ab1c2f8', '::1', ''),
(524, '', 'Added new expense with name Fuel Expenses and amount 1500', '2022-05-07 11:44:03.344165', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_expenses', '::1', ''),
(525, '', 'Made a sale with an invoice no 9020090', '2022-05-07 11:44:50.836082', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=28525bc9abebb3d414bb58481453a67b&invoice_', '::1', ''),
(526, '', 'Created new customer with name Francis Kihiko and email kihiko2014@gmail.com', '2022-05-07 12:07:24.777836', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_customer', '::1', ''),
(527, '', 'Made a sale with an invoice no 2200209', '2022-05-07 12:15:55.546729', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=7331f2faec99c69a36fed00ce31cac22&invoice_', '::1', ''),
(528, '', 'Activated User with Name francis james kihiko', '2022-05-07 12:21:20.659858', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_user?guidID=029b6bbb066d221c5d2c5796c776f754', '::1', ''),
(529, '', 'Activated User with Name francis james kihiko', '2022-05-07 12:21:27.562395', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_user?guidID=029b6bbb066d221c5d2c5796c776f754', '::1', ''),
(530, '', 'Activated User with Name francis james kihiko', '2022-05-07 12:21:33.503277', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_user?guidID=029b6bbb066d221c5d2c5796c776f754', '::1', ''),
(531, '', 'User admin@gmail.com Signed in', '2022-05-07 13:04:35.649500', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(532, '', 'User admin@gmail.com Signed in', '2022-05-07 14:01:22.431210', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(533, '', 'Update company profile ', '2022-05-07 14:01:45.566967', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/settings', '::1', ''),
(534, '', 'Update company profile ', '2022-05-07 14:02:27.393812', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/settings', '::1', ''),
(535, '', 'User admin@gmail.com Signed in', '2022-05-07 14:23:32.899848', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(536, '', 'User admin@gmail.com Signed in', '2022-05-15 18:32:59.519929', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(537, '', 'Created new service with name Cyber services', '2022-05-15 20:16:29.570241', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(538, '', 'Updated Service with name Cyber servicesll', '2022-05-15 21:10:27.835236', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service?guidID=63714ffa144db3e2105b15b19463c07c', '::1', ''),
(539, '', 'Updated Service with name Cyber services', '2022-05-15 21:14:07.125740', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service?guidID=63714ffa144db3e2105b15b19463c07c', '::1', ''),
(540, '', 'Deleted Service with Name Car branding', '2022-05-15 21:14:17.547531', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service?guidID=348d0e63e3d74dead4c1bc122cb5bb33', '::1', ''),
(541, '', 'Created new product with name testing', '2022-05-15 21:22:51.854586', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(542, '', 'Added stock B/F B/F_0001', '2022-05-15 21:22:51.911443', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(543, '', 'User admin@gmail.com Signed in', '2022-05-18 16:24:23.380234', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(544, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:40:43.142374', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(545, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:40:43.208567', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(546, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:43:55.561082', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(547, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:43:55.625688', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(548, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:43:58.846736', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(549, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:43:58.938972', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(550, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:44:32.232926', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(551, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:44:32.264729', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(552, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:44:56.771650', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(553, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:44:56.791077', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(554, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:45:20.873567', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(555, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:45:20.944903', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(556, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:52:53.522549', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(557, '', 'Made a Service sale with an invoice no 3033929', '2022-05-18 23:52:53.716475', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(558, '', 'Made a Service sale with an invoice no 2092999', '2022-05-18 23:56:11.943494', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=4efd6d41318b43969b08a4098f99c7e1&', '::1', ''),
(559, '', 'Made a Service sale with an invoice no 3900292', '2022-05-19 00:06:46.449827', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817&', '::1', ''),
(560, '', 'Made a Service sale with an invoice no 3900292', '2022-05-19 00:06:46.683279', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817&', '::1', ''),
(561, '', 'Made a Service sale with an invoice no 3033929', '2022-05-19 00:34:40.989336', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(562, '', 'Made a Service sale with an invoice no 3033929', '2022-05-19 00:34:41.220744', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=15ebd00ee71c4826dd5dfb3b8cfe10d2&', '::1', ''),
(563, '', 'Updated a sale with an invoice no 3900292', '2022-05-19 02:37:53.880471', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_sale?salesID=732a7af522e1fc7a29b05616f13f7817&invoice', '::1', ''),
(564, '', 'Updated a service sale with an invoice no 3900292', '2022-05-19 03:05:17.540893', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(565, '', 'Made a Service sale with an invoice no 3900292', '2022-05-19 03:05:17.848660', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(566, '', 'Made a Service sale with an invoice no 3900292', '2022-05-19 03:05:18.036542', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(567, '', 'Made a Service sale with an invoice no 3900292', '2022-05-19 03:05:18.125928', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(568, '', 'Made a Service sale with an invoice no 3900292', '2022-05-19 03:05:18.167555', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(569, '', 'Updated a service sale with an invoice no 2932003', '2022-05-19 03:12:05.903053', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(570, '', 'Made a Service sale with an invoice no 2932003', '2022-05-19 03:12:06.064682', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(571, '', 'Made a Service sale with an invoice no 2932003', '2022-05-19 03:12:06.187770', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(572, '', 'Updated a service sale with an invoice no 0902030', '2022-05-19 03:14:02.224940', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(573, '', 'Made a Service sale with an invoice no 0902030', '2022-05-19 03:14:02.384147', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=732a7af522e1fc7a29b05616f13f7817', '::1', ''),
(574, '', 'Made a Service sale with an invoice no 0003220', '2022-05-19 03:24:16.700257', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=171c9fc0f27e3cdf8208f9a76e093cd3&', '::1', ''),
(575, '', 'Made a Service sale with an invoice no 0003220', '2022-05-19 03:24:16.833244', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=171c9fc0f27e3cdf8208f9a76e093cd3&', '::1', ''),
(576, '', 'Updated a service sale with an invoice no 9900299', '2022-05-19 03:25:42.642276', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=171c9fc0f27e3cdf8208f9a76e093cd3', '::1', ''),
(577, '', 'Made a Service sale with an invoice no 9900299', '2022-05-19 03:25:42.824042', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=171c9fc0f27e3cdf8208f9a76e093cd3', '::1', ''),
(578, '', 'Made a Service sale with an invoice no 9900299', '2022-05-19 03:25:42.955919', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=171c9fc0f27e3cdf8208f9a76e093cd3', '::1', ''),
(579, '', 'Made a Service sale with an invoice no 2300909', '2022-05-19 03:27:11.793189', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446&', '::1', ''),
(580, '', 'Made a Service sale with an invoice no 2300909', '2022-05-19 03:27:11.952677', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446&', '::1', ''),
(581, '', 'Updated a service sale with an invoice no 0009220', '2022-05-19 03:28:00.019448', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(582, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:28:00.256569', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(583, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:28:00.374583', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(584, '', 'Updated a service sale with an invoice no 0009220', '2022-05-19 03:29:29.090256', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(585, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:29:29.235446', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(586, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:29:29.354321', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(587, '', 'Updated a service sale with an invoice no 0009220', '2022-05-19 03:29:51.667197', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(588, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:29:51.816365', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(589, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:29:52.045237', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(590, '', 'Updated a service sale with an invoice no 0009220', '2022-05-19 03:31:28.929982', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(591, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:31:29.127071', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(592, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:31:29.239084', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(593, '', 'Updated a service sale with an invoice no 0009220', '2022-05-19 03:33:16.973755', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(594, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:33:17.117915', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(595, '', 'Made a Service sale with an invoice no 0009220', '2022-05-19 03:33:17.292947', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=63b224ee7e0ef7c9c0239ad36424c446', '::1', ''),
(596, '', 'Deleted sale with Invoice no 3900292', '2022-05-19 04:07:58.642479', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=732a7af522e1fc7a29b05616f13f781', '::1', ''),
(597, '', 'Deleted sale with Invoice no 3033929', '2022-05-19 04:08:13.692308', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=15ebd00ee71c4826dd5dfb3b8cfe10d', '::1', ''),
(598, '', 'Deleted sale with Invoice no 0003220', '2022-05-19 04:08:25.908892', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=171c9fc0f27e3cdf8208f9a76e093cd', '::1', ''),
(599, '', 'Deleted sale with Invoice no 2300909', '2022-05-19 04:08:43.474138', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=63b224ee7e0ef7c9c0239ad36424c44', '::1', ''),
(600, '', 'Made a Service sale with an invoice no 0000090', '2022-05-19 04:09:22.717117', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=84a69ecee6ae9e0a57d8c86b7701bd92&', '::1', ''),
(601, '', 'Made a Service sale with an invoice no 0000090', '2022-05-19 04:09:22.873479', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=84a69ecee6ae9e0a57d8c86b7701bd92&', '::1', ''),
(602, '', 'Updated a service sale with an invoice no 3309239', '2022-05-19 04:10:10.442097', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=84a69ecee6ae9e0a57d8c86b7701bd92', '::1', ''),
(603, '', 'Made a Service sale with an invoice no 3309239', '2022-05-19 04:10:10.540330', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=84a69ecee6ae9e0a57d8c86b7701bd92', '::1', ''),
(604, '', 'Made a Service sale with an invoice no 3309239', '2022-05-19 04:10:10.651454', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=84a69ecee6ae9e0a57d8c86b7701bd92', '::1', ''),
(605, '', 'Made a Service sale with an invoice no 0032022', '2022-05-19 04:15:46.261671', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=a249c3e736b316963e0748d5c9fa10f2&', '::1', ''),
(606, '', 'Made a Service sale with an invoice no 0032022', '2022-05-19 04:15:46.345104', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=a249c3e736b316963e0748d5c9fa10f2&', '::1', ''),
(607, '', 'Updated a service sale with an invoice no 0392220', '2022-05-19 04:16:56.592661', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=a249c3e736b316963e0748d5c9fa10f2', '::1', ''),
(608, '', 'Made a Service sale with an invoice no 0392220', '2022-05-19 04:16:56.782089', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=a249c3e736b316963e0748d5c9fa10f2', '::1', ''),
(609, '', 'Made a Service sale with an invoice no 0392220', '2022-05-19 04:16:56.976113', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=a249c3e736b316963e0748d5c9fa10f2', '::1', ''),
(610, '', 'Made a Service sale with an invoice no 9090909', '2022-05-19 04:20:30.124347', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=4cbb0c062abaf28afed220c369e6e7a3&', '::1', ''),
(611, '', 'Made a Service sale with an invoice no 9090909', '2022-05-19 04:20:30.303657', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=4cbb0c062abaf28afed220c369e6e7a3&', '::1', ''),
(612, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:34:05.472637', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3&', '::1', ''),
(613, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:34:05.605765', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3&', '::1', ''),
(614, '', 'Updated a service sale with an invoice no 9900002', '2022-05-19 05:35:55.387467', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(615, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:35:55.592091', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(616, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:35:55.759658', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(617, '', 'Updated a service sale with an invoice no 9900002', '2022-05-19 05:53:32.307356', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(618, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:53:32.490046', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(619, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:53:32.667846', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(620, '', 'Updated a service sale with an invoice no 9900002', '2022-05-19 05:53:55.809960', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(621, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:53:55.891249', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(622, '', 'Made a Service sale with an invoice no 9900002', '2022-05-19 05:53:56.038919', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=56486e016de49ba24c79d4fb2c412ec3', '::1', ''),
(623, '', 'Deleted sale with Invoice no 0000090', '2022-05-19 07:53:42.674379', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=84a69ecee6ae9e0a57d8c86b7701bd9', '::1', ''),
(624, '', 'Deleted sale with Invoice no 0032022', '2022-05-19 07:53:48.734749', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=a249c3e736b316963e0748d5c9fa10f', '::1', ''),
(625, '', 'Deleted sale with Invoice no 9090909', '2022-05-19 07:53:53.163192', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=4cbb0c062abaf28afed220c369e6e7a', '::1', ''),
(626, '', 'Deleted sale with Invoice no 9900002', '2022-05-19 07:53:59.756331', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/delete_service_sale?guidID=56486e016de49ba24c79d4fb2c412ec', '::1', ''),
(627, '', 'Made a Service sale with an invoice no 0009000', '2022-05-19 07:55:05.868502', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=ff11c1b051e5ce60c07f169b19b4ae84&', '::1', ''),
(628, '', 'Made a Service sale with an invoice no 0009000', '2022-05-19 07:55:06.001673', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=ff11c1b051e5ce60c07f169b19b4ae84&', '::1', ''),
(629, '', 'Made a Service sale with an invoice no 2200902', '2022-05-21 09:24:48.699003', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=7b4aa91a9a730368a4baaf385f6062db&', '::1', ''),
(630, '', 'Made a sale with an invoice no 2093399', '2022-05-21 09:29:52.315004', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=d5075b6a97a9b435505c29448c383005&invoice_', '::1', ''),
(631, '', 'User admin@gmail.com Signed in', '2022-05-22 09:59:50.708940', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(632, '', 'Create a new category with name 0-50', '2022-05-22 12:34:24.600787', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/category', '::1', ''),
(633, '', 'Created new product with name Tshirt', '2022-05-22 12:35:10.221215', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(634, '', 'Added stock B/F B/F_0001', '2022-05-22 12:35:10.274509', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_product', '::1', ''),
(635, '', 'Made a Service sale with an invoice no 0299909', '2022-05-22 13:36:44.490597', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=2133950bf014db4dbe7acf57293a08d1&', '::1', ''),
(636, '', 'Made a Service sale with an invoice no 0993003', '2022-05-22 14:00:32.467235', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=4cc88c954464cabd34fa944a403f38f3&', '::1', ''),
(637, '', 'Created new customer with name Hannah  and email admin234@gmail.com', '2022-05-22 21:16:12.577962', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_customer', '::1', ''),
(638, '', 'Updated customer with name Hannah  and email admin234@gmail.com', '2022-05-22 21:19:31.172171', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_customer?guidID=bf91e6007474cddff744d3b629813b2c', '::1', ''),
(639, '', 'Created new customer with name FRANCIS KIHIKO KARONGO and email kihiko2014@gmail.com', '2022-05-22 21:20:17.741001', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_customer', '::1', ''),
(640, '', 'Created new order with title t shirt printing', '2022-05-22 22:54:17.607418', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(641, '', 'updated  order with title t shirt printing', '2022-05-23 00:05:59.094321', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(642, '', 'updated  order with title t shirt printing', '2022-05-23 00:07:56.239492', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(643, '', 'updated  order with title t shirt printing', '2022-05-23 00:09:13.829130', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(644, '', 'updated  order with title t shirt printing', '2022-05-23 00:10:33.308750', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(645, '', 'updated  order with title t shirt printing', '2022-05-23 00:10:44.975636', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(646, '', 'updated  order with title t shirt printing', '2022-05-23 00:13:08.687655', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(647, '', 'updated  order with title t shirt printing', '2022-05-23 00:27:25.012137', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(648, '', 'updated  order with title t shirt printing', '2022-05-23 00:28:10.479182', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(649, '', 'updated  order with title t shirt printing', '2022-05-23 00:30:02.984554', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=72d94c63854d261572573bdbafa1da0f', '::1', ''),
(650, '', 'Created new order with title Reflector branding', '2022-05-23 00:58:37.384305', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(651, '', 'Created new order with title Car Branding', '2022-05-23 00:59:09.241014', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(652, '', 'Created new order with title Mag branding', '2022-05-23 01:00:40.133228', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(653, '', 'updated  order with title Car Branding', '2022-05-23 01:00:58.097413', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=cac55927d49e7a9c82549d69109fb783', '::1', ''),
(654, '', 'updated  order with title Reflector branding', '2022-05-23 01:01:11.699471', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=67fa5ca5553e02dc451d955336e2643c', '::1', ''),
(655, '', 'Made a Service sale with an invoice no 2022090', '2022-05-25 10:28:54.832052', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=8b138c22cc27f22a771cfedbdaccceca&', '::1', ''),
(656, '', 'updated  order with title Car Branding', '2022-05-25 10:31:12.148838', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=cac55927d49e7a9c82549d69109fb783', '::1', ''),
(657, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.012325', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(658, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.151893', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(659, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.193294', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(660, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.286798', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(661, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.328328', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(662, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.369948', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(663, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.434759', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(664, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.494789', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(665, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.568122', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(666, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.618429', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(667, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.676933', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(668, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.851519', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(669, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:53.927849', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(670, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.017769', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(671, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.092837', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(672, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.184388', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(673, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.310798', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(674, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.367020', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(675, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.416961', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(676, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.466928', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(677, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.516883', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(678, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.566972', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(679, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.616821', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(680, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.666830', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(681, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.735742', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(682, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.825252', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(683, '', 'Updated Privileges for AdminRole', '2022-05-25 10:38:54.884983', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(684, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.264005', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(685, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.341609', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(686, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.383056', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(687, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.449703', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(688, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.491329', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(689, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.532971', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(690, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.607629', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(691, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.649317', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(692, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.690947', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(693, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.732580', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(694, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.774436', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(695, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.916003', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(696, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:53.997946', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(697, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.047522', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(698, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.097388', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(699, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.155959', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(700, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.213908', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(701, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.307137', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(702, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.348714', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(703, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.390589', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(704, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.432017', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(705, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.540242', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(706, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.606333', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(707, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.646971', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(708, '', 'Updated Privileges for AdminRole', '2022-05-25 12:24:54.688612', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(709, '', 'Made a sale with an invoice no 0930900', '2022-05-25 14:18:10.650567', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=107f324ea5dd5bc87e0bf3200cf39659&invoice_', '::1', ''),
(710, '', 'Made a sale with an invoice no 2920900', '2022-05-25 15:34:57.683261', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=ec512b71e4681c48b0d2dbee7397e562&invoice_', '::1', ''),
(711, '', 'Made a sale with an invoice no 2920900', '2022-05-25 15:34:58.006743', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=ec512b71e4681c48b0d2dbee7397e562&invoice_', '::1', ''),
(712, '', 'Made a Service sale with an invoice no 9090329', '2022-05-25 15:54:32.484114', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=bdaea215a53b9ff3fb19ecf2cdbd1fdb&', '::1', ''),
(713, '', 'Made a Service sale with an invoice no 9090329', '2022-05-25 15:54:32.619608', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=bdaea215a53b9ff3fb19ecf2cdbd1fdb&', '::1', ''),
(714, '', 'Added new expense with name 500 and amount fuel bill', '2022-05-25 16:32:51.564498', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_expenses', '::1', ''),
(715, '', 'Added new expense with name fuel bill and amount 500', '2022-05-25 16:35:59.046686', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_expenses', '::1', ''),
(716, '', 'Created new customer with name james and email kihiko2013@gmail.com', '2022-05-30 12:02:25.627701', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_customer', '::1', ''),
(717, '', 'Created new customer with name peter mwangi and email kihiko2014ffgg@gmail.com', '2022-05-30 13:02:20.196774', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_customer', '::1', ''),
(718, '', 'Created new customer with name mercy njeri and email kihiko2016774@gmail.com', '2022-05-30 13:03:22.738061', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_customer', '::1', ''),
(719, '', 'User admin@gmail.com Signed in', '2022-06-06 08:48:28.231058', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(720, '', 'Made a purchase with an invoice no 3138833', '2022-06-06 11:49:40.595655', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=f6947f6c60f8a09eacc8dce762002d36&i', '::1', ''),
(721, '', 'Made a sale with an invoice no 2300939', '2022-06-06 11:52:01.080810', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=3acfe05b5ef0c23f35a9e7bd78153b58&invoice_', '::1', ''),
(722, '', 'Made a purchase with an invoice no 2337489', '2022-06-07 09:53:33.048845', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=1265ac965eb0a622e75b0e987eacfb78&i', '::1', ''),
(723, '', 'Made a purchase with an invoice no 1851528', '2022-06-07 10:12:06.757132', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=d098b3c74976ba3bcfc89e5baeb5782a&i', '::1', ''),
(724, '', 'Made a sale with an invoice no 9390000', '2022-06-07 10:14:18.725500', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=c6183965c7ca4964c42cc2d2968edb66&invoice_', '::1', ''),
(725, '', 'Made a sale with an invoice no 9092290', '2022-06-07 10:50:17.003329', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=e8dd62d5f8f8abb6de264cd9da6c4cf4&invoice_', '::1', ''),
(726, '', 'Made a sale with an invoice no 0990039', '2022-06-07 10:53:15.830575', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=ffdef04a814c21fc7de72d840486efd7&invoice_', '::1', ''),
(727, '', 'Updated a sale with an invoice no 0990039', '2022-06-07 10:53:56.874834', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_sale?salesID=ffdef04a814c21fc7de72d840486efd7&invoice', '::1', ''),
(728, '', 'Updated a sale with an invoice no 0990039', '2022-06-07 11:10:10.762116', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_sale?salesID=ffdef04a814c21fc7de72d840486efd7&invoice', '::1', ''),
(729, '', 'Updated a sale with an invoice no 0990039', '2022-06-07 11:12:52.319322', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_sale?salesID=ffdef04a814c21fc7de72d840486efd7&invoice', '::1', ''),
(730, '', 'Made a Service sale with an invoice no 2000900', '2022-06-07 11:18:57.709395', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=c31f361b019e2237591e2ec8ba58dd57&', '::1', ''),
(731, '', 'Made a Service sale with an invoice no 0999009', '2022-06-07 11:23:44.400951', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada&', '::1', ''),
(732, '', 'Updated a service sale with an invoice no 0999009', '2022-06-07 11:38:49.406649', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada', '::1', ''),
(733, '', 'Made a Service sale with an invoice no 0999009', '2022-06-07 11:38:49.496669', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada', '::1', ''),
(734, '', 'Made a Service sale with an invoice no 0999009', '2022-06-07 11:38:49.619587', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada', '::1', ''),
(735, '', 'Updated a service sale with an invoice no 0999009', '2022-06-07 11:39:16.480690', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada', '::1', ''),
(736, '', 'Made a Service sale with an invoice no 0999009', '2022-06-07 11:39:16.654241', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada', '::1', ''),
(737, '', 'Made a Service sale with an invoice no 0999009', '2022-06-07 11:39:16.798680', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=8ff91e8aba929a4fb0be4aeb70272ada', '::1', ''),
(738, '', 'Created new order with title t shirt printing', '2022-06-08 10:17:11.008527', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(739, '', 'Created new order with title Reflector branding', '2022-06-08 10:20:25.939128', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(740, '', 'Created new order with title Reflector branding', '2022-06-08 10:21:56.146832', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(741, '', 'Created new order with title Reflector branding', '2022-06-08 10:25:11.435808', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(742, '', 'Created new order with title Reflector branding', '2022-06-08 10:32:29.698621', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(743, '', 'Created new order with title Reflector branding', '2022-06-08 10:33:28.732924', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(744, '', 'Created new order with title Reflector branding', '2022-06-08 10:34:03.210195', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(745, '', 'Created new order with title Car Branding', '2022-06-08 10:35:02.457693', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(746, '', 'Created new order with title Mag branding', '2022-06-08 10:35:28.082347', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(747, '', 'Created new order with title Mag branding', '2022-06-08 10:36:13.202995', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(748, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.041984', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(749, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.168775', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(750, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.300710', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(751, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.342152', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(752, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.383994', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(753, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.433730', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', '');
INSERT INTO `activity_logs` (`id`, `pharmacy_ID`, `activity`, `date`, `user`, `url`, `ip_address`, `branch_ID`) VALUES
(754, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.483655', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(755, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.550292', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(756, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.666606', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(757, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:47.923442', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(758, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.036711', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(759, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.106361', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(760, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.169861', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(761, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.236622', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(762, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.306791', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(763, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.378250', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(764, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.449373', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(765, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.525862', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(766, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.602791', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(767, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.661551', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(768, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.749910', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(769, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.827686', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(770, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.902398', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(771, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:48.960847', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(772, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:49.035514', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(773, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:49.105142', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(774, '', 'Updated Privileges for AdminRole', '2022-06-08 11:07:49.146783', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/privilege?role=dde21c6714ff616af91720940eba7458', '::1', ''),
(775, '', 'updated  order with title Mag branding', '2022-06-08 11:37:13.539799', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(776, '', 'updated  order with title Mag branding', '2022-06-08 11:37:47.281812', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(777, '', 'updated  order with title Mag branding', '2022-06-08 11:38:36.365396', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(778, '', 'updated  order with title Mag branding', '2022-06-08 11:38:48.774474', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(779, '', 'updated  order with title Mag branding', '2022-06-08 15:06:40.303151', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(780, '', 'updated  order with title Mag branding', '2022-06-08 15:07:03.019856', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(781, '', 'Updated customer with name FRANCIS KIHIKO KARONGO and email kihiko2014@gmail.com', '2022-06-08 15:28:41.430093', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_customer?guidID=40a3fa424d9069fff95ab8c078e3f983', '::1', ''),
(782, '', 'Created new order with title Mag branding', '2022-06-08 16:04:16.954989', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(783, '', 'Created new order with title t shirt printing', '2022-06-08 16:05:33.009362', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_order', '::1', ''),
(784, '', 'updated  order with title t shirt printing', '2022-06-08 16:09:45.162268', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=3decd9aa55fbbe196e050f6df5d1f2e8', '::1', ''),
(785, '', 'updated  order with title Mag branding', '2022-06-08 16:58:01.396835', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=10fbae8e5368270122f06ab0febe652c', '::1', ''),
(786, '', 'Made a sale with an invoice no 9920000', '2022-06-08 17:00:15.013925', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=40b2f2cd7ee79445c10e200b5ce839f1&invoice_', '::1', ''),
(787, '', 'Made a sale with an invoice no 2023020', '2022-06-08 17:04:59.237677', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=2b2357ebfa7084b0826e19d4108d046d&invoice_', '::1', ''),
(788, '', 'Updated a sale with an invoice no 2023020', '2022-06-08 17:05:47.483201', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_sale?salesID=2b2357ebfa7084b0826e19d4108d046d&invoice', '::1', ''),
(789, '', 'Updated a sale with an invoice no 2023020', '2022-06-08 17:36:11.275325', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_sale?salesID=2b2357ebfa7084b0826e19d4108d046d&invoice', '::1', ''),
(790, '', 'User admin@gmail.com Signed in', '2022-06-08 19:47:39.962477', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(791, '', 'Made a Service sale with an invoice no 0393229', '2022-06-08 19:56:47.213652', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=74c14a5e49edeaac46dba216654b06c5&', '::1', ''),
(792, '', 'Updated a service sale with an invoice no 0393229', '2022-06-08 20:22:13.730716', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=74c14a5e49edeaac46dba216654b06c5', '::1', ''),
(793, '', 'Made a Service sale with an invoice no 0393229', '2022-06-08 20:22:14.196294', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=74c14a5e49edeaac46dba216654b06c5', '::1', ''),
(794, '', 'Updated a service sale with an invoice no 0393229', '2022-06-08 20:22:28.672390', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=74c14a5e49edeaac46dba216654b06c5', '::1', ''),
(795, '', 'Made a Service sale with an invoice no 0393229', '2022-06-08 20:22:28.883071', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_service_sale?salesID=74c14a5e49edeaac46dba216654b06c5', '::1', ''),
(796, '', 'Made a sale with an invoice no 3300220', '2022-06-08 20:41:30.354952', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=65639a47a451b1202e272c775196a071&invoice_', '::1', ''),
(797, '', 'Made a sale with an invoice no 9090930', '2022-06-08 20:57:40.124593', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=9c8c01d9803dfe3d264ed8f5ad3c1194&invoice_', '::1', ''),
(798, '', 'Made a purchase with an invoice no 289227', '2022-06-08 21:20:01.961014', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=b574d7aaa34cf157650d14c1f0e358b3&i', '::1', ''),
(799, '', 'Made a sale with an invoice no 3202320', '2022-06-08 21:56:44.360691', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=fbf01ae3b677226d35ba57223419270d&invoice_', '::1', ''),
(800, '', 'Made a sale with an invoice no 3202320', '2022-06-08 21:56:44.556087', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=fbf01ae3b677226d35ba57223419270d&invoice_', '::1', ''),
(801, '', 'Made a sale with an invoice no 3202320', '2022-06-08 21:59:27.679144', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=fbf01ae3b677226d35ba57223419270d&invoice_', '::1', ''),
(802, '', 'Made a sale with an invoice no 3202320', '2022-06-08 22:02:27.005047', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=fbf01ae3b677226d35ba57223419270d&invoice_', '::1', ''),
(803, '', 'Made a purchase with an invoice no 1896488', '2022-06-08 22:04:54.511961', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=586a5578a6400dda8389fc809fd7fc08&i', '::1', ''),
(804, '', 'Made a purchase with an invoice no 1896488', '2022-06-08 22:04:54.692550', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=586a5578a6400dda8389fc809fd7fc08&i', '::1', ''),
(805, '', 'Made a purchase with an invoice no 1968785', '2022-06-08 22:28:14.826638', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_purchase?purchaseID=a3c785cba77971ced9d7d8285871db3b&i', '::1', ''),
(806, '', 'Made a sale with an invoice no 9990900', '2022-06-08 22:29:35.085946', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a71476bc581d17101156f31f6dd63058&invoice_', '::1', ''),
(807, '', 'Made a sale with an invoice no 9990900', '2022-06-08 22:29:35.330343', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a71476bc581d17101156f31f6dd63058&invoice_', '::1', ''),
(808, '', 'Made a sale with an invoice no 9990900', '2022-06-08 22:32:41.680105', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a71476bc581d17101156f31f6dd63058&invoice_', '::1', ''),
(809, '', 'Made a sale with an invoice no 9990900', '2022-06-08 22:32:41.877853', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a71476bc581d17101156f31f6dd63058&invoice_', '::1', ''),
(810, '', 'Made a sale with an invoice no 9990900', '2022-06-08 22:34:50.975115', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a71476bc581d17101156f31f6dd63058&invoice_', '::1', ''),
(811, '', 'Made a sale with an invoice no 9990900', '2022-06-08 22:34:51.222468', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a71476bc581d17101156f31f6dd63058&invoice_', '::1', ''),
(812, '', 'Made a Service sale with an invoice no 3900002', '2022-06-08 23:36:38.335183', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=0412f84ca6b01af08ce6c82657960318&', '::1', ''),
(813, '', 'Made a Service sale with an invoice no 3900002', '2022-06-08 23:36:38.562293', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=0412f84ca6b01af08ce6c82657960318&', '::1', ''),
(814, '', 'Made a Service sale with an invoice no 2090329', '2022-06-08 23:46:07.592365', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=ace1ca5bad7cbdf17c5d9fff83d93859&', '::1', ''),
(815, '', 'Made a sale with an invoice no 0329009', '2022-06-09 08:35:47.728021', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a025f8985946f81a2c67019fa94e22ce&invoice_', '::1', ''),
(816, '', 'Made a sale with an invoice no 0329009', '2022-06-09 08:35:48.135046', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a025f8985946f81a2c67019fa94e22ce&invoice_', '::1', ''),
(817, '', 'Made a sale with an invoice no 0329009', '2022-06-09 08:41:23.309264', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=a025f8985946f81a2c67019fa94e22ce&invoice_', '::1', ''),
(818, '', 'Made a Service sale with an invoice no 2009990', '2022-06-09 08:46:07.029401', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=6df325ecbfcc6d4b5af573d4068cded6&', '::1', ''),
(819, '', 'updated  order with title Mag branding', '2022-06-09 09:02:19.854025', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/edit_order?guidID=4500eb33d52c706bb8c766e2f871d0e3', '::1', ''),
(820, '', 'Made a sale with an invoice no 2900202', '2022-06-11 10:37:40.236632', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=8902b2b1bcfa892d74f3925f2be36f7c&invoice_', '::1', ''),
(821, '', 'Made a sale with an invoice no 2900202', '2022-06-11 10:40:30.061597', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=8902b2b1bcfa892d74f3925f2be36f7c&invoice_', '::1', ''),
(822, '', 'Made a Service sale with an invoice no 2000002', '2022-06-11 10:53:58.333124', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=3f6bff3460511ae5faf98b890d8b3876&', '::1', ''),
(823, '', 'Made a Service sale with an invoice no 9292090', '2022-06-11 10:55:08.058660', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_service_sale?salesID=1786963b4de96d32697742aa1da7b7a1&', '::1', ''),
(824, '', 'User admin@gmail.com Signed in', '2022-07-21 20:18:04.074226', 'admin@gmail.com', 'http://localhost/aluta_brand_system/index.php', '::1', ''),
(825, '', 'Made a sale with an invoice no 0320022', '2022-07-21 20:20:09.438730', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=32f7d7ea58062d21eb03da1bd6acce1b&invoice_', '::1', ''),
(826, '', 'Made a sale with an invoice no 0099999', '2022-07-21 20:29:07.727120', 'admin@gmail.com', 'http://localhost/aluta_brand_system/pages/add_sale?salesID=49211694d643207e2d94d3ef5c1b1030&invoice_', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_ID` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_ID`, `branch_name`, `status`) VALUES
(1, '853515f2901bfb298a3eb063f53a243a', 'Bungoma', 'Inactive'),
(2, 'ecaa469a1448e2d67846e6f0caaad2d5', 'Bungoma', 'Active'),
(3, '911172bacccf2ffbaee773b99618faad', 'Kibabii Uni', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `pharmacy_ID` varchar(100) NOT NULL,
  `category_ID` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pharmacy_ID`, `category_ID`, `category_name`, `status`, `branch_ID`) VALUES
(1, '', '08aadca01af74aca976b687643e96b4d', 'Black', 'Active', ''),
(2, '', 'eb0f9eb91aaca7e041e34d6b29c170d2', 'White', 'Active', ''),
(3, '', '164f3dcda626556dea633916b38bf822', 'Red', 'Active', ''),
(4, '', '6c186cd88db46126a01bb6f5aa9a60b9', '0-50', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` int(11) NOT NULL,
  `pharmacy_ID` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `pharmacy_ID`, `title`, `name`, `contact`, `address`, `email`, `logo`) VALUES
(2, '', 'Francois Coiland', 'ALUTA BRAND MEDIA', '+254707071957', '14124, 20100\r\nNakuru', 'kihiko2014@gmail.com', 'logo_edited.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `pharmacy_ID` varchar(100) NOT NULL,
  `customer_ID` varchar(100) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(225) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active',
  `date_entered` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `pharmacy_ID`, `customer_ID`, `customer_name`, `email`, `phone`, `address`, `date_of_birth`, `status`, `date_entered`, `branch_ID`) VALUES
(1, '', '68052aac6559bcac074b0d8208cdb97a', 'Francis Kihiko', 'kihiko2014@gmail.com', '0707071957', '14124', '', 'Active', '2022-05-07 12:07:24.730039', ''),
(2, '', 'bf91e6007474cddff744d3b629813b2c', 'Hannah ', 'admin234@gmail.com', 'kabelelia', '14124', '2022-04-04', 'Active', '2022-05-22 21:16:12.464009', ''),
(3, '', '40a3fa424d9069fff95ab8c078e3f983', 'FRANCIS KIHIKO KARONGO', 'kihiko2014@gmail.com', '0707071957', '14124', '2022-05-29', 'Active', '2022-05-22 21:20:17.604344', ''),
(4, '', 'c29b3aed2c95ebfe67acdf654445fbfb', 'james', 'kihiko2013@gmail.com', 'kamau', '14124, 14124', '2022-05-26', 'Active', '2022-05-30 12:02:25.538149', ''),
(5, '', '9816d2d1e2bd824b7165053c38c39466', 'peter mwangi', 'kihiko2014ffgg@gmail.com', ' 0707567888', '14124, 14124', '2022-05-17', 'Active', '2022-05-30 13:02:19.861814', ''),
(6, '', '69208766fa361d935e3cbed4f37f3282', 'mercy njeri', 'kihiko2016774@gmail.com', '070789089', '14124, 14124', '', 'Active', '2022-05-30 13:03:22.619545', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `order_ID` varchar(100) NOT NULL,
  `customer_ID` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriprtion` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `date_created` date NOT NULL,
  `date_entered` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `order_ID`, `customer_ID`, `title`, `descriprtion`, `status`, `date_created`, `date_entered`) VALUES
(2, '67fa5ca5553e02dc451d955336e2643c', 'bf91e6007474cddff744d3b629813b2c', 'Reflector branding', 'Reflector branding', 'Completed', '2022-05-23', '2022-05-23 00:58:37.230906'),
(3, 'cac55927d49e7a9c82549d69109fb783', '68052aac6559bcac074b0d8208cdb97a', 'Car Branding', 'Car Branding', 'Pending', '2022-05-21', '2022-05-23 00:59:09.169555'),
(5, '0eecd12682eea0c5d2dd6e5bcf0766ab', '69208766fa361d935e3cbed4f37f3282', 't shirt printing', 'testing', 'Pending', '2022-06-16', '2022-06-08 10:17:10.904390'),
(6, 'e148bc118e4da75cabaa34d4cc532478', '69208766fa361d935e3cbed4f37f3282', 'Reflector branding', 'testing', 'Pending', '2022-05-31', '2022-06-08 10:20:25.791120'),
(7, 'a457e4ccafd7e12304db5e8a3f6fe4f0', '69208766fa361d935e3cbed4f37f3282', 'Reflector branding', 'testing', 'Pending', '2022-05-31', '2022-06-08 10:21:56.036326'),
(8, '7b873b78013d052abb993af0815a392e', '69208766fa361d935e3cbed4f37f3282', 'Reflector branding', 'testing', 'Pending', '2022-05-31', '2022-06-08 10:25:11.367450'),
(9, 'f367e81623bd04aee0cc56601fed9445', '69208766fa361d935e3cbed4f37f3282', 'Reflector branding', 'testing', 'Pending', '2022-05-31', '2022-06-08 10:32:29.541864'),
(10, 'c43d8431e64e1723c6fc92d9f4b02e2b', '69208766fa361d935e3cbed4f37f3282', 'Reflector branding', 'testing', 'Pending', '2022-05-31', '2022-06-08 10:33:28.676779'),
(11, 'a7b5b5277cefe598cc004a0c2cfc00e8', '69208766fa361d935e3cbed4f37f3282', 'Reflector branding', 'testing', 'Pending', '2022-05-31', '2022-06-08 10:34:03.079440'),
(12, '521e6d8597f6a74a668226b99703e036', 'c29b3aed2c95ebfe67acdf654445fbfb', 'Car Branding', 'testing', 'Pending', '2022-05-30', '2022-06-08 10:35:02.403216'),
(13, '69b319e405aa16bee8a2afcaefa96fb0', 'WalkIn', 'Mag branding', 'testing', 'Pending', '2022-05-29', '2022-06-08 10:35:28.017926'),
(14, '10fbae8e5368270122f06ab0febe652c', '40a3fa424d9069fff95ab8c078e3f983', 'Mag branding', 'testing', 'Completed', '2022-05-29', '2022-06-08 10:36:13.147626'),
(15, '4500eb33d52c706bb8c766e2f871d0e3', '40a3fa424d9069fff95ab8c078e3f983', 'Mag branding', 'testing', 'Completed', '2022-05-29', '2022-06-08 16:04:16.806442'),
(16, '3decd9aa55fbbe196e050f6df5d1f2e8', '69208766fa361d935e3cbed4f37f3282', 't shirt printing', 'testing', 'Completed', '2022-03-28', '2022-06-08 16:05:32.967814');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `expense_ID` varchar(100) NOT NULL,
  `expense` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `expense_date` date NOT NULL,
  `description` text NOT NULL,
  `date_entered` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_ID`, `expense`, `amount`, `expense_date`, `description`, `date_entered`, `status`, `branch_ID`) VALUES
(1, 'c8fcc382dd3019cda312fef8e2a980f7', 'Fuel Expenses', '1500.00', '2022-05-07', 'fuel cost', '2022-05-07 11:44:03.269603', 'Active', ''),
(2, 'acf6329dc7935e3dd250e4efb514ebe7', '500', '0.00', '2022-05-25', 'fuel bill', '2022-05-25 16:32:51.464056', 'Active', ''),
(3, '388101f0cd10d62e13e6f2d7361170c5', 'fuel bill', '500.00', '2022-05-25', 'fuel bill', '2022-05-25 16:35:58.939120', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(11) NOT NULL,
  `privilege` varchar(200) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Active',
  `_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `branch_ID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `privilege`, `status`, `_date`, `branch_ID`) VALUES
(1, 'Add User', 'Active', '2021-07-05 08:28:05', ''),
(2, 'Manage User', 'Active', '2021-07-05 08:28:05', ''),
(3, 'Edit User', 'Active', '2021-07-05 09:23:09', ''),
(4, '\r\nDelete User', 'Active', '2021-07-05 09:23:09', ''),
(5, 'Add Product', 'Active', '2022-04-20 00:17:47', ''),
(6, 'Manage Product', 'Active', '2022-04-20 00:17:47', ''),
(7, 'View Dashboard', 'Active', '2022-04-20 00:19:14', ''),
(8, 'Manage Settings', 'Active', '2022-04-20 00:19:14', ''),
(9, 'Add Sales', 'Active', '2022-04-20 00:20:32', ''),
(10, 'Manage Sales', 'Active', '2022-04-20 00:20:32', ''),
(11, 'Manage Inventory', 'Active', '2022-04-20 00:22:06', ''),
(12, 'View Reports', 'Active', '2022-04-20 00:22:06', ''),
(13, 'Add Category', 'Active', '2022-04-20 00:22:37', ''),
(14, 'Manage Category', 'Active', '2022-04-20 00:22:37', ''),
(15, 'Add Customer', 'Active', '2022-04-20 00:23:08', ''),
(16, 'Manage Customer', 'Active', '2022-04-20 00:23:08', ''),
(17, 'Add Supplier', 'Active', '2022-04-20 00:24:00', ''),
(18, 'Manage Supplier', 'Active', '2022-04-20 00:24:00', ''),
(19, 'Add Expenses', 'Active', '2022-04-20 00:24:42', ''),
(20, 'Manage Expenses', 'Active', '2022-04-20 00:24:42', ''),
(21, 'Manage Role', 'Active', '2022-04-20 00:25:58', ''),
(22, 'Manage Privilege', 'Active', '2022-04-20 00:25:58', ''),
(23, 'Add Purchase', 'Active', '2022-04-20 00:26:53', ''),
(24, 'Manage Purchase', 'Active', '2022-04-20 00:26:53', ''),
(25, 'Add Orders', 'Active', '2022-05-25 10:34:16', ''),
(26, 'Edit Orders', 'Active', '2022-05-25 10:34:16', ''),
(27, 'Manage Orders', 'Active', '2022-05-25 10:34:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `barcode_number` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `stock_in` int(100) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `sold_quantity` int(100) NOT NULL,
  `registered_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `expired_date` date NOT NULL,
  `actual_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `side_effect` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_ID`, `supplier_id`, `product_name`, `short_name`, `barcode_number`, `category`, `stock_in`, `quantity`, `sold_quantity`, `registered_date`, `expired_date`, `actual_price`, `selling_price`, `status`, `side_effect`, `image`, `branch_ID`) VALUES
(1, '67dc52c9bded11bd878cfe372087f140', '0c62fd7060f25395c30957031c46261e', 'Tshirt', '', '', '164f3dcda626556dea633916b38bf822', 357, 99, 258, '2022-05-07 11:00:33.120815', '0000-00-00', '200.00', '250.00', 'Available', '', '', ''),
(2, '15569bb9ce83c7e909a0805012ed2ea2', '643e13ebf02f21a68e256fa9c52e1344', 'Caps', '', '', 'eb0f9eb91aaca7e041e34d6b29c170d2', 63, 53, 10, '2022-05-07 11:01:34.033949', '0000-00-00', '100.00', '150.00', 'Available', '', '', ''),
(3, 'a7aaa85138c3f0b0ac233457a4d93a02', '643e13ebf02f21a68e256fa9c52e1344', 'Cap', '', '', 'eb0f9eb91aaca7e041e34d6b29c170d2', 0, 0, 0, '2022-05-07 11:02:09.278418', '0000-00-00', '100.00', '150.00', 'Inactive', '', '', ''),
(4, '64675e344d3cf2f6d5cc42a3c7cba8f0', '636f3022231742f9e361635471939416', 'Refrector', '', '', '164f3dcda626556dea633916b38bf822', 50, 10, 40, '2022-05-07 11:07:50.429127', '0000-00-00', '180.00', '250.00', 'Available', '', '', ''),
(5, '62e4dbd8a8ca1163c9d257e78a5550d2', '636f3022231742f9e361635471939416', 'Mugs', '', '', '08aadca01af74aca976b687643e96b4d', 40, 40, 0, '2022-05-07 11:10:18.052782', '0000-00-00', '50.00', '100.00', 'Available', '', '', ''),
(6, '658ce9808821854ba9c89dc9d1e01938', '636f3022231742f9e361635471939416', 'Wrist Bands', '', '', '08aadca01af74aca976b687643e96b4d', 173, 160, 13, '2022-05-07 11:13:01.698757', '0000-00-00', '50.00', '100.00', 'Available', '', '', ''),
(7, 'b9ed977ba844857673cbbe789c93ba53', '636f3022231742f9e361635471939416', 'Water bottle', '', '', 'eb0f9eb91aaca7e041e34d6b29c170d2', 80, 80, 0, '2022-05-07 11:13:58.525929', '0000-00-00', '100.00', '180.00', 'Available', '', '', ''),
(8, '7b218a0fccb07444d47471455229d233', '643e13ebf02f21a68e256fa9c52e1344', 'Pens', '', '', '164f3dcda626556dea633916b38bf822', 21, 9, 12, '2022-05-07 11:15:35.892339', '0000-00-00', '40.00', '90.00', 'Available', '', '', ''),
(9, 'b2aa5bbef2240c8703b1f37a3104e033', '636f3022231742f9e361635471939416', 'testing', '', '', '164f3dcda626556dea633916b38bf822', 0, 0, 0, '2022-05-15 21:22:51.614338', '0000-00-00', '78.00', '90.00', 'Available', '', '', ''),
(10, '783d56156f484a00e6959cc02630683d', '636f3022231742f9e361635471939416', 'Tshirt', '', '', '6c186cd88db46126a01bb6f5aa9a60b9', 2, 0, 2, '2022-05-22 12:35:10.039140', '0000-00-00', '10.00', '30.00', 'Available', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(14) NOT NULL,
  `purchase_ID` varchar(100) DEFAULT NULL,
  `supplier_ID` varchar(100) DEFAULT NULL,
  `invoice_no` varchar(64) DEFAULT NULL,
  `purchase_date` varchar(64) DEFAULT NULL,
  `purchase_details` varchar(100) DEFAULT NULL,
  `total_discount` varchar(64) DEFAULT NULL,
  `gtotal_amount` varchar(64) DEFAULT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `amount_due` decimal(10,2) NOT NULL,
  `entry_date` timestamp(6) NULL DEFAULT current_timestamp(6),
  `status` varchar(20) DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `purchase_ID`, `supplier_ID`, `invoice_no`, `purchase_date`, `purchase_details`, `total_discount`, `gtotal_amount`, `amount_paid`, `amount_due`, `entry_date`, `status`, `branch_ID`) VALUES
(1, 'f6947f6c60f8a09eacc8dce762002d36', '643e13ebf02f21a68e256fa9c52e1344', '3138833', '2022-06-06', 'Thank you', '20', '380', '380.00', '0.00', '2022-06-06 11:49:40.189028', 'Active', ''),
(2, '1265ac965eb0a622e75b0e987eacfb78', '643e13ebf02f21a68e256fa9c52e1344', '2337489', '2022-06-07', 'Thank you', '40', '400', '400.00', '0.00', '2022-06-07 09:53:32.736182', 'Active', ''),
(3, 'd098b3c74976ba3bcfc89e5baeb5782a', '0c62fd7060f25395c30957031c46261e', '1851528', '2022-06-07', 'Thank you', '200', '1200', '1200.00', '0.00', '2022-06-07 10:12:06.524826', 'Active', ''),
(4, 'b574d7aaa34cf157650d14c1f0e358b3', '636f3022231742f9e361635471939416', '289227', '2022-06-08', 'Thank you', '0', '200.00', '0.00', '200.00', '2022-06-08 21:20:01.812846', 'Active', ''),
(5, '586a5578a6400dda8389fc809fd7fc08', '636f3022231742f9e361635471939416', '1896488', '2022-06-09', 'Thank you', '0', '5450.00', '0.00', '5450.00', '2022-06-08 22:04:54.276533', 'Active', ''),
(6, 'a3c785cba77971ced9d7d8285871db3b', '0c62fd7060f25395c30957031c46261e', '1968785', '2022-06-09', 'Thank you', '0', '60000.00', '0.00', '60000.00', '2022-06-08 22:28:14.669541', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `id` int(11) NOT NULL,
  `purchase_history_ID` varchar(100) NOT NULL,
  `purchase_ID` varchar(100) DEFAULT NULL,
  `product_ID` varchar(100) DEFAULT NULL,
  `supplier_ID` varchar(100) DEFAULT NULL,
  `batch_id` varchar(100) NOT NULL,
  `qty` varchar(128) DEFAULT NULL,
  `supplier_price` varchar(128) DEFAULT NULL,
  `discount` varchar(128) DEFAULT NULL,
  `expire_date` varchar(128) DEFAULT NULL,
  `total_amount` varchar(128) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`id`, `purchase_history_ID`, `purchase_ID`, `product_ID`, `supplier_ID`, `batch_id`, `qty`, `supplier_price`, `discount`, `expire_date`, `total_amount`, `status`, `branch_ID`) VALUES
(1, 'd0058caaa5b3db77eaae6cac4afe5ea2', 'f6947f6c60f8a09eacc8dce762002d36', '15569bb9ce83c7e909a0805012ed2ea2', '643e13ebf02f21a68e256fa9c52e1344', '7889', '0', '100.00', '0', NULL, '400.00', 'Active', ''),
(2, '49be2ac1589cae7ff65222659703adea', '1265ac965eb0a622e75b0e987eacfb78', '7b218a0fccb07444d47471455229d233', '643e13ebf02f21a68e256fa9c52e1344', '55555', '6', '40.00', '0', NULL, '440.00', 'Active', ''),
(3, '1a30158e02f6b86cc3c1065daa337fc2', 'd098b3c74976ba3bcfc89e5baeb5782a', '67dc52c9bded11bd878cfe372087f140', '0c62fd7060f25395c30957031c46261e', '88888', '0', '200.00', '0', NULL, '1400.00', 'Active', ''),
(4, '9a12a282fb71cc2cabf6398fde3e7803', 'b574d7aaa34cf157650d14c1f0e358b3', '658ce9808821854ba9c89dc9d1e01938', '636f3022231742f9e361635471939416', '77777', '0', '50.00', '0', NULL, '200.00', 'Active', ''),
(5, '57f69b0285a247335a299f999abef466', '586a5578a6400dda8389fc809fd7fc08', '658ce9808821854ba9c89dc9d1e01938', '636f3022231742f9e361635471939416', '33333', '1', '50.00', '0', NULL, '450.00', 'Active', ''),
(6, '4d95712d8f23b86b9b929bee9906c06b', '586a5578a6400dda8389fc809fd7fc08', '658ce9808821854ba9c89dc9d1e01938', '636f3022231742f9e361635471939416', '1111', '99', '50.00', '0', NULL, '5000.00', 'Active', ''),
(7, 'eb24279e465a387345d69d7d4ece5a9e', 'a3c785cba77971ced9d7d8285871db3b', '67dc52c9bded11bd878cfe372087f140', '0c62fd7060f25395c30957031c46261e', '0000', '84', '200.00', '0', NULL, '60000.00', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `id` int(11) NOT NULL,
  `purchase_return_ID` varchar(100) NOT NULL,
  `purchase_ID` varchar(100) NOT NULL,
  `supplier_ID` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `return_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `total_deduction` decimal(10,2) NOT NULL,
  `percent_deduction` int(11) NOT NULL,
  `net_return` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_details`
--

CREATE TABLE `purchase_return_details` (
  `id` int(11) NOT NULL,
  `purchase_return_details_ID` varchar(100) NOT NULL,
  `purchase_return_ID` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `supplier_price` decimal(10,2) NOT NULL,
  `return_quantity` int(11) NOT NULL,
  `deduction_percentage` int(11) NOT NULL,
  `total_deduction` decimal(10,2) NOT NULL,
  `net_return` decimal(10,2) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_ID` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Active',
  `_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `branch_ID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_ID`, `role`, `status`, `_date`, `branch_ID`) VALUES
(1, 'dde21c6714ff616af91720940eba7458', 'Admin', 'Active', '2022-05-07 10:39:54', '');

-- --------------------------------------------------------

--
-- Table structure for table `role_privilege`
--

CREATE TABLE `role_privilege` (
  `id` int(11) NOT NULL,
  `role_ID` varchar(100) NOT NULL,
  `privilege_ID` varchar(100) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_privilege`
--

INSERT INTO `role_privilege` (`id`, `role_ID`, `privilege_ID`, `branch_ID`) VALUES
(79, 'dde21c6714ff616af91720940eba7458', '1', ''),
(80, 'dde21c6714ff616af91720940eba7458', '2', ''),
(81, 'dde21c6714ff616af91720940eba7458', '3', ''),
(82, 'dde21c6714ff616af91720940eba7458', '4', ''),
(83, 'dde21c6714ff616af91720940eba7458', '5', ''),
(84, 'dde21c6714ff616af91720940eba7458', '6', ''),
(85, 'dde21c6714ff616af91720940eba7458', '7', ''),
(86, 'dde21c6714ff616af91720940eba7458', '8', ''),
(87, 'dde21c6714ff616af91720940eba7458', '9', ''),
(88, 'dde21c6714ff616af91720940eba7458', '10', ''),
(89, 'dde21c6714ff616af91720940eba7458', '11', ''),
(90, 'dde21c6714ff616af91720940eba7458', '12', ''),
(91, 'dde21c6714ff616af91720940eba7458', '13', ''),
(92, 'dde21c6714ff616af91720940eba7458', '14', ''),
(93, 'dde21c6714ff616af91720940eba7458', '15', ''),
(94, 'dde21c6714ff616af91720940eba7458', '16', ''),
(95, 'dde21c6714ff616af91720940eba7458', '17', ''),
(96, 'dde21c6714ff616af91720940eba7458', '18', ''),
(97, 'dde21c6714ff616af91720940eba7458', '19', ''),
(98, 'dde21c6714ff616af91720940eba7458', '20', ''),
(99, 'dde21c6714ff616af91720940eba7458', '21', ''),
(100, 'dde21c6714ff616af91720940eba7458', '22', ''),
(101, 'dde21c6714ff616af91720940eba7458', '23', ''),
(102, 'dde21c6714ff616af91720940eba7458', '24', ''),
(103, 'dde21c6714ff616af91720940eba7458', '25', ''),
(104, 'dde21c6714ff616af91720940eba7458', '26', ''),
(105, 'dde21c6714ff616af91720940eba7458', '27', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `customer_ID` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `total_discount` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `due_amount` decimal(10,2) NOT NULL,
  `amount_balance` decimal(10,2) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `invoice_date` date NOT NULL,
  `detail` varchar(225) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `type` varchar(50) NOT NULL DEFAULT 'product',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_ID`, `customer_ID`, `invoice_no`, `total_discount`, `total_amount`, `paid_amount`, `due_amount`, `amount_balance`, `date_created`, `invoice_date`, `detail`, `counter`, `pay_status`, `payment_method`, `status`, `type`, `branch_ID`) VALUES
(1, '3acfe05b5ef0c23f35a9e7bd78153b58', 'WalkIn', '2300939', '50.00', '400.00', '400.00', '450.00', '0.00', '2022-06-06 11:52:00.870637', '2022-06-06', 'Thank you', '', 'Paid', '', 'Active', 'product', ''),
(2, 'c6183965c7ca4964c42cc2d2968edb66', 'WalkIn', '9390000', '50.00', '700.00', '700.00', '750.00', '0.00', '2022-06-07 10:14:18.541029', '2022-06-07', 'Thank you', '', 'Paid', '', 'Active', 'product', ''),
(3, 'e8dd62d5f8f8abb6de264cd9da6c4cf4', 'WalkIn', '9092290', '50.00', '200.00', '200.00', '0.00', '0.00', '2022-06-07 10:50:16.761359', '2022-06-07', 'Thank you', '', 'Paid', '', 'Active', 'product', ''),
(4, 'ffdef04a814c21fc7de72d840486efd7', 'WalkIn', '0990039', '50.00', '200.00', '200.00', '0.00', '0.00', '2022-06-07 10:53:15.692344', '2022-06-07', 'Thank you', '', 'Paid', '', 'Active', 'product', ''),
(5, '40b2f2cd7ee79445c10e200b5ce839f1', 'WalkIn', '9920000', '50.00', '200.00', '200.00', '0.00', '0.00', '2022-06-08 17:00:14.913509', '2022-06-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(6, '2b2357ebfa7084b0826e19d4108d046d', 'WalkIn', '2023020', '50.00', '100.00', '50.00', '50.00', '0.00', '2022-06-08 17:04:58.902709', '2022-06-08', 'Thank you', '', 'Partialy Paid', 'CASH', 'Active', 'product', ''),
(7, '65639a47a451b1202e272c775196a071', '40a3fa424d9069fff95ab8c078e3f983', '3300220', '0.00', '250.00', '250.00', '0.00', '0.00', '2022-06-08 20:41:30.165809', '2022-06-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(8, '65639a47a451b1202e272c775196a071', '40a3fa424d9069fff95ab8c078e3f983', '3300220', '0.00', '250.00', '250.00', '0.00', '0.00', '2022-04-08 20:56:27.668384', '2022-04-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(9, '9c8c01d9803dfe3d264ed8f5ad3c1194', '40a3fa424d9069fff95ab8c078e3f983', '9090930', '0.00', '90.00', '90.00', '0.00', '0.00', '2022-06-08 20:57:38.064030', '2022-06-08', 'Thank you', '', 'Paid', 'MPESA', 'Active', 'product', ''),
(10, '9c8c01d9803dfe3d264ed8f5ad3c1194', '40a3fa424d9069fff95ab8c078e3f983', '9090930', '0.00', '90.00', '90.00', '0.00', '0.00', '2022-04-08 21:00:58.217341', '2022-04-08', 'Thank you', '', 'Paid', 'MPESA', 'Active', 'product', ''),
(11, '9c8c01d9803dfe3d264ed8f5ad3c1194', '40a3fa424d9069fff95ab8c078e3f983', '9090930', '0.00', '9000.00', '9000.00', '0.00', '0.00', '2022-06-08 21:02:56.166755', '2022-06-08', 'Thank you', '', 'Paid', 'MPESA', 'Active', 'product', ''),
(12, 'fbf01ae3b677226d35ba57223419270d', '9816d2d1e2bd824b7165053c38c39466', '3202320', '0.00', '460.00', '460.00', '0.00', '0.00', '2022-04-08 21:56:42.972290', '2022-04-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(13, 'fbf01ae3b677226d35ba57223419270d', '9816d2d1e2bd824b7165053c38c39466', '3202320', '0.00', '460.00', '460.00', '0.00', '0.00', '2022-06-08 21:58:48.830479', '2022-06-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(14, 'fbf01ae3b677226d35ba57223419270d', '9816d2d1e2bd824b7165053c38c39466', '3202320', '0.00', '2000.00', '2000.00', '0.00', '0.00', '2022-04-08 21:59:26.616877', '2022-04-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(15, 'fbf01ae3b677226d35ba57223419270d', '40a3fa424d9069fff95ab8c078e3f983', '3202320', '0.00', '100.00', '100.00', '0.00', '0.00', '2022-06-08 22:02:25.877489', '2022-06-08', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(16, 'a71476bc581d17101156f31f6dd63058', '69208766fa361d935e3cbed4f37f3282', '9990900', '0.00', '350.00', '350.00', '0.00', '0.00', '2022-06-08 22:29:34.913372', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(17, 'a71476bc581d17101156f31f6dd63058', '69208766fa361d935e3cbed4f37f3282', '9990900', '0.00', '350.00', '350.00', '0.00', '0.00', '2022-06-08 22:31:53.716830', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(18, 'a71476bc581d17101156f31f6dd63058', '69208766fa361d935e3cbed4f37f3282', '9990900', '0.00', '450.00', '450.00', '0.00', '0.00', '2022-06-08 22:32:41.408392', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(19, 'a71476bc581d17101156f31f6dd63058', '69208766fa361d935e3cbed4f37f3282', '9990900', '0.00', '450.00', '450.00', '0.00', '0.00', '2022-06-08 22:34:06.971369', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(20, 'a71476bc581d17101156f31f6dd63058', '69208766fa361d935e3cbed4f37f3282', '9990900', '0.00', '800.00', '800.00', '0.00', '0.00', '2022-06-08 22:34:50.747975', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(21, 'a025f8985946f81a2c67019fa94e22ce', 'WalkIn', '0329009', '0.00', '700.00', '700.00', '0.00', '0.00', '2022-05-09 08:35:45.454931', '2022-05-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(22, 'a025f8985946f81a2c67019fa94e22ce', 'WalkIn', '0329009', '0.00', '700.00', '700.00', '0.00', '0.00', '2022-06-09 08:40:35.932825', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(23, 'a025f8985946f81a2c67019fa94e22ce', '69208766fa361d935e3cbed4f37f3282', '0329009', '0.00', '15000.00', '15000.00', '0.00', '0.00', '2022-05-09 08:41:22.081188', '2022-05-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(24, 'a025f8985946f81a2c67019fa94e22ce', '69208766fa361d935e3cbed4f37f3282', '0329009', '0.00', '500.00', '500.00', '0.00', '0.00', '2022-06-09 08:45:29.305073', '2022-06-09', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(25, '8902b2b1bcfa892d74f3925f2be36f7c', 'WalkIn', '2900202', '0.00', '100.00', '100.00', '0.00', '0.00', '2022-06-11 10:37:38.747892', '2022-06-11', 'Thank you', '', 'Paid', 'MPESA', 'Active', 'product', ''),
(26, '8902b2b1bcfa892d74f3925f2be36f7c', 'WalkIn', '2900202', '0.00', '100.00', '100.00', '0.00', '0.00', '2022-06-11 10:39:51.283371', '2022-06-11', 'Thank you', '', 'Paid', 'MPESA', 'Active', 'product', ''),
(27, '8902b2b1bcfa892d74f3925f2be36f7c', 'WalkIn', '2900202', '0.00', '500.00', '500.00', '0.00', '0.00', '2022-06-11 10:40:28.981627', '2022-06-11', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(28, '32f7d7ea58062d21eb03da1bd6acce1b', 'WalkIn', '0320022', '0.00', '1500.00', '1500.00', '0.00', '0.00', '2022-07-21 20:20:09.153489', '2022-07-21', 'Thank you', '', 'Paid', 'CASH', 'Active', 'product', ''),
(29, '49211694d643207e2d94d3ef5c1b1030', 'WalkIn', '0099999', '0.00', '50000.00', '50000.00', '0.00', '0.00', '2022-07-21 20:29:07.471474', '2022-07-21', 'Thank you', '', 'Paid', 'MPESA', 'Active', 'product', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `id` int(11) NOT NULL,
  `sales_details_ID` varchar(100) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `batch_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `actual_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `profit_amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_discount` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL,
  `date_entered` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`id`, `sales_details_ID`, `sales_ID`, `product_ID`, `batch_id`, `quantity`, `selling_price`, `actual_price`, `total_price`, `profit_amount`, `discount`, `total_discount`, `status`, `branch_ID`, `date_entered`) VALUES
(1, '39b53d315ff29911cc8bf2cbd7ac6c25', '3acfe05b5ef0c23f35a9e7bd78153b58', '15569bb9ce83c7e909a0805012ed2ea2', '7889', 3, '150.00', '100.00', '450.00', '150.00', '0.00', '0.00', 'Active', '', '2022-06-06 11:52:00.988653'),
(2, 'fc08140ea4584b52297abc088f270235', 'c6183965c7ca4964c42cc2d2968edb66', '67dc52c9bded11bd878cfe372087f140', '88888', 3, '250.00', '200.00', '750.00', '150.00', '0.00', '0.00', 'Active', '', '2022-06-07 10:14:18.701793'),
(3, 'fe38f63464b2afc7b54084942948cc03', 'e8dd62d5f8f8abb6de264cd9da6c4cf4', '67dc52c9bded11bd878cfe372087f140', '88888', 1, '250.00', '200.00', '250.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-07 10:50:16.958339'),
(6, '8340e7e7fc59249c01673857a53b63fa', 'ffdef04a814c21fc7de72d840486efd7', '67dc52c9bded11bd878cfe372087f140', '88888', 1, '250.00', '200.00', '250.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-07 11:12:52.466592'),
(7, '05abbb60c70a3de0ef29038bd7d2c7f5', '40b2f2cd7ee79445c10e200b5ce839f1', '67dc52c9bded11bd878cfe372087f140', '88888', 1, '250.00', '200.00', '250.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 17:00:14.998414'),
(10, 'b47e254500709dad3106f130ec097051', '2b2357ebfa7084b0826e19d4108d046d', '15569bb9ce83c7e909a0805012ed2ea2', '7889', 1, '150.00', '100.00', '150.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 17:36:11.510676'),
(11, '5de09e3164552181c086f5f08b33b44d', '65639a47a451b1202e272c775196a071', '67dc52c9bded11bd878cfe372087f140', '88888', 1, '250.00', '200.00', '250.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 20:41:30.278097'),
(12, '15998e4141048db4f7884df19b95a2ac', '9c8c01d9803dfe3d264ed8f5ad3c1194', '7b218a0fccb07444d47471455229d233', '55555', 1, '90.00', '40.00', '90.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 20:57:40.093431'),
(13, 'b5e695d177f3e827461a3c5972556359', 'fbf01ae3b677226d35ba57223419270d', '658ce9808821854ba9c89dc9d1e01938', '77777', 1, '100.00', '50.00', '100.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 21:56:44.299835'),
(14, '05906d92b8df850edef6d73a9180077b', 'fbf01ae3b677226d35ba57223419270d', '7b218a0fccb07444d47471455229d233', '55555', 4, '90.00', '40.00', '360.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-08 21:56:44.512758'),
(15, '3fc7af99baae8b3f2a8d5ed0cfe1c75d', 'fbf01ae3b677226d35ba57223419270d', '658ce9808821854ba9c89dc9d1e01938', '77777', 2, '100.00', '50.00', '200.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-08 21:59:27.635351'),
(16, '9e74060ec02a9fe49173b03da1923a5b', 'fbf01ae3b677226d35ba57223419270d', '658ce9808821854ba9c89dc9d1e01938', '77777', 1, '100.00', '50.00', '100.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:02:26.944952'),
(17, '0a8939177b65db61a728f42d1eef8515', 'a71476bc581d17101156f31f6dd63058', '67dc52c9bded11bd878cfe372087f140', '0000', 1, '250.00', '200.00', '250.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:29:35.056451'),
(18, 'a209975a25410b58e57bf02eebdcf60c', 'a71476bc581d17101156f31f6dd63058', '658ce9808821854ba9c89dc9d1e01938', '1111', 1, '100.00', '50.00', '100.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:29:35.298776'),
(19, 'c18c9c1e96b4d9a958519932ae88d11a', 'a71476bc581d17101156f31f6dd63058', '658ce9808821854ba9c89dc9d1e01938', '33333', 2, '100.00', '50.00', '200.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:32:41.656593'),
(20, 'f12f1ce41aae8e9bae4e97466a988e0e', 'a71476bc581d17101156f31f6dd63058', '67dc52c9bded11bd878cfe372087f140', '0000', 1, '250.00', '200.00', '250.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:32:41.830125'),
(21, '782d05fcb523007243c0c0f77a8165c5', 'a71476bc581d17101156f31f6dd63058', '658ce9808821854ba9c89dc9d1e01938', '33333', 3, '100.00', '50.00', '300.00', '150.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:34:50.918098'),
(22, '80aeeb5755b429587a729a78b09394f8', 'a71476bc581d17101156f31f6dd63058', '67dc52c9bded11bd878cfe372087f140', '0000', 2, '250.00', '200.00', '500.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-08 22:34:51.199203'),
(23, 'c3eff16395e79c5159b3e999f176e960', 'a025f8985946f81a2c67019fa94e22ce', '658ce9808821854ba9c89dc9d1e01938', '33333', 2, '100.00', '50.00', '200.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-09 08:35:47.639619'),
(24, 'c7bda3c22660844ac42c227e630b0e91', 'a025f8985946f81a2c67019fa94e22ce', '67dc52c9bded11bd878cfe372087f140', '0000', 2, '250.00', '200.00', '500.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-09 08:35:47.995480'),
(25, '2888c257bc69aad9893d711dce847cf5', 'a025f8985946f81a2c67019fa94e22ce', '67dc52c9bded11bd878cfe372087f140', '0000', 2, '250.00', '200.00', '500.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-09 08:41:23.289265'),
(26, '487217474c8113992109c21236e54789', '8902b2b1bcfa892d74f3925f2be36f7c', '658ce9808821854ba9c89dc9d1e01938', '33333', 1, '100.00', '50.00', '100.00', '50.00', '0.00', '0.00', 'Active', '', '2022-06-11 10:37:40.184725'),
(27, '63c347581d32b53cc348d018886c02de', '8902b2b1bcfa892d74f3925f2be36f7c', '67dc52c9bded11bd878cfe372087f140', '0000', 2, '250.00', '200.00', '500.00', '100.00', '0.00', '0.00', 'Active', '', '2022-06-11 10:40:30.004635'),
(28, 'f83accf13eb363a20341a22db5359736', '32f7d7ea58062d21eb03da1bd6acce1b', '67dc52c9bded11bd878cfe372087f140', '0000', 6, '250.00', '200.00', '1500.00', '150.00', '0.00', '0.00', 'Active', '', '2022-07-21 20:20:09.364176'),
(29, '0bdf8921e7b262b7727f3e7df7f6b89a', '49211694d643207e2d94d3ef5c1b1030', '67dc52c9bded11bd878cfe372087f140', '0000', 200, '250.00', '200.00', '50000.00', '10000.00', '0.00', '0.00', 'Active', '', '2022-07-21 20:29:07.702483');

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `id` int(11) NOT NULL,
  `sales_return_ID` varchar(100) NOT NULL,
  `customer_ID` varchar(100) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `return_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `total_deduction` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_return_details`
--

CREATE TABLE `sales_return_details` (
  `id` int(11) NOT NULL,
  `sales_return_details_ID` varchar(100) NOT NULL,
  `sales_return_ID` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `return_quantity` int(225) NOT NULL,
  `return_total` decimal(10,2) NOT NULL,
  `return_deduction` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `percent_deduction` int(11) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_service`
--

CREATE TABLE `sales_service` (
  `id` int(11) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `customer_ID` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `total_discount` double(10,2) NOT NULL,
  `total_amount` double(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `due_amount` decimal(10,2) NOT NULL,
  `amount_balance` double(10,2) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `invoice_date` datetime(6) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `pay_status` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_service`
--

INSERT INTO `sales_service` (`id`, `sales_ID`, `customer_ID`, `invoice_no`, `total_discount`, `total_amount`, `paid_amount`, `due_amount`, `amount_balance`, `date_created`, `invoice_date`, `payment_method`, `detail`, `pay_status`, `status`) VALUES
(1, 'c31f361b019e2237591e2ec8ba58dd57', 'WalkIn', '2000900', 50.00, 100.00, '100.00', '150.00', 0.00, '2022-06-07 11:18:57.571587', '2022-06-07 00:00:00.000000', '', 'Thank you', 'Paid', 'Active'),
(2, '8ff91e8aba929a4fb0be4aeb70272ada', 'WalkIn', '0999009', 50.00, 500.00, '500.00', '0.00', 0.00, '2022-06-07 11:23:44.183942', '0000-00-00 00:00:00.000000', '', 'Thank you', 'Paid', 'Active'),
(3, '74c14a5e49edeaac46dba216654b06c5', 'WalkIn', '0393229', 50.00, 250.00, '200.00', '50.00', 0.00, '2022-06-08 19:56:47.056983', '2022-06-08 00:00:00.000000', 'MPESA', 'Thank you', 'Partialy Paid', 'Active'),
(4, '0412f84ca6b01af08ce6c82657960318', '69208766fa361d935e3cbed4f37f3282', '3900002', 0.00, 150.00, '150.00', '0.00', 0.00, '2022-06-08 23:36:37.746549', '2022-06-09 00:00:00.000000', 'CASH', 'Thank you', 'Paid', 'Active'),
(5, 'ace1ca5bad7cbdf17c5d9fff83d93859', 'WalkIn', '2090329', 0.00, 18000.00, '18000.00', '0.00', 0.00, '2022-06-08 23:46:07.403905', '2022-06-09 00:00:00.000000', 'CASH', 'Thank you', 'Paid', 'Active'),
(6, '6df325ecbfcc6d4b5af573d4068cded6', 'WalkIn', '2009990', 0.00, 5000.00, '5000.00', '0.00', 0.00, '2022-06-09 08:46:05.824987', '2022-06-09 00:00:00.000000', 'CASH', 'Thank you', 'Paid', 'Active'),
(7, '3f6bff3460511ae5faf98b890d8b3876', 'WalkIn', '2000002', 0.00, 150.00, '150.00', '0.00', 0.00, '2022-06-11 10:53:57.295464', '2022-06-11 00:00:00.000000', 'CASH', 'Thank you', 'Paid', 'Active'),
(8, '1786963b4de96d32697742aa1da7b7a1', 'WalkIn', '9292090', 0.00, 6000.00, '6000.00', '0.00', 0.00, '2022-06-11 10:55:06.614913', '2022-06-11 00:00:00.000000', 'CASH', 'Thank you', 'Paid', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sales_service_detail`
--

CREATE TABLE `sales_service_detail` (
  `id` int(11) NOT NULL,
  `sales_details_ID` varchar(100) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `service_ID` varchar(100) NOT NULL,
  `quantity` int(225) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_discount` decimal(10,2) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `date_entered` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_service_detail`
--

INSERT INTO `sales_service_detail` (`id`, `sales_details_ID`, `sales_ID`, `service_ID`, `quantity`, `cost`, `total_price`, `discount`, `total_discount`, `status`, `date_entered`) VALUES
(1, 'c267af46b9297a2e845df12c6d60774d', 'bdaea215a53b9ff3fb19ecf2cdbd1fdb', '63714ffa144db3e2105b15b19463c07c', 2, '150.00', '300.00', '0.00', '0.00', 'Active', '2022-05-25 15:54:32.437038'),
(2, 'b0260b468b04538c0495baf61d1478d4', 'bdaea215a53b9ff3fb19ecf2cdbd1fdb', '0efbbf2bcb49c516b2eaa5e535b35186', 1, '2500.00', '2500.00', '0.00', '0.00', 'Active', '2022-05-25 15:54:32.587894'),
(3, 'f15cf826ab63ea4a768efa2b8940480c', 'c31f361b019e2237591e2ec8ba58dd57', '63714ffa144db3e2105b15b19463c07c', 1, '150.00', '150.00', '0.00', '0.00', 'Active', '2022-06-07 11:18:57.659781'),
(7, '528ea35975559b8c1ded93d459f09679', '8ff91e8aba929a4fb0be4aeb70272ada', '63714ffa144db3e2105b15b19463c07c', 1, '150.00', '150.00', '0.00', '0.00', 'Active', '2022-06-07 11:39:16.585066'),
(8, '878e6fe3ee1454f33191a329782fbc98', '8ff91e8aba929a4fb0be4aeb70272ada', 'bcf24fcdc6e8dbc3382057e3b7288864', 2, '200.00', '400.00', '0.00', '0.00', 'Active', '2022-06-07 11:39:16.757111'),
(11, 'bfa1565defdc52b6afbb16e89869a0cc', '74c14a5e49edeaac46dba216654b06c5', '63714ffa144db3e2105b15b19463c07c', 2, '150.00', '300.00', '0.00', '0.00', 'Active', '2022-06-08 20:22:28.791587'),
(12, '3cd95942edfb63e4fe4bdbb190642539', '0412f84ca6b01af08ce6c82657960318', '10bb62b9a19ddd59e7e045376783ee8c', 2, '3000.00', '0.00', '0.00', '0.00', 'Active', '2022-06-08 23:36:38.167035'),
(13, '87f074883b78377305740bb0825beff5', '0412f84ca6b01af08ce6c82657960318', '6497da086a4c22de7b5de0f94d026939', 1, '150.00', '150.00', '0.00', '0.00', 'Active', '2022-06-08 23:36:38.500269'),
(14, '816c91c8e9d21eab758e30ace9d5438a', 'ace1ca5bad7cbdf17c5d9fff83d93859', '10bb62b9a19ddd59e7e045376783ee8c', 6, '3000.00', '18000.00', '0.00', '0.00', 'Active', '2022-06-08 23:46:07.508762'),
(15, 'bbf7e412ae11deff6f9c8be9b8732c2b', '6df325ecbfcc6d4b5af573d4068cded6', '0efbbf2bcb49c516b2eaa5e535b35186', 2, '2500.00', '5000.00', '0.00', '0.00', 'Active', '2022-06-09 08:46:07.004168'),
(16, '97b8556872dea83e2052b613a19a7007', '3f6bff3460511ae5faf98b890d8b3876', '6497da086a4c22de7b5de0f94d026939', 1, '150.00', '150.00', '0.00', '0.00', 'Active', '2022-06-11 10:53:58.279252'),
(17, 'a7c2c440b11ab94aa9c4e78f1c16370d', '1786963b4de96d32697742aa1da7b7a1', '10bb62b9a19ddd59e7e045376783ee8c', 2, '3000.00', '6000.00', '0.00', '0.00', 'Active', '2022-06-11 10:55:07.967622');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_ID` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `cost` double(10,2) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_ID`, `service_name`, `cost`, `status`, `branch_ID`) VALUES
(1, '10bb62b9a19ddd59e7e045376783ee8c', 'T-Shirt Printing', 3000.00, 'Active', ''),
(2, '0efbbf2bcb49c516b2eaa5e535b35186', 'Printing', 2500.00, 'Active', ''),
(3, '348d0e63e3d74dead4c1bc122cb5bb33', 'Car branding', 5000.00, 'Delete', ''),
(4, '6497da086a4c22de7b5de0f94d026939', 'Cup magging', 150.00, 'Active', ''),
(5, 'bcf24fcdc6e8dbc3382057e3b7288864', 'Cap printing', 200.00, 'Active', ''),
(6, '63714ffa144db3e2105b15b19463c07c', 'Cyber services', 150.00, 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_ID` varchar(100) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `address` varchar(100) NOT NULL,
  `date_entered` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_ID`, `supplier_name`, `email`, `phone`, `status`, `address`, `date_entered`, `branch_ID`) VALUES
(1, '0c62fd7060f25395c30957031c46261e', 'Ribbon Tshirts', 'info@rebbontshirt.com', '0735647850', 'Active', '14124', '2022-05-07 10:54:04.608780', ''),
(2, '636f3022231742f9e361635471939416', 'Amadi Suppliers', 'amadi@gmail.com', '0707234567', 'Active', '14124, 20100', '2022-05-07 10:55:15.052019', ''),
(3, '643e13ebf02f21a68e256fa9c52e1344', 'Juventa Wares', 'info@juventa.co.ke', '0734564356', 'Active', '2347-88079', '2022-05-07 10:56:56.617700', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_purchase_return_table`
--

CREATE TABLE `temp_purchase_return_table` (
  `id` int(11) NOT NULL,
  `purchase_return_ID` varchar(100) NOT NULL,
  `purchase_ID` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `batch_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `return_quantity` int(11) NOT NULL,
  `deduction_percentage` int(11) NOT NULL,
  `total_deduction` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_return` decimal(10,2) NOT NULL,
  `supplier_price` decimal(10,2) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_purchase_table`
--

CREATE TABLE `temp_purchase_table` (
  `id` int(11) NOT NULL,
  `batch_id` varchar(100) NOT NULL,
  `purchase_ID` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `supplier_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `expire_date` date NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_sales_return_table`
--

CREATE TABLE `temp_sales_return_table` (
  `id` int(11) NOT NULL,
  `sales_return_ID` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `batch_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `return_quantity` int(100) NOT NULL,
  `return_total` decimal(10,2) NOT NULL,
  `deduction_percentage` int(50) NOT NULL,
  `return_deduction` int(11) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_sale_table`
--

CREATE TABLE `temp_sale_table` (
  `id` int(11) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `product_ID` varchar(100) NOT NULL,
  `batch_id` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_shartName` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `actual_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `total_profit` decimal(10,2) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_sale_table`
--

INSERT INTO `temp_sale_table` (`id`, `sales_ID`, `invoice_no`, `product_ID`, `batch_id`, `product_name`, `product_shartName`, `quantity`, `selling_price`, `actual_price`, `total_price`, `total_profit`, `branch_ID`) VALUES
(2, '3acfe05b5ef0c23f35a9e7bd78153b58', '2300939', '15569bb9ce83c7e909a0805012ed2ea2', '7889', 'Caps', '', 3, '150.00', '100.00', '450.00', '150.00', ''),
(4, '9bb37268de167cd6b3c7ace7cbd194d2', '0939302', '67dc52c9bded11bd878cfe372087f140', '88888', 'Tshirt', '', 2, '250.00', '200.00', '500.00', '100.00', ''),
(5, 'c6183965c7ca4964c42cc2d2968edb66', '9390000', '67dc52c9bded11bd878cfe372087f140', '88888', 'Tshirt', '', 3, '250.00', '200.00', '750.00', '150.00', ''),
(7, 'e8dd62d5f8f8abb6de264cd9da6c4cf4', '9092290', '67dc52c9bded11bd878cfe372087f140', '88888', 'Tshirt', '', 1, '250.00', '200.00', '250.00', '50.00', ''),
(11, 'ffdef04a814c21fc7de72d840486efd7', '0990039', '67dc52c9bded11bd878cfe372087f140', '88888', 'Tshirt', '', 1, '250.00', '200.00', '250.00', '50.00', ''),
(16, '2b2357ebfa7084b0826e19d4108d046d', '2023020', '15569bb9ce83c7e909a0805012ed2ea2', '7889', 'Caps', '', 1, '150.00', '100.00', '150.00', '50.00', ''),
(19, '9c8c01d9803dfe3d264ed8f5ad3c1194', '9090930', '7b218a0fccb07444d47471455229d233', '55555', 'Pens', '', 1, '90.00', '40.00', '90.00', '50.00', ''),
(24, 'b401f108d6b3848a4aeb5b53a722e424', '9309092', '658ce9808821854ba9c89dc9d1e01938', '33333', 'Wrist Bands', '', 7, '100.00', '50.00', '700.00', '50.00', ''),
(31, 'c24961b26d6764dc4c4f4a4ddda84fad', '9290900', '67dc52c9bded11bd878cfe372087f140', '0000', 'Tshirt', '', 2, '250.00', '200.00', '500.00', '100.00', ''),
(32, 'c24961b26d6764dc4c4f4a4ddda84fad', '9290900', '658ce9808821854ba9c89dc9d1e01938', '33333', 'Wrist Bands', '', 1, '100.00', '50.00', '100.00', '50.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_service_sale`
--

CREATE TABLE `temp_service_sale` (
  `id` int(11) NOT NULL,
  `service_ID` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `sales_ID` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_service_sale`
--

INSERT INTO `temp_service_sale` (`id`, `service_ID`, `service_name`, `cost`, `quantity`, `total_price`, `sales_ID`, `invoice_no`) VALUES
(1, '63714ffa144db3e2105b15b19463c07c', 'Cyber services', '150.00', 2, '300.00', '8464a99589448947b4319e7c4a29afc1', '0029203'),
(3, '63714ffa144db3e2105b15b19463c07c', 'Cyber services', '150.00', 1, '150.00', 'c31f361b019e2237591e2ec8ba58dd57', '2000900'),
(9, '63714ffa144db3e2105b15b19463c07c', 'Cyber services', '150.00', 1, '150.00', '8ff91e8aba929a4fb0be4aeb70272ada', '0999009'),
(10, 'bcf24fcdc6e8dbc3382057e3b7288864', 'Cap printing', '200.00', 2, '400.00', '8ff91e8aba929a4fb0be4aeb70272ada', '0999009'),
(14, '63714ffa144db3e2105b15b19463c07c', 'Cyber services', '150.00', 2, '300.00', '74c14a5e49edeaac46dba216654b06c5', '0393229');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_ID` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `last_login` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(30) DEFAULT 'Active',
  `image` varchar(30) NOT NULL,
  `note` varchar(100) NOT NULL,
  `branch_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_ID`, `name`, `email`, `password`, `phone`, `last_login`, `role`, `status`, `image`, `note`, `branch_ID`) VALUES
(1, 'af421f7eeb302c46c8c35eda3adfc59d', 'francis james kihiko', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '+254707071957', '0000-00-00', 'dde21c6714ff616af91720940eba7458', 'Active', '1025.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_privilege`
--
ALTER TABLE `role_privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_return_details`
--
ALTER TABLE `sales_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_service`
--
ALTER TABLE `sales_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_service_detail`
--
ALTER TABLE `sales_service_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_purchase_return_table`
--
ALTER TABLE `temp_purchase_return_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_purchase_table`
--
ALTER TABLE `temp_purchase_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_sales_return_table`
--
ALTER TABLE `temp_sales_return_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_sale_table`
--
ALTER TABLE `temp_sale_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_service_sale`
--
ALTER TABLE `temp_service_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=827;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_privilege`
--
ALTER TABLE `role_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_return_details`
--
ALTER TABLE `sales_return_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_service`
--
ALTER TABLE `sales_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_service_detail`
--
ALTER TABLE `sales_service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_purchase_return_table`
--
ALTER TABLE `temp_purchase_return_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_purchase_table`
--
ALTER TABLE `temp_purchase_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temp_sales_return_table`
--
ALTER TABLE `temp_sales_return_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_sale_table`
--
ALTER TABLE `temp_sale_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `temp_service_sale`
--
ALTER TABLE `temp_service_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
