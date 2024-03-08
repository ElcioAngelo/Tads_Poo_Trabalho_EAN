<?php

class Voo 
{
    private int $id = 0;
    private $Aeronave = [];
    private $Localizacao = [];
    private string $horario;
    private string $portao;
    

    public function __construct(int $id, string $horario, string $portao)
    {
        $this->id = $id;
        $this->horario = $horario;
        $this->portao = $portao;
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

    public function getHorario():string
    {
        return $this->horario;
    }

    public function getPortao():string 
    {
        return $this->portao;
    }

    public function listarVoo(Voo $Voo,Localizacao $Localizacao){
        $ListarVoo = 'Identificação do Vôo: ' . $Voo->getId() . "\n" 
        . "Portão: " . $Voo->getPortao() . "\n" .
        "De: " . $Localizacao->getAeroporto() . " Do Estado de " . $Localizacao->getEstado() . "\n" 
        . "Destino a: " . $Localizacao->getDestino() . " | " . $Localizacao->getAeroportoDestino() . "\n" .
        "Horario: " . $Voo->getHorario() . "\n" .
        "Tempo de Vôo: " . $Localizacao->Cronometrar() . "\n";
        
        return $ListarVoo;
    }

}