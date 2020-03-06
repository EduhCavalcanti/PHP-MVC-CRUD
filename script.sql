CREATE DATABASE crud;

USE crud;

CREATE TABLE alunos
(
  nome VARCHAR(255) NOT NULL,
  nascimento INT(10),
)

CREATE TABLE disciplina
(
  disciplina VARCHAR(255) NOT NULL,
)

CREATE TABLE matricula
(
  periodo VARCHAR(255) NOT NULL,
  aluno VARCHAR(10),
  disciplina VARCHAR(255)
)