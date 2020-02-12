<?php

//criando uma função
function exibirNome($nome) {

    echo "Meu nome é " . $nome;
}

exibirNome("Adriele Santos");

echo '<hr>';

function calcularMedia($nome, $nota1, $nota2, $nota3) {

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {

        echo "A média de $ nome é $media e ele está Aprovado !!";
    } else {
        echo "A média de $ nome é $media e ele está Reprovado !!";
    }
}

calcularMedia("Junior", 5, 9, 7);