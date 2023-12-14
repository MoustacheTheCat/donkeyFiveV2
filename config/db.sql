-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 14 déc. 2023 à 15:25
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `donkeyFiveV2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminFirstName` varchar(100) NOT NULL,
  `adminLastName` varchar(100) NOT NULL,
  `adminPassword` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminNumber` int(11) NOT NULL,
  `adminPicture` varchar(100) DEFAULT 'admin-default.jpeg',
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admin_center`
--

CREATE TABLE `admin_center` (
  `adminId` int(11) NOT NULL,
  `centerId` int(11) NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='link user center if user is Admin role';

-- --------------------------------------------------------

--
-- Structure de la table `admin_user_message`
--

CREATE TABLE `admin_user_message` (
  `messageId` int(11) NOT NULL,
  `adminId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `center`
--

CREATE TABLE `center` (
  `centerId` int(11) NOT NULL,
  `centerName` varchar(100) NOT NULL,
  `centerCity` varchar(100) NOT NULL,
  `centerAddress` varchar(100) NOT NULL,
  `centerZip` varchar(10) NOT NULL,
  `centerCountry` varchar(100) NOT NULL,
  `centerNumber` varchar(100) NOT NULL,
  `centerEmail` varchar(100) NOT NULL,
  `centerDescription` text NOT NULL,
  `centerPicture` varchar(100) DEFAULT 'center-default.png',
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `center`
--

INSERT INTO `center` (`centerId`, `centerName`, `centerCity`, `centerAddress`, `centerZip`, `centerCountry`, `centerNumber`, `centerEmail`, `centerDescription`, `centerPicture`, `createdAt`, `updatedAt`) VALUES
(1, 'Donkey Five Paris', 'Paris', '123 Rue de Paris', '75001', 'France', '0123456789', 'contact@paris.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(2, 'Donkey Five Lyon', 'Lyon', '456 Rue de Lyon', '69002', 'France', '0123456790', 'contact@lyon.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(3, 'Donkey Five Marseille', 'Marseille', '789 Rue de Marseille', '13003', 'France', '0123456791', 'contact@marseille.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(4, 'Donkey Five Bordeaux', 'Bordeaux', '101 Rue de Bordeaux', '33004', 'France', '0123456792', 'contact@bordeaux.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(5, 'Donkey Five Toulouse', 'Toulouse', '102 Rue de Toulouse', '31005', 'France', '0123456793', 'contact@toulouse.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(6, 'Donkey Five Nice', 'Nice', '103 Rue de Nice', '06006', 'France', '0123456794', 'contact@nice.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(7, 'Donkey Five Nantes', 'Nantes', '104 Rue de Nantes', '44007', 'France', '0123456795', 'contact@nantes.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(8, 'Donkey Five Strasbourg', 'Strasbourg', '105 Rue de Strasbourg', '67008', 'France', '0123456796', 'contact@strasbourg.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(9, 'Donkey Five Montpellier', 'Montpellier', '106 Rue de Montpellier', '34009', 'France', '0123456797', 'contact@montpellier.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(10, 'Donkey Five Lille', 'Lille', '107 Rue de Lille', '59010', 'France', '0123456798', 'contact@lille.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(11, 'Donkey Five London', 'London', '108 London Road', 'L1 1LL', 'United Kingdom', '0201234567', 'contact@london.uk', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(12, 'Donkey Five Berlin', 'Berlin', '109 Berliner Strasse', '10115', 'Germany', '0301234567', 'contact@berlin.de', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(13, 'Donkey Five Madrid', 'Madrid', '110 Calle de Madrid', '28001', 'Spain', '910123456', 'contact@madrid.es', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(14, 'Donkey Five Rome', 'Rome', '111 Via Roma', '00118', 'Italy', '0612345678', 'contact@rome.it', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30'),
(15, 'Donkey Five Amsterdam', 'Amsterdam', '112 Amsterdam Avenue', '1012', 'Netherlands', '0201234567', 'contact@amsterdam.nl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis eu non diam phasellus. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Donec et odio pellentesque diam. Aliquam id diam maecenas ultricies mi eget. Accumsan tortor posuere ac ut consequat semper viverra nam libero. In iaculis nunc sed augue. Velit aliquet sagittis id consectetur purus ut faucibus. Nulla porttitor massa id neque aliquam.', 'center-default.png', '2023-12-13 13:59:30', '2023-12-13 13:59:30');

-- --------------------------------------------------------

--
-- Structure de la table `field`
--

CREATE TABLE `field` (
  `fieldId` int(11) NOT NULL,
  `fieldName` varchar(100) DEFAULT NULL,
  `fieldTarifHourHT` float NOT NULL,
  `fieldTarifDayHT` float NOT NULL,
  `fieldPicture` varchar(255) DEFAULT 'field-default.png',
  `centerId` int(11) NOT NULL,
  `fieldDescription` text NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `field`
--

INSERT INTO `field` (`fieldId`, `fieldName`, `fieldTarifHourHT`, `fieldTarifDayHT`, `fieldPicture`, `centerId`, `fieldDescription`, `createdAt`, `updatedAt`) VALUES
(79, 'Field 1 center 1', 10, 50, 'field-urbain.png', 1, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(80, 'Field 2 center 1', 12, 60, 'field-hight-tech.png', 1, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(81, 'Field 3 center 1', 15, 70, 'field-classique.png', 1, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(82, 'Field 1 center 2', 10, 50, 'field-urbain.png', 2, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(83, 'Field 2 center 2', 12, 60, 'field-hight-tech.png', 2, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(84, 'Field 3 center 2', 15, 70, 'field-classique.png', 2, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(85, 'Field 1 center 3', 10, 50, 'field-urbain.png', 3, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(86, 'Field 2 center 3', 12, 60, 'field-hight-tech.png', 3, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(87, 'Field 3 center 3', 15, 70, 'field-classique.png', 3, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(88, 'Field 1 center 4', 10, 50, 'field-urbain.png', 4, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(89, 'Field 2 center 4', 12, 60, 'field-hight-tech.png', 4, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(90, 'Field 3 center 4', 15, 70, 'field-classique.png', 4, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(91, 'Field 1 center 5', 10, 50, 'field-urbain.png', 5, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(92, 'Field 2 center 5', 12, 60, 'field-hight-tech.png', 5, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(93, 'Field 3 center 5', 15, 70, 'field-classique.png', 5, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(94, 'Field 1 center 6', 10, 50, 'field-urbain.png', 6, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(95, 'Field 2 center 6', 12, 60, 'field-hight-tech.png', 6, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(96, 'Field 3 center 6', 15, 70, 'field-classique.png', 6, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(97, 'Field 1 center 7', 10, 50, 'field-urbain.png', 7, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(98, 'Field 2 center 7', 12, 60, 'field-hight-tech.png', 7, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(99, 'Field 3 center 7', 15, 70, 'field-classique.png', 7, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(100, 'Field 1 center 8', 10, 50, 'field-urbain.png', 8, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(101, 'Field 2 center 8', 12, 60, 'field-hight-tech.png', 8, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(102, 'Field 3 center 8', 15, 70, 'field-classique.png', 8, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(103, 'Field 1 center 9', 10, 50, 'field-urbain.png', 9, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(104, 'Field 2 center 9', 12, 60, 'field-hight-tech.png', 9, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(105, 'Field 3 center 9', 15, 70, 'field-classique.png', 9, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(106, 'Field 1 center 10', 10, 50, 'field-urbain.png', 10, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(107, 'Field 2 center 10', 12, 60, 'field-hight-tech.png', 10, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(108, 'Field 3 center 10', 15, 70, 'field-classique.png', 10, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(109, 'Field 1 center 11', 10, 50, 'field-urbain.png', 11, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(110, 'Field 2 center 11', 12, 60, 'field-hight-tech.png', 11, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(111, 'Field 3 center 11', 15, 70, 'field-classique.png', 11, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(112, 'Field 1 center 12', 10, 50, 'field-urbain.png', 12, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(113, 'Field 2 center 12', 12, 60, 'field-hight-tech.png', 12, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(114, 'Field 3 center 12', 15, 70, 'field-classique.png', 12, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(115, 'Field 1 center 13', 10, 50, 'field-urbain.png', 13, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés. Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(116, 'Field 2 center 13', 12, 60, 'field-hight-tech.png', 13, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu. Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel. Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique. Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(117, 'Field 3 center 13', 15, 70, 'field-classique.png', 13, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées. Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action. Les éclairages sont doux mais suffisants pour une visibilité parfaite. Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(118, 'Field 1 center 14', 10, 50, 'field-urbain.png', 14, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés.  Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon. De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu. Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(119, 'Field 2 center 14', 12, 60, 'field-hight-tech.png', 14, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu.  Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel.  Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique.  Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(120, 'Field 3 center 14', 15, 70, 'field-classique.png', 14, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées.  Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action.  Les éclairages sont doux mais suffisants pour une visibilité parfaite.  Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(121, 'Field 1 center 15', 10, 50, 'field-urbain.png', 15, 'Ce terrain de foot en salle évoque l ambiance urbaine avec ses murs en brique et ses graffitis colorés.  Le sol est en gazon synthétique de haute qualité, offrant un excellent rebond pour le ballon.  De puissants projecteurs suspendus au plafond éclairent uniformément toute la surface de jeu.  Des filets de sécurité entourent le terrain, et de confortables bancs sont disposés pour les remplaçants et les spectateurs.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(122, 'Field 2 center 15', 12, 60, 'field-hight-tech.png', 15, 'Ce terrain intérieur présente un design moderne avec un sol interactif qui illumine les lignes de jeu.  Les murs sont recouverts de panneaux d affichage numériques montrant les scores et les statistiques en temps réel.  Le gazon synthétique est de dernière génération, avec des zones marquées par différentes couleurs pour l entraînement tactique.  Des caméras de surveillance permettent l analyse de jeu post-match.', '2023-12-13 15:42:40', '2023-12-13 15:42:40'),
(123, 'Field 3 center 15', 15, 70, 'field-classique.png', 15, 'Ce terrain couvert offre une ambiance chaleureuse et traditionnelle, avec un sol en gazon synthétique standard et des lignes de jeu bien marquées.  Des gradins en bois entourent le terrain, offrant une vue rapprochée de l action.  Les éclairages sont doux mais suffisants pour une visibilité parfaite.  Les murs sont décorés avec des bannières et des trophées du club, créant une atmosphère de fierté et d histoire.', '2023-12-13 15:42:40', '2023-12-13 15:42:40');

-- --------------------------------------------------------

--
-- Structure de la table `field_option`
--

CREATE TABLE `field_option` (
  `optionId` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `field_option`
--

INSERT INTO `field_option` (`optionId`, `fieldId`, `createdAt`, `updatedAt`) VALUES
(1, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 79, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 80, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 81, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 82, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 83, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 84, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 85, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 86, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 87, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 88, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 89, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 90, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 91, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 92, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 93, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 94, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 95, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 96, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 97, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 98, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 99, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 100, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 101, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 102, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 103, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 104, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 105, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 106, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 107, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 108, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 109, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 110, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 111, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 112, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 113, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 114, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 115, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 116, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 117, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 118, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 119, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 120, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 121, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 122, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(1, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(2, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(3, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(4, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(6, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(8, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(9, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20'),
(10, 123, '2023-12-13 15:57:20', '2023-12-13 15:57:20');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL,
  `messgeTo` varchar(100) NOT NULL,
  `messageFrom` varchar(100) NOT NULL,
  `messageSubject` varchar(100) NOT NULL,
  `messageText` text NOT NULL,
  `messageStatus` int(11) DEFAULT 0,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `option`
--

CREATE TABLE `option` (
  `optionId` int(11) NOT NULL,
  `optionName` varchar(100) NOT NULL,
  `optionCostHT` float NOT NULL,
  `optionPicture` varchar(255) DEFAULT 'option-default.png',
  `optionDescription` text NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `option`
--

INSERT INTO `option` (`optionId`, `optionName`, `optionCostHT`, `optionPicture`, `optionDescription`, `createdAt`, `updatedAt`) VALUES
(1, 'Éclairage nocturne', 20, 'option-lighting.jpg', 'Option offrant un éclairage adéquat pour des activités nocturnes, assurant une ambiance sécurisée et agréable.', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(2, 'rental de ballons', 5, 'option-balon.webp', 'Ajoutez une touche festive à votre événement avec la location de ballons.', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(3, 'Marquage personnalisé', 15, 'option-marquage.jpg', 'Personnalisez votre espace avec un marquage distinctif, ajoutant une touche unique à votre événement', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(4, 'Accès aux vestiaires', 10, 'option-vestiaire.jpg', 'Assurez le confort de vos participants en leur offrant un accès facile aux vestiaires pour se préparer.', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(6, 'Service Arbitrage', 30, 'option-arbitrage.jpg', 'Profitez d\'un arbitrage professionnel pour garantir des compétitions équitables et bien organisées.', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(8, 'Service de restauration', 25, 'option-restauration.jpg', 'Offrez une expérience culinaire exceptionnelle avec notre service de restauration, adapté à vos besoins.', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(9, 'Coaching personnel', 40, 'option-coaching.webp', 'Maximisez les performances avec un coaching personnalisé, offrant un soutien individualisé.', '2023-12-13 14:01:22', '2023-12-13 14:01:22'),
(10, 'Enregistrement vidéo du match', 35, 'option-video.webp', 'Capturez et revivez les moments clés avec un enregistrement vidéo professionnel de vos matchs.', '2023-12-13 14:01:22', '2023-12-13 14:01:22');

-- --------------------------------------------------------

--
-- Structure de la table `rental`
--

CREATE TABLE `rental` (
  `rentalId` int(11) NOT NULL,
  `rentalNumber` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `rentalCostOfTVA` float DEFAULT 1.2,
  `rentalStatus` int(11) DEFAULT 1,
  `rentalDataOptions` varchar(500) NOT NULL,
  `rentalDataTimes` varchar(500) NOT NULL,
  `rentalTotalHT` float NOT NULL,
  `rentalTotalTTC` float NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userFirstName` varchar(100) NOT NULL,
  `userLastName` varchar(100) NOT NULL,
  `userBirthDay` date NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userZip` int(11) NOT NULL,
  `userCity` varchar(100) NOT NULL,
  `userCountry` varchar(10) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userNumber` int(11) NOT NULL,
  `userPicture` varchar(100) DEFAULT 'user-defaut.jpeg',
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `userFirstName`, `userLastName`, `userBirthDay`, `userAddress`, `userZip`, `userCity`, `userCountry`, `userPassword`, `userEmail`, `userNumber`, `userPicture`, `createdAt`, `updatedAt`) VALUES
(9, 'mathieu', 'joubert', '1990-10-24', '29 rue du ruisseau', 93100, 'Montreuil', 'France', '$argon2i$v=19$m=65536,t=4,p=1$ZkxVWTl4MHZwdjhYRUlrQg$fHb/g1dYdRB6m24SHx/VHcpHLLY1lnBxXnC9HBTgTWI', 'joubert.mathieu753783@gmail.com', 615835301, 'user-defaut.jpeg', '2023-12-14 15:17:30', '2023-12-14 15:17:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Index pour la table `admin_center`
--
ALTER TABLE `admin_center`
  ADD KEY `centers_users_FK` (`centerId`) USING BTREE,
  ADD KEY `users_centers_FK` (`adminId`) USING BTREE;

--
-- Index pour la table `admin_user_message`
--
ALTER TABLE `admin_user_message`
  ADD KEY `messages_users_FK` (`messageId`) USING BTREE,
  ADD KEY `users_messages_FK` (`adminId`) USING BTREE,
  ADD KEY `user_message_FK` (`userId`);

--
-- Index pour la table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`centerId`);

--
-- Index pour la table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fieldId`),
  ADD KEY `centers_fields_FK` (`centerId`) USING BTREE;

--
-- Index pour la table `field_option`
--
ALTER TABLE `field_option`
  ADD KEY `fields_options_FK` (`fieldId`) USING BTREE,
  ADD KEY `options_fields_FK` (`optionId`) USING BTREE;

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`);

--
-- Index pour la table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`optionId`);

--
-- Index pour la table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rentalId`),
  ADD KEY `users_rentals_FK` (`userId`) USING BTREE,
  ADD KEY `field_rental_FK` (`fieldId`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `center`
--
ALTER TABLE `center`
  MODIFY `centerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `field`
--
ALTER TABLE `field`
  MODIFY `fieldId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `option`
--
ALTER TABLE `option`
  MODIFY `optionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `rental`
--
ALTER TABLE `rental`
  MODIFY `rentalId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin_center`
--
ALTER TABLE `admin_center`
  ADD CONSTRAINT `admin_center_FK` FOREIGN KEY (`adminId`) REFERENCES `admin` (`adminId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `center_admin_FK` FOREIGN KEY (`centerId`) REFERENCES `center` (`centerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `admin_user_message`
--
ALTER TABLE `admin_user_message`
  ADD CONSTRAINT `admin_message_FK` FOREIGN KEY (`adminId`) REFERENCES `admin` (`adminId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_user_message_FK` FOREIGN KEY (`messageId`) REFERENCES `message` (`messageId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_message_FK` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `field`
--
ALTER TABLE `field`
  ADD CONSTRAINT `field_FK` FOREIGN KEY (`centerId`) REFERENCES `center` (`centerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `field_option`
--
ALTER TABLE `field_option`
  ADD CONSTRAINT `field_option_FK` FOREIGN KEY (`fieldId`) REFERENCES `field` (`fieldId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `option_field_FK` FOREIGN KEY (`optionId`) REFERENCES `option` (`optionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `field_rental_FK` FOREIGN KEY (`fieldId`) REFERENCES `field` (`fieldId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_rental_FK` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;