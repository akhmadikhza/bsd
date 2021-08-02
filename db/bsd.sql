-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 06:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama_bantuan` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama_bantuan`, `date_created`) VALUES
(3, 'BLT Dana Desa', '2021-07-15 11:16:15'),
(13, 'JPS Provinsi', '2021-07-16 23:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `log_history`
--

CREATE TABLE `log_history` (
  `id_user` int(11) NOT NULL,
  `user` varchar(128) NOT NULL,
  `tanggal_waktu` varchar(250) NOT NULL,
  `add_log` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_history`
--

INSERT INTO `log_history` (`id_user`, `user`, `tanggal_waktu`, `add_log`) VALUES
(405, 'ikhzabeatles11@gmail.com', '2021-04-24 06:50:38', 'Login'),
(407, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:23', 'Login'),
(408, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:32', 'Logout'),
(409, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:37', 'Login'),
(410, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:39', 'Logout'),
(411, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:44', 'Login'),
(412, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:45', 'Logout'),
(413, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:49', 'Login'),
(414, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:51', 'Logout'),
(415, 'ikhzabeatles11@gmail.com', '2021-04-24 07:59:55', 'Login'),
(416, 'ikhzabeatles11@gmail.com', '2021-04-24 09:21:19', 'Logout'),
(417, 'ikhzabeatles11@gmail.com', '2021-04-24 09:21:41', 'Login'),
(418, 'ikhzabeatles11@gmail.com', '2021-04-24 09:31:02', 'Logout'),
(419, 'ikhzabeatles11@gmail.com', '2021-04-24 09:33:15', 'Login'),
(420, 'ikhzabeatles11@gmail.com', '2021-04-24 14:39:58', 'Login'),
(421, 'ikhzabeatles11@gmail.com', '2021-04-24 17:38:54', 'Login'),
(422, 'ikhzabeatles11@gmail.com', '2021-04-25 09:00:28', 'Login'),
(423, 'ikhzabeatles11@gmail.com', '2021-04-25 13:25:14', 'Login'),
(424, 'ikhzabeatles11@gmail.com', '2021-04-25 14:53:28', 'Logout'),
(425, 'akhmadikhza123@gmail.com', '2021-04-25 14:53:31', 'Login'),
(426, 'akhmadikhza123@gmail.com', '2021-04-25 15:17:29', 'Logout'),
(427, 'ikhzabeatles11@gmail.com', '2021-04-25 15:17:36', 'Login'),
(428, 'ikhzabeatles11@gmail.com', '2021-04-25 17:14:11', 'Logout'),
(429, 'akhmadikhza123@gmail.com', '2021-04-25 17:14:19', 'Login'),
(430, 'ikhzabeatles11@gmail.com', '2021-04-27 08:46:03', 'Login'),
(431, 'ikhzabeatles11@gmail.com', '2021-04-27 08:46:19', 'Logout'),
(432, 'ikhzabeatles11@gmail.com', '2021-04-27 08:46:47', 'Login'),
(433, 'ikhzabeatles11@gmail.com', '2021-05-08 14:51:38', 'Login'),
(434, 'ikhzabeatles11@gmail.com', '2021-05-09 14:45:48', 'Login'),
(435, 'ikhzabeatles11@gmail.com', '2021-05-10 11:02:58', 'Login'),
(436, 'ikhzabeatles11@gmail.com', '2021-05-10 11:08:25', 'Login'),
(437, 'ikhzabeatles11@gmail.com', '2021-05-10 16:08:50', 'Login'),
(438, 'ikhzabeatles11@gmail.com', '2021-05-10 16:27:52', 'Login'),
(439, 'ikhzabeatles11@gmail.com', '2021-05-10 22:16:14', 'Login'),
(440, 'ikhzabeatles11@gmail.com', '2021-05-11 01:17:59', 'Login'),
(441, 'ikhzabeatles11@gmail.com', '2021-05-11 14:59:19', 'Login'),
(442, 'ikhzabeatles11@gmail.com', '2021-05-12 14:53:47', 'Login'),
(443, 'ikhzabeatles11@gmail.com', '2021-05-13 17:27:32', 'Login'),
(444, 'ikhzabeatles11@gmail.com', '2021-05-14 14:10:42', 'Login'),
(445, 'ikhzabeatles11@gmail.com', '2021-05-14 22:24:58', 'Login'),
(446, 'ikhzabeatles11@gmail.com', '2021-05-14 22:26:30', 'Login'),
(447, 'ikhzabeatles11@gmail.com', '2021-05-14 22:30:44', 'Login'),
(448, 'ikhzabeatles11@gmail.com', '2021-05-14 22:42:55', 'Login'),
(449, 'ikhzabeatles11@gmail.com', '2021-05-15 01:36:46', 'Login'),
(450, 'ikhzabeatles11@gmail.com', '2021-05-15 05:06:38', 'Login'),
(451, 'ikhzabeatles11@gmail.com', '2021-05-15 06:46:20', 'Login'),
(452, 'ikhzabeatles11@gmail.com', '2021-05-15 08:03:31', 'Login'),
(453, 'ikhzabeatles11@gmail.com', '2021-05-15 19:01:35', 'Login'),
(454, 'ikhzabeatles11@gmail.com', '2021-05-17 07:23:58', 'Login'),
(455, 'ikhzabeatles11@gmail.com', '2021-05-18 16:37:10', 'Login'),
(456, 'ikhzabeatles11@gmail.com', '2021-05-20 07:12:56', 'Login'),
(457, 'ikhzabeatles11@gmail.com', '2021-05-20 07:31:54', 'Logout'),
(458, 'akhmadikhza123@gmail.com', '2021-05-20 07:31:58', 'Login'),
(459, 'ikhzabeatles11@gmail.com', '2021-05-20 08:15:38', 'Login'),
(460, 'ikhzabeatles11@gmail.com', '2021-05-21 06:39:03', 'Login'),
(461, 'ikhzabeatles11@gmail.com', '2021-05-21 06:42:44', 'Login'),
(462, 'ikhzabeatles11@gmail.com', '2021-05-21 06:42:49', 'Logout'),
(463, 'akhmadikhza123@gmail.com', '2021-05-21 06:42:57', 'Login'),
(464, 'ikhzabeatles11@gmail.com', '2021-05-21 06:44:09', 'Logout'),
(465, 'akhmadikhza123@gmail.com', '2021-05-21 06:44:13', 'Login'),
(466, 'akhmadikhza123@gmail.com', '2021-05-21 06:44:52', 'Logout'),
(467, 'ikhzabeatles11@gmail.com', '2021-05-21 06:44:55', 'Login'),
(468, 'ikhzabeatles11@gmail.com', '2021-05-22 11:33:34', 'Login'),
(469, 'ikhzabeatles11@gmail.com', '2021-05-22 11:44:01', 'Logout'),
(470, 'akhmadikhza123@gmail.com', '2021-05-22 11:44:06', 'Login'),
(471, 'akhmadikhza123@gmail.com', '2021-05-22 12:03:27', 'Logout'),
(472, 'ikhzabeatles11@gmail.com', '2021-05-22 12:04:02', 'Login'),
(473, 'ikhzabeatles11@gmail.com', '2021-05-22 14:55:43', 'Login'),
(474, 'ikhzabeatles11@gmail.com', '2021-05-23 10:32:50', 'Login'),
(475, 'ikhzabeatles11@gmail.com', '2021-05-24 10:10:51', 'Login'),
(476, 'ikhzabeatles11@gmail.com', '2021-05-26 09:35:14', 'Login'),
(477, 'ikhzabeatles11@gmail.com', '2021-05-26 18:45:14', 'Login'),
(478, 'ikhzabeatles11@gmail.com', '2021-05-29 02:19:17', 'Login'),
(479, 'ikhzabeatles11@gmail.com', '2021-05-30 01:30:45', 'Login'),
(480, 'ikhzabeatles11@gmail.com', '2021-05-30 02:09:32', 'Login'),
(481, 'ikhzabeatles11@gmail.com', '2021-05-30 05:10:23', 'Login'),
(482, 'ikhzabeatles11@gmail.com', '2021-05-30 05:19:19', 'Login'),
(483, 'ikhzabeatles11@gmail.com', '2021-05-30 05:23:18', 'Login'),
(484, 'ikhzabeatles11@gmail.com', '2021-05-30 05:33:10', 'Login'),
(485, 'ikhzabeatles11@gmail.com', '2021-05-30 05:39:57', 'Login'),
(486, 'ikhzabeatles11@gmail.com', '2021-05-30 13:17:47', 'Login'),
(487, 'ikhzabeatles11@gmail.com', '2021-06-01 06:04:46', 'Login'),
(488, 'ikhzabeatles11@gmail.com', '2021-06-02 06:23:28', 'Login'),
(489, 'ikhzabeatles11@gmail.com', '2021-06-02 19:49:42', 'Login'),
(490, 'akhmadikhza123@gmail.com', '2021-06-02 19:55:19', 'Login'),
(491, 'ikhzabeatles11@gmail.com', '2021-06-02 20:59:50', 'Login'),
(492, 'ikhzabeatles11@gmail.com', '2021-06-02 21:03:15', 'Login'),
(493, 'ikhzabeatles11@gmail.com', '2021-06-02 21:21:10', 'Logout'),
(494, 'akhmadikhza123@gmail.com', '2021-06-02 21:27:50', 'Logout'),
(495, 'ikhzabeatles11@gmail.com', '2021-06-02 21:33:16', 'Login'),
(496, 'ikhzabeatles11@gmail.com', '2021-06-02 21:33:42', 'Login'),
(497, 'ikhzabeatles11@gmail.com', '2021-06-02 21:47:37', 'Login'),
(498, 'ikhzabeatles11@gmail.com', '2021-06-02 21:51:16', 'Login'),
(499, 'ikhzabeatles11@gmail.com', '2021-06-02 22:00:04', 'Login'),
(500, 'ikhzabeatles11@gmail.com', '2021-06-03 05:19:41', 'Login'),
(501, 'ikhzabeatles11@gmail.com', '2021-06-03 05:25:57', 'Login'),
(502, 'ikhzabeatles11@gmail.com', '2021-06-03 05:40:05', 'Login'),
(503, 'ikhzabeatles11@gmail.com', '2021-06-03 05:45:30', 'Login'),
(504, 'ikhzabeatles11@gmail.com', '2021-06-03 05:45:33', 'Logout'),
(505, 'ikhzabeatles11@gmail.com', '2021-06-03 05:45:36', 'Login'),
(506, 'ikhzabeatles11@gmail.com', '2021-06-03 15:49:17', 'Login'),
(507, 'ikhzabeatles11@gmail.com', '2021-06-03 15:50:53', 'Login'),
(508, 'ikhzabeatles11@gmail.com', '2021-06-04 08:43:37', 'Login'),
(509, 'ikhzabeatles11@gmail.com', '2021-06-04 12:51:23', 'Login'),
(510, 'ikhzabeatles11@gmail.com', '2021-06-04 15:45:52', 'Login'),
(511, 'ikhzabeatles11@gmail.com', '2021-06-04 16:57:39', 'Login'),
(512, 'ikhzabeatles11@gmail.com', '2021-06-05 07:02:29', 'Login'),
(513, 'ikhzabeatles11@gmail.com', '2021-06-05 07:56:15', 'Login'),
(514, 'ikhzabeatles11@gmail.com', '2021-06-05 08:01:13', 'Login'),
(515, 'ikhzabeatles11@gmail.com', '2021-06-05 23:54:03', 'Login'),
(516, 'ikhzabeatles11@gmail.com', '2021-06-05 23:54:28', 'Login'),
(517, 'ikhzabeatles11@gmail.com', '2021-06-06 14:22:41', 'Login'),
(518, 'ikhzabeatles11@gmail.com', '2021-06-06 15:04:10', 'Login'),
(519, 'ikhzabeatles11@gmail.com', '2021-06-06 15:10:05', 'Login'),
(520, 'ikhzabeatles11@gmail.com', '2021-06-06 18:52:33', 'Logout'),
(521, 'ikhzabeatles11@gmail.com', '2021-06-06 21:35:15', 'Login'),
(522, 'ikhzabeatles11@gmail.com', '2021-06-06 21:37:30', 'Login'),
(523, 'ikhzabeatles11@gmail.com', '2021-06-06 21:58:16', 'Logout'),
(524, 'akhmadikhza123@gmail.com', '2021-06-06 21:58:22', 'Login'),
(525, 'akhmadikhza123@gmail.com', '2021-06-06 21:59:08', 'Logout'),
(527, 'ikhzabeatles11@gmail.com', '2021-06-07 19:53:08', 'Login'),
(528, 'ikhzabeatles11@gmail.com', '2021-06-08 16:36:02', 'Login'),
(529, 'ikhzabeatles11@gmail.com', '2021-06-08 19:00:29', 'Login'),
(530, 'ikhzabeatles11@gmail.com', '2021-06-09 07:17:28', 'Login'),
(531, 'akhmadikhza123@gmail.com', '2021-06-09 07:48:19', 'Login'),
(532, 'akhmadikhza123@gmail.com', '2021-06-09 09:12:50', 'Logout'),
(533, 'ikhzabeatles11@gmail.com', '2021-06-09 09:13:41', 'Login'),
(534, 'ikhzabeatles11@gmail.com', '2021-06-09 09:14:25', 'Logout'),
(535, 'akhmadikhza123@gmail.com', '2021-06-09 09:14:31', 'Login'),
(536, 'ikhzabeatles11@gmail.com', '2021-06-09 10:19:12', 'Logout'),
(537, 'akhmadikhza123@gmail.com', '2021-06-09 11:04:56', 'Logout'),
(538, 'akhmadikhza123@gmail.com', '2021-06-09 11:05:04', 'Login'),
(539, 'ikhzabeatles11@gmail.com', '2021-06-09 11:06:59', 'Login'),
(540, 'ikhzabeatles11@gmail.com', '2021-06-09 11:13:58', 'Logout'),
(541, 'ikhzabeatles11@gmail.com', '2021-06-09 11:15:38', 'Login'),
(542, 'ikhzabeatles11@gmail.com', '2021-06-09 12:39:07', 'Logout'),
(543, 'ikhzabeatles11@gmail.com', '2021-06-09 12:39:13', 'Login'),
(544, 'ikhzabeatles11@gmail.com', '2021-06-09 16:08:08', 'Login'),
(545, 'ikhzabeatles11@gmail.com', '2021-06-09 16:13:12', 'Login'),
(546, 'ikhzabeatles11@gmail.com', '2021-06-09 16:13:19', 'Logout'),
(547, 'akhmadikhza123@gmail.com', '2021-06-09 16:13:25', 'Login'),
(548, 'akhmadikhza123@gmail.com', '2021-06-09 16:21:26', 'Logout'),
(549, 'ikhzabeatles11@gmail.com', '2021-06-12 15:47:37', 'Login'),
(550, 'ikhzabeatles11@gmail.com', '2021-06-13 09:45:25', 'Login'),
(551, 'ikhzabeatles11@gmail.com', '2021-06-13 14:17:56', 'Login'),
(552, 'ikhzabeatles11@gmail.com', '2021-06-14 06:22:42', 'Login'),
(553, 'ikhzabeatles11@gmail.com', '2021-06-14 16:15:25', 'Login'),
(554, 'ikhzabeatles11@gmail.com', '2021-06-15 00:03:39', 'Login'),
(555, 'ikhzabeatles11@gmail.com', '2021-06-15 05:07:49', 'Login'),
(556, 'ikhzabeatles11@gmail.com', '2021-06-15 14:02:57', 'Login'),
(557, 'ikhzabeatles11@gmail.com', '2021-06-15 17:09:41', 'Login'),
(558, 'ikhzabeatles11@gmail.com', '2021-06-16 06:36:19', 'Login'),
(559, 'ikhzabeatles11@gmail.com', '2021-06-16 06:36:24', 'Logout'),
(560, 'akhmadikhza123@gmail.com', '2021-06-16 06:36:28', 'Login'),
(561, 'ikhzabeatles11@gmail.com', '2021-06-16 07:09:15', 'Login'),
(562, 'akhmadikhza123@gmail.com', '2021-06-16 07:19:25', 'Logout'),
(563, 'ikhzabeatles11@gmail.com', '2021-06-16 07:19:28', 'Login'),
(564, 'ikhzabeatles11@gmail.com', '2021-06-16 14:48:45', 'Login'),
(565, 'ikhzabeatles11@gmail.com', '2021-06-16 15:44:33', 'Login'),
(566, 'ikhzabeatles11@gmail.com', '2021-06-17 02:24:46', 'Login'),
(567, 'ikhzabeatles11@gmail.com', '2021-06-17 04:36:36', 'Logout'),
(568, 'ikhzabeatles11@gmail.com', '2021-06-17 04:37:13', 'Login'),
(569, 'ikhzabeatles11@gmail.com', '2021-06-17 07:00:13', 'Login'),
(570, 'ikhzabeatles11@gmail.com', '2021-06-17 21:34:09', 'Login'),
(571, 'ikhzabeatles11@gmail.com', '2021-06-18 07:58:54', 'Login'),
(572, 'ikhzabeatles11@gmail.com', '2021-06-18 08:09:21', 'Login'),
(573, 'ikhzabeatles11@gmail.com', '2021-06-18 17:12:31', 'Login'),
(574, 'ikhzabeatles11@gmail.com', '2021-06-19 03:18:26', 'Login'),
(575, 'ikhzabeatles11@gmail.com', '2021-06-19 11:33:42', 'Login'),
(576, 'ikhzabeatles11@gmail.com', '2021-06-19 11:39:21', 'Logout'),
(577, 'ikhzabeatles11@gmail.com', '2021-06-19 11:39:25', 'Login'),
(578, 'ikhzabeatles11@gmail.com', '2021-06-19 11:39:28', 'Logout'),
(579, 'akhmadikhza123@gmail.com', '2021-06-19 11:39:32', 'Login'),
(580, 'akhmadikhza123@gmail.com', '2021-06-19 15:42:37', 'Login'),
(581, 'ikhzabeatles11@gmail.com', '2021-06-20 15:52:35', 'Login'),
(582, 'ikhzabeatles11@gmail.com', '2021-06-26 16:36:11', 'Login'),
(583, 'ikhzabeatles11@gmail.com', '2021-06-28 06:31:57', 'Login'),
(584, 'ikhzabeatles11@gmail.com', '2021-06-28 11:51:48', 'Login'),
(585, 'akhmadikhza123@gmail.com', '2021-07-01 07:42:06', 'Login'),
(586, 'akhmadikhza123@gmail.com', '2021-07-01 07:42:10', 'Logout'),
(587, 'ikhzabeatles11@gmail.com', '2021-07-01 07:42:15', 'Login'),
(588, 'ikhzabeatles11@gmail.com', '2021-07-01 08:13:10', 'Logout'),
(589, 'akhmadikhza123@gmail.com', '2021-07-01 08:13:14', 'Login'),
(590, 'akhmadikhza123@gmail.com', '2021-07-01 08:13:47', 'Logout'),
(591, 'ikhzabeatles11@gmail.com', '2021-07-01 08:13:56', 'Login'),
(592, 'ikhzabeatles11@gmail.com', '2021-07-01 08:26:14', 'Logout'),
(593, 'akhmadikhza123@gmail.com', '2021-07-01 08:26:18', 'Login'),
(594, 'akhmadikhza123@gmail.com', '2021-07-01 08:35:42', 'Logout'),
(595, 'ikhzabeatles11@gmail.com', '2021-07-01 08:35:45', 'Login'),
(596, 'ikhzabeatles11@gmail.com', '2021-07-01 09:15:59', 'Logout'),
(597, 'akhmadikhza123@gmail.com', '2021-07-01 09:36:42', 'Login'),
(598, 'ikhzabeatles11@gmail.com', '2021-07-02 05:27:18', 'Login'),
(599, 'ikhzabeatles11@gmail.com', '2021-07-02 05:27:21', 'Logout'),
(600, 'akhmadikhza123@gmail.com', '2021-07-02 05:27:25', 'Login'),
(601, 'akhmadikhza123@gmail.com', '2021-07-02 05:27:37', 'Logout'),
(602, 'akhmadikhza123@gmail.com', '2021-07-02 05:27:42', 'Login'),
(603, 'akhmadikhza123@gmail.com', '2021-07-02 05:27:43', 'Logout'),
(604, 'ikhzabeatles11@gmail.com', '2021-07-02 05:27:46', 'Login'),
(605, 'ikhzabeatles11@gmail.com', '2021-07-02 05:27:50', 'Logout'),
(606, 'ikhzabeatles11@gmail.com', '2021-07-02 05:27:53', 'Login'),
(607, 'ikhzabeatles11@gmail.com', '2021-07-02 05:27:54', 'Logout'),
(608, 'akhmadikhza123@gmail.com', '2021-07-02 05:27:57', 'Login'),
(609, 'akhmadikhza123@gmail.com', '2021-07-02 05:28:20', 'Logout'),
(610, 'ikhzabeatles11@gmail.com', '2021-07-02 05:28:25', 'Login'),
(611, 'ikhzabeatles11@gmail.com', '2021-07-13 21:05:17', 'Login'),
(612, 'ikhzabeatles11@gmail.com', '2021-07-13 21:10:34', 'Logout'),
(613, 'ikhzabeatles11@gmail.com', '2021-07-13 21:42:06', 'Login'),
(614, 'ikhzabeatles11@gmail.com', '2021-07-14 17:08:15', 'Login'),
(615, 'ikhzabeatles11@gmail.com', '2021-07-14 17:10:44', 'Logout'),
(616, 'ikhzabeatles11@gmail.com', '2021-07-14 17:11:21', 'Login'),
(617, 'akhmadikhza123@gmail.com', '2021-07-14 17:12:02', 'Login'),
(618, 'ikhzabeatles11@gmail.com', '2021-07-14 17:19:23', 'Logout'),
(619, 'ikhzabeatles11@gmail.com', '2021-07-14 17:27:10', 'Login'),
(620, 'ikhzabeatles11@gmail.com', '2021-07-15 14:57:42', 'Login'),
(621, 'ikhzabeatles11@gmail.com', '2021-07-15 19:30:05', 'Logout'),
(622, 'ikhzabeatles11@gmail.com', '2021-07-15 19:30:11', 'Login'),
(623, 'ikhzabeatles11@gmail.com', '2021-07-15 19:30:32', 'Logout'),
(624, 'ikhzabeatles11@gmail.com', '2021-07-15 19:32:08', 'Login'),
(625, 'ikhzabeatles11@gmail.com', '2021-07-16 08:55:47', 'Login'),
(626, 'ikhzabeatles11@gmail.com', '2021-07-16 09:25:10', 'Logout'),
(627, 'ikhzabeatles11@gmail.com', '2021-07-16 09:25:16', 'Login'),
(628, 'ikhzabeatles11@gmail.com', '2021-07-16 09:53:39', 'Logout'),
(629, 'ikhzabeatles11@gmail.com', '2021-07-16 09:53:43', 'Login'),
(630, 'ikhzabeatles11@gmail.com', '2021-07-16 13:37:09', 'Login'),
(631, 'ikhzabeatles11@gmail.com', '2021-07-16 13:44:40', 'Logout'),
(632, 'ikhzabeatles11@gmail.com', '2021-07-16 13:46:26', 'Login'),
(633, 'ikhzabeatles11@gmail.com', '2021-07-16 18:16:23', 'Login'),
(634, 'ikhzabeatles11@gmail.com', '2021-07-16 18:19:08', 'Logout'),
(635, 'ikhzabeatles11@gmail.com', '2021-07-16 18:19:16', 'Login'),
(636, 'akhmadikhza123@gmail.com', '2021-07-16 19:11:30', 'Login'),
(637, 'ikhzabeatles11@gmail.com', '2021-07-16 19:12:11', 'Logout'),
(638, 'ikhzabeatles11@gmail.com', '2021-07-16 19:12:17', 'Login'),
(639, 'akhmadikhza123@gmail.com', '2021-07-16 19:27:33', 'Logout'),
(640, 'ikhzabeatles11@gmail.com', '2021-07-16 19:30:50', 'Logout'),
(641, 'ikhzabeatles11@gmail.com', '2021-07-16 19:35:46', 'Login'),
(642, 'ikhzabeatles11@gmail.com', '2021-07-16 19:41:34', 'Login'),
(643, 'ikhzabeatles11@gmail.com', '2021-07-16 19:41:41', 'Logout'),
(644, 'akhmadikhza123@gmail.com', '2021-07-16 19:41:48', 'Login'),
(645, 'ikhzabeatles11@gmail.com', '2021-07-16 20:07:55', 'Logout'),
(646, 'ikhzabeatles11@gmail.com', '2021-07-16 20:11:14', 'Login'),
(647, 'ikhzabeatles11@gmail.com', '2021-07-16 22:27:33', 'Login'),
(648, 'akhmadikhza123@gmail.com', '2021-07-16 22:43:43', 'Login'),
(649, 'akhmadikhza123@gmail.com', '2021-07-16 22:44:02', 'Logout'),
(650, 'akhmadikhza123@gmail.com', '2021-07-16 22:44:55', 'Login'),
(651, 'ikhzabeatles11@gmail.com', '2021-07-16 22:47:11', 'Logout'),
(652, 'akhmadikhza123@gmail.com', '2021-07-16 22:47:15', 'Login'),
(653, 'akhmadikhza123@gmail.com', '2021-07-16 22:47:44', 'Logout'),
(654, 'ikhzabeatles11@gmail.com', '2021-07-16 22:47:49', 'Login'),
(655, 'akhmadikhza123@gmail.com', '2021-07-17 01:33:22', 'Login'),
(656, 'akhmadikhza123@gmail.com', '2021-07-17 01:46:44', 'Logout'),
(657, 'akhmadikhza123@gmail.com', '2021-07-17 01:46:49', 'Login'),
(658, 'akhmadikhza123@gmail.com', '2021-07-17 01:48:40', 'Logout'),
(659, 'akhmadikhza123@gmail.com', '2021-07-17 01:48:44', 'Login'),
(660, 'akhmadikhza123@gmail.com', '2021-07-17 02:02:08', 'Logout'),
(661, 'ikhzabeatles11@gmail.com', '2021-07-17 06:25:20', 'Login'),
(662, 'ikhzabeatles11@gmail.com', '2021-07-17 06:26:06', 'Logout'),
(663, 'akhmadikhza123@gmail.com', '2021-07-17 06:28:25', 'Login'),
(664, 'akhmadikhza123@gmail.com', '2021-07-17 06:29:39', 'Login'),
(665, 'akhmadikhza123@gmail.com', '2021-07-17 06:29:41', 'Logout'),
(666, 'ikhzabeatles11@gmail.com', '2021-07-17 06:29:45', 'Login'),
(667, 'ikhzabeatles11@gmail.com', '2021-07-17 06:45:24', 'Logout'),
(668, 'ikhzabeatles11@gmail.com', '2021-07-17 07:41:04', 'Login'),
(669, 'ikhzabeatles11@gmail.com', '2021-07-17 07:56:53', 'Logout'),
(670, 'akhmadikhza123@gmail.com', '2021-07-17 08:00:06', 'Logout'),
(671, 'ikhzabeatles11@gmail.com', '2021-07-17 08:02:23', 'Login'),
(672, 'ikhzabeatles11@gmail.com', '2021-07-17 08:05:28', 'Login'),
(673, 'ikhzabeatles11@gmail.com', '2021-07-17 08:05:30', 'Logout'),
(674, 'ikhzabeatles11@gmail.com', '2021-07-17 10:24:27', 'Login'),
(675, 'akhmadikhza123@gmail.com', '2021-07-17 10:25:37', 'Login'),
(676, 'ikhzabeatles11@gmail.com', '2021-07-17 10:27:57', 'Logout'),
(677, 'ikhzabeatles11@gmail.com', '2021-07-17 10:30:43', 'Login'),
(678, 'ikhzabeatles11@gmail.com', '2021-07-17 10:32:34', 'Logout'),
(679, 'akhmadikhza123@gmail.com', '2021-07-17 10:33:35', 'Logout'),
(680, 'ikhzabeatles11@gmail.com', '2021-07-17 11:00:33', 'Login'),
(681, 'ikhzabeatles11@gmail.com', '2021-07-17 11:04:07', 'Logout'),
(682, 'akhmadikhza123@gmail.com', '2021-07-17 11:04:29', 'Login'),
(683, 'ikhzabeatles11@gmail.com', '2021-07-17 11:06:14', 'Login'),
(684, 'akhmadikhza123@gmail.com', '2021-07-17 11:09:52', 'Logout'),
(685, 'ikhzabeatles11@gmail.com', '2021-07-17 11:16:28', 'Login'),
(686, 'ikhzabeatles11@gmail.com', '2021-07-17 11:18:12', 'Logout'),
(687, 'akhmadikhza123@gmail.com', '2021-07-17 11:18:23', 'Login'),
(688, 'ikhzabeatles11@gmail.com', '2021-07-17 11:18:44', 'Logout'),
(689, 'akhmadikhza123@gmail.com', '2021-07-17 11:23:19', 'Logout'),
(690, 'ikhzabeatles11@gmail.com', '2021-07-17 11:23:49', 'Login'),
(691, 'ikhzabeatles11@gmail.com', '2021-07-17 11:24:05', 'Logout'),
(692, 'ikhzabeatles11@gmail.com', '2021-07-17 11:25:05', 'Login'),
(693, 'ikhzabeatles11@gmail.com', '2021-07-17 11:25:12', 'Logout'),
(694, 'akhmadikhza123@gmail.com', '2021-07-17 11:26:50', 'Login'),
(695, 'ikhzabeatles11@gmail.com', '2021-07-17 11:27:59', 'Login'),
(696, 'ikhzabeatles11@gmail.com', '2021-07-17 11:47:50', 'Logout'),
(697, 'akhmadikhza123@gmail.com', '2021-07-17 11:50:25', 'Logout'),
(698, 'akhmadikhza123@gmail.com', '2021-07-17 11:50:30', 'Login'),
(699, 'akhmadikhza123@gmail.com', '2021-07-17 11:50:53', 'Logout'),
(700, 'ikhzabeatles11@gmail.com', '2021-07-17 11:54:31', 'Login'),
(701, 'akhmadikhza123@gmail.com', '2021-07-20 11:50:56', 'Login'),
(702, 'akhmadikhza123@gmail.com', '2021-07-20 19:15:09', 'Login'),
(703, 'akhmadikhza123@gmail.com', '2021-07-20 19:27:37', 'Login'),
(704, 'akhmadikhza123@gmail.com', '2021-07-21 04:35:44', 'Login'),
(705, 'akhmadikhza123@gmail.com', '2021-07-21 07:27:24', 'Logout'),
(706, 'akhmadikhza123@gmail.com', '2021-07-21 07:27:33', 'Login'),
(707, 'akhmadikhza123@gmail.com', '2021-07-21 18:44:38', 'Login'),
(708, 'akhmadikhza123@gmail.com', '2021-07-22 02:41:28', 'Login'),
(709, 'akhmadikhza123@gmail.com', '2021-07-22 06:59:11', 'Logout'),
(710, 'ikhzabeatles11@gmail.com', '2021-07-22 06:59:21', 'Login'),
(711, 'ikhzabeatles11@gmail.com', '2021-07-22 07:03:59', 'Logout'),
(712, 'akhmadikhza123@gmail.com', '2021-07-22 07:04:07', 'Login'),
(713, 'akhmadikhza123@gmail.com', '2021-07-22 07:13:44', 'Logout'),
(714, 'akhmadikhza123@gmail.com', '2021-07-22 07:13:50', 'Login'),
(715, 'akhmadikhza123@gmail.com', '2021-07-22 07:14:26', 'Logout'),
(716, 'akhmadikhza123@gmail.com', '2021-07-22 07:14:53', 'Login'),
(717, 'akhmadikhza123@gmail.com', '2021-07-22 07:30:41', 'Logout'),
(718, 'akhmadikhza123@gmail.com', '2021-07-22 07:32:20', 'Login'),
(719, 'akhmadikhza123@gmail.com', '2021-07-22 18:59:48', 'Login'),
(720, 'ikhzabeatles11@gmail.com', '2021-08-02 06:25:55', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id_penerima` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `kk` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `nama_penerima` varchar(200) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `tgl_penerima` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `id_bantuan`, `kk`, `nik`, `nama_penerima`, `alamat`, `jk`, `pekerjaan`, `tgl_penerima`, `date_created`, `date`) VALUES
(85, 13, '3303152409190000', '3303150401720000', 'Purwadi', 'RT 01 RW 01', 'L', 'Buruh', '02/06/2021', '2021-07-16 22:40:39', '2021-07-17 00:49:34'),
(86, 13, '3303152510180004 ', '3201060408930003', 'FADHIL GUSTRIHASTOMO SUGIARTO', 'RT 01 RW 01', 'L', 'Korban PHK', '02/06/2021', '2021-07-16 22:42:14', '2021-07-17 00:49:37'),
(87, 13, '3303152808190003', '3303155305920001', 'DWI RAHAYU', 'RT 01 RW 02', 'P', 'Korban PHK', '02/06/2021', '2021-07-16 22:43:34', '2021-07-17 00:49:42'),
(88, 13, '3303151804080002', '3303155906470001', 'Kaisem', 'RT 01 RW 02', 'P', 'Buruh', '02/06/2021', '2021-07-16 22:46:11', '2021-07-17 00:49:46'),
(89, 13, '3303151802200005', '3303052201930001', 'JENI DWI ARIADI', 'RT 01 RW 02', 'L', 'Korban PHK', '02/06/2021', '2021-07-16 22:47:41', '2021-07-17 00:49:50'),
(90, 13, '3303151203110019', '3303150612710003', 'SAHERI', 'RT 01 RW 02', 'L', 'Pengangguran', '02/06/2021', '2021-07-16 22:50:38', '2021-07-17 00:49:58'),
(91, 13, '3303150207190004', '3303060208880002', 'ANANG NUR HIDAYAT', 'RT 02 RW 01', 'L', 'Korban PHK', '02/06/2021', '2021-07-16 22:54:37', '2021-07-17 00:50:03'),
(92, 3, '3303150401720001 ', '3303152303800001', 'KHASIDIN', 'RT 01 RW 01', 'L', 'Wiraswasta', '01/05/2021', '2021-07-16 23:44:43', '2021-07-17 00:50:07'),
(93, 3, '33031525101800345', '3303155106730002', 'ROCHYATI', 'RT 01 RW 01', 'P', 'Petani', '01/05/2021', '2021-07-16 23:47:25', '2021-07-17 00:50:11'),
(94, 3, '3303151804080147', '3303151211790001', 'AGUNG WIDODO', 'RT 01 RW 01', 'L', 'Karyawan Swasta', '08/05/2021', '2021-07-16 23:49:19', '2021-07-17 00:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `penerima_old`
--

CREATE TABLE `penerima_old` (
  `id_penerima` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `kk` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `nama_penerima` varchar(200) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `tgl_penerima` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `address` varchar(200) NOT NULL,
  `rt` varchar(30) NOT NULL,
  `rw` varchar(30) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `job_desc` varchar(250) NOT NULL,
  `komentar` varchar(250) NOT NULL,
  `status` varchar(128) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_user`, `name`, `nik`, `email`, `address`, `rt`, `rw`, `no_telp`, `image`, `image2`, `image3`, `job_desc`, `komentar`, `status`, `date_created`) VALUES
(99, 28, 'Akhmad Ikhza Assaufi', '3330107620292000', 'akhmadikhza123@gmail.com', 'jl.h.ibrahim', '2', '5', '083104835777', 'sku.jpg', 'ktp.jpg', 'kk.jpg', '<p>UMKM ini bergerak dalam bidang kuliner</p>\r\n', '', 'Pending', '2021-07-22 07:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `tahap`
--

CREATE TABLE `tahap` (
  `id_tahap` int(11) NOT NULL,
  `tahap` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahap`
--

INSERT INTO `tahap` (`id_tahap`, `tahap`, `date_created`) VALUES
(1, '1', '2021-06-13 16:45:37'),
(2, '2', '2021-06-13 17:01:40'),
(3, '3', '2021-06-13 18:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `nik`, `email`, `image`, `password`, `status`, `role_id`, `is_active`, `date_created`, `date`) VALUES
(5, 'Ikhza Assaufi', '3301076202920003', 'ikhzabeatles11@gmail.com', '1626494565-ikhza.jpg', '$2y$10$PGuw.6GdtkF/B.TLd.nlhei6eIygFPk7O6hkES1ASkSbiMER9rtdK', 0, 1, 1, '2021-04-09 07:58:08', '2021-07-17 04:03:00'),
(28, 'Akhmad Ikhza Assaufi', '3330107620292000', 'akhmadikhza123@gmail.com', 'default.png', '$2y$10$DmWCH7EjPbyjMkNcgvG2hOhsXC/8h5viHtSdIeoYx1OGZOcdyFYYK', 1, 2, 1, '2021-07-17 11:26:17', '2021-07-22 00:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `log_history`
--
ALTER TABLE `log_history`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `penerima_old`
--
ALTER TABLE `penerima_old`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tahap`
--
ALTER TABLE `tahap`
  ADD PRIMARY KEY (`id_tahap`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `log_history`
--
ALTER TABLE `log_history`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `penerima_old`
--
ALTER TABLE `penerima_old`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tahap`
--
ALTER TABLE `tahap`
  MODIFY `id_tahap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
