CREATE DATABASE IF NOT EXISTS cestas;

USE cestas;

CREATE TABLE IF NOT EXISTS persona (
    nombre VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    jamon boolean
);

INSERT INTO persona (nombre, email, jamon) VALUES
    ('Diego', "dgargay987@g.educaand.es", true),
    ('Daniel', "dgargay987@g.educaand.es", false);