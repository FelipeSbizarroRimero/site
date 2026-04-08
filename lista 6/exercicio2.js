let input = require("readline-sync");

let x = input.questionInt("Digite um numero: ");

let y = x;

while (x <= 20) {
    if (x >= y) {
        console.log("valor = " + x);
    }
    x++;
}