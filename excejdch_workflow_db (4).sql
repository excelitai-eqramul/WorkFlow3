-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 08:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excejdch_workflow_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES
(8, 'CRM Client', 'crmclient@gmail.com', 'Gulshan', '2022-09-27 04:52:02', NULL),
(9, 'Work Flow\'s Client', 'workflowclient@gmail.com', 'Dhanmondi', '2022-09-27 04:52:49', NULL),
(10, 'Bpp Shop client', 'bppshops@gmail.com', 'Dhaka', '2022-09-29 07:43:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Excel IT', 'excelitai@gmail.com', 'Mogbazar', '2022-09-15 02:22:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(41, 'Web', NULL, '2022-09-27 04:53:31', NULL),
(42, 'Frontend', '41', '2022-09-27 04:53:41', NULL),
(43, 'Backend', '41', '2022-09-27 04:53:52', NULL),
(44, 'HR', NULL, '2022-09-27 04:54:01', NULL),
(45, 'Accounts', '44', '2022-09-27 04:54:11', NULL),
(46, 'Flutter', NULL, '2022-09-27 04:56:24', NULL),
(47, 'Mobile', '46', '2022-09-27 04:56:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dependency_ranges`
--

CREATE TABLE `dependency_ranges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dependency_ranges`
--

INSERT INTO `dependency_ranges` (`id`, `name`, `range`, `description`, `created_at`, `updated_at`) VALUES
(1, 'high dependency', '8', 'Vital Project', '2022-10-07 21:25:06', NULL),
(2, 'Low dependency', '2', 'Tolerable', '2022-10-08 00:20:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES
(11, 'Gunjon Roy', 'gunjonroy@gmail.com', 'Mogbazar', '2022-10-03 23:43:32', '2022-10-03 23:43:32'),
(12, 'Pabon Saha', 'pabonsaha@gmail.com', 'Mogbazar', '2022-09-27 03:52:36', NULL),
(13, 'Eqramul Hasan', 'eqramul8@gmail.com', 'Tejgaon Industrial Area', '2022-09-27 03:53:01', NULL),
(14, 'Saddam Hossain', 'saddam@gmail.com', 'New Eskaton Road', '2022-09-27 03:54:19', NULL),
(15, 'Sujoy Saha', 'sujoysaha@gmail.com', 'Mogbazar', '2022-09-27 03:54:48', NULL),
(16, 'Samiul Shuvo', 'shuvo@gmail.com', 'Dhanmondi', '2022-09-27 03:56:30', NULL),
(17, 'Radia Ahmed', 'radia@gmail.com', 'Khilgaon', '2022-09-27 04:49:18', NULL),
(18, 'Ashim Shome', 'ashim@gmail.com', 'Dhaka', '2022-09-29 07:39:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee__tasks`
--

CREATE TABLE `employee__tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `project_id`, `module_id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(13, '11', '14', 'add picture', NULL, '2022-09-29 09:42:08', '2022-09-29 09:42:08'),
(14, '11', '14', 'application and navigation menu', NULL, '2022-09-29 09:45:12', '2022-09-29 09:45:12'),
(15, '11', '14', 'Search area', NULL, '2022-09-29 09:46:06', '2022-09-29 09:46:06'),
(16, '11', '14', 'Profile area', NULL, '2022-09-29 09:48:44', '2022-09-29 09:48:44'),
(17, '11', '14', 'Name of the user', '16', '2022-09-29 09:49:06', '2022-09-29 09:49:06'),
(18, '11', '14', 'Logout button', '16', '2022-09-29 09:49:31', '2022-09-29 09:49:31'),
(19, '11', '18', 'Total agent', '8', '2022-09-29 10:01:40', '2022-09-29 10:01:40'),
(20, '11', '19', 'number of total agent', NULL, '2022-09-29 10:09:55', '2022-09-29 10:09:55'),
(21, '11', '19', 'icon', NULL, '2022-09-29 10:21:33', '2022-09-29 10:21:33'),
(22, '11', '18', 'active total agent', '8', '2022-09-29 10:26:17', '2022-09-29 10:26:17'),
(23, '11', '20', 'icon', '8', '2022-09-29 10:27:02', '2022-09-29 10:27:02'),
(24, '11', '20', 'no of active agent number', '8', '2022-09-29 10:28:53', '2022-09-29 10:28:53'),
(25, '11', '18', 'total customer', '8', '2022-09-29 10:38:21', '2022-09-29 10:38:21'),
(26, '11', '21', 'icon', '8', '2022-09-29 10:39:23', '2022-09-29 10:39:23'),
(27, '11', '21', 'no of total customer', '8', '2022-09-29 10:40:15', '2022-09-29 10:40:15'),
(28, '11', '18', 'agent total sale amount', '8', '2022-09-29 10:49:36', '2022-09-29 10:49:36'),
(29, '11', '22', 'icon', '8', '2022-09-29 10:49:58', '2022-09-29 10:49:58'),
(30, '11', '22', 'no of agent total sale amount', '8', '2022-09-29 10:50:42', '2022-09-29 10:50:42'),
(31, '11', '18', 'agent total commision', NULL, '2022-09-29 11:00:05', '2022-09-29 11:00:05'),
(32, '11', '23', 'icon', NULL, '2022-09-29 11:01:40', '2022-09-29 11:01:40'),
(33, '11', '23', 'no of agent total commision', NULL, '2022-09-29 11:02:28', '2022-09-29 11:02:28'),
(34, '11', '18', 'Agent total withdrawal amount', NULL, '2022-09-29 12:18:51', '2022-09-29 12:18:51'),
(35, '11', '24', 'icon', NULL, '2022-09-29 12:19:09', '2022-09-29 12:19:09'),
(36, '11', '24', 'no of agent total withdrawal amount', NULL, '2022-09-29 12:20:01', '2022-09-29 12:20:01'),
(37, '11', '18', 'no of agents inside Dhaka', NULL, '2022-09-29 12:35:08', '2022-09-29 12:35:08'),
(38, '11', '25', 'icon', NULL, '2022-09-29 12:35:47', '2022-09-29 12:35:47'),
(39, '11', '25', 'no of agents inside Dhaka', NULL, '2022-09-29 12:36:59', '2022-09-29 12:36:59'),
(40, '11', '18', 'no of agents onside Dhaka', NULL, '2022-09-29 12:48:53', '2022-09-29 12:48:53'),
(41, '11', '26', 'icon', NULL, '2022-09-29 12:49:04', '2022-09-29 12:49:04'),
(42, '11', '26', 'no of agents outside Dhaka', NULL, '2022-09-29 12:50:16', '2022-09-29 12:50:16'),
(43, '11', '27', 'Add new agent', NULL, '2022-09-29 13:49:45', '2022-09-29 13:49:45'),
(44, '11', '27', 'Agent details list', NULL, '2022-09-29 14:00:54', '2022-09-29 14:00:54'),
(45, '11', '31', 'Show table of agent details list', NULL, '2022-09-29 15:03:12', '2022-09-29 15:03:12'),
(46, '11', '31', 'Button of add new agent', NULL, '2022-09-29 15:03:58', '2022-09-29 15:03:58'),
(47, '11', '32', 'Search section', NULL, '2022-09-29 15:10:37', '2022-09-29 15:10:37'),
(48, '11', '32', 'Input field', '47', '2022-09-29 15:11:19', '2022-09-29 15:11:19'),
(49, '11', '32', 'Search button', '47', '2022-09-29 15:12:48', '2022-09-29 15:12:48'),
(50, '11', '32', 'Table of agent sales report', NULL, '2022-09-29 15:26:46', '2022-09-29 15:26:46'),
(51, '11', '34', 'Button for view a new page', NULL, '2022-09-29 15:33:27', '2022-09-29 15:33:27'),
(52, '11', '35', 'Search field', NULL, '2022-09-29 15:57:29', '2022-09-29 15:57:29'),
(53, '11', '35', 'Agent info', NULL, '2022-09-29 15:57:56', '2022-09-29 15:57:56'),
(54, '11', '35', 'Print button', NULL, '2022-09-29 15:58:10', '2022-09-29 15:58:10'),
(55, '11', '35', 'A table showing single agent customer list', NULL, '2022-09-29 15:58:28', '2022-09-29 15:58:28'),
(56, '11', '40', 'A table showing all customer order list', NULL, '2022-10-01 07:30:05', '2022-10-01 07:30:05'),
(57, '11', '41', 'customer info', NULL, '2022-10-01 07:35:55', '2022-10-01 07:35:55'),
(58, '11', '41', 'agent info', NULL, '2022-10-01 07:36:09', '2022-10-01 07:36:09'),
(59, '11', '41', 'Search section with search field', NULL, '2022-10-01 07:36:44', '2022-10-01 07:36:44'),
(60, '11', '41', 'Print button', NULL, '2022-10-01 07:37:12', '2022-10-01 07:37:12'),
(61, '11', '41', 'Table of single customer order history', NULL, '2022-10-01 07:37:51', '2022-10-01 07:37:51'),
(62, '11', '42', 'Table of all agent customer list', NULL, '2022-10-01 07:56:04', '2022-10-01 07:56:04'),
(63, '11', '44', 'table of all agent sale and customer report', NULL, '2022-10-01 08:12:33', '2022-10-01 08:12:33'),
(64, '11', '45', 'table of single agent sale and commission report', NULL, '2022-10-01 10:15:52', '2022-10-01 10:15:52'),
(65, '11', '45', 'Information of agent', NULL, '2022-10-01 10:16:58', '2022-10-01 10:16:58'),
(66, '11', '45', 'Search section', NULL, '2022-10-01 10:17:14', '2022-10-01 10:17:14'),
(67, '11', '45', 'Add withdrawal amount', NULL, '2022-10-01 10:29:08', '2022-10-01 10:29:08'),
(68, '11', '47', 'table of agent sell and commission summary', NULL, '2022-10-01 10:48:30', '2022-10-01 10:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolved_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identify_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `company_id`, `project_id`, `module_id`, `feature_id`, `task_id`, `name`, `parent_id`, `description`, `image`, `start_date`, `end_date`, `estimate_date`, `estimate_time`, `created_by`, `updated_by`, `resolved_by`, `identify_by`, `created_at`, `updated_at`) VALUES
(8, '2', '10', '9', '13', '24', 'Daily Issue', NULL, 'Vital Issue', '1665296487.jpg', '2022-09-01', NULL, '2022-09-18', '08:41', 'Eqramul', 'Hasan', 'Tomal', 'Gunjon Roy', '2022-09-27 05:41:52', '2022-10-09 00:21:27'),
(9, '2', '5', '8', '40', '161', 'Weekly Issue', '8', 'This issue is very vital', 'images/1745123114453600.jpg', '2022-09-27', NULL, '2022-10-10', '22:44', 'Eqramul', 'Hasan', 'Abir', 'Hasan', '2022-09-27 05:44:54', '2022-10-09 00:39:09'),
(14, '2', '9', '47', '66', '94', 'OTP', '8', 'Vital Project', '1665302879.jpg', '2022-10-04', NULL, '2022-10-18', '03:05', 'Eqramul', 'hasan', 'Tomal', 'abir', '2022-10-09 02:05:51', '2022-10-09 02:07:59');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2022_07_31_090930_create_employees_table', 1),
(40, '2022_08_10_090527_create_teams_table', 1),
(41, '2022_08_11_085045_create_employee__tasks_table', 1),
(42, '2022_08_14_093950_create_details_table', 1),
(43, '2022_08_19_105611_create_departments_table', 1),
(44, '2022_08_19_105847_create_sub__departments_table', 1),
(48, '2022_08_25_094830_create_task_issues_table', 1),
(49, '2022_09_03_102614_create_clients_table', 2),
(55, '2022_09_04_101522_create_progressbars_table', 6),
(63, '2022_09_15_065551_create_companies_table', 10),
(65, '2022_09_15_092301_create_projects_budget_histories_table', 11),
(73, '2022_09_12_043559_create_projects_date_histories_table', 16),
(74, '2022_09_15_090509_create_project_budget_histories_table', 17),
(75, '2022_09_25_054942_create_project_budget_histories_table', 18),
(76, '2022_08_22_092059_create_issues_table', 19),
(77, '2022_07_31_074842_create_tasks_table', 20),
(78, '2022_07_31_074904_create_projects_table', 21),
(79, '2022_08_22_033455_create_modules_table', 22),
(80, '2022_08_22_033548_create_features_table', 23),
(81, '2022_10_02_060949_create_dependency_ranges_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `project_id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(8, '4', 'Admin Module', NULL, '2022-10-09 02:36:50', '2022-10-09 02:36:50'),
(9, '4', 'Sidebar Module', '8', '2022-09-27 05:08:24', NULL),
(10, '5', 'User Module', NULL, '2022-09-27 05:13:53', NULL),
(11, '5', 'Slider', '8', '2022-09-27 05:14:32', NULL),
(12, '5', 'OTP', '11', '2022-09-27 06:42:24', NULL),
(13, '4', 'dashboard', '10', '2022-09-28 15:13:40', NULL),
(14, '11', 'Header', NULL, '2022-09-29 09:09:35', NULL),
(15, '11', 'application and navigation menu', '14', '2022-09-29 09:12:41', NULL),
(16, '11', 'Search area', '14', '2022-09-29 09:13:43', NULL),
(17, '11', 'Profile area', '14', '2022-09-29 09:18:24', NULL),
(18, '11', 'Dashborad', NULL, '2022-09-29 09:59:16', NULL),
(19, '11', 'Total agent', '13', '2022-09-29 10:00:19', NULL),
(20, '11', 'Active agent number', '13', '2022-09-29 10:25:19', NULL),
(21, '11', 'total customer', '13', '2022-09-29 10:37:45', NULL),
(22, '11', 'agent total sale amount', '13', '2022-09-29 10:48:44', NULL),
(23, '11', 'agent total commision', '13', '2022-09-29 10:58:51', NULL),
(24, '11', 'Agent total withdrawal amount', '13', '2022-09-29 12:18:21', NULL),
(25, '11', 'no of agents inside Dhaka', '13', '2022-09-29 12:33:54', NULL),
(26, '11', 'No of agents outside Dhaka', '13', '2022-09-29 12:45:00', NULL),
(27, '11', 'Agent', NULL, '2022-09-29 13:28:59', NULL),
(30, '11', 'Add new agent', NULL, '2022-09-29 13:33:15', NULL),
(31, '11', 'Agent details list', NULL, '2022-09-29 14:01:58', NULL),
(32, '11', 'Agent sales report', NULL, '2022-09-29 15:08:53', NULL),
(33, '11', 'Search section', '32', '2022-09-29 15:17:20', NULL),
(34, '11', 'Table of agent sales report', NULL, '2022-09-29 15:32:40', NULL),
(35, '6', 'Single agent customer list', NULL, '2022-10-09 02:18:01', '2022-10-09 02:18:01'),
(40, '11', 'All customer order history', NULL, '2022-10-01 07:24:01', NULL),
(41, '11', 'Single customer order history', NULL, '2022-10-01 07:33:37', NULL),
(42, '11', 'All agent customer list', NULL, '2022-10-01 07:49:17', NULL),
(44, '11', 'All agent sale and customer report', NULL, '2022-10-01 08:11:45', NULL),
(45, '11', 'Single agent sale and commission report', NULL, '2022-10-01 10:15:02', NULL),
(46, '11', 'Add withdrawal amount', '45', '2022-10-01 10:30:08', NULL),
(47, '11', 'All agent sale and commission summery', NULL, '2022-10-01 10:45:39', NULL);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progressbars`
--

CREATE TABLE `progressbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progressbar_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progressbars`
--

INSERT INTO `progressbars` (`id`, `project_id`, `progressbar_name`, `percentage`, `date_from`, `date_to`, `time_from`, `time_to`, `estimate`, `created_at`, `updated_at`) VALUES
(218, '15', 'Frontend', '100', '2022-09-06', '2022-09-10', '18:36', '15:40', '2022-09-21', '2022-09-20 03:36:45', '2022-09-20 03:36:45'),
(220, '16', 'Frontend', '70', '2022-09-23', '2022-10-08', NULL, NULL, NULL, '2022-09-20 05:34:53', '2022-09-20 05:34:53'),
(221, '16', 'Backend', '100', '2022-09-16', '2022-09-15', '17:38', NULL, '2022-09-21', '2022-09-20 05:34:53', '2022-09-20 05:34:53'),
(222, '16', 'Testing', '30', NULL, NULL, NULL, NULL, '2022-09-15', '2022-09-20 05:34:53', '2022-09-20 05:34:53'),
(227, '21', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-22 02:03:42', '2022-09-22 02:03:42'),
(228, '22', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-22 02:19:13', '2022-09-22 02:19:13'),
(229, '23', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-24 00:08:56', '2022-09-24 00:08:56'),
(233, '21', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-24 05:49:37', '2022-09-24 05:49:37'),
(234, '21', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-24 05:49:52', '2022-09-24 05:49:52'),
(235, '15', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-24 05:54:00', '2022-09-24 05:54:00'),
(236, '24', 'Frontend', '30', '2022-09-04', '2022-09-30', '14:04', '04:04', '2022-10-14', '2022-09-25 00:04:12', '2022-09-25 00:04:12'),
(237, '24', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-25 00:13:11', '2022-09-25 00:13:11'),
(238, '24', 'Frontend', '30', '2022-09-20', '2022-09-21', '20:51', '17:52', '2022-09-28', '2022-09-25 04:52:26', '2022-09-25 04:52:26'),
(239, '24', 'Backend', '70', '2022-09-30', '2022-09-29', '06:51', '08:51', '2022-10-13', '2022-09-25 04:52:26', '2022-09-25 04:52:26'),
(240, '25', 'Frontend', '50', '2022-09-28', '2022-09-16', '02:04', '03:04', '2022-09-07', '2022-09-26 00:04:49', '2022-09-26 00:04:49'),
(243, '24', 'Frontend', '30', NULL, NULL, NULL, NULL, NULL, '2022-09-26 00:06:00', '2022-09-26 00:06:00'),
(244, '26', 'Frontend', '30', '2022-09-22', '2022-10-07', '03:07', '00:11', '2022-09-07', '2022-09-26 00:07:42', '2022-09-26 00:07:42'),
(245, '27', 'Frontend', '70', NULL, NULL, NULL, NULL, NULL, '2022-09-26 00:08:26', '2022-09-26 00:08:26'),
(246, '27', 'Backend', '70', NULL, NULL, NULL, NULL, NULL, '2022-09-26 00:08:26', '2022-09-26 00:08:26'),
(247, '1', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-26 04:15:28', '2022-09-26 04:15:28'),
(248, '1', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-26 04:18:56', '2022-09-26 04:18:56'),
(249, '2', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-26 04:22:53', '2022-09-26 04:22:53'),
(250, '3', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-26 04:35:51', '2022-09-26 04:35:51'),
(251, '3', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-26 05:46:45', '2022-09-26 05:46:45'),
(252, '2', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-26 23:51:05', '2022-09-26 23:51:05'),
(253, '4', 'Frontend', '50', '2022-09-07', '2022-09-22', '08:02', '22:03', '2022-09-19', '2022-09-27 05:04:24', '2022-09-27 05:04:24'),
(254, '4', 'Backend', '100', '2022-09-06', '2022-10-08', '21:03', '22:03', '2022-09-23', '2022-09-27 05:04:24', '2022-09-27 05:04:24'),
(255, '5', 'Frontend', '30', '2022-09-13', '2022-09-24', '07:10', '20:10', '2022-09-22', '2022-09-27 05:11:21', '2022-09-27 05:11:21'),
(256, '5', 'Backend', '100', '2022-09-28', '2022-10-08', '09:10', '22:10', '2022-09-07', '2022-09-27 05:11:21', '2022-09-27 05:11:21'),
(257, '5', 'Testing', '50', '2022-09-24', '2022-10-27', '08:11', '08:11', '2022-09-25', '2022-09-27 05:11:21', '2022-09-27 05:11:21'),
(258, '6', 'Frontend', '50', '2022-09-21', '2022-09-30', '08:34', '10:34', '2022-09-29', '2022-09-27 05:35:05', '2022-09-27 05:35:05'),
(259, '6', 'Backend', '100', '2022-09-13', '2022-10-13', '08:34', '10:34', '2022-10-09', '2022-09-27 05:35:05', '2022-09-27 05:35:05'),
(260, '7', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-27 05:51:28', '2022-09-27 05:51:28'),
(261, '6', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-27 05:54:58', '2022-09-27 05:54:58'),
(262, '5', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-27 05:55:52', '2022-09-27 05:55:52'),
(263, '4', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-27 06:14:25', '2022-09-27 06:14:25'),
(264, '8', 'Frontend', '70', '2022-09-28', '2022-10-13', '23:21', '02:21', '2022-09-30', '2022-09-28 08:22:50', '2022-09-28 08:22:50'),
(265, '8', 'Backend', '100', '2022-09-30', '2022-09-29', '14:22', '15:22', '2022-09-29', '2022-09-28 08:22:50', '2022-09-28 08:22:50'),
(266, '9', 'Frontend', '100', '2022-08-31', '2022-09-20', '12:53', '17:53', '2022-09-25', '2022-09-28 08:54:27', '2022-09-28 08:54:27'),
(267, '9', 'Backend', '100', '2022-09-05', '2022-09-26', '13:54', '15:54', '2022-09-23', '2022-09-28 08:54:27', '2022-09-28 08:54:27'),
(268, '10', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-28 08:57:47', '2022-09-28 08:57:47'),
(269, '11', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-09-29 07:45:10', '2022-09-29 07:45:10'),
(270, '11', 'UI UX', '100', '2022-07-01', '2022-07-01', '09:49', '15:55', '2022-09-30', '2022-09-29 07:53:44', '2022-09-29 07:53:44'),
(271, '11', 'Frontend', NULL, '2022-07-01', '2022-11-30', '13:57', '17:50', '2022-09-30', '2022-09-29 07:53:44', '2022-09-29 07:53:44'),
(272, '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 07:53:44', '2022-09-29 07:53:44'),
(273, '5', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:35:28', '2022-10-09 03:35:28'),
(274, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:38:42', '2022-10-09 03:38:42'),
(275, '6', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:40:58', '2022-10-09 03:40:58'),
(276, '6', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:41:59', '2022-10-09 03:41:59'),
(277, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:53:03', '2022-10-09 03:53:03'),
(278, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:55:23', '2022-10-09 03:55:23'),
(279, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 03:55:47', '2022-10-09 03:55:47'),
(280, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 04:02:13', '2022-10-09 04:02:13'),
(281, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 04:16:13', '2022-10-09 04:16:13'),
(282, '12', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 04:17:26', '2022-10-09 04:17:26'),
(283, '13', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 04:18:09', '2022-10-09 04:18:09'),
(284, '14', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 05:17:51', '2022-10-09 05:17:51'),
(285, '15', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 05:19:22', '2022-10-09 05:19:22'),
(286, '16', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 05:29:11', '2022-10-09 05:29:11'),
(287, '17', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 05:32:27', '2022-10-09 05:32:27'),
(288, '18', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 05:45:06', '2022-10-09 05:45:06'),
(289, '19', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 05:46:04', '2022-10-09 05:46:04'),
(290, '20', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 21:22:57', '2022-10-09 21:22:57'),
(291, '21', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 21:26:17', '2022-10-09 21:26:17'),
(292, '22', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 23:12:29', '2022-10-09 23:12:29'),
(293, '22', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 23:13:09', '2022-10-09 23:13:09'),
(294, '22', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 23:13:20', '2022-10-09 23:13:20'),
(295, '22', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 23:16:40', '2022-10-09 23:16:40'),
(296, '22', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-09 23:29:20', '2022-10-09 23:29:20'),
(297, '4', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:52:04', '2022-10-10 00:52:04'),
(298, '5', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:53:54', '2022-10-10 00:53:54'),
(299, '6', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:54:23', '2022-10-10 00:54:23'),
(300, '9', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:54:55', '2022-10-10 00:54:55'),
(301, '10', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:55:21', '2022-10-10 00:55:21'),
(302, '11', NULL, '0.000001', NULL, NULL, NULL, NULL, NULL, '2022-10-10 00:55:53', '2022-10-10 00:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_id`, `name`, `parent_id`, `description`, `category`, `department_id`, `start_date`, `deadline`, `employee_id`, `notification`, `upload_image`, `upload_document`, `priority`, `status`, `budget`, `client_id`, `created_at`, `updated_at`) VALUES
(4, '121', 'CRM', '4', NULL, NULL, '41', '2022-09-22', '2022-10-20', '11', '11', '1665384724.jpg', '1665384724.png', NULL, NULL, '150000', '8', '2022-09-27 05:04:24', '2022-10-10 00:52:04'),
(5, '2', 'Work Flow', '4', NULL, NULL, '41', '2022-09-20', '2022-09-29', '11', '11', '1665384834.png', '1665384834.png', NULL, NULL, '600000', '8', '2022-09-27 05:11:21', '2022-10-10 00:53:54'),
(6, '3', 'DTBA', '4', NULL, NULL, '41', '2022-09-06', '2022-09-30', '18', '11', '1665384863.jpg', '1665384863.jpg', NULL, NULL, '200000', '8', '2022-09-27 05:35:05', '2022-10-10 00:54:23'),
(9, '4', 'BPP Shops', '4', NULL, NULL, '41', '2022-09-01', '2022-09-30', '13', '11', '1665384895.jpg', '1665384895.jpg', 'High', 'Completed', '1200000', '8', '2022-09-28 08:54:27', '2022-10-10 00:54:55'),
(10, '5', 'Hospital Management System', '4', NULL, NULL, '41', '2022-10-20', '2022-12-27', '13', '11', '1665384921.png', '1665384921.jpg', 'High', NULL, '200000', '8', '2022-09-28 08:57:47', '2022-10-10 00:55:21'),
(11, '5', 'Agent Panel', '4', NULL, NULL, '41', '2022-10-01', '2022-10-31', '18', '12', '1665384953.png', '1665384953.jpg', 'Medium', 'In Progress', '100000', '8', '2022-09-29 07:45:10', '2022-10-10 00:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `projects_date_histories`
--

CREATE TABLE `projects_date_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects_date_histories`
--

INSERT INTO `projects_date_histories` (`id`, `project_id`, `name`, `start_date`, `deadline`, `created_at`, `updated_at`) VALUES
(5, '15', 'Work Flow', '2022-09-01', '2022-10-16', NULL, NULL),
(6, '16', 'CRM', '2022-09-01', '2022-09-22', NULL, NULL),
(7, '10', 'CRM', '2022-10-13', '2022-11-13', NULL, NULL),
(8, '10', 'CRM', '2022-10-22', '2022-11-25', NULL, NULL),
(9, '11', 'CRM', '2022-10-22', '2022-12-22', NULL, NULL),
(10, '13', 'CRM', '2022-10-25', '2022-11-24', NULL, NULL),
(11, '12', 'BPP Shops', '2022-10-22', '2022-11-22', NULL, NULL),
(12, '13', 'E-Commerce', '2023-01-22', '2023-02-22', NULL, NULL),
(13, '112', 'CRM 2', '2022-08-30', '2022-09-30', NULL, NULL),
(14, '2', 'CRM', '2022-09-05', '2022-09-30', NULL, NULL),
(15, '2', 'CRM', '2022-09-13', '2022-09-20', NULL, NULL),
(16, '12', 'BPP Shoping', NULL, NULL, NULL, NULL),
(17, '12', 'BPP Shoping', '2022-09-13', '2022-09-28', NULL, NULL),
(18, '12', 'BPP Shoping', '2022-09-13', '2022-09-28', NULL, NULL),
(19, '1', 'Work Flowing', '2022-09-01', '2022-09-30', NULL, NULL),
(20, '1120', 'CRM4', '2022-09-06', '2022-09-21', NULL, NULL),
(21, '1120', 'CRM4', '2022-09-20', '2022-09-29', NULL, NULL),
(22, '1120', 'CRM4', '2022-09-20', '2022-09-30', NULL, NULL),
(23, 'work Flow', 'CRM', '2022-09-01', '2022-09-30', NULL, NULL),
(24, 'work Flow', 'CRM', '2022-09-14', '2022-09-23', NULL, NULL),
(25, '1120', 'CRM', NULL, NULL, NULL, NULL),
(26, '1120', 'CRM', '2022-09-06', '2022-09-15', NULL, NULL),
(27, 'work Flow', 'CRM', '2022-09-07', '2022-09-24', NULL, NULL),
(28, '13', 'CRM', '2022-09-01', '2022-10-07', NULL, NULL),
(29, '112', 'CRM', '2022-09-05', '2022-09-30', NULL, NULL),
(30, '112', 'CRM', '2022-09-07', '2022-09-30', NULL, NULL),
(31, '112', 'Work Flow', '2022-08-29', '2022-09-30', NULL, NULL),
(32, '114', 'BPP Shops', '2022-09-06', '2022-09-15', NULL, NULL),
(34, '112', 'Work Flow', '2022-09-01', '2022-11-30', NULL, NULL),
(35, '121', 'CRM', '2022-09-01', '2022-09-30', NULL, NULL),
(36, '2', 'Work Flow', '2022-09-01', '2022-09-15', NULL, NULL),
(37, '3', 'DTBA', '2022-09-12', '2022-10-15', NULL, NULL),
(38, NULL, 'CRM2', '2022-08-31', '2022-09-09', NULL, NULL),
(39, '3', 'DTBA', '2022-09-06', '2022-09-30', NULL, NULL),
(40, '2', 'Work Flow', '2022-09-20', '2022-09-29', NULL, NULL),
(41, '121', 'CRM', '2022-09-22', '2022-10-20', NULL, NULL),
(44, '5', 'Hospital Management System', '2022-10-20', '2022-12-27', NULL, NULL),
(45, '5', 'Agent Panel', '2022-10-01', '2022-10-31', NULL, NULL),
(46, '5', 'Agent Panel', '2022-10-01', '2022-10-31', NULL, NULL),
(47, '2', 'Work Flow', '2022-09-20', '2022-09-29', NULL, NULL),
(48, '4', 'BPP Shops', '2022-09-01', '2022-09-30', NULL, NULL),
(49, '3', 'DTBA', '2022-09-06', '2022-09-30', NULL, NULL),
(50, '3', 'DTBA', '2022-09-06', '2022-09-30', NULL, NULL),
(56, NULL, 'CRM', NULL, NULL, NULL, NULL),
(57, NULL, 'CRM', NULL, NULL, NULL, NULL),
(58, '112', 'CRM', NULL, NULL, NULL, NULL),
(59, '112', 'ssssssss', NULL, NULL, NULL, NULL),
(60, '9999', 'ssssssssssss', NULL, NULL, NULL, NULL),
(61, '112', 'rrrrrrrrrrrrrrrrrr', NULL, NULL, NULL, NULL),
(62, NULL, '2wer', NULL, NULL, NULL, NULL),
(63, NULL, 'CRM', NULL, NULL, NULL, NULL),
(64, NULL, 'de2', NULL, NULL, NULL, NULL),
(65, NULL, 'oio', NULL, NULL, NULL, NULL),
(66, NULL, 'bfr', NULL, NULL, NULL, NULL),
(67, NULL, 'bfr', NULL, NULL, NULL, NULL),
(68, NULL, 'bfr', NULL, NULL, NULL, NULL),
(69, NULL, 'bfr', NULL, NULL, NULL, NULL),
(70, NULL, 'bfr', NULL, NULL, NULL, NULL),
(71, '121', 'CRM', '2022-09-22', '2022-10-20', NULL, NULL),
(72, '2', 'Work Flow', '2022-09-20', '2022-09-29', NULL, NULL),
(73, '3', 'DTBA', '2022-09-06', '2022-09-30', NULL, NULL),
(74, '4', 'BPP Shops', '2022-09-01', '2022-09-30', NULL, NULL),
(75, '5', 'Hospital Management System', '2022-10-20', '2022-12-27', NULL, NULL),
(76, '5', 'Agent Panel', '2022-10-01', '2022-10-31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_budget_histories`
--

CREATE TABLE `project_budget_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_budget_histories`
--

INSERT INTO `project_budget_histories` (`id`, `project_id`, `name`, `budget`, `created_at`, `updated_at`) VALUES
(1, '1120', 'CRM4', '2500', NULL, NULL),
(2, '1120', 'CRM4', '1500', NULL, NULL),
(3, '1120', 'CRM4', '1500', NULL, NULL),
(4, 'work Flow', 'CRM', 'qqq', NULL, NULL),
(5, 'work Flow', 'CRM', '50000', NULL, NULL),
(6, '1120', 'CRM', '1500', NULL, NULL),
(7, '1120', 'CRM', '1500', NULL, NULL),
(8, 'work Flow', 'CRM', '2500', NULL, NULL),
(9, '13', 'CRM', '25000', NULL, NULL),
(10, '112', 'CRM', '258000', NULL, NULL),
(11, '112', 'CRM', '258000', NULL, NULL),
(12, '112', 'Work Flow', '4500', NULL, NULL),
(13, '114', 'BPP Shops', '6500', NULL, NULL),
(14, '114', 'BPP Shops', '6500', NULL, NULL),
(15, '112', 'Work Flow', '4500', NULL, NULL),
(16, '121', 'CRM', '150000', NULL, NULL),
(17, '2', 'Work Flow', '600000', NULL, NULL),
(18, '3', 'DTBA', '200000', NULL, NULL),
(19, NULL, 'CRM2', 'qqq', NULL, NULL),
(20, '3', 'DTBA', '200000', NULL, NULL),
(21, '2', 'Work Flow', '600000', NULL, NULL),
(22, '121', 'CRM', '150000', NULL, NULL),
(25, '5', 'Hospital Management System', '200000', NULL, NULL),
(26, '5', 'Agent Panel', '100000', NULL, NULL),
(27, '5', 'Agent Panel', '100000', NULL, NULL),
(28, '2', 'Work Flow', '600000', NULL, NULL),
(30, '3', 'DTBA', '200000', NULL, NULL),
(31, '3', 'DTBA', '200000', NULL, NULL),
(32, '4', 'BPP Shops', '1200000', NULL, NULL),
(37, NULL, 'CRM', 'qqq', NULL, NULL),
(38, NULL, 'CRM', 'qqq', NULL, NULL),
(39, '112', 'CRM', 'qqq', NULL, NULL),
(40, '112', 'ssssssss', 'qqq', NULL, NULL),
(41, '9999', 'ssssssssssss', 'qqq', NULL, NULL),
(42, '112', 'rrrrrrrrrrrrrrrrrr', 'qqq', NULL, NULL),
(43, NULL, '2wer', 'qqq', NULL, NULL),
(44, NULL, 'CRM', 'qqq', NULL, NULL),
(45, NULL, 'de2', 'qqq', NULL, NULL),
(46, NULL, 'oio', 'qqq', NULL, NULL),
(47, NULL, 'bfr', 'qqq', NULL, NULL),
(48, NULL, 'bfr', NULL, NULL, NULL),
(49, NULL, 'bfr', NULL, NULL, NULL),
(50, NULL, 'bfr', NULL, NULL, NULL),
(51, NULL, 'bfr', NULL, NULL, NULL),
(52, '121', 'CRM', '150000', NULL, NULL),
(53, '2', 'Work Flow', '600000', NULL, NULL),
(54, '3', 'DTBA', '200000', NULL, NULL),
(55, '4', 'BPP Shops', '1200000', NULL, NULL),
(56, '5', 'Hospital Management System', '200000', NULL, NULL),
(57, '5', 'Agent Panel', '100000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub__departments`
--

CREATE TABLE `sub__departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub__departments`
--

INSERT INTO `sub__departments` (`id`, `department_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '7', 'Web', '2022-08-27 05:24:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dead_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progressbar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_dependency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependencyRange_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `employee_id`, `project_id`, `module_id`, `feature_id`, `department_id`, `name`, `parent_id`, `start_date`, `dead_line`, `end_date`, `progressbar`, `status`, `type`, `priority`, `task_dependency`, `dependencyRange_id`, `work_duration`, `working_time`, `tag`, `image`, `created_at`, `updated_at`) VALUES
(24, '15', '10', '45', '67', '41', 'design card', '171', '2022-10-01', '2022-10-15', NULL, '70', 'In Progress', 'Compound', 'Complex', '24', '2', '1 hr', '1 hr', NULL, 'images/1665468623.jpg', '2022-09-29 10:53:33', '2022-10-11 00:10:23'),
(25, '18', '11', '47', '68', '47', 'design icon', NULL, '2022-10-01', '2022-10-15', NULL, NULL, 'In Progress', 'Complex', 'Medium', '42', '1', '1 hr', '1 hr', NULL, '1665228639.jpg', '2022-09-29 10:55:20', '2022-10-08 07:23:39'),
(26, '18', '11', '22', '30', '41', 'view no of agent  total sale amount', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745286224321597.webp', '2022-09-29 10:57:27', '2022-09-29 10:57:27'),
(27, '18', '11', '18', '31', '41', 'card design', '18', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745290980034204.webp', '2022-09-29 12:13:02', '2022-09-29 12:13:02'),
(28, '18', '11', '23', '29', '41', 'design icon', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745291094698156.webp', '2022-09-29 12:14:51', '2022-09-29 12:14:51'),
(29, '18', '11', '23', '33', '41', 'view total no of agent total commission', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745291213874281.webp', '2022-09-29 12:16:45', '2022-09-29 12:16:45'),
(30, '18', '11', '13', '36', '41', 'card design', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745291507870704.webp', '2022-09-29 12:21:25', '2022-09-29 12:21:25'),
(31, '18', '11', '24', '35', '41', 'design icon', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745291604031411.webp', '2022-09-29 12:22:57', '2022-09-29 12:22:57'),
(32, '18', '11', '24', '36', '41', 'view no of agent total withdrawal', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745291709835635.webp', '2022-09-29 12:24:38', '2022-09-29 12:24:38'),
(33, '18', '11', '18', '39', '41', 'card design', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745292582642577.webp', '2022-09-29 12:38:30', '2022-09-29 12:38:30'),
(34, '18', '11', '25', '38', '41', 'design icon', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745292833296283.webp', '2022-09-29 12:42:29', '2022-09-29 12:42:29'),
(35, '18', '11', '25', '39', '41', 'view no of agents inside Dhaka', '15', '2022-11-01', '2022-10-15', '2022-10-01', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745292903706589.webp', '2022-09-29 12:43:36', '2022-09-29 12:43:36'),
(36, '18', '11', '47', '68', '47', 'card design', NULL, '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '24', '1', '1 hr', '1 hr', NULL, 'images/1746112304144762.jpg', '2022-09-29 12:51:28', '2022-10-08 03:47:39'),
(37, '18', '11', '26', '21', '41', 'design icon', '15', '2022-10-01', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745293562086825.webp', '2022-09-29 12:54:04', '2022-09-29 12:54:04'),
(38, '18', '11', '26', '42', '41', 'view no of agents outside Dhaka', '15', '2022-10-01', '2022-10-15', '2022-10-01', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745293628353999.webp', '2022-09-29 12:55:08', '2022-09-29 12:55:08'),
(39, '18', '11', '27', '43', '41', 'form input (17 input field with 1 image field)', NULL, '2022-11-01', '2022-10-18', '2022-10-18', NULL, 'In Progress', 'Complex', 'High', '', '', '2 hr', '7 hr', NULL, 'images/1745297708495895.webp', '2022-09-29 13:59:59', '2022-09-29 13:59:59'),
(40, '18', '11', '31', '46', '41', 'Button input', NULL, '2022-10-01', '2022-10-15', NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '2 hr', '2 hr', NULL, 'images/1745301868663068.webp', '2022-09-29 15:06:06', '2022-09-29 15:06:06'),
(42, '18', '11', '32', '47', '41', 'a input section for and a button', NULL, '2022-10-01', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '15 min', '15 min', NULL, 'images/1745302545004229.webp', '2022-09-29 15:16:51', '2022-09-29 15:16:51'),
(43, '18', '11', '33', '48', '41', 'input field for search', NULL, '2022-10-01', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '15 min', '15 min', NULL, 'images/1745302664541912.webp', '2022-09-29 15:18:45', '2022-09-29 15:18:45'),
(44, '18', '11', '33', '49', '41', 'input button', NULL, '2022-10-01', '2022-10-05', '2022-10-05', NULL, 'In Progress', 'Simple', 'Medium', '', '', '15 min', '15 min', NULL, 'images/1745303035665008.webp', '2022-09-29 15:24:39', '2022-09-29 15:24:39'),
(46, '18', '11', '34', '51', '41', 'a clickable button(input taking)', NULL, '2022-10-01', '2022-10-06', '2022-10-06', NULL, 'In Progress', 'Complex', 'Medium', '', '', '15 min', '15 min', NULL, 'images/1745303662453321.webp', '2022-09-29 15:34:37', '2022-09-29 15:34:37'),
(47, '18', '11', '35', '52', '41', 'a input field for search', NULL, '2022-10-01', '2022-10-06', NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745305226357540.webp', '2022-09-29 15:59:28', '2022-09-29 15:59:28'),
(48, '18', '11', '35', '53', '41', 'viewable info of agent', NULL, '2022-10-01', '2022-10-05', '2022-10-06', NULL, 'In Progress', 'Simple', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745305288289462.webp', '2022-09-29 16:00:27', '2022-09-29 16:00:27'),
(49, '18', '11', '35', '54', '41', 'clickable input button', NULL, '2022-11-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745453496190964.webp', '2022-10-01 07:16:10', '2022-10-01 07:16:10'),
(51, '18', '11', '40', '47', '41', 'a input field for search', NULL, '2022-10-05', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745454159517203.webp', '2022-10-01 07:26:42', '2022-10-01 07:26:42'),
(52, '18', '11', '40', '47', '41', 'Search button', NULL, '2022-10-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745454217109863.webp', '2022-10-01 07:27:37', '2022-10-01 07:27:37'),
(53, '18', '11', '40', '54', '41', 'a input taking button', NULL, '2022-10-05', '2022-10-15', '2022-10-15', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745454297914105.webp', '2022-10-01 07:28:54', '2022-10-01 07:28:54'),
(55, '18', '11', '41', '57', '41', 'viewable info of customer', NULL, '2022-10-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745454940897489.webp', '2022-10-01 07:39:07', '2022-10-01 07:39:07'),
(56, '18', '11', '41', '59', '41', 'input field for search', NULL, '2022-10-04', '2022-10-12', '2022-10-12', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745455049582486.webp', '2022-10-01 07:40:51', '2022-10-01 07:40:51'),
(57, '18', '11', '41', '58', '41', 'viewable info of agent', NULL, '2022-10-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745455140903604.webp', '2022-10-01 07:42:18', '2022-10-01 07:42:18'),
(58, '18', '11', '41', '60', '41', 'in changeable input button for print', NULL, '2022-10-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745455230919359.webp', '2022-10-01 07:43:44', '2022-10-01 07:43:44'),
(62, '18', '11', '42', '47', '41', 'input field for search', NULL, '2022-10-05', '2022-10-12', '2022-10-12', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745455714291087.webp', '2022-10-01 07:51:25', '2022-10-01 07:51:25'),
(63, '18', '11', '42', '48', '41', 'input field for search', NULL, '2022-10-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745455770109062.webp', '2022-10-01 07:52:18', '2022-10-01 07:52:18'),
(64, '18', '11', '42', '49', '41', 'input button', NULL, '2022-10-05', '2022-10-12', '2022-10-12', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745455837495877.webp', '2022-10-01 07:53:22', '2022-10-01 07:53:22'),
(65, '18', '11', '42', '60', '41', 'input button for print', NULL, '2022-10-05', '2022-10-10', '2022-10-10', NULL, 'In Progress', 'Complex', 'Medium', '', '', '1 hr', '1 hr', NULL, 'images/1745455904188019.webp', '2022-10-01 07:54:26', '2022-10-01 07:54:26'),
(67, '18', '11', '31', '45', '41', 'view image and agent id', NULL, '2022-10-05', '2022-10-06', '2022-10-06', NULL, 'In Progress', 'Complex', 'Medium', '', '', '10 min', '10 min', NULL, 'images/1745457742704232.webp', '2022-10-01 08:23:39', '2022-10-01 08:23:39'),
(68, '18', '11', '31', '44', '41', 'view name of agent', NULL, '2022-10-05', '2022-10-06', '2022-10-06', NULL, 'In Progress', 'Complex', 'Medium', '', '', '10 min', '10 min', NULL, 'images/1745457887522976.webp', '2022-10-01 08:25:57', '2022-10-01 08:25:57'),
(69, '18', '11', '31', '45', '41', 'view agent registered date', NULL, NULL, NULL, NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '10 min', '10 min', NULL, 'images/1745457972894612.webp', '2022-10-01 08:27:19', '2022-10-01 08:27:19'),
(70, '18', '11', '31', '45', '41', 'view email of agent', NULL, NULL, NULL, NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '10 min', '10 min', NULL, 'images/1745458177636601.webp', '2022-10-01 08:30:34', '2022-10-01 08:30:34'),
(71, '18', '11', '31', '45', '41', 'view mobile number 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458281210573.webp', '2022-10-01 08:32:13', '2022-10-01 08:32:13'),
(72, '18', '11', '31', '45', '41', 'view mobile number 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458337165574.webp', '2022-10-01 08:33:06', '2022-10-01 08:33:06'),
(73, '18', '11', '31', '45', '41', 'view zone area of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458388568992.webp', '2022-10-01 08:33:55', '2022-10-01 08:33:55'),
(74, '18', '11', '31', '45', '41', 'view division of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458468123619.webp', '2022-10-01 08:35:11', '2022-10-01 08:35:11'),
(75, '18', '11', '31', '45', '41', 'view present address of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458549742269.webp', '2022-10-01 08:36:29', '2022-10-01 08:36:29'),
(76, '18', '11', '31', '45', '41', 'view permanent address of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458636285964.webp', '2022-10-01 08:37:51', '2022-10-01 08:37:51'),
(77, '18', '11', '31', '45', '41', 'actionable for change status', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458721730748.webp', '2022-10-01 08:39:13', '2022-10-01 08:39:13'),
(78, '18', '11', '31', '45', '41', 'actionable button for edit agent info', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745458795451444.webp', '2022-10-01 08:40:23', '2022-10-01 08:40:23'),
(79, '18', '11', '32', '50', '41', 'view agent id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459171317121.webp', '2022-10-01 08:46:22', '2022-10-01 08:46:22'),
(80, '18', '11', '32', '50', '41', 'view full name of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459224689117.webp', '2022-10-01 08:47:13', '2022-10-01 08:47:13'),
(81, '18', '11', '32', '50', '41', 'view zone area of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459281210357.webp', '2022-10-01 08:48:06', '2022-10-01 08:48:06'),
(82, '18', '11', '32', '50', '41', 'view division of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459343129101.webp', '2022-10-01 08:49:06', '2022-10-01 08:49:06'),
(83, '18', '11', '32', '50', '41', 'view no of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459389835629.webp', '2022-10-01 08:49:50', '2022-10-01 08:49:50'),
(84, '18', '11', '32', '50', '41', 'view total sale', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459434106086.webp', '2022-10-01 08:50:32', '2022-10-01 08:50:32'),
(85, '18', '11', '32', '50', '41', 'view total no of order', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459595407280.webp', '2022-10-01 08:53:06', '2022-10-01 08:53:06'),
(86, '18', '11', '32', '50', '41', 'view total sale amount of current month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459655480853.webp', '2022-10-01 08:54:03', '2022-10-01 08:54:03'),
(87, '18', '11', '32', '50', '41', 'view of total sale of current week', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745459939441025.webp', '2022-10-01 08:58:34', '2022-10-01 08:58:34'),
(88, '18', '11', '32', '50', '41', 'view of today sale of an agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745460327541381.webp', '2022-10-01 09:04:44', '2022-10-01 09:04:44'),
(89, '18', '11', '32', '50', '41', 'view total commission amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745460663445816.webp', '2022-10-01 09:10:05', '2022-10-01 09:10:05'),
(90, '18', '11', '32', '50', '41', 'view of total commission to pay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745460730941192.webp', '2022-10-01 09:11:09', '2022-10-01 09:11:09'),
(91, '18', '11', '32', '50', '41', 'view due commission of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745460791376671.webp', '2022-10-01 09:12:07', '2022-10-01 09:12:07'),
(92, '18', '11', '32', '50', '41', 'actionable button for change status', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745460904497071.webp', '2022-10-01 09:13:55', '2022-10-01 09:13:55'),
(93, '18', '11', '32', '50', '41', 'actionable button to redirect another page', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745460981741414.webp', '2022-10-01 09:15:08', '2022-10-01 09:15:08'),
(94, '18', '11', '35', '55', '41', 'view customer id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461178371251.webp', '2022-10-01 09:18:16', '2022-10-01 09:18:16'),
(95, '18', '11', '35', '55', '41', 'view customer name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461267996189.webp', '2022-10-01 09:19:41', '2022-10-01 09:19:41'),
(96, '18', '11', '35', '55', '41', 'view zone/area  of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461317593776.webp', '2022-10-01 09:20:28', '2022-10-01 09:20:28'),
(97, '18', '11', '35', '55', '41', 'view division of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461353469179.webp', '2022-10-01 09:21:03', '2022-10-01 09:21:03'),
(98, '18', '11', '35', '55', '41', 'view email id of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461400890504.webp', '2022-10-01 09:21:48', '2022-10-01 09:21:48'),
(99, '18', '11', '35', '55', '41', 'view mobile number of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461460929639.webp', '2022-10-01 09:22:45', '2022-10-01 09:22:45'),
(100, '18', '11', '35', '55', '41', 'view address of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461505466250.webp', '2022-10-01 09:23:28', '2022-10-01 09:23:28'),
(101, '18', '11', '40', '56', '41', 'view agent id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461657417778.webp', '2022-10-01 09:25:53', '2022-10-01 09:25:53'),
(102, '18', '11', '40', '13', '41', 'view agent name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461701752068.webp', '2022-10-01 09:26:35', '2022-10-01 09:26:35'),
(103, '18', '11', '40', '13', '41', 'view customer id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461744033102.webp', '2022-10-01 09:27:15', '2022-10-01 09:27:15'),
(104, '18', '11', '40', '56', '41', 'view no of order done by customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461798120479.webp', '2022-10-01 09:28:07', '2022-10-01 09:28:07'),
(105, '18', '11', '40', '56', '41', 'view total amount of order', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461853312278.webp', '2022-10-01 09:28:59', '2022-10-01 09:28:59'),
(106, '18', '11', '40', '56', '41', 'view total commission amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745461908826677.webp', '2022-10-01 09:29:52', '2022-10-01 09:29:52'),
(107, '18', '11', '40', '56', '41', 'actionable icon to redirect new page', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745461981225932.webp', '2022-10-01 09:31:01', '2022-10-01 09:31:01'),
(108, '18', '11', '41', '61', '41', 'view order date', NULL, NULL, NULL, NULL, NULL, 'In Progress', 'Simple', NULL, '', '', '10 min', '10 min', NULL, 'images/1745462328047202.webp', '2022-10-01 09:36:32', '2022-10-01 09:36:32'),
(109, '18', '11', '41', '61', '41', 'view order id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745462376859373.webp', '2022-10-01 09:37:19', '2022-10-01 09:37:19'),
(110, '18', '11', '41', '61', '41', 'view total no of item in order', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745462425872973.webp', '2022-10-01 09:38:05', '2022-10-01 09:38:05'),
(111, '18', '11', '41', '61', '41', 'view amount of order', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745462484984196.webp', '2022-10-01 09:39:02', '2022-10-01 09:39:02'),
(112, '18', '11', '41', '61', '41', 'view sale commission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745462540021368.webp', '2022-10-01 09:39:54', '2022-10-01 09:39:54'),
(113, '18', '11', '41', '61', '41', 'actionable eye icon to show invoice of order in modal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745462747721105.webp', '2022-10-01 09:43:12', '2022-10-01 09:43:12'),
(114, '18', '11', '41', '13', '41', 'actionable print button', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745462814572284.webp', '2022-10-01 09:44:16', '2022-10-01 09:44:16'),
(115, '18', '11', '42', '62', '41', 'view customer id', NULL, NULL, NULL, NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '10 min', '10 min', NULL, 'images/1745463030996802.webp', '2022-10-01 09:47:43', '2022-10-01 09:47:43'),
(116, '18', '11', '42', '62', '41', 'view customer name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463072974765.webp', '2022-10-01 09:48:23', '2022-10-01 09:48:23'),
(117, '18', '11', '42', '62', '41', 'view agent id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463109838043.webp', '2022-10-01 09:48:58', '2022-10-01 09:48:58'),
(118, '18', '11', '42', '62', '41', 'view agent name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463142504210.webp', '2022-10-01 09:49:29', '2022-10-01 09:49:29'),
(119, '18', '11', '42', '13', '41', 'view zone/area  of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463178662863.webp', '2022-10-01 09:50:03', '2022-10-01 09:50:03'),
(120, '18', '11', '42', '62', '41', 'view email id of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463211396047.webp', '2022-10-01 09:50:35', '2022-10-01 09:50:35'),
(121, '18', '11', '42', '62', '41', 'view mobile number of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463286537006.webp', '2022-10-01 09:51:46', '2022-10-01 09:51:46'),
(122, '18', '11', '42', '62', '41', 'view address of customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745463324125375.webp', '2022-10-01 09:52:22', '2022-10-01 09:52:22'),
(123, '18', '11', '44', '63', '41', 'input field for search', NULL, NULL, NULL, NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745463603198312.webp', '2022-10-01 09:56:48', '2022-10-01 09:56:48'),
(124, '18', '10', '44', '63', '41', 'in changeable input button for search', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745463679029497.webp', '2022-10-01 09:58:01', '2022-10-01 09:58:01'),
(125, '18', '11', '44', '63', '41', 'in changeable input button for print', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745464040266754.webp', '2022-10-01 10:03:45', '2022-10-01 10:03:45'),
(126, '18', '11', '44', '63', '41', 'view reg date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464087227860.webp', '2022-10-01 10:04:30', '2022-10-01 10:04:30'),
(127, '18', '11', '44', '63', '41', 'view agent id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464156912408.webp', '2022-10-01 10:05:36', '2022-10-01 10:05:36'),
(128, '18', '11', '44', '63', '41', 'view agent name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464192196434.webp', '2022-10-01 10:06:10', '2022-10-01 10:06:10'),
(129, '18', '11', '44', '63', '41', 'view zone area of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464249374256.webp', '2022-10-01 10:07:04', '2022-10-01 10:07:04'),
(130, '18', '11', '44', '63', '41', 'view division of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464310157789.webp', '2022-10-01 10:07:29', '2022-10-01 10:08:02'),
(131, '18', '11', '44', '63', '41', 'view total sale', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464365303073.webp', '2022-10-01 10:08:55', '2022-10-01 10:08:55'),
(132, '18', '11', '44', '63', '41', 'view total commission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464408315943.webp', '2022-10-01 10:09:36', '2022-10-01 10:09:36'),
(133, '18', '11', '44', '63', '41', 'view total withdrawal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464454875427.webp', '2022-10-01 10:10:20', '2022-10-01 10:10:20'),
(134, '18', '11', '44', '63', '41', 'view balance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464483060901.webp', '2022-10-01 10:10:47', '2022-10-01 10:10:47'),
(135, '18', '11', '44', '63', '41', 'view the status', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745464630001754.webp', '2022-10-01 10:13:07', '2022-10-01 10:13:07'),
(136, '18', '11', '44', '63', '41', 'actionable button to redirect another page', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745464676088433.webp', '2022-10-01 10:13:51', '2022-10-01 10:13:51'),
(137, '18', '11', '45', '65', '41', 'view information of agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745465209020710.webp', '2022-10-01 10:22:20', '2022-10-01 10:22:20'),
(138, '18', '11', '45', '66', '41', 'input field for search', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745465259612731.webp', '2022-10-01 10:23:08', '2022-10-01 10:23:08'),
(139, '18', '11', '45', '60', '41', 'in changeable input button for print', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745465598477994.webp', '2022-10-01 10:28:31', '2022-10-01 10:28:31'),
(140, '18', '11', '45', '67', '41', 'in changeable input button for a new modal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '30 min', '30 min', NULL, 'images/1745465760345081.webp', '2022-10-01 10:31:05', '2022-10-01 10:31:05'),
(141, '18', '11', '45', '67', '41', 'view agent name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745465844723346.webp', '2022-10-01 10:32:26', '2022-10-01 10:32:26'),
(142, '18', '11', '45', '67', '41', 'view agent id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745465876186392.webp', '2022-10-01 10:32:56', '2022-10-01 10:32:56'),
(143, '18', '11', '45', '67', '41', 'input field for date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745465926877905.webp', '2022-10-01 10:33:44', '2022-10-01 10:33:44'),
(144, '18', '11', '45', '67', '41', 'input field for withdrawal amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745465976419018.webp', '2022-10-01 10:34:31', '2022-10-01 10:34:31'),
(145, '18', '11', '45', '67', '41', 'input field for pay by', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466050430346.webp', '2022-10-01 10:35:42', '2022-10-01 10:35:42'),
(146, '18', '11', '45', '64', '41', 'view date of withdrawing\'s money', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466236379828.webp', '2022-10-01 10:38:39', '2022-10-01 10:38:39'),
(147, '11', '4', '45', '64', '41', 'view customer id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466265439179.webp', '2022-10-01 10:39:07', '2022-10-01 10:39:07'),
(148, '18', '11', '45', '64', '41', 'view customer name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466306123478.webp', '2022-10-01 10:39:46', '2022-10-01 10:39:46'),
(149, '18', '11', '45', '64', '41', 'view order id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466354517880.webp', '2022-10-01 10:40:32', '2022-10-01 10:40:32'),
(150, '18', '11', '45', '64', '41', 'view payment description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466470687572.webp', '2022-10-01 10:42:23', '2022-10-01 10:42:23'),
(151, '18', '11', '45', '64', '41', 'view sales commission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466513257206.webp', '2022-10-01 10:43:03', '2022-10-01 10:43:03'),
(152, '18', '11', '45', '64', '41', 'view withdrawal amount', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466577823063.webp', '2022-10-01 10:44:05', '2022-10-01 10:44:05'),
(153, '18', '11', '45', '64', '41', 'view remaining balance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', NULL, NULL, 'images/1745466614684899.webp', '2022-10-01 10:44:40', '2022-10-01 10:44:40'),
(154, '18', '11', '47', '66', '41', 'input field for search', NULL, NULL, NULL, NULL, NULL, 'In Progress', 'Complex', 'Medium', '', '', '30 min', '30 min', NULL, 'images/1745466898683420.webp', '2022-10-01 10:49:11', '2022-10-01 10:49:11'),
(155, '18', '11', '47', '66', '41', 'input button', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466939747807.webp', '2022-10-01 10:49:50', '2022-10-01 10:49:50'),
(156, '18', '11', '47', '60', '41', 'in changeable input button for print', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745466966619978.webp', '2022-10-01 10:50:16', '2022-10-01 10:50:16'),
(157, '18', '11', '47', '68', '41', 'view date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467006855557.webp', '2022-10-01 10:50:54', '2022-10-01 10:50:54'),
(158, '18', '11', '47', '68', '41', 'view no of total agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467162664820.webp', '2022-10-01 10:53:23', '2022-10-01 10:53:23'),
(159, '18', '11', '47', '68', '41', 'view total no of active agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467198245914.webp', '2022-10-01 10:53:57', '2022-10-01 10:53:57'),
(160, '18', '11', '47', '68', '41', 'view total sale of today', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467270016855.webp', '2022-10-01 10:55:05', '2022-10-01 10:55:05'),
(161, '18', '11', '47', '68', '41', 'view total commission amount of all agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467322996049.webp', '2022-10-01 10:55:56', '2022-10-01 10:55:56'),
(162, '18', '11', '47', '68', '41', 'view all agent today withdrawal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467374490620.webp', '2022-10-01 10:56:45', '2022-10-01 10:56:45'),
(163, '18', '11', '47', '68', '41', 'view all agent remaining balance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '10 min', '10 min', NULL, 'images/1745467416091592.webp', '2022-10-01 10:57:24', '2022-10-01 10:57:24'),
(164, '18', '11', '47', '68', '47', 'OTP', NULL, '2022-10-05', '2022-10-28', '2022-10-16', NULL, NULL, NULL, NULL, '24', '1', '7h', '2h', NULL, '1665228673.png', '2022-10-03 23:20:18', '2022-10-08 05:31:13'),
(165, '18', '11', '47', '68', '47', NULL, '171', NULL, '2022-10-18', '2022-10-27', NULL, NULL, NULL, NULL, '24', '1', NULL, NULL, NULL, 'images/1665468733.jpg', '2022-10-08 03:33:58', '2022-10-11 00:12:13'),
(166, '18', '11', '47', '68', '47', 'API', NULL, '2022-10-19', '2022-10-18', '2022-10-10', NULL, NULL, 'Complex', 'Medium', '24', '1', '7h', '2h', NULL, '1665228893.webp', '2022-10-08 05:34:18', '2022-10-08 05:34:53'),
(167, '18', '11', '47', '68', '47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simple', 'Low', '24', '1', '266', '266', NULL, '1665229778.jpg', '2022-10-08 05:49:00', '2022-10-08 05:49:38'),
(168, '12', '4', '8', '13', '41', NULL, NULL, NULL, NULL, NULL, '50', 'Closed', NULL, 'Medium', '24', '2', '366', '366', NULL, '1665288107.png', '2022-10-08 05:56:51', '2022-10-08 22:01:47'),
(169, '11', '4', '8', '13', '41', NULL, NULL, NULL, NULL, '2022-10-19', NULL, NULL, NULL, NULL, '164', '1', NULL, NULL, NULL, 'uploads/task/1746277834069102.png', '2022-10-09 23:38:39', '2022-10-09 23:38:39'),
(170, '16', '4', '8', '13', '41', NULL, '171', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '24', '1', NULL, NULL, NULL, 'images/1665468758.jpg', '2022-10-09 23:40:15', '2022-10-11 00:12:38'),
(171, '16', '4', '8', '13', '41', NULL, '171', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '24', '1', '1234', '1234', NULL, 'images/1665468782.jpg', '2022-10-09 23:41:25', '2022-10-11 00:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `task_issues`
--

CREATE TABLE `task_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_members` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependency_ranges`
--
ALTER TABLE `dependency_ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee__tasks`
--
ALTER TABLE `employee__tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
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
-- Indexes for table `progressbars`
--
ALTER TABLE `progressbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_date_histories`
--
ALTER TABLE `projects_date_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_budget_histories`
--
ALTER TABLE `project_budget_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub__departments`
--
ALTER TABLE `sub__departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_issues`
--
ALTER TABLE `task_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dependency_ranges`
--
ALTER TABLE `dependency_ranges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employee__tasks`
--
ALTER TABLE `employee__tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progressbars`
--
ALTER TABLE `progressbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projects_date_histories`
--
ALTER TABLE `projects_date_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `project_budget_histories`
--
ALTER TABLE `project_budget_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `sub__departments`
--
ALTER TABLE `sub__departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `task_issues`
--
ALTER TABLE `task_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
