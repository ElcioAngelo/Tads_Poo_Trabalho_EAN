<?php 

class Aeronave
{
    private string $id;
    private string $modelo;
    private $Funcionarios = [];
    private $Passageiros = [];

    public function __construct($id, $modelo)
    {
      $this->id = $id;
      $this->modelo = $modelo;
    }

    public function adcionarFuncionarios(Funcionarios $Funcionarios) 
    {
        $this->Funcionarios[] = $Funcionarios;
    }

    public function listarFuncionarios() 
    {
        $listaFuncionarios = "";
        foreach ($this->Funcionarios as $funcionario) 
        {
            $listaFuncionarios .= "Id: " . $funcionario->getId() 
            . " Funcionário: " . $funcionario->getNome() 
            . " - Cargo: " . $funcionario->GetCargo() . "\n";
        }
        return $listaFuncionarios;
    }

    public function adcionarPassageiros(Passageiros $Passageiros)
    {
        $this->Passageiros[] = $Passageiros;
    }

    public function listarPassageiros()
    {
        foreach($this->Passageiros as $Passageiros){
            
            $listaPassageiros = "Nome: " . $Passageiros->getNome() . "\n" .
            "CPF: " . $Passageiros->getCPF() . "\n" .
            "Nacionalidade: " . $Passageiros->getNacionalidade() . "\n" .
            "Data De Nascimento: " . $Passageiros->getData_Nascimento() . "\n" .
            "Bagagen: " . $Passageiros->getBagagem() . "\n";
        }
        return $listaPassageiros;
    }
}
