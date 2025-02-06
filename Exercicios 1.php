<?php
//2. Escreva um algoritmo para os problemas a seguir:
    //a) Dados dois números inteiros (dividendo e divisor), apresentar o quociente e o resto.
    /*$firstNum = readline();
    $secondNum = readline();

    $intNum = (int)$firstNum / $secondNum;
    $restNum = (int)$firstNum % $secondNum;
    echo $intNum;
    echo $restNum;*/

    //b) A partir de quatro números que serão fornecidos, calcular a média ponderada, considerando os pesos 1, 2, 3 e 4 respectivamente.
    /*$firstNum = readline();
    $secondNum = readline();
    $thirdNum = readline();
    $fourthNum = readline();

    $result = (int) ($firstNum + $secondNum*2 + $thirdNum*3 + $fourthNum*4) / (1+2+3+4);

    echo $result;*/

    //c) Calcular o valor de um produto que sofreu reajuste de 1% (Aumento).
    /*$num = readline();
    $result = $num + ($num * 0.01);
    echo $result;*/

    //d) Sabendo-se que 100 quilowatts de energia custa um sétimo do salário mínimo, fazer um algoritmo que receba o valor do salário mínimo e a quantidade de quilowatts gasta por uma residência. Calcular: o valor em reais de cada quilowatt, o valor em reais a ser pago e o valor a ser pago com desconto de 10%.
    /*$minimumWage = readline();
    $usedWatts = readline();

    $pricePerQuilowatts = ($minimumWage * (1 / 7)) / 100;
    $totalPrice = $usedWatts * $pricePerQuilowatts;
    $discountedPrice = $totalPrice - ($totalPrice * 0.1);

    echo $pricePerQuilowatts . " " .$totalPrice . " " . $discountedPrice;*/

    //e) Dadas a base e a altura de um retângulo, calcular o perímetro, a área e a diagonal.
    /*$height = readline();
    $width = readline();

    $area = $height * $width;
    $perimeter = 2*($height + $width);
    $diagonal = sqrt(($height ** 2) + ($width ** 2));


    echo $area . " " . $perimeter . " " . $diagonal;*/

    //f) Calcular a área de um triângulo (dadas a base e a altura).
    /*$height = readline();
    $width = readline();

    $area = ($width * $height) / 2;
    echo $area;*/

    //g) Calcular a área de um losango (dadas as diagonais maior e menor).
    /*$height = readline();
    $width = readline();

    $area = ($width * $height) / 2;
    echo $area;*/

    //i) Uma revendedora de carros usados paga a seus vendedores um salário fixo mensal, além de uma comissão fixa por cada carro vendido e mais 5% do valor total das vendas realizadas pelo vendedor. Escreva um algoritmo que receba como entrada o número de carros vendidos pelo vendedor, o valor total das vendas, o salário fixo mensal e o valor da comissão por carro vendido. O algoritmo deve calcular e exibir o salário final do vendedor, que é a soma do salário fixo, da comissão por carro vendido, e 5% do valor total das vendas.
    /*$carsSold = readline();
    $totalSales = readline();
    $salary = readline();
    $commission = readline();

    $finalSalary = $salary + ($commission * $carsSold) + ($totalSales * 0.05);

    echo $finalSalary;*/

    //j) Dada a hora, calcular quantos minutos se passaram desde o início do dia.
    /*$hoursPassed = readline();
    //modelo de horário a ser passado: XX:XX
    $hours = $hoursPassed[0] . $hoursPassed[1];
    $minutes = $hoursPassed[3] . $hoursPassed[4];
    $hours = (int)$hours;
    $minutes = (int)$minutes;

    $hoursInMinutes = ($hours * 60) + $minutes;

    echo $hoursInMinutes;*/

    //k) Dado um número de três dígitos no formato CDU, mostre como resultado a sua inversão (formato UDC) (por exemplo, para 123, o resultado será 321).
    /*$string = readline();
    $newString = $string[2] . $string[1] . $string[0];

    echo $newString;*/

    //l) Dado um número de conta corrente com três dígitos, calcular seu dígito verificador, da seguinte forma:
    //Somar o número da conta pelo seu inverso (igual ao exercício k);
    /*$account = readline();
    $newAccount = $account[2] . $account[1] . $account[0];
    $newAccount = (int)$newAccount;
    $sumAccount = $account + $newAccount;
    //echo $sumAccount;
    //Multiplicar cada dígito da soma pela sua ordem posicional e somar estes resultados (primeiro * 1, segundo * 2, terceiro * 3, etc );
    $sumAccount = strval($sumAccount);
    $array = str_split($sumAccount);
    $multiplierAccount = ($array[0] * 1) + ($array[1] * 2) + ($array[2] * 3);

    //echo $multiplierAccount;
    //O último dígito desse resultado é o dígito verificador da conta.
    $multiplierAccount = strval($multiplierAccount);
    $lastValueArray = str_split($multiplierAccount);

    //echo $lastValueArray[count($lastValueArray) - 1];*/