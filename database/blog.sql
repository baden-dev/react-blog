-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2023 at 05:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `content`, `post_date`, `post_time`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat urna sed enim facilisis luctus. Vivamus vitae neque et enim iaculis blandit. Sed rutrum massa at nisi finibus, vel varius eros bibendum. In hac habitasse platea dictumst. Aliquam sit amet purus leo. Duis euismod augue et nibh egestas, eget aliquet lorem facilisis. Integer vel erat urna. Donec rhoncus nisl eget arcu bibendum tempor.', '2022-03-25', '10:30:00'),
(2, 'The Future of Artificial Intelligence', 'Artificial intelligence has rapidly advanced in recent years, and many experts predict that it will play an increasingly important role in our lives in the coming decades. From self-driving cars to virtual assistants, AI is already transforming the way we live and work. However, there are also concerns about the ethical implications of this technology, and many people worry about the impact it will have on jobs and privacy. Despite these concerns, there is no doubt that AI will continue to be a major area of development in the tech industry.', '2023-03-24', '10:00:00'),
(4, 'The Benefits of Online Learning for Students', 'Online learning has become increasingly popular in recent years, and for good reason. Not only does it provide more flexibility and convenience for students, but it can also be more cost-effective than traditional classroom learning. Additionally, online courses can offer a wider variety of subjects and instructors, allowing students to tailor their education to their specific needs and interests. Of course, there are also challenges to online learning, such as the need for self-discipline and the lack of face-to-face interaction. However, with the right tools and support, online learning can be an excellent way for students to achieve their academic goals.', '2023-03-20', '12:00:00'),
(5, 'Exploring the Best Hidden Gems of Italy', 'While Italy is known for its world-famous cities like Rome, Florence, and Venice, there are many other incredible destinations to discover in this beautiful country. From the picturesque Amalfi Coast to the charming hill towns of Tuscany, Italy is full of hidden gems waiting to be explored. Whether you\'re interested in art, history, or cuisine, there is something for everyone in Italy. So pack your bags and get ready for an unforgettable adventure.', '2023-03-23', '14:00:00'),
(6, 'The Importance of Sleep for Your Health', 'Getting enough sleep is crucial for maintaining good health. Sleep plays a vital role in many essential functions, including hormone regulation, immune system function, and brain health. Lack of sleep has been linked to a range of health problems, including obesity, diabetes, and cardiovascular disease. To ensure that you get the recommended 7-9 hours of sleep per night, try to establish a regular sleep schedule, create a relaxing bedtime routine, and avoid electronic devices in the bedroom.', '2023-01-01', '20:00:00'),
(7, 'The Rise of Esports: A New Era of Competitive Gaming', 'Esports, or competitive video gaming, has exploded in popularity in recent years, with millions of fans tuning in to watch their favorite players compete. The esports industry has even surpassed traditional sports in terms of revenue, with major tournaments offering millions of dollars in prize money. While some people still view gaming as a hobby, the rise of esports has proven that it can be a serious form of competition. With new games and technologies constantly emerging, it is an exciting time for the world of esports.', '2023-02-17', '16:00:00'),
(9, 'The Benefits of Hiking: Why You Should Hit the Trails', 'Hiking is one of the best ways to experience the great outdoors and get some exercise at the same time. Not only is it a fun and enjoyable activity, but it also has a number of health benefits. Hiking can help improve your cardiovascular health, build strength and endurance, and even boost your mood and mental well-being. Plus, it is a great way to explore new areas and connect with nature. Whether you are a seasoned hiker or just starting out, there are plenty of trails and routes to explore, from easy day hikes to multi-day backpacking trips. So why not grab your hiking boots and hit the trails today?', '2023-02-24', '10:00:00'),
(12, 'The Benefits of Hiking: Why You Should Hit the Trails', 'Hiking is one of the best ways to experience the great outdoors and get some exercise at the same time. Not only is it a fun and enjoyable activity, but it also has a number of health benefits. Hiking can help improve your cardiovascular health, build strength and endurance, and even boost your mood and mental well-being. Plus, it is a great way to explore new areas and connect with nature. Whether you are a seasoned hiker or just starting out, there are plenty of trails and routes to explore, from easy day hikes to multi-day backpacking trips. So why not grab your hiking boots and hit the trails today?', '2023-02-24', '10:00:00'),
(33, 'Abcdefghijklmnopqrs..', '0123456789', '2022-11-09', '19:34:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
