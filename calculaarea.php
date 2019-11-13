<?php

function area_triangulo($base,$altura){

    return ($base * $altura)/2;

}

echo(area_triangulo(10,15)).'<hr>';


function area_retangulo($base, $altura){
    return $base * $altura;

}
echo(area_retangulo(10,13)).'<hr>';


function area_circunferencia($r){
    return 3.14 * ($r*$r);

}

echo(area_circunferencia(3.14,2,2));

?>