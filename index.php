<?php 

require_once "Classes/Aeronave.php";
require_once "Classes/Funcionarios.php";
require_once "Classes/Passageiros.php";
require_once "Classes/Verificador.php";

//Testando para ver se as classes funcionam
$funcionario1 = new Funcionarios("332", "João Almeida Silva", "Piloto");
$funcionario2 = new Funcionarios("334","Robervelta Carmen", "Coms-Bordo");

$aeronaveNova = new Aeronave("3452","Boing 777");

$passageiro1 = new Passageiros("Robervaldo","60070029","Brasileiro(a)","05/03/1990","Maleta-Azul");
$verificador = new Verificador();

//adcionando os passageiros e funcionarios para a aeronave.
$verificador->adcionarPassageiros($passageiro1); //add os passageiros no verificador.
$aeronaveNova->adcionarPassageiros($passageiro1); //add os passageiros na aeronave
$aeronaveNova->adcionarFuncionarios($funcionario1);// ^, porém com os funcionarios.
$aeronaveNova->adcionarFuncionarios($funcionario2);// ^.

//verificador para ver se o passageiro existe.
if($verificador->CheckIn($passageiro1->getCPF()) == true){ //pega o CPF da classe passageiros e verifica se existe no Verificador
    echo $aeronaveNova->listarPassageiros();
}else{
    echo "Erro, Passageiro não encontrado";
}

echo $aeronaveNova->listarFuncionarios(); //lista os funcionarios!

//Refiz o código que eu originalmente criei, para deixar ele mais completo, ainda preciso terminar as outras classes.


