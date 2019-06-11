<?php

function calcular ($Ca, $Cb){
    $hip = sqrt (($Ca * $Ca) + ($Cb * $Cb));
    return ($hip);
}

print "Digite o valor do cateto A: ";
$Ca = (float) fgets (STDIN);


print "\n\nDigite o valor do cateto B: ";
$Cb = (float) fgets (STDIN);

$hip = calcular ($Ca, $Cb);
print "\n\nO valor da hipotenusa é : $hip";

print "Fim Algoritmo" ;
