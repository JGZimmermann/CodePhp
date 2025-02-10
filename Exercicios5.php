<?php
    // Escreva um programa que declare um array. O array deve ser preenchido automaticamente com números múltiplos de 5 até possuir 10 elementos. Depois disso imprima cada valor.
    function arrayMultipleOfFive()
    {
        $arr = range(5,50,5);
        foreach ($arr as $item){
            echo "$item \n" ;
        }
    }
    //arrayMultipleOfFive();

    //Entre com 10 números e armazene em um vetor. Ao final o programa deverá mostrar:
    function verifyNumbers()
    {
        $negatives = 0;
        $positives = 0;
        $even = 0;
        $odd = 0;
        for ($i = 0;$i < 10;$i++){
            $arr[$i] = readline("Digite um numero: ");
        }
        foreach ($arr as $value){
            if($value < 0){
                $negatives ++;
            } else {
                $positives ++;
            }
            if($value % 2 == 0){
                $even ++;
            } else{
                $odd ++;
            }
        }
        echo "A quantidade de números negativos foram: $negatives \nA quantidade de números positivos foram: $positives \nA quantidade de números pares foram: $even \nA quantidade de números ímpares foram: $odd";
    }
    //verifyNumbers();

    //Ler um vetor de 10 posições (aceitar somente números positivos). Escrever a seguir o valor do maior elemento do vetor e a respectiva posição que ele ocupa no vetor.
    function bigger()
    {
        $i = 0;
        while ($i < 10){
            $num = readline("Digite um numero positivo: ");
            if($num > 0){
                $arr[] = $num;
                $i++;
            } else{
                echo "Digite apenas numeros positivos!\n";
            }
        }
        $bigger = 0;
        foreach ($arr as $value){
            if($value > $bigger){
                $bigger = $value;
            }
        }
        $position = array_search($bigger,$arr);
        echo "O maior valor da array é $bigger e a posição dele na array é $position";
    }
    //bigger();

    //Ler um vetor A de 10 números. Após, ler mais um número e guardar em uma variável B. Armazenar em um vetor C o resultado de cada elemento de A multiplicado pelo valor B. Logo após, imprimir o vetor C.
    function multiplyArray($arr, $num)
    {
        foreach ($arr as $value){
            $arrMultiplied[] = $value * $num;
        }
        print_r($arrMultiplied);
    }
    //multiplyArray([1,2,3,4,5,6,7,8,9,10],2);

    //Faça um algoritmo para ler 10 números e armazenar em um vetor. Após a leitura total dos 10 números, o algoritmo deve escrever esses 10 números lidos na ordem inversa.
    function minor()
    {
        for ($i = 0;$i < 10;$i++){
            $arr[] = readline("Digite um numero: ");
        }
        rsort($arr);
        foreach ($arr as $value){
            echo "$value\n";
        }
    }
    //minor();

    //Crie dois vetores, cada um com capacidade para armazenar 10 números. Solicite ao usuário que entre com os valores nestes dois vetores. O programa deverá mostrar a multiplicação dos dados dos vetores, em cada um de suas respectivas posições. Ex. vetor_a[0] * vetor_b[0] e assim por diante.
    function arrayMultiply()
    {
        for ($i = 0;$i < 10;$i++){
            $arr1[] = readline("Digite um numero para a primeira array: ");
            $arr2[] = readline("Digite um numero para a segunda array: ");
        }
        for ($j = 0;$j < 10;$j++){
            echo "O resultado da multiplicação entre $arr1[$j] e $arr2[$j] é " . $arr1[$j] * $arr2[$j] . "\n";
        }
    }
    //arrayMultiply();