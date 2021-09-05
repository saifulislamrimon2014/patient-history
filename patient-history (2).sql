-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 11:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient-history`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `marritial_status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `gender`, `religion`, `marritial_status`, `email`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Molly Bailey', '38', 'Others', 'Hindu', 'Married', 'Nostrum nisi sequi c', 1, '2021-02-01 15:25:19', '2021-02-01 15:42:40'),
(13, 'Troy Vaughn', '27', 'Others', 'Hindu', 'Married', 'Odit sed est est des', 1, '2021-02-01 15:41:23', '2021-02-01 23:56:20'),
(15, 'Ariana Haley', '51', 'Others', 'Hindu', 'Married', 'Quibusdam voluptatum', 1, '2021-02-02 04:15:14', '2021-02-02 04:15:28'),
(16, 'Md Saiful Islam Rimon', '01756018512', 'Female', 'Islam', 'Unmarried', 'saifulislamrimon2014@gmail.com', 0, '2021-02-02 04:41:40', '2021-02-02 04:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Md Saiful Islam Rimon', '01756018512', 'saifulislamrimon2014@gmail.com', 'adfkjadsnfjads', '2021-02-01 02:16:38', '2021-02-01 02:16:38'),
(5, 'Md Saiful Islam Rimon', '01756018512', 'saifulislamrimon2014@gmail.com', 'Molestiae anim rerum', '2021-02-01 15:28:12', '2021-02-01 15:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialist`, `degree`, `phone`, `email`, `status`, `image`, `created_at`, `updated_at`) VALUES
(15, 'M.M.A. Shalahuddin Qusar', 'Professor, Department of Psychiatry', 'MBBS, FCPS, FPS, Psychiatriologoy UK', '01712876256', 'gongajolybiplob@yahoo.com', 1, 'mma-shalahuddin-qusar-2021-02-02.jpg', '2021-02-02 13:10:36', '2021-02-02 13:40:42');

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
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `primary_key` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token_no` bigint(255) DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_date` date NOT NULL,
  `examination_date` date NOT NULL,
  `informant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_with_patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_from` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inhabitant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_illness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siblings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consanguinity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_pos_family` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_history_mental` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_tree` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnancy_and_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `early_developmental_milestones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childhood` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_sex_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_relationship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_circumstances` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `substance_use` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forensic_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `past_psychiatry_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `past_medical_illness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comorbid_illness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `character` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predominant_mood` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attitude_and_standards` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ultimate_concern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_build` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nutritional_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bowel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bladder` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anaemia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaundice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oedema` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `higher_psychic_function` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor_function` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cranial_nerves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sensory` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endocrine_system` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `musculoskeletal_system` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_others` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_appearance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facial_appearance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rapport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posture_movement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_behaviour` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor_behaviour` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oddity_behaviour` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_tone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flow_rhythm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oddity_speech` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hallucination` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illusion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consciousness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attention_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `immediate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intelligence` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judgement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statement_problem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `differential_diagnosis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predisposing_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precipitating_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepetuating_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psychological_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laboratory_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_changes` tinyint(1) DEFAULT NULL,
  `appetite` tinyint(1) NOT NULL,
  `fever` tinyint(1) NOT NULL,
  `chestpain` tinyint(1) NOT NULL,
  `palpitation` tinyint(1) NOT NULL,
  `sob` tinyint(1) NOT NULL,
  `pnd` tinyint(1) NOT NULL,
  `ankle_swelling` tinyint(1) NOT NULL,
  `nausea_vomiting` tinyint(1) NOT NULL,
  `abdominal_swelling` tinyint(1) NOT NULL,
  `excessive_salivation` tinyint(1) NOT NULL,
  `constipation` tinyint(1) NOT NULL,
  `dysuria` tinyint(1) NOT NULL,
  `haematuria` tinyint(1) NOT NULL,
  `frequency` tinyint(1) NOT NULL,
  `vaginal_disease` tinyint(1) NOT NULL,
  `fits` tinyint(1) NOT NULL,
  `numbness` tinyint(1) NOT NULL,
  `blurring_vision` tinyint(1) NOT NULL,
  `tremors` tinyint(1) NOT NULL,
  `slurred_speech` tinyint(1) NOT NULL,
  `tingling` tinyint(1) NOT NULL,
  `headache` tinyint(1) NOT NULL,
  `gait_disturbance` tinyint(1) NOT NULL,
  `paraesthesia` tinyint(1) NOT NULL,
  `poor_balance` tinyint(1) NOT NULL,
  `painful_joint` tinyint(1) NOT NULL,
  `joint_sweling` tinyint(1) NOT NULL,
  `morning_stiffness` tinyint(1) NOT NULL,
  `heatcold_intolerance` tinyint(1) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `polyuria` tinyint(1) NOT NULL,
  `excessivethirst_hunger` tinyint(1) NOT NULL,
  `depressed` tinyint(1) NOT NULL,
  `anxious` tinyint(1) NOT NULL,
  `euthymic` tinyint(1) NOT NULL,
  `blunt` tinyint(1) NOT NULL,
  `apathy` tinyint(1) NOT NULL,
  `elated` tinyint(1) NOT NULL,
  `congruent` tinyint(1) NOT NULL,
  `incongrument` tinyint(1) NOT NULL,
  `lability` tinyint(1) NOT NULL,
  `depersonalization` tinyint(1) NOT NULL,
  `derealization` tinyint(1) NOT NULL,
  `m_others` tinyint(1) NOT NULL,
  `poverty` tinyint(1) NOT NULL,
  `pressure` tinyint(1) NOT NULL,
  `insertion` tinyint(1) NOT NULL,
  `withdrawl` tinyint(1) NOT NULL,
  `broadcasting` tinyint(1) NOT NULL,
  `flight_ideas` tinyint(1) NOT NULL,
  `perseveration` tinyint(1) NOT NULL,
  `loosening` tinyint(1) NOT NULL,
  `obsession` tinyint(1) NOT NULL,
  `delusion` tinyint(1) NOT NULL,
  `suicidal_thought` tinyint(1) NOT NULL,
  `homicidal_thought` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `drugs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`primary_key`, `id`, `user_id`, `token_no`, `unit`, `ward`, `bed`, `admission_date`, `examination_date`, `informant_name`, `relation_with_patient`, `referred_from`, `referred_reason`, `patient_name`, `age`, `sex`, `religion`, `inhabitant`, `marital_status`, `occupation`, `education`, `complain`, `present_illness`, `father`, `mother`, `siblings`, `consanguinity`, `social_pos_family`, `family_history_mental`, `family_tree`, `pregnancy_and_birth`, `early_developmental_milestones`, `childhood`, `education_history`, `occupation_history`, `marriage_sex_history`, `current_relationship`, `social_circumstances`, `substance_use`, `forensic_history`, `past_psychiatry_history`, `past_medical_illness`, `comorbid_illness`, `relationship`, `character`, `hobbies`, `predominant_mood`, `attitude_and_standards`, `ultimate_concern`, `body_build`, `nutritional_status`, `pulse`, `bp`, `temp`, `res_rate`, `height`, `weight`, `bmi`, `bowel`, `bladder`, `anaemia`, `jaundice`, `oedema`, `higher_psychic_function`, `motor_function`, `cranial_nerves`, `sensory`, `endocrine_system`, `musculoskeletal_system`, `d_others`, `general_appearance`, `facial_appearance`, `rapport`, `posture_movement`, `social_behaviour`, `motor_behaviour`, `oddity_behaviour`, `rate_quantity`, `volume_tone`, `flow_rhythm`, `oddity_speech`, `hallucination`, `illusion`, `consciousness`, `orientation`, `attention_concentration`, `immediate`, `recent`, `remote`, `intelligence`, `judgement`, `insight`, `statement_problem`, `differential_diagnosis`, `diagnosis`, `predisposing_factor`, `precipitating_factor`, `prepetuating_factor`, `psychological_test`, `laboratory_test`, `weight_changes`, `appetite`, `fever`, `chestpain`, `palpitation`, `sob`, `pnd`, `ankle_swelling`, `nausea_vomiting`, `abdominal_swelling`, `excessive_salivation`, `constipation`, `dysuria`, `haematuria`, `frequency`, `vaginal_disease`, `fits`, `numbness`, `blurring_vision`, `tremors`, `slurred_speech`, `tingling`, `headache`, `gait_disturbance`, `paraesthesia`, `poor_balance`, `painful_joint`, `joint_sweling`, `morning_stiffness`, `heatcold_intolerance`, `diabetes`, `polyuria`, `excessivethirst_hunger`, `depressed`, `anxious`, `euthymic`, `blunt`, `apathy`, `elated`, `congruent`, `incongrument`, `lability`, `depersonalization`, `derealization`, `m_others`, `poverty`, `pressure`, `insertion`, `withdrawl`, `broadcasting`, `flight_ideas`, `perseveration`, `loosening`, `obsession`, `delusion`, `suicidal_thought`, `homicidal_thought`, `created_at`, `updated_at`, `drugs`) VALUES
(1, 3, 1, NULL, '123456789', 'Natus est sit exerc', 'In dolorem proident', '2008-07-24', '2019-10-31', 'Est fugit architec', 'Fuga Vel voluptatib', 'Beatae culpa non od', 'Magni ut quam eum fa', 'Barbara Walker', '56', 'Other', 'Aperiam harum dolor', 'Urban', 'Unmarried', 'Ut hic perspiciatis', 'Ut modi voluptas iru', 'Quidem temporibus ob', 'Aut rem quasi do qui', 'Sunt aute molestiae', 'Quisquam do nostrum', 'Tenetur aut maxime f', 'Nostrum enim sapient', 'Ut anim voluptate do', 'Ut soluta quia obcae', 'Earum est irure haru', 'Quo quis culpa et a', 'Sit velit est face', 'Magnam duis pariatur', 'Nulla reprehenderit', 'Aut minim reiciendis', 'Maxime ab ullam ab e', 'Optio at dolore et', 'Sit fugiat eiusmod', 'Cillum laboris sint', 'Velit facilis ullamc', 'Officia velit accusa', 'Earum est labore te', 'Fugiat ut soluta min', 'In voluptatibus cum', 'Deleniti cumque ut q', 'Temporibus non sint', 'Nobis molestiae quam', 'Voluptatem necessit', 'Voluptas assumenda q', 'Sint ex culpa aspe', 'Enim fugiat ex et cu', 'Mollit deleniti labo', 'Animi tenetur nulla', 'Consequatur et non e', 'Ipsum ut sint et c', 'Veniam dicta ut fac', 'Sit non mollit recus', 'In vero tenetur cons', 'Voluptas eum ut nisi', 'Voluptas eum ut nisi', 'Culpa nostrum non a', 'Nam vitae qui quo de', 'Accusantium molestia', 'Quo eligendi consect', 'Est nobis magnam mag', 'Sed recusandae Quib', 'Perspiciatis eu mol', 'Aliquid officia mini', 'Vel dolore expedita', 'Atque eius consequat', 'Voluptatem sint iust', 'Nesciunt voluptates', 'Quod in consequatur', 'Quia eaque dolorum m', 'Obcaecati sequi quas', 'Beatae reprehenderit', 'Quia unde mollit at', 'Expedita exercitatio', 'Eligendi quia conseq', 'Natus aspernatur nul', 'Voluptatem Deserunt', 'Dolorem aut ea labor', 'Quis nihil consequat', 'Iste et in quos ea', 'Qui quo recusandae', 'Ea officia in dolore', 'Libero eu laborum V', 'Doloremque doloribus', 'Amet tempor lorem l', 'Qui ratione velit ve', 'Similique exercitati', 'Culpa iure quam ut e', 'Quia pariatur Nisi', 'Voluptates consectet', 'Qui suscipit et rem', 'Exercitationem natus', 'Voluptate aliquip et', 'Elit eum quia digni', 'Illum ut doloremque', 'Occaecat ut minima s', 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2021-02-02 16:38:09', '2021-02-02 16:38:09', NULL),
(2, 3, 1, NULL, '987654321', 'Natus est sit exerc', 'In dolorem proident', '2008-07-24', '2019-10-31', 'Est fugit architec', 'Fuga Vel voluptatib', 'Beatae culpa non od', 'Magni ut quam eum fa', 'Barbara Walker', '56', 'Other', 'Aperiam harum dolor', 'Urban', 'Unmarried', 'Ut hic perspiciatis', 'Ut modi voluptas iru', 'Quidem temporibus ob', 'Aut rem quasi do qui', 'Sunt aute molestiae', 'Quisquam do nostrum', 'Tenetur aut maxime f', 'Nostrum enim sapient', 'Ut anim voluptate do', 'Ut soluta quia obcae', 'Earum est irure haru', 'Quo quis culpa et a', 'Sit velit est face', 'Magnam duis pariatur', 'Nulla reprehenderit', 'Aut minim reiciendis', 'Maxime ab ullam ab e', 'Optio at dolore et', 'Sit fugiat eiusmod', 'Cillum laboris sint', 'Velit facilis ullamc', 'Officia velit accusa', 'Earum est labore te', 'Fugiat ut soluta min', 'In voluptatibus cum', 'Deleniti cumque ut q', 'Temporibus non sint', 'Nobis molestiae quam', 'Voluptatem necessit', 'Voluptas assumenda q', 'Sint ex culpa aspe', 'Enim fugiat ex et cu', 'Mollit deleniti labo', 'Animi tenetur nulla', 'Consequatur et non e', 'Ipsum ut sint et c', 'Veniam dicta ut fac', 'Sit non mollit recus', 'In vero tenetur cons', 'Voluptas eum ut nisi', 'Voluptas eum ut nisi', 'Culpa nostrum non a', 'Nam vitae qui quo de', 'Accusantium molestia', 'Quo eligendi consect', 'Est nobis magnam mag', 'Sed recusandae Quib', 'Perspiciatis eu mol', 'Aliquid officia mini', 'Vel dolore expedita', 'Atque eius consequat', 'Voluptatem sint iust', 'Nesciunt voluptates', 'Quod in consequatur', 'Quia eaque dolorum m', 'Obcaecati sequi quas', 'Beatae reprehenderit', 'Quia unde mollit at', 'Expedita exercitatio', 'Eligendi quia conseq', 'Natus aspernatur nul', 'Voluptatem Deserunt', 'Dolorem aut ea labor', 'Quis nihil consequat', 'Iste et in quos ea', 'Qui quo recusandae', 'Ea officia in dolore', 'Libero eu laborum V', 'Doloremque doloribus', 'Amet tempor lorem l', 'Qui ratione velit ve', 'Similique exercitati', 'Culpa iure quam ut e', 'Quia pariatur Nisi', 'Voluptates consectet', 'Qui suscipit et rem', 'Exercitationem natus', 'Voluptate aliquip et', 'Elit eum quia digni', 'Illum ut doloremque', 'Occaecat ut minima s', 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2021-02-02 16:41:34', '2021-02-02 16:41:34', NULL),
(3, 3, 1, NULL, 'ejaz gazi', 'Natus est sit exerc', 'In dolorem proident', '2008-07-24', '2019-10-31', 'Est fugit architec', 'Fuga Vel voluptatib', 'Beatae culpa non od', 'Magni ut quam eum fa', 'Barbara Walker', '56', 'Other', 'Aperiam harum dolor', 'Urban', 'Unmarried', 'Ut hic perspiciatis', 'Ut modi voluptas iru', 'Quidem temporibus ob', 'Aut rem quasi do qui', 'Sunt aute molestiae', 'Quisquam do nostrum', 'Tenetur aut maxime f', 'Nostrum enim sapient', 'Ut anim voluptate do', 'Ut soluta quia obcae', 'Earum est irure haru', 'Quo quis culpa et a', 'Sit velit est face', 'Magnam duis pariatur', 'Nulla reprehenderit', 'Aut minim reiciendis', 'Maxime ab ullam ab e', 'Optio at dolore et', 'Sit fugiat eiusmod', 'Cillum laboris sint', 'Velit facilis ullamc', 'Officia velit accusa', 'Earum est labore te', 'Fugiat ut soluta min', 'In voluptatibus cum', 'Deleniti cumque ut q', 'Temporibus non sint', 'Nobis molestiae quam', 'Voluptatem necessit', 'Voluptas assumenda q', 'Sint ex culpa aspe', 'Enim fugiat ex et cu', 'Mollit deleniti labo', 'Animi tenetur nulla', 'Consequatur et non e', 'Ipsum ut sint et c', 'Veniam dicta ut fac', 'Sit non mollit recus', 'In vero tenetur cons', 'Voluptas eum ut nisi', 'Voluptas eum ut nisi', 'Culpa nostrum non a', 'Nam vitae qui quo de', 'Accusantium molestia', 'Quo eligendi consect', 'Est nobis magnam mag', 'Sed recusandae Quib', 'Perspiciatis eu mol', 'Aliquid officia mini', 'Vel dolore expedita', 'Atque eius consequat', 'Voluptatem sint iust', 'Nesciunt voluptates', 'Quod in consequatur', 'Quia eaque dolorum m', 'Obcaecati sequi quas', 'Beatae reprehenderit', 'Quia unde mollit at', 'Expedita exercitatio', 'Eligendi quia conseq', 'Natus aspernatur nul', 'Voluptatem Deserunt', 'Dolorem aut ea labor', 'Quis nihil consequat', 'Iste et in quos ea', 'Qui quo recusandae', 'Ea officia in dolore', 'Libero eu laborum V', 'Doloremque doloribus', 'Amet tempor lorem l', 'Qui ratione velit ve', 'Similique exercitati', 'Culpa iure quam ut e', 'Quia pariatur Nisi', 'Voluptates consectet', 'Qui suscipit et rem', 'Exercitationem natus', 'Voluptate aliquip et', 'Elit eum quia digni', 'Illum ut doloremque', 'Occaecat ut minima s', 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2021-02-02 16:43:56', '2021-02-02 16:43:56', NULL);

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
(3, '2016_02_04_041533_create_records_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token_no` bigint(255) DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_date` date NOT NULL,
  `examination_date` date NOT NULL,
  `informant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_with_patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_from` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inhabitant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_illness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siblings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consanguinity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_pos_family` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_history_mental` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_tree` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnancy_and_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `early_developmental_milestones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childhood` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_sex_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_relationship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_circumstances` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `substance_use` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forensic_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `past_psychiatry_history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `past_medical_illness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comorbid_illness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `character` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predominant_mood` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attitude_and_standards` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ultimate_concern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_build` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nutritional_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bowel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bladder` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anaemia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaundice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oedema` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `higher_psychic_function` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor_function` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cranial_nerves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sensory` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endocrine_system` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `musculoskeletal_system` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_others` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_appearance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facial_appearance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rapport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posture_movement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_behaviour` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor_behaviour` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oddity_behaviour` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_tone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flow_rhythm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oddity_speech` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hallucination` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illusion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consciousness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attention_concentration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `immediate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intelligence` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judgement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statement_problem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `differential_diagnosis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predisposing_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precipitating_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepetuating_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psychological_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laboratory_test` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_changes` tinyint(1) DEFAULT NULL,
  `appetite` tinyint(1) NOT NULL,
  `fever` tinyint(1) NOT NULL,
  `chestpain` tinyint(1) NOT NULL,
  `palpitation` tinyint(1) NOT NULL,
  `sob` tinyint(1) NOT NULL,
  `pnd` tinyint(1) NOT NULL,
  `ankle_swelling` tinyint(1) NOT NULL,
  `nausea_vomiting` tinyint(1) NOT NULL,
  `abdominal_swelling` tinyint(1) NOT NULL,
  `excessive_salivation` tinyint(1) NOT NULL,
  `constipation` tinyint(1) NOT NULL,
  `dysuria` tinyint(1) NOT NULL,
  `haematuria` tinyint(1) NOT NULL,
  `frequency` tinyint(1) NOT NULL,
  `vaginal_disease` tinyint(1) NOT NULL,
  `fits` tinyint(1) NOT NULL,
  `numbness` tinyint(1) NOT NULL,
  `blurring_vision` tinyint(1) NOT NULL,
  `tremors` tinyint(1) NOT NULL,
  `slurred_speech` tinyint(1) NOT NULL,
  `tingling` tinyint(1) NOT NULL,
  `headache` tinyint(1) NOT NULL,
  `gait_disturbance` tinyint(1) NOT NULL,
  `paraesthesia` tinyint(1) NOT NULL,
  `poor_balance` tinyint(1) NOT NULL,
  `painful_joint` tinyint(1) NOT NULL,
  `joint_sweling` tinyint(1) NOT NULL,
  `morning_stiffness` tinyint(1) NOT NULL,
  `heatcold_intolerance` tinyint(1) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `polyuria` tinyint(1) NOT NULL,
  `excessivethirst_hunger` tinyint(1) NOT NULL,
  `depressed` tinyint(1) NOT NULL,
  `anxious` tinyint(1) NOT NULL,
  `euthymic` tinyint(1) NOT NULL,
  `blunt` tinyint(1) NOT NULL,
  `apathy` tinyint(1) NOT NULL,
  `elated` tinyint(1) NOT NULL,
  `congruent` tinyint(1) NOT NULL,
  `incongrument` tinyint(1) NOT NULL,
  `lability` tinyint(1) NOT NULL,
  `depersonalization` tinyint(1) NOT NULL,
  `derealization` tinyint(1) NOT NULL,
  `m_others` tinyint(1) NOT NULL,
  `poverty` tinyint(1) NOT NULL,
  `pressure` tinyint(1) NOT NULL,
  `insertion` tinyint(1) NOT NULL,
  `withdrawl` tinyint(1) NOT NULL,
  `broadcasting` tinyint(1) NOT NULL,
  `flight_ideas` tinyint(1) NOT NULL,
  `perseveration` tinyint(1) NOT NULL,
  `loosening` tinyint(1) NOT NULL,
  `obsession` tinyint(1) NOT NULL,
  `delusion` tinyint(1) NOT NULL,
  `suicidal_thought` tinyint(1) NOT NULL,
  `homicidal_thought` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `drugs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `user_id`, `token_no`, `unit`, `ward`, `bed`, `admission_date`, `examination_date`, `informant_name`, `relation_with_patient`, `referred_from`, `referred_reason`, `patient_name`, `age`, `sex`, `religion`, `inhabitant`, `marital_status`, `occupation`, `education`, `complain`, `present_illness`, `father`, `mother`, `siblings`, `consanguinity`, `social_pos_family`, `family_history_mental`, `family_tree`, `pregnancy_and_birth`, `early_developmental_milestones`, `childhood`, `education_history`, `occupation_history`, `marriage_sex_history`, `current_relationship`, `social_circumstances`, `substance_use`, `forensic_history`, `past_psychiatry_history`, `past_medical_illness`, `comorbid_illness`, `relationship`, `character`, `hobbies`, `predominant_mood`, `attitude_and_standards`, `ultimate_concern`, `body_build`, `nutritional_status`, `pulse`, `bp`, `temp`, `res_rate`, `height`, `weight`, `bmi`, `bowel`, `bladder`, `anaemia`, `jaundice`, `oedema`, `higher_psychic_function`, `motor_function`, `cranial_nerves`, `sensory`, `endocrine_system`, `musculoskeletal_system`, `d_others`, `general_appearance`, `facial_appearance`, `rapport`, `posture_movement`, `social_behaviour`, `motor_behaviour`, `oddity_behaviour`, `rate_quantity`, `volume_tone`, `flow_rhythm`, `oddity_speech`, `hallucination`, `illusion`, `consciousness`, `orientation`, `attention_concentration`, `immediate`, `recent`, `remote`, `intelligence`, `judgement`, `insight`, `statement_problem`, `differential_diagnosis`, `diagnosis`, `predisposing_factor`, `precipitating_factor`, `prepetuating_factor`, `psychological_test`, `laboratory_test`, `weight_changes`, `appetite`, `fever`, `chestpain`, `palpitation`, `sob`, `pnd`, `ankle_swelling`, `nausea_vomiting`, `abdominal_swelling`, `excessive_salivation`, `constipation`, `dysuria`, `haematuria`, `frequency`, `vaginal_disease`, `fits`, `numbness`, `blurring_vision`, `tremors`, `slurred_speech`, `tingling`, `headache`, `gait_disturbance`, `paraesthesia`, `poor_balance`, `painful_joint`, `joint_sweling`, `morning_stiffness`, `heatcold_intolerance`, `diabetes`, `polyuria`, `excessivethirst_hunger`, `depressed`, `anxious`, `euthymic`, `blunt`, `apathy`, `elated`, `congruent`, `incongrument`, `lability`, `depersonalization`, `derealization`, `m_others`, `poverty`, `pressure`, `insertion`, `withdrawl`, `broadcasting`, `flight_ideas`, `perseveration`, `loosening`, `obsession`, `delusion`, `suicidal_thought`, `homicidal_thought`, `created_at`, `updated_at`, `drugs`) VALUES
(3, 1, NULL, 'ejaz gazi', 'Natus est sit exerc', 'In dolorem proident', '2008-07-24', '2019-10-31', 'Est fugit architec', 'Fuga Vel voluptatib', 'Beatae culpa non od', 'Magni ut quam eum fa', 'Barbara Walker', '56', 'Other', 'Aperiam harum dolor', 'Urban', 'Unmarried', 'Ut hic perspiciatis', 'Ut modi voluptas iru', 'Quidem temporibus ob', 'Aut rem quasi do qui', 'Sunt aute molestiae', 'Quisquam do nostrum', 'Tenetur aut maxime f', 'Nostrum enim sapient', 'Ut anim voluptate do', 'Ut soluta quia obcae', 'Earum est irure haru', 'Quo quis culpa et a', 'Sit velit est face', 'Magnam duis pariatur', 'Nulla reprehenderit', 'Aut minim reiciendis', 'Maxime ab ullam ab e', 'Optio at dolore et', 'Sit fugiat eiusmod', 'Cillum laboris sint', 'Velit facilis ullamc', 'Officia velit accusa', 'Earum est labore te', 'Fugiat ut soluta min', 'In voluptatibus cum', 'Deleniti cumque ut q', 'Temporibus non sint', 'Nobis molestiae quam', 'Voluptatem necessit', 'Voluptas assumenda q', 'Sint ex culpa aspe', 'Enim fugiat ex et cu', 'Mollit deleniti labo', 'Animi tenetur nulla', 'Consequatur et non e', 'Ipsum ut sint et c', 'Veniam dicta ut fac', 'Sit non mollit recus', 'In vero tenetur cons', 'Voluptas eum ut nisi', 'Voluptas eum ut nisi', 'Culpa nostrum non a', 'Nam vitae qui quo de', 'Accusantium molestia', 'Quo eligendi consect', 'Est nobis magnam mag', 'Sed recusandae Quib', 'Perspiciatis eu mol', 'Aliquid officia mini', 'Vel dolore expedita', 'Atque eius consequat', 'Voluptatem sint iust', 'Nesciunt voluptates', 'Quod in consequatur', 'Quia eaque dolorum m', 'Obcaecati sequi quas', 'Beatae reprehenderit', 'Quia unde mollit at', 'Expedita exercitatio', 'Eligendi quia conseq', 'Natus aspernatur nul', 'Voluptatem Deserunt', 'Dolorem aut ea labor', 'Quis nihil consequat', 'Iste et in quos ea', 'Qui quo recusandae', 'Ea officia in dolore', 'Libero eu laborum V', 'Doloremque doloribus', 'Amet tempor lorem l', 'Qui ratione velit ve', 'Similique exercitati', 'Culpa iure quam ut e', 'Quia pariatur Nisi', 'Voluptates consectet', 'Qui suscipit et rem', 'Exercitationem natus', 'Voluptate aliquip et', 'Elit eum quia digni', 'Illum ut doloremque', 'Occaecat ut minima s', 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2021-02-02 22:43:56', '2021-02-02 16:43:56', NULL),
(4, 1, NULL, 'rimon', 'Magni neque in maxim', 'Et veniam consectet', '2017-11-30', '2001-08-28', 'George Goff', 'Nulla tempora nostru', 'Est possimus nulla', 'Aperiam ipsam id in', 'Xyla Lester', 'Velit velit dolore', 'Female', 'Autem ipsum ut conse', 'Rural', 'Married', 'Minima architecto ob', 'Mollit consequatur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 05:52:17', '2020-11-08 08:33:55', NULL),
(5, 1, NULL, 'Iusto occaecat ad ci', 'Natus aut sed ea Nam', 'okay', '1981-04-12', '2010-07-31', 'Cameran Gutierrez', 'Qui dolor doloremque', 'Minima saepe reprehe', 'Modi illum aliquid', 'Virginia Reilly', 'Illum ratione totam', 'Other', 'Dolorem natus labore', 'Rural', 'Married', 'In iure non autem et', 'Eiusmod laborum quid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 06:50:10', '2020-11-08 06:51:15', NULL),
(7, 1, NULL, 'Neque sint corporis', 'Dolor id qui conseq', 'Minim ipsum deserunt', '1977-03-10', '1992-02-28', 'gsdfgsfgs', 'Atque nemo ut dolor', 'In eos eius mollit', 'Earum enim voluptate', 'Stephanie Shannon', 'Quia vel expedita en', 'Male', 'Quisquam minus natus', 'Semi-urban', 'Married', 'Perferendis unde sed', 'Rerum exercitationem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 09:27:43', '2020-11-08 09:27:43', NULL),
(8, 1, NULL, 'Sed maxime qui numqu', 'Facilis consequuntur', 'At odit voluptatibus', '1983-09-11', '1990-01-11', 'Ipsum est ab perfere', 'Facilis esse et ame', 'Debitis explicabo N', 'Illo dolore non corr', 'Kasper Espinoza', 'Ullamco repudiandae', 'Male', 'Velit quos repellend', 'Rural', 'Married', 'Ullam sint id et vol', 'Quidem qui eligendi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 09:50:24', '2020-11-08 09:50:24', NULL),
(9, 1, NULL, 'Inventore culpa opt', 'Eum voluptatem sit', 'Ea quae veniam numq', '2008-01-17', '1981-02-20', 'Eius sunt magni elit', 'Exercitationem qui t', 'Expedita facere ut q', 'Qui sed harum quas m', 'Rana Mcdaniel', 'Doloribus ad volupta', 'Male', 'Ea dolor ullam aliqu', 'Rural', 'Unmarried', 'Provident doloribus', 'At in autem autem qu', 'Qui ut ipsum mollit', 'Dolore dolores labor', 'Animi aliquam volup', 'Aut cum dolores in i', 'Dolorem vero et sit', 'Cupiditate quia labo', 'Odio pariatur Quia', 'Itaque qui omnis aut', 'Eos sunt ut dolori', 'Non optio voluptas', 'Pariatur Quam conse', 'Minima excepteur lab', 'Libero iure sed non', 'Perferendis dolore e', 'Est tempore fuga O', 'Tempore odio deseru', 'Veniam nemo exercit', 'Quaerat architecto N', 'Qui laudantium labo', 'Dicta cupidatat cons', 'Mollitia molestiae t', 'Amet dolorem sit eo', 'Eos placeat sed sin', 'Placeat porro quas', 'Libero voluptatibus', 'Animi quae aut qui', 'Commodo beatae dolor', 'Cum numquam dolore d', 'Quo ipsum eum iusto', 'Vero possimus quisq', '0', '0', '0', '0', '0', '0', '0', 'Eiusmod laudantium', 'Rem deserunt volupta', 'Nostrum expedita nes', 'Itaque explicabo Cu', 'Ut nihil rem ad est', 'Sed quia sed aliquam', 'Alias in neque Nam a', 'Sit velit tenetur q', 'Voluptas asperiores', 'Voluptatem fuga Au', 'Enim ratione do eos', 'Tenetur vitae irure', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 15:05:25', '2020-11-08 15:05:25', NULL),
(10, 1, NULL, 'Qui adipisicing non', 'Numquam tenetur atqu', 'Blanditiis omnis ali', '2013-10-03', '2019-08-22', 'Qui aliquip harum vo', 'Voluptatem incididun', 'Dolor id eveniet qu', 'Irure sit excepturi', 'Sheila Cooke', 'Ut itaque quis aliqu', 'Female', 'Doloribus rerum dolo', 'Urban', 'Unmarried', 'Laboris eos dolorib', 'Et cupiditate aliqua', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 15:05:34', '2020-11-08 15:05:34', NULL),
(13, 1, NULL, 'Est aliqua Cupidat', 'Id vero accusamus v', 'Non qui nihil archit', '2003-08-05', '1998-01-26', 'Et nesciunt invento', 'Non labore laborum', 'Dolores impedit ut', 'Itaque et tempore p', 'Dillon Vang', 'Aliquip aspernatur e', 'Male', 'Et sed in dolorem et', 'Urban', 'Unmarried', 'Iste vel culpa aut i', 'Mollitia dicta minim', 'Lorem\r\nLorem\r\nLorem\r\nLorem\r\nLorem\r\nLorem\r\nLorem\r\nLorem\r\nLorem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 09:18:10', '2020-11-08 09:56:45', NULL),
(14, 1, NULL, 'Dolore rerum dolore', 'Eiusmod quia dicta i', 'Expedita accusantium', '2000-10-06', '1985-04-23', 'Quia in elit laboru', 'Numquam sapiente rer', 'Quia at lorem rerum', 'Ipsum magnam illo p', 'Palmer Yang', 'Ex sit similique off', 'Other', 'Quae dolor consectet', 'Rural', 'Unmarried', 'Do ea accusamus cons', 'Quis officia est at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 10:35:08', '2020-11-08 10:35:08', NULL),
(15, 1, NULL, 'Sequi quidem facere', 'Veniam officia maxi', 'Aliquip voluptate fu', '2007-12-15', '2010-12-25', 'At nesciunt aute ex', 'Illo magni aut magni', 'Et ad fugit qui lab', 'Nisi consequatur do', 'Kim Rivas', 'Deserunt proident f', 'Female', 'Dolor nulla anim rat', 'Urban', 'Married', 'Qui nisi vel est eli', 'Facere omnis consect', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 10:35:20', '2020-11-08 10:35:20', NULL),
(16, 1, NULL, 'Labore odit ea modi', 'Eos neque est quis', 'Dignissimos sunt ad', '1974-05-26', '1984-12-28', 'Ut ipsum sed excepte', 'Autem dolores quo qu', 'Voluptatum quis ea d', 'Neque a ut tempora u', 'Holly Oneill', 'Blanditiis illum co', 'Female', 'Assumenda sunt sunt', 'Rural', 'Married', 'Ad aliqua Quibusdam', 'Accusamus occaecat m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 10:35:29', '2020-11-08 10:35:29', NULL),
(17, 1, NULL, 'Magna provident omn', 'Maiores adipisci rep', 'Consequatur tempora', '1987-04-07', '2019-05-14', 'Maiores ex minima qu', 'Voluptate saepe hic', 'Omnis sit voluptatum', 'Omnis quasi vel magn', 'Kaitlin Moody', 'Occaecat enim velit', 'Male', 'Iure ex vero ullam v', 'Urban', 'Unmarried', 'At ex necessitatibus', 'Sint omnis laudanti', 'Est voluptas quisqua', 'Voluptate qui cumque', 'Mollitia nulla esse', 'Minus sint et tempo', 'Ut laborum Sit sunt', 'Ea incidunt assumen', 'Provident quos sint', 'Tenetur eveniet con', 'Alias libero fugit', 'Blanditiis ducimus', 'Odio tempore impedi', 'Optio autem et volu', 'Quis qui aut dolore', 'In unde amet aliqua', 'Quasi laborum Paria', 'Rerum lorem ratione', 'Occaecat sit corrup', 'Iusto inventore cons', 'Tempora inventore pe', 'Velit asperiores eu', 'Repudiandae magna vo', 'Dicta deserunt porro', 'Dolores aliquip ipsu', 'Irure consectetur co', 'Dolore quos enim rep', 'Nihil nobis beatae q', 'Ea excepteur omnis e', 'Elit est aut esse e', 'Magni et aut cillum', 'Omnis molestiae even', '0', '0', '0', '0', '0', '0', '0', 'Amet id maiores quo', 'Amet id maiores quo', 'Eveniet quidem est', 'Debitis in elit a a', 'Necessitatibus totam', 'Velit molestias sequ', 'Corporis aut hic seq', 'Ut nulla labore labo', 'Qui qui aut tempor N', 'Ab et fuga Ratione', 'Accusantium omnis au', 'Irure aut et laudant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 10:37:03', '2020-11-08 10:52:55', NULL),
(18, 1, NULL, 'In similique accusam', 'Aut accusamus lorem', 'Rerum maiores sed ul', '2013-05-23', '1980-04-22', 'Enim quis eius est i', 'Natus eius dolorum e', 'Velit id duis et re', 'Alias alias dolores', 'Charlotte Perkins', 'Tempora dignissimos', 'Male', 'Et ad enim similique', 'Rural', 'Married', 'Qui quia eos officia', 'Sint odio non et rep', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 05:34:20', '2020-11-08 05:34:20', NULL),
(19, 1, NULL, 'Doloribus esse fugia', 'Consequatur molestia', 'Fugit vitae dolor a', '2005-02-28', '1986-12-05', 'Reprehenderit exped', 'Nihil consequat Ea', 'Velit elit aliquam', 'Officiis exercitatio', 'Vivian Hodge', 'In consectetur culpa', 'Female', 'Dicta ipsum accusant', 'Urban', 'Unmarried', 'Laboriosam non duis', 'Minima quia et expli', 'Explicabo Magni eni', 'Et nesciunt archite', 'Culpa libero natus q', 'Velit in voluptates', 'Ut unde praesentium', 'Nulla consectetur e', 'Delectus ullamco pr', 'Quas sed eum in qui', 'Dolore qui blanditii', 'Sunt blanditiis ea i', 'Repellendus Alias v', 'Ut quo culpa aliqua', 'Enim sed voluptas hi', 'Qui reprehenderit e', 'Consequatur quaerat', 'Minim quas vel eius', 'Totam aperiam deleni', 'Esse cillum eligendi', 'Mollit aliquip persp', 'Quas perspiciatis v', 'Et sunt dolor tempo', 'Nisi incidunt sit', 'Illum voluptas quis', 'Dicta ipsum id volup', 'Dolore enim cumque u', 'In voluptate consequ', 'Reiciendis deleniti', 'Accusamus corrupti', 'Ex dolor ea porro es', 'Aut fugiat nobis it', 'Commodo reiciendis q', 'Aut elit ex saepe f', 'Id est repudiandae i', 'Labore duis quae nih', 'Est harum incididunt', 'Fugiat repellendus', 'Et asperiores magni', 'Anim iure laborum E', 'Eaque rerum nisi et', 'Aut sed ut placeat', 'Sit dolorem magna a', 'Nulla natus voluptas', 'Labore reprehenderit', 'Consequuntur fugiat', 'Laborum Qui quo hic', 'Sint culpa eiusmod', 'Dolores doloremque h', 'Perspiciatis perspi', 'Asperiores eum paria', 'Minus facilis eum al', 'Eum architecto amet', 'Vitae eos qui ut dol', 'Iure sint exercitat', 'Assumenda optio con', 'Maxime perferendis a', 'Veniam ex voluptati', 'Tempora quasi repreh', 'Esse rerum minim do', 'Amet rem laboris fu', 'Architecto quia quas', 'Qui sunt fuga Totam', 'Culpa perspiciatis', 'Ut iste dignissimos', 'Impedit in omnis be', 'Beatae harum quia ma', 'Incididunt eu saepe', 'Rem eos qui adipisci', 'Nisi dolor odio volu', 'Ad aliquam sed ipsam', 'Nam asperiores eiusm', 'Voluptatum tenetur c', 'Eum dolor aliquip ma', 'Facilis et voluptas', 'Ut ut aliquip volupt', 'Sit aliquid ullam s', 'Veniam explicabo Q', 'Id ut hic velit in', 'Voluptatem Culpa qu', 'Molestiae qui corrup', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-08 05:36:47', '2020-11-08 05:36:47', NULL),
(20, 1, NULL, 'A', 'Faver', '119', '2020-08-11', '2020-08-15', 'Dr. Zakir Hossain', 'Brother', 'Square', 'non psycho', 'Md Saiful Islam Rimon', '20', 'Male', 'Islam', 'Urban', 'Unmarried', 'Student', 'Diploma', 'Voluptate ipsum mole', 'Corporis et ullamco', 'Md Tohidul Islam', 'Mrs Rina Begum', '2 brother', 'Dolorem eu dolorem v', 'Fugiat omnis nulla l', 'Commodi rerum sunt', 'Voluptate reprehende', 'Aliqua Nulla et mag', 'Hic laboriosam cons', 'Et elit error quo i', 'Et duis facilis aut', 'Esse commodi odit f', 'Nostrud sed est esse', 'Recusandae Odio exc', 'Quis quaerat illum', 'Alias aut voluptatem', 'Molestiae sed ut sit', 'Laborum dolor sapien', 'Deserunt quo consect', 'Magna sed alias fugi', 'Eu voluptate ea non', 'Odit qui est vero t', 'Repellendus Autem a', 'Officia quia et et c', 'Cumque sed amet adi', 'Magni amet repellenXCVBXVCBXVCBX', 'Eos veritatis digniXCVBB', 'Cumque sed sint quiXVBVBXC', '1/100', '20/100', '130', '3/4/2', '5.53', '55', '108', 'Cupiditate consequunBXCVBXCV', 'Cupiditate consequunBXVCBVXC', 'Nesciunt nulla sedBVCB', 'Fugit repudiandae nBVCBCVB', 'Necessitatibus ad voVCBVCB', 'Qui sed atque ut temXVBV', 'Id expedita culpa uBVCBVC', 'Exercitationem in cuBVCBVC', 'Eiusmod alias sint pVBVXCBXVCBVBBXVCB', 'Voluptatibus nihil VCBXVCBCBBVB', 'Autem id reprehendeXVCBXVCBXCVBXVCBVB', 'Nemo at et qui beataXCVBXCVB', 'Id obcaecati nostrum', 'Ut perferendis offic', 'Sunt a nulla quidem', 'Nisi eiusmod qui qua', 'Odit voluptates aliq', 'Exercitation qui con', 'Molestias dolorem qu', 'Duis quidem impedit', 'Voluptatem ullam qu', 'Voluptatem dolorem a', 'Debitis qui asperior', 'Pariatur Fuga Ut e', 'Eaque doloremque eli', 'Dolores vitae eiusmo', 'Quis cupiditate et v', 'Et sit ex eius susci', 'Beatae deserunt amet', 'Necessitatibus reici', 'Non qui quia ipsum s', 'Tenetur voluptate au', 'Nisi a porro et porr', 'Quis maiores maxime', 'Corporis eius volupt', 'In assumenda fugiat', 'Omnis est aut quasi', 'Minus itaque consect', 'Sequi ipsam et quaer', 'Error aut fuga Poss', 'Ut ad sed voluptates', 'Similique sit est a', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 18:25:03', '2021-01-26 12:25:03', NULL),
(21, 1, NULL, 'Voluptatem laborum', 'Aliquam sed quibusda', 'Non consequatur cill', '1979-05-29', '2019-01-16', 'Sint dolore sapiente', 'Vitae blanditiis eni', 'Sit voluptas incidid', 'Adipisci labore unde', 'Harriet Langley', 'Eveniet saepe conse', 'Male', 'Quis omnis est moles', 'Rural', 'Unmarried', 'Non laborum Amet l', 'In irure consequuntu', 'Rerum est incidunt', 'Ullam necessitatibus', 'Consectetur et aper', 'Nobis impedit aut p', 'Quibusdam quo earum', 'Sed et voluptates ad', 'Ut commodi aut dolor', 'Perspiciatis repreh', 'Et excepturi non in', 'Voluptatum iusto inc', 'Molestiae iure nostr', 'Qui earum iste et ni', 'Atque fugiat deseru', 'Dolore ratione dolor', 'Similique sed except', 'Dolor accusantium na', 'Duis modi ex volupta', 'Explicabo Dolor rat', 'Porro iure deleniti', 'Distinctio In ipsa', 'Dolore sed duis irur', 'Libero reprehenderit', 'Omnis repellendus T', 'Cumque aut quia magn', 'Eum expedita in volu', 'Est sequi velit su', 'Aspernatur labore se', 'Tempor voluptatibus', 'Quaerat illo officia', 'Placeat voluptatem', 'Impedit unde sit qu', 'Sit cumque dignissi', 'Eiusmod quas vitae a', 'Qui qui est providen', 'Ullamco exercitation', 'Qui atque quo non vo', 'Cumque repellendus', 'Tenetur obcaecati iu', 'Omnis iusto labore v', 'Voluptatem magnam a', 'Sed officia nulla qu', 'Praesentium odio qua', 'Perferendis eum fugi', 'Sunt magnam aliquid', 'Nulla culpa elit e', 'Veniam quis ad non', 'Doloribus officia ci', 'Quasi at consequatur', 'Voluptas velit id', 'Est fuga Libero eni', 'Occaecat ut exercita', 'Quo qui est ea reru', 'Optio ut consequatu', 'Consequatur Eum inc', 'Ut minus dolorum vel', 'Proident quia ut di', 'Eos sunt anim ipsum', 'Animi minus dolores', 'Obcaecati quia adipi', 'Quis rerum esse quo', 'Minus in impedit ne', 'Accusantium in minim', 'Velit placeat omnis', 'Eos minim dolores q', 'Earum qui eos aperi', 'Consectetur irure vo', 'Autem inventore repr', 'Ea hic nulla reicien', 'Necessitatibus fuga', 'Dolore officiis arch', 'Dolore eaque sapient', 'Ut pariatur Ea eaqu', 'Voluptatem voluptate', 'Dolores impedit sin', 'Anim exercitationem', 'Quis eaque dolore ve', 'Eaque optio autem n', 'Sint maxime obcaecat', 'Enim cum est et cons', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 12:21:00', '2021-01-26 12:21:00', NULL),
(22, 1, NULL, 'Dignissimos facilis', 'Id dolorum ad eius o', 'Incidunt eligendi l', '2004-07-01', '2004-12-12', 'Veniam sunt aut vel', 'Sed sint natus minu', 'Enim porro soluta si', 'Autem impedit ea er', 'Hillary Sampson', 'Labore sunt minima', 'Other', 'Labore commodi esse', 'Urban', 'Unmarried', 'Enim fugiat optio d', 'Adipisci quia ipsam', 'Sunt officia et labo', 'Unde sint iusto atq', 'Voluptate illum vel', 'Esse in cupiditate', 'Dolore irure volupta', 'Ea rem quae fugiat', 'Nihil omnis eligendi', 'Reprehenderit et vol', 'Dolore animi molest', 'Et excepteur volupta', 'Nostrud asperiores i', 'Illum asperiores re', 'Reprehenderit invent', 'Quam numquam volupta', 'Quidem fugit sed fa', 'Magna provident nos', 'Reprehenderit conseq', 'Qui ducimus quos er', 'Dicta ut reprehender', 'Voluptatem tenetur a', 'Enim officiis non et', 'Exercitationem simil', 'Quia eiusmod omnis t', 'Fugit atque at pari', 'Sunt culpa nesciun', 'Irure voluptas quo e', 'Facilis quis aute du', 'Delectus itaque ali', 'Quis non vel amet d', 'Quis voluptates omni', 'Magna libero iusto v', 'Dicta dolor adipisic', 'Nulla quia recusanda', 'Quas nulla alias qui', 'Fugiat inventore dol', 'Eos dolore id expl', 'Cupiditate nihil vol', 'In qui molestiae des', 'Eiusmod debitis veni', 'Exercitation sed nos', 'Quis ea eos ducimus', 'Aut rerum molestiae', 'Vel dolorum perspici', 'Nostrum non consecte', 'Ut quia est et cum q', 'Blanditiis perferend', 'Ut incidunt ut aspe', 'Voluptatum architect', 'Aliqua Illum ea vo', 'Aliquip cupiditate o', 'Asperiores unde cupi', 'Consequat Quo sed n', 'Commodo dolor non in', 'Labore aut autem et', 'Est ad soluta ipsum', 'Voluptas qui incidun', 'Ipsam amet rerum ex', 'Dolor saepe et sit', 'Mollitia laborum est', 'Ex qui mollit aut cu', 'Commodo corporis ut', 'Quisquam hic veniam', 'Consectetur facilis', 'Officiis iusto susci', 'Ex enim voluptates e', 'Voluptas et quam in', 'Laboris dolores ex t', 'Est eos ut aliquam n', 'Delectus commodo do', 'Omnis nisi reprehend', 'Laboriosam assumend', 'Nulla et itaque veni', 'Omnis cupiditate et', 'Et vel temporibus di', 'Est qui a libero ani', 'Cum velit et eiusmo', 'Minim rerum rerum ni', 'Culpa necessitatibus', 'Dolores tempore del', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 12:26:14', '2021-01-26 12:26:14', NULL),
(23, 1, NULL, 'Velit est maxime mi', 'Tempore cupiditate', 'Amet hic saepe hic', '1994-12-15', '1993-08-10', 'Illum ad saepe temp', 'Nisi labore laborum', 'Optio est esse et', 'Sed ut doloribus exc', 'Olivia Kim', 'Quo fugiat officia q', 'Other', 'Quis veniam et prov', 'Rural', 'Married', 'Quia maiores est ut', 'Mollit sunt et provi', 'Optio placeat aliq', 'Minus quod quas temp', 'Sunt optio a in ap', 'Deserunt non dolorib', 'Explicabo Qui sunt', 'Explicabo Exercitat', 'Veniam enim veniam', 'Cupidatat dolorum te', 'Doloremque inventore', 'Asperiores atque qui', 'Elit sint qui labor', 'Cumque itaque recusa', 'Veniam cumque dolor', 'Pariatur Non at et', 'Consequuntur nulla p', 'Tenetur tempora dolo', 'Blanditiis sunt offi', 'Omnis laboris in aut', 'Qui minus voluptas e', 'Itaque ut nostrud cu', 'Ipsam numquam ipsum', 'Quia velit est molli', 'Anim quam quae dolor', 'Et aut culpa do vol', 'Pariatur Esse temp', 'Ea nostrud quia enim', 'Nisi est ullam quib', 'Explicabo Consequun', 'Velit dolorem nemo', 'Ut magna quo ipsum n', 'Sunt magna duis id e', 'Quia et culpa volup', 'Quia est eos tempor', 'Qui eu quisquam haru', 'Officia sed dignissi', 'Quia ut consequat Q', 'Qui elit qui beatae', 'Ut perspiciatis eos', 'Nihil est facilis qu', 'Quos corrupti dolor', 'Eos in quae sunt a', 'Minim numquam quisqu', 'Deserunt culpa vero', 'Ipsum maiores irure', 'Exercitationem maxim', 'Aut eius libero cumq', 'Dignissimos sed repr', 'Aut quibusdam quia s', 'Quis provident haru', 'Ut dolor dolorum eum', 'Iusto et sunt possim', 'Aut deleniti non fug', 'Sed facere dolorem p', 'Nisi veniam commodo', 'Ut et provident qui', 'Iste labore sed maxi', 'Odit nisi odio nesci', 'Adipisicing magnam t', 'Debitis at fugiat pr', 'Natus animi anim ea', 'Est eiusmod deserunt', 'Velit eius pariatur', 'Dolore dolor incidun', 'Facilis perspiciatis', 'Quis itaque dolorem', 'Quia non odit amet', 'Aut labore ipsum ad', 'Ut officia nostrum a', 'Esse sequi consequat', 'Consectetur illo vit', 'Voluptatem quia dolo', 'Ea rerum nesciunt l', 'Dolor dolorem neque', 'Ea in dolores odit c', 'Est doloribus labor', 'Et consectetur conse', 'Reprehenderit conseq', 'Quidem voluptas quae', 'Et rerum beatae qui', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 23:27:55', '2021-01-26 23:27:55', NULL),
(24, 1, NULL, 'Quia officiis aut Na', 'Aut et consequatur a', 'Nisi minima temporib', '2000-05-09', '1970-01-21', 'Et eligendi dolor ve', 'Consectetur illo ut', 'Quia officia sit ab', 'Minima sit amet deb', 'Angela Ochoa', 'Amet eaque nisi exp', 'Female', 'Excepteur deleniti s', 'Semi-urban', 'Unmarried', 'Minima sequi volupta', 'Fugit in ipsa nost', 'Repellendus Impedit', 'Accusantium elit ne', 'Quia at ipsum volupt', 'Ea a voluptatem Qui', 'Qui ipsum aspernatu', 'Anim voluptatibus se', 'Reprehenderit dolore', 'Architecto maiores q', 'Recusandae Cillum r', 'Rerum ipsam Nam pari', 'Perferendis itaque o', 'Eveniet autem cupid', 'Dignissimos nulla qu', 'Quis nihil nesciunt', 'Impedit Nam minus t', 'A ipsum doloremque c', 'Sunt cumque esse cil', 'Laborum voluptatem i', 'Ea aut et dignissimo', 'Non irure aliquam am', 'Reprehenderit accus', 'Quam culpa mollitia', 'Perferendis accusant', 'Quisquam eos facili', 'Laborum Necessitati', 'Sed dolor sint offic', 'Inventore magna cons', 'Recusandae Consequa', 'Aut nostrud adipisic', 'Sit repudiandae unde', 'Dolor rerum mollitia', 'Minim in est volupta', 'Voluptate ea aut dol', 'Temporibus beatae et', 'Sed quis voluptatem', 'Velit a in maxime si', 'Eum praesentium cons', 'Esse ipsum quae min', 'Velit accusamus ab d', 'Temporibus libero am', 'Sed consequat In pr', 'Reiciendis aperiam e', 'In hic voluptates re', 'Ullamco officia alia', 'Ut enim autem incidi', 'Aperiam quisquam vel', 'Dolores Nam et est', 'Quis quae ut sapient', 'Et et magna lorem il', 'Dignissimos eum mini', 'Iste laborum qui fug', 'Laborum consectetur', 'Doloribus proident', 'Voluptatem inventore', 'Itaque anim fugit i', 'Provident adipisici', 'Pariatur Ea consect', 'Velit rerum consequu', 'Voluptatibus aut rep', 'Voluptatem velit ips', 'In accusamus sunt eo', 'Incidunt ipsam sit', 'Delectus consectetu', 'Libero labore tempor', 'Laboriosam rem aut', 'Dolore minus id volu', 'Dolor ut quia fugiat', 'Est in aut dolor omn', 'Amet reiciendis dig', 'Doloribus officia qu', 'Esse proident moll', 'Iste dignissimos at', 'Laudantium rerum qu', 'Ex nulla dolor omnis', 'Accusamus nihil hic', 'Ipsa maxime rerum n', 'Occaecat eum volupta', 'Voluptatem harum eos', 'Perferendis impedit', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 23:28:47', '2021-01-26 23:28:47', NULL),
(25, 1, NULL, 'Praesentium consecte', 'Ipsum asperiores en', 'Consequat Blanditii', '2002-05-17', '1973-01-11', 'Voluptate eaque expl', 'Vero facilis ad ut p', 'Non provident odio', 'Et sit velit aperiam', 'Cole Bowen', 'Cumque mollitia veli', 'Other', 'Ea optio ut sunt cu', 'Rural', 'Unmarried', 'Asperiores neque pro', 'At fugit mollitia d', 'Et culpa ut volupta', 'Voluptatibus invento', 'Totam molestias qui', 'Libero amet tempore', 'Libero consequatur r', 'Molestiae autem lore', 'Vitae in natus facil', 'Cum est rerum recus', 'Beatae laborum proid', 'Ullam et ut facilis', 'Inventore eius lorem', 'Voluptas quo nobis u', 'Ad aliquid nesciunt', 'Molestias et laborum', 'Aut pariatur Omnis', 'Eum sunt perferendis', 'Animi laborum Vero', 'Laboriosam ut aliqu', 'Dolor porro est dese', 'Cumque iste tempore', 'Omnis aut sunt dolor', 'Magna id ullam qui', 'In tempora ad aliqui', 'Quis nostrud pariatu', 'Eiusmod beatae est q', 'Dolore ea modi aut a', 'Impedit exercitatio', 'Asperiores repudiand', 'Quis ut delectus pe', 'Temporibus unde offi', 'Quia et quae archite', 'Nisi qui est aliquam', 'Aut adipisci volupta', 'Ex dignissimos sequi', 'Voluptatem cumque i', 'Ut rem dolore ea pro', 'Quas asperiores moll', 'Ipsa et ducimus se', 'Sint exercitationem', 'Harum rerum qui duci', 'Magnam nulla atque s', 'Quos iure dolor accu', 'Consequatur molesti', 'Aut ducimus et offi', 'Iusto nihil vel quia', 'Ad anim voluptas con', 'Iste irure doloremqu', 'Officia vero ea odit', 'Iusto est nostrud a', 'Et cupidatat qui rep', 'Debitis quae unde es', 'Et aut totam at cons', 'Ullamco eos quidem e', 'Quis qui possimus a', 'Vel fugiat labore q', 'Tenetur autem cupida', 'Id omnis fugiat eius', 'Omnis ipsa blanditi', 'Minus nostrum dolori', 'Consectetur voluptat', 'Dicta minima occaeca', 'Dolores in aut maior', 'Illum maxime velit', 'Sit debitis eu labo', 'Cupiditate facilis i', 'Saepe temporibus exe', 'Laborum Cumque sint', 'Quidem ut alias aut', 'Veritatis numquam te', 'Mollitia id ad cillu', 'Do ipsum sapiente et', 'Labore debitis venia', 'Ullam nulla sed ut q', 'Sit quos neque nisi', 'Quasi rem non ea min', 'Iusto deleniti deser', 'Quam voluptate vero', 'Quaerat voluptas qui', 'Beatae animi quia v', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 23:30:24', '2021-01-26 23:30:24', NULL),
(26, 1, NULL, 'Laborum Nam sed et a', 'Dolorum alias ut fug', 'Molestiae quibusdam', '2005-12-24', '2004-04-19', 'Quod fugiat non har', 'Reprehenderit aut ne', 'Laudantium in culpa', 'Qui error dicta est', 'Kaseem Trujillo', 'Est ratione excepteu', 'Male', 'Atque lorem asperior', 'Semi-urban', 'Unmarried', 'Officiis quasi paria', 'Irure assumenda volu', 'Quis officia saepe p', 'Sint quibusdam qui', 'Occaecat commodi aut', 'Est perferendis cum', 'Officia ut omnis sit', 'Qui illo sed volupta', 'Commodo odit unde ex', 'Ad mollitia sit opti', 'Dolore est ipsum te', 'Omnis fugiat expedi', 'Et facere minima mai', 'Mollit consectetur', 'Anim perferendis rer', 'Ipsum voluptates inc', 'Dolorem et sunt adip', 'Nostrud deleniti eve', 'Officiis earum omnis', 'Doloribus libero dol', 'Aliquip officiis ex', 'Perferendis sit volu', 'Dolorem enim adipisc', 'Iusto ex quo et nisi', 'In ducimus voluptat', 'At nisi totam tempor', 'Dolorem pariatur No', 'Rerum suscipit adipi', 'Sit corrupti iusto', 'Cupiditate debitis r', 'Sit minim aliquid qu', 'Adipisicing qui quo', 'Placeat culpa culpa', 'Aut architecto duis', 'Ut aperiam corrupti', 'Nulla veniam magnam', 'Doloribus cum recusa', 'Dolor tenetur repreh', 'Recusandae Hic sapi', 'Maiores laudantium', 'Quas numquam quis ut', 'In ipsa asperiores', 'Quo ipsum modi incid', 'Et id officiis veli', 'Quod fugiat occaecat', 'Necessitatibus sint', 'Reprehenderit repreh', 'Dolore quas placeat', 'Omnis aute non exerc', 'Ea quisquam et eos p', 'Consectetur a ad qu', 'Quisquam maiores cum', 'Ea consequatur labor', 'Fugiat ea vel debiti', 'Praesentium quia occ', 'Velit ut quas saepe', 'Nihil molestiae null', 'Laborum Fugiat cor', 'Rerum quaerat illo i', 'Sunt nisi nostrud c', 'Sit animi commodi c', 'Blanditiis voluptati', 'Dolore veniam simil', 'Tenetur necessitatib', 'Fugit mollitia ipsa', 'Ex maiores repellend', 'Dicta in praesentium', 'Magnam occaecat et e', 'Laudantium cupidata', 'Est incidunt repre', 'Fugiat assumenda re', 'Id exercitationem q', 'Sed sit dolor aut co', 'Ullam reprehenderit', 'Sed ex quo et quia o', 'Nostrud dolore nostr', 'Voluptatibus officia', 'Ea do voluptatum qui', 'Nihil reiciendis aut', 'Duis blanditiis aliq', 'Ea magni tempora nat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 23:36:13', '2021-01-26 23:36:13', NULL),
(27, 1, NULL, 'Rerum facere veritat', 'Debitis rerum non si', 'Est non quos nihil n', '2001-12-02', '1976-03-29', 'Explicabo Ea quas n', 'Est ea veniam qui a', 'Libero aperiam nobis', 'Facilis aliqua Fugi', 'Wade Hicks', 'Eveniet at quia dol', 'Female', 'Id quasi ut id nihil', 'Urban', 'Unmarried', 'Ullamco ea officia i', 'Modi modi voluptatem', 'Sint sed doloribus', 'Sit perspiciatis do', 'Inventore quae eos a', 'Voluptas pariatur D', 'Aute id nisi dicta r', 'Anim a earum et laud', 'Rerum nihil fugiat n', 'Vel quas autem amet', 'Eum rerum anim sunt', 'Ut iure eu unde beat', 'Tempora alias omnis', 'Deserunt consectetur', 'Omnis molestias cum', 'Et Nam aut quo dolor', 'Itaque laboriosam s', 'Quidem elit aliquam', 'Et esse amet et of', 'Laudantium sed eos', 'At vel reiciendis co', 'Et sint nihil aliqu', 'Inventore sed cum ar', 'Officia eu laboris d', 'Voluptate minima rat', 'Vel aut et ut deseru', 'Voluptatem lorem oc', 'At proident volupta', 'Harum earum adipisci', 'Ea non dolores ipsa', 'Excepturi est in sed', 'Velit nisi magnam a', 'Laborum provident n', 'Elit et ut veritati', 'Aliquid animi sed s', 'Saepe voluptatem est', 'Cumque quo ullamco q', 'Veritatis repellendu', 'Libero pariatur In', 'Perferendis velit v', 'Et exercitationem re', 'In eos harum dolores', 'Quae eaque voluptate', 'Error consequatur do', 'Sunt irure ad verita', 'Quia quod odit id ut', 'Quae harum ut harum', 'Quis est illum aliq', 'Quo omnis ad laborum', 'Obcaecati et asperna', 'Adipisicing voluptas', 'Sint dolor sunt imp', 'Est dolor nisi veli', 'Sit suscipit at ut o', 'Quo voluptatum amet', 'Asperiores quis iust', 'Maiores deserunt odi', 'Assumenda id non sed', 'Consequatur Adipisc', 'Consequatur molestia', 'Corporis nostrud ull', 'Quae dignissimos eni', 'Quae dolores eu temp', 'Commodi quo facere n', 'Veniam qui hic ut i', 'Sunt occaecat necess', 'Velit pariatur Prov', 'Ab animi et beatae', 'Mollitia provident', 'Qui enim sint ut sed', 'Sint vitae eos dese', 'Delectus temporibus', 'Cupidatat voluptates', 'Ipsum distinctio O', 'Minima id accusanti', 'Laboris sed et aliqu', 'Autem fugiat cumque', 'Ut sint et sint et', 'Nobis non qui laudan', 'Quia rerum dignissim', 'Veniam non eos est', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 23:38:18', '2021-01-26 23:38:18', NULL),
(28, 1, NULL, 'Dolorem deleniti fug', 'Voluptatem laborum m', 'Sit elit eiusmod r', '1980-05-23', '1977-12-15', 'Suscipit iure offici', 'Dolor voluptates eum', 'Quis non culpa moles', 'Nisi voluptate bland', 'Haley Goff', 'Consequatur qui et', 'Female', 'Porro sed totam nost', 'Semi-urban', 'Married', 'Eum impedit laborio', 'Voluptates quis aper', 'Dolore ratione enim', 'Delectus a temporib', 'Enim dolorem eum ver', 'Excepteur sit dolor', 'Aut veniam voluptat', 'Id doloremque ratio', 'Ea at nesciunt non', 'Optio saepe dolores', 'Enim in cupidatat es', 'Aute ea cupidatat vo', 'Maiores ipsam non am', 'Eaque minim nulla au', 'Nihil aut voluptatem', 'Est obcaecati consec', 'Tempora sed eligendi', 'Nisi sed alias lauda', 'Consectetur sed plac', 'Officia aute possimu', 'Voluptatem a eu aspe', 'Sint exercitation fa', 'Vitae ut mollit prov', 'Eiusmod architecto d', 'Quia mollitia eligen', 'Nisi laudantium ull', 'Duis rerum irure at', 'Atque cum qui laboru', 'Laboriosam voluptas', 'Quam labore ut excep', 'Do officiis ut vel b', 'Reiciendis quam quo', 'Illo necessitatibus', 'Hic fugiat duis cum', 'Cumque et autem volu', 'Magna consequuntur m', 'Sit dolorum praesen', 'Perferendis et dolor', 'Voluptates consequat', 'Impedit labore corp', 'Maxime necessitatibu', 'Nostrum eiusmod et q', 'Voluptatem qui ea a', 'Pariatur Possimus', 'Molestias ducimus v', 'Perferendis et tempo', 'Cupidatat minima et', 'Obcaecati ipsum iste', 'Culpa deleniti et f', 'Velit dolor blanditi', 'Tenetur veniam quis', 'Excepteur voluptas e', 'Delectus omnis accu', 'Excepteur rerum mole', 'Qui ut mollitia vel', 'Ut voluptatem Volup', 'Doloribus alias offi', 'Aspernatur minim ame', 'Ut deleniti accusamu', 'Expedita ea molestia', 'Quibusdam aliquid se', 'Animi proident qui', 'Minima nulla in tene', 'Consequatur neque ve', 'Placeat qui vel ips', 'Sint soluta sed nem', 'Voluptates est volup', 'Commodo quas volupta', 'Ullam ratione velit', 'Deserunt impedit se', 'Cillum quam amet so', 'Quos hic assumenda r', 'Aute reiciendis quas', 'Voluptas quod est ob', 'Sunt aut veniam er', 'Vel veniam qui comm', 'Et elit iusto offic', 'Possimus officia an', 'Vitae consectetur lo', 'Officia quis aut sol', 'Eius temporibus quas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-26 23:40:26', '2021-01-26 23:40:26', NULL),
(29, 1, NULL, 'Rerum nisi placeat', 'Non veritatis nulla', 'Itaque sed voluptas', '1991-07-05', '2010-08-03', 'Facere fugiat accusa', 'Et impedit doloremq', 'Itaque expedita alia', 'Soluta libero cumque', 'Quon Cooper', 'Labore modi non sequ', 'Male', 'Tenetur ipsum sed a', 'Rural', 'Unmarried', 'Provident expedita', 'Aliqua Ut ea qui vo', 'Doloremque vel nisi', 'Totam ad debitis lab', 'Qui dolorum in esse', 'Assumenda mollit quo', 'Eaque duis cillum qu', 'Sed sint quisquam a', 'Voluptates voluptate', 'Enim impedit sunt m', 'Ipsam in do in quibu', 'Sunt minim quasi el', 'Eveniet voluptatibu', 'Quo modi aut commodo', 'Reprehenderit dolor', 'Doloribus laborum D', 'Doloremque rem commo', 'Quia nulla dolorem l', 'Iusto omnis hic dict', 'Incididunt facere ul', 'Laboriosam cumque f', 'Officia unde nulla s', 'Consequatur Cupidat', 'Proident dolores co', 'Repellendus Laudant', 'Sit ut dolorem minus', 'Veniam optio qui n', 'Pariatur Voluptatib', 'Ipsa illo quia exer', 'Modi proident delec', 'Ipsa quia voluptate', 'Nihil est aliquam co', 'Exercitation adipisc', 'Ex et qui officiis u', 'Omnis maxime illum', 'Duis in ex illum en', 'Sit provident omni', 'Pariatur At nulla e', 'Qui aspernatur minim', 'Quis qui eiusmod min', 'Quis qui eiusmod min', 'Beatae voluptate pla', 'Quam ut magna tempor', 'Veniam porro accusa', 'Nulla laborum Eum d', 'Facere dolor laudant', 'Tempor esse id adipi', 'Incidunt error mini', 'Magna pariatur Obca', 'Quibusdam sunt et au', 'Accusamus nesciunt', 'Inventore suscipit d', 'Asperiores excepturi', 'Sequi sint corporis', 'Et libero irure mole', 'Officia sed ratione', 'Id veniam ea deleni', 'Aperiam inventore ea', 'Eligendi vel est ali', 'Vero suscipit aut be', 'Exercitation et cupi', 'Aperiam ipsum quas', 'Distinctio Non dolo', 'Nulla consequuntur e', 'Odit exercitation co', 'Quia dolores numquam', 'Velit ut ea ea optio', 'In odit quaerat rati', 'Doloribus provident', 'Quo aut et animi ut', 'Alias omnis velit ex', 'Doloribus fugiat of', 'Minim voluptatem Qu', 'Minima ex sequi cons', 'Excepteur voluptatum', 'In laboris sit perf', 'Porro fugiat aperia', 'Nostrum eos voluptat', 'Culpa nihil veniam', 'Temporibus quae dolo', 'Consequuntur ipsum', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-01-27 05:44:41', '2021-01-26 23:44:41', NULL),
(30, 1, NULL, 'Hic vel nemo dolores', 'Nam sit eius eos ut', 'Eveniet neque nemo', '2019-01-04', '2017-03-20', 'Qui porro at velit r', 'Ipsa molestiae duis', 'Minus dignissimos cu', 'Eos autem suscipit a', 'Tyler Schmidt', 'Et non dolore duis a', 'Female', 'Et sit cupiditate pe', 'Semi-urban', 'Unmarried', 'Necessitatibus optio', 'Non magna quis optio', 'Eligendi ex qui dist', 'Tempora rem temporib', 'Odit officia aliquid', 'Aliquam id veniam q', 'Nihil et suscipit qu', 'Aut corporis vel et', 'Dignissimos proident', 'Voluptas aliquam con', 'Aut asperiores moles', 'Sint asperiores temp', 'Voluptate minima mol', 'Nesciunt unde ut cu', 'Beatae magni ut qui', 'Nisi est neque qui f', 'Id fugit ut vitae', 'Est et quidem labor', 'Ut expedita qui ab d', 'Accusantium sed haru', 'Eu inventore velit d', 'Cupidatat magnam quo', 'Vero voluptas except', 'Maxime atque quis Na', 'Iure placeat culpa', 'Minim id repellendus', 'Qui qui quo iusto no', 'Quaerat culpa proid', 'Minus sequi molestia', 'Eveniet doloribus v', 'Laboriosam quaerat', 'Sit labore ea aliqu', 'Magnam aliquid corru', 'A consectetur volupt', 'Commodi tenetur quae', 'Voluptate qui laboru', 'Eos sunt eligendi', 'Eum labore mollit of', 'Labore ipsa nihil m', 'Distinctio Impedit', 'Distinctio Impedit', 'Quos adipisicing pos', 'Sit perspiciatis qu', 'Accusamus in incidid', 'Est ea ipsam alias c', 'Voluptatem in iusto', 'Totam soluta quis qu', 'Dolor dolorum volupt', 'Blanditiis occaecat', 'Earum unde velit por', 'rmion', 'Voluptate debitis nu', 'Consequatur eligend', 'Consequatur Molesti', 'Modi ab est culpa', 'Voluptates ullam a d', 'Labore odio a magni', 'Qui eaque voluptas c', 'Quasi quae tenetur e', 'Eaque sint temporibu', 'Et anim eius deserun', 'Sunt ut rerum maior', 'Unde ut sed perferen', 'Sequi ab nulla labor', 'Ea voluptas fugiat', 'Eu provident aliqua', 'Excepturi reprehende', 'Omnis iure eos lauda', 'Suscipit sed sunt do', 'Ullamco maxime verit', 'Totam laborum Proid', 'Eaque quidem dolor o', 'In eum culpa nisi h', 'Voluptate eum corrup', 'Aut aut corrupti qu', 'Harum aperiam amet', 'Enim fugiat molestia', 'Veritatis assumenda', 'Id sequi quidem cill', 'Non facilis eos eum', 'Rmion', 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, '2021-01-30 05:42:09', '2021-01-29 23:42:09', NULL);
INSERT INTO `records` (`id`, `user_id`, `token_no`, `unit`, `ward`, `bed`, `admission_date`, `examination_date`, `informant_name`, `relation_with_patient`, `referred_from`, `referred_reason`, `patient_name`, `age`, `sex`, `religion`, `inhabitant`, `marital_status`, `occupation`, `education`, `complain`, `present_illness`, `father`, `mother`, `siblings`, `consanguinity`, `social_pos_family`, `family_history_mental`, `family_tree`, `pregnancy_and_birth`, `early_developmental_milestones`, `childhood`, `education_history`, `occupation_history`, `marriage_sex_history`, `current_relationship`, `social_circumstances`, `substance_use`, `forensic_history`, `past_psychiatry_history`, `past_medical_illness`, `comorbid_illness`, `relationship`, `character`, `hobbies`, `predominant_mood`, `attitude_and_standards`, `ultimate_concern`, `body_build`, `nutritional_status`, `pulse`, `bp`, `temp`, `res_rate`, `height`, `weight`, `bmi`, `bowel`, `bladder`, `anaemia`, `jaundice`, `oedema`, `higher_psychic_function`, `motor_function`, `cranial_nerves`, `sensory`, `endocrine_system`, `musculoskeletal_system`, `d_others`, `general_appearance`, `facial_appearance`, `rapport`, `posture_movement`, `social_behaviour`, `motor_behaviour`, `oddity_behaviour`, `rate_quantity`, `volume_tone`, `flow_rhythm`, `oddity_speech`, `hallucination`, `illusion`, `consciousness`, `orientation`, `attention_concentration`, `immediate`, `recent`, `remote`, `intelligence`, `judgement`, `insight`, `statement_problem`, `differential_diagnosis`, `diagnosis`, `predisposing_factor`, `precipitating_factor`, `prepetuating_factor`, `psychological_test`, `laboratory_test`, `weight_changes`, `appetite`, `fever`, `chestpain`, `palpitation`, `sob`, `pnd`, `ankle_swelling`, `nausea_vomiting`, `abdominal_swelling`, `excessive_salivation`, `constipation`, `dysuria`, `haematuria`, `frequency`, `vaginal_disease`, `fits`, `numbness`, `blurring_vision`, `tremors`, `slurred_speech`, `tingling`, `headache`, `gait_disturbance`, `paraesthesia`, `poor_balance`, `painful_joint`, `joint_sweling`, `morning_stiffness`, `heatcold_intolerance`, `diabetes`, `polyuria`, `excessivethirst_hunger`, `depressed`, `anxious`, `euthymic`, `blunt`, `apathy`, `elated`, `congruent`, `incongrument`, `lability`, `depersonalization`, `derealization`, `m_others`, `poverty`, `pressure`, `insertion`, `withdrawl`, `broadcasting`, `flight_ideas`, `perseveration`, `loosening`, `obsession`, `delusion`, `suicidal_thought`, `homicidal_thought`, `created_at`, `updated_at`, `drugs`) VALUES
(31, 1, NULL, 'Qui labore ipsum op', 'Fuga Rerum velit d', 'Non nemo elit delen', '1999-02-09', '1994-06-19', 'Non dolores error la', 'Beatae minim culpa i', 'In molestiae in veli', 'Illo consequatur es', 'Oleg Ochoa', 'Amet laboris except', 'Male', 'Placeat molestias u', 'Rural', 'Married', 'Dolor provident fac', 'Saepe eiusmod maiore', 'Aut quia in officia', 'Facilis et molestias', 'Eos eveniet iusto c', 'Qui vitae laudantium', 'Ullamco sunt rem et', 'Itaque doloremque re', 'Ut mollitia quasi fu', 'Quae porro eaque vol', 'Saepe aut nulla corp', 'Vel consequatur est', 'Lorem exercitation u', 'Sunt cum dolor repel', 'Obcaecati repudianda', 'Iusto corporis cumqu', 'Sapiente ullam nihil', 'Sit quae quis praese', 'Quia tempor non temp', 'Do eos non pariatur', 'Non sit duis et sin', 'Incidunt ut corpori', 'Ipsum qui nostrum u', 'Sed velit magnam tem', 'Ut sunt magna exerci', 'Velit ut culpa vel', 'Consequat Nesciunt', 'Consequuntur sint i', 'Velit temporibus ape', 'Sunt quia excepteur', 'Ex reiciendis enim s', 'Reprehenderit rerum', 'Sint voluptatibus al', 'Quis id qui ullam en', 'Cupiditate animi es', 'Et quidem non consec', 'Fuga Culpa commodo', 'Asperiores repudiand', 'Culpa iure adipisici', 'Dolor quaerat autem', 'Consequatur blandit', 'Enim labore facilis', 'Eligendi minim eaque', 'Repellendus Commodo', 'Blanditiis inventore', 'Et labore necessitat', 'Sapiente quia conseq', 'Nostrum dolorum ulla', 'Et delectus deserun', 'Impedit magna et su', 'Omnis nemo dolor qui', 'Ut neque labore obca', 'Autem voluptatem Te', 'Exercitationem moles', 'Voluptatem repellen', 'Ea obcaecati volupta', 'Saepe velit consect', 'Ducimus soluta aut', 'Cillum aut perspicia', 'Ut tempore reiciend', 'Veniam omnis qui do', 'Aut iure velit velit', 'Provident sed irure', 'Facere necessitatibu', 'Quis eos rerum sed', 'Consequatur Est rec', 'Deserunt iusto nulla', 'Culpa aliquam sunt', 'Mollit non est dolor', 'Quis velit eius dolo', 'Quas dicta labore ex', 'Quae voluptas et eni', 'Facilis deserunt rep', 'Possimus mollitia N', 'Quis nisi quos amet', 'Rem dolore pariatur', 'Maiores incididunt e', 'Placeat excepturi q', 'Nulla ad labore volu', 'Non ut sequi exercit', 'Quaerat labore omnis', 0, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 0, 0, 1, '2021-01-29 23:55:53', '2021-01-29 23:55:53', NULL),
(32, 1, NULL, 'Rerum maiores rerum', 'Soluta laudantium m', 'Quae placeat dolore', '1991-06-16', '2017-08-01', 'Incidunt aut nisi d', 'Voluptas aliqua Mod', 'Beatae irure exceptu', 'Labore commodi tenet', 'Fletcher Harvey', 'Quis ad dolorum et v', 'Other', 'Labore laborum labor', 'Rural', 'Married', 'Hic lorem laudantium', 'Fugiat ea et labori', 'Qui sunt ipsum id s', 'Eligendi qui sit ne', 'Cillum et hic volupt', 'Quis ipsa dolor sol', 'Voluptate natus erro', 'Est quod et ab sunt', 'Excepteur totam obca', 'Dolore quo excepturi', 'Omnis tempore susci', 'Do perferendis volup', 'Ipsum cillum in qui', 'Vel ad proident sun', 'Exercitation enim au', 'Ut quo sit tempora', 'Minus aliquid velit', 'Amet aliqua Facili', 'Ea quidem velit quis', 'Voluptatibus rem dol', 'Ut error ut laborios', 'Vel tempor magnam ex', 'Dolorem aliquid repr', 'Sunt ullam qui minus', 'Non eligendi vel vol', 'Voluptate nisi eaque', 'Voluptates aut ullam', 'Dolores eu consequat', 'Distinctio Qui ipsa', 'Adipisicing veniam', 'Voluptatem Est veli', 'Dolore voluptatum nu', 'Veritatis consequatu', 'Fuga Non nostrum ma', 'Vel occaecat volupta', 'Neque hic saepe sunt', 'At nulla id doloribu', 'Animi ea quia enim', 'Nulla repellendus Q', 'Eius ratione quidem', 'Soluta sapiente culp', 'Veritatis ut consequ', 'Laboriosam eligendi', 'Nihil ipsum dolor q', 'Quia qui amet sit', 'Ut ea illo pariatur', 'Minim est dolore ma', 'Consequatur molestia', 'Sunt veniam aut eum', 'Nulla aut eius paria', 'Atque est soluta rei', 'Ipsa consectetur ut', 'Voluptate possimus', 'Molestiae iusto poss', 'Duis officiis exerci', 'Rerum in anim labore', 'Obcaecati in qui opt', 'Ipsum impedit labor', 'Voluptate ut officia', 'Ad velit cupidatat p', 'Commodi error ration', 'Hic eos minim magna', 'Asperiores ullamco i', 'In et rerum ut qui s', 'Natus occaecat ut fu', 'Ratione optio autem', 'Non aut irure in con', 'Corrupti sit velit', 'Excepturi necessitat', 'Enim quod nihil dolo', 'Ad excepteur laborum', 'Enim vel est animi', 'In necessitatibus do', 'Quia ut fugit est a', 'Exercitationem deser', 'Ad beatae similique', 'Omnis neque culpa in', 'Et explicabo Et con', 'Voluptate veniam qu', 'Quaerat omnis aut es', 'Consequatur debitis', 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, '2021-01-29 23:56:59', '2021-01-29 23:56:59', NULL),
(33, 1, NULL, 'Et quos est enim et', 'Aliquam earum verita', 'Porro quis consequat', '1979-12-08', '1996-12-17', 'Esse sunt soluta arc', 'Ratione quaerat mole', 'Sit velit consequatu', 'Vitae duis aliquam c', 'Macon Burnett', 'Sequi quia accusamus', 'Female', 'Autem nulla necessit', 'Semi-urban', 'Unmarried', 'Excepteur rem omnis', 'Sed nemo assumenda e', 'Nostrum fugiat dele', 'Porro laborum Irure', 'Id in sequi nisi nu', 'Ut odio vitae nihil', 'Eos cupiditate unde', 'Aut hic ullam dolori', 'Placeat voluptas el', 'Quibusdam aperiam el', 'Ipsam eum proident', 'Velit cupidatat Nam', 'Ut reprehenderit non', 'Officia recusandae', 'Culpa veniam rem pr', 'Duis magni optio ve', 'Quia ducimus repell', 'Vel enim ut itaque e', 'Dolores quia molesti', 'Sit atque ut dolor m', 'Similique saepe libe', 'Nihil quasi voluptat', 'Est officiis aut ut', 'Et ipsum dolorum vel', 'Aliquip et quasi lab', 'Illo possimus qui e', 'Excepturi velit labo', 'Maxime adipisicing q', 'Eos laboris voluptat', 'Cupiditate ex corrup', 'Nesciunt animi vol', 'Aut delectus cumque', 'Assumenda omnis comm', 'Molestiae dicta inci', 'Quia est atque minim', 'Debitis rerum nulla', 'Minim magnam est qui', 'Irure numquam corrup', 'Commodi obcaecati ex', 'Vero ex non sit dic', 'Sit enim delectus a', 'Ut excepteur sunt ad', 'Dolore architecto in', 'Nulla maiores quas q', 'Beatae ipsum qui ea', 'Qui non pariatur Ea', 'Voluptate asperiores', 'Nostrud veritatis di', 'Id et et nihil volup', 'Inventore culpa prov', 'Sit lorem in cillum', 'Esse sunt perspicia', 'Nihil veniam quisqu', 'Maxime dolorem error', 'Rerum assumenda ea c', 'Occaecat omnis moles', 'Perferendis consequu', 'Adipisci ut qui magn', 'Distinctio Fugiat', 'In vel illum laboru', 'Hic in et sit ration', 'Provident amet sit', 'Autem qui molestiae', 'Cillum deserunt enim', 'In voluptate modi ma', 'Consequuntur consect', 'Omnis voluptates cul', 'Nam et praesentium e', 'Dolorem sit officia', 'Ipsa odit omnis nih', 'Rerum excepturi aspe', 'Reprehenderit ipsum', 'Officia magnam offic', 'Minima voluptatem au', 'Autem ipsam sed repr', 'Quo deserunt esse te', 'Similique quaerat de', 'Atque et dolor corpo', 'Sapiente Nam sit eo', 'Qui perspiciatis co', 'Aliquid aut anim lau', 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, '2021-01-30 00:00:03', '2021-01-30 00:00:03', NULL),
(34, 1, NULL, 'Eos pariatur Qui r', 'Dolore quod mollitia', 'Culpa quis facilis t', '1998-09-26', '1990-11-23', 'Porro provident eni', 'In tempora laboriosa', 'Dicta animi recusan', 'Adipisci accusamus e', 'Raymond Pruitt', 'Sed voluptates qui e', 'Male', 'Facilis corrupti ad', 'Rural', 'Unmarried', 'Sint a quia placeat', 'Dolor aut adipisci a', 'Aut dignissimos adip', 'Repudiandae est expe', 'Quam incididunt et c', 'Ut officia aut delen', 'Labore velit sapient', 'Qui voluptas et illu', 'Et error Nam blandit', 'Amet debitis tempor', 'Nihil ea id et maior', 'Illum quibusdam aut', 'Aperiam tempora blan', 'Quis eius consequatu', 'Id eum et tempore v', 'Eos magni et reicien', 'Voluptas omnis et un', 'Tempora anim error q', 'Irure nostrud vitae', 'Quo ut voluptatibus', 'Ullam omnis voluptat', 'Aliqua Amet odio n', 'Dolores veniam unde', 'Pariatur Qui non nu', 'Repudiandae eius ver', 'Tempora hic incidunt', 'Odit quia ipsam est', 'Recusandae Possimus', 'Accusamus esse opti', 'Itaque accusantium d', 'Doloremque cumque au', 'Reiciendis aspernatu', 'Accusantium ut repud', 'Aute velit incididun', 'Qui amet eius dolor', 'Ea hic sequi corrupt', 'Tempor amet hic ill', 'Et architecto velit', 'Maxime quasi consect', 'Ad incididunt id con', 'Repudiandae esse sol', 'Cum dolorum nobis ve', 'Voluptas incididunt', 'Accusamus expedita e', 'Id a nisi harum volu', 'Sed perferendis dolo', 'Deserunt quia sunt', 'Aliqua Architecto l', 'Aut porro optio id', 'Hic occaecat eligend', 'Nulla amet reprehen', 'Quam pariatur Itaqu', 'Aliqua Officiis vel', 'Qui excepturi anim a', 'Totam nobis accusamu', 'Qui consequat Quis', 'Est assumenda eos id', 'Cillum corrupti ad', 'Quasi esse rerum acc', 'Molestias Nam ut sun', 'Ducimus dolor porro', 'Repudiandae pariatur', 'Tempora est asperior', 'Dicta suscipit non t', 'Voluptate minim ulla', 'Et qui aut tempora e', 'Id sunt aliqua Enim', 'Eum ut ad a culpa de', 'Voluptatem nulla omn', 'Cum voluptatem error', 'Doloribus veniam od', 'Illum et libero ad', 'Anim eligendi in qui', 'Maxime est aute cum', 'Eiusmod do ad rerum', 'Ratione aut non arch', 'Minim soluta sit su', 'Laborum Quae rerum', 'Alias laboriosam mi', 'Maiores ea labore ei', 'Tempora qui autem ea', 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2021-01-30 00:02:38', '2021-01-30 00:02:38', NULL),
(35, 1, NULL, 'Nostrud dolorum non', 'Cum laborum quia ips', 'Quam laboris a recus', '2001-04-15', '1992-02-28', 'Laborum Veniam et', 'Architecto in ut des', 'Velit irure amet ut', 'Pariatur Quam qui h', 'Michael Sullivan', 'Soluta vel facere de', 'Female', 'Deleniti ut nihil ex', 'Rural', 'Unmarried', 'Debitis aut sunt qui', 'Duis tenetur a possi', 'Voluptas exercitatio', 'Molestiae mollit mol', 'Cupiditate enim sit', 'Vero enim a ex exped', 'Ratione laboriosam', 'Quaerat amet dolore', 'Velit sit duis anim', 'Mollitia ut odit exc', 'Illo anim voluptatum', 'Rerum voluptatem com', 'Dolores iste veniam', 'In error sed fugiat', 'Sed nisi laboris acc', 'Doloribus omnis magn', 'Cumque consequatur e', 'Enim cillum reiciend', 'Qui sint molestias e', 'Est ut ullam dolorum', 'Numquam sed consecte', 'Dolor commodi dolor', 'Nisi esse dolor odit', 'Possimus sunt simil', 'Quasi quos ut volupt', 'Suscipit id invento', 'Aliquid in sed verit', 'Debitis ratione aut', 'Molestiae enim ut vo', 'Similique ut exercit', 'Et labore id volupta', 'Quaerat illo quis si', 'Ea beatae excepturi', 'Et dolor alias ratio', 'Omnis sit eligendi', 'Similique laboris el', 'Proident dolor inci', 'Cupiditate expedita', 'Quia facere aliquip', 'Magna ex ducimus es', 'Anim autem non neces', 'Qui sunt ipsam sunt', 'Obcaecati sequi et a', 'Cumque voluptatem si', 'Sed adipisicing rati', 'Dolor mollitia rerum', 'Dolorem neque aliqui', 'Facilis odio do quis', 'Repudiandae aliquip', 'Velit numquam do in', 'Aliquam anim suscipi', 'Deleniti est dolorem', 'Nulla omnis placeat', 'Quidem dolores ex di', 'Voluptatum cupidatat', 'Cum autem velit et', 'Consequat Sequi dol', 'Ad voluptas est temp', 'Nesciunt eos sed si', 'In suscipit accusant', 'Et obcaecati iusto p', 'Delectus asperiores', 'Autem vero molestias', 'Ad et aut expedita m', 'Doloremque voluptate', 'Voluptatem totam aut', 'Similique optio nem', 'Cupidatat nulla sed', 'Est ut repellendus', 'Magna deserunt place', 'Hic earum ut nostrum', 'Et quidem facere rec', 'Numquam velit reicie', 'Proident iste volup', 'Quia minus ipsum at', 'Saepe quo id sed qui', 'Enim temporibus mole', 'Est nesciunt dolor', 'Saepe similique sed', 'Dignissimos eligendi', 'Ullamco qui nobis pr', 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, '2021-01-30 00:06:36', '2021-01-30 00:06:36', NULL),
(36, 1, NULL, 'Laboriosam exercita', 'Eiusmod eos qui fugi', 'Est dolorem earum an', '1981-08-09', '1982-01-21', 'Adipisicing ipsa re', 'Ut obcaecati non sit', 'Quidem est sunt ex', 'Laborum ea dolore re', 'Fleur Padilla', 'Magna et veniam in', 'Other', 'Quis cupiditate modi', 'Rural', 'Unmarried', 'Nostrum omnis fuga', 'Quis harum nobis ex', 'Nesciunt rem in sus', 'Incididunt consequun', 'Ad quo esse neque d', 'Ut qui nobis laborum', 'Sint quisquam omnis', 'Sed nostrud cupidata', 'Sunt Nam facilis bla', 'Porro cupiditate cor', 'Veniam natus eos re', 'Autem voluptatem ut', 'Cupiditate aut conse', 'Nostrum accusamus do', 'Adipisci qui tempora', 'Eveniet necessitati', 'Inventore accusantiu', 'Dolorem blanditiis c', 'Voluptas adipisci of', 'Ratione velit maiore', 'Sed adipisci sed et', 'Facere sint Nam cum', 'Aliquip culpa accusa', 'Minima laboris illum', 'Voluptatum dolor ten', 'Consequatur est lab', 'Nulla cumque volupta', 'Qui veniam repellen', 'Exercitationem iusto', 'Sint ex quo mollit', 'Modi odio ut tempori', 'Illum tempor iusto', 'Sit ad totam quos no', 'Fugit excepturi dic', 'Magnam vitae distinc', 'Optio et quis magna', 'Commodo illum lorem', 'Ut in quaerat sint', 'Qui illum fugit mi', 'Quisquam tenetur nos', 'Qui impedit dolorib', 'Dolorem minima lauda', 'Ab est minim ration', 'Officia non cum hic', 'Exercitation excepte', 'Ut adipisci odit vol', 'Id quis iste id expl', 'Nulla minima quibusd', 'Doloremque est dese', 'Laboris maxime vero', 'Quae ea sit sit qui', 'Officiis dolorum vel', 'Alias blanditiis et', 'Nam et ad aut anim t', 'Exercitation elit v', 'Sit corrupti sunt', 'Consequatur velit et', 'Sapiente dignissimos', 'Hic eius ea eveniet', 'Ea ut in blanditiis', 'Voluptatem vel elig', 'Architecto aute cons', 'Porro dolorum veniam', 'Quia voluptas repreh', 'Quia amet dolor ab', 'Consequat Ipsum es', 'Laborum Voluptatem', 'Voluptas harum atque', 'Aperiam ea sed dicta', 'Nihil sint vel in ab', 'Laborum labore eiusm', 'Dignissimos voluptat', 'Do ratione repellend', 'Omnis fugiat mollit', 'Accusantium nostrud', 'Ut sit necessitatibu', 'Qui commodo eaque eu', 'Vitae sapiente et ul', 'Qui natus autem non', 'Consectetur et face', 'Consequuntur unde no', 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1, 1, 0, 1, '2021-01-30 00:07:57', '2021-01-30 00:07:57', NULL),
(37, 1, NULL, 'Consequatur temporib', 'Nemo consequatur ni', 'Dolore dolore laboru', '2017-04-24', '2002-07-25', 'Aut occaecat placeat', 'Cum in nobis similiq', 'Ratione est velit q', 'Aut nostrud ipsum v', 'Aiko Greene', 'Est vel voluptatem b', 'Other', 'Doloremque veniam m', 'Urban', 'Married', 'Voluptas perspiciati', 'Impedit id non nec', 'Omnis veritatis temp', 'Eum amet dolor inve', 'Aliquid et non ipsum', 'Exercitation nesciun', 'Quidem voluptate eni', 'Possimus animi mol', 'Ipsum iure reiciendi', 'Eum fugiat totam ra', 'Modi et perferendis', 'Fugiat autem ad inci', 'Corporis voluptas do', 'Voluptatem repellend', 'Quia quisquam laboru', 'Ipsum explicabo Ali', 'Sint eum non corrup', 'Quo omnis ut incidun', 'Placeat provident', 'Pariatur Aperiam qu', 'Quis quis quia omnis', 'Atque dolor sit ali', 'Deleniti impedit fa', 'Corrupti qui provid', 'Dignissimos omnis no', 'Fugit adipisci prae', 'Quasi harum dolor fa', 'Quia commodo volupta', 'In elit rem cum tem', 'In voluptas aut dolo', 'Ducimus deserunt mo', 'Est rerum voluptatem', 'Qui atque distinctio', 'Dolores odio est qua', 'Fugiat commodo et et', 'Vero quia eum accusa', 'Est dolor aliquam m', 'Error excepteur eum', 'Eu possimus sapient', 'Ex eu molestiae recu', 'Autem corporis rem q', 'Et id aute molestias', 'Aut et at cupidatat', 'Sed dolorem deserunt', 'Provident quidem et', 'Ratione est nostrud', 'Id porro nulla dolor', 'Veniam accusamus ra', 'Cupiditate quo ea ex', 'Ad et optio maiores', 'Qui qui quam et exce', 'Dolor cupiditate vol', 'Iusto reiciendis ut', 'Mollit nemo aliquid', 'Minima harum sunt vo', 'Cupidatat cupiditate', 'Doloribus fugiat ips', 'Doloremque laborum', 'Voluptatibus deserun', 'Asperiores ipsum do', 'Cupidatat consequunt', 'Eu laudantium sit', 'Ad libero vel ut rec', 'Optio qui dignissim', 'Harum ullam sit labo', 'Voluptatem voluptate', 'Sunt quo culpa exerc', 'Corporis officiis ab', 'Omnis rerum voluptat', 'Cupidatat labore qua', 'Ut occaecat eius ull', 'Ut mollitia inventor', 'Eu asperiores quasi', 'Excepteur et iure so', 'Inventore eum sit ne', 'Minim fuga Asperior', 'Odit laudantium et', 'Velit nostrum eu la', 'Voluptatum illo ut t', 'Aut sed consequat V', 'Ad dolore ut et vel', 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, '2021-01-30 00:09:58', '2021-01-30 00:09:58', NULL),
(38, 1, NULL, 'Architecto nesciunt', 'Repudiandae ad inven', 'Id laborum Ipsum op', '2006-02-16', '1983-07-14', 'Ea ad quod illum ve', 'Magni qui ducimus o', 'Veniam voluptatem v', 'Sed sit possimus a', 'Aurelia Johns', 'Et consequat Ut nis', 'Other', 'Ex quo velit consequ', 'Semi-urban', 'Married', 'Ipsum delectus obca', 'Autem eum ut quibusd', 'Voluptas consectetur', 'Sunt quis velit lab', 'Est harum corporis', 'Ut magnam dolores ac', 'Consectetur eiusmod', 'Voluptatem numquam', 'Quis qui quia soluta', 'Dignissimos possimus', 'Voluptas qui porro c', 'Duis molestiae deser', 'Temporibus iusto pra', 'Tempora id dolores', 'Inventore velit eius', 'Irure sed quis neces', 'Tempora ad quasi mol', 'Libero magna aliquam', 'Expedita et debitis', 'Eum culpa quo quia', 'Ad est neque labore', 'Esse sed qui eaque', 'Autem dolore nisi al', 'Sit qui culpa eiusm', 'Eum in nesciunt sin', 'Qui esse odit enim', 'Necessitatibus dolor', 'Iure sed neque ut qu', 'Similique quis provi', 'Ea in quas provident', 'Veritatis ullam tene', 'Deserunt vero labore', 'Exercitationem exerc', 'Est quo ut magnam ci', 'Ratione magni ipsum', 'Et alias accusantium', 'Vero do ut commodi a', 'Sequi maxime sit se', 'Error non beatae dol', 'Repellendus Volupta', 'Soluta sit sit ut f', 'Mollit voluptates si', 'Iste aut a quisquam', 'Ut error dolorem neq', 'Voluptatem minus sit', 'Porro reprehenderit', 'Magnam dolorem illo', 'Possimus quam aliqu', 'Qui adipisci laborum', 'Cumque aut incididun', 'Rerum sit labore con', 'Repellendus Omnis s', 'Aliquid non veniam', 'Amet tempor cillum', 'Voluptatem repudiand', 'Ullamco ut eum deser', 'Dicta porro cumque u', 'Deserunt ipsum exce', 'Labore ipsum a incid', 'Quo ut voluptatem B', 'Ut ullam rerum provi', 'Mollit est aliqua', 'Non expedita soluta', 'Qui vel aliqua Et b', 'Aliquid blanditiis a', 'Voluptas exercitatio', 'Voluptatem debitis m', 'Proident hic id dol', 'Nisi deserunt debiti', 'Ad quo dolores ut ni', 'Quia pariatur Sunt', 'Et lorem minim recus', 'Ex et irure atque te', 'Non et consequat Qu', 'Quasi ut reprehender', 'Iste quidem eveniet', 'Omnis cillum distinc', 'Quas in labore velit', 'Ut nihil blanditiis', 'Impedit esse beata', 'Explicabo Odio blan', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 1, 0, 0, 1, 1, 1, '2021-01-30 00:11:45', '2021-01-30 00:11:45', NULL),
(40, 1, NULL, 'Rimon', 'Est aliquam iste des', 'Odit architecto libe', '2015-08-03', '2007-01-13', 'Nesciunt anim imped', 'Recusandae Sit do', 'Ut quo tempor accusa', 'Dolore quia officiis', 'Rimon', '25', 'Female', 'Error adipisci dolor', 'Rural', 'Unmarried', 'Eum explicabo Enim', 'Et ipsum adipisicin', 'Delectus temporibus', 'Atque nesciunt repr', 'Architecto magna tem', 'Et recusandae Saepe', 'Quis voluptatem lore', 'Qui odit et eligendi', 'Porro quibusdam qui', 'Dolore sit ut minim', 'Sunt asperiores iure', 'Rerum quia sunt plac', 'Eum sit distinctio', 'Aut in aute quasi en', 'Nihil debitis asperi', 'Dolore quia sed non', 'Veniam sunt exerci', 'Nam voluptas sunt ve', 'Iusto voluptate sit', 'Ipsa qui laudantium', 'Consequatur Et labo', 'Consequatur dolores', 'Alias minus occaecat', 'Aliquam nihil quidem', 'Inventore optio bla', 'Perferendis voluptas', 'Dolores sit natus e', 'Dolore tenetur ullam', 'Soluta aut quod cons', 'Labore ratione nisi', 'Veniam vitae esse e', 'Eveniet vitae esse', 'Sit eu rerum qui est', 'Voluptatem id nulla', 'Doloremque a sit mi', 'Irure animi elit u', 'Harum pariatur A a', 'Et harum rerum sit l', 'Voluptas natus excep', 'Labore labore tenetu', 'Labore labore tenetu', 'Non cumque eiusmod o', 'Molestiae et in et v', 'Magni quibusdam even', 'Et nostrum nemo cumq', 'Est suscipit hic non', 'Veniam ipsum ut ear', 'Perferendis deserunt', 'Corrupti dolores in', 'Et in ipsam voluptat', 'Ducimus voluptas cu', 'Id illo dolore proid', 'Excepturi numquam ne', 'Vel vero non iusto o', 'Dolor rerum non porr', 'Totam in aut consect', 'Quasi voluptatum dol', 'Dolor et repudiandae', 'Suscipit in commodi', 'Provident harum vol', 'Et similique reprehe', 'Maxime maxime quis i', 'Aut irure quis ab ma', 'Debitis quia quo ull', 'Aliquid iste veniam', 'Voluptatum voluptati', 'Magnam corporis dolo', 'In doloribus adipisi', 'Maiores do anim qui', 'Delectus sunt eum i', 'Dicta amet eum eos', 'Adipisci eu cillum b', 'Delectus laboriosam', 'Consequatur voluptat', 'Quibusdam natus Nam', 'Cupidatat et occaeca', 'Voluptate tenetur ut', 'Non maiores exercita', 'Ut itaque voluptate', 'Nostrum eum facilis', 'Reiciendis ullamco d', 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, '2021-02-01 21:59:29', '2021-02-01 15:59:29', NULL),
(41, 1, NULL, 'Et sit voluptas rep', 'Qui qui explicabo V', 'Sit commodi facilis', '1984-07-15', '2016-04-23', 'Saepe aut nostrud ni', 'Maxime sit suscipit', 'Nisi quia molestiae', 'Porro quo quo sint', 'Raymond Pruitt', '30', 'Male', 'Beatae molestiae sin', 'Semi-urban', 'Unmarried', 'Nulla velit ipsum s', 'Dicta ex delectus c', 'Consequatur distinct', 'Adipisicing officia', 'Quod eu quis error p', 'Neque vero anim cons', 'Dolor nihil adipisci', 'Ratione porro numqua', 'Dolor eius sunt labo', 'Dolorum a dolor aute', 'Deleniti magnam dolo', 'Aliquid quidem labor', 'Consequatur ad lore', 'Aut cupidatat minim', 'In laudantium maior', 'Rerum et nobis earum', 'Sed perspiciatis qu', 'Quia labore libero i', 'Sint itaque sed erro', 'Velit et occaecat na', 'Excepteur aut qui ve', 'Dolore sit non id', 'In amet adipisicing', 'Occaecat natus et du', 'Perspiciatis possim', 'Non voluptas illo ac', 'Exercitationem aliqu', 'Voluptatem itaque es', 'Sit non tenetur et', 'Sequi odit delectus', 'Provident veniam f', 'Sint aut maiores vo', 'Et cillum optio qui', 'Magnam excepteur sap', 'Et qui illum omnis', 'Quis labore dolores', 'Delectus asperiores', 'Sit Nam sit atque p', 'Ea eum ipsum autem m', 'Autem facilis ad duc', 'Autem facilis ad duc', 'Quidem ex error temp', 'Quam nulla nisi labo', 'Dolorem dolores dolo', 'Voluptatum consequat', 'Cillum perferendis r', 'Et aut dolores et id', 'Esse cupidatat dolo', 'Qui obcaecati sed id', 'Cillum doloremque do', 'Enim sed molestiae v', 'Ipsum irure repellen', 'Sed consequatur Ut', 'Deserunt odio volupt', 'Ex debitis dolor aut', 'Dolor numquam proide', 'Rem voluptatibus occ', 'Sit molestiae reicie', 'Labore aute non sit', 'Harum eaque sed impe', 'Dolores illo et est', 'Eaque alias reprehen', 'Quia earum elit exc', 'Incididunt at ullamc', 'Dicta quae quia sit', 'Laborum praesentium', 'Possimus repudianda', 'Quos a pariatur Con', 'Sunt rem ad in ut o', 'Praesentium facilis', 'Asperiores est optio', 'Neque at consequat', 'Fugiat suscipit qui', 'Minima voluptatibus', 'Qui nostrud aliquid', 'Aut iste incidunt q', 'Sed tenetur rem magn', 'Sequi non aspernatur', 'Sit maxime earum ips', 'Incidunt est nobis', 'Corporis voluptas no', 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, '2021-02-02 10:12:41', '2021-02-02 04:12:41', NULL),
(43, 1, 77137921356026, 'Officiis et rerum fa', 'Ullam consectetur a', 'Obcaecati aut est r', '1975-05-08', '1987-12-09', 'Quasi veniam id rer', 'Sint ut adipisci con', 'Neque excepturi volu', 'Minima quas distinct', 'Vanna Harrison', '41', 'Other', 'Repudiandae voluptat', 'Urban', 'Unmarried', 'Nulla quaerat volupt', 'Sunt vel quo eiusmo', 'Nulla veniam ducimu', 'Atque rerum expedita', 'Consequuntur volupta', 'Enim dolores eaque v', 'Voluptas voluptas qu', 'Quo non qui molestia', 'Error pariatur Haru', 'Voluptas quibusdam i', 'Totam optio neque m', 'Necessitatibus anim', 'Beatae labore quaera', 'Aliquam illum velit', 'Voluptates impedit', 'Animi aut in sint n', 'Quod molestias corpo', 'Ut harum ipsa illum', 'Voluptatem eligendi', 'Expedita nobis maior', 'Deserunt dolor molli', 'Anim voluptas sint c', 'Ipsum quia velit cu', 'Porro magna necessit', 'Dolorum ut est omni', 'Qui ab ut architecto', 'Facere voluptatem re', 'Sint id duis nobis', 'Omnis enim molestiae', 'Sint quam ut dolorib', 'Libero iure est Nam', 'Elit non rerum dolo', 'Est deserunt commodi', 'Harum assumenda aut', 'Error natus qui id i', 'Unde lorem non a mag', 'Tempora dolor quis s', 'In error aute qui la', 'Fugiat dolor nulla a', 'Qui eligendi sit eu', 'Voluptate velit lab', 'Dolore consequatur', 'Aute ullamco dolorem', 'Nam qui consectetur', 'Dignissimos ut aperi', 'Corporis non aliquid', 'Dolorem aut tempore', 'Qui dolores non nequ', 'Quis aspernatur cons', 'Quod nobis non elige', 'Qui possimus cumque', 'Numquam est nesciunt', 'Aliquid repellendus', 'Voluptate voluptatum', 'Cumque commodi persp', 'Occaecat consequatur', 'Nulla ipsum ipsam s', 'Nostrud ea sit minim', 'Vel commodo porro re', 'Voluptas molestiae o', 'Cumque sed distincti', 'Magni praesentium om', 'Laboris voluptatem e', 'Dolore iste non exer', 'Qui explicabo Sunt', 'Culpa excepteur sunt', 'Proident fugiat to', 'In quis fuga Sequi', 'Duis et rerum labore', 'Ducimus officiis qu', 'Delectus id possimu', 'Adipisicing error cu', 'Sapiente et in sit', 'Animi ea pariatur', 'Accusamus elit quia', 'Consequuntur deserun', 'Dolore modi sunt mag', 'Voluptas vel molesti', 'Id exercitationem a', 'Accusantium mollit a', 'Necessitatibus ratio', 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, '2021-02-02 14:49:25', '2021-02-02 14:49:25', NULL);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$G71QsnH0u7JR014S0CccfuRjpU38M3acKYnVeU/gFoo7FAjiMdZxW', 'Vx6MvRH56fV0eY6q6zCx6HzEMgbX96t6tKtNmBikmFl8IsD2u0WrCpFEJilq', '2021-02-01 04:53:43', '2021-02-01 04:53:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`primary_key`);

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
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token_no` (`token_no`),
  ADD KEY `records_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `primary_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
