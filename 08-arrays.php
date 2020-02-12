<?php
//Array Listas
//criando um array com indices
$carros = array(1 => "BMW", 2 => "VELOSTER", 3 => "HILUX");
$carros[] = "AMAROK"; //inserir valores no array
$carros[10] = "CAMARO"; //insere o valor CAMARO no indice 10
print_r($carros); //imprime a variavel carros
//echo $carros[2]; //pega o valor da lista conforme o indice solicitado

echo "<hr>";

//////////////////////

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

// Arrays podem ser invocados usando [] em vez de array
$clientes = ["Marcio","Bia","Lucas","Maria"];
print_r($clientes);
echo "<hr>";

//CONTA ELEMENTOS DO ARRAY
$totalClientes = count($clientes);
echo $totalClientes;

echo "<hr>";

//FOREACH percorre o array percorre a lista
foreach ($carros as $valor){
    //para cada item do vetor carros será atribuido um valor (nome dos carros)
    //em cada repetição ele atribui a variavel valor o nome do carro até que a lista
    //chegue ao fim
    echo $valor . "<br>";   
}

echo "<hr>";

//arrays associativos associando um indice tipo string a um valor
$pessoa = array("nome" => "Gabriel","idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";

foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor . "<br>";
}

echo "<hr>";

//arrays multidimencionais (matrizes)
$times = array(
    "cariocas" => array("campeao" => "vasco","vice" => "flamengo", "terceiro" => "botafogo"),
    "paulistas" => array("santos","sao paulo", "palmeiras"),
    "baianos" => array("bahia","vitoria","santa cruz"));

//Os indices de cada array foram criados automaticamente começando por 0

// echo $times["cariocas"]["campeao"];

foreach($times["cariocas"] as $indice => $valor){
    echo $indice." : ".$valor . "<br>";
}