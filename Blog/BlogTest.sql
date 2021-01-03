-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 03 jan. 2021 à 18:15
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `BlogTest`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `Titre` varchar(150) DEFAULT NULL,
  `Auteur` varchar(60) DEFAULT NULL,
  `Description_courte` text DEFAULT NULL,
  `Description_longue` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `Titre`, `Auteur`, `Description_courte`, `Description_longue`) VALUES
(81, 'Lessons from Tesla’s Approach to Innovation', '     Nathan Furr and Jeff Dyer ', '  Tesla has shifted the auto industry toward electric vehicles, achieved consistently growing revenues, and at the start of 2020 was the highest performing automaker, in terms of total return, sales growth and long-term shareholder value.', '<p>Few companies have attracted as much scorn and adoration as Tesla. When Tesla launches a product like the Cybertruck, the reception tends to be divisive: critics see it as further evidence that founder Elon Musk is out of touch and doomed to fail, while supporters buy in&nbsp;&mdash; within a month Tesla received <a href=\"https://www.cnbc.com/2019/11/23/elon-musk-says-tesla-has-received-146000-orders-for-its-cybertruck.html\">200,000 preorders</a> for the new vehicle. Compare that to the Ford-150, the world&rsquo;s best-selling car in 2018, which sold just over <a href=\"https://www.best-selling-cars.com/global/2018-full-year-international-global-top-selling-car-models/\">1 million vehicles</a> that year.</p>\r\n<p>Disagreements aside, there is no question that the company has shifted the auto industry toward electric vehicles and achieved consistently growing revenues (<a href=\"https://www.theverge.com/2020/1/29/21113987/tesla-q4-2019-earnings-results-profit-revenue-model-3\">passing $20 billion in 2019</a>). At the start of 2020, Tesla was the highest performing automaker in terms of <a href=\"https://www.bloomberg.com/opinion/articles/2019-12-23/tesla-is-decade-s-best-performing-automaker\">total return, sales growth and long-term shareholder value</a>. Surely, there is a method to what seems like madness to so many.</p>\r\n<p>As technology and innovation scholars, we&rsquo;ve studied how innovators commercialize new technologies and we&rsquo;ve interviewed Elon Musk, his co-founder J.B. Straubel, and other important members of the team. What we&rsquo;ve found is that beneath the turbulent surface, Tesla&rsquo;s innovation strategy&nbsp;&mdash; which focuses on transforming the auto industry as a whole&nbsp;&mdash; offers enduring lessons for any innovator, especially in terms of how to win support for an idea and how to bring new technologies to market.</p>\r\n<p>To understand Tesla&rsquo;s strategy, one must first separate its two primary pillars: headline-grabbing moves like launching the Cybertruck or the Roadster 2.0 (which the company claims will accelerate <a href=\"https://www.caranddriver.com/features/a20733865/2021-tesla-roadster-elon-promises-itll-be-the-fastest-production-car-in-the-world/\">faster than any production car ever made</a>) and the big bets it is making on its core vehicles, the models S, X, 3, and Y. These efforts aim to achieve different things &mdash; winning the resources to commercialize vs. actually commercializing the idea &mdash; but they come together to achieve a central goal: bring a new innovation to market.</p>\r\n<p>Let&rsquo;s start with the first part of the strategy. In our view, efforts like the Cybertruck aren&rsquo;t really about making money; they are about getting attention and proving that Tesla is one of the world&rsquo;s most innovative companies, specifically for the purpose of building Tesla&rsquo;s ability to win support from stakeholders&nbsp;&mdash; what we call <em>innovation capital</em>.</p>\r\n<p>In our work reviewing academic research, interviewing over 100 innovators, and conducting both quantitative and qualitative analysis of innovative companies, we&rsquo;ve explored how innovators build up their <a href=\"https://hbr.org/product/innovation-capital-how-to-compete-and-win-like-the-world-s-most-innovative-leaders/10222?sku=10222E-KND-ENG\">innovation capital</a>. Innovation capital consists of four factors:</p>\r\n<ol>\r\n<li>Who you are (innovation-specific human capital) &mdash; your capacity for forward thinking, creative problem-solving, and persuasion</li>\r\n<li>Who you know&nbsp;(innovation-specific social capital) &mdash; your social connections with people who have valuable resources for innovation</li>\r\n<li>What you&rsquo;ve done (innovation-specific reputation capital) &mdash; your track record and reputation for innovation</li>\r\n<li>The things you do to generate attention and credibility for yourself and your ideas (what we call impression amplifiers). Politicians with political capital can get others to join them in pursuing their objectives; in a similar fashion, business leaders with innovation capital can attract the resources needed for innovation to flourish.</li>\r\n</ol>\r\n<p>Based on our case study of <a href=\"https://cases.insead.edu/publishing/case?code=34334\">Tesla</a>, we&rsquo;ve observed that Elon Musk is a master of building and using innovation capital to win support for his ideas. Not only does he leverage his past success at Paypal and Space X to win support for future projects, he also uses what we call &ldquo;impression amplifiers&rdquo; to get stakeholders on board. For example, when Musk stands on stage and reveals the Cybertruck, he doesn&rsquo;t just talk about the new idea, he <em>materializes</em> it, putting it into physical form to convince skeptics (he also did this when he parked a Space X rocket in front of the National Air and Space Museum). He also <em>broadcasts</em> the idea through big media launches like the demo for the Cybertruck, which gets third parties talking about the company and generating buzz.</p>\r\n<p>Similarly, when Musk <a href=\"https://twitter.com/elonmusk/status/1005577738332172289?lang=en\">tweets</a> to his 29 million followers that a &ldquo;Roadster will include ~10 small rocket thrusters,&rdquo; he probably isn&rsquo;t serious when he says that &ldquo;Maybe they will even allow a Tesla to fly.&rdquo; But he is creating a positive impression for Tesla by leveraging another impression amplifier: <em>comparing</em>, or drawing a connection between his innovation and some other successful one. This comparison creates an impression between the technical superiority of a Tesla and &hellip; rocket science, literally. These techniques aim to build Musk and Tesla&rsquo;s innovation capital so they can continue to win support from investors, customers, and employees to keep Tesla operating.</p>\r\n<p>What about the other part of Tesla&rsquo;s strategy: the existing vehicles&nbsp;&mdash; the model S, 3, X and Y&nbsp;&mdash; which form the core products and require the most investment? These big bets aim to transform an industry, and they require paying attention not just to the product, but to the entire product ecosystem.</p>\r\n<p>What makes this part of the strategy truly unique is not just that Tesla produces electric vehicles, but that it introduced a new hardware and software architecture (the way you put the car together). For example, a Tesla has more software than the average vehicle and it is integrated around a single central software architecture. Although most gas-powered cars have software too, they typically have less software and <a href=\"https://www.mckinsey.com/industries/automotive-and-assembly/our-insights/rethinking-car-software-and-electronics-architecture\">operate on a different architecture</a> making it more challenging to imitate Tesla&rsquo;s ability to update software and optimize vehicle performance.</p>\r\n<p>Tesla&rsquo;s hardware architecture &mdash; a flat pack of batteries at the base, two electric engines (front and rear), no transmission, etc. &mdash;also gives it an advantage over competing electric vehicles built on traditional vehicle architectures, such as a lower center of gravity, <a href=\"https://www.washingtonpost.com/technology/2020/01/10/tesla-battery-range/\">greater energy density</a>, and more efficient battery management. This means that pound-for-pound, Tesla tends to beat out competitors who try to <a href=\"https://www.autonews.com/manufacturing/ev-architecture-divides-automakers\">leverage parts of the old internal combustion vehicle architecture</a>, for example, by putting batteries in the trunk rather than in a flat pack at the bottom.</p>\r\n<div class=\"promo--right\">\r\n<div class=\"advertising\">\r\n<div id=\"DFP_IC_pos3\" data-google-query-id=\"CMr13pacgO4CFSG7UQodKLcHGA\">\r\n<div id=\"google_ads_iframe_/34363400/HBR_300x600_1__container__\" style=\"border: 0pt none;\"><iframe id=\"google_ads_iframe_/34363400/HBR_300x600_1\" style=\"border: 0px none; vertical-align: bottom;\" title=\"3rd party ad content\" name=\"google_ads_iframe_/34363400/HBR_300x600_1\" width=\"300\" height=\"600\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" data-google-container-id=\"4\" data-load-complete=\"true\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>On the surface, building a new architecture may seem an easy strategy to imitate, but <a href=\"https://www.jstor.org/stable/2393549?casa_token=GCv6DTKVpTMAAAAA:Un1lHO0RjCoNwNopoOGOLx_JXGQ43Q_CDs2jYld9EIhXtJBtcHZV4kOvOx_w8AhWxph67CjbX2LEL1Brxlysz19FUSnpEwh7ktCP6wbvA2ALNRABsdaq\">prior research</a> shows it can be very difficult: it can take time and effort for incumbents since it often requires abandoning old ways of doing things and developing new capabilities. In the words of a senior auto executive I interviewed, &ldquo;It&rsquo;s just hard for us because historically we have been great mechanical engineers, not great software engineers. But we need to become software engineers.&rdquo;</p>\r\n<p>Tesla&rsquo;s ecosystem strategy also considers the level of individual components for its products. Why? We know from <a href=\"https://books.google.com/books?hl=en&amp;lr=&amp;id=oaBOuo4mId8C&amp;oi=fnd&amp;pg=PP13&amp;dq=baldwin+and+clark+modularity&amp;ots=nE_7epqbBS&amp;sig=cpyfeZISp7_iWhktsuEvrPUlZj4\">past research</a> that the profits in an industry tend to flow to the bottlenecks&nbsp;&mdash; the components that limit the performance of the system. In the case of electric cars, even though batteries are made of commodity materials, because their power capacity limits the performance of most applications, especially cars, they are a bottleneck to the performance of the whole system. By investing in batteries &mdash;producing them at scale and in better ways &mdash; Tesla is betting that they will control the bottleneck, and thus the profit center, for the future of the industry.</p>\r\n<p>Tesla&rsquo;s strategy also accounts for the system level: the entire set of complements needed for a consumer to use its product. This is why Tesla has built out a charging network for its cars across the country. Acting early enabled Tesla to be the only electric car that could drive long distances because there was an infrastructure in place for charging. In the future, this advantage may erode if other auto makers build charging networks and piggyback off their existing dealership networks to potentially offer more convenient service. But for now, Tesla has the advantage and looks to be extending it by creating <a href=\"https://www.theverge.com/2019/12/19/21030330/tesla-evgo-ev-charging-station-us-ccs-chademo\">inter-operability with new networks</a> like EVgo.</p>\r\n<p>Regardless of your views of Tesla&rsquo;s future success, the company has developed a fascinating multi-pronged strategy for fundamentally changing an industry. The core strategy has unique elements at each level of the ecosystem: overturning the core product architecture, positioning themselves in key bottleneck components, and resolving system-level limitations that slow the adoption of the technology. At the same time, they have applied an effective approach to build their innovation capital so they can win the resources and support to execute on their vision.&nbsp;Investors are seeing the potential of Tesla&rsquo;s future as the company&rsquo;s market value now exceeds the combined market value of GM, Ford and FiatChrysler. Innovators should take note.</p>'),
(82, 'Python vs Java: What’s The Difference?', ' Walker Rowe, Jonathan Johnson ', 'Python has become more popular than Java.', '<h2>Python overview</h2>\r\n<p><img class=\" wp-image-19453 alignleft\" src=\"https://blogs.bmc.com/wp-content/uploads/2018/12/key-1-300x104.png\" sizes=\"(max-width: 150px) 100vw, 150px\" srcset=\"//blogs.bmc.com/wp-content/uploads/2018/12/key-1-300x104.png 300w, //blogs.bmc.com/wp-content/uploads/2018/12/key-1-24x8.png 24w, //blogs.bmc.com/wp-content/uploads/2018/12/key-1-36x12.png 36w, //blogs.bmc.com/wp-content/uploads/2018/12/key-1-48x17.png 48w, //blogs.bmc.com/wp-content/uploads/2018/12/key-1.png 426w\" alt=\"\" width=\"150\" height=\"52\" loading=\"lazy\" />Python was first released in 1991. It is an interpreted, high-level, general purpose programming language. It is Object-Oriented.</p>\r\n<p>Designed by Guido van Rossum, Python actually has a design philosophy centered around code readability. The Python community will grade each other&rsquo;s code based on how Pythonic the code is.</p>\r\n<h3>When to use Python</h3>\r\n<p>Python&rsquo;s libraries allow a programmer to get started quickly. Rarely will they need to start from scratch. If a programmer wishes to jump into <a href=\"https://www.bmc.com/blogs/categories/machine-learning-big-data/\" target=\"_self\">machine learning</a>, there&rsquo;s a library for that. If they wish to create a pretty chart, there&rsquo;s a library for that. If they wish to have a progress bar shown in their CLI, there&rsquo;s a library for that.</p>\r\n<p>Generally, Python is the Lego of the programming languages; find a box with instructions on how to use it and get to work. There is little that needs to be started from scratch.</p>\r\n<p>Because of its readability, Python is great for:</p>\r\n<ol>\r\n<li>New programmers</li>\r\n<li>Getting ideas down fast</li>\r\n<li>Sharing code with others</li>\r\n</ol>\r\n<h2>Java overview</h2>\r\n<p>Java is old. Java is a general-purpose programming language that utilizes classes and, like Python, is object-oriented.</p>\r\n<p>Java was developed by James Gosling at Sun Microsystems, released in 1995 as a part of Sun Microsystem&rsquo;s Java Platform. Java transformed the web experience from simple text pages to pages with video and animation.</p>\r\n<h3><img class=\"wp-image-19454 alignleft\" src=\"https://blogs.bmc.com/wp-content/uploads/2018/12/key-2.png\" sizes=\"(max-width: 91px) 100vw, 91px\" srcset=\"//blogs.bmc.com/wp-content/uploads/2018/12/key-2.png 141w, //blogs.bmc.com/wp-content/uploads/2018/12/key-2-13x24.png 13w, //blogs.bmc.com/wp-content/uploads/2018/12/key-2-20x36.png 20w, //blogs.bmc.com/wp-content/uploads/2018/12/key-2-26x48.png 26w\" alt=\"\" width=\"91\" height=\"167\" loading=\"lazy\" />When to use Java</h3>\r\n<p>Java is designed to run anywhere. It uses its <a class=\"external\" href=\"https://en.wikipedia.org/wiki/Java_virtual_machine\" target=\"_blank\" rel=\"noopener\">Java Virtual Machine (JVM)</a> to interpret compiled code. The JVM acts as its own interpreter and error detector.</p>\r\n<p>With its ties to Sun Microsystems, Java was the most widely used server-side language. Though no longer the case, Java reigned for a long while and garnered a large community, so it continues to have a lot of support.</p>\r\n<p>Programming in Java can be easy because Java has many libraries built on top of it, making it easy to find code already written for a specific purpose.</p>\r\n<h2>Who uses Python &amp; Java?</h2>\r\n<p>Python is often used with new programmers or junior developers entering a <a href=\"https://www.bmc.com/blogs/data-engineer-vs-data-scientist/\" target=\"_self\">data science role</a>. The big <a href=\"https://www.bmc.com/blogs/machine-learning-ai-frameworks/\" target=\"_self\">machine learning libraries</a>, TensorFlow and pyTorch, are both written in Python.</p>\r\n<p>Python has excellent data processing libraries with <a href=\"https://www.bmc.com/blogs/pandas-basics/\" target=\"_self\">Pandas</a> and Dask, and good <a href=\"https://www.bmc.com/blogs/data-visualization/\" target=\"_self\">data visualization capabilities</a> with packages such as Matplotlib and Seaborn.</p>\r\n<p>Java is used a lot for web development. It is more common among senior-level programmers. It allows for <a href=\"https://www.bmc.com/blogs/asynchronous-programming/\" target=\"_self\">asynchronous programming</a>, and has a decent <a class=\"external\" href=\"https://analyticsindiamag.com/7-top-nlp-libraries-java-developers-should-know-in-2019/\" target=\"_blank\" rel=\"noopener\">Natural Language Processing community</a>.</p>\r\n<p>Both languages can be used in API interactions and for machine learning. Java is better developed for building web applications. Python&rsquo;s Flask library is still only able to build the basics to a Python-based UI but is great for creating a Python back-end with an API endpoint.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie`) VALUES
(15, 'Computer science'),
(16, 'Tesla');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `nickName` varchar(100) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `id_Article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comments`, `nickName`, `commentaire`, `id_Article`) VALUES
(25, 'dsqd', 'dsq', 10),
(26, 'James ', 'dqsdQSdq\r\n', 10),
(27, 'sqd', 'dsq', 8),
(28, 'dsq', 'dsq', 10),
(29, 'sqdf', 'qfsd', 10),
(30, '12', '21', 10),
(31, NULL, NULL, NULL),
(32, 'za', 'za', 10),
(33, '', 'ezae', 10),
(34, 'az', 'ezareza', 10),
(35, 'aaz', '', 10),
(36, 'aze', 'ezae', 10),
(37, 'sq', 'sdq', 67),
(38, 'é&amp;', 'œé&amp;', 66),
(39, 'eza', 'zaereza', 66),
(40, 'ZA', 'EZAZ', 72),
(41, 'xw&lt;', 'cq', 72),
(42, 'aezr', 'errezar', 72);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `image`) VALUES
(106, '5ff1f447c2a482.62102328.jpeg'),
(107, '5ff1f6837399b5.79287162.png');

-- --------------------------------------------------------

--
-- Structure de la table `jointure_article_categorie`
--

CREATE TABLE `jointure_article_categorie` (
  `id_categorie` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jointure_article_categorie`
--

INSERT INTO `jointure_article_categorie` (`id_categorie`, `id_article`) VALUES
(15, 82),
(16, 81);

-- --------------------------------------------------------

--
-- Structure de la table `jointure_image_article`
--

CREATE TABLE `jointure_image_article` (
  `id_image` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jointure_image_article`
--

INSERT INTO `jointure_image_article` (`id_image`, `id_article`) VALUES
(106, 82),
(107, 81);

-- --------------------------------------------------------

--
-- Structure de la table `userBlog`
--

CREATE TABLE `userBlog` (
  `id_user` int(11) NOT NULL,
  `user` varchar(60) DEFAULT NULL,
  `user_mdp` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userBlog`
--

INSERT INTO `userBlog` (`id_user`, `user`, `user_mdp`) VALUES
(1, 'AZ', 'az'),
(2, 'AZsqd', 'dsq'),
(3, 'AZsqd', 'dqsd'),
(4, 'AZ', 'az'),
(5, 'AZ', 'az'),
(6, 'AZ', 'az'),
(7, 'AZZs', 'sq'),
(8, 'Mersad', 'Ura'),
(9, 'za', 'eza'),
(10, 'Mersada', 'az'),
(11, 'qsd', 'dsq'),
(12, NULL, NULL),
(13, 'aze', 'aze'),
(14, 'azeaze', 'ezaezae'),
(15, 'azazaz', 'azazaz'),
(16, 'llll', 'llll'),
(17, 'OPOPOPOP', 'OPOPOPOP'),
(18, 'passwordRegister', 'passwordRegister'),
(19, 'HULAHU', NULL),
(20, 'HULAHU2', '$2y$10$GOPs0WOWsgq0sYRRIqJLN.NQ/1AI8uClDD/TtCXhRvrwrajwn/xBW'),
(21, 'HEY', '$2y$10$I83zRwRff9BEbXpuNWGW1.GlXyewj18mO5QUW5mOVyGsYPJUGsuDq'),
(22, 'azezae', '$2y$10$oEc6/t3Mt0UeMCGe/MUNQuj.HY0eGwGFFdGuEsRY3ZyHYaqtJcM7K'),
(23, 'Mersad1', '$2y$10$zFbXgqzPtvDGpQGDkwlOE.ZvCC5VWggHkneWH1nvslERgEyQw4Oju'),
(24, 'AZAAZZAZAZArezarezatreza', '$2y$10$xedHhPCYBHZZxLp5tzn7R.1P3.5BQgkRIZjqA2k/YFGQ706zwsgo.'),
(25, 'AAAAA', '$2y$10$ki0Gvbentxs4Ec2r3JkzseflFkZiAQm0QrT6SjN7udvIkMueDnnPe'),
(26, 'AAZZ', '$2y$10$/N/w0Au4/9AGQ91Yoe24OuXVh91iJNrxofhiIuc/I4nQzBWHYwzQq'),
(27, 'AZER', '$2y$10$1o.BPR38oeWzW7LvCEmGzOdE2Xdv8y.o622IOXQyRXLZc94tbpR6O');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `jointure_article_categorie`
--
ALTER TABLE `jointure_article_categorie`
  ADD PRIMARY KEY (`id_categorie`,`id_article`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `jointure_image_article`
--
ALTER TABLE `jointure_image_article`
  ADD PRIMARY KEY (`id_image`,`id_article`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `userBlog`
--
ALTER TABLE `userBlog`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `userBlog`
--
ALTER TABLE `userBlog`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jointure_article_categorie`
--
ALTER TABLE `jointure_article_categorie`
  ADD CONSTRAINT `jointure_article_categorie_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `jointure_article_categorie_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `jointure_image_article`
--
ALTER TABLE `jointure_image_article`
  ADD CONSTRAINT `jointure_image_article_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`),
  ADD CONSTRAINT `jointure_image_article_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
