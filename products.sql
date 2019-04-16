-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 11:30 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `ceflixtunes`
--

CREATE TABLE `ceflixtunes` (
  `id` int(11) NOT NULL,
  `subscription` text NOT NULL,
  `price` text NOT NULL,
  `time` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceflixtunes`
--

INSERT INTO `ceflixtunes` (`id`, `subscription`, `price`, `time`) VALUES
(1, 'Monthly Ceflix Tunes\r\n', '500', 1543587240),
(2, 'Quaterly Ceflix Tunes\r\n', '1400', 1543587383),
(3, 'Yearly Ceflix Tunes\r\n', '5500', 1543587418);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `unit` int(10) NOT NULL,
  `format` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `time` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `unit`, `format`, `price`, `time`) VALUES
(1, 'A man sent from God', 1, 'Audio', '200', 1543404495),
(2, ' Activating the Power', 1, 'Audio', '200', 1543404495),
(3, ' A fresh Anointing', 1, 'Audio', '200', 1543404495),
(4, '  Beholding by Faith', 1, 'Audio', '200', 1543404495),
(5, ' Arise and Shine', 1, 'Audio', '200', 1543404495),
(6, ' Attitude', 1, 'Audio', '200', 1543404495),
(7, ' Beware of Dogs', 1, 'Audio', '200', 1543404495),
(8, ' Building yourself for Greatness', 1, 'Audio', '200', 1543404495),
(9, ' Confession For Living', 1, 'Audio', '200', 1543404495),
(10, 'Declaring Rhema', 1, 'Audio', '200', 1543404495),
(11, ' Desiring the Healer', 1, 'Audio', '200', 1543404495),
(12, ' Demonstrating your Faith', 1, 'Audio', '200', 1543404495),
(13, ' Desolate heritage', 1, 'Audio', '200', 1543404495),
(14, ' Effective Prayer', 1, 'Audio', '200', 1543404495),
(15, ' Effectual Fervent Prayer', 1, 'Audio', '200', 1543404495),
(16, ' Energizing Your spirit For Victory', 1, 'Audio', '200', 1543404495),
(17, '  Enthroned', 1, 'Audio', '200', 1543404495),
(18, ' Essences of Christianity', 1, 'Audio', '200', 1543404495),
(19, ' Explaining Christianity ', 1, 'Audio', '200', 1543404495),
(20, ' Faith Dimensions', 1, 'Audio', '200', 1543404495),
(21, ' Fellowship Through Prayer', 1, 'Audio', '200', 1543404495),
(22, ' Fruits of Redemption', 1, 'Audio', '200', 1543404495),
(23, ' Fulfilling your Purpose', 1, 'Audio', '200', 1543404495),
(24, ' Giving Thanks', 1, 'Audio', '200', 1543404495),
(25, '  Glossa Lalia', 1, 'Audio', '200', 1543404495),
(26, ' Goodly Heritage', 1, 'Audio', '200', 1543404495),
(27, ' God Recipe for Success', 1, 'Audio', '200', 1543404495),
(28, ' God Principles for Financial Increase', 1, 'Audio', '200', 1543404495),
(29, ' Growing in the Word', 1, 'Audio', '200', 1543404495),
(30, ' Heaven In You', 1, 'Audio', '200', 1543404495),
(31, ' Holy Spirit the greatest gift of the Christian', 1, 'Audio', '200', 1543404495),
(32, ' How to Shine', 1, 'Audio', '200', 1543404495),
(33, ' How to Worship', 1, 'Audio', '200', 1543404495),
(34, ' How to Pray', 1, 'Audio', '200', 1543404495),
(35, ' Increase in Fortune', 1, 'Audio', '200', 1543404495),
(36, ' Increase in Grace', 1, 'Audio', '200', 1543404495),
(37, ' Increase in knowledge and Ability', 1, 'Audio', '200', 1543404495),
(38, ' Jesus', 1, 'Audio', '200', 1543404495),
(39, ' Introduction To Tithe and Offering', 1, 'Audio', '200', 1543404495),
(40, ' Jesus our Redemptive Sacrifice', 1, 'Audio', '200', 1543404495),
(41, ' Laying aside every weight', 1, 'Audio', '200', 1543404495),
(42, ' Living In Two Worlds', 1, 'Audio', '200', 1543404495),
(43, ' Living Beyond', 1, 'Audio', '200', 1543404495),
(44, ' Lessons For Life', 1, 'Audio', '200', 1543404495),
(45, ' Lessons From Lot', 1, 'Audio', '200', 1543404495),
(46, ' Look and Live', 1, 'Audio', '200', 1543404495),
(47, ' Loveâ€™s Dimension', 1, 'Audio', '200', 1543404495),
(48, ' Maintaining a Perfect Heart', 1, 'Audio', '200', 1543404495),
(49, ' Making Spiritual Advancement', 1, 'Audio', '200', 1543404495),
(50, ' Making Wise Choices', 1, 'Audio', '200', 1543404495),
(51, ' Ministering  To The Lord', 1, 'Audio', '200', 1543404495),
(52, '  Mixed Multitude', 1, 'Audio', '200', 1543404495),
(53, '3 Important Things', 1, 'Audio', '200', 1543404495),
(54, ' You and your faith', 1, 'Audio', '200', 1543404495),
(55, ' You are my Witnesses', 1, 'Audio', '200', 1543404495),
(56, ' You can be full of Power', 1, 'Audio', '200', 1543404495),
(57, ' Your Seed and your Destiny', 1, 'Audio', '200', 1543404495),
(58, ' 2 Kind of Faith', 1, 'Audio', '200', 1543404495),
(59, ' 2004 The Year of The Double Portion', 1, 'Audio', '200', 1543404495),
(60, ' 2005  The Year of The Spirit', 1, 'Audio', '200', 1543404495),
(61, ' 2006 The Year of the Shinning', 1, 'Audio', '200', 1543404495),
(62, ' 2007 Year of the Supernatural Accomplishment', 1, 'Audio', '200', 1543404495),
(63, '  2008 The Year of Fulfillment', 1, 'Audio', '200', 1543404495),
(64, ' 2009 The year of the 7 fold increase', 1, 'Audio', '200', 1543404495),
(65, ' 2010 The Year of The Greater Light', 1, 'Audio', '200', 1543404495),
(66, ' 3 Phases of God will', 1, 'Audio', '200', 1543404495),
(67, ' 3 Anointings', 1, 'Audio', '200', 1543404495),
(68, ' 4 Important Virtues', 1, 'Audio', '200', 1543404495),
(69, ' One thing needful', 1, 'Audio', '200', 1543404495),
(70, ' Our walk of Faith', 1, 'Audio', '200', 1543404495),
(71, ' Perspective In Prayer', 1, 'Audio', '200', 1543404495),
(72, '   Peace of prosperity', 1, 'Audio', '200', 1543404495),
(73, ' Pastors Refresher Course 2009', 1, 'Audio', '200', 1543404495),
(74, ' Pastors Refresher Course 2011', 1, 'Audio', '200', 1543404495),
(75, ' Power for Change', 1, 'Audio', '200', 1543404495),
(76, ' Power In The Name', 1, 'Audio', '200', 1543404495),
(77, ' Power of Thought', 1, 'Audio', '200', 1543404495),
(78, ' Prayer of Petition', 1, 'Audio', '200', 1543404495),
(79, ' Pressing into the Spirit', 1, 'Audio', '200', 1543404495),
(80, ' Prevailing Prayer', 1, 'Audio', '200', 1543404495),
(81, ' Programming your life for the next phase of Success', 1, 'Audio', '200', 1543404495),
(82, ' Programming yourself for Success', 1, 'Audio', '200', 1543404495),
(83, ' Prosperity and Health', 1, 'Audio', '200', 1543404495),
(84, ' Reigning in Life', 1, 'Audio', '200', 1543404495),
(85, ' Regional Camp meeting Warri', 1, 'Audio', '200', 1543404495),
(86, ' Rise and be Healed', 1, 'Audio', '200', 1543404495),
(87, ' Sanctify the Gold', 1, 'Audio', '200', 1543404495),
(88, ' Seeking a Godly Seed', 1, 'Audio', '200', 1543404495),
(89, ' Serving God Rightly', 1, 'Audio', '200', 1543404495),
(90, ' Serving the Lord', 1, 'Audio', '200', 1543404495),
(91, ' Sinach', 1, 'Audio', '200', 1543404495),
(92, ' Sons of Adoption', 1, 'Audio', '200', 1543404495),
(93, ' Sons of Consolation', 1, 'Audio', '200', 1543404495),
(94, ' Special Men Rally', 1, 'Audio', '200', 1543404495),
(95, ' Striving for the Faith of the Gospel', 1, 'Audio', '200', 1543404495),
(96, ' That Same Spirit', 1, 'Audio', '200', 1543404495),
(97, ' The Audacity of Faith', 1, 'Audio', '200', 1543404495),
(98, ' The Concept of Sin', 1, 'Audio', '200', 1543404495),
(99, ' The Entrance of thy Words', 1, 'Audio', '200', 1543404495),
(100, ' The Fruits of Redemption', 1, 'Audio', '200', 1543404495),
(101, ' The Gift of Healing', 1, 'Audio', '200', 1543404495),
(102, ' The God kind of Faith', 1, 'Audio', '200', 1543404495),
(103, ' The Harvest is Plenteous', 1, 'Audio', '200', 1543404495),
(104, ' The Impartation of the Spirit', 1, 'Audio', '200', 1543404495),
(105, ' The Influence of The Spirit', 1, 'Audio', '200', 1543404495),
(106, ' The Inspiration of the Bible', 1, 'Audio', '200', 1543404495),
(107, ' The Kingdom the Power And the Glory 1-5', 1, 'Audio', '200', 1543404495),
(108, ' The Latent Power of the Human Spirit', 1, 'Audio', '200', 1543404495),
(109, ' The Love of Christ', 1, 'Audio', '200', 1543404495),
(110, ' The Mimshach Anointing', 1, 'Audio', '200', 1543404495),
(111, ' The Ministry of the Holy Spirit 1-4', 1, 'Audio', '200', 1543404495),
(112, 'The Name of Jesus', 1, 'Audio', '200', 1543404495),
(113, ' The New Man in Christ', 1, 'Audio', '200', 1543404495),
(114, ' The Operative power of Godâ€™s Word', 1, 'Audio', '200', 1543404495),
(115, ' The Outpouring of the Spirit', 1, 'Audio', '200', 1543404495),
(116, ' The Overcoming Life', 1, 'Audio', '200', 1543404495),
(117, ' The Person of Jesus', 1, 'Audio', '200', 1543404495),
(118, ' The Person of The Holy Spirit', 1, 'Audio', '200', 1543404495),
(119, ' The Purpose of Christ', 1, 'Audio', '200', 1543404495),
(120, ' Walking on the Water', 1, 'Audio', '200', 1543404495),
(121, ' Watering Your Seed', 1, 'Audio', '200', 1543404495),
(122, ' We play by a different Sets of Rules', 1, 'Audio', '200', 1543404495),
(123, ' Wisdom For Wealth', 1, 'Audio', '200', 1543404495),
(124, ' What does he want', 1, 'Audio', '200', 1543404495),
(125, ' What will you do with the Anointing', 1, 'Audio', '200', 1543404495),
(126, ' When There is no Change as Yet', 1, 'Audio', '200', 1543404495),
(127, ' Where is your faith ( A lesson from Asa)', 1, 'Audio', '200', 1543404495),
(128, ' Who is my Neighbor', 1, 'Audio', '200', 1543404495),
(129, ' Who is the Spirit', 1, 'Audio', '200', 1543404495),
(130, ' Working the Word', 1, 'Audio', '200', 1543404495),
(131, ' Wonderful Councellor', 1, 'Audio', '200', 1543404495),
(132, ' Word Convention Abuja 2006', 1, 'Audio', '200', 1543404495),
(133, ' Ye Are The Light of The World', 1, 'Audio', '200', 1543404495),
(134, ' Yielding to the Spirit ', 1, 'Audio', '200', 1543404495),
(135, ' The Responsibility of Prayer', 1, 'Audio', '200', 1543404495),
(136, ' The Revelation of Jesus', 1, 'Audio', '200', 1543404495),
(137, ' The Spirit and the Dove', 1, 'Audio', '200', 1543404495),
(138, ' The Spirit is Willing', 1, 'Audio', '200', 1543404495),
(139, ' But..', 1, 'Audio', '200', 1543404495),
(140, ' The Visitation and The Blessing', 1, 'Audio', '200', 1543404495),
(141, ' The Word In You', 1, 'Audio', '200', 1543404495),
(142, ' Theory of Nations', 1, 'Audio', '200', 1543404495),
(143, ' Thy Faith hath made thee whole', 1, 'Audio', '200', 1543404495),
(144, ' Training for Righteousness', 1, 'Audio', '200', 1543404495),
(145, ' Transformation by the Word', 1, 'Audio', '200', 1543404495),
(146, ' Understanding faith', 1, 'Audio', '200', 1543404495),
(147, ' Understanding five levels of Relationships', 1, 'Audio', '200', 1543404495),
(148, ' Victim or Victor', 1, 'Audio', '200', 1543404495),
(149, ' Walking in God\r\n\r\n', 1, 'Audio', '200', 1543404495),
(150, 'AS HE IS - Part 1-2', 2, 'Audio', '400', 1543404815),
(151, ' Be Filled with Spirit Part 1- 2', 2, 'Audio', '400', 1543404815),
(152, ' End of the Year Fasting and Prayer 2008 1-2', 2, 'Audio', '400', 1543404815),
(153, ' End of the Year Fasting and Prayer 2007 1-2', 2, 'Audio', '400', 1543404815),
(154, ' Exercising your Spirit    1-2', 2, 'Audio', '400', 1543404815),
(155, ' Exhortation 1-2', 2, 'Audio', '400', 1543404815),
(156, ' Extraordinary Strategist   1-2', 2, 'Audio', '400', 1543404815),
(157, ' Faith Proclamations   1-2', 2, 'Audio', '400', 1543404815),
(158, ' Fire for your future 1-2', 2, 'Audio', '400', 1543404815),
(159, ' First Fruit Offering 1-2', 2, 'Audio', '400', 1543404815),
(160, ' For this cause 1-2', 2, 'Audio', '400', 1543404815),
(161, ' Growing unto Maturity 1-2', 2, 'Audio', '400', 1543404815),
(162, ' Higher life Conference Port Harcourt 1-2', 2, 'Audio', '400', 1543404815),
(163, ' If these things Be in You 1-2', 2, 'Audio', '400', 1543404815),
(164, ' How to have a great day 1-2', 2, 'Audio', '400', 1543404815),
(165, ' In Spirit and in Truth 1-2', 2, 'Audio', '400', 1543404815),
(166, ' Just Riding on with the Lord  1-2', 2, 'Audio', '400', 1543404815),
(167, ' Learning to Prosper  1-2', 2, 'Audio', '400', 1543404815),
(168, ' Leaders Conference Southern African  1-2', 2, 'Audio', '400', 1543404815),
(169, ' Love', 2, 'Audio', '400', 1543404815),
(170, ' Faith and Hope 1-2', 2, 'Audio', '400', 1543404815),
(171, ' Your Tongue and your safety 1-2', 2, 'Audio', '400', 1543404815),
(172, ' Not of this World 1-2', 2, 'Audio', '400', 1543404815),
(173, ' Overcoming your world 1-2', 2, 'Audio', '400', 1543404815),
(174, ' Positioning yourself for the Seven fold Increase 1-2', 2, 'Audio', '400', 1543404815),
(175, ' Success motivation 1-2', 2, 'Audio', '400', 1543404815),
(176, ' Sons of God 1-2', 2, 'Audio', '400', 1543404815),
(177, ' The Desolate Heritage 1-2', 2, 'Audio', '400', 1543404815),
(178, ' The Fellowship of the Holy Spirit 1-2', 2, 'Audio', '400', 1543404815),
(179, ' The Impact of the Holy Spirit on the Human Body 1-2', 2, 'Audio', '400', 1543404815),
(180, ' The Prayer Life of the Missionary Christian 1-2', 2, 'Audio', '400', 1543404815),
(181, ' The Power of your Seed Part 1-2', 2, 'Audio', '400', 1543404815),
(182, ' Who is a Christian 1-2', 2, 'Audio', '400', 1543404815),
(183, ' Word at Work 1-2', 2, 'Audio', '400', 1543404815),
(184, ' 7 Challenges to Winning your Fight of Faith 1-2\r\n\r\n', 2, 'Audio', '400', 1543404815),
(185, 'A time of Change  1-3', 3, 'Audio', '600', 1543404960),
(186, ' Acknowledging Every Good thing  1-3', 3, 'Audio', '600', 1543404960),
(187, ' An Inheritance for You Part 1-3', 3, 'Audio', '600', 1543404960),
(188, ' A People of Prophecy 1-3', 3, 'Audio', '600', 1543404960),
(189, ' Book of Romans Part 1-3', 3, 'Audio', '600', 1543404960),
(190, ' Christ in You 1-3', 3, 'Audio', '600', 1543404960),
(191, ' Being Spiritually Minded 1-3', 3, 'Audio', '600', 1543404960),
(192, ' Christian Consecration 1-3', 3, 'Audio', '600', 1543404960),
(193, ' Living According to the Spirit 1-3', 3, 'Audio', '600', 1543404960),
(194, ' Master Soul winner  Part 1-3', 3, 'Audio', '600', 1543404960),
(195, '                      3 Important Laws Part 1-3', 3, 'Audio', '600', 1543404960),
(196, ' Moments of Worship Vol 1-3', 3, 'Audio', '600', 1543404960),
(197, ' Purpose Power and Plenty 1-3', 3, 'Audio', '600', 1543404960),
(198, ' The Anointing of the Spirit 1-3', 3, 'Audio', '600', 1543404960),
(199, ' The Human Spirit 1-3', 3, 'Audio', '600', 1543404960),
(200, ' 6th and 7th Dimension 1-3', 3, 'Audio', '600', 1543404960),
(201, ' The Secret of Change by the Word 1-3', 3, 'Audio', '600', 1543404960),
(202, '  Training for Reigning 1-3\r\n\r\n', 3, 'Audio', '600', 1543404960),
(203, 'Anticipating Evil Part 1-4', 4, 'Audio', '800', 1543405066),
(204, ' Singles Seminar Part 1-4', 4, 'Audio', '800', 1543405066),
(205, ' The Beautiful People of the Beloved Country 1-4', 4, 'Audio', '800', 1543405066),
(206, ' The Grace of our Lord Jesus 1-4', 4, 'Audio', '800', 1543405066),
(207, ' The Pursuit of Purpose  1-4', 4, 'Audio', '800', 1543405066),
(208, '  The Rhema of God 1-4', 4, 'Audio', '800', 1543405066),
(209, 'The Wonderful Name of Jesus  Part 1-4', 4, 'Audio', '800', 1543405066),
(210, ' This Gospel 1- 4\r\n\r\n\r\n', 4, 'Audio', '800', 1543405066),
(211, 'Being Fruitful and Productive Part 1-5', 5, 'Audio', '1000', 1543405162),
(212, ' God greater Blessing 1-5', 5, 'Audio', '1000', 1543405162),
(213, ' Seed faith 1-5', 5, 'Audio', '1000', 1543405162),
(214, ' The Realm of the Spirit 1-5', 5, 'Audio', '1000', 1543405162),
(215, ' Using the Name of Jesus 1- 5', 5, 'Audio', '1000', 1543405162),
(216, ' Christ Purpose In you Vol 1. (1-5)', 5, 'Audio', '1000', 1543405162),
(217, ' Christ Purpose In you Vol 2. (1-5)', 5, 'Audio', '1000', 1543405162),
(218, ' Christ Purpose In you Vol 3. (1-5)\r\n\r\n', 5, 'Audio', '1000', 1543405162),
(219, 'Missionary Christian 1-6', 6, 'Audio', '1200', 1543405229),
(220, ' 3 Kinds of Knowledge Part 1-6', 6, 'Audio', '1200', 1543405229),
(221, ' The Priestly Ministry of the Believer 1-6', 6, 'Audio', '1200', 1543405229),
(222, ' The Transcendent Life  Part 1-6', 6, 'Audio', '1200', 1543405229),
(223, ' The Voice', 6, 'Audio', '1200', 1543405229),
(224, ' The Word and You 1-6', 6, 'Audio', '1200', 1543405229),
(231, ' Book of Philippians 1-7', 7, 'Audio', '1400', 1543405487),
(232, ' God Last word on your finances 1-7', 7, 'Audio', '1400', 1543405487),
(233, ' How to take Possession of what belongs to you 1-7', 7, 'Audio', '1400', 1543405487),
(234, ' Priesthood And Sacrifice Part 1 â€“ 7', 7, 'Audio', '1400', 1543405487),
(235, ' The Fullness of God 1-7', 7, 'Audio', '1400', 1543405487),
(236, ' Christ Consciousness Vol 1 -3 ( 1-7)\r\n\r\n', 7, 'Audio', '1400', 1543405487),
(237, ' Life in Christ the New Superman 1-8', 8, 'Audio', '1600', 1543405527),
(238, ' The Fullness and the Fire 1-8', 8, 'Audio', '1600', 1543405527),
(239, ' The Newness of Life Part 1- 8\r\n', 8, 'Audio', '1600', 1543405527),
(240, ' Anything is Possible 1-9', 9, 'Audio', '1800', 1543405562),
(241, ' Higher Life Conference Lagos 1-9', 9, 'Audio', '1800', 1543405562),
(242, ' The Authority of the Believer 1-9\r\n\r\n\r\n', 9, 'Audio', '1800', 1543405562),
(243, ' Understanding Righteousness 1-12', 12, 'Audio', '2400', 1543405612),
(244, ' Fight the Good Fight of Faith Vol. 2. 1-12\r\n', 12, 'Audio', '2400', 1543405612),
(245, '3 kinds of Wisdom 1-15\r\n', 15, 'Audio', '3000', 1543405641),
(246, '2006 Year of Supernatural Accomplishment', 1, 'Video', '400', 1543405901),
(247, ' 2009 The Year of The Seven Fold Increase', 1, 'Video', '400', 1543405901),
(248, '   2010 The Year of The Greater Light', 1, 'Video', '400', 1543405901),
(249, ' 2011 My Year As A Burning And Shining Light', 1, 'Video', '400', 1543405901),
(250, ' Attitude', 1, 'Video', '400', 1543405901),
(251, ' \r\n       Desolate Heritages', 1, 'Video', '400', 1543405901),
(252, ' Enthroned', 1, 'Video', '400', 1543405901),
(253, ' Energizing your Spirit for Victory', 1, 'Video', '400', 1543405901),
(254, ' Exercising your spirit', 1, 'Video', '400', 1543405901),
(255, ' Goodly Heritage', 1, 'Video', '400', 1543405901),
(256, ' Heaven in You', 1, 'Video', '400', 1543405901),
(257, ' How to have a great day', 1, 'Video', '400', 1543405901),
(258, ' Increase in Ability and Knowledge', 1, 'Video', '400', 1543405901),
(259, ' Increase in Fortune', 1, 'Video', '400', 1543405901),
(260, ' If these things be in you', 1, 'Video', '400', 1543405901),
(261, ' Loveâ€™s Dimension', 1, 'Video', '400', 1543405901),
(262, ' Ministering To The Lord', 1, 'Video', '400', 1543405901),
(263, ' Our walk of faith', 1, 'Video', '400', 1543405901),
(264, ' Pastors Refresher Course 2011', 1, 'Video', '400', 1543405901),
(265, 'Pastors Refresher Course 2009', 1, 'Video', '400', 1543405901),
(266, 'Prayer:The Responsibility of Prayer', 1, 'Video', '400', 1543405901),
(267, ' Perspectives In  Prayer', 1, 'Video', '400', 1543405901),
(268, ' The Audacity of faith', 1, 'Video', '400', 1543405901),
(269, ' The Entrance of thy words', 1, 'Video', '400', 1543405901),
(270, ' The Word In You', 1, 'Video', '400', 1543405901),
(271, ' The Overcoming Life', 1, 'Video', '400', 1543405901),
(272, ' Understanding Faith', 1, 'Video', '400', 1543405901),
(273, ' We Play By A different Set of Rule', 1, 'Video', '400', 1543405901),
(274, ' Who is the Spirit', 1, 'Video', '400', 1543405901),
(275, ' Working The word', 1, 'Video', '400', 1543405901),
(276, ' Secret of change by the word', 1, 'Video', '400', 1543405901),
(277, ' Serving God Rightly\r\n\r\n', 1, 'Video', '400', 1543405901),
(278, '7 challenges to winning your fight of faith 1-2', 2, 'Video', '800', 1543406008),
(279, ' Be Filled With the Spirit Part 1- 2', 2, 'Video', '800', 1543406008),
(280, ' For this Cause 1-2', 2, 'Video', '800', 1543406008),
(281, ' In spirit and in truth 1-2', 2, 'Video', '800', 1543406008),
(282, ' Jesus Leaders Conference Southern Africa 1-2', 2, 'Video', '800', 1543406008),
(283, ' Pastor Chris Inspiring generation next 1-2', 2, 'Video', '800', 1543406008),
(284, 'The Impact of the Holy Spirit On The Human Body  Part 1-2', 2, 'Video', '800', 1543406008),
(285, ' The prayer life of the missionary Christian 1-2', 2, 'Video', '800', 1543406008),
(286, ' Who is a Christian 1-2', 2, 'Video', '800', 1543406008),
(287, ' Why in the world did Jesus come 1-2', 2, 'Video', '800', 1543406008),
(288, ' Word at work 1-2', 2, 'Video', '800', 1543406008),
(289, ' Sons of God Part 1 - 2\r\n\r\n', 2, 'Video', '800', 1543406008),
(290, '6th and 7th dimension 1-3', 3, 'Video', '1200', 1543406036),
(291, ' Christian Consecration 1-3', 3, 'Video', '1200', 1543406036),
(292, ' Purpose Power and Plenty Part 1 â€“ 3', 3, 'Video', '1200', 1543406036),
(293, ' The Consumate Man 1-3', 3, 'Video', '1200', 1543406036),
(294, ' The Human Spirit 1-3', 3, 'Video', '1200', 1543406036),
(295, ' The Human  Spirit  1-3', 3, 'Video', '1200', 1543406036),
(297, 'Anticipating Evil Part 1-4', 4, 'Video', '1600', 1543406070),
(298, ' Faith to Change Your World Part 1-4', 4, 'Video', '1600', 1543406070),
(299, ' The Wonderful Name of Jesus 1- 4\r\n\r\n', 4, 'Video', '1600', 1543406070),
(300, 'Using the name of Jesus 1- 5\r\n\r\n', 5, 'Video', '2000', 1543406098),
(301, 'Missionary Christian 1-6', 6, 'Video', '2400', 1543406123),
(302, ' Prophesy 1-6\r\n\r\n', 6, 'Video', '2400', 1543406123),
(308, 'Christ Consciouness Part  1-7', 7, 'Video', '2800', 1543406485),
(309, ' How To Take Possession of What Belongs To You  Part 1-7', 7, 'Video', '2800', 1543406485),
(310, ' Priesthood and Sacrifice Part 1-7', 7, 'Video', '2800', 1543406485),
(311, ' The Fullness of God Part 1-7\r\n\r\n', 7, 'Video', '2800', 1543406485),
(312, 'Chronicles of Miracles 1-8', 8, 'Video', '3200', 1543406529),
(313, ' Expose of Miracles 1-8', 8, 'Video', '3200', 1543406529),
(318, 'Higher Life Conference Lagos 1-9', 9, 'Video', '3600', 1543406642),
(319, ' Fight the good fight of faith 1-9\r\n\r\n', 9, 'Video', '3600', 1543406642),
(320, 'Higher Life Conference Lagos 1-9', 9, 'Video', '3600', 1543497264),
(321, ' Fight the good fight of faith 1-9\r\n\r\n', 9, 'Video', '3600', 1543497264),
(336, 'ceflixSubscription', 0, 'Monthly\r\n', '500', 1543829219),
(337, 'ceflixSubscription', 0, 'Quarterly', '1400', 1543829304),
(338, 'ceflixSubscription', 0, 'Yearly', '5500', 1543829325);

-- --------------------------------------------------------

--
-- Table structure for table `products_order`
--

CREATE TABLE `products_order` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `church` text NOT NULL,
  `services` text,
  `currency` text NOT NULL,
  `amountbox` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `reference` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_order`
--

INSERT INTO `products_order` (`id`, `name`, `email`, `phone`, `church`, `services`, `currency`, `amountbox`, `status`, `reference`, `created_at`, `updated_at`) VALUES
(1, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:15:24', '2018-12-20 16:15:24'),
(2, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:16:11', '2018-12-20 16:16:11'),
(3, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:17:38', '2018-12-20 16:17:38'),
(4, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:18:12', '2018-12-20 16:18:12'),
(5, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:18:29', '2018-12-20 16:18:29'),
(6, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:19:01', '2018-12-20 16:19:01'),
(7, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:19:32', '2018-12-20 16:19:32'),
(8, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:20:14', '2018-12-20 16:20:14'),
(9, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3,4', 'NGN', '800', 'pending', '', '2018-12-20 16:22:42', '2018-12-20 16:22:42'),
(10, 'Glory Eben', 'edwin2020@gmail.com', '090234567811', 'CE Virtual Zone, Lagos', '246,247,248,249,250,251,337', 'NGN', '9800', 'pending', '377euctp39', '2018-12-20 16:41:58', '2018-12-20 16:41:58'),
(11, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '3,4,5,6', 'NGN', '800', 'success', '5vm7sgckov', '2018-12-20 17:50:36', '2018-12-20 18:13:04'),
(12, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '249', 'NGN', '400', 'pending', '5xo5dn0c2r', '2018-12-21 10:20:45', '2018-12-21 10:20:45'),
(13, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '250', 'NGN', '400', 'success', '94dajw463n', '2018-12-21 10:25:05', '2018-12-21 10:26:52'),
(14, 'Excell', 'claire@gmail.com', '07068057873', 'CE Virtual Zone, Lagos', '251', 'NGN', '400', 'pending', '2bjfrejp7v', '2018-12-21 10:42:31', '2018-12-21 10:42:31'),
(15, 'Excell', 'claire@gmail.com', '07068057873', 'CE Virtual Zone, Lagos', '249', 'NGN', '400', 'success', '35qewor6dr', '2018-12-21 11:01:12', '2018-12-21 11:02:35'),
(16, 'Esther', 'ebenadams@gmail.com', '07068057873', 'CE Virtual Zone, Lagos', '246,251,321', 'NGN', '4400', 'success', '6vmmb99um3', '2018-12-21 11:02:59', '2018-12-21 11:03:08'),
(17, 'Esther', 'slimcut4lyf@gmail.com', '07068057873', 'CE Ajao Church', '246,247,248,250,251', 'NGN', '2000', 'success', 'bnwogv3twn', '2018-12-21 11:03:33', '2018-12-21 11:03:47'),
(18, 'Excell', 'patrick2018@yahoo.com', '07068057873', 'Isheri, Lagos', '337', 'NGN', '7400', 'success', '3f34pwiw7n', '2018-12-21 11:05:45', '2018-12-21 11:05:54'),
(19, 'Glory Eben', 'slimcut4lyf@gmail.com', '090234567811', 'CE Ajao Church', '246,249,251', 'NGN', '1200', 'success', 'qnq0j2zzcb', '2018-12-21 11:10:58', '2018-12-21 11:11:06'),
(20, 'Lawrence IMM', 'slimcut4lyf@gmail.com', '07068057873', 'CE Ajao Church', '6,7,8', 'NGN', '600', 'success', 'vo7yzp6hsq', '2018-12-21 11:11:59', '2018-12-21 11:12:22'),
(21, 'Adans', 'adamsuzoro@gmail.com', '090234567811', 'Isheri, Lagos', '8', 'NGN', '200', 'pending', 'n2r3hh1ysl', '2018-12-21 11:27:53', '2018-12-21 11:27:53'),
(22, 'Adans', 'adamsuzoro@gmail.com', '090234567811', 'Isheri, Lagos', '8', 'NGN', '200', 'pending', 's2id9dwt7s', '2018-12-21 11:28:34', '2018-12-21 11:28:34'),
(23, 'Glory Eben', 'ebenadams@gmail.com', '07068057873', 'Isheri, Lagos', '8,245', 'NGN', '3200', 'pending', '8yct0vqo81', '2018-12-21 11:30:15', '2018-12-21 11:30:15'),
(24, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3', 'NGN', '600', 'pending', 'gubx178btk', '2018-12-24 14:59:21', '2018-12-24 14:59:21'),
(25, 'Lawrence IMM', 'slimcut4lyf@gmail.com', '090234567811', 'CE Ajao Church', '5', 'NGN', '200', 'pending', 'dmp4mkvz5u', '2018-12-24 17:13:54', '2018-12-24 17:13:54'),
(26, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '4', 'USD', '3', 'pending', 'fc1ld4auw2', '2018-12-24 17:17:34', '2018-12-24 17:17:34'),
(27, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '3', 'NGN', '200', 'pending', 'fuwxtn8zzp', '2018-12-24 17:23:40', '2018-12-24 17:23:40'),
(28, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1', 'NGN', '200', 'pending', '7i95l6kvyn', '2018-12-24 17:29:43', '2018-12-24 17:29:43'),
(29, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,4', 'NGN', '400', 'pending', 'olpen8kupp', '2018-12-24 17:55:07', '2018-12-24 17:55:07'),
(30, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '4', 'NGN', '200', 'pending', '6p8pcro714', '2018-12-27 09:55:59', '2018-12-27 09:55:59'),
(31, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '4', 'NGN', '200', 'pending', 'j62isf4n78', '2018-12-27 09:56:02', '2018-12-27 09:56:02'),
(32, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '4,5', 'NGN', '400', 'pending', '97j8mmj14z', '2018-12-27 09:58:44', '2018-12-27 09:58:44'),
(33, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '7,8,246,247,336,337', 'NGN', '16000', 'pending', 'vzuvnhp0me', '2018-12-27 10:00:15', '2018-12-27 10:00:15'),
(34, 'Glory Eben', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,5,7,8,247,251,337,338', 'NGN', '16400', 'pending', 'glo6fq06mp', '2018-12-27 10:20:21', '2018-12-27 10:20:21'),
(35, 'Lawrence IMM', 'slimcut4lyf@gmail.com', '090234567811', 'CE Ajao Church', '4,5,6,246,249,251,337', 'NGN', '9200', 'pending', '6sx1m38yvx', '2018-12-27 11:01:27', '2018-12-27 11:01:27'),
(36, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '7', 'USD', '3', 'pending', '6yk607sfyf', '2018-12-28 09:23:46', '2018-12-28 09:23:46'),
(37, 'Glory Eben', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '7,8', 'NGN', '400', 'pending', 'eamx91hhro', '2018-12-28 09:27:00', '2018-12-28 09:27:00'),
(38, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '7', 'NGN', '200', 'pending', 'fjulxw23cg', '2018-12-28 10:11:01', '2018-12-28 10:11:01'),
(39, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '6', 'NGN', '200', 'pending', 'gf2igrrq2x', '2018-12-28 10:15:42', '2018-12-28 10:15:42'),
(40, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '1,2,3', 'NGN', '600', 'pending', 'qhkzn0rewq', '2018-12-28 10:40:42', '2018-12-28 10:40:42'),
(41, 'Patrick', 'slimcut4lyf@gmail.com', '090234567811', 'CE Ajao Church', '2,4,248,338', 'NGN', '8200', 'pending', 'mlrpkzd9ta', '2018-12-28 11:15:09', '2018-12-28 11:15:09'),
(42, 'Patrick', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '7,248,338', 'NGN', '8000', 'pending', 'n15ispy62l', '2019-01-02 10:11:02', '2019-01-02 10:11:02'),
(43, 'Lawrence IMM', 'patrick2018@yahoo.com', '090234567811', 'CE Ajao Church', '5,7,8,246,248,251,338', 'NGN', '9200', 'pending', 'cyywbydmzb', '2019-01-02 10:29:24', '2019-01-02 10:29:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ceflixtunes`
--
ALTER TABLE `ceflixtunes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_order`
--
ALTER TABLE `products_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ceflixtunes`
--
ALTER TABLE `ceflixtunes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT for table `products_order`
--
ALTER TABLE `products_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
