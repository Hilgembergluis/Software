CREATE TABLE tblStatus (
  id_Status INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Descricao_Status VARCHAR(60) NULL,
  PRIMARY KEY(id_Status)
);

CREATE TABLE tblTipoPessoa (
  id_TipoPessoa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Descricao_TipoPessoa VARCHAR(60) NULL,
  PRIMARY KEY(id_TipoPessoa)
);

CREATE TABLE tblTipoEmpresa (
  id_TipoEmpresa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Descricao_TipoEmpresa VARCHAR(100) NULL,
  PRIMARY KEY(id_TipoEmpresa)
);

CREATE TABLE tblTipoLucro (
  id_TipoLucro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Descricao_TipoLucro VARCHAR NULL,
  PRIMARY KEY(id_TipoLucro)
);

CREATE TABLE tblTipoUso (
  id_TipoUso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Descricao_TipoUso VARCHAR(40) NULL,
  PRIMARY KEY(id_TipoUso)
);

CREATE TABLE tblTipoRelacionamento (
  id_TipoRelacionamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Descricao_TipoRelacionamento VARCHAR(60) NULL,
  PRIMARY KEY(id_TipoRelacionamento)
);

CREATE TABLE tblPessFisica (
  id_PessFisica INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tblTipoPessoa_id_TipoPessoa INTEGER UNSIGNED NOT NULL,
  Nome_PessFisica VARCHAR(100) NULL,
  CPF_PessFisica VARCHAR(11) NULL,
  Sexo_PessFisica INTEGER UNSIGNED NULL,
  TipoPessoa_PessFisica INTEGER UNSIGNED NULL,
  CidadeNascimento_PessFisica VARCHAR(100) NULL,
  EstadoNascimento_PessFisica INTEGER UNSIGNED NULL,
  DataNascimento_PessFisica DATE NULL,
  Renda_PessFisica FLOAT NULL,
  PRIMARY KEY(id_PessFisica),
  INDEX tblPessFisica_FKIndex1(tblTipoPessoa_id_TipoPessoa),
  FOREIGN KEY(tblTipoPessoa_id_TipoPessoa)
    REFERENCES tblTipoPessoa(id_TipoPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE tblContato (
  id_Contato INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  idTabela_Contato INTEGER UNSIGNED NULL,
  idDono_Contato INTEGER UNSIGNED NULL,
  idTipo_Contato INTEGER UNSIGNED NULL,
  idUso_Contato INTEGER UNSIGNED NULL,
  Nome_Contato VARCHAR(100) NULL,
  Setor_Contato VARCHAR(60) NULL,
  idStatus_Contato INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_Contato),
  INDEX tblContato_FKIndex1(tblStatus_id_Status),
  INDEX tblContato_FKIndex2(tblStatus_id_Status),
  FOREIGN KEY(tblStatus_id_Status)
    REFERENCES tblStatus(id_Status)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblStatus_id_Status)
    REFERENCES tblStatus(id_Status)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE tblEmail (
  id_Email INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tblContato_id_Contato INTEGER UNSIGNED NOT NULL,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblTipoUso_id_TipoUso INTEGER UNSIGNED NOT NULL,
  idTabela_Email VARCHAR(40) NULL,
  idDono_Email INTEGER UNSIGNED NULL,
  Email VARCHAR(100) NULL,
  idStatus_Email INTEGER UNSIGNED NULL,
  idTipoUso_Email INTEGER UNSIGNED NULL,
  idStatus_Email_2 INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_Email),
  INDEX tblEmail_FKIndex1(tblTipoUso_id_TipoUso),
  INDEX tblEmail_FKIndex2(tblStatus_id_Status),
  INDEX tblEmail_FKIndex3(tblContato_id_Contato),
  FOREIGN KEY(tblTipoUso_id_TipoUso)
    REFERENCES tblTipoUso(id_TipoUso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblStatus_id_Status)
    REFERENCES tblStatus(id_Status)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblContato_id_Contato)
    REFERENCES tblContato(id_Contato)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE tblPessJuridica (
  id_PessJuridica INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
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
  DataLucro_PessJuridica DATE NULL,
  PRIMARY KEY(id_PessJuridica),
  INDEX tblPessJuridica_FKIndex1(tblTipoLucro_id_TipoLucro),
  INDEX tblPessJuridica_FKIndex2(tblTipoPessoa_id_TipoPessoa),
  INDEX tblPessJuridica_FKIndex3(tblTipoEmpresa_id_TipoEmpresa),
  FOREIGN KEY(tblTipoLucro_id_TipoLucro)
    REFERENCES tblTipoLucro(id_TipoLucro)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblTipoPessoa_id_TipoPessoa)
    REFERENCES tblTipoPessoa(id_TipoPessoa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblTipoEmpresa_id_TipoEmpresa)
    REFERENCES tblTipoEmpresa(id_TipoEmpresa)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE tblTelefoneFixo (
  id_TelefoneFixo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tblContato_id_Contato INTEGER UNSIGNED NOT NULL,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblTipoUso_id_TipoUso INTEGER UNSIGNED NOT NULL,
  idTabela_TelefoneFixo VARCHAR(40) NULL,
  idDono_TelefoneFixo INTEGER UNSIGNED NULL,
  numero_TelefoneFixo VARCHAR(10) NULL,
  idStatus_TelefoneFixo INTEGER UNSIGNED NULL,
  idTipoUso_TelefoneFixo INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_TelefoneFixo),
  INDEX tblTelefoneFixo_FKIndex1(tblTipoUso_id_TipoUso),
  INDEX tblTelefoneFixo_FKIndex2(tblStatus_id_Status),
  INDEX tblTelefoneFixo_FKIndex3(tblContato_id_Contato),
  FOREIGN KEY(tblTipoUso_id_TipoUso)
    REFERENCES tblTipoUso(id_TipoUso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblStatus_id_Status)
    REFERENCES tblStatus(id_Status)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblContato_id_Contato)
    REFERENCES tblContato(id_Contato)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE tblTelefoneCelular (
  id_TelefoneCelular INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tblContato_id_Contato INTEGER UNSIGNED NOT NULL,
  tblStatus_id_Status INTEGER UNSIGNED NOT NULL,
  tblTipoUso_id_TipoUso INTEGER UNSIGNED NOT NULL,
  idTabela_TelefoneCelular VARCHAR(40) NULL,
  idDono_TelefoneCelular INTEGER UNSIGNED NULL,
  numero_TelefoneCelular VARCHAR(11) NULL,
  idStatus_TelefoneCelular INTEGER UNSIGNED NULL,
  idTipoUso_TelefoneCelular INTEGER UNSIGNED NULL,
  idStatus_TelefoneCelular_2 INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_TelefoneCelular),
  INDEX tblTelefoneCelular_FKIndex1(tblTipoUso_id_TipoUso),
  INDEX tblTelefoneCelular_FKIndex2(tblStatus_id_Status),
  INDEX tblTelefoneCelular_FKIndex3(tblContato_id_Contato),
  FOREIGN KEY(tblTipoUso_id_TipoUso)
    REFERENCES tblTipoUso(id_TipoUso)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblStatus_id_Status)
    REFERENCES tblStatus(id_Status)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblContato_id_Contato)
    REFERENCES tblContato(id_Contato)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE tblRelacionamento (
  id_Relacionamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
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
  Status_Relacionamento INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_Relacionamento),
  INDEX tblRelacionamento_FKIndex1(tblTipoRelacionamento_id_TipoRelacionamento),
  INDEX tblRelacionamento_FKIndex2(tblPessFisica_id_PessFisica),
  INDEX tblRelacionamento_FKIndex3(tblPessJuridica_id_PessJuridica),
  INDEX tblRelacionamento_FKIndex4(tblStatus_id_Status),
  FOREIGN KEY(tblTipoRelacionamento_id_TipoRelacionamento)
    REFERENCES tblTipoRelacionamento(id_TipoRelacionamento)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblPessFisica_id_PessFisica)
    REFERENCES tblPessFisica(id_PessFisica)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblPessJuridica_id_PessJuridica)
    REFERENCES tblPessJuridica(id_PessJuridica)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(tblStatus_id_Status)
    REFERENCES tblStatus(id_Status)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


