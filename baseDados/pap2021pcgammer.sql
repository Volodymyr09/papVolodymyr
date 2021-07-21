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

 Date: 21/07/2021 17:48:22
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
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoriachaves
-- ----------------------------
INSERT INTO `categoriachaves` VALUES (23, 'Referências', NULL, 'geral');
INSERT INTO `categoriachaves` VALUES (24, 'Características Físicas', NULL, 'geral');
INSERT INTO `categoriachaves` VALUES (25, 'Características Específicas', NULL, 'geral');
INSERT INTO `categoriachaves` VALUES (26, 'Performance', 11, 'especifico');
INSERT INTO `categoriachaves` VALUES (27, 'Memória', NULL, 'geral');
INSERT INTO `categoriachaves` VALUES (28, 'Memória Processador', 11, 'especifico');
INSERT INTO `categoriachaves` VALUES (29, 'Performance Motherboard', 10, 'especifico');
INSERT INTO `categoriachaves` VALUES (30, 'Performance RAM', 12, 'especifico');
INSERT INTO `categoriachaves` VALUES (31, 'Características Específicas Caixa', 2, 'especifico');
INSERT INTO `categoriachaves` VALUES (32, 'Conexões', 15, 'especifico');
INSERT INTO `categoriachaves` VALUES (33, 'Características Específicas Fonte Alimentação', 15, 'especifico');
INSERT INTO `categoriachaves` VALUES (34, 'Ecrã', 4, 'especifico');
INSERT INTO `categoriachaves` VALUES (35, 'Qualidade de Imagem', 4, 'especifico');

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
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (2, 'Caixas', 'images/caixaLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (4, 'Monitores', 'images/monitoreLogo.jpg', NULL);
INSERT INTO `categorias` VALUES (10, 'Motherboard', 'images/Motherboard.jpg', NULL);
INSERT INTO `categorias` VALUES (11, 'Processador', 'images/processador.jpg', NULL);
INSERT INTO `categorias` VALUES (12, 'Memória RAM', 'images/ram.jpg', NULL);
INSERT INTO `categorias` VALUES (13, 'Disco', 'images/disco.jpg', NULL);
INSERT INTO `categorias` VALUES (14, 'Cooler CPU', 'images/CoolerCPUNOXHummerH-312120mmUniversal.jpg', NULL);
INSERT INTO `categorias` VALUES (15, 'Fonte de Alimentação', 'images/FonteDeAlimentação.jpg', NULL);
INSERT INTO `categorias` VALUES (16, 'Placa Grafica', 'images/placagrafica.jpg', NULL);
INSERT INTO `categorias` VALUES (17, 'Placa Som', 'images/placasom.jpg', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 90 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chaves
-- ----------------------------
INSERT INTO `chaves` VALUES (34, 'Marca', 23);
INSERT INTO `chaves` VALUES (35, 'Modelo', 23);
INSERT INTO `chaves` VALUES (36, 'Altura', 24);
INSERT INTO `chaves` VALUES (37, 'Largura', 24);
INSERT INTO `chaves` VALUES (38, 'Unidade de Medida', 24);
INSERT INTO `chaves` VALUES (39, 'Chipset', 25);
INSERT INTO `chaves` VALUES (40, 'Marca do Chipset', 25);
INSERT INTO `chaves` VALUES (41, 'Tipo de Socket', 25);
INSERT INTO `chaves` VALUES (42, 'Cor', 24);
INSERT INTO `chaves` VALUES (43, 'Armazenamento', 25);
INSERT INTO `chaves` VALUES (44, 'Portas', 25);
INSERT INTO `chaves` VALUES (45, 'Memória Standard', 27);
INSERT INTO `chaves` VALUES (46, 'Memória RAM', 27);
INSERT INTO `chaves` VALUES (47, 'Máximo de Memória Suportada', 27);
INSERT INTO `chaves` VALUES (48, 'Série', 25);
INSERT INTO `chaves` VALUES (49, 'Número de Núcleos Core', 26);
INSERT INTO `chaves` VALUES (50, 'Frequência Base (Ghz)', 26);
INSERT INTO `chaves` VALUES (51, 'Frequência Turbo (Ghz)', 26);
INSERT INTO `chaves` VALUES (52, 'Cache L2', 28);
INSERT INTO `chaves` VALUES (53, 'Cache L3', 28);
INSERT INTO `chaves` VALUES (54, 'Áudio', 29);
INSERT INTO `chaves` VALUES (55, 'Tecnologia Multi-Gráfica', 29);
INSERT INTO `chaves` VALUES (56, 'Peso', 24);
INSERT INTO `chaves` VALUES (57, 'Profundidade', 24);
INSERT INTO `chaves` VALUES (58, 'Capacidade RAM (Kb)', 30);
INSERT INTO `chaves` VALUES (59, 'Velocidade', 30);
INSERT INTO `chaves` VALUES (60, 'Tipo de Memória', 30);
INSERT INTO `chaves` VALUES (61, 'Velocidade Máxima de Escrita', 25);
INSERT INTO `chaves` VALUES (62, 'Velocidade Máxima de Leitura', 25);
INSERT INTO `chaves` VALUES (63, 'Material', 24);
INSERT INTO `chaves` VALUES (64, 'Tipo de Caixa', 31);
INSERT INTO `chaves` VALUES (65, 'Série', 31);
INSERT INTO `chaves` VALUES (66, 'Família de Motherboard', 31);
INSERT INTO `chaves` VALUES (67, 'Slots de Expansão', 31);
INSERT INTO `chaves` VALUES (68, 'Potência(W)', 33);
INSERT INTO `chaves` VALUES (69, 'Alimentação Switches', 33);
INSERT INTO `chaves` VALUES (70, 'Certificação Energética', 33);
INSERT INTO `chaves` VALUES (71, 'Conectores SATA', 32);
INSERT INTO `chaves` VALUES (72, 'Conectores ATX', 32);
INSERT INTO `chaves` VALUES (73, 'Conectores Molex', 32);
INSERT INTO `chaves` VALUES (74, 'Tipo de Memória', 27);
INSERT INTO `chaves` VALUES (75, 'Memória Interna', 27);
INSERT INTO `chaves` VALUES (76, 'Frequencia Resposta(Hz)', 25);
INSERT INTO `chaves` VALUES (77, 'Software', 25);
INSERT INTO `chaves` VALUES (78, 'Diagonal de Ecrã', 34);
INSERT INTO `chaves` VALUES (79, 'Tipo de Ecrã', 34);
INSERT INTO `chaves` VALUES (80, 'Relação de Aspeto', 34);
INSERT INTO `chaves` VALUES (81, 'Ângulo de Visão', 34);
INSERT INTO `chaves` VALUES (82, 'Formato', 34);
INSERT INTO `chaves` VALUES (83, 'Resolução', 35);
INSERT INTO `chaves` VALUES (84, 'Resolução (lpi)', 34);
INSERT INTO `chaves` VALUES (85, 'Cores', 35);
INSERT INTO `chaves` VALUES (86, 'Contraste Static', 35);
INSERT INTO `chaves` VALUES (87, 'Distância entre Pixels', 35);
INSERT INTO `chaves` VALUES (88, 'Brilho [cd/m2]', 35);
INSERT INTO `chaves` VALUES (89, 'Tecnologia', 35);

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
INSERT INTO `compatibilidades` VALUES (12, 14);
INSERT INTO `compatibilidades` VALUES (12, 16);
INSERT INTO `compatibilidades` VALUES (12, 17);
INSERT INTO `compatibilidades` VALUES (12, 18);
INSERT INTO `compatibilidades` VALUES (12, 19);
INSERT INTO `compatibilidades` VALUES (12, 20);
INSERT INTO `compatibilidades` VALUES (12, 21);
INSERT INTO `compatibilidades` VALUES (12, 22);

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
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of encomendadetalhes
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of encomendas
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (1, 'Xiaomi: veja quais celulares receberão o Android 11 com MIUI 12', 'https://www.tecmundo.com.br/software/214456-xiaomi-veja-celulares-receberao-android-11-miui-12.htm', 'images/xiaomiNoticia.gif', 'sim');
INSERT INTO `noticias` VALUES (2, '512 GB de RAM em um módulo: Samsung apresenta nova memória DDR5', 'https://www.tecmundo.com.br/produto/214428-512-gb-ram-modulo-samsung-apresenta-nova-memoria-ddr5.htm', 'images/SamNoticia.gif', 'sim');

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
INSERT INTO `produtochaves` VALUES (34, 24, 'ASUS');
INSERT INTO `produtochaves` VALUES (35, 24, 'TUF Gaming B550-Plus');
INSERT INTO `produtochaves` VALUES (36, 24, '30.5');
INSERT INTO `produtochaves` VALUES (37, 24, '24.4');
INSERT INTO `produtochaves` VALUES (38, 24, 'cm');
INSERT INTO `produtochaves` VALUES (39, 24, 'AMD B550');
INSERT INTO `produtochaves` VALUES (41, 24, 'AM4');
INSERT INTO `produtochaves` VALUES (43, 24, '6 x SATA 6Gb/s, 6 x SATA 6Gb/s');
INSERT INTO `produtochaves` VALUES (44, 24, 'USB 2 x USB 3.2 Gen 2 port(s)(1 x Type-A +1 x USB Type-C), 4 x USB 3.2 Gen 1 port(s)(4 x Type-A), 2 x USB 2.0 port(s)(2 x Type-A), 2 x USB 3.2 Gen 1 port(s)(2 x Type-A), 4 x USB 2.0 port(s)(4 x Type-A)');
INSERT INTO `produtochaves` VALUES (45, 24, 'Com capacidade até 128GB');
INSERT INTO `produtochaves` VALUES (46, 24, 'Suportada DDR4');
INSERT INTO `produtochaves` VALUES (47, 24, '128 GB');
INSERT INTO `produtochaves` VALUES (54, 24, 'Realtek ALC S1200A 7.1');
INSERT INTO `produtochaves` VALUES (55, 24, '2-way Crossfire Ready');

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
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (7, 'Monitor Curvo ACER ED320QRP', 'images/MonitorGamAOC.jpg', '    Bom!', 10.00, 4, 'sim');
INSERT INTO `produtos` VALUES (12, 'Motherboard ASUS ROG MAXIMUS XIII EXTREME', 'images/motherboardAsusRogMaximusXiiiExtreme.jpg', '(ROG MAXIMUS XIII EXTREME)', 1596.00, 10, 'nao');
INSERT INTO `produtos` VALUES (14, 'Intel Core i5-9600K 3.7Ghz', 'images/IntelCorei5-9600K3.7Ghz.png', '    Bom!', 75.00, 11, 'nao');
INSERT INTO `produtos` VALUES (16, 'Kingston HyperX Fury Black DDR4 3200Mhz PC-25600 16GB 2x8GB CL16', 'images/KingstonHyperXFuryBlackDDR432Mhz PC-2560016GB2x8GBCL16.png', '    Bom!', 50.00, 12, 'nao');
INSERT INTO `produtos` VALUES (17, 'Cooler Master Hyper 212 RGB Black Edition', 'images/CoolerMasterHyper212RGBBlackEdition.png', '    Bom!', 60.00, 14, 'nao');
INSERT INTO `produtos` VALUES (18, 'Kioxia EXCERIA 480 GB SSD SATA', 'images/KioxiaEXCERIA480GBSSDSATA.png', '    Bom!', 55.00, 13, 'nao');
INSERT INTO `produtos` VALUES (19, 'Tempest Spectra RGB USB 3.0 com Janela', 'images/TempestSpectraRGBUSB3.0comJanela.png', '    Bom!', 85.00, 2, 'nao');
INSERT INTO `produtos` VALUES (20, 'Tempest Gaming GPSU 650W', 'images/TempestGamingGPSU650W.png', '    Bom!', 76.00, 15, 'nao');
INSERT INTO `produtos` VALUES (21, 'Zotac Gaming GeForce RTX 3070 Ti AMP Holo 8GB GDDR6X', 'images/ZotacGamingGeForceRTX3070TiAMPHolo8GBGDDR6X.png', '    Bom!', 155.00, 16, 'nao');
INSERT INTO `produtos` VALUES (22, 'Creative Sound Blaster Audigy FX PCI Express', 'images/CreativeSoundBlasterAudigyFXPCIExpress.png', '    Bom!', 555.00, 17, 'nao');
INSERT INTO `produtos` VALUES (24, 'Motherboard ASUS TUF Gaming B550-Plus ', 'images/MotherboardASUSTUFGamingB550-Plus.jpg', '    (Socket AM4 - AMD B550 - ATX)', 147.00, 10, 'sim');
INSERT INTO `produtos` VALUES (25, 'Motherboard MSI Z390-A Pro ', 'images/MotherboardMSIZ390-APro.jpg', '    (Socket LGA1151 - Intel Z390 - ATX )', 114.00, 10, 'nao');
INSERT INTO `produtos` VALUES (27, 'Processador AMD Ryzen 7 3700X', 'images/ProcessadorAMDRyzen73700X.jpg', '(Socket AM4 - Octa-Core - 3.6 GHz)', 301.00, 11, 'sim');
INSERT INTO `produtos` VALUES (28, 'Processador AMD Ryzen 5 5600X Box', 'images/ProcessadorAMDRyzen55600XBox.jpg', '(Socket AM4 - Hexa-Core - 3.7 GHz)', 309.00, 11, 'nao');
INSERT INTO `produtos` VALUES (29, 'Memória RAM DDR4 KINGSTON FURY ', 'images/RAM1.jpg', '(1 x 8 GB - 2666 MHz - CL 16 - Preto)', 67.00, 12, 'nao');
INSERT INTO `produtos` VALUES (30, 'Memória RAM DDR4 KINGSTON Fury', 'images/RAM2.jpg', ' (1 x 8 GB - 3200 MHz - CL 16 - Preto)', 89.00, 12, 'nao');
INSERT INTO `produtos` VALUES (31, 'Disco SSD Interno SAMSUNG 970 EVO Plus ', 'images/Disco1.jpg', '(1 TB - PCI-Express - 350 MB/s)', 65.00, 13, 'nao');
INSERT INTO `produtos` VALUES (32, 'Disco SSD Interno SAMSUNG 980 PRO ', 'images/Disco2.jpg', '(1 TB - PCI Express 4.0 - 7000 MB/s)', 90.00, 13, 'nao');
INSERT INTO `produtos` VALUES (33, 'Caixa PC NOX Hummer TGX RGB ', 'images/Caixa1.jpg', '(ATX Full Tower - Preto)', 78.00, 2, 'nao');
INSERT INTO `produtos` VALUES (37, 'Caixa PC E-ATX KOLINK Observatory ', 'images/Caixa2.jpg', '(ATX Mid Tower - Branco RGB)', 90.00, 2, 'nao');
INSERT INTO `produtos` VALUES (38, 'Dissipador CPU COOLER MASTER Hyper TX3 EVO', 'images/Cooler1.jpg', '   (MASTER Hyper TX3 EVO) ', 36.00, 14, 'nao');
INSERT INTO `produtos` VALUES (39, 'Fonte de alimentação Nox Hummer X 700W 80+BZ', 'images/FonteAlimt1.jpg', '   (X 700W 80+BZ)', 145.00, 15, 'nao');
INSERT INTO `produtos` VALUES (40, 'Fonte de Alimentação ASUS ROG THOR 1200P ', 'images/FonteAlimt2.jpg', '    (Modular - 80 Plus Platinum)', 399.00, 15, 'nao');
INSERT INTO `produtos` VALUES (41, 'Placa Gráfica GIGABYTE GV-N2060OC-6GD', 'images/PlacaGrafica1.jpg', '   (GV-N2060OC-6GD)', 586.00, 16, 'nao');
INSERT INTO `produtos` VALUES (42, 'Placa Gráfica ZOTAC GeForce GT 710 Zone Edition ', 'images/PlacaGrafica2.jpg', ' (NVIDIA - 2 GB DDR3)', 659.00, 16, 'nao');
INSERT INTO `produtos` VALUES (43, 'Placa de som ASUS Xonar AE 7.1', 'images/PlacaSom1.jpg', '(ASUS Xonar AE 7.1)', 110.00, 17, 'nao');
INSERT INTO `produtos` VALUES (44, 'Placa de som ASUS Xonar Phoebus Solo', 'images/PlacaSom2.jpg', '    (ASUS Xonar Phoebus Solo)', 88.00, 17, 'nao');
INSERT INTO `produtos` VALUES (45, 'Monitor Gaming Curvo AOC C27G2ZU/B ', 'images/Monitor1.jpg', '    (27\'\' - 0.5 ms - 240 Hz - FreeSync Premium)', 293.00, 4, 'sim');
INSERT INTO `produtos` VALUES (46, 'Monitor Gaming Curvo LG 34GL750-B ', 'images/Monitor2.jpg', '    (34\'\' - 1 ms - 144 Hz - G-Sync)', 459.00, 4, 'nao');

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
