<?php 

require_once "Classes/Aeronave.php";
require_once "Classes/Funcionarios.php";
require_once "Classes/Passageiros.php";
require_once "Classes/Verificador.php";
require_once "Classes/Voo.php";
require_once "Classes/Localizacao.php";
require_once "Classes/Capacidade.php";
require_once "Classes/Disponibilidade.php";

//Testando para ver se as classes funcionam
$funcionario1 = new Funcionarios("332", "João Almeida Silva", "Piloto");
$funcionario2 = new Funcionarios("334","Robervelta Carmen", "Coms-Bordo");
$aeronaveNova = new Aeronave("3452","Boing 777");
$passageiro1 = new Passageiros("Robervaldo","60070029","Brasileiro(a)","05/03/1990","Maleta-Azul");
$verificador = new Verificador();
$localizacaonova = new Localizacao("SP - São Paulo","Aeroporto Congonhas","SC - Santa Catarina","Aeroporto Internacional Florianopolis");
$voarvoarsubirsubir = new Voo(30401442); 
$capacidadenova = new Capacidade("Querosene, Cheio, 5000L","550 Lugares","Vôo Comercial, Bagagens, Maletas, 2T");
$disponibilidade = new Disponibilidade("Ensoralado",'10/02/2024');


//adcionando os passageiros e funcionarios para a aeronave.
$verificador->adcionarPassageiros($passageiro1); //add os passageiros no verificador.
$aeronaveNova->adcionarPassageiros($passageiro1); //add os passageiros na aeronave
$aeronaveNova->adcionarFuncionarios($funcionario1);// ^, porém com os funcionarios.
$aeronaveNova->adcionarFuncionarios($funcionario2);// ^.
$aeronaveNova->adcionarCapacidade($capacidadenova);// adcionando capacidade.
/*
//verificador para ver se o passageiro existe.
if($verificador->CheckIn($passageiro1->getCPF()) == true){ //pega o CPF da classe passageiros e verifica se existe no Verificador
    echo $aeronaveNova->listarPassageiros();
}else{
    echo "Erro, Passageiro não encontrado"; // caso não encontre.
}

echo $aeronaveNova->listarFuncionarios(); //lista os funcionarios!

echo $voarvoarsubirsubir->listarVoo($voarvoarsubirsubir,$aeronaveNova,$funcionario1,$localizacaonova);

echo $aeronaveNova->inspecionar($capacidadenova);
*/
echo ($disponibilidade->verificarDisponibilidade($aeronaveNova,$capacidadenova));

