let input = require("readline-sync");

let a = input.questionInt("Digite um numero: ");
let b = input.questionInt("Digite um numero: ");
let c = input.questionInt("Digite um numero: ");

let maior = Math.max(a, b, c);
let menor = Math.min(a, b, c);
let meio = a + b + c - maior - menor;

let x = meio;

while (x <= maior) {
    if (x >= meio) {
        console.log("valor = " + x);
    }
    x++;
}