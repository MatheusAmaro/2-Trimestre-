<?php 

function variável ($x , $y){

if  ($x % $y == 0) { 
$div =  "1\n";
}
else{     
$div = "0\n";
} 
return ($div);
}

print "Escreva 1 valor para x:\n";
$x = (int) fgets (STDIN);
print "Escreva 1 valor para y:\n";
$y = (int) fgets (STDIN);

$div = variável ($x, $y);
print "$div";

print "Fim Algoritmo";
