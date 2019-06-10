<?php

  function fartoCel ($tf){
  $tf = ($tf - 32) * 5/9;
  return $tf;
  }

  print "Digite um atemperatura em Fahrenheit; " ;
  $tf = (float) fgets (STDIN);
  $tf = fartoCel ($tf);
  print $tf . " Fahrenheit equivale Ã¡ " . $tf. "Celsius" ;
