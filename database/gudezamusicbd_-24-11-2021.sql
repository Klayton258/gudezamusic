-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3312
-- Tempo de geração: 24-Nov-2021 às 07:03
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gudezamusicbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nome`, `senha`, `email`) VALUES
(2, 'Charles Calo', '$2y$10$jr/nw6EIodoYWxQuL.HPsec8up7RFL0pDnq2ki2xJYDLEAEe2aTNa', 'chares@charles.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `artista` varchar(200) NOT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `venda` tinyint(4) DEFAULT 0,
  `arquivo` varchar(250) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'application/octet-stream',
  `description` varchar(20) NOT NULL DEFAULT 'File Transfer',
  `disposition` varchar(20) NOT NULL DEFAULT 'attachment',
  `expires` int(11) NOT NULL DEFAULT 0,
  `cache` varchar(20) NOT NULL DEFAULT 'must-revalidate',
  `pragma` varchar(20) NOT NULL DEFAULT 'public'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`id`, `cover`, `titulo`, `artista`, `tamanho`, `venda`, `arquivo`, `type`, `description`, `disposition`, `expires`, `cache`, `pragma`) VALUES
(1, 'homemmau-cover.jpg', 'Homem Mau (EP)', 'Charles Calo', 28, 0, 'Charles Calo-Home Mau[EP].rar', 'application/octet-stream', 'File Transfer', 'attachment', 0, 'must-revalidate', 'public');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `imagem` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `facebook` int(11) NOT NULL,
  `instagram` int(11) NOT NULL,
  `twitter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `profissao` varchar(20) NOT NULL,
  `nacionalidade` varchar(20) NOT NULL,
  `morada` varchar(20) NOT NULL,
  `genero_musical` varchar(20) NOT NULL,
  `frequencia` varchar(20) NOT NULL,
  `plataforma` varchar(20) NOT NULL,
  `rede_social` varchar(20) NOT NULL,
  `eventos` varchar(20) NOT NULL,
  `evento_marcante` varchar(20) NOT NULL,
  `passa_tempo` varchar(20) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  `noticias` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `data_nasc`, `estado_civil`, `profissao`, `nacionalidade`, `morada`, `genero_musical`, `frequencia`, `plataforma`, `rede_social`, `eventos`, `evento_marcante`, `passa_tempo`, `hobby`, `noticias`) VALUES
(1, 'Charles Calo', '2002-06-15', 'comprometido', 'programador', 'mocambicano', 'matola,intaka', 'rap', 'alta', 'youtube', 'facebook', 'show', 'show', 'taekwondo', 'taekwondo', 'redes sociais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `links_musicas`
--

CREATE TABLE `links_musicas` (
  `id` int(11) NOT NULL,
  `artista` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `youtube` varchar(300) DEFAULT NULL,
  `soundcloud` varchar(300) DEFAULT NULL,
  `spotfy` varchar(300) DEFAULT NULL,
  `audiomack` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `links_musicas`
--

INSERT INTO `links_musicas` (`id`, `artista`, `titulo`, `youtube`, `soundcloud`, `spotfy`, `audiomack`) VALUES
(1, 'Charles Calo', 'Homem Mau', 'teste1', 'teste3', NULL, 'teste2'),
(2, 'Charles Calo', 'Novos Desafios', 'yyyyyy', NULL, 'bbbbbbbbbbb', 'aaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `preco` decimal(6,0) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `visivel` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `id` int(11) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `artista` varchar(200) NOT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `venda` tinyint(4) DEFAULT 0,
  `arquivo` varchar(250) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'application/octet-stream',
  `description` varchar(20) NOT NULL DEFAULT 'File Transfer',
  `disposition` varchar(20) NOT NULL DEFAULT 'attachment',
  `expires` int(11) NOT NULL DEFAULT 0,
  `cache` varchar(20) NOT NULL DEFAULT 'must-revalidate',
  `pragma` varchar(20) NOT NULL DEFAULT 'public'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id`, `cover`, `titulo`, `artista`, `tamanho`, `venda`, `arquivo`, `type`, `description`, `disposition`, `expires`, `cache`, `pragma`) VALUES
(1, 'homemmau-cover.jpg', 'Homem Mau (EP', 'Charles Calo', 28, 0, 'Charles Calo-Homem Mau[EP].rar', 'application/octet-stream', 'File Transfer', 'attachment', 0, 'must-revalidate', 'public');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide_novidades`
--

CREATE TABLE `slide_novidades` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `link` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slide_novidades`
--

INSERT INTO `slide_novidades` (`id`, `imagem`, `titulo`, `descricao`, `link`) VALUES
(1, '618faadc6d50bGM-20210920.jpg', 'Teste', 'Edmilson é um cara soft meio complicado abusadamente esperto mas medroso', 'https://www.youtube.com/watch?v=LsgNG-L6aw4&list=RDi0S8BoR5cFY&index=4'),
(2, '618fc53ed2144gg2.jpg', 'Teste 2', 'Tens que ser livre e sentir-se bem consigo mesmo.', ''),
(3, '618fecc44c4fc20200211_203852.jpg', 'Teste 3', 'eewer', ''),
(4, 'acustica.jpg', 'Teste 4', 'Uma boa descricao para esta imagem', 'http://localhost/phpmyadmin/index.php?route=/sql&db=gudezamusicbd&table=slide_novidades&pos=0'),
(5, '619280172e7bbMinha Música.jpg', 'Teste 4', 'Breve descricao 4', 'https://www.youtube.com/watch?v=LsgNG-L6aw4&list=RDi0S8BoR5cFY&index=4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `imagem`, `titulo`, `link`) VALUES
(2, 'ccslide.png', 'Slide me to de top', 'https://translate.google.com/?sl=en&tl=pt&text=drum%20u%20like%20it&op=translate'),
(3, 'Penso em ti.jpg', 'Penso em ti', 'https://github.com/MazeDevelopmentMoz/mazedev/tree/development'),
(4, 'Prelúdio.jpg', 'Prelúdio', 'https://web.whatsapp.com/'),
(5, '61915b9f861fac89f135f391170c34a8599024277be5d.jpg', 'Dead Pool', 'http://localhost/gudezamusic/public/?a=videos#');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `links_musicas`
--
ALTER TABLE `links_musicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `slide_novidades`
--
ALTER TABLE `slide_novidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `links_musicas`
--
ALTER TABLE `links_musicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `slide_novidades`
--
ALTER TABLE `slide_novidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
