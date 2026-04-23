let cadastroDeFuncionarios = {
    nome:"Felipe",
    sexo:"M",
    profissao:"vagabundo",
    materiais:["PW1","PTIC","PA"],
    contratoVigente:true,
    idade:45,
    salario:50.000,
}

let funcionarioEtec = {
    nome: "Felipe",
    sexo: "M",
    profissao: "estudante",
    materiais: ["PW1", "PTIC", "PA"],
    contratoVigente: true,
    idade: 45,
    salario: 50000
}

console.log("===== RELATÓRIO DO FUNCIONÁRIO =====")
console.log(`Nome: ${funcionarioEtec.nome}`)
console.log(`Sexo: ${funcionarioEtec.sexo}`)
console.log(`Profissão: ${funcionarioEtec.profissao}`)
console.log(`Idade: ${funcionarioEtec.idade}`)
console.log(`Salário: R$ ${funcionarioEtec.salario.toLocaleString('pt-BR')}`)
console.log(`Contrato vigente: ${funcionarioEtec.contratoVigente ? "Sim" : "Não"}`)
console.log(`Materiais: ${funcionarioEtec.materiais.join(", ")}`)
console.log("===================================")