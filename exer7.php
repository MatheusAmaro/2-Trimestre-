<?php
function MesNum ($mes) {
 switch ($mes){
     case 1;
     echo "Janeiro"."\n";
     break;

     case 2;
     echo "Fevereiro"."\n";
     break;

     case 3;
     echo "Março"."\n";
     break;

     case 4;
     echo "Abril"."\n";
     break;

     case 5;
     echo "Maio"."\n";
     break;

     case 6;
     echo "Junho"."\n";
     break;

     case 7;
     echo "Julho"."\n";
     break;

     case 8;
     echo "Agosto"."\n";
     break;
     
     case 9;
     echo "Setembro"."\n";
     break;

     case 10;
     echo "Outrubo"."\n";
     break;

     case 11;
     echo "Novembro"."\n";
     break;

     case 12;
     echo "Dezembro"."\n";
     break;
 }
return $mes;
}


print "Digite qualquer número entre 1 a 12, e veja qual mês ele corresponde.\n\n" ;
$mes= (int) fgets (STDIN);

MesNum ($mes);
