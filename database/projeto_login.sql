-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2021 às 19:52
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` smallint(6) NOT NULL,
  `nome` char(80) NOT NULL,
  `telefone` char(50) NOT NULL,
  `email` char(60) NOT NULL,
  `senha` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'Heitor Oliver da Mota', '(38) 99544-7947', 'heitoroliverdamota@redhouse.com.br', 'f1f99771d4921b88173b9abed3305762'),
(2, 'Eduardo Antonio Anthony Castro', '(38) 98489-0229', 'eduardoantonio@dpauladecor.com.br', 'd93591bdf7860e1e4ee2fca799911215'),
(3, 'César Tomás da Rocha', '(38) 3524-5728', 'cesartomas87@multieventos.art.br', 'b59c67bf196a4758191e42f76670ceba'),
(4, 'Gabrielly Eliane Moreira', '(83) 99903-0794', 'gabriellyelianemoreira@gmail.com', '2be9bd7a3434f7038ca27d1918de58bd'),
(5, 'Sebastião Benício Caldeira', '(11) 98539-0331', 'sebastiaobeniciocaldeira@hotmail.com.br', '934b535800b1cba8f96a5d72f72f1611'),
(6, 'Louise Isadora Aparício', '(11) 99853-1195', 'llouiseisadoraaparicio@xerocopiadora.com.br', 'dbc4d84bfcfe2284ba11beffb853a8c4'),
(7, 'Raimunda Alessandra de Paula', '(21) 3933-2086', 'raimundaalessandradepaula@outlook.com', '6074c6aa3488f3c2dddff2a7ca821aab'),
(8, 'Mário Lorenzo Fernando Alves', '(21) 3566-4484', 'mariolorenzofernandoalves@gmail.com', 'e9510081ac30ffa83f10b68cde1cac07'),
(9, 'Rafaela Isabelly Louise Viana', '(21) 99303-8204', 'rafaelaisabellylouiseviana@gmail.com', 'fa246d0262c3925617b0c72bb20eeb1d'),
(10, 'Gustavo Henrique Prado', '(11) 98112-3611', 'gustavohenrique@gmail.com', '580796a888df897b38097bd6c1fdaa96');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
