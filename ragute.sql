-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2022 às 05:45
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ragute`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`ID`, `NOME`) VALUES
(1, 'Hamburguer'),
(2, 'Naturais'),
(3, 'Frango'),
(4, 'Hot-Dogs'),
(5, 'Porções Quentes'),
(6, 'Porções Frias'),
(7, 'Não Alcoólicas'),
(8, 'Alcoólicas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contem`
--

CREATE TABLE `contem` (
  `ID` int(11) NOT NULL,
  `ID_PRODUTOS` int(11) NOT NULL,
  `ID_INGREDIENTES` int(11) NOT NULL,
  `QUANTIDADE` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `ID` int(11) NOT NULL,
  `INGREDIENTE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`ID`, `INGREDIENTE`) VALUES
(1, 'Hamburguer'),
(2, 'Alface'),
(3, 'Tomate'),
(4, 'Ovo'),
(5, 'Queijo'),
(6, 'Presunto'),
(7, 'Catupiry'),
(8, 'Bacon'),
(9, 'Cheddar'),
(10, 'Filé de Frango'),
(11, 'Hamburguer Caseiro'),
(12, 'Salsicha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(30) NOT NULL,
  `VALOR` float(10,2) NOT NULL,
  `INGREDIENTES` varchar(255) DEFAULT NULL,
  `ATIVO` tinyint(1) NOT NULL,
  `IMG` varchar(255) DEFAULT NULL,
  `ID_CATEGORIA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `NOME`, `VALOR`, `INGREDIENTES`, `ATIVO`, `IMG`, `ID_CATEGORIA`) VALUES
(6, 'Basicão', 15.00, 'Pão Brioche\r\nBurger 160g\r\nQueijo Prato \r\nMolho Especial', 1, '../../assets/img/202209140007_R2EF_i.png', 1),
(7, '16mm', 19.99, 'Pão Brioche \r\n2x burgers 160g Angus\r\nCatupiry\r\nBacon\r\nMaiô Up.', 1, '../../assets/img/202201262236_3stj_p.png', 1),
(8, 'Classic Egg', 31.99, 'Pão Brioche \r\nBurger 160g  Angus \r\nAmerican Cheese Cheddar\r\nOvo gema dura\r\nBacon\r\nMaiô Up', 1, '../../assets/img/202201262227_IA1I_p.png', 1),
(9, 'Cremosinho', 32.99, 'Pão brioche \r\n3x Smash de 80g Angus\r\nCatupiry\r\nBacon crocante ', 1, '../../assets/img/202201262256_GiKD_p.png', 1),
(10, 'Duo Smash', 19.99, 'Pão brioche\r\n2x smash 80g 100% Angus\r\nAmerican Cheese Cheddar\r\nBacon crocante \r\nMaiô Up', 1, '../../assets/img/202201270955_2F4j_p.png', 1),
(11, 'Futuro Burger [Vegetariano]', 15.99, 'Pãozinho Brioche\r\nBurger 115g [pura suculência]\r\nQueijo American Cheese\r\nAlface & Tomate\r\nMaiô Up', 1, '../../assets/img/202201262125_V4LU_p.png', 1),
(12, 'Malvadao', 29.99, 'Pão brioche\r\nBurger 160g Angus\r\ncheddar cremoso \r\nFarofa de bacon\r\nBatata fritas\r\nMaiô Up', 1, '../../assets/img/202201271006_PlLV_p.png', 1),
(13, 'Miami', 29.99, 'Pão brioche\r\n2x Smash 80g\r\nQueijo cheddar\r\nBacon crocante\r\nCebola branca picadinha\r\nMolho Miami-levemente apimentado', 1, '../../assets/img/202201271951_4Mrm_p.png', 1),
(14, 'Original', 24.99, 'Pão Brioche\r\nBurger 160g 100% Angus \r\nQueijo Prato\r\nAlface & Tomate\r\nMaiô Up.', 1, '../../assets/img/202201262158_cu1Z_p.png', 1),
(15, 'Super 8', 31.99, 'Pão Autraliano\r\nBurger 160g Angus \r\nAmerican Cheese Cheddar\r\nCebola Caramelizada\r\nBacon fatia crocante \r\nMaiô Up', 1, '../../assets/img/202201262214_bJh8_p.png', 1),
(16, 'Texas', 31.99, 'Pão Brioche \r\nBurger 160g 100% Angus\r\nAmerican Cheese Cheddar\r\nOnion Rings\r\nBarbecue\r\nMaiô Up', 1, '../../assets/img/202201262121_Y94F_p.png', 1),
(17, 'O Rei Cheddar e Bacon', 17.50, 'Pão de hot-dog\r\nSalsicha\r\nBarbecue\r\nCheddar\r\nBacon\r\nMolho especial ', 1, '../../assets/img/202202101851_J5M4_i.png', 4),
(20, 'Dog Cremoso', 19.99, 'Pão de hot-dog\r\nSalsicha\r\nFricassê\r\nBatata palha\r\nQueijo muçarela\r\nMolho especial', 1, '../../assets/img/202202101849_025N_i.png', 4),
(22, 'Mac Dog and Cheese', 21.99, 'Pão de hot-dog\r\nSalsicha\r\nMac and cheese\r\nMolho cheddar \r\nBacon frito em cubos', 1, '../../assets/img/202202101849_P107_i.png', 4),
(23, 'Bacon Dog', 17.50, 'Pão de hot-dog\r\nSalsicha\r\nBacon\r\nQueijo muçarela\r\nMaionese de bacon\r\nMolho clássico', 1, '../../assets/img/202202101848_B87C_i.png', 4),
(24, 'Onion Dog', 20.99, 'Pão de hot-dog\r\nSalsicha\r\nMolho Catupiry\r\nGeleia de bacon\r\nOnion rings\r\nMolho especial', 1, '../../assets/img/202202101850_KM84_i.png', 4),
(25, 'Lanche de Atum', 24.99, 'Pão de forma integral\r\nAlface americana\r\nTomate\r\nQueijo branco\r\nPatê de atum ', 1, '../../assets/img/201810281217_lanch.png', 2),
(26, 'Lanche de Peito de Peru', 23.99, 'Peito de peru defumado\r\nCreme de ricota\r\nAlface\r\nTomate\r\nPão de forma integral', 1, '../../assets/img/201810281140_lanch.png', 2),
(27, 'Lanche Vegetariano', 19.99, 'Pão de forma integral\r\nAlface americana\r\nTomate\r\nQueijo branco\r\nCreme de ricota', 1, '../../assets/img/201810281204_lanch.png', 2),
(28, 'Cbc Chicken', 19.99, 'Pão Brioche\r\nTiras de sobrecoxa\r\nMolho cheddar\r\nBarbecue.', 1, '../../assets/img/202110261842_PB12_i.png', 3),
(29, 'Gringo Burger', 20.99, 'Pão Brioche\r\nTiras de sobrecoxa\r\nMaionese de bacon', 1, '../../assets/img/202110270945_4755_i.png', 3),
(30, 'Gringo Picante', 21.99, 'Pão Brioche\r\nTiras de sobrecoxa\r\nMaionese de bacon picante.', 1, '../../assets/img/202110281606_32AS_i.png', 3),
(31, 'Calabresa acebolada', 32.99, 'Porção de calabresa acebolada', 1, '../../assets/img/202110011900_F218_i.png', 5),
(32, 'Anéis de cebola', 25.99, 'Porção de anéis de cebola', 1, '../../assets/img/202110011904_73UT_i.png', 5),
(33, 'Batata carinha', 23.99, 'Porção de batata carinha', 1, '../../assets/img/202110011857_4G4U_i.png', 5),
(34, 'Batata frita', 19.99, 'Porção de batata frita', 1, '../../assets/img/202110011856_H65P_i.png', 5),
(35, 'Mandioca frita', 21.99, 'Porção de mandioca frita', 1, '../../assets/img/202110011905_HI2I_i.png', 5),
(36, 'Polenta frita', 21.99, 'Porção de polenta frita', 1, '../../assets/img/202110011903_J545_i.png', 5),
(37, 'Porção - Azeitonas', 23.99, 'Porção de azeitonas', 1, '../../assets/img/202009032111_WxMi_p.png', 6),
(38, 'Porção - Mortadela', 19.99, 'Porção de mortadela', 1, '../../assets/img/202009032117_DLDx_.png', 6),
(39, 'Porção - Presunto', 26.99, 'Porção de presunto', 1, '../../assets/img/202009032120_PjQC_p.png', 6),
(40, 'Porção - Provolone', 47.99, 'Porção de provolone', 1, '../../assets/img/202009032116_NJ8f_.png', 6),
(41, 'Porção - Queijo prato', 39.99, 'Porção de queijo prato', 1, '../../assets/img/202009032112_kNds_p.png', 6),
(42, 'Porção- Salame', 39.99, 'Porção de salame', 0, '../../assets/img/202009032114_tD3d_.png', 6),
(43, 'Porção - Tábua de frios', 59.99, 'Tábua de frios', 1, '../../assets/img/202009032121_LEzC_t.png', 6),
(44, 'Coca-Cola Café Expresso 220ml', 3.19, 'Lata 220ml', 1, '../../assets/img/202207082321_qf1ckbxykc9.png', 7),
(45, 'Coca-Cola Garrafa 2l', 10.99, 'Garrafa 2l', 1, '../../assets/img/202202141638_8qz0yxi669i.png', 7),
(46, 'Coca-Cola Original 250ml', 3.19, 'Garrafa 250ml', 1, '../../assets/img/202204051500_qbjrbi75aj.png', 7),
(47, 'Coca-Cola Original 350ml', 4.99, 'Lata 350ml', 1, '../../assets/img/202204051646_mw3yvneora.png', 7),
(48, 'Coca-Cola Original 600ml', 7.20, 'Garrafa 600ml', 1, '../../assets/img/202204051706_a3y4wriexli.png', 7),
(49, 'Fanta Guaraná 350ml', 4.50, 'Lata 350ml', 1, '../../assets/img/202210311529_yra9lc7oyj.png', 7),
(50, 'Fanta Guaraná 2l', 9.00, 'Garrafa 2l', 1, '../../assets/img/202204071632_eulpssl61j7.png', 7),
(51, 'Fanta Guaraná 600ml', 5.49, 'Garrafa 600ml', 1, '../../assets/img/202202231826_yyp2henp1s.png', 7),
(52, 'Fanta Laranja 2l', 9.00, 'Garrafa 2l', 1, '../../assets/img/202204071727_nmqete6nvg.png', 7),
(53, 'Fanta Laranja 350ml', 4.49, 'Lata 350ml', 1, '../../assets/img/202204071736_nrkyvwtstyd.png', 7),
(54, 'Fanta Laranja 600ml', 5.49, 'Garrafa 600ml', 1, '../../assets/img/202204071742_dbzuqtvxknd.png', 7),
(55, 'Fanta Uva 350ml', 4.49, 'Lata 350ml', 1, '../../assets/img/202204081755_uq90jp1kyx.png', 7),
(56, 'Fanta Uva 600ml', 5.49, 'Garrafa 600ml', 1, '../../assets/img/202204110914_bpk3f8k26jo.png', 7),
(57, 'Água Tônica Petra Lata 350ml', 4.49, 'Lata 350ml', 1, '../../assets/img/202207281123_yfnt7ioevk.png', 7),
(60, 'Água Mineral Crystal Sem Gás', 1.99, 'Água Mineral 500ml', 0, '../../assets/img/semgas.png', 7),
(61, 'Água Mineral Crystal Com Gás', 2.49, 'Água Mineral 500ml', 0, '../../assets/img/comgas.png', 7),
(62, 'Água Mineral Crystal Com Gás', 1.99, 'Água Mineral 500ml', 1, '../../assets/img/images.jpg', 7),
(63, 'Água Mineral Crystal Com Gás', 2.49, 'Água Mineral 500ml', 1, '../../assets/img/Agua-com-Gas.jpg', 7),
(64, 'Cerveja Corona Extra 330ml', 6.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202210142214_t28l4m1x588.png', 8),
(65, 'Cerveja Crystal Garrafa 250ml', 2.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202210142215_tr42oxh0stm.png', 8),
(66, 'Cerveja Crystal Lata 350ml', 3.49, 'Produto para maiores de 18 anos', 1, '../../assets/img/202202091348_de3pkpixv9m.png', 8),
(67, 'Cerveja Heineken 330ml', 8.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202202091750_4u17481mq26.png', 8),
(68, 'Cerveja Heineken 350ml', 7.49, 'Produto para maiores de 18 anos', 1, '../../assets/img/202202081741_7olytirvsw3.png', 8),
(69, 'Cerveja Lata Brahma 350ml', 4.49, 'Produto para maiores de 18 anos', 1, '../../assets/img/202202091306_sl2q1twahm.png', 8),
(70, 'Cerveja Skol Pilsen 350ml', 4.49, 'Produto para maiores de 18 anos', 1, '../../assets/img/202202101646_guyab3oojda.png', 8),
(71, 'Cerveja Skol Pilsen Lata 550ml', 5.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202210142208_dnc6hodsuye.png', 8),
(72, 'Cerveja Sub Zero Pilsen Antarc', 3.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202210142210_m3hy91akntf.png', 8),
(73, 'Coquetel Alcoólico Limão High ', 8.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202207082327_bw0fb64sqa5.png', 8),
(74, 'Coquetel Blueberry Crazy Delir', 8.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202202100208_1gfs37jm9mg.png', 8),
(75, 'Coquetel Melancia e Morango Hi', 8.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202207082327_dcynu488o0u.png', 8),
(76, 'Chopp de Vinho Tinto Stempel 5', 9.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202209121502_eefv28uw6gw.png', 8),
(77, 'Cerveja Spaten Puro Malte Lata', 6.99, 'Produto para maiores de 18 anos', 1, '../../assets/img/202210041657_xsl6nd5tm.png', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(30) NOT NULL,
  `SENHA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `LOGIN`, `SENHA`) VALUES
(1, 'admin', '51f011b84d9afe30f68bdc5ecf539a7c'),
(2, 'joao11', '4297f44b13955235245b2497399d7a93');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `contem`
--
ALTER TABLE `contem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_CONTEM_PRODUTOS` (`ID_PRODUTOS`),
  ADD KEY `FK_CONTEM_INGREDIENTES` (`ID_INGREDIENTES`);

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_PRODUTOS_CATEGORIA` (`ID_CATEGORIA`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contem`
--
ALTER TABLE `contem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contem`
--
ALTER TABLE `contem`
  ADD CONSTRAINT `FK_CONTEM_INGREDIENTES` FOREIGN KEY (`ID_INGREDIENTES`) REFERENCES `ingredientes` (`ID`),
  ADD CONSTRAINT `FK_CONTEM_PRODUTOS` FOREIGN KEY (`ID_PRODUTOS`) REFERENCES `produtos` (`ID`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_PRODUTOS_CATEGORIA` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categoria` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
