<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while(!$arquivoCursos->eof()){
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}
//getCTime pega data de criação de arquivo
$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');