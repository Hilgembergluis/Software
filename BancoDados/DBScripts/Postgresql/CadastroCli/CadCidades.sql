CREATE TABLE tblBairros (
  nsuBairros INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigoCidade INTEGER UNSIGNED NULL, --CEP
  descricaoBairro VARCHAR(100) NULL, --CEP
  codigoRegiaoBairros INTEGER UNSIGNED NULL, --Cidades
  --Faz referencia a tabela região e utilizado para cidades
  PRIMARY KEY(nsuBairros)
);

CREATE TABLE tblCidades (
  nsuCidade INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoIBGE INTEGER UNSIGNED NULL, --CEP, Cidades
  CodigoIBGE7 INTEGER UNSIGNED NULL, --Cidades
  CodigoUFEstado INTEGER UNSIGNED NULL, --CEP, Cidades
  --Faz referencia a tabela estado, utilizado em CEP correrios e Cidades
  DescricaoCidade VARCHAR(70) NULL, --CEP, Cidades
  CodigoRegiao INTEGER UNSIGNED NULL, --Cidades
  --Faz referencia a tabela região e utilizado para cidades
  CodigoPorte INTEGER UNSIGNED NULL, --Cidades
  --Faz referencia tabela porte e utilizado para cidades
  Capital VARCHAR(1) NULL, --Cidades
  --Marca a didade como capital
  AreaCidade VARCHAR(100) NULL, --CEP, Cidades
  PRIMARY KEY(nsuCidade)
);

CREATE TABLE tblEnderecos (
  nsuEndCidades INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CEPEndereco VARCHAR(10) NULL, --CEP
  DescEndereco INTEGER UNSIGNED NULL, --CEP 
  CodTPLog INTEGER UNSIGNED NULL, --CEP
  ComplementoEnd VARCHAR(100) NULL, --CEP
  LocalEndereco VARCHAR(100) NULL, --CEP
  CodigoCidade INTEGER UNSIGNED NULL, --CEP
  CodigoBairro INTEGER UNSIGNED NULL, --CEP
  PRIMARY KEY(nsuEndCidades)
);

CREATE TABLE tblEstados (
  nsuEsdatos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodIBGEEstado INTEGER UNSIGNED NULL, --CEP
  DescricaoEstado VARCHAR(70) NULL, --CEP, Cidades
  UFEstado VARCHAR(2) NULL, --CEP
  CodRegiaoEstado INTEGER UNSIGNED NULL, --Cidades
  --Faz referencia a tabela regiao.
  PRIMARY KEY(nsuEsdatos)
);

CREATE TABLE tblFaixaBairros (
  nsufaixabairro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CEPInicialBairros VARCHAR(10) NULL, --CEP
  CEPFinalBairros VARCHAR(10) NULL, --CEP
  CodigoBairro INTEGER UNSIGNED NULL, --CEP
  CodigoCidade INTEGER UNSIGNED NULL, --CEP
  UFFaixaBairro INTEGER UNSIGNED NULL, --CEP
  PRIMARY KEY(nsufaixabairro)
);

CREATE TABLE tblFaixaCidades (
  nsuFaixaCidades INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CEPInicialCidade VARCHAR(10) NULL, --CEP
  CEPFinalCidade VARCHAR(10) NULL, --CEP
  CodigoCidade INTEGER UNSIGNED NULL, --CEP
  UFFaixaCidade INTEGER UNSIGNED NULL, --CEP
  PRIMARY KEY(nsuFaixaCidades)
);

CREATE TABLE tblGeoRefeciamento (
  nsugeo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT, 
  CEPGeo VARCHAR(10) NULL, --CEP
  LatitudeGeo VARCHAR(100) NULL, --CEP
  LongitudeGeo VARCHAR(100) NULL, --CEP
  PRIMARY KEY(nsugeo)
);

CREATE TABLE tblPorte (
  nsuporte INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricaoporte VARCHAR(60) NULL, --Cidades
  PRIMARY KEY(nsuporte)
);

CREATE TABLE tblregiao (
  nsuregiao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricaoRegiao VARCHAR(60) NULL, --Cidades
  PRIMARY KEY(nsuregiao)
);

CREATE TABLE tblTipoLogradouro (
  nsuTpLogradouro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescLogradouro VARCHAR(30) NULL, --CEP
  AbreviacaoLogradouro VARCHAR(5) NULL, --CEP
  PRIMARY KEY(nsuTpLogradouro)
);
