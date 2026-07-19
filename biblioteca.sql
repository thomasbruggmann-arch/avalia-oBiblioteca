CREATE DATABASE biblioteca;

USE biblioteca;

CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL
);

CREATE TABLE livros(
id INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(100) NOT NULL,
autor VARCHAR(100),
quantidade INT NOT NULL
);

CREATE TABLE emprestimos(
id INT AUTO_INCREMENT PRIMARY KEY,
usuario_id INT,
livro_id INT,
data_emprestimo DATE,
data_devolucao DATE,

FOREIGN KEY(usuario_id) REFERENCES usuarios(id),

FOREIGN KEY(livro_id) REFERENCES livros(id)
);

INSERT INTO usuarios(nome,email)
VALUES
("João","joao@gmail.com"),
("Maria","maria@gmail.com");

INSERT INTO livros(titulo,autor,quantidade)
VALUES
("Dom Casmurro","Machado de Assis",2),
("O Hobbit","J.R.R Tolkien",1);

INSERT INTO emprestimos(usuario_id,livro_id,data_emprestimo,data_devolucao)
VALUES
(1,1,"2026-07-15","2026-07-22");