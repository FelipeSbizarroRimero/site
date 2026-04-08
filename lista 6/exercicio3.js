let input = require("readline-sync");

let y = input.questionInt("Digite um numero: ");
let x = y;

while (x <= 20) {
    if (x >= y) {
        console.log("valor = " + x);
    }
    x++;
}