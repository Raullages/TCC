<?php
CREATE DATABASE tcc;

CREATE TABLE projeto (
  id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  layer VARCHAR(255) NOT NULL,
  positionX DOUBLE NOT NULL,
  positionY DOUBLE NOT NULL,
  positionZ DOUBLE NOT NULL,
  length DOUBLE NOT NULL,
  area DOUBLE NOT NULL
)

CREATE TABLE respTecnico (
  id INT(6) NOT NULL PRIMARY_KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
)
?>
