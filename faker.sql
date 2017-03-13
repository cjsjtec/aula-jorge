-- --------------------------------------------------------
-- Servidor:                     192.168.10.10
-- Versão do servidor:           5.7.17-0ubuntu0.16.04.1 - (Ubuntu)
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para aula
CREATE DATABASE IF NOT EXISTS `aula` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aula`;

-- Copiando estrutura para tabela aula.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` decimal(10,0) unsigned DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela aula.produtos: ~0 rows (aproximadamente)
DELETE FROM `produtos`;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor`, `foto`) VALUES
	(1, 'Teste', 'Primeiro Teste', 1000, 'teste'),
	(2, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(3, 'Teste', 'Primeiro Teste', 1000, 'teste'),
	(4, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(5, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(6, 'Teste', 'Primeiro Teste', 1000, 'teste'),
	(7, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(8, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(9, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(10, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(11, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(12, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(13, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(14, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(15, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(16, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(17, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(18, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(19, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(20, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(21, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(22, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(23, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(24, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(25, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(26, 'Teste2', 'Segundo Teste', 1000, 'teste'),
	(27, 'Teste2', NULL, NULL, NULL),
	(28, 'Teste2', NULL, NULL, NULL),
	(29, 'Teste2', NULL, NULL, NULL),
	(30, 'Teste2', NULL, NULL, NULL),
	(31, 'Teste2', NULL, NULL, NULL),
	(32, 'Teste2', NULL, NULL, NULL),
	(33, 'Teste2', NULL, NULL, NULL),
	(34, 'Teste2', NULL, NULL, NULL),
	(35, 'Teste2', NULL, NULL, NULL),
	(36, 'Teste2', NULL, NULL, NULL),
	(37, 'Teste2', NULL, NULL, NULL),
	(38, 'Teste2', NULL, NULL, NULL),
	(39, 'Teste2', NULL, NULL, NULL),
	(40, 'Teste2', NULL, NULL, NULL),
	(41, 'Teste2', NULL, NULL, NULL),
	(42, 'Teste2', NULL, NULL, NULL);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
