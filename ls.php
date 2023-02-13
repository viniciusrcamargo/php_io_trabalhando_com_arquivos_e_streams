<?php

$diretorioAtual = dir('.');

echo  $diretorioAtual->path . PHP_EOL;
//ler diretorio atual
while($arquivo = $diretorioAtual->read()){
   echo $arquivo . PHP_EOL;
}