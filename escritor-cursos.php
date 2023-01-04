<?php

$arquivo = fopen('leitor-cursos.txt','a+');

$curso = "\nPHP Design Patterns II: Boas práticas de programação";

fwrite($arquivo,$curso);

fclose($arquivo);