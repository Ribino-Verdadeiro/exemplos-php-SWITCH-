<?php
    /*Escreva um script PHP que use switch para implementar uma calculadora simples que 
    realiza operações de adição, subtração, multiplicação e divisão. */

    $menu = 4;

    switch($menu){
        
        case 1:
            $numero1 = 3;
            $numero2 = 2;
            $numero3 = $numero1 + $numero2;
            echo ' o resultado da sua soma é de: ' .$numero3;
            break;

        case 2:
            $numero1 = 5;
            $numero2 = 2;
            $numero3 = $numero1 - $numero2;
            echo ' o resultado da sua subtração é de: ' .$numero3;
            break;

        case 3:
            $numero1 = 5;
            $numero2 = 2;
            $numero3 = $numero1 * $numero2;
            echo ' o resultado da sua subtração é de: ' .$numero3;
            break; 

        case 4:
            $numero1 = 5;
            $numero2 = 2;
            $numero3 = $numero1 / $numero2;
            echo ' o resultado da sua subtração é de: ' .$numero3;
            break;

        default:
            echo'numero escolhido é invalido, por favor escolher entre 1 a 4';
            break; 
    }