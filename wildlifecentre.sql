-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 04:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildlifecentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_ratings`
--

CREATE TABLE `age_ratings` (
  `Age_Rating_PK` int(11) NOT NULL,
  `Event_Rating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `age_ratings`
--

INSERT INTO `age_ratings` (`Age_Rating_PK`, `Event_Rating`) VALUES
(1, 'Adults'),
(2, 'Family'),
(3, 'Children');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `Animal_ID_PK` int(10) NOT NULL,
  `Species_ID_FK` int(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `General_Appearance` varchar(200) DEFAULT NULL,
  `Distinctive_Markings` varchar(200) DEFAULT NULL,
  `Date_Of_Admission` date DEFAULT NULL,
  `Location_Found` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`Animal_ID_PK`, `Species_ID_FK`, `Name`, `Sex`, `General_Appearance`, `Distinctive_Markings`, `Date_Of_Admission`, `Location_Found`) VALUES
(1, 1, 'Spike', 'M', 'Prickly fur', 'None', '2022-09-08', 'Forest'),
(2, 2, 'Ruby', 'F', 'Red coat', 'White-tipped tail', '2022-12-31', 'Meadow'),
(3, 3, 'Buddy', 'M', 'Black and white stripes', 'Bushy tail', '2022-08-29', 'Woodland'),
(4, 4, 'Doe', 'F', 'Slim body with white tail', 'None', '2023-01-06', 'Meadow'),
(5, 5, 'Pip', 'M', 'Small and brown', 'Fast flyer', '2022-10-27', 'Cave'),
(6, 6, 'Warty', 'M', 'Bumpy skin', 'Large parotid glands', '2022-10-10', 'Pond'),
(7, 7, 'Soprano', 'F', 'Small and agile', 'Distinctive wing patterns', '2023-02-16', 'Tree'),
(8, 8, 'Hoppy', 'M', 'Smooth skin', 'Long legs', '2023-01-14', 'Marsh'),
(9, 9, 'Rudolph', 'M', 'Large antlers', 'Reddish-brown coat', '2022-07-10', 'Woodland'),
(10, 10, 'Tiny', 'F', 'Tiny and fast', 'Shiny fur', '2023-03-23', 'Garden'),
(11, 11, 'Owliver', 'M', 'Feathery wings', 'Heart-shaped face', '2023-04-07', 'Barn'),
(12, 12, 'Larky', 'F', 'Brown feathers', 'Long beak', '2022-05-20', 'Field'),
(13, 1, 'Quill', 'M', 'Spiky coat', 'Short legs', '2022-10-31', 'Forest'),
(14, 2, 'Rusty', 'M', 'Reddish-brown fur', 'Bushy tail', '2022-09-23', 'Meadow'),
(15, 3, 'Stripe', 'F', 'Black and white stripes', 'Short legs', '2022-11-13', 'Woodland'),
(16, 4, 'Bambi', 'M', 'Slim body with antlers', 'White tail', '2022-11-16', 'Meadow'),
(17, 5, 'Flutter', 'F', 'Small and agile', 'Fast flyer', '2022-07-01', 'Cave'),
(18, 6, 'Wartooth', 'M', 'Bumpy skin', 'Large parotid glands', '2022-08-01', 'Pond'),
(19, 7, 'Harmony', 'F', 'Smooth skin', 'Distinctive wing patterns', '2023-02-21', 'Tree'),
(20, 8, 'Jumpy', 'M', 'Brown fur', 'Long legs', '2022-09-04', 'Marsh'),
(21, 9, 'Eddy', 'M', 'Large antlers', 'Brown fur', '2022-09-05', 'Woodland'),
(22, 10, 'Speedy', 'F', 'Tiny and fast', 'Shiny fur', '2023-01-29', 'Garden'),
(23, 11, 'Melody', 'F', 'Feathery coat', 'Wide wingspan', '2023-01-31', 'Nest'),
(24, 12, 'Skyler', 'M', 'White feathers', 'Heart-shaped face', '2022-11-25', 'Sky'),
(25, 1, 'Needle', 'M', 'Prickly fur', 'None', '2022-12-20', 'Forest'),
(26, 2, 'Scarlet', 'F', 'Red coat', 'White-tipped tail', '2022-11-11', 'Meadow'),
(27, 3, 'Panda', 'M', 'Black and white stripes', 'Bushy tail', '2023-02-16', 'Woodland'),
(29, 1, 'Spike', 'M', 'Prickly fur', 'None', '2022-10-09', 'Forest'),
(30, 2, 'Ruby', 'F', 'Red coat', 'White-tipped tail', '2023-03-11', 'Meadow'),
(31, 3, 'Buddy', 'M', 'Black and white stripes', 'Bushy tail', '2022-05-14', 'Woodland'),
(32, 4, 'Doe', 'F', 'Slim body with white tail', 'None', '2022-12-22', 'Meadow'),
(33, 5, 'Pip', 'M', 'Small and brown', 'Fast flyer', '2022-07-01', 'Cave'),
(34, 6, 'Warty', 'M', 'Bumpy skin', 'Large parotid glands', '2022-04-14', 'Pond'),
(35, 7, 'Soprano', 'F', 'Small and agile', 'Distinctive wing patterns', '2022-08-23', 'Tree'),
(36, 8, 'Hoppy', 'M', 'Smooth skin', 'Long legs', '2023-02-02', 'Marsh'),
(37, 9, 'Rudolph', 'M', 'Large antlers', 'Reddish-brown coat', '2023-03-28', 'Woodland'),
(38, 10, 'Tiny', 'F', 'Tiny and fast', 'Shiny fur', '2022-08-22', 'Garden'),
(39, 11, 'Owliver', 'M', 'Feathery wings', 'Heart-shaped face', '2023-03-16', 'Barn'),
(40, 12, 'Larky', 'F', 'Brown feathers', 'Long beak', '2022-10-29', 'Field'),
(41, 1, 'Quill', 'M', 'Spiky coat', 'Short legs', '2023-03-26', 'Forest'),
(42, 2, 'Rusty', 'M', 'Reddish-brown fur', 'Bushy tail', '2022-05-30', 'Meadow'),
(43, 3, 'Stripe', 'F', 'Black and white stripes', 'Short legs', '2023-01-26', 'Woodland'),
(44, 4, 'Bambi', 'M', 'Slim body with antlers', 'White tail', '2022-11-02', 'Meadow'),
(45, 5, 'Flutter', 'F', 'Small and agile', 'Fast flyer', '2022-09-14', 'Cave'),
(46, 6, 'Wartooth', 'M', 'Bumpy skin', 'Large parotid glands', '2022-09-19', 'Pond'),
(47, 7, 'Harmony', 'F', 'Smooth skin', 'Distinctive wing patterns', '2023-03-13', 'Tree'),
(48, 8, 'Jumpy', 'M', 'Brown fur', 'Long legs', '2022-07-22', 'Marsh'),
(49, 9, 'Eddy', 'M', 'Large antlers', 'Brown fur', '2022-11-26', 'Woodland'),
(50, 10, 'Speedy', 'F', 'Tiny and fast', 'Shiny fur', '2022-07-29', 'Garden'),
(51, 11, 'Melody', 'F', 'Feathery coat', 'Wide wingspan', '2022-11-17', 'Nest'),
(52, 12, 'Skyler', 'M', 'White feathers', 'Heart-shaped face', '2022-05-23', 'Sky'),
(53, 1, 'Needle', 'M', 'Prickly fur', 'None', '2023-01-14', 'Forest'),
(54, 2, 'Scarlet', 'F', 'Red coat', 'White-tipped tail', '2022-09-26', 'Meadow'),
(55, 3, 'Panda', 'M', 'Black and white stripes', 'Bushy tail', '2022-04-16', 'Woodland'),
(56, 4, 'Spotty', 'F', 'Spotted coat', 'Playful demeanor', '2022-12-14', 'Field'),
(57, 10, 'Squeakster', 'M', 'Small and vocal', 'Short tail', '2022-08-15', 'Hollow'),
(58, 12, 'Feathers', 'F', 'Feathery coat', 'Wide wingspan', '2022-12-17', 'Nest');

-- --------------------------------------------------------

--
-- Table structure for table `conservation_status`
--

CREATE TABLE `conservation_status` (
  `Conservation_Status_PK` int(10) NOT NULL,
  `Abbreviation` varchar(2) DEFAULT NULL,
  `Conservation_Status_Name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `conservation_status`
--

INSERT INTO `conservation_status` (`Conservation_Status_PK`, `Abbreviation`, `Conservation_Status_Name`) VALUES
(1, 'EX', 'Extinct'),
(2, 'EW', 'Extinct in the wild'),
(3, 'CR', 'Critically Endangered'),
(4, 'EN', 'Endangered'),
(5, 'VU', 'Vulnerable'),
(6, 'NT', 'Near Threatened'),
(7, 'CD', 'Conservation Dependent'),
(8, 'LC', 'Least concern'),
(9, 'DD', 'Data deficient'),
(10, 'NE', 'Not evaluated');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID_PK` int(11) NOT NULL,
  `Event_Title` varchar(255) DEFAULT NULL,
  `Event_Description` text DEFAULT NULL,
  `Event_Date` date DEFAULT NULL,
  `Start_Time` time DEFAULT NULL,
  `End_Time` time DEFAULT NULL,
  `Age_Rating_FK` int(11) DEFAULT NULL,
  `Event_Notes` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID_PK`, `Event_Title`, `Event_Description`, `Event_Date`, `Start_Time`, `End_Time`, `Age_Rating_FK`, `Event_Notes`, `image_path`) VALUES
(1, 'Wildlife Photography Workshop', 'A session where adults can learn wildlife photography techniques from a professional photographer, with opportunities to capture images of the resident wildlife.', '2024-12-05', '18:00:00', '20:30:00', 1, 'Evening times are chosen to allow for optimal lighting conditions during the photography session.', 'Images/WildlifePhotographyWorkshop.jpg'),
(2, 'Nocturnal Wildlife Encounter', 'An evening event focused on nocturnal animals. Participants could take part in guided walks, learn about nighttime wildlife habits, and perhaps witness the release of rehabilitated nocturnal animals back into the wild.', '2024-12-12', '20:00:00', '22:00:00', 1, 'This event is scheduled in the evening to align with the nocturnal behavior of certain wildlife.', 'Images/NocturnalWildlifeEncounter.jpg'),
(3, 'Conservation Lecture Series', 'Inviting guest speakers, wildlife experts, and conservationists to give talks on various topics such as local biodiversity, conservation challenges, and success stories.', '2024-12-15', '19:30:00', '21:00:00', 1, 'Evening times provide a convenient slot for working adults to attend after regular working hours.', 'Images/ConservationLectureSeries.jpg'),
(4, 'Nature Scavenger Hunt', 'A family-friendly scavenger hunt around the rehabilitation center\'s grounds, encouraging participants to discover and learn about local flora and fauna.', '2024-12-08', '10:00:00', '12:00:00', 2, 'Morning times are often suitable for families with children.', 'Images/NatureScavengerHunt.jpg'),
(5, 'Animal Care Workshops', 'Interactive workshops for families, providing insights into the daily care routines of the wildlife center. Participants might assist in preparing food for the animals, creating enrichment activities, etc.', '2024-12-09', '14:00:00', '16:00:00', 2, 'Afternoon times are chosen to allow families to participate after lunch.', 'Images/AnimalCareWorkshops.jpg'),
(6, 'Guided Wildlife Walks', 'Family-oriented guided walks with experts who share information about the wildlife residing in the area and the rehabilitation efforts undertaken by the center.', '2024-12-16', '13:30:00', '15:30:00', 2, 'Afternoon times are suitable for families to enjoy a guided walk.', 'Images/GuidedWildlifeWalks.jpg'),
(7, 'Junior Wildlife Ranger Day', 'A day for children to experience being junior wildlife rangers, including educational games, hands-on activities, and a \"graduation\" ceremony.', '2024-12-02', '09:30:00', '15:30:00', 3, 'Includes a 1-hour break for lunch.', 'Images/JuniorWildlifeRangerDay.jpg'),
(8, 'Animal Art and Craft Workshop', 'A creative session where children can engage in art and craft activities related to wildlife. This could include making animal masks, painting rocks as animals, or creating bird feeders.', '2024-12-10', '14:30:00', '16:30:00', 3, 'Afternoon times provide a creative outlet for children.', 'Images/AnimalArtandCraftWorkshop.jpg'),
(9, 'Storytime with Wildlife', 'A storytelling event where wildlife-themed stories are read aloud to children, followed by a visit to see some of the animals mentioned in the stories.', '2024-12-14', '11:00:00', '12:00:00', 3, 'Late morning times are suitable for story sessions.', 'Images/StorytimewithWildlife.avif');

-- --------------------------------------------------------

--
-- Table structure for table `species_information`
--

CREATE TABLE `species_information` (
  `Species_ID_PK` int(10) NOT NULL,
  `Common_Name` varchar(50) DEFAULT NULL,
  `Genus` varchar(30) DEFAULT NULL,
  `Species` varchar(30) DEFAULT NULL,
  `Conservation_Status_FK` int(10) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `species_information`
--

INSERT INTO `species_information` (`Species_ID_PK`, `Common_Name`, `Genus`, `Species`, `Conservation_Status_FK`, `image_path`) VALUES
(1, 'European Hedgehog', 'Erinaceus', 'europaeus', 7, 'Images/EuropeanHedgehog.avif'),
(2, 'Red Fox', 'Vulpes', 'vulpes', 7, 'Images/RedFox.jpg'),
(3, 'European Badger', 'Meles', 'meles', 7, 'Images/EuropeanBadger.jpg'),
(4, 'Roe Deer', 'Odocoileus', 'virginianus', 7, 'Images/RoeDeer.jpg'),
(5, 'Common Pipistrelle', 'Pipistrellus', 'pipistrellus', 7, 'Images/CommonPipistrelle.jpg'),
(6, 'Common Toad', 'Bufo', 'bufo', 7, 'Images/CommonToad.jpg'),
(7, 'Soprano Pipistrelle', 'Pipistrellus', 'pygmaeus', 7, 'Images/SopranoPipistrelle.jpg'),
(8, 'Common Frog', 'Rana', 'temporaria', 7, 'Images/CommonFrog.jpg'),
(9, 'Red Deer', 'Cervus', 'elaphus', 7, 'Images/RedDeer.jpg'),
(10, 'Common Shrew', 'Sorex', 'araneus', 7, 'Images/CommonShrew.jpg'),
(11, 'Barn Owl', 'Tyto', 'alba', 5, 'Images/BarnOwl.jpg'),
(12, 'Skylark', 'Alauda', 'arvensis', 5, 'Images/Skylark.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_ratings`
--
ALTER TABLE `age_ratings`
  ADD PRIMARY KEY (`Age_Rating_PK`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Animal_ID_PK`),
  ADD KEY `Species_ID_FK` (`Species_ID_FK`);

--
-- Indexes for table `conservation_status`
--
ALTER TABLE `conservation_status`
  ADD PRIMARY KEY (`Conservation_Status_PK`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID_PK`);

--
-- Indexes for table `species_information`
--
ALTER TABLE `species_information`
  ADD PRIMARY KEY (`Species_ID_PK`),
  ADD KEY `Conservation_Status_FK` (`Conservation_Status_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `Animal_ID_PK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `conservation_status`
--
ALTER TABLE `conservation_status`
  MODIFY `Conservation_Status_PK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `species_information`
--
ALTER TABLE `species_information`
  MODIFY `Species_ID_PK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`Species_ID_FK`) REFERENCES `species_information` (`Species_ID_PK`);

--
-- Constraints for table `species_information`
--
ALTER TABLE `species_information`
  ADD CONSTRAINT `species_information_ibfk_1` FOREIGN KEY (`Conservation_Status_FK`) REFERENCES `conservation_status` (`Conservation_Status_PK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
