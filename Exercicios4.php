<?php
    //Escreva um programa com quatro funções diferentes, cada uma recebe dois números inteiros e realiza uma operação matemática diferente (soma, subtração, multiplicação e divisão) e retorna o resultado. A escolha da função a ser executada é decidida por uma variável inteira que é preenchida no início do programa juntamente com as outras duas variáveis com os valores do cálculo. O resultado deve ser apresentado no final da execução. Quando a função de divisão é utilizada, ela deve retornar uma mensagem de erro se ocorrer divisão por zero.
    function sum($numA, $numB)
    {
        return $numA + $numB;
    }
    function sub($numA, $numB)
    {
        return $numA - $numB;
    }

    function multiplier($numA, $numB)
    {
        return $numA * $numB;
    }

    function division($numA, $numB)
    {
        if($numB == 0){
            return "Não é possível realizar divisão com 0";
        }
        return $numA / $numB;
    }

    function main()
    {
        echo "Qual operação você deseja fazer: \n 1 - Adição \n 2 - Subtração \n 3 - Multiplicação \n 4 - Divisão\n";
        $i = readline("Digite o numero da operação que deseja: ");
        $numA = readline("Digite o primeiro numero: ");
        $numB = readline("Digite o segundo numero: ");
        switch ($i){
            case 1:
                echo sum($numA, $numB);
                break;
            case 2:
                echo sub($numA, $numB);
                break;
            case 3:
                echo multiplier($numA, $numB);
                break;
            case 4:
                echo division($numA, $numB);
                break;
        }
    }
    //main();

    //Leia um número inteiro e retorne true se o número é múltiplo de 4 e false se o número não é múltiplo de 4.
    function divisibleByFour($num)
    {
        if($num % 4 == 0){
            echo "true";
            return true;
        } else{
            echo "false";
            return false;
        }
    }
    //divisibleByFour(80);

    //Leia um número inteiro e retorne true se o número é par e false se o número é ímpar.
    function evenOdd($num)
    {
        if($num % 2 == 0){
            echo "true";
            return true;
        } else{
            echo "false";
            return false;
        }
    }
    //evenOdd(25);

    //Leia 2 números inteiros positivos e apresente a soma dos n números existentes entre eles. Exemplo: 1 e 4 deve apresentar a soma de 2 e 3.
    function numbersBetween($init, $final)
    {
        $sum = 0;
        for ($i = $init + 1;$i < $final;$i++){
            $sum += $i;
        }
        echo $sum;
    }
    //numbersBetween(1,4);

    //Leia três números inteiros: a, b e c, onde a>1; e apresente a soma de todos os números inteiros de b até c que sejam divisíveis por a. Exemplo: Para os valores de entrada 2 (para a), 5 (para b) e 10 (para c), a soma será 6+8+10= 24.
    function sumBetween($numA, $numB, $numC)
    {
        $sum = 0;
        for ($i = $numB; $i <= $numC; $i++){
            if($i % $numA == 0){
                $sum += $i;
            }
        }
        echo $sum;
    }
    //sumBetween(2,5,10);

    //Leia a altura e o sexo de uma pessoa e apresente o seu peso ideal. Para homens, calcular e apresentar o peso ideal usando a fórmula peso ideal = 72.7 * altura - 58 e, para mulheres, peso ideal = 62.1 * altura - 44.7.
    function imc($height, $gender)
    {
        $weight = 0;
        if($gender == "M"){
            $weight = 72.7 * $height - 58;
            return $weight;
        } else{
            $weight = 62.1 * $height - 44.7;
            return $weight;
        }
    }
    //echo imc(1.70, "M");