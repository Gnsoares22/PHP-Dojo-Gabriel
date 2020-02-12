<?php

//While e Do while

$contador = 1;

while($contador <=10){
    
    echo $contador;
    
    $contador++;
}

echo '<hr>';

////// Do while

$contador = 1;

do{
    
    echo "contador é $contador <br>";
    
    $contador++;

    
}while($contador <=10);

echo '<hr>';

// FOR usado quando já se sabe antecipadamente o numero de repetições 

for($contador = 1; $contador <=15; $contador++){
    
        echo "contador é $contador <br>";

}

echo '<hr>';

//FOREACH (para cada item) é utilizado para percorrer listas (arrays)

$cores = ["Vermelho","Azul","Preto","Cinza"];

foreach ($cores as $indice=>$tipos){
    
    echo $indice . ":" .$tipos . "<br>";
}
