<?php 

class Capacidade 
{
    private string $combustivel;
    private string $lugares;
    private string $cargo;

    public function __construct($combustivel,$lugares,$cargo)
    {
        $this->cargo = $cargo;
        $this->lugares = $lugares;
        $this->combustivel = $combustivel;
    }

    public function getCombustivel()
    {
        return $this->combustivel;
    }

    public function getLugares()
    {
        return $this->lugares;
    }
    
    public function getCargo() 
    {
        return $this->cargo;
    }
}