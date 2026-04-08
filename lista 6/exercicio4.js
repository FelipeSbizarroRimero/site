let input = require("readline-sync");

let y = input.questionInt("Digite um numero: ");
let x = 1;

while (x <= 10) {
    if (x >= 1) {
        console.log(y + " x " + x + " = " + (y * x));
    }
    x++;
}