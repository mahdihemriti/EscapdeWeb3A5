-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 10 avr. 2022 à 15:00
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `escapade`
--

-- --------------------------------------------------------

--
-- Structure de la table `agencedelocation`
--

CREATE TABLE `agencedelocation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `numTel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `Type` enum('simple','doublee') NOT NULL,
  `vueSurMer` enum('yes','no') NOT NULL,
  `description` varchar(255) NOT NULL,
  `prixNuit` double NOT NULL,
  `status` enum('disponible','indisponible') NOT NULL,
  `idHotel` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `IdF` int(11) NOT NULL,
  `prixTotal` float NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `idClient` int(11) NOT NULL,
  `prixFinal` float NOT NULL,
  `idPromotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `pernom` varchar(20) NOT NULL,
  `nationnalite` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `langue` varchar(10) NOT NULL,
  `idSiteTouristique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `idHotel` int(11) NOT NULL,
  `matriculeFiscale` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `nbrEtoile` int(11) NOT NULL,
  `description` varchar(80) NOT NULL,
  `nbChambreTotal` int(11) NOT NULL,
  `idDestination` int(11) NOT NULL,
  `maxChambre` int(11) NOT NULL,
  `imgHotel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idMoyenTransport` int(11) NOT NULL,
  `datePrise` date NOT NULL,
  `dateRetour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `moyendetransport`
--

CREATE TABLE `moyendetransport` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `capacite` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `status` enum('disponible','indisponible') NOT NULL,
  `tarifJournee` double NOT NULL,
  `idAgence` int(11) NOT NULL,
  `idDestination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `taux` float NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `taux`, `dateDebut`, `dateFin`) VALUES
(135, 20, '2022-03-09', '2022-03-13'),
(136, 50, '2022-03-06', '2022-03-08');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `idClient` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_chambre`
--

CREATE TABLE `reservation_chambre` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idChambre` int(11) NOT NULL,
  `dateArrivee` date NOT NULL,
  `dateAller` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_sitetouristique`
--

CREATE TABLE `reservation_sitetouristique` (
  `idClient` int(11) NOT NULL,
  `idSiteTouristique` int(11) NOT NULL,
  `idGuide` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sitetourstique`
--

CREATE TABLE `sitetourstique` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `idDestination` int(11) NOT NULL,
  `idGuide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateDeNaissance` date DEFAULT NULL,
  `numTel` int(11) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `mdp` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `blocked` enum('oui','non') DEFAULT NULL,
  `role` enum('ADMIN','CLIENT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `dateDeNaissance`, `numTel`, `ville`, `mdp`, `image`, `blocked`, `role`) VALUES
(98, 'MAHDI', 'hemriti', 'nour.boujmil@esprit.tn', '2000-09-02', 26596, 'tunis', '$2a$12$2aZcJUV2bwwhgkUnJTkS8OTEEdKtrfQyhOFGoHTrl2uUakii8HqlG', 'kkk', 'non', 'CLIENT'),
(99, 'chennnaoui', 'celine', 'cycy@esprit.tn', '2022-03-08', 55989026, 'nabeul', '$2a$12$sFKSju.DSPXwloOxpcOiz.hh2/WhtciqGNBvY9kw8QhybbkZHA5LW', 'Computer_Icons_Avatar_User_Login_PNG_-_Free_Download-removebg-preview.png', 'non', 'CLIENT'),
(100, 'daghrour', 'meryem', 'meryem@esprit.tn', '2022-03-08', 52585253, 'nabeul', '$2a$12$dlG5V2GhxIBNvD44sIQ2QOiBbOz5xsbKJgeIflfhPcFzKH.gmCRje', 'Computer_Icons_Avatar_User_Login_PNG_-_Free_Download-removebg-preview.png', 'non', 'CLIENT'),
(101, 'ben brahim', 'celine', 'celine.benbrahim@esprit.tn', '2022-03-09', 55989026, 'nabeul', '$2a$12$/w/fNXoM7BHOUetkejvdaefUvVru3BqHjKIK7XXPOwSFeGpe20i16', 'Computer_Icons_Avatar_User_Login_PNG_-_Free_Download-removebg-preview.png', 'oui', 'CLIENT'),
(102, 'boumedien', 'yassine', 'mohamedyassine.boumedien@esprit.tn', '2004-03-20', 5645, 'tunis', '$2a$12$rNcarZ1lZQqXLLMm.sdWte3nuQBjDwpanl5aLknvx3xyZa8nLj4Ri', 'C:\\Users\\mahdi\\Documents\\NetBeansProjects\\JavaApplication6\\src\\view\\ressources\\images\\jimmy-fallon_1.png', 'non', 'CLIENT'),
(103, 'mahdi', 'hemriti', 'mahdihemriti7@gmail.com', '2022-03-16', 22222222, 'tunis', '$2a$12$QJnfM9eSOIY1EcbH1TR0rugM9Z2xxiS6LY/2NhpmeYO55a2OJ7YkK', 'C:\\Users\\mahdi\\Documents\\NetBeansProjects\\JavaApplication6\\src\\view\\ressources\\images\\Acceuil1.png', 'non', 'CLIENT');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agencedelocation`
--
ALTER TABLE `agencedelocation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_HotelChambre` (`idHotel`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_Clientcommentaireutilisateur` (`idClient`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`IdF`),
  ADD KEY `Fk_ClientFacture` (`idClient`),
  ADD KEY `Fk_PromoFacture` (`idPromotion`);

--
-- Index pour la table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SiteTouristiqueGuide` (`idSiteTouristique`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`idHotel`),
  ADD KEY `FK_HotelDestination` (`idDestination`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_MoyenTransportLocation` (`idMoyenTransport`),
  ADD KEY `FK_ClientLocation` (`idClient`);

--
-- Index pour la table `moyendetransport`
--
ALTER TABLE `moyendetransport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_AgenceMoyen` (`idAgence`),
  ADD KEY `Fk_MoyenTransportDestination` (`idDestination`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_UtilisateurReclamation` (`idClient`);

--
-- Index pour la table `reservation_chambre`
--
ALTER TABLE `reservation_chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_chambreReservationChambre` (`idChambre`),
  ADD KEY `Fk_ClientReservationChambre` (`idClient`);

--
-- Index pour la table `reservation_sitetouristique`
--
ALTER TABLE `reservation_sitetouristique`
  ADD PRIMARY KEY (`idClient`,`idSiteTouristique`),
  ADD KEY `FK_SiteTouristiqueRservation` (`idSiteTouristique`),
  ADD KEY `idGuide` (`idGuide`);

--
-- Index pour la table `sitetourstique`
--
ALTER TABLE `sitetourstique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SiteTouristiqueDestination` (`idDestination`),
  ADD KEY `Fk_GuideSiteTouristique` (`idGuide`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agencedelocation`
--
ALTER TABLE `agencedelocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `IdF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idHotel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `moyendetransport`
--
ALTER TABLE `moyendetransport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation_chambre`
--
ALTER TABLE `reservation_chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sitetourstique`
--
ALTER TABLE `sitetourstique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `Fk_HotelChambre` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`idHotel`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `Fk_Clientcommentaireutilisateur` FOREIGN KEY (`idClient`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `Fk_ClientFacture` FOREIGN KEY (`idClient`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Fk_PromoFacture` FOREIGN KEY (`idPromotion`) REFERENCES `promotion` (`id`);

--
-- Contraintes pour la table `guide`
--
ALTER TABLE `guide`
  ADD CONSTRAINT `FK_SiteTouristiqueGuide` FOREIGN KEY (`idSiteTouristique`) REFERENCES `sitetourstique` (`id`);

--
-- Contraintes pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FK_HotelDestination` FOREIGN KEY (`idDestination`) REFERENCES `destination` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `FK_ClientLocation` FOREIGN KEY (`idClient`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `FK_MoyenTransportLocation` FOREIGN KEY (`idMoyenTransport`) REFERENCES `moyendetransport` (`id`);

--
-- Contraintes pour la table `moyendetransport`
--
ALTER TABLE `moyendetransport`
  ADD CONSTRAINT `Fk_AgenceMoyen` FOREIGN KEY (`idAgence`) REFERENCES `agencedelocation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Fk_MoyenTransportDestination` FOREIGN KEY (`idDestination`) REFERENCES `destination` (`id`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `Fk_UtilisateurReclamation` FOREIGN KEY (`idClient`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `reservation_chambre`
--
ALTER TABLE `reservation_chambre`
  ADD CONSTRAINT `Fk_ClientReservationChambre` FOREIGN KEY (`idClient`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `Fk_chambreReservationChambre` FOREIGN KEY (`idChambre`) REFERENCES `chambre` (`id`);

--
-- Contraintes pour la table `reservation_sitetouristique`
--
ALTER TABLE `reservation_sitetouristique`
  ADD CONSTRAINT `FK_ClientRservation` FOREIGN KEY (`idClient`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `FK_SiteTouristiqueRservation` FOREIGN KEY (`idSiteTouristique`) REFERENCES `sitetourstique` (`id`),
  ADD CONSTRAINT `idGuide` FOREIGN KEY (`idGuide`) REFERENCES `guide` (`id`);

--
-- Contraintes pour la table `sitetourstique`
--
ALTER TABLE `sitetourstique`
  ADD CONSTRAINT `FK_SiteTouristiqueDestination` FOREIGN KEY (`idDestination`) REFERENCES `destination` (`id`),
  ADD CONSTRAINT `Fk_GuideSiteTouristique` FOREIGN KEY (`idGuide`) REFERENCES `guide` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
