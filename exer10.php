<?php

function  MaiorNum ($valor,$valor2){
    if ($valor > $valor2){
        print " $valor é o maior valor digitado\n\n" ;
                $valor = $maior;
    }

  else {
      if($valor2 > $valor){
        print " $valor2 é o maior valor digitado\n\n";
            $valor2 = $maior;
     
    }

}
return $maior;
}   

print "Digite dois valores é diga qual é o maior entre eles .\n" ;
$valor =(int) fgets (STDIN) ;
$valor2 =(int) fgets (STDIN) ;

print "Agora qual foi o maior valor digitado. \n" ;
MaiorNum ($maior);

print "Fim Algoritmo" ;
