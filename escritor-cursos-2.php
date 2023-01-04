<?php

$curso = "\nPHP Design Patterns II: Boas práticas de programação";

file_put_contents('leitor-cursos.txt', $curso, FILE_APPEND);

//file_append flag para adicionar escritos no final do arquivo