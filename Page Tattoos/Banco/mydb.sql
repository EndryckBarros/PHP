-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2018 às 23:36
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `idArtista` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Sobrenome` varchar(40) NOT NULL,
  `CPF` int(11) NOT NULL,
  `Telefone` int(20) NOT NULL,
  `Cod` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Login_idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`idArtista`, `Nome`, `Sobrenome`, `CPF`, `Telefone`, `Cod`, `Email`, `Login_idLogin`) VALUES
(4, 'Marcos', 'Paulo', 1111, 9999, '0', 'marc@gmail.com', 24),
(5, 'Marcos2', 'Paulo', 2222, 9999, '1111', 'marc@gmail.com', 25),
(6, 'Marcos3', 'Paulo', 3333, 9999, '0', 'marc@gmail.com', 27),
(7, 'Marcos4', 'Paulo', 4444, 9999, '1111', 'marc@gmail.com', 28);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Nome`) VALUES
(1, 'Old School'),
(2, 'New School'),
(3, 'Geometricas'),
(4, 'Aquarela'),
(5, 'Pontilhismo'),
(6, 'Realismo'),
(7, 'Biomecanico'),
(8, 'Tribal'),
(9, 'Maori'),
(10, 'Oriental'),
(11, 'Tinta Branca'),
(12, 'Bold line'),
(13, 'Celta'),
(14, 'Surrealismo'),
(15, 'Trash Polka'),
(16, 'Abstrato'),
(17, 'Lettering'),
(18, 'Haida'),
(19, 'Celta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `idCidade` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `UF_idUF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`idCidade`, `Nome`, `UF_idUF`) VALUES
(1, 'Florianopolis', 2),
(2, 'Chapeco', 2),
(3, 'Curitiba', 3),
(4, 'Londrina', 3),
(5, 'Pinhais', 3),
(6, 'Colombo', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudio`
--

CREATE TABLE `estudio` (
  `idEstudio` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `CNPJ` varchar(14) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Cidade_idCidade` int(11) NOT NULL,
  `Login_idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estudio`
--

INSERT INTO `estudio` (`idEstudio`, `Nome`, `Telefone`, `CNPJ`, `Endereco`, `Cidade_idCidade`, `Login_idLogin`) VALUES
(1, 'Fandangus', '9999', '1111', 'Fandanguetes', 1, 18),
(3, 'Fandangus2', '9999', '2222', 'Fandanguetes2222', 2, 20),
(4, 'Fandangus3', '9999', '3333', 'Fandanguetes 3333', 2, 21),
(5, 'Fandangus4', '9999', '4444', 'Fandanguetes 4444', 2, 26);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `Login` varchar(45) NOT NULL,
  `Senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `Login`, `Senha`) VALUES
(18, 'asd1', 'asd'),
(20, 'asd2', 'asd'),
(21, 'asd3', 'asd'),
(24, 'Marc', 'asd'),
(25, 'Marc2', 'asd'),
(26, 'asd4', 'asd'),
(27, 'Marc3', 'asd'),
(28, 'Marc4', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `idPostagem` int(11) NOT NULL,
  `ImagemLink` varchar(80) NOT NULL,
  `Curtidas` int(10) DEFAULT NULL,
  `Avaliacao` int(2) DEFAULT NULL,
  `Legenda` varchar(200) DEFAULT NULL,
  `Artista_idArtista` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `titulo` varchar(20) DEFAULT NULL,
  `Categoria_idCategoria` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`idPostagem`, `ImagemLink`, `Curtidas`, `Avaliacao`, `Legenda`, `Artista_idArtista`, `data`, `titulo`, `Categoria_idCategoria`) VALUES
(1, 'Card0.jpg', NULL, NULL, 'Salamaleico', 4, '2018-04-24 23:36:51', 'Card Teste', 9),
(2, 'Card1.jpg', NULL, NULL, 'salamaleico2', 4, '2018-04-25 00:02:56', 'Esse ta valendo', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `Data` date DEFAULT NULL,
  `Valor` float NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Artista_idArtista` int(11) NOT NULL,
  `Endereco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`idServico`, `Data`, `Valor`, `Usuario_idUsuario`, `Artista_idArtista`, `Endereco`) VALUES
(1, '2018-04-28', 3000, 1, 4, 'Fandanguetes'),
(2, '2018-04-28', 3000, 1, 4, 'Fandanguetes'),
(3, '2018-04-28', 3000, 1, 4, 'Fandanguetes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uf`
--

CREATE TABLE `uf` (
  `idUF` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `uf`
--

INSERT INTO `uf` (`idUF`, `Nome`) VALUES
(1, 'ParanÃ¡'),
(2, 'Santa Catarina'),
(3, 'Paraná'),
(4, 'Rio Grande do Sul');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `CPF` int(11) NOT NULL,
  `Telefone` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nome`, `CPF`, `Telefone`) VALUES
(1, 'Frederico', 1111, 9999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`idArtista`),
  ADD UNIQUE KEY `CPF_UNIQUE` (`CPF`),
  ADD KEY `fk_Artista_Login1_idx` (`Login_idLogin`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idCidade`),
  ADD KEY `fk_Cidade_UF1_idx` (`UF_idUF`);

--
-- Indexes for table `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`idEstudio`),
  ADD UNIQUE KEY `CNPJ_UNIQUE` (`CNPJ`),
  ADD KEY `fk_Estudio_Cidade1_idx` (`Cidade_idCidade`),
  ADD KEY `fk_Estudio_Login1_idx` (`Login_idLogin`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`),
  ADD UNIQUE KEY `Login_UNIQUE` (`Login`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`idPostagem`),
  ADD KEY `fk_Postagem_Artista1_idx` (`Artista_idArtista`),
  ADD KEY `fk_Postagem_Categoria` (`Categoria_idCategoria`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idServico`),
  ADD KEY `fk_Servico_Usuario1_idx` (`Usuario_idUsuario`),
  ADD KEY `fk_Servico_Artista1_idx` (`Artista_idArtista`);

--
-- Indexes for table `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`idUF`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `CPF_UNIQUE` (`CPF`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
  MODIFY `idArtista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `estudio`
--
ALTER TABLE `estudio`
  MODIFY `idEstudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `idPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uf`
--
ALTER TABLE `uf`
  MODIFY `idUF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `fk_Artista_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_Cidade_UF1` FOREIGN KEY (`UF_idUF`) REFERENCES `uf` (`idUF`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `fk_Estudio_Cidade1` FOREIGN KEY (`Cidade_idCidade`) REFERENCES `cidade` (`idCidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Estudio_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `fk_Postagem_Artista` FOREIGN KEY (`Artista_idArtista`) REFERENCES `artista` (`idArtista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Postagem_Categoria` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `fk_Servico_Artista1` FOREIGN KEY (`Artista_idArtista`) REFERENCES `artista` (`idArtista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Servico_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
