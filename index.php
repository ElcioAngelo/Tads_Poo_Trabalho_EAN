<?php 

require_once "Classes/Aeronave.php";
require_once "Classes/Funcionarios.php";
require_once "Classes/Passageiros.php";
require_once "Classes/Verificador.php";
require_once "Classes/Voo.php";
require_once "Classes/Localizacao.php";
require_once "Classes/Capacidade.php";
require_once "Classes/Disponibilidade.php";
require_once "Classes/Porte.php";

//Testando para ver se as classes funcionam
$funcionario1 = new Funcionarios("332", "João Almeida Silva", "Piloto");
$funcionario2 = new Funcionarios("334","Robervelta Carmen", "Coms-Bordo"); 
$aeronaveNova = new Aeronave("3452","Boing 777",1);
$passageiro1 = new Passageiros("Robervaldo","60070029","Brasileiro(a)","05/03/1990","Maleta-Azul");
$verificador = new Verificador();
$localizacaonova = new Localizacao("SP - São Paulo","Aeroporto Congonhas","SC - Santa Catarina","Aeroporto Internacional Florianopolis");
$voarvoarsubirsubir = new Voo(30401442,'15:11','F-7'); 
$capacidadenova = new Capacidade("Cheio","550","Bagagens");
$disponibilidade = new Disponibilidade("Ensoralado",'10/02/2024');


$condicao = Porte::VerificarTamanho($aeronaveNova->getPorte());

#echo $condicao;
//adcionando os passageiros e funcionarios para a aeronave.
$verificador->adcionarPassageiros($passageiro1); //add os passageiros no verificador.
$aeronaveNova->adcionarPassageiros($passageiro1); //add os passageiros na aeronave
$aeronaveNova->adcionarFuncionarios($funcionario1);// ^, porém com os funcionarios.
$aeronaveNova->adcionarFuncionarios($funcionario2);// ^. 
$aeronaveNova->adcionarCapacidade($capacidadenova);// adcionando capacidade.
$verificador->adcionarFuncionarios($funcionario1);
$verificador->adcionarFuncionarios($funcionario2);


//verificador para ver se o passageiro existe.

if($verificador->CheckIn($passageiro1->getCPF()) == true){ //pega o CPF da classe passageiros e verifica se existe no Verificador
    echo $aeronaveNova->listarPassageiros($passageiro1);
}else{
   echo "Erro, Passageiro não encontrado"; // caso não encontre.
}
echo "/*********************************************************/" . "\n";

if($disponibilidade->verificarDisponibilidade($capacidadenova,$disponibilidade) == true){
    echo $voarvoarsubirsubir->listarVoo($voarvoarsubirsubir,$localizacaonova);
}else{
    echo "Voo cancelado";
}
echo "/*********************************************************/" . "\n";

echo $aeronaveNova->inspecionar($capacidadenova);

echo "/*********************************************************/" . "\n";

if($verificador->VerificarFuncionarios($funcionario1->getID()) == true){
   echo $aeronaveNova->listarFuncionarios();
    } else {
       echo "Funcionario Não encontrado!!";
    }
   
    echo "/*********************************************************/" . "\n";


    



