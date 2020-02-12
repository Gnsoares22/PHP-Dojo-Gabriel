<?php

//Funcoes para numeros

$db = 7851.5644;

//formatar numero com quantidade de casas decimais, pontos e virgulas
echo number_format($db,2,",",".");
echo '<hr>';

//arredondar numero
echo round($db,1,PHP_ROUND_HALF_UP); //PHP ROUND HALF UP arredonda para cima
echo '<hr>';

//aredonda o numero para cima excluindo as casas decimais
echo ceil($db); 
echo '<hr>';

//arredonda o valor para baixo
echo floor($db);
echo '<hr>';

//gera um numero inteiro aleatorio entre 0 e 1000
$numero = rand(0, 1000);
echo $numero;