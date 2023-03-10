-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para projetofinal
CREATE DATABASE IF NOT EXISTS `projetofinal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projetofinal`;

-- A despejar estrutura para tabela projetofinal.anuncios
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nome_projeto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `linguagem` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descricao` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contacto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `orcamento` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela projetofinal.anuncios: ~8 rows (aproximadamente)
INSERT IGNORE INTO `anuncios` (`id`, `nome_completo`, `nome_projeto`, `tipo`, `linguagem`, `descricao`, `contacto`, `orcamento`) VALUES
	(1, 'Manuel Matos Cabo', 'Realização de um website', 'aplicacao1', 'JavaScript; HTML; CSS; PHP; ', 'Pretende-se que seja construído um website para pessoas relacionados com a área da programação, onde estas possam publicar e procurar projetos para futuros trabalhos.', 'mmc@gmail.com 919191919', 1250),
	(2, 'Francisco Vilar', 'Criação de BLOG', 'website1', 'JavaScript; HTML; CSS; PHP; ', 'Desenvolva um blog simples em que se consigam escrever artigos com um título em destaque (bold) e textos bem formatados.\r\n', 'franVIlar@outlook.com', 200),
	(3, 'Maria Ferreira', 'Portofílo', 'website1', 'HTML; CSS; ', 'Sabemos que o mercado de desenvolvimento anda bem aquecido nestes últimos anos e, para que os recrutadores nos encontrem, devemos mostrar os nossos projetos. Uma maneira de o fazer é construir o seu portfólio e mostrar todos os projetos que já desenvolveu.', 'mferreira@sapo.pt', 200),
	(4, 'André Eduardo', 'Calculadora', 'software1', 'JavaScript; HTML; CSS; ', 'Implemente uma calculadora que seja capaz de realizar operações matemáticas básicas, ou seja, adição, subtração, multiplicação, divisão. Também pode calcular as raízes quadradas e a potência de um número.', '936486258', 250),
	(5, 'Andreia Silva', 'Jogo da Cobra', 'aplicacao1', 'Java; ', 'O tema principal deste jogo é alimentar a cobra com fichas (comida) de forma que ela não seja tocada nos limites. O jogador obterá os pontos cada vez que a cobra comer o token e a pontuação final será exibida após a conclusão do jogo', 'andreiasilva@gmail.com', 501),
	(6, 'Mário Costa', 'Construir um indicador de estacionamento', 'aplicacao1', 'Matlab; ', 'Criação de um sistema que guie um motorista para uma vaga de estacionamento apropriada e próxima.', 'Mariocosta@outlook.com 923172835', 1695),
	(7, 'Joana Lopes', 'Widget para um chat', 'website1', 'Ruby; ', 'O objetivo deste projeto é adicionar um recurso de bate-papo a um site comercial ou de comércio eletrônico para que os clientes possam simplesmente fazer perguntas ou entrar em contato com o atendimento ao cliente. É uma técnica para aumentar a capacidade de resposta de uma plataforma de suporte ao cliente para que uma possível transação possa ser feita imediatamente.', 'jl.123@gmail.com 918127346', 250),
	(8, 'Manuel Matos Cabo', 'Projeto WEB', 'software1', 'JavaScript; HTML; CSS; Java; SQL; ', 'Realização de um projeto para a cadeira de Desenvolvimento para a WEB como método de avaliação', 'iscac17310@alumni.iscac.pt', 10000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
