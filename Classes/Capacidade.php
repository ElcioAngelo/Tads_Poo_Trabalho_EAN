<?php 

class Capacidade 
{
    private string $combustivel;
    private string $lugares;
    private string $cargo;

    public function __construct($combustivel,$lugares,$cargo)//inicializa as variaveis
    {
        $this->cargo = $cargo;
        $this->lugares = $lugares;
        $this->combustivel = $combustivel;
    }

    public function getCombustivel()//retorna o valor de combustivel
    {
        return $this->combustivel;
    }

    public function getLugares()//retorna o valor de lugares
    {
        return $this->lugares;
    }
    
    public function getCargo()//retorna o valor de cargo
    {
        return $this->cargo;
    }
}