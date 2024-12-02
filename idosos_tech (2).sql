-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2024 às 00:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `idosos_tech`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `alterar_materiais_adm` (IN `p_materiaid` INT, IN `p_titulo` VARCHAR(200), IN `p_ano` DATE, IN `p_semestre` ENUM('1° semestre','2° semestre'), IN `p_arquivo` VARCHAR(500), IN `p_link_tarefa` VARCHAR(200), IN `p_link_jogo` VARCHAR(200), IN `p_link_video` VARCHAR(200))   BEGIN
    -- Atualiza apenas o registro correspondente ao p_materiaid
    UPDATE tb_materiais
    SET titulo_materia = p_titulo,
        ano = p_ano,
        semestre = p_semestre,
        arquivo = p_arquivo,
        link_tarefa = p_link_tarefa,
        link_jogo = p_link_jogo,
        link_video = p_link_video
    WHERE tb_materiais.materiaid = p_materiaid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `excluir_materiais_adm` (IN `p_materiaid` INT)   BEGIN
    DELETE FROM tb_materiais
    WHERE tb_materiais.materiaid = p_materiaid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAnos` ()   BEGIN
    SELECT DISTINCT YEAR(ano)
    FROM Tb_materiais
    ORDER BY ano DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetSemestre` (IN `ano` VARCHAR(4))   BEGIN
    SELECT DISTINCT semestre
    FROM Tb_materiais
    WHERE ano = ano;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_materiais` (IN `p_user_modifiedby` INT, IN `p_titulo` VARCHAR(200), IN `p_ano` DATE, IN `p_semestre` ENUM('1° semestre','2° semestre'), IN `p_arquivo` VARCHAR(500), IN `p_link_tarefa` VARCHAR(200), IN `p_link_jogo` VARCHAR(200), IN `p_link_video` VARCHAR(200))   BEGIN
    INSERT INTO Tb_materiais(
        user_modifiedby, titulo_materia, ano, semestre, arquivo, link_tarefa, link_jogo, link_video
    ) 
    VALUES (
        p_user_modifiedby, p_titulo, p_ano, p_semestre, p_arquivo, p_link_tarefa, p_link_jogo, p_link_video
    );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_materiais_ano_adm` (IN `ano` DATE)   BEGIN
    SELECT * FROM Tb_materiais 
    WHERE YEAR(ano) = YEAR(ano);
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_materiais_nome_adm` (IN `nome` VARCHAR(200))   BEGIN
    SELECT * FROM Tb_materiais 
    WHERE lower(titulo_materia) like CONCAT('%', nome, '%');
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_todos_materiais_adm` ()   BEGIN
    SELECT materiaid, user_modifiedby, titulo_materia, ano, semestre, arquivo, link_tarefa, link_jogo, link_video 
    FROM Tb_materiais;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_administrador`
--

CREATE TABLE `tb_administrador` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`userid`, `username`, `email`, `senha`) VALUES
(1, 'teste', 'teste@email.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_materiais`
--

CREATE TABLE `tb_materiais` (
  `materiaid` int(11) NOT NULL,
  `user_modifiedby` int(11) NOT NULL,
  `titulo_materia` varchar(200) NOT NULL,
  `ano` date NOT NULL,
  `semestre` enum('1° semestre','2° semestre') NOT NULL,
  `arquivo` varchar(500) DEFAULT NULL,
  `link_tarefa` varchar(200) DEFAULT NULL,
  `link_jogo` varchar(200) DEFAULT NULL,
  `link_video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`userid`);

--
-- Índices de tabela `tb_materiais`
--
ALTER TABLE `tb_materiais`
  ADD PRIMARY KEY (`materiaid`),
  ADD KEY `user_modifiedby` (`user_modifiedby`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_administrador`
--
ALTER TABLE `tb_administrador`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_materiais`
--
ALTER TABLE `tb_materiais`
  MODIFY `materiaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_materiais`
--
ALTER TABLE `tb_materiais`
  ADD CONSTRAINT `tb_materiais_ibfk_1` FOREIGN KEY (`user_modifiedby`) REFERENCES `tb_administrador` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
