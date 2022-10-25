-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2022 às 13:27
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
-- Banco de dados: `banco_curriculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_deficiencia`
--

CREATE TABLE `categorias_deficiencia` (
  `IDCD` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias_deficiencia`
--

INSERT INTO `categorias_deficiencia` (`IDCD`, `categoria`) VALUES
(1, 'Superiores'),
(2, 'Inferiores'),
(3, 'Paralisado Cerebral'),
(4, 'Nanismo'),
(5, 'Auditivo'),
(6, 'Visual'),
(7, 'Mental');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `IDC` int(11) NOT NULL,
  `IDE` int(11) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `CPF` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado_natal` varchar(100) NOT NULL,
  `cidade_natal` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `estado_civil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `deficiencia`
--

CREATE TABLE `deficiencia` (
  `IDD` int(11) NOT NULL,
  `IDC` int(11) NOT NULL,
  `deficiencia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `deficiencia`
--

INSERT INTO `deficiencia` (`IDD`, `IDC`, `deficiencia`) VALUES
(1, 2, 'Amputado de 1 membro abaixo do joelho '),
(3, 2, 'Amputado de 1 membro acima do joelho'),
(4, 2, 'Amputado de 2 membros abaixo do joelho'),
(5, 2, 'Amputado de 2 membros acima do joelho'),
(6, 2, 'Atrofia ou encurtamento (sem uso de órtese ou muleta'),
(7, 2, 'Paralisia, Atrofia ou encurtamento de 1 membro'),
(8, 2, 'Paraplegia'),
(9, 1, 'Atrofia ou encurtamento de 1 ou 2 membros (sem perca da funcionalidade)'),
(10, 1, 'Paralisia de 1 membro ou 2 membros'),
(11, 1, 'Amputado de 1 membro'),
(12, 1, 'Amputado de 2 membros'),
(13, 1, 'Tetraplegia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `CPF` varchar(11) NOT NULL,
  `CEP` int(8) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `numero_complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `IDE` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`IDE`, `estado`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amazonas'),
(4, 'Amapá'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Minas Gerais'),
(12, 'Mato Grosso do Sul'),
(13, 'Mato Grosso'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Pernambuco'),
(17, 'Piauí'),
(18, 'Paraná'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande do Norte'),
(21, 'Rondônia'),
(22, 'Roraima'),
(23, 'Rio Grande do Sul'),
(24, 'Santa Catarina'),
(25, 'Sergipe'),
(26, 'São Paulo'),
(27, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_civil`
--

CREATE TABLE `estado_civil` (
  `IDEC` int(11) NOT NULL,
  `estado_civil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estado_civil`
--

INSERT INTO `estado_civil` (`IDEC`, `estado_civil`) VALUES
(1, 'Solteiro(a)'),
(2, 'Em um relacionamento'),
(3, 'Casado(a)'),
(4, 'Divorciado(a)'),
(5, 'Viúvo(a)'),
(6, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`genero`) VALUES
('Feminino'),
('Masculino'),
('Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `CPF` varchar(11) NOT NULL,
  `DDD` varchar(3) NOT NULL,
  `telefone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias_deficiencia`
--
ALTER TABLE `categorias_deficiencia`
  ADD PRIMARY KEY (`IDCD`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`IDC`);

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`CPF`),
  ADD KEY `fk_etado_civil` (`estado_civil`),
  ADD KEY `fk_genero` (`genero`);

--
-- Índices para tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  ADD PRIMARY KEY (`IDD`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD KEY `fk_cpf` (`CPF`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IDE`);

--
-- Índices para tabela `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`IDEC`);

--
-- Índices para tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`genero`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD KEY `fk_cpf_telefone` (`CPF`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  MODIFY `IDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `IDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `IDEC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dados`
--
ALTER TABLE `dados`
  ADD CONSTRAINT `fk_etado_civil` FOREIGN KEY (`estado_civil`) REFERENCES `estado_civil` (`IDEC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_genero` FOREIGN KEY (`genero`) REFERENCES `genero` (`genero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_cpf` FOREIGN KEY (`CPF`) REFERENCES `dados` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `fk_cpf_telefone` FOREIGN KEY (`CPF`) REFERENCES `dados` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
