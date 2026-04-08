let input = require("readline-sync");

let x = input.questionInt("Digite um numero: ");

while(x < 5){
}

let y = x;

while (y <= 20) {
    if (y % 2 == 0) {
        console.log("valor = " + y);
    }
    y++;
}