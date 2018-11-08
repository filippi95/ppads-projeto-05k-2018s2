-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 08-Nov-2018 às 03:46
-- Versão do servidor: 10.2.17-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u205632605_proj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `text_comentario` text CHARACTER SET utf8 NOT NULL,
  `id_projeto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usuario`, `text_comentario`, `id_projeto`) VALUES
(1, 17, 'Todo texto tem que ter alguns aspectos formais, ou seja, tem que ter estrutura, elementos que estabelecem relaÃ§Ã£o entre si. Dentro dos aspectos formais temos a coesÃ£o e a coerÃªncia, que dÃ£o sentido e forma ao texto. &#34;A coesÃ£o textual Ã© a relaÃ§Ã£o, a ligaÃ§Ã£o, a conexÃ£o entre as palavras, expressÃµes ou frases do textoâ€. A coerÃªncia estÃ¡ relacionada com a compreensÃ£o, a interpretaÃ§Ã£o do que se diz ou escreve. Um texto precisa ter sentido, isto Ã©, precisa ter coerÃªncia. Embora a coesÃ£o nÃ£o seja condiÃ§Ã£o suficiente para que enunciados se constituam em textos, sÃ£o os elementos coesivos que lhes dÃ£o maior legibilidade e evidenciam as relaÃ§Ãµes entre seus diversos componentes, a coerÃªncia depende da coesÃ£o.', 0),
(2, 17, 'O interesse pelo texto como objeto de estudo gerou vÃ¡rios trabalhos importantes de teÃ³ricos da LinguÃ­stica Textual, que percorreram fases diversas cujas caracterÃ­sticas principais eram transpor os limites da frase descontextualizada da gramÃ¡tica tradicional e ainda incluir os relevantes papÃ©is do autor e do leitor na construÃ§Ã£o de textos.\r\n\r\nUm texto pode ser escrito ou oral e, em sentido lato, pode ser tambÃ©m nÃ£o verbal.\r\n\r\nTexto crÃ­tico Ã© uma produÃ§Ã£o textual que parte de um processo reflexivo e analÃ­tico gerando um conteÃºdo com crÃ­tica construtiva e bem fundamentada.', 0),
(3, 17, 'comentario teste', 0),
(4, 18, 'Comentário.', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id_projeto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_projeto` varchar(220) CHARACTER SET utf8 NOT NULL,
  `descricao_projeto` varchar(220) CHARACTER SET utf8 NOT NULL,
  `horas_projeto` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id_projeto`, `id_usuario`, `nome_projeto`, `descricao_projeto`, `horas_projeto`) VALUES
(8, 100, 'Integrar lixeiras da cidade', 'Sistema que monitora a lotação das lixeiras da cidade', 100),
(7, 18, 'Gerenciador de Projetos.', 'Gerenciador projetos que permite associar tarefas e colaboradores. ', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(220) NOT NULL,
  `email_usuario` varchar(220) NOT NULL,
  `apelido_usuario` varchar(220) NOT NULL,
  `senha_usuario` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `apelido_usuario`, `senha_usuario`) VALUES
(17, 'teste2018', 'teste2018@gmail.com', 'teste2018', '$2y$10$Gtofu88aBlqy19xiFK5SS.wxc5OUo8L4YS7lAOOqk9L9uXvyk/0Ki'),
(18, 'professor', 'professor@mackenzie.br', 'professor', '$2y$10$NcsMJdj8oslP9tPQa6NwuubXdd70ENQe/Ard3HECnu45h3CkQmVO.'),
(19, 'Victor Pereira', 'victor.pereira13@hotmail.com', 'vpereira', '$2y$10$IOFvvgASIGRpKK6hPNq69OogU8qyEF5rCr1AZkSaiZCMuTI3SCVbi'),
(20, 'Joselito Laurito', 'joselito@laurito.br', 'joselaur', '$2y$10$z5TBK7QT.u8PbDxSh16mBeX2iyWuS/rShjv8cTLYETzITU6pNMhAm'),
(21, 'teste1', 'teste@teste1.com', 'teste1', '$2y$10$GYezLSHbCOR5sYi3jsW9keyeKBOL9gfbNETHQtjowfgT0ZAvDCLhy'),
(22, 'matheus', 'matheus@matheus.com', 'matheus', '$2y$10$UJ9z1ZWji.Pq4axLIDHGEeRXG5VGJTGGAddeKMmq.RWBDqjpeSrMm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`,`id_usuario`);

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id_projeto`,`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id_projeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
