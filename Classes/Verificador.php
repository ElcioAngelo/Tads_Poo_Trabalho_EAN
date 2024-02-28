<?php

class Verificador
{
   private $Passageiros = [];

   public function adcionarPassageiros(Passageiros $Passageiros) 
    {
        $this->Passageiros[] = $Passageiros;
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
}