-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2025 at 11:21 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickmnyi_pickmycollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `description`, `image`, `author`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Indira Gandhi National Open University (IGNOU)', 'indira-gandhi-national-open-university-ignou', '<h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong style=\"font-size: 1rem;\">Overview:</strong><span style=\"font-size: 1rem;\">&nbsp;Established in 1985, IGNOU is a leader in distance education in India. It caters to a large number of students across the nation and abroad. With its main campus in New Delhi, IGNOU operates through a vast network of regional centers and study centers.</span><br></h4><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Programs Offered:</strong>&nbsp;IGNOU offers a wide variety of programs including undergraduate, postgraduate, diploma, and certificate courses. Fields of study include humanities, social sciences, education, management, law, and technology. Noteworthy programs include:</p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Bachelor of Arts (BA)</strong></li><li><strong>Master of Business Administration (MBA)</strong></li><li><strong>Post Graduate Diploma in Education (PGDE)</strong></li></ul><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Features:</strong>&nbsp;IGNOU is renowned for its flexible study options and comprehensive support. It provides printed study materials, online resources, and interactive sessions. The university also conducts examinations at multiple locations to accommodate its vast student base.</p><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Eligibility:</strong>&nbsp;Admission requirements vary by program. Generally, undergraduate programs require completion of higher secondary education, while postgraduate programs require a relevant undergraduate degree.</p><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Website:</strong>&nbsp;<a rel=\"noopener\" target=\"_new\" href=\"https://www.ignou.ac.in/\">IGNOU</a></p>', 'ignou1719991647_240825082806.jpg', 'Online', 1, '2024-08-25 02:58:06', '2024-08-25 02:58:06'),
(2, 'Jawaharlal Nehru Technological University (JNTU)', 'jawaharlal-nehru-technological-university-jntu', '<h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong style=\"font-size: 1rem;\">Overview:</strong><span style=\"font-size: 1rem;\">&nbsp;Founded in 1972, JNTU has established itself as a prominent engineering university in India. It offers distance education through its Centre for Distance Learning (CDL), which provides courses primarily in the fields of engineering, technology, and management.</span><br></h4><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Programs Offered:</strong>&nbsp;JNTU’s distance education programs are designed to provide technical and managerial skills. Key offerings include:</p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Bachelor of Technology (B.Tech)</strong></li><li><strong>Master of Technology (M.Tech)</strong></li><li><strong>Master of Business Administration (MBA)</strong></li></ul><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Features:</strong>&nbsp;JNTU emphasizes practical knowledge and industry relevance in its distance learning programs. The university offers online lectures, virtual labs, and interactive tutorials. It also conducts regular assessments to ensure student progress.</p><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Eligibility:</strong>&nbsp;For undergraduate programs, candidates must have completed higher secondary education with a focus on science and mathematics. Postgraduate programs require a relevant undergraduate degree.</p><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Website:</strong>&nbsp;<a rel=\"noopener\" target=\"_new\" href=\"https://www.jntuh.ac.in/\">JNTU</a></p>', 'unknown_240825083138.png', 'Online', 1, '2024-08-25 03:01:38', '2024-08-25 03:01:38'),
(3, 'CAT Exam: Complete Guide 2025', 'cat-exam-complete-guide-2025', '<p>CAT Exam 2025: Eligibility, Exam Pattern, Syllabus, Top Colleges &amp; Dates<span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: medium;\"><br></span></p><p><span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: medium;\">Prepare for CAT 2025 with our comprehensive guide. Get details on eligibility, exam pattern, syllabus, marking scheme, and top colleges accepting CAT scores.</span><br></p><p><span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: medium;\">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></p><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Introduction to CAT Exam 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>Common Admission Test (CAT)</strong>&nbsp;is one of the most prestigious management entrance exams in India, conducted annually by the Indian Institutes of Management (IIMs). It is the gateway for admission to top business schools (B-schools) across India. The exam is crucial for aspirants aiming to pursue MBA or Post-Graduate Diploma in Management (PGDM) programs. CAT assesses a candidate\'s analytical skills, reasoning abilities, quantitative aptitude, and English proficiency.</p><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Exam Overview</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Full Form</strong>: Common Admission Test</li><li><strong>Conducting Body</strong>: Indian Institutes of Management (IIMs)</li><li><strong>Mode of Exam</strong>: Computer-based Test</li><li><strong>Frequency</strong>: Annually (usually in November)</li><li><strong>Duration</strong>: 2 hours</li><li><strong>Total Marks</strong>: 300</li><li><strong>Eligibility</strong>: Graduation (10+2+3 system) with at least 50% marks (45% for SC/ST/PWD candidates).</li><li><strong>Application Process</strong>: Online via the official CAT website.</li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Exam 2025 Dates</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>CAT 2025 Registration Start Date</strong>: August 2025 (Expected)</li><li><strong>CAT 2025 Registration End Date</strong>: September 2025 (Expected)</li><li><strong>CAT 2025 Admit Card Release</strong>: October 2025</li><li><strong>CAT 2025 Exam Date</strong>: November 2025</li><li><strong>CAT 2025 Result Announcement</strong>: December 2025</li></ul><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Exam Pattern 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>CAT exam pattern</strong>&nbsp;consists of three main sections:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Verbal Ability and Reading Comprehension (VARC)</strong>:</p><ul><li>Number of Questions: 24</li><li>Types of Questions: Reading Comprehension, Verbal Reasoning</li><li>Duration: 40 minutes</li></ul></li><li><p><strong>Data Interpretation and Logical Reasoning (DILR)</strong>:</p><ul><li>Number of Questions: 20</li><li>Types of Questions: Data Interpretation, Logical Puzzles</li><li>Duration: 40 minutes</li></ul></li><li><p><strong>Quantitative Ability (QA)</strong>:</p><ul><li>Number of Questions: 26</li><li>Types of Questions: Arithmetic, Algebra, Geometry, Number System, etc.</li><li>Duration: 40 minutes</li></ul></li></ol><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Total Questions</strong>: 70<br><strong>Total Duration</strong>: 2 hours (each section 40 minutes)<br><strong>Marking Scheme</strong>:</p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>+3 marks</strong>&nbsp;for each correct answer</li><li><strong>-1 mark</strong>&nbsp;for each incorrect answer (except in non-MCQ questions)</li><li>No penalty for unattempted questions</li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Syllabus 2025</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Verbal Ability and Reading Comprehension (VARC)</strong>:</p><ul><li>Vocabulary</li><li>English Usage and Grammar</li><li>Reading Comprehension (passages from various genres like humanities, business, etc.)</li></ul></li><li><p><strong>Data Interpretation and Logical Reasoning (DILR)</strong>:</p><ul><li>Tables, Graphs, Charts, and Caselets</li><li>Syllogism</li><li>Blood Relations</li><li>Logical Venn Diagrams</li></ul></li><li><p><strong>Quantitative Ability (QA)</strong>:</p><ul><li>Number System</li><li>Algebra (Linear/Quadratic Equations)</li><li>Arithmetic (Profit and Loss, Time and Work, Time, Speed and Distance)</li><li>Geometry (Mensuration, Coordinate Geometry)</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Top Colleges Accepting CAT Scores</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>CAT exam</strong>&nbsp;opens doors to the prestigious IIMs, and other top B-schools in India. Below is a list of top institutions that accept CAT scores:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Indian Institutes of Management (IIMs)</strong>:</p><ul><li>IIM Ahmedabad</li><li>IIM Bangalore</li><li>IIM Calcutta</li><li>IIM Lucknow</li><li>IIM Kozhikode</li><li>IIM Indore</li></ul></li><li><p><strong>Other Renowned Institutes</strong>:</p><ul><li>XLRI Jamshedpur (XAT score also accepted)</li><li>SP Jain Institute of Management</li><li>FMS Delhi</li><li>MDI Gurgaon</li><li>JBIMS Mumbai</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Eligibility Criteria 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">To appear for the CAT exam, candidates must fulfill the following eligibility criteria:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Educational Qualification</strong>:</p><ul><li>A Bachelor\'s degree (in any discipline) with at least 50% marks (45% for SC/ST/PWD).</li><li>Candidates in their final year of graduation can also apply.</li></ul></li><li><p><strong>Age Limit</strong>:<br>There is no upper age limit for appearing for CAT.</p></li><li><p><strong>Nationality</strong>:<br>Indian Nationals, as well as candidates from abroad, are eligible. Foreign candidates must meet the criteria of the respective IIMs.</p></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT 2025 Preparation Tips</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Understand the Exam Pattern</strong>: Start by thoroughly understanding the exam pattern and marking scheme.</li><li><strong>Create a Study Plan</strong>: Divide your preparation into manageable sections and set daily or weekly goals.</li><li><strong>Focus on Time Management</strong>: Practice time-bound mock tests to increase speed and accuracy.</li><li><strong>Revise Regularly</strong>: Regular revisions are key to retaining formulas, rules, and concepts.</li><li><strong>Take Mock Tests</strong>: CAT mock tests give you an understanding of the real exam scenario, helping you improve your speed and accuracy.</li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Application Process for CAT Exam 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>application process for CAT</strong>&nbsp;is completely online. Follow these steps:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Visit the Official CAT Website</strong>: Go to&nbsp;<a rel=\"noopener\" target=\"_new\" href=\"http://www.iimcat.ac.in/\">www.iimcat.ac.in</a>.</li><li><strong>Register Yourself</strong>: Fill in basic details and generate your login credentials.</li><li><strong>Fill in the Application Form</strong>: Provide personal, academic, and work details.</li><li><strong>Upload Documents</strong>: Upload scanned images of your photograph, signature, and other required documents.</li><li><strong>Pay Application Fee</strong>: Payment can be made through debit/credit card or net banking.</li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT 2025 Admit Card and Result</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Admit Card</strong>: Once the registration is completed, candidates can download the admit card from the official website in October 2025. The admit card will contain important details like the exam center, timings, and guidelines.</p></li><li><p><strong>Result</strong>: The results for CAT 2025 will be declared in December 2025. Candidates can check their results by logging into the CAT website with their login credentials.</p></li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Frequently Asked Questions (FAQs) About CAT Exam</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>What is the CAT exam eligibility?</strong></p><ul><li>Candidates must have a bachelor’s degree with a minimum of 50% marks. Final-year graduates can also apply.</li></ul></li><li><p><strong>How many times can I attempt the CAT exam?</strong></p><ul><li>There is no limit on the number of attempts for the CAT exam.</li></ul></li><li><p><strong>What is the difficulty level of the CAT exam?</strong></p><ul><li>The CAT exam is known for its moderate to high difficulty level. Proper preparation and practice are necessary to succeed.</li></ul></li><li><p><strong>What are the important dates for CAT 2025?</strong></p><ul><li>Registration starts in August, the exam will be held in November, and results will be declared in December.</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><span style=\"font-size: 1rem;\">The&nbsp;</span><strong style=\"font-size: 1rem;\">Common Admission Test (CAT)</strong><span style=\"font-size: 1rem;\">&nbsp;is undoubtedly one of the most competitive and rigorous exams in India for MBA aspirants. It requires consistent preparation, a well-thought-out strategy, and ample practice. Candidates who follow a structured preparation plan can not only crack the exam but also secure admission to top business schools in India.</span><br></h3><div><span style=\"font-size: 1rem;\"><br></span></div><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">For more information about other entrance exams, visit our website&nbsp;<strong>PickMyColleges.com</strong>, your one-stop resource for all admission-related queries!</p>', 'images3_250118071139.jpeg', 'Author', 1, '2025-01-18 01:41:39', '2025-01-18 01:41:39'),
(4, 'Common Admission Test (CAT): Complete Guide 2025', 'common-admission-test-cat-complete-guide-2025', '<p>CAT Exam 2025: Eligibility, Exam Pattern, Syllabus, Top Colleges &amp; Dates<span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: medium;\"><br></span></p><p><span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: medium;\">Prepare for CAT 2025 with our comprehensive guide. Get details on eligibility, exam pattern, syllabus, marking scheme, and top colleges accepting CAT scores.</span><br></p><p><span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: medium;\">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></p><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Introduction to CAT Exam 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>Common Admission Test (CAT)</strong>&nbsp;is one of the most prestigious management entrance exams in India, conducted annually by the Indian Institutes of Management (IIMs). It is the gateway for admission to top business schools (B-schools) across India. The exam is crucial for aspirants aiming to pursue MBA or Post-Graduate Diploma in Management (PGDM) programs. CAT assesses a candidate\'s analytical skills, reasoning abilities, quantitative aptitude, and English proficiency.</p><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Exam Overview</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Full Form</strong>: Common Admission Test</li><li><strong>Conducting Body</strong>: Indian Institutes of Management (IIMs)</li><li><strong>Mode of Exam</strong>: Computer-based Test</li><li><strong>Frequency</strong>: Annually (usually in November)</li><li><strong>Duration</strong>: 2 hours</li><li><strong>Total Marks</strong>: 300</li><li><strong>Eligibility</strong>: Graduation (10+2+3 system) with at least 50% marks (45% for SC/ST/PWD candidates).</li><li><strong>Application Process</strong>: Online via the official CAT website.</li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Exam 2025 Dates</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>CAT 2025 Registration Start Date</strong>: August 2025 (Expected)</li><li><strong>CAT 2025 Registration End Date</strong>: September 2025 (Expected)</li><li><strong>CAT 2025 Admit Card Release</strong>: October 2025</li><li><strong>CAT 2025 Exam Date</strong>: November 2025</li><li><strong>CAT 2025 Result Announcement</strong>: December 2025</li></ul><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Exam Pattern 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>CAT exam pattern</strong>&nbsp;consists of three main sections:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Verbal Ability and Reading Comprehension (VARC)</strong>:</p><ul><li>Number of Questions: 24</li><li>Types of Questions: Reading Comprehension, Verbal Reasoning</li><li>Duration: 40 minutes</li></ul></li><li><p><strong>Data Interpretation and Logical Reasoning (DILR)</strong>:</p><ul><li>Number of Questions: 20</li><li>Types of Questions: Data Interpretation, Logical Puzzles</li><li>Duration: 40 minutes</li></ul></li><li><p><strong>Quantitative Ability (QA)</strong>:</p><ul><li>Number of Questions: 26</li><li>Types of Questions: Arithmetic, Algebra, Geometry, Number System, etc.</li><li>Duration: 40 minutes</li></ul></li></ol><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Total Questions</strong>: 70<br><strong>Total Duration</strong>: 2 hours (each section 40 minutes)<br><strong>Marking Scheme</strong>:</p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>+3 marks</strong>&nbsp;for each correct answer</li><li><strong>-1 mark</strong>&nbsp;for each incorrect answer (except in non-MCQ questions)</li><li>No penalty for unattempted questions</li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Syllabus 2025</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Verbal Ability and Reading Comprehension (VARC)</strong>:</p><ul><li>Vocabulary</li><li>English Usage and Grammar</li><li>Reading Comprehension (passages from various genres like humanities, business, etc.)</li></ul></li><li><p><strong>Data Interpretation and Logical Reasoning (DILR)</strong>:</p><ul><li>Tables, Graphs, Charts, and Caselets</li><li>Syllogism</li><li>Blood Relations</li><li>Logical Venn Diagrams</li></ul></li><li><p><strong>Quantitative Ability (QA)</strong>:</p><ul><li>Number System</li><li>Algebra (Linear/Quadratic Equations)</li><li>Arithmetic (Profit and Loss, Time and Work, Time, Speed and Distance)</li><li>Geometry (Mensuration, Coordinate Geometry)</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Top Colleges Accepting CAT Scores</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>CAT exam</strong>&nbsp;opens doors to the prestigious IIMs, and other top B-schools in India. Below is a list of top institutions that accept CAT scores:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Indian Institutes of Management (IIMs)</strong>:</p><ul><li>IIM Ahmedabad</li><li>IIM Bangalore</li><li>IIM Calcutta</li><li>IIM Lucknow</li><li>IIM Kozhikode</li><li>IIM Indore</li></ul></li><li><p><strong>Other Renowned Institutes</strong>:</p><ul><li>XLRI Jamshedpur (XAT score also accepted)</li><li>SP Jain Institute of Management</li><li>FMS Delhi</li><li>MDI Gurgaon</li><li>JBIMS Mumbai</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT Eligibility Criteria 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">To appear for the CAT exam, candidates must fulfill the following eligibility criteria:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Educational Qualification</strong>:</p><ul><li>A Bachelor\'s degree (in any discipline) with at least 50% marks (45% for SC/ST/PWD).</li><li>Candidates in their final year of graduation can also apply.</li></ul></li><li><p><strong>Age Limit</strong>:<br>There is no upper age limit for appearing for CAT.</p></li><li><p><strong>Nationality</strong>:<br>Indian Nationals, as well as candidates from abroad, are eligible. Foreign candidates must meet the criteria of the respective IIMs.</p></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT 2025 Preparation Tips</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Understand the Exam Pattern</strong>: Start by thoroughly understanding the exam pattern and marking scheme.</li><li><strong>Create a Study Plan</strong>: Divide your preparation into manageable sections and set daily or weekly goals.</li><li><strong>Focus on Time Management</strong>: Practice time-bound mock tests to increase speed and accuracy.</li><li><strong>Revise Regularly</strong>: Regular revisions are key to retaining formulas, rules, and concepts.</li><li><strong>Take Mock Tests</strong>: CAT mock tests give you an understanding of the real exam scenario, helping you improve your speed and accuracy.</li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Application Process for CAT Exam 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>application process for CAT</strong>&nbsp;is completely online. Follow these steps:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Visit the Official CAT Website</strong>: Go to&nbsp;<a rel=\"noopener\" target=\"_new\" href=\"http://www.iimcat.ac.in/\">www.iimcat.ac.in</a>.</li><li><strong>Register Yourself</strong>: Fill in basic details and generate your login credentials.</li><li><strong>Fill in the Application Form</strong>: Provide personal, academic, and work details.</li><li><strong>Upload Documents</strong>: Upload scanned images of your photograph, signature, and other required documents.</li><li><strong>Pay Application Fee</strong>: Payment can be made through debit/credit card or net banking.</li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CAT 2025 Admit Card and Result</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Admit Card</strong>: Once the registration is completed, candidates can download the admit card from the official website in October 2025. The admit card will contain important details like the exam center, timings, and guidelines.</p></li><li><p><strong>Result</strong>: The results for CAT 2025 will be declared in December 2025. Candidates can check their results by logging into the CAT website with their login credentials.</p></li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Frequently Asked Questions (FAQs) About CAT Exam</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>What is the CAT exam eligibility?</strong></p><ul><li>Candidates must have a bachelor’s degree with a minimum of 50% marks. Final-year graduates can also apply.</li></ul></li><li><p><strong>How many times can I attempt the CAT exam?</strong></p><ul><li>There is no limit on the number of attempts for the CAT exam.</li></ul></li><li><p><strong>What is the difficulty level of the CAT exam?</strong></p><ul><li>The CAT exam is known for its moderate to high difficulty level. Proper preparation and practice are necessary to succeed.</li></ul></li><li><p><strong>What are the important dates for CAT 2025?</strong></p><ul><li>Registration starts in August, the exam will be held in November, and results will be declared in December.</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><span style=\"font-size: 1rem;\">The&nbsp;</span><strong style=\"font-size: 1rem;\">Common Admission Test (CAT)</strong><span style=\"font-size: 1rem;\">&nbsp;is undoubtedly one of the most competitive and rigorous exams in India for MBA aspirants. It requires consistent preparation, a well-thought-out strategy, and ample practice. Candidates who follow a structured preparation plan can not only crack the exam but also secure admission to top business schools in India.</span><br></h3><div><span style=\"font-size: 1rem;\"><br></span></div><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">For more information about other entrance exams, visit our website&nbsp;<strong>PickMyColleges.com</strong>, your one-stop resource for all admission-related queries!</p>', 'images3_250118071213.jpeg', 'Author', 1, '2025-01-18 01:42:13', '2025-01-18 01:42:13'),
(5, 'Common Law Admission Test (CLAT) : Complete Guide 2025', 'common-law-admission-test-clat-complete-guide-2025', '<p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">CLAT Exam 2025: Eligibility, Exam Pattern, Syllabus, Top Colleges &amp; Dates</p><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">Prepare for CLAT 2025 with our detailed guide. Get all information about eligibility, exam pattern, marking scheme, syllabus, and top law colleges accepting CLAT scores.</p><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Introduction to CLAT Exam 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>Common Law Admission Test (CLAT)</strong>&nbsp;is a nationwide entrance exam for admission to undergraduate (UG) and postgraduate (PG) law programs in India. CLAT is conducted by a consortium of 22 National Law Universities (NLUs) in India. It is the most sought-after law entrance exam and is considered the gateway for aspiring law students to secure admission to prestigious law schools in India.</p><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT Exam Overview</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Full Form</strong>: Common Law Admission Test</li><li><strong>Conducting Body</strong>: Consortium of National Law Universities (NLUs)</li><li><strong>Mode of Exam</strong>: Computer-based Test (CBT)</li><li><strong>Frequency</strong>: Annually</li><li><strong>Duration</strong>: 2 hours</li><li><strong>Total Marks</strong>: 200 (for UG) and 150 (for PG)</li><li><strong>Eligibility</strong>:<ul><li><strong>UG</strong>: 10+2 or equivalent with at least 45% marks (40% for SC/ST).</li><li><strong>PG</strong>: LLB or equivalent degree with at least 50% marks (45% for SC/ST).</li></ul></li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT Exam 2025 Dates</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>CLAT 2025 Registration Start Date</strong>: January 2025 (Expected)</li><li><strong>CLAT 2025 Registration End Date</strong>: April 2025 (Expected)</li><li><strong>CLAT 2025 Admit Card Release</strong>: May 2025</li><li><strong>CLAT 2025 Exam Date</strong>: May 2025</li><li><strong>CLAT 2025 Result Announcement</strong>: May 2025</li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT Exam Pattern 2025</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The CLAT exam pattern consists of different structures for&nbsp;<strong>UG</strong>&nbsp;and&nbsp;<strong>PG</strong>&nbsp;courses. Below is a detailed breakdown:</p><h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT UG Exam Pattern</strong></h4><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Mode</strong>: Online (Computer-based Test)</li><li><strong>Duration</strong>: 2 hours</li><li><strong>Total Questions</strong>: 150</li><li><strong>Total Marks</strong>: 200</li><li><strong>Sections</strong>:<ol><li><strong>English Language</strong>&nbsp;(28-32 questions)</li><li><strong>Current Affairs and General Knowledge</strong>&nbsp;(35-39 questions)</li><li><strong>Legal Reasoning</strong>&nbsp;(35-39 questions)</li><li><strong>Logical Reasoning</strong>&nbsp;(28-32 questions)</li><li><strong>Quantitative Techniques</strong>&nbsp;(13-17 questions)</li></ol></li></ul><h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Marking Scheme for UG</strong>:</h4><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>+1 mark</strong>&nbsp;for each correct answer</li><li><strong>-0.25 marks</strong>&nbsp;for each incorrect answer</li><li><strong>No penalty for unattempted questions</strong></li></ul><h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT PG Exam Pattern</strong></h4><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Mode</strong>: Online (Computer-based Test)</li><li><strong>Duration</strong>: 2 hours</li><li><strong>Total Questions</strong>: 120</li><li><strong>Total Marks</strong>: 150</li><li><strong>Sections</strong>:<ol><li><strong>Constitutional Law</strong>&nbsp;(50 marks)</li><li><strong>Other Law Subjects</strong>&nbsp;(100 marks) - Including Jurisprudence, Contract Law, Criminal Law, Family Law, etc.</li></ol></li></ul><h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Marking Scheme for PG</strong>:</h4><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>+1 mark</strong>&nbsp;for each correct answer</li><li><strong>-0.25 marks</strong>&nbsp;for each incorrect answer</li><li><strong>No penalty for unattempted questions</strong></li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT Syllabus 2025</strong></h3><h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT UG Syllabus</strong></h4><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>English Language</strong>:</p><ul><li>Reading comprehension</li><li>Vocabulary and grammar</li><li>Sentence correction and analogy</li></ul></li><li><p><strong>Current Affairs &amp; General Knowledge</strong>:</p><ul><li>National and International events</li><li>Legal developments</li><li>Awards, honors, and sports</li></ul></li><li><p><strong>Legal Reasoning</strong>:</p><ul><li>Legal propositions and applications</li><li>Legal principles, their applications, and judicial precedents</li></ul></li><li><p><strong>Logical Reasoning</strong>:</p><ul><li>Puzzles and reasoning problems</li><li>Logical sequences, patterns, and deductions</li></ul></li><li><p><strong>Quantitative Techniques</strong>:</p><ul><li>Basic Arithmetic</li><li>Algebra, Geometry, and Probability</li><li>Data Interpretation</li></ul></li></ol><h4 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT PG Syllabus</strong></h4><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Constitutional Law</strong>:</p><ul><li>Fundamental Rights, Duties, Directive Principles</li><li>Federalism, Separation of Powers</li></ul></li><li><p><strong>Other Law Subjects</strong>:</p><ul><li>Jurisprudence</li><li>Criminal Law, Contract Law, Torts, Property Law, Family Law</li><li>International Law and Human Rights</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Top Colleges Accepting CLAT Scores</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>CLAT exam</strong>&nbsp;is the key to securing admission in the top&nbsp;<strong>National Law Universities (NLUs)</strong>&nbsp;and other prestigious law colleges in India. Some of the leading institutions accepting CLAT scores are:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>National Law Universities (NLUs)</strong>:</p><ul><li>NLSIU Bangalore</li><li>NALSAR University of Law, Hyderabad</li><li>NLIU Bhopal</li><li>WBNUJS Kolkata</li><li>National Law University, Delhi</li><li>National Law University, Jodhpur</li><li>National Law Institute University, Bhopal</li></ul></li><li><p><strong>Other Renowned Law Schools</strong>:</p><ul><li>Faculty of Law, Delhi University</li><li>Symbiosis Law School, Pune</li><li>Jindal Global Law School, Sonipat</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT Eligibility Criteria 2025</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Undergraduate Programs (UG)</strong>:</p><ul><li>Must have completed 10+2 or equivalent.</li><li>Must have secured at least 45% marks in the qualifying exam (40% for SC/ST).</li><li>Candidates appearing in the final year of 12th grade can also apply.</li></ul></li><li><p><strong>Postgraduate Programs (PG)</strong>:</p><ul><li>Must have an LLB or an equivalent degree.</li><li>Must have scored at least 50% marks in the LLB degree (45% for SC/ST).</li><li>Candidates who are in their final year of LLB can apply.</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT 2025 Application Process</strong></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>CLAT application process</strong>&nbsp;is completely online. Follow these steps:</p><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>Visit the Official CLAT Website</strong>: Go to&nbsp;<a rel=\"noopener\" target=\"_new\" href=\"http://www.clat.ac.in/\">www.clat.ac.in</a>.</li><li><strong>Register for CLAT</strong>: Create a new account and fill in basic details.</li><li><strong>Complete the Application Form</strong>: Provide personal, academic, and contact information.</li><li><strong>Upload Documents</strong>: Upload scanned copies of your photograph, signature, and other relevant documents.</li><li><strong>Payment of Application Fee</strong>: You can pay the application fee through debit/credit card or net banking.</li></ol><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Application Fee</strong>:</p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><strong>For UG/PG</strong>: INR 4000 (General/OBC) and INR 3500 (SC/ST)</li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>CLAT Admit Card and Result</strong></h3><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>Admit Card</strong>: Once registered, the admit card will be available for download from the official website. It contains the exam center, date, and other important instructions.</p></li><li><p><strong>Result</strong>: CLAT 2025 results will be declared shortly after the exam, and candidates can check their results using their login credentials.</p></li></ul><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><strong>Frequently Asked Questions (FAQs) About CLAT Exam</strong></h3><ol style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li><p><strong>What is the eligibility for CLAT UG?</strong></p><ul><li>Candidates must have completed 10+2 or equivalent with at least 45% marks (40% for SC/ST).</li></ul></li><li><p><strong>Can I apply for both UG and PG CLAT exams?</strong></p><ul><li>No, candidates can only apply for either the UG or PG exam based on their qualifications.</li></ul></li><li><p><strong>What is the difficulty level of CLAT?</strong></p><ul><li>CLAT is considered moderately difficult. Proper preparation with focus on logical reasoning, current affairs, and legal reasoning is crucial.</li></ul></li><li><p><strong>How many times is the CLAT exam conducted?</strong></p><ul><li>CLAT is conducted once a year.</li></ul></li></ol><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><br></h3><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">The&nbsp;<strong>Common Law Admission Test (CLAT)</strong>&nbsp;is one of the most competitive exams for law aspirants in India. By following a systematic preparation strategy and focusing on the key sections, aspirants can crack the exam and secure admission to top National Law Universities (NLUs).</p><p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">For more detailed guides on law entrance exams and college options, visit&nbsp;<strong>PickMyColleges.com</strong>&nbsp;— your one-stop guide to law admissions in India.</p>', 'unknown_250118071551.jpeg', 'Author', 1, '2025-01-18 01:45:51', '2025-01-18 01:45:51'),
(6, 'Entrance Exams in India for Postgraduate Education (2025)', 'entrance-exams-in-india-for-postgraduate-education-2025', '<h3 style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><span style=\"font-size: 1rem;\">Postgraduate education in India includes a range of specializations, and entrance exams are essential for gaining admission into reputed universities. Here are some of the key exams for PG courses in India:</span><br></h3><table style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><thead><tr><th><strong>Exam Name</strong></th><th><strong>Conducting Body</strong></th><th><strong>Course</strong></th><th><strong>Exam Dates</strong></th><th><strong>Exam Pattern</strong></th><th><strong>Marking Scheme</strong></th><th><strong>Top Colleges</strong></th></tr></thead><tbody><tr><td><strong>GATE</strong></td><td>IITs (Joint Admission Board)</td><td>M.Tech, MS</td><td>February 2025 (Tentative)</td><td>Objective and Numerical Answer Type</td><td>+1 or +2 for correct, -1/3 for incorrect</td><td>IITs, NITs, IISc, IIITs, BITS Pilani</td></tr><tr><td><strong>CAT</strong></td><td>IIMs (Indian Institutes of Management)</td><td>MBA</td><td>November 2025 (Tentative)</td><td>Objective-type questions: Quantitative Aptitude, Verbal Ability, Logical Reasoning</td><td>+3 for correct, -1 for incorrect</td><td>IIMs, FMS Delhi, SPJIMR Mumbai, MDI Gurgaon, XLRI Jamshedpur</td></tr><tr><td><strong>XAT</strong></td><td>XLRI Jamshedpur</td><td>MBA</td><td>January 2025 (Tentative)</td><td>Objective-type questions: Verbal Ability, Decision Making, Quantitative Ability</td><td>+1 for correct, -0.25 for incorrect</td><td>XLRI Jamshedpur, SPJIMR, XIMB Bhubaneswar, IMT Ghaziabad</td></tr><tr><td><strong>NEET PG</strong></td><td>NBE (National Board of Examinations)</td><td>MD, MS, Diploma</td><td>March 2025 (Tentative)</td><td>Multiple choice questions in Medical Science</td><td>+4 for correct, -1 for incorrect</td><td>AIIMS, PGIMER, JIPMER, All Government Medical Colleges, Private Medical Colleges like Manipal</td></tr><tr><td><strong>LSAT India</strong></td><td>LSAC (Law School Admission Council)</td><td>LLM, 5-Year LLB</td><td>May 2025 (Tentative)</td><td>Objective-type questions: Analytical Reasoning, Logical Reasoning, Reading Comprehension</td><td>+1 for correct, -0.25 for incorrect</td><td>Jindal Global Law School, UPES, Symbiosis Law School, Other Top Law Colleges</td></tr><tr><td><strong>CMAT</strong></td><td>NTA</td><td>MBA, PGDM</td><td>January 2025 (Tentative)</td><td>Objective-type questions: Quantitative Aptitude, Logical Reasoning, Language Comprehension</td><td>+4 for correct, -1 for incorrect</td><td>JBIMS Mumbai, Great Lakes Institute of Management, SIMSREE Mumbai, Welingkar Institute</td></tr><tr><td><strong>JAM</strong></td><td>IITs</td><td>M.Sc, Joint M.Sc-Ph.D</td><td>February 2025 (Tentative)</td><td>Multiple-choice questions, Numerical Answer Type</td><td>+1 or +2 for correct, -1/3 for incorrect</td><td>IITs, IISc Bangalore, Delhi University, BHU</td></tr><tr><td><strong>TISS NET</strong></td><td>TISS (Tata Institute of Social Sciences)</td><td>MA, M.Phil, PG Diploma</td><td>January 2025 (Tentative)</td><td>Objective-type questions in General Knowledge, Analytical Ability, English</td><td>+1 for correct, 0 for incorrect</td><td>TISS Mumbai, TISS Hyderabad, TISS Guwahati</td></tr><tr><td><strong>MHT CET</strong></td><td>State Common Entrance Test Cell, Maharashtra</td><td>M.Tech, MBA</td><td>May 2025 (Tentative)</td><td>Objective-type questions: Engineering, Pharmacy</td><td>+1 for correct, -0.25 for incorrect</td><td>University of Mumbai, College of Engineering Pune (COEP), VJTI, ICT Mumbai</td></tr><tr><td><strong>IIFT</strong></td><td>NTA</td><td>MBA (International Business)</td><td>December 2025 (Tentative)</td><td>Objective-type questions: Verbal Ability, Quantitative Analysis, General Knowledge, Logical Reasoning</td><td>+3 for correct, -1 for incorrect</td><td>IIFT Delhi, IIFT Kolkata, IIFT Kakinada</td></tr></tbody></table><hr style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\">', 'images5_250118082058.jpeg', 'Author', 1, '2025-01-18 02:50:58', '2025-01-18 02:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goal_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `application_last_date` date DEFAULT NULL,
  `exam_info` text COLLATE utf8mb4_unicode_ci,
  `exam_dates` text COLLATE utf8mb4_unicode_ci,
  `exam_highlight` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_categories`
--

CREATE TABLE `exam_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_categories`
--

INSERT INTO `exam_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'UnderGraduate', 1, '2025-01-18 02:03:29', '2025-01-18 02:03:29'),
(2, 'Agriculture and Allied Sciences', 1, '2025-01-18 02:05:27', '2025-01-18 02:05:27'),
(3, 'Design and Fine Arts', 1, '2025-01-18 02:05:58', '2025-01-18 02:05:58'),
(4, 'Education and Teaching', 1, '2025-01-18 02:06:37', '2025-01-18 02:06:37'),
(5, 'Law', 1, '2025-01-18 02:06:55', '2025-01-18 02:06:55'),
(6, 'Social Sciences', 1, '2025-01-18 02:07:04', '2025-01-18 02:07:04'),
(7, 'Medical and Health Sciences', 1, '2025-01-18 02:07:17', '2025-01-18 02:07:17'),
(8, 'Engineering and Technology', 1, '2025-01-18 02:07:32', '2025-01-18 02:07:32'),
(9, 'Commerce and Business Studies', 1, '2025-01-18 02:07:55', '2025-01-18 02:07:55'),
(10, 'Arts and Humanities', 1, '2025-01-18 02:08:09', '2025-01-18 02:08:09'),
(11, 'Science', 1, '2025-01-18 02:08:20', '2025-01-18 02:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Graduation', 'graduation', '<p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"></p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li>In India, graduation is typically a 3 to 4-year program offering undergraduate degrees in various fields like Science, Commerce, Arts, Engineering, and more. Popular courses include B.Tech, B.Sc, B.Com, and BA.</li><li>Admission is often based on entrance exams (like JEE, NEET, CUET) or merit, with many prestigious institutions such as IITs, NITs, and DU offering competitive entry.</li></ul>', 'images5_250118080021.jpeg', 1, '2025-01-18 02:30:21', '2025-01-18 02:30:21'),
(2, 'Post-Graduation', 'post-graduation', '<p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"></p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li>Post-graduate programs in India, such as M.Tech, MBA, M.Sc, and MA, provide specialized knowledge in a specific field, with durations ranging from 1 to 2 years.</li><li>Top universities like IIMs, IITs, and Delhi University offer post-graduate degrees, with increasing focus on research, industry collaboration, and global exposure.</li></ul>', 'images5_250118080123.jpeg', 1, '2025-01-18 02:31:23', '2025-01-18 02:31:23'),
(3, 'Online Education', 'online-education', '<p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"></p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li>Online education in India has seen significant growth, offering flexibility to students and working professionals. Platforms like Coursera, Udemy, and EdX, along with Indian institutions providing online degrees, are making higher education more accessible.</li><li>Many universities are now offering online courses and degrees in fields like business, technology, and humanities, making it easier for students across the country to pursue quality education.</li></ul>', 'images5_250118080206.jpeg', 1, '2025-01-18 02:32:06', '2025-01-18 02:32:06'),
(4, 'Upskilling', 'upskilling', '<p style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"></p><ul style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><li>With rapid technological advancements, upskilling has become a key priority for both students and professionals in India. Online platforms like LinkedIn Learning, Skillshare, and UpGrad are empowering learners to enhance their skills in areas like coding, data science, digital marketing, and leadership.</li><li>Upskilling is increasingly important in a competitive job market, with industry demand for highly skilled professionals in sectors like IT, finance, healthcare, and e-commerce.</li></ul>', 'images5_250118080247.jpeg', 1, '2025-01-18 02:32:47', '2025-01-18 02:32:47');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_31_065038_create_settings_table', 1),
(6, '2022_12_31_110520_create_goals_table', 1),
(7, '2022_12_31_111421_create_events_table', 1),
(8, '2022_12_31_153359_create_articles_table', 1),
(9, '2022_12_31_170034_create_exam_categories_table', 1),
(10, '2022_12_31_170107_create_exams_table', 1),
(11, '2023_01_01_135849_create_pages_table', 1),
(12, '2023_01_14_104400_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `content`, `image`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>', NULL, NULL, NULL, 1, '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(2, 'Features', 'features', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>', NULL, NULL, NULL, 1, '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(3, 'Pricing', 'pricing', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>', NULL, NULL, NULL, 1, '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(4, 'Privacy Policy', 'privacy-policy', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>', NULL, NULL, NULL, 1, '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(5, 'Terms & Conditions', 'terms-conditions', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>', NULL, NULL, NULL, 1, '2024-06-05 14:14:47', '2024-06-05 14:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'application_name', 'Welcome to the PickMyColleges.com', '2024-06-05 14:14:47', '2025-01-18 02:21:12'),
(2, 'header_logo', 'pmc_250221100001.png', '2024-06-05 14:14:47', '2025-02-21 04:30:04'),
(3, 'footer_logo', 'pmc_250221100004.png', '2024-06-05 14:14:47', '2025-02-21 04:30:08'),
(4, 'favicon', NULL, '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(5, 'header_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(6, 'footer_text', 'PickMyColleges.com is a comprehensive online platform designed to simplify the journey of selecting the right college and navigating the entrance exam and admission processes.', '2024-06-05 14:14:47', '2025-01-18 02:22:44'),
(7, 'contact_address', 'L-57,1ST FLOOR,SOM BAZAR ROAD RAJAPUR, UTTAM NAGAR ,NEW DELHI-110059', '2024-06-05 14:14:47', '2025-01-18 02:10:45'),
(8, 'contact_email', 'pickmycolleges@gmail.com', '2024-06-05 14:14:47', '2025-01-18 02:10:45'),
(9, 'contact_phone', '+91 9984887309', '2024-06-05 14:14:47', '2025-01-18 02:10:45'),
(10, 'contact_phone_optional', NULL, '2024-06-05 14:14:47', '2025-01-18 02:10:45'),
(11, 'meta_title', 'Lorem ipsum dolor sit amet', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(12, 'meta_description', 'Lorem ipsum dolor sit amet', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(13, 'meta_keywords', 'Lorem,ipsum,dolor,sit,amet', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(14, 'facebook_url', 'https://www.facebook.com/PickMyColleges/about', '2024-06-05 14:14:47', '2025-01-31 03:29:59'),
(15, 'twitter_url', '#', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(16, 'linkedin_url', '#', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(17, 'instagram_url', 'https://www.instagram.com/pickmycolleges/', '2024-06-05 14:14:47', '2025-01-31 03:22:52'),
(18, 'youtube_url', '#', '2024-06-05 14:14:47', '2024-06-05 14:14:47'),
(19, 'copyright', 'Copyright © 2024 All rights reserved.', '2024-06-05 14:14:47', '2024-06-05 14:14:47');

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
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=Admin, 0=User',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `status`, `is_admin`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2024-06-05 14:14:47', '$2y$10$EZJKYlJBMNN2Aaijzypi3eS/5he4lCaiseqtp8gcWusUsVZWu2eu2', NULL, 1, 1, '1h1wVwUUsMbOuekByrVbh4jA2SB9Al2vZssD6Zowo1PNCNkQ24SmslrR1iTZ', '2024-06-05 14:14:47', '2024-06-05 14:14:47', NULL),
(2, 'adminxps', 'budaklzcrew@gmail.com', NULL, '$2y$10$4ReJwHWz1OeWgrEY9IYdBufu0ZNhNFPJieKL/P/vPMWqKEbIuYauq', NULL, 1, 0, NULL, '2025-03-05 07:43:55', '2025-03-05 07:43:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_goal_id_foreign` (`goal_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_exam_category_id_foreign` (`exam_category_id`);

--
-- Indexes for table `exam_categories`
--
ALTER TABLE `exam_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_categories`
--
ALTER TABLE `exam_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_goal_id_foreign` FOREIGN KEY (`goal_id`) REFERENCES `goals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_exam_category_id_foreign` FOREIGN KEY (`exam_category_id`) REFERENCES `exam_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
