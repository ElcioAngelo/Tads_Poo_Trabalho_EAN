<?php

class Verificador
{
   private $Passageiros = [];
   private $Funcionarios = [];

   public function adcionarPassageiros(Passageiros $Passageiros)//adciona os passageiros no verificador
    {
        $this->Passageiros[] = $Passageiros;
    }
    public function adcionarFuncionarios(Funcionarios $funcionarios){// adciona os funcionarios no verificador
        $this->Funcionarios[] = $funcionarios;
    }

   public function CheckIn($CPF)//verifica o cpf do passageiro
   {
    foreach ($this->Passageiros as $Passageiros) {//se o passageiro estiver no verificador, ele autoriza.
        if($Passageiros->getCPF() == $CPF){
            return true;
        }
    }
    return false; 
   }

   public function VerificarFuncionarios($id){
    foreach($this->Funcionarios as $funcionarios){
        if($funcionarios->getID() == $id){
            return true;
        }
    }
   }
}