<?php 

class Aeronave
{
    private string $id;//identificação da aeronave
    private string $modelo;//modelo da aeronave
    private $Funcionarios = [];//vetor que representa a classe Funcionarios
    private $Passageiros = [];//vetor recebendo Passageiros
    private $Capacidade = [];//vetor recebendo Capacidade
    private int $aeronaveporte; //variavel para armazenar o tamanho da aeronave.

    public function __construct($id, $modelo,$porte)//inicialização da classe
    {
      $this->id = $id;
      $this->modelo = $modelo;
      $this->aeronaveporte = $porte;
    }

    public function adcionarCapacidade(Capacidade $Capacidade)//adcionar capacidade em aeronave.
    {
        $this->Capacidade[] = $Capacidade;
    }

    public function adcionarFuncionarios(Funcionarios $Funcionarios)// adcionar funcionarios na aeronave.
    {
        $this->Funcionarios[] = $Funcionarios;
    }

    public function listarFuncionarios()
    {
        $listaFuncionarios = "";
        foreach ($this->Funcionarios as $funcionario)//para cada funcionario, em funcionario 
        {//ele lista nesse For
            $listaFuncionarios .= "Id: " . $funcionario->getId() //apresentação dos funcionarios.
            . " Funcionário: " . $funcionario->getNome() 
            . " - Cargo: " . $funcionario->GetCargo() . "\n";
        }
        return $listaFuncionarios;
    }

    public function adcionarPassageiros(Passageiros $Passageiros)//adciona os passageiros na aeronave.
    {
        $this->Passageiros[] = $Passageiros;
    }

    public function listarPassageiros(Passageiros $passageiros)//para cada passageiro em Passageiro
    {
        foreach($this->Passageiros as $Passageiros){//ele o lista nesse for
            
            $listaPassageiros = "Nome: " . $Passageiros->getNome() . "\n" .
            "CPF: " . $Passageiros->getCPF() . "\n" .
            "Nacionalidade: " . $Passageiros->getNacionalidade() . "\n" .
            "Data De Nascimento: " . $Passageiros->getData_Nascimento() . "\n" .
            "Bagagen: " . $Passageiros->getBagagem() . "\n";
        }
        return $listaPassageiros;
    }
    public function inspecionar(Capacidade $capacidade)
    {//criei uma variavel para armazena os valores de capacidade nela, e listar os, organizado.
        $verificador = 
        "Assentos:  " . $capacidade->getLugares() . "\n" 
        . "Combustivel: " . $capacidade->getCombustivel() . "\n"
        . "Cargo: " . $capacidade->getCargo() . "\n";
       return $verificador;
    }
    
    public function getModelo()//retorna o modelo
    {
        return $this->modelo;
    }

    public function getId()//retorna o id
    {
        return $this->id;
    }

    public function getPorte()
    {
        return $this->aeronaveporte;
    }
}
