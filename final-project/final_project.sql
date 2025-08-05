-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Aug 05, 2025 at 07:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Est molestiae neque officia exercitationem.', 'Sint ullam similique id iure id cupiditate blanditiis enim. Sequi sequi et unde omnis nemo. Natus vitae non ut alias. Rerum id ut et est dignissimos.\n\nCumque ut reiciendis qui ipsum. Et error quia accusantium earum. Pariatur aut voluptates voluptate. Ullam odio non qui qui voluptas dicta.\n\nSint quis sit consequatur exercitationem. Quibusdam aliquam esse quis iste aperiam placeat voluptas. Sint nulla aut quia.', 11, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(2, 'Consequuntur atque quia aperiam dolor est delectus.', 'Quia totam velit repellat libero ut repellat magnam. Eum vitae error atque distinctio mollitia. Illo fugiat temporibus delectus cupiditate temporibus quia cum est.\n\nQui cum quasi molestiae accusamus qui dolores. Dolor et reiciendis voluptatem sapiente molestiae non. Expedita deleniti ut dolorum est. Commodi totam hic excepturi praesentium adipisci. Nesciunt consectetur et incidunt est.\n\nVeritatis aliquam voluptate repellat ab. Eum vel est nisi ratione est eligendi. Ab et quidem nihil dolores. Temporibus doloribus iusto cum dolorem dolorum et rerum veniam.', 31, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(3, 'Soluta ut nostrum officia sequi velit accusamus nulla.', 'Quibusdam iure vero delectus neque. Vel quia eveniet quod eius tempore quae aut soluta. Numquam doloribus sit amet harum voluptatem rem a. A quidem odio ad est perferendis vitae.\n\nTemporibus placeat incidunt excepturi omnis et iste est. Quo quia et laudantium et ea consectetur. Incidunt voluptas qui consequuntur porro et atque hic laudantium. Rem aut qui quam est non.\n\nEos aut eos corrupti et maxime. Corporis ducimus voluptas dolorum voluptate accusamus rerum nam. Quo voluptatem odio nobis quis.', 16, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(4, 'Omnis dolor quia est consequatur earum non et.', 'Aut qui cumque assumenda. Veritatis voluptate eligendi consequatur consequatur et possimus rem. Vitae exercitationem tempora aut eveniet.\n\nPerspiciatis unde iste odit itaque. Aspernatur a et est eveniet praesentium perferendis. Sit ipsam est fuga excepturi. Omnis id ut qui et.\n\nEst praesentium et veniam libero debitis. Perferendis voluptatem ipsum laboriosam est ut.', 4, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(5, 'Qui mollitia doloribus voluptas quidem.', 'Aut tempora sunt molestias voluptates voluptas dolorem vero. Explicabo a excepturi voluptates sit expedita aliquid corporis ut. Eos unde officia accusamus facere laboriosam deleniti tenetur molestiae.\n\nMaxime corrupti laborum nulla facere sint. Quidem aut exercitationem ut qui sint quod. Voluptas magni magni non voluptas. Officiis omnis reiciendis modi non.\n\nVeritatis a nulla rerum deserunt quia. Sit in eaque quod quasi iste laudantium. Ullam maiores aut aut consectetur sed eligendi. Doloribus omnis autem autem et corrupti. Unde amet ipsam voluptatem voluptas et omnis sunt.', 13, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(6, 'Fugit et exercitationem quis necessitatibus natus id.', 'Expedita culpa in qui nihil aut et sint. Eveniet facere totam quia omnis accusantium. Harum perspiciatis in et necessitatibus aut quia.\n\nQuaerat illum id iure illo est accusamus eveniet. Porro natus pariatur quo explicabo voluptate quis aut. Possimus quia ducimus asperiores.\n\nVel sit sit nostrum iusto. Magni officia quo necessitatibus esse veniam delectus. Saepe quisquam dolorem voluptatem ut molestiae. Dolores iusto et nesciunt aut ut aut est.', 12, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(7, 'Recusandae quia velit iusto quam.', 'Ad qui voluptatem ea repellendus delectus. Quia qui voluptas et mollitia rerum saepe. Id possimus eum molestiae quis totam qui.\n\nFacilis libero et suscipit sunt vel reiciendis deserunt. Totam magnam et dolores. Tempore esse et fugit in beatae facilis.\n\nNon dolor exercitationem dolorem sed ut. Officiis aut ipsum et porro vero totam fugit asperiores.', 3, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(8, 'Qui officia corrupti excepturi corrupti ut esse quasi.', 'Quo vero in quae a iusto aut. Ut et sint nam incidunt accusamus tempore qui. Eum aspernatur velit asperiores totam est quis. Inventore labore aspernatur aperiam est.\n\nConsequatur unde et in et. Eveniet nostrum omnis in ratione. Eaque tenetur molestiae corrupti perspiciatis et magni quidem.\n\nEligendi neque vero culpa dolore iusto dolorum libero illo. Esse distinctio voluptas qui est est dolore et velit. Et nemo perspiciatis alias in non. Unde pariatur velit quas voluptas consequuntur perspiciatis.', 19, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(9, 'Temporibus explicabo praesentium quia sapiente molestiae et porro.', 'Dolore et itaque quod. Facere totam dicta adipisci dolorum rerum itaque. Illo corrupti quam sit. Dolore harum est quo ea voluptas consequatur ipsam.\n\nExcepturi perspiciatis ipsam deleniti dolorem. Quia earum sunt iste et facilis aperiam nihil. Sunt enim sed labore placeat esse sapiente. Iure sapiente est quasi ipsum ab sed quaerat perspiciatis.\n\nOfficiis in omnis perferendis sunt aperiam. Necessitatibus delectus corporis ipsam blanditiis rerum consequatur rerum. Dolorum sequi pariatur velit quia velit aspernatur excepturi. Provident et sunt officiis impedit et culpa.', 19, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(11, 'Consequatur soluta sunt ratione ut totam.', 'Aut provident quo cum corrupti fuga quis provident placeat. Quo in aut qui unde aut aperiam iusto.\n\nNumquam corporis error minus est eum facere magni. Maxime ipsam asperiores laudantium qui magni vel autem. Molestias officia aspernatur deserunt asperiores et. Asperiores vel ipsa fugit nemo voluptatem facere.\n\nNumquam pariatur fuga quisquam voluptatem atque quaerat porro. Eos alias et veniam voluptas eaque libero corporis omnis. Aut repudiandae eius quibusdam eius harum voluptas vero. Quidem a rerum molestias quas magnam ut repellendus.', 19, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(12, 'Ipsam quidem voluptas esse error.', 'Et deserunt voluptatem ea velit quia iusto sed. Voluptatem itaque et et magnam inventore vitae. Harum sed qui asperiores ratione dolor aspernatur. Animi ut ut aspernatur eum exercitationem qui quod.\n\nQuibusdam repellat sit cumque facilis earum dignissimos doloribus. Molestias consequuntur ut eaque voluptas cupiditate eveniet commodi. Quis natus quis nam quasi esse quo qui. Omnis vel et totam nam consequatur. Ullam et ipsum in et omnis.\n\nSed vel voluptatem eius sed doloribus. Iure itaque eum nesciunt eos facilis aut minus.', 26, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(13, 'Assumenda quaerat quo ut ut non.', 'Provident laudantium assumenda et enim dolorem. Harum nam neque eveniet. Corrupti aut laborum maiores porro saepe sit. Eius voluptatem esse nihil voluptatem.\n\nSunt asperiores et culpa rerum dolorum odio ut. Accusamus quia id magni architecto perferendis. Molestias veniam illo sit excepturi et molestiae.\n\nRecusandae debitis voluptatibus aut dolorum molestiae. Debitis at iste error voluptatem quia quae qui. Veniam voluptatem quis optio sit et saepe minus.', 24, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(14, 'Ut sit molestiae velit consequatur.', 'Facilis non et itaque eum sunt earum. Aut omnis perferendis rem accusantium et vel. Mollitia voluptas velit quia at amet totam molestiae non. Omnis eaque veritatis libero quas praesentium eius.\n\nEarum rerum perferendis totam eaque cupiditate et modi. Quasi omnis ut eos odit error dicta.\n\nSaepe corporis accusantium non architecto atque est. Ea ex dolorem quam ratione.', 25, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(15, 'Quaerat voluptate iusto consectetur est explicabo quos in quisquam.', 'Eum repellendus beatae hic distinctio non omnis voluptatem. Distinctio illum provident aut impedit consectetur impedit illum quos. Ea tempora voluptatem est qui quia. Placeat minus perferendis illo laudantium voluptatum officia est magni. Doloribus consequatur eum autem non aspernatur.\n\nIn nulla explicabo possimus aut assumenda. Consequatur culpa sint veniam. Vel inventore aut sequi nihil consequuntur maiores minus distinctio.\n\nFugit rerum fuga adipisci odio. Incidunt voluptatem iusto distinctio. Amet repellendus tenetur adipisci libero ut.', 30, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(16, 'Nostrum quis quod consectetur deserunt.', 'Ut debitis aliquam ducimus atque. Rerum rerum dolores aliquam. Praesentium distinctio ut non voluptatem rerum.\n\nExplicabo laboriosam iure id vel. Eius sit et eos labore. Ipsum dolorem ut sequi deleniti ut. Quae provident est aut quidem alias nemo.\n\nAtque quam ab soluta. Sint omnis aliquam dolores aut. Dolor quod et quasi sunt.', 7, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(17, 'Eligendi rerum officiis modi laborum.', 'Aut officiis blanditiis officia rem cum. Dignissimos voluptatem quae voluptatibus sequi occaecati et assumenda. Voluptas neque quas ratione odio qui dolores. Magni voluptas qui accusantium rerum voluptas.\n\nTemporibus molestiae perspiciatis officia vero nostrum omnis voluptates. Dolore iure recusandae magni sit sed unde ea odit. Aut earum molestiae rerum reiciendis quis. Dolor fugiat amet libero magni.\n\nVoluptates soluta beatae tenetur cumque quia rerum. Eius vero ipsum accusamus laudantium labore deleniti dolores. Illo et earum aut vitae vel animi.', 11, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(18, 'Aliquid aspernatur officiis libero ea.', 'Omnis et odio et aut est illo. Similique aliquid sit mollitia quis. Tempora reprehenderit ut explicabo deleniti qui et dolorem. Est reiciendis incidunt accusamus fugiat quas.\n\nDistinctio repellat in quo possimus facilis saepe eligendi. Odio qui ut ducimus quae nostrum sequi. Mollitia est sint non saepe. Non ut tenetur vel ea officia.\n\nEum facilis expedita voluptates ea est reprehenderit. Est inventore consequuntur maiores. Et rem laudantium sint architecto possimus atque.', 7, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(19, 'Consequatur tenetur soluta ut aut enim et.', 'Quibusdam voluptatem accusamus asperiores beatae eligendi delectus. Nisi placeat cumque repudiandae est aut consequatur.\n\nAnimi pariatur deleniti deserunt. Dolore accusamus impedit veritatis. Cum aspernatur provident debitis omnis et sed laudantium fugiat.\n\nEligendi et qui cupiditate neque quo recusandae maiores quam. Quam voluptatum tempora rem unde atque quos. Dignissimos eveniet odit nulla laudantium laboriosam repellat aut.', 4, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(20, 'Earum beatae dignissimos repellendus unde nam.', 'Delectus et pariatur facere ipsum velit impedit. Veritatis non sint ut. Magni asperiores ut perferendis omnis rerum. Voluptatibus est officia libero sed a dolore ipsam.\n\nVoluptatem voluptate eum saepe eaque aliquam. Non aut accusantium commodi. Sequi non occaecati qui in aliquid quas.\n\nNesciunt velit rem repellendus. Quo totam dicta id suscipit quo reiciendis. Eos quibusdam totam culpa ut ut. Rerum id unde ut.', 11, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(21, 'Iste ut deserunt in consequuntur ea iste.', 'Perferendis adipisci omnis vel ducimus est. Corrupti necessitatibus tempora cupiditate occaecati. Assumenda repudiandae molestiae et. Qui ex consequatur debitis maxime laboriosam. Amet deleniti soluta libero.\n\nAssumenda quia alias officiis molestias nulla nesciunt aut eos. Ut voluptatum praesentium in impedit.\n\nAt perspiciatis cum qui voluptas quas nam nisi esse. Eum quidem eligendi non adipisci omnis. Consequuntur est ipsum quod nihil voluptas a maiores. Veritatis velit rerum voluptas aut. Enim ut molestiae qui inventore.', 25, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(22, 'Voluptas voluptates magnam qui officia non pariatur.', 'Quo ea aut aperiam error. Est dignissimos commodi autem beatae quis assumenda. Sint eius et aut consequatur vero itaque qui. Et qui inventore atque recusandae.\n\nEum non nostrum rerum praesentium exercitationem et illum. Et ullam sit debitis in quis. Sint cupiditate repellendus perferendis corporis aperiam. Nostrum atque ut eligendi voluptas.\n\nSed praesentium ut eveniet atque omnis dolores est. At blanditiis tempore eligendi mollitia asperiores. Neque quis ut quos. Dolor soluta qui tenetur consequatur ut et laboriosam.', 29, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(23, 'Magni voluptas nisi sit delectus omnis nobis.', 'Minus tempora eligendi tempora mollitia. Omnis et earum pariatur. Qui accusamus nostrum rem est.\n\nAutem dolores voluptates laudantium reprehenderit. At in autem veritatis iure. Quis aut praesentium ut repudiandae dolores quo qui. Nisi provident rerum tenetur consequuntur repellendus. Velit ullam aut aliquam.\n\nEveniet commodi accusantium itaque soluta architecto odit. Pariatur et tempora et fugit et in id qui. Porro rerum earum facere.', 23, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(24, 'Ad ut et aut quam et vitae exercitationem.', 'Quos dignissimos eum et cumque sed. Suscipit eos et numquam vero nisi. Esse labore molestiae ut culpa vel.\n\nAut laudantium quaerat natus occaecati est laboriosam odit. Vero eum voluptatem ut aut dolore repudiandae quas. Aliquid quas ducimus qui qui deserunt asperiores.\n\nIpsam molestias voluptas non doloremque explicabo. Delectus voluptatem distinctio et placeat soluta. Voluptatem asperiores vero eum natus.', 9, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(25, 'Sit eveniet et qui ducimus et incidunt aut error.', 'Quis nihil et placeat laborum ab fuga. Deserunt similique at eum illum recusandae. Non perferendis architecto non aut.\n\nMinus repudiandae aperiam repudiandae numquam et autem. Amet molestiae aut delectus sed sit asperiores. Et et aut itaque velit dicta ex. Laudantium molestiae a non sed.\n\nVoluptatem et sint nemo delectus voluptate omnis rerum. Et enim et distinctio. Dolorem est veritatis numquam corrupti perferendis eos.', 3, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(26, 'Aut quia aut velit omnis.', 'Deleniti libero vel possimus illo non quam libero. Et facere corporis praesentium maiores temporibus odit. Explicabo iusto voluptas cupiditate eius et repellendus.\n\nId est eaque voluptas. Ut totam et tempora non. Distinctio consequatur adipisci esse repellat. Reprehenderit deleniti omnis exercitationem dolorem.\n\nAdipisci asperiores officia hic ut. Aut incidunt laborum sunt aut dolores. Sit dolor excepturi minima nam. Est qui omnis delectus.', 16, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(27, 'Occaecati cupiditate et est odio culpa vero.', 'Ipsam enim facilis ullam et sapiente id. Voluptatibus autem et consequatur in corporis. Et dolores in iusto nemo esse. Facilis est et quia placeat qui totam deserunt omnis.\n\nAsperiores blanditiis distinctio nobis sit ipsa hic eos. Molestiae pariatur nihil omnis ad quo sit consequatur. Commodi illum sed nobis voluptates non sed recusandae.\n\nOmnis inventore harum non. Nobis quia alias id est ab vel.', 11, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(28, 'Et aliquid error nobis autem est excepturi.', 'Natus est assumenda earum. Debitis quo sit eaque voluptates sapiente. Eveniet id aliquam unde voluptatibus libero ratione blanditiis nihil.\n\nVoluptate qui nam ut. Veritatis molestiae tenetur dignissimos neque. Temporibus doloremque natus error deleniti eveniet itaque.\n\nAperiam autem eos tenetur tempora corrupti eos minima. Est sapiente quo vel rem. Eius dignissimos itaque distinctio ipsa. Animi culpa molestiae ea assumenda cupiditate sit non molestiae.', 11, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(29, 'Ex aspernatur esse voluptates nulla autem ducimus sed officia.', 'Quasi vel fugiat sunt et officiis tempora distinctio voluptatem. Provident corporis qui eum ea. Maiores atque quod voluptas eaque.\n\nRepellat sunt amet eius voluptates facilis quo. Laudantium ut optio dolorum. Ab amet nostrum rem nesciunt.\n\nTenetur non qui veniam modi eum nisi. Consequuntur impedit laboriosam corporis quo animi adipisci id rem. Consequatur repudiandae sed autem autem ad corrupti.', 29, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(30, 'Incidunt qui eos quo.', 'Eaque eos laboriosam animi eveniet dolore ut aut. Et incidunt qui corrupti commodi. Eaque in autem error ut rem expedita et.\n\nOfficia explicabo cumque aliquid laudantium quae. Sed totam reprehenderit qui porro eveniet quis rerum suscipit. Voluptatem optio nam aliquid pariatur pariatur. Est vero praesentium ut ut ut doloremque aut.\n\nQui eaque nulla asperiores impedit mollitia nobis placeat. Et quidem sed maxime. Eligendi et alias omnis nihil neque iure et.', 14, '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(32, 'Vero qui sunt dolor sapiente.', 'Et consequatur eveniet at sint illum qui. Eligendi expedita expedita est odio. Ipsam quaerat quo ut atque dolores repellendus impedit. Ipsam porro ab explicabo non repudiandae.\n\nUt minima omnis repellat quo. Omnis repellendus asperiores aut consequatur quibusdam. Et ut qui blanditiis magnam debitis. Amet consequatur perferendis nihil cupiditate quo autem eius.\n\nLaboriosam consequatur tempora est ipsam. Minima quis non culpa dolorem inventore sint dolores. Blanditiis magnam reiciendis et magnam voluptatem sit.', 32, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(33, 'Ea quas sed qui dolor deserunt odit.', 'Velit numquam repellendus et delectus aut dolorum. Rerum unde sint vel et fugiat repellendus. Facere inventore ipsa officia ab ea.\n\nCum laborum suscipit aut natus facere impedit. Ut rerum necessitatibus facilis nihil animi. Voluptatibus ut expedita maiores iure repellat.\n\nAut excepturi quis velit nisi laborum ratione ipsum. Dolorem sed incidunt voluptas. Labore quasi quis dolores et. Sunt adipisci consequatur qui.', 32, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(34, 'Modi voluptatem molestiae necessitatibus perspiciatis.', 'Aut ea a quam repudiandae optio velit. Porro maiores officiis quam sapiente aperiam hic voluptatem. Minima sed praesentium id ipsum assumenda et adipisci facilis.\n\nEt voluptate labore adipisci enim consectetur recusandae expedita. Sint asperiores perferendis dolores qui optio. Dolorem amet similique facilis nulla natus perferendis sapiente hic. Ut distinctio veritatis omnis quo dignissimos eaque.\n\nIusto qui voluptate cumque vel cum et commodi. Ut hic eos a quo vitae ratione. Ratione harum quod autem et aliquid sunt cupiditate.', 32, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(35, 'Voluptatem quae voluptatibus nesciunt qui velit.', 'Aut inventore est quidem voluptas sequi aliquid quo. Consequatur officia harum aperiam nihil. Error reprehenderit sit quis placeat est beatae.\n\nMagnam atque aut doloremque odit eum qui laboriosam. Quis molestiae voluptas inventore ut repudiandae quam itaque. Iure quaerat ut non hic eaque deleniti. Velit et aut rerum.\n\nRerum deserunt officiis aut voluptas nobis beatae. Iusto magnam quo possimus explicabo rerum. Quia quidem maiores est vitae iusto. Consectetur odio culpa at eaque est qui maxime.', 32, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(36, 'Eos quos eius sint.', 'Nihil cupiditate vel omnis fugit tempore ab. Distinctio assumenda perferendis ea aut accusamus ducimus. Consectetur consectetur veritatis eos esse provident deserunt. Aut voluptatem fugit cupiditate aut ipsum.\n\nConsequatur itaque dolorum laudantium nam nihil sint consectetur. Nisi quo alias est.\n\nNatus voluptatem aliquam id reprehenderit magnam iure deleniti. Aspernatur in autem modi. Quis culpa consectetur cumque delectus odio nemo velit. Non molestiae error at numquam. Aut quae non rem vero accusamus sed corrupti recusandae.', 32, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(37, 'Aliquid voluptas et recusandae ullam.', 'Eveniet libero omnis tempore ratione asperiores ut. Recusandae vero natus debitis quo. Maiores quidem dolor assumenda. Corrupti officia voluptates vel ut sapiente qui iste vitae. Sapiente voluptatem quia quia.\n\nQuia et accusantium quisquam rerum dolorem est ipsa. Quasi nisi libero dolore recusandae nisi molestias nihil. Voluptatum nam placeat aut eos omnis sed.\n\nA quam error distinctio repudiandae. Dolor officiis ut deserunt voluptatem eum qui odit necessitatibus. Perferendis dolores placeat nostrum officia velit est non. Sunt ut autem eos velit vel dolores doloremque asperiores.', 33, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(38, 'Non ut nulla minima ad accusantium a fugiat.', 'Et quia sit enim est quod ut vero. Aut alias dolores autem eum. Eos inventore ut distinctio qui.\n\nUt delectus et veniam voluptatibus aut nulla ut. Sed magnam doloribus corrupti dicta provident. Beatae hic dolore inventore ipsum corporis repellendus. Dolorem ut voluptatem praesentium.\n\nSit mollitia dolorem voluptas eligendi aut rerum et culpa. Dolor sint et dolorum est. Consequatur asperiores voluptatem aspernatur fugit quas aliquid ut.', 33, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(39, 'Omnis sit error eaque totam laboriosam itaque.', 'Nam quaerat blanditiis modi voluptas et totam vero. Facere et perspiciatis corrupti consequatur eum consequatur ut.\n\nPerspiciatis placeat dolor cumque dolor provident. Nam rem sunt numquam voluptatum. Quaerat minus rem quibusdam eum necessitatibus saepe tempora illo. Veritatis vel debitis blanditiis hic. Illum doloremque voluptates eveniet natus inventore nulla.\n\nAt ad dolores exercitationem animi delectus necessitatibus. Molestiae officia debitis a in amet sunt harum. Quis rerum placeat molestiae numquam culpa possimus.', 34, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(40, 'Tempore dolorem beatae aliquid blanditiis mollitia.', 'Quo facere explicabo rerum nostrum. Ea nihil vero voluptatem omnis ea dolore omnis saepe. Tempore eum voluptate occaecati voluptas.\n\nFacilis mollitia adipisci laboriosam facere doloremque aut. Quo et vel natus itaque. Aut pariatur pariatur eum fuga quia et possimus. Neque cum sapiente sed fuga. Dolore aut optio perspiciatis ab.\n\nNemo dolore omnis voluptates est enim velit voluptatem. Quod aut voluptas aut occaecati. Ullam fuga saepe aut nihil error nulla. Rerum autem consequuntur veniam.', 35, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(41, 'Introduction to Web Development.', 'Introduction to Web Development\r\nWeb development is the process of building websites and web applications that run on the internet. It includes two main parts:\r\n\r\nFront-end Development:\r\nThis is what users see and interact with, using languages like HTML, CSS, and JavaScript to create the website’s layout, style, and behavior.\r\n\r\nBack-end Development:\r\nThis part works behind the scenes, handling data, servers, and databases using languages like PHP, Python, and Node.js.\r\n\r\nPopular Tools and Trends\r\nFrameworks: React, Angular, and Vue.js for front-end; Laravel and Django for back-end.\r\n\r\nDatabases: MySQL, PostgreSQL, MongoDB.\r\n\r\nModern trends: Progressive Web Apps (PWA), AI integration, and a strong focus on security.\r\n\r\nConclusion\r\nWeb development combines creativity and technology to create interactive and useful websites. Learning both front-end and back-end skills helps you build better web experiences.', 1, '2025-08-05 01:15:42', '2025-08-05 01:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-eman12345khalid@gmail.com|127.0.0.1', 'i:1;', 1754320839),
('laravel-cache-eman12345khalid@gmail.com|127.0.0.1:timer', 'i:1754320839;', 1754320839);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_04_140429_create_articles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CICSQ4ZAjnEUKI4xjiPS0p79oJtK3pW5SoObgaXJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWG1jTmZ2UEs3VTlYUzNpZ0lTTzhrWHdYTnk5NmlBYW5RME9vOFkybSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1754369472);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ايمان خالد', 'eman1245khalid@gmail.com', NULL, '$2y$12$J7W0qGZ3uTdKNd1cr8GHFO6JZ/qnmO7doUu0o1puwB.cKRfR4pUby', NULL, '2025-08-04 12:20:05', '2025-08-04 12:20:05'),
(2, 'Chauncey Schulist', 'jarod51@example.org', '2025-08-05 00:25:06', '$2y$12$Wqaxle.rGyr9tM14xqbXjehDbjKJND2.4hAy7ZRiKSWx.iFjezkj.', 'enAeuEjGIO', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(3, 'Dr. Lizeth Heaney DVM', 'andy75@example.com', '2025-08-05 00:25:07', '$2y$12$TAKqRJpy/blQNabxYg41A.PKawSGDw4I8UgFxFqz4EvaoZENekcZq', 'TmqHML2c7D', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(4, 'Mrs. Isobel Simonis', 'hhill@example.net', '2025-08-05 00:25:07', '$2y$12$FJktLswje8Xys7pClsQS8.eieBt4VUhwoBP9bMsy9bvDFAkeq07CK', 'xjInfChwZ7', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(5, 'Dr. Aric Rodriguez MD', 'stokes.robb@example.com', '2025-08-05 00:25:07', '$2y$12$b7kvEpaqiQF1XMbw062CGe0wWPkXCpgt9qMaEkiF.d17hKMCBCiz6', 'CtsMIywASM', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(6, 'Romaine Daniel II', 'nickolas59@example.com', '2025-08-05 00:25:07', '$2y$12$umNWV.JYzFkjK6Lpkhx.y.2vpLAoqEfs5Rb2PQyETCg0QHK9hP8HG', '8Bb8eoZKjL', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(7, 'Mr. Rick Brekke IV', 'schaefer.rodolfo@example.com', '2025-08-05 00:25:08', '$2y$12$5vWv0iBuQKBvoNj/x2HLnu07fJQmb7ijxGm6oh.z61IsgDSLwDrAS', 'Xg7c2RhbxR', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(8, 'Evalyn Rau', 'vivianne44@example.com', '2025-08-05 00:25:08', '$2y$12$6V8hXWrsE8YVBelPclBl4uZZhyAe5kDoK2PYc19cz.ywPBwJmS8ke', 'zjkgLUvzIg', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(9, 'Mr. Sofia White', 'elda.altenwerth@example.net', '2025-08-05 00:25:08', '$2y$12$63/x5y9vUlQdegerzsT0hui0cSDNEZ8pU9q88OwVWR4oB58wTvAgq', 'VQNhpgSBoU', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(10, 'Lilliana Zulauf PhD', 'jillian.muller@example.net', '2025-08-05 00:25:08', '$2y$12$/vTKAjCJLsdwWleGkrKlhOtL7nISWwPQqUynyvPh282lrQxfRj0d2', 'CLn2zjTVF5', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(11, 'Lillie Bruen', 'mkilback@example.net', '2025-08-05 00:25:09', '$2y$12$By/TCUqDlaX52IbnZoiRveRSDztef2QFSJFs3MOOXopHKEzy6fYG6', 'pGsHlwlfxJ', '2025-08-05 00:25:09', '2025-08-05 00:25:09'),
(12, 'Bernard Mertz', 'champlin.chadrick@example.com', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'rW1Ur9en7S', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(13, 'Mrs. Chanelle Stiedemann', 'ashleigh49@example.com', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'nNXKpsamof', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(14, 'Mike Anderson', 'talon94@example.org', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'fHBraVhXgu', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(15, 'Mr. Xzavier Mosciski', 'ffunk@example.com', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'fmDvV3VXSd', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(16, 'Miss Georgette Harvey', 'schiller.alanna@example.org', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'Knd1xSB4ZB', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(17, 'Marisol Glover', 'dhoppe@example.net', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', '5nifHJa0PE', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(18, 'Mr. Armani Hettinger', 'queenie.smith@example.net', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'RUEkmW1Lm4', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(19, 'Winston Lubowitz', 'vonrueden.lucie@example.org', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', '5lH8ofkilm', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(20, 'Kattie Swaniawski', 'nasir.mills@example.com', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'oLne1AGWP8', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(21, 'Okey Borer', 'trobel@example.org', '2025-08-05 00:27:38', '$2y$12$8.SGskRSEcySWpGlh.aLe.zFI5kpEH2xOfABOyBXumu6.Gnv4BUj2', 'LSsT9yTY9C', '2025-08-05 00:27:38', '2025-08-05 00:27:38'),
(22, 'Kyla Abbott', 'stanton.reese@example.net', '2025-08-05 00:28:34', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'Vu5ONMBTQ1', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(23, 'Laurianne Ziemann', 'kelsie04@example.org', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'GJK1gZW8dA', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(24, 'Dr. Jeramie McKenzie', 'brian.stokes@example.com', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'pz0kLDFZqQ', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(25, 'Miss Estella Weimann', 'predovic.vicky@example.com', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'gLxEiEFDJx', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(26, 'Mr. Gavin Bechtelar II', 'margarita26@example.org', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'OTn8c7GbaU', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(27, 'Chelsea Batz', 'della.herman@example.net', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'iFyoddsB0J', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(28, 'Dr. Antwan Koss DDS', 'okris@example.org', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', '8AgH81gZcE', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(29, 'Leann Reynolds', 'duane74@example.com', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'tTHqxaM055', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(30, 'Magdalen Fahey III', 'welch.louisa@example.net', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'w0CyOqyDK8', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(31, 'Ms. Romaine Padberg Jr.', 'blaze26@example.com', '2025-08-05 00:28:35', '$2y$12$ksbEi/Obaod5YOm76dG8q.eQRZE5d85mcO4vciuZShdxvpq1qrTom', 'YSmDmdcvkA', '2025-08-05 00:28:35', '2025-08-05 00:28:35'),
(32, 'Test User', 'test@example.com', NULL, '$2y$12$6WiubyqCAdJjD1qNyudhseY5lj8OqEqPwuRzQdrpb9jHem39HapXu', NULL, '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(33, 'Marianna D\'Amore', 'sauer.moriah@example.com', '2025-08-05 00:53:48', '$2y$12$R4lclKUnXOCwosgXJx/rwu0KQKvnfhLgWtBz2RsGNuUJogIdDFEzu', 'Ixd9T5Y639', '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(34, 'Christa Block', 'brekke.may@example.net', '2025-08-05 00:53:48', '$2y$12$R4lclKUnXOCwosgXJx/rwu0KQKvnfhLgWtBz2RsGNuUJogIdDFEzu', '8NMj8hqjLS', '2025-08-05 00:53:48', '2025-08-05 00:53:48'),
(35, 'Mr. Jeramy Hermiston MD', 'stowne@example.net', '2025-08-05 00:53:48', '$2y$12$R4lclKUnXOCwosgXJx/rwu0KQKvnfhLgWtBz2RsGNuUJogIdDFEzu', '2MZKjmetcC', '2025-08-05 00:53:48', '2025-08-05 00:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
