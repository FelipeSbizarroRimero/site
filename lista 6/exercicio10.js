let input = require("readline-sync");

let x = input.questionInt("Digite um numero: ");

while (x < 5 || x > 10) {
console.log("valor = " + x);
}