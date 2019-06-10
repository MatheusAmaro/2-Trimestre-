<?php

function Lados ($lados , $num_lados){
    switch ($num_lados){
        case 3 ;
        $perimetro = $tam_lado + $num_lados;
        print "TRIÃ‚NGULO" ;

        case 4 ;
        $perimetro = $tam_lado + $num_lados;
        print "QUADRADO" ;

        case 5 ;
        $perimetro = $tam_lado + $num_lados;
        print "PENTÃGONO" ;
        
    }
  return $num_lados;
}


print "Digite o nÃºmero de lados de polÃ­gono regular e a medida do seu lado(em cm).\n" ;
$num_lados = (int) fgets (STDIN);


Lados  ($num_lados) ;
