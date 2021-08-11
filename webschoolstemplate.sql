-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 01:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cDesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cDesc`, `cCode`, `instructor`, `sDate`, `created_at`, `updated_at`) VALUES
(' Advanced Algorithm Design and Data', 'Algorithm design and analysis is a vital aspect of today\'s computer science. This course introduces students to advanced algorithms creation and analysis techniques, as well as their applications in a range of fields. One undergraduate course in algorithms or similar mathematical maturity is required. Auditors and listeners are permitted.', 'CS142', 'Dr. Debra Crosslin', '2016-10-10', '2021-07-26 17:17:08', '2021-08-05 02:41:09'),
('Advanced Algorithms ', 'Studying efficient algorithms effective algorithm design techniques and approaches to handling situations in which no feasible algorithms are known.', 'CS341', 'Dr. Ann Harper', '2021-09-15', '2021-07-26 17:19:08', '2021-08-05 22:18:34'),
('Advanced Functional Programs', 'This course will educate students how to develop and construct libraries and DSLs using the characteristics of modern typed functional programming languages (e.g., OCaml, Haskell). Its goal is to show how these strategies can increase both accuracy and efficiency. Students should have some experience with a typed functional programming language and a basic understanding of type in order to take this module.', 'CS145', 'Dr. Gojo Saturo', '2019-11-04', '2021-07-26 17:17:08', '2021-07-26 17:17:08'),
('Advanced Readings of Computer Science', 'Understanding new inventions in the field of CS', 'CS399', 'Dr. Don John', '2017-06-03', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Advanced Topics in Computer Science', 'The course gives a comprehensive introduction to mathematical logic and its applications in a variety of computer science fields. It includes basic notions including soundness and completeness theorems, compactness, a logic\'s expressive power, and the computing complexity of its basic decision problems. First-order logic and modal logics are used to demonstrate these notions.', 'CS398', 'Dr. Toby Hoyday', '2016-06-17', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Algorithm Design and Data', 'Students study how the data format used in an application impacts its efficiency and usability, such as in online surfing and searching, computer databases, data analysis, and text processing.Lists, stacks, queues, sets, maps, priority queues, trees, and graphs are among the specific subjects covered, as are general algorithmic approaches like sorting, searching, and other data transformations. After completing the course, students will be able to utilise these tools to design and create efficient programmes for a range of applications.Lists, stacks, queues, sets, maps, priority queues, trees, and graphs are among the specific subjects covered, as are general algorithmic approaches like sorting, searching, and other data transformations. After completing the course, students will be able to utilise these tools to design and create efficient programmes for a range of applications.', 'CS136', 'Dr. Nick Fury', '2017-08-14', '2021-07-26 17:08:51', '2021-07-26 17:08:51'),
('Algorithmic Problem Solving', 'Solving some programs with different kind of algorithms - Application and How it works', 'CS231', 'Dr. Atif Vicky', '2018-05-24', '2021-07-26 17:17:46', '2021-07-26 17:17:46'),
('Applications Software Engineering', 'Students will get an understanding of software engineering tools and techniques used in the development of computer-based systems.', 'CS430', 'Dr. Debra Crosslin', '2018-09-16', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Business Systems Analysis', 'The course focuses on systems analysis as a discipline and identifies the roles of the systems analyst and end user in the study and synthesis of computer-based corporate information systems.', 'CS432', 'Dr. Cynthia Good \r\n\r\n', '2018-01-31', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Compiler Construction', 'This course covers the fundamental principles and techniques used in language translators in the past, with a focus on compilers. Strategies for syntactic and semantic analysis, code optimization techniques, and approaches to code creation are among the topics covered and A hands-on introduction to lexical, syntactic, and type-checking, as well as code creation and optimization. This will be used to develop and construct a tiny language compiler.', 'CS444', 'Dr. Atif Vicky', '2018-06-12', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Computation in Business', 'For computing professionals, this degree provides a distinct foundation in business practises. The programme begins with core computer programming, basic data structures, and computer organisation courses, which are supplemented by accounting, management, and economics courses.', 'CS335', 'Dr. Thelma Marin', '2017-03-16', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Computation in Business Databases', 'Meet the needs of students who are interested in the business or public sector of the economy.', 'CS338', 'Dr. Derry Hewitt', '2019-09-11', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Computer Design and Architecture 1', 'The fundamentals of digital design and CPU architecture are covered in this course. Number systems, switching algebra, logic gates, circuit minimization combinational circuits, read-only memory, random-access memory, programmable logic, synchronous and asynchronous sequential circuits, latches, flip-flops, registers, counters, and register transfer language are just a few of the topics covered.', 'CS251', 'Dr. Heather Kendrick', '2016-05-30', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Computer Design and Architecture 2', 'The ideas of computer-based information systems in an organisation will be introduced in this course. Students will investigate the impact of information technology on organisational decision-making as well as managerial ethical problems. The principles of information technology are covered, as well as security, control frameworks, and auditing computer-based systems.', 'CS252', 'Dr. Tony Stark', '2016-10-03', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Concepts for Advanced Computer', 'Understanding new tech related to processors and GPUs', 'CS200', 'Dr. Lora Parks', '2020-10-11', '2021-07-26 17:17:46', '2021-07-26 17:17:46'),
('Data Structures and Management', 'Trees, heaps, stacks, and queues are among the new data structures presented to students. Students also construct and perform operations on graph data structures, define and implement typical methods for working with advanced data structures, and determine which data structure is solving a given problem.', 'CS240', 'Dr. Gem Pen', '2016-02-12', '2021-07-26 17:18:12', '2021-07-26 17:18:12'),
('Data Types and its Structures', 'This course covers widely used and effective data organising approaches, with a focus on data structures, algorithms, and algorithm performance. Students study how the data format used in an application influences its efficiency and usability, such as in web surfing and searching, computer databases, data analysis, and text processing.', 'CS234', 'Dr. Vijay Mercel', '2019-02-19', '2021-07-26 17:18:12', '2021-07-26 17:18:12'),
('Distributed Systems', 'This course will give you a basic understanding of machine learning models  (logistic regression, multilayer perceptrons, convolutional neural networks, natural language processing, and so on), as well as show you how these models can be used to solve complex problems in a variety of industries, ranging from medical diagnostics to image recognition to text prediction.In addition, we\'ve included practise activities that will allow you to apply these data science models to real-world data sets.', 'CS454', 'Dr. Jordan Hollis \r\n\r\n', '2018-11-19', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Formal Languages and Parsing', 'Languages and the ways in which they are represented. Chomsky\'s hierarchy of grammars Sets and machines that run in a specific order. Normal forms and fundamental characteristics in context-free grammars. Transducers and pushdown automata Language operations are performed. In the field of language theory, there are a number of unsolved issues. Programming language design and compiler building are examples of applications.', 'CS462', 'Dr. Katrina Miller', '2018-11-18', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Functional Programs', 'Principles of program design and the fundamentals of computation through functional evaluation', 'CS135', 'Dr. John doe', '2020-06-21', '2021-07-26 17:08:51', '2021-07-26 17:08:51'),
('Honours Thesis', 'The course allows exceptional students to do research under the supervision of a professor and produce a thesis that summarises the findings.', 'CS499', 'Dr. Hank Evans \r\n\r\n', '2016-07-16', '2021-07-26 17:22:05', '2021-07-26 17:22:05'),
('Information Systems Management', 'This course covers how business and technical factors are integrated into information system design implementation and management.', 'CS490', 'Dr. Usman Bhai \r\n\r\n', '2020-06-08', '2021-07-26 17:22:05', '2021-07-26 17:22:05'),
('Intro to Computer Systems', 'Introduction to Computer systems using the C language in the UNIX environment', 'CS230', 'Dr. Cynthia Good', '2019-05-31', '2021-07-26 17:17:46', '2021-07-26 17:17:46'),
('Intro To Computers', 'Students are taught the fundamentals of computer systems. Students learn about computer architecture, the programming languages ‘C\' and ‘Assembly,\' and how to use the Linux operating system. Memory organisation, data representation, and addressing are among the topics covered by students. Machine language principles are introduced to students.', 'CS100', 'Dr.Hooha', '2021-02-22', '2021-07-25 21:33:42', '2021-07-25 21:33:42'),
('Intro to CS 1', 'Learning trees  lists by imperative programming ', 'CS115', 'Dr. Jason Alhadidi', '2017-09-26', '2021-07-26 17:08:13', '2021-07-26 17:08:13'),
('Intro to CS 2', 'This course covers basic computer programming ideas and organised programming techniques, with a focus on effective programming. Analysis, design, implementation, debugging, and deployment are all stages of the software development cycle.', 'CS116', 'Dr. Don John', '2019-12-27', '2021-07-26 17:08:51', '2021-07-26 17:08:51'),
('Intro to DBMS', 'This course will give students a broad introduction of databases, including database history, modern database systems, the various database models, and Structured Query Language (SQL), which is the standard language for accessing and manipulating databases.', 'CS348', 'Dr. Terry Washington', '2016-04-20', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Intro to Programming 1', 'This is the first of a two-course sequence that will teach students how to develop algorithms and programme in a high-level language like C. The course\'s major goals are to improve students\' capacity to recognise, comprehend, and design solutions to a wide range of issues.Computer system overview, hardware and software, problem-solving stages, variables, constants, data types, algorithmic structure, sequential logic, choices, loops, modular programming, one-dimensional arrays, and text files are just a few of the topics covered. Problems such as searching and sorting will be handled if at all practicable.', 'CS105', 'Dr.Hooha', '2016-06-18', '2021-07-25 21:34:49', '2021-07-25 21:34:49'),
('Intro to Programming 2', 'Variable Declaration  Control Flow  Basic Object Oriented Programming', 'CS106', 'Dr. Hank Evans', '2017-02-26', '2021-07-26 17:08:13', '2021-07-26 17:08:13'),
('Introduction to Machine Learning', 'This course will give you a basic understanding of machine learning models  (logistic regression, multilayer perceptrons, convolutional neural networks, natural language processing, and so on), as well as show you how these models can be used to solve complex problems in a variety of industries, ranging from medical diagnostics to image recognition to text prediction.In addition, we\'ve included practise activities that will allow you to apply these data science models to real-world data sets.', 'CS480', 'Dr. Ross Geller \r\n\r\n', '2020-01-16', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Logic and Computation', 'It covers a variety of topics related to logic and computation that are required as background for other courses in Computer Science. ', 'CS245', 'Dr. John Wick', '2018-03-04', '2021-07-26 17:18:12', '2021-07-26 17:18:12'),
('Machine Learning', 'The theoretical underpinnings and algorithm design for machine learning will be covered in this course.', 'CS485', 'Dr. John doe', '2021-06-29', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Management Information Systems', 'This course explores the construction of a CPU and its related components using microprocessor programming. Data representation, arithmetic logic unit, control unit, assembly language ideas, memory segmentation, programming a typical microprocessor instruction set architecture-addressing modes and formats, register set, and runtime stack are some of the topics covered.', 'CS330', 'Dr. Jack Ryan', '2016-10-07', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Multidisciplinary Studies in Computer Science', 'The course focuses on object-oriented analysis and design of small-scale computing systems as well as their implementation in an object-oriented language.', 'CS497', 'Dr. Derry Hewitt \r\n\r\n', '2016-10-12', '2021-07-26 17:22:05', '2021-07-26 17:22:05'),
('Numerical Computation', 'Students will learn about basic algorithms software environments and scientific computing applications.', 'CS370', 'Dr. Katrina Miller', '2016-11-26', '2021-07-26 17:20:48', '2021-07-26 17:20:48'),
('Object Oriented Software Development', 'Introdution to JAVA', 'CS246', 'Dr. Jason Miller', '2017-04-25', '2021-07-26 17:18:12', '2021-07-26 17:18:12'),
('Operating Systems', 'Understanding CPU scheduling concurrent processes process synchronization and inter process communication deadlocks memory management file systems', 'CS350', 'Dr. Devin Grey', '2017-06-13', '2021-07-26 17:20:48', '2021-07-26 17:20:48'),
('Parallel and Concurrent Programming', 'Understanding Complex types of control flow such as multi-level loop exit exceptions coroutines and concurrency are explored using various programming approaches and styles', 'CS343', 'Dr. Jordan Hollis', '2016-04-20', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Principles of Programming', 'Introduces the constructs upon which contemporary programming languages are based. Students investigate programs written in declarative and imperative programming languages including functional, logic, structured, and object-based approaches.', 'CS137', 'Dr. Bufma Asfia', '2020-05-18', '2021-07-26 17:17:08', '2021-07-26 17:17:08'),
('Principles Software Engineering', 'Software engineering is a subject that allows us to use engineering and computer science concepts to create and maintain software that is reliable, usable, and dependable. The course is aimed to introduce software engineering concepts and principles while also demonstrating the software development life cycle.', 'CS247', 'Dr. Donna Poon', '2016-03-21', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Programming and Problem Solving', 'It introduces students to computer science as a discipline that uses computation to solve problems and lays the groundwork for more advanced programming and software development courses. The fundamental ideas of computer science, data structures and algorithms, are introduced in this course.', 'CS157', 'Dr. Begam Ramza', '2016-06-09', '2021-07-26 17:17:08', '2021-07-26 17:17:08'),
('Real-Time Programming', 'Students develop and build a real-time multi-tasking operating system utilizing real-time programming for embedded systems tools and methodologies.', 'CS452', 'Dr. Mike Berg', '2018-11-15', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('Risks and Rewards of Information Systems', 'Understanding Pros and Cons of the Information Systems', 'CS280', 'Dr. Mike Berg', '2016-03-10', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Sequential Programming', 'Sequential with C', 'CS241', 'Dr. Star Stark', '2018-03-08', '2021-07-26 17:18:12', '2021-07-26 17:18:12'),
('Social Media and Tech Fundamentals', 'Learn about the social media, how it interacts with offline company, and how to create your own social media strategy and plan. Investigate how the most successful social media brands operate and what you can learn from them for your own company. Although no prior experience with social networking is required, some familiarity is advantageous. It is recommended that you have access to your Facebook, Twitter, and Instagram accounts.', 'CS155', 'Dr. Usman Bhai', '2017-10-21', '2021-07-26 17:17:08', '2021-07-26 17:17:08'),
('Software Requirements Specification and Analysis', 'Students will learn how to capture software requirements and deal with challenging scenarios when gathering data for system development. Working with customers and learning about the demands of users who engage with a system are given special attention. Elicitation, specification, and management of software system requirements are covered in this course.', 'CS445', 'Dr. John Wick', '2018-05-05', '2021-07-26 17:21:43', '2021-07-26 17:21:43'),
('test', 'test', 'test', 'test', '2021-08-12', '2021-08-09 23:47:32', '2021-08-09 23:47:32'),
('The Social Implications of Computing', 'The influence of computers on individuals companies and society is examined in this course.', 'CS492', 'Dr. Jason Miller \r\n\r\n', '2019-11-26', '2021-07-26 17:22:05', '2021-07-26 17:22:05'),
('Theory of Computing', 'The fundamentals of automata theory, computability theory, and complexity theory are covered in this course. Shows how automata and formal languages are related. Introduces ideas linked to problem computational complexity and discusses which problems can be solved using computational methods (decidability vs undecidability).', 'CS360', 'Dr. Ace Plummer', '2017-02-05', '2021-07-26 17:20:48', '2021-07-26 17:20:48'),
('User Interfaces', 'The foundations of human-computer interaction the user interface design/evaluation process and the architectures within which user interfaces are produced are all covered in this introduction to modern user interfaces.', 'CS349', 'Dr. Kendall levy', '2019-10-03', '2021-07-26 17:19:08', '2021-07-26 17:19:08'),
('Web Oriented Programming', 'This course demonstrates the design and implementation of interactive database-driven web applications. Client-server architectures, interface design, graphics and visualisation, event-driven programming, information management, data modelling, and database systems will all be discussed, with a focus on client-server architectures, interface design, graphics and visualisation, event-driven programming, information management, data modelling, and database systems.', 'CS215', 'Dr. Jose Garner', '2018-01-27', '2021-07-26 17:17:46', '2021-07-26 17:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `enrolleds`
--

CREATE TABLE `enrolleds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_22_234555_create_courses_table', 2),
(5, '2021_07_23_201258_create_enrolleds_table', 3),
(6, '2021_07_23_234555_create_courses_table', 4),
(7, '2021_07_21_234555_create_courses_table', 5),
(8, '2021_07_21_201258_create_enrolleds_table', 6),
(9, '2014_10_13_000000_create_users_table', 7),
(10, '2021_07_20_201258_create_enrolleds_table', 7),
(11, '2014_10_02_000000_create_users_table', 8),
(12, '2021_07_22_201258_create_enrolleds_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jalalshabo@hotmail.com', '$2y$10$Qkdc354qYcNRH6f0Jeipted644pTolIjQJXg3sRu9ufU/fjC3oLO2', '2021-08-05 01:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wdschool.ca', NULL, '$2y$10$mc49G0kd7HEO.s80r9i6g.xJ4LsEejRAZqe20ZUOfbEBAiVrAKOti', NULL, '2021-08-03 22:53:30', '2021-08-03 22:53:30'),
(2, 'Jalal Shabo', 'jalalshabo@hotmail.com', NULL, '$2y$10$o/GbEbtQLF1w.1hnFs5mNORnITrtacTUTFVvGtV.nd.7eAM.QNC6K', NULL, '2021-08-03 22:54:02', '2021-08-03 22:54:02'),
(3, 'bob barkerer', 'bobbarker@priceisright.ca', NULL, '$2y$10$6v4YdqSoTsxq/ZDKnx8/eeAjJztvCnAxuot4dnfroUALCcIGBt9jC', NULL, '2021-08-05 22:20:06', '2021-08-06 02:23:27'),
(5, 'jake mathews', 'jake@jakejake.jake', NULL, '$2y$10$wrQcLnOVO8D3eQUU6HGB0.SJhmsyiW6e8317kaGBeZ/HIvl2MO48.', NULL, '2021-08-05 22:21:15', '2021-08-05 22:21:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolleds`
--
ALTER TABLE `enrolleds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrolleds_user_email_foreign` (`user_email`),
  ADD KEY `enrolleds_course_title_foreign` (`course_title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrolleds`
--
ALTER TABLE `enrolleds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolleds`
--
ALTER TABLE `enrolleds`
  ADD CONSTRAINT `enrolleds_course_title_foreign` FOREIGN KEY (`course_title`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `enrolleds_user_email_foreign` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
