create database ProjetoRestaurante

CREATE TABLE IF NOT EXISTS 'ProjetoRestaurante'.'Restaurante' (
  'id_restaurante' INT NOT NULL AUTO_INCREMENT,
  'nome_restaurante' VARCHAR(45) NULL,
  'CPF_CNPJ' VARCHAR(20) NULL,
  'endereco' VARCHAR(80) NULL,
  'telefone' VARCHAR(20), 
  'email' VARCHAR(45) NULL,
  PRIMARY KEY ('id_restaurante'))
ENGINE = InnoDB
	
CREATE TABLE IF NOT EXISTS 'ProjetoRestaurante'.'Pessoa' (
  'id_pessoa' INT NOT NULL AUTO_INCREMENT,
  'nome_pessoa' VARCHAR(45) NULL,
  'CPF' VARCHAR(20) NULL,
  'endereco' VARCHAR(80) NULL,
  'telefone' VARCHAR(20), 
  'email' VARCHAR(45) NULL,
  'senha' VARCHAR(30) NULL, 
  PRIMARY KEY ('id_restaurante'))
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS 'ProjetoRestaurante'.'Preco' (
  'id_Preco' INT NOT NULL AUTO_INCREMENT,
  'preco' FLOAT NULL,
  'Id_tipo' INT NOT NULL,
  'Id_restaurante' INT NULL,
  PRIMARY KEY ('id_Preco', 'Id_tipo'),
  INDEX 'fk_Preco_Tipo_idx' ('Id_tipo' ASC),
  INDEX 'fk_Preco_Restaurante1_idx' ('Id_restaurante' ASC),
  CONSTRAINT 'fk_Preco_Tipo'
    FOREIGN KEY ('Id_tipo')
    REFERENCES 'mydb'.'Tipo' ('Id_tipo')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_Preco_Restaurante1'
    FOREIGN KEY ('Id_restaurante')
    REFERENCES 'mydb'.'Restaurante' ('id_restaurante')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS 'ProjetoRestaurante'.'Produto' (
  'id_Produto' INT NOT NULL AUTO_INCREMENT,
  'Descricao_item' VARCHAR(45) NULL,
  'Id_tipo' INT NULL,
  PRIMARY KEY ('id_Produto'),
  INDEX 'fk_Produto_Tipo1_idx' ('Id_tipo' ASC),
  CONSTRAINT 'fk_Produto_Tipo1'
    FOREIGN KEY ('Id_tipo')
    REFERENCES 'mydb'.'Tipo' ('Id_tipo')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS 'ProjetoRestaurante'.'Tipo' (
  'Id_tipo' INT NOT NULL AUTO_INCREMENT,
  'descricao_tipo' VARCHAR(45) NULL,
  PRIMARY KEY ('Id_tipo'))
ENGINE = InnoDB
