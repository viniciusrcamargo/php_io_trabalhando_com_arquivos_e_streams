<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'GET',
        'header' => 'X-From: PHP'
    ]
]);
echo file_get_contents('https://brasilapi.com.br/api/registrobr/v1/chrisoft.com.br', false, $contexto);