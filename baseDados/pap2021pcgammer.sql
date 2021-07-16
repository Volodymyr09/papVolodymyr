/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021pcgammer

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 16/07/2021 18:43:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoriachaves
-- ----------------------------
DROP TABLE IF EXISTS `categoriachaves`;
CREATE TABLE `categoriachaves`  (
  `categoriaChaveId` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaChaveNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categoriaChaveCategoriaId` int(11) NULL DEFAULT NULL,
  `categoriaChaveTipo` enum('geral','especifico') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'geral',
  PRIMARY KEY (`categoriaChaveId`) USING BTREE,
  INDEX `fk_categoriachaves_categorias1_idx`(`categoriaChaveCategoriaId`) USING BTREE,
  CONSTRAINT `fk_categoriachaves_categorias1` FOREIGN KEY (`categoriaChaveCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoriachaves
-- ----------------------------
INSERT INTO `categoriachaves` VALUES (20, 'Caracteriscas fisicas', NULL, 'geral');
INSERT INTO `categoriachaves` VALUES (21, 'Processador', 5, 'especifico');

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `categoriaId` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categoriaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categoriaCategoriaId` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`categoriaId`) USING BTREE,
  INDEX `fk_categorias_categorias_idx`(`categoriaCategoriaId`) USING BTREE,
  CONSTRAINT `fk_categorias_categorias` FOREIGN KEY (`categoriaCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (2, 'Caixas', 'images/caixaLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (4, 'Monitores', 'images/monitoreLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (5, 'Hardware', 'images/hardwareLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (6, 'Desktop', 'images/desktopLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (7, 'Portateis', 'images/portateisLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (8, 'Acessórios', 'images/acessoariosLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (9, 'MSI', 'images/msiLogo.jpg', 6);
INSERT INTO `categorias` VALUES (10, 'Motherboard', 'images/Motherboard.jpg', NULL);
INSERT INTO `categorias` VALUES (11, 'Processador', 'images/processador.jpg', NULL);
INSERT INTO `categorias` VALUES (12, 'Memória RAM', 'images/ram.jpg', NULL);
INSERT INTO `categorias` VALUES (13, 'Disco', 'images/disco.jpg', NULL);
INSERT INTO `categorias` VALUES (14, 'Cooler CPU', 'images/CoolerCPUNOXHummerH-312120mmUniversal.jpg', NULL);
INSERT INTO `categorias` VALUES (15, 'Fonte de Alimentação', 'images/FonteDeAlimentação.jpg', NULL);
INSERT INTO `categorias` VALUES (16, 'Placa Grafica', 'images/placagrafica.jpg', NULL);
INSERT INTO `categorias` VALUES (17, 'Placa Som', 'images/placasom.jpg', NULL);
INSERT INTO `categorias` VALUES (18, 'Placa Rede', 'images/placarede.jpg', NULL);

-- ----------------------------
-- Table structure for chaves
-- ----------------------------
DROP TABLE IF EXISTS `chaves`;
CREATE TABLE `chaves`  (
  `chaveId` int(11) NOT NULL AUTO_INCREMENT,
  `chaveNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chaveCategoriaChaveId` int(11) NOT NULL,
  PRIMARY KEY (`chaveId`) USING BTREE,
  INDEX `fk_chaves_categoriachaves1_idx`(`chaveCategoriaChaveId`) USING BTREE,
  CONSTRAINT `fk_chaves_categoriachaves1` FOREIGN KEY (`chaveCategoriaChaveId`) REFERENCES `categoriachaves` (`categoriaChaveId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chaves
-- ----------------------------
INSERT INTO `chaves` VALUES (31, 'Cor', 20);
INSERT INTO `chaves` VALUES (32, 'Altura', 20);
INSERT INTO `chaves` VALUES (33, 'Nucleos', 21);

-- ----------------------------
-- Table structure for compatibilidades
-- ----------------------------
DROP TABLE IF EXISTS `compatibilidades`;
CREATE TABLE `compatibilidades`  (
  `compatibilidadeProduto1Id` int(11) NOT NULL,
  `compatibilidadeProduto2Id` int(11) NOT NULL,
  PRIMARY KEY (`compatibilidadeProduto1Id`, `compatibilidadeProduto2Id`) USING BTREE,
  INDEX `fk_compatibilidades_produtos2_idx`(`compatibilidadeProduto2Id`) USING BTREE,
  CONSTRAINT `fk_compatibilidades_produtos1` FOREIGN KEY (`compatibilidadeProduto1Id`) REFERENCES `produtos` (`produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_compatibilidades_produtos2` FOREIGN KEY (`compatibilidadeProduto2Id`) REFERENCES `produtos` (`produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of compatibilidades
-- ----------------------------
INSERT INTO `compatibilidades` VALUES (12, 2);
INSERT INTO `compatibilidades` VALUES (2, 10);

-- ----------------------------
-- Table structure for encomendadetalhes
-- ----------------------------
DROP TABLE IF EXISTS `encomendadetalhes`;
CREATE TABLE `encomendadetalhes`  (
  `encomendaDetalheId` int(11) NOT NULL AUTO_INCREMENT,
  `encomendaDetalheEncomendaId` int(11) NOT NULL,
  `encomendaDetalheProdutoId` int(11) NOT NULL,
  `encomendaDetalhePreco` decimal(10, 2) NOT NULL,
  `encomendaDetalheQuantidade` int(11) NOT NULL,
  PRIMARY KEY (`encomendaDetalheId`) USING BTREE,
  INDEX `fk_encomendadetalhes_encomendas1_idx`(`encomendaDetalheEncomendaId`) USING BTREE,
  INDEX `fk_encomendadetalhes_produtos1_idx`(`encomendaDetalheProdutoId`) USING BTREE,
  CONSTRAINT `fk_encomendadetalhes_encomendas1` FOREIGN KEY (`encomendaDetalheEncomendaId`) REFERENCES `encomendas` (`encomendaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_encomendadetalhes_produtos1` FOREIGN KEY (`encomendaDetalheProdutoId`) REFERENCES `produtos` (`produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of encomendadetalhes
-- ----------------------------
INSERT INTO `encomendadetalhes` VALUES (1, 1, 8, 250.00, 1);
INSERT INTO `encomendadetalhes` VALUES (2, 2, 7, 200.00, 1);
INSERT INTO `encomendadetalhes` VALUES (3, 2, 8, 300.00, 1);

-- ----------------------------
-- Table structure for encomendas
-- ----------------------------
DROP TABLE IF EXISTS `encomendas`;
CREATE TABLE `encomendas`  (
  `encomendaId` int(11) NOT NULL AUTO_INCREMENT,
  `encomendaData` date NOT NULL,
  `encomendaEstado` enum('preparacao','caminho','entregue') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `encomendaValorFinal` decimal(10, 2) NOT NULL,
  `encomendaPerfilId` int(11) NOT NULL,
  PRIMARY KEY (`encomendaId`) USING BTREE,
  INDEX `fk_encomendas_perfis1_idx`(`encomendaPerfilId`) USING BTREE,
  CONSTRAINT `fk_encomendas_perfis1` FOREIGN KEY (`encomendaPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of encomendas
-- ----------------------------
INSERT INTO `encomendas` VALUES (1, '2021-07-01', 'entregue', 250.00, 12);
INSERT INTO `encomendas` VALUES (2, '2021-07-21', 'entregue', 500.00, 12);

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `noticiaId` int(11) NOT NULL AUTO_INCREMENT,
  `noticiaTitulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaLinkURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`noticiaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (1, 'Xiaomi: veja quais celulares receberão o Android 11 com MIUI 12', 'https://www.tecmundo.com.br/software/214456-xiaomi-veja-celulares-receberao-android-11-miui-12.htm', 'images/xiaomiNoticia.gif', 'sim');
INSERT INTO `noticias` VALUES (2, '512 GB de RAM em um módulo: Samsung apresenta nova memória DDR5', 'https://www.tecmundo.com.br/produto/214428-512-gb-ram-modulo-samsung-apresenta-nova-memoria-ddr5.htm', 'images/SamNoticia.gif', 'sim');
INSERT INTO `noticias` VALUES (3, 'Benfica foi roubado', 'https://www.youtube.com/watch?v=xzNI_SMGzy0', 'images/motocompany.png', 'sim');

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilMorada` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilEmail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  UNIQUE INDEX `users_userId_UNIQUE`(`perfilId`) USING BTREE,
  INDEX `fk_perfis_users1_idx`(`perfilId`) USING BTREE,
  CONSTRAINT `fk_perfis_users1` FOREIGN KEY (`perfilId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perfis
-- ----------------------------
INSERT INTO `perfis` VALUES (12, 'Miguel', 'rua.pipefeio', '935322622', 'miguel@gmail.com');
INSERT INTO `perfis` VALUES (13, 'Pipe', 'av.Vitor Galo', '935442771', 'pipe@gmail.com');

-- ----------------------------
-- Table structure for produtochaves
-- ----------------------------
DROP TABLE IF EXISTS `produtochaves`;
CREATE TABLE `produtochaves`  (
  `produtoChaveChaveId` int(11) NOT NULL,
  `produtoChaveProdutoId` int(11) NOT NULL,
  `produtoChaveValor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`produtoChaveChaveId`, `produtoChaveProdutoId`) USING BTREE,
  INDEX `fk_chaves_has_produtos_produtos1_idx`(`produtoChaveProdutoId`) USING BTREE,
  INDEX `fk_chaves_has_produtos_chaves1_idx`(`produtoChaveChaveId`) USING BTREE,
  CONSTRAINT `fk_chaves_has_produtos_chaves1` FOREIGN KEY (`produtoChaveChaveId`) REFERENCES `chaves` (`chaveId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_chaves_has_produtos_produtos1` FOREIGN KEY (`produtoChaveProdutoId`) REFERENCES `produtos` (`produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtochaves
-- ----------------------------
INSERT INTO `produtochaves` VALUES (31, 7, 'Preto');

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `produtoId` int(11) NOT NULL AUTO_INCREMENT,
  `produtoNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoPreco` decimal(10, 2) NOT NULL,
  `produtoCategoriaId` int(11) NOT NULL,
  `produtoDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`produtoId`) USING BTREE,
  INDEX `fk_produtos_categorias1_idx`(`produtoCategoriaId`) USING BTREE,
  CONSTRAINT `fk_produtos_categorias1` FOREIGN KEY (`produtoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (2, 'Caixa Nox Infinity Atom RGBB', 'images/ListaCaixaNoxInfinityAtomRGB.jpg', ' Muito Bom!', 222.00, 2, 'sim');
INSERT INTO `produtos` VALUES (7, 'Monitor Curvo ACER ED320QRP', 'images/MonitorGamAOC.jpg', '    Bom!', 10.00, 4, 'sim');
INSERT INTO `produtos` VALUES (8, 'Rato Gaming ONN', 'images/ListaRatoGamHyperxPlusefireDatr.jpg', ' Muito bom!', 24.00, 8, 'nao');
INSERT INTO `produtos` VALUES (10, 'Portatil Asus Rog Strix G15', 'images/PorAsusRogStrixG15.jpg', '    Bom!', 5.00, 7, 'sim');
INSERT INTO `produtos` VALUES (12, 'Motherboard ASUS ROG MAXIMUS XIII EXTREME', 'images/motherboardAsusRogMaximusXiiiExtreme.jpg', '    Bom!', 1596.00, 5, 'sim');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userState` enum('registo','ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (12, 'Miguel', '777665', 'ativo');
INSERT INTO `users` VALUES (13, 'Pipe', '12345', 'ativo');
INSERT INTO `users` VALUES (15, 'Volodymyr', '12345', 'ativo');
INSERT INTO `users` VALUES (16, 'Rui', '12345', 'inativo');

SET FOREIGN_KEY_CHECKS = 1;
