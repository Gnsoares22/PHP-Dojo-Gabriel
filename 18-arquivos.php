<?php

//ARQUIVOS

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo do arquivo";

//abrir arquivo
// a -> somente para escrita
$arquivoAberto = fopen("/Users/Gabriel/Desktop/'$arquivo'", 'w');
fwrite($arquivoAberto, $conteudo . PHP_EOL); //inclui um conteudo no arquivo
fclose($arquivoAberto);
