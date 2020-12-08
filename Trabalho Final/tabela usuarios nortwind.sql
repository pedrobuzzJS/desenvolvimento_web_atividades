 CREATE TABLE IF NOT EXISTS northwind.usuario (
    IDUsuario int(4) NOT NULL,
    Email char(50) NOT NULL,
    Senha char(50) NOT NULL,
    PRIMARY KEY (IDUsuario)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 INSERT INTO usuario (IDUsuario, Email, Senha) VALUES (1, 'pedro@email.com', md5('pedro'));
