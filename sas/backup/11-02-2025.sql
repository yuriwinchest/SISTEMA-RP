-- TABLE: acessos
CREATE TABLE `acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('1', 'Home', 'home', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('2', 'Configurações', 'configuracoes', '0', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('3', 'Usuários', 'usuarios', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('4', 'Acessos', 'acessos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('5', 'Grupos Acesso', 'grupo_acessos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('8', 'Funcionários', 'funcionarios', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('9', 'Fornecedores', 'fornecedores', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('10', 'Formas de Pagamento', 'formas_pgto', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('11', 'Cargos', 'cargos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('12', 'Frequências', 'frequencias', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('13', 'Contas à Receber', 'receber', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('14', 'Contas à Pagar', 'pagar', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('15', 'Clientes', 'clientes', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('16', 'Relatório Financeiro', 'rel_financeiro', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('17', 'Relatório Sintético Despesas', 'rel_sintetico_despesas', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('18', 'Relatório Sintético Receber', 'rel_sintetico_receber', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('19', 'Relatório Balanço Anual', 'rel_balanco', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('23', 'Caixas', 'caixas', '7', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('24', 'Relatório De Caixas', 'rel_caixas', '7', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('25', 'Tarefas', 'tarefas', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('26', 'Lançar Tarefas', 'lancar_tarefas', '0', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('27', 'Relatório Inadimplentes', 'rel_inadimplementes', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('37', 'Mensalidades', 'mensalidades', '0', 'Sim');

-- TABLE: acessos_sas
CREATE TABLE `acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('1', 'Home', 'home', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('2', 'Configurações', 'configuracoes', '0', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('3', 'Usuários', 'usuarios', '1', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('4', 'Acessos', 'acessos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('5', 'Grupos Acesso', 'grupo_acessos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('9', 'Fornecedores', 'fornecedores', '1', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('10', 'Formas de Pagamento', 'formas_pgto', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('11', 'Cargos', 'cargos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('12', 'Frequências', 'frequencias', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('13', 'Contas à Receber', 'receber', '4', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('14', 'Contas à Pagar', 'pagar', '4', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('15', 'Clientes', 'clientes', '1', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('16', 'Relatório Financeiro', 'rel_financeiro', '4', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('17', 'Relatório Sintético Despesas', 'rel_sintetico_despesas', '4', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('18', 'Relatório Sintético Receber', 'rel_sintetico_receber', '4', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('19', 'Relatório Balanço Anual', 'rel_balanco', '4', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('23', 'Caixas', 'caixas', '7', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('24', 'Relatório De Caixas', 'rel_caixas', '7', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('25', 'Tarefas', 'tarefas', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('26', 'Lançar Tarefas', 'lancar_tarefas', '0', 'Não');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('27', 'Relatório Inadimplentes', 'rel_inadimplementes', '4', 'Não');

-- TABLE: anotacoes
CREATE TABLE `anotacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `mostrar_home` varchar(5) NOT NULL,
  `privado` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `anotacoes` (`id`, `titulo`, `msg`, `usuario`, `data`, `mostrar_home`, `privado`, `empresa`) VALUES ('1', 'fdafdafa', '<p>fdafad</p>', '1', '2025-02-03', 'Não', 'Não', '0');
INSERT INTO `anotacoes` (`id`, `titulo`, `msg`, `usuario`, `data`, `mostrar_home`, `privado`, `empresa`) VALUES ('2', 'Teste', '<p>fdsfadf afd afa fsadf </p>', '1', '2025-02-04', 'Sim ', 'Não', '1');

-- TABLE: arquivos
CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `registro` varchar(50) DEFAULT NULL,
  `id_reg` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- TABLE: caixas
CREATE TABLE `caixas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operador` int(11) NOT NULL,
  `data_abertura` date NOT NULL,
  `data_fechamento` date DEFAULT NULL,
  `valor_abertura` decimal(8,2) NOT NULL,
  `valor_fechamento` decimal(8,2) DEFAULT NULL,
  `quebra` decimal(8,2) DEFAULT NULL,
  `usuario_abertura` int(11) NOT NULL,
  `usuario_fechamento` int(11) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `sangrias` decimal(8,2) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('1', '1', '2025-02-03', '2025-02-03', '100.00', '195.00', '-5.00', '1', '1', '', '', '0');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('2', '20', '2025-02-04', '', '150.00', '', '', '1', '', '', '', '1');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('3', '17', '2025-02-04', '', '50.00', '', '', '17', '', '', '', '1');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('4', '18', '2025-02-04', '2025-02-04', '100.00', '145.00', '-5.00', '18', '18', '', '', '2');

-- TABLE: cargos
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('1', 'Administrador', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('2', 'Comum', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('5', 'Faxineiro', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('56', 'Gerente', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('57', 'Tesoureiro', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('58', 'Gerente', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('59', 'Financeiro', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('60', 'Administrador', '2');

-- TABLE: clientes
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(25) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `tipo_pessoa` varchar(15) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`) VALUES ('1', 'Cliente emp 1', '', '(31) 97527-5084', 'cliente1@hotmail.com', '', '', '', '', '', '', 'Física', '2025-02-04', '2025-02-04', '7', '', '1');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`) VALUES ('2', 'Cliente emp 2', '', '(00) 0020-0000', 'cliente1@hotmail.com', '', '', '', '', '', '', 'Física', '2025-02-04', '', '18', '', '2');

-- TABLE: config
CREATE TABLE `config` (
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `logo_rel` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ativo` varchar(5) DEFAULT NULL,
  `multa_atraso` decimal(8,2) DEFAULT NULL,
  `juros_atraso` decimal(8,2) DEFAULT NULL,
  `marca_dagua` varchar(5) DEFAULT NULL,
  `assinatura_recibo` varchar(5) DEFAULT NULL,
  `impressao_automatica` varchar(5) DEFAULT NULL,
  `cnpj` varchar(25) DEFAULT NULL,
  `entrar_automatico` varchar(5) DEFAULT NULL,
  `mostrar_preloader` varchar(5) DEFAULT NULL,
  `ocultar_mobile` varchar(5) DEFAULT NULL,
  `api_whatsapp` varchar(25) DEFAULT NULL,
  `token_whatsapp` varchar(70) DEFAULT NULL,
  `instancia_whatsapp` varchar(70) DEFAULT NULL,
  `alterar_acessos` varchar(5) DEFAULT NULL,
  `dados_pagamento` varchar(100) DEFAULT NULL,
  `abertura_caixa` varchar(5) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `public_key` varchar(255) DEFAULT NULL,
  `logo_painel` varchar(100) DEFAULT NULL,
  `imagem_assinatura` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`) VALUES ('Nome do Sistema', 'contato@hugocursos.com.br', '(31) 97527-5084', '', '', 'logo.png', 'icone.png', 'logo.jpg', '1', 'Sim', '10.00', '10.00', 'Sim', 'Não', 'Não', '', 'Sim', 'Sim', 'Sim', 'menuia', 'b0a54d1a-df64-4493-8db4-d85452728291', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Não', '', 'Sim', 'APP_USR-7645692252055791-101021-ba91ccf6cd290bc3115e3270a30edb1e-131939455', 'APP_USR-187b89d5-08ae-4bf2-8d2b-dd41da0888c4', '', '', '0');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`) VALUES ('Empresa 1', 'empresa1@hotmail.com', '(31) 97527-5084', '', 'portal_hugo_cursos', '03-02-2025-22-21-13-LOGO_empresa1.png', '03-02-2025-22-21-13icone-ICONE-LOGO_empresa-1.png', '03-02-2025-22-21-13rel-LOGO-horizontal_EMPRESA1.jpg', '2', 'Sim', '10.00', '10.00', 'Sim', 'Sim', 'Não', '20.000.000/0000-00', 'Sim', 'Sim', 'Sim', 'menuia', 'b0a54d1a-df64-4493-8db4-d85452728291', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Sim', '', 'Sim', '', '', '04-02-2025-11-01-52painel-foto_painel_emp1.png', '', '1');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`) VALUES ('Empresa 2', 'empresa2@hotmail.com', '(00) 32000-000', '', '', '03-02-2025-22-22-26-LOGO_empresa2.png', '03-02-2025-22-22-26icone-ICONE-LOGO_emp_2.png', '03-02-2025-22-22-26rel-LOGO-horizontal_empresa2.jpg', '3', 'Sim', '0.00', '0.00', 'Sim', 'Sim', 'Não', '', 'Sim', 'Sim', 'Sim', 'Não', '', '', 'Não', '', 'Sim', '', '', '03-02-2025-22-22-26painel-logo_horizontal_painel.png', '04-02-2025-18-38-44ass-assinatura.jpg', '2');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`) VALUES ('Escola X', 'escola@hotmail.com', '(02) 0200-0000', '', '', 'logo.png', 'icone.png', 'logo.jpg', '5', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '', '', 'Não', '', 'Sim', '', '', '', '', '4');

-- TABLE: empresas
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(25) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `tipo_pessoa` varchar(15) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `dias_teste` int(11) DEFAULT NULL,
  `mensalidade` decimal(8,2) DEFAULT NULL,
  `data_teste` date DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`) VALUES ('1', 'Empresa 1', '', '(31) 97527-5084', 'empresa1@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-02-03', '', '1', '', '0', '0.00', '', 'Sim');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`) VALUES ('2', 'Empresa 2', '', '(00) 3200-0000', 'empresa2@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-02-03', '', '1', '', '0', '0.00', '', 'Sim');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`) VALUES ('4', 'Escola X', '', '(02) 0200-0000', 'escola@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-02-04', '', '1', '', '0', '0.00', '1969-12-31', 'Sim');

-- TABLE: formas_pgto
CREATE TABLE `formas_pgto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `taxa` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('1', 'Dinheiro', '0', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('2', 'Pix', '0', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('3', 'Cartão de Crédito', '5', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('30', 'Cartão de Crédito 3x', '3', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('31', 'Cartão de Crédito 6x', '6', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('32', 'Cartão de Crédito 10x', '10', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('34', 'Cartão', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('35', 'Boleto', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('36', 'Pix', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('37', 'Dinheiro', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('38', 'Dinheiro', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('39', 'Cartão', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('40', 'Pix', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('41', 'Boleto', '0', '2');

-- TABLE: fornecedores
CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  `data` date NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `tipo_chave` varchar(100) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('2', 'Fornecedor SAAS', '(20) 0200-0000', 'fornecedorsas@hotmail.com', '', '', '2025-02-03', '', '', '', '', '', '', '', '', '', '0');
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('3', 'Fornecedor emp 1', '(25) 0555-5502', 'fornecedor1@hotmail.com', '', '', '2025-02-04', '', '', '', '', '', '', '', '', '', '1');
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('4', 'Fornecedor emp 2', '(61) 00000-0000', 'fornecedor2@hotmail.com', '', '', '2025-02-04', '', '', '', '', '', '', '', '', '', '2');

-- TABLE: frequencias
CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequencia` varchar(25) NOT NULL,
  `dias` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('2', 'Diária', '1', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('3', 'Semanal', '7', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('4', 'Mensal', '30', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('5', 'Trimestral', '90', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('6', 'Semestral', '180', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('7', 'Anual', '365', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('23', 'Diária', '1', '0');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('24', 'Diária', '1', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('25', 'Semanal', '7', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('26', 'Mensal', '30', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('27', 'Semestral', '180', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('28', 'Anual', '365', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('29', 'Anual', '365', '2');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('30', 'Semestral', '180', '2');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('31', 'Mensal', '30', '2');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('32', 'Diária', '1', '2');

-- TABLE: grupo_acessos
CREATE TABLE `grupo_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('4', 'Financeiro');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('7', 'Caixas');

-- TABLE: grupo_acessos_sas
CREATE TABLE `grupo_acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('4', 'Financeiro');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('7', 'Caixas');

-- TABLE: pagar
CREATE TABLE `pagar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `fornecedor` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `vencimento` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date NOT NULL,
  `forma_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `recorrencia_inf` varchar(5) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('1', 'Conta emp 1', '0', '0', '500.00', '2025-02-04', '', '2025-02-04', '34', '1', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '500.00', '7', '0', 'Não', '', '12:15:40', '', '0', '0', 'Não', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('3', '(Resíduo) Conta teste emp 1', '0', '0', '300.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '2', '0.00', '0.00', '0.00', '', '300.00', '7', '7', 'Sim', 'Sim', '12:19:02', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('4', 'Conta teste emp 1 - Parcela 1', '0', '0', '100.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '0.00', '0.00', '0.00', '', '100.00', '7', '7', 'Sim', '', '12:19:25', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('5', 'Conta teste emp 1 - Parcela 2', '0', '0', '100.00', '2025-02-05', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '0.00', '0.00', '0.00', '', '100.00', '7', '1', 'Sim', '', '12:51:05', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('7', 'Testse - Parcela 1', '0', '0', '200.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '', '', '', '', '200.00', '7', '7', 'Sim', '', '12:26:32', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('8', 'Testse - Parcela 2', '0', '0', '200.00', '2025-02-05', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '', '', '', '', '200.00', '7', '7', 'Sim', '', '12:26:32', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('9', 'Testse - Parcela 3', '0', '0', '49.50', '2025-02-06', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '0.00', '0.00', '0.00', '', '49.50', '7', '1', 'Sim', '', '12:51:02', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('10', '(Resíduo) Testse - Parcela 3', '0', '0', '0.50', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '9', '0.00', '0.00', '0.00', '', '0.50', '7', '7', 'Sim', 'Sim', '12:28:37', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('11', '(Resíduo) Testse - Parcela 3', '0', '0', '150.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '9', '0.00', '0.00', '0.00', '', '150.00', '7', '7', 'Sim', 'Sim', '12:28:49', '', '', '', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('12', 'Teste', '0', '0', '360.00', '2025-02-04', '2025-02-04', '2025-02-04', '36', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '', '360.00', '17', '17', 'Sim', '', '17:57:36', '', '3', '0', 'Não', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('13', 'Teste', '0', '0', '250.00', '2025-02-04', '2025-02-04', '2025-02-04', '38', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '', '250.00', '18', '18', 'Sim', '', '18:12:10', '', '4', '0', 'Não', '', '2');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('14', 'Conta func', '0', '20', '260.00', '2025-02-04', '', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '260.00', '17', '0', 'Não', '', '18:45:45', '', '3', '0', 'Não', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`) VALUES ('15', 'Conta forn', '3', '0', '350.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '', '350.00', '17', '17', 'Sim', '', '18:45:56', '', '3', '0', 'Não', '', '1');

-- TABLE: pagar_sas
CREATE TABLE `pagar_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `fornecedor` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `vencimento` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date NOT NULL,
  `forma_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `recorrencia_inf` varchar(5) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- TABLE: receber
CREATE TABLE `receber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `cliente` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `vencimento` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date NOT NULL,
  `forma_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `tipo_chave` varchar(50) DEFAULT NULL,
  `acessar_painel` varchar(5) NOT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ref_pix` varchar(100) DEFAULT NULL,
  `alerta` varchar(5) DEFAULT NULL,
  `hora_alerta` time DEFAULT NULL,
  `data_alerta` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('1', 'Conta teste', '1', '250.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '250.00', '7', '7', 'Sim', '', '12:35:09', '', '0', '', '', '0', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('3', 'Conta teste 2 - Parcela 1', '0', '100.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '', '', '', '', '200.00', '7', '7', 'Sim', '', '12:35:57', '', '', '', '', '', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('4', 'Conta teste 2 - Parcela 2', '0', '200.00', '2025-02-05', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '', '', '', '', '200.00', '7', '7', 'Sim', '', '12:35:57', '', '', '', '', '', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('5', 'Conta teste 2 - Parcela 3', '0', '200.00', '2025-02-06', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '0', '0.00', '0.00', '0.00', '0.00', '200.00', '7', '7', 'Sim', '', '12:35:42', '', '0', '', '', '', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('6', '(Resíduo) Conta teste 2 - Parcela 1', '0', '100.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '3', '0.00', '0.00', '0.00', '0.00', '100.00', '7', '7', 'Sim', 'Sim', '12:35:35', '', '0', '', '', '', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('8', 'Testes', '0', '250.00', '2025-02-04', '2025-02-04', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '250.00', '1', '1', 'Sim', '', '12:51:19', '', '0', '', '', '0', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('9', 'Teste', '0', '250.00', '2025-02-04', '2025-02-04', '2025-02-04', '37', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '0.00', '250.00', '17', '17', 'Sim', '', '17:57:55', '', '3', '', '', '0', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('10', 'Teste', '0', '300.00', '2025-02-04', '2025-02-04', '2025-02-04', '38', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '0.00', '300.00', '18', '18', 'Sim', '', '18:12:30', '', '4', '', '', '0', '', '2', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('11', 'Teste 2', '0', '100.00', '2025-02-04', '2025-02-04', '2025-02-04', '40', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '0.00', '100.00', '18', '18', 'Sim', '', '18:12:45', '', '4', '', '', '0', '', '2', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('12', 'Conta x', '1', '28.00', '2025-02-04', '', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '28.00', '17', '0', 'Não', '', '18:46:10', '', '3', '', '', '0', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('13', 'Cliente emp 1', '1', '150.00', '2025-02-02', '', '2025-02-04', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '150.00', '17', '0', 'Não', '', '18:53:06', '', '3', '', '', '0', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('14', 'Teste', '1', '50.00', '2025-02-10', '', '2025-02-11', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '50.00', '1', '0', 'Não', '', '19:43:55', '1381874', '0', '', '', '0', '', '1', '101665090239', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('15', 'Teste 1 cent', '1', '0.01', '2025-02-11', '', '2025-02-11', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '0.01', '1', '0', 'Não', '', '19:53:31', '1381892', '0', '', '', '0', '', '1', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`) VALUES ('16', 'Conta 2 Teste', '1', '0.02', '2025-02-11', '2025-02-11', '2025-02-11', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '0.02', '1', '0', 'Sim', '', '19:58:11', '1381914', '0', '', '', '0', '', '1', '102046670514', '', '', '');

-- TABLE: receber_sas
CREATE TABLE `receber_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `cliente` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `vencimento` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date NOT NULL,
  `forma_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `tipo_chave` varchar(50) DEFAULT NULL,
  `acessar_painel` varchar(5) NOT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `ref_pix` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('1', 'Conta teste', '1', '0.01', '2025-02-03', '2025-02-11', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '0.01', '1', '0', 'Sim', '', '18:56:15', '', '0', '', '', '0', '', '100945126019');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('2', 'Mensalidade', '1', '150.00', '2025-02-04', '2025-02-04', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '150.00', '1', '1', 'Sim', '', '19:18:28', '', '0', '', '', '0', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('3', 'Mensalidade', '1', '0.01', '2025-02-04', '2025-02-04', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '0.01', '1', '0', 'Sim', '', '20:12:31', '', '0', '', '', '0', '', '100945126019');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('4', 'Teste', '2', '300.00', '2025-02-04', '2025-02-04', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '300.00', '1', '0', 'Sim', '', '20:34:46', '', '0', '', '', '0', '', '100945126019');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('5', 'TEste', '1', '20.00', '2025-02-11', '', '2025-02-11', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '20.00', '1', '0', 'Não', '', '20:25:46', '1381969', '0', '', '', '0', '', '');

-- TABLE: sangrias
CREATE TABLE `sangrias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `caixa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `sangrias` (`id`, `usuario`, `valor`, `data`, `hora`, `caixa`) VALUES ('1', '1', '50.00', '2025-02-03', '17:58:25', '1');
INSERT INTO `sangrias` (`id`, `usuario`, `valor`, `data`, `hora`, `caixa`) VALUES ('2', '17', '100.00', '2025-02-04', '17:58:21', '3');

-- TABLE: tarefas
CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `hora_mensagem` time DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `prioridade` varchar(25) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `tarefas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('1', '17', '1', '2025-02-04', '18:00:00', '17:00:00', 'Testess', 'Agendada', '', 'Baixa', 'Teste', '0', '1');

-- TABLE: tarefas_sas
CREATE TABLE `tarefas_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `hora_mensagem` time DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `prioridade` varchar(25) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- TABLE: usuarios
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `senha_crip` varchar(130) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `data` date NOT NULL,
  `comissao` int(11) DEFAULT NULL,
  `id_ref` int(11) NOT NULL,
  `pix` varchar(100) DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `acessar_painel` varchar(5) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `mostrar_registros` varchar(5) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `tipo_chave` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('1', 'Seu Nome', 'contato@hugocursos.com.br', '', '$2y$10$2nEkGdKo2dLpkapBBJl4XOJQf.nALLvTPlLt/xUx4CzbHqRFI1aDm', 'Administrador', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2025-02-01', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('7', 'Gerente SAAS', 'gerente@hotmail.com', '', '$2y$10$DgouUqPzGe6WhTlTEcb.Uuh74YzBBf1vk8nijbA4IcpSjEmHMaN.6', 'Comum', 'Sim', '(31) 9999-9999', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('8', 'Empresa 1', 'empresa@hotmail.com', '', '$2y$10$Ks/.i588k7NeAa8hdwweyu857qFl2pkq5fKVy1lOCqgnAzGMK.T5C', 'Comum', 'Sim', '(31) 99534-8118', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '5');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('17', 'Empresa 1', 'empresa1@hotmail.com', '', '$2y$10$hv9BIji0TXw6zyjUur6FM.ms4XCc2H/vdQXtwCXAGW5jeDeFjF.s6', 'Administrador', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '1');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('18', 'Empresa 2', 'empresa2@hotmail.com', '', '$2y$10$WtFy4cY4wTObWC7E8gwHvedrWqOPxZkFit9vXbpKNExUihb9cCxg2', 'Administrador', 'Sim', '(00) 3200-0000', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '2');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('20', 'Empresa 1', 'empresa1@hotmail.com', '', '$2y$10$SGGjQmtyEin8QxO5b4.6teXG6K/VnPmcgpc5851ElkhaBGwbsSrKC', 'Gerente', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2025-02-04', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '1');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('21', 'Empresa 1', 'empresa1@hotmail.com', '', '$2y$10$05zUCtDR4kLpaPSPM.xYm.mN3PNGf1bZb48xBhDYerf/tkyDu7W0y', 'Tesoureiro', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2025-02-04', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '1');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('22', 'Gerente emp 2', 'gerenteemp2@hotmail.com', '', '$2y$10$d0.BC.5cSEVqVc4VpGr.t.kyUoqthkssVawRzx1Wdh272UoOZNALy', 'Gerente', 'Sim', '(02) 0000-0000', '', 'sem-foto.jpg', '2025-02-04', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '2');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`) VALUES ('23', 'Escola X', 'escola@hotmail.com', '', '$2y$10$LGL2J4uhDOiZzpau0yqSSOktaJvHdmRcJgU9zmvjM5IoTVquJI87a', 'Administrador', 'Sim', '(02) 0200-0000', '', 'sem-foto.jpg', '2025-02-04', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '4');

-- TABLE: usuarios_permissoes
CREATE TABLE `usuarios_permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('45', '36', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('46', '36', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('47', '36', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('48', '36', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('49', '36', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('50', '36', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('51', '36', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('52', '36', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('53', '36', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('54', '36', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('55', '36', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('56', '36', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('57', '36', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('58', '36', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('59', '36', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('60', '36', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('61', '36', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('62', '36', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('63', '36', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('64', '36', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('65', '36', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('66', '36', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('67', '36', '36');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('68', '20', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('69', '20', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('70', '20', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('71', '20', '12');

-- TABLE: usuarios_permissoes_sas
CREATE TABLE `usuarios_permissoes_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('1', '7', '1');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('2', '7', '2');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('3', '7', '3');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('4', '7', '4');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('5', '7', '5');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('6', '7', '9');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('7', '7', '10');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('8', '7', '11');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('9', '7', '12');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('10', '7', '13');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('11', '7', '14');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('12', '7', '15');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('13', '7', '16');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('14', '7', '17');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('15', '7', '18');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('16', '7', '19');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('17', '7', '23');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('18', '7', '24');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('19', '7', '25');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('20', '7', '26');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('21', '7', '27');

