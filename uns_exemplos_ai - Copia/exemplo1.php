<?php

$dias=1;

switch($dias){
    case 1:
        echo'domingo';
        break;

    case 2:
        echo'segunda-feira';
        break;

    case 3: 
        echo'terça-feira';
        break;

    case 4:
        echo'quarta-feira';
        break;

    case 5:
        echo'quinta-feira';
        break;

    case 6:
        echo'sexta-feira';
        break;

    case 7:
        echo'sabado';
        break;
        
    default:
        echo 'Por favor escolha um numero inteiro entre 1 a 7';
        break;
}