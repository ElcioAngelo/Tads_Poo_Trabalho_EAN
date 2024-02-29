<?php

class Voo 
{
    private int $id = 0;
    private $Aeronave = [];
    private $Localizacao = [];

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }


    public function adcionarLocal(Localizacao $Localizacao)
    {
        $this->Localizacao[] = $Localizacao;
    }
    
    public function adcionarAeronave(Aeronave $Aeronave)
    {
        $this->Aeronave[] = $Aeronave;
    }

    public function listarVoo(Voo $Voo, Aeronave $Aeronave, Funcionarios $Funcionarios, Localizacao $Localizacao){

        $ListarVoo = 'Identificação do Vôo: ' . $Voo->getId() . "\n" 
        . " Aeronave: " . $Aeronave->getModelo() . " Brazillian Airlines " . "\n"
        . " Piloto: " . $Funcionarios->getNome()  . " Id: " . $Funcionarios->getID() . "\n" .
        " Aeroporto Inicial: " . $Localizacao->getAeroporto() . "Do Estado de " . $Localizacao->getEstado() . "\n" 
        . " Destino a: " . $Localizacao->getDestino() . " | " . $Localizacao->getAeroportoDestino();
        
        return $ListarVoo;
    }
}