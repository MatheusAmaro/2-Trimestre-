<php
function Divisao ($x , $y){
    if ($x % $y ==0){
    return 1;
}
else {
    return 0;
}

}
print "Digite qualquer número inteiro : \n" ;
$x = (int) fgets (STDIN);
print "Novamente digite qualquer outro número inteiro" ;
$y = (int) fgets (STDIN);
