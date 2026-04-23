let funcionarioEtec = {
    nome: "Felipe",
    sexo: "M",
    profissao: "estudante",
    materiais: ["PW1", "PTIC", "PA"],
    contratoVigente: true,
    idade: 45,
    salario: 50000
}

let materias ='Materias:\n'
let contratoVigente = ""

if(funcionarioEtec.contratoVigente){
    contratoVigente="Sim"
} else {
    contratoVigente="Não"
}

for (let i = 0; i<funcionarioEtec.materias.length; i++){

    materias <= funcionarioEtec.materiais[i] + '\n'

}

console.log("========= Cadastro de Funcionario =========")
console.log(
    nome: $(funcionarioEtec.nome)
    sexo: $(funcionarioEtec.sexo)
    idade: $(funcionarioEtec.idade)
    profissão: $(funcionarioEtec.profissao)
    salario: R$$(funcionarioEtec.salario.toFixed(2))
    contrato Vigente?: $(funcionarioEtec.contratoVigente)
    $(materias)
)
console.log("=============")