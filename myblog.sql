-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2024 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `date` date NOT NULL,
  `SR_NO` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `article` varchar(3000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`date`, `SR_NO`, `title`, `article`, `image`) VALUES
('2024-09-01', 27, 'PHP Introduction', 'PHP Tutorial\r\nPHP tutorial\r\nPHP tutorial for beginners and professionals provides in-depth knowledge of PHP scripting language. Our PHP tutorial will help you to learn PHP scripting language easily.\r\n\r\nThis PHP tutorial covers all the topics of PHP such as introduction, control statements, functions, array, string, file handling, form handling, regular expression, date and time, object-oriented programming in PHP, math, PHP MySQL, PHP with Ajax, PHP with jQuery and PHP with XML.\r\n\r\nWhat is PHP\r\nPHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.).\r\n\r\nPHP was created by Rasmus Lerdorf in 1994 but appeared in the market in 1995. PHP 7.4.0 is the latest version of PHP, which was released on 28 November. Some important points need to be noticed about PHP are as followed:\r\n\r\nADVERTISEMENT\r\n\r\nADVERTISEMENT\r\nADVERTISEMENT\r\nPHP stands for Hypertext Preprocessor.\r\nPHP is an interpreted language, i.e., there is no need for compilation.\r\nPHP is faster than other scripting languages, for example, ASP and JSP.\r\nPHP is a server-side scripting language, which is used to manage the dynamic content of the website.\r\nPHP can be embedded into HTML.\r\nPHP is an object-oriented language.\r\nPHP is an open-source scripting language.\r\nPHP is simple and easy to learn language.\r\nWhat is PHP\r\nPHP Example\r\n<?php      \r\n    echo \"Hello World!\";  \r\n?>  \r\nOutput:\r\n\r\nHello, World!\r\nWhy use PHP\r\nPHP is a server-side scripting language, which is used to design the dynamic web applications with MySQL database.\r\n\r\nIt handles dynamic content, database as well as session tracking for the website.\r\nYou can create sessions in PHP.\r\nIt can access cookies variable and also set cookies.\r\nIt helps to encrypt the data and apply validation.\r\nPHP supports several protocols such as HTTP, POP3, SNMP, LDAP, IMAP, and many more.\r\nUsing PHP language, you can control the user to access some pages of your website.\r\nAs PHP is easy to install and set up, this is the main reason why PHP is the best language to learn.\r\nPHP can handle the forms, such as - collect the data from users using forms, save it into the database, and return useful information to the user. For example - Registration form.\r\nPHP Features\r\nPHP is very popular language because of its simplicity and open source. There are some important features of PHP given below:\r\n\r\nPHP Features\r\nPerformance:\r\n\r\nPHP script is executed much faster than those scripts which are written in other languages such as JSP and ASP. PHP uses its own memory, so the server workload and loading time is automatically reduced, which results in faster processing speed and better performance.', 'php-tutorial.png'),
('2024-09-06', 28, 'Python Introduction', 'What is Python?\r\nPython is a popular programming language. It was created by Guido van Rossum, and released in 1991.\r\n\r\nIt is used for:\r\n\r\nweb development (server-side),\r\nsoftware development,\r\nmathematics,\r\nsystem scripting.\r\nWhat can Python do?\r\nPython can be used on a server to create web applications.\r\nPython can be used alongside software to create workflows.\r\nPython can connect to database systems. It can also read and modify files.\r\nPython can be used to handle big data and perform complex mathematics.\r\nPython can be used for rapid prototyping, or for production-ready software development.\r\nWhy Python?\r\nPython works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).\r\nPython has a simple syntax similar to the English language.\r\nPython has syntax that allows developers to write programs with fewer lines than some other programming languages.\r\nPython runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.\r\nPython can be treated in a procedural way, an object-oriented way or a functional way.\r\nGood to know\r\nThe most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, although not being updated with anything other than security updates, is still quite popular.\r\nIn this tutorial Python will be written in a text editor. It is possible to write Python in an Integrated Development Environment, such as Thonny, Pycharm, Netbeans or Eclipse which are particularly useful when managing larger collections of Python files.\r\nPython Syntax compared to other programming languages\r\nPython was designed for readability, and has some similarities to the English language with influence from mathematics.\r\nPython uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.\r\nPython relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.', 'Python-Logo.png'),
('2024-09-06', 29, 'What is Java technology and why do I need it?', 'Java is a programming language and computing platform first released by Sun Microsystems in 1995. It has evolved from humble beginnings to power a large share of today’s digital world, by providing the reliable platform upon which many services and applications are built. New, innovative products and digital services designed for the future continue to rely on Java, as well.\r\n\r\nWhile most modern Java applications combine the Java runtime and application together, there are still many applications and even some websites that will not function unless you have a desktop Java installed. Java.com, this website, is intended for consumers who may still require Java for their desktop applications – specifically applications targeting Java 8. Developers as well as users that would like to learn Java programming should visit the dev.java website instead and business users should visit oracle.com/java for more information.\r\n\r\nIs Java free to download?\r\nYes, Java is free to download for personal use.\r\nJava is also free for development: developers can find all the development kits and other useful tools at https://www.oracle.com/javadownload/.\r\n\r\nWhy should I upgrade to the latest Java patch each quarter when prompted?\r\nThe latest Java patches contain important enhancements to improve performance, stability and security of the Java applications that run on your machine. Installing these updates will ensure that your Java applications continue to run with the most up-to-date version.\r\n\r\nMORE TECHNICAL INFORMATION\r\n\r\n\r\nWhat will I get when I download Java software from java.com?\r\nThe Java Runtime Environment (JRE) version 8 is what you get when you download Java software from java.com.\r\n\r\nThe JRE consists of the Java Virtual Machine (JVM), Java platform core classes, and supporting Java platform libraries. The JRE is the runtime portion of Java software, which is all you need to run Java WebStart applications from a supported web browser. It doesn’t come with development tools, though – these tools are part of the Java Development Kit (JDK).\r\n\r\n\r\nWhat is Java Plug-in software?\r\nThe Java Plug-in software is a component of the Java Runtime Environment (JRE). The JRE allows some applications written in the Java programming language to launch via some browsers. The Java Plug-in software is not a standalone program and cannot be installed separately.\r\n\r\n\r\nI have heard the terms Java Virtual Machine and JVM. Is this Java software?\r\nThe Java Virtual Machine is only one part of Java software that is involved in running an application. The Java Virtual Machine is built right into your Java software download, part of the JRE and helps run Java applications.', 'java-logo-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Date` date NOT NULL,
  `postLink` varchar(300) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Date`, `postLink`, `username`, `email`, `message`) VALUES
('2024-09-12', '29', 'Ahsan Ali', 'ahsan@gmail.com', 'lorem ipsum doller sit'),
('2024-09-12', '29', 'Shahzad Ali', 'shahzad@gmail.com', 'lorem ipsum doller sit'),
('2024-09-12', '29', 'Ali Hamza', 'arhamali4510@gmail.com', 'lorem ipsum doller sit'),
('2024-09-13', '29', 'Ali Raza', 'raza@gmail.com', 'lorem ipsum doller sit lorem ipsum doller sitlorem ipsum doller sitlorem ipsum doller sit'),
('2024-09-13', '28', 'Shahzad Ali', 'shahzad@gmail.com', 'This is amazing.'),
('2024-09-13', '28', 'Azmat', 'example@gmail.com', 'I love this article');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('example@gmail.com', 'T490');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `SR_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
