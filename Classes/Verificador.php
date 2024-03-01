<?php

class Verificador
{
   private $Passageiros = [];
   private $Funcionarios = [];

   public function adcionarPassageiros(Passageiros $Passageiros) 
    {
        $this->Passageiros[] = $Passageiros;
    }
    public function adcionarFuncionarios(Funcionarios $funcionarios){
        $this->Funcionarios[] = $funcionarios;
    }

   public function CheckIn($CPF)
   {
    foreach ($this->Passageiros as $Passageiros) {
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