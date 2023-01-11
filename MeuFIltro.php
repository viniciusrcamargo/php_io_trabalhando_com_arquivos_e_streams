<?php

class MeuFIltro extends php_user_filter
{
    public $stream;

    public function onCreate()
    {
        $this->stream = fopen('php://temp', 'w+');
    }

    public function filter($in, $out, &$consumed, $closing){
        $saida = '';
        while($bucket = stream_bucket_make_writeable($in)){
            $linhas = explode("\n", $bucket->data);


            foreach ($linhas as $linha){
                if(stripos($linha, 'parte') !== false){
                    $saida .= "$linha\n";
                }
            }
        }
    }
}