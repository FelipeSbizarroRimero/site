let input = require("readline-sync");

let numeros = [];

// Entrada de dados
for (let i = 0; i < 5; i++) {
    let num = input.questionInt("Digite um numero: ");
    numeros.push(num);
}

// Ordenação manual (crescente)
for (let i = 0; i < numeros.length; i++) {
    for (let j = i + 1; j < numeros.length; j++) {
        if (numeros[i] > numeros[j]) {
            let temp = numeros[i];
            numeros[i] = numeros[j];
            numeros[j] = temp;
        }
    }
}