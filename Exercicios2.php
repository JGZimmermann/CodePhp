<?php
    //Variável utilizada nos três primeiros exercicios - $num = readline();
    //Faça um algoritmo que leia um valor e escreva a mensagem “É maior que 10!” se o valor lido for maior que 10, caso contrário escrever “Não é maior que 10!”.
    function maiorMenor($num)
    {
        if($num > 10){
            echo "É maior que 10!";
        } else{
            echo "Não é maior que 10!";
        }
    }
    //maiorMenor($num);

    //Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).
    function positivoNegativo($num)
    {
        if($num >= 0){
            echo "$num é positivo";
        } else{
            echo "$num é negativo";
        }
    }
    //positivoNegativo($num);

    //As maçãs custam R$1,30 cada se forem compradas menos de uma dúzia, e R$1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e escreva o custo total da compra.
    function priceApples($num)
    {
        if ($num >= 12){
            echo "R$ $num";
        } else{
            $total = $num * 1.30;
            echo "R$ $total";
        }
    }
    //priceApples($num);

    //Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado). Escrever também a média calculada.
    function average($gradeA, $gradeB)
    {
        $finalGrade = ($gradeA + $gradeB) / 2;
        if($finalGrade >= 6){
            echo "Aluno(a) foi aprovado(a) com a média de $finalGrade";
        } else {
            echo "Aluno(a) não foi aprovado(a) com a média de $finalGrade";
        }
    }
    /*$gradeA = readline();
    $gradeB = readline();
    average($gradeA, $gradeB);*/

    ////Faça um algoritmo que leia o ano de nascimento de uma pessoa, calcule e mostre sua idade, e também informe se ela já pode votar (16 anos ou mais) e tirar a Carteira de Habilitação (18 anos ou mais).
    function legalAge($year)
    {
        $actualYear = date("Y");
        if($actualYear - $year >= 16){
            echo "Essa pessoa já pode votar";
            if($actualYear - $year >= 18){
                echo "\nEssa pessoa já pode dirigir";
            }
        } else{
            echo "Essa pessoa tem menos de 16 anos";
        }
    }
    //legalAge(2010);

    //Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.
    function bigger($numA, $numB)
    {
        if($numA > $numB){
            echo $numA;
        } else {
            echo $numB;
        }
    }
    //bigger(5,8);

    //Elabore um algoritmo que, dada a idade de um nadador, classifique-o em uma das categorias:
    function age($age)
    {
        $result = match (true){
            $age >= 18 => "Sênior",
            $age >= 14 => "Juvenil B",
            $age >= 11 => "Juvenil A",
            $age >= 8 => "Infantil B",
            default => "Infantil A"
        };

        echo $result;
    }
    //age(8);

    //Desenvolva um algoritmo que calcule o valor a ser pago por um produto, considerando o preço de etiqueta e a condição de pagamento. Utilize os códigos do quadro abaixo para ler a condição de pagamento e efetuar o cálculo adequado.
    function payment($code, $bill)
    {
        switch ($code) {
            case 1:
                $bill -= $bill * 0.1;
                break;
            case 2:
                $bill -= $bill * 0.05;
                break;
            case 3:
                break;
            case 4:
                $bill += $bill * 0.1;
        }
        echo "R$ $bill";
    }
    //payment(4, 100);

    //Desenvolva um algoritmo que, dado um número, verifique se ele está entre 30 e 90 ou é maior que 120 ou não se encaixa em nenhuma dessas condições.
    function between($num)
    {
        $result = match (true){
            $num > 120 => "O numero é maior que 120",
            $num >= 30 && $num <= 90 => "O numero está entre 30 e 90",
            default => "O numero não está nem entre 30 e 90 e nem é maior que 120"
        };

        echo $result;
    }
    //between(37);

    //Um comerciante usa margem de lucro de 45% se o valor de compra do produto for menor que R$20,00 e 30% nos demais casos. Dado o valor do produto, calcule o preço de venda.
    function profit($price)
    {
        if($price < 20){
            $price += $price * 0.45;
        } else {
            $price += $price * 0.3;
        }
        echo "R$ $price";
    }
    //profit(20);