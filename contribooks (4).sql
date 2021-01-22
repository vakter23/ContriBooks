-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 jan. 2021 à 17:08
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contribooks`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id_author` bigint(20) NOT NULL,
  `first_name_author` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name_author` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_death` date DEFAULT NULL,
  `biography_author` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id_author`, `first_name_author`, `last_name_author`, `date_of_birth`, `date_of_death`, `biography_author`) VALUES
(1, 'J. K.', 'Rowling', '1965-07-31', NULL, 'J.K. Rowling est l\'auteur de Harry Potter, la saga de tous les records. Lus et aimés dans le monde entier, les sept romans ont été traduits dans 79 langues, vendus à plus de 450 millions d\'exemplaires, couronnés de nombreux prix littéraires et adaptés en 8 films à succès. J.K. Rowling a également publié trois ouvrages dans l\'univers de Harry Potter, dont les droits d\'auteur sont reversés à des œuvres de bienfaisance : Le Quidditch à travers les âges, Les Animaux fantastiques, et Les Contes de Be'),
(2, 'ALAN', 'MOORE', '1953-11-18', NULL, NULL),
(3, 'KENTARO', 'MIURA', '1966-07-11', NULL, NULL),
(4, 'Michel', 'Wieviorka', '1946-08-23', NULL, NULL),
(5, 'André', 'Boudreau', '1965-07-31', NULL, NULL),
(6, 'Antoine', 'de Saint-Exupéry', '1944-07-31', NULL, NULL),
(7, 'Eddy', 'Mitchell', '1953-04-12', NULL, NULL),
(8, 'Malek', 'Chebel', '1965-07-31', '2016-11-12', NULL),
(9, 'Frank', 'H. Netter', '1906-04-25', '1991-09-17', NULL),
(10, 'Claude', 'Sauvageot', '0000-00-00', '2010-06-09', NULL),
(11, 'Roberto\r\n', 'Saviano\r\n', '1979-09-22', NULL, 'Roberto Saviano, né le 22 septembre 1979 à Naples, est un écrivain et journaliste italien.\r\nSaviano est célèbre pour avoir décrit et dénoncé les milieux mafieux dans ses écrits et articles, en particulier dans son livre Gomorra (2006), qui met à nu le milieu de la Camorra.\r\nEn raison de sa description méticuleuse et critique du « Système » des clans mafieux, son livre a eu un immense succès dans son pays et à l\'étranger. Cependant il doit vivre maintenant sous protection policière permanente et,'),
(22, 'Maurice', 'Leblanc', '1864-12-11', '1941-11-06', 'Marie Émile Maurice Leblanc est un romancier français né le 11 décembre 1864, à Rouen, et mort le 6 novembre 1941, à Perpignan. Auteur de nombreux romans policiers et d aventures, il est le créateur du célèbre gentleman-cambrioleur Arsène Lupin.'),
(23, 'Erin', 'Hunter', '1967-11-04', NULL, 'Erin Hunter est le pseudonyme commun de trois romancières britanniques, Kate Cary, Cherith Baldry et Victoria Holmes, rejointes ensuite par l Américaine Tui Sutherland, l Israélienne Inbali Iserles et les Britanniques Gillian Philip et Rosie Best. Ces écrivaines se relaient pour écrire les livres des séries La Guerre des clans, La Quête des ours, Survivants, ainsi que Bravelands. Elles ont inventé le nom Erin Hunter pour faciliter la recherche de leurs livres dans les librairies ou bibliothèques'),
(24, 'Howard Phillips', 'Lovecraft', '1890-09-20', '1937-03-15', 'Howard Phillips est un écrivain américain connu pour ses récits fantastiques, d\'horreur et de science-fiction.'),
(25, 'Itagaki', 'Paru', '1993-09-09', NULL, 'Paru Itagaki a fait des études de cinéma. Elle a publié Beast Complex, des histoires courtes, dans le Weekly Shonen Champion d\'Akita Shoten. En 2016, elle crée le manga Beastars, adapté en anime en 2019.');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_author` bigint(20) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `title_book` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_publication` date NOT NULL,
  `cover_book` varchar(500) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `synopsis_book` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Ce livre n''as pas encore de synopsis si vous êtes motivés vous pouvez nous contacter',
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`ISBN`, `id_type`, `id_author`, `id_genre`, `title_book`, `date_of_publication`, `cover_book`, `synopsis_book`, `rate`) VALUES
('0747532699', 1, 1, 1, 'Harry Potter et la pierre philosophale', '1997-06-26', NULL, 'Orphelin, le jeune Harry Potter peut enfin quitter ses tyranniques oncle et tante Dursley lorsqu un curieux messager lui révèle qu il est un sorcier. À 11 ans, Harry va enfin pouvoir intégrer la légendaire école de sorcellerie de Poudlard, y trouver une famille digne de ce nom et des amis, développer ses dons, et préparer son glorieux avenir.', 4),
('0884369021', 1, 22, 1, 'Arsène Lupin, gentleman cambrioleur', '2007-06-26', NULL, 'Arsène Lupin est arrêté : laventure est-elle donc finie pour lui ? Erreur ! Elle ne fait que commencer. C est quand il est sous les verrous que la police devrait se méfier. Lupin change de domicile, de costume, de tête et décriture, connaît tous les passages secrets et prend rendez-vous avec ses victimes avant de les cambrioler ! C est le plus gentleman de tous les filous.', 0),
('2070524558', 1, 1, 1, 'Harry Potter et la Chambre des secrets', '1998-07-02', NULL, 'Harry Potter fait une deuxième rentrée fracassante en voiture volante à lécole des sorciers. Cette deuxième année ne s annonce pas de tout repos… surtout depuis qu une étrange malédiction s est abattue sur les élèves. Entre les cours de potion magique, les matchs de quidditch et les combats de mauvais sorts, Harry trouvera-t-il le temps de percer le mystère de la Chambre des Secrets ?', 0),
('2070528189', 1, 1, 1, 'Harry Potter et le prisonnier dAzkaban', '1999-10-19', NULL, 'Harry Potter a treize ans. Après des vacances insupportables chez les horribles Dursley, il retrouve ses fidèles amis, Ron et Hermione, pour prendre le train qui les ramène au collège Poudlard. Aux dernières nouvelles, Sirius Black, un dangereux criminel proche de Voldemort, s est échappé de la prison d Azkaban. Il recherche Harry Potter, responsable de l élimination de son maître. C est donc sous bonne garde que l apprenti sorcier fait sa troisième rentrée. Au programme : des cours de divinatio', 0),
('2070543587', 1, 1, 1, 'Harry Potter et la Coupe de Feu', '2000-07-08', NULL, 'Après un horrible été chez les Dursley, Harry Potter entre en quatrième année au collège de Poudlard. À quatorze ans, il voudrait simplement être un jeune sorcier comme les autres, retrouver ses amis Ron et Hermione, assister avec eux à la Coupe du Monde de quidditch, apprendre de nouveaux sortilèges et essayer des potions inconnues. Une grande nouvelle l attend à son arrivée : la tenue à Poudlard dun tournoi de magie entre les plus célèbres écoles de sorcellerie. Déjà les spectaculaires délégat', 0),
('2070556859', 1, 1, 1, 'Harry Potter et lOrdre du Phénix', '2003-06-21', NULL, 'À quinze ans, Harry s apprête à entrer en cinquième année à Poudlard. Et s il est heureux de retrouver le monde des sorciers, il n a jamais été aussi anxieux. L adolescence, la perspective des examens importants en fin dannée et ces étranges cauchemars... Car Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom est de retour et, plus que jamais, Harry sent peser sur lui une terrible menace. Une menace que le ministère de la Magie ne semble pas prendre au sérieux, contrairement à Dumbledore. Poudlard devie', 0),
('2070572676', 1, 1, 1, 'Harry Potter et le Prince de sang-mêlé', '2005-07-16', NULL, 'Dans un monde de plus en plus inquiétant, Harry se prépare à retrouver Ron et Hermione. Bientôt, ce sera la rentrée à Poudlard, avec les autres étudiants de sixième année. Mais pourquoi le professeur Dumbledore vient-il en personne chercher Harry chez les Dursley ?', 0),
('2070612759', 6, 6, 6, 'Le Petit Prince', '1943-04-06', NULL, 'Le Petit Prince vient d’une planète à peine plus grande que lui sur laquelle il y a des baobabs et une fleur très précieuse, qui fait sa coquette et dont il se sent responsable. Le Petit Prince aime le coucher de soleil. Un jour, il l a vu quarante-quatre fois ! Il a aussi visité d autres planètes et rencontré des gens très importants qui ne savaient pas répondre à ses questions. Sur la Terre, il a apprivoisé le renard, qui est devenu son ami. Et il a rencontré l’aviateur échoué en plein désert ', 0),
('2070615367', 1, 1, 1, 'Harry Potter et les Reliques de la Mort', '2007-07-21', NULL, 'Dans cette ultime aventure, Harry doit accomplir la tâche que lui a confié Dumbledore : détruire les derniers Horcruxes afin de vaincre Voldemort. Pour cela, il sera accompagné de ses deux fidèles amis Ron et Hermione mais de nombreux obstacles les attendent...', 0),
('2266168657', 1, 23, 1, 'La Guerre des Clans - Tome 1 Cycle 1', '2007-03-15', NULL, 'Depuis des générations, fidèles aux lois de leurs ancêtres, quatre clans de chats sauvages se partagent la forêt. ... Rusty, jeune chat domestique, rêve de la vie sauvage, et décide un jour de quitter le domaine de ses maîtres et d aller dans la forêt alentour.', 0),
('2294756290', 9, 9, 9, 'Atlas d anatomie humaine', '2019-06-19', NULL, 'Depuis plus de 25 ans l Atlas d anatomie humaine Netter est l atlas de référence internationale. Le succès de cet ouvrage réside dans la qualité et la beauté du travail du Dr Frank H. Netter ainsi que du Dr Carlos A. G. Machado parmi les plus grands illustrateurs médicaux au monde. Ensemble ces deux médecins-artistes au talent unique mettent en évidence le corps humain du point de vue du clinicien.', 5),
('2366584032', 7, 7, 7, 'Le dictionnaire de ma vie - Eddy Mitchell', '2020-10-07', NULL, 'Eddy Mitchell commente ses soixante ans de carrière. Il explique pourquoi le rock a bouleversé son existence, évoque sa passion pour le cinéma et se confie également sur sa famille et ses amis.', 4),
('2723448126', 3, 3, 3, 'Berserk - Tome 1', '1989-10-01', NULL, 'Il porte une épée plus grande que lui. Il est muni dun bras artificiel en acier. Guts, le guerrier, est enrobée de feutrine noire... A son passage, déluge de sang et montagnes de cadavres lui font place. Un elfe du nom de Puck le suit après qu il ait tiré de mauvais draps. Opposant à la force de Guts son bagout, il est entraîné dans son univers d ultraviolence. Sur son chemin, des hordes de démons. Sa marque guidera-t-il Guts vers sa vengeance ?', 0),
('9780930289454', 2, 2, 2, 'Batman - The Killing Joke', '1988-03-01', NULL, 'Jusqu où doit-on aller pour faire perdre le contrôle à quelqu un ? Combien de misères doit-on infliger pour le rendre fou ? Voici les questions tordues posées par le Joker, qui veut montrer à Gotham qu un simple homme comme le commissaire Gordon n est qu à un pas, ou plutôt une mauvaise journée, de devenir complètement fou.', 0),
('9781537411545', 1, 24, 1, 'L appel de Cthulhu', '1928-02-15', NULL, 'Les documents retrouvés dans les biens hérités de son grand-oncle, mort dans de mystérieuses circonstances, vont mettre l anthropologue Francis W. Thurston sur la voie d une terrible vérité : tapis au fond de l océan, dans la cité de Rlyeh, l infâme Cthulhu sommeille en attendant d imposer son règne sur la terre, tandis que ses disciples, réunis autour d un culte secret, préparent son retour.', 0),
('9782361064235', 4, 4, 4, 'Les Solidarités', '2017-05-01', NULL, 'L idée de solidarité est ancienne, elle a une histoire, ne serait-ce qu en Occident : chrétienne, souvent caritative, puis républicaine. Aujourd’hui, elle est au cœur de bien des mobilisations collectives, auxquelles elle apporte le ciment nécessaire à leur efficacité. Mais elle est aussi partie prenante du corporatisme et permet à des sociétés secrètes de se perpétuer. C’est pourquoi toute approche de la solidarité doit envisager son ambivalence.', 0),
('9791021016330', 8, 8, 8, 'L Islam en 100 questions', '2015-10-01', NULL, 'Comment fut élaboré le Coran ? Quels en sont les thèmes majeurs ? Qu est-ce qui unit et sépare chrétiens et musulmans ? Quel est le statut de la femme dans l islam ? Que lui doit-on sur le plan scientifique ? Pourquoi fait-il peur en France ? Quand fut lancé le premier djihad ? Souvent l islam inquiète. Comme tout continent mal connu, il suscite l anxiété. Voilà pourquoi il était si important de demander au grand spécialiste Malek Chebel de revisiter son domaine de prédilection et de répondre av', 0),
('9791032703793', 3, 25, 3, 'Beastars Tome 1', '2016-09-08', NULL, 'A linstitut Cherryton, herbivores et carnivores vivent dans une harmonie orchestrée en détail. La consommation de viande est strictement interdite, et les dortoirs sont séparés en fonction des régimes alimentaires. Tout pourrait aller pour le mieux dans le meilleur des mondes... mais la culture ne peut étouffer tous les instincts. Quand le cadavre de l alpaga Tem est retrouvé déchiqueté sur le campus, les méfiances ancestrales refont surface ! Legoshi est la cible de toutes les suspicions.', 5),
('B004R06DC8', 5, 5, 5, 'Connaissance de la drogue', '1972-01-01', NULL, 'La drogue est une réalité constamment présente. Car, au-delà des groupes marginaux de toxicomanes invétérés, au-delà même de l usage des stupéfiants par une partie de la jeunesse, il y a la drogue socialement admise : l alcool, le tabac, les médicaments. Il y a sur-tout le fait que des états jadis considérés comme maladifs sont aujourd hui source d un certain orgueil : la fatigue, la dépression... Ce climat a une grande part de responsabilité dans la recherche de la drogue. Prise au sens large, ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `editor`
--

CREATE TABLE `editor` (
  `id_editor` int(11) NOT NULL,
  `name_editor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_editor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `name_genre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `name_genre`) VALUES
(10, 'Arts'),
(2, 'BD'),
(6, 'Jeunesse'),
(7, 'Litterature'),
(3, 'Manga'),
(8, 'Religion'),
(1, 'Roman'),
(9, 'Sciences'),
(5, 'Sciences Humaines'),
(4, 'Sciences Sociales');

-- --------------------------------------------------------

--
-- Structure de la table `like_list`
--

CREATE TABLE `like_list` (
  `id_user` bigint(20) NOT NULL,
  `ISBN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `like_list`
--

INSERT INTO `like_list` (`id_user`, `ISBN`) VALUES
(28, '2366584032'),
(28, '0747532699'),
(37, '2070615367'),
(37, '9780930289454');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id_review` bigint(20) NOT NULL,
  `ISBN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `opinion` varchar(4000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id_review`, `ISBN`, `id_user`, `score`, `opinion`, `like`, `dislike`) VALUES
(12, '2294756290', 28, 5, 'j&#039;apprecie beacoup ce livre il m&#039;&quot;a aid&eacute;', 0, 0),
(13, '9791032703793', 28, 5, 'fefefe', 0, 0),
(15, '0747532699', 28, 5, 'Ce livre a marqu&eacute; mon enfance !', 0, 0),
(16, '0747532699', 35, 4, 'Grand livre légendaire', 0, 0),
(17, '0747532699', 9, 4, 'Legendaire', 0, 0);

--
-- Déclencheurs `review`
--
DELIMITER $$
CREATE TRIGGER `update_books_rating` AFTER INSERT ON `review` FOR EACH ROW UPDATE book SET rate = (select avg(score) from review where review.ISBN LIKE NEW.ISBN) where book.ISBN = NEW.ISBN
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_book`
--

CREATE TABLE `ticket_book` (
  `id_ticket_book` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `ISBN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_book` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `synopsis_book` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_creation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ticket_book`
--

INSERT INTO `ticket_book` (`id_ticket_book`, `id_user`, `ISBN`, `title_book`, `synopsis_book`, `date_of_creation`, `author`) VALUES
(2, 28, '1456181616151', ' Berserk ', ' Un mec baleze ouais :) ', ' 2020 ', ' Miamoto kentura ');

-- --------------------------------------------------------

--
-- Structure de la table `ticket_contact`
--

CREATE TABLE `ticket_contact` (
  `id_ticket_contact` bigint(20) NOT NULL,
  `username` varchar(240) NOT NULL,
  `email` varchar(124) NOT NULL,
  `subject` varchar(240) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_report`
--

CREATE TABLE `ticket_report` (
  `id_ticket_report` bigint(20) NOT NULL,
  `id_user_send` bigint(20) NOT NULL,
  `ISBN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_review` bigint(20) DEFAULT NULL,
  `id_user_target` bigint(20) DEFAULT NULL,
  `title_report` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reason_report` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `name`) VALUES
(7, 'Biographie'),
(9, 'Biologie'),
(2, 'Comics'),
(6, 'Conte'),
(4, 'Droit'),
(1, 'Fantastique'),
(8, 'Islam'),
(10, 'Photographie'),
(11, 'Policier'),
(3, 'Seinen'),
(24, 'Shonen'),
(5, 'Sociologie');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(125) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_connexion` timestamp NOT NULL DEFAULT current_timestamp(),
  `biography_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_wishlist` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `date_of_creation`, `last_connexion`, `biography_user`, `id_wishlist`) VALUES
(9, 'admin', 'admin@admin.fr', '$2y$10$xS2JO4lBp6vhl/4/A1EImugM.//NduI/FwkXRkOX60yUZr13mZVni', '2020-12-26 16:24:15', '2020-12-26 16:24:15', NULL, 0),
(28, 'test', 'test@test', '$2y$10$k0exgM88aEOQf9w/EbDj0eCAtEOY7Nc8mdB42g.suRC4m2dm3n.CC', '2021-01-14 20:02:55', '2021-01-14 20:02:16', ' dada ', 0),
(35, 'Davidson', 'Davidson@Davidson.son', 'davidson93', '2021-01-22 12:51:13', '2021-01-22 12:51:13', NULL, 0),
(36, 'William', 'will@will', '$2y$10$iQOC6m1H9QElCzeF0hxc8O8t7V./dXgWmZVphF4VplARvtjZNP/zG', '2021-01-22 13:07:30', '2021-01-22 13:07:30', NULL, 0);

--
-- Déclencheurs `user`
--
DELIMITER $$
CREATE TRIGGER `create_wish_list` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO wish (id_user) VALUES (NEW.id_user)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `wish`
--

CREATE TABLE `wish` (
  `id_wishlist` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `ISBN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wish`
--

INSERT INTO `wish` (`id_wishlist`, `id_user`, `ISBN`) VALUES
(27, 9, NULL),
(28, 28, NULL),
(29, 35, NULL),
(30, 36, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`),
  ADD KEY `first_name_author` (`first_name_author`),
  ADD KEY `last_name_author` (`last_name_author`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `fk_genre_book` (`id_genre`),
  ADD KEY `fk_author_book` (`id_author`),
  ADD KEY `ISBN_2` (`ISBN`),
  ADD KEY `fk_type_book` (`id_type`);

--
-- Index pour la table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id_editor`),
  ADD UNIQUE KEY `name_editor` (`name_editor`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`),
  ADD UNIQUE KEY `name_genre` (`name_genre`),
  ADD KEY `name_genre_2` (`name_genre`);

--
-- Index pour la table `like_list`
--
ALTER TABLE `like_list`
  ADD KEY `fk_id_user_like_list` (`id_user`),
  ADD KEY `fk_ISBN_like_list` (`ISBN`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `fk_ISBN_review` (`ISBN`),
  ADD KEY `fk_iduser_review` (`id_user`),
  ADD KEY `like` (`like`),
  ADD KEY `score` (`score`);

--
-- Index pour la table `ticket_book`
--
ALTER TABLE `ticket_book`
  ADD PRIMARY KEY (`id_ticket_book`),
  ADD KEY `fk_user_ticketlivre` (`id_user`);

--
-- Index pour la table `ticket_contact`
--
ALTER TABLE `ticket_contact`
  ADD PRIMARY KEY (`id_ticket_contact`);

--
-- Index pour la table `ticket_report`
--
ALTER TABLE `ticket_report`
  ADD PRIMARY KEY (`id_ticket_report`),
  ADD KEY `fk_isbn_ticketreport` (`ISBN`),
  ADD KEY `fk_review_ticketreport` (`id_review`),
  ADD KEY `fk_usersend_ticketreport` (`id_user_send`),
  ADD KEY `fk_usertarget_ticketreport` (`id_user_target`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_wishlist_user` (`id_wishlist`);

--
-- Index pour la table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `fk_user_wishlist` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `editor`
--
ALTER TABLE `editor`
  MODIFY `id_editor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `ticket_book`
--
ALTER TABLE `ticket_book`
  MODIFY `id_ticket_book` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ticket_contact`
--
ALTER TABLE `ticket_contact`
  MODIFY `id_ticket_contact` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `ticket_report`
--
ALTER TABLE `ticket_report`
  MODIFY `id_ticket_report` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `wish`
--
ALTER TABLE `wish`
  MODIFY `id_wishlist` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_author_book` FOREIGN KEY (`id_author`) REFERENCES `author` (`id_author`),
  ADD CONSTRAINT `fk_genre_book` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`),
  ADD CONSTRAINT `fk_type_book` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_ISBN_review` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_iduser_review` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ticket_book`
--
ALTER TABLE `ticket_book`
  ADD CONSTRAINT `fk_user_ticketlivre` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `ticket_report`
--
ALTER TABLE `ticket_report`
  ADD CONSTRAINT `fk_isbn_ticketreport` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`),
  ADD CONSTRAINT `fk_review_ticketreport` FOREIGN KEY (`id_review`) REFERENCES `review` (`id_review`),
  ADD CONSTRAINT `fk_usersend_ticketreport` FOREIGN KEY (`id_user_send`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_usertarget_ticketreport` FOREIGN KEY (`id_user_target`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `wish`
--
ALTER TABLE `wish`
  ADD CONSTRAINT `fk_user_wishlist` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
