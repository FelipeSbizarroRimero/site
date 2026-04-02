let input = require("readline-sync");

let x = input.questionInt("Digite um numero: ");
let y = input.questionInt("Digite um numero: ");

while(x<=y){
    x++
    console.log(x)
    y++
}