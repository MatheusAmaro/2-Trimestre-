<?php
function calsoma ($n1 , $n2){
    $soma = 0;
    for ( $i = $n1 ; $i <= $n2 ; $i++ ){
        $soma = $soma + $i ;
    }
    return $soma;
}

print "Digite dois números e depois some eles : \n" ;

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);

$soma = calsoma ($n1 , $n2);
print "Soma dos números Ã© = $soma" . "\n" ;

print "Fim Algoritmo" ;
