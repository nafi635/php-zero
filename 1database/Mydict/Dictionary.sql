-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2017 at 07:10 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentEng`
--

CREATE TABLE IF NOT EXISTS `studentEng` (
  `word` varchar(100) NOT NULL,
  `english` varchar(250) NOT NULL,
  `telugu` varchar(250) NOT NULL,
  `other` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentEng`
--

INSERT INTO `studentEng` (`word`, `english`, `telugu`, `other`) VALUES
('tycoon', 'wealthiest bussiness person', 'pedda paarishraamika weththa', ''),
('alliance', 'a group of countries, political parties, or people who have agreed to work together because of share', '', 'some company shared alliance with employees'),
('emphasize', 'to show that something is very important', 'nokki cheppu,udhgaatinchu', ''),
('sprout', 'to produce leaves, hair, or other new developing parts', 'ankurinchu', ''),
('deflate', 'to cause something to become weaker', 'dhravyolbanam tagginchu,gaali theeyu', 'deflates indian shadow economy'),
('endorsement', 'the act of saying that you approve', 'angeekarinchu', ''),
('unleash', 'to suddenly release a violent force that cannot be controlled', 'aakasmikanga modhalaina', 'unleashes his character'),
('athiest', 'who doesnt believes god', 'naastikulu', 'thiest is the opposite word'),
('caliber', 'the degree of quality or excellence of something or someone', '', 'he has caliber'),
('insist', ' to say firmly or demand forcefully', '', 'insist said cook'),
('hack', 'to cut into pieces in a rough and violent way', 'kottadam,mukkalu cheyu', ''),
('leverage', 'authority,leveraging:investing with borrowed money as a way to amplify potential gains', 'palukubadi,adhikaaram', ''),
('render', ' to change words into a different language or form', 'anuvadhinchu,vasthusevalu andhinchu,cheyu', 'have many meaninigs'),
('crusade', ' a long and determined attempt to achieve something that you believe in strongly: ', 'mahodyamammu,matha yuddam', 'crusade against black money'),
('legacy', 'money or property that you receive from someone after they die', 'vaarasatvanga sankraminchina aasthi', ''),
('daunting', 'worried about your ability to achieve something:', 'bedirinchu,bayam kaliginchu,nirutsaaha paruchu', 'keep tracks about all files can be daunting tasks.'),
('semantics', 'the study of meanings in a language:', 'artha vichaarana', 'semantic analysis'),
('obscure', 'not known to many people', 'aprasiddha,niguadahaaa..', 'that is an obscure place in pacific'),
('preeminent', 'more important or powerful than all others: ', 'annitikanna melaina', 'file protection become preeminent'),
('despite', 'without taking any notice of or being influenced by', 'adi vidichipetti pattinchukokunda', 'He managed to eat a big lunch despite having eaten an enormous breakfast.'),
('depict', 'o represent or show something', 'varnana vivarana', 'to depict this design'),
('explicit', 'clear and excact', 'kshunnanga', 'She was very explicit about (= said very clearly and exactly) what she thought was wrong with the plans.'),
('mankind', 'the whole of the human race, including both men and women', '', ''),
('glacier', 'a large mass of ice that moves slowly', 'himaani nadhulu', ''),
('coral', 'substance like rock', '', ''),
('obliged', 'to be forced to do something or feel that you must do something: ', 'upakaaram cheyu,balavantham pettu', ''),
('aesthetic', 'relating to the enjoyment or study of beauty', 'kalaasaundharyaathmakamaina', ''),
('pastoral', 'used to refer to the part of the work of teachers and priests that involves giving help and advice a', 'pashupaalaka sambandhamaina', ''),
('disrupt', 'to prevent something', 'antharaayam,aapadam', ''),
('metabolic', 'chemical processes within the body required for life', 'jeevakriya', ''),
('gravel', 'small, rounded stones, often mixed with sand', 'gulakaraallu', ''),
('isolate', 'to separate something from other things with which it is connected or mixed: ', 'prathyekinchu or vidigaa unchu', ''),
('regime', 'a particular way of operating', 'oka paddathi', ''),
('arid', 'very dry and without enough rain for plants:', 'shushkatha', ''),
('adequate', 'enough or satisfactory for a particular purpose:', 'saripoyentha', ''),
('scarcity', 'a situation in which something is not easy to find or get', 'koratha', ''),
('salinisation', 'a measure of the amount of salt dissolved in water, esp. sea water', 'uppugala,uppani', ''),
('cultivate', 'to prepare land and grow crops on it, or to grow a particular crop', 'pandinchu', ''),
('cope', ' to deal successfully with a difficult situation', 'poteecheyu', ''),
('surpass', 'extremely great', 'adhigaminchu,athikraminchu', ''),
('indeed', 'really or certainly, often used to emphasize something: ', '', 'used to express that something is correct:'),
('relentless', ' continuing in a severe or extreme way: ', 'udhaaranga,abhivruddhi,taggudhala', ''),
('prototype', 'the first example of something, such as a machine or other industrial product, from which all later ', 'moolaroopam,namuuna', ''),
('assessment', 'the act of judging or deciding the amount, value, quality, or importance of something', 'anchanaa', ''),
('bootlegger', 'someone who sells illegally made goods', 'Akramavarthakudu', ''),
('gizmo', 'any small device with a particular purpose:', '', ''),
('afford', 'to be able to buy or do something because you have enough money or time: ', 'karchu cheyu,barinchagalige', 'You can’t afford a police and army of your own'),
('monopoly', '(an organization or group that has) complete control of something, especially an area of business, s', 'guthaadipatyam', ''),
('counterfeit', 'usually for dishonest or illegal purposes: ', 'chattaviruddamaina', ''),
('depreciate', 'to (cause something to) lose value, especially over time: ', 'viluva tagginchu', ''),
('scotch', 'to prevent something from being believed or being done', 'kandinchadam', ''),
('strip', 'to remove, pull, or tear the covering or outer layer from something: ', 'peelika,beradu theeyu,kaali cheyu', ''),
('confront', 'to face, meet, or deal with a difficult situation or person', 'edhurkonu,prathigatinchu', ''),
('brigade', 'a large group of soldiers in an army', 'sainya vibhagam', 'dhoni done better for his brigade'),
('grooming', 'he things that you do to make your appearance clean and neat', '', ''),
('elusive', 'difficult to describe, find, achieve, or remember:', 'anthuchikkani,thappinchu tiruguthunna', ''),
('complacent', 'feeling so satisfied with your own abilities or situation that you feel you do not need to try any harder', 'nirlakshyam,alasatwam', 'dont get complacent :barack obama'),
('scribe', 'a person who copies out documents, especially one employed to do this before printing was invented.', 'vilekari,raaayasakaadu', ''),
('anticipate', 'to imagine or expect that something will happen', 'mundhugaa grahinchu', 'anticipated something about future'),
('reinforcement', 'the act of making something stronger', 'prabhalitha,gattiga cheyadam', ''),
('ambivalence', 'emotions controlling', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
