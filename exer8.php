<?php
function DiaNum ($dia) {
 switch ($dia){
     case 1;
     echo "Segunda"."\n";
     break;

     case 2;
     echo "Terça"."\n";
     break;

     case 3;
     echo "Quarta"."\n";
     break;

     case 4;
     echo "Quinta"."\n";
     break;

     case 5;
     echo "Sexta"."\n";
     break;

     case 6;
     echo "Sábado"."\n";
     break;

     case 7;
     echo "Domingo"."\n";
     break;
 }
 return $dia;
}

print "Digite qualquer número 1 a 7 e veja qual dia da semana ele corresponde: \n" ;
$dia= (int) fgets (STDIN);

DiaNum ($dia);
