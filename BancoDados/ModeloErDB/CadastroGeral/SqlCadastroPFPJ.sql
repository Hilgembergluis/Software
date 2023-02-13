CREATE TABLE tblContato (
  id_Contato INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  idTabela_Contato INTEGER UNSIGNED NULL,
  idDono_Contato INTEGER UNSIGNED NULL,
  idTipo_Contato INTEGER UNSIGNED NULL,
  idUso_Contato INTEGER UNSIGNED NULL,
  Nome_Contato VARCHAR(100) NULL,
  Setor_Contato VARCHAR(60) NULL,
  idStatus_Contato INTEGER UNSIGNED NULL
);

CREATE TABLE tblEmail (
  id_Email INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tblContato_id_Contato INTEGER UNSIGNED NOT NULL,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblTipoUso_id_TipoUso INTEGER UNSIGNED NOT NULL,
  idTabela_Email VARCHAR(40) NULL,
  idDono_Email INTEGER UNSIGNED NULL,
  Email VARCHAR(100) NULL,
  idStatus_Email INTEGER UNSIGNED NULL,
  idTipoUso_Email INTEGER UNSIGNED NULL,
  idStatus_Email_2 INTEGER UNSIGNED NULL
);

CREATE TABLE tblPessFisica (
  id_PessFisica INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tblTipoPessoa_id_TipoPessoa INTEGER UNSIGNED NOT NULL,
  Nome_PessFisica VARCHAR(100) NULL,
  CPF_PessFisica VARCHAR(11) NULL,
  Sexo_PessFisica INTEGER UNSIGNED NULL,
  TipoPessoa_PessFisica INTEGER UNSIGNED NULL,
  CidadeNascimento_PessFisica VARCHAR(100) NULL,
  EstadoNascimento_PessFisica INTEGER UNSIGNED NULL,
  DataNascimento_PessFisica DATE NULL,
  Renda_PessFisica FLOAT NULL
);

CREATE TABLE tblPessJuridica (
  id_PessJuridica INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tblTipoEmpresa_id_TipoEmpresa INTEGER UNSIGNED NOT NULL,
  tblTipoPessoa_id_TipoPessoa INTEGER UNSIGNED NOT NULL,
  tblTipoLucro_id_TipoLucro INTEGER UNSIGNED NOT NULL,
  RazaoSocial_PessJuridica VARCHAR(100) NULL,
  NomeFantasia_PessJuridica VARCHAR(100) NULL,
  TipoPess_PessJuridica INTEGER UNSIGNED NULL,
  CNPJ_PessJuridica VARCHAR(14) NULL,
  TipoEmpresa_PessJuridica INTEGER UNSIGNED NULL,
  DataAbertura_PessJuridica DATE NULL,
  Lucro_PessJuridica FLOAT NULL,
  TipoLucro_PessJuridica INTEGER UNSIGNED NULL,
  DataLucro_PessJuridica DATE NULL
);

CREATE TABLE tblRelacionamento (
  id_Relacionamento INTEGER NOT NULL AUTO_INCREMENT  PRIMARY KEY,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblPessJuridica_id_PessJuridica INTEGER UNSIGNED NOT NULL,
  tblPessFisica_id_PessFisica INTEGER UNSIGNED NOT NULL,
  tblTipoRelacionamento_id_TipoRelacionamento INTEGER UNSIGNED NOT NULL,
  idTipo_Relacionamento INTEGER UNSIGNED NULL,
  idPessPF_Relacionamento INTEGER UNSIGNED NULL,
  idPessPJ_Relacionamento INTEGER UNSIGNED NULL,
  PercentSociedade_Relacionamento INTEGER UNSIGNED NULL,
  DataInicio_Relacionamento DATE NULL,
  DataFinal_Relacionamento DATE NULL,
  Status_Relacionamento INTEGER UNSIGNED NULL 
);

CREATE TABLE tblStatus (
  id_Status INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Descricao_Status VARCHAR(60) NULL,
);

CREATE TABLE tblTelefoneCelular (
  id_TelefoneCelular INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tblContato_id_Contato INTEGER UNSIGNED NOT NULL,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblTipoUso_id_TipoUso INTEGER UNSIGNED NOT NULL,
  idTabela_TelefoneCelular VARCHAR(40) NULL,
  idDono_TelefoneCelular INTEGER UNSIGNED NULL,
  numero_TelefoneCelular VARCHAR(11) NULL,
  idStatus_TelefoneCelular INTEGER UNSIGNED NULL,
  idTipoUso_TelefoneCelular INTEGER UNSIGNED NULL,
  idStatus_TelefoneCelular_2 INTEGER UNSIGNED NULL
);

CREATE TABLE tblTelefoneFixo (
  id_TelefoneFixo INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tblContato_id_Contato INTEGER UNSIGNED NOT NULL,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblTipoUso_id_TipoUso INTEGER UNSIGNED NOT NULL,
  idTabela_TelefoneFixo VARCHAR(40) NULL,
  idDono_TelefoneFixo INTEGER UNSIGNED NULL,
  numero_TelefoneFixo VARCHAR(10) NULL,
  idStatus_TelefoneFixo INTEGER UNSIGNED NULL,
  idTipoUso_TelefoneFixo INTEGER UNSIGNED NULL
);

CREATE TABLE tblTipoEmpresa (
  id_TipoEmpresa INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Descricao_TipoEmpresa VARCHAR(100) NULL
);

CREATE TABLE tblTipoLucro (
  id_TipoLucro INTEGER NOT NULL AUTO_INCREMENT  PRIMARY KEY,
  Descricao_TipoLucro VARCHAR NULL
);

CREATE TABLE tblTipoPessoa (
  id_TipoPessoa INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Descricao_TipoPessoa VARCHAR(60) NULL
);

CREATE TABLE tblTipoRelacionamento (
  id_TipoRelacionamento INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Descricao_TipoRelacionamento VARCHAR(60) NULL
);

CREATE TABLE tblTipoUso (
  id_TipoUso INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Descricao_TipoUso VARCHAR(40) NULL
);


