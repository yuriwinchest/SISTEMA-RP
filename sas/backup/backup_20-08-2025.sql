-- TABLE: acessos
CREATE TABLE `acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
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
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('25', 'Tarefas', 'tarefas', '32', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('26', 'Lançar Tarefas', 'lancar_tarefas', '32', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('27', 'Relatório Inadimplentes', 'rel_inadimplementes', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('37', 'Mensalidades', 'mensalidades', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('38', 'Dispositivos', 'dispositivos', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('39', 'Editar Baixa Conta', 'editar_conta_paga', '0', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('40', 'Marketing', 'marketing', '30', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('41', 'Chamados', 'chamados', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('42', 'Cobranças Recorrentes', 'cobrancas', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('43', 'Modelos de Contratos', 'modelos_contratos', '29', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('44', 'Gerar Contratos', 'rel_contratos', '29', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('45', 'Modelos', 'modelos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('46', 'Equipamentos', 'equipamentos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('47', 'Serviços', 'servicos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('48', 'Marcas', 'marcas', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('49', 'Categorias', 'categorias', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('50', 'SubCategorias', 'sub_categorias', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('51', 'Produtos', 'produtos', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('52', 'Entradas', 'entradas', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('53', 'Saídas', 'saidas', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('54', 'Estoque Baixo', 'estoque', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('55', 'Produtos Mais Vendidos', 'rel_prod_vendidos', '28', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('56', 'Vendas', 'vendas', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('57', 'Compras', 'compras', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('58', 'Lista de Vendas', 'lista_vendas', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('59', 'Orçamentos', 'orcamentos', '31', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('60', 'OS', 'os', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('61', 'Comissões', 'comissoes', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('62', 'Minhas Comissões', 'minhas_comissoes', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('63', 'RH', 'rh', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('64', 'Dados do Site', 'site', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('65', 'Relatório de Vendas', 'rel_vendas', '4', 'Não');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('66', 'Grupos disparos', 'grupos_disparos', '30', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('67', 'Listar Contratos', 'listar_contratos', '29', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('68', 'Orçamentos Pendentes', 'orcamentos_pendentes', '31', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('69', 'Orçamentos Aprovados', 'orcamentos_aprovados', '31', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('70', 'Orçamentos Vencidos', 'orcamentos_vencidos', '31', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('71', 'Tarefas Clientes', 'tarefas_clientes', '32', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('72', 'OS Abertas', 'os_abertas', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('73', 'OS Iniciadas', 'os_iniciadas', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('74', 'OS Aguardando', 'os_aguardando', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('75', 'OS Aprovação', 'os_aprovacao', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('76', 'OS Finalizadas', 'os_finalizadas', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('77', 'OS Entregues', 'os_entregues', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('78', 'OS Sem Reparo', 'os_sem_reparo', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('79', 'OS Não Aprovadas', 'os_nao_aprovadas', '33', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('80', 'OS Entregues Hoje', 'os_entregues_hoje', '33', 'Sim');

-- TABLE: acessos_sas
CREATE TABLE `acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
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
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('38', 'Dispositivos', 'dispositivos', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('39', 'Recursos Sistema', 'recursos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('40', 'Planos', 'planos', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('41', 'Site', 'site', '0', 'Sim');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('1', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Conta à Pagar', '28', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('2', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('3', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('5', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('6', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('8', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('9', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('11', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('12', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('13', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Conta à Receber', '29', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('14', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('15', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Conta à Receber', '29', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('16', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('17', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Conta à Receber', '28', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('18', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('19', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Conta à Receber', '28', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('20', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('21', 'fdsfdsf', '', '18-03-2025-19-06-18-eu.jpeg', '2025-03-18', 'Conta à Receber', '28', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('22', 'fdsfdsf', '', '18-03-2025-19-06-18-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('23', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Orçamento', '8', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('24', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('25', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Orçamento', '8', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('26', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('27', 'fdsfsd', '', '18-03-2025-19-25-39-eupng.png', '2025-03-18', 'Orçamento', '8', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('28', 'fdsfsd', '', '18-03-2025-19-25-39-eupng.png', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('29', 'fdfdsf', '', '18-03-2025-19-27-10-eu.jpeg', '2025-03-18', 'OS', '17', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('30', 'fdfdsf', '', '18-03-2025-19-27-10-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('1', '1', '2025-02-03', '2025-02-03', '100.00', '195.00', '-5.00', '1', '1', '', '', '0');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('2', '20', '2025-02-04', '2025-02-21', '150.00', '150.00', '0.00', '1', '1', '', '', '1');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('3', '17', '2025-02-04', '2025-02-21', '50.00', '-50.00', '0.00', '17', '1', '', '', '1');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('4', '18', '2025-02-04', '2025-02-04', '100.00', '145.00', '-5.00', '18', '18', '', '', '2');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('6', '21', '2025-02-21', '', '0.00', '', '', '1', '', '', '', '1');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('7', '17', '2025-05-23', '', '60.00', '', '', '1', '', '', '', '1');
INSERT INTO `caixas` (`id`, `operador`, `data_abertura`, `data_fechamento`, `valor_abertura`, `valor_fechamento`, `quebra`, `usuario_abertura`, `usuario_fechamento`, `obs`, `sangrias`, `empresa`) VALUES ('8', '1', '2025-07-06', '', '195.00', '', '', '1', '', '', '', '0');

-- TABLE: cargos
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('1', 'Administrador', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('2', 'Comum', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('5', 'Faxineiro', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('56', 'Gerente', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('57', 'Tesoureiro', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('58', 'Gerente', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('59', 'Financeiro', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('60', 'Administrador', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('61', 'fafad', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('62', 'aaaa', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('63', 'dsfadfa', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('64', 'Gerente', '8');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('65', 'Técnico', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('66', 'Técnico', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('67', 'Técnico', '8');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('68', 'Técnico', '12');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('69', 'Técnico', '0');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('70', 'Técnico', '4');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('71', 'Técnico', '17');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('72', 'Técnico', '34');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('73', 'Técnico', '44');

-- TABLE: categorias
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `icone` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('18', 'Celular', '21-10-2023-05-19-03-18-04-2023-19-51-26-CELULAR.jpg', 'Sim', '1', 'fas fa-mobile-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('19', 'Notebook', '21-10-2023-05-20-49-download.png', 'Sim', '1', 'fas fa-laptop');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('20', 'PC', '21-10-2023-05-23-05-pc2.png', 'Sim', '1', 'fas fa-desktop');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('21', 'Tablet', '21-10-2023-05-25-00-pngimg.com---tablet_PNG8600.png', 'Sim', '1', 'fas fa-tablet-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('22', 'Caixa de Som', '21-10-2023-05-18-56-Caixa-Som-Bluetooth-Mini-Speaker-3w.jpg', 'Sim', '1', 'fas fa-volume-up');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('26', 'Informática', '21-10-2023-05-20-38-downswswload.png', 'Sim', '1', 'fas fa-microchip');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('27', 'Bateria Celular', '21-10-2023-05-03-23-gran-prime-original11-cf5e225f6264c44d9c15154995103467-640-0.jpg', 'Sim', '1', 'fas fa-battery-full');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('28', 'Periféricos Celular', '21-10-2023-05-28-44-placa_de_carga_conector_moto_g9.png', 'Sim', '1', 'fas fa-blender-phone');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('29', 'Película 3D', '21-10-2023-05-21-55-752fbb9b-95cb-453a-adbc-efc07f75844a.png', 'Sim', '1', 'fas fa-tablet-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('30', 'Película 3D Privacidade', '21-10-2023-05-26-46-pelicula-3D-Privacidade.png', 'Sim', '1', 'fas fa-user-secret');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('31', 'Fone de Ouvido', '21-10-2023-05-34-42-faa1075c-f616-4bc3-8dff-b0232002e689.png', 'Sim', '1', 'fas fa-headphones');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('32', 'Fone Bluetooth', '21-10-2023-05-35-03-cfaff441-3098-4871-97e7-7cf85538f20a.png', 'Sim', '1', 'fas fa-bluetooth');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('33', 'Fone Headset', '21-10-2023-05-35-12-13b3f94d-ad17-4f5c-861d-cc5eb51de10c.png', 'Sim', '1', 'fas fa-headset');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('34', 'Cartão de Memória', '21-10-2023-05-35-34-128-removebg-preview.png', 'Sim', '1', 'fas fa-memory');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('35', 'Pen Driver', '21-10-2023-05-36-42-1xg.png', 'Sim', '1', 'fas fa-usb');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('36', 'Carregador', '21-10-2023-05-37-36-18-04-2023-19-57-26-CARREGADOR-2.jpg', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('37', 'Carregaodor Veicular', '21-10-2023-05-38-56-carregadorveicularrr.png', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('38', 'Cabos Celular', '21-10-2023-05-39-11-18-04-2023-19-54-29-CABO-2.jpg', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('39', 'Games', '21-10-2023-05-41-16-62-622862_download-free-png-dlpng-transparent-game-controller-png.png', 'Sim', '1', 'fas fa-gamepad');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('40', 'Automotivo ', '21-10-2023-05-42-38-acessorios-para-montar-som-autom.png', 'Sim', '1', 'fas fa-car');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('41', 'Capinhas', '21-10-2023-05-43-25-18-04-2023-19-56-22-CAPA-2.jpg', 'Sim', '1', 'fas fa-mobile');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('42', 'Mouse', '21-10-2023-05-43-51-24f2b0d096a6ede59fc153af6aae857a_470x0_i84040850lso.png', 'Sim', '1', 'fas fa-mouse');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('43', 'Teclado', '21-10-2023-05-44-27-keyboardmouse.png', 'Sim', '1', 'fas fa-keyboard');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('44', 'Película Vídro', '21-10-2023-05-44-45-vídro.png', 'Sim', '1', 'fas fa-tablet-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('45', 'Cooler ', '21-10-2023-05-45-57-710-1.png', 'Sim', '1', 'fas fa-wind');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('46', 'Adaptador Bluetooth', '21-10-2023-05-47-13-Adaptador-Bluetooth-P2-20200303232446.5972900015.jpg', 'Sim', '1', 'fas fa-bluetooth-b');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('47', 'Adaptador', '21-10-2023-05-48-53-4813845086_1_large.png', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('48', 'Antena Wifi', '21-10-2023-05-49-55-antena-wireless.png', 'Sim', '1', 'fas fa-wifi');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('49', 'Cabo Auxiliar', '21-10-2023-06-01-09-1jpDZcTnCTLGKJYY4KQWBtREgEqdY0jjscYAI85C.jpg', 'Sim', '1', 'fas fa-headphones-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('50', 'Cabo Informática', '21-10-2023-06-18-58-2023-10-21_06h18_48.png', 'Sim', '1', 'fas fa-network-wired');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('51', 'Calculadora', '21-10-2023-06-36-25-2023-10-21_06h33_53.png', 'Sim', '1', 'fas fa-calculator');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('52', 'Câmera', '21-10-2023-06-38-30-2023-10-21_06h34_04.png', 'Sim', '1', 'fas fa-camera');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('53', 'Campainha', '21-10-2023-06-41-25-2023-10-21_06h41_12.png', 'Sim', '1', 'fas fa-bell');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('54', 'Carregaodor Celular', '21-10-2023-06-43-46-6f2202fb-468d-4fdf-8784-6e2b21bc1979.png', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('55', 'Carregaodor Portátio', '21-10-2023-06-51-34-2023-10-21_06h49_57.png', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('56', 'Case', '21-10-2023-07-04-17-2023-10-21_07h03_57.png', 'Sim', '1', 'fas fa-suitcase');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('57', 'Máquina de cabelo', '21-10-2023-07-33-11-2023-10-21_07h26_38.png', 'Sim', '1', 'fas fa-cut');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('58', 'lanterna', '21-10-2023-07-33-27-2023-10-21_07h26_47.png', 'Sim', '1', 'fas fa-lightbulb');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('59', 'Mouse pad', '21-10-2023-07-38-49-2023-10-21_07h27_01.png', 'Sim', '1', 'fas fa-mouse-pointer');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('60', 'Pilha', '21-10-2023-07-45-45-2023-10-21_07h45_15.png', 'Sim', '1', 'fas fa-battery-three-quarters');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('61', 'Ring light', '21-10-2023-07-47-53-2023-10-21_07h47_34.png', 'Sim', '1', 'fas fa-lightbulb');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('62', 'Suporte para Celular', '21-10-2023-07-49-20-2023-10-21_07h49_07.png', 'Sim', '1', 'fas fa-mobile');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('63', 'Cabos', '23-10-2023-07-47-30-d1224087-ac31-448c-b26c-83eccdb87304.png', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('64', 'Serviços', '23-10-2023-19-00-37-serviços2.png', 'Sim', '1', 'fas fa-tools');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('65', 'DVR', 'sem-foto.jpg', 'Sim', '1', 'fas fa-video');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('66', 'Conectores', 'sem-foto.jpg', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('126', 'DVR 2', 'sem-foto.jpg', 'Sim', '1', 'fas fa-laptop');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('129', 'Categoria 1', 'sem-foto.jpg', 'Sim', '2', 'fas fa-folder');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('130', 'Teste', 'sem-foto.jpg', 'Sim', '2', 'fas fa-vial');

-- TABLE: chamados
CREATE TABLE `chamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `data` date NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `respondido` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `chamados` (`id`, `empresa`, `data`, `titulo`, `texto`, `status`, `respondido`) VALUES ('1', '1', '2025-03-05', 'Chamado da empresa 1', '<p>\"  dfagf dafadf af a\' fgdagdgadsg fda fasdfaf</p>', 'Aberto', 'Não');
INSERT INTO `chamados` (`id`, `empresa`, `data`, `titulo`, `texto`, `status`, `respondido`) VALUES ('3', '2', '2025-03-05', 'fdafa fdsaf dasfdsaf af', '<p>fdsafsadf a fasf as</p>', 'Aberto', 'Sim');
INSERT INTO `chamados` (`id`, `empresa`, `data`, `titulo`, `texto`, `status`, `respondido`) VALUES ('4', '1', '2025-03-05', 'Estou com problemas ...', '<p>fdf dsafs fsa fsa fdaf daf as fasd fdfa fa </p>', 'Fechado', 'Não');
INSERT INTO `chamados` (`id`, `empresa`, `data`, `titulo`, `texto`, `status`, `respondido`) VALUES ('5', '1', '2025-03-25', 'Titulo chamado', '<p>Aqui é a descrição do chamado</p>', 'Aberto', 'Não');

-- TABLE: chamados_respostas
CREATE TABLE `chamados_respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `usuario` int(11) NOT NULL,
  `texto` text NOT NULL,
  `chamado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('1', '2', '2025-03-05', '14:32:30', '1', 'fad fadf ads fasf dsaf asfsaf a', '3');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('2', '1', '2025-03-05', '14:33:26', '1', 'dfa fsa fasf asf sadfads a', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('5', '2', '2025-03-05', '14:59:41', '1', 'fdasf da fffdaf asf a', '3');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('6', '2', '2025-03-05', '15:13:55', '1', 'dfa fsfa fsdaf ', '3');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('7', '1', '2025-03-05', '15:14:17', '1', 'fda fads fdfa fadf ', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('8', '1', '2025-03-05', '15:15:05', '1', 'dfa fdsa faf adf', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('10', '1', '2025-03-05', '15:21:31', '0', 'fdsf fda fdsa fdsaf asdfsa fsdaf afafea fdsafaf a', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('11', '1', '2025-03-05', '20:05:18', '1', 'fda fafsa fdsa fda f', '4');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('12', '1', '2025-03-05', '20:05:38', '0', 'fda dfdsa fdsaf sad fsadfa', '4');

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
  `marketing` varchar(5) DEFAULT NULL,
  `senha_crip` varchar(150) DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `assinatura` varchar(100) DEFAULT NULL,
  `api_pagamento_cliente` varchar(50) DEFAULT NULL,
  `formas_pgto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`, `api_pagamento_cliente`, `formas_pgto`) VALUES ('1', 'Cliente Teste', '', '(31) 99534-8118', 'cliente1@hotmail.com', 'Rua de Teste', '500', 'Bairro Teste', 'Cidade Teste', 'MG', '30512-660', 'Física', '2025-02-04', '2001-03-05', '7', '60', '1', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', 'Sim', '', 'sem-foto.jpg', '1.png', 'Asaas', 'Pix,Boleto');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`, `api_pagamento_cliente`, `formas_pgto`) VALUES ('2', 'Cliente emp 2', '', '(31) 99534-8118', 'cliente1@hotmail.com', '', '', '', '', '', '', 'Física', '2025-02-04', '', '18', '', '2', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', '', '', 'sem-foto.jpg', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`, `api_pagamento_cliente`, `formas_pgto`) VALUES ('14', 'Hugo Cliente', '510.565.670-90', '(31) 97527-5084', 'hugocliente@hotmail.com', '', '', '', '', '', '', 'Física', '2025-03-18', '1111-11-11', '1', '', '1', '', '$2y$10$jVL22Rqopg2YfzIzKF8UD.TB0Z1aY5U6FQKwojcmmlPftUo3suhPS', 'Sim', '', 'sem-foto.jpg', '14.png', 'Mercado Pago', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`, `api_pagamento_cliente`, `formas_pgto`) VALUES ('37', 'AAA', '', '(45) 5555-5555', '', '', '', '', '', '', '', 'Física', '2025-07-17', '1111-11-11', '1', '', '1', '', '$2y$10$G6GbIFEt0DEVRRQmeSHq/uUYSkANUXrvcIMoSSRHzAAIcpqb3YCje', 'Sim', '', 'sem-foto.jpg', '', '', '');

-- TABLE: clientes_recursos
CREATE TABLE `clientes_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('25', '8', '1');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('26', '8', '5');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('27', '8', '4');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('28', '8', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('29', '8', '6');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('33', '2', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('47', '1', '1');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('48', '1', '5');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('49', '1', '4');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('50', '1', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('51', '1', '6');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('52', '2', '1');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('72', '21', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('73', '21', '4');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('74', '21', '5');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('76', '26', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('77', '27', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('95', '1', '7');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('118', '44', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('119', '44', '7');

-- TABLE: cobrancas
CREATE TABLE `cobrancas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `data_venc` date NOT NULL,
  `frequencia` varchar(25) NOT NULL,
  `valor_parcela` decimal(8,2) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `parcelas` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `api_pagamento_conta` varchar(50) DEFAULT NULL,
  `pgtos_aceitaveis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('10', '1', '970.00', '0.00', '0.00', '2025-03-05', '1', '', '2025-03-05', 'Mensal', '970.00', 'Aluguél', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('11', '1', '680.00', '0.00', '0.00', '2025-03-05', '1', '', '2025-03-05', 'Mensal', '680.00', 'Aluguél', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('12', '14', '200.00', '0.00', '0.00', '2025-04-21', '1', '', '2025-04-21', 'Mensal', '200.00', 'Teste', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('13', '14', '140.00', '0.00', '0.00', '2025-04-21', '1', '', '2025-04-21', 'Diária', '140.00', 'Teste cob', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('14', '14', '50.00', '0.00', '0.00', '2025-07-05', '1', '', '2025-07-05', 'Mensal', '50.00', 'Teste cob', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('15', '14', '6.00', '0.00', '0.00', '2025-07-05', '1', '', '2025-07-05', 'Mensal', '6.00', 'Cob 2', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('16', '14', '7.00', '0.00', '0.00', '2025-07-05', '1', '', '2025-07-05', 'Mensal', '7.00', 'Cob3', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('17', '14', '10.00', '0.00', '0.00', '2025-07-05', '1', '', '2025-07-05', 'Mensal', '10.00', 'Cob4', '1', '1', '', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('18', '1', '50.00', '0.00', '0.00', '2025-08-06', '1', '', '2025-08-06', 'Mensal', '50.00', 'Cob MP', '1', '1', 'Mercado Pago', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('19', '37', '120.00', '0.00', '0.00', '2025-08-06', '1', '', '2025-08-06', 'Mensal', '120.00', 'Cob ASAAS', '1', '1', 'Asaas', '');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('20', '1', '65.00', '0.00', '0.00', '2025-08-08', '1', '', '2025-08-08', 'Mensal', '65.00', 'Cobrança Boleto', '1', '1', '', 'Boleto');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`, `api_pagamento_conta`, `pgtos_aceitaveis`) VALUES ('21', '14', '300.00', '0.00', '0.00', '2025-08-19', '1', '', '2025-08-19', 'Diária', '300.00', 'Cobranca teste', '1', '1', '', '');

-- TABLE: compra_venda
CREATE TABLE `compra_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `texto` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `limitar_recursos` varchar(5) DEFAULT NULL,
  `fundo_login` varchar(100) DEFAULT NULL,
  `cidade_sistema` varchar(50) DEFAULT NULL,
  `api_pagamento` varchar(35) DEFAULT NULL,
  `chave_api_asaas` varchar(255) DEFAULT NULL,
  `dias_comissao` int(11) DEFAULT NULL,
  `assinatura_cliente` varchar(5) DEFAULT NULL,
  `alterar_api_whatsapp` varchar(5) DEFAULT NULL,
  `cobrar_automaticamente` varchar(5) DEFAULT NULL,
  `cobrar_duas_vezes` varchar(5) DEFAULT NULL,
  `pagina_entrada` varchar(25) DEFAULT NULL,
  `url_site` varchar(50) DEFAULT NULL,
  `dispositivos` int(11) DEFAULT NULL,
  `mao_obra_orc` varchar(100) DEFAULT NULL,
  `senha_aparelho_orc` varchar(100) DEFAULT NULL,
  `defeito_orc` varchar(100) DEFAULT NULL,
  `avarias_orc` varchar(100) DEFAULT NULL,
  `acessorios_orc` varchar(100) DEFAULT NULL,
  `laudo_orc` varchar(100) DEFAULT NULL,
  `mao_obra_os` varchar(100) DEFAULT NULL,
  `senha_aparelho_os` varchar(100) DEFAULT NULL,
  `defeito_os` varchar(100) DEFAULT NULL,
  `avarias_os` varchar(100) DEFAULT NULL,
  `acessorios_os` varchar(100) DEFAULT NULL,
  `laudo_os` varchar(100) DEFAULT NULL,
  `multi_empresas` varchar(5) DEFAULT NULL,
  `taxa_cartao_api` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Gestor ERP SAAS', 'contato@hugocursos.com.br', '(31) 97527-5084', '', '', 'logo.png', 'icone.png', 'logo.jpg', '1', 'Sim', '10.00', '10.00', 'Sim', 'Não', 'Não', '', 'Sim', 'Sim', 'Sim', 'menuia', '826e2f0c-6a32-413d-b0b9-af027eec2826', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Sim', '', 'Sim', 'APP_USR-7645692252055791-101021-ba91ccf6cd290bc3115e3270a30edb1e-131939455', 'APP_USR-187b89d5-08ae-4bf2-8d2b-dd41da0888c4', '', '', '0', 'Sim', '10-03-2025-11-58-01-fundo_erp.webp', '', 'Asaas', '$aact_prod_000MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OjE4NTg0N2I5LTgyMjAtNDBmZC05NGMwLTcyZTUzZGQ0OWFmODo6JGFhY2hfMzlkMjdjZWMtZTYzYi00MDVmLTgwYWItZDExZjVhMzk1MTIx', '', '', 'Não', '', '', 'Site', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sim', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Empresa 1 Teste', 'empresa1@hotmail.com', '(31) 97527-5084', 'Rua X Número 150 Bairro Teste X', 'portal_hugo_cursos', '03-02-2025-22-21-13-LOGO_empresa1.png', '03-02-2025-22-21-13icone-ICONE-LOGO_empresa-1.png', '03-02-2025-22-21-13rel-LOGO-horizontal_EMPRESA1.jpg', '2', 'Sim', '10.00', '10.00', 'Sim', 'Sim', 'Sim', '20.000.000/0000-00', 'Sim', 'Sim', 'Sim', 'menuia', '826e2f0c-6a32-413d-b0b9-af027eec2826', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Sim', '', 'Sim', '', '', '04-02-2025-11-01-52painel-foto_painel_emp1.png', '', '1', '', '', 'Belo Horizonte', 'Asaas', '$aact_prod_000MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OmMxNGVkNjEwLWZmYTAtNGM3Zi04Y2JhLWQ3NmQ3NjlhNGI1NTo6JGFhY2hfMGVkNTZiNmMtMjdlYy00OTkyLWIwMjctNGExYTRlMWM4ODRl', '3', 'Sim', '', 'Sim', 'Sim', '', 'emp1', '2', 'Mão de Obra', 'Senha do Aparelho', 'Defeito', 'Condições ou Avarias', 'Acessórios', 'Laudo Técnicos', 'Mão de Obra', 'Senha do Aparelho', 'Defeito', 'Condições ou Avarias', 'Acessórios', 'Laudo Técnicos', '', '10.50');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Empresta  apagar 2', 'ccccccccc@hotmail.com', '(21) 02000-000', '', '', '03-02-2025-22-22-26-LOGO_empresa2.png', '03-02-2025-22-22-26icone-ICONE-LOGO_emp_2.png', '03-02-2025-22-22-26rel-LOGO-horizontal_empresa2.jpg', '3', 'Sim', '0.00', '0.00', 'Sim', 'Sim', 'Não', '', 'Sim', 'Sim', 'Sim', 'menuia', '826e2f0c-6a32-413d-b0b9-af027eec2826', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Não', '', 'Sim', '', '', '03-02-2025-22-22-26painel-logo_horizontal_painel.png', '04-02-2025-18-38-44ass-assinatura.jpg', '2', '', '', '', '', '', '0', 'Sim', '', 'Sim', 'Sim', '', 'teste', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Empresa 1', 'escola@hotmail.com', '(02) 0200-0000', '', '', 'logo.png', 'icone.png', 'logo.jpg', '5', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '826e2f0c-6a32-413d-b0b9-af027eec2826', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Não', '', 'Sim', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', 'emmp2', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Emp 4 teste', 'emp4@hotmail.com', '(00) 00030-000', '', '', 'logo.png', 'icone.png', 'logo.jpg', '8', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', 'Sim', 'Sim', 'Sim', 'Não', '826e2f0c-6a32-413d-b0b9-af027eec2826', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Não', '', 'Sim', '', '', '06-04-2025-20-29-06painel-aprovado.png', '06-04-2025-20-29-06ass-eupng.png', '8', '', '', '', '', '', '0', 'Sim', '', 'Sim', 'Sim', '', 'emp4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Teste', 'teste@hotmaiol.com', '(02) 0002-0000', '', '', 'logo.png', 'icone.png', 'logo.jpg', '12', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Não', '', 'Sim', '', '', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Teste', '', '(00) 1414', '', '', 'logo.png', 'icone.png', 'logo.jpg', '19', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '', 'bBAIhWKDdVyG8xUyjMDCcdt5j0DEqL5gVgNRiKhDNMjOtqnslI', 'Não', '', 'Sim', '', '', '', '', '21', '', '', '', '', '', '', '', '', '', '', '', '444', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('aaaaaaaaaaaa', '', '(54) 61212-1212', '', '', 'logo.png', 'icone.png', 'logo.jpg', '24', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '', 'bBAIhWKDdVyG8xUyjMDCcdt5j0DEqL5gVgNRiKhDNMjOtqnslI', 'Não', '', 'Sim', '', '', '', '', '26', '', '', '', '', '', '', '', '', '', '', '', 'sfa', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Hugo Test', 'hugotest@hotmaiol.com', '(30) 0000-0000', '', '', 'logo.png', 'icone.png', 'logo.jpg', '25', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '', 'bBAIhWKDdVyG8xUyjMDCcdt5j0DEqL5gVgNRiKhDNMjOtqnslI', 'Não', '', 'Sim', '', '', '', '', '27', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`, `mao_obra_orc`, `senha_aparelho_orc`, `defeito_orc`, `avarias_orc`, `acessorios_orc`, `laudo_orc`, `mao_obra_os`, `senha_aparelho_os`, `defeito_os`, `avarias_os`, `acessorios_os`, `laudo_os`, `multi_empresas`, `taxa_cartao_api`) VALUES ('Empp55', 'emp555@hotmail.com', '(45) 4545-5454', '', '', 'logo.png', 'icone.png', 'logo.jpg', '42', 'Sim', '0.00', '0.00', 'Sim', 'Não', 'Não', '', '', '', '', 'Não', '', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 'Não', '', 'Sim', '', '', '', '', '44', '', '', '', '', '', '', '', '', '', '', '', 'empp655', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- TABLE: contratos
CREATE TABLE `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `mostrar_modelos` varchar(5) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('3', 'Procuração', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>{{TEXTO DADOS}}</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">{{LOCAL}}, {{DATA}}.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\">{{ASSINATURA}}</div><div align=\"center\"><font size=\"2\">_________________________________________<br>{{NOME}}</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('9', 'Modelo de Teste', '<div align=\"center\"><b><font size=\"4\">Título do Contrato</font></b></div><div><br></div><div>texto do contrato<b> {{TEXTO DADOS}}</b></div>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('12', 'fdafsdaf', 'fdafdsafa', '', '0');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('16', 'Contrato emp 2', 'df fasd fdafaf <br>', '', '2');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('17', 'PRESTAÇÃO DE SERVIÇOS', '<h3 data-start=\"299\" data-end=\"336\" align=\"center\"><b><h3 data-start=\"299\" data-end=\"336\"><font size=\"4\"><u>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</u></font></h3></b></h3><p data-start=\"338\" data-end=\"386\">Pelo presente instrumento particular, as partes:</p><p data-start=\"388\" data-end=\"502\"><strong data-start=\"388\" data-end=\"404\">CONTRATANTE:</strong><br data-start=\"404\" data-end=\"407\">Nome: <b>{{NOME EMPRESA}}</b><br data-start=\"434\" data-end=\"437\">CNPJ: <b>{{CNPJ EMPRESA}}</b><br data-start=\"468\" data-end=\"471\">Endereço: <b>{{ENDERECO EMPRESA}}</b></p><p data-start=\"504\" data-end=\"616\"><strong data-start=\"504\" data-end=\"519\">CONTRATADA:</strong><br data-start=\"519\" data-end=\"522\"><b>{{TEXTO DADOS}}</b></p><p data-start=\"504\" data-end=\"616\">Têm entre si, justas e contratadas, as cláusulas e condições a seguir dispostas:</p><h3 data-start=\"705\" data-end=\"729\"><font size=\"3\">CLÁUSULA 1ª ? OBJETO</font></h3><p data-start=\"731\" data-end=\"959\">O presente contrato tem como objeto a prestação dos seguintes serviços:<br data-start=\"802\" data-end=\"805\"><strong data-start=\"805\" data-end=\"959\">[Descrever detalhadamente os serviços que serão prestados, ex.: \"Aulas presenciais de inglês para nível básico, com carga horária total de 40 horas.\"]</strong></p><h3 data-start=\"966\" data-end=\"1008\"><font size=\"3\">CLÁUSULA 2ª ? OBRIGAÇÕES DA CONTRATADA</font></h3><p data-start=\"1010\" data-end=\"1232\">A CONTRATADA se obriga a:<br data-start=\"1035\" data-end=\"1038\">a) Prestar os serviços descritos na Cláusula 1ª com zelo, diligência e qualidade;<br data-start=\"1119\" data-end=\"1122\">b) Cumprir o cronograma e prazos acordados;<br data-start=\"1165\" data-end=\"1168\">c) Manter sigilo sobre informações confidenciais da CONTRATANTE.</p><h3 data-start=\"1239\" data-end=\"1282\"><font size=\"3\">CLÁUSULA 3ª ? OBRIGAÇÕES DA CONTRATANTE</font></h3><p data-start=\"1284\" data-end=\"1547\">A CONTRATANTE se compromete a:<br data-start=\"1314\" data-end=\"1317\">a) Fornecer todas as informações necessárias à execução dos serviços;<br data-start=\"1386\" data-end=\"1389\">b) Efetuar o pagamento na forma e prazos estipulados neste contrato;<br data-start=\"1457\" data-end=\"1460\">c) Cooperar com a CONTRATADA, sempre que necessário, para o bom andamento dos serviços.</p><p data-start=\"504\" data-end=\"616\"><br></p><p data-start=\"504\" data-end=\"616\"><br></p>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('18', 'Contrato de Vendas', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>{{TEXTO DADOS}}</b></b></div><div><b><b><br></b></b></div><div><b><b>{{NOME}} <br></b></b></div><div><br></div><div><b>{{LOCAL}}</b></div><div><b><b><br></b></b></div>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('19', 'tesstee', '<p>fdfa fdf asfdsf fsadfda fa  <strong>{{TEXTO DADOS}}</strong> {{EMAIL}} fadfadfa fd afaf f {{ENDERECO_COMPLETO}} {{CEP}} {{LOCAL}} fdfaf ads {{DATA}}  fadfsad f {{NOME EMPRESA}} dfafa a <strong>{{PROFISSIONAL}} <br></strong></p><p><strong><br></strong></p><p> {{DEMAIS CONTRATANTES}} <br></p><p><br></p><p> {{DEMAIS CONTRATADOS}} <br></p>', '', '1');

-- TABLE: disparos
CREATE TABLE `disparos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `data_disparo` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- TABLE: dispositivos
CREATE TABLE `dispositivos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(20) DEFAULT NULL,
  `appkey` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `status_api` varchar(100) DEFAULT NULL,
  `horario` datetime DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('12', '553189241964', 'appkey_67b76756592466.38680855', 'Ativo', 'conectado', '', '0');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('19', '553189241964', 'appkey_68067dae57fb42.08854095', 'Ativo', 'conectado', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('20', '', 'appkey_68067db87d1e12.87840875', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('21', '', 'appkey_68067dc2ab8c64.43563929', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('22', '', 'appkey_68067dcd28bc83.25454867', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('23', '', 'appkey_68067dd7508366.17966043', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('24', '', 'appkey_68067de26bacd1.66258444', '', '', '', '1');

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
  `plano` int(11) DEFAULT NULL,
  `url_site` varchar(100) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `dispositivos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('1', 'Empresa 1 Teste', '', '(31) 97527-5084', 'empresa1@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-02-03', '2000-11-11', '1', '', '0', '180.00', '', 'Sim', '4', 'emp1', '30', '2');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('2', 'Empresta  apagar 2', '', '(21) 0200-0000', 'ccccccccc@hotmail.com', '', '', '', '', '', '', 'Física', '2025-02-03', '1969-12-31', '1', '', '3', '140.00', '2025-03-27', 'Sim', '2', '', '', '');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('4', 'Empresa 1', '', '(02) 0200-0000', 'escola@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-02-04', '1969-12-31', '1', '', '0', '120.00', '', 'Sim', '1', 'emmp2', '1', '1');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('8', 'Emp 4 teste', '', '(00) 0003-0000', 'emp4@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-02-21', '1969-12-31', '1', '', '0', '0.00', '', 'Sim', '0', 'emp4', '', '');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('12', 'Teste', '506.888.340-94', '(02) 0002-0000', 'teste@hotmaiol.com', '', '', '', '', '', '', 'Física', '2025-03-28', '1969-12-31', '1', '', '3', '120.00', '2025-03-31', 'Não', '1', '', '', '');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('21', 'Teste', '', '(00) 1414', '', '', '', '', '', '', '', 'Jurídica', '2025-04-24', '1969-12-31', '1', '', '0', '160.00', '1969-12-31', 'Sim', '3', '444', '30', '1');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('26', 'aaaaaaaaaaaa', '', '(54) 61212-1212', '', '', '', '', '', '', '', 'Jurídica', '2025-04-24', '1969-12-31', '1', '', '0', '140.00', '1969-12-31', 'Sim', '2', 'sfa', '1', '1');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('27', 'Hugo Test', '716.674.660-20', '(30) 0000-0000', 'hugotest@hotmaiol.com', '', '', '', '', '', '', 'Física', '2025-04-28', '1969-12-31', '1', '', '3', '140.00', '2025-05-01', 'Sim', '2', '', '0', '0');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('44', 'Empp55', '', '(45) 4545-5454', 'emp555@hotmail.com', '', '', '', '', '', '', 'Jurídica', '2025-08-06', '1111-11-11', '1', '', '0', '140.00', '', 'Sim', '2', 'empp655', '30', '2');

-- TABLE: entradas
CREATE TABLE `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `entradas` (`id`, `produto`, `quantidade`, `motivo`, `usuario`, `data`, `empresa`) VALUES ('2', '228', '3', 'teste', '1', '2025-03-17', '1');

-- TABLE: equipamentos
CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('9', 'Notebook', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('12', 'Celular', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('16', 'Tablet ', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('17', 'PC', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('19', 'Ciaxa de Som', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('26', 'Equipemento 1', 'Sim', '2');

-- TABLE: formas_pgto
CREATE TABLE `formas_pgto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `taxa` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('1', 'Dinheiro', '0', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('2', 'Pix', '0', '');
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
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('43', 'Cartão de Débito', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('44', 'Cartão de Crédito', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('45', 'Cartão de Débito', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('46', 'Cartão de Crédito', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('47', 'Cartão de Débito', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('48', 'Pix', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('49', 'Boleto', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('50', 'Cartão de Crédito', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('51', 'Cartão de Débito', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('52', 'Pix', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('53', 'Boleto', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('54', 'Cartão de Crédito', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('55', 'Cartão de Débito', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('56', 'Pix', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('57', 'Boleto', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('58', 'Cartão de Crédito', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('59', 'Cartão de Débito', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('60', 'Pix', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('61', 'Boleto', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('62', 'Cartão de Crédito', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('63', 'Cartão de Débito', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('65', 'Boleto', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('66', 'Cartão de Crédito', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('67', 'Pix', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('68', 'Boleto', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('69', 'Cartão de Crédito', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('70', 'Cartão de Débito', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('71', 'Pix', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('72', 'Boleto', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('73', 'Cartão de Crédito', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('74', 'Cartão de Débito', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('75', 'Pix', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('76', 'Boleto', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('77', 'Cartão de Crédito', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('78', 'Cartão de Débito', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('79', 'Pix', '0', '44');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('80', 'Boleto', '0', '44');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('81', 'Cartão de Crédito', '0', '44');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('82', 'Cartão de Débito', '0', '44');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
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
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('4', 'Financeiro');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('7', 'Caixas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('28', 'Produtos');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('29', 'Contratos');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('30', 'Marketing');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('31', 'Orçamentos');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('32', 'Tarefas / Agendas / Lembretes');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('33', 'Ordem de Serviços');

-- TABLE: grupo_acessos_sas
CREATE TABLE `grupo_acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('4', 'Financeiro');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('7', 'Caixas');

-- TABLE: grupos_clientes
CREATE TABLE `grupos_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `grupos_clientes` (`id`, `empresa`, `grupo`, `cliente`) VALUES ('5', '1', '1', '14');
INSERT INTO `grupos_clientes` (`id`, `empresa`, `grupo`, `cliente`) VALUES ('7', '1', '2', '1');
INSERT INTO `grupos_clientes` (`id`, `empresa`, `grupo`, `cliente`) VALUES ('10', '1', '1', '1');

-- TABLE: grupos_disparos
CREATE TABLE `grupos_disparos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `grupos_disparos` (`id`, `empresa`, `ativo`, `nome`) VALUES ('1', '1', 'Sim', 'Clientes Frequêntes');
INSERT INTO `grupos_disparos` (`id`, `empresa`, `ativo`, `nome`) VALUES ('2', '1', 'Sim', 'Clientes Inadimplentes');

-- TABLE: itens_venda
CREATE TABLE `itens_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('1', '155', '18.00', '1', '18.00', '1', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('2', '157', '25.00', '1', '25.00', '2', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('3', '43', '30.00', '1', '30.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('4', '45', '20.00', '1', '20.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('5', '155', '18.00', '1', '18.00', '11', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('6', '230', '5000.00', '1', '5000.00', '18', '1', '', '2', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('7', '53', '30.00', '1', '30.00', '22', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('8', '92', '50.00', '3', '150.00', '22', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('9', '155', '18.00', '1', '18.00', '24', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('10', '47', '10.00', '3', '30.00', '25', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('11', '155', '18.00', '1', '18.00', '26', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('12', '157', '25.00', '1', '25.00', '27', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('13', '94', '50.00', '1', '50.00', '30', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('14', '47', '10.00', '1', '10.00', '31', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('15', '94', '50.00', '1', '50.00', '32', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('16', '46', '10.00', '1', '10.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('17', '157', '25.00', '1', '25.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('18', '165', '10.00', '1', '10.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('19', '164', '5.00', '1', '5.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('20', '47', '10.00', '1', '10.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('21', '47', '10.00', '1', '10.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('22', '47', '10.00', '1', '10.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('23', '157', '25.00', '1', '25.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('24', '157', '25.00', '1', '25.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('25', '64', '12.00', '1', '12.00', '4', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('26', '65', '15.00', '1', '15.00', '4', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('27', '158', '25.00', '1', '25.00', '5', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('28', '157', '25.00', '1', '25.00', '6', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('29', '155', '18.00', '1', '18.00', '6', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('30', '47', '10.00', '1', '10.00', '6', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('31', '155', '18.00', '1', '18.00', '8', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('32', '155', '18.00', '1', '18.00', '9', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('33', '155', '18.00', '1', '18.00', '10', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('41', '47', '10.00', '2', '20.00', '17', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('42', '155', '18.00', '2', '36.00', '17', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('50', '158', '25.00', '1', '25.00', '18', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('51', '47', '10.00', '1', '10.00', '18', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('52', '164', '5.00', '3', '15.00', '18', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('53', '231', '3125.00', '1', '3125.00', '19', '1', '', '2', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('54', '230', '5000.00', '1', '5000.00', '20', '1', '', '2', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('61', '158', '25.00', '1', '25.00', '20', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('62', '155', '18.00', '1', '18.00', '20', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('63', '155', '18.00', '1', '18.00', '21', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('64', '157', '25.00', '1', '25.00', '21', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('65', '157', '25.00', '1', '25.00', '22', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('66', '155', '18.00', '1', '18.00', '22', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('67', '157', '25.00', '1', '25.00', '22', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('68', '165', '10.00', '1', '10.00', '23', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('73', '164', '5.00', '1', '5.00', '24', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('74', '165', '10.00', '1', '10.00', '25', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('75', '165', '10.00', '1', '10.00', '26', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('76', '164', '5.00', '1', '5.00', '26', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('77', '157', '25.00', '1', '25.00', '27', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('78', '47', '10.00', '1', '10.00', '27', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('79', '46', '10.00', '1', '10.00', '27', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('80', '157', '25.00', '1', '25.00', '28', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('81', '155', '18.00', '1', '18.00', '28', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('82', '157', '25.00', '1', '25.00', '29', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('83', '157', '25.00', '1', '25.00', '30', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('84', '47', '10.00', '1', '10.00', '31', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('85', '47', '10.00', '1', '10.00', '31', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('86', '47', '10.00', '1', '10.00', '31', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('87', '47', '10.00', '1', '10.00', '32', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('88', '47', '10.00', '1', '10.00', '32', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('89', '47', '10.00', '1', '10.00', '33', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('90', '47', '10.00', '1', '10.00', '33', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('91', '46', '10.00', '1', '10.00', '34', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('92', '165', '10.00', '3', '30.00', '34', '17', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('93', '165', '10.00', '2', '20.00', '35', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('94', '165', '10.00', '2', '20.00', '36', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('95', '165', '10.00', '3', '30.00', '37', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('97', '165', '10.00', '4', '40.00', '41', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('108', '158', '25.00', '2', '50.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('109', '158', '25.00', '3', '75.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('110', '1', '130.00', '1', '130.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('111', '47', '10.00', '1', '10.00', '3', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('133', '47', '10.00', '1', '10.00', '4', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('134', '2', '100.00', '1', '100.00', '4', '1', '', '1', 'Serviço');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('135', '157', '25.00', '1', '25.00', '4', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('136', '47', '10.00', '3', '30.00', '5', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('137', '155', '18.00', '1', '18.00', '5', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('138', '157', '25.00', '1', '25.00', '5', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('139', '1', '130.00', '4', '520.00', '5', '1', '', '1', 'Serviço');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('140', '47', '10.00', '1', '10.00', '6', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('141', '1', '130.00', '1', '130.00', '6', '1', '', '1', 'Serviço');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('142', '155', '18.00', '1', '18.00', '7', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('143', '47', '10.00', '1', '10.00', '7', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('144', '1', '130.00', '1', '130.00', '7', '1', '', '1', 'Serviço');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('145', '47', '10.00', '1', '10.00', '11', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('146', '155', '18.00', '1', '18.00', '12', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('147', '47', '10.00', '1', '10.00', '13', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('148', '157', '25.00', '1', '25.00', '14', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('149', '46', '10.00', '1', '10.00', '14', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('150', '43', '30.00', '1', '30.00', '29', '1', '', '1', '');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('151', '155', '18.00', '1', '18.00', '34', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('152', '155', '18.00', '1', '18.00', '37', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('153', '155', '18.00', '1', '18.00', '40', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('154', '155', '18.00', '1', '18.00', '43', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('155', '155', '18.00', '1', '18.00', '44', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('156', '155', '18.00', '1', '18.00', '45', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('157', '157', '25.00', '1', '25.00', '46', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('158', '157', '25.00', '1', '25.00', '52', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('159', '157', '25.00', '1', '25.00', '53', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('160', '157', '25.00', '1', '25.00', '55', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('161', '157', '25.00', '1', '25.00', '56', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('162', '157', '25.00', '1', '25.00', '57', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('163', '157', '25.00', '1', '25.00', '59', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('164', '157', '25.00', '1', '25.00', '5', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('165', '157', '25.00', '1', '25.00', '6', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('166', '157', '25.00', '1', '25.00', '7', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('167', '157', '25.00', '1', '25.00', '9', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('168', '157', '25.00', '1', '25.00', '12', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('169', '157', '25.00', '1', '25.00', '12', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('170', '157', '25.00', '1', '25.00', '15', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('171', '157', '25.00', '1', '25.00', '15', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('172', '157', '25.00', '1', '25.00', '17', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('173', '157', '25.00', '1', '25.00', '30', '1', '', '1', 'Produto');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`, `tipo`) VALUES ('174', '158', '25.00', '1', '25.00', '30', '1', '', '1', 'Produto');

-- TABLE: jornada
CREATE TABLE `jornada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario` int(11) NOT NULL,
  `data` date NOT NULL,
  `entrada` time NOT NULL,
  `entrada_almoco` time NOT NULL,
  `saida_almoco` time NOT NULL,
  `saida` time NOT NULL,
  `total_horas` time NOT NULL,
  `intervalo` time NOT NULL,
  `hora_extra` time NOT NULL,
  `folga` varchar(5) NOT NULL,
  `feriado` varchar(5) NOT NULL,
  `falta` varchar(5) NOT NULL,
  `data_lanc` date NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('1', '31', '2025-03-18', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '02:00:00', '00:00:00', '', '', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('2', '31', '2025-03-17', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Sim', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('3', '31', '2025-03-15', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Sim', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('4', '31', '2025-03-16', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'Sim', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('5', '31', '2025-03-14', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'Sim', '', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('6', '31', '2025-03-13', '08:00:00', '12:00:00', '13:00:00', '18:00:00', '09:00:00', '01:00:00', '01:00:00', '', '', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('10', '29', '2025-03-19', '09:00:00', '10:00:00', '12:00:00', '19:00:00', '08:00:00', '02:00:00', '00:00:00', '', '', '', '2025-03-19', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('11', '29', '2025-03-18', '09:00:00', '10:00:00', '11:00:00', '19:00:00', '09:00:00', '01:00:00', '01:00:00', '', '', '', '2025-03-19', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('12', '29', '2025-03-17', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'Sim', '', '', '2025-03-19', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('13', '29', '2025-03-16', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Sim', '2025-03-19', '0', '1');

-- TABLE: marcas
CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('11', 'Samsung', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('12', 'LG', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('13', 'Apple', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('14', 'Xiaomi', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('16', 'Motorola', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('19', 'Lenovo', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('20', 'CCE', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('23', 'Acer', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('24', 'Outras', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('29', 'DELL', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('31', 'Marca 1', 'Sim', '2');

-- TABLE: marketing
CREATE TABLE `marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `data_envio` date DEFAULT NULL,
  `envios` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `mensagem2` text DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `audio` varchar(100) DEFAULT NULL,
  `forma_envio` varchar(50) DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `ultimo_registro` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `dispositivo` varchar(35) DEFAULT NULL,
  `total_disparos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`, `total_disparos`) VALUES ('6', '2025-04-04', '', '', '?? PROMOÇÃO EXCLUSIVA ??', '?? *PROMOÇÃO EXCLUSIVA 2*??\r\n\r\n? Mais de 10.000 canais (incluindo esportes, filmes e séries)\r\n? Canais em HD, Full HD e 4K\r\n? Acesso a conteúdos exclusivos\r\n? Funciona em Smart TV, TV Box, Celular, PC e Tablet\r\n? Suporte rápido e garantia de estabilidade\r\n\r\n? *OFERTA ESPECIAL: * Assinando agora, você mantém o preço atual e ainda ganha dias extras grátis!\r\n\r\n? *TESTE GRÁTIS DISPONÍVEL!* Quer testar antes de assinar? Chame no WhatsApp e peça seu teste grátis!\r\n\r\n?? Me chama no WhatsApp agora mesmo e garanta o seu\r\n\r\n\r\n? _Vagas limitadas! Aproveite antes que acabe!_', '?? *PROMOÇÃO EXCLUSIVA ? IPTV ILIMITADO!*??\r\n\r\n? Mais de 10.000 canais (incluindo esportes, filmes e séries)\r\n? Canais em HD, Full HD e 4K\r\n? Acesso a conteúdos exclusivos\r\n? Funciona em Smart TV, TV Box, Celular, PC e Tablet\r\n? Suporte rápido e garantia de estabilidade\r\n\r\n? *OFERTA ESPECIAL: * Assinando agora, você mantém o preço atual e ainda ganha dias extras grátis!\r\n\r\n? *TESTE GRÁTIS DISPONÍVEL!* Quer testar antes de assinar? Chame no WhatsApp e peça seu teste grátis!\r\n\r\n?? Me chama no WhatsApp agora mesmo e garanta o seu\r\n\r\n\r\n? _Vagas limitadas! Aproveite antes que acabe!_', '21-04-2025-11-36-31-04-03-2025-12-29-00-eupng.png', '21-04-2025-11-36-31-04-03-2025-12-29-00-13-07-2023-18-52-36-WhatsApp-Ptt-2023-07-13-at-18.34.03.ogg', '', '21-04-2025-11-36-31-04-03-2025-12-29-14-rel_teste_pdf.pdf', '', '1', '', '0');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`, `total_disparos`) VALUES ('13', '2025-04-04', '', '', '? INDIQUE E GANHE! ?', 'Olá {cliente} Curtiu nosso IPTV? Então compartilha com os amigos e ainda ganhe um mês grátis! ??\r\n\r\n? *A cada pessoa que você indicar e assinar*, você *ganha +1 mês grátis* no seu plano!\r\n\r\nSem limite de indicações! Quanto mais gente indicar, mais tempo você assiste de graça! ??\r\n\r\n? Canais ao vivo\r\n? Filmes, séries, lançamentos\r\n? Esportes, lutas, desenhos e muito mais\r\n? Qualidade HD/Full HD\r\n? Suporte rápido\r\n\r\n? Só falar com a gente e passar os dados do indicado!', 'Olá {cliente} Curtiu nosso IPTV? Então compartilha com os amigos e ainda ganhe um mês grátis! ??\r\n\r\n? *A cada pessoa que você indicar e assinar*, você *ganha +1 mês grátis* no seu plano!\r\n\r\nSem limite de indicações! Quanto mais gente indicar, mais tempo você assiste de graça! ??\r\n\r\n? Canais ao vivo\r\n? Filmes, séries, lançamentos\r\n? Esportes, lutas, desenhos e muito mais\r\n? Qualidade HD/Full HD\r\n? Suporte rápido\r\n\r\n? Só falar com a gente e passar os dados do indicado!', '21-04-2025-11-36-21-GESTAO_IMP_4.jpg', '21-04-2025-11-36-21-04-03-2025-12-29-00-13-07-2023-18-52-36-WhatsApp-Ptt-2023-07-13-at-18.34.03.ogg', '', '21-04-2025-11-36-21-04-03-2025-12-29-14-rel_teste_pdf.pdf', '', '1', '', '0');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`, `total_disparos`) VALUES ('16', '2025-04-07', '', '', 'Teste Campanha', 'Olá {cliente}! Curtiu nossos produtos? Então compartilha com os amigos e ainda GANHE um brinde ou desconto exclusivo! ??\r\n\r\n? A cada pessoa que você indicar e comprar, você ganha um desconto especial ou brinde na sua próxima compra! ?\r\n\r\nSem limites! Quanto mais gente você indicar, mais vantagens você acumula! ??\r\n\r\n? Produtos de qualidade\r\n? Preços acessíveis\r\n? Entrega rápida e segura\r\n? Atendimento personalizado\r\n? Ofertas exclusivas para clientes VIP\r\n\r\n? É só chamar a gente e passar os dados do indicado. Bora espalhar essa vantagem! ???', 'Olá {cliente}! Curtiu nossos produtos? Então compartilha com os amigos e ainda GANHE um brinde ou desconto exclusivo! ??\r\n\r\n? A cada pessoa que você indicar e comprar, você ganha um desconto especial ou brinde na sua próxima compra! ?\r\n\r\nSem limites! Quanto mais gente você indicar, mais vantagens você acumula! ??\r\n\r\n? Produtos de qualidade\r\n? Preços acessíveis\r\n? Entrega rápida e segura\r\n? Atendimento personalizado\r\n? Ofertas exclusivas para clientes VIP\r\n\r\n? É só chamar a gente e passar os dados do indicado. Bora espalhar essa vantagem! ???', '15-07-2025-13-01-36-Nitro_Wallpaper_5000x2813.jpg', '15-07-2025-13-01-36-04-03-2025-12-29-00-13-07-2023-18-52-36-WhatsApp-Ptt-2023-07-13-at-18.34.03.ogg', 'Clientes Frequêntes', '15-07-2025-13-01-36-04-03-2025-12-29-14-rel_teste_pdf.pdf', '', '1', '', '0');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`, `total_disparos`) VALUES ('17', '2025-04-21', '', '', 'fdafadsfdas ', 'fdafasdfdsa fasd fdsafasd fas?fads??a?', 'fdafasdfdsa fasd fdsafasd fas?fads??a?', 'sem-foto.png', '', '', 'sem-foto.png', '', '2', '', '');

-- TABLE: modelos
CREATE TABLE `modelos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `equipamento` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('26', 'E6S', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('36', 'G530 Gran Prime Duos', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('75', 'A01 - A015', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('76', 'A01 CORE - A013  ', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('81', 'A02 - A022', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('118', 'A71 - A715', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('119', 'A72 4G 5G A725 A726', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('291', 'Ideapad - 320', 'Sim', '19', '9', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('301', 'Gp350M', 'Sim', '24', '19', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('302', 'E50PT', 'Sim', '23', '9', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('303', 'a55', 'Sim', 'Acer', 'Celular', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('307', 'Modelo 1', 'Sim', '31', '26', '2');

-- TABLE: orcamentos
CREATE TABLE `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `data_entrega` date NOT NULL,
  `dias_validade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `desconto` int(11) NOT NULL,
  `tipo_desconto` varchar(20) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `total_produtos` decimal(8,2) DEFAULT NULL,
  `total_servicos` decimal(8,2) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `frete` decimal(8,2) NOT NULL,
  `equipamento` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `defeito` varchar(1000) DEFAULT NULL,
  `condicoes` varchar(2000) DEFAULT NULL,
  `acessorios` varchar(1000) DEFAULT NULL,
  `laudo` varchar(1000) DEFAULT NULL,
  `senha_ap` varchar(50) DEFAULT NULL,
  `mao_obra` decimal(8,2) DEFAULT NULL,
  `vall` decimal(8,2) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('1', '13', '2025-03-18', '2025-03-18', '5', '285.00', '5', '%', '330.75', '', 'Aprovado', '100.00', '185.00', '1', '10.00', 'Celular', 'Acer', '303', 'csdaf sadfa fsafdsafdsa fa f', 'fdasfa fdsf asfafds fas', '', '', '', '50.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('2', '1', '2025-03-18', '2025-03-18', '5', '50.00', '0', '%', '50.00', '', 'Aprovado', '50.00', '0.00', '1', '0.00', '', '', '', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('5', '2', '2025-03-18', '2025-03-18', '3', '5200.00', '0', '%', '5200.00', '', 'Aprovado', '5000.00', '200.00', '1', '0.00', '26', '31', '307', '', '', '', '', '', '0.00', '0.00', '2');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('6', '1', '2025-03-18', '2025-03-18', '5', '920.00', '0', '%', '920.00', '', 'Aprovado', '20.00', '900.00', '1', '0.00', '', '', '', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('7', '14', '2025-03-18', '2025-03-18', '5', '120.00', '0', '%', '120.00', '', 'Aprovado', '20.00', '100.00', '1', '0.00', 'Celular', 'Acer', '303', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('8', '14', '2025-03-18', '2025-03-18', '3', '60.00', '0', '%', '60.00', '', 'Aprovado', '20.00', '40.00', '1', '0.00', '9', '23', '302', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('9', '11', '2025-05-29', '2025-05-29', '5', '40.00', '0', '%', '40.00', '', 'Aprovado', '40.00', '0.00', '1', '0.00', '', '', '', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('10', '14', '2025-06-10', '2025-06-10', '4', '30.00', '0', '%', '30.00', '', 'Aprovado', '30.00', '0.00', '1', '0.00', '', '', '', '', '', '', '', '', '100.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('11', '14', '2025-07-15', '2025-07-15', '4', '260.00', '5', '%', '297.00', 'fdafasf', 'Pendente', '30.00', '130.00', '1', '50.00', 'Celular', 'Acer', '303', 'fdsafsa', 'fdafdsafsaf', 'fdafafdsaf', 'dsaff', '123456', '100.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('12', '14', '2025-08-06', '2025-08-06', '10', '130.00', '0', '%', '130.00', '', 'Pendente', '30.00', '100.00', '1', '0.00', '9', '23', '302', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('13', '1', '2025-07-06', '2025-08-06', '5', '30.00', '0', '%', '30.00', '', 'Pendente', '30.00', '0.00', '1', '0.00', '9', '23', '302', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('14', '14', '2025-08-19', '2025-08-19', '5', '130.00', '0', '%', '130.00', '', 'Pendente', '30.00', '100.00', '1', '0.00', 'Celular', 'Acer', '303', '', '', '', '', '', '0.00', '0.00', '1');

-- TABLE: os
CREATE TABLE `os` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `data_entrega` date NOT NULL,
  `dias_validade` int(11) DEFAULT NULL,
  `valor` decimal(8,2) NOT NULL,
  `desconto` int(11) NOT NULL,
  `tipo_desconto` varchar(20) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `total_produtos` decimal(8,2) NOT NULL,
  `total_servicos` decimal(8,2) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `frete` decimal(8,2) NOT NULL,
  `tecnico` int(11) NOT NULL,
  `laudo` varchar(2000) DEFAULT NULL,
  `condicoes` varchar(2000) DEFAULT NULL,
  `acessorios` varchar(1000) DEFAULT NULL,
  `equipamento` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `mao_obra` decimal(8,2) DEFAULT NULL,
  `val_entrada` decimal(8,2) DEFAULT NULL,
  `vall` decimal(8,2) DEFAULT NULL,
  `defeito` varchar(1000) DEFAULT NULL,
  `dias_garantia` varchar(50) DEFAULT NULL,
  `senha_ap` varchar(50) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `forma_pgto` varchar(20) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('1', '13', '2025-03-18', '2025-03-18', '5', '285.00', '5', '%', '330.75', '', 'Entregue', '100.00', '185.00', '1', '10.00', '0', '', 'fdasfa fdsf asfafds fas', '', '', '', '303', '1', '50.00', '', '0.00', 'csdaf sadfa fsafdsafdsa fa f', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('2', '1', '2025-03-18', '2025-03-18', '', '140.00', '50', '%', '80.00', '', 'Finalizada', '50.00', '65.00', '1', '10.00', '17', '', 'ffasdfdsaf', '', 'Celular', 'Acer', '303', '', '25.00', '0.00', '0.00', 'fdfa', '30', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('3', '1', '2025-03-18', '2025-03-18', '', '20.00', '0', '%', '20.00', '', 'Finalizada', '20.00', '0.00', '1', '0.00', '17', '', '', '', 'Celular', 'Acer', '303', '', '0.00', '0.00', '0.00', 'fdasf afd fafasf ', '', '', 'Sim', '36', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('5', '1', '2025-03-18', '2025-03-18', '', '100.00', '0', '%', '100.00', '', 'Entregue', '0.00', '100.00', '1', '0.00', '29', '', '', '', 'Celular', 'Acer', '303', '', '0.00', '0.00', '0.00', 'fdafa adfasf ', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('6', '1', '2025-03-18', '2025-03-18', '', '50.00', '0', '%', '50.00', '', 'Entregue', '20.00', '30.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fda fsafdsa ', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('7', '1', '2025-03-18', '2025-03-18', '', '3.00', '0', '%', '3.00', '', 'Entregue', '3.00', '0.00', '1', '0.00', '29', '', '', '', 'Celular', 'Acer', '303', '', '0.00', '0.00', '0.00', 'fadfa ', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('8', '1', '2025-03-18', '2025-03-18', '', '110.00', '0', '%', '110.00', '', 'Entregue', '0.00', '110.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdafasf', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('9', '1', '2025-03-18', '2025-03-18', '', '350.00', '0', '%', '350.00', '', 'Entregue', '0.00', '350.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdfda', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('10', '1', '2025-03-18', '2025-03-18', '', '100.00', '0', '%', '100.00', '', 'Entregue', '0.00', '100.00', '1', '0.00', '29', '', '', '', '19', '24', '301', '', '0.00', '0.00', '0.00', 'vfgfd', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('11', '1', '2025-03-18', '2025-03-18', '', '230.00', '0', '%', '230.00', '', 'Entregue', '0.00', '230.00', '29', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdsfada', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('12', '1', '2025-03-18', '2025-03-18', '', '100.00', '0', '%', '100.00', '', 'Entregue', '0.00', '100.00', '29', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdafadf', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('13', '2', '2025-03-18', '2025-03-18', '3', '5200.00', '0', '%', '5200.00', '', 'Entregue', '5000.00', '200.00', '1', '0.00', '0', '', '', '', '', '', '307', '5', '0.00', '', '0.00', '', '', '', '', '', '2');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('14', '2', '2025-03-18', '2025-03-18', '', '0.00', '0', '%', '0.00', '', 'Aberta', '0.00', '0.00', '1', '0.00', '29', '', '', '', '26', '31', '307', '', '0.00', '0.00', '0.00', 'dfggdfgfddfg', '', '', '', '', '2');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('15', '2', '2025-03-18', '2025-03-18', '', '5600.00', '0', '%', '5600.00', '', 'Entregue', '5000.00', '600.00', '1', '0.00', '30', '', '', '', '26', '31', '307', '', '0.00', '0.00', '0.00', 'fdsaf', '', '', '', '', '2');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('16', '1', '2025-03-18', '2025-03-18', '5', '920.00', '0', '%', '920.00', '', 'Aberta', '20.00', '900.00', '1', '0.00', '0', '', '', '', '', '', '', '6', '0.00', '', '0.00', '', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('17', '14', '2025-03-18', '2025-03-18', '3', '60.00', '0', '%', '60.00', '', 'Aberta', '20.00', '40.00', '1', '0.00', '0', '', '', '', '', '', '302', '8', '0.00', '', '0.00', '', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('18', '14', '2025-05-29', '2025-05-29', '', '20.00', '0', '%', '20.00', '', 'Aberta', '20.00', '0.00', '1', '0.00', '29', '', 'gfdgfdgd', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdgdfgf', '', '', 'Sim', '36', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('19', '1', '2025-05-29', '2025-05-29', '', '20.00', '0', '%', '20.00', '', 'Aberta', '20.00', '0.00', '1', '0.00', '31', '', 'trwtwtew', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'ggregetw', '', '', 'Sim', '36', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('20', '1', '2025-05-29', '2025-05-29', '', '90.00', '0', '%', '90.00', '', 'Entregue', '30.00', '60.00', '1', '0.00', '31', 'fdafa', 'fdafadsf', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fasdfdf', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('21', '14', '2025-07-16', '2025-07-16', '', '550.00', '5', '%', '522.50', 'fdafadf', 'Aberta', '0.00', '450.00', '1', '0.00', '0', 'fafa', 'fafaf', 'fadfadf', 'Celular', 'Acer', '303', '', '100.00', '0.00', '0.00', 'fdafafas', '', '1235', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('22', '14', '2025-08-06', '2025-03-18', '5', '120.00', '0', '%', '120.00', '', 'Aberta', '20.00', '100.00', '1', '0.00', '0', '', '', '', '', '', '303', '7', '0.00', '', '0.00', '', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('23', '14', '2025-08-19', '2025-08-19', '', '270.00', '0', '%', '270.00', '', 'Aberta', '20.00', '250.00', '1', '0.00', '31', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', '', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('24', '14', '2025-08-19', '2025-08-19', '', '200.00', '0', '%', '200.00', '', 'Entregue', '20.00', '180.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', '', '', '', '', '', '1');

-- TABLE: os_imagens
CREATE TABLE `os_imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `os` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `os_imagens` (`id`, `os`, `foto`) VALUES ('1', '3', '18-03-2025-13-15-09-eupng.png');
INSERT INTO `os_imagens` (`id`, `os`, `foto`) VALUES ('2', '3', '18-03-2025-13-15-46-vendas_orcamentos.jpg');

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
  `alerta` varchar(5) DEFAULT NULL,
  `hora_alerta` time DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `plano_contas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`, `plano_contas`) VALUES ('1', 'Conta Empresarial', '0', '0', '50.00', '2025-07-15', '', '2025-07-15', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '50.00', '1', '0', 'Não', '', '12:19:36', '', '8', '0', 'Não', '', '1', '', '08:05:00', '', '', '3');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`, `plano_contas`) VALUES ('2', 'Conta pessoal', '0', '0', '60.00', '2025-07-15', '', '2025-07-15', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '60.00', '1', '0', 'Não', '', '12:19:50', '', '8', '0', 'Não', '', '1', '', '08:51:00', '', '', '1');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`, `plano_contas`) VALUES ('3', 'Conta de Luz', '0', '0', '70.00', '2025-07-15', '2025-07-15', '2025-07-15', '34', '0', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '', '70.00', '1', '1', 'Sim', '', '12:24:47', '', '8', '0', 'Não', '', '1', '', '08:38:00', '', '', '2');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`, `plano_contas`) VALUES ('4', 'Devolução Venda', '0', '0', '142.20', '2025-07-15', '2025-07-15', '2025-07-15', '36', '0', '', 'sem-foto.png', 'Cancelamento', '', '', '', '', '', '', '1', '1', 'Sim', '', '', '', '', '', '', '', '1', '', '08:01:00', '', '0', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`, `plano_contas`) VALUES ('5', 'Devolução Venda', '0', '0', '140.00', '2025-07-15', '2025-07-15', '2025-07-15', '36', '0', '', 'sem-foto.png', 'Cancelamento', '', '', '', '', '', '', '1', '1', 'Sim', '', '', '', '', '', '', '', '1', '', '09:37:00', '', '0', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`, `plano_contas`) VALUES ('6', 'Comissão', '0', '29', '90.90', '2025-08-22', '', '2025-08-19', '0', '0', '', 'sem-foto.png', 'Comissão', '24', '', '', '', '', '90.90', '1', '0', 'Não', '', '', '', '', '', '', '', '1', '', '09:21:00', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `pagar_sas` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`) VALUES ('1', 'Conta', '0', '0', '50.00', '2025-02-27', '', '2025-02-27', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '50.00', '1', '0', 'Não', '', '18:05:21', '', '5', '0', 'Não', '');

-- TABLE: perguntas_site
CREATE TABLE `perguntas_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_pergunta` varchar(150) DEFAULT NULL,
  `descricao_pergunta` text DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `posicao_pergunta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('1', 'O que é o Getor ERP SAAS?', 'O Gestor ERP SAAS, é um sistema ERP (Enterprise Resource Planning) completo, 100% online, desenvolvido para simplificar a gestão de empresas de todos os portes. Ele integra vendas, estoque, financeiro, atendimento ao cliente e muito mais em uma única plat', '0', '1');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('3', 'Como funciona a assinatura?', 'Após escolher seu plano, você será redirecionado para o processo de pagamento. Assim que confirmado, você receberá acesso imediato ao sistema com todas as funcionalidades do pl Assim que confirmado, você receberá acesso imediato ao sistema com todas as fu', '0', '2');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('4', 'Preciso instalar algum software?', 'Não! O Gestor ERP SAAS é 100% baseado na nuvem. Você só precisa de um navegador e conexão com a internet para acessar o sistema de qualquer dispositivo, seja computador, tablet ou smartphone. ', '0', '3');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('5', 'Como funciona a integração com WhatsAppp?', 'Você conecta seu WhatsApp diretamente no sistema através de um simples QR Code. Com isso, você pode realizar campanhas de marketing com envio de disparos em massa, incluindo arquivos, textos e até mesmo áudios personalizados. Além disso, tudo que é gerado', '0', '4');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('6', 'Área de Perguntasss', 'Resposta perguntas', '1', '1');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('7', 'fsdffdf', 'fdafdafaf fdf afa', '0', '5');

-- TABLE: plano_contas
CREATE TABLE `plano_contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `plano_contas` (`id`, `nome`, `empresa`) VALUES ('1', 'Despesas Pessoais', '1');
INSERT INTO `plano_contas` (`id`, `nome`, `empresa`) VALUES ('2', 'Despesas Residenciais', '1');
INSERT INTO `plano_contas` (`id`, `nome`, `empresa`) VALUES ('3', 'Despesas Empresariais', '1');

-- TABLE: planos
CREATE TABLE `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `clientes` int(11) DEFAULT NULL,
  `usuarios` int(11) DEFAULT NULL,
  `dispositivos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`, `dispositivos`) VALUES ('1', 'Plano Bronze', '120.00', 'Sim', '1', '1', '1');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`, `dispositivos`) VALUES ('2', 'Plano Prata', '140.00', 'Sim', '3', '3', '2');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`, `dispositivos`) VALUES ('3', 'Plano Ouro', '160.00', 'Sim', '7', '7', '5');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`, `dispositivos`) VALUES ('4', 'Plano Diamante', '180.00', 'Sim', '0', '0', '10');

-- TABLE: planos_itens
CREATE TABLE `planos_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('9', '1', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('11', '1', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('13', '1', 'Contas à Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('15', '1', 'Gestão de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('17', '1', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('18', '1', 'Apis de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('20', '1', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('22', '1', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('23', '2', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('25', '2', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('27', '2', 'Contas à Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('29', '2', 'Gestão de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('31', '2', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('32', '2', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('34', '2', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('36', '2', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('37', '2', 'Cobranças Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('38', '3', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('40', '3', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('41', '3', 'Vídeo Tutoriais');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('42', '3', 'Contas à Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('44', '3', 'Gestão de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('46', '3', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('47', '3', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('49', '3', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('51', '3', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('52', '3', 'Cobranças Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('53', '3', 'Gestão de Contratos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('54', '3', 'Orçamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('55', '4', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('57', '4', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('59', '4', 'Contas à Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('61', '4', 'Gestão de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('63', '4', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('64', '4', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('66', '4', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('68', '4', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('69', '4', 'Cobranças Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('70', '4', 'Gestão de Contratos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('71', '4', 'Orçamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('72', '4', 'Ordem de Serviços');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('73', '4', 'Marketing Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('74', '1', 'Limite de 1 Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('75', '1', 'Limite de 1 Usuário');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('76', '2', 'Limite de 3 Clientes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('77', '2', 'Limite de 3 Usuários');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('80', '4', 'Clientes Ilimitados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('81', '4', 'Usuários Ilimitados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('82', '3', 'Limite de 7 Usuários');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('83', '3', 'Limite de 7 Clientes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('85', '4', '10 Dispositivos Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('86', '3', '5 Dispositivos Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('87', '2', '2 Dispositivos Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('88', '1', '1 Dispositivos Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('89', '4', 'Site');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('90', '3', 'Site');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('91', '2', 'Site');

-- TABLE: planos_recursos
CREATE TABLE `planos_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` int(11) DEFAULT NULL,
  `recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('1', '4', '1');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('5', '2', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('6', '3', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('7', '3', '4');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('8', '3', '5');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('9', '4', '5');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('10', '4', '4');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('11', '4', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('12', '4', '6');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('13', '4', '7');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('14', '3', '7');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('15', '2', '7');

-- TABLE: produtos
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor_compra` decimal(8,2) NOT NULL,
  `valor_venda` decimal(8,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `nivel_estoque` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `sub_categoria` varchar(50) DEFAULT NULL,
  `lucro` decimal(8,2) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `tem_estoque` varchar(5) DEFAULT NULL,
  `vendas` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `valor_lucro` decimal(8,2) DEFAULT NULL,
  `lucro_reais` decimal(8,2) DEFAULT NULL,
  `valor_promocional` decimal(8,2) DEFAULT NULL,
  `mostrar_site` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('43', '', 'Gaveta Chip ', '25.00', '30.00', '48', 'sem-foto.jpg', 'Sim', '0', '28', '0', '', '', '', 'Sim', '4', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('44', '', 'A10S Película 3D Privacidade', '5.00', '30.00', '-6', 'sem-foto.jpg', 'Sim', '0', '30', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('45', 'AL-A155', 'Adaptador Bluetooth C/Cabo P2', '5.00', '20.00', '2', '21-10-2023-05-51-40-download.jpg', 'Sim', '1', '46', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('46', 'ZJT-V-OTG', 'Adaptador OTG USB P/TYPE C', '3.00', '10.00', '1', '21-10-2023-05-53-10-4813845086_1_large.png', 'Sim', '0', '47', '0', '', '', '', 'Sim', '3', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('47', 'A-60U', 'ADAPTADOR TIPO C PARA USB', '2.50', '10.00', '10', '21-10-2023-05-58-00-514L3rxOMvS._AC_UF1000,1000_QL80.png', 'Sim', '0', '47', '0', '', '', '', 'Sim', '114', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('48', '', 'Antena WiFi', '15.00', '30.00', '2', 'sem-foto.jpg', 'Sim', '1', '48', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('49', 'le-9014', 'Cabo Automotivo 500Amp', '25.00', '50.00', '1', '21-10-2023-05-59-44-4386fafab2c443c0565e7a15f446119b.jpg', 'Sim', '0', '40', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('50', 'LE-804-3', 'Cabo Auxiliar P2 - P2 / 3M', '4.00', '12.00', '2', '21-10-2023-06-02-26-018-1111_01-d4c60ee6e18b45e72116.png', 'Sim', '0', '49', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('51', 'LE-9015,LK-U04', 'CABO DE BATERIA P/CARRO 800AMP', '30.00', '80.00', '0', '21-10-2023-06-03-03-4386fafab2c443c0565e7a15f446119b.jpg', 'Sim', '0', '40', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('52', 'BM62', 'CABO ESPECIAL CARREGA RAOIDO USB V8 1M', '15.00', '30.00', '2', '21-10-2023-06-04-02-2023-10-21_06h03_43.png', 'Sim', '0', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('53', 'BM68', 'CABO ESPECIAL CARREGA RAPIDO USB TYPE-C', '15.00', '30.00', '0', '21-10-2023-06-04-39-2023-10-21_06h03_43.png', 'Sim', '0', '38', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('54', 'H102-2', 'CABO HMASTON 1M 4.8A IPHONE', '5.50', '25.00', '8', '21-10-2023-06-06-07-2023-10-21_06h05_00.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('55', 'H102-3', 'CABO HMASTON 1M 4.8A TYPE-C', '5.50', '25.00', '10', '21-10-2023-06-07-24-2023-10-21_06h05_00.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('56', 'H102-1', 'CABO HMASTON 1M 4.8A V8', '5.50', '25.00', '9', '21-10-2023-06-08-00-2023-10-21_06h05_00.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('57', 'H136-2', 'CABO HMASTON 4.8A 2M IPHONE', '8.50', '30.00', '3', '21-10-2023-06-08-55-2023-10-21_06h08_18.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('58', 'H136-3', 'CABO HMASTON 4.8A 2M TYPE-C', '8.50', '30.00', '2', '21-10-2023-06-09-43-2023-10-21_06h08_18.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('59', 'H136-1', 'CABO HMASTON 4.8A 2M V8', '8.50', '30.00', '3', '21-10-2023-06-10-20-2023-10-21_06h08_18.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('60', 'LE-902', 'Cabo impressora 1.5m', '6.00', '15.00', '2', '21-10-2023-06-11-32-2023-10-21_06h11_03.png', 'Sim', '0', '49', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('61', 'KD305', 'CABO KAIDI 1M / USB ~ V8 ( Garantia 3mes)', '15.00', '25.00', '14', '21-10-2023-06-12-07-2023-10-21_06h11_14.png', 'Sim', '1', '38', '15', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('62', 'KD306', 'CABO KAIDI 1M / USB ~ IPHONE ( Garantia 3mes)', '7.00', '25.00', '6', '21-10-2023-06-12-38-2023-10-21_06h11_14.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('63', 'KD-TC30', 'CABO KAIDI 1M / USB~TYPE-C ( Garantia 3mes)', '8.50', '25.00', '4', '21-10-2023-06-15-16-2023-10-21_06h11_14.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('64', 'LE-5513', 'CABO P10 MACHO +P2 MACHO 3M', '5.00', '12.00', '9', '21-10-2023-06-16-20-018-1111_01-d4c60ee6e18b45e72116.png', 'Sim', '1', '49', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('65', 'CBX-ARCA30', 'CABO P2/2RCA', '3.50', '15.00', '1', '21-10-2023-06-17-24-2023-10-21_06h16_33.png', 'Sim', '1', '49', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('66', 'XC-CF-01', 'Cabo pra CPU', '7.00', '15.00', '0', '21-10-2023-06-19-46-2023-10-21_06h18_48.png', 'Sim', '1', '50', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('67', 'BM-8626', 'Cabo Premium / 1M / USB - IPHONE (BMAX)', '5.50', '25.00', '5', '21-10-2023-06-20-40-2023-10-21_06h20_06.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('68', 'BM-8627', 'Cabo Premium / 1M / USB - TYPE-C (BMAX)', '5.50', '25.00', '5', '21-10-2023-06-21-16-2023-10-21_06h20_06.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('69', 'BM-8625', 'Cabo Premium / 1M / USB V8 (B-MAX)', '5.50', '25.00', '2', '21-10-2023-06-22-28-2023-10-21_06h20_06.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('70', 'BM-8629', 'Cabo Premium / 2M / USB - IPHONE (BMAX)', '7.00', '30.00', '2', '21-10-2023-06-22-55-2023-10-21_06h20_06.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('71', 'BM-8630', 'Cabo Premium / 2M / USB - TYPE-C (BMAX)', '7.00', '30.00', '2', '21-10-2023-06-23-25-2023-10-21_06h20_06.png', 'Sim', '0', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('72', 'BM-8628', 'Cabo Premium / 2M / USB - V8 (B-MAX)', '7.00', '30.00', '2', '21-10-2023-06-23-58-2023-10-21_06h20_06.png', 'Sim', '0', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('73', '', 'CABO TURBO / V8', '30.00', '18.00', '45', '21-10-2023-06-25-27-2023-10-21_06h24_05.png', 'Sim', '5', '38', '15', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('74', '', 'CABO TURBO / TYPE-C', '20.00', '18.00', '20', '21-10-2023-06-26-12-2023-10-21_06h24_05.png', 'Sim', '5', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('75', '', 'CABO TURBO / IPHONE', '3.00', '18.00', '20', '21-10-2023-06-27-10-2023-10-21_06h24_05.png', 'Sim', '5', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('76', 'SJX04', 'Cabo Turbo Type-c Para Iphone / 1M / PD 6A ( Hmast', '8.00', '30.00', '3', '21-10-2023-06-28-01-2023-10-21_06h27_33.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('77', 'LE-847', 'Cabo TYPE-C Para TYPE-C / PD 3A / 1M ( IT.BLUE )', '5.00', '30.00', '3', '21-10-2023-06-28-59-2023-10-21_06h28_33.png', 'Sim', '1', '38', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('78', 'KP-HD009', 'CADDY HD 12,7 MM KNUP', '15.00', '30.00', '1', '21-10-2023-06-29-53-2023-10-21_06h29_39.png', 'Sim', '0', '26', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('79', 'KP-HD010', 'CADDY HD 9,5 MM KNUP', '14.00', '30.00', '2', '21-10-2023-06-30-27-2023-10-21_06h29_39.png', 'Sim', '0', '26', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('80', 'TN07', 'Caixa De Som Alto Falante Bluetooth 8W, LED RGB,Re', '55.00', '100.00', '0', '21-10-2023-06-31-21-2023-10-21_06h31_07.png', 'Sim', '0', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('81', 'A-6036', 'CAIXA DE SOM BLUTOOTH', '27.00', '60.00', '2', '21-10-2023-06-32-50-2023-10-21_06h31_52.png', 'Sim', '0', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('82', 'AL-1182', 'Caixa De Som Portátil Bluetooth', '25.00', '60.00', '2', '21-10-2023-06-33-18-2023-10-21_06h32_01.png', 'Sim', '0', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('83', 'XDG-96', 'Caixa De Som Potátil Bluetooth Com LED RGB ( XTRAD', '115.00', '220.00', '1', '21-10-2023-06-34-58-2023-10-21_06h33_45.png', 'Sim', '0', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('84', 'AL-3098', 'CAIXA DE SOM PRA COMPUTADOR', '12.00', '30.00', '2', '21-10-2023-06-35-41-2023-10-21_06h33_50.png', 'Sim', '0', '26', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('85', 'DS-12V', 'CALCULADORA', '12.00', '26.00', '2', '21-10-2023-06-37-00-2023-10-21_06h33_53.png', 'Sim', '0', '51', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('86', '837 / KA-1171', 'CALCULADORA SOLAR', '15.00', '30.00', '2', '21-10-2023-06-37-51-2023-10-21_06h33_53.png', 'Sim', '0', '51', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('87', 'SC-B2', 'Camera IP / 1080P / WIFI / Sistema YOOSEE ( IT.BLU', '55.00', '150.00', '2', '21-10-2023-06-38-59-2023-10-21_06h33_57.png', 'Sim', '0', '52', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('88', 'KP-CA127', 'CAMERA IP 3 ANTENAS ipega', '78.00', '180.00', '2', '21-10-2023-06-39-33-2023-10-21_06h34_00.png', 'Sim', '0', '52', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('89', 'SC-B13', 'CAMERA MINMEI SPEED DOME2,5', '165.00', '350.00', '2', '21-10-2023-06-40-07-2023-10-21_06h34_04.png', 'Sim', '0', '52', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('90', 'SD-171A', 'CAMPAINHA', '17.00', '40.00', '2', '21-10-2023-06-42-03-2023-10-21_06h34_08.png', 'Sim', '0', '53', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('91', '', 'Capa Para Celular A Prova D\' Água', '4.00', '15.00', '3', '21-10-2023-06-42-32-2023-10-21_06h34_12.png', 'Sim', '0', '41', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('92', 'FKT-1105', 'CARREGADOR FAM 2.1A +CABO 1M IPHONE COM ANATEL', '16.50', '50.00', '1', '21-10-2023-06-44-47-2023-10-21_06h34_16.png', 'Sim', '1', '54', '0', '', '', '', 'Sim', '3', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('93', 'FKT-110C', 'CARREGADOR FAM 2.1A +CABO 1M TYPE-C COM ANATEL', '16.50', '50.00', '1', '21-10-2023-06-45-18-2023-10-21_06h34_16.png', 'Sim', '0', '54', '0', '', '', '', 'Sim', '2', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('94', 'FKT-1108', 'CARREGADOR FAM 2.1A +CABO 1M V8 COM ANATEL', '16.50', '50.00', '1', '21-10-2023-06-46-00-2023-10-21_06h34_16.png', 'Sim', '0', '54', '0', '', '', '', 'Sim', '6', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('95', 'Y45-2', 'CARREGADOR HMASTON 2USB 3.1A CABO IPHONE', '10.50', '40.00', '7', '21-10-2023-06-47-22-2023-10-21_06h46_32.png', 'Sim', '1', '54', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('96', 'Y45-3', 'CARREGADOR HMASTON 2USB 3.1A CABO TYPE-C ', '10.50', '40.00', '5', '21-10-2023-06-48-23-2023-10-21_06h46_32.png', 'Sim', '1', '54', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('97', 'Y45-1', 'CARREGADOR HMASTON 2USB 3.1A CABO V8', '10.50', '40.00', '3', '21-10-2023-06-49-24-2023-10-21_06h46_32.png', 'Sim', '1', '54', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('98', '', 'CARREGADOR HMASTON DE CARRO 3.1A IPHONE', '15.00', '25.00', '2', '21-10-2023-06-50-26-2023-10-21_06h49_54.png', 'Sim', '0', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('99', '', 'CARREGADOR HMASTON DE CARRO 3.1A TYPE-C', '15.00', '25.00', '2', '21-10-2023-06-50-48-2023-10-21_06h49_54.png', 'Sim', '0', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('100', '', 'CARREGADOR HMASTON DE CARRO 3.1A V8', '15.00', '25.00', '2', '21-10-2023-06-51-07-2023-10-21_06h49_54.png', 'Sim', '0', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('101', 'PN951', 'CARREGADOR PORTATIL 10000mAh ( HMASTON )', '39.00', '120.00', '0', '21-10-2023-06-52-04-2023-10-21_06h49_57.png', 'Sim', '1', '55', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('102', 'PN952', 'CARREGADOR PORTATIL 5000mAh ( HMASTON )', '39.00', '80.00', '2', '21-10-2023-06-52-42-2023-10-21_06h49_57.png', 'Não', '1', '55', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('103', 'LE-U300', 'CARREGADOR UNIVERSAL', '7.00', '20.00', '3', '21-10-2023-06-56-03-2023-10-21_06h55_44.png', 'Sim', '1', '36', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('104', 'LE-527', 'Carregador Veicular 3.4A / 2USB / LELONG', '8.00', '40.00', '0', '21-10-2023-06-56-54-carregadorveicularrr.png', 'Sim', '0', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('105', 'LE-528', 'Carregador Veicular Com Cabo IPHONE ( IT.BLUE )', '12.00', '40.00', '1', '21-10-2023-06-57-43-2023-10-21_06h54_44.png', 'Sim', '1', '37', '0', '', '', '', 'Sim', '2', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('106', 'LE-525', 'Carregador Veicular Com Cabo V8 ( IT.BLUE )', '12.00', '40.00', '2', '21-10-2023-06-58-29-2023-10-21_06h54_44.png', 'Sim', '1', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('107', 'AL-MO-16', 'CARTAO DE MEMORIA 16GB', '18.00', '40.00', '3', '21-10-2023-06-59-06-16-removebg-preview.png', 'Sim', '1', '34', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('108', 'AL-MO-32', 'CARTAO DE MEMORIA 32GB', '22.00', '50.00', '0', '21-10-2023-06-59-49-031f984e-6b9a-4702-a87f-1e71a96a50b6.png', 'Sim', '1', '34', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('109', 'HM-M64', 'CARTAO DE MEMORIA 64GB', '38.00', '80.00', '1', '21-10-2023-07-00-35-159686-removebg-preview.png', 'Sim', '1', '34', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('110', 'AL-MO-8', 'CARTAO DE MEMORIA 8GB', '15.00', '30.00', '3', '21-10-2023-07-02-10-2023-10-21_07h01_54.png', 'Sim', '1', '34', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('111', 'BM755', 'CASE HD 2.5 USB 2.0', '16.00', '30.00', '2', '21-10-2023-07-04-58-2023-10-21_07h03_57.png', 'Sim', '0', '56', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('112', 'LY19', 'Fone Bluetooth HMASTON', '29.00', '70.00', '2', '21-10-2023-07-07-42-2023-10-21_07h05_33.png', 'Sim', '0', '32', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('113', 'FO15', 'Fone de ouvido PMCELL', '8.50', '20.00', '8', '21-10-2023-07-08-14-2023-10-21_07h05_36.png', 'Sim', '1', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('114', 'LY-101PRO', 'Fone De Ouvido Bluetooth 5.3 Bateria Até 6 horas (', '28.00', '80.00', '1', '21-10-2023-07-08-45-2023-10-21_07h05_40.png', 'Sim', '0', '32', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('115', 'EJ-39', 'FONE DE OUVIDO COM MICROFONE HMASTON MOD IPHON', '5.00', '20.00', '13', '21-10-2023-07-09-21-2023-10-21_07h05_43.png', 'Sim', '2', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('116', 'EJ-S8', 'FONE DE OUVIDO COM FIO COM MICROFONE HMASTON', '5.00', '20.00', '12', '21-10-2023-07-09-55-2023-10-21_07h05_47.png', 'Sim', '2', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('117', 'LE-2406', 'Fone De Ouvido Gamer Bluetooth 5.0 Com LED / Conec', '49.00', '120.00', '2', '21-10-2023-07-10-35-2023-10-21_07h05_51.png', 'Sim', '0', '32', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('119', 'KP-455A', 'Fone De Ouvido Gamer Com LED Para PC, PS4, X-ONE ,', '82.00', '160.00', '1', '21-10-2023-07-12-31-2023-10-21_07h05_54.png', 'Sim', '0', '33', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('120', 'MAX-0201', 'FONE DE OUVIDO. LELONG', '7.00', '22.00', '8', '21-10-2023-07-15-50-2023-10-21_07h05_59.png', 'Sim', '1', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('121', 'A-302', 'FONE GAME', '29.00', '70.00', '1', '21-10-2023-07-16-19-2023-10-21_07h06_03.png', 'Sim', '0', '33', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('122', 'FO11', 'Fone PMCELL', '5.00', '18.00', '19', '21-10-2023-07-16-59-2023-10-21_07h06_06.png', 'Sim', '5', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('123', 'AL-X7', 'Fone Pra Iphone .Bluetooth . EAR X', '10.00', '30.00', '1', '21-10-2023-07-17-31-2023-10-21_07h06_09.png', 'Sim', '0', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('124', 'CB16', 'FONTE PARA IPHONE 12 HMASTON 20W', '16.00', '30.00', '3', '21-10-2023-07-18-38-2023-10-21_07h06_14.png', 'Sim', '1', '54', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('125', 'KP-517', 'FONTE ATX 200W', '58.00', '100.00', '2', '21-10-2023-07-21-28-2023-10-21_07h06_18.png', 'Sim', '0', '26', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('126', 'Y05', 'Fonte Carregador 2 USB , 3.1A / Hmaston', '8.50', '25.00', '4', '21-10-2023-07-22-23-2023-10-21_07h06_21.png', 'Sim', '1', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('127', 'Y08-4', 'Fonte Carregador Turbo 30W / SAÍDA TYPE-C PD30W (H', '16.00', '30.00', '2', '21-10-2023-07-22-58-2023-10-21_07h06_25.png', 'Sim', '0', '54', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('128', 'KP-526', 'FONTE PARA PC 350W', '78.00', '120.00', '1', '21-10-2023-07-24-32-2023-10-21_07h23_52.png', 'Sim', '0', '26', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('129', '', 'Mini 2 JBL Caixa De Som Portátil Bluetooth / Com A', '32.00', '65.00', '1', '21-10-2023-07-25-49-2023-10-21_07h23_56.png', 'Sim', '0', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('130', 'S15-1 V8', 'KIT DE CARREGADOR DE CARRO 2USB CABO V8 3.4A', '13.00', '40.00', '2', '21-10-2023-07-27-24-2023-10-21_07h26_31.png', 'Sim', '0', '37', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('131', 'LEY-214', 'KIT TECLADO COM MOUSE / COM FIO / LEHMOX', '26.00', '60.00', '2', '21-10-2023-07-32-16-Untitled.png', 'Sim', '1', '43', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('132', 'DL-120', 'MAQUINA DE CORTA CABELO', '23.00', '80.00', '1', '21-10-2023-07-33-59-2023-10-21_07h26_38.png', 'Sim', '0', '57', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('133', 'KA-8502', 'Mini Caixa De Som Com Bluetooth', '20.00', '40.00', '2', '21-10-2023-07-34-41-2023-10-21_07h26_41.png', 'Sim', '1', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('134', 'KA-887', 'Mini Caixa De Som Portátil Bluetooth', '15.00', '30.00', '5', '21-10-2023-07-35-16-2023-10-21_07h26_44.png', 'Sim', '0', '22', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('135', 'BM8400', 'Mini Lanterna Recarregavel / Com ZOOM / B-MAX', '12.00', '30.00', '2', '21-10-2023-07-36-05-2023-10-21_07h26_47.png', 'Sim', '0', '58', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('136', 'MS01', 'Mouse COM FIO', '6.00', '15.00', '6', '21-10-2023-07-36-42-2023-10-21_07h26_51.png', 'Sim', '1', '42', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('137', 'AG-280', 'MOUSE COM FIO LTOMEX', '12.00', '25.00', '3', '21-10-2023-07-37-13-2023-10-21_07h26_54.png', 'Sim', '0', '42', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('138', 'KP-MU003', 'MOUSE LED COM FIO', '8.00', '25.00', '2', '21-10-2023-07-37-52-2023-10-21_07h26_58.png', 'Sim', '0', '42', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('139', 'M-IN2', 'MOUSE PAD PROMOCAO', '2.50', '10.00', '2', '21-10-2023-07-39-20-2023-10-21_07h27_01.png', 'Sim', '0', '59', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('140', 'GZM386', 'MOUSE SEM FIO KNUP', '16.00', '35.00', '2', '21-10-2023-07-40-45-2023-10-21_07h27_04.png', 'Sim', '0', '42', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('141', 'SHA-08', 'Mouse Sem Fio / Hmaston', '15.00', '35.00', '2', '21-10-2023-07-42-41-2023-10-21_07h42_26.png', 'Sim', '0', '42', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('142', 'AL-8U-32', 'PENDRIVE USB / 32GB', '21.00', '45.00', '2', '21-10-2023-07-43-39-2023-10-21_07h42_54.png', 'Sim', '1', '35', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('143', 'AL-8U-4', 'PENDRIVE USB / 4GB', '11.00', '22.00', '2', '21-10-2023-07-44-15-2023-10-21_07h42_54.png', 'Sim', '1', '35', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('144', 'AL-8U-8', 'PENDRIVE USB / 8GB', '14.00', '32.00', '3', '21-10-2023-07-44-53-2023-10-21_07h42_54.png', 'Sim', '1', '35', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('145', 'KP-BT2032', 'PILHA BOTAO DE LITIO 2032', '5.00', '10.00', '15', '21-10-2023-07-46-51-2023-10-21_07h45_15.png', 'Sim', '3', '60', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('146', '', 'Ring light 12 pol com tripe 2.1M BRANCO', '58.00', '120.00', '0', '21-10-2023-07-48-17-2023-10-21_07h47_34.png', 'Sim', '0', '61', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('147', 'CJ20', 'Suporte Veicular Universal / Hmaston', '6.00', '12.00', '1', '21-10-2023-07-50-33-2023-10-21_07h50_02.png', 'Sim', '0', '62', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('148', 'KP-SP029', 'SUPORTE DE CELULAR knup', '7.00', '28.00', '1', '21-10-2023-07-51-57-2023-10-21_07h50_06.png', 'Sim', '0', '62', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('149', 'BMG-16', 'Suporte De Celular / Para Cama , Mesa / Material D', '15.00', '30.00', '2', '21-10-2023-07-52-51-2023-10-21_07h50_10.png', 'Sim', '0', '62', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('150', 'BM-T01', 'Teclado Pra Computador / USB Com Fio / BMAX', '22.00', '44.00', '1', '21-10-2023-07-53-20-Untitled.png', 'Sim', '1', '43', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('151', 'CJ-350', 'SUPORTE PARA CAROO H\'MASTON', '5.00', '12.00', '2', '21-10-2023-07-54-24-2023-10-21_07h50_02.png', 'Sim', '0', '62', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('152', 'LE-055', 'Suporte para Moto Lelong', '12.00', '25.00', '1', '21-10-2023-07-56-12-2023-10-21_07h56_00.png', 'Sim', '0', '62', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('153', 'KA-5088', 'Carregador por Indução', '30.00', '70.00', '1', '21-10-2023-07-57-26-2023-10-21_07h57_09.png', 'Sim', '0', '54', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('154', 'LE-023', 'Supoert para Celular IT-BLUE', '12.00', '28.00', '1', '21-10-2023-08-16-00-suporte_carro_automotivo_veicula.png', 'Sim', '0', '62', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('155', 'LT-SK003', 'ADAPTADOR PLACA DE SOM', '8.00', '18.00', '0', '21-10-2023-08-18-10-Adaptador-Audio-Placa-De-Som-USB.png', 'Sim', '0', '47', '0', '', '', '', 'Sim', '46', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('156', '', 'Car Receiver ', '8.00', '25.00', '1', '21-10-2023-08-19-33-4756481326_1.webp', 'Sim', '0', '46', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('157', '1234', 'Adaptador Type-c Para HDMI', '15.00', '25.00', '3', '21-10-2023-08-21-10-file.png', 'Sim', '0', '47', '0', '', '', '', 'Sim', '19', '1', '0.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('158', '123', 'Adaptador USB LAN', '8.00', '25.00', '36', '21-10-2023-08-22-09-mayber.png', 'Sim', '0', '47', '0', '', '', '', 'Sim', '48', '1', '0.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('159', '', 'Kit Bateria e o cabo para carregar - Xbox One', '15.00', '40.00', '2', '21-10-2023-08-23-58-51FHDmtA28L._AC_UF1000,1000_QL80.png', 'Sim', '0', '39', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('160', 'KA-393-YT', 'Carregador typo-C Original', '8.00', '30.00', '2', '21-10-2023-08-27-01-18-04-2023-19-57-09-CARREGADOR-1.jpg', 'Sim', '0', '54', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('161', '', 'Carregador Iphone Typo C e Iphone', '16.00', '50.00', '1', '21-10-2023-08-28-26-D_NQ_NP_997343-MLB51716241663_09.png', 'Sim', '0', '54', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('162', '', 'fone de ouvido stereo headphone', '4.00', '12.00', '1', '21-10-2023-08-30-01-49062c31eee20cc14f5d3c0164be5e0e.png', 'Sim', '0', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('163', '', 'Fone Sasmung Original', '8.00', '30.00', '4', '21-10-2023-08-31-30-76134139-320-320.png', 'Sim', '0', '31', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('164', '12345', 'Adaptador V8 Para Typo C', '4.00', '5.00', '42', '21-10-2023-08-33-16-a0451593e537905c49fda4e6a0a322a2.png', 'Sim', '0', '47', '0', '', '', 'Perfeito para quem usa headset com microfone separado. O adaptador P2 para P3 transforma a conexão de áudio estéreo (fone + microfone) em uma única entrada, compatível com notebooks, consoles e celulares com entrada única. Som limpo e sem ruídos!', 'Sim', '6', '1', '0.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('165', '555', 'Adaptador P2 Para Iphone', '4.00', '10.00', '26', '21-10-2023-08-34-23-7174a035ca1d655efda6e5f8dd1d1ea0.png', 'Sim', '0', '47', '0', '', '', 'Compatível com mais de 150 países, o adaptador universal de tomada é o item indispensável para suas viagens. Permite conectar dispositivos com diferentes padrões de plugues em tomadas internacionais com segurança e praticidade. Compacto e leve, cabe em qu', 'Sim', '115', '1', '0.00', '0.00', '0.00', 'Sim');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('166', '', 'Cabo OTG com Cabo', '3.00', '10.00', '50', '21-10-2023-08-35-36-qwsdqwsws.png', 'Não', '0', '47', '0', '', '', 'Conecte seu notebook ou PC a uma TV, monitor ou projetor com facilidade. Esse adaptador USB para HDMI transmite vídeo e áudio em alta definição (até 1080p), ideal para apresentações, vídeos ou ampliar sua área de trabalho. Compacto e fácil de usar, basta ', 'Sim', '', '1', '0.00', '0.00', '0.00', 'Sim');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('167', '', 'Cabo P2 P10', '5.00', '12.00', '5', '21-10-2023-08-39-08-180_cabo_p2_x_p10_3_metros_3m_es.png', 'Sim', '0', '49', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('168', '', 'Cabo USB MAcho e Fêmea', '5.00', '15.00', '1', '21-10-2023-08-40-26-cabo_extensor_usb_de_1_5_metros.png', 'Sim', '0', '49', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('169', '', 'Cabo Y Vga Duplica Sinal 1 Entrada M x 2 Saídas F', '8.00', '15.00', '1', '21-10-2023-08-41-50-3971293328_1_large.png', 'Sim', '0', '50', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('170', '', 'Cabo VGA', '8.00', '20.00', '1', '21-10-2023-08-43-18-cabo-rgb-para-monitor-180-metros.png', 'Sim', '0', '50', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('171', '', 'iphone 12 Película 3D Privcidade', '5.00', '30.00', '3', '21-10-2023-09-37-44-c154390b618a808d7192264fe1d7acc8.webp', 'Sim', '0', '30', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('172', '', 'Iphone 12 Película 3D', '5.00', '25.00', '2', '21-10-2023-09-47-51-pelicula-de-vidro-3d---escolher-modelo-com-vendedor-no-whatsapp-pkm1cpfz87.webp', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('173', '', 'A30 Película 3D', '15.00', '25.00', '14', '21-10-2023-10-02-32-18-04-2023-19-51-13-PELICULA.jpg', 'Sim', '1', '29', '15', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('174', '', 'IPhone 11/XR 3D', '0.00', '25.00', '10', '23-10-2023-07-26-13-752fbb9b-95cb-453a-adbc-efc07f75844a.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('175', '', 'IPhone 12 / 12 Pro 3D', '0.00', '25.00', '10', '23-10-2023-07-26-52-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('176', '', 'IPhone 6/6S/7/8 Película 3D', '0.00', '25.00', '50', '23-10-2023-07-44-24-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('177', '', 'IPhone 6 Plus/6S Plus/7 Plus/8 Plus Película 3D', '0.00', '25.00', '50', '23-10-2023-07-46-18-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('178', '', 'IPhone X/XS/11 Pro Película 3D', '0.00', '25.00', '50', '23-10-2023-07-46-59-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('179', '', 'Cabo de Rede', '2.00', '10.00', '4', '23-10-2023-07-48-33-10666948397345f368f9b888700.73695966.1597411227_l.png', 'Sim', '0', '63', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('180', '', 'Iphone XS Max/11 Pro max Película 3D', '0.00', '25.00', '50', '23-10-2023-07-49-11-752fbb9b-95cb-453a-adbc-efc07f75844a.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('181', '', 'A11/M11 Pléicula 3D', '0.00', '25.00', '50', '23-10-2023-07-49-40-752fbb9b-95cb-453a-adbc-efc07f75844a.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('182', '', 'A01 / M01 Pelícila 3D', '30.00', '25.00', '52', '23-10-2023-07-50-24-752fbb9b-95cb-453a-adbc-efc07f75844a.png', 'Sim', '0', '29', '3', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('183', '', 'A02S/A03S Pelícila 3D', '0.00', '25.00', '50', '23-10-2023-07-50-48-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('184', '', 'A12/M12 Pelícila 3D', '0.00', '25.00', '50', '23-10-2023-07-51-20-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('185', '', 'A10/10S/M10 Pleícula 3D', '24.00', '25.00', '55', '23-10-2023-07-52-46-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('186', '', 'A20 / A50 / A50S / A30S Película 3D', '0.00', '25.00', '1', '23-10-2023-07-53-10-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('187', '', 'A21 / A21S Película 3D', '0.00', '25.00', '-1', '23-10-2023-07-53-36-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('188', '', 'M51 / M62 Película 3D', '0.00', '25.00', '50', '23-10-2023-07-54-11-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('192', '', 'Moto G8 Play/One Película 3D', '0.00', '25.00', '50', '23-10-2023-07-56-30-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('193', '', 'MI 9T/ 9 Pro Película 3D', '0.00', '25.00', '50', '23-10-2023-07-57-48-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('194', '', 'Xiaomi Note 10/10 Pro Máx 10S Película 3D', '0.00', '25.00', '50', '23-10-2023-07-58-40-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('199', '', 'MOTO E20/E30/E40/E22/E22S/E32/Z2 PLAY/ Z3 PLAY Pel', '0.00', '25.00', '50', '23-10-2023-08-01-12-3d.png', 'Sim', '0', '29', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('200', '', 'Capinha j7 Prime', '2.50', '15.00', '3', '23-10-2023-18-40-18-capa_tpu_borda_anti_impacto_ipho.png', 'Sim', '0', '41', '0', '17', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('201', '', 'Transferenica DeDados de aparelho', '0.00', '20.00', '0', '23-10-2023-19-01-37-serviços2.png', 'Sim', '0', '64', '0', '', '', '', 'Não', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('202', '', 'Criar Conta Facebook', '0.00', '10.00', '0', '24-10-2023-09-25-05-facebook-logo-blue-circle-large-transparent-png.png', 'Sim', '0', '64', '0', '', '', '', 'Não', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('203', '', 'Criar Conta Whatsapp', '0.00', '10.00', '0', '24-10-2023-09-25-36-Sem-título.jpg', 'Sim', '0', '64', '0', '', '', '', 'Não', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('204', '', 'Criar Conta Instagram', '0.00', '10.00', '0', '24-10-2023-09-26-17-logo-instagram-png-fundo-transparente.webp', 'Sim', '0', '64', '0', '', '', '', 'Não', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('205', '', 'Capinha Redmi 9A / 9', '5.00', '15.00', '1', 'sem-foto.jpg', 'Sim', '0', '41', '0', '17', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('206', '', 'Criar Conta Gmail', '0.00', '10.00', '0', '18-01-2024-11-05-18-gogle.png', 'Sim', '0', '64', '0', '', '', '', 'Não', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('207', '', 'Capinha Redmi Note 8 Amarela', '5.00', '30.00', '1', 'sem-foto.jpg', 'Sim', '0', '41', '0', '4', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('208', '', 'Capinha Redmi Note 8 Trasparente', '2.50', '15.00', '5', 'sem-foto.jpg', 'Sim', '0', '41', '0', '26', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('209', '', 'DVR 4 Canais INtelbras', '0.00', '290.00', '3', 'sem-foto.jpg', 'Sim', '0', '65', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('210', '', 'DVR 8 Canais Intelbras', '0.00', '450.00', '3', 'sem-foto.jpg', 'Sim', '0', '65', '0', '28', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('211', '', 'DVR 16 Canais Intelbras ', '0.00', '590.00', '9', 'sem-foto.jpg', 'Sim', '0', '65', '0', '28', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('212', '', 'Câmera Bullet Intelbras 720P', '0.00', '120.00', '10', 'sem-foto.jpg', 'Sim', '0', '52', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('213', '', 'Câmera  Dome 720P Intelbras', '0.00', '90.00', '7', 'sem-foto.jpg', 'Sim', '0', '52', '0', '', '', '', 'Sim', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('214', '', 'Conector P4 Alimentação', '0.00', '3.00', '40', 'sem-foto.jpg', 'Sim', '0', '66', '0', '', '', '', 'Sim', '1', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('226', '', 'Remoção de vírus (Celular)', '0.00', '20.00', '0', '22-02-2024-10-27-33-vírus.png', 'Sim', '0', '64', '0', '', '', '', 'Não', '', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('227', '0000', 'teste \"', '0.00', '50.00', '0', 'sem-foto.jpg', 'Sim', '0', '126', '0', '', '', '', 'Sim', '0', '1', '', '', '', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('228', '0156454545', 'Teste', '0.00', '0.00', '3', '17-03-2025-17-02-49-eupng.png', 'Sim', '0', '126', '0', '38', '', '', 'Sim', '', '1', '0.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('230', '0515451545', 'Produto Teste', '50.00', '5000.00', '198', 'sem-foto.jpg', 'Sim', '10', '130', '0', '40', '', '', 'Sim', '2', '2', '0.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('231', '123', 'Teste', '25.00', '3125.00', '99', 'sem-foto.jpg', 'Sim', '0', '129', '0', '', '', '', 'Sim', '0', '2', '25.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('232', '12345', 'fdasfasfadf', '20.00', '2200.00', '0', 'sem-foto.jpg', 'Sim', '0', '129', '0', '', '', '', 'Sim', '', '2', '10.00', '0.00', '0.00', '');

-- TABLE: produtos_orc
CREATE TABLE `produtos_orc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `os` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('1', '43', '1', '1', '2', '40.00', '80.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('2', '44', '1', '1', '1', '20.00', '20.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('4', '43', '2', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('5', '45', '2', '1', '1', '20.00', '20.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('6', '43', '3', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('7', '44', '3', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('8', '43', '4', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('9', '228', '', '1', '2', '25.00', '50.00', '2');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('10', '226', '', '1', '1', '20.00', '20.00', '3');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('11', '226', '', '1', '1', '20.00', '20.00', '4');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('13', '226', '', '1', '1', '20.00', '20.00', '6');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('14', '214', '', '1', '1', '3.00', '3.00', '7');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('15', '230', '5', '1', '1', '5000.00', '5000.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('16', '230', '', '1', '1', '5000.00', '5000.00', '15');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('17', '45', '6', '1', '1', '20.00', '20.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('18', '45', '7', '1', '1', '20.00', '20.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('19', '45', '8', '1', '1', '20.00', '20.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('21', '165', '', '1', '2', '10.00', '20.00', '18');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('22', '165', '', '1', '2', '10.00', '20.00', '19');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('23', '165', '', '1', '3', '10.00', '30.00', '20');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('26', '165', '9', '1', '4', '10.00', '40.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('27', '43', '10', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('28', '43', '11', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('29', '228', '', '1', '1', '0.00', '0.00', '21');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('30', '43', '12', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('31', '44', '13', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('32', '43', '14', '1', '1', '30.00', '30.00', '');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('33', '226', '', '1', '1', '20.00', '20.00', '23');
INSERT INTO `produtos_orc` (`id`, `produto`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`) VALUES ('34', '226', '', '1', '1', '20.00', '20.00', '24');

-- TABLE: receber
CREATE TABLE `receber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `valor` decimal(8,2) DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date DEFAULT NULL,
  `forma_pgto` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) DEFAULT NULL,
  `usuario_pgto` int(11) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `tipo_chave` varchar(50) DEFAULT NULL,
  `acessar_painel` varchar(5) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ref_pix` varchar(100) DEFAULT NULL,
  `alerta` varchar(5) DEFAULT NULL,
  `hora_alerta` time DEFAULT NULL,
  `data_alerta` date DEFAULT NULL,
  `parcela` int(11) DEFAULT NULL,
  `recorrencia` varchar(5) DEFAULT NULL,
  `parcela_sem_juros` decimal(10,2) DEFAULT NULL,
  `troco` decimal(9,2) DEFAULT NULL,
  `garantia_venda` varchar(20) DEFAULT NULL,
  `tipo_desconto` varchar(10) DEFAULT NULL,
  `total_venda` decimal(10,2) DEFAULT NULL,
  `valor_restante` decimal(10,2) DEFAULT NULL,
  `forma_pgto_restante` int(11) DEFAULT NULL,
  `data_restante` date DEFAULT NULL,
  `cancelada` varchar(25) DEFAULT NULL,
  `hora_alerta2` time DEFAULT NULL,
  `data_alerta2` date DEFAULT NULL,
  `dispositivo` varchar(35) DEFAULT NULL,
  `valor_custo` decimal(10,2) DEFAULT NULL,
  `data_assinatura` date DEFAULT NULL,
  `api_pagamento_conta` varchar(50) DEFAULT NULL,
  `pgtos_aceitaveis` varchar(100) DEFAULT NULL,
  `taxa_cartao_api_receber` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('1', 'Venda - Parcela 1/5', '14', '5.00', '2025-08-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '5.00', '1', '', 'Não', '', '19:33:14', '', '8', '', '', '', '', '1', '', '', '10:55:00', '', '1', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '3.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('2', 'Venda - Parcela 2/5', '14', '5.00', '2025-09-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '5.00', '1', '', 'Não', '', '19:33:14', '', '8', '', '', '', '', '1', '', '', '10:55:00', '', '2', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '3.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('3', 'Venda - Parcela 3/5', '14', '5.00', '2025-10-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '5.00', '1', '', 'Não', '', '19:33:14', '', '8', '', '', '', '', '1', '', '', '10:55:00', '', '3', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '3.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('4', 'Venda - Parcela 4/5', '14', '5.00', '2025-11-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '5.00', '1', '', 'Não', '', '19:33:14', '', '8', '', '', '', '', '1', '', '', '10:55:00', '', '4', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '3.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('5', 'Venda - Parcela 5/5', '14', '5.00', '2025-12-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '5.00', '1', '', 'Não', '', '19:33:14', '', '8', '', '', '', '', '1', '', '', '10:55:00', '', '5', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '3.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('6', 'Nova Venda', '14', '25.00', '2025-08-08', '2025-08-08', '2025-08-08', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '25.00', '1', '1', 'Sim', '', '19:49:13', '', '8', '', '', '', '', '1', '', '', '09:42:00', '', '', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '15.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('7', 'Nova Venda', '1', '10.00', '2025-08-08', '2025-08-08', '2025-08-08', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '25.00', '1', '1', 'Sim', '', '19:49:25', '', '8', '', '', '', '', '1', '', '', '09:35:00', '', '', '', '', '0.00', '', 'reais', '25.00', '15.00', '35', '2025-08-08', '', '', '', '', '15.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('8', 'Nova Venda (Restante)', '1', '15.00', '2025-08-08', '2025-08-08', '2025-08-08', '35', '', '', 'sem-foto.png', 'Venda', '7', '', '', '0.00', '', '25.00', '1', '1', 'Sim', '', '19:49:25', '', '8', '', '', '', '', '1', '', '', '09:35:00', '', '', '', '', '0.00', '', 'reais', '25.00', '10.00', '35', '2025-08-08', '', '', '', '', '', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('9', 'Nova Venda', '14', '25.00', '2025-08-15', '0000-00-00', '2025-08-08', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '25.00', '1', '0', 'Não', '', '19:55:09', '', '8', '', '', '', '', '1', '', '', '10:31:00', '', '', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '15.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('10', 'Venda - Parcela 1/3', '14', '16.67', '2025-08-08', '', '2025-08-08', '44', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.67', '1', '', 'Não', '', '19:56:39', '', '8', '', '', '', '', '1', '', '', '08:21:00', '', '1', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '10.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('11', 'Venda - Parcela 2/3', '14', '16.67', '2025-09-08', '', '2025-08-08', '44', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.67', '1', '', 'Não', '', '19:56:39', '', '8', '', '', '', '', '1', '', '', '08:21:00', '', '2', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '10.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('12', 'Venda - Parcela 3/3', '14', '16.67', '2025-10-08', '', '2025-08-08', '44', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.67', '1', '', 'Não', '', '19:56:39', '', '8', '', '', '', '', '1', '', '', '08:21:00', '', '3', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '10.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('13', 'Venda - Parcela 1/3', '14', '16.66', '2025-08-08', '', '2025-08-08', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.66', '1', '', 'Não', '', '19:59:23', '', '8', '', '', '', '', '1', '', '', '08:42:00', '', '1', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '10.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('14', 'Venda - Parcela 2/3', '14', '16.66', '2025-09-08', '', '2025-08-08', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.66', '1', '', 'Não', '', '19:59:23', '', '8', '', '', '', '', '1', '', '', '08:42:00', '', '2', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '10.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('15', 'Venda - Parcela 3/3', '14', '16.68', '2025-10-08', '', '2025-08-08', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.68', '1', '', 'Não', '', '19:59:23', '', '8', '', '', '', '', '1', '', '', '08:42:00', '', '3', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '10.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('16', 'Venda - Parcela 1/2', '14', '12.50', '2025-08-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '12.50', '1', '', 'Não', '', '20:02:36', '', '8', '', '', '', '', '1', '', '', '08:15:00', '', '1', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '7.50', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('17', 'Venda - Parcela 2/2', '14', '12.50', '2025-09-08', '', '2025-08-08', '34', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '12.50', '1', '', 'Não', '', '20:02:36', '', '8', '', '', '', '', '1', '', '', '08:15:00', '', '2', '', '', '0.00', '', 'reais', '25.00', '', '', '', '', '', '', '', '7.50', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('19', 'Conta 100 - Parcela 1', '14', '50.00', '2025-08-19', '2025-08-19', '2025-08-19', '34', '0', '', 'sem-foto.png', 'Conta', '0', '0.00', '0.00', '0.00', '0.00', '50.00', '1', '1', 'Sim', '', '13:21:26', '', '8', '', '', '', '', '1', '', '', '08:01:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('20', 'Conta 100 - Parcela 2', '14', '50.00', '2025-09-19', '', '2025-08-19', '34', '0', '', 'sem-foto.png', 'Conta', '0', '', '', '', '', '50.00', '1', '', 'Não', '', '', '', '', '', '', '', '', '1', '', '', '08:01:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('21', 'Teste', '14', '5.00', '2025-08-19', '2025-08-19', '2025-08-19', '34', '1', '', 'sem-foto.png', 'Conta', '', '0.00', '0.00', '0.00', '0.00', '5.00', '1', '1', 'Sim', '', '13:21:54', '', '8', '', '', '0', '', '1', '', '', '08:57:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('22', 'Teste', '14', '5.00', '2025-08-20', '', '2025-08-19', '34', '1', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '', '1', '', 'Não', '', '13:21:54', '', '8', '', '', '', '', '1', '', '', '08:29:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('23', 'Cobranca teste (1)', '14', '300.00', '2025-08-20', '2025-08-19', '2025-08-19', '36', '1', '', 'sem-foto.png', 'Cobrança', '21', '', '', '', '', '300.00', '1', '1', 'Sim', '', '13:34:51', '', '', '', '', '', '', '1', '', '', '10:43:00', '', '1', 'Sim', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '50.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('24', 'Cobranca teste (1)', '14', '300.00', '2025-08-21', '', '2025-08-19', '', '1', '', '', 'Cobrança', '21', '', '', '', '', '', '1', '', 'Não', '', '', '', '', '', '', '', '', '1', '122926398952', '', '08:18:00', '', '2', 'Sim', '0.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '50.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('25', 'Conta 120 ', '14', '120.00', '2025-08-19', '', '2025-08-19', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '120.00', '1', '0', 'Não', '', '14:07:42', '', '8', '', '', '0', '', '1', '122399019997', '', '09:27:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('26', 'Conta tessst', '0', '65.00', '2025-08-19', '', '2025-08-19', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'Não', '', '15:45:09', '', '8', '', '', '0', '', '1', '122932061704', '', '10:48:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mercado Pago', 'Pix', '10.50');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('27', 'Novo Serviço', '14', '200.00', '2025-08-19', '2025-08-19', '2025-08-19', '0', '', '', 'sem-foto.png', 'Serviço', '24', '', '', '', '', '', '1', '1', 'Sim', '', '19:01:30', '', '', '', '', '', '', '1', '', '', '09:21:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.00', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('28', 'Venda - Parcela 1/3', '14', '16.66', '2025-08-19', '', '2025-08-19', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.66', '1', '', 'Não', '', '20:35:24', '', '8', '', '', '', '', '1', '', '', '09:19:00', '', '1', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '7.66', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('29', 'Venda - Parcela 2/3', '14', '16.66', '2025-09-19', '', '2025-08-19', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.66', '1', '', 'Não', '', '20:35:24', '', '8', '', '', '', '', '1', '', '', '09:19:00', '', '2', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '7.66', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('30', 'Venda - Parcela 3/3', '14', '16.68', '2025-10-19', '', '2025-08-19', '36', '', '', 'sem-foto.png', 'Venda', '', '', '', '0.00', '', '16.68', '1', '', 'Não', '', '20:35:24', '', '8', '', '', '', '', '1', '', '', '09:19:00', '', '3', '', '', '0.00', '', 'reais', '50.00', '', '', '', '', '', '', '', '7.68', '', '', '', '');
INSERT INTO `receber` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `empresa`, `ref_pix`, `alerta`, `hora_alerta`, `data_alerta`, `parcela`, `recorrencia`, `parcela_sem_juros`, `troco`, `garantia_venda`, `tipo_desconto`, `total_venda`, `valor_restante`, `forma_pgto_restante`, `data_restante`, `cancelada`, `hora_alerta2`, `data_alerta2`, `dispositivo`, `valor_custo`, `data_assinatura`, `api_pagamento_conta`, `pgtos_aceitaveis`, `taxa_cartao_api_receber`) VALUES ('31', 'Conta Teste', '0', '200.00', '2025-08-19', '', '2025-08-19', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '200.00', '1', '0', 'Não', '', '20:37:54', '', '8', '', '', '0', '', '1', 'pay_dvnga8247h3o0tr0', '', '10:32:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Asaas', '', '10.50');

-- TABLE: receber_sas
CREATE TABLE `receber_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `valor` decimal(8,2) DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date DEFAULT NULL,
  `forma_pgto` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) DEFAULT NULL,
  `usuario_pgto` int(11) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `tipo_chave` varchar(50) DEFAULT NULL,
  `acessar_painel` varchar(5) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `ref_pix` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('1', 'Conta teste', '1', '0.01', '2025-02-03', '2025-02-11', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '0.01', '1', '0', 'Sim', '', '18:56:15', '', '0', '', '', '0', '', '100945126019');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('2', 'Mensalidade', '1', '150.00', '2025-02-04', '2025-02-04', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '150.00', '1', '1', 'Sim', '', '19:18:28', '', '0', '', '', '0', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('3', 'Mensalidade', '1', '0.01', '2025-02-04', '2025-02-04', '2025-02-04', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '0.01', '1', '0', 'Sim', '', '20:12:31', '', '0', '', '', '0', '', '100945126019');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('4', 'Teste', '2', '300.00', '2025-02-04', '0000-00-00', '2025-02-04', '0', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '300.00', '1', '0', 'Não', '', '20:34:46', '', '0', '', '', '0', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('6', 'Conta teste pgto', '1', '436.99', '2025-02-14', '2025-02-14', '2025-02-14', '2', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '436.99', '1', '0', 'Sim', '', '13:15:23', '1393335', '0', '', '', '0', '', '102345603532');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('7', 'Teste conta sas', '1', '5.00', '2025-03-11', '2025-03-11', '2025-03-11', '2', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '5.00', '1', '0', 'Sim', '', '19:28:36', '1506554', '5', '', '', '0', '', 'pay_wdx0czye9gp2u4tj');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('8', 'Testes 2', '1', '5.00', '2025-03-11', '2025-03-11', '2025-03-11', '2', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '5.00', '1', '0', 'Sim', '', '19:49:50', '1506688', '5', '', '', '0', '', 'pay_wdx0czye9gp2u4tj');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('9', 'Tsst', '1', '5.00', '2025-03-11', '2025-03-11', '2025-03-11', '2', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '5.00', '1', '0', 'Sim', '', '19:59:43', '1506699', '5', '', '', '0', '', 'pay_wdx0czye9gp2u4tj');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('10', 'Tessst', '1', '436.99', '2025-03-11', '2025-03-11', '2025-03-11', '2', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '436.99', '1', '0', 'Sim', '', '20:15:25', '1506758', '5', '', '', '0', '', '102345603532');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('46', 'Mensalidade SAAS', '25', '140.00', '2025-04-24', '2025-04-24', '2025-04-24', '', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Sim', '', '18:20:01', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('47', 'Mensalidade SAAS', '26', '140.00', '2025-04-24', '2025-04-24', '2025-04-24', '', '1', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Sim', '', '18:39:06', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('48', 'Mensalidade SAAS', '26', '140.00', '2025-04-25', '2025-04-24', '2025-04-24', '2', '1', '', 'sem-foto.png', 'Mensalidade', '', '0.00', '0.00', '0.00', '0.00', '140.00', '1', '1', 'Sim', '', '18:40:26', '', '5', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('51', 'Mensalidade SAAS', '27', '140.00', '0000-00-00', '', '2025-04-28', '', '0', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Não', '', '10:46:51', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('52', 'aaa', '27', '25.00', '2025-04-28', '2025-04-28', '2025-04-28', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '25.00', '1', '1', 'Sim', '', '10:47:30', '', '5', '', '', '0', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('56', 'Mensalidade SAAS', '30', '180.00', '2025-04-29', '', '2025-04-29', '', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '180.00', '1', '', 'Sim', '', '22:03:47', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('58', 'Mensalidade SAAS', '31', '180.00', '2025-04-29', '', '2025-04-29', '', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '180.00', '1', '', 'Sim', '', '22:04:53', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('61', 'Mensalidade SAAS', '33', '160.00', '2025-04-29', '', '2025-04-29', '', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '160.00', '1', '', 'Sim', '', '22:07:14', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('63', 'Mensalidade SAAS', '34', '120.00', '2025-04-29', '2025-04-29', '2025-04-29', '65', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '120.00', '1', '', 'Sim', '', '22:09:50', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('65', 'Mensalidade SAAS', '4', '120.00', '2025-05-28', '', '2025-05-28', '', '1', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '120.00', '1', '', 'Não', '', '20:43:40', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('76', 'Testee', '1', '100.00', '2025-06-30', '', '2025-07-02', '1', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '100.00', '1', '0', 'Não', '', '23:27:23', '1977273', '5', '', '', '0', '', 'pay_fdr1ofq922tx7f75');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('77', 'Mensalidade SAAS', '42', '140.00', '2025-08-06', '2025-08-07', '2025-08-06', '1', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Sim', '', '11:26:03', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('79', 'Mensalidade SAAS', '43', '140.00', '2025-08-06', '2025-08-07', '2025-08-06', '1', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Sim', '', '11:31:40', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('81', 'Mensalidade SAAS', '44', '140.00', '2025-08-06', '2025-08-21', '2025-08-06', '1', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Sim', '', '11:34:11', '', '', '', '', '', '', '');
INSERT INTO `receber_sas` (`id`, `descricao`, `cliente`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `tipo_chave`, `acessar_painel`, `quant_recorrencia`, `id_recorrencia`, `ref_pix`) VALUES ('82', 'Mensalidade SAAS', '44', '140.00', '2025-09-06', '', '2025-08-06', '', '30', '', 'sem-foto.png', 'Mensalidade', '', '', '', '', '', '140.00', '1', '', 'Não', '', '11:34:12', '2075005', '', '', '', '', '', '');

-- TABLE: recursos
CREATE TABLE `recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `chave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('1', 'Marketing Whatsapp', 'marketing_whats');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('3', 'Cobranças Recorrentes', 'cobrancas_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('4', 'Gestão de Contratos', 'gestao_contratos');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('5', 'Orçamentos', 'orcamentos_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('6', 'OS Ordens de Serviços', 'os_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('7', 'Site', 'site');

-- TABLE: recursos_site
CREATE TABLE `recursos_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_recurso` varchar(150) DEFAULT NULL,
  `icone_recurso` varchar(100) DEFAULT NULL,
  `descricao_recurso` varchar(255) DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `posicao_recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('3', 'Aumente suas Vendas', 'fas fa-chart-line', 'Controle completo do processo de vendas, desde o orçamento até a entrega, com relatórios detalhados para tomar as melhores decisões.', '0', '1');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('4', 'Controle Financeiro', 'fas fa-coins', 'Gerencie contas a pagar e receber, fluxo de caixa, conciliação bancária e muito mais, tudo em um só lugar.', '0', '2');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('5', 'Estoque Inteligente', 'fas fa-boxes', 'Controle de estoque em tempo real, com alertas de estoque mínimo, gestão de fornecedores e controle de validade.', '0', '3');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('6', 'Atendimento ao Cliente', 'fas fa-headset', 'Integração com WhatsApp, gestão de chamados e histórico completo de interações para um atendimento personalizado.', '0', '4');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('7', 'Gestão de Equipe', 'fas fa-users-cog', 'Controle de produtividade, metas, comissões e muito mais para maximizar o desempenho da sua equipe.', '0', '5');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('8', 'Contratos e Serviços', 'fas fa-file-contract', 'Gestão completa de contratos, ordens de serviço e agendamentos para otimizar seus processos.', '0', '6');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('9', 'Item 1', 'fas fa-chart-line', 'Texto item 1 aqui', '1', '1');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('10', 'Item 2', 'fas fa-cogs', 'Texto Item 2', '1', '2');

-- TABLE: saidas
CREATE TABLE `saidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `saidas` (`id`, `produto`, `quantidade`, `motivo`, `usuario`, `data`, `empresa`) VALUES ('1', '229', '2', 'Teste', '1', '2025-03-17', '1');

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

-- TABLE: servicos
CREATE TABLE `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `comissao` int(11) DEFAULT NULL,
  `dias` int(11) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `mostrar_site` varchar(5) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('1', 'SOFTWARE C/ BAKUP', '130.00', '0', '3', 'Sim', '1', '15-07-2025-16-08-00-bakup.jpg', 'Sim', 'afa dfaf da fdsaf dsaf a fadsf fafda fdsa ffa afa dfaf da fdsaf dsaf a fadsf fafda fdsa ffa');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('2', 'SOFTWARE S/ BACKUP', '100.00', '0', '2', 'Sim', '1', '15-07-2025-16-08-35-soft.jpg', 'Sim', '');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('3', 'TROCA DE TELA', '0.00', '0', '3', 'Sim', '1', '15-07-2025-16-09-58-troca_tela.webp', 'Sim', '');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('4', 'TROCA DE BATERIA', '0.00', '0', '0', 'Sim', '1', '15-07-2025-16-09-32-troca-bateria.webp', 'Sim', '');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('5', 'FORMATAÇÃO', '300.00', '0', '0', 'Sim', '1', '15-07-2025-16-06-34-formatacao.jpg', 'Sim', 'afa dfaf da fdsaf dsaf a fadsf fafda fdsa ffa afa dfaf da fdsaf dsaf a fadsf fafda fdsa ffa');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('7', 'AUTO FALANTE', '250.00', '0', '0', 'Sim', '1', '15-07-2025-16-05-40-autofalante.webp', 'Sim', 'aqui vai uma descricao de teste para essa aula, vou por também outras descrições semelhantes de teste para essa aula, vou por também  de teste para essa aula, vou por também');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('8', 'TROCA CONECTOR DE CARGA', '180.00', '0', '0', 'Sim', '1', '15-07-2025-16-09-04-troca_conect.jpg', 'Sim', '');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('9', 'CHOQUE NA BATERIA', '450.00', '0', '1', 'Sim', '1', '15-07-2025-16-06-10-choque.jpg', 'Não', '');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('16', 'HARD RESET', '30.00', '0', '5', 'Sim', '1', '15-07-2025-16-07-21-reset.jpg', 'Sim', '');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`, `foto`, `mostrar_site`, `descricao`) VALUES ('20', 'Serviço', '200.00', '50', '10', 'Sim', '2', '', '', '');

-- TABLE: servicos_orc
CREATE TABLE `servicos_orc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` int(11) NOT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `os` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `equipamento` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('1', '1', '1', '1', '1', '130.00', '130.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('2', '3', '1', '1', '1', '55.00', '55.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('3', '2', '3', '1', '1', '100.00', '100.00', '5', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('4', '4', '3', '1', '1', '0.00', '0.00', '5', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('5', '1', '4', '1', '1', '130.00', '130.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('6', '16', '', '1', '1', '30.00', '30.00', '2', '1', '2025-03-18', '', '', '80.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('7', '10', '', '1', '1', '35.00', '35.00', '2', '1', '2025-03-18', '', '', '80.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('8', '9', '', '1', '1', '0.00', '0.00', '3', '1', '2025-03-18', '', '', '20.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('9', '9', '', '1', '1', '0.00', '0.00', '4', '1', '2025-03-18', '', '', '120.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('10', '10', '', '1', '1', '0.00', '0.00', '5', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('11', '9', '', '1', '1', '30.00', '30.00', '6', '1', '2025-03-18', '', '', '50.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('12', '8', '', '1', '1', '0.00', '0.00', '7', '1', '2025-03-18', '', '', '3.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('13', '10', '', '1', '1', '50.00', '50.00', '8', '1', '2025-03-18', '', '', '110.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('14', '8', '', '1', '1', '60.00', '60.00', '8', '1', '2025-03-18', '', '', '110.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('15', '3', '', '1', '1', '350.00', '350.00', '9', '1', '2025-03-18', '', '', '350.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('16', '2', '', '1', '1', '100.00', '100.00', '10', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('17', '9', '', '29', '1', '230.00', '230.00', '11', '1', '2025-03-18', '', '', '230.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('18', '2', '', '29', '1', '100.00', '100.00', '12', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('19', '20', '5', '1', '1', '200.00', '200.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('20', '20', '', '1', '3', '200.00', '600.00', '15', '2', '2025-03-18', '', '', '5600.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('21', '3', '6', '1', '3', '300.00', '900.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('22', '2', '7', '1', '1', '100.00', '100.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('23', '9', '8', '1', '1', '40.00', '40.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('24', '9', '', '1', '1', '0.00', '0.00', '18', '14', '2025-05-29', '', '', '20.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('25', '8', '', '1', '1', '0.00', '0.00', '19', '1', '2025-05-29', '', '', '20.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('26', '8', '', '1', '1', '60.00', '60.00', '20', '1', '2025-05-29', '', '', '90.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('27', '1', '11', '1', '1', '130.00', '130.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('28', '9', '', '1', '1', '450.00', '450.00', '21', '14', '2025-07-16', '', '', '522.50');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('29', '2', '12', '1', '1', '100.00', '100.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('30', '4', '12', '1', '1', '0.00', '0.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('31', '4', '13', '1', '1', '0.00', '0.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('32', '2', '14', '1', '1', '100.00', '100.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('33', '7', '', '1', '1', '250.00', '250.00', '23', '14', '2025-08-19', '', '', '270.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('34', '8', '', '1', '1', '180.00', '180.00', '24', '14', '2025-08-19', '', '', '200.00');

-- TABLE: site
CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `botao1` varchar(80) DEFAULT NULL,
  `botao2` varchar(80) DEFAULT NULL,
  `botao3` varchar(80) DEFAULT NULL,
  `item1` varchar(100) DEFAULT NULL,
  `item2` varchar(100) DEFAULT NULL,
  `item3` varchar(100) DEFAULT NULL,
  `titulo_recursos` varchar(255) DEFAULT NULL,
  `titulo_perguntas` varchar(255) DEFAULT NULL,
  `titulo_rodape` varchar(255) DEFAULT NULL,
  `descricao_rodape` text DEFAULT NULL,
  `botao_rodape` varchar(100) DEFAULT NULL,
  `link_rodape` varchar(255) DEFAULT NULL,
  `logo_topo` varchar(5) DEFAULT NULL,
  `fundo_topo` varchar(100) DEFAULT NULL,
  `fundo_topo_mobile` varchar(100) DEFAULT NULL,
  `descricao_site` text DEFAULT NULL,
  `video_site` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`, `descricao_site`, `video_site`) VALUES ('1', '0', '28-03-2025-15-23-57-03.png', 'Transforme a Gestão do Seu Negócio HOJE MESMO!', 'O Gestor ERP SAAS é a solução completa que você precisa para controlar vendas, estoque, financeiro e muito mais em um único sistema intuitivo e poderoso.', 'Começar Agora', 'Saiba Mais', 'Acessar Painel', 'Comece a usar em minutos', 'Pagamento seguro', 'Suporte dedicado', 'Por Que Escolher o Gestor ERP SAAS?', 'Perguntas Frequentes', 'Pronto para Revolucionar a Gestão do Seu Negócio?', 'Não perca mais tempo com processos manuais e desorganizados. O Gestor ERP SAAS oferece tudo que você precisa para crescer com eficiência e controle total. ', 'Começar Agora', '#plans', 'Sim', '21-04-2025-21-06-44-erp_fundo_op.png', '22-04-2025-11-11-44-erp_fundo_mobile.jpg', '', '');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`, `descricao_site`, `video_site`) VALUES ('2', '1', '28-03-2025-15-23-57-03.png', '', '', '', 'Saiba Mais', 'Painel Cliente', 'item 1', 'item 2', 'item 3', 'Titulo do recursos', 'TItulo da área perguntas', 'Titulo Rodapé', 'Link', 'Rodapé', 'link', 'Não', '21-04-2025-21-06-04-fundo_sit.png', '21-04-2025-21-25-48-banner_mobile.jpg', '<p><span style=\"font-weight: normal;\">fdf daf das fda fdsaf a fsadf dsafa faf ffaaf adf afsad fa fas f fda dfsaf adf sadf af adf fa afa&nbsp;&nbsp;</span></p><p><span style=\"font-weight: normal;\">fdas fdsafads</span></p><p><span style=\"font-weight: normal;\">fdsafasdfdsa fsadf</span></p>', 'https://www.youtube.com/embed/vsvIi2j98ZE?si=iS-stCuyd-leVkY3');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`, `descricao_site`, `video_site`) VALUES ('3', '2', '01-04-2025-22-30-31-fundo_adv.jpg', 'Teste emp 2', 'dASSFDSA ', 'AFDFA ', 'DFAFAS', 'FA F', 'FDA FA', 'FDAF', 'FDAFA', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`, `descricao_site`, `video_site`) VALUES ('4', '8', 'sem-foto.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- TABLE: sub_categorias
CREATE TABLE `sub_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('17', 'Azul', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('26', 'Trasparente', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('27', 'preta', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('28', 'Rosa', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('38', 'Rosa2', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('40', 'Subcategoria 1', 'Sim', '', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `tarefas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('1', '17', '1', '2025-02-04', '18:00:00', '17:00:00', 'Testess', 'Concluída', '', 'Baixa', 'Teste', '0', '1');
INSERT INTO `tarefas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('4', '17', '1', '2025-02-04', '18:00:00', '17:00:00', 'Testess', 'Agendada', '2033678', 'Baixa', 'Teste', '0', '');
INSERT INTO `tarefas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('5', '17', '1', '2025-02-04', '18:00:00', '17:00:00', 'Testess', 'Agendada', '2033679', 'Baixa', 'Teste', '0', '0');
INSERT INTO `tarefas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('6', '41', '1', '2025-07-28', '23:50:00', '00:00:00', '', 'Concluída', '', 'Baixa', 'AAA', '0', '1');

-- TABLE: tarefas_clientes
CREATE TABLE `tarefas_clientes` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `tarefas_clientes` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('1', '1', '1', '2025-08-19', '15:20:00', '12:15:00', 'fdsaf das fdafdafda', 'Concluída', '2114771', 'Baixa', 'Teste', '0', '1');
INSERT INTO `tarefas_clientes` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('2', '37', '1', '2025-08-19', '16:00:00', '12:18:00', 'fa afa fda sda fasfasfaf asdf adsf ', 'Agendada', '2114775', 'Alta', 'Teste 2', '0', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `tarefas_sas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('1', '1', '1', '2025-07-28', '23:50:00', '00:00:00', '', 'Concluída', '', 'Baixa', 'Teste', '0', '');

-- TABLE: temp_texto
CREATE TABLE `temp_texto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `cabecalho` varchar(5) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `ip` varchar(35) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `assinatura` varchar(30) DEFAULT NULL,
  `conta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('1', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" style=\"margin-top:25px\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '::1', '2025-03-24', '12:02:10', '3', '', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('8', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></b></div><div><b><b><br></b></b></div><div><b><b>Hugo Cliente <br></b></b></div><div><br></div><div><b>Belo Horizonte</b></div><div><b><b><br></b></b></div>', '1', 'Sim', '14', '', '', '', '18', '', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('9', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente Teste, , , , nascido(a) em 05/03/2001, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à Rua de Teste, 500, bairro Bairro Teste, município de Cidade Teste ?MG ? CEP: 30512-660, email: cliente1@hotmail.com, telefone: (31) 99534-8118</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Segunda-Feira, 24 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/1.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente Teste</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '1', '::1', '2025-03-24', '12:01:53', '3', '', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('10', '<h3 data-start=\"299\" data-end=\"336\" align=\"center\"><b><h3 data-start=\"299\" data-end=\"336\"><font size=\"4\"><u>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</u></font></h3></b></h3><p data-start=\"338\" data-end=\"386\">Pelo presente instrumento particular, as partes:</p><p data-start=\"388\" data-end=\"502\"><strong data-start=\"388\" data-end=\"404\">CONTRATANTE:</strong><br data-start=\"404\" data-end=\"407\">Nome: <b>Empresa 1 Teste</b><br data-start=\"434\" data-end=\"437\">CNPJ: <b>20.000.000/0000-00</b><br data-start=\"468\" data-end=\"471\">Endereço: <b>Rua X Número 150 Bairro Teste X</b></p><p data-start=\"504\" data-end=\"616\"><strong data-start=\"504\" data-end=\"519\">CONTRATADA:</strong><br data-start=\"519\" data-end=\"522\"><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></p><p data-start=\"504\" data-end=\"616\">Têm entre si, justas e contratadas, as cláusulas e condições a seguir dispostas:</p><h3 data-start=\"705\" data-end=\"729\"><font size=\"3\">CLÁUSULA 1ª ? OBJETO</font></h3><p data-start=\"731\" data-end=\"959\">O presente contrato tem como objeto a prestação dos seguintes serviços:<br data-start=\"802\" data-end=\"805\"><strong data-start=\"805\" data-end=\"959\">[Descrever detalhadamente os serviços que serão prestados, ex.: \"Aulas presenciais de inglês para nível básico, com carga horária total de 40 horas.\"]</strong></p><h3 data-start=\"966\" data-end=\"1008\"><font size=\"3\">CLÁUSULA 2ª ? OBRIGAÇÕES DA CONTRATADA</font></h3><p data-start=\"1010\" data-end=\"1232\">A CONTRATADA se obriga a:<br data-start=\"1035\" data-end=\"1038\">a) Prestar os serviços descritos na Cláusula 1ª com zelo, diligência e qualidade;<br data-start=\"1119\" data-end=\"1122\">b) Cumprir o cronograma e prazos acordados;<br data-start=\"1165\" data-end=\"1168\">c) Manter sigilo sobre informações confidenciais da CONTRATANTE.</p><h3 data-start=\"1239\" data-end=\"1282\"><font size=\"3\">CLÁUSULA 3ª ? OBRIGAÇÕES DA CONTRATANTE</font></h3><p data-start=\"1284\" data-end=\"1547\">A CONTRATANTE se compromete a:<br data-start=\"1314\" data-end=\"1317\">a) Fornecer todas as informações necessárias à execução dos serviços;<br data-start=\"1386\" data-end=\"1389\">b) Efetuar o pagamento na forma e prazos estipulados neste contrato;<br data-start=\"1457\" data-end=\"1460\">c) Cooperar com a CONTRATADA, sempre que necessário, para o bom andamento dos serviços.</p><p data-start=\"504\" data-end=\"616\"><br></p><p data-start=\"504\" data-end=\"616\"><br></p>', '1', 'Sim', '14', '::1', '2025-03-24', '12:06:13', '17', '', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('30', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente Teste, , , , nascido(a) em 05/03/2001, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à Rua de Teste, 500, bairro Bairro Teste, município de Cidade Teste ?MG ? CEP: 30512-660, email: cliente1@hotmail.com, telefone: (31) 99534-8118</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Terca-Feira, 15 de Julho de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/1.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente Teste</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '1', '127.0.0.1', '2025-07-15', '20:29:25', '3', '1.png', '8');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('31', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente Teste, , , , nascido(a) em 05/03/2001, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à Rua de Teste, 500, bairro Bairro Teste, município de Cidade Teste ?MG ? CEP: 30512-660, email: cliente1@hotmail.com, telefone: (31) 99534-8118</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Terca-Feira, 15 de Julho de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/1.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente Teste</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '1', '127.0.0.1', '2025-07-15', '20:42:23', '3', '1.png', '9');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('32', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º 510.565.670-90, sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Terca-Feira, 15 de Julho de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '127.0.0.1', '2025-07-15', '20:46:27', '3', '', '10');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('33', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º 510.565.670-90, sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Terca-Feira, 15 de Julho de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '', '', '', '3', '', '0');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('35', '<h3 data-start=\"299\" data-end=\"336\" align=\"center\"><b><h3 data-start=\"299\" data-end=\"336\"><font size=\"4\"><u>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</u></font></h3></b></h3><p data-start=\"338\" data-end=\"386\">Pelo presente instrumento particular, as partes:</p><p data-start=\"388\" data-end=\"502\"><strong data-start=\"388\" data-end=\"404\">CONTRATANTE:</strong><br data-start=\"404\" data-end=\"407\">Nome: <b>Empresa 1 Teste</b><br data-start=\"434\" data-end=\"437\">CNPJ: <b>20.000.000/0000-00</b><br data-start=\"468\" data-end=\"471\">Endereço: <b>Rua X Número 150 Bairro Teste X</b></p><p data-start=\"504\" data-end=\"616\"><strong data-start=\"504\" data-end=\"519\">CONTRATADA:</strong><br data-start=\"519\" data-end=\"522\"><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º , sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></p><p data-start=\"504\" data-end=\"616\">Têm entre si, justas e contratadas, as cláusulas e condições a seguir dispostas:</p><h3 data-start=\"705\" data-end=\"729\"><font size=\"3\">CLÁUSULA 1ª ? OBJETO</font></h3><p data-start=\"731\" data-end=\"959\">O presente contrato tem como objeto a prestação dos seguintes serviços:<br data-start=\"802\" data-end=\"805\"><strong data-start=\"805\" data-end=\"959\">[Descrever detalhadamente os serviços que serão prestados, ex.: \"Aulas presenciais de inglês para nível básico, com carga horária total de 40 horas.\"]</strong></p><h3 data-start=\"966\" data-end=\"1008\"><font size=\"3\">CLÁUSULA 2ª ? OBRIGAÇÕES DA CONTRATADA</font></h3><p data-start=\"1010\" data-end=\"1232\">A CONTRATADA se obriga a:<br data-start=\"1035\" data-end=\"1038\">a) Prestar os serviços descritos na Cláusula 1ª com zelo, diligência e qualidade;<br data-start=\"1119\" data-end=\"1122\">b) Cumprir o cronograma e prazos acordados;<br data-start=\"1165\" data-end=\"1168\">c) Manter sigilo sobre informações confidenciais da CONTRATANTE.</p><h3 data-start=\"1239\" data-end=\"1282\"><font size=\"3\">CLÁUSULA 3ª ? OBRIGAÇÕES DA CONTRATANTE</font></h3><p data-start=\"1284\" data-end=\"1547\">A CONTRATANTE se compromete a:<br data-start=\"1314\" data-end=\"1317\">a) Fornecer todas as informações necessárias à execução dos serviços;<br data-start=\"1386\" data-end=\"1389\">b) Efetuar o pagamento na forma e prazos estipulados neste contrato;<br data-start=\"1457\" data-end=\"1460\">c) Cooperar com a CONTRATADA, sempre que necessário, para o bom andamento dos serviços.</p><p data-start=\"504\" data-end=\"616\"><br></p><p data-start=\"504\" data-end=\"616\"><br></p>', '1', 'Sim', '14', '::1', '2025-08-06', '14:22:00', '17', '', '0');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`, `conta`) VALUES ('36', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURAÇÃO</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.º 510.565.670-90, sob identidade n.º , filho de  e , residente e domiciliado(a) à , , bairro , município de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Juízo, instância ouTribunal, conferindo-lhes poderes gerais da cláusula ?ad judicia? e aindapoderes especiais para propor ações de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta à acusação, fazer arrazoados, requererjustificações, interpelações e/ou notificações cíveis e criminais, oferecerrepresentação criminal, produzir provas, acompanhar diligências, fazer acordosou compromissos, receber e dar quitação, requerer e levantar alvarás judiciais,indicar bens à penhora, requerer compensação tributária, nos limites previstosna legislação brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justiça, tudo omais que se fizer necessário para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 06 de Agosto de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '', '', '', '3', '', '28');

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
  `comissao` decimal(9,2) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
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
  `salario` decimal(10,2) DEFAULT NULL,
  `valor_hora` decimal(10,2) DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `jornada_horas` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('1', 'Hugo Freitas', 'contato@hugocursos.com.br', '', '$2y$10$cAgaNs5AFhB4tBCyvYf6eO8HLqNJa.2Rm0SC8fs8cxE151JbjSBLq', 'Administrador', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2025-02-01', '', '0', '', 'd13137c94f6a73a5a25c8af54a69c6d4efa1f36258c6bdd076bb4eada8fe2bf8', '1996-01-01', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('7', 'Gerente SAAS', 'gerente@hotmail.com', '', '$2y$10$1k0gtweYlk/TML2r1hYYiOEOmY3ZVJ5ExumzkKa3qDjHhQ9DCWhzC', 'Comum', 'Sim', '(31) 9999-9999', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('17', 'Empresa 1 Teste', 'empresa1@hotmail.com', '', '$2y$10$hv9BIji0TXw6zyjUur6FM.ms4XCc2H/vdQXtwCXAGW5jeDeFjF.s6', 'Administrador', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '1', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('18', 'Empresa 2', 'empresa2@hotmail.com', '', '$2y$10$WtFy4cY4wTObWC7E8gwHvedrWqOPxZkFit9vXbpKNExUihb9cCxg2', 'Administrador', 'Sim', '(00) 3200-0000', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '2', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('20', 'Teste', 'teste1@hotmail.com', '', '$2y$10$ZBIBka6dCLYeLpIWkwnHAuHE2ttvA5Dh4VBdgiqPkC58MB98jH3Su', 'Gerente', 'Sim', '(31) 99222-2222', '', 'sem-foto.jpg', '2025-02-04', '50.00', '0', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '1', '200.00', '20.00', '08:00:00', '08:00:00', '08:00:00');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('21', 'Gerente', 'gerente2@hotmail.com', '', '$2y$10$05zUCtDR4kLpaPSPM.xYm.mN3PNGf1bZb48xBhDYerf/tkyDu7W0y', 'Tesoureiro', 'Sim', '(01) 1111-1111', '', 'sem-foto.jpg', '2025-02-04', '10.00', '0', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '1', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('22', 'Gerente emp 2', 'gerenteemp2@hotmail.com', '', '$2y$10$d0.BC.5cSEVqVc4VpGr.t.kyUoqthkssVawRzx1Wdh272UoOZNALy', 'Gerente', 'Sim', '(02) 0000-0000', '', 'sem-foto.jpg', '2025-02-04', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '2', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('23', 'Escola X', 'escola@hotmail.com', '', '$2y$10$LGL2J4uhDOiZzpau0yqSSOktaJvHdmRcJgU9zmvjM5IoTVquJI87a', 'Administrador', 'Sim', '(02) 0200-0000', '', 'sem-foto.jpg', '2025-02-04', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '4', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('27', 'Emp 4 teste', 'emp4@hotmail.com', '', '$2y$10$9xgqAIpuNQrh2WpL/fXSV.ZW3sC426t.dACwX1XZ3xoQ1sSwsTPmC', 'Administrador', 'Sim', '(00) 0003-0000', '', 'sem-foto.jpg', '2025-02-21', '', '8', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '8', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('28', 'Gerente', 'gerente444@hotmail.com', '', '$2y$10$nTlwtuHgQKO.a89bHV163urTXvIJRxzu1LAW9zNo.4IeOk.CTy2B.', 'Gerente', 'Sim', '(02) 0000-0000', '', 'sem-foto.jpg', '2025-02-21', '', '', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '8', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('29', 'Tecnico Teste', 'tecnico@hotmail.com', '', '$2y$10$NnLF/wA4A1UU6ykL9G9XXuVPTHaHOoBRTpgF7qYxcSNQpwG649ASK', 'Técnico', 'Sim', '(20) 0000-0000', '', 'sem-foto.jpg', '2025-03-18', '50.50', '', 'chave pix teste', '', '1111-11-11', '', '', '', '', '', 'Sim', '', '', '', 'Telefone', '1', '2500.00', '25.00', '09:00:00', '19:00:00', '08:00:00');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('30', 'Técnico para testes', 'tec@hotmail.com', '', '$2y$10$E4oIbNVlPplc2.Zkr1Rh.eOv3EP9qzuunU2y38ekxLBC5mmkdzM5G', 'Técnico', 'Sim', '(00) 0200-0000', '', 'sem-foto.jpg', '2025-03-18', '10.00', '', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '2', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('31', 'Fun novo', 'funcnovo@hotmail.com', '', '$2y$10$Dc7ef49i8SVr9UPSu8Ju3.dbPQuVQ9cxb5MJKd/V.hzTTAcE00P72', 'Técnico', 'Sim', '(00) 0002-0000', '', 'sem-foto.jpg', '2025-03-18', '0.00', '', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '1', '5200.00', '150.00', '08:00:00', '18:00:00', '08:00:00');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('35', 'Teste', 'teste@hotmaiol.com', '', '$2y$10$rmVTtoquI1fkIA5jM4uUqeTAvICiKQqrmcDZyrGJBwL4wOqFOM0MK', 'Administrador', 'Não', '(02) 0002-0000', '', 'sem-foto.jpg', '2025-03-28', '', '12', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '12', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('37', 'Teste', 'testeapagar@hotmail.com', '', '$2y$10$jBW4pZ4TrxyrndbTH8ZH..zj8aRO0dRy.EV9pnKpnrTyzptRM.IUu', 'Gerente', 'Sim', '(31) 99534-8118', '', 'sem-foto.jpg', '2025-04-04', '', '', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '1', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('41', 'aa', 'aaaaassssa@hotmail.com', '', '$2y$10$990oDrCvkORA49tsDlnIIepvwjyYasldzSkQP2.Jz.VM9irgyrsNK', 'Técnico', 'Sim', '(41) 1111-1111', '', 'sem-foto.jpg', '2025-04-04', '0.00', '', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '1', '0.00', '0.00', '00:00:00', '00:00:00', '00:00:00');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('47', 'Teste', '', '', '$2y$10$tync8OROP.usUEUOLgn0ienh5Lz3CZE4/QGQggATCobCW6Du8VyUa', 'Administrador', 'Sim', '(00) 1414', '', 'sem-foto.jpg', '2025-04-24', '', '21', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '21', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('52', 'aaaaaaaaaaaa', '', '', '$2y$10$E5O8fJq56.D5JQ/pvD5cfu6me1R06wejj7d9fS6SULweJ.6FXy7ce', 'Administrador', 'Sim', '(54) 61212-1212', '', 'sem-foto.jpg', '2025-04-24', '', '26', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '26', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('53', 'Hugo Test', 'hugotest@hotmaiol.com', '', '$2y$10$el05QN1blFPsOFMQvk9a6u5g.n2v/bD96TEOqSA2HdRa2OB2lfMAq', 'Administrador', 'Sim', '(30) 0000-0000', '', 'sem-foto.jpg', '2025-04-28', '', '27', '', '', '1969-12-31', '', '', '', '', '', 'Sim', '', '', '', '', '27', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('70', 'Empp55', 'emp555@hotmail.com', '', '$2y$10$.pHNHAOZGP7706AeTmlel.DE3Xfptw9CiCn0SCxHIJ.MoNqKXq4Om', 'Administrador', 'Sim', '(45) 4545-5454', '', 'sem-foto.jpg', '2025-08-06', '', '44', '', '', '1111-11-11', '', '', '', '', '', 'Sim', '', '', '', '', '44', '', '', '', '', '');

-- TABLE: usuarios_permissoes
CREATE TABLE `usuarios_permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
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
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('72', '21', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('73', '21', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('74', '21', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('75', '21', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('76', '21', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('77', '21', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('78', '21', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('79', '21', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('80', '21', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('81', '21', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('82', '21', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('83', '21', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('84', '21', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('85', '21', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('86', '21', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('87', '21', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('88', '21', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('89', '21', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('90', '21', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('91', '21', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('92', '21', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('93', '21', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('94', '21', '37');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('95', '21', '38');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('97', '29', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('98', '29', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('99', '29', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('100', '29', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('101', '29', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('102', '29', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('103', '29', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('104', '29', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('105', '29', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('106', '29', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('107', '29', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('108', '29', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('109', '29', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('110', '29', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('111', '29', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('112', '29', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('113', '29', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('114', '29', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('115', '29', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('116', '29', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('117', '29', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('118', '29', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('119', '29', '37');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('120', '29', '38');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('121', '29', '39');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('122', '29', '40');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('123', '29', '41');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('124', '29', '42');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('125', '29', '43');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('126', '29', '44');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('127', '29', '45');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('128', '29', '46');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('129', '29', '47');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('130', '29', '48');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('131', '29', '49');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('132', '29', '50');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('133', '29', '51');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('134', '29', '52');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('135', '29', '53');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('136', '29', '54');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('137', '29', '55');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('138', '29', '56');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('139', '29', '57');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('140', '29', '58');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('141', '29', '59');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('142', '29', '60');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('143', '29', '61');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('144', '29', '62');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('145', '41', '39');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('146', '41', '60');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('147', '41', '63');

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

-- TABLE: videos
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `videos` (`id`, `titulo`, `link`, `ordem`) VALUES ('1', 'Como Trabalhar com a campanha de Marketing', 'https://www.youtube.com/watch?v=8KYf5fHvPsI', '1');
INSERT INTO `videos` (`id`, `titulo`, `link`, `ordem`) VALUES ('3', 'Como utilizar o sistema', 'https://www.youtube.com/watch?v=8KYf5fHvPsI', '2');
INSERT INTO `videos` (`id`, `titulo`, `link`, `ordem`) VALUES ('4', 'Vídeo do drive incorporado', 'https://drive.google.com/file/d/1hh5pHrAaiVYFRMnqVX_kzCwilzzMJRZ1/preview?usp=sharing', '3');
INSERT INTO `videos` (`id`, `titulo`, `link`, `ordem`) VALUES ('5', 'tetf', 'fsgsdgsg', '4');

