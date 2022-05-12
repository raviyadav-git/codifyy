-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2022 at 09:56 AM
-- Server version: 8.0.23
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerInfo`
--

CREATE TABLE `customerInfo` (
  `patient_id` int NOT NULL,
  `mobile` bigint NOT NULL,
  `customer` text NOT NULL,
  `age` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` enum('Male','Female','Others','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `weight(Birth)` text NOT NULL,
  `height` varchar(20) NOT NULL,
  `headcircum` varchar(255) NOT NULL,
  `admission(date)` date DEFAULT NULL,
  `admission(wt)` varchar(100) NOT NULL,
  `discharge(date)` date NOT NULL,
  `discharge(wt)` varchar(100) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `caseSummary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `treatmentGiven` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customerInfo`
--

INSERT INTO `customerInfo` (`patient_id`, `mobile`, `customer`, `age`, `gender`, `address`, `weight(Birth)`, `height`, `headcircum`, `admission(date)`, `admission(wt)`, `discharge(date)`, `discharge(wt)`, `diagnosis`, `caseSummary`, `treatmentGiven`) VALUES
(1, 7508085389, 'Gurjant Singh', '2 Years and 4 Months', 'Male', '#339 Dashmesh Nagar-A Patiala', '4.5 kg', '2ft 9 inch', '3.3', '2022-04-19', '4.3', '2022-04-19', '12', 'Parenteral Diarrhoea', 'patient came with history loose stool from the last 15days. the child was given parenteral diarrhea and antifungal treatment', 'The Child was given treatment in the form of oxygen/i.e. drip and parental antibiotics, The child is all right now and being discharged in satisfactory condition'),
(2, 8054495588, 'Gurwinder Singh', '2 Years 3 Months', 'Male', 'Demo Street', '5', '1.3 inch', '2.2', '2022-04-20', '3.3', '2022-04-19', '4.4', 'patient has adviced to take rest', 'Patient is Healthy Now', 'Injection'),
(3, 9814646325, 'Dalbir Singh', '2 Years 3 Months', 'Male', 'Mental Hospital', '12', '12', '12', '2022-04-12', '12', '2022-04-12', '12', 'Patient has Diarrhoea', 'Patient is Healthy Now', 'Paracitamol'),
(4, 7689769865, 'Amandeep Singh', '2 Years 3 Months', 'Male', '14-A North Avenue Patiala', '2.3 kg', '2.6\"', '3.3', '2022-04-18', '6.8', '2022-04-19', '6.9', 'Patient has Diarrhoea', 'Patient is Healthy Now', 'Paracitamol injection'),
(5, 9814646663, 'Surjeet Kaur', '2 Years 6 months', 'Female', 'North Avenue Patiala', '2.5 kg', '1 ft 2 inchws', '2.2', '2022-04-01', '2.3', '2022-04-21', '2.5', 'Patient has Loose Motion', 'Patient is healthy now.. and advised to take rest', 'Injection'),
(6, 9814646325, 'Prince', '2', 'Male', 'Chandigarh', '2 kg', '1 ft', '1.3', '2022-04-14', '3.3 kg', '2022-04-23', '4 kg', 'Patient has adviced to take rest for 10 Days', 'Patient is healthy now. ry to avoid plastic bottle nipple for feeding.', 'Injection'),
(7, 9855771949, 'Abhi', '2 Years and 3 Months', 'Female', 'Nabha', '2 kg', '2ft ', '2.2', '2022-04-25', '3.3 kg', '2022-04-26', '4kg', 'fever', 'Patient is healthy now. try to avoid plastic bottle nipple for feeding.', 'Injection'),
(8, 8054495588, 'Gurjeet Singh', '2 Years 6 months', 'Male', 'The Mall Road Patiala', '2.5 kg', '1 ft 2 inches', '2.2', '2022-04-19', '2.3', '2022-04-27', '3.6', 'Fever', 'Patient is healthy now.. and advised to take excecise', 'Injection of Tramadol, Paracetamol tablet');

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

CREATE TABLE `investigation` (
  `patient_id` int NOT NULL,
  `dlc_p` varchar(255) NOT NULL,
  `dlc_l` varchar(255) NOT NULL,
  `dlc_m` varchar(255) NOT NULL,
  `dlc_b` varchar(255) NOT NULL,
  `dlc_e` varchar(255) NOT NULL,
  `tlc` varchar(100) DEFAULT NULL,
  `bp` varchar(100) DEFAULT NULL,
  `hb` varchar(255) NOT NULL,
  `widalTest` varchar(255) NOT NULL,
  `urineReport` varchar(255) NOT NULL,
  `bloodUrea` varchar(255) NOT NULL,
  `serumCreatinine` varchar(255) NOT NULL,
  `lft` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `investigation`
--

INSERT INTO `investigation` (`patient_id`, `dlc_p`, `dlc_l`, `dlc_m`, `dlc_b`, `dlc_e`, `tlc`, `bp`, `hb`, `widalTest`, `urineReport`, `bloodUrea`, `serumCreatinine`, `lft`) VALUES
(1, '3.3', '34', '6.5', '7.7', '2.2', '200', '232', '200', '23', '32', '2.2', '6.6', '11'),
(2, '3.3', '34', '8', '5', '2.2', '34', '343', '43', '4323', '32', '4', '344', '4'),
(3, '12', '12', '12', '12', '12', '299', '424', '12', '12', '12', '12', '12', '12'),
(4, '3.3', '8', '8', '12', '2', '232', '34', '20000', '7', '9', '7.7', '344', '8'),
(5, '4.5', '200', '202', '4.2', '3.3', '2323', '43', '10000', '3.3', '3.3', '4.5', '4.6', '4.5'),
(6, '100', '100', '100', '100', '100', '500', '120', '223', '323', '23', '32', '45', '54'),
(7, '100', '100', '100', '100', '100', '500', '34', '223', '323', '23', '32', '45', '54'),
(8, '300', '150', '200', '200', '150', '1000', '4.3', '1000', '6.4', '3.4', '4.5', '33.5', '32.6');

-- --------------------------------------------------------

--
-- Table structure for table `mothers`
--

CREATE TABLE `mothers` (
  `m_id` int NOT NULL,
  `mobile` bigint NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(10) NOT NULL,
  `weightbp` varchar(100) NOT NULL,
  `wdp` varchar(100) NOT NULL,
  `wgdp` varchar(100) NOT NULL,
  `hypertension` varchar(255) NOT NULL,
  `diabetes` varchar(255) NOT NULL,
  `thyroid` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `admission_dt` date NOT NULL,
  `discharge_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mothers`
--

INSERT INTO `mothers` (`m_id`, `mobile`, `name`, `address`, `age`, `weightbp`, `wdp`, `wgdp`, `hypertension`, `diabetes`, `thyroid`, `bp`, `admission_dt`, `discharge_dt`) VALUES
(1, 7508085389, 'Simran', 'Phase 10 Urban Estate Patiala', '28', '56', '57', '2', '30', '34', '929', '383', '2022-04-13', '2022-04-25'),
(2, 7508085383, 'Priyanka', 'Chandigarh', '28', '56', '58 Kg', '1 Kg', '2342', '34', '23422', '120', '2022-04-25', '2022-04-25'),
(3, 9988979979, 'Diksha Rani', 'Mall Road patiala', '22', '56', '58 kg', '2 Kg', '2342', '4.4', '4.2', '44', '2022-04-23', '2022-04-25'),
(4, 7508085389, 'Satveer kaur', 'Nabha', '26 ', '', '58 kg', '2', '34', '4.4', '34', '34', '2022-04-27', '2022-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int NOT NULL,
  `perm_mod` varchar(5) NOT NULL,
  `perm_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`perm_id`, `perm_mod`, `perm_desc`) VALUES
(1, 'admin', 'Access Patients'),
(2, 'admin', 'Create new Patients'),
(3, 'admin', 'Update patients'),
(4, 'admin', 'Delete Patients');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'reception');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` int NOT NULL,
  `perm_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `perm_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'Gurjant', 'd07aa810539ae54c093a998349dd1539', 1),
(4, 'Gurwinder', 'd07aa810539ae54c093a998349dd1539', 1),
(5, 'Chirag', 'd07aa810539ae54c093a998349dd1539', 1),
(6, 'Dalbir', 'd07aa810539ae54c093a998349dd1539', 1),
(7, 'Satveer', 'd07aa810539ae54c093a998349dd1539', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerInfo`
--
ALTER TABLE `customerInfo`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `investigation`
--
ALTER TABLE `investigation`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `mothers`
--
ALTER TABLE `mothers`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `mobile` (`mobile`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`),
  ADD KEY `perm_mod` (`perm_mod`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerInfo`
--
ALTER TABLE `customerInfo`
  MODIFY `patient_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `investigation`
--
ALTER TABLE `investigation`
  MODIFY `patient_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mothers`
--
ALTER TABLE `mothers`
  MODIFY `m_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
