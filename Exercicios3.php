<?php
    //Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem crescente.
    function decrease()
    {
        $num = 1;
        while ($num <= 10){
            echo "$num \n" ;
            $num++;
        }
    }
    //decrease();

    //Elaborar um programa que leia 10 valores inteiros e no final apresente a somatória e a média deles.
    function sumAverage()
    {
        $array = array();
        $num = 1;
        $sum = 0;
        while($num <= 10){
            $i = readline("Digite um numero: ");
            array_push($array, $i);
            $num++;
        }
        foreach ($array as $number){
            $sum += $number;
        }

        $average = $sum / count($array);

        echo "A soma dos valores é $sum e a média deles é $average";
    }
    //sumAverage();

    //Elaborar um programa que leia sucessivamente valores inteiros e no final apresente a somatória, a média e a quantidade de valores lidos. O programa deve ler os valores enquanto o usuário estiver fornecendo valores diferentes de zero.
    function differentThanZero()
    {
        $array = array();
        $num = 1;
        $sum = 0;
        while($num != 0){
            $num = readline("Digite um numero: ");
            array_push($array, $num);
        }
        foreach ($array as $number){
            $sum += $number;
        }

        $arraySize = count($array) - 1;

        $average = $sum / $arraySize;

        echo "A quantidade de numeros digitados foi $arraySize, a soma dos elementos é $sum e a médias dos elementos é $average";
    }
    //differentThanZero();

    //Elaborar um programa que apresente o resultado da soma e a média dos valores pares situados na faixa numérica de 50 a 70.
    function evenBetween()
    {
        $sum = 0;
        $count = 0;
        for ($i = 50;$i <= 70;$i++){
            if($i % 2 == 0){
                $sum += $i;
                $count++;
            }
        }
        $average = $sum / $count;
        echo "A soma dos valores pares é $sum e a média é $average";
    }
    //evenBetween();

    //Elaborar um programa que leia valores inteiros até que o valor zero seja informado. No final deve ser apresentado o maior e o menor valor fornecido pelo usuário.
    function biggerSmaller()
    {
        $num = 1;
        $bigger = 0;
        $smaller = 0;
        while($num != 0){
            $num = readline("Digite um numero: ");
            if($smaller == 0){
                $smaller = $num;
            }
            if($num > $bigger){
                $bigger = $num;
            } if($num < $smaller && $num != 0){
                $smaller = $num;
            }
        }
        echo "O menor numero digitado foi $smaller e o maior numero digitado foi $bigger";
    }
    biggerSmaller();