-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 11:25 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgarvez1_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `letter` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `lid` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`letter`, `description`, `lid`, `author_id`) VALUES
('Underrated', 'It’s called “The Underrated Tour” — and it basically goes like this: You’ve got all of these camps out there, right? All these basketball camps, across the country, around the world. And it’s great, man. It’s special. Those camps are how a lot of NBA guys originally made names for themselves. And we should keep that going! But there’s another thing about these camps I’ve been thinking about. And it’s how, if you take a closer look, you’ll see that it’s the same, exclusive group of kids participating in them, over and over. It’s these same four or five-star recruits, players every scout already knows, going from city to city, camp to camp.', 11, 4),
('Allen', 'The story goes, it’s early in the season. Larry’s a rookie. We’re in the players’ parking lot, just one of those days after practice — making moves, you know, talking this that and the third. And then as we’re talking……. we walk up on my Bentley.', 12, 5),
('The Process Is Over', 'I remember this one play so vividly. They’d just gone up over 40…. and I was out there stewing. I’m thinking, like — Alright. 40?? No. F*ck that. Let’s have some pride. And the winner in me kicks in, you know? That guy who’s won all his life, and grinded his way to the league, and isn’t just going to take a loss like that sitting down. So, yeah, I get the ball and I’m thinking — This is it. Here’s your turning point, Sixers fans. I’m going to take this one myself.', 13, 5),
('Not 100% Sure If Ghosts Aren\'t Real', 'I’m not gonna sit here and say, “Yo, ghosts are real!!” Then everybody is going to be like, Hey, there goes Timmy, the ghost guy!\r\n\r\nBut at the same time I’m not going to say outright that ghosts aren’t real either. Because, honestly, that sounds like I’m trying to challenge or call out the spirit worlds or something. Like if you were a ghost, wouldn’t you go out of your way to haunt the people who don’t even think you exist? I mean, that’s basically what happened to the people in Paranormal Activity. And I’m not trying to bring that energy on myself! No sir. ', 14, 1),
('One Hell Of A Ride', 'The series is 2–2, the plane is taking off, and my mind is spiraling out of control. I’m like, “We cannot lose in Cleveland. If we go back to Toronto down 3–2, it’s over. I can’t go through this again. I can’t get this close again and not hold that trophy in my arms. I literally cannot handle it.” ', 15, 4),
('Mamba Mentallity', 'My philosophy was to use my height advantage and shoot over the top of him. I don’t need to try anything, I don’t need to go anywhere, I don’t need to try to back him down. I’ll just shoot over him, because I can get a clean look.', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tank_login_attempts`
--

CREATE TABLE `tank_login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tank_users`
--

CREATE TABLE `tank_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tank_users`
--

INSERT INTO `tank_users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'curry', '$P$BdErtfx2ooT0VRw1qEi.pNeIzbu7ca.', 'curry@gsw.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '96.52.95.121', '2019-04-09 23:06:00', '2019-03-29 12:35:16', '2019-04-10 05:06:00'),
(2, 'durant', '$P$BKoS8YWfnGNNr0wPSi1GVe.QrqfsPZ/', 'kd@gsw.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.197.128.18', '2019-03-29 12:50:00', '2019-03-29 12:49:45', '2019-03-29 18:50:00'),
(3, 'rayray', '$P$B4IHIRme9sZUV6/Jyn5L.Ram0MQA39.', 'rar@fdsf.ca', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.197.128.18', '2019-04-05 09:58:31', '2019-04-04 15:08:22', '2019-04-05 15:58:31'),
(4, 'maria', '$P$BWrxkPJYG0e1VJWUqZOIX22ZA2GQIY.', 'mari@user.ca', 1, 0, NULL, NULL, NULL, NULL, NULL, '96.52.95.121', '2019-04-09 23:06:17', '2019-04-09 13:34:53', '2019-04-10 05:06:17'),
(5, 'iverson', '$P$BOU2dkybgMqzlMW7okDd78iS3fkB.V/', 'ove@hsha.ca', 1, 0, NULL, NULL, NULL, NULL, NULL, '96.52.95.121', '2019-04-09 23:06:47', '2019-04-09 14:41:11', '2019-04-10 05:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `tank_user_autologin`
--

CREATE TABLE `tank_user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tank_user_profiles`
--

CREATE TABLE `tank_user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tank_user_profiles`
--

INSERT INTO `tank_user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tank_login_attempts`
--
ALTER TABLE `tank_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tank_users`
--
ALTER TABLE `tank_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tank_user_autologin`
--
ALTER TABLE `tank_user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `tank_user_profiles`
--
ALTER TABLE `tank_user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tank_login_attempts`
--
ALTER TABLE `tank_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tank_users`
--
ALTER TABLE `tank_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tank_user_profiles`
--
ALTER TABLE `tank_user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
