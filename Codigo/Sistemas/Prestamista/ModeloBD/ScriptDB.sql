CREATE TABLE tblRelatorio1546_2546 (
  id_RelD1546C2546 INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  relD1546C2546_Conta VARCHAR(13) NULL,
  relD1546C2546_Nome VARCHAR(100) NULL,
  relD1546C2546_Tipopess VARCHAR(2) NULL,
  relD1546C2546_PA VARCHAR(2) NULL,
  relD1546C2546_TipoConta VARCHAR(2) NULL,
  relD1546C2546_DtaLancamento VARCHAR(10) NULL,
  relD1546C2546_Documento VARCHAR(20) NULL,
  relD1546C2546_Usuario VARCHAR(10) NULL,
  relD1546C2546_Origem VARCHAR(20) NULL,
  relD1546C2546_Autenticacao VARCHAR(4) NULL,
  relD1546C2546_Lancamento VARCHAR(80) NULL,
  relD1546C2546_Debito VARCHAR(15) NULL,
  relD1546C2546_Credito VARCHAR(15) NULL,
  relD1546C2546_Efetivacao VARCHAR(10) NULL,
  relD1546C2546_DtaINsercao VARCHAR(10) NULL,
  relD1546C2546_NomeArquivo VARCHAR(40) NULL,
  PRIMARY KEY(id_RelD1546C2546)
);

CREATE TABLE tblRelCRD0314 (
  id_RelCRD03114 INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  crd0314_Conta VARCHAR(13) NULL,
  crd0314_Cooperado VARCHAR(100) NULL,
  crd0314_PA VARCHAR(2) NULL,
  crd0314_Contrato VARCHAR(20) NULL,
  crd0314_Produto VARCHAR(9) NULL,
  crd0314_Emissao VARCHAR(10) NULL,
  crd0314_Vencimento VARCHAR(10) NULL,
  crd0314_Parcelas VARCHAR(4) NULL,
  crd0314_VlrContrato VARCHAR(15) NULL,
  crd0314_BaseSeguro VARCHAR(15) NULL,
  crd0314_Seguro VARCHAR(15) NULL,
  crd0314_Tipo VARCHAR(2) NULL,
  crd0314_Liberacao VARCHAR(10) NULL,
  crd0314_DtaInsercao VARCHAR(10) NULL,
  crd0314_NomeArquivo VARCHAR(40) NULL,
  PRIMARY KEY(id_RelCRD03114)
);

CREATE TABLE tblSeguradora (
  id_Seguradora INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  seguradora_nome VARCHAR(100) NULL,
  seguradora_dataNasc VARCHAR(10) NULL,
  seguradora_Capital VARCHAR(15) NULL,
  seguradora_Premio VARCHAR(15) NULL,
  seguradora_CPFCNPG VARCHAR(18) NULL,
  seguradora_Matricula VARCHAR(20) NULL,
  seguradora_Prazo VARCHAR(3) NULL,
  seguradora_Grupo VARCHAR(3) NULL,
  seguradora_DtaInsercao VARCHAR(10) NULL,
  seguradora_NomeArquivo VARCHAR(40) NULL,
  PRIMARY KEY(id_Seguradora)
);


