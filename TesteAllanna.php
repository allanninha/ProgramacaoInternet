<?php
// Função para somar dois números
function somar($a, $b) {
    return $a + $b;
}

// Verifica se o formulário foi enviado (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os valores inseridos pelo usuário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Chama a função para somar os números
    $resultado = somar($num1, $num2);

    // Exibe o resultado da soma
    echo "A soma de $num1 e $num2 é: $resultado\n";
} else {
    // Exibe um formulário simples no terminal
    echo "Digite o primeiro número: ";
    $num1 = trim(fgets(STDIN));

    echo "Digite o segundo número: ";
    $num2 = trim(fgets(STDIN));

    // Chama a função para somar os números
    $resultado = somar($num1, $num2);

    // Exibe o resultado da soma
    echo "A soma de $num1 e $num2 é: $resultado\n";
}
