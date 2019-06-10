<?php

function pesoideal ($altura,$genero){
    if ($genero == 1 ){
        print " Você do gênero feminino\n\n" ;
        $peso= (62.1 * $altura) - 44.7  ;  
    }

  else {
      if($genero == 2){
    print " Você do gênero masculino\n\n";
    $peso = (72.7 * $altura) - 58; ; 
 }

}
return $peso;
}   

print "Digite a sua altura.\n";

$altura = (float) fgets (STDIN) ;

print " Diga-nos qual é o seu gênero (Para isso digite 1 para feminino e 2 para masculino).\n" ;

$genero = (int) fgets (STDIN);

$pesoideal = pesoideal($altura,$genero);
print " Seu peso ideal é ".$pesoideal ;
