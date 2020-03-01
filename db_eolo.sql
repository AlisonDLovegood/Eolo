-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Mar-2020 às 16:30
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_eolo`
--
CREATE DATABASE IF NOT EXISTS `db_eolo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_eolo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administradores`
--

CREATE TABLE IF NOT EXISTS `tb_administradores` (
  `ADM_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `ADM_NOME` varchar(45) NOT NULL,
  `ADM_SENHA` varchar(80) NOT NULL,
  PRIMARY KEY (`ADM_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_administradores`
--

INSERT INTO `tb_administradores` (`ADM_CODIGO`, `ADM_NOME`, `ADM_SENHA`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aeronaves`
--

CREATE TABLE IF NOT EXISTS `tb_aeronaves` (
  `aen_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `aen_nome` varchar(45) NOT NULL,
  `aen_tipo` varchar(45) NOT NULL,
  `aen_ano` int(11) NOT NULL,
  `aen_largura` decimal(8,2) NOT NULL,
  `aen_peso` decimal(8,2) NOT NULL,
  `aen_cap_combustivel` int(11) NOT NULL,
  `aen_fab_codigo` int(11) NOT NULL,
  PRIMARY KEY (`aen_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tb_aeronaves`
--

INSERT INTO `tb_aeronaves` (`aen_codigo`, `aen_nome`, `aen_tipo`, `aen_ano`, `aen_largura`, `aen_peso`, `aen_cap_combustivel`, `aen_fab_codigo`) VALUES
(5, 'Airbus A380', 'Avião comercial turbofan quadrimotor', 2004, '79.00', '276800.00', 500, 2),
(6, 'British Aerospace 146 (BAe 146)', 'Transporte comercial/Transporte militar', 1978, '26.21', '23897.00', 500, 3),
(7, 'Cessna 208 Caravan', 'Utilitário/Executivo/Transporte regional', 1982, '15.87', '2073.00', 500, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aeroportos`
--

CREATE TABLE IF NOT EXISTS `tb_aeroportos` (
  `aer_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `aer_latitude` varchar(15) NOT NULL,
  `aer_longitude` varchar(15) NOT NULL,
  `aer_nome` varchar(30) DEFAULT NULL,
  `aer_cidade` varchar(45) NOT NULL,
  `aer_estado` varchar(45) NOT NULL,
  PRIMARY KEY (`aer_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_aeroportos`
--

INSERT INTO `tb_aeroportos` (`aer_codigo`, `aer_latitude`, `aer_longitude`, `aer_nome`, `aer_cidade`, `aer_estado`) VALUES
(1, '-6.445273', '-37.068979', 'Aeroporto Caicoense', 'Caico', 'Rio Grande do Norte'),
(2, '-5.810967', '-35.200191', 'Aeroporto Natalense', 'Natal', 'Rio Grande do Norte'),
(4, '-6.440284', '-37.079141', 'Aeródromo Rui Mariz', 'Caicó', 'RN'),
(5, '-6.278431', '-36.537759', 'Aeroporto de Currais Novos', 'Currais Novos', 'RN'),
(6, '-5.768892', '-35.366158', 'Aeroporto de Natal', 'Natal', 'RN'),
(7, '-6.637966', '-36.653620', 'Aeroporto Armil', 'Parelhas', 'RN'),
(8, '-5.194688', '-37.363570', 'Aeroporto de Mossoró', 'Mossoró', 'RN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresas`
--

CREATE TABLE IF NOT EXISTS `tb_empresas` (
  `emp_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nome` varchar(45) NOT NULL,
  `emp_sigla` varchar(10) NOT NULL,
  `emp_email` varchar(45) NOT NULL,
  `emp_senha` varchar(45) NOT NULL,
  `emp_confirsenha` varchar(45) NOT NULL,
  `emp_tel1` varchar(45) NOT NULL,
  `emp_tel2` varchar(45) NOT NULL,
  PRIMARY KEY (`emp_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_empresas`
--

INSERT INTO `tb_empresas` (`emp_codigo`, `emp_nome`, `emp_sigla`, `emp_email`, `emp_senha`, `emp_confirsenha`, `emp_tel1`, `emp_tel2`) VALUES
(2, 'ari', 'ari', 'ari', 'ari', 'ari', '4353434345634', '5436456456'),
(4, 'Gol', 'Gol', 'gol@gmail.com', 'gol12345', 'gol12345', '99999999999', '99999998888'),
(5, 'LATAM', 'LATAM', 'latam@gmail.com', 'latam12345', 'latam12345', '99888888888', '88777777777'),
(6, 'Azul Linhas', 'AZUL', 'azul@gmail.com', 'azul12345', 'azul12345', '77666666666', '66555555555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fabricantes`
--

CREATE TABLE IF NOT EXISTS `tb_fabricantes` (
  `fab_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `fab_nome` varchar(45) NOT NULL,
  `fab_email` varchar(45) NOT NULL,
  PRIMARY KEY (`fab_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tb_fabricantes`
--

INSERT INTO `tb_fabricantes` (`fab_codigo`, `fab_nome`, `fab_email`) VALUES
(12, 'EADS Airbus', 'eadsairbus@gmail.com'),
(13, 'British Aerospace BAE Systems', 'british@gmail.com'),
(14, 'Cessna Aircraft Company', 'cessna@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pilotos`
--

CREATE TABLE IF NOT EXISTS `tb_pilotos` (
  `pil_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pil_email` varchar(50) NOT NULL,
  `pil_cpf` varchar(45) NOT NULL,
  `pil_emp_codigo` int(11) NOT NULL,
  `pil_sobrenome` varchar(45) NOT NULL,
  `pil_senha` varchar(45) NOT NULL,
  `pil_confirsenha` varchar(45) NOT NULL,
  `pil_nome` varchar(45) NOT NULL,
  PRIMARY KEY (`pil_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_pilotos`
--

INSERT INTO `tb_pilotos` (`pil_codigo`, `pil_email`, `pil_cpf`, `pil_emp_codigo`, `pil_sobrenome`, `pil_senha`, `pil_confirsenha`, `pil_nome`) VALUES
(7, 'ari@gmail.com', '159.886.494-75', 2, 'ari', 'ari', 'ari', 'ari'),
(8, 'armando@gmail.com', '99999999999', 1, 'Medeiros', 'armando12345', 'armando12345', 'Armando'),
(9, 'roberval@gmail.com', '11122233333', 1, 'Silva', 'roberval12345', 'roberval12345', 'Roberval');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_empresas`
--

CREATE TABLE IF NOT EXISTS `tb_telefone_empresas` (
  `tel_telefone` int(11) NOT NULL,
  `tel_emp_codigo` int(11) NOT NULL,
  PRIMARY KEY (`tel_telefone`,`tel_emp_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_voos`
--

CREATE TABLE IF NOT EXISTS `tb_voos` (
  `voo_id` int(11) NOT NULL AUTO_INCREMENT,
  `voo_numerocomercial` int(11) NOT NULL,
  `voo_peso` decimal(9,2) DEFAULT NULL,
  `voo_qnt_passageiros` int(11) NOT NULL,
  `voo_dis_km` decimal(8,2) NOT NULL,
  `voo_est_saida` varchar(45) DEFAULT NULL,
  `voo_tmp_tot` int(11) DEFAULT NULL,
  `voo_sta_codigo` int(11) DEFAULT NULL,
  `voo_aer_codigo_origem` int(11) NOT NULL,
  `voo_aer_codigo_destino` int(11) NOT NULL,
  `voo_aen_codigo` int(11) NOT NULL,
  `voo_pil_codigo` int(11) NOT NULL,
  `voo_emp_codigo` int(11) NOT NULL,
  `voo_dt_chegada` date NOT NULL,
  `voo_dt_saida` date NOT NULL,
  `voo_dt_autorizada` date NOT NULL,
  `voo_est_codigo` varchar(45) DEFAULT NULL,
  `voo_fab_codigo` int(11) NOT NULL,
  `voo_hr_saida` time NOT NULL,
  `voo_hr_chegada` time NOT NULL,
  PRIMARY KEY (`voo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_voos`
--

INSERT INTO `tb_voos` (`voo_id`, `voo_numerocomercial`, `voo_peso`, `voo_qnt_passageiros`, `voo_dis_km`, `voo_est_saida`, `voo_tmp_tot`, `voo_sta_codigo`, `voo_aer_codigo_origem`, `voo_aer_codigo_destino`, `voo_aen_codigo`, `voo_pil_codigo`, `voo_emp_codigo`, `voo_dt_chegada`, `voo_dt_saida`, `voo_dt_autorizada`, `voo_est_codigo`, `voo_fab_codigo`, `voo_hr_saida`, `voo_hr_chegada`) VALUES
(2, 404, '20000.00', 100, '1000.00', 'Bom', NULL, NULL, 1, 2, 2, 1, 2, '2001-12-17', '2001-12-16', '2001-12-15', NULL, 1, '10:00:00', '12:04:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
