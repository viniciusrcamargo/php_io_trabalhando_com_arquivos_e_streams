<?php

$arquivo = fopen('leitor-cursos.txt','w');

$curso = 'PHP Design Patterns I';

fwrite($arquivo,$curso);

fclose($arquivo);